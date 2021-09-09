<?php
  if (!isset($_SESSION['admin_name'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: .././login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['admin_name']);
    header("location: .././login.php");
  }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Sklep Anime|Admin
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
</head>

<body class="dark-edition">
    <div class="wrapper ">
        <div class="sidebar" data-color="White" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
            <div class="logo"><a href="index.php" class="simple-text logo-normal">
                    <img src="./assets/img/Campture.jpg" style="width: 150px;">
                </a></div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active  ">
                        <a class="nav-link" href="index.php">
                            <i class="material-icons">dashboard</i>
                            <p>Menu</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="addsuppliers.php">
                            <i class="material-icons">person</i>
                            <p>Dodaj Użytkowników</p>
                        </a>
                        
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="add_products.php">
                        <i class="material-icons">add</i>
                        <p>Dodaj Produkty</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products_list.php">
                        <i class="material-icons">list</i>
                        <p>Lista Produktów</p>
                        </a>
                        
                    </li>
                     <li class="nav-item ">
                        <a class="nav-link" href="manageuser.php">
                            <i class="material-icons">person</i>
                            <p>Zarządzaj Użytkownikami</p>
                        </a>
                    </li>
                    <li class="nav-item ">
            <a class="nav-link" href="activity.php">
              <i class="material-icons">timeline</i>
              <p>Aktywność</p>
            </a>
          </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="profile.php">
                            <icons-image _ngcontent-aye-c22="" _nghost-aye-c19=""><i _ngcontent-aye-c19="" class="material-icons icon-image-preview">settings</i></icons-image>
                            <p>Ustawienia</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="salesofday.php">
                            <i class="material-icons">library_books</i>
                            <p>Zamówienia</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../../chat/login.php">
                            <i class="material-icons">notifications</i>
                            <p>Powiadomienia</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>