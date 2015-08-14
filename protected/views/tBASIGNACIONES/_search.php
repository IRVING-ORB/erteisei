<?php
/* @var $this TBASIGNACIONESController */
/* @var $model TBASIGNACIONES */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_ASIGNACION'); ?>
		<?php echo $form->textField($model,'ID_ASIGNACION'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOMRE_RECURSO'); ?>
		<?php echo $form->textField($model,'NOMRE_RECURSO',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FECHA_INI'); ?>
		<?php echo $form->textField($model,'FECHA_INI',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FECHA_FIN'); ?>
		<?php echo $form->textField($model,'FECHA_FIN',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HORAS'); ?>
		<?php echo $form->textField($model,'HORAS',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MONTO'); ?>
		<?php echo $form->textField($model,'MONTO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PK_TARIFA'); ?>
		<?php echo $form->textField($model,'PK_TARIFA',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ESTATUS_RECURSO'); ?>
		<?php echo $form->textField($model,'ESTATUS_RECURSO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ESTATUS_ASIGNACION'); ?>
		<?php echo $form->textField($model,'ESTATUS_ASIGNACION',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PK_CLIENTE'); ?>
		<?php echo $form->textField($model,'PK_CLIENTE',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PK_CONTACTO'); ?>
		<?php echo $form->textField($model,'PK_CONTACTO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PK_PROYECTO'); ?>
		<?php echo $form->textField($model,'PK_PROYECTO',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->