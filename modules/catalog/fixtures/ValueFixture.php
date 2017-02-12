<?php

namespace modules\catalog\fixtures;

use yii\test\ActiveFixture;

class ValueFixture extends ActiveFixture
{
    public $modelClass = 'modules\catalog\models\common\Value';
    public $dataFile = '@fixtures/data/value.php';
} 