<!DOCTYPE html>
<?php
include("connection.php");

if(isset($_POST['submit']))
{
    $fullname=$_POST['fullname'];
    $mobileno=$_POST['mobileno'];
    $pincode=$_POST['pincode'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $flatname=$_POST['flatname'];
    $landmark=$_POST['landmark'];

    $sql="INSERT INTO orderaddress(fullname,mobileno,pincode,city,state,flatname,landmark)VALUES('$fullname','$mobileno','$pincode','$city','$state','$flatname','$landmark')";

    $result=mysqli_Query($conn,$sql);

    if($result){
        echo "<script>alert('Success')</script>";
    }
    else{
        echo "<script>alert('failed')</script>";

    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Calligraffitti&display=swap" rel="stylesheet">
    <title>Order Page</title>
    <style>
        body{
            background-color:ivory;
        }
        h1{
            text-align:center;
            font-family: 'Calligraffitti', cursive;
        }
        #input{
            width:700px;
            background-color:ivory;
            border-style:solid;
            border-color:black;
            height:30px;
            border-radius:14px;
        }
        #save{
            background-color:lightgreen;
            width:140px;
            height:40px;
            border-radius:10px;

        }
        @media only screen and (max-width: 600px){
           #input{
            width:300px;
           }
        }
    </style>
</head>
<body>
    <h1>Take Your Product In You Hand</h1>
    <form action="" method="POST">
        <center>
        <table >
            <tr>
                <td><input type="text" id="input" name="fullname" placeholder="Full Name"></td>
            </tr>
            <tr>
                <td><input type="number" id="input" name="mobileno" placeholder="Mobile Number"></td>
            </tr>
            <tr>
                <td><input type="number" id="input" name="pincode" placeholder="Postal Code / Zip Code"></td>
            </tr>
            <tr>
                <td><input type="text" id="input" name="city" placeholder="City"></td>
            </tr>
            <tr>
                <td><input type="text" id="input" name="state" placeholder="State"></td>
            </tr>
            <tr>
                <td><input type="text" id="input" name="flatname" placeholder="Flat Name / Buliding,Street"></td>
            </tr>
            <tr>
                <td><input type="text" id="input" name="landmark" placeholder="Landmark"></td>
            </tr>
            <tr>
                <td><br><center><input type="submit" id="save" value="Confirm Address" name="submit"> <input type="submit" id="save" value="Cancel" name="cancel"></center></td>
            </tr>
            
        </table>
    </center>
    </form>
</body>
</html>