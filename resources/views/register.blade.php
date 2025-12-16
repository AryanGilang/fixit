<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register - FIXIT</title>
  <style>
    * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            /* Background gradasi biru tua */
            background: linear-gradient(135deg, #1C2E4A 0%, #0b1424 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        /* Elemen Dekorasi Background */
        .background-shape {
            position: absolute;
            border-radius: 50%;
            filter: blur(90px);
            z-index: 0;
        }
        .shape-1 {
            width: 300px;
            height: 300px;
            background-color: rgba(255, 255, 255, 0.05);
            top: -50px;
            left: -50px;
        }
        .shape-2 {
            width: 400px;
            height: 400px;
            background-color: rgba(0, 0, 0, 0.4);
            bottom: -100px;
            right: -100px;
        }

        /* Kartu Register */
        .register-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(15px); /* Glassmorphism */
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 50px 50px;
            width: 450px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 15px 35px rgba(0,0,0,0.4);
            z-index: 1;
            position: relative;
        }

        /* Judul & Logo */
        .logo {
            color: white;
            font-size: 48px; /* Sedikit lebih kecil dari login agar muat */
            font-weight: 900;
            letter-spacing: 2px;
            margin-bottom: 5px;
            text-transform: uppercase;
            text-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }

        .subtitle {
            color: #ccc;
            font-size: 14px;
            font-weight: 300;
            margin-bottom: 30px;
            letter-spacing: 1px;
        }

        /* Form Container */
        .register-form {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 15px; /* Jarak antar input lebih rapat */
        }

        /* Input Styles */
        .input-field {
            width: 100%;
            padding: 15px;
            border-radius: 50px;
            border: 2px solid transparent;
            background-color: white;
            text-align: center;
            font-size: 15px;
            color: #333;
            transition: all 0.3s ease;
        }

        .input-field:focus {
            outline: none;
            border-color: #4a90e2;
            box-shadow: 0 0 15px rgba(74, 144, 226, 0.3);
        }

        /* Tombol Sign Up */
        .btn-primary {
            margin-top: 15px;
            padding: 15px;
            border-radius: 50px;
            border: 2px solid white;
            background: transparent;
            color: white;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-primary:hover {
            background-color: white;
            color: #1C2E4A;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        /* Footer Link (Back to Login) */
        .footer-link {
            margin-top: 25px;
            font-size: 13px;
            color: #ccc;
        }

        .link {
            color: white;
            text-decoration: none;
            font-weight: 700;
            margin-left: 5px;
            border-bottom: 1px solid transparent;
            transition: border 0.3s;
        }

        .link:hover {
            border-bottom: 1px solid white;
        }
  </style>
</head>

<body>
    <div class="background-shape shape-1"></div>
    <div class="background-shape shape-2"></div>

  <div class="container">

    @if(session('error'))
      <p style="color:#ff7a7a;">{{ session('error') }}</p>
    @endif

    <form method="POST" action="/login">
      @csrf

        <div class="register-card">
        <h1 class="logo">FIXIT.</h1>
        <p class="subtitle">Create your new account</p>

        <form class="register-form">
            <input type="email" placeholder="email address" class="input-field" required>
            <input type="text" placeholder="username" class="input-field" required>
            <input type="password" placeholder="password" class="input-field" required>
            <input type="password" placeholder="confirm password" class="input-field" required>
            
            <button type="button" class="btn-primary">Sign up</button>

    </form>

    <p style="margin-top:15px;">
      Already have an account? <a href="/">Log In</a>
    </p>

  </div>
</body>
</html>
