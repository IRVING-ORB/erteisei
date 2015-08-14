<?php
/* @var $this TBASIGNACIONESController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbasignaciones',
);

$this->menu=array(
	array('label'=>'Create TBASIGNACIONES', 'url'=>array('create')),
	array('label'=>'Manage TBASIGNACIONES', 'url'=>array('admin')),
);
?>

<h1>Tbasignaciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
