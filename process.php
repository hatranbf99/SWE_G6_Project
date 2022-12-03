<?php
require_once('config.php'); 
?>

<?php

if(isset($_POST)){
    $Fname      = $_POST['Fname'];
    $Lname       = $_POST['Lname'];
    $phone          = $_POST['phone'];
    $username    = $_POST['username'];
    $password       = sha1($_POST['password']);

        $sql = "INSERT INTO users (Fname, Lname, phone, username, password ) VALUES(?,?,?,?,?)";
        $stminsert = $db->prepare($sql);
        $result = $stminsert->execute([$Fname, $Lname, $phone, $username, $password]);
        if($result){
            echo 'Successfully saved!';
        }else{
            echo 'There was an error while saving the data.';
        }
}else{
    echo 'No data';
}

?>