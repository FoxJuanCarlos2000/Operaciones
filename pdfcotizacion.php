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
		//Imagen
		$this->Image("./img/logo2.png",9,10,65,56);
		//Asunto
		$this->SetXY(150,45);
		$this->Cell(100, 0, utf8_decode('Asunto: Cotización'), 0, 1, '');
		//Fecha
		$this->SetXY(130,50);
		$this->Cell(100, 0, utf8_decode('Manzanillo, Colima, México'), 0, 1, '');
		
	}
	//Pie de página
	function Footer()
	{
		//Posicion: a 1.5cm del final
		$this->SetY(-20);
		//Pie de pagina
		$this->SetFont('Arial','B',10);
		$this->Cell(0,0, utf8_decode('TRACING LOGISTICS MZ0'), 0, 1, 'C');
		$this->Cell(0,8, utf8_decode('CALLE OLIVO # 172 COL ROSA MORADA, SALAGUA, MANZANILLO, COLIMA, MEXICO. CP. 28869'), 0, 1, 'C');
		$this->Cell(0,2, utf8_decode('Tel: 3141205277 // 3141746504 E-mail: logisticoperacionestracing4@gmail.com | comercializaciontlm@gmail.com'),0,1,'C');
		//Arial italic 8
		$this->SetFont('Arial','I',8);
		//Número de página
		$this->Cell(0,6,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
	}
}
    $id=$_REQUEST['id'];
	include("conexion.php");
	$query = "SELECT * FROM cotizacion WHERE id = '$id'";
	$resultado = $cn->query($query);
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

