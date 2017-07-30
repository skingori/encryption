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

        case 2:
            header('location:../user/index.php');//redirect to  page
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


    <div class="content table-responsive">
        <table class="table table-striped">
            <thead class="bg-primary">
            <th style="width: 15%">Login ID</th>
            <th style="width: 20%">Login Username</th>
            <th>Login Rank</th>

            </thead>
            <tbody>

            <?php

            $result = mysqli_query($con, "SELECT * FROM Login_table WHERE Login_Id <> '$Login_Id' ");

            //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
            while($res = mysqli_fetch_array($result)) {
                echo "<tr class=''>";
                echo "<td class=''>".$res['Login_Id']."</td>";
                echo "<td class=''>".$res['Login_Username']."</td>";
                echo "<td>".$res['Login_Rank']."</td>";




            }
            ?>

            </tbody>
            <tfoot class="bg-danger">
            <tr>

                <th style="width: 15%">Login ID</th>
                <th style="width: 15%">Login Username</th>
                <th>Login Rank</th>

            </tr>

            </tfoot>
        </table>
    </div>
    <!-- END OF TABLE -->
<?php include "footer.php";?>