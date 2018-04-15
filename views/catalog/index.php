<?php include ROOT.'/layouts/header.php';

        // echo "<pre>"; //////////////////////
        // print_r($latestProducts); //////////////////////

?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">

                        <?php foreach ($categories as $key => $val):  ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="/category/<?php echo $categories[$key]['id']; ?>"><?php echo $categories[$key]['name']; ?></a></h4>
                                </div>
                            </div>
                        <?php endforeach;?>

                    </div>

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Последние товары</h2>

                            <?php foreach ($latestProducts as $key => $val): //вывод товаров в "последние товары"
                            ?> 

                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="http://localhost/<?php echo $latestProducts[$key]['image']; ?>" alt="" />
                                            
                                            <h2><?php
                                                echo $latestProducts[$key]['price'];
                                                ?></h2>

                                                <p><a href="product/<?php echo $latestProducts[$key]['id']; ?>"><?php
                                                    echo $latestProducts[$key]['description'];
                                                    ?></p></a>

                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                                </div>

                                                <?php if($latestProducts[$key]['is_new']): ?>
                                                <img src="http://localhost/template/images/home/new.png" class="new" alt="">
                                            <?php endif; ?>

                                            </div>
                                        </div>
                                    </div>

                                <?php endforeach; ?>


                            </div><!--features_items-->

                            

                        </div>
                    </div>
                </div>
            </section>

            <?php include ROOT.'/layouts/footer.php'; ?>