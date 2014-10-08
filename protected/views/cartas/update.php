<?php
/* @var $this CartasController */
/* @var $model Cartas */

$this->breadcrumbs=array(
	'Cartases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cartas', 'url'=>array('index')),
	array('label'=>'Create Cartas', 'url'=>array('create')),
	array('label'=>'View Cartas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Cartas', 'url'=>array('admin')),
);
?>

<h1>Update Cartas <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>