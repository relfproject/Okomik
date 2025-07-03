<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manhwa - Okomik</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="image/Logo Fesyen Bulat Klasik Krem (1).png">
</head>

<body>
    <!-- Navbar -->
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

    <!-- Filter Button -->
    <section class="p-3 container d-flex flex-wrap justify-content-center align-items-center gap-2">
        <a href="index.php" class="btn btn-light">Okomik</a>
        <a href="manga.php" class="btn btn-light">Manga</a>
        <a href="manhwa.php" class="btn btn-light">Manhwa</a>
    </section>

    <!-- Hasil pencarian -->
    <div class="container mt-4">
        <div id="search-results" class="row"></div>
    </div>

    <!-- Daftar Komik Manhwa -->
    <div id="manhwa">
        <div class="container mt-4">
            <div class="row">
                <h3>Manhwa</h3>
                <!-- Di sini kamu bisa tambahkan komik khusus manga -->
                <div class="row">
                    <section class="d-flex flex-wrap justify-content-center gap-3 card-container">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="image/The Extras Academy Survival Guide.jpeg" alt="">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">The Extra's Academy Survival Guide</h5>
                                <p class="card-text">Seorang figuran di akademi elit berusaha bertahan hidup di tengah
                                    intrik, sihir, dan ancaman takdir.</p>
                                <a href="baca.php?komik=extra-academy" class="btn btn-primary mt-auto">Baca</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="image/Magic Academys Genius Blinker.jpeg" alt="">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Magic Academy's Genius Blinker</h5>
                                <p class="card-text">Seorang murid jenius di akademi sihir yang punya kemampuan aneh
                                    namun sangat kuat.</p>
                                <a href="baca.php?komik=magic-genius" class="btn btn-primary mt-auto">Baca</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="image/The beginnng after the end.jpeg" alt="">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">The Beginnng After The End</h5>
                                <p class="card-text">Raja reinkarnasi di dunia sihir baru yang mengejar kehidupan kedua
                                    dengan kekuatan luar biasa.</p>
                                <a href="baca.php?komik=beginning-after-end" class="btn btn-primary mt-auto">Baca</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="image/Player.jpeg" alt="">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Player</h5>
                                <p class="card-text">Seorang pemain yang kembali dari kematian dan berusaha menaklukkan
                                    dunia game realistis demi balas dendam dan kekuatan.</p>
                                <a href="baca.php?komik=player" class="btn btn-primary mt-auto">Baca</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="image/Swordmaster's Youngest Son.jpeg" alt="">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Swordmaster's Youngest Son</h5>
                                <p class="card-text">Putra bungsu keluarga pendekar pedang yang diremehkan, kembali ke
                                    masa lalu untuk memperbaiki nasibnya dan menjadi terkuat.</p>
                                <a href="baca.php?komik=swordmasters-youngest-son"
                                    class="btn btn-primary mt-auto">Baca</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="image/The World’s Best Engineer.jpeg" alt="">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">The World’s Best Engineer</h5>
                                <p class="card-text">Seorang insinyur jenius di dunia fantasi yang menciptakan alat-alat
                                    hebat demi mengubah nasib kerajaan.</p>
                                <a href="baca.php?komik=engineer" class="btn btn-primary mt-auto">Baca</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="image/The Novel’s Extra (Remake).png" alt="">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">The Novel’s Extra (Remake)</h5>
                                <p class="card-text">Seorang penulis yang tiba-tiba terjebak sebagai karakter sampingan
                                    di
                                    novelnya sendiri, berjuang untuk bertahan hidup dan mengubah jalan cerita demi
                                    keuntungannya.</p>
                                <a href="baca.php?komik=novels-extra" class="btn btn-primary mt-auto">Baca</a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
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

    <!-- Script Pencarian -->
    <script>
        const komikList = [
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
            const allComics = document.getElementById('manhwa');
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