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
		$this->SetY(-15);
		//Arial italic 8
		$this->SetFont('Arial','I',8);
		//Número de página
		$this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
	}
}

$id=$_REQUEST['id'];
include("conexion.php");
$query = "SELECT * FROM tarja WHERE id = '$id'";
$resultado = $cn->query($query);


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',20);
$pdf->Image("./img/logo2.png",9,10,65,56);
$pdf->SetXY(75,20);
$pdf->Cell(100, 0, utf8_decode('Tracing Logistics Mzo'), 0, 1, '');
$pdf->SetFont('Arial','',15);
$pdf->SetXY(75,28);
$pdf->Cell(100, 0, utf8_decode('R.F.C HESJ780510NP7'), 0, 1, '');
$pdf->SetXY(75,36);
$pdf->Cell(100, 0, utf8_decode('Calle Olivo #172, Rosa Morada, '), 0, 1, '');
$pdf->SetXY(75,44);
$pdf->Cell(100, 0, utf8_decode('Salagua Manzanillo C.P: 28869.'), 0, 1, '');
$pdf->SetXY(75,52);
$pdf->Cell(100, 0, utf8_decode('Tel: 333-1402'), 0, 1, '');

while($row = $resultado->fetch_assoc()){
	$pdf->SetTextColor(255,0,0);
	$pdf->SetXY(170,20);
	$pdf->Cell(100, 0, utf8_decode('Folio'), 0, 1, '');	
	$pdf->SetXY(168,25);
	$pdf->Cell(100,0, $row['folio'],0,1,'');	
	$pdf->SetTextColor(0,0,0);
	$pdf->SetFont('Arial','B',15);
	$pdf->SetXY(95,63);
	$pdf->Cell(100,0, utf8_decode('TARJA'),0,0,'');
	$pdf->SetFont('Arial','',12);
	$pdf->SetXY(16, 70);
	$pdf->Cell(100,0, utf8_decode('Agencia Aduanal: '.$row['aduana']),0,1,'');
	$pdf->SetXY(16, 75);
	$pdf->Cell(100,0, utf8_decode('No De Contenedor: '.$row['Ncontenedor']),0,1,'');
	$pdf->SetXY(16, 80);
	$pdf->Cell(100,0, utf8_decode('No. De sello (Inicial): '.$row['selloI']),0,1,'');
	$pdf->SetXY(16,85);
	$pdf->Cell(100,0, utf8_decode('Pedimento: '.$row['Npedimento']),0,1,'');
	$pdf->SetXY(16,90);
	$pdf->Cell(100,0, utf8_decode('Peso Declarado: '.$row['Pdeclarado']),0,1,'');
	$pdf->SetXY(16,95);
	$pdf->Cell(100,0, utf8_decode('No. Mercancías: '.$row['Nmercancias']),0,1,'');

	$pdf->SetXY(110, 70);
	$pdf->Cell(100, 0, utf8_decode('Fecha: '.$row['fecha']),0,1,'');	
	$pdf->SetXY(110, 75);
	$pdf->Cell(100,0, utf8_decode('No. De Bultos: '.$row['Nbultos']),0,1,'');
	$pdf->SetXY(110, 80);
	$pdf->Cell(100,0, utf8_decode('No. De Sello (Final): '.$row['selloF']),0,1,'');
	$pdf->SetXY(110,85);
	$pdf->Cell(100,0, utf8_decode('Dice Contener: '.$row['contener']),0,1,'');
	$pdf->SetXY(110,90);
	$pdf->Cell(100,0, utf8_decode('Buque: '.$row['buque']),0,1,'');
	$pdf->SetXY(110,95);
	$pdf->Cell(100,0, utf8_decode('Tipo de Mercancías: '.$row['Tmercancias']),0,1,'');

	$pdf->SetXY(16,110);
	$pdf->Cell(100,0, utf8_decode('Consolidación: '.$row['consolidacion']),0,1,'');
	$pdf->SetXY(16,115);
	$pdf->Cell(100,0, utf8_decode('Carga: '.$row['carga']),0,1,'');
	$pdf->SetXY(16,120);
	$pdf->Cell(100,0, utf8_decode('Traspaleo: '.$row['traspaleo']),0,1,'');
	$pdf->SetXY(16,125);
	$pdf->Cell(100,0, utf8_decode('Conteo: '.$row['conteo']),0,1,'');
	$pdf->SetXY(16,130);
	$pdf->Cell(100,0, utf8_decode('Etiquetado: '.$row['etiquetado']),0,1,'');

	$pdf->SetXY(110,110);
	$pdf->Cell(100,0, utf8_decode('Desconsolidación: '.$row['desconsolidacion']),0,1,'');
	$pdf->SetXY(110,115);
	$pdf->Cell(100,0, utf8_decode('Descarga: '.$row['descarga']),0,1,'');
	$pdf->SetXY(110,120);
	$pdf->Cell(100,0, utf8_decode('Revisión Previa: '.$row['revision']),0,1,'');
	$pdf->SetXY(110,125);
	$pdf->Cell(100,0, utf8_decode('Pedimento Num: '.$row['Pconsolidado']),0,0,'');
	$pdf->SetXY(110,130);
	$pdf->Cell(100,0, utf8_decode('Lugar de Maniobra: '.$row['Lmaniobra']),0,1,'');

	$pdf->SetXY(16, 150);
	$pdf->Cell(100,0, utf8_decode('Hora de Inicio: '.$row['Hinicio']),0,1,'');
	$pdf->SetXY(110, 150);
	$pdf->Cell(100,0, utf8_decode('Hora de Terminación: '.$row['Hterminacion']),0,1,'');
	$pdf->SetXY(16, 170);
	$pdf->SetTextColor(0,0,255);
	$pdf->MultiCell(0,5, utf8_decode('Observaciones: '.$row['observacion']));
	$pdf->SetTextColor(0,0,0);
	$pdf->SetXY(16, 200);
	$pdf->MultiCell(90,5, utf8_decode('Supervisor: '.$row['supervisor']),0,1,'');
	$pdf->SetXY(110, 200);
	$pdf->MultiCell(85,5, utf8_decode('Operador: '.$row['operador']),0,1,'');

}

$pdf->Output(); 

?>