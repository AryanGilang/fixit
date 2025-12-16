<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FIXIT Login</title>

  <style>
    input, select {
      width: 100%;
      padding: 15px;
      margin: 10px 0;
      border-radius: 30px;
      border: none;
      font-size: 14px;
      box-sizing: border-box;
      height: 50px;
      appearance: none;
    }
    
    select {
      background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
      background-repeat: no-repeat;
      background-position: right 15px center;
      background-size: 20px;
      padding-right: 45px;
    }
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background: #0f1e33;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      text-align: center;
      width: 350px;
    }
    h1 {
      font-size: 48px;
      margin-bottom: 10px;
    }
    input, select {
      width: 100%;
      padding: 15px;
      margin: 10px 0;
      border-radius: 30px;
      border: none;
      font-size: 14px;
    }
   button {
      width: 100%;
      padding: 15px;
      border-radius: 30px;
      border: 2px solid white;
      background: transparent;
      color: white;
      font-size: 16px;
      cursor: pointer;
      text-align: center;
      justify-content: center;
      display: flex;
      align-items: center;
      margin-top: 15px;
    }
    button:hover {
      background: white;
      color: #0f1e33;
    }
    a {
      color: white;
      font-size: 14px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>FIXIT.</h1>
    <p>Welcome back, please login below</p>

    @if(session('error'))
      <p style="color: #ff7a7a;">{{ session('error') }}</p>
    @endif
    
    <form method="POST" action="/login">
      @csrf

      <input type="text" name="username" placeholder="username" />

      <input type="password" name="password" placeholder="password" />

      <select name="role">
        <option value="staf">staf</option>
        <option value="mahasiswa">mahasiswa</option>
      </select>

      <button type="submit">SIGN IN</button>

    </form>

    <p>New here? <a href="/create-account">Create Account</a></p>
  </div>
</body>
</html>
