<?php
/**
 * Created by PhpStorm.
 * User: king
 * Date: 01/04/2017
 * Time: 11:24
 */
// Inialize session
session_start();
include "../connection/db.php";
// Check, if user is already login, then jump to secured page
if (isset($_SESSION['logname']) && isset($_SESSION['rank'])) {
    switch($_SESSION['rank']) {

        case 1:
            header('location:../admin/index.php');//redirect to  page
            break;

    }
}elseif(!isset($_SESSION['logname']) && !isset($_SESSION['rank'])) {
    header('Location:../sessions.php');
}
else
{

    header('Location:index.php');
}
$username=$_SESSION['logname'];


$result1 = mysqli_query($con, "SELECT * FROM Login_table WHERE Login_Username='$username'");

while($res = mysqli_fetch_array($result1))
{
    $Login_Id= $res['Login_Id'];
}

$result1 = mysqli_query($con, "SELECT * FROM user_cipher_table WHERE user_cipher_user_id='$Login_Id'");

while($res = mysqli_fetch_array($result1))
{
    $user_cipher_cipher_id= $res['user_cipher_cipher_id'];

}
?>
<?php
?>
<?php include 'header.php';?>

    <div class="card">
        <div class="header">
            <h4 class="title">Encrypted Messages</h4>
            <p class="category">This a list of all encrypted texts</p>
        </div>
        <div class="">
            <table class="table table-responsive table-condensed table-bordered" style="font-family: 'Apple Color Emoji'">
                <thead class="bg-primary">
                <th style="width: 15%">Cipher ID</th>
                <th>Time</th>
                <th>Date</th>
                <th>Description</th>
                <th>Message</th>

                <th><i class="fa fa-user"></i> </th>
                </thead>
                <tbody>

                <?php

                $result = mysqli_query($con, "SELECT * FROM cipher_table WHERE cipher_id='$user_cipher_cipher_id' ");

                //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
                while($res = mysqli_fetch_array($result)) {
                    echo "<tr class=''>";
                    echo "<td class=''>".$res['cipher_id']."</td>";
                    echo "<td>".$res['cipher_time']."</td>";
                    echo "<td>".$res['cipher_date']."</td>";
                    echo "<td>".$res['cipher_description']."</td>";
                    echo "<td>".$res['cipher_text']."</td>";

                    echo "<td><a href=\"decrypt.php?id=$res[cipher_id]\" onClick=\"return confirm('Are you sure you want to decrypt?')\" class='fa fa-unlock lg-2'></a></td>";


                }
                ?>

                </tbody>
                <tfoot class="bg-warning">
                <tr>

                    <td>Cipher ID</td>
                    <td>Time</td>
                    <td>Date</td>
                    <td>Description</td>
                    <td>Message</td>
                    <td><i class="fa fa-user"></i> </td>
                </tr>

                </tfoot>
            </table>
        </div>
    </div>
                <!-- END OF TABLE -->
 <?php include "footer.php";?>