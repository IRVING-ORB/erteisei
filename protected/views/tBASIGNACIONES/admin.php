<?php
/* @var $this TBASIGNACIONESController */
/* @var $model TBASIGNACIONES */

$this->breadcrumbs=array(
	'Tbasignaciones'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TBASIGNACIONES', 'url'=>array('index')),
	array('label'=>'Create TBASIGNACIONES', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tbasignaciones-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tbasignaciones</h1>

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
	'id'=>'tbasignaciones-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID_ASIGNACION',
		'NOMRE_RECURSO',
		'FECHA_INI',
		'FECHA_FIN',
		'HORAS',
		'MONTO',
		/*
		'PK_TARIFA',
		'ESTATUS_RECURSO',
		'ESTATUS_ASIGNACION',
		'PK_CLIENTE',
		'PK_CONTACTO',
		'PK_PROYECTO',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
