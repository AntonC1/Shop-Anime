<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sklep Anime</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link type="text/css" rel="stylesheet" href="css/accountbtn.css"/>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <style>
        #navigation {
          background: lightpink;
            background: -webkit-linear-gradient(to right, black, white);
            background: linear-gradient(to right, black, white);
        }
        #header {
            background: lightpink;
            background: -webkit-linear-gradient(to right, black, white);
            background: linear-gradient(to right, black, white);
        }
        #top-header {
            background: lightpink;
            background: -webkit-linear-gradient(to right, black, white);
            background: linear-gradient(to right, black, white);
        }
        #footer {
            background: Lightpink;
            background: -webkit-linear-gradient(to right, black, white);
            background: linear-gradient(to right, black, white);
          color: black;
        }
        #bottom-footer {
            background: #7474BF;
            background: -webkit-linear-gradient(to right, black, white);
            background: linear-gradient(to right, black, white);
        }
        .footer-links li a {
          color: #1E1F29;
        }
        .mainn-raised {
            margin: -7px 0px 0px;
            border-radius: 6px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
        }
        .glyphicon{
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    }
    .glyphicon-chevron-left:before{
        content:"\f053"
    }
    .glyphicon-chevron-right:before{
        content:"\f054"
    }
        </style>
    </head>
	<body>
		<header>
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +48 690 681 070</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> antonciszewski@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i>Lodz</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><?php
                             include "db.php";
                            if(isset($_SESSION["uid"])){
                                $sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
                                $query = mysqli_query($con,$sql);
                                $row=mysqli_fetch_array($query);
                                echo '
                               <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> Witaj '.$row["first_name"].'</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#profile"><i class="fa fa-user-circle" aria-hidden="true" ></i>Moje Konto</a>
                                    <a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Wyloguj się</a>
                                  </div>
                                </div>';
                            }else{ 
                                echo '
                                <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> Moje Konto</a>
								  <div class="dropdownn-content">
								  	<a href="admin/login.php" ><i class="fa fa-user" aria-hidden="true" ></i>Admin</a>
                                    <a href="" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>Logowanie</a>
                                    <a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>Rejestracja</a>
                                  </div>
                                </div>';
                            }
                                             ?>
                                </li>				
					</ul>
				</div>
			</div>
			<div id="header">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
								<font style="font-style:normal; font-size: 33px;color: aliceblue;font-family: serif">
                                        Sklep Anime
                                    </font>
								</a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">Wszystko</option>
										<option value="1">Manga</option>
										<option value="1">Light Novel</option>
									</select>
									<input class="input" id="search" type="text" placeholder="Wyszukaj">
									<button type="submit" id="search_btn" class="search-btn">Szukaj</button>
								</form>
							</div>
						</div>
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<div>
									<a href="https://github.com/AntonC1">
										<i class="fa fa-github"></i>
										<span>Github</span>
									</a>
								</div>
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Twój Koszyk</span>
										<div class="badge qty">0</div>
									</a>
									<div class="cart-dropdown"  >
										<div class="cart-list" id="cart_product">
										</div>
										<div class="cart-btns">
												<a href="cart.php" style="width:100%;"><i class="fa fa-edit"></i>  Edytuj Koszyk</a>
										</div>
									</div>
									</div>
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<nav id='navigation'>
            <div class="container" id="get_category_home">
            </div>
		</nav>
		<div class="modal fade" id="Modal_login" role="dialog">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                            <?php
                                include "login_form.php";
    
                            ?>
                            </div>
                          </div>
                        </div>
                      </div>
                <div class="modal fade" id="Modal_register" role="dialog">
                        <div class="modal-dialog" style="">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">Zaloguj się</button>
                            </div>
                            <div class="modal-body">
                            <?php
                                include "register_form.php";
                            ?>
                            </div>
                          </div>
                        </div>
                      </div>
		