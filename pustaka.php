<?php
include 'pustaka_data.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pustaka Komik</title>
    <link rel="icon" type="image/png" href="image/6.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .comic-card {
            display: flex;
            max-width: 850px;
            margin: 15px auto;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .comic-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .comic-thumb {
            position: relative;
            flex: 0 0 220px;
            height: 130px;
        }

        .comic-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .badge-up {
            position: absolute;
            top: 8px;
            left: 8px;
            background: #0d6efd;
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            border-radius: 8px;
        }

        .badge-genre {
            position: absolute;
            bottom: 8px;
            left: 8px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            font-size: 10px;
            padding: 2px 6px;
            border-radius: 4px;
        }

        .comic-detail {
            flex: 1;
            padding: 10px 14px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .comic-title {
            font-size: 16px;
            font-weight: 600;
            margin: 0 0 4px;
        }

        .comic-desc {
            font-size: 12px;
            color: #555;
            margin-bottom: 6px;
        }

        .chapter-buttons {
            display: flex;
            gap: 6px;
        }

        .chapter-btn {
            background: #f2f2f2;
            color: #333;
            font-size: 11px;
            padding: 2px 8px;
            border-radius: 999px;
            text-decoration: none;
            transition: background 0.2s;
        }

        .chapter-btn:hover {
            background: #ddd;
        }
    </style>
</head>
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
            <div class="col-4 text-end">
                <form class="d-inline-flex" id="searchForm">
                    <input class="form-control me-2" type="search" placeholder="Cari Komik" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</nav>

<!-- Filter Buttons -->
<section class="p-3 container d-flex flex-wrap justify-content-center align-items-center gap-2">
    <a href="index.php" class="btn btn-light">Okomik</a>
    <a href="manga.php" class="btn btn-light">Manga</a>
    <a href="manhwa.php" class="btn btn-light">Manhwa</a>
</section>

<!-- Search Results -->
<div class="container mt-4">
    <div id="search-results" class="row"></div>
</div>

<body>

    <!-- progress bar -->
    <div id="progress-bar"></div>

    <!-- Box Judul -->
    <div class="my-4 d-flex justify-content-center">
        <div class="bg-light border p-3" style="max-width: 850px; width: 100%;">
            <strong>Komik + Update Baru</strong>
        </div>
    </div>


    <!-- Daftar Komik -->
    <div class="container">
        <?php foreach ($komikList as $slug => $komik): ?>
            <div class="comic-card">
                <div class="comic-thumb">
                    <img src="<?= htmlspecialchars($komik['img']) ?>" alt="<?= htmlspecialchars($komik['title']) ?>">
                    <span class="badge-up">Update</span>
                    <span class="badge-genre"><?= htmlspecialchars($komik['genre']) ?></span>
                </div>
                <div class="comic-detail">
                    <div class="comic-title"><?= htmlspecialchars($komik['title']) ?></div>
                    <div class="comic-desc"><?= htmlspecialchars($komik['desc']) ?></div>
                    <div class="chapter-buttons">
                        <?php
                        $chapters = $komik['chapters'] ?? [];
                        if (!empty($chapters)) {
                            $latest = end($chapters);
                            echo '<a href="read.php?komik=' . urlencode($slug) . '&chapter=' . urlencode($latest) . '" class="chapter-btn">Chapter Terbaru: ' . htmlspecialchars($latest) . '</a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>