<?php
/* @var $this CartasController */
/* @var $data Cartas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo')); ?>:</b>
	<?php echo CHtml::encode($data->codigo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('senor')); ?>:</b>
	<?php echo CHtml::encode($data->senor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titular')); ?>:</b>
	<?php echo CHtml::encode($data->titular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_titular')); ?>:</b>
	<?php echo CHtml::encode($data->cedula_titular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beneficiario')); ?>:</b>
	<?php echo CHtml::encode($data->beneficiario); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula_beneficiaro')); ?>:</b>
	<?php echo CHtml::encode($data->cedula_beneficiaro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personal')); ?>:</b>
	<?php echo CHtml::encode($data->personal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigo_presupuestario')); ?>:</b>
	<?php echo CHtml::encode($data->codigo_presupuestario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carta_a')); ?>:</b>
	<?php echo CHtml::encode($data->carta_a); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto_aprobado')); ?>:</b>
	<?php echo CHtml::encode($data->monto_aprobado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('presupuesto')); ?>:</b>
	<?php echo CHtml::encode($data->presupuesto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto_presupuesto')); ?>:</b>
	<?php echo CHtml::encode($data->monto_presupuesto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_presupuesto')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_presupuesto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diagnostico')); ?>:</b>
	<?php echo CHtml::encode($data->diagnostico); ?>
	<br />

	*/ ?>

</div>