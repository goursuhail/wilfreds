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
        <h1 class="h2">#Register</h1>

        <!-- search bar-->
        <div class="container">
            <form class="form-inline">

                <div class="form-group mb-2">
                    <select name="search_field">
                        <option value="r_id">Id</option>
                        <option value="name">Name</option>
                    </select>
                </div>

                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only">search</label>
                    <input type="text" class="form-control" name="search" id="inputPassword2" placeholder="search....">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Search</button>
            </form>
        </div>
    </div>

    <div class="container">
        <?php

        try{

            $search = '';

        if(isset($_GET['search']) && $_GET['search'] != ''){
            $search = $_GET['search'];
        }

        $query = 'SELECT * FROM `register`';

        if($search != ''){

            $query = $query." WHERE ".$_GET['search_field']." = '".$search."'";


        }
        $stmt = $conn->query($query);
        ?>


        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Register Id</th>
                <th scope="col">Name</th>
                <th scope="col">E-mail</th>
                <th scope="col">Phone</th>
                <th scope="col">Course</th>
                <th scope="col">City</th>
            </tr>
            </thead>

            <?php
            while($row = $stmt->fetch()){


            ?>
            <tbody>
            <tr>

                <td><?php echo $row['r_id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['course']; ?></td>
                <td><?php echo $row['city']; ?></td>
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
