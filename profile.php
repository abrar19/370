<?php 
    include 'inc/header.php';
?>

<div class="panel panel-default">
    <div class="panel-heading">
            <h2>User Profile <span class="pull-right"><a class="btn btn-primary" href="index.php">Back</a></h2>
    </div>
        <div class="panel-body">
            <div style="max-width:600px; margin:0 auto">
                <form action="" method="POST">

                   <div class="form-group">
                            <label for="name">First Name: </label>
                            <input type="text" id="fname" name="fname" class="form-control" required=""/>
                        </div>

                        <div class="form-group">
                            <label for="name">Last Name: </label>
                            <input type="text" id="lname" name="lname" class="form-control" required=""/>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control" required=""/>
                        </div>

                        <div class="form-group">
                            <label for="contact">Contact No: </label>
                            <input type="text" id="contact" name="contact" class="form-control" required=""/>
                        </div>

                        <div class="form-group">
                            <label for="address">Address: </label>
                            <input type="text" id="address" name="address" class="form-control" required=""/>
                        </div>

                        <div class="form-group">
                            <label for="city">City: </label>
                            <input type="text" id="city" name="city" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="street">Street: </label>
                            <input type="text" id="street" name="street" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="zip">ZIP: </label>
                            <input type="text" id="zip" name="zip" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="state">State: </label>
                            <input type="text" id="state" name="state" class="form-control" />
                        </div>

                    <button type="submit" name="update" class="btn btn-success">Update</button>

                </form>
            </div>
        </div>
    </div> 

<?php
    include 'inc/footer.php';
?>