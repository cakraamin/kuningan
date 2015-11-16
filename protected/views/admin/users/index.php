<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */
$this->breadcrumbs=array(
	'Users',
);
$this->menu=array(
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class' => 'create')),
	//array('label'=>'Manage Users', 'url'=>array('admin')),
	array('label'=>'', 'url'=>'javascript:void(0)','linkOptions'=>array('class' => 'delete','onclick'=>'act()')),
);
?>
<script type="text/javascript">
function act(){
	var idList = $("input[type=checkbox]:checked").serialize();
	if(idList){
		if(confirm("Are you sure want to delete?")){
			$.post('users/DeleteAll',idList,function(response){
				$.fn.yiiGridView.update("users-grid");
			});
		}
	}
}
</script>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',	
	'itemsCssClass' => 'table',
	'dataProvider'=>$dataProvider,	
	'pagerCssClass' => 'pagination pagination-right',
	'columns'=>array(
		array(
			'class'           => 'CCheckBoxColumn',
			'selectableRows'  => 2,
			'value'           => '$data["id_user"]',
			'htmlOptions'=>array('width'=>'40px'),
			'checkBoxHtmlOptions' => array("name" => "idList[]"),
       ),
		'user_name',		
		'date',		
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