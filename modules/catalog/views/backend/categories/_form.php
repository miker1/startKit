<?php

use modules\catalog\models\common\Category;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use modules\catalog\widgets\DropDownWidget;

/* @var $this yii\web\View */
/* @var $model modules\catalog\models\common\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_id')->widget(DropDownWidget::className(),
                                                ['itemsModel' => Category::className(),
                                                    'itemsLabelAttribute' => 'name',
                                                    'options' => [
                                                        'id' => 'textInput',
                                                        'class' => 'form-control'],
                                                ]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
