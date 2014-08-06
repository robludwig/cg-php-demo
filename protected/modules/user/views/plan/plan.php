<?php
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Current Plan");
$this->breadcrumbs=array(
	UserModule::t("Current Plan"),
);
?>
<h1> Your current plan is <?php echo $plan?></h1>
<p>To change it, go <?php echo CHtml::link('here.', $this->createUrl('/user/payment'));?>
