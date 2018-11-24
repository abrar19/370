<?php 
    include 'inc/header.php';
    include 'lib/User.php';
?>
<?php
    $user = new User(); 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])){
        $usrRegi = $user->userRegistration($_POST);
    }
?>
 <div class="panel panel-default">
            <div class="panel-heading">
                <h2>User Registration</h2>
            </div>
            <div class="panel-body">
                <div style="max-width:600px; margin:0 auto">
                    <form action="" method="POST">

                        <div class="form-group">
                            <label for="name">First Name: </label>
                            <input type="text" id="FirstName" name="FirstName" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="name">Last Name: </label>
                            <input type="text" id="LastName" name="LastName" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" id="Email" name="Email" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="contact">Contact No: </label>
                            <input type="text" id="Contactno" name="Contactno" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="Password" name="Password" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender: </label>
                            <input type="text" id="Gender" name="Gender" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="address">Address: </label>
                            <input type="text" id="Address" name="Address" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="city">City: </label>
                            <input type="text" id="City" name="City" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="street">Street: </label>
                            <input type="text" id="Street" name="Street" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="zip">ZIP: </label>
                            <input type="text" id="Zip" name="Zip" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="state">State: </label>
                            <input type="text" id="State" name="State" class="form-control" />
                        </div>
                        <button type="submit" name="register" class="btn btn-success">Submit</button>

                    </form>
                </div>
            </div>
        </div> 

<?php
    include 'inc/footer.php';
?>