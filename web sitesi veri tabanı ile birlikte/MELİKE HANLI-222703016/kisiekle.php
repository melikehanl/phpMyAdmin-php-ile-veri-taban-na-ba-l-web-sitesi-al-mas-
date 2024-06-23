<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Hair Extension Store</title>
<style>
    .row {
        display: flex;
        justify-content: space-between;
    }
    .col-6 {
        width: 48%;
    }
</style>
</head>

<body>
    <div class="card">
        <div class="card-header">
            <?php
            include("vtbaglan.php");
            include("menu.php");

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

                $ad = $_POST["musad"];
                $soyad = strtoupper($_POST["mussoyad"]);
                $gsm = $_POST["musgsm"];
                $email = strtolower($_POST["musemail"]);
                $dogumtarih = $_POST["musdogumtarih"];
                $teslimatadres = $_POST["musteslimatadres"];
                $faturaadres = $_POST["musfaturaadres"];
                $il = strtoupper($_POST["musil"]);
                $ilce = strtoupper($_POST["musilce"]);
                $dosya = "dosyalar/" . $metin;

              
                if (move_uploaded_file($_FILES["dosya"]["tmp_name"], $dosya)) {
                    echo "Dosya başarıyla yüklendi.<br>";
                } else {
                    echo "Dosya yükleme sırasında hata oluştu.<br>";
                }

                
                $sql = "INSERT INTO Tbl_Musteriler 
                    (Mus_ID, Mus_Ad, Mus_Soyad, Mus_GSM, Mus_Email, Mus_DogumTarih, Mus_TeslimatAdres, Mus_FaturaAdres, Mus_IL, Mus_ILCE, Mus_Foto, Mus_KayitTarih) 
                    VALUES (NULL, '$ad', '$soyad', '$gsm', '$email', '$dogumtarih', '$teslimatadres', '$faturaadres', '$il', '$ilce', '$dosya', current_timestamp())";

                
                if ($conn->query($sql) === TRUE) {
                    echo "Yeni kayıt başarıyla oluşturuldu.<br>";
                } else {
                    echo "Hata: " . $sql . "<br>" . $conn->error;
                }

                session_start();
                $_SESSION["eklenen"] = $sql;

               
                $conn->close();
            }
            ?>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-6">
                    <img src="imgdocs/resim4.jpg" width="400px" height="400px">
                </div>
                <div class="col-6">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <table><center>
							<tr>
							<th>KAYIT OL</th></tr>
                            <tr></center>
                                <td>Adınız:</td>
                                <td><input type="text" name="musad"></td>
                            </tr>
                            <tr>
                                <td>Soyadınız:</td>
                                <td><input type="text" name="mussoyad"></td>
                            </tr>
                            <tr>
                                <td>GSM:</td>
                                <td><input type="text" name="musgsm"></td>
                            </tr>
                            <tr>
                                <td>E-MAİL:</td>
                                <td><input type="text" name="musemail"></td>
                            </tr>
                            <tr>
                                <td>Doğum Tarihiniz:</td>
                                <td><input type="text" name="musdogumtarih"></td>
                            </tr>
                            <tr>
                                <td>Teslimat Adresiniz:</td>
                                <td><input type="text" name="musteslimatadres"></td>
                            </tr>
                            <tr>
                                <td>Fatura Adresiniz:</td>
                                <td><input type="text" name="musfaturaadres"></td>
                            </tr>
                            <tr>
                                <td>İliniz:</td>
                                <td><input type="text" name="musil"></td>
                            </tr>
                            <tr>
                                <td>İlçeniz:</td>
                                <td><input type="text" name="musilce"></td>
                            </tr>
                            <tr>
                                <td>Fotoğraf:</td>
                                <td><input type="file" name="dosya"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="KAYDET">
                                    <input type="reset" value="İPTAL ET">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include("dip.php"); ?>
</body>
</html>
