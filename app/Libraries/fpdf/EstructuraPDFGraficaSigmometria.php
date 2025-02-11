<?php
    namespace App\Libraries\fpdf;
    //include "fpdf.php";

    use App\Http\Controllers\AnalitoLaboratorioController;
    use App\Http\Controllers\SigmometriaController;

    class EstructuraPDFGraficaSigmometria extends \Codedge\Fpdf\Fpdf\Fpdf {

        var $B=0;
        var $I=0;
        var $U=0;
        var $HREF='';
        var $ALIGN='';
        var $widths;
        var $minimoResaltado = 8;
        var $aligns;
        var $con_inserto_incluido;
        public $gris_claro = [253, 253, 254];
        public $gris_oscuro = [240, 240, 241];
        public $borde_table = [174, 182, 191];
        public $fondo_table = [214, 219, 223];
        private $control_laboratorio;
        private $laboratorio;
        private $fecha_final;
        private $fecha_inicial;
        private $verde = array(117, 230, 117);
        private $amarillo = array(247, 247, 0);
        private $azul = array(144, 236, 236);
        private $rojo = array(255, 130, 130);
        private $blanco = array(255, 255, 255);

        private $anchoItem = 196 * 0.03;
        private $anchoMensurando = 196 * 0.1;
        private $anchoUnidades = 196 * 0.08;
        private $anchoFuente = 196 * 0.08;
        private $anchoColumnaNormal = 196 * 0.044375;
        private $constante_z;

        function SetWidths($w){
            //Set the array of column widths
            $this->widths=$w;
        }


        function SetAligns($a){
            //Set the array of column alignments
            $this->aligns=$a;
        }


        function Row($data){
            $factor = 4.2;
            $nb=0;
            for($i=0;$i<count($data);$i++)
                $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
            $h=$factor*$nb;
            $this->CheckPageBreak($h);
            for($i=0;$i<count($data);$i++){

                $this->SetFont("Arial", "", 4.5);
                $w=$this->widths[$i];
                $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
                $x=$this->GetX();
                $y=$this->GetY();
                $this->SetTextColor(40, 40, 40);
                $this->SetLineWidth(0.2);
                $this->SetDrawColor(222, 226, 230);

                if($i == 18){
                    if($data[$i] >= 1) { // Rojo
                        $this->SetTextColor(255, 53, 71);
                    }
                }

                if($i == 19){
                    if ($data[$i] == null){
                        $this->SetFillColor(200, 200, 200);
                    } else if($data[$i] < $this->constante_z) { // Rojo
                        $this->SetFillColor(255, 130, 130);
                    } else if($data[$i] >= $this->constante_z && $data[$i] < 3) { // Azul
                        $this->SetFillColor(144, 236, 236);
                    } else if($data[$i] >= 3 && $data[$i] < 5) { // Amarillo
                        $this->SetFillColor(247, 247, 0);
                    } else if($data[$i] >= 5) { // Verde
                        $this->SetFillColor(117, 230, 117);
                    }
                }

                $this->Cell($w,$h,"",1,0,0,1);
                $this->SetXY($x,$y);

                if($data[$i] == null){
                    $this->MultiCell($w,$factor,"N/A",0,$a,false);
                } else {
                    $this->MultiCell($w,$factor,$data[$i],0,$a,false);
                }

                $this->SetXY($x+$w,$y);
            }
            $this->Ln($h);
        }


        function RowEncabezado($data){
            //Calculate the height of the row
            $nb=0;
            for($i=0;$i<count($data);$i++)
                $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
            $h=3.5*$nb;
            //Issue a page break first if needed
            $this->CheckPageBreak($h);
            //Draw the cells of the row
            for($i=0;$i<count($data);$i++)
            {

                $w=$this->widths[$i];
                $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
                //Save the current position
                $x=$this->GetX();
                $y=$this->GetY();
                //Draw the border
                // $this->SetFillColor(255, 255, 255);

                $this->SetTextColor(40, 40, 40);

                $this->SetLineWidth(0.2);
                $this->SetDrawColor(146, 169, 185);

                $this->Cell($w,$h,"",0,0,0,1);
                $this->SetXY($x,$y);

                if($data[$i] == "\n" || $data[$i] == "N/A\n"){
                    $this->SetTextColor(147,183,196);
                    $data[$i] = "N/A";
                } else {
                    $this->SetTextColor(40, 40, 40);
                }

                $this->MultiCell($w,3.5,$data[$i],0,$a,false);
                $this->Rect($x,$y,$w,$h);


                if($this->con_inserto_incluido){ // Si tiene el inserto incluido
                    if($i == 9 || $i == 16 || $i == 23){
                        $this->SetLineWidth(0.3);
                        $this->SetDrawColor(27, 100, 155);
                        $this->Line($x, $y, $x, $y + $h);
                    } else if($i == 28){
                        $this->SetLineWidth(0.3);
                        $this->SetDrawColor(27, 100, 155);
                        $this->Line($x + $w, $y, $x + $w, $y + $h);
                    }
                } else { // Si no va a estar el inserto
                    if($i == 9 || $i == 16){
                        $this->SetLineWidth(0.3);
                        $this->SetDrawColor(27, 100, 155);
                        $this->Line($x, $y, $x, $y + $h);
                    } else if($i == 22){
                        $this->SetLineWidth(0.3);
                        $this->SetDrawColor(27, 100, 155);
                        $this->Line($x + $w, $y, $x + $w, $y + $h);
                    }
                }


                $this->SetXY($x+$w,$y);
            }
            //Go to the next line
            $this->Ln($h);
        }


        function CheckPageBreak($h){
            //If the height h would cause an overflow, add a new page immediately
            if($this->GetY()+$h>$this->PageBreakTrigger)
                $this->AddPage($this->CurOrientation);
        }


        function NbLines($w,$txt){
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
                if($c==' ')
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


        function WriteHTML($html){
            //HTML parser
            $html=str_replace("\n",' ',$html);
            $a=preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
            foreach($a as $i=>$e)
            {
                if($i%2==0)
                {
                    //Text
                    if($this->HREF)
                        $this->PutLink($this->HREF,$e);
                    elseif($this->ALIGN=='center')
                        $this->Cell(0,3,$e,0,1,'C');
                    else
                        $this->Write(3,$e);
                }
                else
                {
                    //Tag
                    if($e[0]=='/')
                        $this->CloseTag(strtoupper(substr($e,1)));
                    else
                    {
                        //Extract properties
                        $a2=explode(' ',$e);
                        $tag=strtoupper(array_shift($a2));
                        $prop=array();
                        foreach($a2 as $v)
                        {
                            if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
                                $prop[strtoupper($a3[1])]=$a3[2];
                        }
                        $this->OpenTag($tag,$prop);
                    }
                }
            }
        }


        function OpenTag($tag,$prop){
            //Opening tag
            if($tag=='B' || $tag=='I' || $tag=='U')
                $this->SetStyle($tag,true);
            if($tag=='A')
                $this->HREF=$prop['HREF'];
            if($tag=='BR')
                $this->Ln(5);
            if($tag=='P')
                $this->ALIGN=$prop['ALIGN'];
            if($tag=='HR')
            {
                if( !empty($prop['WIDTH']) )
                    $Width = $prop['WIDTH'];
                else
                    $Width = $this->w - $this->lMargin-$this->rMargin;
                $this->Ln(2);
                $x = $this->GetX();
                $y = $this->GetY();
                $this->SetLineWidth(0.4);
                $this->Line($x,$y,$x+$Width,$y);
                $this->SetLineWidth(0.2);
                $this->Ln(2);
            }
        }


        function CloseTag($tag){
            //Closing tag
            if($tag=='B' || $tag=='I' || $tag=='U')
                $this->SetStyle($tag,false);
            if($tag=='A')
                $this->HREF='';
            if($tag=='P')
                $this->ALIGN='';
        }


        function SetStyle($tag,$enable){
            //Modify style and select corresponding font
            $this->$tag+=($enable ? 1 : -1);
            $style='';
            foreach(array('B','I','U') as $s)
                if($this->$s>0)
                    $style.=$s;
            $this->SetFont('',$style);
        }


        function PutLink($URL,$txt){
            //Put a hyperlink
            $this->SetTextColor(0,0,255);
            $this->SetStyle('U',true);
            $this->Write(5,$txt,$URL);
            $this->SetStyle('U',false);
            $this->SetTextColor(0);
        }


        function RoundedRect($x, $y, $w, $h, $r, $corners = '1234', $style = ''){
            $k = $this->k;
            $hp = $this->h;
            if($style=='F')
                $op='f';
            elseif($style=='FD' || $style=='DF')
                $op='B';
            else
                $op='S';
            $MyArc = 4/3 * (sqrt(2) - 1);
            $this->_out(sprintf('%.2F %.2F m',($x+$r)*$k,($hp-$y)*$k ));

            $xc = $x+$w-$r;
            $yc = $y+$r;
            $this->_out(sprintf('%.2F %.2F l', $xc*$k,($hp-$y)*$k ));
            if (strpos($corners, '2')===false)
                $this->_out(sprintf('%.2F %.2F l', ($x+$w)*$k,($hp-$y)*$k ));
            else
                $this->_Arc($xc + $r*$MyArc, $yc - $r, $xc + $r, $yc - $r*$MyArc, $xc + $r, $yc);

            $xc = $x+$w-$r;
            $yc = $y+$h-$r;
            $this->_out(sprintf('%.2F %.2F l',($x+$w)*$k,($hp-$yc)*$k));
            if (strpos($corners, '3')===false)
                $this->_out(sprintf('%.2F %.2F l',($x+$w)*$k,($hp-($y+$h))*$k));
            else
                $this->_Arc($xc + $r, $yc + $r*$MyArc, $xc + $r*$MyArc, $yc + $r, $xc, $yc + $r);

            $xc = $x+$r;
            $yc = $y+$h-$r;
            $this->_out(sprintf('%.2F %.2F l',$xc*$k,($hp-($y+$h))*$k));
            if (strpos($corners, '4')===false)
                $this->_out(sprintf('%.2F %.2F l',($x)*$k,($hp-($y+$h))*$k));
            else
                $this->_Arc($xc - $r*$MyArc, $yc + $r, $xc - $r, $yc + $r*$MyArc, $xc - $r, $yc);

            $xc = $x+$r ;
            $yc = $y+$r;
            $this->_out(sprintf('%.2F %.2F l',($x)*$k,($hp-$yc)*$k ));
            if (strpos($corners, '1')===false)
            {
                $this->_out(sprintf('%.2F %.2F l',($x)*$k,($hp-$y)*$k ));
                $this->_out(sprintf('%.2F %.2F l',($x+$r)*$k,($hp-$y)*$k ));
            }
            else
                $this->_Arc($xc - $r, $yc - $r*$MyArc, $xc - $r*$MyArc, $yc - $r, $xc, $yc - $r);
            $this->_out($op);
        }


        function _Arc($x1, $y1, $x2, $y2, $x3, $y3){
            $h = $this->h;
            $this->_out(sprintf('%.2F %.2F %.2F %.2F %.2F %.2F c ', $x1*$this->k, ($h-$y1)*$this->k,
                $x2*$this->k, ($h-$y2)*$this->k, $x3*$this->k, ($h-$y3)*$this->k));
        }


        function Header(){

            // APITool y Quik
            $this->Image(public_path('img/logoAPIT.png'),13,5,40);
            $this->Image(public_path('img/logo-quik.png'),182,6,23);

            // Linea divisora vertical
            $this->SetLineWidth(0.3);
            $this->SetDrawColor(150,150,150);
            $this->line(60,6,60,21);

            // Titulo Principal
            $this->SetFont('Arial','B',9);
            $this->SetFillColor(255,0,0);
            $this->SetXY(65,6);
            $this->Cell(150,4,utf8_decode("Informe de sigmometría analítica"), 0, 0, 'L',0);


            $this->SetFont('Arial','',8);
            $this->SetXY(65,10);
            $this->Cell(150,4,"Laboratorio: " . $this->laboratorio->num_laboratorio . " - ". $this->laboratorio->nom_laboratorio . " Sede: " . $this->laboratorio->nom_institucion . " - " . $this->laboratorio->nom_sede, 0, 0, 'L',0);

            $this->SetXY(65,14);
            $this->Cell(150,4,"Lote: " . $this->control_laboratorio->cod_lote . " " . $this->control_laboratorio->nom_control . " | " . $this->control_laboratorio->nom_matriz, 0, 0, 'L',0);

            $this->SetXY(65,18);
            $this->Cell(150,4,"Fecha inicial: $this->fecha_inicial Fecha final: $this->fecha_final", 0, 0, 'L',0);

            // Linea divisora vertical
            $this->SetLineWidth(0.7);
            $this->SetDrawColor(36, 113, 163);
            $this->line(0,26,220,26);

            $this->Ln(12);
            $this->SetX(10);

            // Adicionalmente si la pagina es 2 en adelante
            if($this->PageNo() >= 2) {

                // Titulo
                $this->Ln(10);
                $this->SetX(0);
                $this->SetTextColor(40, 40, 40);
                $this->SetFont('Arial','B',13);
                $this->Cell(216,5,utf8_decode("Detalle estadístico por analito"),0,0,'C',0);

                $this->SetFont('Arial','B',8);
                $this->Ln(10);
                $this->SetX(10);
                $this->SetTextColor(41, 67, 66);
                $this->SetFillColor(182, 196, 207);
                $this->SetLineWidth(0.2);
                $this->SetDrawColor(170, 184, 196);

                $this->Cell($this->anchoItem + $this->anchoMensurando + $this->anchoUnidades + $this->anchoFuente,5,"I",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal * 3,5,"II",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal * 4,5,"III",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal * 4,5,"IV",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal * 5,5,"V",1,1,'C',1);

                $this->SetFont('Arial','B',5);

                $this->Cell($this->anchoItem + $this->anchoMensurando + $this->anchoUnidades + $this->anchoFuente,5,utf8_decode("Información del analito"),1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal * 3,4,utf8_decode("Info. base de desempeño"),1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal * 4,4,utf8_decode("Análisis de desempeño imprecisión"),1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal * 4,4,utf8_decode("Análisis de desempeño de sesgo"),1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal * 5,4,utf8_decode("Cálculo SigET"),1,1,'C',1);

                $this->SetFont('Arial','B',5);

                $this->Cell($this->anchoItem,4,"1",1,0,'C',1);
                $this->Cell($this->anchoMensurando,4,"2",1,0,'C',1);
                $this->Cell($this->anchoUnidades,4,"3",1,0,'C',1);
                $this->Cell($this->anchoFuente,4,"4",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"5",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"6",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"7",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"8",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"9",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"10",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"11",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"12",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"13",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"14",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"15",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"16",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"17",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"18",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"19",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"20",1,1,'C',1);


                $this->SetFont('Arial','B',3.8);
                $this->Cell($this->anchoItem,4,"#",1,0,'C',1);
                $this->Cell($this->anchoMensurando,4,"Mensurando",1,0,'C',1);
                $this->Cell($this->anchoUnidades,4,"Unidades",1,0,'C',1);
                $this->Cell($this->anchoFuente,4,"Fuente",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"DIANA",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"Media LAB",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"D.E. LAB",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"CVa% mp",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"CV LAB",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"CVR",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"EAc LAB",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"SESGO% mp",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"SESGO L",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"SESGO R",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"Esc LAB",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"N",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"APS%",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"TE Lab",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"IET",1,0,'C',1);
                $this->Cell($this->anchoColumnaNormal,4,"Sigma",1,1,'C',1);

                $this->SetXY(10, 67);

            }
        }


        function CreateDocument($control_laboratorio, $laboratorio, $fecha_inicial, $fecha_final, $grafica_sigmometria){

            // Declaracion de valores principales
            $this->control_laboratorio = $control_laboratorio;
            $this->laboratorio = $laboratorio;
            $this->fecha_inicial = $fecha_inicial;
            $this->fecha_final = $fecha_final;

            $this->AliasNbPages();
            $this->SetAutoPageBreak(true,10);
            $this->AddPage();

            // Titulo
            $this->Ln(10);
            $this->SetX(0);
            $this->SetTextColor(40, 40, 40);
            $this->SetFont('Arial','B',13);
            $this->Cell(216,5,utf8_decode("Gráfica de sigmometría analítica"),0,0,'C',0);

            // Imagen de SigET
            $this->Image($grafica_sigmometria,30,48,156);

            $this->SetDrawColor(150,150,150);
            $this->SetLineWidth(0.3);
            $this->SetXY(30,48);
            $this->Cell(156,140,"",1,0,'C',0);

            // Titulos de tablas resumen
            $this->SetFont('Arial','B',9);
            $this->SetXY(20,200);
            $this->Cell(100,4,utf8_decode("Resumen del desempeño sigma"),0,0,'C',0);
            $this->SetXY(127,200);
            $this->Cell(76,4,"Cumplimiento de valores IET",0,0,'C',0);


            // Fila 1 - RESUMEN DEL DESEMPEÑO
            $this->SetDrawColor(200,200,200);
            $this->SetLineWidth(0.2);
            $this->SetFont('Arial','B',9);
            $this->SetXY(20,206);
            $this->Cell(20,5,">= 5",1,0,'C',0);
            $this->Cell(20,5,">= 3 ^ < 5",1,0,'C',0);
            $this->Cell(20,5,">= Z ^ < 3",1,0,'C',0);
            $this->Cell(20,5,"< Z",1,0,'C',0);
            $this->Cell(20,5,"Total",1,0,'C',0);

            // Fila 1 - Cumplimiento de valores IET
            $this->SetDrawColor(200,200,200);
            $this->SetLineWidth(0.2);
            $this->SetFont('Arial','B',9);
            $this->SetXY(135,206);
            $this->Cell(20,5,">= 1",1,0,'C',0);
            $this->Cell(20,5,"< 1",1,0,'C',0);
            $this->Cell(20,5,"Total",1,0,'C',0);

            $this->SetFont('Arial','',9);

            // Fila 2 - RESUMEN DEL DESEMPEÑO
            $this->SetDrawColor(200,200,200);
            $this->SetLineWidth(0.2);
            $this->SetXY(20,211);

            $sigmometriaC = new SigmometriaController();
            $array_final = $sigmometriaC->getValoresByControlLaboratorioLite($this->control_laboratorio->id_control_laboratorio, $this->fecha_inicial, $this->fecha_final);

            $conteos = $array_final["consenso"]["conteo"];
            $porcentajes = $array_final["consenso"]["porcentaje"];
            $conteos_iet = $array_final["iet"]["conteo"];
            $porcentajes_iet = $array_final["iet"]["porcentaje"];

            $this->SetFillColor($this->verde[0],$this->verde[1],$this->verde[2]);
            $this->Cell(20,5,$conteos["verde"],1,0,'C',1);
            $this->SetFillColor($this->amarillo[0],$this->amarillo[1],$this->amarillo[2]);
            $this->Cell(20,5,$conteos["amarillo"],1,0,'C',1);
            $this->SetFillColor($this->azul[0],$this->azul[1],$this->azul[2]);
            $this->Cell(20,5,$conteos["azul"],1,0,'C',1);
            $this->SetFillColor($this->rojo[0],$this->rojo[1],$this->rojo[2]);
            $this->Cell(20,5,$conteos["rojo"],1,0,'C',1);
            $this->SetFillColor($this->blanco[0],$this->blanco[1],$this->blanco[2]);
            $this->Cell(20,5,$conteos["total"],1,0,'C',1);

            // Fila 2 - Cumplimiento de valores IET
            $this->SetXY(135,211);
            $this->SetFillColor($this->rojo[0],$this->rojo[1],$this->rojo[2]);
            $this->Cell(20,5,$conteos_iet["rojo"],1,0,'C',1);
            $this->SetFillColor($this->verde[0],$this->verde[1],$this->verde[2]);
            $this->Cell(20,5,$conteos_iet["verde"],1,0,'C',1);
            $this->SetFillColor($this->blanco[0],$this->blanco[1],$this->blanco[2]);
            $this->Cell(20,5,$conteos_iet["total"],1,0,'C',1);


            // Fila 3 - RESUMEN DEL DESEMPEÑO
            $this->SetDrawColor(200,200,200);
            $this->SetLineWidth(0.2);
            $this->SetFont('Arial','',9);
            $this->SetXY(20,216);
            $this->Cell(20,5,round($porcentajes["verde"],2) . "%",1,0,'C',0);
            $this->Cell(20,5,round($porcentajes["amarillo"],2) . "%",1,0,'C',0);
            $this->Cell(20,5,round($porcentajes["azul"],2) . "%",1,0,'C',0);
            $this->Cell(20,5,round($porcentajes["rojo"],2) . "%",1,0,'C',0);
            $this->Cell(20,5,"-",1,0,'C',0);

            // Fila 3 - Cumplimiento de valores IET
            $this->SetDrawColor(200,200,200);
            $this->SetLineWidth(0.2);
            $this->SetXY(135,216);
            $this->Cell(20,5,round($porcentajes_iet["rojo"],2) . "%",1,0,'C',0);
            $this->Cell(20,5,round($porcentajes_iet["verde"],2) . "%",1,0,'C',0);
            $this->Cell(20,5,"100%",1,0,'C',0);

            // Imagen de convenciones
            $this->Image(public_path('img/convenciones.png'),15,230,188);

            // Constante Z
            $this->SetTextColor(21, 67, 96);
            $this->SetFont('Arial','B',10);
            $this->SetXY(184.5,231);
            $this->Cell(20,5,"Z = ".$array_final["constante_z"],0,0,'C',0);
            $this->SetFont('Arial','',8);

            // Pagina de valores estadisticos
            $this->AddPage();

            $this->constante_z = $array_final["constante_z"];


            foreach($array_final["valores_estadisticos"] as $mensurando){

                $num = $mensurando["num_analito"];
                $nom_mensurando = $mensurando["analito"] . " " . $mensurando["nivel"];
                $unidades = $mensurando["unidades"];
                $fuente = $mensurando["nom_fuente_etmp"];
                $diana = $mensurando["diana"];
                $media = $mensurando["media"];
                $de = $mensurando["de"];
                $cv = $mensurando["cv"];
                $sesgo = $mensurando["sesgo"];
                $n_puntos = $mensurando["puntos_a"];
                $et_lab = $mensurando["et_lab"];
                $iet = $mensurando["iet"];
                $sigma = $mensurando["sigma"];

                if(gettype($mensurando["valor_limite"]) == "double" || "integer" || "float"){ // Cuando los valores de sesgo ya esten definidos
                    $sesgo_mp = $mensurando["sesgo_mp"];
                    $cv_mp = $mensurando["cv_mp"];
                    $etmp = floatval($mensurando["valor_limite"]);
                } else if(gettype($mensurando["valor_limite"]) == "string"){ // Cuando se deben calcular el SESGOmp y CVmp
                    $sesgo_mp = floatval($mensurando["valor_limite"]) / 2;
                    $cv_mp = $sesgo_mp / ($array_final["constante_z"]);
                    $etmp = floatval($mensurando["valor_limite"]);
                }

                $cvr = ((isset($cv) && isset($cv_mp)) ? ($cv / $cv_mp) : null) ;
                $sesgor = ((isset($sesgo) && isset($sesgo_mp)) ? ($sesgo / $sesgo_mp) : null);
                $eac_lab = ((isset($etmp) && isset($sesgo) && isset($cv)) ? ($etmp - abs($sesgo)) / ($cv * $array_final["constante_z"]) : null);
                $esc_lab = ((isset($etmp) && isset($sesgo) && isset($cv)) ? ($etmp - abs($sesgo)) / ($cv) : null);

                $this->SetWidths(array($this->anchoItem,$this->anchoMensurando,$this->anchoUnidades,$this->anchoFuente,$this->anchoColumnaNormal,$this->anchoColumnaNormal,$this->anchoColumnaNormal,$this->anchoColumnaNormal,$this->anchoColumnaNormal,$this->anchoColumnaNormal,$this->anchoColumnaNormal,$this->anchoColumnaNormal,$this->anchoColumnaNormal,$this->anchoColumnaNormal,$this->anchoColumnaNormal,$this->anchoColumnaNormal,$this->anchoColumnaNormal,$this->anchoColumnaNormal,$this->anchoColumnaNormal,$this->anchoColumnaNormal));
                $this->SetAligns(array("C","C","C","C","C","C","C","C","C","C","C","C","C","C","C","C","C","C","C","C"));
                $this->SetFont('Arial','',5);

                if($num % 2 == 0){
                    $this->SetFillColor(255, 255, 255);
                } else {
                    $this->SetFillColor(240, 240, 240);
                }


                $this->Row(array(
                    $num,
                    $nom_mensurando,
                    $unidades,
                    $fuente,
                    round($diana,3),
                    round($media,3),
                    round($de,3),
                    round($cv_mp,3),
                    round($cv,3),
                    round($cvr,3),
                    round($eac_lab,3),
                    round($sesgo_mp,3),
                    round($sesgo,3),
                    round($sesgor,3),
                    round($esc_lab,3),
                    $n_puntos,
                    round($etmp,3),
                    round($et_lab,3),
                    round($iet,3),
                    round($sigma,3)
                ));
            }
        }

        function Footer(){
            // Sin nada
        }

    }
