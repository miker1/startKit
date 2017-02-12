<?php

namespace modules\catalog\widgets;

use yii\helpers\Html;
use yii\base\InvalidConfigException;

class CheckboxWidget extends DropDownWidget
{

    public function run()
    {
        $subModel = $this->itemsModel;
        if ($this->itemsModel != null && $this->itemsLabelAttribute != null) {
            if (empty($this->itemsPKAttribute)) {
                $this->itemsPKAttribute = implode($this->separator, $subModel::primaryKey());
            }
            $items = $this->getItemsAsArray();
            if ($this->hasModel()) {
                echo Html::activeCheckboxList($this->model, $this->attribute, $items);
            }
        } else {
            throw new InvalidConfigException("'itemsModel' and 'itemsLabelAttribute' properties must be specified.");
        }
    }
}