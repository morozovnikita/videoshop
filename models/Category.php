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

    /**
     * Return list of categories
     * @return $categories array
     */
    public function getListCategories()
    {
        $categories = Category::find()->indexBy('id')->asArray()->all();;
        return $categories;
    }

    /**
     * Return list of all products
     * @return $items array
     */
    public function getListItem()
    {
        $items = Product::find()->asArray()->all();
        return $items;
    }

    /**
     * Return item of one category
     * @param $id int
     * @return array
     */
    public function getListItemById($id)
    {
        $items = Product::find()->where(['category_id' => $id])->asArray()->all();
        return $items;
    }
}
