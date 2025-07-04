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
    <title>Hasil Pencarian - Okomik</title>
    <link rel="icon" type="image/png" href="image/6.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card-komik {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: #fff;
            overflow: hidden;
            opacity: 0;
            animation: slideUp 0.5s ease forwards;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card-komik:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        .card-komik img {
            border-radius: 12px 12px 0 0;
            height: 280px;
            object-fit: cover;
            width: 100%;
            transition: transform 0.3s ease;
        }

        .card-komik:hover img {
            transform: scale(1.05);
        }

        .card-komik .card-title {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
            color: #333;
        }

        .card-komik .card-text {
            font-size: 0.9rem;
            color: #666;
            height: 72px;
            overflow: hidden;
        }

        .card-komik .btn-primary {
            background-color: #007bff;
            border-radius: 8px;
            border: none;
            font-weight: 500;
            transition: background-color 0.2s;
        }

        .card-komik .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
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

    <section class="p-3 container d-flex flex-wrap justify-content-center align-items-center gap-2">
        <a href="index.php" class="btn btn-light">Okomik</a>
        <a href="manga.php" class="btn btn-light">Manga</a>
        <a href="manhwa.php" class="btn btn-light">Manhwa</a>
    </section>

    <div class="container my-4">
        <h3 class="mb-4">Hasil Pencarian</h3>
        <div class="row g-3">
            <?php if (count($filtered)): ?>
                <?php foreach ($filtered as $komik): ?>
                    <div class="col-6 col-md-3">
                        <div class="card-komik">
                            <img src="<?= $komik['img'] ?>" class="card-img-top" alt="<?= $komik['title'] ?>">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title"><?= $komik['title'] ?></h5>
                                <p class="card-text"><?= $komik['desc'] ?></p>
                                <a href="baca.php?komik=<?= $komik['slug'] ?>" class="btn btn-primary mt-auto">Baca</a>
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