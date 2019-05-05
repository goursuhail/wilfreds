<?php require_once ('techno-header.php'); ?>

<div class="container">
    <div class="row">
    <div class="col">
    <div class="header-margin">
        <h2>Contact Us:</h2>
    </div>
        <div class="row1">
        <div id="campus-margin">
            <h4>Ajmer Main Campus</h4>
        </div>
            <div class="address">
            <p>
                <strong>
                    Gegal, Near Balaji, Jaipur Road, Ajmer- 305023 (Rajasthan)
                    Ph: 8824983619, 9587982774, 9214210692, 7300159539
                </strong>
            </p>
        </div>
        </div>
        <div class="row1">
            <div id="campus-margin">
                <h4>Ajmer City Campus</h4>
            </div>
            <div class="address">
                <p>
                    <strong>
                        Integral Urban Co-operative Bank, Khailand Market, P.R Marg, Ajmer.<br>
                        Ph: 8824983619, 9587982774, 9214210692, 7300159539
                    </strong>
                </p>
            </div>
        </div>

    </div>

    <div class="form-col1">
        <form action="file-apply.php" method="post">
            <div class="apply-online">
                <h2>Apply Online</h2>
            </div>
            <div class="form-row1">
            <div class="col col-md-9">
            <div class="form-group">
                <label for="exampleInputName" class="name">Name</label>
                <input type="text" class="form-control" id="exampleInputName" name="first_name" placeholder="Enter Name">
            </div>
            </div>
            <div class="col col-md-9">
            <div class="form-group">
                <label for="exampleInputPass">Phone</label>
                <input type="text" class="form-control" id="exampleInputPass" name="first_phone" placeholder="Enter phone">
            </div>
            </div>

            <div class="col col-md-9">
            <div class="form-group">
                <label for="exampleInputPass">Email</label>
                <input type="text" class="form-control" id="exampleInputPass" name="first_mail" placeholder="Enter Email">
            </div>
            </div>
            <div class="col col-md-9">
            <div class="form-group">
                <label for="exampleInputPass">Courses Offered</label>
                <select name="first_course" id="college-choose">
                    <option>B.Tech</option>
                    <option>B.Arch</option>
                    <option>LLB</option>
                    <option>BCA</option>
                    <option>ITI</option>
                </select>
            </div>
            </div>
                <div class="col col-md-9">
                    <div class="form-group">
                        <label for="exampleInputPass">City</label>
                        <input type="text" class="form-control" id="exampleInputPass" name="first_city" placeholder="Enter City">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
</div>

<?php require_once ('footer.php'); ?>