-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 05:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webmerch`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id_about` int(6) NOT NULL,
  `informasi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id_about`, `informasi`) VALUES
(1, 'HaulHallyu dibangun untuk memasarkan merchandise dan album K-pop. Dengan adanya HaulHallyu, diharapkan dapat menjadi wadah untuk para K-pop enthusiast melakukan jual-beli yang aman dan terpecaya. ');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_username` char(100) NOT NULL,
  `a_email` varchar(100) DEFAULT NULL,
  `a_nama` varchar(100) DEFAULT NULL,
  `a_password` varchar(100) DEFAULT NULL,
  `a_nohp` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_username`, `a_email`, `a_nama`, `a_password`, `a_nohp`) VALUES
('ninaa', 'ninaa@gmail.com', 'nina', '1111', '021930104');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `nama_art` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `imageart` varchar(100) NOT NULL,
  `isiart` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `nama_art`, `penulis`, `tanggal`, `imageart`, `isiart`) VALUES
(1, 'MV DALLA DALLA ITZY Tembus 300 Juta Views', 'Dita Angelina', '2022-06-12', 'itzydal.jpg', 'Allkpop melansir, Minggu (12/6/2022), video musik untuk single debut ITZY, \"DALLA DALLA\" melampaui 300 juta penayangan di YouTube dan menjadikannya sebagai video musik kedua ITZY yang mencapainya setelah video musik untuk single mereka \"WANNABE\". \"DALLA DALLA\" pertama kali rilis pada 12 Februari 2019 dan muncul sebagai judul lagu dari album single pertama mereka ITz Different. Itu tandanya, pencapaian ini dicapai dalam waktu 1.216 hari.\r\n\r\nSementara itu, video musik \"ICY\" dan \"MAFIA in the Morning\" berada di kisaran 200 juta penayangan. Di sisi lain \"Not Shy\" dan \"LOCO\" berada di kisaran 100 juta penayangan.\r\n\r\nITZY sendiri tengah bersiap untuk melangsungkan comeback dengan mini album terbaru bertajuk CHECKMATE yang dijadwalkan rilis pada 15 Juli 2022 mendatang. CHECKMATE menjadi comeback pertama ITZY dalam waktu 10 bulan setelah merilis album penuh pertama mereka yang bertajuk CRAZY IN LOVE pada September 2021 lalu.\r\n\r\nPada hari perilisan mini album terbarunya nanti, ITZY akan menyapa sekaligus berkomunikasi dengan para penggemar Korea dan luar negeri melalui Twitter Blueroom serta Mnet Comeback Special.\r\n\r\nSebelumnya, oada Senin (6/6/2022), melalui channel YouTube resmi JYP Entertainment, agensi merilis film konsep pertama bertajuk \"ITZY CHECKMATE CONCEPT FILM #1\". Video berdurasi 36 detik tersebut memperlihatkan keenam anggota dengan visual cantik mereka dengan tambahan latar belakang berwarna putih. Dengan kostum berwarna hitam dan putih, serta tambahan aksesoris dan riasan smoky yang menonjol, membuat para anggota ITZY terlihat mewah dan elegan. Mereka juga menunjukkan karisma yang kuat yang menandakan adanya konsep baru. \r\n\r\nSelain merilis album baru, girl group beranggotakan Lia, Yeji, Ryujin, Chaeryeong, dan Yuna ini juga akan menggelar tur dunia pertamanya pada bulan Agustus. Konser paling pertama akan dimulai di Seoul pada tanggal 6 dan 7 Agustus 2022. Selanjutnya, grup K-Pop ini akan menuju ke Amerika Serikat, di mana tur mereka akan berlanjut di delapan kota berbeda selama bulan Oktober dan November.\r\n\r\nAdapun untuk MIDZY (sebutan penggemar ITZY) yang berada di luar Amerika Serikat masih berharap karena JYP Entertainment memberi bocoran bahwa akan ada lebih banyak tanggal tur yang akan diumumkan beberapa waktu kemudian.\r\n\r\nSelamat untuk ITZY!'),
(2, 'Haru, Ternyata Ini Mimpi BamBam GOT7 yang Ingin Ia Wujudkan di Masa Depan', 'Fitri Suciati', '2022-06-10', 'got7bam.jpg', 'Haru, Ternyata Ini Mimpi BamBam GOT7 yang Ingin Ia Wujudkan di Masa Depan\r\n\r\nBamBam GOT7 ungkap punya satu mimpi yang ingin ia wujudkan di masa depan, hal tersebut sukses membuat banyak orang terharu saat mengetahuinya. \r\n\r\nMerangkum dari Koreaboo pada Jumat (10/6/2022), baru-baru ini BamBam GOT7 melakukan interview bersama majalah Arena Homme+, dalam interviewnya tersebut, BamBam mengungkapkan mempunyai satu mimpi yang ingin sekali ia wujudkan di masa depan.\r\n\r\nBamBam menggambar sebuah mindmap pikirannya, dengan membicarakan kejadian-kejadian mengesankan yang terjadi akhir-akhir ini, seperti comeback GOT7 sebagai grup utuh. \r\n\r\nKetika ia membahas bagian dari mindmap yang berisi sesuatu yang dekat dengannya, hal pertama yang BamBam sebutkan adalah kesehatan kucing peliharaannya. BamBam memang diketahui sebagai pencinta kucing. Jadi, tidak heran lagi jika ia sangat memperhatikan kesehatan kucing-kucing kesayangannya. \r\n\r\nHal lain yang juga sangat dekat di hati BamBam yaitu, tentu saja keluarganya. BamBam diketahui memiliki hubungan kekeluargaan yang kuat, sebagai bukti keluarga BamBam selalu mendukungnya dan juga member GOT7 dalam berbagai aktivitas. \r\n\r\nDalam foto yang diunggah di media sosial terlihat seluruh keluarga besar BamBam menghadiri konser GOT7 \"Home Coming\" yang baru saja diadakan beberapa waktu lalu. \r\n\r\nSelain itu, keluarga BamBam juga terlihat akrab dan dekat dengan member GOT7 yang lain. Bahkan, ibu BamBam berfoto bersama dengan Jackson Wang dengan Jackson terlihat memeluk ibu BamBam. \r\n\r\n\r\nNamun sayangnya, BamBam jarang sekali memiliki kesempatan untuk mengunjungi keluarganya, karena pekerjaannya di Korea Selatan. Oleh karena itu, salah satu mimpi yang ingin ia wujudkan di masa depan yaitu, kembali ke Thailand dan tinggal dengan seluruh anggota keluarganya. \r\n\r\nMenurut BamBam mereka bisa saling menjaga satu sama lain, \"Aku ingin menjaga mereka (keluarga) saat mereka sudah berumur tua,\" ungkap BamBam. \r\n\r\n\r\nBamBam berharap suatu hari nanti dia bisa membeli sebidang tanah dan membangun rumah di Thailand, dan tinggal bersama dengan seluruh anggota keluarganya. \r\n\r\nMelihat bagaimana kehidupan seorang K-Pop idol sangat melelahkan dan membebani pikiran, rasanya cukup bisa dimengerti mengapa BamBam mempunyai mimipi untuk kembali ke Thailand dan tinggal bersama seluruh keluarganya dengan bahagia. '),
(3, 'Stray Kids dan TXT Jadi Album Terbaik Tahun 2022 di Billboard, Fans Setuju!', 'Lintang Larissya', '2022-06-10', 'skz.png', 'Baru-baru ini Billboard merilis daftar 50 album terbaik pada tahun 2022 sejauh ini. Dari puluhan musisi yang terdaftar, terlihat dua artis K-Pop yang ikut nangkring di sana. Stray Kids dan TXT berhasil lolos masuk dalam kategori tersebut.\r\n\r\nDiwartakan kembali dari Koreaboo, Stray Kids berhasil membuat gelombang baru untuk dunia musik. Mereka dikenal sebagai idol yang memproduksi musiknya sendiri dengan genre yang unik.\r\n\r\nAlbum ODDINARY berhasil masuk ke Billboard dan mendapatkan gelar menjadi Album Terbaik 2022. Menurut Billboard, ini bahkan menjadi salah satu album yang terbaik tahun ini.\r\n\r\nODDINARY adalah album yang menggabungkan kata ‘aneh’ dan ‘biasa’ dan mengungkapkan ke semua orang dapat memiliki sisi ‘aneh’ pada diri mereka sendiri. Album ini juga pernah debut no 1 di chart Billboard 200.\r\n\r\nJ. Lipshutz dari Billboard berikan komentar tentang album Stray Kids, “ODDINARY memadukan pop hook, irama rap, dan tempo dance dengan cara yang akrab bagi K-Pop, tetapi setiap lagu mendarat dengan intensitas yang memukau, mulai dari slither elektronik dari beat ‘VENOM’ hingga vokal yang mendebarkan dari ‘FREEZE’,” dikutip dari Koreaboo pada Kamis (9/6/2022).\r\n\r\nGrup selanjutnya adalah TXT yang berhasil membuktikan bahwa mereka memiliki kekuatan yang harus dilihat oleh banyak orang. Minisode 2: Thursdays Child baru-baru ini dirilis berhasil meraih perhatian karena menyoroti bakat luar biasa mereka, sehingga dengan cepat menjual satu juta pertama bagi grup yang dinaungi label Big Hit itu.\r\n\r\nMinisode 2: Thursdays Child memamerkan kreativitas grup karena setiap anggota berkontribusi pada bagian dan memperlihatkan pertumbuhan mereka.\r\n\r\n\r\n\r\nJ. Lynch dari Billboard kembali memberikan pendapatnya terkait album TXT, album ini menampilkan berbagai genre. “‘Opening Sequence’ adalah balada alt-R&B yang moody, dengan nada sedih dan melow, adapula ‘Good Boy Gone Bad’ yang bergenre nu-metal, memberikan perbedaan dari lagu sakit hati menjadi lagu penuh dengan flex.”\r\n\r\nMendapatkan pengakuan dari platform musik internasional, fans setuju bahwa album Stray Kids dan TXT layak untuk membawa predikat tersebut. Bagaimana menurutmu?'),
(4, 'Lagu LOVE DIVE Milik IVE, Terpilih Best K-Pop and Albums Oleh Majalah Time', 'Malinda Dirganingsih', '2022-06-09', 'ivelovd.jpg', '\"LOVE DIVE\" milik IVE masuk kedalam daftar lagu dan album K-pop terbaik tahun 2022 versi majalah Time.\r\n\r\nMelansir dari KBIZoom pada Kamis (9/6/2022), Time, sebuah majalah mingguan Amerika, merilis artikel berjudul \"The Best K-pop Songs and Albums of 2022 So Far\" di situs resminya pada tanggal 7 Juni.  IVE memenangkan \"Best K-Pop and Albums\" dengan single kedua \"LOVE DIVE\" dan lagu utama dengan nama yang sama.\r\n\r\nMajalah Time memuji musik IVE dengan mengatakan, \"IVE memulai debutnya dengan merilis lagu \"ELEVEN\" tahun lalu, dan dengan merilis single terbaru mereka, grup tersebut dengan percaya diri menyatakan bahwa itu bukan keajaiban satu-hit.\"\r\n\r\nMenurut Majalah Time, \"LOVE DIVE\" memiliki nuansa dreamy dan elegan, dengan \"Woo lalalalalalala\" yang sejuk dan lembut. Siapa pun yang mendengarkan IVE  dapat dengan mudah jatuh cinta pada suara mereka saat mereka meminta Anda untuk menyelami cinta. Lagu ini juga lebih adiktif karena ada detail seperti beat drop singkat yang ditambahkan tepat sebelum chorus kedua dan lirik spunky \"You into me, me into you\" yang dinyanyikan oleh Rei.\r\n\r\nSementara itu, IVE menduduki posisi tangga lagu mingguan YouTube Music dengan \"LOVE DIVE\" dan juga menduduki peringkat No. 1 di tanggal lagu K-pop mingguan di platform musik terbesar di dunia Spotify. Selain itu, segara setelah dirilis, \"LOVE DIVE\" mencapai all kill di berbagai tangga lagu global seperti Apple Music dan Line Music di Jepang. Di YouTube Music, tidak hanya mempertahankan posisi teratas selama delapan minggu berturut-turut, tetapi juga menunjukkan potensi untuk naik lagi bahkan setelah promosi berakhir.\r\n\r\nIVE telah membuktikan popularitas besar mereka di Korea juga. \"LOVE DIVE\" telah mempertahankan peringkatnya di puncak situs streaming musik domestik utama seperti Melon, Bugs, dan Genie. Terlebih lagi setelah promosi selesai, bahkan tanpa kehadiran, IVE menerima tujuh kemenangan acara musik.\r\n\r\nIVE akan menunjukkan pesona baru di musim kedua melalui reality show mereka sendiri bertajuk \"1,2,3 IVE 2\", yang akan tayang perdana melalui saluran YouTube resmi grup tersebut pada tanggal 13 Juni, pukul 11:00 PM KST.');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id_contact` int(6) NOT NULL,
  `c_nama` varchar(25) NOT NULL,
  `c_address` text NOT NULL,
  `c_contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id_contact`, `c_nama`, `c_address`, `c_contact`) VALUES
(1, 'HaulHallyu ', 'Jl. Telekomunikasi No. 1  - Bojongsoang\r\nSukapura, Kec. Dayeuhkolot, \r\nKabupaten Bandung, \r\nJawa Barat \r\n40257', 'Email: customerservice@HaulHallyu.com\r\nPhone: (022) 7564108\r\nInstagram: HaulHallyu.id');

-- --------------------------------------------------------

--
-- Table structure for table `dilakukan`
--

CREATE TABLE `dilakukan` (
  `id_dilakukan` int(11) NOT NULL,
  `nama_p` varchar(100) DEFAULT NULL,
  `harga_p` int(100) DEFAULT NULL,
  `jumlah_p` int(100) DEFAULT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `u_username` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dilakukan`
