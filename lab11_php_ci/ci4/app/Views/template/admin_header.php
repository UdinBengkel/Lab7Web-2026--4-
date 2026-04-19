<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: sans-serif; }
        .container { max-width: 900px; margin-top: 30px; }
        
        /* Judul Besar */
        h1 { color: #b3b3b3; font-weight: bold; margin-bottom: 40px; }

        /* Navigasi / Menu Biru */
        .nav-admin { background-color: #2b78c5; display: flex; padding: 0; }
        .nav-admin a { 
            color: white; 
            text-decoration: none; 
            padding: 12px 25px; 
            font-weight: bold;
            font-size: 14px;
        }
        .nav-admin a:hover { background-color: #1e5a96; }
        .nav-admin a.active { background-color: #4a90e2; }

        /* Styling Tabel */
        .table { border: 1px solid #dee2e6; margin-top: 20px; font-size: 13px; }
        .table thead th, .table tfoot th { 
            background-color: #6daae0 !important; 
            color: white; 
            border: none;
            padding: 10px;
        }
        .table tbody td { vertical-align: middle; border-bottom: 1px solid #eee; }
        
        /* Button Style */
        .btn-edit { background-color: #a6a6a6; color: white; border-radius: 4px; padding: 5px 15px; text-decoration: none; margin-right: 5px; }
        .btn-edit:hover { background-color: #888; color: white; }
        .btn-hapus { background-color: #d9534f; color: white; border-radius: 4px; padding: 5px 15px; text-decoration: none; border: none; }
        .btn-hapus:hover { background-color: #c9302c; color: white; }

        /* Footer */
        footer { background-color: #1a1a1a; color: white; padding: 20px; margin-top: 20px; font-size: 14px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Portal Berita</h1>
        
        <div class="nav-admin">
            <a href="#">Dashboard</a>
            <a href="<?= base_url('/admin/artikel'); ?>" class="active">Artikel</a>
            <a href="<?= base_url('/admin/artikel/add'); ?>">Tambah Artikel</a>
        </div>