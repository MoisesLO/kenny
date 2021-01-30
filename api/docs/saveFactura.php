<?php

    // Conn
    include '../../views/config/conn.php';

    // get Post
    $data = json_decode(file_get_contents("php://input"), TRUE);

    // Query
    $documento = "INSERT INTO documentos SET 
      numero = '{$data['factura']['numero']}',
      serie = '{$data['factura']['serie']}',
      fecha = '{$data['factura']['fecha']}',
      cliente_razon = '{$data['factura']['clienteRazon']}',
      cliente_documento = '{$data['factura']['clienteDocumento']}',
      cliente_direccion = '{$data['factura']['clienteDireccion']}',
      empresa_razon = '{$data['factura']['empresaRazon']}',
      empresa_documento = '{$data['factura']['empresaDocumento']}',
      empresa_direccion = '{$data['factura']['empresaDireccion']}',
      gravadas = '{$data['factura']['gravadas']}',
      igv = '{$data['factura']['igv']}',
      total = '{$data['factura']['total']}'
    ";
	
	if($conn->query($documento)){
		echo "true";
	}else{
		echo "false";
	}