--

INSERT INTO `dilakukan` (`id_dilakukan`, `nama_p`, `harga_p`, `jumlah_p`, `id_transaksi`, `id_produk`, `u_username`) VALUES
(1, 'Treasure 3RD Single Album The First Step  Chapter Three', 430000, 2, 1, 6, 'irenerhm'),
(2, 'YG Select Blackpink 1st Full Album THE ALBUM', 430000, 2, 2, 6, 'irenerhm'),
(3, 'Treasure 1st Mini Album The Second Step  Chapter One Photobook ver', 200000, 1, 3, 2, 'irenerhm'),
(4, 'YG Select Blackpink 1st Full Album THE ALBUM', 430000, 2, 3, 6, 'irenerhm'),
(5, 'YG SELECT Treasure 1st Mini Album The Second Step Chapter One Digipack Ver', 175000, 1, 4, 3, 'irenerhm'),
(6, 'Treasure 1st Mini Album The Second Step  Chapter One Photobook ver', 200000, 1, 5, 2, 'irenerhm'),
(7, 'YG SELECT Treasure 1st Mini Album The Second Step Chapter One Digipack Ver', 175000, 1, 5, 3, 'irenerhm'),
(8, 'Treasure 1st Mini Album The Second Step  Chapter One Photobook ver', 200000, 1, 6, 2, 'irenerhm'),
(9, 'YG SELECT Treasure 1st Mini Album The Second Step Chapter One Digipack Ver', 175000, 1, 6, 3, 'irenerhm'),
(10, 'YG Select Treasure 1st Album The First Step Treasure Effect Kit Album', 190000, 1, 6, 4, 'irenerhm'),
(11, 'YG Select Treasure 1st Album The First Step Treasure Effect', 310000, 1, 6, 5, 'irenerhm'),
(12, 'YG Select Treasure 1st Album The First Step Treasure Effect Kit Album', 190000, 1, 7, 4, 'irenerhm'),
(13, 'YG Select Treasure 1st Album The First Step Treasure Effect', 310000, 1, 7, 5, 'irenerhm'),
(14, 'YG Select Treasure 1st Album The First Step Treasure Effect Kit Album', 190000, 1, 8, 4, 'irenerhm'),
(15, 'YG Select Treasure 1st Album The First Step Treasure Effect Kit Album', 190000, 1, 9, 4, 'irenerhm'),
(16, 'YG Select Treasure 1st Album The First Step Treasure Effect Kit Album', 190000, 1, 10, 4, 'irenerhm'),
(17, 'YG Select Blackpink 1st Full Album THE ALBUM', 430000, 1, 10, 6, 'irenerhm'),
(18, 'YG Select Treasure 1st Album The First Step Treasure Effect', 310000, 2, 11, 5, 'irenerhm'),
(19, 'YG Select Blackpink 1st Full Album THE ALBUM', 430000, 3, 11, 6, 'irenerhm'),
(20, 'YG Select Treasure 1st Album The First Step Treasure Effect', 310000, 2, 12, 5, 'irenerhm'),
(21, 'YG Select Blackpink 1st Full Album THE ALBUM', 430000, 3, 12, 6, 'irenerhm');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kat` varchar(100) DEFAULT NULL,
  `k_flag` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kat`, `k_flag`) VALUES
