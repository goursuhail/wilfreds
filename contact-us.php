<?php require_once ('header.php'); ?>

<div class="container">
    <div class="row">
    <div class="col">
    <div class="header-margin">
        <h2>Contact Us:</h2>
    </div>

        <div id="campus-margin">
            <h4>Ajmer Campus</h4>
        </div>
            <div class="address">
            <p>
                <strong>
                    Gegal, Near Balaji, Jaipur Road, Ajmer- 305023 (Rajasthan)
                    Ph: 0145-2310137,3206162
                </strong>
            </p>
        </div>

    </div>

    <div class="form-col1">
        <form>
            <div class="apply-online">
                <h2>Apply Online</h2>
            </div>
            <div class="form-row1">
            <div class="col col-md-6">
            <div class="form-group">
                <label for="exampleInputName" class="name">Name</label>
                <input type="text" class="form-control" id="exampleInputName"  placeholder="Enter Name">
            </div>
            </div>
            <div class="col col-md-6">
            <div class="form-group">
                <label for="exampleInputPass">Phone</label>
                <input type="text" class="form-control" id="exampleInputPass" placeholder="Enter phone">
            </div>
            </div>
            <div class="col col-md-6">
            <div class="form-group">
                <label for="exampleInputPass">Class</label>
                <input type="text" class="form-control" id="exampleInputPass" placeholder="Enter Class">
            </div>
            </div>
            <div class="col col-md-6">
            <div class="form-group">
                <label for="exampleInputPass">Email</label>
                <input type="text" class="form-control" id="exampleInputPass" placeholder="Enter Email">
            </div>
            </div>
            <div class="col col-md-6">
            <div class="form-group">
                <label for="exampleInputPass">Select college, you want to apply</label>
                <select name="choose" id="college-choose">
                    <option>B.tech</option>
                    <option>B.arch</option>
                </select>
            </div>
            </div>
            <div class="col col-md-6">
            <div class="form-group">
                <label>Message</label>
                <textarea name="" rows="4" cols="50"></textarea>
            </div>
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
</div>

<?php require_once ('footer.php'); ?>