<?php 

require './fpdf/fpdf.php';


/**
 * 
 */
class PDF extends FPDF
{
	//Encabezado de página
	function Header()
	{
		
		//Arial Bold 15
		$this->SetFont('Arial','B',15);
		//Movernos a la derecha
		$this->Cell(70);
		//Titulo
		
		//Salto de linea
		
	}
	//Pie de página
	function Footer()
	{
		//Posicion: a 1.5cm del final
		//$this->SetY(-15);
		//Arial italic 8
		//$this->SetFont('Arial','I',8);
		//Número de página
		//$this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
	}
}

$id=$_REQUEST['id'];
include("conexion.php");
$query = "SELECT * FROM eir WHERE id = '$id'";
$resultado = $cn->query($query);


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',15);
$pdf->Image("./img/logo2.png",9,10,50,50);
$pdf->SetXY(65,35);
$pdf->Cell(100, 0, utf8_decode('TRACING LOGISTICS MANZANILLO'), 0, 1, '');
$pdf->SetFont('Arial','',13);
$pdf->SetXY(65,45);
$pdf->Cell(100, 0, utf8_decode('RECIBO DE INTERCAMBIO DE EQUIPO'), 0, 1, '');


while($row = $resultado->fetch_assoc()){
	$pdf->SetTextColor(255,0,0);
	$pdf->SetXY(170,20);
	$pdf->Cell(100, 0, utf8_decode('Folio'), 0, 1, '');	
	$pdf->SetXY(168,25);
	$pdf->Cell(100,0,utf8_decode('N° '.$row['folio']) ,0,1,'');	
	$pdf->SetTextColor(0,0,0);
	$pdf->SetFont('Arial','',12);
	$pdf->SetXY(16,65);
	$pdf->Cell(100,0,utf8_decode('CONTENEDOR: '.$row['contenedor']) ,0,1,'');
	$pdf->SetXY(150,65);
	$pdf->Cell(100,0,utf8_decode('FECHA: '.$row['fecha']) ,0,1,'');
	$pdf->SetXY(16,75);
	$pdf->Cell(100,0,utf8_decode('EMBALAJE: '.$row['embalaje']) ,0,1,'');
	$pdf->SetXY(65,75);
	$pdf->Cell(100,0,utf8_decode('TIPO: '.$row['tipo']) ,0,1,'');
	$pdf->SetXY(100,75);
	$pdf->Cell(100,0,utf8_decode('DAÑADO: '.$row['danado']) ,0,1,'');
	$pdf->SetXY(145,75);
	$pdf->Cell(100,0,utf8_decode('L. NAVIERA: '.$row['naviera']) ,0,1,'');

	$pdf->SetXY(16,85);
	$pdf->Cell(100,0,utf8_decode('TRANSPORTE: '.$row['transporte']) ,0,1,'');
	$pdf->SetXY(65,85);
	$pdf->Cell(100,0,utf8_decode('PLACAS: '.$row['placas']) ,0,1,'');
	$pdf->SetXY(100,85);
	$pdf->Cell(100,0,utf8_decode('OR. / DEST: '.$row['origenDestino']) ,0,1,'');
	$pdf->SetXY(160,85);
	$pdf->Cell(100,0,utf8_decode('SELLO: '.$row['sello']) ,0,1,'');


	$pdf->Image("./img/contenedorformato.png",16,90,174,100);

	$pdf->SetXY(35,200);
	$pdf->Cell(100,0,utf8_decode('LIMPIEZA') ,0,1,'');
	$pdf->SetXY(35,210);
	$pdf->Cell(100,0,utf8_decode($row['limpieza']) ,0,1,'');

	$pdf->SetXY(70,195);
	$pdf->MultiCell(118,10,utf8_decode('OBSERVACIONES ENTRADA: '.$row['Oentrada']));
	$pdf->SetXY(70,205);
	$pdf->MultiCell(100,10,utf8_decode('OBERVACIONES SALIDA: '.$row['Osalida']));

	$pdf->SetXY(41,225);
	$pdf->Cell(0,0,utf8_decode('TRANSPORTISTA'));
	$pdf->SetXY(16,230);
	$pdf->MultiCell(85,5,utf8_decode('El equipo fue entragado en las condiciones de acuerdo a lo detallado en el presente.'));
	$pdf->SetXY(20,249);
	$pdf->Cell(85,0,utf8_decode($row['transportista']));
	$pdf->SetXY(16,253);
	$pdf->Cell(85,0,'',1);
	$pdf->SetXY(41,256);
	$pdf->Cell(85,0,'NOMBRE / FIRMA');


	$pdf->SetXY(140,225);
	$pdf->Cell(0,0,utf8_decode('DEPOSITO'));
	$pdf->SetXY(110,230);
	$pdf->MultiCell(85,5,utf8_decode('El equipo fue entragado en las condiciones de acuerdo a lo detallado en el presente.'));
	$pdf->SetXY(115,249);
	$pdf->Cell(85,0,utf8_decode($row['deposito']));
	$pdf->SetXY(110,253);
	$pdf->Cell(85,0,'',1);
	$pdf->SetXY(135,256);
	$pdf->Cell(85,0,'NOMBRE / FIRMA');

	$pdf->SetFont('Arial','',8);
	$pdf->SetXY(16,261);
	$pdf->MultiCell(180,3.1,utf8_decode('CERTIFICO QUE EL EQUIPO MENCIONADO FUE INSPECCIONADO SEGÚN SE MENCIONA Y QUE LOS RESUSTADOS DE DICHA INSPECCIÓN SON VERDADEROS, LA PARTE QUE RECIBE ACEPTA LA RESPONSABILIDAD, EL CUIDADO Y CONTROL DE DICHO EQUIPO DEBIENDOLO ENTREGAR EN LAS MISMAS CONDICIONES, SALVO EL BUEN USO Y DESGASTE NORMAL RECONOCIENDO SU RESPONSABILIDAD POR CUALQUIER DAÑO Y/O PERDIDA OCASIONADA, COMPROMETIENDOSE A REEMBOLSAR EN SU TOTALIDAD EL MONTO EN CUESTIÓN.'));




}




$pdf->Output(); 


 ?>