(1, 'Album', 1),
(2, 'Lightstick', 1),
(3, 'Clothes', 1),
(4, 'Unofficial Merchandise', 1);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `qty` int(100) DEFAULT NULL,
  `c_flag` int(1) NOT NULL DEFAULT 1,
  `u_username` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_produk`, `nama_produk`, `qty`, `c_flag`, `u_username`) VALUES
(1, 2, 'Treasure 3RD Single Album The First Step  Chapter Three', 0, 0, 'irenerhm'),
(2, 3, 'Treasure 3RD Single Album The First Step  Chapter Three', 0, 0, 'irenerhm'),
(3, 5, 'Treasure 3RD Single Album The First Step  Chapter Three', 2, 0, 'irenerhm'),
(4, 6, 'Treasure 3RD Single Album The First Step  Chapter Three', 3, 0, 'irenerhm'),
(5, 1, 'Treasure 3RD Single Album The First Step  Chapter Three', 0, 0, 'irenerhm'),
(7, 1, 'Treasure 3RD Single Album The First Step  Chapter Three', 0, 0, 'irenerhm'),
(8, 3, 'Treasure 3RD Single Album The First Step  Chapter Three', 0, 0, 'irenerhm'),
(9, 5, 'Treasure 3RD Single Album The First Step  Chapter Three', 2, 0, 'irenerhm'),
(10, 2, 'Treasure 1st Mini Album The Second Step  Chapter One Photobook ver', 0, 0, 'irenerhm'),
(11, 6, 'Treasure 3RD Single Album The First Step  Chapter Three', 3, 0, 'irenerhm'),
(12, 1, 'Treasure 3RD Single Album The First Step  Chapter Three', 0, 0, 'rara'),
(13, 2, 'Treasure 3RD Single Album The First Step  Chapter Three', 0, 0, 'rara'),
(14, 3, 'Treasure 3RD Single Album The First Step  Chapter Three', 0, 0, 'rara'),
(16, 3, 'Treasure 3RD Single Album The First Step  Chapter Three', 0, 0, 'irenerhm'),
(17, 2, 'Treasure 3RD Single Album The First Step  Chapter Three', 0, 0, 'irenerhm'),
(18, 3, 'Treasure 3RD Single Album The First Step  Chapter Three', 0, 0, 'irenerhm'),
(19, 2, 'Treasure 3RD Single Album The First Step  Chapter Three', 0, 0, 'irenerhm'),
(20, 5, 'Treasure 3RD Single Album The First Step  Chapter Three', 2, 0, 'irenerhm'),
(21, 4, 'Treasure 3RD Single Album The First Step  Chapter Three', 0, 0, 'irenerhm'),
(22, 5, 'Treasure 3RD Single Album The First Step  Chapter Three', 2, 0, 'irenerhm'),
(23, 6, 'Treasure 3RD Single Album The First Step  Chapter Three', 3, 0, 'irenerhm'),
(24, 6, 'Treasure 3RD Single Album The First Step  Chapter Three', 3, 1, 'irenerhm'),
(25, 3, 'Treasure 3RD Single Album The First Step  Chapter Three', 0, 0, 'irenerhm'),
(26, 1, 'Treasure 3RD Single Album The First Step  Chapter Three', 0, 0, 'irenerhm'),
(27, 5, 'Treasure 3RD Single Album The First Step  Chapter Three', 2, 1, 'irenerhm');

-- --------------------------------------------------------

--
-- Table structure for table `mereply`
--

CREATE TABLE `mereply` (
  `id_reply` int(11) NOT NULL,
  `isi_r` text DEFAULT NULL,
  `rep_flag` int(1) DEFAULT NULL,
  `s_username` char(100) DEFAULT NULL,
  `id_review` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mereview`
