<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wifi ve IT Çözümleri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php 

include "inc/navbar.php";

?>

    <!-- HERO -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>
                <h1>Profesyonel Wifi & IT Çözümleri</h1>
            </h1>
            <p>Küçük İşletmeler İçin Profesyonel Wi-Fi, IT hizmeti ve Dijital çözümler </p>
            <a href="#services">Explore Services</a>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="about" id="about">
        <h1>Hedef Müşteri Kitlesi</h1>
        <h2>Apart Oteller, Butik Oteller, Hosteller,Okullar,Ofisler</h2>
        <p>Misafirleriniz için hızlı, kesintisiz ve güvenli internet artık konforun bir parçası.</p>
        <ul>
            <li>Birden fazla internet hattını birleştirerek (load balance) tek bir güçlü bağlantı elde edebilirsiniz.
            </li>
            <li>Her katta veya odada güçlü Wi-Fi kapsaması sağlayarak misafir memnuniyetini artırabilirsiniz.</li>
            <li>Reklam engelleme ve güvenli internet filtreleri ile kontrollü bir ağ sunabilirsiniz</li>
            <li>Size özel hotspot giriş sayfası ile kurumsal kimliğinizi güçlendiriyoruz.</li>

            <li>Bilgi işlem (IT) Desteği.</li>
        </ul>
    </section>

    <!-- SERVICES -->
 <?php 
 
 include "hizmetler.php"
 
 
 ?>
    <!-- INFO -->
    <section class="info" id="info">
        <h3>Oteller için Kablosuz İnternet Çözümleri</h3>
        <p>Her odada güçlü ve stabil Wi-Fi ile misafir memnuniyetini artırın.</p>
        <ul>
            <li>Her odada güçlü Wi-Fi kapsama alanı</li>
            <li>Load balance ile kesintisiz bağlantı</li>
            <li>Misafir ve işletme için ayrı güvenli ağlar</li>
            <li>Kolay yönetim ve kontrol</li>
        </ul>
    </section>


    <!-------blog-->




    <section class="blog-list">
        <div class="container">
            <h2 class="section-title">Blog Yazılarımız</h2>
            <div class="blog-cards">

                <article class="blog-card">

                    <div class="blog-content">
                        <h3><a href="blog-detay.html">5651 Uyumlu Loglama Nasıl Yapılır?</a></h3>
                        <p>İnternet sağlayıcıları ve içerik üreticileri için loglama süreci ve yasal zorunluluklar...
                        </p>
                        <a class="read-more" href="blog-detay.html">Devamını Oku →</a>
                    </div>
                </article>

                <article class="blog-card">

                    <div class="blog-content">
                        <h3><a href="blog-detay.html">MikroTik ve UniFi ile İşletme Ağ Kurulumu</a></h3>
                        <p>İşletmeniz için profesyonel Wi-Fi ve güvenli ağ çözümleri nasıl hazırlanır, detaylar
                            burada...</p>
                        <a class="read-more" href="blog-detay_2.html">Devamını Oku →</a>
                    </div>
                </article>

            </div>
        </div>
    </section>




    <section class="referans">

        <div class="row">

            <h5>Referanslarımız</h5>
        </div>
        <div class="ref_content">
            <div class="ref_box">
                <i class="fa-solid fa-circle-user fa-2x"></i> <br>
                <p>"Web tasarım hizmetinde isteğimize yönelik tasarım için ve gerekli google işletme kaydı oluşturma
                    destekleri için çok teşekkür ederiz."</p>
                <strong>"Cereme Besi Çiftilği"</strong> <br>
                <a class="btn btn-secondary" href="ceremekardeslerbesiciftligi.com">Ziyaret Et</a>
            </div>


            <div class="ref_box">
                <i class="fa-solid fa-circle-user fa-2x"></i> <br>
                <p>"Web tasarım hizmetinde ve dairelerdeki wifi sorun çözümlerindeki profesyonel destekleriniz için
                    teşekkür
                    ederiz."</p>
                <strong>"Şeker Aparments"</strong> <br>
                <a class="btn btn-secondary" href="https://www.sekerapartments.com/">Ziyaret Et</a>
            </div>

            <div class="ref_box">
                <i class="fa-solid fa-circle-user fa-2x"></i> <br>
                <p>"IT altyapımızı tamamen güvenli bir şekilde yönettikleri için teşekkürler."</p>
                <strong>"Müşteri Yorumu"</strong> <br>

            </div>

            <div class="ref_box">
                <i class="fa-solid fa-circle-user fa-2x"></i> <br>
                <p>"İş akışımız artık kesintisiz ve izlenebilir."</p>
                <strong>"Müşteri Yorumu"</strong> <br>

            </div>


        </div>




    </section>

    <section class="iletisim" id="form_gonder">
        <h2>İletişim</h2>
        <p>Bizimle iletişime geçmek için formu doldurun. En kısa sürede size dönüş yapacağız.</p>
        <form action="sendmail.php" method="POST">
            <div class="form-group">
                <label for="isim">Adınız Soyadınız</label>
                <input type="text" id="isim" name="isim" placeholder="Adınızı yazın" required>
            </div>
            <div class="form-group">
                <label for="email">E-posta</label>
                <input type="email" id="email" name="email" placeholder="E-posta adresinizi yazın" required>
            </div>
            <div class="form-group">
                <label for="konu">Konu</label>
                <input type="text" id="konu" name="konu" placeholder="Konu yazın" required>
            </div>
            <div class="form-group">
                <label for="mesaj">Mesajınız</label>
                <textarea id="mesaj" name="mesaj" placeholder="Mesajınızı yazın" rows="5" required></textarea>
            </div>
            <button type="submit">Gönder</button>
        </form>
    </section>

    <!-- FOOTER -->
    <footer class=" text-white pt-5 pb-3">
        <div class="container text-center text-md-start">
            <div class="row">

                <div class="col-md-4 mb-4">
                    <h5 class="text-uppercase">Camping & IT</h5>
                    <p>Profesyonel IT çözümleri ve kamp malzemeleri ile işletmenizi veya maceranızı güçlendirin.</p>
                </div>

                <div class="col-md-4 mb-4">
                    <h5 class="text-uppercase">İletişim</h5>
                    <p><i class="fas fa-map-marker-alt me-2"></i> İstanbul, Türkiye</p>
                    <p><i class="fas fa-phone me-2"></i> +90 123 456 7890</p>
                    <p><i class="fas fa-envelope me-2"></i> info@campingit.com</p>
                </div>

                <div class="col-md-4 mb-4">
                    <h5 class="text-uppercase">Sosyal Medya</h5>
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-linkedin fa-lg"></i></a>
                </div>

            </div>

            <hr class="mb-4" style="border-top: 1px solid rgba(255,255,255,0.2)">

            <div class="text-center">
                &copy; 2025 Camping & IT. Tüm Hakları Saklıdır.
            </div>
        </div>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>