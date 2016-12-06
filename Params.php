<?php
/**
 * @author Maxim Cherednyk <maks757q@gmail.com, +380639960375>
 */

namespace maks757\params;


use maks757\params\behaviors\ParamsBehavior;
use yii\base\Component;

/**
 * @method getParam($key = null)
 * @method setParam($key = null, $value = null)
 * @method removeParam($key = null)
*/

class Params extends Component
{
    public function behaviors()
    {
        return [
            'param' => ParamsBehavior::className()
        ];
    }
}