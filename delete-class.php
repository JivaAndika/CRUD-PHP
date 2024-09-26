<?php
    require 'function.php';

    $id = $_GET['id'];

    if(deleteData($id, "class_management") > 0){
        echo "<script>
     alert('Data berhasil dihapus !');
     window.location.href = 'index.php'
     </script>";
} else{
    echo "<script>
     alert('Data gagal dihapus !');
     window.location.href = 'index.php'
     </script>";
}

