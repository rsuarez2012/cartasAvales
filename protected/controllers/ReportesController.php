<?php

class ReportesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','imprimir','control'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','imprimir'),
				'users'=>array('admin'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','pdf'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
			//array('allow', 'actions'=>array()
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Cartas;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Cartas']))
		{
			$model->attributes=$_POST['Cartas'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Cartas']))
		{
			$model->attributes=$_POST['Cartas'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		//$dataProvider=new CActiveDataProvider('Cartas');
		//$this->render('index',array(
		//	'dataProvider'=>$dataProvider,
		$this->render('index');
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Cartas('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Cartas']))
			$model->attributes=$_GET['Cartas'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionPdf($id)
    {
        $this->render('pdf',array(
        'model'=>$this->loadModel($id),
        ));
    }
	public function actionImprimir()
    {
	$pdf = Yii::createComponent('application.extensions.MPDF54.mpdf');
	$dataProvider = $_SESSION['fecha']->getData();
	$contador=count($dataProvider);
       
        $fecha = date("d-m-Y");
	$html.=' <link rel="stylesheet" type="text/css" href="'.Yii::app()->request->baseUrl.'/css/pdf.css" />

    <table align="center"><tr>
    <td align="center"><b>CONTROL DE CARTAS EMITIDAS</b></td>
    </tr></table>
    Total Resultados: '.$contador.'
        <table repeat_header="1" cellpadding="1" cellspacing="1" width="100%" border="1">
            <tr style="background-color: #f6eb9f;text-align:center;">
                <td width="80px" align="center">Codigo</td>
                <td width="80px" align="center">Fecha</td>
                <td width="90px" align="center">Tipo de Personal</td>
                <td width="130px" align="center">Titular</td>
                <td width="90px" align="center">Cedula Titular</td>
                <td width="130px" align="center">Beneficiario</td>
                <td width="90px" align="center">Cedula Beneficiario</td>
                <td width="130px" align="center">Centro de Atencion</td>
                <td width="130px" align="center">Diagnostico</td>
                <td width="100px" align="center">Monto Solicitado</td>
                <td width="100px" align="center">Monto Aprovado</td>
            </tr>';

		$i=0;
		$val=count($dataProvider);
		while($i<$val){
			$html.='
            			<tr>
                		<td>'.$dataProvider[$i]["codigo"].'</td>
                		<td>'.$dataProvider[$i]["fecha"].'</td>
                		<td>'.$dataProvider[$i]["personal"].'</td>
                		<td>'.$dataProvider[$i]["titular"].'</td>
                		<td>'.$dataProvider[$i]["cedula_titular"].'</td>
                		<td>'.$dataProvider[$i]["beneficiario"].'</td>
                		<td>'.$dataProvider[$i]["cedula_beneficiaro"].'</td>
                		<td>'.$dataProvider[$i]["senor"].'</td>
                		<td>'.$dataProvider[$i]["diagnostico"].'</td>
                		<td>'.$dataProvider[$i]["monto_presupuesto"].'</td>
                		<td>'.$dataProvider[$i]["monto_aprobado"].'</td>                		
            			';
    			$html.='</tr>'; $i++;
                        	}
    		$html.='</table>';

                          
        
	$mpdf=new mPDF();
	$mpdf->SetHTMLHeader($header);
	$mpdf->AddPage('L','','','','',9,9,24,10,5,5);
	$mpdf->SetFooter(' {DATE j/m/Y}|Página {PAGENO}/{nbpg}|Sistema de Contratos');
	$mpdf->WriteHTML($html,$fecha, $dataProvider, $contador);
	$mpdf->Output('Ficha-Contrato.pdf','I');
	exit;        

    }

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Cartas the loaded model
	 * @throws CHttpException
	 */

	public function loadModel($id)
	{
		$model=Cartas::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Cartas $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cartas-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	public function actionControl()
        {

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
                                $model=Cartas::model()->findAll();
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
                                }
                $html.='</table>'; 



                // Add Your data to make it in PDF 

        
                // After having PDF data, use this to make PDF output
        /*$pdf->writeHTML($html,true, false, false, false, '');
        $pdf->LastPage();
        //$pdf->Footer(' $fecha|Página {PAGENO}/{nbpg}|BISERTORCA');
        $pdf->Output('piezas.pdf', 'I');*/
	$mpdf=new mPDF();
	$mpdf->SetHTMLHeader($header);
	$mpdf->AddPage('L','','','','',20,20,50,40,13,7);
	$mpdf->SetFooter(' {DATE j/m/Y}|Página {PAGENO}/{nbpg}|Sistema de Contratos');
	$mpdf->WriteHTML($html);
	$mpdf->Output('Ficha-Contrato.pdf','I');
	exit;        

        }
}
