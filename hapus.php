<?php
require 'functions.php';

$id = $_GET["id"];

if(hapus($id) > 0 ){
    echo "<script>
                alert('data berhasil dihapus!);
                document.location.href = 'index.php';
            </script>";
} else {
    echo "<script>
                alert('data gagal dihapus!);
                document.location.href = 'index.php';
            </script>";
}

echo "
Data berhasil dihapus!! <br>
<a href='index.php'>
    <button style='width:100hv'>BALIK!!</button>
    </a>
";

?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudah Hapus Kann</title>
</head>
<body>
    <a href="index.php">
        <button style = "width:100%">BALIK!!</button>
    </a>
</body>
</html> -->