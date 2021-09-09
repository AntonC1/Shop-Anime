  <div class="main main-raised">
        <div class="container mainn-raised" style="width:100%;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/new_site_banner_3.png" alt="Los Angeles" style="width:100%;">
      </div>
      <div class="item">
        <img src="img/dbqaiup-418e858d-0625-4931-9fa2-9b2787503735.png" style="width:100%;">
      </div>
      <div class="item">
        <img src="img/ae6bf4056c43f809df3903a8146a38c9.jpg" alt="New York" style="width:100%;">
      </div>
      <div class="item">
        <img src="img/360_F_400464779_3XD2G8N3AFi86AZfLHRjZnSQlqVQDQ86.jpg" alt="New York" style="width:100%;">
      </div>
    </div>
    <a class="left carousel-control _26sdfg" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only" >Poprzednie</span>
    </a>
    <a class="right carousel-control _26sdfg" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Następne</span>
    </a>
  </div>
</div>
		<div class="section mainn mainn-raised">
			<div class="container">
				<div class="row">

					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=78"><div class="shop">
							<div class="shop-img">
								<img src="./product_images/reading-manga-one-punch-man.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Kolekcja<br>Mangi</h3>
								<a href="http://localhost/Anime_shop/Sklep/store.php#!" class="cta-btn">Kup Teraz <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div></a>
					</div>
					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=72"><div class="shop">
							<div class="shop-img">
								<img src="./product_images/main-qimg-f683cfdf287c9a8f76a74ae63a2e8b82.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Kolekcja<br>Light Novel</h3>
								<a href="http://localhost/Anime_shop/Sklep/store.php#!" class="cta-btn">Kup Teraz <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div></a>
					</div>
					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=79"><div class="shop">
							<div class="shop-img">
								<img src="./product_images/i-aliexpress-haikyu-figurki-anime-hinata-shoyo-461-kageyama-todo-489-action-figures-sliczne-zabawki.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Kolekcja<br>Figurek</h3>
								<a href="http://localhost/Anime_shop/Sklep/store.php#!" class="cta-btn">Kup Teraz <i class="fa fa-arrow-circle-right"></i></a>
							</div>
                            </div></a>
					</div>
				</div>
			</div>
		</div>
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Nowe Produkty</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Manga</a></li>
									<li><a data-toggle="tab" href="#tab1">Light Novel</a></li>
									<li><a data-toggle="tab" href="#tab1">Figurki</a></li>
									<li><a data-toggle="tab" href="#tab1">Ubrania</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1" >
									<?php
                    include 'db.php';
					$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 10 AND 15";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){
                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_cat   = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];
                        $cat_name = $row["cat_title"];
                        echo "
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='new'>Nowe</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price Zł</h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										<div class='product-btns'>
											<button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>Dodaj do Obserwowanych</span></button>
											<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>Dodaj do Porównania</span></button>
											<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>Podgląd</span></button>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> Dodaj do Koszyka</button>
									</div>
								</div>    
			";
		}
        ;
}
?>
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Najlepiej sprzedające się</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Manga</a></li>
									<li><a data-toggle="tab" href="#tab2">Light Novel</a></li>
									<li><a data-toggle="tab" href="#tab2">Figurki</a></li>
									<li><a data-toggle="tab" href="#tab2">Ubrania</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<?php
                    include 'db.php';
					$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 4 AND 10";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){
                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_cat   = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];
                        $cat_name = $row["cat_title"];
                        echo "
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='new'>Nowe</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price Zł</h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										<div class='product-btns'>
											<button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>Dodaj do Obserwowanych</span></button>
											<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>Dodaj do Porównania</span></button>
											<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>Podgląd</span></button>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> Dodaj do Koszyka</button>
									</div>
								</div>      
			";
		}
        ;
}
?>
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Najnowsze</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>
						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div id="get_product_home">
							</div>
							<div id="get_product_home2">
								<div class="product-widget">
                                    <div class="product-img">
                                        <img src="./product_images/81ww5rFJirL.jpg" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Manga</p>
                                        <h3 class="product-name"><a href="#">Chaisaw man Manga Vol.4</a></h3>
                                    </div>
								</div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/513FJNCNuUL._AC_SY580_.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Manga</p>
										<h3 class="product-name"><a href="#">Im a spider so what Manga Vol.2</a></h3>
									</div>
								</div>
								<div class="product-widget">
									<div class="product-img">
										<img src="./product_images/Volume_03.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Manga</p>
										<h3 class="product-name"><a href="#">Chaisaw man Manga Vol.3</a></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./product_images/81ww5rFJirL.jpg" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Manga</p>
                                        <h3 class="product-name"><a href="#">Chaisaw man Manga Vol.4</a></h3>
                                    </div>
                                </div>
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./product_images/513FJNCNuUL._AC_SY580_.jpg" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Manga</p>
                                        <h3 class="product-name"><a href="#">Im a spider so what Manga Vol.2</a></h3>
                                    </div>
                                </div>
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./product_images/Volume_03.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Manga</p>
                                        <h3 class="product-name"><a href="#">Chaisaw man Manga Vol.3</a></h3>
                                    </div>
                                </div>
							</div>
							<div>
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./product_images/81ww5rFJirL.jpg" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Manga</p>
                                        <h3 class="product-name"><a href="#">Chaisaw man Manga Vol.4</a></h3>
                                    </div>
                                </div>
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./product_images/513FJNCNuUL._AC_SY580_.jpg" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Manga</p>
                                        <h3 class="product-name"><a href="#">Im a spider so what Manga Vol.2</a></h3>
                                    </div>
                                </div>
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./product_images/Volume_03.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Manga</p>
                                        <h3 class="product-name"><a href="#">Chaisaw man Manga Vol.3</a></h3>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
					<div class="clearfix visible-sm visible-xs">
					</div>
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>
						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./product_images/81ww5rFJirL.jpg" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Manga</p>
                                        <h3 class="product-name"><a href="#">Chaisaw man Manga Vol.4</a></h3>
                                    </div>
                                </div>
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./product_images/513FJNCNuUL._AC_SY580_.jpg" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Manga</p>
                                        <h3 class="product-name"><a href="#">Im a spider so what Manga Vol.2</a></h3>
                                    </div>
                                </div>
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./product_images/Volume_03.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Manga</p>
                                        <h3 class="product-name"><a href="#">Chaisaw man Manga Vol.3</a></h3>
                                    </div>
                                </div>
							</div>
							<div>
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./product_images/81ww5rFJirL.jpg" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Manga</p>
                                        <h3 class="product-name"><a href="#">Chaisaw man Manga Vol.4</a></h3>
                                    </div>
                                </div>
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./product_images/513FJNCNuUL._AC_SY580_.jpg" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Manga</p>
                                        <h3 class="product-name"><a href="#">Im a spider so what Manga Vol.2</a></h3>
                                    </div>
                                </div>
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="./product_images/Volume_03.png" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Manga</p>
                                        <h3 class="product-name"><a href="#">Chaisaw man Manga Vol.3</a></h3>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
		