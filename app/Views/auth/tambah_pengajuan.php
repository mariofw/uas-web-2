<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengajuan Lapor FT</title>
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
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
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
                <h2>Tambah Pengajuan Lapor FT</h2>
                <input type="text" class="form-control" placeholder="Cari Layanan..." style="width: 200px;">
                <span>👤 Maulana</span>
            </div>
            <form id="pengajuanForm" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">Nama Lengkap <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM" required>
                </div>
                <div class="form-group">
                    <label for="program_studi">Program Studi <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="program_studi" name="program_studi" placeholder="Masukkan Program Studi" required>
                </div>
                <div class="form-group">
                    <label for="laporan">Laporan <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="laporan" name="laporan" rows="4" placeholder="Masukkan Laporan" required></textarea>
                </div>
                <div class="form-group">
                    <label for="berkas_pendukung">Berkas Pendukung</label>
                    <input type="file" class="form-control-file" id="berkas_pendukung" name="berkas_pendukung">
                    <small class="form-text text-muted">Apabila diperlukan, permohonan informasi dapat dilengkapi dengan data pendukung</small>
                </div>
                <div class="form-group text-right">
                    <button type="button" class="btn btn-secondary" onclick="window.history.back()">Batal</button>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pengajuan Berhasil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Pengajuan Anda telah berhasil dikirim.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="window.location.href='/auth/eResponse'">OK</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#pengajuanForm').on('submit', function(event) {
                event.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    url: '<?= base_url('/pengajuan/proses') ?>',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.status === 'success') {
                            $('#successModal').modal('show');
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('Terjadi kesalahan. Silakan coba lagi.');
                    }
                });
            });
        });
    </script>
</body>
</html>
