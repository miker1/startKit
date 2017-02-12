<?php

use modules\catalog\models\common\Category;
use modules\catalog\models\common\Tag;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use modules\catalog\widgets\DropDownWidget;
use modules\catalog\widgets\CheckboxWidget;

/* @var $this yii\web\View */
/* @var $model modules\catalog\models\common\Product */
/* @var $values modules\catalog\models\common\Value[] */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'category_id')->widget(DropDownWidget::className(),
                                                        ['itemsModel' => Category::className(),
                                                            'itemsLabelAttribute' => 'name',
                                                            'options' => [
                                                                'id' => 'textInput',
                                                                'class' => 'form-control'],
                                                        ]); ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'price')->textInput() ?>

            <?= $form->field($model, 'active')->textInput() ?>

            <?= $form->field($model, 'tagsArray')->widget(CheckboxWidget::className(),
                                                        ['itemsModel' => Tag::className(),
                                                            'itemsLabelAttribute' => 'name',
                                                            'options' => [
                                                            ],
                                                        ]);?>
        </div>
        <div class="col-md-6">
            <?php foreach ($values as $value): ?>
                <?= $form->field($value, '[' . $value->productAttribute->id . ']value')->label($value->productAttribute->name); ?>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
