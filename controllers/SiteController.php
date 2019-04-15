<?php

namespace app\controllers;

use app\models\Category;
use Yii;
use yii\web\Controller;


class SiteController extends Controller
{


    public function actionIndex()
    {
        $model = new Category();
        $data = $model->getListCategories();
        $items = $model->getListItem();
        return $this->render('index', [
            'data' => $data,
            'items' => $items
        ]);
    }


    public function actionContact()
    {
        echo 'Contact';die;
    }


}