--

CREATE TABLE `mereview` (
  `id_review` int(11) NOT NULL,
  `nilai` int(100) DEFAULT NULL,
  `isi` varchar(100) DEFAULT NULL,
  `r_flag` int(1) DEFAULT 1,
  `id_produk` int(11) DEFAULT NULL,
  `u_username` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mereview`
--

INSERT INTO `mereview` (`id_review`, `nilai`, `isi`, `r_flag`, `id_produk`, `u_username`) VALUES
(1, 5, 'Bagus', 1, 6, 'irenerhm'),
(2, 5, 'Bagus banget', 1, 6, 'irenerhm'),
(3, 5, 'Bagus', 1, 6, 'irenerhm');

-- --------------------------------------------------------

--
-- Table structure for table `metode_bayar`
--

CREATE TABLE `metode_bayar` (
  `id_metode` int(11) NOT NULL,
  `nama_metode` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `m_flag` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `metode_bayar`
--

INSERT INTO `metode_bayar` (`id_metode`, `nama_metode`, `keterangan`, `m_flag`) VALUES
(1, 'Transfer Bank Mandiri', 'Bank Mandiri (008)', NULL),
(2, 'Transfer Bank BCA', 'Bank BCA (014)', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `daerah` char(100) DEFAULT NULL,
  `tarif` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `daerah`, `tarif`) VALUES
(1, 'Jabodetabek', 20000),
(2, 'Luar Jabodetabek', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` int(11) NOT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `jml_bayar` int(100) DEFAULT NULL,
  `status_bayar` varchar(100) DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `id_metode` int(11) DEFAULT NULL,
  `id_transaksi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_bayar`, `tgl_bayar`, `jml_bayar`, `status_bayar`, `bukti_bayar`, `id_metode`, `id_transaksi`) VALUES
