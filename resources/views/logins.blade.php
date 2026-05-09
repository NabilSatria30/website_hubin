<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Halaman Login</title>
</head>

<body>
  <div class="background_login"></div>

  <a href="{{ route('home') }}" class="btn-kembali">← Kembali</a>

  <form action="{{ route('login.action') }}" method="POST">
    @csrf
    <div class="main_container">

      {{-- ALERT ERROR (TIDAK GESER LAYOUT) --}}
      @if ($errors->any())
        <div class="alert alert-dan ger">
          <ul class="mb-0">
            @foreach ($errors->all() as $item)
              <li>{{ $item }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <div class="head_login">
        <img src="Gambar/logosmkn.png" alt="Logo Sekolah">
      </div>

      <div class="login_text">Login</div>

      <label>Username</label>
      <input type="text" name="username" value="{{ old('username') }}" placeholder="Masukkan username...">

      <label>Password</label>
      <div class="password-wrapper">
        <input type="password" name="password" id="password" placeholder="Masukkan password...">
        <span class="toggle-password" onclick="togglePassword()">👁</span>
      </div>

      <button type="submit" class="button_login">Masuk</button>

      <div class="footer-text">
        Lupa password?
        <a href="https://mail.google.com/mail/?view=cm&to=gmngnabil742@gmail.com&su=Lupa%20Password&body=Halo%20Admin,%0A%0ASaya%20lupa%20password.%0ANIS:%20" target="_blank">
          Kirim Pesan
        </a>
      </div>

    </div>
  </form>

  <script>
    function togglePassword() {
      const pass = document.getElementById("password");
      pass.type = pass.type === "password" ? "text" : "password";
    }
  </script>


 <style>
    *, html, body {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background: linear-gradient(135deg, #0a192f, #112d4e, #1f4e79);
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      overflow: hidden;
    }

    .background_login {
      position: absolute;
      inset: 0;
      background: url("../Gambar/BG_LOGIN_ANIMASI.jpeg") no-repeat center/cover;
      filter: brightness(80%);
      z-index: -1;
    }

    .main_container {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
      border-radius: 20px;
      padding: 35px 30px;
      width: 340px;
      color: white;
      animation: fadeIn 1.2s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .head_login {
      display: flex;
      justify-content: center;
      margin-bottom: 15px;
    }

    .head_login img {
      width: 80px;
      height: 80px;
    }

    .login_text {
      text-align: center;
      font-size: 1.8rem;
      font-weight: 600;
      margin-bottom: 15px;
    }

    label {
      font-size: 0.9rem;
      margin-bottom: 6px;
      display: block;
    }

    input {
      width: 100%;
      padding: 10px 14px;
      margin-bottom: 15px;
      border: none;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.15);
      color: #fff;
      outline: none;
    }

    input:focus {
      background: rgba(255, 255, 255, 0.25);
      box-shadow: 0 0 10px rgba(79, 124, 255, 0.5);
    }

    /* === PASSWORD TOGGLE === */
    .password-wrapper {
      position: relative;
    }

    .toggle-password {
      position: absolute;
      right: 12px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      font-size: 0.9rem;
      color: #ddd;
      user-select: none;
    }

    .button_login {
      width: 100%;
      padding: 12px;
      background: linear-gradient(135deg, #1b6ca8, #2980b9);
      border: none;
      border-radius: 10px;
      color: white;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
    }

    .button_login:hover {
      background: linear-gradient(135deg, #2980b9, #3498db);
    }

    .footer-text {
      text-align: center;
      margin-top: 15px;
      font-size: 0.85rem;
    }

    .footer-text a {
      color: #cfe8ff;
      text-decoration: none;
    }

    /* ALERT FIX */
    .alert {
      font-size: 0.85rem;
      padding: 8px 12px;
      border-radius: 10px;
      margin-bottom: 15px;
    }

    .btn-kembali {
    position: fixed;
    top: 15px;
    left: 15px;

    padding: 10px 18px;
    background-color: rgb(14, 97, 198);
    color: #ffffff;
    text-decoration: none;
    border-radius: 6px;
    font-size: 14px;
    font-weight: 500;

    box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    transition: background-color 0.3s ease, transform 0.2s ease;
    z-index: 9999;
}

.btn-kembali:hover {
    background-color: #2980b9;
    transform: translateY(-2px);
}

.btn-kembali:active {
    transform: translateY(0);
}
  </style>
  
</body>
</html>
