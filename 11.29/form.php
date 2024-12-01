<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        form {
            background-color: #ffffff;
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            font-size: 14px;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        input[type="submit"], input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #45a049;
        }
        p {
            text-align: center;
            margin-top: 20px;
        }
    </style>
    
</head>
<body>
    
<form action="form.php" method="post">
<div>
  <label for>Full Name</label>
  <input type="text" name="name">
</div>
<div>
  <label>Reg no</label>
  <input type="text" name="regno">
</div>
<div>
  <label>Age</label>
  <input type="text" name="age">
</div>
<div>
  <label>Course</label>
  <input type="text" name="course">
</div>
<input type="submit" value="send"><br>
<p><input type="reset" value="clear All">
</p>

</form>
<?php
require_once '../11_20/connectDB.php';

function AddData($connect,$name,$reg,$age,$course){
try{
    $sql="insert into students values('$name','$reg','$age','$course')";
    $result= mysqli_query($connect,$sql);
    if ($result) {
        echo "New student record created successfully";
    }else{
        die("error".mysqli_error($connect));
    }
}catch(Exception $e){
    die($e ->getMessage());
}
}
if($_SERVER['REQUEST_METHOD']== 'POST'){
    echo "get the post request from the client";
    $name=$_POST['name'];
    $reg=$_POST['regno'];
    $age=$_POST['age'];
    $course=$_POST['course'];

    Adddata($connect,$name,$reg,$age,$course);
}

?>

</body>
</html>