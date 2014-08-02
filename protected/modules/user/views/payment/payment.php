<?php
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Upgrade Plan");
$this->breadcrumbs=array(
	UserModule::t("Upgrade Plan"),
);
?>
<h1> Your current plan is <?php echo CHtml::encode($user->username)?></h1>
