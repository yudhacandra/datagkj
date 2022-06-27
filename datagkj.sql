-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2022 pada 19.07
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

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
  `username` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL DEFAULT current_timestamp(),
  `alamat` varchar(50) NOT NULL,
  `no_telpon` varchar(16) NOT NULL,
  `tanggal_registrasi` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('Aktif','Tidak Aktif','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telpon`, `tanggal_registrasi`, `status`) VALUES
(1, 'rio', '123', 'rio', 'jebol', '2022-06-03', ' ', '0137042174', '2022-06-03 00:57:31', 'Aktif'),
(2, 'yudha', '321', 'hegar yudha c', 'boyolali', '2022-06-02', 'byl', '08082823', '2022-06-03 00:58:45', 'Aktif');

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
  `no_telpon` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('Aktif','Tidak Aktif','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_majelis`
--

INSERT INTO `data_majelis` (`id_majelis`, `nama`, `username`, `jabatan_majelis`, `tanggal_registrasi`, `no_telpon`, `password`, `status`) VALUES
(1, 'Hegar Yudha Candra Tionica', 'yudha', 'Ketua Majelis', '2022-06-20', '082265589091', 'yudha11', 'Aktif'),
(2, 'Dkn. Sri Wahono', 'Wahono', 'Bidang Kajian', '2022-06-22', '', '1234567', 'Aktif'),
(26, 'Untung Setiasa Bayu Purnama', 'untung', 'Sekretaris', '2022-06-22', '', 'boyolali', 'Aktif'),
(27, 'Sri Saptiwi', 'saptiwi', 'Bendahara', '2022-06-22', '', 'saptiwi', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `induk`
--

CREATE TABLE `induk` (
  `jenis_ibadah` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp(),
  `petugas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `pemasukan_harian` text NOT NULL,
  `pemasukan_mingguan` text NOT NULL,
  `pemasukan_bulanan` text NOT NULL,
  `jumlah_pemasukan` text NOT NULL,
  `pengeluaran` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Struktur dari tabel `pelayan_ibadah_teras`
--

CREATE TABLE `pelayan_ibadah_teras` (
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
-- Dumping data untuk tabel `pelayan_ibadah_teras`
--

INSERT INTO `pelayan_ibadah_teras` (`id_ibadah`, `nama_ibadah`, `tempat`, `jadwal_ibadah`, `pengkotbah`, `organis`, `pemandu_nyanyian`, `bunga_mimbar`, `keterangan`, `penanggung_jawab`) VALUES
(1, 'Ibadah Minggu ke 1', 'Pepantan Teras', '2022-07-03 00:00:00', 'Sri Wahono', '-', '-', '-', 'Ibadah Minggu ke 1', ''),
(2, 'Ibadah Minggu ke 2', 'Pepantan Teras', '2022-07-10 00:00:00', 'Rina Kristyaningsih', '-', '-', '-', '-', '-');

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
('ketua', '2021', '1'),
('Sekretaris', '2021', '2'),
('wakil ketua', '2021', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warta`
--

CREATE TABLE `warta` (
  `warta_gereja` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indeks untuk tabel `pelayan_ibadah`
--
ALTER TABLE `pelayan_ibadah`
  ADD PRIMARY KEY (`id_ibadah`);

--
-- Indeks untuk tabel `pelayan_ibadah_teras`
--
ALTER TABLE `pelayan_ibadah_teras`
  ADD PRIMARY KEY (`id_ibadah`);

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
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_induk`
--
ALTER TABLE `data_induk`
  MODIFY `nik` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `data_majelis`
--
ALTER TABLE `data_majelis`
  MODIFY `id_majelis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
