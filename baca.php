<?php
// Ambil slug dari URL
$slug = $_GET['komik'] ?? '';

// Sertakan daftar semua data komik dari file terpisah
include 'komik_data.php';
if (!isset($komikList[$slug])) {
    include '404.php';
    exit;
}

$komikList = [
    'extra-academy' => [
        'title' => "The Extra's Academy Survival Guide",
        'img' => 'image/17.jpeg',
        'desc' => 'The Extras Academy Survival Guide adalah manhwa fantasi-akademi yang mengisahkan perjuangan karakter figuran dalam dunia novel yang keras dan penuh intrik sihir.',
        'sinopsis' => 'Terbangun sebagai karakter sampingan dalam novel fantasi yang ia kenal, sang protagonis harus menghadapi kenyataan bahwa dunia ini jauh lebih kejam daripada yang dibayangkannya. Dikelilingi oleh karakter utama yang kuat dan konflik mematikan di akademi elit, ia memanfaatkan pengetahuannya akan cerita untuk menghindari nasib tragis yang menantinya. Dengan kecerdikan, strategi, dan sedikit keberuntungan, ia menulis ulang takdirnya sendiri.',
        'author' => 'Unknown',
        'genre' => 'Fantasi, Sekolah',
        'umur' => '13+',
        'jenis' => 'Manhwa',
        'cara' => 'Bawah ke Atas',
        'indonesia' => '-',
        'tags' => ['Action', 'Adventure', 'Fantasy'],
        'chapters' => ['Chapter 01', 'Chapter 02']
    ],
    'magic-genius' => [
        'title' => "Magic Academy’s Genius Blinker",
        'img' => 'image/8.jpeg',
        'desc' => 'Magic Academy’s Genius Blinker adalah manhwa sihir-akademi tentang murid dengan kekuatan unik yang mengacaukan tatanan dunia sihir.',
        'sinopsis' => 'Di dunia di mana bakat sihir menentukan masa depan, seorang murid muncul dengan kekuatan yang tak bisa diklasifikasikan—Blink. Tak terduga dan tak terukur, kekuatan ini menjadi pusat perhatian, rasa takut, dan kekaguman. Dalam akademi penuh persaingan dan misteri, sang Blinker menghadapi tantangan dari luar dan dalam untuk mengungkap kebenaran di balik kekuatannya dan warisan yang ia bawa.',
        'author' => 'Unknown',
        'genre' => 'Sihir, Sekolah',
        'umur' => '13+',
        'jenis' => 'Manhwa',
        'cara' => 'Bawah ke Atas',
        'indonesia' => '-',
        'tags' => ['Action', 'Adventure', 'Fantasy'],
        'chapters' => ['Chapter 01', 'Chapter 02']
    ],
    'gotoubun' => [
        'title' => "Gotoubun no Hanayome",
        'img' => 'image/5.jpeg',
        'desc' => 'Kisah romantis penuh warna antara seorang siswa jenius dan lima saudari kembar yang keras kepala.',
        'sinopsis' => 'Fuutarou Uesugi adalah siswa miskin dan cerdas yang menerima tawaran pekerjaan sebagai tutor pribadi bagi lima gadis kembar identik. Namun, kelima saudari itu bukanlah siswi biasa—mereka pemalas, keras kepala, dan menolak belajar. Di tengah upaya mendidik mereka, Fuutarou menghadapi berbagai konflik, momen lucu, serta benih-benih cinta yang perlahan tumbuh di antara mereka.',
        'author' => 'Negi Haruba',
        'genre' => 'Romantis, Sekolah',
        'umur' => '13+',
        'jenis' => 'Manga',
        'cara' => 'Kanan ke Kiri',
        'indonesia' => 'Kembar Lima',
        'tags' => ['Romance', 'Comedy'],
        'chapters' => ['Chapter 01', 'Chapter 02']
    ],
    'danger-heart' => [
        'title' => "The Danger in My Heart",
        'img' => 'image/15.jpeg',
        'desc' => 'Komik Boku no Kokoro no Yabai yatsu (Si Dia Yang Berbahaya di Hatiku) adalah seri Manga yang dibuat oleh Takehara Yusuke dan bergenre Romantis.',
        'sinopsis' => 'Ichikawa Kyoutarou adalah siswa SMP introvert dengan imajinasi kelam. Ia terobsesi dengan pemikiran aneh terhadap teman sekelasnya, Yamada Anna—siswi populer dan ceria. Namun, seiring waktu, ia mulai mengenal sisi manusiawi dari Anna dan perasaannya perlahan berubah. Komik ini menyajikan pertumbuhan karakter dan kisah cinta remaja yang jujur, lucu, dan menyentuh.',
        'author' => 'Norio Sakurai',
        'genre' => 'Romantis, Slice of Life',
        'umur' => '13+',
        'jenis' => 'Manga',
        'cara' => 'Kanan ke Kiri',
        'indonesia' => '-',
        'tags' => ['Comedy', 'Romance'],
        'chapters' => ['Chapter 01', 'Chapter 02']
    ],
    'onepunchman' => [
        'title' => "One Punch Man",
        'img' => 'image/10.jpeg',
        'desc' => 'Komik One Punch Man (Satu Pukulan) adalah seri Manga yang dibuat oleh ONE dan bergenre Aksi.',
        'sinopsis' => 'Saitama adalah pahlawan botak yang bisa mengalahkan musuh dengan satu pukulan. Tapi kekuatannya yang luar biasa justru membuat hidupnya membosankan. Tak ada tantangan, tak ada ketegangan. Dalam pencariannya atas makna kepahlawanan sejati, Saitama bertemu berbagai monster absurd, pahlawan lain, dan organisasi jahat. Komik ini menyajikan kombinasi sempurna antara aksi brutal dan humor kocak.',
        'author' => 'ONE',
        'genre' => 'Aksi, Komedi',
        'umur' => '15+',
        'jenis' => 'Manga',
        'cara' => 'Kanan ke Kiri',
        'indonesia' => '-',
        'tags' => ['Action', 'Comedy'],
        'chapters' => ['Chapter 001', 'Chapter 002']
    ],
    'frieren' => [
        'title' => 'Frieren Beyond Journeys End',
        'img' => 'image/4.jpeg',
        'desc' => 'Sebuah kisah fantasi melankolis yang mengeksplorasi kehidupan setelah akhir petualangan.',
        'sinopsis' => 'Setelah mengalahkan Raja Iblis bersama rekan-rekannya, Frieren—seorang elf dengan umur panjang—kembali menjalani hidup dalam kesendirian. Namun, ketika para sahabatnya menua dan meninggal, Frieren mulai merenungkan arti dari kenangan dan hubungan antarmanusia. Ia pun memulai perjalanan baru, bukan untuk menyelamatkan dunia, melainkan untuk memahami perasaan dan memori yang dulu ia abaikan.',
        'author' => 'Yamada Kanehito',
        'genre' => 'Petualangan, Fantasi, Drama',
        'umur' => '13+',
        'jenis' => 'Manga',
        'cara' => 'Kanan ke Kiri',
        'indonesia' => 'Frieren: Setelah Perjalanan Berakhir',
        'tags' => ['Fantasy', 'Adventure', 'Drama'],
        'chapters' => ['Chapter 001', 'Chapter 002']
    ],
    'beginning-after-end' => [
        'title' => 'The Beginning After The End',
        'img' => 'image/14.jpeg',
        'desc' => 'Manhwa isekai populer yang menggambarkan perjalanan hidup kedua dari seorang raja yang bereinkarnasi di dunia sihir.',
        'sinopsis' => 'Arthur Leywin dulunya adalah seorang raja hebat di dunia modern, namun kehidupannya berakhir tragis. Kini ia terlahir kembali sebagai bayi di dunia baru yang dipenuhi oleh sihir, monster, dan kastil kuno. Dengan pengalaman hidup sebelumnya, Arthur bertekad untuk menjalani kehidupan yang lebih bermakna, membangun kekuatan dari bawah, dan melindungi orang-orang yang ia cintai dari ancaman yang lebih besar dari yang pernah ia bayangkan.',
        'author' => 'TurtleMe',
        'genre' => 'Fantasi, Aksi',
        'umur' => '15+',
        'jenis' => 'Manhwa',
        'cara' => 'Bawah ke Atas',
        'indonesia' => '-',
        'tags' => ['Action', 'Adventure', 'Comedy', 'Fantasy'],
        'chapters' => ['Chapter 01', 'Chapter 02']
    ],
    'onepiece' => [
        'title' => 'One Piece',
        'img' => 'image/9.jpeg',
        'desc' => 'Manga legendaris tentang bajak laut muda yang berlayar untuk menjadi Raja Bajak Laut dan menemukan harta karun terbesar, "One Piece".',
        'sinopsis' => ' Monkey D. Luffy adalah pemuda ceria yang memiliki kekuatan karet setelah memakan Buah Iblis. Dengan tekad kuat, ia membentuk kru bajak laut dan berlayar menjelajahi Grand Line untuk mencapai impiannya: menemukan harta karun legendaris "One Piece" dan menjadi Raja Bajak Laut. Dalam perjalanannya, ia menghadapi berbagai musuh kuat, pemerintah dunia, dan kebenaran gelap dari sejarah dunia.',
        'author' => 'Eiichiro Oda',
        'genre' => 'Petualangan, Fantasi',
        'umur' => '13+',
        'jenis' => 'Manga',
        'cara' => 'Kanan ke Kiri',
        'indonesia' => '-',
        'tags' => ['Action', 'Adventure', 'Comedy', 'Fantasy'],
        'chapters' => ['Chapter 001', 'Chapter 002']
    ],
    'player' => [
        'title' => 'Player',
        'img' => 'image/11.jpeg',
        'desc' => 'Player adalah manhwa aksi-fantasi yang mengikuti kisah seorang pria biasa yang tiba-tiba menjadi seorang "Player" — pejuang yang memiliki kekuatan khusus untuk menghadapi dunia yang dilanda kekacauan dan monster.',
        'sinopsis' => 'Dunia berubah secara drastis setelah gerbang misterius terbuka, membawa monster ke dunia manusia. Dalam kekacauan itu, sistem bernama "Player" muncul, memberi kekuatan luar biasa kepada orang-orang terpilih. Karakter utama, yang sebelumnya hanyalah warga biasa, secara mengejutkan terbangun sebagai Player. Dengan kekuatan unik dan tekad untuk bertahan hidup, ia memulai petualangan brutal untuk naik level, melawan bos dungeon, dan mengungkap rahasia gelap di balik sistem Player itu sendiri.',
        'author' => 'PlayerX',
        'genre' => 'Aksi, Fantasi',
        'umur' => '15+',
        'jenis' => 'Manhwa',
        'cara' => 'Bawah ke Atas',
        'indonesia' => '-',
        'tags' => ['Action', 'Adventure', 'Comedy', 'Fantasy'],
        'chapters' => ['Chapter 01', 'Chapter 02']
    ],
    'eminence-in-shadow' => [
        'title' => 'The Eminence in Shadow',
        'img' => 'image/16.jpeg',
        'desc' => 'Manhwa/parodi isekai yang menyoroti protagonis yang ingin menjadi sosok bayangan kuat — meski semua halusinasi gilanya ternyata benar.',
        'sinopsis' => 'Seorang remaja biasa terobsesi menjadi ‘penguasa dalam bayangan’. Setelah mati dalam kecelakaan dan bereinkarnasi di dunia lain, ia membentuk organisasi fiktif bernama “Shadow Garden” untuk melawan kultus jahat. Tapi ternyata… kultus itu benar-benar ada. Tanpa ia sadari, kebohongannya menjadi kenyataan, dan ia pun terjebak dalam kisah besar sebagai sosok paling misterius dan menakutkan dalam dunia itu.',
        'author' => 'Aizawa Daisuke',
        'genre' => 'Aksi, Fantasi',
        'umur' => '15+',
        'jenis' => 'Manga',
        'cara' => 'Kanan ke Kiri',
        'indonesia' => '-',
        'tags' => ['Action', 'Adventure', 'Fantasy', 'Isekai'],
        'chapters' => ['Chapter 01', 'Chapter 02']
    ],
    'engineer' => [
        'title' => "The World's Best Engineer",
        'img' => 'image/3.jpeg',
        'desc' => 'Seorang insinyur dari dunia modern terlempar ke dunia fantasi dan mengubah peradaban dengan keahliannya.',
        'sinopsis' => 'Saat dunia lain memerlukan penyelamat, mereka tak mendatangkan ksatria, melainkan seorang insinyur jenius. Dengan pengetahuan modern dan kreativitas tanpa batas, ia mulai merevolusi dunia yang masih berada di era abad pertengahan. Dari pembangunan infrastruktur, senjata, hingga robot sihir, ia membuktikan bahwa teknik bisa menjadi kekuatan paling mematikan.',
        'author' => 'Yunha',
        'genre' => 'Isekai, Fantasi',
        'umur' => '15+',
        'jenis' => 'Manhwa',
        'cara' => 'Bawah ke Atas',
        'indonesia' => '-',
        'tags' => ['Action', 'Fantasy', 'Reincarnation'],
        'chapters' => ['Chapter 01', 'Chapter 02']
    ],
    'swordmasters-youngest-son' => [
        'title' => "Swordmaster's Youngest Son",
        'img' => "image/13.jpeg",
        'desc' => 'Putra bungsu keluarga pendekar bangkit kembali dengan kehidupan kedua dan membalas ketidakadilan yang pernah ia terima.',
        'sinopsis' => 'Jin Runcandel, anak bungsu dari keluarga pendekar terkuat, tumbuh tanpa bakat dan dihina seumur hidup. Setelah kematiannya, ia diberikan kesempatan kedua. Kini, dengan pengetahuan masa depan dan tekad membara, ia kembali ke masa lalu dan bersumpah untuk menjadi pendekar sejati, mengguncang dunia, dan menuntut balas pada mereka yang pernah menjatuhkannya.',
        'author' => 'Azul',
        'genre' => 'Aksi, Fantasi',
        'umur' => '15+',
        'jenis' => 'Manhwa',
        'cara' => 'Bawah ke Atas',
        'indonesia' => '-',
        'tags' => ['Action', 'Adventure', 'Fantasy'],
        'chapters' => ['Chapter 01', 'Chapter 02']
    ],
    'valkyrie' => [
        'title' => 'Shuumatsu no Valkyrie',
        'img' => 'image/12.jpeg',
        'desc' => 'Pertarungan epik antara dewa dan manusia diadakan untuk menentukan nasib umat manusia.',
        'sinopsis' => 'Dewan para dewa memutuskan untuk memusnahkan umat manusia. Namun, Valkyrie Brunhilde mengusulkan satu peluang terakhir: 13 pertarungan antara manusia terhebat sepanjang sejarah melawan dewa paling kuat. Jika manusia menang setidaknya 7 kali, umat manusia selamat. Laga demi laga mempertemukan tokoh seperti Adam, Lu Bu, Jack the Ripper dengan Thor, Zeus, dan Shiva dalam duel hidup dan mati yang spektakuler.',
        'author' => 'Takumi Fukui',
        'genre' => 'Aksi, Mitologi',
        'umur' => '17+',
        'jenis' => 'Manga',
        'cara' => 'Kanan ke Kiri',
        'indonesia' => '-',
        'tags' => ['Action', 'Drama', 'Fantasy'],
        'chapters' => ['Chapter 01', 'Chapter 02']
    ],
    'albus' => [
        'title' => 'Albus Changes the World',
        'img' => 'image/1.jpeg',
        'desc' => 'Seorang anak jenius mengubah dunia sihir yang stagnan dengan ilmu pengetahuan dan inovasi dari kehidupan sebelumnya.',
        'sinopsis' => 'Albus, seorang anak ajaib di dunia sihir, menyimpan ingatan dari kehidupan masa lalunya di dunia modern. Menyadari keterbatasan sistem sihir yang stagnan, ia mulai menggabungkan logika ilmiah dan teknologi dengan sihir. Inovasinya memicu revolusi besar yang mengubah cara dunia memandang kekuatan dan memicu konflik dengan mereka yang ingin mempertahankan status quo.',
        'author' => 'Unknown',
        'genre' => 'Fantasi',
        'umur' => '13+',
        'jenis' => 'Manhwa',
        'cara' => 'Bawah ke Atas',
        'indonesia' => '-',
        'tags' => ['Action', 'Adventure', 'Fantasy'],
        'chapters' => ['Chapter 01', 'Chapter 02']
    ],
    'novels-extra' => [
        'title' => "The Novel's Extra (Remake)",
        'img' => 'image/18.png',
        'desc' => 'Penulis yang terjebak dalam novel ciptaannya sebagai karakter figuran berjuang untuk mengubah jalan cerita dan bertahan hidup.',
        'sinopsis' => 'Seorang penulis terbangun dalam dunia novel yang ia tulis—bukan sebagai tokoh utama, tetapi hanya karakter sampingan yang tak penting. Dengan pemahaman mendalam tentang jalan cerita dan karakter, ia mencoba mengubah takdirnya dan memengaruhi arah dunia. Tapi dunia ini tak sepenuhnya sesuai dengan naskahnya, dan rahasia tersembunyi mulai terungkap satu per satu.',
        'author' => 'Jeongha',
        'genre' => 'Action',
        'umur' => '15+',
        'jenis' => 'Manhwa',
        'cara' => 'Bawah ke Atas',
        'indonesia' => '-',
        'tags' => ['Action'],
        'chapters' => ['Chapter 01', 'Chapter 02']
    ],
    'yozakura' => [
        'title' => "Mission: Yozakura Family",
        'img' => 'image/20.jpg',
        'desc' => 'Mission: Yozakura Family adalah manga aksi-komedi yang bercerita tentang Taiyo Asano, seorang siswa pemalu yang tanpa sengaja terlibat dengan keluarga mata-mata paling berbahaya di Jepang — keluarga Yozakura.',
        'sinopsis' => 'Taiyo Asano adalah siswa sekolah menengah yang sangat pemalu dan satu-satunya orang yang dapat dia ajak bicara adalah teman masa kecilnya, Mutsumi Yozakura. Ternyata Mutsumi adalah putri dari keluarga mata-mata terkuat! Lebih buruk lagi, Mutsumi diganggu oleh mimpi buruk kakaknya yang terlalu protektif, Kyoichiro. Langkah drastis apa yang harus dilakukan Taiyo untuk menyelamatkan Mutsumi ?! Komedi keluarga mata-mata – misinya dimulai!',
        'author' => 'Gondaira Hitsuji',
        'genre' => 'Action',
        'Comedy',
        'umur' => '15+',
        'jenis' => 'Manhwa',
        'cara' => 'Bawah ke Atas',
        'indonesia' => '-',
        'tags' => ['Action', 'Comedy'],
        'chapters' => ['Chapter 01', 'Chapter 02']
    ],
    'dandadan' => [
        'title' => "DANDADAN",
        'img' => 'image/22.jpg',
        'desc' => 'Dandadan: Aksi supernatural penuh komedi yang mengikuti dua remaja menghadapi alien dan roh setelah saling membuktikan keyakinan aneh mereka.',
        'sinopsis' => 'Ken Takakura, seorang anak laki-laki yang merupakan fanatik okultisme yang tidak percaya pada hantu, dan Momo Ayase, seorang gadis yang tidak percaya pada alien, menghadapi keanehan luar biasa yang melampaui saling pengertian mereka…! Sebuah cerita okultisme yang tidak biasa!',
        'author' => 'TATSU Yukinobu',
        'genre' => 'Comedy',
        'umur' => '15+',
        'jenis' => 'Manhwa',
        'cara' => 'Bawah ke Atas',
        'indonesia' => '-',
        'tags' => ['Comedy'],
        'chapters' => ['Chapter 01', 'Chapter 02']
    ],
    'A Breakthrough Brought by Forbidden Master and Disciple' => [
        'title' => "A Breakthrough Brought by Forbidden Master and Disciple",
        'img' => 'image/23.jpg',
        'desc' => 'A Breakthrough Brought by Forbidden Master and Disciple: Kisah mantan pahlawan yang dibuang, lalu bangkit kembali dengan kekuatan terlarang dari guru yang dianggap berbahaya.',
        'sinopsis' => 'Putra pahlawan dan hantu Raja Iblis adalah Master dan murid!? Eirth, putra pahlawan yang mengalahkan Raja Iblis Besar, bermasalah. Selalu diharapkan untuk mencapai hal-hal besar, tetapi tidak dapat memenuhi harapan itu. Tidak peduli usaha yang dia lakukan, dan hasil yang dia dapatkan, itu tidak pernah cukup bagi mereka. “Aku mengecewakan dibandingkan dengan ayahku” atau “Tidakkah kamu tahu kamu adalah putra pahlawan!!” Hidup setiap hari seperti ini, Eirth memenuhi takdirnya di ruangan yang berisi pedang ayahnya, sang pahlawan. “Menarik. Aku akan melatihmu. Aku hanya punya waktu luang sekarang.” Eirth menerima pelatihan pribadi khusus dari Raja Iblis hanya untuk mendapatkan kembali orang tuanya dan dunia. Dalam beberapa hari mendatang, orang tuanya, para pahlawan masa lalu, cinta pertamanya, teman masa kecil sang putri, para genius zaman itu, dan dunia akan gemetar di hadapannya.',
        'author' => 'ETOU Yona',
        'genre' => 'Action',
        'Comedy',
        'Adventure',
        'umur' => '15+',
        'jenis' => 'Manhwa',
        'cara' => 'Bawah ke Atas',
        'indonesia' => '-',
        'tags' => ['Action', 'Comedy', 'Adventure'],
        'chapters' => ['Chapter 01', 'Chapter 02']
    ],
    'grandblue' => [
        'title' => "Grand Blue",
        'img' => 'image/21.jpg',
        'desc' => 'Grand Blue: Komedi kampus tentang mahasiswa baru yang terjebak dalam kehidupan penuh pesta, alkohol, dan diving.',
        'sinopsis' => 'Kehidupan baru Kitahara Iori dimulai saat ia memulai karir kuliahnya di dekat lautan di kota Izu, penuh semangat untuk kehidupan barunya. Dia akan pindah ke toko selam Pamannya, “Grand Blue”. Di sana ia menemukan lautan yang indah, wanita cantik, dan pria yang suka menyelam dan alkohol. Akankah Iori bisa menjalani kehidupan kampus impiannya?',
        'author' => 'Gondaira Hitsuji',
        'genre' => 'Comedy',
        'Drama',
        'umur' => '15+',
        'jenis' => 'Manhwa',
        'cara' => 'Bawah ke Atas',
        'indonesia' => '-',
        'tags' => ['Comedy', 'Drama'],
        'chapters' => ['Chapter 01', 'Chapter 02']
    ],
    'undercover-professor' => [
        'title' => "Academy’s Undercover Professor",
        'img' => 'image/24.jpg',
        'desc' => 'Academy’s Undercover Professor: Seorang pria misterius menyamar sebagai profesor sihir dan menyembunyikan identitas aslinya di akademi elit.',
        'sinopsis' => 'Aku tidak dilahirkan kembali dengan bakat ataupun kemampuan, tetapi setidaknya pengetahuanku dari bumi memungkinkanku untuk tetap selangkah lebih maju di dunia lain ini. Sihir ada di sini, dan kemajuan baru dengan cepat dibuat dalam sains sementara perkembangan sihir tersendat karena tradisi. Menggunakan pengetahuan dari kehidupanku sebelumnya dan tidak terikat oleh pemikiran ortodok, aku dapat melakukan hal-hal yang bahkan tidak dapat dibayangkan oleh penyihir lain. Namun, secara tidak sengaja menjadi profesor yang menyamar untuk perkumpulan rahasia misterius di akademi Sören yang terkenal tidak pernah ada dalam daftar tugasku!',
        'author' => 'Sayren, Tana (II)',
        'genre' => 'Action',
        'Adventure',
        'Comedy',
        'umur' => '15+',
        'jenis' => 'Manhwa',
        'cara' => 'Bawah ke Atas',
        'indonesia' => '-',
        'tags' => ['Action', 'Adventure', 'Comedy'],
        'chapters' => ['Chapter 01', 'Chapter 02']
    ],
    'eleceed' => [
        'title' => "Eleceed",
        'img' => 'image/25.jpg',
        'desc' => 'Eleceed: Pemuda berhati baik dan kucing misterius bergabung untuk melawan organisasi jahat dengan kekuatan supernatural.',
        'sinopsis' => 'Kaiden – Pengguna kemampuan misterius yang bersembunyi di dalam tubuh kucing jalanan. Dia kemudian dijemput oleh Jiwoo setelah terluka setelah berkelahi dengan pengguna kemampuan lain. Ia memiliki kepribadian yang keras kepala dan suka memerintah. Jiwoo – anak SMA yang energik dan banyak bicara yang suka kucing. Ia sangat baik dan juga tampaknya memiliki kemampuan khusus.',
        'author' => 'Gondaira Hitsuji',
        'genre' => 'Comedy',
        'Drama',
        'umur' => '15+',
        'jenis' => 'Manhwa',
        'cara' => 'Bawah ke Atas',
        'indonesia' => '-',
        'tags' => ['Comedy', 'Drama'],
        'chapters' => ['Chapter 01', 'Chapter 02']
    ],
    'mount-hua' => [
        'title' => "Return Of The Mount Hua Sect",
        'img' => 'image/26.jpg',
        'desc' => 'Return of the Mount Hua Sect: Pendekar legendaris reinkarnasi ke masa depan untuk menghidupkan kembali sekte Mount Hua yang telah runtuh.',
        'sinopsis' => 'Chung Myung Murid ke-13 dari Mount hua sect, salah satu dari 3 swordsman terkuat, “Plum Blossom Sword Saint”, Mengalahkan Chun Ma, yang membawa kehancuran pada dunia ini. setelah pertarungan tersebut, ia menghembuskan nafas terakhirnya di atas gunung tempat mount hua sect berada. dia terlahir kembali 100 tahun kemudian di dalam tubuh seorang anak kecil. ” …Apa” ” Sekte Mount Hua telah hancur?” ” Omong kosong macam apa itu!!?”',
        'author' => 'Biga',
        'genre' => 'Action',
        'Adventure',
        'Comedy',
        'Drama',
        'umur' => '15+',
        'jenis' => 'Manhwa',
        'cara' => 'Bawah ke Atas',
        'indonesia' => '-',
        'tags' => ['Action', 'Adventure', 'Comedy', 'Drama'],
        'chapters' => ['Chapter 01', 'Chapter 02']
    ],
    'lightning-degree' => [
        'title' => "Lightning Degree",
        'img' => 'image/28.gif',
        'desc' => 'Lightning Degree: Anak yatim diasuh oleh sekte seni bela diri rahasia dan tumbuh menjadi pendekar kilat penuh tekad.',
        'sinopsis' => 'Ryu-Yeon kehilangan ayahnya karena penyakit ketika dia baru berusia 10 tahun. Dengan keterampilan yang dia pelajari dari ayahnya, dia bisa mengukir kayu menjadi patung yang sangat rumit. Suatu hari, setelah menyelesaikan pahatan orang tuanya, Ryu-Yeon disambut oleh seorang pria lanjut usia yang terkesan dengan pahatannya. Orang tua itu melihat janji pada Ryu-Yeon dan bertanya apakah dia ingin menjadi muridnya. Karena Ryu-Yeon tidak tahu harus kemana dan ingin memaksimalkan hidupnya, dia menerima tawaran lelaki tua itu.',
        'author' => 'Awin; Wuzhou',
        'genre' => 'Action',
        'Adventure',
        'Comedy',
        'Fantasy',
        'umur' => '15+',
        'jenis' => 'Manhwa',
        'cara' => 'Bawah ke Atas',
        'indonesia' => '-',
        'tags' => ['Action', 'Adventure', 'Comedy', 'Fantasy'],
        'chapters' => ['Chapter 01', 'Chapter 02']
    ],
    'regressed-duke-assassin' => [
        'title' => "The Regressed Son of a Duke is an Assassin",
        'img' => 'image/19.png',
        'desc' => 'The Regressed Son of a Duke is an Assassin: Putra bangsawan yang dikhianati kembali ke masa lalu dan menjadi pembunuh mematikan untuk membalas dendam.',
        'sinopsis' => 'Cyan Vert, assassin terkuat di benua menemui takdir yang memilukan setelah dikhianati orang yang paling ia percayai, saudaranya sendiri. “Andai aku diberi kesempatan… aku pasti akan menjalani kehidupan yang berbeda.” Aku pasti hanya akan mempercayai dan mencapai segala yang aku inginkan tanpa melayani siapa pun kecuali diriku sendiri. Begitulah aku mendapatan kesempatan kedua, Cyan Vert, bayangan yang hidup untuk melayani orang lain sudah tidak ada. Sekarang, aku akan mengukir sendiri jalanku demi diri sendiri.',
        'author' => '커피라임',
        'genre' => 'Action',
        'Adventure',
        'Fantasy',
        'umur' => '15+',
        'jenis' => 'Manhwa',
        'cara' => 'Bawah ke Atas',
        'indonesia' => '-',
        'tags' => ['Action', 'Adventure', 'Fantasy'],
        'chapters' => ['Chapter 01', 'Chapter 02']
    ]
];

