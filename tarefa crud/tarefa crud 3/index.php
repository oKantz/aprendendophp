<?php

Author: Samuel

require_once 'header.php';
?>

<div class="container">

    <div class="jumbotron">
    <h1> Basic CRUD in PHP</h1>]
</div>
</div>

<?php
require_once 'connect.php';
require_once 'header.php';
?>

<div class="container">
    <?php
    if(isset($_POST['addnew'])){
        if( empty($_POST['firstname'])) || empty($_POST['lastname']) || empty($_POST['adress']) || empty($_POST['contact']){

            echo "Please fillout all required fields";
        }else{
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $adress = $_POST['adress'];
            $contact = $_POST['contact'];
            $sql = "INSERT INTO users(firstname, lastname, adress, contact)
            values('$firstname', '$lastname', '$adress', '$contact')";

            if( $con->query($sql) === TRUE){
                echo "<div class='alert alert-sucess'> Sucessfully added new user </div>";



            }else{
                echo "<div class='alert alert-danger'> Error: There was an error while adding new user</div>
            }
        
         }

        }
    }