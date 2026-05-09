<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Hubin | SMKN 1 Cibinong</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1165876da6.js" crossorigin="anonymous"></script>
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/style-about.css') }}">
</head>
<body>    

    <x-navbar></x-navbar>
        
    <header class="header_about">
        <div class="text-header-about" data-aos="zoom-out" data-aos-duration="1200">
            <span class="line line1">Tentang Hubungan Industri</span><br>
            <span class="line line2">SMKN 1 CIBINONG</span><br>
            <span class="line line3">Rumpun IT</span>
        </div>
    </header>

    <main class="content-wrapper">
        <section class="desc_box_intro" data-aos="fade-up">
            <div class="accent-line"></div>
            <p>Hubungan Industri (Hubin) adalah jembatan strategis antara <strong>SMKN 1 Cibinong</strong> dengan Dunia Usaha dan Dunia Industri (DU/DI). Kami memastikan kurikulum sekolah selaras dengan kebutuhan teknologi masa kini.</p>
        </section>

        <section class="main_container">
            <div class="section-title" data-aos="fade-right">
                <h2>Mitra Industri Kami</h2>
                <p>Bekerjasama dengan perusahaan teknologi terkemuka.</p>
            </div>

            <div class="grid-partners">
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <div class="img-container">
                        <img src="Gambar/PT CLEVIO.jpeg" alt="Logo PT CLEVIO">
                    </div>
                    <div class="card-info">
                        <h3>PT. CLEVIO</h3>
                        <span>Education Technology</span>
                    </div>
                </div>

                <div class="card" data-aos="fade-up" data-aos-delay="200">
                    <div class="img-container">
                        <img src="Gambar/PT BOER TECHNOLOGY.png" alt="Logo PT BOER TECHNOLOGY">
                    </div>
                    <div class="card-info">
                        <h3>PT. BOER TECHNOLOGY</h3>
                        <span>IT Consultant & Cloud</span>
                    </div>
                </div>

                <div class="card" data-aos="fade-up" data-aos-delay="300">
                    <div class="img-container">
                        <img src="Gambar/PT CARAKAN.jpeg" alt="Logo PT CARAKAN">
                    </div>
                    <div class="card-info">
                        <h3>PT. CARAKAN</h3>
                        <span>Software Development</span>
                    </div>
                </div>

                <div class="card" data-aos="fade-up" data-aos-delay="400">
                    <div class="img-container">
                        <img src="Gambar/PT ZOOM IT.jpeg" alt="Logo PT ZOOM IT">
                    </div>
                    <div class="card-info">
                        <h3>PT. ZOOM IT</h3>
                        <span>System Integrator</span>
                    </div>
                </div>

                <div class="card" data-aos="fade-up" data-aos-delay="500">
                    <div class="img-container">
                        <img src="Gambar/LPK SEIOKU JAGORAWI.jpg" alt="Logo LPK SEIKOU JAGORAWI">
                    </div>
                    <div class="card-info">
                        <h3>LPK SEIKOU JAGORAWI</h3>
                        <span>Professional Training</span>
                    </div>
                </div>

                <div class="card" data-aos="fade-up" data-aos-delay="600">
                    <div class="img-container">
                        <img src="Gambar/logo_InfraDigital.png" alt="Logo PT INFRA DIGITAL">
                    </div>
                    <div class="card-info">
                        <h3>PT INFRA DIGITAL</h3>
                        <span>Digital Infrastructure</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="desc_box_outro" data-aos="fade-up">
            <p>Melalui sinergi ini, kami berkomitmen mencetak lulusan yang tidak hanya kompeten secara teori, tetapi juga siap beradaptasi dengan standar profesional industri global.</p>
        </section>
    </main>

    <x-footer></x-footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 800,
            easing: 'ease-in-out',
        });
    </script>
</body>
</html>