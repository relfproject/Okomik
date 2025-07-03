<?php
$komikList = [
    ['slug' => 'extra-academy', 'title' => "The Extra's Academy Survival Guide", 'desc' => 'Seseorang dipaksa untuk hidup di akademi elit.', 'img' => 'image/The Extra\'s Academy Survival Guide.jpeg'],
    ['slug' => 'magic-genius', 'title' => "Magic Academy’s Genius Swordsman", 'desc' => 'Seorang pendekar jenius di akademi sihir elit.', 'img' => 'image/Magic Academy\'s Genius Swordsman.jpeg'],
    ['slug' => 'gotoubun', 'title' => "Gotoubun no Hanayome", 'desc' => 'Kisah romantis dengan lima bersaudara yang unik.', 'img' => 'image/gotoubun no hanayome.jpeg'],
    ['slug' => 'danger-heart', 'title' => "The Danger in My Heart", 'desc' => 'Anak aneh dan gadis populer saling mempengaruhi.', 'img' => 'image/The danger in my hearth.jpeg'],
    ['slug' => 'onepunchman', 'title' => "One Punch Man", 'desc' => 'Pahlawan botak super kuat dengan satu pukulan.', 'img' => 'image/One punch Man.jpeg'],
    ['slug' => 'frieren', 'title' => "Frieren Beyond Journeys End", 'desc' => 'Penyihir elf abadi mencari makna hidup setelah petualangan.', 'img' => 'image/Frieren Beyond Journeys End.jpeg'],
    ['slug' => 'beginning-after-end', 'title' => "The Beginning After The End", 'desc' => 'Raja reinkarnasi dalam dunia sihir yang kejam.', 'img' => 'image/The Beginning After The End.jpeg'],
    ['slug' => 'onepiece', 'title' => "One Piece", 'desc' => 'Petualangan Luffy mencari harta karun legendaris.', 'img' => 'image/One piece.jpeg'],
    ['slug' => 'player', 'title' => "Player", 'desc' => 'Seorang player masuk dunia game dan bertahan hidup.', 'img' => 'image/Player.jpeg'],
    ['slug' => 'eminence-in-shadow', 'title' => "The Eminence in Shadow", 'desc' => 'Pahlawan bayangan mengatur dunia secara diam-diam.', 'img' => 'image/The Eminence in Shadow.jpeg'],

    // KOMIK RILISAN
    ['slug' => 'engineer', 'title' => "The World’s Best Engineer", 'desc' => 'Insinyur jenius membangun dunia dari reruntuhan.', 'img' => 'image/engineer.jpeg'],
    ['slug' => 'swordmasters-youngest-son', 'title' => "Swordmaster's Youngest Son", 'desc' => 'Putra pendekar legendaris yang bangkit dari bawah.', 'img' => 'image/Swordmaster\'s Youngest Son.jpeg'],
    ['slug' => 'valkyrie', 'title' => "Shuumatsu no Valkyrie", 'desc' => 'Pertarungan para dewa dan manusia untuk nasib dunia.', 'img' => 'image/Shuumatsu no Valkyrie.jpeg'],
    ['slug' => 'albus', 'title' => "Albus Changes the World", 'desc' => 'Anak biasa dengan kemampuan luar biasa.', 'img' => 'image/Albus Changes the World.jpeg'],
    ['slug' => 'novels-extra', 'title' => "The Novel’s Extra (Remake)", 'desc' => 'Karakter sampingan yang mulai mengubah cerita.', 'img' => 'image/The Novel’s Extra (Remake).png'],

];



$q = strtolower(trim($_GET['q'] ?? ''));
$filtered = [];

if ($q) {
    foreach ($komikList as $komik) {
        if (strpos(strtolower($komik['title']), $q) !== false) {
            $filtered[] = $komik;
        }
    }
} else {
    $filtered = $komikList;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $komik ? $komik['title'] : 'Komik tidak ditemukan' ?> - Okomik</title>
    <link rel="icon" type="image/png" href="image/Logo Fesyen Bulat Klasik Krem (1).png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        .card-img-top {
            width: 100%;
            aspect-ratio: 1/1;
            object-fit: cover;
        }

        .card {
            height: 100%;
        }

        .card-container {
            padding: 2rem;
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
                        <li class="nav-item"><a class="nav-link" href="manga.php">Manga</a></li>
                        <li class="nav-item"><a class="nav-link" href="manhwa.php">Manhwa</a></li>
                    </ul>
                </div>
                <div class="col-4 text-end">
                    <form class="d-inline-flex" method="get" action="search.php">
                        <input class="form-control me-2" type="search" placeholder="Cari Komik" name="q" required>
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Navigasi filter -->
    <section class="p-3 container d-flex flex-wrap justify-content-center align-items-center gap-2">
        <a href="index.php" class="btn btn-light">Okomik</a>
        <a href="manga.php" class="btn btn-light">Manga</a>
        <a href="manhwa.php" class="btn btn-light">Manhwa</a>
    </section>

    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <title>Hasil Pencarian - Okomik</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container my-4">
            <h3>Hasil Pencarian</h3>

            <div class="row">
                <?php if (count($filtered)): ?>
                    <?php foreach ($filtered as $komik): ?>
                        <div class="col-md-3 mb-4">
                            <div class="card h-100">
                                <img src="<?= $komik['img'] ?>" class="card-img-top" alt="<?= $komik['title'] ?>">
                                <div class="card-body">
                                    <h6 class="card-title"><?= $komik['title'] ?></h6>
                                    <p class="card-text small"><?= $komik['desc'] ?></p>
                                    <a href="baca.php?komik=<?= $komik['slug'] ?>" class="btn btn-primary w-100">Baca</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col text-center">
                        <p>Tidak ada komik ditemukan untuk kata kunci "<strong><?= htmlspecialchars($q) ?></strong>".</p>
                        <a href="index.php" class="btn btn-secondary">Kembali</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </body>

    </html>