<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>
<body>
<?php 
include("vtbaglan.php");

if ($_GET) {
    $silinecek = $_GET["kisi"];
    $sql_sil = "DELETE FROM Tbl_Musteriler WHERE Mus_ID = $silinecek";
    if (mysqli_query($conn, $sql_sil)) {
        
        header("Location: list.php");
        exit; 
    } else {
        
        echo "Hata: " . mysqli_error($conn);
    }
}
?>
</body>
</html>
