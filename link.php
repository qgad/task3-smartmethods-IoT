<?php

//connection variables
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'task2';


    //connection
    $conn = mysqli_connect($host, $username, $password, $dbname );
    if($conn->connect_error){
        die("Connection failed : " .$conn->connect_error);
    }
    $conn->set_charset('utf8');



if(isset($_POST['Forward'])){

        $my_query = "INSERT INTO directione(Directione) VALUES ('F')";
        $result = mysqli_query($conn, $my_query);


}else if(isset($_POST['Left'])){

        $my_query = "INSERT INTO directione(Directione) VALUES ('L')";
        $result = mysqli_query($conn, $my_query);


}else if(isset($_POST['Right'])){

        $my_query = "INSERT INTO directione(Directione) VALUES ('R')";
        $result = mysqli_query($conn, $my_query);


}else if(isset($_POST['STOP'])){

        $my_query = "INSERT INTO directione(Directione) VALUES ('S')";
        $result = mysqli_query($conn, $my_query);


}else if(isset($_POST['Backward'])){

        $my_query = "INSERT INTO directione(Directione) VALUES ('B')";
        $result = mysqli_query($conn, $my_query);


}





?>