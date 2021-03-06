<?php
/**
 * Article Journal Files (article-journal-file)
 * @var $this FileController
 * @var $data ArticleJournalFile
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @created date 20 July 2017, 06:52 WIB
 * @link https://github.com/ommu/plu-article-journal
 *
 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->file_id), array('view', 'id'=>$data->file_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('publish')); ?>:</b>
	<?php echo CHtml::encode($data->publish); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('journal_id')); ?>:</b>
	<?php echo CHtml::encode($data->journal->column_name_relation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_date')); ?>:</b>
	<?php echo CHtml::encode($this->dateFormat($data->creation_date)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_id')); ?>:</b>
	<?php echo CHtml::encode($data->creation->displayname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_date')); ?>:</b>
	<?php echo CHtml::encode($this->dateFormat($data->modified_date)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_id')); ?>:</b>
	<?php echo CHtml::encode($data->modified->displayname); ?>
	<br />


</div>