<?php

require_once 'connect.php';
require_once 'header.php'; 

echo "<div class='container'>";

if(isset($_POST['delete'])){
    $sql = "DELETE FROM users WHERE user_id=" . $_POST['userid'];
    if($con->query($sql)=== TRUE){
        echo "<div class='alert alert-sucess'>Sucessfully delete user</div>";

    }

}

$sql = "SELECT * FROM users";
$result = $con->query($sql);
if( $result->num_rows > 0)
{
    ?>
    <h2>List of all Users</h2>

    <table class="table table-bordered table-striped">

    <tr>

    <td>Firstname</td>
    <td>Lastname</td>
    <td>Adress</td>
    <td>Contact</td>
    <td width="70px">Delete</td>
    <td width="70px">EDIT</td>

</tr>

<?php

while( $row = $result->fetch_assoc()){
    echo "<form action='' method='POST'>";

    echo "<input type='hidden' value='" . $row['user_id']."' name='userdid' />";

    echo "<tr>";
    echo "<td>"
}