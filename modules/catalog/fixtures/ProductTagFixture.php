<?php

namespace modules\catalog\fixtures;

use yii\test\ActiveFixture;

class ProductTagFixture extends ActiveFixture
{
    public $modelClass = 'modules\catalog\models\common\ProductTag';
    public $dataFile = '@fixtures/data/product-tag.php';
} 