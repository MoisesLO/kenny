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
    items: [],
    invoiceNumber: 0,
    invoiceDate: '',
    invoiceDueDate: '',

    totalGST: 0,
    netTotal: 0,

    item: {
      id: '',
      name: '',
      unidad: '',
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

    addItem() {
      this.items.push({
        id: this.generateUUID(),
        name: this.item.name,
        unidad: this.item.unidad,
        cantidad: this.item.cantidad,
        precio_unitario_con_igv: this.item.precio_unitario_con_igv,
        igv: this.calculateIGV(),
        gst: this.calculateGST(this.item.gst, this.item.precio_unitario_con_igv),
        total: this.item.cantidad * this.item.precio_unitario_con_igv
      })

      this.itemTotal();
      this.itemTotalGST();

      this.item.id = '';
      this.item.name = '';
      this.item.unidad = '';
      this.item.cantidad = null;
      this.item.precio_unitario_sin_igv = 0;
      this.item.precio_unitario_con_igv = null;
      this.item.gst = 18;

      this.item.igv = 0;
      this.item.total = 0;
    },


    calculateIGV() {

    },

    deleteItem(uuid) {
      this.items = this.items.filter(item => uuid !== item.id);

      this.itemTotal();
      this.itemTotalGST();
    },

    itemTotal() {
      this.netTotal = this.numberFormat(this.items.length > 0 ? this.items.reduce((result, item) => {
        return result + item.total;
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