<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hair Extension Store</title>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
</style>
</head>

<body>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <?php 
                    include("vtbaglan.php");
                    include("menu.php");
                    if($_GET){
                        $Urunbul = $_GET["urun"];
                        $sql_bul = "SELECT * FROM Tbl_Urunler WHERE Urun_ID = $Urunbul";
                        $kayit = mysqli_query($conn, $sql_bul);
                        $satir = mysqli_fetch_assoc($kayit);
						
                        echo "<table>
						<h1>SEPETTEKİ ÜRÜNÜNÜZ</h1>
                        <tr><th>NO</th><td>$satir[Urun_ID]</td></tr>
						<tr><th>ÜRÜN KATEGORİ</th><td>$satir[Urun_Kat_ID]</td></tr>
                        <tr><th>ÜRÜN BARKOD</th><td>$satir[Urun_Barkod]</td></tr>
                        <tr><th>ÜRÜN ADI</th><td>$satir[Urun_Ad]</td></tr>
                        <tr><th>ÜRÜN ŞEKLİ</th><td>$satir[Urun_Sekli]</td></tr>
                        <tr><th>ÜRÜN UZUNLUK</th><td>$satir[Urun_Uzunluk]</td></tr>
                        <tr><th>ÜRÜN TÜRÜ</th><td>$satir[Urun_Turu]</td></tr>
                        <tr><th>ÜRÜN RENK</th><td>$satir[Urun_Renk]</td></tr>
                        <tr><th>ÜRÜN FİYAT</th><td>$satir[Urun_Fiyat]</td></tr>
                        </table>";
                    }
                    ?>
                   <input type="button" value="İPTAL ET" name="BTN2"> 
                   <input type="button" value="SİPARİŞ ET " name="btn" onclick="siparisEt()">
                </div>
            </div>
        </div>
    </div>
	<?php include("dip.php"); ?>

<script>
    function siparisEt() {
        window.location.href = "odeme.php"; 
    }
</script>

</body>
</html>

