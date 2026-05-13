<?php
header('Content-Type: text/html; charset=utf-8');


$dogru_ogrenci_no = "b251210047"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    if (isset($_POST['kullanici_adi']) && isset($_POST['sifre'])) {
        
        $gelen_mail = trim($_POST['kullanici_adi']);
        $gelen_sifre = trim($_POST['sifre']);
        
        $dogru_mail = $dogru_ogrenci_no . "@sakarya.edu.tr";
        $dogru_sifre = $dogru_ogrenci_no;

        
        if (empty($gelen_mail) || empty($gelen_sifre)) {
            echo "<script>alert('Hata: Alanlar boş bırakılamaz!'); window.location.href='login.html';</script>";
            exit();
        }

        
        if ($gelen_mail === $dogru_mail && $gelen_sifre === $dogru_sifre) {
            
            ?>
            <!DOCTYPE html>
            <html lang="tr">
            <head>
                <meta charset="UTF-8">
                <title>Giriş Başarılı</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
                <style>
                    body { background: #141414; padding-top: 100px; font-family: 'Arial', sans-serif; }
                    .result-card { background: rgba(0, 0, 0, 0.75); border-radius: 10px; box-shadow: 0 10px 25px rgba(0,0,0,0.5); padding: 50px; color: #fff; border: 1px solid #28a745; }
                    .header-text { color: #28a745; font-weight: bold; margin-bottom: 20px; }
                </style>
            </head>
            <body>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 result-card text-center">
                            <h2 class="header-text">✔ Giriş Başarılı</h2>
                            <hr style="background-color: #fff;">
                            <h3 class="my-4">Hoşgeldiniz <?php echo strtoupper($dogru_ogrenci_no); ?></h3>
                            <p class="text-muted">Sisteme başarıyla yetkilendirildiniz.</p>
                            <hr style="background-color: #fff;">
                            <a href="index.html" class="btn btn-danger px-4" style="background: #e50914; border: none; font-weight: bold;">Anasayfaya Dön</a>
                        </div>
                    </div>
                </div>
            </body>
            </html>
            <?php
            exit();
        } else {
            
            echo "<script>alert('Hata: Kullanıcı adı veya şifre hatalı!'); window.location.href='login.html';</script>";
            exit();
        }
    }
    
    
    else {
       
        $adSoyad  = isset($_POST['adSoyad']) ? htmlspecialchars($_POST['adSoyad']) : "Girilmedi";
        $email    = isset($_POST['email'])   ? htmlspecialchars($_POST['email'])   : "Girilmedi";
        $telefon  = isset($_POST['telefon']) ? htmlspecialchars($_POST['telefon']) : "Girilmedi"; 
        $konu     = isset($_POST['konu'])    ? htmlspecialchars($_POST['konu'])    : "Girilmedi";
        $mesaj    = isset($_POST['mesaj'])   ? htmlspecialchars($_POST['mesaj'])   : "Girilmedi";
        $cinsiyet = isset($_POST['cinsiyet'])? htmlspecialchars($_POST['cinsiyet']): "Belirtilmedi";
        $onay     = isset($_POST['onay'])    ? "Onaylandı" : "Onaylanmadı"; 

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
                            <p><strong>Telefon:</strong> <?php echo $telefon; ?></p> <p><strong>Konu:</strong> <?php echo $konu; ?></p>
                            <p><strong>Cinsiyet:</strong> <?php echo $cinsiyet; ?></p>
                            <p><strong>Mesaj:</strong> <?php echo $mesaj; ?></p>
                            <p><strong>Bilgi Beyanı:</strong> <?php echo $onay; ?></p> </div>
                        <hr>
                        <a href="index.html" class="btn btn-dark">Anasayfaya Dön</a>
                        <a href="iletisim.html" class="btn btn-outline-danger">Geri Dön</a>
                    </div>
                </div>
            </div>
        </body>
        </html>
        <?php
        exit();
    }

} else {
    
    header("Location: iletisim.html");
    exit();
}
?>