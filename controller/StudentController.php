<?php
// คลาส ชื่อ DB สาราถมแก้ไขชื่อใด้
class DB {
  // Properties
  public $conn;

  // เชื่อมต่อฐานข้อมูล
  function __construct()
  {
    $this->conn = new mysqli('localhost','root','root','mvc'); 
  }

  // โชว์ข้อมูล
  function showData(){
    $sql = "SELECT * FROM student";
    $result = $this->conn->query($sql);
    return $result;
  }


  // เพิ่มข้อมูล
  function insertData($name,$department){
    $sql = "INSERT INTO student(name,department) VALUES('$name','$department')";
    $result = $this->conn->query($sql);
    header('Location: index.php');
    return $result;
  }

  // ลบข้อมูล
  function delData($id){
    $sql = "DELETE FROM student WHERE id = '$id'";
    $result = $this->conn->query($sql);
    header("Location: index.php");
    return $result;
  }
}
?>