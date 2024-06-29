<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background-color: #ffffff;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
            position: fixed;
            width: 250px;
        }
        .sidebar .menu-item {
            padding: 15px 20px;
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #000;
            border: 1px solid #e3e3e3;
            border-radius: 10px;
            margin: 10px;
            transition: transform 0.2s;
        }
        .sidebar .menu-item:hover {
            background-color: #f1f1f1;
            text-decoration: none;
            color: #000;
            transform: scale(1.02);
            cursor: pointer;
        }
        .sidebar .menu-item .icon {
            margin-right: 10px;
        }
        .content {
            padding: 20px;
            margin-left: 250px;
            width: calc(100% - 250px);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .header h2 {
            margin: 0;
        }
        .dashboard-card {
            border: 1px solid #e3e3e3;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #ffffff;
            transition: transform 0.2s;
        }
        .dashboard-card:hover {
            transform: scale(1.02);
            cursor: pointer;
        }
        .dashboard-card h5 {
            margin-top: 10px;
            color: #000; /* Make the title black */
        }
        .dashboard-card p {
            color: #6c757d; /* Make the description gray */
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar">
            <div class="menu-item">
                <img src="/images/university-logo.jpg" alt="Logo" class="icon" width="40">
                <div>
                    <h4>Fakultas Teknik</h4>
                    <p>Universitas Lambung Mangkurat</p>
                </div>
            </div>
            <a href="/auth/dashboard" class="menu-item active"><span class="icon">🏠</span> Dashboard</a>
            <a href="/auth/eServices" class="menu-item"><span class="icon">📧</span> e-Services</a>
            <a href="/auth/eCommandCenter" class="menu-item"><span class="icon">💬</span> e-Command Center</a>
            <a href="/auth/eResponse" class="menu-item"><span class="icon">💻</span> e-Response</a>
            <a href="/auth/eCommerce" class="menu-item"><span class="icon">🛒</span> e-Commerce</a>
            <a href="/auth/eOffice" class="menu-item"><span class="icon">🏢</span> e-Office</a>
            <a href="/auth/kuisoner" class="menu-item"><span class="icon">📋</span> Kuisioner</a>
            <a href="/auth/faq" class="menu-item"><span class="icon">❓</span> FAQ</a>
            <a href="/auth/profile" class="menu-item"><span class="icon">👤</span> Profile</a>
            <a href="/auth/logout" class="menu-item"><span class="icon">🚪</span> Logout</a>
        </div>
        <div class="content">
            <div class="header">
                <h2>Dashboard</h2>
                <input type="text" class="form-control" placeholder="Cari Layanan..." style="width: 200px;">
                <span>👤 Maulana</span>
            </div>
            <div class="alert alert-warning" role="alert">
                Kamu belum mengisi kuisioner pada periode semester ini. Silahkan isi Kuisioner <a href="/auth/dashboard" class="alert-link">Disini</a>
            </div>
            <div class="dashboard-card">
                <h5>Selamat Datang Maulana!</h5>
                <p>Di website ini kamu dapat mengajukan layanan dan mengecek status pengajuannya.</p>
            </div>
            <div class="dashboard-card">
                <h5>Ringkasan</h5>
                <p>4 Layanan diajukan, 2 Menunggu persetujuan, 1 Layanan disetujui, 1 Layanan ditolak</p>
            </div>
        </div>
    </div>
</body>
</html>