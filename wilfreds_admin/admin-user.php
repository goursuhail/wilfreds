<?php require_once('header.php'); ?>

<?php require_once('db.php'); ?>
<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location: log-in.php');
    ?>
    <?php
}
?>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">#Admin User</h1>
    </div>

    <div class="container">
        <?php

        try{

        $query = 'SELECT * FROM `admin_user`';
        $stmt = $conn->query($query);
        ?>


        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Password</th>

            </tr>
            </thead>

            <?php
            while($row = $stmt->fetch()){


            ?>
            <tbody>
            <tr>

                <td><?php echo $row['a_id']; ?></td>
                <td><?php echo $row['user_name']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['password']; ?></td>

            </tr>
            <?php
            }
            ?>

            <?php
            }catch (PDOException $e){

            }
            ?>
            </tbody>
        </table>
    </div>

</main>


<?php require_once('footer.php'); ?>
