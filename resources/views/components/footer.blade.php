<style>
:root {
    --color-primary: #004d99;
    --color-accent: #ff9133;
    --color-text: #b3b3b3;
}

/* ===== FOOTER ===== */
footer {
    background: var(--color-primary);
    color: #ffffff;
    padding: 30px 8% 15px;
    font-family: 'Poppins', sans-serif;
}

/* Layout utama */
.footer-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 30px;
    align-items: flex-start;
}

/* Konten per kolom */
.footer-content h3 {
    color: var(--color-accent);
    font-size: 1.1rem;
    margin-bottom: 14px;
    position: relative;
}

.footer-content h3::after {
    content: '';
    position: absolute;
    width: 35px;
    height: 2px;
    background: var(--color-accent);
    bottom: -6px;
    left: 0;
}

.footer-content p,
.footer-content a {
    color: var(--color-text);
    font-size: 0.9rem;
    line-height: 1.6;
    margin-bottom: 8px;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
}

.footer-content a:hover {
    color: #ffffff;
    transform: translateX(4px);
    transition: 0.3s ease;
}

/* Social media */
.social-icons {
    display: flex;
    gap: 12px;
    margin-top: 10px;
}

.social-icons img {
    width: 22px;
    height: 22px;
    filter: grayscale(1) invert(1);
    transition: 0.3s ease;
}

.social-icons img:hover {
    filter: grayscale(0) invert(0);
    transform: scale(1.15);
}

/* Copyright */
.copyright {
    text-align: center;
    margin-top: 25px;
    padding-top: 10px;
    border-top: 1px solid rgba(255,255,255,0.2);
    color: #ddd;
    font-size: 0.8rem;
}

/* Responsive */
@media (max-width: 600px) {
    footer {
        padding: 25px 6% 12px;
    }

    .footer-container {
        gap: 25px;
    }

    .footer-content {
        text-align: left;
    }
}

</style>

<footer>
    <div class="footer-container" data-aos="fade-up">
        
        <div class="footer-content">
            <h3>Kontak Kami</h3>
            <p><i class="fas fa-envelope"></i> hubinsmkn1cib@gmail.com</p>
            <p><i class="fas fa-phone"></i> +62 888 8888 8888</p>
            <p><i class="fas fa-map-marker-alt"></i> Hubin SMKN 1 Cibinong</p>
        </div>

        <div class="footer-content">
            <h3>Tautan Cepat</h3>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">Tentang Kami</a>
        </div>

        <div class="footer-content">
            <h3>Media Sosial</h3>
            <p>Ikuti perkembangan kami melalui media sosial resmi.</p>
            <div class="social-icons">
                <a href="https://www.facebook.com/smknegeri1cibinong/">
                    {{-- <img src="{{ asset('Gambar/facebook.png') }}" alt="Facebook"> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm8,191.63V152h24a8,8,0,0,0,0-16H136V112a16,16,0,0,1,16-16h16a8,8,0,0,0,0-16H152a32,32,0,0,0-32,32v24H96a8,8,0,0,0,0,16h24v63.63a88,88,0,1,1,16,0Z"></path></svg>
                </a>
                <a href="https://www.instagram.com/smkn1cbn_official/">
                    {{-- <img src="{{ asset('Gambar/instagram.png') }}" alt="Instagram"> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 256 256"><path d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z"></path></svg>
                </a>
                <a href="https://www.youtube.com/c/SMKN1Cibinong_Official">
                    {{-- <img src="{{ asset('Gambar/youtube.png') }}" alt="YouTube"> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 256 256"><path d="M164.44,121.34l-48-32A8,8,0,0,0,104,96v64a8,8,0,0,0,12.44,6.66l48-32a8,8,0,0,0,0-13.32ZM120,145.05V111l25.58,17ZM234.33,69.52a24,24,0,0,0-14.49-16.4C185.56,39.88,131,40,128,40s-57.56-.12-91.84,13.12a24,24,0,0,0-14.49,16.4C19.08,79.5,16,97.74,16,128s3.08,48.5,5.67,58.48a24,24,0,0,0,14.49,16.41C69,215.56,120.4,216,127.34,216h1.32c6.94,0,58.37-.44,91.18-13.11a24,24,0,0,0,14.49-16.41c2.59-10,5.67-28.22,5.67-58.48S236.92,79.5,234.33,69.52Zm-15.49,113a8,8,0,0,1-4.77,5.49c-31.65,12.22-85.48,12-86,12H128c-.54,0-54.33.2-86-12a8,8,0,0,1-4.77-5.49C34.8,173.39,32,156.57,32,128s2.8-45.39,5.16-54.47A8,8,0,0,1,41.93,68c30.52-11.79,81.66-12,85.85-12h.27c.54,0,54.38-.18,86,12a8,8,0,0,1,4.77,5.49C221.2,82.61,224,99.43,224,128S221.2,173.39,218.84,182.47Z"></path></svg>
                </a>
            </div>
        </div>

    </div>

    <div class="copyright">
        <p>&copy; 2026 Hubin SMKN 1 Cibinong. All rights reserved.</p>
    </div>
</footer>