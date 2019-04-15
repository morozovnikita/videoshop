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

    public function getInfoById($id)
    {
        $item = Product::find()->where(['id' => $id])->asArray()->one();
        return $item;
    }

    public function getListItemById($id)
    {
        $items = Product::find()->where(['category_id' => $id])->asArray()->all();
        return $items;
    }

}