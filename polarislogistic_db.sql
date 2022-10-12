-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 12 Okt 2022 pada 07.09
-- Versi server: 10.3.36-MariaDB-log-cll-lve
-- Versi PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polarislogistic_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_chat_wa`
--

CREATE TABLE `tbl_chat_wa` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `image` varchar(200) NOT NULL,
  `startOnline` time NOT NULL,
  `endOnline` time NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `createUserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_chat_wa`
--

INSERT INTO `tbl_chat_wa` (`id`, `nama`, `phone`, `image`, `startOnline`, `endOnline`, `createDate`, `createUserId`) VALUES
(1, 'Admin', '082250509994', 'Admin_2022-08-30 15:17:52.png', '08:00:00', '22:00:00', '2022-08-19 06:57:40', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_client`
--

CREATE TABLE `tbl_client` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_client`
--

INSERT INTO `tbl_client` (`id`, `nama`, `image`) VALUES
(1, 'Our Best Client', '6319e64f8a779.png'),
(2, 'Our Best Client', '6319e65e0fe30.png'),
(3, 'Our Best Client', '6319e6715e437.png'),
(4, 'Our Best Client', '6319e68ee38b0.png'),
(5, 'Our Best Client', '6319e69d3737d.png'),
(6, 'Our Best Client', '6319e6aa66187.png'),
(7, 'Our Best Client', '6319e6b8c3c4e.png'),
(8, 'Our Best Client', '6319e6c60b99c.png'),
(9, 'Our Best Client', '6319e6e07b4f1.png'),
(10, 'Our Best Client', '6319e76e7eace.png'),
(12, 'Our Best Client', '6319e6fd24571.png'),
(13, 'Our Best Client', '6319e70bc9aec.png'),
(14, 'Our Best Client', '6319e71bd163e.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `image` varchar(125) NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `name`, `image`, `createDate`) VALUES
(1, 'Flatrack Cargo', '6319b9dd741cb.jpg', '2022-08-30 09:09:33'),
(2, 'Material Project Cargo', '6319b9eb94d4d.jpg', '2022-08-30 09:10:11'),
(4, 'Kirim Unit Kendaraan', '6319b8c4d5641.jpg', '2022-09-08 09:41:24'),
(5, 'Retails Shipment', '6319ba33b3174.jpg', '2022-09-08 09:47:31'),
(6, 'Kirim dan Cari Barang', '6319ba5e796b7.jpg', '2022-09-08 09:48:14'),
(7, 'Fast Trucking Shipment', '6319ba915e9b1.jpg', '2022-09-08 09:49:05'),
(8, 'We Serve Better', '6319baccbc0dd.jpg', '2022-09-08 09:50:04'),
(9, 'Barang Aman dan Mudah di Tracking', '6319bae9cfde4.jpg', '2022-09-08 09:50:33'),
(10, 'Why Us ?', '6319bb015c998.jpg', '2022-09-08 09:50:57'),
(11, 'Our Value', '6319bb3b5e99d.jpg', '2022-09-08 09:51:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_homeweb`
--

CREATE TABLE `tbl_homeweb` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `kota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tbl_homeweb`
--

