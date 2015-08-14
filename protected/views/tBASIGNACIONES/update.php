<?php
/* @var $this TBASIGNACIONESController */
/* @var $model TBASIGNACIONES */

$this->breadcrumbs=array(
	'Tbasignaciones'=>array('index'),
	$model->ID_ASIGNACION=>array('view','id'=>$model->ID_ASIGNACION),
	'Update',
);

$this->menu=array(
	array('label'=>'List TBASIGNACIONES', 'url'=>array('index')),
	array('label'=>'Create TBASIGNACIONES', 'url'=>array('create')),
	array('label'=>'View TBASIGNACIONES', 'url'=>array('view', 'id'=>$model->ID_ASIGNACION)),
	array('label'=>'Manage TBASIGNACIONES', 'url'=>array('admin')),
);
?>

<h1>Update TBASIGNACIONES <?php echo $model->ID_ASIGNACION; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>