<?php 
    include 'inc/header.php';
    include 'lib/User.php';
    $user = new User();
?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>User List <span class="pull-right"><strong>WELCOME! user</strong></span></h2>
            </div>
            <div class="panel-body">
                <table class="table table-striped">
                 <tr>
                    <th width="20%">Serial</th>
                    <th width="20%">Name</th>
                    <th width="20%">Username</th>
                    <th width="20%">Email</th>
                    <th width="20%">Action</th>
                 </tr>
                 <tr>
                    <td>01</td>
                    <td>Abrar</td>
                    <td>abm.abrar</td>
                    <td>abrar@gmail.com</td>
                    <td>
                        <a class="btn btn-primary" href="profile.php?id=1">View</a>
                    </td>
                 </tr>

                 <tr>
                    <td>02</td>
                    <td>Haque</td>
                    <td>a.haque</td>
                    <td>haque@gmail.com</td>
                    <td>
                        <a class="btn btn-primary" href="profile.php?id=1">View</a>
                    </td>
                 </tr>

                 <tr>
                    <td>03</td>
                    <td>Roy</td>
                    <td>abhoy.roy</td>
                    <td>roy@gmail.com</td>
                    <td>
                        <a class="btn btn-primary" href="profile.php?id=1">View</a>
                    </td>
                 </tr>
                </table>
            </div>
        </div> 
<?php
    include 'inc/footer.php';
?>