<?php

namespace modules\catalog\fixtures;

use yii\test\ActiveFixture;

class CategoryFixture extends ActiveFixture
{
    public $modelClass = 'modules\catalog\models\common\Category';
    public $dataFile = '@fixtures/data/category.php';
} 