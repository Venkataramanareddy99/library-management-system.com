<?php
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = 'library management system';
$conn= mysqli_connect($servername, $username, $password, $dbname);
    if ($conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
   if(isset($_POST['save'])){
    $name = $_POST['name'];
    $gender =  $_POST['gender'];
    $admissionNo =  $_POST['admission_no'];
    $aadhar =  $_POST['adhar'];
    $mobile =  $_POST['mobile'];
    $branch =  $_POST['branch'];

    $sql_query = "insert into student (name,gender,admission_no,adhar,mobile,branch) values ('$name','$gender','$admission_no','$adhar','$mobile','$branch')";
   if (mysqli_query($conn,$sql_query))
   {
    echo "new details entry inserted successfully !";
   }
   else
   {
    echo "error: " $sql "" mysqli_error($conn);
   }
   mysqli_close($conn);
   }


   

  
