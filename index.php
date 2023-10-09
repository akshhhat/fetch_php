<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <h1>USER DETAILS</h1>
    </div>

    <hr>
    <div class="body">
    <form action="database.php" method="POST">
    <table>
        <div class="table">
            <td>
                <label for="name"><b>Student Name</b></label>
            </td>
            <td><input type="text" name="stud_name" id="name" placeholder="Enter Your name"></td>
            <tr>
                <td><label for="mobile"><b>Phone Number</b></label></td>
                <td> <input type="number" name="stud_number" id="number" placeholder="Enter Your Phone Number"></td>
            </tr>
            <tr>
                <td><label for="dob"><b>Date of Birth</b></label></td>
                <td><input type="date" name="stud_dob" id="dob" placeholder="Enter Your date of birth"></td>
            </tr>
            <tr>
                <td>
                   
                     <label for="address" id="address"><b>Address</b></label></td>
                <td> <textarea id="text" name="stud_address" rows="4" cols="50" placeholder="Enter Your Address"></textarea></td>
            </tr>
            <tr>
                <td>
                    <p id="gender"><b>Gender</b></p>
                </td>
                <td>
                    <select name="stud_gender" title="gender">
                        <option value="">Select Your Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><b>Type :</b></td>

                <td>

                    <input type="radio" id="Student" name="user_type" value="Student">
                    <label for="Student">Student</label><br>
                    <input type="radio" id="Faculty" name="user_type" value="Faculty">
                    <label for="Faculty">Faculty</label><br>
                </td>
            </tr>
            <tr>
                <td><b>Timing</b></td>
                <td>
                    <input type="checkbox" name="timing" id="" value="same time">
                    <label for="timing">Same Time</label>
                </td>
            </tr>
        </table>
        </div>
        </div>
        <input  type = "submit" name = "submit" value = "Submit" class= "button">   
    </form>



</body>

</html>