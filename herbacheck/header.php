<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HerbaCheck - Katalog & Informasi Tanaman Obat Herbal</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styling Khusus Header & Indeks Huruf Menjadi Bold */
        .custom-header {
            background-color: #ffffff;
            border-bottom: 1px solid #e0e0e0;
            padding: 12px 0;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        }
        .navbar-brand-custom {
            font-size: 1.35rem;
            font-weight: bold; /* Bold untuk HerbaCheck */
            color: #2e7d32 !important;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .btn-header-database {
            background-color: #2e7d32;
            color: white;
            border-radius: 20px;
            padding: 6px 16px;
            font-size: 0.88rem;
            font-weight: bold; /* Bold untuk Database */
            border: none;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: 0.2s;
        }
        .btn-header-database:hover {
            background-color: #1b5e20;
            color: white;
        }
        .btn-header-konsultasi {
            background-color: #ff9800;
            color: white;
            border-radius: 20px;
            padding: 6px 16px;
            font-size: 0.88rem;
            font-weight: bold; /* Bold untuk Berkonsultasi */
            border: none;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: 0.2s;
        }
        .btn-header-konsultasi:hover {
            background-color: #f57c00;
            color: white;
        }
        /* Membuat huruf indeks A-Z (di index.php) ikut bold */
        .az-btn {
            font-weight: bold !important;
        }
    </style>
</head>
<body>

    <!-- HEADER / NAVBAR UTAMA -->
    <header class="custom-header sticky-top">
        <div class="container d-flex justify-content-between align-items-center">
            
            <!-- Logo & Nama Brand di Kiri -->
            <a href="index.php" class="navbar-brand-custom">
                🌿 HerbaCheck
            </a>

            <!-- Tombol Navigasi di Kanan -->
            <div class="d-flex align-items-center gap-2">
                <a href="index.php" class="btn-header-database">
                    🗂️ Mengenal (Database)
                </a>
                <a href="https://wa.me/62895326133068?text=Halo,%20saya%20ingin%20konsultasi%20terkait%20tanaman%20herbal." target="_blank" class="btn-header-konsultasi">
                    💬 Berkonsultasi
                </a>
            </div>

        </div>
    </header>