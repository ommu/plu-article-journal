<?php
/**
 * Article Journal Uses (article-journal-use)
 * @var $this UseController
 * @var $model ArticleJournalUse
 * @var $form CActiveForm
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @created date 20 July 2017, 06:52 WIB
 * @link https://github.com/ommu/plu-article-journal
 *
 */
?>

<?php $form=$this->beginWidget('application.libraries.yii-traits.system.OActiveForm', array(
	'id'=>'article-journal-use-form',
	'enableAjaxValidation'=>true,
)); ?>

<div class="dialog-content">
	<fieldset>

		<?php //begin.Messages ?>
		<div id="ajax-message">
			<?php echo $form->errorSummary($model); ?>
		</div>
		<?php //begin.Messages ?>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'title_i'); ?>
			<div class="desc">
				<?php 
				if(!$model->getErrors())
					$model->title_i = Phrase::trans($model->name);
				echo $form->textField($model,'title_i', array('maxlength'=>32,'class'=>'span-8')); ?>
				<?php echo $form->error($model,'title_i'); ?>
			</div>
		</div>

		<div class="clearfix">
			<?php echo $form->labelEx($model,'description_i'); ?>
			<div class="desc">
				<?php 
				if(!$model->getErrors())
					$model->description_i = Phrase::trans($model->desc);
				echo $form->textArea($model,'description_i', array('maxlength'=>128,'class'=>'span-11 smaller')); ?>
				<?php echo $form->error($model,'description_i'); ?>
			</div>
		</div>

		<div class="clearfix publish">
			<?php echo $form->labelEx($model,'publish'); ?>
			<div class="desc">
				<?php echo $form->checkBox($model,'publish'); ?>
				<?php echo $form->labelEx($model,'publish'); ?>
				<?php echo $form->error($model,'publish'); ?>
				<?php /*<div class="small-px silent"></div>*/?>
			</div>
		</div>

	</fieldset>
</div>
<div class="dialog-submit">
	<?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('phrase', 'Create') : Yii::t('phrase', 'Save') , array('onclick' => 'setEnableSave()')); ?>
	<?php echo CHtml::button(Yii::t('phrase', 'Cancel'), array('id'=>'closed')); ?>
</div>
<?php $this->endWidget(); ?>


