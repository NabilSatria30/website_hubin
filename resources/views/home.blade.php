<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Hubin | Rumpun IT</title>
    
    <link rel="stylesheet" href="{{ asset('css/style-home.css') }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

<x-navbar></x-navbar>

<section class="background1">
    <div class="overlay"></div>
    <div class="home-judul" data-aos="zoom-in" data-aos-duration="1200">
        <span class="sub-judul">SELAMAT DATANG DI</span>
        <h1>Website Hubungan Industri <span>Rumpun IT Millenium</span></h1>
        <div class="accent-line"></div>
    </div>
</section>

<section class="intro-section">
    <div class="halaman-2" data-aos="fade-up">
        <div class="quote-icon">“</div>
        <p>
            <strong>Hubungan Industri</strong> adalah jembatan strategis antara dunia pendidikan dengan dunia kerja 
            untuk menyelaraskan kompetensi siswa dengan kebutuhan nyata industri masa kini.
        </p>
    </div>
</section>

<section class="card-section" data-aos="fade-right">
    <div class="card-container">
        <div class="card">
            <div class="slider">
                <img src="Gambar/cardhome11.png">
                {{-- <img src="Gambar/cardhome1.png"> --}}
            </div>
            <div class="card-content">
                <h3>Kolaborasi Sekolah & Industri</h3>
                <p>
                    Menghubungkan dunia pendidikan dengan dunia kerja melalui program magang, 
                    pelatihan, dan pengembangan keterampilan yang relevan dengan kebutuhan industri.
                </p>
            </div>
        </div>

        <div class="card">
            <div class="slider">
                <img src="Gambar/cardhome13.png">
                {{-- <img src="Gambar/cardhome2.png"> --}}
            </div>
            <div class="card-content">
                <h3>Kemitraan & Kolaborasi Bisnis</h3>
                <p>
                    Membangun sinergi antara pelaku usaha untuk menciptakan peluang baru, 
                    meningkatkan pertumbuhan ekonomi, dan memperluas jaringan profesional.
                </p>
            </div>
        </div>

        <div class="card">
            <div class="slider">
                <img src="Gambar/cardhome12.jpeg">
                {{-- <img src="Gambar/cardhome3.png"> --}}
            </div>
            <div class="card-content">
                <h3>Inovasi & Transformasi Digital</h3>
                <p>
                    Memanfaatkan teknologi digital untuk meningkatkan efisiensi, produktivitas, 
                    dan daya saing di era industri modern.
                </p>
            </div>
        </div>

        <section class="intro-section"  style="margin-top: 30px">
        <div class="halaman-2" data-aos="fade-up">
         <div class="quote-icon">“</div>
         <p>
           Pendidikan yang berkualitas lahir dari pengalaman nyata. Bersama dunia industri dan perusahaan mitra, program PKL membantu siswa 
           mengembangkan keterampilan, disiplin, dan kesiapan karier untuk masa depan yang lebih baik.
        </p>
    </div>
</section>
    </div>
</section>

<x-footer></x-footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        once: true,
        duration: 1000,
        easing: 'ease-out'
    });
</script>

</body>
</html>