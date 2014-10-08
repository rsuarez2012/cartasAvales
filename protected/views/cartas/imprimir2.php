<?
$pdf = Yii::createComponent('application.extensions.MPDF54.mpdf');       
        $fecha = date("d-m-Y");                          
        /*$pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor("");
        $pdf->SetTitle("Jurney Info");
        $pdf->SetSubject("Journey");
        $pdf->SetKeywords("TCPDF, PDF, example, test, guide");
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->AliasNbPages();
        $pdf->AddPage();*/

	$html='
	<table>
	<tr>
	<!---<td width="150"></td>-->
	<td width="150"><h1><img src="'.Yii::app()->request->baseUrl.'/images/logounerg.png" width="150" align="left"></h1></td>
	<td style="text-align:justify"><p style="font-size:7pt; color:#000000">REPÚBLICA BOLIVARIANA DE VENEZUELA<br>
	&nbsp;&nbsp;&nbsp;&nbsp;UNIVERSIDAD “RÓMULO GALLEGOS”<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vicerectorado Administrativo<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Direccion General de Administracion<br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Formato de Control de Cartas Avales Emitidas<br></td>
	</tr>
	</table>';
	//$fecha;
	$html.='	<b>Control de Cartas Avales</b><br>
	<table border="1" width="100%" style="font-family: serif; font-size: 12pt; color: #000000;">
	<tr style="background-color: #f6eb9f;text-align:center;">
    	<td width="130px" align="center"> <b>Codigo</b> </td>
    	<td width="130px" align="center"> <b>Fecha</b> </td>
    	<td width="130px" align="center"> <b>Tipo de Personal</b> </td>
    	<td width="130px" align="center"> <b>Titular</b> </td>
    	<td width="130px" align="center"> <b>Cedula Titular</b> </td>
    	<td width="130px" align="center"> <b>Beneficiario</b> </td>
    	<td width="130px" align="center"> <b>Cedula Beneficiario</b> </td>
    	<td width="130px" align="center"> <b>Centro de atencion de Salud</b> </td>
    	<td width="130px" align="center"> <b>Diagnostico</b> </td>
    	<td width="130px" align="center"> <b>Monto Solicitado o Presupuestado</b> </td>
    	<td width="130px" align="center"> <b>Monto Presupuestado</b> </td>
	</tr>';
                                /*$model=Cartas::model()->findAll();
                                if(!empty($model)){
                                  foreach($model as $data){
                                  $html.='<tr>
                                        <td>'.$data['id'].'</td>
                                        <td>'.$data['fecha'].'</td>
                                        <td>'.$data['personal'].'</td>
                                        <td>'.$data['titular'].'</td>
                                        <td>'.$data['cedula_titular'].'</td>
                                        <td>'.$data['beneficiario'].'</td>
                                        <td>'.$data['cedula_beneficiaro'].'</td>
                                        <td>'.$data['senor'].'</td>
                                        <td>'.$data['diagnostico'].'</td>
                                        <td>'.$data['monto_presupuesto'].'</td>
                                        <td>'.$data['monto_aprobado'].'</td>
                                    </tr>';
                                  }
                                }*/
                $html.='</table>'; 



                // Add Your data to make it in PDF 

        
                // After having PDF data, use this to make PDF output
        /*$pdf->writeHTML($html,true, false, false, false, '');
        $pdf->LastPage();
        //$pdf->Footer(' $fecha|Página {PAGENO}/{nbpg}|BISERTORCA');
        $pdf->Output('piezas.pdf', 'I');*/
	//$mpdf=new mPDF();
	$mpdf->SetHTMLHeader($header);
	$//mpdf->AddPage('L','','','','',20,20,50,40,13,7);
	//$mpdf->SetFooter(' {DATE j/m/Y}|Página {PAGENO}/{nbpg}|Sistema de Contratos');
	//$mpdf->WriteHTML($html);
	//$mpdf->Output('Ficha-Contrato.pdf','I');
	exit;        

$mpdf=new mPDF('win-1252','LETTER-L','','',9,9,24,10,5,5);
$mpdf->WriteHTML($html);
$mpdf->Output('Reporte_Contratos.pdf','D');
exit;
?>
