<?php

/* @var $this yii\web\View */


use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'Main Page';
?>


<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Категории</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        <? foreach ($data as $item):?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="<?=Url::toRoute(['/category/view','id' => $item['id']],false);?>"><?=$item['title'];?></a></h4>
                            </div>
                        </div>
                        <? endforeach;?>
                    </div><!--/category-products-->


                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Товары</h2>
                    <? foreach($items as $product):?>
                    <div class="single-products">
                    <div class="col-sm-4">
                            <div class="product-image-wrapper">



                                    <div class="productinfo text-center">
                                        <img src="<?=Yii::getAlias('@web');?>/images//photo.jpg" alt="" />
                                        <h2><?=$product['title'];?></h2>
                                        <p><?=mb_strimwidth($product['description'],0 ,200  ).'...';?></p>
                                        <h5><?="В наличии ".$product['count'];?></h5>
                                        <a href="<?=Url::toRoute(['/product/view','id' => $product['id']],false);?>" class="btn btn-default add-to-cart">Смотреть далее</a>
                                        <?=Html::a('Добавить в корзину', ['/product/add', 'id' => $product['id']], ['class' => 'btn btn-fefault cart' , 'type' => 'button']);?>
                                    </div>

                                </div>

                            </div>

                    </div>
                    <? endforeach;?>



                </div><!--features_items-->


            </div>
        </div>
    </div>
</section>