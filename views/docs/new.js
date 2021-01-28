window.addEventListener('DOMContentLoaded', function () {
  const today = new Date();

  var picker = new Pikaday({
    keyboardInput: false,
    field: document.querySelector('.js-datepicker'),
    format: 'MMM D YYYY',
    theme: 'date-input',
    i18n: {
      previousMonth: "Prev",
      nextMonth: "Next",
      months: [
        "Ene",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec"
      ],
      weekdays: [
        "Sunday",
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday"
      ],
      weekdaysShort: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"]
    }
  });
  picker.setDate(new Date());

  var picker2 = new Pikaday({
    keyboardInput: false,
    field: document.querySelector('.js-datepicker-2'),
    format: 'MMM D YYYY',
    theme: 'date-input',
    i18n: {
      previousMonth: "Prev",
      nextMonth: "Next",
      months: [
        "Enero",
        "Febrero",
        "Marzo",
        "Abril",
        "Mayo",
        "Junio",
        "Julio",
        "Agosto",
        "Septiembre",
        "Octubre",
        "Noviembre",
        "Diciembre"
      ],
      weekdays: [
        "Sunday",
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday"
      ],
      weekdaysShort: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"]
    }
  });
  picker2.setDate(new Date());
});

function invoices() {
  return {
    factura: {
      numero: '12345',
      serie: 'F001',
      fecha: null,
      fechaEmision: null,
      clienteRazon: null,
      clienteDocumento: null,
      clienteDireccion: null,
      empresaRazon: 'MI EMPRESA SOCIEDAD ANONIMA',
      empresaDocumento: '10425162531',
      empresaDireccion: 'Ciudad Nueva Comite 40 Lote 15 Mz 213',
      items: [],
      gravadas: null,
      igv: null,
      total: null
    },
    items: [],
    invoiceNumber: 0,
    invoiceDate: '',
    invoiceDueDate: '',

    totalGST: 0,
    netTotal: 0,

    item: {
      id: '',
      name: '',
      unidad: 'UND',
      cantidad: null,
      precio_unitario_sin_igv: null,
      precio_unitario_con_igv: null,
      igv: 18,
      gst: 18,
      total: null,
    },

    billing: {
      name: '',
      address: '',
      extra: ''
    },
    from: {
      name: 'MI EMPRESA SOCIEDAD ANONIMA',
      address: '10425162531',
      extra: 'Ciudad Nueva Comite 40 Lote 15 Mz 213'
    },

    showTooltip: false,
    showTooltip2: false,
    openModal: false,

    addInvoice(){
      console.log(JSON.parse(JSON.stringify(this.factura)));
    },

    addItem() {
      this.factura.items.push({
        id: this.generateUUID(),
        name: this.item.name,
        unidad: this.item.unidad,
        cantidad: this.item.cantidad,
        precio_unitario_sin_igv: this.calculatePrecioUnitarioSinIgv(this.item.precio_unitario_con_igv),
        precio_unitario_con_igv: this.calculatePrecioUnitarioConIgv(this.item.precio_unitario_con_igv),
        // Los unicos datos que conosco son cantidad y precio_unitario_con_igv
        igv: this.calculateIGVLinea(this.item.cantidad,this.item.precio_unitario_con_igv),
        gst: this.calculateGST(this.item.gst, this.item.precio_unitario_con_igv),
        subtotal: this.calculateSubtotal(this.item.cantidad,this.item.precio_unitario_con_igv),
        total: this.calculateTotal(this.item.cantidad, this.item.precio_unitario_con_igv)
      })

      this.calculateGravadas();
      this.calculateIGVTotal();
      this.calculateFacturaTotal();
      this.itemTotal();
      this.itemTotalGST();

      this.item.id = '';
      this.item.name = '';
      this.item.unidad = 'UND';
      this.item.cantidad = null;
      this.item.precio_unitario_sin_igv = null;
      this.item.precio_unitario_con_igv = null;
      this.item.gst = 18;

      this.item.igv = 0;
      this.item.total = 0;
    },

    calculateFacturaTotal(){
      this.factura.total = parseFloat(this.factura.items.length > 0 ? this.factura.items.reduce((result, item) => {        
        return (parseFloat(result) + parseFloat(item.total));
      }, 0) : 0);      
      this.factura.total = this.numberFormat(parseFloat(this.factura.total.toFixed(2)));
    },

    calculatePrecioUnitarioConIgv(precio_unitario_con_igv){
      return parseFloat(precio_unitario_con_igv).toFixed(2);
    },

    calculateIGVTotal(){
      this.factura.igv = parseFloat(this.factura.items.length > 0 ? this.factura.items.reduce((result, item) => {        
        return (parseFloat(result) + parseFloat(item.igv));
      }, 0) : 0);      
      this.factura.igv = this.factura.igv.toFixed(2);
    },

    calculateGravadas() {      
      this.factura.gravadas = parseFloat(this.factura.items.length > 0 ? this.factura.items.reduce((result, item) => {        
        return (parseFloat(result) + parseFloat(item.subtotal));
      }, 0) : 0);      
      this.factura.gravadas = this.factura.gravadas.toFixed(2);
    },

    calculateTotal(cantidad, precio_unitario_con_igv){
      return this.numberFormat((cantidad * precio_unitario_con_igv).toFixed(2));
    },

    calculatePrecioUnitarioSinIgv(precio_unitario_con_igv){
      return this.numberFormat((precio_unitario_con_igv * 0.82).toFixed(2));
    },

    calculateSubtotal(cantidad,precio_unitario_con_igv){
      return this.numberFormat((cantidad * (precio_unitario_con_igv * 0.82)).toFixed(2));
    },

    calculateIGVLinea(cantidad,precio_unitario_con_igv) {
      return this.numberFormat((cantidad * (precio_unitario_con_igv - (precio_unitario_con_igv * 0.82))).toFixed(2));
    },

    deleteItem(uuid) {
      this.items = this.items.filter(item => uuid !== item.id);

      this.itemTotal();
      this.itemTotalGST();
    },

    itemTotal() {
      this.netTotal = parseFloat(this.factura.items.length > 0 ? this.factura.items.reduce((result, item) => {
        return parseFloat(result) + parseFloat(item.total);
      }, 0) : 0);
    },

    itemTotalGST() {
      this.totalGST = this.numberFormat(this.items.length > 0 ? this.items.reduce((result, item) => {
        return result + (item.gst * item.cantidad);
      }, 0) : 0);
    },

    calculateGST(GSTPercentage, itemRate) {
      return this.numberFormat((itemRate - (itemRate * (100 / (100 + GSTPercentage)))).toFixed(2));
    },

    generateUUID() {
      return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
        var r = Math.random() * 16 | 0,
          v = c == 'x' ? r : (r & 0x3 | 0x8);
        return v.toString(16);
      });
    },

    generateInvoiceNumber(minimum, maximum) {
      const randomNumber = Math.floor(Math.random() * (maximum - minimum)) + minimum;
      this.invoiceNumber = 'F001-' + randomNumber;
    },

    numberFormat(amount) {
      return amount.toLocaleString("es-PE", {
        style: "currency",
        currency: "PEN"
      });
    },

    printInvoice() {
      var printContents = this.$refs.printTemplate.innerHTML;
      var originalContents = document.body.innerHTML;

      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
    }
  }
}