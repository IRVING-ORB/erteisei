<?php
/* @var $this TBASIGNACIONESController */
/* @var $model TBASIGNACIONES */

$this->breadcrumbs=array(
	'Tbasignaciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TBASIGNACIONES', 'url'=>array('index')),
	array('label'=>'Manage TBASIGNACIONES', 'url'=>array('admin')),
);
?>

<h1>Create TBASIGNACIONES</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>