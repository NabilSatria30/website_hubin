<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Responsive</title>

    <style>
        :root {
            --color-primary: #004d99;
            --color-secondary: #ff9133;
            --color-light: #ffffff;
            --color-shadow: rgba(0, 0, 0, 0.2);
            --border-radius-sm: 8px;
            --transition-speed: 0.3s;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        /* ================= NAVBAR ================= */
        nav {
            background-color: var(--color-primary);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 5%;
            box-shadow: 0 4px 10px var(--color-shadow);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        /* ================= LOGO ================= */
        .container-gmbr {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: var(--color-light);
        }

        .container-gmbr img {
            width: 34px;
            height: 32px;
        }

        .logo-text {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
        }

        /* SMKN 1 CIBINONG satu baris */
        nav .logo-text .judul {
            font-size: 1.1rem;
            font-weight: 600;
            white-space: nowrap;
        }

        nav .logo-text .subjudul {
            font-size: 0.8rem;
            font-weight: 400;
            color: var(--color-secondary);
        }

        /* ================= MENU ================= */
        nav ul {
            display: flex;
            align-items: center;
            list-style: none;
            gap: 1.5rem;
            margin: 0;
            padding: 0;
        }

        nav ul li a {
            color: var(--color-light);
            text-decoration: none;
            font-weight: 400;
            position: relative;
        }

        nav ul li a:hover {
            color: var(--color-secondary);
        }

        .btn-login {
            background-color: var(--color-secondary);
            border: none;
            padding: 10px 22px;
            border-radius: var(--border-radius-sm);
            cursor: pointer;
            font-weight: 600;
            color: var(--color-light);
        }

        .btn-login:hover {
            background-color: #ffb400;
        }

        /* ================= HAMBURGER ================= */
        .menu-toggle {
            display: none;
            font-size: 1.8rem;
            background: none;
            border: none;
            color: var(--color-light);
            cursor: pointer;
        }

        /* ================= MOBILE ================= */
        @media (max-width: 600px) {

            nav ul {
                position: absolute;
                top: 70px;
                right: 5%;
                display: none;
                flex-direction: column;
                background-color: var(--color-primary);
                padding: 1rem;
                border-radius: var(--border-radius-sm);
                box-shadow: 0 4px 10px var(--color-shadow);
                width: 200px;
                text-align: right;
            }

            nav ul.show {
                display: flex;
            }

            .menu-toggle {
                display: block;
            }

            nav ul li {
                margin: 8px 0;
            }

            .btn-login {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<nav>
    <div class="container-gmbr">
        <img src="Gambar/logosmkn.png" alt="Logo">
        <div class="logo-text">
            <span class="judul">SMKN 1 CIBINONG</span>
            <span class="subjudul">Hubungan Industri</span>
        </div>
    </div>

    <button class="menu-toggle" id="menu-toggle">☰</button>

    <ul id="nav-menu">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <li>
            <a href="{{ route('login') }}">
                <button class="btn-login">Login</button>
            </a>
        </li>
    </ul>
</nav>

<script>
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('nav-menu');

    toggle.addEventListener('click', () => {
        menu.classList.toggle('show');
    });
</script>

</body>
</html>
