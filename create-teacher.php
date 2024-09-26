<?php
    require 'function.php';

    if(isset($_POST['submit'])){
        createData($_POST,"teacher_management");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambahkan Data Guru</title>
    <!-- TAILWINDCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<form action="" method="post" class="flex flex-col  items-center  mx-auto shadow-2xl w-1/2 py-12 px-16 rounded-xl my-20" >
<h1 class="mb-10 text-2xl font-bold">Create New Data</h1>
<div class="input_data flex flex-col">
<label for="nameTeacher" class="text-[#616060] font-semibold">Your Name:</label>
<input type="text" name="nameTeacher" id="nameTeacher" required class="w-56 border pl-[5px] border-black rounded-md ">
</div>
<br>
<br>
<div class="input_data flex flex-col">
<label for="subject" class="text-[#616060] font-semibold">Your Subject:</label>
<input type="text" name="subject" id="subject" required class="w-56 border pl-[5px] border-black rounded-md ">
</div>
<br>
<br>
<div class="input_data flex flex-col">
<label for="contact" class="text-[#616060] font-semibold">Your Number:</label>
<input type="number" name="contact" id="contact" required class="w-56 border pl-[5px] border-black rounded-md ">
</div>
<br>
<br>
<button type="submit" name="submit" class="mx-auto font-bold  text-[#fafafa] bg-[#3ABEF9] px-8 py-2 rounded-md">Create data</button>
</form>
</body>
</html>