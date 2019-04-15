<?php


namespace app\models;
use yii\db\ActiveRecord;



class Product extends ActiveRecord
{

    public static function tableName()
    {
        return 'product';
    }

    public function getCategory()
    {
        return $this->hasOne('product' , ['id' => 'category_id']);
    }

    /**
     * Return full information of Product by Id or bool
     * @param $id int
     * @return array|bool
     */
    public function getInfoById($id)
    {
        $item = Product::find()->where(['id' => $id])->asArray()->one();
        if(!empty($item)){
            return $item;
        } else {
            return false;
        }
    }

    /**
     * Return list of goods one category
     * @param $id int
     * @return array
     */
    public function getListItemById($id)
    {
        $items = Product::find()->where(['category_id' => $id])->asArray()->all();
        return $items;
    }

}