<?php

use modules\catalog\models\common\Attribute;
use modules\catalog\models\common\Product;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use modules\catalog\widgets\DropDownWidget;

/* @var $this yii\web\View */
/* @var $model modules\catalog\models\common\Value */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="value-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_id')->widget(DropDownWidget::className(),
                                                ['itemsModel' => Product::className(),
                                                'itemsLabelAttribute' => 'name',
                                                'options' => [
                                                    'id' => 'textInput',
                                                    'class' => 'form-control'],
                                                ]); ?>

    <?= $form->field($model, 'attribute_id')->widget(DropDownWidget::className(),
                                                  ['itemsModel' => Attribute::className(),
                                                 'itemsLabelAttribute' => 'name',
                                                  'options' => [
                                                   'id' => 'textInput',
                                                 'class' => 'form-control'],
                                          ]); ?>
    <!--
    <div class="panel panel-default">
        <div class="panel-body">
            <?//= Yii::$app->formatter->asNtext($model->attribute_id) ?>
        </div>
    </div>
    <? //->dropDownList(Attribute::find()->select(['name', 'id'])->indexBy('id')->column())?>
    !-->
    <?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
