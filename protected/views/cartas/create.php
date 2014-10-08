<?php
/* @var $this CartasController */
/* @var $model Cartas */

$this->breadcrumbs=array(
	'Cartases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cartas', 'url'=>array('index')),
	array('label'=>'Manage Cartas', 'url'=>array('admin')),
);
?>

<h1>Create Cartas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>