while($row = $resultado->fetch_assoc()){

	$pdf->SetFont('Arial','B',12);
	$pdf->SetXY(13,70);
	$pdf->Cell(100, 0, utf8_decode('Fecha de emisión: '.$row['fecha']), 0, 1, '');
	$pdf->SetXY(13,80);
	$pdf->MultiCell(0,5, utf8_decode('° Por medio de la presente me dirijo a usted para saludarlo y a la vez proporcionarle la cotización, la cual menciono a continuación:'));

	//TABLA DE COTIZACIÓN
	//HEAD DE LA TABLA
	$pdf->SetXY(14,110);
	$pdf->Cell(40,10,'Origen-Destino',1,0,'C',0);
	$pdf->SetXY(54,110);
	$pdf->Cell(36,10,'Modalidad',1,0,'C',0);
	$pdf->SetXY(90,110);
	$pdf->Cell(36,10,'Tarifa',1,0,'C',0);
	$pdf->SetXY(126,110);
	$pdf->Cell(36,10,'Pistas',1,0,'C',0);
	$pdf->SetXY(162,110);
	$pdf->Cell(36,10,'Total',1,0,'C',0);
	//BODY DE LA TABLA
	$pdf->SetFont('Arial','',12);
	$pdf->SetXY(14,120);
	$pdf->MultiCell(40,10,$row['origendestino'],1);
	$pdf->SetXY(54,120);
	$pdf->MultiCell(36,10,$row['contenedor'],1);
	$pdf->SetY(100);
	$pdf->SetXY(90,120);
	$pdf->MultiCell(36,10,'$ '.$row['ptracing'],1);
	$pdf->SetXY(126,120);
	$pdf->MultiCell(36,10,'$ '.$row['pistaporcentaje'],1);
	$pdf->SetXY(162,120);
	$pdf->MultiCell(36,10,'$ '.$row['ptracspp'],1);
	//NOTAS
	$pdf->SetXY(13,170);
	$pdf->Cell(100, 0, utf8_decode('Nota: '), 0, 1, '');
	$pdf->SetFont('Arial','',12);
	$pdf->SetXY(13,175);
	$pdf->MultiCell(0,5, utf8_decode('° Cotización sujeta a la carga proporcionadas por nuestro cliente.'));
	$pdf->SetXY(13,180);
	$pdf->MultiCell(0,5, utf8_decode('° Los precios proporcionados por el transporte no incluyen IVA, por lo cual se le cobrara el 16% más del total.'));

	$pdf->SetXY(13,190);
	$pdf->MultiCell(0,5, utf8_decode('° Se cuenta con 12 horas para cargar y 12 horas para descarga, a partir de ese tiempo se cobrarán demoras por día.'));

	$pdf->SetXY(13,200);
	$pdf->MultiCell(0,5, utf8_decode('° Todos los clientes recientes requieren dar un 50% al cargar y 50% a contra entrega.'));

	$pdf->SetXY(13,205);
	$pdf->MultiCell(0,5, utf8_decode('° Programar carga con 12 Hrs. de anticipación.'));

	$pdf->SetXY(13,210);
	$pdf->MultiCell(0,5, utf8_decode('° Todas las mercancías y contenedores viajan por cuenta y resigo del cliente. En caso de requerir seguro favor de mencionarlo.'));

	$pdf->SetXY(13,220);
	$pdf->MultiCell(0,5, utf8_decode('° Los pesos que se mueven en fletes foráneos están basados en la NOM-012-SCT, por lo que cualquier multa por parte de la autoridad derivada del incumplimiento de ésta NOM, será responsabilidad única y exclusivamente del cliente.'));

	$pdf->SetXY(13,235);
	$pdf->MultiCell(0,5, utf8_decode('° Al sobrepasar los límites de peso y dimensiones establecidos por la NOM-012-SCT, se cobrara un extra de sobrepeso de $4,000 por contenedor.'));

	$pdf->SetXY(13,245);
	$pdf->MultiCell(0,5, utf8_decode('° Si la unidad sobre pasa el límite de peso que está establecido por la SCT se le cobrara un 10% más del valor del flete.'));
	//POLITICAS DE SERVICIO
	$pdf->SetXY(80,300);
	$pdf->MultiCell(0,20, utf8_decode('POLÍTICAS DE SERVICIO'), 0, 1, '');

	$pdf->SetXY(13,70);
	$pdf->MultiCell(0,5, utf8_decode('1) El seguro de la mercancía corre por cuenta del cliente, Tracing Logistic Manzanillo S DE RL DE C.V. no se hace responsable por robo y/o daños que pudiera sufrir la carga durante maniobras descarga y/o descargas, en tránsito, ni si la carga a solicitud del cliente permanece en nuestros patios. Tracing logistic Manzanillo S DE RL DE C.V. únicamente asegura la carga, cuando expresamente lo solicita el cliente.'));


	$pdf->SetXY(13,100);
	$pdf->MultiCell(0,5, utf8_decode('2) El servicio de Tracing Logistic Manzanillo S DE RL DE C.V.no incluye maniobras de carga ni de descarga. En caso de que el cliente las requiera, se establecerá su costo de cotización del servicio.'));

	$pdf->SetXY(13,120);
	$pdf->MultiCell(0,5, utf8_decode('3) La mercancía que entrega el cliente no es contada ni verificada por Tracing Logistic Manzanillo S. DE RL DE C.V. Lo que indica el cliente es lo que se declara en la carta porte. '));

	$pdf->SetXY(13,135);
	$pdf->MultiCell(0,5, utf8_decode('4) En el caso de materiales y residuos peligrosos, el cliente deberá informar el tipo de producto que maneja y proporcionar la hoja de emergencia, de acuerdo al reglamento transporte terrestre de materiales y residuos peligrosos y la Guía Norteamericana de Respuesta en caso de emergencia.'));

	$pdf->SetXY(13,160);
	$pdf->MultiCell(0,5, utf8_decode('5) La capacidad máxima por lo dispuesto por la SCT es de 23 toneladas, mismas que deberán estar distribuidas a las disposiciones legales vigentes; NOM-012-SCT-02-1995 en México. Si el cliente desea cargar un peso superior, deberá notificarlo.'));

	$pdf->SetXY(13,180);
	$pdf->MultiCell(0,5, utf8_decode('6) El costo del servicio de transporte no incluye paradas intermedias, ni repartos; en caso de que el cliente las requiera se establecerá su costo en la cotización del servicio.'));

	$pdf->SetXY(13,195);
	$pdf->MultiCell(0,5, utf8_decode('7) Los servicios de viajes urgentes, descargas directas de barco, servicios en horario extraordinario, fin de semana y/o días festivos, tendrán un sobreprecio de 10% sobre el valor del flete regular.'));

	$pdf->SetXY(13,214);
	$pdf->MultiCell(0,5, utf8_decode('8) Demora por día por remolque por 12 horas/$4,000 más impuestos.'));

	$pdf->SetXY(13,224);
	$pdf->MultiCell(0,5, utf8_decode('9) El costo del servicio incluye una entrega de vacío en un solo punto, si el servicio requiere trasladarse a otro punto de inspección o desvió, el segundo movimiento generara un costo de $1,800 + IVA por contenedor adicionales al costo del flete pactado.'));

	$pdf->SetXY(13,244);
	$pdf->MultiCell(0,5, utf8_decode('10) Estamos regidos por la NOM-087-SCT, por lo que los tiempos de transito deben consultar antes del servicio. Los pesos que se mueven en fletes foráneos están basados en la NOM-012-SCT, por lo que cualquier multa por parte de la autoridad derivada del incumplimiento de esta NOM, será responsabilidad única y exclusivamente del cliente. En caso de que la mercancía tenga sobrepeso, sobredimensión o ser carga peligrosa, la tarifa tiene incremento favor de consultarlo.'));

	$pdf->SetXY(80,300);
	$pdf->MultiCell(0,15, utf8_decode('POLÍTICAS DE SERVICIO'), 0, 1, '');

	$pdf->SetXY(13,70);
	$pdf->MultiCell(0,5, utf8_decode('11) La solicitud de servicio deberá ser con 48 horas de anticipación. Para realizar el servicio las maniobras deberán estar armadas completadas (doda, pedimento y cita) y deberá ser entregada 3 horas antes de la cita de carga. Cuando el servicio sea con tiempo extraordinario deberá notificarse con 24 horas de anticipación. El horario para recepción de maniobras será de 8:30 a 18:30 en nuestras instalaciones.'));


	$pdf->SetXY(13,100);
	$pdf->MultiCell(0,5, utf8_decode('TRACING LOGISTICS MANZANILLO S. DE RL DE C.V.'));










}
$pdf->Output(); 


 ?>