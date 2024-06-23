<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hair Extension Store</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
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
    <?php 
    include("vtbaglan.php");
    include("menu.php");
    ?>

    <div class="card">
        <div class="card-header">
			 <table class="table-success" border="1" cellpadding="2px" cellspacing="2px">
                        <tr>
                            <th>NO</th>
                            <th>AD SOYAD</th>
                            <th>GSM</th>
                            <th>E-MAİL</th>
                            <th>DOĞUM TARİHİ</th>
                            <th>TESLİMAT ADRESİ</th>
                            <th>FATURA ADRESİ</th>
                            <th>İL</th>
                            <th>İLÇE</th>
							
                            
                        </tr>
            <?php
            // Müşteri adı GET parametresi ile sağlanmış mı kontrol et
            if (isset($_GET['Mus_Ad'])) {
                // GET parametresinden müşteri adını al
                $musteri_adi = mysqli_real_escape_string($conn, $_GET['Mus_Ad']);
                
                // Müşteri adını ve soyadını ayır
                list($ad, $soyad) = explode(' ', $musteri_adi, 2);

                // Veritabanından müşteri bilgilerini çekmek için sorgu
                $sql = "SELECT * FROM tbl_musteriler WHERE Mus_Ad = '$ad' AND Mus_Soyad = '$soyad'";
                $result = mysqli_query($conn, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    // Müşteri bilgilerini getir
                    $musteri = mysqli_fetch_assoc($result);
					echo "<tr><td>{$musteri['Mus_ID']}</td>
					<td>{$musteri['Mus_Ad']} {$musteri['Mus_Soyad']}</td>
					<td>{$musteri['Mus_GSM']}</td>
					<td>{$musteri['Mus_Email']}</td>
					<td>{$musteri['Mus_DogumTarih']}</td>
					<td>{$musteri['Mus_TeslimatAdres']}</td>
					<td>{$musteri['Mus_FaturaAdres']}</td>
					<td>{$musteri['Mus_IL']}</td>
					<td>{$musteri['Mus_ILCE']}</td>
					
					";
                    
                   
					 
                    
                } else {
                    echo "<p>Müşteri bulunamadı.</p>";
                }
            } else {
                echo "<p>Müşteri adı seçilmedi.</p>";
            }

            // Veritabanı bağlantısını kapat
            mysqli_close($conn);
            ?>
				 </table>
        </div>

        <div class="row">
            <div class="col-8">
                <table class="table-success" border="1" cellpadding="2px" cellspacing="2px">
                    <tr>
                        <th>NO</th>
                        <th>ÜRÜN KATEGORİ</th>
                        <th>ÜRÜN BARKOD</th>
                        <th>ÜRÜN ADI</th>
                        <th>ÜRÜN ŞEKLİ</th>
                        <th>ÜRÜN UZUNLUK</th>
                        <th>ÜRÜN TURU</th>
                        <th>ÜRÜN RENK</th>
                        <th>ÜRÜN FİYAT</th>
                        <th>SATIŞ</th>
                    </tr>
                    <?php 
                    include("vtbaglan.php"); // Veritabanı bağlantısını yeniden dahil et
                    $sql = "SELECT * FROM Tbl_Urunler ORDER BY Urun_ID ASC"; 
                    $kayitlar = mysqli_query($conn, $sql);
                    while ($satir = mysqli_fetch_assoc($kayitlar)) {
                        echo "<tr>
                            <td>{$satir['Urun_ID']}</td>
                            <td>{$satir['Urun_Kat_ID']}</td>
                            <td>{$satir['Urun_Barkod']}</td>
                            <td>{$satir['Urun_Ad']}</td>
                            <td>{$satir['Urun_Sekli']}</td>
                            <td>{$satir['Urun_Uzunluk']}</td>
                            <td>{$satir['Urun_Turu']}</td>
                            <td>{$satir['Urun_Renk']}</td>
                            <td>{$satir['Urun_Fiyat']}</td>
                            <td><a href=\"sepet.php?urun={$satir['Urun_ID']}\">Ürün Seç</a></td>
                        </tr>";
                    }
                    ?>
                </table>
            </div>

            <div class="col-2">
               
            </div>
        </div>
    </div>
    <?php include("dip.php"); ?>
</body>
</html>
