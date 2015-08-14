<?php
/* @var $this TBASIGNACIONESController */
/* @var $model TBASIGNACIONES */

$this->breadcrumbs=array(
	'Tbasignaciones'=>array('index'),
	$model->ID_ASIGNACION,
);

$this->menu=array(
	array('label'=>'List TBASIGNACIONES', 'url'=>array('index')),
	array('label'=>'Create TBASIGNACIONES', 'url'=>array('create')),
	array('label'=>'Update TBASIGNACIONES', 'url'=>array('update', 'id'=>$model->ID_ASIGNACION)),
	array('label'=>'Delete TBASIGNACIONES', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_ASIGNACION),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TBASIGNACIONES', 'url'=>array('admin')),
);
?>

<h1>View TBASIGNACIONES #<?php echo $model->ID_ASIGNACION; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_ASIGNACION',
		'NOMRE_RECURSO',
		'FECHA_INI',
		'FECHA_FIN',
		'HORAS',
		'MONTO',
		'PK_TARIFA',
		'ESTATUS_RECURSO',
		'ESTATUS_ASIGNACION',
		'PK_CLIENTE',
		'PK_CONTACTO',
		'PK_PROYECTO',
	),
)); ?>
