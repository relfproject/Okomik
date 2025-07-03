<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manga - Okomik</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="image/Logo Fesyen Bulat Klasik Krem (1).png">
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

    <div id="manga">
        <div class="container mt-4">
            <section class="container">
                <h3>Manga</h3>
            </section>
            <!-- Di sini kamu bisa tambahkan komik khusus manga -->
            <div class="row">
                <section class="d-flex flex-wrap justify-content-center gap-3 card-container">
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
                        <img class="card-img-top" src="image/One piece.jpeg" alt="">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">One Piece</h5>
                            <p class="card-text">Petualangan Luffy dan kru bajak lautnya mencari harta legendaris
                                bernama
                                One
                                Piece.</p>
                            <a href="baca.php?komik=onepiece" class="btn btn-primary mt-auto">Baca</a>
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
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="image/Shuumatsu no Valkyrie.jpeg" alt="">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Shuumatsu no Valkyrie</h5>
                            <p class="card-text">Pertarungan epik antara para dewa dan manusia legendaris untuk
                                menentukan
                                nasib
                                umat manusia, digambarkan dalam duel satu lawan satu yang spektakuler.</p>
                            <a href="baca.php?komik=valkyrie" class="btn btn-primary mt-auto">Baca</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="image/Albus Changes the World.jpeg" alt="">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Albus Changes the World</h5>
                            <p class="card-text">Seorang anak muda bernama Albus yang tiba-tiba memperoleh kekuatan
                                misterius
                                dan bertekad mengubah dunia yang penuh ketidakadilan menjadi tempat yang lebih baik.</p>
                            <a href="baca.php?komik=albus" class="btn btn-primary mt-auto">Baca</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
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
                link: "#"
            }
            // Tambahkan item lainnya seperti di atas
        ];

        document.querySelector('form').addEventListener('submit', function (e) {
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