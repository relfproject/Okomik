<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Okomik - Baca Komik</title>
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

        .scroll-horizontal {
            display: flex;
            overflow-x: auto;
            gap: 1rem;
            padding-bottom: 10px;
            scroll-snap-type: x mandatory;
        }

        .scroll-horizontal::-webkit-scrollbar {
            height: 8px;
        }

        .scroll-horizontal::-webkit-scrollbar-thumb {
            background-color: #ccc;
            border-radius: 4px;
        }

        .scroll-horizontal>.card-wrapper {
            flex: 0 0 auto;
            scroll-snap-align: start;
            width: 270px;
            /* Cukup kecil agar 3–4 muat di layar */
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


    <!-- Daftar Komik -->
    <div id="okomik">
        <div class="container mt-4">
            <h3></h3>
            <div class="row d-flex flex-wrap justify-content-center gap-3" id="okomik-list"></div>
        </div>
    </div>


    <!-- Pagination -->
    <nav aria-label="Page navigation example" id="pagination-section">
        <ul class="pagination justify-content-center" id="pagination"></ul>
    </nav>

    <!-- Rilisan Terbaru -->
    <section class="container py-4" id="rilisan-section">
        <h5 class="fw-bold mb-4">Okomik Rilisan</h5>
        <div class="row justify-content-center g-4" id="rilisan-list"></div>
    </section>

    <!-- Manga Populer -->
    <section class="container py-4" id="manga-populer-section">
        <!-- tampilkanKategori akan isi bagian ini -->
    </section>

    <!-- Manhwa Populer -->
    <section class="container py-4" id="manhwa-populer-section">
        <!-- tampilkanKategori akan isi bagian ini -->
    </section>


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

    <!-- Script -->
    <script>
        const komikList = [
            { title: "The Extra's Academy Survival Guide", img: "image/17.jpeg", description: "Seorang figuran di akademi elit berusaha bertahan hidup di tengah intrik, sihir, dan ancaman takdir.", link: "baca.php?komik=extra-academy" },
            { title: "Magic Academy's Genius Blinker", img: "image/8.jpeg", description: "Seorang murid jenius di akademi sihir yang punya kemampuan aneh namun sangat kuat.", link: "baca.php?komik=magic-genius" },
            { title: "Gotoubun no Hanayome", img: "image/5.jpeg", description: "Seorang siswa menjadi tutor bagi lima saudari kembar dengan kepribadian berbeda.", link: "baca.php?komik=gotoubun" },
            { title: "Mission: Yozakura Family", img: "image/20.jpg", description: "Taiyo menikah dengan gadis dari keluarga mata-mata dan terlibat dalam dunia penuh aksi dan rahasia.", link: "baca.php?komik=yozakura" },
            { title: "The Danger in My Hearth", img: "image/15.jpeg", description: "Remaja introvert dengan pikiran gelap diam-diam jatuh cinta pada gadis populer di kelasnya.", link: "baca.php?komik=danger-heart" },
            { title: "One Punch Man", img: "image/10.jpeg", description: "Pahlawan botak super kuat yang selalu mengalahkan musuh dengan sekali pukul.", link: "baca.php?komik=onepunchman" },
            { title: "Frieren Beyond Journeys End", img: "image/4.jpeg", description: "Penyihir elf panjang umur merenungi makna hidup setelah petualangan besarnya berakhir.", link: "baca.php?komik=frieren" },
            { title: "The Beginning After The End", img: "image/14.jpeg", description: "Raja reinkarnasi ke dunia sihir baru untuk mengejar kehidupan kedua yang lebih bermakna.", link: "baca.php?komik=beginning-after-end" },
            { title: "One Piece", img: "image/9.jpeg", description: "Petualangan Luffy dan kru bajak lautnya mencari harta legendaris bernama One Piece.", link: "baca.php?komik=onepiece" },
            { title: "Player", img: "image/11.jpeg", description: "Pemain yang kembali dari kematian dan menaklukkan dunia game demi balas dendam.", link: "baca.php?komik=player" },
            { title: "The Eminence in Shadow", img: "image/16.jpeg", description: "Remaja yang diam-diam membangun organisasi bayangan demi impiannya jadi penguasa bayangan.", link: "baca.php?komik=eminence-in-shadow" },
            { title: "Grand Blue", img: "image/21.jpg", description: "Mahasiswa baru terjebak dalam klub diving penuh pesta, alkohol, dan kekacauan.", link: "baca.php?komik=grandblue" },
            { title: "DANDADAN", img: "image/22.jpg", description: "Dua remaja menghadapi roh dan alien setelah saling membuktikan keyakinan mereka.", link: "baca.php?komik=dandadan" },
            { title: "A Breakthrough Brought by Forbidden Master and Disciple", img: "image/23.jpg", description: "Petualang yang dibuang mendapatkan kekuatan luar biasa dari guru terlarang untuk bangkit kembali.", link: "baca.php?komik=A Breakthrough Brought by Forbidden Master and Disciple" },
            { title: "Academy’s Undercover Professor", img: "image/24.jpg", description: "Pria misterius menyamar sebagai profesor sihir dan menyembunyikan identitas aslinya.", link: "baca.php?komik=undercover-professor" },
            { title: "Eleceed", img: "image/25.jpg", description: "Remaja berhati baik dan kucing misterius melawan musuh dengan kekuatan supernatural.", link: "baca.php?komik=eleceed" },
            { title: "Return Of The Mount Hua Sect", img: "image/26.jpg", description: "Pendekar legendaris bereinkarnasi dan berusaha membangkitkan kembali sektenya yang runtuh.", link: "baca.php?komik=mount-hua" },
            { title: "Lightning Degree", img: "image/28.gif", description: "Anak yatim dibesarkan sekte rahasia dan tumbuh menjadi pendekar kilat penuh tekad.", link: "baca.php?komik=lightning-degree" },
            { title: "The Regressed Son of a Duke is an Assassin", img: "image/19.png", description: "Putra bangsawan yang dikhianati kembali ke masa lalu dan menjadi pembunuh elit untuk balas dendam.", link: "baca.php?komik=regressed-duke-assassin" },
            { title: "Shuumatsu no Valkyrie", img: "image/12.jpeg", description: "Pertarungan epik antara para dewa dan manusia legendaris untuk menentukan nasib umat manusia.", link: "baca.php?komik=valkyrie" },
            { title: "Albus Changes the World", img: "image/1.jpeg", description: "Albus memperoleh kekuatan misterius dan bertekad mengubah dunia yang tidak adil.", link: "baca.php?komik=albus" },
            { title: "The World’s Best Engineer", img: "image/3.jpeg", description: "Insinyur jenius bangkit di dunia fantasi dan membangun kejayaan dari nol.", link: "baca.php?komik=engineer" },
            { title: "Swordmaster's Youngest Son", img: "image/13.jpeg", description: "Anak bungsu pendekar legendaris berjuang keras membuktikan dirinya.", link: "baca.php?komik=swordmasters-youngest-son" },
            { title: "The Novel’s Extra (Remake)", img: "image/18.png", description: "Penulis yang terjebak dalam novel buatannya dan harus bertahan sebagai karakter figuran.", link: "baca.php?komik=novels-extra" }
        ];

        const mangaPopuler = komikList.filter(k =>
            k.title.includes("One Piece") || k.title.includes("DANDADAN") || k.title.includes("Gotoubun") || k.title.includes("Frieren") || k.title.includes("Danger") || k.title.includes("Shadow")
        );
        const manhwaPopuler = komikList.filter(k =>
            k.title.includes("Player") || k.title.includes("Mount Hua") || k.title.includes("Swordmaster") || k.title.includes("Regressed") || k.title.includes("Engineer")
        );

        function tampilkanKategori(idContainer, dataList, label) {
            const container = document.getElementById(idContainer);
            container.innerHTML = `
        <h5 class="fw-bold mb-3">${label}</h5>
        <div class="scroll-horizontal" id="${idContainer}-list"></div>`;

            const list = document.getElementById(`${idContainer}-list`);
            dataList.forEach(item => {
                list.innerHTML += `
            <div class="card-wrapper">
                <div class="card card-komik h-100">
                    <img src="${item.img}" alt="${item.title}">
                    <div class="card-body d-flex flex-column">
                        <h6 class="card-title">${item.title}</h6>
                        <p class="card-text">${item.description.slice(0, 60)}...</p>
                        <a href="${item.link}" class="btn btn-sm btn-primary mt-auto">Baca</a>
                    </div>
                </div>
            </div>`;
            });
        }


        const rilisanList = komikList.slice(-5);
        const listContainer = document.getElementById('okomik-list');
        const rilisanContainer = document.getElementById('rilisan-list');

        function renderPage(page = 1) {
            const itemsPerPage = 8;
            const start = (page - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const currentItems = komikList.slice(start, end);
            listContainer.innerHTML = '';
            currentItems.forEach(item => {
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
            renderPagination(page);
        }

        function renderPagination(page) {
            const itemsPerPage = 8;
            const totalPages = Math.ceil(komikList.length / itemsPerPage);
            const pagination = document.getElementById('pagination');
            pagination.innerHTML = '';

            pagination.innerHTML += `
    <li class="page-item ${page === 1 ? 'disabled' : ''}">
      <a class="page-link" href="#" onclick="changePage(${page - 1})">Previous</a>
    </li>`;

            for (let i = 1; i <= totalPages; i++) {
                pagination.innerHTML += `
        <li class="page-item ${i === page ? 'active' : ''}">
            <a class="page-link" href="#" onclick="changePage(${i})">${i}</a>
        </li>`;
            }

            pagination.innerHTML += `
    <li class="page-item ${page === totalPages ? 'disabled' : ''}">
        <a class="page-link" href="#" onclick="changePage(${page + 1})">Next</a>
    </li>`;
        }

        function changePage(page) {
            const totalPages = Math.ceil(komikList.length / 8);
            if (page < 1 || page > totalPages) return;
            renderPage(page);
        }

        rilisanList.forEach(komik => {
            rilisanContainer.innerHTML += `
    <div class="col-6 col-sm-4 col-md-2 text-center">
        <a href="${komik.link}" class="text-decoration-none text-dark position-relative d-block">
            <span class="badge bg-primary position-absolute top-0 start-50 translate-middle-x" style="z-index: 2;">UP 2</span>
            <img src="${komik.img}" class="rounded-circle border border-primary mt-4" width="120" height="120" alt="${komik.title}">
            <div class="mt-2 small text-truncate" title="${komik.title}">${komik.title}</div>
        </a>
    </div>`;
        });

        document.querySelector('#searchForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const query = document.querySelector('input[type=search]').value.toLowerCase().trim();
            const results = komikList.filter(item => item.title.toLowerCase().includes(query));
            const allComics = document.getElementById('okomik');
            const container = document.getElementById('search-results');

            // 🔻 Tambahkan referensi ke section yang akan disembunyikan
            const rilisanSection = document.getElementById('rilisan-section');
            const mangaSection = document.getElementById('manga-populer-section');
            const manhwaSection = document.getElementById('manhwa-populer-section');
            const paginationSection = document.getElementById('pagination-section');


            container.innerHTML = "";

            if (query === "") {
                allComics.style.display = "block";
                rilisanSection.style.display = "block";
                mangaSection.style.display = "block";
                manhwaSection.style.display = "block";
                paginationSection.style.display = "block";
                container.innerHTML = "";
            } else if (results.length) {
                allComics.style.display = "none";
                rilisanSection.style.display = "none";
                mangaSection.style.display = "none";
                manhwaSection.style.display = "none";
                paginationSection.style.display = "none";

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
                rilisanSection.style.display = "none";
                mangaSection.style.display = "none";
                manhwaSection.style.display = "none";
                paginationSection.style.display = "none";
                container.innerHTML = "<p class='text-center'>Komik tidak ditemukan.</p>";
            }

        });


        // Panggil semuanya
        tampilkanKategori("manga-populer-section", mangaPopuler, "Baca Manga Populer");
        tampilkanKategori("manhwa-populer-section", manhwaPopuler, "Baca Manhwa Populer");
        renderPage(1);
    </script>
</body>

</html>