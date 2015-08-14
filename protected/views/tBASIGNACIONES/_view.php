<?php
/* @var $this TBASIGNACIONESController */
/* @var $data TBASIGNACIONES */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_ASIGNACION')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_ASIGNACION), array('view', 'id'=>$data->ID_ASIGNACION)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMRE_RECURSO')); ?>:</b>
	<?php echo CHtml::encode($data->NOMRE_RECURSO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA_INI')); ?>:</b>
	<?php echo CHtml::encode($data->FECHA_INI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA_FIN')); ?>:</b>
	<?php echo CHtml::encode($data->FECHA_FIN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HORAS')); ?>:</b>
	<?php echo CHtml::encode($data->HORAS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MONTO')); ?>:</b>
	<?php echo CHtml::encode($data->MONTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PK_TARIFA')); ?>:</b>
	<?php echo CHtml::encode($data->PK_TARIFA); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTATUS_RECURSO')); ?>:</b>
	<?php echo CHtml::encode($data->ESTATUS_RECURSO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTATUS_ASIGNACION')); ?>:</b>
	<?php echo CHtml::encode($data->ESTATUS_ASIGNACION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PK_CLIENTE')); ?>:</b>
	<?php echo CHtml::encode($data->PK_CLIENTE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PK_CONTACTO')); ?>:</b>
	<?php echo CHtml::encode($data->PK_CONTACTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PK_PROYECTO')); ?>:</b>
	<?php echo CHtml::encode($data->PK_PROYECTO); ?>
	<br />

	*/ ?>

</div>