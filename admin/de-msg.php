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
?>
<?php include 'header.php';?>

    <!-- END OF WIDGETS -->
    <div class="card">
        <div class="header">
            <h4 class="title">Decrypted Messages</h4>
            <p class="category">This a list of all decrypted texts</p>
        </div>
        <div class="">
            <table class="table table-responsive table-condensed table-bordered" style="font-family: 'Apple Color Emoji'">
                <thead class="bg-primary">
                <th style="width: 15%">Decrypt ID</th>
                <th>Time</th>
                <th>Date</th>
                <th>Description</th>
                <th>Message</th>

                <th><i class="fa fa-trash-o"></i> </th>
                </thead>
                <tbody>

                <?php

                $result = mysqli_query($con, "SELECT * FROM decrypt_table ORDER BY decrypt_id ASC");

                //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
                while($res = mysqli_fetch_array($result)) {
                    echo "<tr class=''>";
                    echo "<td class=''>".$res['decrypt_id']."</td>";
                    echo "<td>".$res['decrypt_time']."</td>";
                    echo "<td>".$res['decrypt_date']."</td>";
                    echo "<td>".$res['decrypt_description']."</td>";
                    echo "<td>".$res['decrypt_text']."</td>";
                    echo "<td><a href=\"delete.php?de=$res[decrypt_id]\" onClick=\"return confirm('Are you sure you want to delete?')\" class='fa fa-trash-o lg-2'></a></td>";

                }
                ?>

                </tbody>
                <tfoot class="alert-warning">
                <tr>

                    <th>Decrypt ID</th>
                    <th>Time</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Message</th>
                    <th><i class="fa fa-user"></i> </th>
                </tr>

                </tfoot>
            </table>
        </div>
    </div>

    <!-- END OF TABLE -->
<?php include "footer.php";?>