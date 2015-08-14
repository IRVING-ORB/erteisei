<?php
/* @var $this TBASIGNACIONESController */
/* @var $model TBASIGNACIONES */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbasignaciones-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMRE_RECURSO'); ?>
		<?php echo $form->textField($model,'NOMRE_RECURSO',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'NOMRE_RECURSO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FECHA_INI'); ?>
		<?php echo $form->textField($model,'FECHA_INI',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'FECHA_INI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FECHA_FIN'); ?>
		<?php echo $form->textField($model,'FECHA_FIN',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'FECHA_FIN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HORAS'); ?>
		<?php echo $form->textField($model,'HORAS',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'HORAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MONTO'); ?>
		<?php echo $form->textField($model,'MONTO',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'MONTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PK_TARIFA'); ?>
		<?php echo $form->textField($model,'PK_TARIFA',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PK_TARIFA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ESTATUS_RECURSO'); ?>
		<?php echo $form->textField($model,'ESTATUS_RECURSO',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ESTATUS_RECURSO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ESTATUS_ASIGNACION'); ?>
		<?php echo $form->textField($model,'ESTATUS_ASIGNACION',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'ESTATUS_ASIGNACION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PK_CLIENTE'); ?>
		<?php echo $form->textField($model,'PK_CLIENTE',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PK_CLIENTE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PK_CONTACTO'); ?>
		<?php echo $form->textField($model,'PK_CONTACTO',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PK_CONTACTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PK_PROYECTO'); ?>
		<?php echo $form->textField($model,'PK_PROYECTO',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'PK_PROYECTO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->