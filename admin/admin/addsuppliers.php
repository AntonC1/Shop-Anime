 <?php
session_start();
include("../../db.php");
include "sidenav.php";
include "topheader.php";
if(isset($_POST['btn_save']))
{
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$user_password=$_POST['password'];
$mobile=$_POST['phone'];
$address1=$_POST['city'];
$address2=$_POST['country'];

mysqli_query($con,"insert into user_info(first_name, last_name,email,password,mobile,address1,address2) values ('$first_name','$last_name','$email','$user_password','$mobile','$address1','$address2')") 
			or die ("zapytanie niepoprawne");
mysqli_close($con);
}
?>
      <div class="content">
        <div class="container-fluid">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Dodaj Użytkownika</h4>
                  <p class="card-category">Profil</p>
                </div>
                <div class="card-body">
                  <form action="" method="post" name="form" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Imie</label>
                          <input type="text" id="first_name" name="first_name" class="form-control" Wymagane>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Nazwisko</label>
                          <input type="text" name="last_name" id="last_name"  class="form-control" Wymagane>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" name="email" id="email" class="form-control" Wymagane>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Hasło</label>
                          <input type="password" id="password" name="password" class="form-control" Wymagane>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Numer Telefonu</label>
                          <input type="text" id="phone" name="phone" class="form-control" Wymagane>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Miasto</label>
                          <input type="text" name="city" id="city"  class="form-control" Wymagane>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Adres</label>
                          <input type="text" name="country" id="country" class="form-control" Wymagane>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="btn_save" id="btn_save" class="btn btn-primary pull-right">Dodaj</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
      <?php
include "footer.php";
?>