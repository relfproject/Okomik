<?php
include 'komik_data.php';

$slug = $_GET['komik'] ?? '';
if (!isset($komikList[$slug])) {
    include '404.php';
    exit;
}

$komik = $komikList[$slug];
$chapters = $komik['chapters'] ?? [];

$firstChapter = reset($chapters);
$latestChapter = end($chapters);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($komik['title']) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
        }

        .comic-header {
            max-width: 900px;
            margin: 20px auto;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
        }

        .comic-thumb {
            position: relative;
            flex: 0 0 300px !important;
            height: 170px !important;
        }

        .comic-thumb img {
            width: 100% !important;
            height: 100% !important;
            object-fit: cover !important;
        }

        .comic-card {
            max-width: 900px !important;
        }

        .comic-info {
            padding: 20px;
        }

        .comic-info h3 {
            font-size: 1.5rem;
            margin-bottom: 8px;
        }

        .comic-info p {
            margin-bottom: 6px;
            font-size: 0.95rem;
            color: #555;
        }

        .chapter-btn {
            display: inline-block;
            margin: 3px 2px;
            padding: 4px 10px;
            font-size: 0.8rem;
            color: #333;
            background: #f2f2f2;
            border-radius: 4px;
            text-decoration: none;
            transition: all 0.2s;
        }

        .chapter-btn:hover {
            background: #0d6efd;
            color: #fff;
        }

        .chapter-list {
            overflow-x: auto;
            white-space: nowrap;
            padding-top: 5px;
        }

        /* Progress bar */
        #progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            height: 4px;
            background: #0d6efd;
            width: 0%;
            z-index: 999;
            transition: width 0.1s;
        }
    </style>
</head>

<body>

    <<!-- progress bar -->
        <div id="progress-bar"></div>

        <!-- Judul Section -->
        <div class="container my-3">
            <div style="background-color: #f8f9fc; padding: 10px; border: 1px solid #e3e6f0;">
                <strong>Komik + Update Baru</strong>
            </div>
        </div>

        <div class="comic-header">
            <div class="comic-thumb">
                <img src="<?= htmlspecialchars($komik['img']) ?>" alt="<?= htmlspecialchars($komik['title']) ?>">
            </div>
            <div class="comic-info">
                <h3><?= htmlspecialchars($komik['title']) ?></h3>
                <p><?= htmlspecialchars($komik['desc']) ?></p>
                <p><strong>Genre:</strong> <?= htmlspecialchars($komik['genre']) ?> |
                    <strong>Jenis:</strong> <?= htmlspecialchars($komik['jenis']) ?>
                </p>

                <!-- Tombol Awal & Terbaru -->
                <div class="mb-2">
                    <a href="read.php?komik=<?= urlencode($slug) ?>&chapter=<?= urlencode($firstChapter) ?>"
                        class="chapter-btn">Awal: <strong><?= htmlspecialchars($firstChapter) ?></strong></a>
                    <a href="read.php?komik=<?= urlencode($slug) ?>&chapter=<?= urlencode($latestChapter) ?>"
                        class="chapter-btn">Terbaru: <strong><?= htmlspecialchars($latestChapter) ?></strong></a>
                </div>

                <!-- Semua chapter -->
                <div class="chapter-list mt-2">
                    <?php foreach ($chapters as $chap): ?>
                        <a href="read.php?komik=<?= urlencode($slug) ?>&chapter=<?= urlencode($chap) ?>"
                            class="chapter-btn"><?= htmlspecialchars($chap) ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <script>
            // progress bar scroll
            document.addEventListener("scroll", function () {
                var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
                var scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                var percent = (scrollTop / scrollHeight) * 100;
                document.getElementById('progress-bar').style.width = percent + "%";
            });
        </script>

</body>

</html>