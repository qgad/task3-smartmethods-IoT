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



$result = mysql_query('SELECT * FROM directione WHERE 1');
while ($row = mysql_fetch_assoc($result)) {echo $row['Directione'];}
