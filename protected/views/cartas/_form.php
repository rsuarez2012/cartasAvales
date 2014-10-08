<?php
/* @var $this CartasController */
/* @var $model Cartas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cartas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo'); ?>
		<?php echo $form->textField($model,'codigo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php #echo $form->textField($model,'fecha'); 
				$this->widget('zii.widgets.jui.CJuiDatePicker',
            		array(
            			'model'=>$model,
            			'attribute'=>'fecha',
            			'language' => 'es',
            			'options' => array(
                    			'dateFormat'=>'yy-mm-dd',
                    			'constrainInput' => 'false',
                    			'duration'=>'fast',
                    			'showAnim' =>'slide',
	            			),
	        			)
				);
		?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'senor'); ?>
		<?php echo $form->textField($model,'senor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'senor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'titular'); ?>
		<?php echo $form->textField($model,'titular',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'titular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula_titular'); ?>
		<?php echo $form->textField($model,'cedula_titular',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'cedula_titular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'beneficiario'); ?>
		<?php echo $form->textField($model,'beneficiario',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'beneficiario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula_beneficiaro'); ?>
		<?php echo $form->textField($model,'cedula_beneficiaro',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'cedula_beneficiaro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'personal'); ?>
		<?php echo $form->textField($model,'personal',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'personal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigo_presupuestario'); ?>
		<?php echo $form->textField($model,'codigo_presupuestario',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'codigo_presupuestario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carta_a'); ?>
		<?php echo $form->textField($model,'carta_a',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'carta_a'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monto_aprobado'); ?>
		<?php echo $form->textField($model,'monto_aprobado',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'monto_aprobado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'presupuesto'); ?>
		<?php echo $form->textField($model,'presupuesto',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'presupuesto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monto_presupuesto'); ?>
		<?php echo $form->textField($model,'monto_presupuesto',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'monto_presupuesto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_presupuesto'); ?>
		<?php echo $form->textField($model,'fecha_presupuesto',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'fecha_presupuesto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diagnostico'); ?>
		<?php echo $form->textField($model,'diagnostico',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'diagnostico'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