(1, '2022-06-12', 880000, 'Pembayaran Terkonfirmasi', 'imgbukti.1.jpg', 2, 1),
(2, '2022-06-12', 880000, 'Pembayaran Terkonfirmasi', 'imgbukti.2.jpg', 2, 2),
(3, NULL, 1080000, NULL, NULL, 1, 3),
(4, '2022-06-12', 205000, 'Menunggu Konfirmasi', 'imgbukti.4.jpg', 1, 4),
(5, NULL, 405000, NULL, NULL, 1, 5),
(6, '2022-06-13', 895000, 'Menunggu Konfirmasi', 'imgbukti.6.jpg', 1, 6),
(7, NULL, 520000, NULL, NULL, 1, 7),
(8, '2022-06-13', 210000, 'Pembayaran Terkonfirmasi', 'imgbukti.8.jpg', 2, 8),
(9, '2022-06-13', 220000, 'Menunggu Konfirmasi', 'imgbukti.9.jpg', 2, 9),
(10, '2022-06-13', 320000, 'Pembayaran Terkonfirmasi', 'imgbukti.10.jpg', 1, 10),
(11, NULL, 970000, NULL, NULL, 1, 11),
(12, NULL, 965000, NULL, NULL, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `nama_ekspedisi` varchar(100) DEFAULT NULL,
  `status_peng` varchar(100) DEFAULT NULL,
  `alamatpeng` varchar(100) DEFAULT NULL,
  `tgl_peng` date DEFAULT NULL,
  `buktipeng` varchar(100) DEFAULT NULL,
  `id_bayar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id_pengiriman`, `nama_ekspedisi`, `status_peng`, `alamatpeng`, `tgl_peng`, `buktipeng`, `id_bayar`) VALUES
