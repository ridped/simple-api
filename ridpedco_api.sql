-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 07, 2022 at 06:09 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ridpedco_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `type` varchar(40) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `deskripsi`, `type`, `tanggal`) VALUES
(1, 'Masih dalam perkembangan. tetapi bisa sambil di gunakan. APIWaY always be free!', 'info', '2022-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `quote` mediumtext NOT NULL,
  `jadwal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `quote`, `jadwal`) VALUES
(4, 'Batu fondasi untuk sukses yang seimbang adalah kejujuran, watak, integritas, iman, cinta dan kesetiaan.', '2022-06-21 10:26:20'),
(5, 'Saat sadar bahwa kau tidak kekurangan suatu apa pun, seisi dunia menjadi milikku.', '2022-06-21 11:27:08'),
(6, 'Ingatlah, jika Anda menutup mulut sebenarnya Anda telah melakukan pilihan.', '2022-06-21 12:28:08'),
(7, 'Ketika Anda bertambah tua, Anda akan menemukan satu-satunya hal yang Anda sesali adalah hal-hal yang tidak Anda lakukan.', '2022-06-21 13:29:11'),
(8, 'Agar bisa menjadi cukup cerdas untuk meraih semua uang yang diinginkan, kita harus cukup bodoh untuk menginginkannya.', '2022-06-21 14:30:10'),
(9, 'Cemas dan ketakutan adalah akibat kebodohan dan keraguan.', '2022-06-21 15:31:10'),
(10, 'Tidak ada jaminan keberhasilan, tetapi tidak berusaha adalah jaminan kegagalan.', '2022-06-21 16:32:20'),
(11, '', '2022-06-21 17:33:07'),
(12, 'Terima tanggung jawab untuk diri Anda sendiri. Sadari bahwa hanya Anda sendiri, bukan orang lain, yang bisa membuat Anda pergi ke tempat yang Anda inginkan.', '2022-06-21 18:34:05'),
(13, 'Jadilah diri Anda sendiri. Siapa lagi yang bisa melakukannya lebih baik ketimbang diri Anda sendiri?.', '2022-06-21 19:35:06'),
(14, 'Saat sadar bahwa kau tidak kekurangan suatu apa pun, seisi dunia menjadi milikmu.', '2022-06-21 20:36:04'),
(15, 'Jika rumput tetangga lebih hijau, bersyukurlah Anda masih bisa berpijak di tanah untuk melihatnya.', '2022-06-21 21:37:04'),
(16, 'Kita adalah apa yang kita kerjakan berulang kali. Dengan demikian, kecemerlangan bukan tindakan, tetapi kebiasaan.', '2022-06-21 22:38:04'),
(17, 'Kita tidak harus hebat saat memulai, tapi kita harus memulai untuk menjadi hebat.', '2022-06-21 23:39:05'),
(18, 'Jika kamu ingin pergi cepat, pergilah sendiri. Jika kamu ingin pergi jauh, pergilah bersama-sama.', '2022-06-22 00:40:05'),
(19, 'Kehidupan orang-orang besar mengingatkan kita bahwa kita bisa membuat kehidupan kita luhur.', '2022-06-22 01:41:04'),
(20, 'Kemenangan gemilang tidak diperoleh dari medan pertempuran saja, tetapi sering diperoleh dari hati.', '2022-06-22 03:30:06'),
(21, 'Apabila seseorang mengajarkan sesuatu, dia sendiri harus melaksanakan ajaran itu.', '2022-06-22 04:31:04'),
(22, 'Kebencian seperti halnya cinta, berkobar karena hal-hal kecil.', '2022-06-22 05:32:05'),
(23, 'Perbuatan-perbuatan salah adalah biasa bagi manusia, tetapi perbuatan pura-pura itulah sebenarnya yang menimbulkan permusuhan dan pengkhianatan.', '2022-06-22 06:46:07'),
(24, 'Hampir semua pria memang mampu bertahan menghadapi kesulitan. Namun, jika Anda ingin menguji karakter sejati pria, beri dia kekuasaan.', '2022-06-22 07:47:07'),
(25, 'Satu-satunya sukses yang diraih sebelum bekerja hanyalah ada di kamus saja.', '2022-06-22 08:48:09'),
(26, 'Jangan meremehkan raja yang picik, seperti halnya jangan meremehkan sungai yang kecil.', '2022-06-22 09:49:04'),
(27, 'Orang yang mencari masalah akan selalu mendapatkannya.', '2022-06-22 10:50:07'),
(28, 'Ia yang bijak akan merasa malu, jika kata-katanya lebih baik daripada tindakannya.', '2022-06-22 11:51:11'),
(29, 'Apabila perjalanan menjadi sulit, orang ulet akan berjalan terus.', '2022-06-22 12:52:08'),
(30, 'Untuk menangani diri Anda sendiri, gunakan kepala Anda. Untuk menangani orang lain, gunakan hati Anda.', '2022-06-22 13:53:08'),
(31, 'Tak ada waktu yang tidak tepat untuk melakukan sesuatu yang benar.', '2022-06-22 14:54:10'),
(32, 'Hidup berarti berjuang. Hidup nikmat tanpa badai topan adalah laksana laut yang mati.', '2022-06-22 15:55:08'),
(33, 'Jika tidak ada perdamaian, hal itu disebabkan kita telah lupa bahwa kita saling membutuhkan.', '2022-06-22 16:56:14'),
(34, 'Motivasi adalah api dari dalam. Jika orang lain mencoba menyalakannya untuk Anda, kemungkinan apinya hanya menyala sebentar.', '2022-06-22 17:57:07'),
(35, 'Melihat pohon, saya jadi mengerti tentang kesabaran. Memandang rumput, saya jadi menghargai ketekunan.', '2022-06-22 18:58:04'),
(36, 'Baik, lebih baik, terbaik. Jangan pernah berhenti sampai baik menjadi lebih baik, dan lebih baik menjadi terbaik.', '2022-06-22 19:59:05'),
(37, 'Anda berhenti tertawa bukan karena bertambah tua. Sebaliknya Anda bertambah tua justru karena berhenti tertawa.', '2022-06-22 21:00:06'),
(38, 'Orang yang berbudi tinggi selalu berpedoman pada keadilan dan selalu berusaha menjalankan kewajiban.', '2022-06-22 22:01:08'),
(39, 'Rahmat sering datang kepada kita dalam bentuk kesakitan, kehilangan dan kekecewaan; tetapi kalau kita sabar, kita segera akan melihat bentuk aslinya.', '2022-06-22 23:04:10'),
(40, 'Jika Anda termasuk orang yang senang menunggu datangnya peluang, Anda adalah bagian dari manusia pada umumnya.', '2022-06-23 00:05:15'),
(41, 'Jangan membeda-bedakan pekerjaan mana yang baik dan mana yang buruk. Masalah muncul jika kita membeda-bedakan dan memihak sesuatu.', '2022-06-23 01:06:12'),
(42, 'Aku menghabiskan usia 30-an untuk memperbaiki segala kesalahanku di usia 20-an.', '2022-06-23 02:07:06'),
(43, 'Sukses akan lebih permanen jika Anda meraihnya tanpa menghancurkan prinsip-prinsip Anda.', '2022-06-23 03:08:08'),
(44, 'Kebanggaan kita yang terbesar bukan karena tidak pernah gagal, tetapi bangkit kembali setiap kita jatuh.', '2022-06-23 04:09:06'),
(45, 'Keterampilan dan keyakinan merupakan pasukan bersenjata yang tidak dapat dikalahkan.', '2022-06-23 05:10:08'),
(46, 'Saya bangga, baik pada hal yang tidak kami lakukan maupun pada hal yang kami lakukan.', '2022-06-23 06:15:08'),
(47, 'Persoalan-persoalan adalah harga yang harus Anda bayar untuk kemajuan.', '2022-06-23 07:16:08'),
(48, 'Jika tindakan-tindakan Anda mengilhami orang lain untuk bermimpi lebih, belajar lebih, bekerja lebih, dan menjadi lebih baik, Anda adalah seorang pemimpin.', '2022-06-23 08:17:08'),
(49, 'Konsumen yang paling tidak puas adalah sumber berharga untuk belajar.', '2022-06-23 09:18:07'),
(50, 'kita jatuh untuk bangun, berhenti untuk berjalan, dan tidur untuk bangun.', '2022-06-23 10:19:06'),
(51, 'Untuk membayangkan hal yang tak dapat dibayangkan, dibutuhkan imajinasi yang luar biasa.', '2022-06-23 11:20:09'),
(52, 'Persaingan yang tujuannya hanya untuk bersaing, untuk mengalahkan orang lain, tak pernah mendatangkan banyak manfaat.', '2022-06-23 12:21:07'),
(53, 'Berani menegakkan keadilan, walaupun mengenai diri sendiri, adalah puncak segala keberanian.', '2022-06-23 13:22:07'),
(54, 'Kerendahan hati merupakan ruang tunggu bagi kesempurnaan.', '2022-06-23 14:23:07'),
(55, 'Caci maki dari seorang penjahat merupakan kehormatan bagi seorang yang jujur.', '2022-06-23 15:24:05'),
(56, 'Kesempatan Anda untuk sukses di setiap kondisi selalu dapat diukur oleh seberapa besar kepercayaan Anda pada diri sendiri.', '2022-06-23 16:26:06'),
(57, 'Masalahnya bukan kurangnya tenaga, tetapi kurangnya daya kemauan.', '2022-06-23 17:27:07'),
(58, 'Beranilah menyadari kesalahan dan mulai lagi.', '2022-06-23 18:28:07'),
(59, 'Kebahagiaan terletak pada kemenangan memerangi hawa nafsu dan menahan keinginan yang berlebih-lebihan.', '2022-06-23 19:29:08'),
(60, 'Orang bijak berbicara karena ia memiliki sesuatu untuk dikatakan. Orang bodoh berbicara karena ia atau dia harus mengatakan sesuatu.', '2022-06-23 20:32:06'),
(61, 'Bila kamu jujur kepada dirimu sendiri, bagai siang pasti berganti malam, kamu takkan pernah berdusta kepada orang lain.', '2022-06-23 21:33:07'),
(62, 'Jangan pernah mencoba menjadikan putra atau putri Anda menjadi seperti Anda. Diri Anda hanya cukup satu saja.', '2022-06-23 22:34:06'),
(63, 'Kesedihan hanya bisa ditanggulangi oleh orang yang mengalaminya sendiri.', '2022-06-23 23:35:09'),
(64, 'Kepengecutan yang paling besar adalah ketika kita membuktikan kekuatan kita kepada kelemanan orang lain.', '2022-06-24 00:36:05'),
(65, 'Optimisme yang tidak disertai dengan usaha hanya merupakan pemikiran semata yang tidak menghasilkan buah.', '2022-06-24 01:37:07'),
(66, 'Anda harus waspada dengan kesenangan. Pastikan bahwa Anda menikmatinya dan bukan dikendalikannya.', '2022-06-24 02:38:06'),
(67, 'Anda dilahirkan orisinal, jadi tidak perlu setengah mati meniru orang lain.', '2022-06-24 03:39:09'),
(68, 'Masalah akan datang cepat atau lambat. Jika masalah datang, sambut dengan sebaik mungkin. Semakin ramah Anda menyapanya, semakin cepat ia pergi.', '2022-06-24 04:40:07'),
(69, 'Cinta tak perlu pengorbanan. Pada saat kau merasa berkorban, pada saat itu cintamu mulai pudar.', '2022-06-24 05:41:07'),
(70, 'Sahabat terbaik dan musuh terburuk kita adalah pikiran-pikiran kita. Pikiran dapat lebih baik dari seorang dokter atau seorang bankir atau seorang teman kepercayaan. Juga dapat lebih berbahaya dadi penjahat.', '2022-06-24 06:42:08'),
(71, 'Buatlah usaha Anda berhasil dengan satu-satunya cara: kerja keras!.', '2022-06-24 07:43:05'),
(72, 'Bila Anda ingin dicintai, cintailah dan bersikaplah sebagai orang yang patut dicintai.', '2022-06-24 08:44:08'),
(73, 'Pergilah sejauh Anda bisa memandang, dan ketika Anda tiba disana, Anda akan memandang lebih jauh.', '2022-06-24 09:45:10'),
(74, 'Kesengsaraan menghasilkan ketekunan. Ketekunan menghasilkan watak, dan watak menghasilkan harapan.', '2022-06-24 10:46:09'),
(75, 'Kita berdoa kalau kesusahan dan membutuhkan sesuatu, mestinya kita juga berdoa dalam kegembiraan besar dan saat rezeki melimpah.', '2022-06-24 11:48:04'),
(76, 'Terbuka untuk Anda, begitulah Tuhan memberi kita jalan untuk berusaha. Jangan pernah berfikir jalan sudah tertutup.', '2022-06-24 12:49:08'),
(77, 'Raihlah ilmu dan untuk meraih ilmu belajarlah untuk tenang dan sabar.', '2022-06-24 13:50:08'),
(78, 'Jauh lebih mudah memulai secara baik daripada mengakhiri secara baik.', '2022-06-24 14:51:05'),
(79, 'Seberapa jauh Anda gagal, tidak masalah, tetapi yang penting seberapa sering Anda bangkit kembali.', '2022-06-24 15:52:08'),
(80, 'Cinta bukan saling menatap mata, namun melihat ke arah yang sama bersama-sama.', '2022-06-24 16:53:05'),
(81, 'Kutu yang berani adalah kutu yang bisa berani mendapatkan sarapannya pada bibir seekor singa.', '2022-06-24 17:54:11'),
(82, 'Hanya aku yang bisa merubah hidupku, tak ada seorang pun yang dapat melakukannya untukku.', '2022-06-24 18:55:10'),
(83, 'Memperbaiki diri kita adalah memperbaiki dunia.', '2022-06-24 19:56:12'),
(84, 'Tidak cukup hanya punya otak yang baik. Yang penting adalah menggunakannya secara baik.', '2022-06-24 20:57:10'),
(85, 'Hidup ini benar-benar sederhana, tapi kita malah bersikeras membuatnya menjadi rumit.', '2022-06-24 21:58:10'),
(86, 'Sahabat yang jujur lebih besar harganya daripada harta benda yang diwarisi dari nenek moyang.', '2022-06-24 22:59:37'),
(87, 'Senyuman akan membuat kaya jiwa seseorang yang menerimanya, tanpa membuat miskin seseorang yang memberikannya.', '2022-06-25 00:00:10'),
(88, 'Bila seseorang kehilangan segala sumber kebahagiaan, dia tidak lagi hidup, tapi mayat yang bernafas.', '2022-06-25 01:01:08'),
(89, 'Hawa nafsu membawa kesesatan dan tidak berpedoman. Sementara akal menjadi pedoman menuju keutamaan. Hawa nafsu menyuruhmu berangan-angan, tetapi akal menyuruhmu menimbang.', '2022-06-25 02:02:07'),
(90, 'Kehilangan kekayaan masih dapat dicari kembali, kehilangan kepercayaan sulit didapatkan kembali.', '2022-06-25 03:03:07'),
(91, 'Idealis adalah orang yang membantu orang lain untuk makmur.', '2022-06-25 04:04:07'),
(92, 'Perbedaan masa lalu, sekarang, dan masa depan tak lebih dari ilusi yang keras kepala.', '2022-06-25 05:05:06'),
(93, 'Kita menyambung hidup dengan apa yang kita peroleh, tapi kita menghadirkan kehidupkan dengan apa yang kita berikan.', '2022-06-25 06:06:08'),
(94, 'Orang yang tersenyum selalu lebih kuat dari orang yang marah.', '2022-06-25 07:07:06'),
(95, 'Sedikit orang kaya yang memiliki harta. Kebanyakan harta yang memiliki mereka.', '2022-06-25 08:09:06'),
(96, 'Kebaikan adalah satu-satunya investasi yang tidak akan merugikan.', '2022-06-25 09:10:11'),
(97, 'Bila tekad seseorang kuat dan teguh, Tuhan akan bergabung dalam usahanya.', '2022-06-25 10:11:06'),
(98, 'Orang jarang sukses kecuali jika mereka senang dengan apa yang dikerjakannya.', '2022-06-25 11:14:06'),
(99, 'Langkah pertama untuk memilih keyakinan pada diri sendiri adalah mengenal diri kita sendiri.', '2022-06-25 12:15:07'),
(100, 'Rumput yang paling kuat tumbuhnya terdapat di atas tanah yang paling keras.', '2022-06-25 13:16:05'),
(101, 'Beranikan diri untuk menjadi dirimu sendiri, karena kita bisa melakukan hal itu lebih baik daripada orang lain.', '2022-06-25 14:17:06'),
(102, 'Jika Anda mengadili orang lain, Anda tak punya waktu untuk mencintai mereka.', '2022-06-25 15:20:07'),
(103, 'Contoh yang baik adalah nasihat terbaik.', '2022-06-25 16:21:09'),
(104, 'Percaya bahwa hidup itu berharga, dan kepercayaan Anda akan membantu menciptakan hidup yang berharga.', '2022-06-25 17:24:05'),
(105, 'Saya lebih baik kehilangan mahkota daripada melakukan tindakan yang menurut saya memalukan.', '2022-06-25 18:28:08'),
(106, 'Kebaikan adalah bahasa yang dapat didengar si tuli dan bisa dilihat si buta.', '2022-06-25 19:29:07'),
(107, 'Hati yang penuh syukur, bukan saja merupakan kebajikan terbesar, melainkan juga induk dari segala kebajikan yang lain.', '2022-06-25 20:30:07'),
(108, 'Perbaiki diri Anda, tetapi jangan jatuhkan orang lain.', '2022-06-25 21:31:05'),
(109, 'Berusaha untuk tidak menjadi manusia yang berhasil tapi berusahalah menjadi manusia yang berguna.', '2022-06-25 22:34:04'),
(110, 'Anda tidak dapat melakukan banyak hal di hidup Anda, jika Anda hanya bekerja di hari-hari yang Anda rasakan baik.', '2022-06-25 23:41:05'),
(111, 'Pendidikan adalah senjata paling ampuh dimana kau dapat menggunakannya untuk merubah dunia.', '2022-06-26 00:46:06'),
(112, 'Kehidupan yang hebat adalah kulminasi dari pemikiran-pemikiran hebat disertai dengan tindakan-tindakan hebat.', '2022-06-26 01:47:08'),
(113, 'Aku tidak tahu kunci sukses itu apa, tapi kunci menuju kegagalan adalah mencoba membuat semua orang senang.', '2022-06-26 02:48:08'),
(114, 'Penghargaan tertinggi untuk kerja keras seseorang bukanlah apa yang ia hasilkan, tapi bagaimana ia berkembang karenanya.', '2022-06-26 03:50:07'),
(115, 'Rahasia menuju hidup kaya adalah mempunyai lebih banyak awal ketimbang akhir.', '2022-06-26 04:51:08'),
(116, 'Semua pengetahuan yang kumiliki bisa orang lain peroleh, tapi hatiku hanyalah untuk diriku sendiri.', '2022-06-26 05:52:08'),
(117, 'Satu-satunya yang bisa menghalangi kita adalah keyakinan yang salah dan sikap yang negatif.', '2022-06-26 06:56:08'),
(118, 'Jika Anda tak bisa mengatakan hal yang benar dari diri Anda, maka Anda pun tak bisa mengatakan hal yang benar dari orang lain.', '2022-06-26 07:57:10'),
(119, 'Orang yang memindahkan gunung memulai dengan memindahkan batu-batu kecil.', '2022-06-26 08:59:04'),
(120, 'Penundaan adalah kuburan dimana peluang dikuburkan.', '2022-06-26 10:01:07'),
(121, 'Saya akan pergi kemanapun selama itu arahnya ke depan.', '2022-06-26 11:02:08'),
(122, 'Mulai sekarang kita tidak usah membuang-buang waktu barang semenit pun untuk memikirkan orang-orang yang tidak kita sukai.', '2022-06-26 12:03:07'),
(123, 'Kesulitan apapun tidak tahan terhadap keuletan dan ketekunan. Tanpa keuletan, orang yang paling pintar dan paling berbakat sering gagal dalam hidupnya.', '2022-06-26 13:05:05'),
(124, 'Belas kasihanlah terhadap sesama, bersikap keraslah terhadap diri sendiri.', '2022-06-26 14:10:06'),
(125, 'Saya menangis karena tak punya sepatu, sampai saya melihat orang tak punya kaki.', '2022-06-26 15:12:10'),
(126, 'Dimanapun engkau berada selalulah menjadi yang terbaik dan berikan yang terbaik dari yang bisa kita berikan.', '2022-06-26 16:13:09'),
(127, 'Cara tercepat untuk menuntaskan banyak hal adalah dengan menyelesaikannya satu demi satu.', '2022-06-26 17:15:06'),
(128, 'Kebahagian tertinggi dalam kehidupan adalah kepastian bahwa Anda dicintai apa adanya, atau lebih tepatnya dicintai walaupun Anda seperti diri Anda adanya.', '2022-06-26 18:18:06'),
(129, 'Orang yang tak pernah mencicipi pahit tak akan tahu apa itu manis.', '2022-06-26 19:19:07'),
(130, 'Kebahagiaan tergantung pada apa yang dapat Anda berikan, bukan pada apa yang Anda peroleh.', '2022-06-26 20:22:05'),
(131, 'Kita tidak boleh kehilangan semangat. Semangat adalah stimulan terkuat untuk mencintai, berkreasi dan berkeinginan untuk hidup lebih lama.', '2022-06-26 21:24:04'),
(132, 'Kuatir sama seperti membayar bunga untuk uang yang mungkin tak pernah Anda pinjam.', '2022-06-26 22:31:06'),
(133, 'Saya belajar banyak dari kekalahan. Dan kekalahan-kekalahan itu, membuat saya semakin tabah.', '2022-06-26 23:33:05'),
(134, 'Lakukan apa yang dapat Anda lakukan dengan apa yang Anda miliki dan tempat Anda berada.', '2022-06-27 00:37:06'),
(135, 'Anda belum bisa dibilang kaya sampai Anda memiliki sesuatu yang tidak dapat dibeli uang.', '2022-06-27 01:40:05'),
(136, 'Mereka yang berjiwa lemah tak akan mampu memberi seuntai maaf tulus. Pemaaf sejati hanya melekat bagi mereka yang berjiwa tangguh.', '2022-06-27 02:42:05'),
(137, 'Hidup adalah 10 persen yang terjadi kepada Anda, 90 persen bagaimana cara Anda menyikapinya.', '2022-06-27 03:43:07'),
(138, 'Alasan mengapa kecemasan membunuh lebih banyak orang dibanding kerja adalah, lebih banyak orang cemas dibanding bekerja.', '2022-06-27 04:44:05'),
(139, 'Kebanyakan orang sukses yang saya kenal bukan orang yang sibuk, mereka orang yang focus.', '2022-06-27 05:46:04'),
(140, 'Seseorang itu sukses besar jika dia sadar, kegagalan-kegagalannya adalah persiapan untuk kemenangan-kemenangannya.', '2022-06-27 06:47:07'),
(141, 'Cinta sejati tidak datang kepadamu, tetapi harus datang dari dalam dirimu.', '2022-06-27 07:48:09'),
(142, 'Usahakan membentuk suatu hubungan \"kawat\" antara otak dan hati Anda.', '2022-06-27 08:49:09'),
(143, 'Pepatah adalah kalimat singkat berdasarkan pengalaman panjang.', '2022-06-27 09:50:07'),
(144, 'Harta benda tak membuat seseorang menjadi kaya raya, mereka hanya membuatnya lebih sibuk.', '2022-06-27 10:53:06'),
(145, 'Bila saya mendengar, saya akan lupa. Setelah melihat saya bisa mengerti. Dan setelah mengerjakan, barulah saya bisa memahami.', '2022-06-27 11:57:07'),
(146, 'Ketika kita berhenti membuat kontribusi, kita mulai mati.', '2022-06-27 13:02:04'),
(147, 'Satu-satunya cara untuk mengubah hidup kita adalah dengan mengubah pikiran kita.', '2022-06-27 14:04:07'),
(148, 'Aku tak bisa merubah arah angin, tapi aku bisa menyesuaikan layarku untuk tetap bisa mencapai tujuanku.', '2022-06-27 15:06:07'),
(149, 'Kematangan bukanlah suatu keadaan yang dicapai dengan usia. Dia merupakan perkembangan dari cinta, belajar, membaca dan berpikir hingga menghasilkan kemampuan.', '2022-06-27 16:08:06'),
(150, 'Kita bekerja harus tanpa pamrih. Itu berlaku untuk segala pekerjaan. Pengabdian tanpa syarat adalah yang terbaik.', '2022-06-27 17:09:06'),
(151, 'Yang bisa bertahan hidup bukan spesies yang paling kuat. Bukan juga spesies yang paling cerdas. Tapi spesies yang paling responsif terhadap perubahan.', '2022-06-27 18:12:05'),
(152, 'Hati manusia tidak akan pernah tenteram sebelum berdamai dengan diri sendiri.', '2022-06-27 19:14:06'),
(153, 'Lebih baik mengerti sedikit daripada salah mengerti.', '2022-06-27 20:16:06'),
(154, 'Hati yang penuh syukur, bukan saja merupakan kebajikan terbesar, melainkan induk dari segala kebajikan yang lain.', '2022-06-27 21:17:07'),
(155, 'Tahukah Anda rahasia sukses saya dalam mencapai tujuan? Cuma keuletan, tak lebih dan tak kurang.', '2022-06-27 22:22:05'),
(156, 'Sebenarnya semua kesulitan merupakan kesempatan bagi jiwa yang tumbuh.', '2022-06-27 23:23:07'),
(157, 'Kita tak bisa melakukan apapun untuk mengubah masa lalu. Tapi apapun yang kita lakukan bisa mengubah masa depan.', '2022-06-28 00:26:05'),
(158, 'Cara untuk memulai adalah berhenti berbicara dan mulai lakukan sesuatu.', '2022-06-28 08:31:08'),
(159, 'Kita terbiasa menyembunyikan diri dari orang lain, sampai akhirnya kita sendiri tersembunyi dari diri kita.', '2022-06-28 09:33:05'),
(160, 'Bahagialah orang yang dapat menjadi tuan untuk dirinya, menjadi kusir untuk nafsunya dan menjadi kapten untuk bahtera hidupnya.', '2022-06-28 10:34:08'),
(161, 'Jangan menjadi pohon kaku yang mudah patah. Jadilah bambu yang mampu bertahan melengkung melawan terpaan angin.', '2022-06-28 11:37:04'),
(162, 'Ambisi seperti air laut, semakin banyak orang meminumnya semakin orang menjadi haus.', '2022-06-28 12:41:04'),
(163, 'Jangan menangis karena kegagalan cinta, sebab manusia akan meninggalkan semua yang dicintainya.', '2022-06-28 13:48:04'),
(164, 'Kita tidak akan belajar berani dan sabar jika di dunia ini hanya ada kegembiraan.', '2022-06-28 14:49:06'),
(165, 'Burung yang terbang pagi akan memperoleh cacing paling banyak.', '2022-06-28 15:51:05'),
(166, 'Manusia akan bahagia selama ia memilih untuk bahagia.', '2022-06-28 16:52:05'),
(167, 'Guru yang biasa-biasa, berbicara. Guru yang bagus, menerangkan. Guru yang hebat, mendemonstrasikan. Guru yang agung, memberi inspirasi.', '2022-06-28 17:53:07'),
(168, 'Tak ada rahasia untuk menggapai sukses. Sukses itu dapat terjadi karena persiapan, kerja keras dan mau belajar dari kegagalan.', '2022-06-28 18:59:04'),
(169, 'Benar jadi berani.', '2022-06-28 20:05:06'),
(170, 'Kamu harus menghadapi depresi, sama seperti kamu menghadapi seekor harimau.', '2022-06-28 21:09:04'),
(171, 'Cara paling baik untuk menggerakkan diri Anda ialah memberi tugas kepada diri sendiri.', '2022-06-28 22:11:04'),
(172, 'Saya berpikir, karena itu saya ada.', '2022-06-28 23:13:05'),
(173, 'Sebatang anak panah mudah dipatahkan, tetapi tidak demikian dengan sepuluh anak panah yang disatukan.', '2022-06-29 00:14:05'),
(174, 'Jangan menunggu keadaan yang ideal. Jangan juga menunggu peluang-peluang terbaik. Keduanya tak akan pernah datang.', '2022-06-29 01:16:06'),
(175, 'Jika Anda harus membuat pilihan dan Anda tidak melakukannya, itu saja sudah pilihan.', '2022-06-29 02:17:04'),
(176, 'Saya tidak pernah melihat suatu monumen didirikan bagi orang pesimis.', '2022-06-29 03:19:05'),
(177, 'Orang yang tidak bisa memaafkan orang lain sama saja dengan orang yang memutuskan jembatan yang harus dilaluinya, karena semua orang perlu dimaafkan.', '2022-06-29 04:20:09'),
(178, 'Kebebasan itu berasal dari manusia, tidak dari undang-undang atau institusi.', '2022-06-29 05:22:05'),
(179, 'Ketekunan bisa membuat yang tidak mungkin jadi mungkin, membuat kemungkinan jadi kemungkinan besar, dan kemungkinan besar menjadi pasti.', '2022-06-29 06:24:03'),
(180, 'Harapan tak pernah meninggalkan kita, kita yang meninggalkan harapan.', '2022-06-29 07:27:06'),
(181, 'Pergilah sejauh mungkin yang bisa Anda lihat dan Anda akan bisa melihat lebih jauh.', '2022-06-29 08:30:06'),
(182, 'Apa yang Anda lihat adalah apa yang Anda capai.', '2022-06-29 09:44:05'),
(183, 'Janganlah menyebut orang tidak bahagia sebelum dia mati. Jangan menilai pekerjaan seseorang sebelum pekerjaannya berakhir.', '2022-06-29 10:45:08'),
(184, 'Bekerja keras sekarang, merasakannya nanti. Bermalas-malas sekarang, merasakan akibatnya nanti.', '2022-06-29 11:48:03'),
(185, 'Orang yang bertanya, bodoh dalam 5 menit. Dan orang yang tidak bertanya akan tetap bodoh untuk selamanya.', '2022-06-29 12:51:04'),
(186, 'Sebuah meja, sebuah kursi, semangkuk buah, dan sebuah biola; apa lagi yang dibutuhkan agar seseorang bisa merasa bahagia?.', '2022-06-29 13:55:06'),
(187, 'Lebih baik diasingkan daripada menyerah kepada kemunafikan.', '2022-06-29 14:56:06'),
(188, 'Kita semua hidup di bawah langit yang sama, tetapi tidak semua orang punya cakrawala yang sama.', '2022-06-29 15:57:07'),
(189, 'Kebanyakan orang gagal meraih cita-citanya bukan karena mereka tidak mampu, tetapi karena tidak berkomitmen.', '2022-06-29 16:59:04'),
(190, 'Mengenal diri sendiri adalah awal dari perbaikan diri.', '2022-06-29 18:01:05'),
(191, 'Bunga yang tidak akan pernah layu dibumi adalah kebajikan.', '2022-06-29 19:04:05'),
(192, 'Satu-satunya cara agar kita memperoleh kasih sayang, adalah jangan menuntut agar kita dicintai, tetapi mulailah memberi kasih sayang kepada orang lain tanpa mengharapkan balasan.', '2022-06-29 20:08:05'),
(193, 'Kesalahan terbesar yang dibuat manusia dalam kehidupannya adalah terus-menerus merasa takut bahwa mereka akan melakukan kesalahan.', '2022-06-29 21:09:07'),
(194, 'Mental yang lemah lebih parah dari fisik yang lemah.', '2022-06-29 22:13:04'),
(195, 'Perubahan terjadi ketika seseorang menjadi dirinya sendiri, bukan ketika ia mencoba menjadi orang lain.', '2022-06-29 23:16:04'),
(196, 'Meski yang kita hadapi adalah jalan buntu, namun cinta akan membangun jalan layang di atasnya.', '2022-06-30 00:17:10'),
(197, 'Kendatipun Anda berada di jalur yang tepat, Anda akan tetap terkejar jika hanya duduk-duduk saja disana.', '2022-06-30 01:21:05'),
(198, 'Tanyakan pada diri sendiri rahasia sukses. Dengarkan jawaban Anda, dan lakukan.', '2022-06-30 02:26:05'),
(199, 'Anda tidak perlu harus berhasil pada kali pertama.', '2022-06-30 03:28:04'),
(200, 'Kita harus yakin bahwa apa yang ditentukan oleh Tuhan untuk kita, itulah yang terbaik.', '2022-06-30 04:29:05'),
(201, 'Jangan lihat masa lalu dengan penyesalan, jangan pula lihat masa depan dengan ketakutan, tapi lihatlah sekitar Anda dengan penuh kesadaran.', '2022-06-30 05:30:05'),
(202, 'Tetapkan apa yang Anda inginkan. Putuskan Anda ingin menukarnya dengan apa. Tentukan prioritas dan laksanakan.', '2022-06-30 06:36:06'),
(203, 'Saya yakin, ujian pertama bagi orang besar ialah kerendahan hati.', '2022-06-30 07:37:05'),
(204, 'Dua jalan dipisahkan pohon, dan saya mengambil jalan yang jarang ditempuh orang. Dan itulah yang membuat perubahan.', '2022-06-30 08:38:06'),
(205, 'Carilah uang secukupnya saja untuk membiayai kehidupan, agar dapat menyisihkan waktu dan tenaga untuk melatih spiritual.', '2022-06-30 09:39:05'),
(206, 'Kesalahaan terbesar yang mungkin Anda buat adalah mempercayai bahwa Anda bekerja untuk orang lain.', '2022-06-30 10:42:06'),
(207, 'Jika Anda mempekerjakan orang-orang yang lebih pintar dari Anda, Anda membuktikan Anda lebih pintar dari mereka.', '2022-06-30 11:43:05'),
(208, 'Orang yang terlalu banyak merenung akan meraih sedikit.', '2022-06-30 12:44:07'),
(209, 'Menyaksikan adalah mempercayai, tapi merasakan adalah kebenaran.', '2022-06-30 13:47:05'),
(210, 'Hidup itu seperti sebuah sepeda, agar tetap seimbang kita harus tetap bergerak.', '2022-06-30 14:52:05'),
(211, 'Semakin lama kita hidup, semakin kita menemukan bahwa kita mirip dengan orang lain.', '2022-06-30 15:53:06'),
(212, 'Ketika kekuatan akan cinta melebihi kecintaan akan kekuasaan, maka dunia pun menemukan kedamaian.', '2022-06-30 16:55:05'),
(213, 'Berpikir itu adalah pekerjaan yang berat di antara segala jenis pekerjaan. Itulah sebabnya sedikit sekali orang yang senang melakukannya.', '2022-06-30 17:56:07'),
(214, 'Selalu baik untuk memaafkan, tapi yang paling baik adalah melupakan sebuah kesalahan.', '2022-06-30 18:58:04'),
(215, 'Satu ons aksi jauh lebih berharga daripada satu ton teori.', '2022-06-30 20:02:06'),
(216, 'Dua hal yang harus dilupakan, kebaikan yang telah kita lakukan kepada orang lain dan kesalahan orang lain kepada kita.', '2022-06-30 21:03:07'),
(217, 'Kemajuan adalah hasil dari memusatkan seluruh kekuatan jiwa dan pikiran pada cita-cita yang dituju.', '2022-06-30 22:04:05'),
(218, 'Orang-orang kreatif termotivasi oleh keinginan untuk maju, bukan oleh keinginan untuk mengalahkan orang lain.', '2022-06-30 23:17:04'),
(219, 'Kadang kala, justru keputusan kecil yang akan mampu merubah hidup kita selamanya.', '2022-07-01 00:18:07'),
(220, 'Jika Anda bisa membuat orang lain tertawa, maka Anda akan mendapatkan semua cinta yang Anda inginkan.', '2022-07-01 01:21:09'),
(221, 'Persoalan-persoalan adalah harga yang Anda bayar untuk kemajuan.', '2022-07-01 02:23:06'),
(222, 'Jika Anda ingin menjadi orang besar, janganlah suka beromong besar, kerjakanlah hal-hal yang kecil dahulu.', '2022-07-01 03:28:04'),
(223, 'Lakukan apa yang Anda senangi, uang akan mengikuti.', '2022-07-01 04:31:05'),
(224, 'Saya tidak berharap menjadi segalanya bagi setiap orang. Saya hanya ingin menjadi sesuatu untuk seseorang.', '2022-07-01 05:35:06'),
(225, 'Bukanlah yang kuat, tetapi yang uletlah yang menjadikan mereka manusia yang besar.', '2022-07-01 06:41:06'),
(226, 'Kebenaran yang tidak dimengerti akan menjadi kesalahan.', '2022-07-01 07:45:06'),
(227, 'Kecantikan yang abadi terletak pada keelokan adab dan ketinggian ilmu seseorang, bukan terletak pada wajah dan pakaiannya.', '2022-07-01 08:57:06'),
(228, 'Seorang intelektual tidak akan pernah mengatakan lebih daripada apa yang diketahuinya.', '2022-07-01 10:07:06'),
(229, 'Apabila sempurna akal seseorang, maka sedikit perkataannya.', '2022-07-01 11:10:05'),
(230, 'Jangan gunakan orang-orang untuk membangun pekerjaan besar, gunakan pekerjaan Anda untuk membangun orang-orang besar.', '2022-07-01 12:11:07'),
(231, 'Kebahagiaan bukanlah memiliki apa yang kita inginkan, melainkan menginginkan apa yang kita miliki.', '2022-07-01 13:18:04'),
(232, 'Penderitaan adalah pelajaran.', '2022-07-01 14:20:06'),
(233, 'Kita harus menemukan kekuatan cinta dalam diri kita terlebih dahulu, barulah kita dapat benar-benar mencintai orang lain.', '2022-07-01 15:26:08'),
(234, 'Visi tanpa aksi adalah mimpi di siang bolong. Aksi tanpa visi adalah mimpi buruk.', '2022-07-01 16:30:12'),
(235, 'Jangan sering menyalakan api kebencian terhadap musuhmu, karena nanti akan membakar dirimu sendiri.', '2022-07-01 17:36:05'),
(236, 'Perubahan yang paling bermakna dalam hidup adalah perubahan sikap. Sikap yang benar akan menghasilkan tindakan yang benar.', '2022-07-01 18:37:08'),
(237, 'Percayalah kepada orang lain, dan mereka akan tulus kepada Anda. Perlakukan mereka seperti orang besar dan mereka akan memperlihatkan dirinya sebagai orang besar.', '2022-07-01 19:38:07'),
(238, 'Bekerja keras sekarang, merasakan hasilnya nanti; bermalas-malasan sekarang, merasakan akibatnya nanti.', '2022-07-01 20:40:07'),
(239, 'Percaya pada diri sendiri adalah rahasia utama mencapai sukses.', '2022-07-01 21:48:05'),
(240, 'Bila kemauan siap, kaki menjadi ringan.', '2022-07-01 22:49:07'),
(241, 'Kepuasan terletak pada usaha, bukan pada hasil. Berusaha dengan keras adalah kemenangan yang hakiki.', '2022-07-01 23:52:05'),
(242, 'Anda tidak dapat merencanakan masa yang akan datang berdasarkan masa lalu.', '2022-07-02 01:03:04'),
(243, 'Banyak orang sukses berkat banyaknya kesulitan dan kesukaran yang mesti dihadapi.', '2022-07-02 02:06:04'),
(244, 'Ilmu pengetahuan tanpa agama adalah pincang.', '2022-07-02 03:09:04'),
(245, 'Melakukan yang terbaik pada saat ini akan menempatkan Anda ke tempat terbaik pada saat berikutnya.', '2022-07-02 04:10:07'),
(246, 'Setiap badai pasti berlalu dan saya akan tumbuh semakin kuat.', '2022-07-02 05:12:05'),
(247, 'Latih diri Anda untuk tidak khawatir. Kekhawatiran tak pernah memperbaiki apa-apa.', '2022-07-02 06:14:05'),
(248, 'Pahlawan adalah seseorang yang melakukan apa yang mampu dia lakukan.', '2022-07-02 07:16:07'),
(249, 'Yang palin melelahkan dalam hidup adalah menjadi orang yang tidak tulus.', '2022-07-02 08:18:08'),
(250, 'Jika Anda tidak merancang hidup Anda sendiri, kemungkinan Anda akan menjalani rencana orang lain. Apa yang mereka rencanakan untuk Anda? Tidak banyak.', '2022-07-02 09:24:06'),
(251, 'Saya tidak takut pada hari esok karena saya sudah melihat hari kemarin dan saya mencintai hari ini.', '2022-07-02 10:29:08'),
(252, 'Orang yang melakukan kesalahan dan tidak memperbaiki kesalahannya, melalakukan kesalahan yang lainnya.', '2022-07-02 11:31:08'),
(253, 'Kita lebih sibuk menyakinkan orang lain bahwa kita bahagia ketimbang benar-benar merasakan bahagia itu sendiri.', '2022-07-02 12:34:05'),
(254, 'Hidup manusia penuh dengan bahaya, tetapi disitulah letak daya tariknya.', '2022-07-02 13:35:08'),
(255, 'Ada dua cara mengatasi kesulitan, Anda mengubah kesulitan-kesulitan atau Anda mengubah diri sendiri untuk mengatasinya.', '2022-07-02 14:37:06'),
(256, 'Siapa yang tidak bisa memimpin dirinya sendiri, tidak akan bisa memimpin orang.', '2022-07-02 15:38:06'),
(257, 'Kurang cerdas dapat diperbaiki dengan belajar, kurang cekatan dapat diperbaiki dengan pengalaman, kurang jujur sulit memperbaikinya.', '2022-07-02 16:53:05'),
(258, 'Tidak dicintai orang lain memang menyedihkan, tapi lebih menyedihkan lagi kalau tidak bisa mencintai orang lain.', '2022-07-02 17:57:07'),
(259, 'Hidupku menjadi hiburanku dan tak hentinya memberikan kejutan. Hidupku bagaikan drama dengan begitu banyak babak tanpa adegan penutup.', '2022-07-02 19:12:09'),
(271, 'Kegagalan hanyalah kesempatan untuk memulai lagi dengan lebih pandai.', '2022-07-02 21:07:05'),
(272, 'Motivasi adalah sesuatu yang membuat Anda memulai. Kebiasaan adalah sesuatu yang membuat Anda melanjutkan.', '2022-07-02 22:09:06'),
(273, 'Hidup bukanlah tentang menemukan dirimu sendiri. Hidup adalah tentang menciptakan dirimu sendiri.', '2022-07-02 23:12:03'),
(274, 'Kemajuan merupakan kata-kata merdu, tetapi perubahanlah penggerakknya dan perubahan mempunyai banyak musuh.', '2022-07-03 00:41:03'),
(275, 'Anda mungkin ditipu jika terlalu mempercayai, tetapi hidup Anda akan tersiksa jika tidak cukup mempercayai.', '2022-07-03 01:42:06'),
(276, 'Campakanlah jauh-jauh pikiran murung dan kesal itu, lalu bangkitkanlah.', '2022-07-03 02:43:06'),
(277, 'Semua masalah menjadi lebih kecil jika Anda tidak mengelaknya, tapi menghadapinya.', '2022-07-03 03:44:08'),
(278, 'Setelah kehilangan segalanya, barulah kita bebas melakukan apa saja.', '2022-07-03 04:45:06'),
(279, 'Penghargaan tertinggi untuk kerja keras seseorang bukanlah apa yang ia hasilkan, tetapi bagaimana ia berkembang karenanya.', '2022-07-03 05:47:04'),
(280, 'Dari dulu saya selalu yakin saya akan kaya. Saya kira saya tak pernah meragukannya, satu menit pun.', '2022-07-03 06:50:07'),
(281, 'Jangan takut dengan kesalahan. Kebijaksanaan biasanya lahir dari kesalahan.', '2022-07-03 08:13:05'),
(282, 'Jika Anda ingin sukses, Anda harus menciptakan peluang untuk diri sendiri.', '2022-07-03 09:25:08'),
(283, 'Harapan adalah tiang yang menyangga dunia.', '2022-07-03 10:26:07'),
(284, 'Lebih baik menyiapkan diri untuk sebuah peluang dan tidak mendapatkannya daripada punya peluang dan tidak menyiapkan diri.', '2022-07-03 11:28:03'),
(285, 'Kamu tidak dapat mengajari seseorang apa pun, kamu hanya bisa membantunyanya menemukan apa yang ada dalam dirinya sendiri.', '2022-07-03 12:40:05'),
(286, 'Jika Anda punya kemauan untuk menang, Anda sudah mencapai separuh sukses. Jika Anda tidak punya kemauan untuk menang, Anda sudah mencapai separuh kegagalan.', '2022-07-03 13:47:04'),
(287, 'Kita tak bisa memilih bagaimana kita meninggal atau kapan. Kita hanya bisa memutuskan bagaimana kita hidup. Sekarang.', '2022-07-03 14:48:05'),
(288, 'Bila semangat Anda menurun, lakukanlah sesuatu. Kalau Anda telah melakukan sesuatu keadaan tidak berubah, lakukanlah sesuatu yang berbeda.', '2022-07-03 15:51:03'),
(289, 'Bila orang yang kuatir akan kekurangannya mau mensyukuri kekayaan yang mereka miliki, mereka akan berhenti kuatir.', '2022-07-03 16:54:07'),
(290, 'Hal terbaik yang bisa Anda lakukan untuk orang lain bukanlah membagikan kekayaan Anda, tetapi membantu dia untuk memiliki kekayaannya sendiri.', '2022-07-03 18:01:07'),
(291, 'Kita ada disini bukan untuk saling bersaing. Kita ada disini untuk saling melengkapi.', '2022-07-03 19:04:05'),
(292, 'Dengan belajar Anda bisa mengajar. Dengan mengajar, Anda belajar.', '2022-07-03 20:08:05'),
(293, 'Integritas seseorang diukur dengan tingkah lakunya bukan profesinya.', '2022-07-03 21:23:04'),
(294, 'Kemenangan bukanlah segala-galanya, tetapi perjuangan untuk menang adalah segala-galanya.', '2022-07-03 22:33:04'),
(295, 'Dalam hal prinsip, usahakan kukuh seperti batu karang. Dalam hal selera, coba berenang mengikuti arus.', '2022-07-03 23:38:03'),
(296, 'Orang termiskin adalah orang yang tidak mempunyai apa-apa kecuali uang.', '2022-07-04 00:40:03'),
(297, 'Banyak kegagalan dalam ini dikarenakan orang-orang tidak menyadari betapa dekatnya mereka dengan keberhasilan saat mereka menyerah.', '2022-07-04 01:47:06'),
(298, 'Tidak peduli seberapa banyak yang dapat Anda lakukan, tidak peduli seberapa menarik hati kepribadian Anda, Anda tidak dapat melangkah jauh jika Anda tidak dapat bekerja bersama orang lain.', '2022-07-04 02:52:05'),
(299, 'Satu jam yang intensif, jauh lebih baik dan menguntungkan daripada bertahun-tahun bermimpi dan merenung-renung.', '2022-07-04 03:56:03'),
(300, 'Ancaman nyata sebenarnya bukan pada saat komputer mulai bisa berpikir seperti manusia, tetapi ketika manusia mulai berpikir seperti komputer.', '2022-07-04 04:57:05'),
(301, 'Tidak ada obat untuk kelahiran dan kematian, kecuali menikmati yang ada di antara keduanya.', '2022-07-04 06:05:05'),
(302, 'Kedamaian tidak terdapat di dunia luar, melainkan terdapat dalam jiwa manusia itu sendiri.', '2022-07-04 07:09:05'),
(303, 'Kesabaran adalah teman dari kebijaksanaan.', '2022-07-04 08:19:06'),
(304, 'Hanya ikan yang bodoh yang bisa dua kali kena pancing dengan umpan yang sama.', '2022-07-04 09:30:08'),
(305, 'Kemiskinan jiwa lebih mengerikan daripada kemiskinan jasmani atau materi.', '2022-07-04 11:09:05'),
(306, 'Kesabaran adalah obat terbaik untuk semua masalah.', '2022-07-04 12:17:04'),
(307, 'Bila tidak mampu menemukan kedamaian dalam diri sendiri, tak ada gunanya mencari di tempat lain.', '2022-07-04 13:48:04'),
(308, 'Jika seseorang menyatakan kebenaran, dia yakin; cepat atau lambat; akan mendapatkannya.', '2022-07-04 15:46:05'),
(309, 'Orang bijak berbicara karena mereka mempunyai sesuatu untuk dikatakan, orang bodoh berbicara karena mereka ingin mengatakan sesuatu.', '2022-07-04 16:54:07'),
(310, 'Berusaha berhasil untuk memotivasi dirimu, tapi berusaha untuk selalu sempurna akan membuat tertekan.', '2022-07-04 17:56:05'),
(311, 'Hiduplah seperti lilin yang menerangi orang lain. Jangan hidup seperti duri yang mencucuk diri dan menyakiti orang lain.', '2022-07-04 19:17:05'),
(312, 'Berbuat tidak adil lebih memalukan daripada menderita ketidakadilan.', '2022-07-04 21:01:04'),
(313, 'Kebahagiaan selalu tampak kecil saat berada dalam genggaman. Tapi coba lepaskan dan Anda akan langsung tahu, betapa besar dan berhargannya kebahagiaan.', '2022-07-04 23:22:04'),
(314, 'Pengetahuan tidaklah cukup, kita harus mengamalkannya. Niat tidak cukup, kita harus melakukannya.', '2022-07-05 00:55:04'),
(315, 'Kesedihan adalah buah. Tuhan tak pernah membiarkannya tumbuh dicabang yang terlalu lemah untuk menanggungnya.', '2022-07-05 02:51:10'),
(316, 'Jika kita melayani, maka hidup akan lebih berarti.', '2022-07-05 04:19:05'),
(317, 'Tembok yang kita bangun untuk menghambat kesedihan, juga membuat kita tertutup dari kebahagiaan.', '2022-07-05 06:30:06'),
(318, 'Betapapun tingginya burung terbang, toh dia harus mencari dan mendapatkan makanannya di bumi juga.', '2022-07-05 08:23:03'),
(319, 'Kemana pun Anda pergi, pergilah dengan sepenuh hati.', '2022-07-05 09:56:03'),
(320, 'Untuk memahami hati dan pikiran seseorang, jangan lihat apa yang sudah dia capai, tapi lihat apa yang dia cita-citakan.', '2022-07-05 23:27:05'),
(321, 'Semakin kita bersedia bertanggung jawab atas perbuatan-perbuatan kita, semakin banyak kredibilitas yang kita miliki.', '2022-07-06 01:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `total_request`
--

CREATE TABLE `total_request` (
  `id` int(11) NOT NULL,
  `total` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_request`
--

INSERT INTO `total_request` (`id`, `total`) VALUES
(1, '10972');

-- --------------------------------------------------------

--
-- Table structure for table `way_account`
--

CREATE TABLE `way_account` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `no_wa` varchar(250) DEFAULT NULL,
  `level` varchar(40) NOT NULL,
  `verifed` varchar(40) NOT NULL,
  `verifikasi` varchar(250) DEFAULT NULL,
  `total_hit` varchar(255) DEFAULT NULL,
  `status_akun` varchar(40) DEFAULT NULL,
  `apikey` varchar(255) DEFAULT NULL,
  `limit_hit` varchar(255) DEFAULT NULL,
  `link_key` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `way_account`
--

INSERT INTO `way_account` (`id`, `username`, `password`, `email`, `no_wa`, `level`, `verifed`, `verifikasi`, `total_hit`, `status_akun`, `apikey`, `limit_hit`, `link_key`) VALUES
(26, 'ridah', '244c41256079ebf0cd806e3d3c33509a3183c9fa', 'ridah@gmail.com', '628157288560', 'admin', '1', '0', '450', '1', 'R!dp3d', '591', 'https://tinyurl.com/y7jmuc7d'),
(29, 'aminoto', 'aa45aff6de774063efe2dedde69ed3be548a1903', 'aminoto.program@gmail.com', '085310479000', 'member', '0', '0', '225', '0', 'aminoto-0TybAD1AVg', '1000', ''),
(31, 'wahyu', '244c41256079ebf0cd806e3d3c33509a3183c9fa', 'wahyu@gmail.com', '62858', 'member', '0', '0', '7', '0', 'wahyu-ACFtpxSPGw', '1000', ''),
(32, 'anjan', '601f1889667efaebb33b8c12572835da3f027f78', 'anjan616@gmail.com', '916364381415', 'member', '0', '0', '0', '0', 'anjan-HhUuyutuRW', '1000', ''),
(33, 'sameer', '601f1889667efaebb33b8c12572835da3f027f78', 'sam@gmail.com', '919191919191', 'member', '0', '0', '0', '0', 'sameer-LjXwR00gdB', '1000', ''),
(34, 'nagadua', '4c0d2b951ffabd6f9a10489dc40fc356ec1d26d5', 'fitwan2014]', '081382148675', 'member', '0', '0', '0', '0', 'nagadua-u1DK5B13b1', '1000', ''),
(36, 'kelvinilyas13', '0fc2102b76f88042af4323a9167aa3dbbef1a799', 'kelvinilyas05@gmail.com', '081387777325', 'member', '0', '0', '0', '0', 'kelvinilyas13-LKSfJWndBp', '1000', ''),
(37, 'wahyuadi', '3520e6b6a65e104518d599227950b929d89a8b84', 'wasuryanto3@gmail.com', '087777707860', 'member', '0', '0', '0', '0', 'wahyuadi-xLimhSAtXQ', '1000', ''),
(38, 'pavansms', '97cf65f412b5d626e6ee62cb2cfb42de10454f0c', 'pavansms360@gmail.com', '919059210823', 'member', '0', '0', '0', '0', 'pavansms-mfMXr9h0ZV', '1000', ''),
(39, 'adminweb', '37402151c56639480cea7adee699306ed72fbd88', 'anonseccyberteam@gmail.com', '0895369318181', 'member', '0', '0', '0', '0', 'adminweb-5q1qXwDsaF', '1000', ''),
(40, 'admin', 'ba8af5881fd4428036890119e5188a3324dc4ac8', 'dika.ter89@gmail.com', '083872838604', 'member', '0', '0', '0', '0', 'admin-y6IbCBjbp3', '1000', ''),
(41, 'ahmed el sayed Mohamed', '01fb1f85f7b4ec5165381bb13ce2b655ecdc6f72', 'ahmed.el.sayed.mohmmed10@gmail.com', '+201004101309', 'member', '0', '0', '0', '0', 'ahmed el sayed Mohamed-tzsQhfKkcU', '1000', ''),
(42, 'afandi', '72f42be7444e5faa55d1f83624dc16fd7a8744ef', 'loveprogrammer70@gmail.com', '082231376068', 'member', '0', '0', '0', '0', 'afandi-YRBGHBywfY', '1000', ''),
(43, 'demo', '8cb2237d0679ca88db6464eac60da96345513964', 'demo@demo.com', '9999988888', 'member', '0', '0', '0', '0', 'demo-pd1nBZi9dn', '1000', ''),
(44, 'piero37', '7eb48013db20c5a33d085b6dc8f82553199fa5d1', 'info.iprdigital@gmail.com', '390287199834', 'member', '0', '0', '0', '0', 'piero37-4hXfQ0hJCO', '1000', ''),
(45, 'arvians288', '4baed1d3473eacec6cea77546634db3e1e45bac0', 'arviansyahilham@gmail.com', '6281382227304', 'member', '0', '0', '7', '0', 'arvians288-BisGJWCpIc', '1000', ''),
(46, 'kecap', '49079920830521134b9b9e030a04cbd0375362f3', 'cnk@cnk.com', '089667771377', 'member', '0', '0', '0', '0', 'kecap-wJuW6AwPFB', '1000', ''),
(47, 'testlys', '244c41256079ebf0cd806e3d3c33509a3183c9fa', 'testlys@gmail.com', '628288282', 'member', '0', '0', '0', '0', 'testlys-2NzAwVSj7r', '1000', ''),
(48, 'santoni', 'd3344c59f354de335dd3a0514c9f124e4752aba0', 'santoni89@gmail.com', '087808789478', 'member', '0', '0', '0', '0', 'santoni-DXA7QpLujk', '1000', ''),
(49, 'admin123', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'admin@admin.com', '62895358575151', 'member', '0', '0', '0', '0', 'admin123-FzJZmPicfD', '1000', ''),
(50, 'ridho', 'b761d4b0c7b51af9f304184b38af73ea6dc2e69c', 'muhridho448@gmail.com', '081249429071', 'member', '0', '0', '0', '0', 'ridho-q3SB9Q01CP', '1000', ''),
(51, 'abcadmin', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'aman454@gmail.com', '917367063162', 'member', '0', '0', '0', '0', 'abcadmin-K5CzjRuZ1W', '1000', ''),
(52, 'adhie9', '88997ab14bfed3275c830cbac07399d5d5694014', 'b.permadhie@gmail.com', '6281234568890', 'member', '0', '0', '0', '0', 'adhie9-C6HqStVrzo', '1000', ''),
(53, 'kirazetsu', 'efc56b94485f42064509607b8431454582b60b6f', 'kirazetsu@gmail.com', '6285248756842', 'member', '0', '0', '0', '0', 'kirazetsu-y1OIkiX6hF', '1000', ''),
(54, 'Santana', '737bda47673c07d62b85cfba81fa420df01f1fbf', 'konveksibaju@gmail.com', '6285793122278', 'member', '0', '0', '0', '0', 'Santana-6P76TI9HEL', '1000', ''),
(55, 'pakkacung', '10d0b55e0ce96e1ad711adaac266c9200cbc27e4', 'pakkacung@gmail.com', '081515340000', 'member', '0', '0', '0', '0', 'pakkacung-ueGcP1OJPg', '1000', ''),
(56, 'mrizki', 'ad68b13bd2fb7b24a051b7ce27ab7f0ce3bf3d3f', 'mr.fahdia02@gmail.com', '081555666401', 'member', '0', '0', '0', '0', 'mrizki-Fa0svtymxy', '1000', ''),
(57, 'bayuhar', 'a62b022d41d2cece559292d11019c03ae68d2be0', 'bayuhar2gmail.com', '089671180007', 'member', '0', '0', '0', '0', 'bayuhar-WKAx3m6xeT', '1000', ''),
(59, 'ridwankurniawanx', '1b4827c9690ba7fbae102458dd3eaf5dff71c149', 'ridwankurniawanx@gmail.com', '085840292122', 'member', '0', '0', '0', '0', 'ridwankurniawanx-jwIlK1bRRc', '1000', '');

-- --------------------------------------------------------

--
-- Table structure for table `way_setting`
--

CREATE TABLE `way_setting` (
  `id` int(11) NOT NULL,
  `nama_web` varchar(250) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `kontak` varchar(250) DEFAULT NULL,
  `fitur` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `way_setting`
--

INSERT INTO `way_setting` (`id`, `nama_web`, `deskripsi`, `kontak`, `fitur`) VALUES
(1, 'APIWaY', 'APIWaY deskripsi', '+6281572885606', '18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_request`
--
ALTER TABLE `total_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `way_account`
--
ALTER TABLE `way_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `way_setting`
--
ALTER TABLE `way_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;

--
-- AUTO_INCREMENT for table `total_request`
--
ALTER TABLE `total_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `way_account`
--
ALTER TABLE `way_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `way_setting`
--
ALTER TABLE `way_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
