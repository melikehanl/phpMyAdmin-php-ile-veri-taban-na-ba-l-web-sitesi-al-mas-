<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hair Extension Store</title>
</head>
<body>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <?php 
                    include("vtbaglan.php");
                    include("menu.php");

                    if ($_GET) {
                        $kisibul = $_GET["kisi"];
                        $sql_bul = "SELECT * FROM Tbl_Musteriler WHERE Mus_ID = $kisibul";
                        $kayit = mysqli_query($conn, $sql_bul);
                        $satir = mysqli_fetch_assoc($kayit);
                    }
					 if ($_POST) {
                $metin = $_FILES["dosya"]["name"];
                $metin = str_replace("Ö", "O", $metin);
                $metin = str_replace("Ü", "U", $metin);
                $metin = str_replace("Ğ", "G", $metin);
                $metin = str_replace("Ş", "S", $metin);
                $metin = str_replace("Ç", "C", $metin);
                $metin = str_replace("İ", "I", $metin);
                $metin = str_replace("ö", "o", $metin);
                $metin = str_replace("ü", "u", $metin);
                $metin = str_replace("ğ", "g", $metin);
                $metin = str_replace("ş", "s", $metin);
                $metin = str_replace("ç", "c", $metin);
                $metin = str_replace("ı", "i", $metin);
                $metin = str_replace(" ", "_", $metin);
                echo $metin;
					 }
                  
                    if ($_POST) {
                        $ad = $_POST["Mus_Ad"];
                        $soyad = strtoupper($_POST["Mus_Soyad"]);
                        $gsm = $_POST["Mus_GSM"];
                        $email = strtolower($_POST["Mus_Email"]);
                        $dogumtarih = $_POST["Mus_DogumTarih"];
                        $teslimatadres = $_POST["Mus_TeslimatAdres"];
                        $faturaadres = $_POST["Mus_FaturaAdres"];
                        $il = strtoupper($_POST["Mus_IL"]);
                        $ilce = strtoupper($_POST["Mus_ILCE"]);
						$dosya = "dosyalar/" . $metin;
						
						 if (move_uploaded_file($_FILES["dosya"]["tmp_name"], $dosya)) {
                    echo "Dosya başarıyla yüklendi.<br>";
                } else {
                    echo "Dosya yükleme sırasında hata oluştu.<br>";
                }

                        $sql = "UPDATE Tbl_Musteriler SET 
                                Mus_Ad='$ad',
                                Mus_Soyad='$soyad',
                                Mus_GSM='$gsm',
                                Mus_Email='$email',
                                Mus_DogumTarih='$dogumtarih',
                                Mus_TeslimatAdres='$teslimatadres',
                                Mus_FaturaAdres='$faturaadres',
                                Mus_IL='$il',
                                Mus_ILCE='$ilce' 
                                WHERE Mus_ID='$kisibul'";

                        mysqli_query($conn, $sql);
                        header("Location: list.php");
						
                    }
                    ?>
                    <img src="imgdocs/resim5.jpg" width="200px" height="200px">
                    <center>
                        <form action="#" method="POST">
                            <table>
                                <tr>
                                    <td>Adınız:</td>
                                    <td><input type="text" name="Mus_Ad" value="<?php echo $satir["Mus_Ad"]; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Soyadınız:</td>
                                    <td><input type="text" name="Mus_Soyad" value="<?php echo $satir["Mus_Soyad"]; ?>"></td>
                                </tr>
                                <tr>
                                    <td>GSM:</td>
                                    <td><input type="text" name="Mus_GSM" value="<?php echo $satir["Mus_GSM"]; ?>"></td>
                                </tr>
                                <tr>
                                    <td>E-MAİL:</td>
                                    <td><input type="text" name="Mus_Email" value="<?php echo $satir["Mus_Email"];?>"></td>
                                </tr>
                                <tr>
                                    <td>Doğum Tarihiniz:</td>
                                    <td><input type="text" name="Mus_DogumTarih" value="<?php echo $satir["Mus_DogumTarih"];?>"></td>
                                </tr>
                                <tr>
                                    <td>Teslimat Adresiniz:</td>
                                    <td><input type="text" name="Mus_TeslimatAdres" value="<?php echo $satir["Mus_TeslimatAdres"];?>"></td>
                                </tr>
                                <tr>
                                    <td>Fatura Adresiniz:</td>
                                    <td><input type="text" name="Mus_FaturaAdres" value="<?php echo $satir["Mus_FaturaAdres"];?>"></td>
                                </tr>
                                <tr>
                                    <td>İliniz:</td>
                                    <td><input type="text" name="Mus_IL" value="<?php echo $satir["Mus_IL"];?>"></td>
                                </tr>
                                <tr>
                                    <td>İlçeniz:</td>
                                    <td><input type="text" name="Mus_ILCE" value="<?php echo $satir["Mus_ILCE"]; ?>"></td>
                                </tr>
								<tr>
                                <td>Fotoğraf:</td>
                                <td><input type="file" name="dosya"  value="<?php echo $satir["Mus_Foto"];?>"></td>
                            </tr>
                                <tr>
                                    <td colspan="2"><input type="submit" value="Güncelle"><input type="reset" value="İptal Et"></td>
                                </tr>
                            </table>
                        </form>
                    </center>
                </div>

                <div class="col-6">
                    <div style="padding-top: 100px; text-align: center;">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("dip.php"); ?>
</body>
</html>

