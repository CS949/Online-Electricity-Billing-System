<?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "electricitybillingsystem";
        $conn = new mysqli($server, $username, $password, $dbname);
        if($conn->connect_error){
            die("Connection failed.".$conn->connect_error);
        }else{
            if(isset($_REQUEST['customer'])){
               if($_REQUEST['Firstname']!=""&&$_REQUEST['Lastname']!=""&&$_REQUEST['Phoneno']!=""&&$_REQUEST['Addss']!=" "){
                    $input = $_REQUEST['Firstname'];    
                    $input1 = $_REQUEST['Lastname'];
                    $input2 = $_REQUEST['Phoneno'];  
                    $input3 = $_REQUEST['Addss'];
                    echo '<script>alert("Data taken successfully")</script>';
                    echo '<script>windows: location="customer.php"</script>';
                    $sql = "INSERT INTO customer(Firstname,Lastname,Phoneno,Addss) VALUES('$input','$input1','$input2','$input3')";
                  
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