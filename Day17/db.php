<?php
   
   $servername = "localhost";
   $username = "root";
   $password = "";
   $databasename = "asoit";

   $conn = mysqli_connect($servername, $username, $password,  $databasename);
   if($conn -> connect_error)
   {
    die($conn -> connect_error);
   }
   else
   {
    echo "mysql connection succesfully" . '<br/>';
   }

   $query = "INSERT INTO stu(stu_id, fname, lname, adress, pasword, email) VALUES('1240', 'Ajaj', 'Ajmeri', 'jamalpur pagathiya', 'aj@aj123' 'Aj@gmail.com')";
   $query = "INSERT INTO stu(fname, lname) VALUES('Jisan', 'Ajmeri')";
   $query = "INSERT INTO stu(fname, lname) VALUES('Rajan', 'Ajmeri')";
   $query = "INSERT INTO stu(fname, lname) VALUES('Rehan', 'Ajmeri')";

   // $query = "UPDATE stu SET fname='fahad' where id='1240';";
   

   $result = $conn->multi_query($query);

   if($conn -> error)
   {
       echo $conn->error;
   }
   else
   {
       echo "Record Inserted successfully";
   }

   $query = "SELECT * FROM stu";
   $result = $conn->query($query);

   if($conn -> error)
   {
       echo $conn->error;
   }
   else
   {
       echo '<br/>';
       while($row = $result->fetch_assoc())
       {
           echo '<pre/>';
           print_r($row);
           echo "HI" . $row["fname"] . "" . $row["lname"] . ',';
           echo implode('|',$row) . '<br/>';
       }
   }
?>