<?php
/**
 * @author Maxim Cherednyk <maks757q@gmail.com, +380639960375>
 */

namespace maks757\params\behaviors;


use maks757\params\entities\CmsParams;
use maks757\params\interfaces\BaseParams;
use yii\base\Behavior;

class ParamsBehavior extends Behavior implements BaseParams
{
    /**
     * Get param from table
     * @param string $key
     * @return mixed
     */
    public function getParam($key = null)
    {
        if($key != null) {
            $data = CmsParams::findOne(['key' => $key]);
            return !empty($data) ? $data->value : false;
        }
        return false;
    }

    /**
     * Set param to table
     * @param string $key
     * @param mixed $value
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
     * @param string $key
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
