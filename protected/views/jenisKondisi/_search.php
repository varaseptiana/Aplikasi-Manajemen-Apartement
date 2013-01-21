<?php
/* @var $this JenisKondisiController */
/* @var $model JenisKondisi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kondisi_id'); ?>
		<?php echo $form->textField($model,'kondisi_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_kondisi'); ?>
		<?php echo $form->textField($model,'nama_kondisi',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->