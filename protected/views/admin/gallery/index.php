<?php
/* @var $this GalleryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Galleries',
);

$this->menu=array(
	array('label'=>'', 'url'=>array('create'),'linkOptions'=>array('class' => 'create')),
	//array('label'=>'Manage Gallery', 'url'=>array('admin')),
	array('label'=>'', 'url'=>'javascript:void(0)','linkOptions'=>array('class' => 'delete','onclick'=>'act()')),
);
?>

<script type="text/javascript">
function act(){
	var idList = $("input[type=checkbox]:checked").serialize();
	if(idList){
		if(confirm("Are you sure want to delete?")){
			$.post('gallery/DeleteAll',idList,function(response){
				$.fn.yiiGridView.update("gallery-grid");
			});
		}
	}
}
</script>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'gallery-grid',	
	'itemsCssClass' => 'table',
	'dataProvider'=>$dataProvider,	
	'pagerCssClass' => 'pagination pagination-right',
	'columns'=>array(
		array(
			'class'           => 'CCheckBoxColumn',
			'selectableRows'  => 2,
			'value'           => '$data["id_gellery"]',
			'htmlOptions'=>array('width'=>'40px'),
			'checkBoxHtmlOptions' => array("name" => "idList[]"),
       ),
		'judul_gallery',
		//'desk_gallery',	
		array('name'=>'',
	      	'header'=>'Desk Gallery',
	      	'type' => 'raw',
	    	'value'=>'$data["desk_gallery"]',
	    ),
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