(1, 'JNT', 'Pesanan Dikirim', 'jl.ayam no.10 jakarta selatan', '2022-06-12', '47629738', 1),
(2, 'JNT', 'Pesanan Dikirim', 'jl.ayam no.10 jakarta selatan', '2022-06-12', '47629738', 2),
(3, 'SiCepat', 'Belum Dikirim', 'jl.ayam no.10 jakarta selatan', NULL, NULL, 3),
(4, 'JNT', 'Belum Dikirim', 'jl.ayam no.10 jakarta selatan', NULL, NULL, 4),
(5, 'JNT', 'Belum Dikirim', 'jl.ayam no.10 jakarta selatan', NULL, NULL, 5),
(6, 'JNE', 'Belum Dikirim', 'jl.ayam no.10 jakarta selatan', NULL, NULL, 6),
(7, 'SiCepat', 'Belum Dikirim', 'jl.ayam no.10 jakarta selatan', NULL, NULL, 7),
(8, 'JNT', 'Pesanan Dikirim', 'jl.ayam no.10 jakarta selatan', '2022-06-15', '1136420703', 8),
(9, 'JNT', 'Belum Dikirim', 'jl.ayam no.10 jakarta selatan', NULL, NULL, 9),
(10, 'JNT', 'Belum Dikirim', 'jl.ayam no.10 jakarta selatan', NULL, NULL, 10),
(11, 'JNT', 'Belum Dikirim', 'jl.ayam no.10 jakarta selatan', NULL, NULL, 11),
(12, 'JNT', 'Belum Dikirim', 'jl.ayam no.10 jakarta selatan', NULL, NULL, 12);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `berat` int(100) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `pembayaran` varchar(100) DEFAULT NULL,
  `p_flag` int(1) DEFAULT 1,
  `id_kategori` int(11) DEFAULT NULL,
  `s_username` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `berat`, `stok`, `harga`, `image`, `status`, `pembayaran`, `p_flag`, `id_kategori`, `s_username`) VALUES
(1, 'Treasure 3RD Single Album The First Step  Chapter Three', 'HARDCOVER PHOTOBOOK (150 pages) 1 DISC RANDOM PHOTOCARD : 2 of 24 RANDOM SELFIE PHOTOCARD : 1 of 12 RANDOM HOLOGRAPHY POSTCARD : 1 of 12 OPTICAL BOOKMARK : 1 pcs AMBLUM STICKER : 1 pcs', 2, 15, 310000, 'jual.Treasure 3RD Single Album The First Step  Chapter Three.jpg', 'PO', 'DP ', 1, 1, 'nana'),
(2, 'Treasure 1st Mini Album The Second Step  Chapter One Photobook ver', 'SIZE: 157×217×13 (weight 400 G)  Contents: CD + PHOTOBOOK (150p) + SLEEVE + RANDOM PHOTOCARD (1 of 13) + RANDOM SELFIE PHOTOCARD (2 of 24) + RANDOM POSTCARD (1 of 12) + STICKER (1ea)', 1, 16, 200000, 'jual.Treasure 1st Mini Album The Second Step  Chapter One Photobook ver.jpg', 'PO', 'DP', 1, 1, 'nana'),
(3, 'YG SELECT Treasure 1st Mini Album The Second Step Chapter One Digipack Ver', 'SIZE: 150×150×6 (weight 400 G) Contents: CD + DIGIPACK + BOOKLET (16p) + FOLDED POSTER (1ea) + RANDOM SELFIE PHOTOCARD (1 of 4)', 1, 8, 175000, 'jual.YG SELECT Treasure 1st Mini Album The Second Step Chapter One Digipack Ver.jpeg', 'PO', 'DP', 1, 1, 'nana'),
(4, 'YG Select Treasure 1st Album The First Step Treasure Effect Kit Album', 'Product Specification: Size(mm): 105*105*37 Weight(g): 400  Contents: Package Box + Random Unit AIR KiT (1 of 4) + Title Card (1ea) + Lyrics Postcard Set + Random Strap Keyring (1 of 12)', 1, 10, 190000, 'jual.YG Select Treasure 1st Album The First Step Treasure Effect Kit Album.jpeg', 'Ready Stoc', 'DP', 1, 1, 'nana'),
(5, 'YG Select Treasure 1st Album The First Step Treasure Effect', 'Product Specification: Size(mm): 215*155*32 Weight(g): 700  Contents: - Package Box + CD + Photo Book (156p) + Random Photo Card File Holder 1 of 12 + Random hologram postcard 1 of 12 + Random selfie photo card 1 of 12 + Random unit Polaroid 1 of 4 + baby photo card 1 of 12 + random photo card + random photo of 12 seconds ARRE card (FAS) card', 3, 7, 310000, 'jual.YG Select Treasure 1st Album The First Step Treasure Effect.jpeg', 'Ready Stoc', 'Full Payment', 1, 1, 'nana'),
(6, 'YG Select Blackpink 1st Full Album THE ALBUM', '[Content] - Packaging + CD + Hardcover Photo Book (96p) + Postcard Set (4 ea.) + Credit Sheet (2p) + Lyric Book (14p) + Photo Card (2 Out of 20 Shipped at Random) + Postcard (2 Out of 20 Shipped at Random) + Sticker (1 Out of 4 Shipped at Random) + Mounted Photo Card (1 ea.)  * The randomly shipped credits sheet, lyric book, mounted photo card, photo card, postcard, sticker do not vary by version. * The content may slightly vary due to the production process. ', 1, -1, 430000, 'jual.YG Select Blackpink 1st Full Album THE ALBUM.jpeg', 'PO', 'DP', 1, 1, 'nana');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `s_username` char(100) NOT NULL,
  `s_nama` varchar(100) DEFAULT NULL,
  `s_email` varchar(100) DEFAULT NULL,
  `s_password` varchar(100) DEFAULT NULL,
  `s_alamat` text DEFAULT NULL,
  `s_nohp` char(14) DEFAULT NULL,
  `s_namabank` varchar(100) DEFAULT NULL,
  `s_norek` varchar(100) DEFAULT NULL,
  `s_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`s_username`, `s_nama`, `s_email`, `s_password`, `s_alamat`, `s_nohp`, `s_namabank`, `s_norek`, `s_image`) VALUES
('nana', 'nana komat', 'nana@gmail.com', '1111', 'jakarta', '0812163987', 'mandiri', '2179387189', NULL),
('sifaa', 'sifa store', 'sifa@gmail.com', '$2y$10$JoVe8iy9V61NjNdrGXv6OuTXd4MYllnpVdIeGysioJDgYot7tVAWG', 'Jakarta Selatan', '0887982198', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `total_trans` int(100) DEFAULT NULL,
  `status_trans` varchar(100) DEFAULT NULL,
  `tarif` int(100) DEFAULT NULL,
  `jenispem` varchar(100) NOT NULL,
  `u_username` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tgl_transaksi`, `total_trans`, `status_trans`, `tarif`, `jenispem`, `u_username`) VALUES
