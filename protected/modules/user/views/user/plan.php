<?php
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Plan");
$this->breadcrumbs=array(
	UserModule::t("Plan"),
);
?>
<h1> Your plan is <?php echo CHtml::encode($model->username)?></h1>