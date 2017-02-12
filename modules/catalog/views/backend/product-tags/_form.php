<?php

use modules\catalog\models\common\Product;
use modules\catalog\models\common\Tag;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use modules\catalog\widgets\DropDownWidget;

/* @var $this yii\web\View */
/* @var $model modules\catalog\models\common\ProductTag */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-tag-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_id')->widget(DropDownWidget::className(),
                                                ['itemsModel' => Product::className(),
                                                    'itemsLabelAttribute' => 'name',
                                                    'options' => [
                                                        'id' => 'textInput',
                                                        'class' => 'form-control'],
                                                ]); ?>

    <?= $form->field($model, 'tag_id')->widget(DropDownWidget::className(),
                                            ['itemsModel' => Tag::className(),
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
