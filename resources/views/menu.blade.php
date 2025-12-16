<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FIXIT - Menu</title>

  <style>
    body {
      margin: 0;
      padding: 0;
      background: #0f1e33;
      color: white;
      font-family: Arial, sans-serif;
      overflow-x: hidden;
    }

    .top-bar {
      display: flex;
      justify-content: space-between;
      padding: 20px;
      align-items: center;
    }

    .logo {
      font-size: 40px;
      font-weight: bold;
    }

    .profile-box {
      text-align: right;
    }

    .denah-container {
      width: 100%;
      display: flex;
      justify-content: center;
      margin-top: 10px;
    }

    .denah-container img {
      width: 70%;
      border-radius: 10px;
      object-fit: contain;
    }

    .main-box {
      margin: 40px auto;
      width: 60%;
      background: white;
      padding: 25px;
      border-radius: 25px;
      color: black;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .main-btn {
      padding: 12px 25px;
      border-radius: 25px;
      background: #0f1e33;
      color: white;
      border: none;
      cursor: pointer;
    }

    .bottom-nav {
      margin: 0 auto;
      margin-top: 40px;
      width: 90%;
      background: rgba(255,255,255,0.1);
      border-radius: 25px;
      padding: 20px;
      display: flex;
      justify-content: space-around;
      backdrop-filter: blur(4px);
      border: 1px solid rgba(255,255,255,0.15);
    }

    .bottom-item {
      text-align: center;
      cursor: pointer;
    }

    select {
      padding: 8px 10px;
      border-radius: 20px;
      border: none;
    }
  </style>
</head>

<body>

  <div class="top-bar">
    <div class="logo">FIXIT.</div>

    <div class="profile-box">
      <div>{{ auth()->user()->username }}</div>
      <small>{{ auth()->user()->role }}</small>
      <br>
      <select>
        <option>Lantai 1</option>
        <option>Lantai 2</option>
        <option>Lantai 3</option>
      </select>
    </div>
  </div>

  <div class="denah-container">
    <!-- Gambar denah 3D -->
    <img src="/images/denah.png" alt="Denah 3D">
  </div>

  <div class="main-box">
    <h2>Lobby Utama</h2>
    <button class="main-btn" onclick="window.location='/aduan/buat'">buat aduan baru</button>
  </div>

  <div class="bottom-nav">
    <div class="bottom-item">jelajah</div>
    <div class="bottom-item">aduan</div>
  </div>

</body>
</html>
