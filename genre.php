<?php
$tag = $_GET['tag'] ?? '';
$tag = strtolower($tag);

include 'komik_data.php'; // $komikList harus tersedia

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
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genre: <?= htmlspecialchars($tag) ?> - Okomik</title>
    <link rel="icon" type="image/png" href="image/6.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
        }

        .card-komik {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: transform 0.2s ease, box-shadow 0.3s ease;
            background: #fff;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card-komik:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .card-komik img {
            border-radius: 12px 12px 0 0;
            height: 280px;
            object-fit: cover;
            width: 100%;
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

        .card-body {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
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
        <h3 class="mb-4">Genre: <?= htmlspecialchars($tag) ?></h3>
        <div class="row g-4">
            <?php if (count($filteredKomik)): ?>
                <?php $delay = 0; ?>
                <?php foreach ($filteredKomik as $slug => $komik): ?>
                    <div class="col-6 col-md-4 col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                        <div class="card-komik w-100">
                            <img src="<?= htmlspecialchars($komik['img']) ?>" alt="<?= htmlspecialchars($komik['title']) ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($komik['title']) ?></h5>
                                <p class="card-text"><?= htmlspecialchars($komik['desc']) ?></p>
                                <a href="baca.php?komik=<?= $slug ?>" class="btn btn-primary mt-auto">Baca</a>
                            </div>
                        </div>
                    </div>
                    <?php $delay += 100; ?>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12 text-center">
                    <p>Belum ada komik untuk genre <strong><?= htmlspecialchars($tag) ?></strong>.</p>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 600
        });
    </script>
</body>

</html>