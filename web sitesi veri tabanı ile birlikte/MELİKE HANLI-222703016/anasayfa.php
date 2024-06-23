<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Hair Extension Store</title>
<style>
    .mavi {
        color: #0988B5;
    }
    .baslik {
        font-size: 24px;
        font-weight: bold;
        color: #0A0230;
        text-align: center;
        margin-bottom: 20px;
    }
    .aciklama {
        font-size: 16px;
        line-height: 1.5;
        color: #333;
        text-align: justify;
        margin-bottom: 30px;
    }
    .giris-formu {
        text-align: left;
        margin: 0 auto;
    }
    .giris-formu label, .giris-formu input {
        display: block;
        margin-bottom: 5px;
    }
    .giris-formu .button-container {
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
    }
    .flex-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 30px;
    }
    .flex-container img {
        margin-right: 20px;
    }
    .card-footer {
        padding: 20px;
        background-color: #f8f9fa;
    }
    .card-footer .row {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .content {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: justify;
    }
    .content img {
        margin-right: 20px;
        width: 200px;
        height: 300px;
    }
    .content div {
        max-width: 600px;
    }
</style>
</head>

<body>
<?php 
include("vtbaglan.php");
include("menu.php");
?>
<div class="card">
    <div class="col-12 content">
        <img src="imgdocs/resim3.jpg" alt="Hoş Geldiniz!" width="400px" height="300px">

        <div>
            <p class="baslik">Hoş Geldiniz! <br>Hair Extension Store Ailesine Katılın! <br></p>
            <p class="aciklama">
                Ek Saç, doğal güzellik ve özgüveninizi artırmak için size en kaliteli saç uzatma ve ek saç çözümlerini sunar.<br>
                Peruklarımız, saçınızı istediğiniz şekil ve renge dönüştürmenin hızlı ve pratik bir yoludur. Görünümünüzü değiştirmek için hiçbir sınırlama olmadan, her gün farklı bir tarza bürünebilirsiniz.<br>
                Mikro kaynaklarımız, doğal saçınıza zarar vermeden dolgun ve uzun saçlara sahip olmanızı sağlar. İnce detaylarla işlenmiş mikro kaynaklarımız, saçlarınıza doğal bir görünüm kazandırır ve herhangi bir kısıtlama olmadan günlük yaşamınızı sürdürmenize olanak tanır.<br>
                Protezlerimiz, saç dökülmesi yaşayanlar için özel olarak tasarlanmıştır. <br>Doğal saç görünümünü yeniden kazanmanızı sağlayarak, özgüveninizi artırır ve her anınızı dolu dolu yaşamanızı sağlar.<br>
                Bunlarla Birlikte Daha Birçok uygulamalarla güzelliğinize güzellik katın.<br>
                Siz de Hair Extension Store ailesine katılın ve doğal güzelliğinizi ön plana çıkarın! Hemen bugün bizimle iletişime geçin ve size en uygun saç uzatma çözümünü keşfedin
            </p>
        </div>
    </div>
</div>

<div class="card-footer">
    <div class="row">
        <div class="col-6" style="display: grid; grid-template-columns: auto auto; justify-content: center; align-items: center;">
            <img src="imgdocs/login-password-3.png" alt="Giriş" style="width: 100px; height: 100px;">
            <form action="giris.php" method="post" class="giris-formu">
                <p class="baslik">ÜYE GİRİŞİ</p>
                <label for="kulad">Kullanıcı Adınız:</label>
                <input type="text" id="kulad" name="kulad">
                <label for="kulsifre">Şifreniz:</label>
                <input type="password" id="kulsifre" name="kulsifre">
                <div class="button-container">
                    <input type="reset" value="İptal Et">
                    <input type="submit" value="GİRİŞ">
                    
                    


                </div>
            </form>
        </div>
        <div class="col-6">
            
        </div>
    </div>
</div>
<?php include("dip.php"); ?>
</body>
</html>

