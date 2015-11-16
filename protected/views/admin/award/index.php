<?php
/* @var $this AwardController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Awards',
);

$this->menu=array(
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class' => 'create')),
	//array('label'=>'Manage Award', 'url'=>array('admin')),
	array('label'=>'', 'url'=>'javascript:void(0)','linkOptions'=>array('class' => 'delete','onclick'=>'act()')),
);
?>
<script type="text/javascript">
function act(){
	var idList = $("input[type=checkbox]:checked").serialize();
	if(idList){
		if(confirm("Are you sure want to delete?")){
			$.post('award/DeleteAll',idList,function(response){
				$.fn.yiiGridView.update("award-grid");
			});
		}
	}
}
</script>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'award-grid',	
	'itemsCssClass' => 'table',
	'dataProvider'=>$dataProvider,	
	'pagerCssClass' => 'pagination pagination-right',
	'columns'=>array(
		array(
			'class'           => 'CCheckBoxColumn',
			'selectableRows'  => 2,
			'value'           => '$data["id_award"]',
			'htmlOptions'=>array('width'=>'40px'),
			'checkBoxHtmlOptions' => array("name" => "idList[]"),
       ),
		array(
			'name' => 'id_jenis_award',
	        'header' => 'Jenis Award',
	        'value' => ($data['id_jenis_award'] == 0)?"Tribute":"Press News"
	    ),
		'nama_award',	
		array(
			'class'=>'CButtonColumn',
			'template'=>'{update} {delete}',
			'deleteButtonImageUrl'=>false,
    		'updateButtonImageUrl'=>false,
    		//'viewButtonImageUrl'=>false
			'buttons'=>array(
               'update'=>array(
                    'label'=>'',
                    'options'=>array('class'=>'fa fa-pencil'),
                ),
               'delete'=>array(
                	'label'=>'',
                	'options'=>array('class'=>'fa fa-trash-o'),
            	),
            ),
		),	
	),
	'pager'=>array(
    	'class'=>'CLinkPager',
      	'header'=>'',
      	'htmlOptions'=>array('class'=>'pagination')
   	)
)); ?>
