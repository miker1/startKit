<?php

namespace modules\catalog\fixtures;

use yii\test\ActiveFixture;

class ProductFixture extends ActiveFixture
{
    public $modelClass = 'modules\catalog\models\common\Product';
    public $dataFile = '@fixtures/data/product.php';
} 