<?php
/* @var $this PartnerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Partners',
);

$this->menu=array(
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class' => 'create')),
	//array('label'=>'Manage Partner', 'url'=>array('admin')),
	array('label'=>'', 'url'=>'javascript:void(0)','linkOptions'=>array('class' => 'delete','onclick'=>'act()')),
);
?>
<script type="text/javascript">
function act(){
	var idList = $("input[type=checkbox]:checked").serialize();
	if(idList){
		if(confirm("Are you sure want to delete?")){
			$.post('partner/DeleteAll',idList,function(response){
				$.fn.yiiGridView.update("partner-grid");
			});
		}
	}
}
</script>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'partner-grid',	
	'itemsCssClass' => 'table',
	'dataProvider'=>$dataProvider,	
	'pagerCssClass' => 'pagination pagination-right',
	'columns'=>array(
		array(
			'class'           => 'CCheckBoxColumn',
			'selectableRows'  => 2,
			'value'           => '$data["id_partner"]',
			'htmlOptions'=>array('width'=>'40px'),
			'checkBoxHtmlOptions' => array("name" => "idList[]"),
       ),
		'nama_partner',	
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
