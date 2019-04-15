<?php


namespace app\models;
use yii\db\ActiveRecord;



class Category extends ActiveRecord
{

    public static function tableName()
    {
        return 'category';
    }

    public function getProducts()
    {
        return $this->hasMany(Product::className(),['category_id' => 'id']);
    }

    public function getListCategories()
    {
        $categories = Category::find()->indexBy('id')->asArray()->all();;
        return $categories;
    }

    public function getListItem()
    {
        $items = Product::find()->asArray()->all();
        return $items;
    }

    public function getListItemById($id)
    {
        $items = Product::find()->where(['category_id' => $id])->asArray()->all();
        return $items;
    }
}
