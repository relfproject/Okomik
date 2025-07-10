<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>404 - Halaman Tidak Ditemukan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/6.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
        }

        .error-container {
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .display-1 {
            font-size: 6rem;
        }

        .btn-home {
            border-radius: 12px;
            padding: 10px 20px;
            font-weight: 500;
            background-color: #007bff;
            color: white;
            transition: background-color 0.2s;
        }

        .btn-home:hover {
            background-color: #0056b3;
            color: white;
        }

        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <div class="row w-100 align-items-center">
                <div class="col-4 text-start">
                    <a class="navbar-brand fw-bold" href="index.php">Okomik</a>
                </div>
                <div class="col-4 text-center">
                    <ul class="nav justify-content-center">
                        <a class="nav-link" href="manga.php">Manga</a>
                        <a class="nav-link" href="manhwa.php">Manhwa</a>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- 404 Section -->
    <div class="container text-center error-container">
        <h1 class="display-1 fw-bold text-primary">404</h1>
        <p class="fs-4 fw-medium mt-4">Oops! Halaman tidak ditemukan</p>
        <p class="text-muted">Halaman yang kamu cari tidak tersedia atau mungkin sudah dipindahkan.</p>
        <a href="index.php" class="btn btn-home mt-4">Kembali ke Beranda</a>
    </div>

</body>

</html>