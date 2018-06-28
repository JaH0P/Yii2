<?php

use app\models\Product;
use yii\widgets\ActiveForm;


?>

<h1>Hello 2</h1>
<div>

</div>

<?php $form = ActiveForm::begin();?>

<?php echo $form->errorSummary($model);?>

<?=$form->field($model, 'name'); ?>

<?=$form->field($model, 'count')->label('set some count');?>

<?=\yii\helpers\Html::submitButton('sumbit');?>

<?php ActiveForm::end();?>
