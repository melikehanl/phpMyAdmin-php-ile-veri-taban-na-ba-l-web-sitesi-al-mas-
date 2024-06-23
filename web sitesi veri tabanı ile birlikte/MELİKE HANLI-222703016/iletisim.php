<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hair Extension Store</title>
  <style>
    .form-container {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .content-wrapper {
      display: flex;
      align-items: center;
    }
    .form-container img {
      margin-right: 20px;
      width: 200px;
      height: 200px;
    }
    .form-container .form-content {
      flex: 1;
    }
    .form-container table {
      width: auto;
      border-collapse: collapse;
    }
    .form-container th,
    .form-container td {
      padding: 10px;
      border: 1px solid #ccc;
    }
    .form-container th {
      color: #3796D7;
    }
    .form-container td {
      color: #626262;
    }
    .form-container .radio-container {
      display: flex;
      align-items: center;
    }
    .form-container .radio-container input[type="radio"] {
      margin-right: 10px;
    }
  </style>
</head>
<body>
  <?php include("menu.php") ?>
	<center>
  <div class="card">
    <div class="card-header">
      <div class="col-md-8"></div>
    </div>
	  
    <div class="card-body">
      <div class="form-container">
        <div class="content-wrapper">
          <img src="21121211.jpg" class="mx-5 mt-4 img-fluid" width="200" height="200">
          <div class="form-content">
            <p class="text-start img-fluid">
              <form action="#" method="POST">
                <table class="contact-table">
                  <p style="color:#5A5656"><b>İLETİŞİM FORMU</b></p>
                  <tbody>
                    <tr>
                      <th scope="row">Adınız</th>
                      <td>:</td>
                      <td><input type="text" name="ad*"></td>
                    </tr>
                    <tr>
                      <th scope="row">Soyadınız</th>
                      <td>:</td>
                      <td><input type="text" name="soyad"></td>
                    </tr>
                    <tr>
                      <th><label for="yas">Yaşınız</label></th>
                      <td>:</td>
                      <td><input type="number" id="yas" name="yas" required min="18"></td>
                    </tr>
                    <tr>
                      <th scope="row">Cinsiyet:</th>
                      <td>:</td>
                      <td class="radio-container">
                        <input type="radio" id="erkek" name="cinsiyet" value="erkek" required>
                        <label for="erkek">Erkek</label>
                        <input type="radio" id="kadin" name="cinsiyet" value="kadin" required>
                        <label for="kadin">Kadın</label>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">Telefon Numarası</th>
                      <td>:</td>
                      <td><input type="text" name="Telefon Numarası"></td>
                    </tr>
                    <tr>
                      <th scope="row">e-Posta</th>
                      <td>:</td>
                      <td><input type="text" name="e-posta"></td>
                    </tr>
                    <tr>
                      <th scope="row">Konu</th>
                      <td>:</td>
                      <td><input type="text" name="Konu"></td>
                    </tr>
                    <tr>
                      <th scope="row">Mesajınız</th>
                      <td>:</td>
                      <td><input type="text" name="ileti"></td>
                    </tr>
                    <tr>
                      <th>&nbsp;</th>
                      <td>&nbsp;</td>
                      <td><input type="submit" value="GÖNDER"><input type="reset" value="İptal Et"></td>
                    </tr>
                  </tbody>
                </table>
              </form>
            </p> 
          </div>
        </div>
      </div>
    </div>
	</center>
    <div class="card-footer">
      <div class="row">
      
      </div>
    </div>
  </div>
	<?php include("dip.php"); ?>
</body>
</html>

