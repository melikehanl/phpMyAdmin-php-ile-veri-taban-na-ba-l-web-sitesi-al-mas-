<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Hair Extension Store</title>
<style>
html, body {
    height: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
}
.kirmizi {
    color: cadetblue;
    text-decoration: none;
    margin: 0 10px;
}
.ortala {
    text-align: center;
    color: white;
}
.arka-plan {
    background-color: cornflowerblue;
    height: 150px; 
    width: 100%; 
    padding: 20px; 
    display: flex;
    align-items: center;
    justify-content: center;
}
.alt-baslik, .genis-baslik {
    text-align: center;
}
.header {
    display: flex;
    align-items: center;
}
.header img {
    margin-right: 20px;
}
.card {
    flex: 1;
}
.card-header {
    text-align: center;
    background-color: #f8f9fa;
    padding: 10px 0;
}
.card-header a {
    color: cadetblue;
    text-decoration: none;
    margin: 0 10px;
}
.footer {
    background-color: #f1f1f1;
    text-align: center;
    padding: 10px 0;
}
.footer p {
    margin: 0;
    color: #333;
}
</style>
</head>
<body>
    <div class="card">
        <div class="card-body text-white arka-plan">
            <div class="header">
                <img src="imgdocs/HAİR EXTENSİON STORE.png" width="200px" height="200px">
                <div>
                    <h1 class="genis-baslik">HAIR EXTENSION STORE</h1>
                    <p class="user-select-none alt-baslik">Kişisel bilgilerinizi kolayca yönetin...</p>
                </div>
            </div>
        </div>
        <div class="card-header">
            <a href="anasayfa.php" class="kirmizi">ANASAYFA</a>
            <a href="kisiekle.php" class="kirmizi">KİŞİ EKLE</a>
            <a href="listedetay.php" class="kirmizi">LİSTE VE DETAY</a>
            <a href="iletisim.php" class="kirmizi">İLETİŞİM</a>
            <a href="ulasim.php" class="kirmizi">ULAŞIM</a>
        </div>
    </div>
   
</body>
</html>
