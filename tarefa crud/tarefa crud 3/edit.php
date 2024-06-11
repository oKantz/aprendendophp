<?php
require_once 'connect.php';

require_once 'header.php';

?>

<div class="container">

<?php

    if(isset($_POST['update'])){
        if( empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['adress']) || empty($_POST['contact']) )
    {
        echo "Please fillout all required fields";

    }else{
        
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $adress = $_POST['adress'];
        $contact = $_POST['contact'];
        $sql = "UPDATE users SET firstname='{$firstname}', lastname='{$lastname}', 
        adress='{$adress}', 
        contact='{$contact}' WHERE user_id=" . $_POST['userid'];

        if( $con->query($sql) === TRUE){
            echo "<div class='alert alert-sucess'> Sucessfully updated user </div>";
        }else{
            echo "<div class='alert alert-danger'> Error: There was an error while updating user info</div>";
        }
    }
}

$id = $isset($_GET['id']) ? (int) $_GET['id'] : 0;

$sql = "SELECT * FROM users WHERE user_id={$id}";

$result = $con->query($sql);

if($result->num_rows < 1){
    header('Location: index.php')
    exit;
}

$row = $result->fetch_assoc();

?>

<div class="row">

<div class="col-md-6 col_md-offset-3">

<div class="box">

<h3><i class="glyphicon glyphicon-plus"></i>&nbsp;MODIFY User</h3>

<form action="" method="POST">

    <input type="hidden" value="<?php echo $row['user_id']; ?>" name="userid">

    <label for="firstname">Firstname</label>

    <input type="text" id="firstname" name="firstname" value="<?php echo $row['firstname']; ?>" class="form-control"> <br>

    <label for="lastname">Lastname</label>

    <input type="text" id="lastname" name="lastname" value="<?php echo $row['lastname']; ?>" class="form-control"> <br>

    <label for="adress">Adress</label>

    <textarea rows="4" name="adress" class="form-control"><?php echo $row['adress']; ?></textarea>

    <label for="contact">Contact</label>

    <input type="text" name="contact" id="contact" value="<?php echo $row['contact']; ?>" class="form-control"> <br>

    <br>

    <input type="submit" name="update" class="btn btn-sucess" value="Update">

</form>

</div>
</div>

</div>
</div>  

<?php
require_once 'footer.php';
