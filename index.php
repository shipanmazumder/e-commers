<?php include "inc/header.php"; ?>
	
<?php include "inc/slider.php"; ?>
	
	<section>
		<div class="container">
			<div class="row"><!-- category -->
				<?php include "inc/category.php"; ?><!--end category -->
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Latest Items</h2>
						<?php 
						$getfpd=$pd->getfproduct();
						if($getfpd){
							while($result=$getfpd->fetch_assoc()){
								
								?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="fashop/<?php echo $result['fontimg']; ?>" alt="faridpurshop" height="249" width="268" />
											<h2><?php echo $result['productprice']; ?></h2>
											<p><?php echo $result['productname']; ?></p>
											<a href="details.php?prodet=<?php  echo $result['productid'];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Details</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2><?php echo $result['productprice']; ?></h2>
												<p"><?php echo $result['productname']; ?></p>
												<a href="details.php?prodet=<?php  echo $result['productid'];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Details</a>
											</div>
										</div>
								</div>
								<!--<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>-->
							</div>
						</div>
						<?php
						}
						}
						else{
							echo '<span style="text-align:center;margin-left:400px;color:red;font-size:20px;"><p>No Item Found</p></span>';
						}
							?>
						
					</div><!--features_items-->
					
				</div>
			</div>
		</div>
	</section>
	
	<?php include "inc/footer.php"; ?>