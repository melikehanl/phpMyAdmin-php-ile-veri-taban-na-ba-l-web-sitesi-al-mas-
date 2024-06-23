<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hair Extension Store</title>
	
</head>

<body>
	
	<?php 
	include("vtbaglan.php");
	include("menu.php");
	?>
    <div class="card">
			 <div class="card-header">
            <div class="row">
			
              <div class="col-8">
	<table class="table-success" border="1" cellpadding="2px" cellspacing="2px">
	<tr><th>NO</th>
		<th>AD SOYAD</th>
		<th>GSM</th>
		<th>E-MAİL</th>
		<th>DOĞUM TARİHİ</th>
		<th>TESLİMAT ADRESİ</th>
		<th>FATURA ADRESİ</th>
		<th>İL</th>
		<th>İLÇE</th>
		<th>FOTOĞRAF</th>
		<th>İŞLEMLER</th></tr>
	<?php 
	$sql="select * from tbl_musteriler order by Mus_ID asc";
	$kayitlar=mysqli_query($conn,$sql);
	while($satir=mysqli_fetch_assoc($kayitlar)){
		echo"<tr><td>$satir[Mus_ID]</td>
		<td>$satir[Mus_Ad] $satir[Mus_Soyad]</td>
		<td>$satir[Mus_GSM]</td>
		<td>$satir[Mus_Email]</td>
		<td>$satir[Mus_DogumTarih]</td>
		<td>$satir[Mus_TeslimatAdres]</td>
		<td>$satir[Mus_FaturaAdres]</td>
		<td>$satir[Mus_IL]</td>
		<td>$satir[Mus_ILCE]</td>
		<td>$satir[Mus_Foto]</td>
		<td><a href=\"detay.php?kisi=$satir[Mus_ID]\">Detay</a>-<a href=\"guncelle.php?kisi=$satir[Mus_ID]\">Güncelle</a>-<a href=\"sil.php?kisi=$satir[Mus_ID]\">Sil</a></td> </tr>";
	}
	
	?>
	</table>
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