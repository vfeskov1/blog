<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('key')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id),array('view','key'=>$data->key)); ?>
    <br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />


</div>