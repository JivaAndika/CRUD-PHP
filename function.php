<?php
 $server = "localhost";
 $user = "root";
 $password = "";
 $database = "schoolmanagement";

 $connection = mysqli_connect($server, $user, $password, $database);
  if(!$connection){
    echo 'Gagal terhubung!';
  }
 function getData($table){
  global $connection;
  $table = mysqli_query($connection,"SELECT * FROM $table");
  $rows = [];
  while ($row = mysqli_fetch_assoc($table)){
    $rows[] = $row;
  }
  return $rows;
 }
//  FUNCTION CLASS
function createData($data, $table){
  global $connection;

  if($table === 'class_management'){
  $class = $data['class'];
  $guardian = $data['guardian'];
  $query = mysqli_query($connection,"INSERT INTO $table VALUES ('', '$class', '$guardian')");
  }
  elseif ($table === 'student_management'){
  $nameStudent = $data['nameStudent'];
  $classStudent = $data['classStudent'];
  $scoreStudent = $data['score'];
  $query = mysqli_query($connection,"INSERT INTO $table VALUES ('', '$nameStudent', '$classStudent', '$scoreStudent')");
  }
  elseif($table === 'teacher_management'){
  $nameTeacher = $data['nameTeacher'];
  $subject = $data['subject'];
  $contact = $data['contact'];
  $query = mysqli_query($connection,"INSERT INTO $table VALUES  ('', '$nameTeacher', '$subject', '$contact') ");
  }
  else{
    return false;
  }
  // " ('', '$class', '$guardian')";

  if (mysqli_affected_rows($connection) > 0){
      echo "<script>
      alert('Data berhasil ditambahkan !');
      window.location.href = 'index.php'
      </script>";
    }else {
      echo "<script>
      alert('Data Gagal ditambahkan')";
    
    }
}

function deleteData($id, $table){
  global $connection;
  mysqli_query($connection, "DELETE  FROM $table WHERE id = $id");
  return mysqli_affected_rows($connection);
}

function editData($data,$id,$table){
  global $connection;

  if($table === 'class_management'){
    $class = $data['class'];
    $guardian = $data['guardian'];
    $query = mysqli_query($connection,"UPDATE $table SET class = '$class', guardian = '$guardian' WHERE id = $id ");
    }
    elseif ($table === 'student_management'){
    $nameStudent = $data['nameStudent'];
    $classStudent = $data['classStudent'];
    $scoreStudent = $data['score'];
    $query = mysqli_query($connection,"UPDATE $table SET name = '$nameStudent', class = '$classStudent', score = '$scoreStudent' WHERE id = $id");
    }
    elseif($table === 'teacher_management'){
    $nameTeacher = $data['nameTeacher'];
    $subject = $data['subject'];
    $contact = $data['contact'];
    $query = mysqli_query($connection,"UPDATE $table SET name = '$nameTeacher', subject = '$subject', contact = '$contact' WHERE id = $id");
    }
    else{
      return false;
    }
  

  
  return mysqli_affected_rows($connection);
}

function showData($id, $table){
  global $connection;
  $table =  mysqli_query($connection, "SELECT * FROM $table WHERE id = $id");
  $rows = [];
  while ($row = mysqli_fetch_assoc($table)){
    $rows[] = $row;
  }
  return $rows;
}