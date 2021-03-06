<?php
class PdfReportesEmpleados extends FPDF{

    var $widths;

var $aligns;

function SetWidths($w)

{

//Set the array of column widths

$this->widths=$w;

}

function SetAligns($a)

{

//Set the array of column alignments

$this->aligns=$a;

}

function fill($f)

{

//juego de arreglos de relleno

$this->fill=$f;

}

function Row($data)

{

//Calculate the height of the row

$nb=0;

for($i=0;$i<count($data);$i++)

$nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));

$h=7*$nb;

//Issue a page break first if needed

$this->CheckPageBreak($h);

//Draw the cells of the row

for($i=0;$i<count($data);$i++)

{

$w=$this->widths[$i];

$a=isset($this->aligns[$i]) ? $this->aligns[$i] : ‘L’;

//Save the current position

$x=$this->GetX();

$y=$this->GetY();

//Draw the border

$this->Rect($x,$y,$w,$h,$style);

//Print the text

$this->MultiCell($w,5,$data[$i],'LTR',$a,$fill);

//Put the position to the right of the cell

$this->SetXY($x+$w,$y);

}

//Go to the next line

$this->Ln($h);

}

function CheckPageBreak($h)

{

//If the height h would cause an overflow, add a new page immediately

if($this->GetY()+$h>$this->PageBreakTrigger)

$this->AddPage($this->CurOrientation);

}

function NbLines($w,$txt)

{

//Computes the number of lines a MultiCell of width w will take

$cw=&$this->CurrentFont['cw'];

if($w==0)

$w=$this->w-$this->rMargin-$this->x;

$wmax=($w-2*$this->cMargin)*1000/$this->FontSize;

$s=str_replace("\r",'',$txt);

$nb=strlen($s);

if($nb>0 and $s[$nb-1]=="\n")

$nb--;

$sep=-1;

$i=0;

$j=0;

$l=0;

$nl=1;

while($i<$nb)

{

$c=$s[$i];

if($c=="\n")

{

$i++;

$sep=-1;

$j=$i;

$l=0;

$nl++;

continue;

}

if($c=='')

$sep=$i;

$l+=$cw[$c];

if($l>$wmax)

{

if($sep==-1)

{

if($i==$j)

$i++;

}

else

$i=$sep+1;

$sep=-1;

$j=$i;

$l=0;

$nl++;

}

else

$i++;

}

return $nl;

}



	function Header(){
                         
	    $params = Parametros::singleton();
	    $this->SetFont('Arial','B',10);	 
            
            $this->Cell( 0, 7,utf8_decode("SISTEMA ESTRATÉGICO DE TRANSPORTE PÚBLICO"),0,1,'C');    
            $this->Cell( 0, 7,utf8_decode("SANTA MARTA - MAGDALENA"),0,1,'C');            
            $this->Cell( 0, 7,utf8_decode("REPORTE DE EMPLEADOS"),0,1,'C');
                         
	    	$this->Image('imagenes/logos/logo.jpg',22,13,35,16);           
	   

            $this->Line(17, 8, 340, 8);
            $this->Line(17, 32, 340, 32);    
            
            $this->Line(17, 8, 17, 32);
            $this->Line(340, 8, 340, 32);
             
            $this->Line(55, 8, 55, 32);
        
            
    $this->Ln();
            
    $this->Ln();
	}
	
	function Footer(){
		$params = Parametros::singleton();
		
	  	       $this->SetY(-23);
$this->SetFont('Arial','I',7);


 $this->Cell(0,6, utf8_decode("Equidad para todos. Primero los niños y las niñas."),0,1,'C');


$y = $this->GetY();

 $this->line('50', $y, '300', $y);




	    $this->SetFont('Arial','B',7);

            
            $datos_contacto = utf8_decode("Teléfono: (+57) 5 4317777 - Fax: (+57) 5 4317777 - Dirección: Calle 24 No. 3 - 99 Torre Empresarial 4.24 oficina 1202 Santa Marta - Magdalena");
            
            $this->Cell(0,4, $datos_contacto,0,1,'C');


	    $this->SetFont('Arial','B',7);

            $datos_contacto2 = utf8_decode("Email: solicitudpqr@setpsantamarta.gov.co - Horario de atención:Lunes a Viernes de 8 a.m. 12 p.m. y 2 p.m a 6 p.m.");
            
            $this->Cell(0,4, $datos_contacto2,0,0,'C');


	}   
  	
}

?>