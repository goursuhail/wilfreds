<?php
require_once('wilfreds_admin/db.php');
require_once ('mail.php');
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


    $register_id = $conn->lastInsertId();


    ob_start();
    ?>
    <h1>A new registration has been received</h1>
    <table cellspacing="3" border="1px solid black" style="border-collapse: collapse;">


        <tr>
            <th>Register Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Course</th>
            <th>city</th>
        </tr>



            <tr>
                <td><?php echo $register_id ?></td>
                <td><?php echo $_POST['first_name']; ?></td>
                <td><?php echo $_POST['first_mail']; ?></td>
                <td><?php echo $_POST['first_phone']; ?></td>
                <td><?php echo $_POST['first_course']; ?></td>
                <td><?php echo $_POST['first_city']; ?></td>
            </tr>

    </table>

    <?php

    $mail_body = ob_get_contents();
    ob_end_clean();

    //$mail_body = "<h1>A new order has been received <br> Order ID ".$order_id." <br> Name $_POST['nam']; <br> Quantity ".$oli['qty']."; <br> Unit Price ".$oli['unit_price'].";  <br> Total Price ".$total."</h1>";
    $subject = "Registration has been recieved";
    mail_send('suhailgour143@gmail.com', $subject, $mail_body);




    header('Location: thankyou.php');




}catch (PDOException $e){

}

?>
