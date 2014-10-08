<?php
/* @var $this CartasController */
/* @var $model Cartas */

$this->breadcrumbs=array(
	'Cartas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Cartas', 'url'=>array('index')),
	array('label'=>'Create Cartas', 'url'=>array('create')),
	//array('label'=>'Cntrol Cartas', 'url'=>array('imprimir')),
	array('label'=>'Update Cartas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Imprimir Cartas', 'url'=>array('pdf', 'id'=>$model->id)),
	array('label'=>'Delete Cartas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cartas', 'url'=>array('admin')),
);
?>

<h1>View Cartas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'codigo',
		'fecha',
		'senor',
		'titular',
		'cedula_titular',
		'beneficiario',
		'cedula_beneficiaro',
		'personal',
		'codigo_presupuestario',
		'carta_a',
		'monto_aprobado',
		'presupuesto',
		'monto_presupuesto',
		'fecha_presupuesto',
		'diagnostico',
	),
)); ?>
