-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2022 pada 19.39
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datagkj`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` varchar(16) NOT NULL,
  `status` enum('Aktif','Tidak Aktif','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `alamat`, `no_telpon`, `status`) VALUES
(1, 'Hegar Yudha Candra Tionica', 'yudha', 'yudha11', 'Jl. Merbabu 96 Boyolali', '085727873492', 'Tidak Aktif'),
(60, 'GKJ BOYOLALI', 'gkjboyolali', 'GkjBoyolali1', 'Jl. Pahlawan No.60, Ngrancah, Siswodipuran, Kec. Boyolali', '(0276) 321696', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_induk`
--

CREATE TABLE `data_induk` (
  `no_induk` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `alamat` text NOT NULL,
  `lahir` text NOT NULL,
  `baptis` text NOT NULL,
  `sidi` text NOT NULL,
  `nikah` text NOT NULL,
  `meninggal` text NOT NULL,
  `orang_tua` varchar(50) NOT NULL,
  `suami_istri` varchar(50) NOT NULL,
  `dari_gereja` text NOT NULL,
  `ke_gereja` text NOT NULL,
  `keterangan` text NOT NULL,
  `keterangan_tambahan` text NOT NULL,
  `id` int(11) NOT NULL,
  `nik` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_induk`
--

INSERT INTO `data_induk` (`no_induk`, `nama`, `jenis_kelamin`, `alamat`, `lahir`, `baptis`, `sidi`, `nikah`, `meninggal`, `orang_tua`, `suami_istri`, `dari_gereja`, `ke_gereja`, `keterangan`, `keterangan_tambahan`, `id`, `nik`) VALUES
('1', 'Ds. Sudaryono', 'P', 'Jl. Merbabu 96 Boyolali', 'Yogyakarta, 17-10-1939', '1939', 'Sih El Mir Mani', '22-07-1965 Ds, Broto Suwignyo', '', '', 'Sih El Mir Mani', '', '', '', '', 1, 1),
('13', 'Hegar Yudha Candra Tionica', 'P', 'Perum BSP 2, blok N/27, Karanggeneng, Boyolali', 'Kebumen, 11 Februari 1999', 'Tanjung Serupa', '', '', '', 'Jonathan Sutiono & Erni Endang Murwati', '', 'GPDI Tanjung Serupa', 'GKJ Boyolali', '', 'Filipi', 2, 2),
('14', 'Nathania Maya Shafira Horman', 'P', 'Perum BSP 2, blok N/27, Karanggeneng, Boyolali', 'Boyolali, 29 Februari 2008', 'GKJ BOYOLALI, 21 MARET 2008', '', '', '', 'Triwindar Sriyati & Martinus Horman (Alm)', '', '', '', '', '', 3, 3),
('15', 'Triwindar Sriyati', 'P', 'Perum BSP 2, blok N/27, Karanggeneng, Boyolali', 'Kebumen, 17 Januari 1972', '', '', 'Boyolali,   Mei 2000', '', 'Madiharjo (Alm) & Suwuh', 'Martinus Horman (Alm)', '', '', '', '', 4, 4),
('1597', 'Ririn Jumi Astuti', 'P', 'Asrikanto RT.03/I Kiringan Boyolali', 'Grobogan, 18 Maret 1979', '25 Desember 1998\nGKJ Boyolali\nDs.Sudaryono', '25 Desember 1998\nGKJ Boyolali\nDs.Sudaryono', '', '', 'Rusno Setyadi\nDwi Sunarni', '', '', 'GKI Surabaya', 'Attestasi\npindah', '', 5, 5),
('1598', 'Purwanto', 'L', 'Surowedanan RT.01\nPulisen Boyolali', 'Boyolali,\n11 Pebruari 1976', '25 Desember 1998\nGKJ Boyolali\nDs.Sudaryono', '25 Desember 1998\nGKJ Boyolali\nDs.Sudaryono', '', '', 'Gimo\nJuminah', '', '', '', 'Meninggal', '', 6, 6),
('1599', 'Purwanti', 'P', 'Surowedanan RT.01\nPulisen Boyolali', 'Boyolali,\n19 Desember 1977', '25 Desember 1998\nGKJ Boyolali\nDs.Sudaryono', '25 Desember 1998\nGKJ Boyolali\nDs.Sudaryono', '', '', '', '', '', '', 'keluar/\r\npindah\r\nkeyakinan', '', 7, 7),
('1601', 'Samsiyem Harto\nSuwito', 'P', 'Sumbung, Cepogo', 'Boyolali, 1956', '25 Desember 1998\nGKJ Boyolali\nDs.Sudaryono', '25 Desember 1998\nGKJ Boyolali\nDs.Sudaryono', '', '', '', 'Harto Suwito', '', '', '', '', 8, 8),
('1660', 'Agustina Triana\nwahyuning \nwidiastuti', 'P', 'Jl.Merbabu No.III/16\nBoyolali', 'Boyolali,\n27 Agustus 1979', '25 Desember 1998\nGKJ Boyolali\nDs.Sudaryono', '25 Desember 1998\nGKJ Boyolali\nDs.Sudaryono', '', '', 'Sutrisno/\nSri Hartati', '', '', '', 'keluar/\r\npindah\r\nkeyakinan', '', 9, 9),
('2', 'Sih El Mirmani', 'P', 'Jl. Merbabu 96 Boyolali', 'Wonosobo, 19-08-1940', '08/09/1940', 'Ds, Sudaryono', '', '', '', 'Ds, Sudaryono', '', '', '', '', 10, 10),
('3', 'Widiprasetya', 'L', 'Sda', 'Boyolali, 13-07-1966', 'Boyolali, 14-09-1966 Ds, Notosudarmo', 'Boyolali, 25-12-1985 Ds, Sudaryono', 'Boyolali, 12-10-1989 Ds, Suharno', '', 'Ds, Sudaryono', '', '', 'GKJ Maguwoharjo', '', '', 11, 11),
('4', 'Retno Murnia Ningsih', 'P', 'sda', 'Boyolali, 07-05-1968', 'Boyolali, 14-07-1968 Ds, S, Widya Sudarmo', '25-12-1986 Ds, Sudaryono', 'Boyolali, 14-01-1995 Ds, M. Manto Soewignyo', '', 'Sda', 'R. Agus Heru Purnomo', '', 'GBIKA Solo', '21-01-2014 PINDAH', '', 12, 12),
('5', 'Widya Trisetyanto', 'L', 'Sda', 'Boyolali, 27-04-1970', 'Boyolali, 20-06-1970 Ds, Sudaryono', 'Boyolali, 28-07-1991 Ds, Sudaryono', 'Boyolali, 17-09-1994 ', '', 'Sda', 'Murjaeni', '', '', '', '', 13, 13),
('Flp14044022', 'Dwi Yulianto', 'P', 'Siwodipuran', 'musuk, 01 Januari 1987', 'GKJ Boyolali', 'Marta', '', '', '', 'Marta', '', '', '', '', 14, 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_majelis`
--

CREATE TABLE `data_majelis` (
  `id_majelis` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `jabatan_majelis` varchar(20) NOT NULL,
  `tanggal_registrasi` date NOT NULL DEFAULT current_timestamp(),
  `password` varchar(50) NOT NULL,
  `status` enum('Aktif','Tidak Aktif','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_majelis`
--

INSERT INTO `data_majelis` (`id_majelis`, `nama`, `username`, `jabatan_majelis`, `tanggal_registrasi`, `password`, `status`) VALUES
(1, 'Hegar Yudha Candra Tionica', 'yudha', 'Ketua Majelis', '2022-06-20', 'yudha11', 'Aktif'),
(2, 'Dkn. Sri Wahono', 'Wahono', 'Bidang Kajian', '2022-06-22', '1234567', 'Aktif'),
(26, 'Untung Setiasa Bayu Purnama', 'untung', 'Sekretaris', '2022-06-22', 'boyolali', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelompok`
--

CREATE TABLE `kelompok` (
  `jenis_ibadah` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp(),
  `petugas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keuangan`
--

CREATE TABLE `keuangan` (
  `jadwal` date NOT NULL,
  `jenis_persembahan` varchar(50) NOT NULL,
  `nominal` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keuangan`
--

INSERT INTO `keuangan` (`jadwal`, `jenis_persembahan`, `nominal`, `keterangan`) VALUES
('2022-06-12', 'Persembahan Kantong 3', 5752000, ''),
('2022-06-26', 'Persembahan Kasih', 20000000, ''),
('2022-06-26', 'Persembahan Mingguan', 12500000, ''),
('2022-06-19', 'Persembahan Pembangunan', 4277000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan_baptis`
--

CREATE TABLE `pelayanan_baptis` (
  `id_baptis` varchar(11) NOT NULL,
  `pemohon_baptis` varchar(50) NOT NULL,
  `jenis_baptis` varchar(20) NOT NULL,
  `jadwal_registrasi` date NOT NULL,
  `jadwal_baptis` date NOT NULL,
  `petugas_baptis` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelayanan_baptis`
--

INSERT INTO `pelayanan_baptis` (`id_baptis`, `pemohon_baptis`, `jenis_baptis`, `jadwal_registrasi`, `jadwal_baptis`, `petugas_baptis`, `keterangan`, `status`) VALUES
('1', 'candra arjun', 'Baptis Sidi', '2022-06-27', '2022-06-28', 'Pdt. Simon Julianto', '-', 'Menunggu'),
('2', 'Hegar Yudha Candra Tionica', 'Baptis Dewasa', '2022-06-12', '2022-06-19', 'Pdt. Simon Julianto', '-', 'Terlaksana');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan_katekisasi`
--

CREATE TABLE `pelayanan_katekisasi` (
  `id_katekisasi` varchar(11) NOT NULL,
  `pemohon_katekisasi` varchar(50) NOT NULL,
  `jenis_katekisasi` varchar(20) NOT NULL,
  `jadwal_registrasi` date NOT NULL,
  `jadwal_katekisasi` date NOT NULL,
  `petugas_katekisasi` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelayanan_katekisasi`
--

INSERT INTO `pelayanan_katekisasi` (`id_katekisasi`, `pemohon_katekisasi`, `jenis_katekisasi`, `jadwal_registrasi`, `jadwal_katekisasi`, `petugas_katekisasi`, `keterangan`, `status`) VALUES
('1', 'andra', 'Katekisasi Baptis', '2022-06-27', '2022-06-28', 'aku', '-', 'Menunggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayan_ibadah`
--

CREATE TABLE `pelayan_ibadah` (
  `id_ibadah` int(11) NOT NULL,
  `nama_ibadah` text NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `jadwal_ibadah` datetime NOT NULL,
  `pengkotbah` varchar(50) NOT NULL,
  `organis` varchar(50) NOT NULL,
  `pemandu_nyanyian` varchar(100) NOT NULL,
  `bunga_mimbar` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `penanggung_jawab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelayan_ibadah`
--

INSERT INTO `pelayan_ibadah` (`id_ibadah`, `nama_ibadah`, `tempat`, `jadwal_ibadah`, `pengkotbah`, `organis`, `pemandu_nyanyian`, `bunga_mimbar`, `keterangan`, `penanggung_jawab`) VALUES
(1, 'Ibadah Minggu ke 1', 'GKJ Boyolali Induk', '2022-07-03 00:00:00', 'Pdt. Nur Bagus Aji Jatmiko', 'Sdr. Teddy', 'Kelompok Galatia', 'Kelompok Galatia', 'Ibadah Minggu', 'Untung Setiasa Bayu Purnama'),
(2, 'Ibadah Minggu ke 1', 'GKJ Boyolali Induk', '2022-07-03 00:00:00', 'Sumarni', 'Sdr. Dwi', '', 'Kelompok Filipi', 'Ibadah Minggu', 'Dkn. Ninik Panca R'),
(3, 'Ibadah Minggu ke 2', 'GKJ Boyolali Induk', '2022-07-10 00:00:00', 'Pdt. Simon Julianto, S.th,M.Msi', 'Sdr. Teddy', 'Kelompok Galatia', 'Kelompok Galatia', 'Ibadah Minggu', 'S. Wahono');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pepantan`
--

CREATE TABLE `pepantan` (
  `jenis_ibadah` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp(),
  `petugas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `proker`
--

CREATE TABLE `proker` (
  `id_proker` varchar(11) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `nama_proker` text NOT NULL,
  `jenis_kegiatan` text NOT NULL,
  `waktu` varchar(25) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `proker`
--

INSERT INTO `proker` (`id_proker`, `bidang`, `nama_proker`, `jenis_kegiatan`, `waktu`, `keterangan`) VALUES
('', 'Sekretaris', 'Pengelolaan Administrasi Kantor Gereja', 'Menerima, mengagenda dan mengarsip surat-surat masuk', 'Januari s/d Desember', ''),
('2', 'Bidang KEESAAN', 'Penyelenggaraan Kebaktian', 'menyelenggarakan kebaktian hari minggu/kebaktian rutin di induk dan pepantan', 'Januari-Desember', ''),
('3', 'komisi Ibadah', 'Penyelenggara ibadah minggu dan rutin', 'membantu menyiapkan perlengkapan, sarana ibadah, perlengkapan simbol gerejawi, petugas pendukung ibadah minggu dan rutin', 'Januari-Desember 2022', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE `saran` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur_komisi`
--

CREATE TABLE `struktur_komisi` (
  `idnama_komisi` varchar(50) NOT NULL,
  `periode_komisi` varchar(11) NOT NULL,
  `jumlah_anggota` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `struktur_komisi`
--

INSERT INTO `struktur_komisi` (`idnama_komisi`, `periode_komisi`, `jumlah_anggota`) VALUES
('Komisi Adiyuswa', '2021', '5'),
('Komisi Anak', '2021', '7'),
('komisi Ibadah', '2021', '7'),
('Komisi Keluarga Dewasa', '2021', '6'),
('Komisi Keluarga Muda', '2021', '4'),
('Komisi PAK dan Pendidikan', '2021', '5'),
('Komisi PEJ', '2021', '4'),
('Komisi Pemuda dan Remaja', '2021', '6'),
('Komisi Pralenan', '2021', '5'),
('Komisi Rumah Tangga dan Inventaris Gereja', '2021', '4'),
('Komisi SBKM', '2021', '3'),
('Panitia Pembangunan dan Renovasi Gedung Gereja', '2021', '4'),
('Pengurus PAUD', '2021', '5'),
('Pengurus Perpustakaan', '2021', '3'),
('Tim Multimedia', '2021', '4'),
('Tim Pengurangan Resiko Bencana', '2021', '7'),
('Tim Rip dan Renop', '2021', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur_majelis`
--

CREATE TABLE `struktur_majelis` (
  `idjabatan_majelis` varchar(50) NOT NULL,
  `periode_majelis` varchar(11) NOT NULL,
  `jumlah_anggota_majelis` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `struktur_majelis`
--

INSERT INTO `struktur_majelis` (`idjabatan_majelis`, `periode_majelis`, `jumlah_anggota_majelis`) VALUES
('Bendahara', '2021', '2'),
('Bidang Kajian', '2021', '2'),
('Bidang KEESAAN', '2021', '2'),
('Bidang KESPEL', '2021', '2'),
('Bidang Pembangunan', '2021', '2'),
('Bidang Penata Layanan', '2021', '2'),
('Bidang PIWG', '2021', '2'),
('ketua', '2021', '2'),
('Sekretaris', '2021', '2'),
('wakil ketua', '2021', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warta`
--

CREATE TABLE `warta` (
  `judul` text NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `warta_gereja` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `warta`
--

INSERT INTO `warta` (`judul`, `tanggal`, `warta_gereja`) VALUES
('Warta Gereja GKJ Boyolali edisi minggu ke 28', '2022-06-12', 'Punya mikel dihapus aja ini anak.docx'),
('Warta Gereja GKJ Boyolali edisi minggu ke 29', '2022-06-19', 'kartu ucapan tahlilan.pdf'),
('Warta Gereja GKJ Boyolali edisi minggu ke 30', '2022-06-26', 'B220181005.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_induk`
--
ALTER TABLE `data_induk`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `data_majelis`
--
ALTER TABLE `data_majelis`
  ADD PRIMARY KEY (`id_majelis`);

--
-- Indeks untuk tabel `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`jenis_persembahan`);

--
-- Indeks untuk tabel `pelayanan_baptis`
--
ALTER TABLE `pelayanan_baptis`
  ADD PRIMARY KEY (`id_baptis`);

--
-- Indeks untuk tabel `pelayanan_katekisasi`
--
ALTER TABLE `pelayanan_katekisasi`
  ADD PRIMARY KEY (`id_katekisasi`);

--
-- Indeks untuk tabel `pelayan_ibadah`
--
ALTER TABLE `pelayan_ibadah`
  ADD PRIMARY KEY (`id_ibadah`);

--
-- Indeks untuk tabel `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id_proker`);

--
-- Indeks untuk tabel `struktur_komisi`
--
ALTER TABLE `struktur_komisi`
  ADD PRIMARY KEY (`idnama_komisi`);

--
-- Indeks untuk tabel `struktur_majelis`
--
ALTER TABLE `struktur_majelis`
  ADD PRIMARY KEY (`idjabatan_majelis`);

--
-- Indeks untuk tabel `warta`
--
ALTER TABLE `warta`
  ADD PRIMARY KEY (`tanggal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `data_induk`
--
ALTER TABLE `data_induk`
  MODIFY `nik` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `data_majelis`
--
ALTER TABLE `data_majelis`
  MODIFY `id_majelis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9546;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
