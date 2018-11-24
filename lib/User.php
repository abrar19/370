<?php
 include_once 'Session.php';
 include 'Database.php';
    class User{
        private $db;
        public function __construct(){
            $this->db = new Database();
        }

        public function userRegistration($data){
                $FirstName = $data['FirstName'];
                $LastName = $data['LastName'];
                $Email = $data['Email'];
                $Contactno = $data['Contactno'];
                $Password = $data['Password'];
                $Gender = $data['Gender'];
                $Address = $data['Address'];
                $City = $data['City'];
                $Street = $data['Street'];
                $Zip = $data['Zip'];
                $State = $data['State'];

                $sql = "INSERT INTO customer (FirstName, LastName, Email, Contactno, Password, Gender, Address, City, Street, Zip, State) VALUES (:FirstName, :LastName, :Email, :Contactno, :Password, :Gender, :Address, :City, :Street, :Zip, :State)";
                
                $query = $this->db->pdo->prepare($sql);
                $query->bindValue(':FirstName', $FirstName);
                $query->bindValue(':LastName', $LastName);
                $query->bindValue(':Email', $Email);
                $query->bindValue(':Contactno', $Contactno);
                $query->bindValue(':Password', $Password);
                $query->bindValue(':Gender', $Gender);
                $query->bindValue(':Address', $Address);
                $query->bindValue(':City', $City);
                $query->bindValue(':Street', $Street);
                $query->bindValue(':Zip', $Zip);
                $query->bindValue(':State', $State);
                $result = $query->execute();
                if($result){
                    $msg = "<div class='alert alert-success'><strong>Success !</strong>Thank You. You have been registered.</div>";
                    return $msg;
                }else{
                    $msg = "<div class='alert alert-danger'><strong>Error !</strong>Sorry. Problem registering.</div>";
                    return $msg;
                }
            
        }
    }
?>