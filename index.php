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

    echo "<table border = '1'>
    <tr>
    <th>Etunimi</th>
    <th>Sukunimi</th>
    </tr>";

    while($row = mysqli_fetch_array($result)) 
    {
        echo "<tr>";
        echo "<td>" . $row['Etunimi'] . "</td>";
        echo "<td>" . $row['Sukunimi'] . "</td>";
        echo "</tr>"
    }

    echo "</table>";
    
    mysqli_close($con);
?>