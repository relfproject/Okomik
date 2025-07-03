<!DOCTYPE html>
<html lang="en">

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

    <div class="container mt-4">
        <div id="search-results" class="row"></div>
    </div>


    <div id="all-comics">
        <div class="row">
            <section class="d-flex flex-wrap justify-content-center gap-3 card-container">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="image/The Extras Academy Survival Guide.jpeg" alt="">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">The Extra's Academy Survival Guide</h5>
                        <p class="card-text">Seorang figuran di akademi elit berusaha bertahan hidup di tengah intrik,
                            sihir, dan ancaman takdir.</p>
                        <a href="baca.php?komik=extra-academy" class="btn btn-primary mt-auto">Baca</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="image/Magic Academys Genius Blinker.jpeg" alt="">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Magic Academy's Genius Blinker</h5>
                        <p class="card-text">Seorang murid jenius di akademi sihir yang punya kemampuan aneh namun
                            sangat
                            kuat.</p>
                        <a href="baca.php?komik=magic-genius" class="btn btn-primary mt-auto">Baca</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="image/gotoubun no hanayome.jpeg" alt="">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Gotoubun no Hanayome</h5>
                        <p class="card-text">Seorang siswa menjadi tutor bagi lima saudari kembar dengan kepribadian
                            berbeda.</p>
                        <a href="baca.php?komik=gotoubun" class="btn btn-primary mt-auto">Baca</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="image/The danger in my hearth.jpeg" alt="">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">The Danger in My Hearth</h5>
                        <p class="card-text">Remaja introvert dengan pikiran gelap diam-diam jatuh cinta pada gadis
                            populer
                            di kelasnya.</p>
                        <a href="baca.php?komik=danger-heart" class="btn btn-primary mt-auto">Baca</a>
                    </div>
                </div>
            </section>
        </div>

        <div class="row">
            <section class="d-flex flex-wrap justify-content-center gap-3 card-container">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="image/One punch Man.jpeg" alt="">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">One punch Man</h5>
                        <p class="card-text">Pahlawan botak super kuat yang selalu mengalahkan musuh dengan sekali
                            pukul.
                        </p>
                        <a href="baca.php?komik=onepunchman" class="btn btn-primary mt-auto">Baca</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="image/Frieren Beyond Journeys End.jpeg" alt="">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Frieren Beyond Journeys End</h5>
                        <p class="card-text">Kisah penyihir elf panjang umur yang merenungi makna hidup setelah
                            petualangan
                            besar berakhir.</p>
                        <a href="baca.php?komik=frieren" class="btn btn-primary mt-auto">Baca</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="image/The beginnng after the end.jpeg" alt="">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">The Beginnng Bfter The End</h5>
                        <p class="card-text">Raja reinkarnasi di dunia sihir baru yang mengejar kehidupan kedua dengan
                            kekuatan luar biasa.</p>
                        <a href="baca.php?komik=beginning-after-end" class="btn btn-primary mt-auto">Baca</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="image/One piece.jpeg" alt="">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">One Piece</h5>
                        <p class="card-text">Petualangan Luffy dan kru bajak lautnya mencari harta legendaris bernama
                            One
                            Piece.</p>
                        <a href="baca.php?komik=onepiece" class="btn btn-primary mt-auto">Baca</a>
                    </div>
                </div>
            </section>
        </div>

        <div class="row">
            <section class="d-flex flex-wrap justify-content-center gap-3 card-container">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="image/Player.jpeg" alt="">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Player</h5>
                        <p class="card-text">Seorang pemain yang kembali dari kematian dan berusaha menaklukkan dunia
                            game realistis demi balas dendam dan kekuatan.
                        </p>
                        <a href="baca.php?komik=player" class="btn btn-primary mt-auto">Baca</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="image/The Eminence in Shadow.jpeg" alt="">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">The Eminence in Shadow</h5>
                        <p class="card-text">Kisah seorang remaja yang terobsesi menjadi sosok penguasa bayangan. Di
                            balik
                            kehidupannya yang tampak biasa, ia memimpin organisasi rahasia untuk melawan kekuatan
                            jahat,
                            meskipun awalnya ia sendiri menganggapnya hanya khayalan.</p>
                        <a href="baca.php?komik=eminence-in-shadow" class="btn btn-primary mt-auto">Baca</a>
                    </div>
                </div>

            </section>
        </div>
    </div>

        <!DOCTYPE html>
        <html lang="id">

        <head>
            <meta charset="UTF-8">
            <title>Okomik Rilisan</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <style>
                .okomik-title {
                    font-size: 14px;
                    display: block;
                }

                .okomik-link:hover {
                    text-decoration: none;
                    a opacity: 0.85;
                }
            </style>
        </head>

        <section class="container py-4">
            <h5 class="fw-bold mb-4">Okomik Rilisan</h5>
            <div class="row justify-content-center g-4">

                <?php
                $rilisan = [
                    ['slug' => 'engineer', 'title' => 'The World’s Best Engineer', 'img' => 'image/The World’s Best Engineer.jpeg', 'up' => 2],
                    ['slug' => 'swordmasters-youngest-son', 'title' => "Swordmaster's Youngest Son", 'img' => 'image/Swordmaster\'s Youngest Son.jpeg', 'up' => 2],
                    ['slug' => 'valkyrie', 'title' => 'Shuumatsu no Valkyrie', 'img' => 'image/Shuumatsu no Valkyrie.jpeg', 'up' => 2],
                    ['slug' => 'albus', 'title' => 'Albus Changes the World', 'img' => 'image/Albus Changes the World.jpeg', 'up' => 2],
                    ['slug' => 'novels-extra', 'title' => 'The Novel’s Extra (Remake)', 'img' => 'image/The Novel’s Extra (Remake).png', 'up' => 2]
                ];

                foreach ($rilisan as $komik): ?>
                    <div class="col-6 col-sm-4 col-md-2 text-center">
                        <a href="baca.php?komik=<?= $komik['slug'] ?>"
                            class="text-decoration-none text-dark position-relative d-block">
                            <!-- Badge UP -->
                            <span class="badge bg-primary position-absolute top-0 start-50 translate-middle-x"
                                style="z-index: 2;">
                                UP <?= $komik['up'] ?>
                            </span>

                            <!-- Gambar -->
                            <img src="<?= $komik['img'] ?>" class="rounded-circle border border-primary mt-4" width="120"
                                height="120" alt="<?= $komik['title'] ?>">

                            <!-- Judul -->
                            <div class="okomik-title mt-2 small text-truncate" title="<?= $komik['title'] ?>">
                                <?= $komik['title'] ?>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>

            </div>
        </section>

        </html>x

    </div>

    <footer>
        <div class="container">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
                </ul>
                <p class="text-center text-body-secondary">© 2025 Okomik</p>
            </footer>
        </div>
    </footer>

    <script>
        const komikList = [
            {
                title: "Gotoubun no Hanayome",
                img: "image/gotoubun no hanayome.jpeg",
                description: "Lima saudara kembar dan satu guru privat dalam kisah romantis yang penuh kejutan.",
                link: "baca.php"
            },
            {
                title: "The Danger in My Hearth",
                img: "image/The danger in my hearth.jpeg",
                description: "Seorang siswa pemalu menyimpan rahasia gelap yang perlahan berubah oleh cinta.",
                link: "baca.php"
            },
            {
                title: "One punch Man",
                img: "image/One punch Man.jpeg",
                description: "Pahlawan yang terlalu kuat dan bosan karena mengalahkan musuh dengan satu pukulan.",
                link: "baca.php"
            },
            {
                title: "Frieren Beyond Journeys End",
                img: "image/Frieren Beyond Journeys End.jpeg",
                description: "Kisah penyihir elf panjang umur yang merenungi makna hidup setelah petualangan besar berakhir.",
                link: "baca.php"
            },
            {
                title: "One Piece",
                img: "image/One piece.jpeg",
                description: "Petualangan bajak laut topi jerami dalam mencari harta karun legendaris, One Piece.",
                link: "baca.php"
            },
            {
                title: "The Eminence in Shadow",
                img: "image/The Eminence in Shadow.jpeg",
                description: "Remaja biasa yang diam-diam ingin menjadi kekuatan di balik bayangan dunia.",
                link: "baca.php"
            },
            {
                title: "Shuumatsu no Valkyrie",
                img: "image/Shuumatsu no Valkyrie.jpeg",
                description: "Pertarungan epik antara dewa dan manusia dalam turnamen akhir dunia.",
                link: "baca.php"
            },
            {
                title: "Albus Changes the World",
                img: "image/Albus Changes the World.jpeg",
                description: "Seorang pemuda dengan tekad mengubah dunia lewat kekuatan dan pengetahuan.",
                link: "baca.php"
            },
            {
                title: "The Novel’s Extra (Remake)",
                img: "image/The Novel’s Extra (Remake).png",
                description: "Seorang penulis yang terjebak dalam novelnya sendiri, berjuang untuk mengubah takdir sebagai karakter sampingan.",
                link: "baca.php?komik=novels-extra"
            },
            {
                title: "The World’s Best Engineer",
                img: "image/engineer.jpeg",
                description: "Seorang insinyur jenius di dunia fantasi yang menciptakan alat-alat hebat demi mengubah nasib kerajaan.",
                link: "baca.php?komik=engineer"
            },
            {
                title: "Swordmaster's Youngest Son",
                img: "image/Swordmaster's Youngest Son.jpeg",
                description: "Putra bungsu keluarga pendekar pedang yang diremehkan, kembali ke masa lalu untuk memperbaiki nasibnya dan menjadi terkuat.",
                link: "baca.php?komik=swordmasters-youngest-son"
            },
            {
                title: "Player",
                img: "image/Player.jpeg",
                description: "Seorang pemain yang kembali dari kematian dan berusaha menaklukkan dunia game realistis demi balas dendam dan kekuatan.",
                link: "baca.php?komik=player"
            },
            {
                title: "The Beginnng After The End",
                img: "image/The beginnng after the end.jpeg",
                description: "Raja reinkarnasi di dunia sihir baru yang mengejar kehidupan kedua dengan kekuatan luar biasa.",
                link: "baca.php?komik=beginning-after-end"
            },
            {
                title: "Magic Academy's Genius Blinker",
                img: "image/Magic Academys Genius Blinker.jpeg",
                description: "Seorang murid jenius di akademi sihir yang punya kemampuan aneh namun sangat kuat.",
                link: "baca.php?komik=magic-genius"
            },
            {
                title: "The Extra's Academy Survival Guide",
                img: "image/The Extras Academy Survival Guide.jpeg",
                description: "Seorang figuran di akademi elit berusaha bertahan hidup di tengah intrik, sihir, dan ancaman takdir.",
                link: "baca.php?komik=extra-academy"
            }
        ];

        document.querySelector('form').addEventListener('submit', function (e) {
            e.preventDefault();
            const query = document.querySelector('input[type=search]').value.toLowerCase().trim();
            const results = komikList.filter(item => item.title.toLowerCase().includes(query));
            const allComics = document.getElementById('all-comics');
            const container = document.getElementById('search-results');
            container.innerHTML = "";

            if (query === "") {
                allComics.style.display = "block";
                container.innerHTML = "";
            } else if (results.length) {
                allComics.style.display = "none";
                results.forEach(item => {
                    container.innerHTML += `
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="card h-100 shadow-sm" style="border-radius: 12px; overflow: hidden;">
                                <img src="${item.img}" class="card-img-top" alt="${item.title}" style="height: 300px; object-fit: cover;">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">${item.title}</h5>
                                    <p class="card-text">${item.description}</p>
                                    <a href="${item.link}" class="btn btn-primary mt-auto">Baca</a>
                                </div>
                            </div>
                        </div>`;
                });
            } else {
                allComics.style.display = "none";
                container.innerHTML = "<p class='text-center'>Komik tidak ditemukan.</p>";
            }
        });
    </script>

</body>

</html>