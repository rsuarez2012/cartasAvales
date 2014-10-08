<?php
/* @var $this CartasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cartases',
);

$this->menu=array(
	array('label'=>'Create Cartas', 'url'=>array('create')),
	array('label'=>'Manage Cartas', 'url'=>array('admin')),
	array('label'=>'Control Cartas', 'url'=>array('admin')),
);
?>

<h1>Cartas Avales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
