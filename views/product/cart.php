<?php

$total = 0;
if(!empty($items)) {
    foreach ($items as $item) {
        $total = $total + $item['price'];
    }
}

use yii\helpers\Html; ?>

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                <tr class="cart_menu">
                    <td class="image">Диск</td>
                    <td class="price">Цена</td>
                    <td class="total">Действия</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                <? if(!empty($items)):foreach ($items as $item):?>
                <tr>
                    <td class="cart_product">
                        <a href=""><?=$item['title'];?><img src="images/cart/one.png" alt=""></a>
                    </td>
                    <td class="cart_price">
                        <p><?=$item['price'];?></p>
                    </td>

                    <td class="cart_delete">
                        <?=Html::a('Удалить товар', ['/product/delete', 'id' => $item['id']], ['class' => 'btn btn-default cart' , 'type' => 'button']);?>
                    </td>
                </tr>
                <? endforeach;endif;?>

                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->

<section id="do_action">
    <div class="container">

        <div class="row">
            <div class="col-sm-6">

            </div>
            <div class="col-sm-6">
                <div class="total_area">
                    <ul>
                        <li>Итого <span><?=$total;?></span></li>
                    </ul>
                    <?=Html::a('Оформить заказ', ['/order/form'], ['class' => 'btn btn-default check_out' , 'type' => 'button']);?>
                </div>
            </div>
        </div>
    </div>
</section><!--/#do_action-->

