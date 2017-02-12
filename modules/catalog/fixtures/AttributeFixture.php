<?php

namespace modules\catalog\fixtures;

use yii\test\ActiveFixture;

class AttributeFixture extends ActiveFixture
{
    public $modelClass = 'modules\catalog\models\common\Attribute';
    public $dataFile = '@fixtures/data/attribute.php';
} 