<?php
header('Content-Type: text/html; charset=utf-8');


$dogru_ogrenci_no = "b251210047";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
   
    if (isset($_POST['name'])) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);
        $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : '-';
        ?>
        <!DOCTYPE html>
        <html lang="tr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Mesaj Gönderildi</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
            <style>
                body { background-color: #0a1128; color: #fff; padding-top: 100px; font-family: 'Segoe UI', sans-serif; }
                .result-card { background: #111f42; border-radius: 16px; box-shadow: 0 10px 35px rgba(0,0,0,0.6); padding: 45px; border: 1px solid rgba(232, 182, 89, 0.2); }
                .header-text { color: #e2b659; font-weight: bold; margin-bottom: 15px; }
                .info-label { color: #a0aec0; font-size: 0.9rem; font-weight: 600; }
                .btn-back { border: 1px solid #e2b659; color: #e2b659; border-radius: 20px; padding: 8px 30px; text-decoration: none; transition: 0.3s; display: inline-block; }
                .btn-back:hover { background: #e2b659; color: #0a1128; }
            </style>
        </head>
        <body>
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <div class="result-card">
                            <h2 class="header-text">✓ Mesajınız Gönderildi</h2>
                            <p class="text-muted mb-4">İletişim formunuz başarıyla işleme alınmıştır.</p>
                            <hr style="background-color: rgba(255,255,255,0.15);">
                            
                            <div class="text-start my-4 p-3" style="background: rgba(10, 17, 40, 0.4); border-radius: 8px;">
                                <p class="mb-2"><span class="info-label">Ad Soyad:</span> <?php echo $name; ?></p>
                                <p class="mb-2"><span class="info-label">E-posta:</span> <?php echo $email; ?></p>
                                <p class="mb-2"><span class="info-label">Telefon:</span> <?php echo $phone; ?></p>
                                <p class="mb-2"><span class="info-label">Konu:</span> <?php echo $subject; ?></p>
                                <p class="mb-2"><span class="info-label">Cinsiyet:</span> <?php echo $gender; ?></p>
                                <p class="mb-0"><span class="info-label">Mesaj:</span> <?php echo $message; ?></p>
                            </div>
                            
                            <a href="iletisim.html" class="btn-back">İletişime Geri Dön</a>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        </html>
        <?php
        exit();
    }

   
    if (isset($_POST['kullanici_adi']) && isset($_POST['sifre'])) {
        $gelen_mail = trim($_POST['kullanici_adi']);
        $gelen_sifre = trim($_POST['sifre']);
        $dogru_mail = $dogru_ogrenci_no . "@sakarya.edu.tr";
        $dogru_sifre = $dogru_ogrenci_no;

        if ($gelen_mail === $dogru_mail && $gelen_sifre === $dogru_sifre) {
            ?>
            <!DOCTYPE html>
            <html lang="tr">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Giriş Başarılı</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
                <style>
                    body { 
                        background-color: #0a1128; 
                        padding-top: 120px; 
                        color: #fff; 
                        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    }
                    
                    .result-card { 
                        background: #111f42; 
                        border-radius: 24px; 
                        padding: 65px 50px; 
                        border: 1px solid rgba(232, 182, 89, 0.25); 
                        box-shadow: 0 25px 55px rgba(0, 0, 0, 0.6);
                    }
                    .header-container {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        gap: 20px;
                        margin-bottom: 10px;
                    }
                   
                    .header-text { 
                        color: #e2b659; 
                        font-weight: 700; 
                        font-size: 2.6rem;
                        margin: 0;
                        letter-spacing: -0.5px;
                    }
                    
                    .login-avatar {
                        width: 75px;
                        height: 75px;
                        border-radius: 50%;
                        object-fit: cover;
                        border: 3px solid #e2b659;
                        box-shadow: 0 0 15px rgba(232, 182, 89, 0.3);
                    }
                   
                    .welcome-text {
                        font-size: 2.1rem;
                        font-weight: 300;
                    }
                    .student-no {
                        color: #e2b659;
                        font-weight: 700;
                    }
                    
                    .sub-text {
                        color: #a0aec0;
                        font-size: 1.1rem;
                        letter-spacing: 0.5px;
                    }
                </style>
            </head>
            <body>
                <div class="container text-center">
                    <div class="row justify-content-center">
                        <div class="col-md-9 col-lg-7">
                            <div class="result-card">
                                
                                <div class="header-container">
                                    <img src="img/cat.jpg" class="login-avatar" alt="Profil">
                                    <h1 class="header-text">Giriş Başarılı</h1>
                                </div>
                                
                                <hr style="background-color: rgba(232, 182, 89, 0.3); height: 2px; margin: 35px 0;">
                                
                                <h2 class="my-4 welcome-text">Hoşgeldiniz <span class="student-no"><?php echo strtoupper($dogru_ogrenci_no); ?></span></h2>
                                <p class="sub-text mt-3">Sisteme başarıyla yetkilendirildiniz. Güvenli çıkış yapana kadar oturumunuz açık kalacaktır.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </body>
            </html>
            <?php
            exit();
        } else {
            echo "<script>alert('Hata!'); window.location.href='login.html';</script>";
            exit();
        }
    }
}
?>