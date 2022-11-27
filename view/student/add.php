<?php
    // Route
    include('../../web/route.php');
    $DB = new DB;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
        <!-- เอาไฟล์ css เข้ามา -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <center>
        <h1>เพิ่มข้อมูล</h1>
        <form action="" method="post">
            <input type="text" name="name" id="" placeholder="ชื่อ">
            <input type="text" name="department" id="" placeholder="สาขา">
            <input name="submit" type="submit" value="เพิ่มข้อมูล">
        </form>
    </center>
</body>
<?php 
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $department = $_POST['department'];
    $DB->insertData($name,$department);
}
?>
</html>