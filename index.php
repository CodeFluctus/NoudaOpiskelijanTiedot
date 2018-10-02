<?php
    $host = 'localhost';
    $dbname = 't7aaju00';
    $username = 't7aaju00';
    $password = 'salasana';

    $con = mysqli_connect($host,$username, $password, $dbname);

    if (mysqli_connect_errno())
    {
        echo "Failed to connext to MySQL: " . mysqli_connect_error();
    }
    
    $result = mysqli_query($con,"SELECT * FROM Opiskelija");
    while($row = mysqli_fetch_array($result)) 
    {
        echo $row['Etunimi'] . " " . $row['Sukunimi'];
        /*Rivinvaihto */
        echo "<br>";
    }

    mysqli_close($con);
?>