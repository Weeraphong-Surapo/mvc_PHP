<?php 
    // Route
    include('../../web/route.php');
    // สร้าง ออปเจ็คจากคลาส DB มาจาก controller
    $DB = new DB;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <!-- เอาไฟล์ css เข้ามา -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <!-- เพิ่มข้อมูล -->
    <a id="btn-insert" href="<?php echo $add_student;?>">เพิ่มนักเรียน</a>
    <!-- ตารางแสดงข้อมูล -->
    <table width="100%">
        <tr>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>จัดการ</th>
        </tr>

        <!-- ลูปข้อมูลจากตาราง -->
        <?php foreach($DB->showData() as $data): ?>
        <tr>
            <td><?php echo $data['name'];?></td>
            <td><?php echo $data['department'];?></td>
            <td width="20%"> 
                <a href="" id="btn-edit">แก้ไข</a>
                <a href="?id=<?php echo $data['id'];?>" id="btn-del">ลบ</a>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
</body>

<!-- ลบข้อมูล -->
<?php 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $DB->delData($id);
    }
?>

</html>