<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hair Extension Store</title>
<script type="text/javascript">
   
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
				<div class="col-2">
					
					</div>
                <div class="col-6">
					<?php include("menu.php"); ?>
					

					<pre>
					<form action="#" method="get">
					<h1>ÖDEME SAYFASI</h1>
					Adınız:                <input type="text" value="" name="ad">
					Soyadınız:             <input type="text" value="" name="soyad">
					Kartın Üstündeki İsim: <input type="text" value="" name="kui">
					Kart Numaranız:        <input type="text" value="" name="krt">
					Son Kullanma Tarihi:   <input type="text" value="" name="skt">
					CVV:                   <input type="text" value=""  name="cvv">
					<input type="button" value="İPTAL ET" name="btn2"><input type="button" value="ÖDEME YAP" name="btn1"> 
					</form></pre>
		
					
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

