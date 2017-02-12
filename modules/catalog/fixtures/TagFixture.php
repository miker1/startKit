<?php

namespace modules\catalog\fixtures;

use yii\test\ActiveFixture;

class TagFixture extends ActiveFixture
{
    public $modelClass = 'modules\catalog\models\common\Tag';
    public $dataFile = '@fixtures/data/tag.php';
} 