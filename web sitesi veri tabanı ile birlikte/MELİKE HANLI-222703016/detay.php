<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hair Extension Store</title>
<script type="text/javascript">
    function yazdir(){
        window.print();
    }
</script>
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
                <div class="col-8">
                    <?php 
                    include("vtbaglan.php");
                    include("menu.php");
                    if($_GET){
                        $kisibul = $_GET["kisi"];
                        $sql_bul = "SELECT * FROM Tbl_Musteriler WHERE Mus_ID = $kisibul";
                        $kayit = mysqli_query($conn, $sql_bul);
                        $satir = mysqli_fetch_assoc($kayit);

                        echo "<table>
                        <tr><th>NO</th><td>$satir[Mus_ID]</td></tr>
                        <tr><th>AD SOYAD</th><td>$satir[Mus_Ad] $satir[Mus_Soyad]</td></tr>
                        <tr><th>GSM</th><td>$satir[Mus_GSM]</td></tr>
                        <tr><th>E-MAİL</th><td>$satir[Mus_Email]</td></tr>
                        <tr><th>DOĞUM TARİHİ</th><td>$satir[Mus_DogumTarih]</td></tr>
                        <tr><th>TESLİMAT ADRES</th><td>$satir[Mus_TeslimatAdres]</td></tr>
                        <tr><th>FATURA ADRES</th><td>$satir[Mus_FaturaAdres]</td></tr>
                        <tr><th>İL</th><td>$satir[Mus_IL]</td></tr>
                        <tr><th>İLÇE</th><td>$satir[Mus_ILCE]</td></tr>
						<tr><th>FOTOĞRAF</th><td>$satir[Mus_Foto]</td></tr>
                        </table>";
                    }
                    ?>
                    <input type="button" value="YAZDIR" onClick="yazdir()" name="btn">
                </div>
                <div class="col-2">
                    <div style="padding-top: 100px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php include("dip.php"); ?>
</body>
</html>
