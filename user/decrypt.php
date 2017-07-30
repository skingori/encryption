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
?>
<?php

$cipherid=$_GET['id'];

$result1 = mysqli_query($con, "SELECT * FROM cipher_table WHERE cipher_id='$cipherid'");

while($res = mysqli_fetch_array($result1))
{
    $cipher_description= $res['cipher_description'];
    $cipher_text=$res['cipher_text'];
    $dec = base64_decode($cipher_text);

}



if(isset($_POST['add'])) {
    $cipher_id_ =$_POST['cipher_id'];
    $cipher_description_ =$_POST['cipher_description'];
    $cipher_text_ =$_POST['cipher_text'];


    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "INSERT INTO decrypt_table(decrypt_id,decrypt_description,decrypt_time,decrypt_date,decrypt_text)
VALUES ('$cipher_id_' ,'$cipher_description_',NOW(),NOW(),'$cipher_text_')";

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


        <div class="form-group label-floating">
            <label class="control-label">Decrypt id</label>
            <input type="text" class="form-control"  name="cipher_id" value="<?php echo $cipherid;?>" readonly>
        </div>
        <div class="form-group label-floating">
            <label class="control-label">Description</label>
            <input type="text" class="form-control" name="cipher_description" value="<?php echo $cipher_description;?>" readonly>
        </div>
        <div class="form-group label-floating">
            <label class="control-label">Message</label>
            <textarea rows="5" class="form-control" name="cipher_text" readonly><?php echo $dec;?></textarea>
        </div>


        <div class="form-group">

            <button type="submit" class="btn btn-primary" name="add" >Save</button>

        </div>


    </form>

    <!-- #END# add content -->

<?php include "footer.php";?>