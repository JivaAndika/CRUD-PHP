<?php
 $server = "localhost";
 $user = "root";
 $password = "";
 $database = "schoolmanagement";

 $connection = mysqli_connect($server, $user, $password, $database);
  if(!$connection){
    echo 'Gagal terhubung!';
  }
 function getData($query){
  global $connection;
  $result = mysqli_query($connection,$query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)){
    $rows [] = $row;
  }
  return $rows;
 }

//  FUNCTION CLASS
function createDataClass($data){
  global $connection;

  $class = $data['class'];
  $guardian = $data['guardian'];

  $query = "INSERT INTO class_management VALUES ('', '$class', '$guardian')";
  mysqli_query($connection,$query);

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

function deleteDataClass($id){
  global $connection;
  $query = "DELETE  FROM class_management WHERE id = $id";
  mysqli_query($connection, $query);
  return mysqli_affected_rows($connection);
}

function editDataClass($data,$id){
  global $connection;

  $class = $data['class'];
  $guardian = $data['guardian'];

  $query = "UPDATE class_management SET class = '$class', guardian = '$guardian' WHERE id = $id ";

  mysqli_query($connection,$query);
  return mysqli_affected_rows($connection);
}

function showDataClass($id){
  global $connection;
  $query = "SELECT * FROM class_management WHERE id = $id";
  $result =  mysqli_query($connection, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}
//  FUNCTION STUDENT
function createDataStudent($data){
  global $connection;

  $name = $data['name'];
  $class = $data['class'];
  $score = $data['score'];

  $query = "INSERT INTO student_management VALUES ('', '$name', '$class', '$score')";

  mysqli_query($connection, $query);
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
function deleteDataStudent($id){
  global $connection;
  $query = "DELETE FROM student_management WHERE id = $id";
  mysqli_query($connection,$query);
  return mysqli_affected_rows($connection);
}

function editDataStudent($data, $id)  {
  global $connection;

  $name = $data['name'];
  $class = $data['class'];
  $score = $data['score'];

  $query = "UPDATE student_management SET name = '$name', class = '$class', score = '$score' WHERE id = $id";

  mysqli_query($connection, $query);
  return mysqli_affected_rows($connection);
  
}

function showDataStudent($id){
  global $connection;
  $query = "SELECT * FROM student_management WHERE id = $id";
  $result = mysqli_query($connection, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}

//  FUNCTION TEACHER

 function createDataTeacher($data){
  global $connection;

  $name = $data['name'];
  $subject = $data['subject'];
  $contact = $data['contact'];

  $query = "INSERT INTO teacher_management VALUES ('', '$name', '$subject', '$contact')";

  mysqli_query($connection,$query);

  if(mysqli_affected_rows($connection) > 0){
    echo "<script>
    alert('Data berhasil ditambahkan !');
    window.location.href = 'index.php'
    </script>";
  }else {
    echo "<script>
    alert('Data Gagal ditambahkan')";
  
  }
 }
 function deleteDataTeacher($id){
  global $connection;
  $query = "DELETE FROM teacher_management WHERE id = $id";
  mysqli_query($connection,$query);
  return mysqli_affected_rows($connection);
 }

 function editDataTeacher($data,$id){
  global $connection;

  $name = $data['name'];
  $subject = $data['subject'];
  $contact = $data['contact'];

  $query = "UPDATE teacher_management SET name = '$name', subject = '$subject', contact = '$contact' WHERE id = $id";

  mysqli_query($connection, $query);
  return mysqli_affected_rows($connection);
 }

function showDataTeacher($id){
  global $connection;
  $query = "SELECT * FROM teacher_management WHERE id = $id";
  $result = mysqli_query($connection,$query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}

//  
