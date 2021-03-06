<?php
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('pages-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<div class="search-form">
<?php $this->renderPartial('_search', array(
	'model' => $model,
)); ?>
</div><!-- search-form -->
<?php
$this->widget('application.widgets.iGridView', array(
	'id' => 'pages-grid',
	'dataProvider' => $model->search(),
	'columns' => array(
		array(
			'type'	=>	'raw',
			'header'	=>'<div id="sl-row" onclick="CoreJs.checkAll(this.id);" status="1"><input type="checkbox" class="checkall" value="" /></div>',
			'value'	=>	'CHtml::checkBox("rad_ID[]", "", array("value"=>$data->id))',
			'htmlOptions'	=>	array(
					'width'	=>	'50',
			),
		),
		array(
			'name'	=>	'page_tree',
			'type'	=>	'raw',
			'value'	=>	'CHtml::link(CHtml::encode($data->page_tree), array("pages/update","id"=>$data->id))'
		),
		'alias',
		array(
			'name'	=>	'ordering',
			'htmlOptions'	=>	array(
				'width'	=>	'80',
			),
		),
		array(
            'class'=>'JToggleColumn',
            'name'=>'status', // boolean model attribute (tinyint(1) with values 0 or 1)
            'htmlOptions'=>array('width'=>'80'),
        ),
		array(
				'name'	=>	'id',
				'htmlOptions'	=>	array(
						'width'	=>	'30',
				),
		),
		array(
			'class'=>'application.widgets.iButtonColumn',
			'htmlOptions'=>array('style'=>'width: 50px'),
		),
	),
)); 
?>