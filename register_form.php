<html>
<head>
    <link rel="stylesheet" href="assets/css/bootstrap-min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
<div class="container">

    <div class="register">
        <form action="file-apply.php" method="post">
            <div class="head-register">
                <h2>Apply online</h2>
            </div>

            <div class="col col-md-9">

                    <div class="form-group">
                        <label for="exampleInputName">Name</label>
                        <input type="text" class="form-control" id="exampleInputName" name="first_name"
                               placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="first_mail"
                               placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhone">Phone</label>
                        <input type="text" class="form-control" id="exampleInputPhone" name="first_phone"
                               placeholder="Enter Phone">
                    </div>

                <div class="form-group">
                    <label>Courses</label>
                    <select name="first_course">
                        <option>B.tech</option>
                        <option>B.arch</option>
                        <option>LLB</option>
                        <option>ITI</option>
                        <option>BCA</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputCity">City</label>
                    <input type="text" class="form-control" id="exampleInputCity" name="first_city" placeholder="Enter City">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>

