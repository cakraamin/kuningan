<?php
/* @var $this KontakController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kontaks',
);

$this->menu=array(
	//array('label'=>'Create Kontak', 'url'=>array('create')),
	//array('label'=>'Manage Kontak', 'url'=>array('admin')),
	array('label'=>'', 'url'=>'javascript:void(0)','linkOptions'=>array('class' => 'delete','onclick'=>'act()')),
);
?>
<script type="text/javascript">
function act(){
	var idList = $("input[type=checkbox]:checked").serialize();
	if(idList){
		if(confirm("Are you sure want to delete?")){
			$.post('kontak/DeleteAll',idList,function(response){
				$.fn.yiiGridView.update("kontak-grid");
			});
		}
	}
}
</script>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'kontak-grid',	
	'itemsCssClass' => 'table',
	'dataProvider'=>$dataProvider,	
	'pagerCssClass' => 'pagination pagination-right',	
	'columns'=>array(
		array(
			'class'           => 'CCheckBoxColumn',
			'selectableRows'  => 2,
			'value'           => '$data["id_kontak"]',
			'htmlOptions'=>array('width'=>'40px'),
			'checkBoxHtmlOptions' => array("name" => "idList[]"),
       ),
		'nama_kontak',	
		'email_kontak',	
		'subyek_kontak',	
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view} {delete}',
			'deleteButtonImageUrl'=>false,
    		'viewButtonImageUrl'=>false,
    		//'viewButtonImageUrl'=>false
			'buttons'=>array(
               'view'=>array(
                    'label'=>'',
                    'options'=>array('class'=>'fa fa-search'),
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
