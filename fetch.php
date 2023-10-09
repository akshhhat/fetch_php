<!DOCTYPE html>
<html>

<head>
    <style>
    <?php include ('database.php');

    ?>table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>
</head>

<body>

    <h2>User Data : Global</h2>

    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Student Name</th>
                <th>Phone Number</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Type</th>
                <th>Time Joined</th>
            </tr>
        </thead>
        <?php 

 $sql = "SELECT * FROM `stud`";
 $result = mysqli_query($conn,$sql); //this function takes 2 parameters.
 $sno=0;
 foreach($result as $row){
  $sno++;
  ?>
  <tr>
    <td><?php echo $sno;?></td>
    <td><?php echo $row["stud_name"];?></td>
    <td><?php echo $row["stud_number"];?></td>
    <td><?php echo $row["stud_dob"];?></td>
    <td><?php echo $row["stud_address"];?></td>
    <td><?php echo $row["stud_gender"];?></td>
    <td><?php echo $row["user_type"];?></td>
    <td><?php echo $row["timing"];?></td>
   
  </tr>
  <?php

 }
?>

    </table>
</body>

</html>