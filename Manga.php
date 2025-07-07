<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manga - Okomik</title>
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

    <!-- Manga List -->
    <div id="manga">
        <div class="container mt-4">
            <h3>Manga</h3>
            <div class="row d-flex flex-wrap justify-content-center gap-3">
                <div class="card card-komik" style="width: 18rem;">
                    <img src="image/5.jpeg" alt="Gotoubun no Hanayome">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Gotoubun no Hanayome</h5>
                        <p class="card-text">Seorang siswa menjadi tutor bagi lima saudari kembar dengan kepribadian berbeda.</p>
                        <a href="baca.php?komik=gotoubun" class="btn btn-primary mt-auto">Baca</a>
                    </div>
                </div>
                <div class="card card-komik" style="width: 18rem;">
                    <img src="image/15.jpeg" alt="The Danger in My Heart">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">The Danger in My Heart</h5>
                        <p class="card-text">Remaja introvert dengan pikiran gelap jatuh cinta pada gadis populer di kelasnya.</p>
                        <a href="baca.php?komik=danger-heart" class="btn btn-primary mt-auto">Baca</a>
                    </div>
                </div>
                <div class="card card-komik" style="width: 18rem;">
                    <img src="image/10.jpeg" alt="One Punch Man">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">One Punch Man</h5>
                        <p class="card-text">Pahlawan botak super kuat yang selalu mengalahkan musuh dengan sekali pukul.</p>
                        <a href="baca.php?komik=onepunchman" class="btn btn-primary mt-auto">Baca</a>
                    </div>
                </div>
                <div class="card card-komik" style="width: 18rem;">
                    <img src="image/4.jpeg" alt="Frieren Beyond Journey’s End">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Frieren Beyond Journey’s End</h5>
                        <p class="card-text">Penyihir elf panjang umur yang merenungi makna hidup setelah petualangan besar berakhir.</p>
                        <a href="baca.php?komik=frieren" class="btn btn-primary mt-auto">Baca</a>
                    </div>
                </div>
                <div class="card card-komik" style="width: 18rem;">
                    <img src="image/9.jpeg" alt="One Piece">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">One Piece</h5>
                        <p class="card-text">Petualangan Luffy dan kru bajak lautnya mencari harta legendaris One Piece.</p>
                        <a href="baca.php?komik=onepiece" class="btn btn-primary mt-auto">Baca</a>
                    </div>
                </div>
                <div class="card card-komik" style="width: 18rem;">
                    <img src="image/16.jpeg" alt="The Eminence in Shadow">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">The Eminence in Shadow</h5>
                        <p class="card-text">Remaja terobsesi jadi penguasa bayangan, memimpin organisasi rahasia melawan kekuatan jahat.</p>
                        <a href="baca.php?komik=eminence-in-shadow" class="btn btn-primary mt-auto">Baca</a>
                    </div>
                </div>
                <div class="card card-komik" style="width: 18rem;">
                    <img src="image/12.jpeg" alt="Shuumatsu no Valkyrie">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Shuumatsu no Valkyrie</h5>
                        <p class="card-text">Pertarungan epik antara para dewa dan manusia legendaris untuk menentukan nasib umat manusia.</p>
                        <a href="baca.php?komik=valkyrie" class="btn btn-primary mt-auto">Baca</a>
                    </div>
                </div>
                <div class="card card-komik" style="width: 18rem;">
                    <img src="image/1.jpeg" alt="Albus Changes the World">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Albus Changes the World</h5>
                        <p class="card-text">Albus memperoleh kekuatan misterius dan bertekad mengubah dunia yang tidak adil.</p>
                        <a href="baca.php?komik=albus" class="btn btn-primary mt-auto">Baca</a>
                    </div>
                </div>
                <div class="card card-komik" style="width: 18rem;">
                    <img src="image/20.jpg" alt="Mission: Yozakura Family">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Mission: Yozakura Family</h5>
                        <p class="card-text">Mission: Yozakura Family mengisahkan Taiyo, remaja biasa yang menikah dengan gadis dari keluarga mata-mata dan terlibat dalam kehidupan penuh aksi dan rahasia.</p>
                        <a href="baca.php?komik=yozakura" class="btn btn-primary mt-auto">Baca</a>
                    </div>
                </div>
                <div class="card card-komik" style="width: 18rem;">
                    <img src="image/22.jpg" alt="DANDADAN">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">DANDADAN</h5>
                        <p class="card-text">Dandadan adalah manga aksi-supernatural yang mengikuti dua remaja, **Momo** dan **Okarun**, yang awalnya berdebat tentang hal supranatural dan alien. Saat mencoba membuktikan keyakinan masing-masing, mereka justru terlibat dalam konflik aneh yang melibatkan **roh, alien, dan kekuatan misterius**, memaksa mereka bekerja sama untuk bertahan.</p>
                        <a href="baca.php?komik=dandadan" class="btn btn-primary mt-auto">Baca</a>
                    </div>
                </div>
                <div class="card card-komik" style="width: 18rem;">
                    <img src="image/23.jpg" alt="A Breakthrough Brought by Forbidden Master and Disciple">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">A Breakthrough Brought by Forbidden Master and Disciple</h5>
                        <p class="card-text">A Breakthrough Brought by Forbidden Master and Disciple menceritakan tentang Belgrieve, seorang mantan petualang yang dibuang dari partainya karena dianggap lemah. Namun, nasibnya berubah setelah bertemu dan berlatih dengan mantan raja iblis, guru terlarang yang memberinya kekuatan luar biasa untuk membalas dendam dan bangkit kembali.</p>
                        <a href="baca.php?komik=A Breakthrough Brought by Forbidden Master and Disciple" class="btn btn-primary mt-auto">Baca</a>
                    </div>
                </div>
                <div class="card card-komik" style="width: 18rem;">
                    <img src="image/21.jpg" alt="Grand Blue">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Grand Blue</h5>
                        <p class="card-text">Grand Blue adalah manga komedi yang mengikuti kehidupan **Iori Kitahara**, seorang mahasiswa baru yang pindah ke kota pantai dan bergabung dengan klub diving. Alih-alih kehidupan kampus yang tenang, ia malah terjebak dalam dunia penuh pesta gila, alkohol, dan teman-teman aneh, sambil sesekali... menyelam.</p>
                        <a href="baca.php?komik=grandblue" class="btn btn-primary mt-auto">Baca</a>
                    </div>
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
                title: "Gotoubun no Hanayome",
                img: "image/5.jpeg",
                description: "Lima saudara kembar dan satu guru privat dalam kisah romantis penuh kejutan.",
                link: "baca.php?komik=gotoubun"
            },
            {
                title: "The Danger in My Heart",
                img: "image/15.jpeg",
                description: "Remaja pemalu menyimpan rahasia gelap yang berubah oleh cinta.",
                link: "baca.php?komik=danger-heart"
            },
            {
                title: "One Punch Man",
                img: "image/10.jpeg",
                description: "Pahlawan terlalu kuat yang bosan karena menang dengan satu pukulan.",
                link: "baca.php?komik=onepunchman"
            },
            {
                title: "Frieren Beyond Journey’s End",
                img: "image/4.jpeg",
                description: "Penyihir elf panjang umur merenungi makna hidup.",
                link: "baca.php?komik=frieren"
            },
            {
                title: "One Piece",
                img: "image/9.jpeg",
                description: "Petualangan bajak laut topi jerami mencari One Piece.",
                link: "baca.php?komik=onepiece"
            },
            {
                title: "The Eminence in Shadow",
                img: "image/16.jpeg",
                description: "Remaja biasa yang ingin jadi kekuatan bayangan dunia.",
                link: "baca.php?komik=eminence-in-shadow"
            },
            {
                title: "Shuumatsu no Valkyrie",
                img: "image/12.jpeg",
                description: "Pertarungan dewa vs manusia dalam turnamen akhir dunia.",
                link: "baca.php?komik=valkyrie"
            },
            {
                title: "Albus Changes the World",
                img: "image/1.jpeg",
                description: "Pemuda yang mengubah dunia dengan kekuatan baru.",
                link: "baca.php?komik=albus"
            }
        ];

        document.querySelector('#searchForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const query = document.querySelector('input[type=search]').value.toLowerCase().trim();
            const results = komikList.filter(item => item.title.toLowerCase().includes(query));
            const allComics = document.getElementById('manga');
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
