<?php
    namespace App\Libraries\fpdf;
    
    // include "fpdf.php";
    // use App\Libraries\fpdf\FPDF;
    
    use App\Http\Controllers\AnalitoLaboratorioController;

    class EstructuraPDFGraficaIntegrada extends \Codedge\Fpdf\Fpdf\Fpdf {
        
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


        function SetWidths($w){
            //Set the array of column widths
            $this->widths=$w;
        }

        
        function SetAligns($a){
            //Set the array of column alignments
            $this->aligns=$a;
        }

        
        function Row($data){
            //Calculate the height of the row
            $factor = 4.2;
            $nb=0;
            for($i=0;$i<count($data);$i++)
                $nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
            $h=$factor*$nb;
            //Issue a page break first if needed
            $this->CheckPageBreak($h);
            //Draw the cells of the row
            for($i=0;$i<count($data);$i++){

                if($i == 0){
                    $this->SetFont('Arial','B',5);
                } else if($i == 1) {
                    $this->SetFont('Arial','',5);
                }

                $w=$this->widths[$i];
                $a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
                $x=$this->GetX();
                $y=$this->GetY();
                $this->SetTextColor(40, 40, 40);
                $this->SetLineWidth(0.2);
                $this->SetDrawColor(146, 169, 185);
                $this->Cell($w,$h,"",0,0,0,1);
                $this->SetXY($x,$y);

                if($i == 0){
                    $this->MultiCell($w,$factor,$data[$i],"L",$a,false);
                } else if(($i+1) == count($data)) { // Si es el ultimo
                    $this->MultiCell($w,$factor,$data[$i],"R",$a,false);
                } else {
                    $this->MultiCell($w,$factor,$data[$i],0,$a,false);
                }

                $this->SetXY($x+$w,$y);
            }
            //Go to the next line
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
        
            $this->Image(public_path('img/logoAPIT.png'),13,5,40);
            $this->Image(public_path('img/logo-quik.png'),182,6,23);
            
            $this->SetLineWidth(0.3);
            $this->SetDrawColor(150,150,150);
            $this->line(60,6,60,21);
                        
            $this->SetFont('Arial','B',9);
            $this->SetFillColor(255,0,0);
            $this->SetXY(65,6);
            $this->Cell(150,4,utf8_decode("Informe de gráficas integradas y valores estadísticos"), 0, 0, 'L',0);

            $this->SetFont('Arial','',8);
            $this->SetXY(65,10);
            $this->Cell(150,4,"Laboratorio: " . $this->laboratorio->num_laboratorio . " - ". $this->laboratorio->nom_laboratorio . " Sede: " . $this->laboratorio->nom_institucion . " - " . $this->laboratorio->nom_sede, 0, 0, 'L',0);

            $this->SetXY(65,14);
            $this->Cell(150,4,"Lote: " . $this->control_laboratorio->cod_lote . " " . $this->control_laboratorio->nom_control . " | " . $this->control_laboratorio->nom_matriz . " | Z = " . round($this->laboratorio->constante_z, 2), 0, 0, 'L',0);

            $this->SetXY(65,18);
            $this->Cell(150,4,"Fecha inicial: $this->fecha_inicial Fecha final: $this->fecha_final", 0, 0, 'L',0);

            $this->SetLineWidth(0.7);
            $this->SetDrawColor(36, 113, 163);
            $this->line(0,26,220,26);

            $this->Ln(12);
            $this->SetX(10);
        }
            
        function CreateDocument($control_laboratorio, $laboratorio, $fecha_inicial, $fecha_final, $urlBases64){
            
            $this->control_laboratorio = $control_laboratorio;
            $this->laboratorio = $laboratorio;
            $this->fecha_inicial = $fecha_inicial;
            $this->fecha_final = $fecha_final;
            
            $this->AliasNbPages();
            $this->SetAutoPageBreak(true,5);
            $this->AddPage();
            
            $analitos_lab = AnalitoLaboratorioController::listByControlLaboratorio($this->control_laboratorio->id_control_laboratorio);
            $cont_mensurandos = 0;
            
            foreach($analitos_lab as $analito_lab){ // Recorrer cada uno de los analitos activos para el control de laboratorio
                
                $valores_estadisticos = AnalitoLaboratorioController::getValoresGeneralesAnalitoLite($analito_lab->id_analito_lab, $this->fecha_inicial, $this->fecha_final);

                for($nivel=1; $nivel<=$analito_lab->num_niveles; $nivel++){ // Recorrer cada uno de los niveles
                    
                    $cont_mensurandos++;

                    // Informacion del mensurando
                    $this->SetX(10);
                    $this->SetTextColor(40, 40, 40);
                    $this->SetFillColor(172, 195, 212);
                    $this->SetDrawColor(113, 181, 228);
                    $this->SetFont('Arial','B',8);
                    $this->Cell(19,5,"Mensurando: ",0,0,'L',0);
                    $this->SetFont('Arial','',8);
                    $this->Cell(70,5,$analito_lab->nom_analito . " (Nivel ".$nivel.")",0,1,'L',0);
                    
                    // Información extendida del analito 
                    $this->SetTextColor(40, 40, 40);
                    $this->SetFillColor(172, 195, 212);
                    $this->SetDrawColor(113, 181, 228);
                    $this->SetFont('Arial','',8);
                    $this->SetX(10);
                    $this->MultiCell(195,5,utf8_decode("Analizador: " . $analito_lab->nom_analizador . ",  Método: ". $analito_lab->nom_metodo . ", Reactivo: ". $analito_lab->nom_reactivo . ", Generación: ". $analito_lab->generacion_reactivo . ", Unidad: ". $analito_lab->nom_unidad . ", Temperatura: ". $analito_lab->nom_temperatura),0,'L',0);

                    // Grafica integrada del nivel
                    $this->Image($urlBases64["cont_graph_qci_" . $analito_lab->id_analito_lab . "_" . $nivel], 10, null, 196);
                    
                    /* *********************************** */
                    // Valores estadisticos
                    /* *********************************** */

                    // Primer nivel
                    $this->Ln(5);
                    $this->SetX(10);
                    $this->SetTextColor(40, 40, 40);
                    $this->SetFillColor(240, 240, 240);
                    $this->SetLineWidth(0.4);
                    $this->SetDrawColor(36, 113, 163);
                    $this->SetFont('Arial','B',8);
                    $this->Cell(21.5,5,"Nivel:","LTB",0,'C',1);
                    $this->Cell(21.5,5,"DIANA:","TB",0,'C',1);
                    $this->Cell(21.5,5,"ETmp%:","TB",0,'C',1);
                    $this->Cell(21.5,5,"Media:","TB",0,'C',1);
                    $this->Cell(21.5,5,"D.E.:","TB",0,'C',1);
                    $this->Cell(21.5,5,"C.V.:","TB",0,'C',1);
                    $this->Cell(21.5,5,"Sesgo:","TB",0,'C',1);
                    $this->Cell(21.5,5,"Sigma:","TB",0,'C',1);
                    $this->Cell(21.5,5,"N:","RTB",0,'C',1);
                    
                    // Segundo nivel
                    $this->Ln(5.3);
                    $this->SetX(10);
                    $this->SetTextColor(40, 40, 40);
                    $this->SetFillColor(255, 255, 255);
                    $this->SetLineWidth(0.2);
                    $this->SetDrawColor(180,180,180);
                    $this->SetFont('Arial','',8);
                    $this->Cell(21.5,5,$nivel,"LBR",0,'C',1);
                    $this->Cell(21.5,5,round($valores_estadisticos["valores_estadisticos"][$nivel]["diana"],3),"LBR",0,'C',1);
                    if($valores_estadisticos["limite_aps"]){
                        $this->Cell(21.5,5,$valores_estadisticos["limite_aps"]["valor_limite"],"LBR",0,'C',1);
                    }else{
                        $this->Cell(21.5,5,0,"LBR",0,'C',1);
                    }
                    $this->Cell(21.5,5,round($valores_estadisticos["valores_estadisticos"][$nivel]["media"],3),"LBR",0,'C',1);
                    $this->Cell(21.5,5,round($valores_estadisticos["valores_estadisticos"][$nivel]["de"],3),"LBR",0,'C',1);
                    $this->Cell(21.5,5,round($valores_estadisticos["valores_estadisticos"][$nivel]["cv"],3),"LBR",0,'C',1);
                    $this->Cell(21.5,5,round($valores_estadisticos["valores_estadisticos"][$nivel]["sesgo"],3),"LBR",0,'C',1);
                    

                    if($valores_estadisticos["valores_estadisticos"][$nivel]["sigma"] == null){
                        $this->SetFillColor(224,224,224);
                    } else if($valores_estadisticos["valores_estadisticos"][$nivel]["sigma"] < $valores_estadisticos["constante_z"]){
                        $this->SetFillColor(255,53,71);
                    } else if($valores_estadisticos["valores_estadisticos"][$nivel]["sigma"] >= $valores_estadisticos["constante_z"] && $valores_estadisticos["valores_estadisticos"][$nivel]["sigma"] < 3){
                        $this->SetFillColor(66,133,224);
                    } else if($valores_estadisticos["valores_estadisticos"][$nivel]["sigma"] >= 3 && $valores_estadisticos["valores_estadisticos"][$nivel]["sigma"] < 5){
                        $this->SetFillColor(255,187,51);
                    } else if($valores_estadisticos["valores_estadisticos"][$nivel]["sigma"] >= 5){
                        $this->SetFillColor(0,200,81);
                    }
                    
                    $this->Cell(21.5,5,round($valores_estadisticos["valores_estadisticos"][$nivel]["sigma"],3),"LBR",0,'C',1);
                    $this->SetFillColor(255, 255, 255);
                    $this->Cell(21.5,5,$valores_estadisticos["valores_estadisticos"][$nivel]["puntos_a"],"LBR",1,'C',1);


                    // Condicion final de agregar paginas
                    if(
                        ($cont_mensurandos % 2 == 0) &&
                        ($cont_mensurandos < (sizeof($analitos_lab) * $analito_lab->num_niveles))
                    ){ // Si es cada dos analitos y no es la ultima seccion
                        $this->AddPage();
                    } else if($cont_mensurandos % 2 != 0) {
                        $this->Ln(15);
                        $this->SetX(50);
                        $this->SetLineWidth(0.4);
                        $this->SetDrawColor(174, 182, 191);
                        $this->Cell(116,1,"","T",0,'L',0);
                        $this->Ln(15);
                    }


                }
            }
        }
        
        function Footer(){
            // Sin nada
        }

    }