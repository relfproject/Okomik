<?php
$tag = $_GET['tag'] ?? '';
$tag = strtolower($tag);

// Sertakan daftar komik dari baca.php
include 'komik_data.php'; // pastikan array $komikList ada di file ini

$filteredKomik = [];

foreach ($komikList as $slug => $komik) {
    foreach ($komik['tags'] as $t) {
        if (strtolower($t) === $tag) {
            $filteredKomik[$slug] = $komik;
            break;
        }
    }
}
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Okomik</title>
    <link rel="icon" type="image/png" href="image/Logo Fesyen Bulat Klasik Krem (1).png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

    <section>
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
                        <form class="d-inline-flex">
                            <input class="form-control me-2" type="search" placeholder="Cari Komik" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <section class="p-3 container d-flex flex-wrap justify-content-center align-items-center gap-2">
        <a href="index.php" class="btn btn-light">Okomik</a>
        <a href="manga.php" class="btn btn-light">Manga</a>
        <a href="manhwa.php" class="btn btn-light">Manhwa</a>
    </section>



    <!-- Tempat hasil pencarian -->
    <div class="container mt-4">
        <div id="search-results" class="row"></div>
    </div>

    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <title>Genre: <?= htmlspecialchars($tag) ?> - Okomik</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container py-5">
            <h2>Genre: <?= htmlspecialchars($tag) ?></h2>
            <div class="row mt-4">
                <?php if (count($filteredKomik) > 0): ?>
                    <?php foreach ($filteredKomik as $slug => $komik): ?>
                        <div class="col-md-3 mb-4">
                            <a href="baca.php?komik=<?= $slug ?>" class="text-decoration-none text-dark">
                                <div class="card h-100">
                                    <img src="<?= htmlspecialchars($komik['img']) ?>" class="card-img-top"
                                        alt="<?= htmlspecialchars($komik['title']) ?>">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= htmlspecialchars($komik['title']) ?></h5>
                                        <p class="card-text"><?= htmlspecialchars($komik['desc']) ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Tidak ada komik dengan genre ini.</p>
                <?php endif; ?>
            </div>
        </div>
    </body>

    </html>