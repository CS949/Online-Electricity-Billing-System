<?php
        #sample connection to database with name test
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "electricitybillingsystem"; #can be any name 
        $conn = new mysqli($server, $username, $password, $dbname);
        if($conn->connect_error){
            die("Connection failed.".$conn->connect_error);
        }else{
            if(isset($_REQUEST['user'])){
               if($_REQUEST['Username']!=""&&$_REQUEST['Fullname']!=""&&$_REQUEST['Pass']!=""){
                    $input = $_REQUEST['Username'];    
                    $input1 = $_REQUEST['Fullname'];
                    $input2 = $_REQUEST['Pass'];  
                    echo '<script>alert("Data taken successfull")</script>';
                    echo '<script>windows: location="user.php"</script>';
                    $sql = "INSERT INTO user(Username,Fullname,Pass) VALUES('$input','$input1','$input2')";
                  
                    if($conn->query($sql)===TRUE){
                        echo "\n\nThe value is taken into table";
                    }
                    else{
                      echo "\n error in executing";
                    }
                }else{
                    echo "\nThe value is not provided.";
                }

            }
        }
?>