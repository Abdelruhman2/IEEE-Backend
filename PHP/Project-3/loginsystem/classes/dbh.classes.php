<?php


class Dbh{


     // private
protected function connect()
{
     
try
    {
        $username = "root";
        $password = "";
        // mysql
        $dbh = new PDO('mysqli:host=localhost;dbname=ooplogin' , $username , $password);
    return $dbh;
    }
    catch (PDOException $e)
    {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    
}
   

    
   

}
// $connect = mysqli_connect("localhost","root","","ooplogin");
//     if(!$connect){ 
//         die("connection error : ");
//     }



// $servername = "localhost";
// $username = "username";
// $password = "password";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password);
// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }

// // Create database
// $sql = "CREATE DATABASE ooplogin";
// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }

// mysqli_close($conn);


// $servername = "localhost";
// $username = "username";
// $password = "password";

// try {
//   $conn = new PDO("mysql:host=$servername", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $sql = "CREATE DATABASE ooplogin";
//   // use exec() because no results are returned
//   $conn->exec($sql);
//   echo "Database created successfully<br>";
// } catch(PDOException $e) {
//   echo $sql . "<br>" . $e->getMessage();
// }

// $conn = null;