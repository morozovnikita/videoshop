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
        $categories = Product::find(['id' => $id])->asArray()->one();
        return $categories;
    }


}