$komik = $komikList[$slug] ?? null;
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $komik ? $komik['title'] : 'Komik tidak ditemukan' ?> - Okomik</title>
    <link rel="icon" type="image/png" href="image/6.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        .badge {
            margin-right: 5px;
        }

        .tab-content {
            padding-top: 15px;
        }

        img.cover-big {
            max-height: 400px;
            width: 100%;
            object-fit: cover;
        }

        .detail-table th {
            width: 40%;
        }

        .chapter-list {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .chapter-item {
            border-bottom: 1px solid #333;
            padding: 15px 20px;
            transition: background-color 0.2s ease;
        }

        .chapter-item:hover {
            background-color: #2a2a2a;
        }

        .chapter-title {
            font-size: 16px;
        }

        .chapter-date {
            font-size: 12px;
            color: #aaa;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
            padding: 20px;
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

    <div class="container py-5">
        <?php if ($komik): ?>
            <div class="mb-4">
                <img src="<?= htmlspecialchars($komik['img']) ?>" alt="<?= htmlspecialchars($komik['title']) ?>"
                    class="img-fluid cover-big mb-3">
                <h3>Komik <?= htmlspecialchars($komik['title']) ?></h3>
                <?php if (!empty($komik['indonesia']) && $komik['indonesia'] !== '-'): ?>
                    <p class="text-muted">[<?= htmlspecialchars($komik['indonesia']) ?>]</p>
                <?php endif; ?>
                <p><?= htmlspecialchars($komik['desc']) ?> <a href="index.php">Okomik</a></p>
            </div>

            <div>
                <h5>Sinopsis</h5>
                <p><?= htmlspecialchars($komik['sinopsis']) ?></p>
            </div>

            <div class="my-4">
                <div class="d-flex justify-content-start gap-2">
                    <a class="btn btn-outline-primary"
                        href="read.php?komik=<?= urlencode($slug) ?>&chapter=<?= urlencode($komik['chapters'][0]) ?>">Awal:
                        <?= $komik['chapters'][0] ?></a>
                    <a class="btn btn-outline-primary"
                        href="read.php?komik=<?= urlencode($slug) ?>&chapter=<?= urlencode(end($komik['chapters'])) ?>">Terbaru:
                        <?= end($komik['chapters']) ?></a>
                </div>
            </div>

            <div class="row mt-4 g-4">
                <div class="col-md-4">
                    <img src="<?= htmlspecialchars($komik['img']) ?>" alt="Cover" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-8">
                    <table class="table detail-table table-bordered">
                        <tr>
                            <th>Judul Komik</th>
                            <td><?= htmlspecialchars($komik['title']) ?></td>
                        </tr>
                        <tr>
                            <th>Judul Indonesia</th>
                            <td><?= htmlspecialchars($komik['indonesia']) ?></td>
                        </tr>
                        <tr>
                            <th>Jenis Komik</th>
                            <td><?= htmlspecialchars($komik['jenis']) ?></td>
                        </tr>
                        <tr>
                            <th>Konsep Cerita</th>
                            <td><?= htmlspecialchars($komik['genre']) ?></td>
                        </tr>
                        <tr>
                            <th>Pengarang</th>
                            <td><?= htmlspecialchars($komik['author']) ?></td>
                        </tr>
                        <tr>
                            <th>Umur Pembaca</th>
                            <td><?= htmlspecialchars($komik['umur']) ?></td>
                        </tr>
                        <tr>
                            <th>Cara Baca</th>
                            <td><?= htmlspecialchars($komik['cara']) ?></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="mt-3">
                <?php foreach ($komik['tags'] as $tag): ?>
                    <a href="genre.php?tag=<?= urlencode($tag) ?>" class="badge bg-secondary text-decoration-none">
                        #<?= htmlspecialchars($tag) ?>
                    </a>
                <?php endforeach; ?>
            </div>

            <ul class="nav nav-tabs mt-5" id="komikTab" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#chapter">Chapter</a></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#sinopsis">Sinopsis</a></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#mirip">Mirip</a></li>
            </ul>

            <div class="tab-content border p-3">
                <div class="tab-pane fade show active" id="chapter">
                    <ul class="chapter-list list-group">
                        <?php foreach ($komik['chapters'] as $ch): ?>
                            <li class="list-group-item chapter-item bg-white">
                                <a href="read.php?komik=<?= urlencode($slug) ?>&chapter=<?= urlencode($ch) ?>"
                                    class="chapter-link d-block text-dark text-decoration-none">
                                    <div class="chapter-title fw-bold"><?= htmlspecialchars($ch) ?></div>
                                    <div class="chapter-date text-muted small">Tanggal Rilis Tidak Ditentukan</div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="tab-pane fade" id="sinopsis">
                    <p><?= htmlspecialchars($komik['sinopsis']) ?></p>
                </div>
                <div class="tab-pane fade" id="mirip">
                    <p>Belum ada rekomendasi mirip.</p>
                </div>
            </div>
        <?php else: ?>
            <div class="text-center">
                <h2>Komik tidak ditemukan</h2>
                <a href="index.php" class="btn btn-danger">Kembali ke Beranda</a>
            </div>
        <?php endif; ?>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>