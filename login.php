<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
   

    $email = $_POST['email'];
    $password = $_POST['pass'];

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "projet";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if($conn->connect_error){
        echo "echec";
        die("Connection failed:". $conn->connect_error);
    }

    $query= "SELECT * FROM enseignant WHERE email = '$email' AND pass = '$password'";
    $result= $conn->query($query);
    //print($result->num_rows);

    if($result->num_rows == 1){
        echo "success";
        exit();
        
    }
    
    else{
       echo "faux";
       echo $_SERVER["REQUEST_METHOD"];
        exit();
    }
    $conn->close();
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
   

    $email = $_POST['email'];
    $password = $_POST['pass'];

    $host = "127.0.0.1";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "projet";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if($conn->connect_error){
        echo "echec";
        die("Connection failed:". $conn->connect_error);
    }

    $query= "SELECT * FROM etudiant WHERE email = '$email' AND Mot_de_Passe = '$password'";
    $result= $conn->query($query);
    //print($result->num_rows);

    if($result->num_rows == 1){
        echo "success";
        exit();
        
    }
    
    else{
      
       echo $_SERVER["REQUEST_METHOD"];
        exit();
    }
    $conn->close();
}


?>