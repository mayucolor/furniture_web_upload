<?php
    include 'Database.php';

    class SQL extends Database{
        public function insertToTable($name, $pic){
            $sql= "INSERT into pic(name, image) VALUES('$name', '$pic')";

            if($this->conn->query($sql)){
                //successful in inserting the picture
                return 1;
            }else{
                echo "Not saved " .$this->conn->error;
                return 0;
            }
        }

        public function searchSpecificImage($id){
            $sql = "SELECT * FROM  pic WHERE id = '$id'";
            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();

            return $row;
        }
        public function showAllImages(){
            $sql = "select * from pic";

            $rows = array();
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $rows[] = $row;
                }

                return $rows;
            }
        }
        public function getSpecificImage($id){
            $sql = "SELECT * FROM pic WHERE id = '$id'";
            $result = $this->conn->query($sql);

            $row = $result->fetch_assoc();

            return $row;
        }

        public function insertIntoFurniture($name,$category,$price,$id){
    
            $sql = "INSERT INTO items(item_name, category, item_price, id)
                                VALUES ('$name','$category','$price','$id')";
            
            if($this->conn->query($sql)){
                header('Location: adminmenu.php');
            }else{
                echo "Error in inserting the record to the employee table.".$this->conn->error;
            }
        }
        public function getValues($email,$pass){
            $sql = "SELECT*FROM login WHERE email = '$email' AND password = '$pass'";
            $result = $this->conn->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $_SESSION['id'] = $row["loginid"];
                   
                    if($row["status"]=="A"){
                        header("Location: adminmenu.php");
                    }else{
                        header("Location: userLoginDisplay.php");
                    }
                }
            }else{
                echo "Email and password error";
            }
        }
        public function insertUserData($fname,$lname,$email,$pass){
    
            $sql = "INSERT INTO login(email, password) VALUES ('$name','$category','$price','$id)";
            
            if($this->conn->query($sql)){
                header('Location: message.html');
            }else{
                echo "Error in inserting the record to the employee table.".$this->conn->error;
            }
        }
        
    }
?>
function insertIntoTable($name,$email,$pass){
            require_once 'connection.php';

            $sql = "INSERT INTO login(email,password) VALUE ('$email','$pass')";
            if($conn->query($sql)){

                $lastID = $conn->insert_id;

                $sql2 = "INSERT INTO user(name,loginid) VALUES('$name','$lastID')";
                if($conn->query($sql2)){
                    header("Location: login.php");
                }else{
                    echo "Error in inserting to user table.".$conn->error;
                }
            }else{
                echo "Error in inserting to the login table." .$conn->error;
            }
            
            $conn->close();
        }