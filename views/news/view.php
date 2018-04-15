<!-- File view -->
<?php include ROOT . '/layouts/header.php';?>

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
				<div class="product-details"><!--product-details-->
					<div class="row">
						<div class="col-sm-5">
							<div class="view-product">
								
								<img src="/<?php echo $product[0]['image'];?>" alt="" />
								
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<?php if ($product[0]['is_new'] == 1):?>
									<img src="/template/images/product-details/new.jpg" class="newarrival" alt="" />
								<?php endif; ?>
								<h2><?php echo $product[0]['name'];?></h2>
								<p>Код товара: <?php echo $product[0]['code'];?></p>
								<span>
									<span>US $<?php echo $product[0]['price'];?></span>
									<label>Количество:</label>
									<input type="text" value="3" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										В корзину
									</button>
								</span>
								<?php if($product[0]['availability'] == 1 )
								{ 
									echo '<p><b>Наличие:</b> На складе</p>';
								} else
								{
									echo '<p><b>Наличие:</b> Отсутствует на складе</p>';
								}
								
								if($product[0]['is_new'] == 1){
									echo '<p><b>Состояние:</b> Новое</p>';
								}

								?>
								<p><b>Производитель:</b> <?php echo $product[0]['brand'];?></p>
							</div><!--/product-information-->
						</div>
					</div>
					<div class="row">                                
						<div class="col-sm-12">
							<h5>Описание товара</h5>
							<p> <?php echo $product[0]['description'];?></p>
							
						</div>
					</div>
				</div><!--/product-details-->

			</div>
		</div>
	</div>
</section>


<br/>
<br/>

<?php include ROOT.'/layouts/footer.php'; ?>