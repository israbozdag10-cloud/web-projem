<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  
    $adSoyad  = isset($_POST['adSoyad']) ? htmlspecialchars($_POST['adSoyad']) : "Girilmedi";
    $email    = isset($_POST['email'])   ? htmlspecialchars($_POST['email'])   : "Girilmedi";
    $konu     = isset($_POST['konu'])    ? htmlspecialchars($_POST['konu'])    : "Girilmedi";
    $mesaj    = isset($_POST['mesaj'])   ? htmlspecialchars($_POST['mesaj'])   : "Girilmedi";
    $cinsiyet = isset($_POST['cinsiyet'])? htmlspecialchars($_POST['cinsiyet']): "Belirtilmedi";

    
    ?>
    <!DOCTYPE html>
    <html lang="tr">
    <head>
        <meta charset="UTF-8">
        <title>Gönderim Sonucu</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body { background: #f8f9fa; padding-top: 50px; }
            .result-card { background: white; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); padding: 30px; }
            .header-text { color: #e50914; font-weight: bold; margin-bottom: 20px; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 result-card text-center">
                    <h2 class="header-text">Form Verileri Alındı</h2>
                    <hr>
                    <div class="text-start">
                        <p><strong>Ad Soyad:</strong> <?php echo $adSoyad; ?></p>
                        <p><strong>E-posta:</strong> <?php echo $email; ?></p>
                        <p><strong>Konu:</strong> <?php echo $konu; ?></p>
                        <p><strong>Cinsiyet:</strong> <?php echo $cinsiyet; ?></p>
                        <p><strong>Mesaj:</strong> <?php echo $mesaj; ?></p>
                    </div>
                    <hr>
                    <a href="index.html" class="btn btn-dark">Anasayfaya Dön</a>
                    <a href="iletisim.html" class="btn btn-outline-danger">Geri Dön</a>
                </div>
            </div>
        </div>
    </body>
    </html>
    <?php
} else {
    
    header("Location: iletisim.html");
    exit();
}
?>