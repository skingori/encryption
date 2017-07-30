<?php
/**
 * Created by PhpStorm.
 * User: king
 * Date: 02/04/2017
 * Time: 00:07
 */


//including the database connection file
include("../connection/db.php");

if (isset($_GET['id'])) {
//getting id of the data from url
    $id = $_GET['id'];

//deleting the row from table
    $result = mysqli_query($con, "DELETE FROM cipher_table WHERE cipher_id=$id ");
//$result = mysqli_query($con, "DELETE FROM login_table WHERE login_username=$id");

//redirecting to the display page (index.php in our case)
    header("Location:index.php");
}


if (isset($_GET['de'])){
    $de =$_GET['de']; //deleting feeds
    $result = mysqli_query($con, "DELETE FROM decrypt_table WHERE decrypt_id=$de ");

    header("Location:de-msg.php");

}


?>