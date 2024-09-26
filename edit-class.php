<?php
require 'function.php';

$id = $_GET['id'];
$data = $_POST;
$class = showData($id, "class_management");

if(isset($_POST['submit'])){
    if (editData($data,$id, "class_management") > 0 ) {
        echo "<script>
        alert('Data berhasil diedit !');
        window.location.href = 'index.php'
        </script>";
      }else {
        echo "<script>
        alert('Data Gagal diedit')";
      }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Guru</title>
    <!-- TAILWINDCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<form action="" method="post" class="flex flex-col  items-center  mx-auto shadow-2xl w-1/2 py-12 px-16 rounded-xl my-20" >
<h1 class="mb-10 text-2xl font-bold">Edit Your Data</h1>
<div class="input_data flex flex-col">
<label for="class" class="text-[#616060] font-semibold">Class:</label>
<input type="number" name="class" id="class" required value="<?= $class[0]['class'] ?>" class="w-56 border pl-[5px] border-black rounded-md ">
</div>
<br>
<br>
<div class="input_data flex flex-col">
<label for="guardian" class="text-[#616060] font-semibold">Class's Guardian:</label>
<input type="text" name="guardian" id="guardian" required value="<?= $class[0]['guardian'] ?>" class="w-56 border pl-[5px] border-black rounded-md ">
</div>
<br>
<br>
<button type="submit" name="submit" style="margin: auto ;">Edit data</button>
</form>
</body>
</html>