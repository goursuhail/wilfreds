<?php
require_once('wilfreds_admin/db.php');

?>

<?php

try{



    $query = "INSERT INTO `register`(`name`, `email`, `phone`, `course`, `city`) values(:nam, :mail, :pho, :cour, :ciy)";
    //echo "$query";
    $stmt = $conn->prepare($query);

    $stmt->bindValue('nam', $_POST['first_name'] );
    $stmt->bindValue('mail', $_POST['first_mail'] );
    $stmt->bindValue('pho', $_POST['first_phone'] );
    $stmt->bindValue('cour', $_POST['first_course'] );
    $stmt->bindValue('ciy', $_POST['first_city'] );
    //print_r($_POST);
    $result = $stmt->execute();





    header('Location: thankyou.php');




}catch (PDOException $e){

}

?>
