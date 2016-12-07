<?php
/**
 * @author Maxim Cherednyk <maks757q@gmail.com, +380639960375>
 */

namespace maks757\params\behaviors;


use maks757\params\entities\CmsParams;
use yii\base\Behavior;

class ParamsBehavior extends Behavior
{
    /**
     * Get param from table
     * @param $key
     * @return string
     */
    public function getParam($key = null)
    {
        if($key != null)
            return CmsParams::findOne(['key' => $key])->value;
        return false;
    }

    /**
     * Set param to table
     * @param $key
     * @param $value
     * @return string
     */
    public function setParam($key = null, $value = null)
    {
        $param = new CmsParams();
        if($p = CmsParams::findOne(['key' => $key]))
            $param = $p;
        if($key != null && $value != null){
            $param->key = $key;
            $param->value = $value;
            $param->save();
            return true;
        }
        return false;
    }

    /**
     * Delete params from table
     * @param $key
     * @return string
     */
    public function removeParam($key = null)
    {
        if($key != null){
            CmsParams::findOne(['key' => $key])->delete();
            return true;
        }
        return false;
    }
}