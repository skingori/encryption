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

?>
<?php
?>
<?php include 'header.php';?>


    <div class="content table-responsive table-full-width">
        <table class="table table-striped">
           <thead class="bg-primary">
            <th style="width: 15%">Decrypt ID</th>
            <th>Time</th>
            <th>Date</th>
            <th>Description</th>
            <th>Message</th>

            </thead>
            <tbody>

            <?php

            $result = mysqli_query($con, "SELECT * FROM decrypt_table WHERE decrypt_id='$Login_Id' ");

            //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
            while($res = mysqli_fetch_array($result)) {
                echo "<tr class=''>";
                echo "<td class=''>".$res['decrypt_id']."</td>";
                echo "<td>".$res['decrypt_time']."</td>";
                echo "<td>".$res['decrypt_date']."</td>";
                echo "<td>".$res['decrypt_description']."</td>";
                echo "<td>".$res['decrypt_text']."</td>";



            }
            ?>

            </tbody>
            <tfoot class="bg-danger">
            <tr>

                <th>Cipher ID</th>
                <th>Time</th>
                <th>Date</th>
                <th>Description</th>
                <th>Message</th>

            </tr>

            </tfoot>
        </table>
    </div>

    <!-- END OF TABLE -->
<?php include "footer.php";?>