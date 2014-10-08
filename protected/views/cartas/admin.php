<?php
/* @var $this CartasController */
/* @var $model Cartas */

$this->breadcrumbs=array(
	'Cartas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Cartas', 'url'=>array('index')),
	array('label'=>'Create Cartas', 'url'=>array('create')),
	array('label'=>'Control Cartas', 'url'=>array('control')),
	array('label'=>'Cartas por Fecha', 'url'=>array('imprimir')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cartas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Cartas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cartas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'codigo',
		'fecha',
			/*array(
				'header'=>'Fecha Vigencia',
				'name'=>'fecha_vigencia',
				'value' => 'cambio_fecha($data->fecha_vigencia)' ,
				'htmlOptions'=>array('width'=>'180px'),
				//'class'=>'SYDateColumn',
			),*/
		'titular',
		'cedula_titular',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