(1, '2022-06-12', 880000, 'Pesanan Selesai', 20000, 'Full Payment', 'irenerhm'),
(2, '2022-06-12', 880000, 'Pesanan Diterima', 20000, 'Full Payment', 'irenerhm'),
(3, '2022-06-12', 1080000, 'Pesanan Dibatalkan', 20000, 'Full Payment', 'irenerhm'),
(4, '2022-06-12', 205000, 'Menunggu Konfirmasi', 30000, 'Full Payment', 'irenerhm'),
(5, '2022-06-12', 405000, 'Pesanan Dibatalkan', 30000, 'Full Payment', 'irenerhm'),
(6, '2022-06-12', 895000, 'Menunggu Konfirmasi', 20000, 'Full Payment', 'irenerhm'),
(7, '2022-06-12', 520000, 'Menunggu Pembayaran', 20000, 'Full Payment', 'irenerhm'),
(8, '2022-06-12', 210000, 'Pesanan Dikirim', 20000, 'Full Payment', 'irenerhm'),
(9, '2022-06-13', 220000, 'Menunggu Konfirmasi Pelunasan', 30000, 'DP', 'irenerhm'),
(10, '2022-06-13', 640000, 'Menunggu Pengiriman', 20000, 'DP', 'irenerhm'),
(11, '2022-06-13', 1940000, 'Menunggu Pembayaran', 30000, 'Full Payment', 'irenerhm'),
(12, '2022-06-16', 1930000, 'Menunggu Pembayaran', 20000, 'DP', 'irenerhm');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_username` char(100) NOT NULL,
  `u_nama` varchar(100) DEFAULT NULL,
  `u_email` varchar(100) DEFAULT NULL,
  `u_password` varchar(100) DEFAULT NULL,
  `u_alamat` text DEFAULT NULL,
  `u_nohp` char(14) DEFAULT NULL,
  `u_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_username`, `u_nama`, `u_email`, `u_password`, `u_alamat`, `u_nohp`, `u_image`) VALUES
('irenee', 'irene', 'irenr@gmail.com', '$2y$10$FGjYbkx6s3f9cAORBUF65.EIzk/KQCbDo6RNHE8GE44WRDbd58/OK', 'Jakarta utara', '08230183732', NULL),
('irenerhm', 'ainaa putri', 'irenerhm@gmail.com', '$2y$10$UJtzwjLtfslEpMWNVbDPq.Q.mtw94rXOB3YnMnISxAfzz7Mep7wOa', 'jl.ayam no.10 jakarta selatan', '0812716837', NULL),
('ninaa', 'nina', 'nina@gmail.com', '$2y$10$xY.VNPrvZ7bgo5faksPESu0xKA2hQyYMd9aGSTHh9EpBcHLxj.XSi', 'Jakarta Barat', '08023978621', NULL),
('rara', 'raraa', 'rara13@gmail.com', '$2y$10$7hzrHGbiglmHuuapqpO1quQkIX5vSvdgsxISrEgmpY9WgkBtnBTPC', 'jakarta barat', '08921729101', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id_wishlist` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `qty` varchar(100) DEFAULT NULL,
  `w_flag` int(1) DEFAULT 1,
  `u_username` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id_wishlist`, `id_produk`, `nama_produk`, `qty`, `w_flag`, `u_username`) VALUES
(1, 2, 'Treasure 3RD Single Album The First Step  Chapter Three', 'Produk Tersedia', 0, 'irenerhm'),
(2, 3, 'Treasure 3RD Single Album The First Step  Chapter Three', 'Produk Tersedia', 0, 'irenerhm'),
(3, 1, 'Treasure 3RD Single Album The First Step  Chapter Three', 'Produk Tersedia', 0, 'irenerhm'),
(4, 6, 'Treasure 3RD Single Album The First Step  Chapter Three', 'Produk Tersedia', 0, 'irenerhm'),
(5, 1, 'Treasure 3RD Single Album The First Step  Chapter Three', 'Produk Tersedia', 0, 'irenerhm'),
(6, 2, 'Treasure 3RD Single Album The First Step  Chapter Three', 'Produk Tersedia', 0, 'irenerhm'),
(7, 1, 'Treasure 3RD Single Album The First Step  Chapter Three', 'Produk Tersedia', 0, 'irenerhm'),
(8, 2, 'Treasure 3RD Single Album The First Step  Chapter Three', 'Produk Tersedia', 1, 'irenerhm'),
(9, 3, 'Treasure 3RD Single Album The First Step  Chapter Three', 'Produk Tersedia', 1, 'rara'),
(10, 6, 'Treasure 3RD Single Album The First Step  Chapter Three', 'Produk Tersedia', 1, 'rara'),
(11, 3, 'Treasure 3RD Single Album The First Step  Chapter Three', 'Produk Tersedia', 1, 'irenerhm'),
(12, 6, 'Treasure 3RD Single Album The First Step  Chapter Three', 'Produk Tersedia', 1, 'irenerhm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_username`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `dilakukan`
--
ALTER TABLE `dilakukan`
  ADD PRIMARY KEY (`id_dilakukan`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `u_username` (`u_username`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `u_username` (`u_username`);

--
-- Indexes for table `mereply`
--
ALTER TABLE `mereply`
  ADD PRIMARY KEY (`id_reply`),
  ADD KEY `s_username` (`s_username`),
  ADD KEY `id_review` (`id_review`);

--
-- Indexes for table `mereview`
--
ALTER TABLE `mereview`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `u_username` (`u_username`);

--
-- Indexes for table `metode_bayar`
--
ALTER TABLE `metode_bayar`
  ADD PRIMARY KEY (`id_metode`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_metode` (`id_metode`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`),
  ADD KEY `id_bayar` (`id_bayar`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `s_username` (`s_username`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`s_username`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `u_username` (`u_username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_username`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id_wishlist`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `u_username` (`u_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id_about` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id_contact` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dilakukan`
--
ALTER TABLE `dilakukan`
  MODIFY `id_dilakukan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `mereply`
--
ALTER TABLE `mereply`
  MODIFY `id_reply` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mereview`
--
ALTER TABLE `mereview`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `metode_bayar`
--
ALTER TABLE `metode_bayar`
  MODIFY `id_metode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id_wishlist` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dilakukan`
--
ALTER TABLE `dilakukan`
  ADD CONSTRAINT `dilakukan_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`),
  ADD CONSTRAINT `dilakukan_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `dilakukan_ibfk_3` FOREIGN KEY (`u_username`) REFERENCES `user` (`u_username`);

--
-- Constraints for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`u_username`) REFERENCES `user` (`u_username`);

--
-- Constraints for table `mereply`
--
ALTER TABLE `mereply`
  ADD CONSTRAINT `mereply_ibfk_1` FOREIGN KEY (`s_username`) REFERENCES `seller` (`s_username`),
  ADD CONSTRAINT `mereply_ibfk_2` FOREIGN KEY (`id_review`) REFERENCES `mereview` (`id_review`);

--
-- Constraints for table `mereview`
--
ALTER TABLE `mereview`
  ADD CONSTRAINT `mereview_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `mereview_ibfk_2` FOREIGN KEY (`u_username`) REFERENCES `user` (`u_username`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`),
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_metode`) REFERENCES `metode_bayar` (`id_metode`);

--
-- Constraints for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `pengiriman_ibfk_1` FOREIGN KEY (`id_bayar`) REFERENCES `pembayaran` (`id_bayar`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`s_username`) REFERENCES `seller` (`s_username`),
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`u_username`) REFERENCES `user` (`u_username`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`u_username`) REFERENCES `user` (`u_username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
