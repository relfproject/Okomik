<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manhwa - Okomik</title>
    <link rel="icon" type="image/png" href="image/6.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
            padding: 20px;
        }

        .card-komik {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: transform 0.2s ease, box-shadow 0.3s ease;
            background: #fff;
            overflow: hidden;
            margin-bottom: 20px;
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

    <!-- Manhwa List -->
    <div id="manhwa">
        <div class="container mt-4">
            <h3>Manhwa</h3>
            <div class="row d-flex flex-wrap justify-content-center gap-3" id="manhwa-list"></div>
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

    <!-- Script Pencarian dan Render -->
    <script>
        const komikList = [
            {
                title: "The Extra's Academy Survival Guide",
                img: "image/17.jpeg",
                description: "Seorang figuran di akademi elit berusaha bertahan hidup di tengah intrik, sihir, dan ancaman takdir.",
                link: "baca.php?komik=extra-academy"
            },
            {
                title: "Magic Academy's Genius Blinker",
                img: "image/8.jpeg",
                description: "Seorang murid jenius di akademi sihir yang punya kemampuan aneh namun sangat kuat.",
                link: "baca.php?komik=magic-genius"
            },
            {
                title: "The Beginning After The End",
                img: "image/14.jpeg",
                description: "Raja reinkarnasi di dunia sihir baru yang mengejar kehidupan kedua dengan kekuatan luar biasa.",
                link: "baca.php?komik=beginning-after-end"
            },
            {
                title: "Player",
                img: "image/11.jpeg",
                description: "Seorang pemain yang kembali dari kematian dan berusaha menaklukkan dunia game realistis demi balas dendam dan kekuatan.",
                link: "baca.php?komik=player"
            },
            {
                title: "Swordmaster's Youngest Son",
                img: "image/13.jpeg",
                description: "Putra bungsu keluarga pendekar pedang yang diremehkan, kembali ke masa lalu untuk memperbaiki nasibnya dan menjadi terkuat.",
                link: "baca.php?komik=swordmasters-youngest-son"
            },
            {
                title: "The World’s Best Engineer",
                img: "image/3.jpeg",
                description: "Seorang insinyur jenius di dunia fantasi yang menciptakan alat-alat hebat demi mengubah nasib kerajaan.",
                link: "baca.php?komik=engineer"
            },
            {
                title: "The Novel’s Extra (Remake)",
                img: "image/18.png",
                description: "Seorang penulis yang terjebak sebagai karakter sampingan di novelnya sendiri, berjuang untuk bertahan hidup dan mengubah jalan cerita demi keuntungannya.",
                link: "baca.php?komik=novels-extra"
            }
        ];

        const listContainer = document.getElementById('manhwa-list');
        komikList.forEach(item => {
            listContainer.innerHTML += `
                <div class="card card-komik" style="width: 18rem;">
                    <img src="${item.img}" alt="${item.title}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">${item.title}</h5>
                        <p class="card-text">${item.description}</p>
                        <a href="${item.link}" class="btn btn-primary mt-auto">Baca</a>
                    </div>
                </div>`;
        });

        document.querySelector('#searchForm').addEventListener('submit', function (e) {
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