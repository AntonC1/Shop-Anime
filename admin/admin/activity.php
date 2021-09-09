
    <?php
session_start();
include("../../db.php");
error_reporting(0);
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$order_id=$_GET['order_id'];

mysqli_query($con,"delete from orders where order_id='$order_id'")or die("zapytanie jest nieprawidłowe...");
} 

$page=$_GET['page'];
if($page=="" || $page=="1")
{
$page1=0;	
}
else
{
$page1=($page*10)-10;	
}
include "sidenav.php";
include "topheader.php";

?>
      <div class="content">
        <div class="container-fluid">
          <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Aktywność / Strona <?php echo $page;?> </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                      <tr><th>Id użytkownika</th><th>Email użytkownika</th><th>Numer telefonu</th><th>Zalogowany</th><th>Wylogowany</th><th></th>
                    </tr></thead>
                    <tbody>
                      <?php 
                        $result=mysqli_query($con,"select user_id, email,mobile,last_login,last_logout from user_info Limit $page1,10")or die ("zapytanie niepoprawne");

                        while(list($user_id,$email,$mobile,$last_login,$last_logout)=mysqli_fetch_array($result))
                        {	
                        echo "<tr><td>$user_id</td><td>$email</td><td>$mobile</td><td>$last_login</td><td>$last_logout</td>

                        </tr>";
                        }
                        ?>
                    </tbody>
                  </table >
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>

            </div>
          </div>
             <div class="col-md-14">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Działalność / Dostawca</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ps">
                  <table class="table table-hover tablesorter " id="">
                    <thead class=" text-primary">
                    <tr><th>Id użytkownika</th><th>Email użytkownika</th><th>Numer telefonu</th><th>Zalogowany</th><th>Wylogowany</th><th></th>
                    </tr></thead>
                    <tbody>
                      <?php 
                        $result=mysqli_query($con,"select user_id, email,mobile,login_time,logout_time from user_info Limit $page1,10")or die ("zapytanie niepoprawne");

                        while(list($user_id,$email,$mobile,$last_login,$last_logout)=mysqli_fetch_array($result))
                        { 
                        echo "<tr><td>$user_id</td><td>$email</td><td>$mobile</td><td>$last_login</td><td>$last_logout</td>

                        </tr>";
                        }
                        ?>
                    </tbody>
                  </table >
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
include "footer.php";
?>