INSERT INTO `tbl_homeweb` (`id`, `title`, `deskripsi`, `kota`) VALUES
(1, 'Cepat, Tepat dan Tuntas', 'Jasa ekspedisi Terpercaya mencakup wilayah ', 'Surabaya - Kalimantan - Sulawesi - Bali - NTB/NTT - Maluku - Papua, dan masih banyak lagi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `desk_pendek` varchar(255) NOT NULL,
  `desk_panjang` text NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_service`
--

INSERT INTO `tbl_service` (`id`, `title`, `desk_pendek`, `desk_panjang`, `image`) VALUES
(1, 'inland transportation', 'Layanan pengiriman cargo dengan moda trasportasi darat.', 'Layanan via moda trasportasi darat adalah jenis layanan distribusi / pengiriman barang dengan waktu pengiriman normal dibandingkan dengan layanan transportasi via laut.', '630dd7392f31c.svg'),
(2, 'land project', 'Layanan pengiriman cargo project dengan moda trasportasi darat.', 'PT. Polaris Jaya Artha, provide services layanan pengiriman cargo project sesuai dengan permintaan dan kebutuhan customers dengan jangka waktu dan harga yang telah disepakati dalam perjanjian kerja.', '630dd74b916cc.svg'),
(3, 'trucking full (ftl)', 'Layanan pengiriman cargo dengan menggunakan armada truck.', 'Provide service layanan pengiriman cargo dengan menggunakan armada Truck sesuai kebutuhan customer (Pickup Mini, CDD Enkel, CDD Double, Fuso, Troton, Wing Box) atau sistem shuttle dengan kualitas pelayanan dan kecepatan delivery.', '630dd7643c96d.svg'),
(4, 'trucking partial (ltl)', 'Layanan pengiriman cargo dengan menggunakan armada truck Tronton.', 'Provide Service layanan pengiriman cargo dengan menggunakan truck Tronton Dropside dengan perhitungan tarif per kgv/kubikasi/tonase tentunya dengan harga yang telah disepakati diawal perjanjian kerja.', '630dd782523e2.svg'),
(5, 'Domestic sea freight', 'Layanan pengiriman cargo dengan moda trasportasi laut', 'Layanan transportasi via laut adalah jenis layanan distribusi / pengiriman barang dengan waktu pengiriman yang relatif lebih panjang dari moda trasportasi darat. ', '630dd79b3b780.svg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sosmed`
--

CREATE TABLE `tbl_sosmed` (
  `id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `link` varchar(125) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_sosmed`
--

INSERT INTO `tbl_sosmed` (`id`, `name`, `link`, `icon`) VALUES
(1, 'Instagram', 'https://www.instagram.com/polarislogistik', 'fa-instagram'),
(2, 'Facebook', 'https://facebook.com/', 'fa-facebook-f'),
(3, 'Twitter', 'https://www.twitter.com/', 'fa-twitter'),
(5, 'LinkedIn', 'https://www.linkedin.com', 'fa-linkedin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_visi_misi`
--

CREATE TABLE `tbl_visi_misi` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `desk_1` text NOT NULL,
  `desk_2` text NOT NULL,
  `desk_3` text NOT NULL,
  `desk_4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_visi_misi`
--

INSERT INTO `tbl_visi_misi` (`id`, `nama`, `desk_1`, `desk_2`, `desk_3`, `desk_4`) VALUES
(1, 'Visi', 'Menjadi perusahaan terdepan dengan kinerja terbaik dan pelayanan sepenuh hati', '', '', ''),
(2, 'Misi', 'Menjalankan bisnis Logistik / freight forwarding menggunakan darat dan laut ke seluruh wilayah Indonesia.  ', 'Memberikan manfaat yang optimal bagi karyawan dan pelanggan, serta bertanggung jawab atas barang yang dikirimkan.', 'Mempermudah proses pengiriman barang dari tangan produsen sampai ke tangan konsumen serta memastikan barang dalam kondisi yang baik.', 'Memberikan kualitas pelayanan   yang terbaik.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_website`
--

CREATE TABLE `tbl_website` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `why_us` text NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `phone_2` varchar(20) NOT NULL,
  `phone_3` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `metaTitle` varchar(80) NOT NULL,
  `metaKeywords` text NOT NULL,
  `metaDescription` text NOT NULL,
  `map` text NOT NULL,
  `image` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_website`
--

INSERT INTO `tbl_website` (`id`, `name`, `why_us`, `address`, `phone`, `phone_2`, `phone_3`, `fax`, `email`, `description`, `metaTitle`, `metaKeywords`, `metaDescription`, `map`, `image`) VALUES
(3, 'PT Polaris Jaya Artha', '<p>Kami adalah perusahaan ekspedisi yang memiliki spesialisasi pengirim ke seluruh wilayah Indonesia. Melayani pengiriman beberapa jenis cargo seperti general cargo, alat kesehatan, alat berat, besi, baja, project cargo dan berbagai jenis cargo lainnya. Didukung oleh tim profesional yang memiliki pengalaman di bidang forwarding dan logistik sehingga kami mampu memberikan pelayanan yang terbaik dan dengan penawaran harga terbaik.</p>\r\n', '<p>Jl. Waspada No.90, Bongkaran, Kec. Pabean Cantian, Surabaya, Jawa Timur</p>\r\n', '082250509994', '082334672211', '08113488824', '', 'polarislogistik@gmail.com', '<p>PT. Polaris Jaya Artha ( Polaris Logistik ) adalah perusahaan ekspedisi yang memiliki spesialisisasi pengiriman ke seluruh wilayah Indonesia. Berdomisili di Kota Surabaya dan beberapa kantor cabang dan perwakilan kami yang tersebar di beberapa daerah. Polaris Logistik melayani segala kebutuhan pengiriman cargo Anda dengan pelayanan dan penawaran harga terbaik.</p>\r\n', 'Polaris Logistik | Jasa Ekspedisi Terpercaya', '<p>ekspedisi, logitik, logistics, freight forwarders, EMKL</p>\r\n', '<p>Jasa ekspedisi dan logistik yang handal yang&nbsp;memiliki spesialisisasi pengiriman semua jenis cargo ke seluruh wilayah Indonesia.</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.9951414861985!2d112.7387833147747!3d-7.0241389994772698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9167176c457%3A0xe100b3a6ea531dbf!2sJl.%20Waspada%20No.90%2C%20RT.005%2FRW.03%2C%20Bongkaran%2C%20Kec %20Pabean%20Cantikan%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060161!5e0!3m2!1sid!2sid!4v1661762857803!5m2!1sid!2sid\" width=\"100%\" height=\"100%\" style=\"border:0;border-radius: 10px;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'logo.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_chat_wa`
--
ALTER TABLE `tbl_chat_wa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_homeweb`
--
ALTER TABLE `tbl_homeweb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_visi_misi`
--
ALTER TABLE `tbl_visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_website`
--
ALTER TABLE `tbl_website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_chat_wa`
--
ALTER TABLE `tbl_chat_wa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_homeweb`
--
ALTER TABLE `tbl_homeweb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_visi_misi`
--
ALTER TABLE `tbl_visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_website`
--
ALTER TABLE `tbl_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
