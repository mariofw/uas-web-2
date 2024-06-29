<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapor FT</title>
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
        .card {
            border: 1px solid #e3e3e3;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #ffffff;
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
        .card-title {
            margin-top: 10px;
            color: #000; /* Make the title black */
        }
        .card-text {
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
            <a href="/auth/dashboard" class="menu-item"><span class="icon">🏠</span> Dashboard</a>
            <a href="/auth/eServices" class="menu-item"><span class="icon">📧</span> e-Services</a>
            <a href="/auth/eCommandCenter" class="menu-item"><span class="icon">💬</span> e-Command Center</a>
            <a href="/auth/eResponse" class="menu-item active"><span class="icon">💻</span> e-Response</a>
            <a href="/auth/eCommerce" class="menu-item"><span class="icon">🛒</span> e-Commerce</a>
            <a href="/auth/eOffice" class="menu-item"><span class="icon">🏢</span> e-Office</a>
            <a href="/auth/kuisioner" class="menu-item"><span class="icon">📋</span> Kuisioner</a>
            <a href="/auth/faq" class="menu-item"><span class="icon">❓</span> FAQ</a>
            <a href="/auth/profile" class="menu-item"><span class="icon">👤</span> Profile</a>
            <a href="/auth/logout" class="menu-item"><span class="icon">🚪</span> Logout</a>
        </div>
        <div class="content">
            <div class="header">
                <h2>Lapor FT</h2>
                <input type="text" class="form-control" placeholder="Cari Layanan..." style="width: 200px;">
                <span>👤 Maulana</span>
            </div>
            <div class="card">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <a href="/auth/eResponse" class="btn btn-secondary">Kembali</a>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="/images/lapor-ft.png" alt="Lapor FT" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <h3>Lapor FT</h3>
                        <p>Layanan ini digunakan untuk menyampaikan keluhan atau saran di lingkungan Fakultas Teknik Universitas Lambung Mangkurat.</p>
                        <h4>Deskripsi</h4>
                        <p>Layanan Lapor FT ini disediakan sebagai media bagi civitas akademika Fakultas Teknik ULM untuk menyampaikan keluhan, saran maupun pertanyaan terkait pelayanan administrasi dan penyediaan sarpras di lingkungan Fakultas Teknik ULM. Dengan adanya Layanan Lapor FT ini diharapkan tindak lanjut atas setiap pengaduan dapat dilaksanakan dengan lebih efektif dan efisien. Jawaban/Tanggapan dapat dipantau melalui fitur status pengajuan.</p>
                        <h4>Alur Pengajuan</h4>
                        <ul>
                            <li>Mahasiswa mengisi data laporan</li>
                            <li>Admin Akademik akan menanggapi laporan tersebut</li>
                            <li>Tanggapan dapat dilihat melalui tabel pengajuan</li>
                        </ul>
                    </div>
                </div>
                <h4>Tabel Pengajuan</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pengajuan</th>
                            <th>Jenis Pengajuan</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>LPR-121</td>
                            <td>Lapor FT</td>
                            <td>6 Februari 2024</td>
                            <td><span class="badge badge-success">Disetujui</span></td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm">Detail</a>
                                <a href="#" class="btn btn-primary btn-sm">Tanggapan</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="/auth/tambahPengajuan" class="btn btn-primary">Tambah Pengajuan</a>
            </div>
        </div>
    </div>
</body>
</html>
