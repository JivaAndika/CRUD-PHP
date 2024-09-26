<?php
require 'function.php';

$teachers = getData("teacher_management");
$students = getData("student_management");
$classes = getData("class_management");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sekolah</title>
    <!-- TAILWINDCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- PHOSPHOR ICONS -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
     <!-- << FONTS >> -->
     <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
</head>
<body >

    <!-- TABLE TEACHER -->
    <div class="container mx-auto flex flex-col justify-center items-center mt-10">
    <h1 class="text-2xl font-bold mb-4">Data Guru SMA TI HSI-IDN</h1>
    <table cellpadding="10" collspacing="0" class="border border-gray-600 rounded-md">
    <tr class="bg-[#48CFCB] rounded-3xl ">
    <th class="border border-gray-600 pr-7">ID</th>
    <th class="border border-gray-600 pr-64">Name</th>
    <th class="border border-gray-600 pr-48">Subject</th>
    <th class="border border-gray-600 pr-36">Contact</th>
    <th class="border border-gray-600 pr-36">Action</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($teachers as $teacher): ?>
    <tr class="bg-[#f5f3f3]">
        <td class=" my-2 text-[#616060] font-semibold text-sm p-4"><?= $i ?></td>
        <td class=" my-2 text-[#616060] font-semibold text-sm p-4"><?= $teacher['name'] ?></td>
        <td class=" my-2 text-[#616060] font-semibold text-sm p-4"><?= $teacher['subject'] ?></td>
        <td class=" my-2 text-[#616060] font-semibold text-sm p-4"><?= $teacher['contact'] ?></td>
        <td class=" my-2 flex justify-center items-center  ">
            <div class="action ">
                <a href="edit-teacher.php?id=<?= $teacher['id']?>"  class="bg-lime-500 rounded-md p-3 mr-2"><i class="ph ph-pencil-simple text-white text-xl "></i></a>
                <a href="delete-teacher.php?id=<?= $teacher['id']?>" onclick="return confirm('Are you sure?')" class="bg-red-500 rounded-md p-3 ml-2"><i class="ph ph-trash text-white text-xl"></i></a>
                </div>
            </td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
    </table>
    <a href="create-teacher.php" class="font-bold  text-[#fafafa] bg-[#3ABEF9] px-3 py-2 rounded-md mt-10 hover:text-[#ececec] transition-all ease-in-out duration-50" >Add New</a>
    </div>
    <!-- STUDENT TABLE -->
    
    <div class="container text-center mx-auto pt-20">
        <h1  class="text-2xl font-bold mb-10">Data Santri SMA IT HSI-IDN</h1>
        <div class="content flex flex-wrap justify-center gap-5 ">
            <?php foreach ($students as $student): ?>
             <div class="card rounded-lg bg-white shadow-2xl w-72 gap-2 px-4 py-10 flex flex-col items-center"> <!-- Set to 'items-center' for centering the image -->
                <div class="image w-28 h-28 flex justify-center items-center mb-8">
                    <img src="./img/student.png" alt="">
                </div>
                    <div class="student_bio flex flex-col items-start gap-2 mb-3"> <!-- Ensures student_bio is aligned to the left -->
                     <h3 class="font-bold text-lg">Name: <?= $student['name'] ?></h3>
                     <p class="text-[#616060] text-sm font-semibold">Class: <?= $student['class'] ?></p>
                     <p class="font-medium">Score: <?= $student['score'] ?></p>
                    </div>
                <div class="action ">
                    <a href="edit-student.php?id=<?= $student['id']?>"  class="text-[#616060] font-semibold">Edit</a> |
                    <a href="delete-student.php?id=<?= $student['id']?>" onclick="return confirm('Are you sure?')" class="text-[#616060] font-semibold">Delete</a>
                </div>
    

   
    
            </div>
                <?php endforeach; ?>
        </div>
        <div class="button my-20">
        <a href="create-student.php" class="font-bold mx-auto  text-[#fafafa] bg-[#3ABEF9] px-3 py-2 rounded-md mt-10 hover:text-[#ececec] transition-all ease-in-out duration-50" >Add New</a>
        </div>
 </div>

    <!-- CLASS TABLE -->
    <div class="container mx-auto flex flex-col justify-center items-center mt-10">
    <h1 class="text-2xl font-bold mb-4">Data Kelas SMA TI HSI-IDN</h1>
    <div class="overflow-hidden rounded-md shadow-lg">
    <table cellpadding="10" cellspacing="0" class="min-w-full">
        <thead>
            <tr class="bg-[#48CFCB]">
                <th class="pr-7 rounded-tl-md text-left">ID</th>
                <th class="pr-64 text-left">Class</th>
                <th class="pr-48 text-left">Wali Kelas</th>
                <th class="pr-36 text-left rounded-tr-md">Action</th>
            </tr>
        </thead>
        <tbody >
        <?php $i = 1; ?>
            <?php foreach ($classes as $class): ?>
            <tr class="bg-[#f5f3f3] py-3">
                <td class="text-[#616060] font-semibold text-sm p-4"><?php $i ?></td>
                <td class="text-[#616060] font-semibold text-sm p-4"><?= $class['class'] ?></td>
                <td class="text-[#616060] font-semibold text-sm p-4"><?= $class['guardian'] ?></td>
                <td class="flex justify-center items-center p-4">
                    <div class="action">
                        <a href="edit-class.php?id=<?= $class['id']?>" class="bg-lime-500 rounded-md p-3 mr-2">
                            <i class="ph ph-pencil-simple text-white text-xl "></i>
                        </a>
                        <a href="delete-class.php?id=<?= $class['id']?>" onclick="return confirm('Are you sure?')" class="bg-red-500 rounded-md p-3 ml-2">
                            <i class="ph ph-trash text-white text-xl"></i>
                        </a>
                    </div>
                </td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

    <a href="create-class.php" class="font-bold  text-[#fafafa] bg-[#3ABEF9] px-3 py-2 rounded-md mt-10 hover:text-[#ececec] transition-all ease-in-out duration-50" >Add New</a>
    </div>

    

    <div class="pb-96"></div>
    
</body>
</html>