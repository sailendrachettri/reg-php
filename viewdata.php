<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>View data</title>
</head>

<body>
    <h1>VIEW DATA</h1>


    <?php
    include "connection.php";
    $sql = "SELECT rollno, name, sem, department FROM students_info";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    //     echo "<table id='outer_table'>
    //     <thead>
    //         <tr>
    //             <th>Name</th>
    //             <th>Roll No.</th>
    //             <th>Semester</th>
    //             <th>Department</th>
    //         </tr>
    //     </thead>
    // </table>";

        while ($row = $result->fetch_assoc()) {
            echo "<table><tr id='inner_table'><td>" . $row["name"]. "</td>" . "<td>" .$row["rollno"]. "</td>". "<td>". $row["sem"]."</td>" ."<td>". $row["department"]."</td>". "</tr>". "</table>";
        }
    } else {
        echo "No data here. Go back an Enter some data to view here.";
        while ($row = $result->fetch_assoc()) {
            echo "<table><tr id='inner_table'><td>" . $row["name"]. "</td>" . "<td>" .$row["rollno"]. "</td>". "<td>". $row["sem"]."</td>" ."<td>". $row["department"]."</td>". "</tr>". "</table>";
        }
    }

    $conn->close();
    ?>


</body>

</html>