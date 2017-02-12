<?php
return [
    'class'=>'yii\web\UrlManager',
    'enablePrettyUrl'=>true,
    'showScriptName'=>false,
    'rules'=>[
        // Catalog
		'<module:\w+>/backend' => '<module>/backend/default/index',
	],
];
