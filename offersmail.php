<?php
session_start();
include "db.php";
if (isset($_POST["email"])) {
    $email = $_POST['email'];
    $emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
    
    if(empty($email)){
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Proszę wypęłnić wszystkie pola!</b>
			</div>
		";
		exit();
    }else{
        if(!preg_match($emailValidation,$email)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Ten $email jest nieprawidłowy</b>
			</div>
		";
		exit();
	}
        $sql = "SELECT email_id FROM email_info WHERE email = '$email' LIMIT 1" ;
        $check_query = mysqli_query($con,$sql);
        $count_email = mysqli_num_rows($check_query);
        if($count_email > 0){
            echo "
                <div class='alert alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <b>Adres Email jest już zajęty</b>
                </div>
            ";
            exit();
        }else{
            $sql = "INSERT INTO `email_info` 
            (`email_id`, `email`)
            VALUES (NULL, '$email')";
            $run_query = mysqli_query($con,$sql);
                echo "<div class='alert alert-success'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <b>Dziękujemy za Subskrybcje/b>
                </div>";
            }
    }
}
?>