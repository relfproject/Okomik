<?php
include 'komik_data.php';

$slug = $_GET['komik'] ?? '';
$chapter = $_GET['chapter'] ?? '';

if (!isset($komikList[$slug])) {
    include '404.php';
    exit;
}

$komik = $komikList[$slug];
$chapterList = $komik['chapters'] ?? [];

$validChapter = in_array($chapter, $chapterList);

if (!$validChapter) {
    include '404.php';
    exit;
}

// Ambil daftar nama chapter
$chapters = array_column($chapterList, 'name');

$currentIndex = array_search($chapter, $chapterList);
$prevChapter = $chapterList[$currentIndex - 1] ?? null;
$nextChapter = $chapterList[$currentIndex + 1] ?? null;


// Folder gambar
$chapterNumber = strtolower(str_replace('chapter ', '', $chapter));
$chapterNumber = str_pad($chapterNumber, 2, '0', STR_PAD_LEFT);
$chapterFolder = "chapter/{$slug}/{$chapterNumber}/";
$images = [];

if (is_dir($chapterFolder)) {
    $files = scandir($chapterFolder);
    foreach ($files as $file) {
        if (preg_match('/\.(jpg|jpeg|png|webp)$/i', $file)) {
            $images[] = $chapterFolder . $file;
        }
    }
    sort($images, SORT_NATURAL);
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($komik['title']) . ' - ' . htmlspecialchars($chapter) ?></title>
    <link rel="icon" type="image/png" href="image/6.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        body {
            background-color: #111;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .reader-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 15px;
        }

        .reader-image {
            width: 100%;
            height: auto;
            display: block;
            margin: 0 auto 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
        }

        a,
        a:hover {
            color: #ddd;
            text-decoration: none;
        }

        .btn-secondary {
            background-color: #333;
            border-color: #444;
        }

        .btn-secondary:hover {
            background-color: #555;
            border-color: #666;
        }

        .alert-warning {
            background-color: #222;
            border-color: #444;
            color: #eee;
        }

        .chapter-nav {
            text-align: center;
            margin-top: 40px;
        }

        .chapter-nav a {
            margin: 0 10px;
        }

        .top-bar {
            background-color: #1a1a1a;
            padding: 10px 0;
        }

        .top-bar .btn {
            background-color: #222;
            color: #fff;
            margin: 0 5px;
        }

        .top-bar .btn:hover {
            background-color: #333;
        }
    </style>
</head>

<body>
    <div class="top-bar text-center">
        <a href="index.php" class="btn btn-sm">🏠 Okomik</a>
        <a href="manga.php" class="btn btn-sm">Manga</a>
        <a href="manhwa.php" class="btn btn-sm">Manhwa</a>
    </div>

    <div class="reader-container">
        <h2 class="text-center mb-4"><?= htmlspecialchars($komik['title']) ?> - <?= htmlspecialchars($chapter) ?></h2>

        <div class="mb-4 text-center">
            <a href="baca.php?komik=<?= urlencode($slug) ?>" class="btn btn-secondary">← Kembali ke Detail Komik</a>
        </div>

        <?php if ($images): ?>
            <?php foreach ($images as $img): ?>
                <img src="<?= htmlspecialchars($img) ?>" alt="<?= htmlspecialchars($chapter) ?>" class="reader-image">
            <?php endforeach; ?>
        <?php else: ?>
            <div class="alert alert-warning text-center">
                Belum ada gambar untuk chapter ini. Silakan tambahkan di folder <code><?= $chapterFolder ?></code>
            </div>
        <?php endif; ?>

        <div class="chapter-nav mt-4">
            <?php if ($prevChapter): ?>
                <a class="btn btn-secondary"
                    href="read.php?komik=<?= urlencode($slug) ?>&chapter=<?= urlencode($prevChapter) ?>">←
                    <?= htmlspecialchars($prevChapter) ?></a>
            <?php endif; ?>

            <?php if ($nextChapter): ?>
                <a class="btn btn-secondary"
                    href="read.php?komik=<?= urlencode($slug) ?>&chapter=<?= urlencode($nextChapter) ?>"><?= htmlspecialchars($nextChapter) ?>
                    →</a>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>