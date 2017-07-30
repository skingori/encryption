<?php
/**
 * Created by PhpStorm.
 * User: king
 * Date: 01/04/2017
 * Time: 11:24
 */
// Inialize session
session_start();

// Create connection
include "../connection/db.php";
// Check connection
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
$cipherid=$_GET['id'];




if(isset($_POST['add'])) {

    $user_cipher_user_id_ =$_POST['user_cipher_user_id'];
    $user_cipher_cipher_id_ =$_POST['user_cipher_cipher_id'];




    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "INSERT INTO user_cipher_table(user_cipher_user_id,user_cipher_cipher_id)
VALUES ('$user_cipher_user_id_','$user_cipher_cipher_id_')";

    if ($con->query($sql) === TRUE) {
        $msg = "<div class='alert alert-success'>
            <span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
            </div>";
    } else {

        $msg = "<div class='alert alert-danger'>
            <span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
            </div>" . $sql . "<br>" . $con->error;
    }

    $con->close();
}

?>

<?php include "header.php";?>

    <!-- Add content -->

    <form id="" method="POST">
        <?php
        if (isset($msg)) {
            echo $msg;
        }
        ?>
        <div class="form-group">
            <label>Cipher ID:</label>
           <input type="text" value="<?php echo $cipherid;?>" class="form-control" name="user_cipher_cipher_id" readonly>
        </div>
        <div class="form-group">
            <label>User ID:</label>
            <input type="text" value="<?php echo $cipherid;?>" class="form-control" name="user_cipher_user_id" readonly>
        </div>

        <div class="form-group">

            <button type="submit" class="btn btn-primary" name="add" >Assign Message</button>

        </div>


    </form>
<small><b style="color: red" >Note:</b> These input fields have been disabled to prevent alter and sending private message to the wrong destination. </small>
    <!-- #END# add content -->

<?php include "footer.php";?>