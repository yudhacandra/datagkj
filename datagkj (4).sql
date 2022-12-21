-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 06:18 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(8) NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` varchar(16) NOT NULL,
  `status` enum('Aktif','Tidak Aktif','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `alamat`, `no_telpon`, `status`) VALUES
(20222, 'jerry', 'admin', '12345', '', '', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `data_jemaat`
--

CREATE TABLE `data_jemaat` (
  `no_induk` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
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
  `tanggal_terdaftar` date NOT NULL DEFAULT current_timestamp(),
  `keterangan_tambahan` text NOT NULL,
  `Id_komisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_jemaat`
--

INSERT INTO `data_jemaat` (`no_induk`, `nama`, `jabatan`, `jenis_kelamin`, `alamat`, `lahir`, `baptis`, `sidi`, `nikah`, `meninggal`, `orang_tua`, `suami_istri`, `dari_gereja`, `ke_gereja`, `keterangan`, `tanggal_terdaftar`, `keterangan_tambahan`, `Id_komisi`) VALUES
(4, 'RETNO MURNIANINGSIH', '1', 'P', 'Jl. Merbabu 96 Boyolali', '07 Mei 1968', '14 Juli 1968', '25 Dessember 1986', '14 Januari 1995', '', 'Alm. Sudaryono & Sih El Mirmani', 'Alm. Agus Heru Purnomo', 'GKJ Boyolali', '', 'Baptis', '1968-07-14', 'ROMA', 11),
(16, 'SRIYATI', '4', 'P', 'Ngrancah Rt 06/ Rw 02 Pusporenggo, Musuk', '12 Desember 1945', '11 Agustus 1963', '', '20 Oktober 1974', '', '', 'Mariadi', 'GKJ Boyolali', '', 'Baptis', '1963-08-11', 'ROMA', 1),
(18, 'MARTI HARTINI', '4', 'P', 'Jl. Merbabu 86 Boyolali', '17 Juni 1942', '02 Februari 1964', '', '21 Juli 1965', '', '', 'Alm. Sudarmo', 'GKJ Boyolali', '', 'Baptis', '1964-02-02', 'ROMA', 1),
(22, 'JUNI JERMIATI', '', 'P', 'Griya Pulisen', 'Boyolali, 18 Juni 1971', '07 September 1971', '17 April 1992', '19 September 1998', '', 'Alm. Sudarmo & Marti Hartini', 'Pdt. Simon Julianto', 'GKJ Boyolali', '', 'Baptis', '1971-09-07', 'GALATIA', 1),
(23, 'EMANUEL PURNOMOHADI', '', 'L', 'Jl. Merbabu 86 Boyolali', 'Boyolali, 05 Januari 1977', '24 Juli 1977', '17 November 1996', '', '', 'Alm. Sudarmo & Marti Hartini', 'Dwi Ari Sulistyowati', 'GKJ Boyolali', '', 'Baptis', '1977-07-24', 'ROMA', 0),
(30, 'KRISTIANTO BUDI SANTOSO', '1', 'L', 'Kebon Bimo', '29 Maret 1977', '24 Juli 1977', '21 Desember 2003', '', '', 'Kasmanto', 'Furinayu Oktaviani', 'GKJ Boyolali', '', 'Baptis', '1977-07-24', 'FILIPI', 0),
(38, 'HARTINI', '2', 'P', 'Jl. Kantil Surowedanan, Boyolali', 'Sukoharjo, 06 Maret 1945', '02 Februari 1968', '', '09 Juli 1963', '', '', 'Alm. Soleman', 'GKJ Boyolali', '', 'Baptis', '1968-02-02', 'ROMA', 0),
(41, 'HARRY ANANTO', '1', 'L', 'Winong Baru, Rt 02, Gang Sadewa, No.18, Winong', '16 Mei 1969', '17 Agustus 1969', 'Luluk Widiyana', '', '', 'Alm. Soleman', 'Luluk Widiyana', 'GKJ Boyolali Pepantan Sunggingan', '', 'Baptis', '1969-07-17', 'PEPANTAN SUNGGINGAN', 1),
(44, 'ESTI SUMIRADSIH', '', 'P', 'Watu Talenan, Pulisen, Boyolali', 'Purworejo, 15 April 1944', '30 April 1944', '26 Juli 1964', '06 September 1966', '', '', 'Alm. Sartono', 'GKJ Boyolali', '', 'Baptis', '1964-06-26', 'ROMA', 0),
(47, 'IKE CHOSTANTI', '', 'P', 'Kampung Bayangkara, Siswodipuran', '09 April 1956', '10 Mei 1959', '26 Januari 1976', '', '', 'Alm. Reinhard Horman & Suprapti', '', 'GKJ Boyolali', '', 'Baptis', '1959-05-10', 'GALATIA', 0),
(50, 'AGUSTINUS HORMAN', '', 'L', 'BSI, Karanggeneng, Boyolali', '26 Juni 1961', '25 Desember 1961', '', '', '', 'Alm. Reinhard Horman & Suprapti', '', 'GKJ Boyolali', '', 'Baptis', '1961-12-25', 'GALATIA', 0),
(51, 'NURYATI HORMAN', '', 'P', 'Kampung Bayangkara, Siswodipuran', '13 Februari 1966', '25 Desember 1966', '', '', '', 'Alm. Reinhard Horman & Suprapti', '', 'GKJ Boyolali', '', 'Baptis', '1966-12-25', 'GALATIA', 0),
(52, 'SRI PUJI ASTUTI HORMAN', '', 'P', 'Kampung Bayangkara, Siswodipuran', '12 November 1969', '20 Juni 1970', '25 Desember 1993', '', '', 'Alm. Reinhard Horman & Suprapti', '', 'GKJ Boyolali', '', 'Baptis', '1970-06-20', 'GALATIA', 0),
(62, 'HENDRASTOTO', '', 'L', 'Jl. Detodano C.24, Griya Pulisen, Boyolali', '12 Janurai 1962', '03 April 1966', '25 Agustus 1982', '12 April 1992', '', '', 'Umi Soryani', 'GKJ Boyolali', '', 'Baptis', '1966-04-03', 'GALATIA', 0),
(68, 'MARSINAH', '', 'P', 'Perum BSP 2, Karanggeneng, Boyolali', 'Boyolali, 30 September 1942', '05 Mei 1943', '10 September 1959', '30 Agustus 1961', '', '', 'Alm. T. Soemardi', 'GKJ Boyolali', '', 'Baptis', '1943-05-05', 'FILIPI', 0),
(79, 'MENIEK', '', 'P', 'Surowedanan, Boyolali', '20 Januari 1946', '30 Oktober 1983', '', '', '', '', 'Alm. Madi', 'GKJ Boyolali', '', 'Baptis', '1983-10-30', 'ROMA', 0),
(82, 'NINIK PANCA RAMADI', '', 'P', 'Surowedanan, Boyolali', 'Boyolali, 07 November 1978', '30 Oktober 1983', '25 Desember 1998', '', '', 'Alm. Madi & Meniek', '', 'GKJ Boyolali', '', 'Baptis', '1983-10-30', 'ROMA', 0),
(86, 'SEPTIAWAN', '', 'L', 'Karanglo, Rt 04/Rw 03, Musuk, Boyolali', '24 September 1961', '07 Juni 1964', '', '', '', 'Alm. Dahono', 'Siti Harini', 'GKJ Boyolali', '', 'Baptis', '1964-06-07', 'PEPANTAN MUSUK', 0),
(97, 'ARGO WURIYANTORO', '', 'L', 'Pulisen, Boyolali', '04 Mei 1967', '13 Agustus 1967', '01 Januari 2021', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1967-08-13', 'GALATIA', 0),
(110, 'WASINO GRACIA', '', 'L', 'Surowedanan, Boyolali', 'Wonogiri, 06 Juni 1961', '22 Maret 1981', '', '05 Juli 1988', '', '', 'Giyatmi', 'GKJ Boyolali', '', 'Baptis', '1981-03-22', 'ROMA', 0),
(111, 'GIYATMI', '', 'P', 'Surowedanan, Boyolali', 'Karanggannyar, 14 Mei 1965', '21 Mei 1989', '21 Mei 1989', '05 Juli 1988', '', '', 'Wasino Gracia', 'GKJ Boyolali', '', 'Baptis', '1989-03-21', 'ROMA', 0),
(118, 'KUSNAH', '', 'P', 'Surowedanan, Boyolali', 'Boyolali, 20 Januari 1937', '25 Desember 1979', '25 Desember 1979', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1979-12-25', 'ROMA', 0),
(122, 'ARIF BUDIYANTO', '', 'L', 'Surowedanan, Boyolali', 'Boyolali, 06 Juni 1973', '25 Desember 1982', '27 April 1997', '', '', 'Kusnah', 'Isnawati', 'GKJ Boyolali', '', 'Baptis', '1982-12-25', 'ROMA', 0),
(123, 'KUS YULIANTI', '', 'P', 'Surowedanan, Boyolali', '28 Juli 1976', '25 Desember 1982', '27 April 1997', '', '', 'Kusnah', 'Suhartono', 'GKJ Boyolali', '', 'Baptis', '1982-12-25', 'ROMA', 0),
(126, 'EKO PUTRA WISNU AGUNG SUBROTO', '', 'L', 'Jl. Merbabu 3 No.16, Rt 003/Rw 003, Siswodipuran', 'Boyolali, 06 Maret 1975', '25 Desember 1995', '', '', '', '', 'Sri Lestari', 'GKJ Boyolali', '', 'Baptis', '1995-12-25', 'EFESUS', 0),
(132, 'ERNA SUPRIYANTI', '', 'P', 'Ngrancah Rt 07/ Rw 02 Pusporenggo, Musuk', '09 Juli 1975', '25 Desember 1985', '', '04 November 2000', '', 'Sriyati', 'Bernandheta Dwi Ariyanto', 'GKJ Boyolali', '', 'Baptis', '1985-12-25', 'ROMA', 0),
(133, 'LILIK SURYA DWI PURNOMO', '', 'L', 'Ngrancah Rt 06/ Rw 02 Pusporenggo, Musuk', 'Boyolali, 25 Januari 1979', '25 Desember 1985', '19 Desember 2004', '', '', 'Sriyati', 'Bernandheta Fatmawati', 'GKJ Boyolali', '', 'Baptis', '1985-12-25', 'ROMA', 0),
(134, 'BAMBANG SURAHNO', '', 'L', 'Ngrancah Rt 06/ Rw 02 Pusporenggo, Musuk', '25 September 1956', '13 Maret 1989', '13 Maret 1988', '', '', 'Alm. Sukir', 'Rukiyanti', 'GKJ Boyolali', '', 'Baptis', '1989-03-13', 'ROMA', 0),
(135, 'RUKIYANTI', '', 'P', 'Ngrancah Rt 06/ Rw 02 Pusporenggo, Musuk', '07 Juni 1965', '15 Desember 1987', '', '', '', '', 'Bambang Surahno', 'GKJ Boyolali', '', 'Baptis', '1987-12-15', 'ROMA', 0),
(137, 'SRI SULAMI', '', 'P', 'Ngrancah Rt 06/ Rw 02 Pusporenggo, Musuk', '22 Desember 1959', '25 Desember 1960', '', '', '', 'Alm. Sukir', '', 'GKJ Boyolali', '', 'Baptis', '1960-12-25', 'ROMA', 0),
(140, 'ANIK RATMIYATI', '', 'P', 'Kampung Widaran, Pulisen, Boyolali', 'Boyolali, 04 November 1956', '10 Maret 1986', '', '01 Juli 1976', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1986-03-10', 'ROMA', 0),
(160, 'KRISWASANA PINTO RAHARJO', '', 'L', 'Jl. Pemuda 20, Boyolali', 'Malang, 02 Mei 1983', '19 Juni 1983', '25 Desember 1996', '', '', '', 'Sarah Febriana Setyowati', 'GKJ Boyolali', '', 'Baptis', '1983-06-19', 'ROMA', 0),
(163, 'SUMARNI', '', 'P', 'Surowedanan, Rt 01/ Rw 09, Pulisen,  Boyolali', 'Boyolali, 08 Februari 1955', '30 Juli 1978', '', '16 Oktober 1978', '', '', 'Alm. Wahyudi', 'GKJ Boyolali', '', 'Baptis', '1978-07-30', 'ROMA', 0),
(164, 'WAHYU ARI MARDANI', '', 'P', 'Surowedanan, Rt 01/ Rw 09, Pulisen,  Boyolali', '08 Juni 1979', '25 Desember 1980', '15 Desember 1998', '', '', 'Alm. Wahyudi & Sumarni', '', 'GKJ Boyolali', '', 'Baptis', '1980-12-25', 'ROMA', 0),
(165, 'AGUSTINA WINAHYU', '', 'P', 'Surowedanan, Rt 01/ Rw 09, Pulisen,  Boyolali', 'Boyolali, 06 Agustus 1980', '', '19 September 1999', '', '', 'Alm. Wahyudi & Sumarni', '', 'GKJ Boyolali', '', 'Baptis', '1999-09-19', 'ROMA', 0),
(166, 'SUNARNI', '', 'P', 'Surowedanan, Rt 01/ Rw 09, Pulisen,  Boyolali', '29 Desember 1958', '25 Desember 1960', '', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1960-12-25', 'ROMA', 0),
(168, 'STEFANUS SUPONO', '', 'L', 'Winong Baru, Rt 02/ Rw XXI, Gang Sadewa, No.20, Winong, Boyolali', 'Boyolali, 17 September 1946', 'GKJ Delanggu, 22 Desember 1960', '', '', '', '', 'Sri Lastuti Endang Merdekanti', 'GKJ Boyolali', '', 'Baptis', '1960-12-22', 'PEPANTAN SUNGGINGAN', 0),
(169, 'SRI LASTUTI ENDANG MERDEKANTI', '', 'P', 'Winong Baru, Rt 02/ Rw XXI, Gang Sadewa, No.20, Winong, Boyolali', 'Solo, 17 Januari 1949', 'GKJ Simo, 20 Mei 1975', '', '23 Agustus 1975', '', '', 'Stefanus Supono', 'GKJ Boyolali', '', 'Baptis', '1975-05-20', 'PEPANTAN SUNGGINGAN', 0),
(170, 'LULUK WIDYANA', '', 'P', 'Winong Baru, Rt 02, Gang Sadewa, No.18, Winong', 'Boyolali, 02 Agustus 1976', 'GKJ Simo, 25 Desember 1976', 'GKJ Boyolali, 25 Desember 1995', '', '', '', 'Harry Ananto', 'GKJ Boyolali', '', 'Baptis', '1995-12-25', 'PEPANTAN SUNGGINGAN', 0),
(171, 'EPILIYA WIDYASTUTI', '', 'P', 'Winong Baru, Rt 02/ Rw XXI, Gang Sadewa, No.20, Winong, Boyolali', 'Boyolali, 01 April 1978', '', '25 Desember 1998', '', '', '', 'Herry Tri Wibowo', 'GKJ Boyolali', '', 'Baptis', '1998-12-25', 'PEPANTAN SUNGGINGAN', 0),
(173, 'MISTIKAH', '', 'P', 'Widaran, Boyolali', 'Solo, 02 September 1949', '16 Februari 1986', '', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1986-02-16', 'ROMA', 0),
(174, 'KUNTO WIDIYATMOKO', '', 'L', 'Widaran No.5, Pulisen, Boyolali', 'Boyolali, 20 Juni 1972', '16 Februari 1986', '21 Februari 1993', '', '', 'Mistikah', '', 'GKJ Boyolali', '', 'Baptis', '1986-02-16', 'ROMA', 0),
(175, 'NUR WIDANINGSIH', '', 'P', 'Yogyakarta', 'Boyolali, 20 September 1976', '16 Februari 1986', '22 Desember 1996', '', '', 'Mistikah', 'Mattias Teguh Nugroho', 'GKJ Boyolali', '', 'Baptis', '1986-02-16', 'ROMA', 0),
(186, 'HANANTO WIBOWO', '', 'L', 'Jl. Sandang Lawe, No.30, Karanggeneng, Boyolali', 'Karanggannyar, 16 Juni 1971', '30 April 1972', '21 Februari 1993', '', '', '', 'Hening Setyowati', 'GKJ Boyolali', '', 'Baptis', '1972-04-30', 'PEPANTAN SUNGGINGAN', 0),
(190, 'SRI MARDIYANTI', '', 'P', 'Kiringan, Boyolali', '12 September 1962', '25 Desember 1963', '', '19 Januari 1985', '', 'Alm. Mardi Atmojo', '', 'GKJ Boyolali', '', 'Baptis', '1963-12-25', 'PEPANTAN SUNGGINGAN', 0),
(206, 'ANTONO HERRY PURNOMO ADHI', '', 'L', 'Sri Mulyo Rt 02/ Rw 01, Karanggeneng, Boyolali', 'Boyolali, 07 September 1975', 'GKJ Boyolali, 01 April 1983', '25 Desember 1998', '', '', 'Alm. Soekidi', 'Dewi Wahyu Murti', 'GKJ Boyolali', '', 'Baptis', '1983-04-01', 'PEPANTAN SUNGGINGAN', 0),
(210, 'NUGROHO ARIF BUDI SANTOSO', '', 'L', 'Tegal Mulyo, Rt 04/ Rw 05, Karanggeneng, Boyolali', 'Boyolali, 12 Maret 1986', '04 Mei 1986', '', '', '', 'Alm. Prawoto', 'Sri Harnani', 'GKJ Boyolali', '', 'Baptis', '1986-05-04', 'PEPANTAN SUNGGINGAN', 0),
(211, 'ENI SUMARTI', '', 'P', 'Tegal Mulyo, Rt 04/ Rw 05, Karanggeneng, Boyolali', 'Boyolali, 03 September 1963', '17 April 1981', '', '01 Januari 1985', '', '', 'Alm. Prawoto', 'GKJ Boyolali', '', 'Baptis', '1981-04-17', 'PEPANTAN SUNGGINGAN', 0),
(212, 'IWAN WIDOYO', '', 'L', 'Mojosongo, Boyolali', 'Boyolali, 06 Juli 1960', '01 April 1983', '', '27 September 1982', '', '', 'ARIYANI INDARWATI', 'GKJ Boyolali', '', 'Baptis', '1983-04-01', 'FILIPI', 0),
(213, 'ARIYANI INDARWATI', '', 'P', 'Mojosongo, Boyolali', 'Boyolali, 21 Maret 1963', '04 April 1964', '01 April 1983', '27 September 1982', '', '', 'Iwan Widoyo', 'GKJ Boyolali', '', 'Baptis', '1964-04-04', 'FILIPI', 0),
(214, 'ANNIKA OKTAVIA', '', 'P', 'Mojosongo, Boyolali', 'Boyolali, 10 Oktober 1982', '01 April 1983', '21 Desember 2003', '', '', 'Iwan Widoyo & Ariyani Indarwati', '', 'GKJ Boyolali', '', 'Baptis', '1983-04-01', 'FILIPI', 0),
(215, 'BUDIYANTO HW', '', 'L', 'Jl. Garuda, Kismobudoyo, Boyolali', 'Jakarta, 29 Juni 1959', 'GKJ Wonogiri, 30 April 1961', '18 Maret 1979', '19 Januari 1985', '', '', 'Suis Meini', 'GKJ Boyolali', '', 'Baptis', '1961-04-30', 'FILIPI', 0),
(217, 'SUIS MEINI', '', 'P', 'Jl. Garuda, Kismobudoyo, Boyolali', 'Surakarta, 21 Mei 1960', '22 Desember 1968', '12 September 1982', '19 Januari 1985', '', '', 'Budianto HW', 'GKJ Boyolali', '', 'Baptis', '1968-12-22', 'FILIPI', 0),
(235, 'SAMIJEM', '', 'P', 'Mangunjiwo, Rt 02/Rw 01, Banaran, Boyolali', 'Sukoharjo, 24 November 1949', 'GKJ Baki, 07 Juli 1968', '', '14 September 1968', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1968-07-07', 'PEPANTAN SUNGGINGAN', 0),
(236, 'EKA YULIYADI', '', 'L', 'Mangunjiwo, Rt 02/Rw 01, Banaran, Boyolali', 'Boyolali, 24 Juli 1969', 'GKJ Boyolali, 16 Agustus 1970', 'GKJ Boyolali, 04 Oktober 1992', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1970-08-16', 'PEPANTAN SUNGGINGAN', 0),
(238, 'YANUARIH TRI WAHYUNI', '', 'P', 'Kadilangu, Rt 04/Rw 03, Baki, Sukoharjo', 'Boyolali, 14 Januari 1973', 'GKJ Boyolali, 27 Oktober 1974', 'GKJ Boyolali, 06 November 1994', '', '', 'Alm. Sagiyadi', 'Samuel Tri Jaka', 'GKJ Boyolali', '', 'Baptis', '1994-10-27', 'PEPANTAN SUNGGINGAN', 0),
(239, 'AGUSTIN CATUR KRISTANTI', '', 'P', 'Griya Indah Serpong Blok G.10 No.7, Gunung Sindur, Bogor', 'Boyolali, 09 Agustus 1974', '24 Juli 1977', 'GKJ Boyolali, 06 November 1994', '', '', 'Alm. Sagiyadi', 'Bisler Simanungkalit', 'GKJ Boyolali', '', 'Baptis', '1977-07-24', 'PEPANTAN SUNGGINGAN', 0),
(240, 'Y.F WIDAYATDADI', '', 'L', 'Jl. Pandanaran 245, Banaran, Boyolali', 'Boyolali, 25 Oktober 1950', 'Gereja Katolik Boyolali, 14 April 1968', '14 April 1968', '07 April 1973', '', '', 'Sarwihati', 'GKJ Boyolali', '', 'Baptis', '1968-04-14', 'PEPANTAN SUNGGINGAN', 0),
(241, 'SARWIHATI', '', 'P', 'Jl. Pandanaran 245, Banaran, Boyolali', 'Surakarta, 26 Januari 1941', 'GKJ Boyolali, 02 Juni 1963', '', '07 April 1973', '', '', 'Y.F Widayatdadi', 'GKJ Boyolali', '', 'Baptis', '1963-06-02', 'PEPANTAN SUNGGINGAN', 0),
(254, 'SUYAMTI', '', 'P', 'Kebonbimo, Boyolali', 'Semarang, 08 September 1951', '25 Januari 1969', '', '15 Februari 1980', '', '', 'Alm. Jimo H.S', 'GKJ Boyolali', '', 'Baptis', '1969-01-25', 'FILIPI', 0),
(255, 'FURINAYU OKTAVIANI', '', 'P', 'Kebonbimo, Boyolali', '22 Oktober 1980', '01 April 1983', '25 Desember 1998', '', '', '', 'Kristianto Budi Santoso', 'GKJ Boyolali', '', 'Baptis', '1983-04-01', 'FILIPI', 0),
(257, 'KUKUH TRI AGUS KRISTIYAWAN', '', 'L', 'Kebonbimo, Boyolali', 'Boyolali, 19 Agustus 1985', '25 Desember 1985', '', '', '', '', 'Alm. Jimo H.S & Suyamti', 'GKJ Boyolali', '', 'Baptis', '1985-12-25', 'FILIPI', 0),
(264, 'SRINARIYATI', '', 'P', 'Kebonbimo, Boyolali', 'Sukoharjo, 26 Mei 1955', '25 Desember 1976', '23 Mei 1976', '05 Juni 1976', '', '', 'Alm. Suparmo', 'GKJ Boyolali', '', 'Baptis', '1976-12-25', 'FILIPI', 0),
(266, 'YOHANA KRISTIANI', '', 'P', 'Kebonbimo, Boyolali', 'Boyolali, 17 September 1978', '17 April 1981', '', '', '', 'Alm. Suparmo', 'Budi Purwanto', 'GKJ Boyolali', '', 'Baptis', '1981-04-17', 'FILIPI', 0),
(269, 'YOHANES PRASETYA MAHANANI', '', 'L', 'Kebonbimo, Boyolali', 'Boyolali, 20 Februari 1986', '28 Maret 1986', '', '', '', '', 'Marlina Triningsih', 'GKJ Boyolali', '', 'Baptis', '1986-03-28', 'FILIPI', 0),
(270, 'SRI PADMININGSIH', '', 'P', 'Kampung Bayangkara, Rt 04, Siswodipuran', 'Kendal, 21 April 1957', '27 Agustus 1978', '', '09 April 1988', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1978-08-27', 'EFESUS', 0),
(271, 'SUKESI', '', 'P', 'Surodadi, Rt 04/Rw 14, Siswodipuran', 'Yogyakarta, 03 Mei 1949', '21 Maret 1968', '', '02 Mei 1976', '', '', 'Alm. Handono', 'GKJ Boyolali', '', 'Baptis', '1968-03-21', 'EFESUS', 0),
(273, 'MUSIRAH', '', 'P', 'Jl. Pahlawan No.48, Boyolali', 'Yogyakarta, 07 Januari 1951', '25 Desember 1968', '', '09 Desember 1977', '', '', 'Alm. Darmadi', 'GKJ Boyolali', '', 'Baptis', '1968-12-25', 'EFESUS', 0),
(275, 'ARI KRISTIADI', '', 'L', 'Jl. Pahlawan No.48, Boyolali', 'Boyolali, 22 Februari 1983', '01 April 1983', '', '', '', 'Musirah', '', 'GKJ Boyolali', '', 'Baptis', '1983-04-01', '', 0),
(276, 'SRI JOKO WALUYO', '', 'L', 'Perum BSP 2, Rt 06/ Rw 011, Karanggeneng, Boyolali', '01 Maret 1962', '25 Desember 1985', '', '25 Februari 1986', '', '', 'Maryatun', 'GKJ Boyolali', '', 'Baptis', '1985-12-25', 'FILIPI', 0),
(277, 'MARYATUN', '', 'P', 'Perum BSP 2, Rt 06/ Rw 011, Karanggeneng, Boyolali', 'Boyolali, 01 Maret 1967', '16 Februari 1986', '', '25 Februari 1986', '', '', 'Sri Joko Waluyo', 'GKJ Boyolali', '', 'Baptis', '1986-02-16', 'FILIPI', 0),
(280, 'NETY SUSILOWATI', '', 'P', 'Jl. Pandanaran No.09, Rt 005/ Rw 11, Siswodipuran', 'Klaten, 14 September 1954', '25 Desember 1975', '', '', '', '', 'Alm. Sri Untoro', 'GKJ Gondang Winangun', 'GKJ Boyolali', 'Baptis', '1975-12-25', 'EFESUS', 0),
(281, 'YUDHA PUTRA SUSIANTORO', '', 'L', 'Jl. Pandanaran No.09, Rt 005/ Rw 11, Siswodipuran', 'Lampung, 02 Mei 1977', 'GKJ Gondang Winangun, 01 September 1985', '', '', '', 'Alm. Sri Untoro & Nety Susilowati', '', 'GKJ Boyolali', '', 'Baptis', '2000-12-25', '', 0),
(289, 'SRI BUDI SUSANTO', '', 'L', 'Sumur Umum, Pulisen, Boyolali', '20 April 1961', '06 Juli 1961', '13 Juni 1982', '09 April 1987', '', '', 'Jeny Christiana Dewi Sembada', 'GKJ Boyolali', '', 'Baptis', '1961-07-06', 'GALATIA', 0),
(291, 'SRI SUWARTI', '', 'P', 'Ngesti harjo, Rt 07/Rw08, Siswodipuran, Boyolali', 'Boyolali, 11 November 1948', '22 April 1979', '', '11 Januari 1975', '', '', 'Alm. Suwardi', 'GKJ Boyolali', '', 'Baptis', '1979-04-22', 'EFESUS', 0),
(292, 'WIWIET PRASETYANTI', '', 'P', 'Ngesti harjo, Rt 07/Rw08, Siswodipuran, Boyolali', 'Boyolali, 08 Desember 1975', '22 April 1979', '16 Maret 1997', '', '', 'Alm. Suwardi', 'Erimso Sinaga', 'GKJ Boyolali', '', 'Baptis', '1979-04-22', 'EFESUS', 0),
(299, 'DONO RUMEKSO', '', 'L', 'Jl. Pandanaran V, Boyolali', 'Boyolali, 26 Juli 1965', '01 Agustus 1965', '07 Juni 1987', '20 Juli 1987', '', '', 'Enek Endang', 'GKJ Boyolali', '', 'Baptis', '1965-08-01', 'EFESUS', 0),
(300, 'ENEK ENDANG', '', 'P', 'Jl. Pandanaran V, Boyolali', 'Semarang, 28 Desember 1966', '14 Juni 1987', '14 Juni 1987', '20 Juli 1987', '', '', 'Dono Rumekso', 'GKJ Boyolali', '', 'Baptis', '1987-06-14', 'EFESUS', 0),
(303, 'DISNITA PRISMARINI PRAMUDITA', '', 'P', 'Jl. Pandanaran V, Boyolali', 'Boyolali, 31 Desember 1987', '21 Mei 1989', '21 Maret 2008', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1989-05-21', 'EFESUS', 0),
(308, 'SRI SUDJATININGSIH', '', 'P', 'Surodadi, Siswodipuran', '18 Desember 1951', '', '', '20 Agustus 1973', '', '', 'Alm. Djoko waluyo', 'GKJ Boyolali', '', 'Baptis', '1973-12-18', 'EFESUS', 0),
(315, 'WIWIK RADYUNI', '', 'P', 'Pulisen, Boyolali', 'Boyolali, 22 Juni 1964', '20 Februari 1972', '14 Februari 1982', '16 Maret 2000', '', '', 'El Budi', 'GKJ Boyolali', '', 'Baptis', '1972-02-20', 'GALATIA', 0),
(318, 'PUSPANINGRUM', '', 'P', 'Pulisen, Boyolali', 'Boyolali, 15 Maret 1969', '25 Desember 1989', '', '03 Oktober 1998', '', '', 'Hariyanto', 'GKJ Boyolali', '', 'Baptis', '1989-12-25', 'GALATIA', 0),
(322, 'SUNARTI', '', 'P', 'Surodadi, Siswodipuran', 'Wonogiri, 18 Oktober 1949', '28 Maret 1986', '', '16 September 1970', '', '', 'Alm. Sukoto', 'GKJ Boyolali', '', 'Baptis', '1986-03-28', 'EFESUS', 0),
(323, 'ARIS FAJAR SURYANTO', '', 'L', 'Colomadu, Karangngannyar', 'Boyolali, 16 April 1973', '28 Maret 1986', '25 Desember 1998', '', '', 'Sunarti', '', 'GKJ Boyolali', '', 'Baptis', '1986-03-28', 'EFESUS', 0),
(324, 'HANGGO SUSILO', '', 'L', 'BSI, Karanggeneng, Boyolali', 'Boyolali, 04 Juli 1978', '28 Maret 1986', '25 Desember 1998', '', '', 'Sunarti', '', 'GKJ Boyolali', '', 'Baptis', '1986-03-28', 'EFESUS', 0),
(333, 'Ny. SULATIN', '', 'P', 'Surodadi, Siswodipuran', '02 September 1943', '25 Desember 1985', '', '', '', '', 'Alm. Sulatin', 'GKJ Boyolali', '', 'Baptis', '1985-12-25', 'EFESUS', 0),
(334, 'AGUS DWI DOSO', '', 'L', 'Surodadi, Siswodipuran', '26 Agustus 1965', '26 Agustus 1986', '', '', '', 'Sulatin', '', 'GKJ Boyolali', '', 'Baptis', '1986-08-26', 'EFESUS', 0),
(340, 'HEDRATMOKO', '', 'L', 'Madu Mulyo, Pulisen, Boyolali', 'Magelang, 14 Januari 1955', '25 Desember 1956', '', '30 Mei 1989', '', '', 'Sri Rahayu Ningsih', 'GKJ Boyolali', '', 'Baptis', '1956-12-25', 'GALATIA', 0),
(341, 'SRI RAHAYU NINGSIH', '', 'P', 'Madu Mulyo, Pulisen, Boyolali', 'Boyolali, 02 Februari 1963', '25 Desember 1964', '', '30 Mei 1989', '', '', 'Hendratmoko', 'GKJ Boyolali', '', 'Baptis', '1964-12-25', 'GALATIA', 0),
(342, 'MAHATMA HENDRANATA SAPUTRA', '', 'L', 'Madu Mulyo, Pulisen, Boyolali', 'Boyolali, 19 Januari 1990', '03 April 1994', '', '', '', 'Hendratmoko', '', 'GKJ Boyolali', '', 'Baptis', '1994-04-03', 'GALATIA', 0),
(343, 'AGUS PRATIKNO', '', 'L', 'Lodalang, Rt 03/rW 08, Siswodipuran, Boyolali', 'Boyolali, 25 April 1956', '25 Desember 1979', '', '25 Desember 1979', '', '', 'Sri Budiastuti', 'GKJ Boyolali', '', 'Baptis', '1979-12-25', 'EFESUS', 0),
(344, 'SRI BUDIASTUTI', '', 'P', 'Lodalang, Rt 03/rW 08, Siswodipuran, Boyolali', 'Boyolali, 10 September 1958', '', '', '25 Desember 1979', '', '', 'Agus Praktikno', 'GKJ Boyolali', '', 'Baptis', '1977-12-25', 'EFESUS', 0),
(347, 'YUNITA TITI PRATIWI', '', 'P', 'Lodalang, Rt 03/ Rw 08, Siswodipuran, Boyolali', 'Boyolali, 29 Juni 1984', '25 Desember 1984', '', '', '', 'Agus Pratikno', '', 'GKJ Boyolali', '', 'Baptis', '1984-12-25', 'EFESUS', 0),
(352, 'HADI TRI WINARNO', '', 'L', '', 'Klaten, 10 Agustus 1959', '25 Januari 1984', '', '18 Mei 1984', '', '', 'Suparmi', 'GKJ Boyolali', '', 'Baptis', '1984-01-25', 'EFESUS', 0),
(353, 'SUPARMI', '', 'P', '', 'Boyolali, 08 November 1959', '25 Desember 1980', '', '18 Mei 1984', '', '', 'Hadi Tri Winarno', 'GKJ Boyolali', '', 'Baptis', '1980-12-25', 'EFESUS', 0),
(354, 'REGINA KRISTI P', '', 'P', '', 'Boyolali, 02 April 1990', '25 Desember 2007', '', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '2007-12-25', 'EFESUS', 0),
(355, 'NORNA NINGSIH', '', 'P', 'Jl. Manggis, No.9, Boyolali', 'Boyolali, 01 Juni 1964', '25 Desember 1986', '', '17 Februari 1985', '', '', 'Sudiharto', 'GKJ Boyolali', '', 'Baptis', '1986-12-25', 'EFESUS', 0),
(356, 'ELISABET MEGA ANGGRAENI', '', 'P', 'Jl. Manggis, No.9, Boyolali', 'Boyolali, 07 Maret 1985', '25 Desember 1986', '', '', '', 'Sudiarto', 'Pandu Wirawan', 'GKJ Boyolali', '', 'Baptis', '1986-12-25', 'EFESUS', 0),
(364, 'SUGIYARNI', '', 'P', 'Madu Mulyo, Rt 06/ Rw 01, Pulisen, Boyolali', 'Boyolali, 07 Juni 1949', '25 Desember 1969', '', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1969-12-25', 'GALATIA', 0),
(365, 'MAULINA YANITAPATI', '', 'P', 'Madu Mulyo, Rt 06/ Rw 01, Pulisen, Boyolali', 'Boyolali, 30 Januari 1980', '25 Desember 1999', '25 Desember 1999', '', '', 'Sugiyarni', '', 'GKJ Boyolali', '', 'Baptis', '1999-12-25', 'GALATIA', 0),
(367, 'NASIB', '', 'L', 'Bangun Harjo, Pulisen, Boyolali', 'Langkat, 08 Februari 1962', '08 Mei 1988', '', '25 November 1989', '', '', 'Eny Retnowati', 'GKJ Boyolali', '', 'Baptis', '1988-05-08', 'GALATIA', 0),
(368, 'ENY RETNOWATI', '', 'P', 'Bangun Harjo, Pulisen, Boyolali', 'Surakarta, 07 Agustus 1963', '25 Desember 1988', '', '25 November 1989', '', '', 'Nasib', 'GKJ Boyolali', '', 'Baptis', '1988-12-25', 'GALATIA', 0),
(369, 'HALIMAH', '', 'P', 'Bangun Harjo, Pulisen, Boyolali', 'Boyolali, 03 Mei 1955', '25 Desember 1975', '', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1975-12-25', 'GALATIA', 0),
(371, 'SRI SUMIYATI', '', 'P', 'Surodadi, Siswodipuran', 'Boyolali, 20 Juni 1944', '25 Desember 1964', '', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1964-12-25', 'EFESUS', 0),
(373, 'KUN MARTONO', '', 'P', 'Perum BSP 2, Karanggeneng, Boyolali', '19 Maret 1964', '30 September 1990', '', '14 Oktober 1990', '', '', 'Riniatun Chris Ida wartanti', 'GKJ Boyolali', '', 'Baptis', '1990-09-30', 'FILIPI', 0),
(374, 'RINIATUN CHRIS IDA WARTANTI', '', 'P', 'Perum BSP 2, Karanggeneng, Boyolali', 'Solo, 26 September 1965', '23 Januari 1966', '', '14 Oktober 1990', '', '', 'Kun Martono', 'GKJ Boyolali', '', 'Baptis', '1966-01-23', 'FILIPI', 0),
(376, 'SITI RAHAYU', '', 'P', 'Surodadi, Siswodipuran', 'Wonogiri, 19 April 1954', 'Boyolali, 25 Juli 1976', '', '06 September 1973', '', '', 'Alm. Soelistyarso', 'GKJ Boyolali', '', 'Baptis', '1976-07-25', 'EFESUS', 0),
(377, 'AGUSTINA DYAH SULISTYAWATI', '', 'P', 'Perum BSP 2, Karanggeneng, Boyolali', '11 Agustus 1974', '', '25 Desember 1998', '', '', '', 'Gunawan Wibisono', 'GKJ Boyolali', '', 'Baptis', '1998-12-25', 'FILIPI', 0),
(619, 'SRI MIYATUN', '', 'P', 'Bendo Sari, Cepogo', 'Boyolali, 26 Juni 1951', '20 Desember 1964', '20 Desember 1964', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1964-12-20', 'PEPANTAN CEPOGO', 0),
(622, 'SUKANTO', '', 'L', 'Sambung Rejo, Mliwis, Cepogo', 'Boyolali, 10 Mei 1955', '25 Desember 1968', '', '1973', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1968-12-25', 'PEPANTAN CEPOGO', 0),
(624, 'SUMINAH', '', 'P', 'Sambung Rejo, Mliwis, Cepogo', 'Boyolali, 15 Oktober 1958', '25 Desember 1973', '', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1973-12-25', 'PEPANTAN CEPOGO', 0),
(625, 'SUGIYANTI', '', 'P', 'Sambung Rejo, Mliwis, Cepogo', 'Boyolali, 16 November 1952', '', '01 Agustus 1976', '21 Juli 1976', '', '', 'Alm. Tiyono', 'GKJ Boyolali', '', 'Baptis', '1976-08-01', 'PEPANTAN CEPOGO', 0),
(627, 'SUHARDI', '', 'L', 'Sambung Rejo, Mliwis, Cepogo', 'Boyolali, 01 Januari 1958', '14 September 1960', '', '14 Agustus 1981', '', '', 'Jumiyatun', 'GKJ Boyolali', '', 'Baptis', '1960-09-14', 'PEPANTAN CEPOGO', 0),
(628, 'ENDANG PRIYANI', '', 'P', 'Sambung Rejo, Mliwis, Cepogo', 'Boyolali, 14 Agustus 1964', '24 Agustus 1966', '22 November 1981', '28 Agustus 1992', '', '', 'Alm. Bambang Udayana', 'GKJ Boyolali', '', 'Baptis', '1966-08-24', 'PEPANTAN CEPOGO', 0),
(630, 'JUMIYATUN', '', 'P', 'Sambung Rejo, Mliwis, Cepogo', 'Klaten, 01 Desember 1960', '21 Februari 1988', '', '14 Agustus 1981', '', '', 'Suhardi', 'GKJ Boyolali', '', 'Baptis', '1988-02-21', 'PEPANTAN CEPOGO', 0),
(635, 'ENDANG SRI RAHAYU', '', 'P', 'Sambung Rejo, Mliwis, Cepogo', 'Boyolali, 21 September 1973', '16 November 1973', '20 Desember 2009', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1973-11-16', 'PEPANTAN CEPOGO', 0),
(646, 'MULYONO', '', 'L', 'Sambung Rejo, Mliwis, Cepogo', 'Boyolali, 03 Juli 1980', '25 Desember 1983', '20 Desember 2009', '', '', 'Sukanto', 'Rahmawati', 'GKJ Boyolali', '', 'Baptis', '1983-12-25', 'PEPANTAN CEPOGO', 0),
(652, 'ES. RAJINI', '', 'P', 'Krajan Lor, Paras, Cepogo', '15 September 1953', '25 Desember 1973', '', '', '', '', 'Alm. Parjan SA', 'GKJ Boyolali', '', 'Baptis', '1973-12-25', 'PEPANTAN PARAS', 0),
(653, 'YOSHI KRISTIAWAN PH', '', 'L', 'Krajan Lor, Paras, Cepogo', 'Boyolali, 25 Januari 1975', '', '23 Juli 1995', '', '', 'Alm. Parjan SA', '', 'GKJ Boyolali', '', 'Baptis', '1995-07-23', 'PEPANTAN PARAS', 0),
(659, 'SRIKAYATI', '', 'P', 'Krajan Kidul, Paras, Cepogo', '21 Januari 1942', '14 April 1968', '', '', '', '', 'Alm. Tri Joko', 'GKJ Boyolali', '', 'Baptis', '1968-04-14', 'PEPANTAN PARAS', 0),
(660, 'SUGENG TRI HARGONO', '', 'L', 'Krajan Kidul, Paras, Cepogo', 'Boyolali, 14 April 1964', '14 April 1968', '26 Januari 1992', '01 Februari 1992', '', 'Alm. Tri Joko & Srikayati', 'Sri Mulyani', 'GKJ Boyolali', '', 'Baptis', '1968-04-14', 'PEPANTAN PARAS', 0),
(661, 'SUWARTO', '', 'L', 'Krajan Lor, Paras, Cepogo', 'Boyolali, 17 Juli 1946', '25 Desember 1962', '', '', '', '', 'Suyati', 'GKJ Boyolali', '', 'Baptis', '1962-12-25', 'PEPANTAN PARAS', 0),
(662, 'SUYATI', '', 'P', 'Krajan Lor, Paras, Cepogo', 'Boyolali, 03 Juli 1959', '25 Desember 1962', '', '', '', '', 'Suwarto', 'GKJ Boyolali', '', 'Baptis', '1962-12-25', 'PEPANTAN PARAS', 0),
(663, 'DWI RETNANINGTYAS', '', 'P', 'Krajan Lor, Paras, Cepogo', 'Boyolali, 23 Juni 1975', '08 Oktober 1975', '22 Oktober 1995', '22 Oktober 1995', '', 'Suwarto', 'Mursit Harjanto', 'GKJ Boyolali', '', 'Baptis', '1975-10-08', 'PEPANTAN PARAS', 0),
(664, 'YONI KRISTIANTO', '', 'L', 'Krajan Lor, Paras, Cepogo', 'Boyolali, 20 Juni 1977', '05 September 1977', '', '', '', 'Suwarto', 'Arifiya Wijayanti', 'GKJ Boyolali', '', 'Baptis', '1977-09-05', 'PEPANTAN PARAS', 0),
(665, 'BUDIJONO', '', 'L', 'Krapyak, Paras, Cepogo', 'Boyolali, 13 Oktober 1956', '14 April 1968', '', '15 Maret 1980', '', '', 'Alm. Suprapti', 'GKJ Boyolali', '', 'Baptis', '1968-04-14', 'PEPANTAN PARAS', 0),
(667, 'ETIK KRISTIANA', '', 'P', 'Krapyak, Paras, Cepogo', '14 Februari 1981', '31 Agustus 1981', '', '', '', 'Budijono', '', 'GKJ Boyolali', '', 'Baptis', '1981-08-31', 'PEPANTAN PARAS', 0),
(673, 'SUPARDJI', '', 'L', 'Krajan Lor, Paras, Cepogo', 'Boyolali, 15 Maret 1944', '14 April 1968', '', '30 Mei 1969', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1968-04-14', 'PEPANTAN PARAS', 0),
(675, 'EKO DWI CAHYONO', '', 'L', 'Krajan Lor, Paras, Cepogo', 'Boyolali, 20 April 1972', '25 Desember 1992', '', '', '', 'Supardji', '', 'GKJ Boyolali', '', 'Baptis', '1992-12-25', 'PEPANTAN PARAS', 0),
(676, 'ENTARTO TRIHADMOKO', '', 'L', 'Krajan Lor, Paras, Cepogo', '05 Februari 1975', '23 Juli 1995', '', '', '', 'Supardji', 'Kartini', 'GKJ Boyolali', '', 'Baptis', '1995-07-23', 'PEPANTAN PARAS', 0),
(677, 'ANTO CATUR BASUKI', '', 'L', 'Krajan Lor, Paras, Cepogo', 'Boyolali, 28 Mei 1980', '21 Desember 2003', '', '', '', 'Supardji', '', 'GKJ Boyolali', '', 'Baptis', '2003-12-21', 'PEPANTAN PARAS', 0),
(680, 'SULIYEM', '', 'P', 'Krajan Kidul, Paras, Cepogo', 'Boyolali, 01 Juli 1958', '14 April 1968', '', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1968-04-14', 'PEPANTAN PARAS', 0),
(691, 'Ny. SUDARSONO', '', 'P', 'Jelog, Cepogo', '05 Juni 1950', '25 Desember 1970', '', '', '', '', 'Alm. Sudarsono', 'GKJ Boyolali', '', 'Baptis', '1970-12-25', 'PEPANTAN PARAS', 0),
(697, 'SUJIMAH', '', 'P', 'Krajan Lor, Paras, Cepogo', '22 Desember 1940', '14 April 1968', '', '', '', '', 'Alm. Soma Wiyana', 'GKJ Boyolali', '', 'Baptis', '1968-04-14', 'PEPANTAN PARAS', 0),
(708, 'AGUS SUSANTO', '', 'L', 'Krapyak, Paras, Cepogo', '10 Agustus 1985', '21 Desember 2003', '', '', '', 'Alm. Hadi Wiyono', 'Anis Hermawati', 'GKJ Boyolali', '', 'Baptis', '2003-12-21', 'PEPANTAN PARAS', 0),
(713, 'SUDARMONO', '', 'L', 'Krajan Lor, Paras, Cepogo', '20 Oktober 1965', '14 April 1968', '25 Agustus 1985', '', '', 'Alm. Hardjo Sugito', 'Ninik', 'GKJ Boyolali', '', 'Baptis', '1968-04-14', 'PEPANTAN PARAS', 0),
(714, 'NATALIA ANING MUGILAR', '', 'P', 'Krajan Lor, Paras, Cepogo', '28 Desember 1960', '20 Januari 1963', '12 Desember 1980', '29 Maret 1984', '', '', 'Joko Santoso', 'GKJ Boyolali', '', 'Baptis', '1963-01-20', 'PEPANTAN PARAS', 0),
(719, 'JOKO MARGONO', '', 'L', 'Mliwis, Cepogo, Boyolali', '08 September 1961', '25 Desember 1981', '', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1981-12-25', 'PEPANTAN PARAS', 0),
(720, 'PUJI HASTUTI', '', 'P', 'Krajan Kidul, Paras, Cepogo', '1965', '25 Desember 1987', '', '', '', '', 'Supomo', 'GKJ Boyolali', '', 'Baptis', '1987-12-25', 'PEPANTAN PARAS', 0),
(724, 'ARI YUWONO', '', 'L', 'Krajan Kidul, Paras, Cepogo', 'Boyolali, 13 September 1961', '09 Maret 1986', '', '', '', '', 'Partini', 'GKJ Boyolali', '', 'Baptis', '1986-03-09', 'PEPANTAN PARAS', 0),
(725, 'PARTINI', '', 'P', 'Krajan Kidul, Paras, Cepogo', 'Boyolali, 21 Desember 1963', '09 Maret 1986', '', '', '', '', 'Ari Yuwono', 'GKJ Boyolali', '', 'Baptis', '1986-03-09', 'PEPANTAN PARAS', 0),
(733, 'BERNANDETHA DWI ARIYANTO', '', 'L', 'Ngrancah Rt 06/ Rw 02 Pusporenggo, Musuk', '26 Oktober 1974', '23 Juli 1995', '', '', '', 'Sri Raharjo & FCH Sehniyati', 'Erna Supriyanti', 'GKJ Boyolali', '', 'Baptis', '1995-07-23', 'ROMA', 0),
(737, 'SUYATMI', '', 'P', 'Sumbung, Cepogo', '', '14 April 1968', '', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1968-04-14', 'PEPANTAN PARAS', 0),
(742, 'YULIANA SULARMI SULWARSONO', '', 'P', 'Gatak, Kebon Timun, Rt 02/Rw 05, Kiringan, Boyolali', 'Boyolali, 16 Februari 1968', 'Gereja Katolik Boyolali, 24 Desember 1980', '24 Desember 1980', '', '', '', 'Alm. Sulwarsono', 'GKJ Boyolali', '', 'Baptis', '1980-12-24', 'PEPANTAN SUNGGINGAN', 0),
(752, 'ENDANG SULASTRI', '2', 'P', 'Krajan Lor, Paras, Cepogo', '', '21 Desember 2003', 'Suparno', '', '', '', 'Suparno', 'GKJ Boyolali', '', 'Baptis', '2003-12-21', '', 0),
(771, 'WIDODO', '', 'L', 'Pengkol, Rt 01/Rw 01, Musuk, Boyolali', '24 Agustus 1949', '03 Desember 1978', '03 Desember 1978', '', '', '', 'Warsini', 'GKJ Boyolali', '', 'Baptis', '1978-12-03', 'PEPANTAN MUSUK', 0),
(772, 'WARSINI', '', 'P', 'Pengkol, Rt 01/Rw 01, Musuk, Boyolali', '13 Oktober 1955', '03 Desember 1978', '', '', '', '', 'Widodo', 'GKJ Boyolali', '', 'Baptis', '1978-12-03', 'PEPANTAN MUSUK', 0),
(774, 'SLAMET RIYANTO', '', 'L', 'Ngargosari, Rt 16/Rw 03, Kembang Sari, Musuk', '03 Mei 1956', '17 Agustus 1986', '', '22 Agustus 1986', '', '', 'Sri Puji Hartawanti', 'GKJ Boyolali', '', 'Baptis', '1986-08-17', 'PEPANTAN MUSUK', 0),
(775, 'SRI PUJI HARTAWANTI', '', 'P', 'Ngargosari, Rt 16/Rw 03, Kembang Sari, Musuk', 'Boyolali, 11 Maret 1958', '26 Juli 1981', '', '22 Agustus 1986', '', '', 'Slamet Riyanto', 'GKJ Boyolali', '', 'Baptis', '1981-07-26', 'PEPANTAN MUSUK', 0),
(787, 'SRIYANA', '', 'L', 'Watesari, Rt 02/Rw 03, Sruni, Musuk, Boyolali', 'Boyolali, 07 Desember 1963', '25 Desember 1986', '', '21 April 1993', '', '', 'Endang Rusmini', 'GKJ Boyolali', '', 'Baptis', '1986-12-25', 'PEPANTAN MUSUK', 0),
(793, 'DJOKO SUDIJANTO', '', 'L', 'Surowedanan, Rt 04/ Rw 09, Pulisen,  Boyolali', 'Boyolali, 28 September 1954', '25 Desember 1990', '', '26 April 1974', '', '', 'Sri Wahyuni', 'GKJ Boyolali', '', 'Baptis', '1990-12-25', 'ROMA', 0),
(794, 'SRI WAHYUNI', '', 'P', 'Surowedanan, Rt 04/ Rw 09, Pulisen,  Boyolali', 'Boyolali, 02 November 1956', '25 Desember 1990', '', '26 April 1974', '', '', 'Djoko Sudijanto', 'GKJ Boyolali', '', 'Baptis', '1990-12-25', 'ROMA', 0),
(807, 'DWI RUSMININGSIH', '', 'P', 'Asrikanto, Rt 03/Rw 01, Kiringan, Boyolali', '07 Mei 1964', '29 Juli 1984', '', '', '', '', 'Agus Raharjo', 'GKJ Boyolali', '', 'Baptis', '1984-07-29', 'PEPANTAN SUNGGINGAN', 0),
(809, 'LUKAS PRASETYO BUDI H', '', 'L', 'Asrikanto, Rt 03/Rw 01, Kiringan, Boyolali', 'Boyolali, 05 Juni 1975', '29 Juli 1984', '', '', '', 'Alm. Slamet Harsono', '', 'GKJ Boyolali', '', 'Baptis', '1984-07-29', 'PEPANTAN SUNGGINGAN', 0),
(810, 'AGUS IRYANTO', '', 'L', 'Sumber Rejo, Rt 02/Rw 03, Kiringan, Boyolali', 'Boyolali, 30 Agustus 1962', '29 Juli 1984', '', '1984', '', '', 'Erni Priharyanti', 'GKJ Boyolali', '', 'Baptis', '1984-07-29', 'PEPANTAN SUNGGINGAN', 0),
(811, 'ERNI PRIHARYANTI', '', 'P', 'Sumber Rejo, Rt 02/Rw 03, Kiringan, Boyolali', 'Boyolali, 09 Agustus 1964', '', '29 Juli 1984', '1984', '', '', 'Agus Iryanto', 'GKJ Boyolali', '', 'Baptis', '1984-07-29', 'PEPANTAN SUNGGINGAN', 0),
(815, 'HOSIANA WIDYANINGTYAS', '', 'P', 'Tegal Mulyo, Rt 01/ Rw 13, Mojosongo, Boyolali', 'Boyolali, 02 Februari 1991', '25 Desember 1993', '23 Desember 2007', '', '', 'Alm. Bambang Sumarsono', '', 'GKJ Boyolali', '', 'Baptis', '1993-12-25', 'EFESUS', 0),
(817, 'ASTIKA CHRISTIA DESTIN', '', 'P', 'Brajan, Kemiri, Mojosongo, Boyolali', '24 Mei 1991', '21 Juni 1992', '23 Desember 2007', '', '', 'Nasib', 'Archi Kuncahyo', 'GKJ Boyolali', '', 'Baptis', '1992-06-21', 'EFESUS', 0),
(836, 'DANIEL CAHYA KUNCORO', '', 'L', 'Wukirosari, Rt 04/Rw 03, pulisen, Boyolali', '17 September 1991', '17 April 1992', '21 Desember 2008', '', '', 'Alm. Agus Sartono', 'Yeni Teresia', 'GKJ Boyolali', '', 'Baptis', '1992-04-17', 'GALATIA', 0),
(837, 'LUKAS YUDHA SETYAWAN', '', 'L', 'Jl. Manggis, No.9, Boyolali', 'Boyolali, 08 Agustus 1991', '17 April 1992', '23 Desember 2007', '', '', 'Sudiyarto', '', 'GKJ Boyolali', '', 'Baptis', '1992-04-17', 'EFESUS', 0),
(846, 'PURWONO', '', 'L', 'Rogomulyo, Teras, Rt 06/Rw 01, Teras, Boyolali', 'Klaten, 07 Juni 1953', '19 Desember 1980', '', '', '', '', 'Sri Rejeki Handayani', 'GKJ Boyolali', '', 'Baptis', '1980-12-19', 'PEPANTAN TERAS', 0),
(847, 'SRI REJEKI HANDAYANI', '', 'P', 'Rogomulyo, Teras, Rt 06/Rw 01, Teras, Boyolali', 'Bandung, 06 Juli 1965', '23 Desember 1980', '', '', '', '', 'Purwono', 'GKJ Boyolali', '', 'Baptis', '1980-12-23', 'PEPANTAN TERAS', 0),
(848, 'MILKA GRAVIA SUCIATI', '', 'P', 'Rogomulyo, Teras, Rt 06/Rw 01, Teras, Boyolali', 'Semarang, 20 September 1982', '24 Desember 2006', '', '', '', '', 'Agung Kris Pangarsa', 'GKJ Boyolali', '', 'Baptis', '2006-12-24', 'PEPANTAN TERAS', 0),
(849, 'RIBKA EBTALIYANI', '', 'P', 'Rogomulyo, Teras, Rt 06/Rw 01, Teras, Boyolali', 'Semarang, 15 April 1986', '24 Desember 2006', '', '', '', '', 'Krismanto', 'GKJ Boyolali', '', 'Baptis', '2006-12-24', 'PEPANTAN TERAS', 0),
(850, 'LABAN ADI SAPUTRA', '4', 'P', 'Rogomulyo, Teras, Rt 06/Rw 01, Teras, Boyolali', 'Boyolali, 03 Juni 1991', '23 Desember 2007', '', '', '', 'Purwono', '', 'GKJ Boyolali', '', 'Baptis', '2007-12-23', '', 0),
(855, 'ESTER WARIANTI', '', 'P', 'Sidorejo, Rt 02/ Rw 01, Mojolegi, Teras, Boyolali', 'Boyolali, 20 April 1961', '25 Desember 1979', '', '', '', '', 'Alm. Elia Diyono', 'GKJ Boyolali', '', 'Baptis', '1979-12-25', 'PEPANTAN TERAS', 0),
(859, 'PURWANI', '', 'P', 'Mangli, Randusari, Teras, Boyolali', 'Boyolali, 11 Mei 1958', '25 Desember 1981', '', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1981-12-25', 'PEPANTAN TERAS', 0),
(861, 'ANTON ARDHI PURBOYO', '', 'L', 'Karangjati, Rt 03/ Rw 03, Gumuk Rejo, Teras', 'Boyolali, 21 Maret 1985', '01 Maret 1992', '22 Desember 2002', '', '', 'Mujiyono', '', 'GKJ Boyolali', '', 'Baptis', '1992-03-01', 'PEPANTAN TERAS', 0),
(862, 'MAHDALENA ARININGTYAS', '', 'P', 'Karangjati, Rt 03/ Rw 03, Gumuk Rejo, Teras', 'Boyolali, 12 Maret 1983', '22 Desember 2002', '', '', '', 'Mujiyono', '', 'GKJ Boyolali', '', 'Baptis', '2002-12-22', 'PEPANTAN TERAS', 0),
(863, 'MUJIYONO', '', 'L', 'Karangjati, Rt 03/ Rw 03, Gumuk Rejo, Teras', 'Boyolali, 17 April 1945', '29 Juli 1973', '', '', '', '', 'Winarti', 'GKJ Boyolali', '', 'Baptis', '1973-07-29', 'PEPANTAN TERAS', 0),
(864, 'WINARTI', '', 'P', 'Karangjati, Rt 03/ Rw 03, Gumuk Rejo, Teras', 'Semarang, 03 Mei 1955', '29 Juli 1973', '', '', '', '', 'Mujiyono', 'GKJ Boyolali', '', 'Baptis', '1973-07-29', 'PEPANTAN TERAS', 0),
(865, 'SARWONO', '', 'L', 'Pomah, Rt 12/Rw 02, Randusari, Teras', 'Boyolali, 24 April 1948', '25 Desember 1973', '', '', '', '', 'Alm. Nuryati', 'GKJ Boyolali', '', 'Baptis', '1973-12-25', 'EFESUS', 0),
(866, 'WISNU HERI PRABOWO', '', 'L', 'Karangjati, Rt 03/ Rw 03, Gumuk Rejo, Teras', 'Boyolali, 05 Februari 1981', '25 Desember 2000', '', '', '', 'Mujiyono', '', 'GKJ Boyolali', '', 'Baptis', '2000-12-25', 'PEPANTAN TERAS', 0),
(888, 'PARJANA', '', 'L', 'Janur, Jemowo', '03 Januari 1968', '09 Desember 1985', 'Sujini', '', '', '', 'Sujini', 'GKJ Boyolali', '', 'Baptis', '1985-12-09', '', 0),
(889, 'SUJINI', '', 'P', 'Janur, Jemowo', 'Boyolali, 12 April 1972', '15 Juli 1990', '', '', '', '', 'Parjana', 'GKJ Boyolali', '', 'Baptis', '1990-07-15', 'PEPANTAN JEMOWO', 0),
(907, 'ARUM KRISTIA PURNAMASARI', '', 'P', 'Sugiyan, Rt 09/Rw 02, Tengaran, Semarang', 'Boyolali, 25 Juli 1991', '25 Desember 1991', '25 Desember 2014', '', '', '', 'David Setyanto', 'GKJ Boyolali', '', 'Baptis', '1991-12-25', 'PEPANTAN SUNGGINGAN', 0),
(908, 'MIS SUGIYARTI', '', 'P', 'Wukirosari, Rt 03/Rw 03, pulisen, Boyolali', '28 Mei 1970', '07 Oktober 1991', '', '23 Januari 1992', '', '', 'Alm. Sabar', 'GKJ Boyolali', '', 'Baptis', '1991-10-07', 'GALATIA', 0),
(912, 'SRI MULYANI', '', 'P', 'Krajan Kidul, Paras, Cepogo', 'Surakarta, 04 Juni 1963', '06 September 1981', '', '01 Februari 1992', '', '', 'Sugeng Tri Hargono', 'GKJ Boyolali', '', 'Baptis', '1981-09-06', 'PEPANTAN PARAS', 0),
(919, 'PAULUS KARYADI', '', 'L', 'Wonorejo, Rt 02/Rw 06, Tambak, Mojosongo, Boyolali', 'Boyolali 03 April 1952', '25 Desember 1970', '', '30 Agustus 1980', '', '', 'Dwi Rahayu', 'GKJ Boyolali', '', 'Baptis', '1970-12-25', 'EFESUS', 0),
(920, 'DWI RAHAYU', '', 'P', 'Wonorejo, Rt 02/Rw 06, Tambak, Mojosongo, Boyolali', 'Klaten, 26 September 1959', '25 Desember 1969', '', '', '', '', 'Paulus Kariyadi', 'GKJ Boyolali', '', 'Baptis', '1969-12-25', 'EFESUS', 0),
(930, 'SURATMI', '', 'P', 'Sidorejo, Rt 02/ Rw 01, Mojolegi, Teras, Boyolali', 'Surakarta, 19 Mei 1957', '01 Maret 1992', '', '', '', '', 'Alm. Warjiyo', 'GKJ Boyolali', '', 'Baptis', '1992-03-01', 'PEPANTAN TERAS\r\n', 0),
(968, 'SISWO UTOMO', '', 'L', 'Sangen, Jemowo', '11 Agustus 1942', '14 Agustus 1983', '', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1983-08-14', 'PEPANTAN SANGEN', 0),
(987, 'JOKO', '', 'L', 'Sangen, Jemowo', '26 Februari 1963', '25 Desember 1983', '', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1983-12-25', 'PEPANTAN SANGEN', 0),
(988, 'HARNO', '', 'L', 'Sangen, Jemowo', '18 Desember 1967', '14 Agustus 1983', '', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1983-08-14', 'PEPANTAN SANGEN', 0),
(989, 'ROHADI', '', 'L', 'Sangen, Jemowo', '06 Juni 1966', '14 Agustus 1983', '', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1983-08-14', 'PEPANTAN SANGEN', 0),
(990, 'PRAYITNO', '', 'L', 'Sangen, Jemowo', '12 Maret 1969', '25 Desember 1987', '', '', '', '', 'Dariyati', 'GKJ Boyolali', '', 'Baptis', '1987-12-25', 'PEPANTAN SANGEN', 0),
(991, 'SUTRIS', '', 'L', 'Sangen, Jemowo', '25 Januari 1973', '25 Desember 1993', '', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1993-12-25', 'PEPANTAN SANGEN', 0),
(996, 'PUJIYATI', '', 'P', 'Sangen, Jemowo', '01 Juli 1979', '11 September 1994', '', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1994-09-11', 'PEPANTAN SANGEN', 0),
(999, 'NARIMO', '', 'L', 'Sangen, Jemowo', '04 Maret 1970', '25 Desember 1990', '', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1990-12-25', 'PEPANTAN SANGEN', 0),
(1015, 'PARIYEM', '', 'P', 'Telogo Jati, Sangup, Jemowo, Boyolali', '20 Juli 1961', '14 Agustus 1983', '', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1983-08-14', 'PEPANTAN SANGEN', 0),
(1018, 'VERONICA SAMINEM', '', 'P', 'Perum Persada Asri, Teras', 'Klaten, 10 November 1963', '06 Desember 1981', '', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1981-12-06', 'PEPANTAN TERAS', 0),
(1029, 'ROSIE CHRISTIA MARTA', '', 'P', 'Perum BSP 2, Karanggeneng, Boyolali', '11 Juli 1991', '21 Juni 1992', '23 Desember 2007', '', '', 'Kun Martono', '', 'GKJ Boyolali', '', 'Baptis', '1992-06-21', 'FILIPI', 0),
(1042, 'SUMARNO', '', 'L', 'Talang Sudimoro, Teras', 'Boyolali, 27 April 1959', '03 Juli 1966', '', '03 April 1982', '', '', 'Marsiti', 'GKJ Boyolali', '', 'Baptis', '1966-07-03', 'EFESUS', 0),
(1044, 'BURHANA RATIH WIDIASIH', '', 'P', 'Talang Sudimoro, Teras', '06 April 1988', '25 Desember 1995', '', '', '', 'Sumarno', '', 'GKJ Boyolali', '', 'Baptis', '1995-12-25', 'EFESUS', 0),
(1046, 'TOTO SUDARMANTO', '', 'L', 'Srimulyo Rt 02/ Rw 01, Karanggeneng, Boyolali', 'Boyolali, 05 Oktober 1961', '04 Agustus 1992', '', '17 Agustus 1992', '', '', 'Tuminem', 'GKJ Boyolali', '', 'Baptis', '1992-08-04', 'PEPANTAN SUNGGINGAN', 0),
(1047, 'TUMINEM', '', 'P', 'Srimulyo Rt 02/ Rw 01, Karanggeneng, Boyolali', 'Wonogiri, 30 November 1964', 'GKJ Boyolali, 04 Oktober 1992', '', '17 Oktober 1992', '', '', 'Toto Sudarmanto', 'GKJ Boyolali', '', 'Baptis', '1992-10-04', 'PEPANTAN SUNGGINGAN', 0),
(1054, 'OKKY RUTH RIANGGARENI', '', 'P', 'Bogor, Jawa Barat', 'Boyolali, 19 Oktober 1992', '21 Februari 1993', '22 April 2011', '', '', 'Wasino Gracia', '', 'GKJ Boyolali', '', 'Baptis', '1993-02-21', 'ROMA', 0),
(1057, 'KRISTANTO', '', 'L', 'Gebyok, Selo', '10 Oktober 1966', '20 Desember 1992', '', '', '', 'Alm. Juli Sumarto', '', 'GKJ Boyolali', '', 'Baptis', '1992-12-20', 'PEPANTAN SELO', 0),
(1059, 'WINARSIH', '', 'P', 'Gebyok, Selo', 'Boyolali, 05 Mei 1975', '20 Desember 1992', '', '', '', 'Alm. Juli Sumarto', '', 'GKJ Boyolali', '', 'Baptis', '1992-12-20', 'PEPANTAN SELO', 0),
(1079, 'MARGO DARSONO', '', 'L', 'Pundung Sangup, Jemowo', '12 Juli 1947', '14 Agustus 1983', '', '', '', '', 'Jumiyati', 'GKJ Boyolali', '', 'Baptis', '1983-08-14', 'PEPANTAN SANGEN', 0),
(1083, 'TRIAKSI PUJI ASTUTI', '8', 'P', 'Recosari, Banaran, Boyolali', 'Surakarta, 19 Mei 1956', '25 Desember 1971', 'Alm. Sugeng', '05 Desember 1981', '', '', 'Alm. Sugeng', 'GKJ Boyolali', '', 'Baptis', '1971-12-25', '', 0),
(1084, 'ANDREAS KHRISHANANTO', '', 'L', 'Recosari, Banaran, Boyolali', 'Boyolali, 28 Oktober 1982', '10 Juni 1984', '12 Oktober 2003', '', '', 'Triaksi Puji Astuti', '', 'GKJ Boyolali', '', 'Baptis', '1984-06-10', 'FILIPI', 0),
(1087, 'SUTANTI MARJOKO', '', 'P', 'Tegal Mulyo, Rt 04/ Rw 05, Karanggeneng, Boyolali', 'Klaten, 30 Desember 1939', '25 Desember 1954', '', '10 November 1956', '', '', 'Alm. Marjoko', 'GKJ Boyolali', '', 'Baptis', '1954-12-25', 'FILIPI', 0),
(1091, 'DESI SUPRIYADI', '', 'L', 'Jl. Prof. Dr. Soeharso, Kiringan, Boyolali', '25 Desember 1976', '04 Mei 1983', '21 Desember 2003', '', '', '', 'Alm. Marjoko', 'GKJ Boyolali', '', 'Baptis', '1983-05-04', 'PEPANTAN SUNGGINGAN', 0),
(1093, 'IMANUEL WAHYUDI', '', 'L', 'Perum BSP 2, Blok M/28, Karanggeneng, Boyolali', 'Surakarta, 24 September 1959', 'GPIB Penabur Surakarta, 09 Mei 1982', '', '10 September 1989', '', '', 'Sri Warsini', 'GKJ Boyolali', '', 'Baptis', '1982-05-09', 'PEPANTAN SUNGGINGAN', 0),
(1094, 'SRI WARSINI', '', 'P', 'Perum BSP 2, Blok M/28, Karanggeneng, Boyolali', 'Boyolali, 29 Desember 1961', 'GPIB Penabur Surakarta, 03 September 1989', '', '10 September 1989', '', '', 'Imanuel Wahyudi', 'GKJ Boyolali', '', 'Baptis', '1989-09-03', 'PEPANTAN SUNGGINGAN', 0),
(1095, 'LEWINDA KARISMA ANGGELARSIH', '', 'P', 'Perum BSP 2, Blok M/28, Karanggeneng, Boyolali', 'Boyolali, 07 Juni 1990', '16 Maret 1997', '24 Desember 2006', '', '', 'Imanuel Wahyudi', '', 'GKJ Boyolali', '', 'Baptis', '1997-03-16', 'PEPANTAN SUNGGINGAN', 0),
(1128, 'MARSIKI', '', 'P', 'Talang Sudimoro, Teras', 'Boyolali, 19 November 1961', '25 Desember 1995', '', '', '', '', 'Sumarno', 'GKJ Boyolali', '', 'Baptis', '1995-12-25', 'EFESUS', 0),
(1189, 'EMELY FEBRY H', '', 'P', 'Surodadi, Rt 04/Rw 14, Siswodipuran', 'Boyolali, 01 Februari 1981', '25 Desember 2000', '', '', '', 'Sukesi', '', 'GKJ Boyolali', '', 'Baptis', '2000-12-25', 'EFESUS', 0),
(1190, 'DANNY YUNIAR H', '', 'L', 'Surodadi, Rt 04/Rw 14, Siswodipuran', 'Boyolali, 17 Juni 1983', '25 Desember 2001', '', '', '', 'Sukesi', '', 'GKJ Boyolali', '', 'Baptis', '2001-12-25', 'EFESUS', 0),
(1193, 'SRI SUHARTI', '', 'P', 'Surodadi, Siswodipuran', 'Wonogiri, 15 Mei 1955', '24 Desember 1978', '', '', '', '', 'Alm. Supriyarjo', 'GKJ Boyolali', '', 'Baptis', '1978-12-24', 'EFESUS', 0),
(1194, 'INDRATMOKO HS', '', 'L', 'Surodadi, Siswodipuran', 'Boyolali, 13 Oktober 1982', '25 Desember 2001', '', '', '', '', 'Khristy Octanova', 'GKJ Boyolali', '', 'Baptis', '2001-12-25', 'EFESUS', 0),
(1196, 'RAHAYU PUJI ASTUTI', '', 'P', 'Pulisen, Boyolali', '', '31 Maret 1981', '', '', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1981-03-31', 'GALATIA', 0),
(1198, 'YESICA SINTA DEVI', '', 'P', 'Pulisen, Boyolali', '', '', '', '', '', 'Rahayu Puji Astuti', '', 'GKJ Boyolali', '', 'Baptis', '0000-00-00', 'GALATIA', 0),
(1202, 'WIDODO', '', 'L', 'Kebonso, Rt 01/Rw 05, Pulisen, Boyolali', 'Boyolali, 03 Juli 1969', '23 Mei 1993', '', '17 Juni 1993', '', '', 'Lucky Altantiana Wati', 'GKJ Boyolali', '', 'Baptis', '1993-05-23', 'ROMA', 0),
(1207, 'BASTIAN ADITYA WARDANA', '', 'L', 'Perum BSP 2, Blok F/2, Karanggeneng, Boyolali', 'Boyolali, 10 April 1993', '03 April 1994', '25 Desember 2000', '', '', 'Kun Martono', '', 'GKJ Boyolali', '', 'Baptis', '1994-04-03', 'FILIPI', 0),
(1337, 'SITI SUBANDINI', '', 'P', 'Suyudan, Rt 02/Rw 03, Kiringan, Boyolali', 'Sukoharjo, 08 Februari 1949', '22 Agustus 1993', '', '', '', '', 'Alm. Subowo', 'GKJ Boyolali', '', 'Baptis', '1993-08-22', 'PEPANTAN SUNGGINGAN', 0),
(1339, 'WIHARNI', '', 'P', 'Jakarta', 'Karangngannyar, 05 Juni 1956', '22 Agustus 1993', '', '', '', '', 'Alm. Suwadi', 'GKJ Boyolali', '', 'Baptis', '1993-08-22', 'ROMA', 0),
(1352, 'ENDANG RUSMINI', '', 'P', 'Watesari, Rt 02/Rw 03, Sruni, Musuk, Boyolali', 'Klaten, 20 April 1968', '21 Desember 1986', '', '21 April 1993', '', '', 'Sriyana', 'GKJ Boyolali', '', 'Baptis', '1986-12-21', 'PEPANTAN MUSUK', 0),
(1362, 'ELIA SUPRAPTO', '', 'L', 'Badan Rejo, Kemiri, Mojosongo, Boyolali', 'Klaten, 24 Desember 1961', '09 Desember 1979', '', '25 Januari 1988', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1979-12-09', 'EFESUS', 0),
(1364, 'ARCHI KUN CAHYO', '', 'L', 'Badan Rejo, Kemiri, Mojosongo, Boyolali', 'Klaten, 02 Juli 1988', '25 Desember 1988', '', '', '', 'Elia Suprapto', 'Astika Kristiya', 'GKJ Boyolali', '', 'Baptis', '1998-12-25', 'EFESUS', 0),
(1370, 'ANANTA PRASETYA', '', 'L', 'Bangun Harjo,Rt 07/Rw 02, Pulisen, Boyolali', '03 Maret 1994', '03 April 1999', '22 April 2011', '', '', 'Hendratmoko', '', 'GKJ Boyolali', '', 'Baptis', '1999-04-03', 'GALATIA', 0),
(1374, 'LUCKY ARTANTIANA WATI', '', 'P', 'Kebonso, Rt 01/Rw 05, Pulisen, Boyolali', 'Salatiga, 01 Mei 1970', '25 Desember 1990', 'Widodo', '17 Juni 1993', '', '', 'Widodo', 'GKJ Boyolali', '', 'Baptis', '1990-12-25', '', 0),
(1377, 'THOMAS APRILIYANTO', '', 'L', 'Gebyok, Selo', '16 April 1994', '26 Juni 1994', '25 Desember 2011', '', '', 'Kristianto & Parinem', '', 'GKJ Boyolali', '', 'Baptis', '1994-06-26', 'PEPANTAN SELO', 0),
(1381, 'SAMIATI', '', 'P', 'Wukirosari, Rt 03/Rw 03, pulisen, Boyolali', '23 September 1964', '07 Agustus 1994', '', '', '', '', 'Supariyadi', 'GKJ Boyolali', '', 'Baptis', '1994-08-07', 'GALATIA', 0),
(1382, 'BENY RAFIKA KRISTANTO', '', 'L', 'Kebonso, Rt 01/Rw 03, Pulisen, Boyolali', '28 Mei 1992', '07 Agustus 1994', '21 April 2011', '', '', 'Mis Sugiyarti', '', 'GKJ Boyolali', '', 'Baptis', '1994-08-07', 'GALATIA', 0),
(1386, 'JOKO YARMANTO', '', 'L', 'Madu Mulyo, Rt 06/Rw 01, Pulisen, Boyolali', 'Surakarta, 06 Juni 1949', '31 Juli 1988', '', '', '', '', 'Alm. Sri Rejeki', 'GKJ Boyolali', '', 'Baptis', '1988-07-31', 'GALATIA', 0),
(1396, 'SUNDARI', '', 'P', 'Ngesti harjo, Rt 03/Rw 15, Siswodipuran, Boyolali', 'Karangngannyar, 26 Mei 1952', '25 Desember 1965', '', '10 Juni 1979', '', '', 'Alm. SB Hartono', 'GKJ Boyolali', '', 'Baptis', '1965-12-25', 'EFESUS', 0),
(1397, 'HARIADI WIBOWO', '', 'L', 'Ngesti harjo, Rt 03/Rw 15, Siswodipuran, Boyolali', 'Semarang, 25 Maret 1980', '28 Juli 1980', '26 Juni 1999', '', '', 'Sundari', '', 'GKJ Boyolali', '', 'Baptis', '1980-07-28', 'EFESUS', 0),
(1398, 'SAFITRI DWIANA NUGRAHANI', '', 'P', 'Ngesti harjo, Rt 03/Rw 15, Siswodipuran, Boyolali', 'Semarang, 22 Februari 1982', '26 Desember 1982', '26 Juni 1999', '', '', '', 'Daniel Jaferson Saut Parulian', 'GKJ Boyolali', '', 'Baptis', '1982-12-26', 'EFESUS', 0);
INSERT INTO `data_jemaat` (`no_induk`, `nama`, `jabatan`, `jenis_kelamin`, `alamat`, `lahir`, `baptis`, `sidi`, `nikah`, `meninggal`, `orang_tua`, `suami_istri`, `dari_gereja`, `ke_gereja`, `keterangan`, `tanggal_terdaftar`, `keterangan_tambahan`, `Id_komisi`) VALUES
(1405, 'VENDYKA DIGDO LUKSANTORA', '', 'L', 'Kebonso, Pulisen, Boyolali', '21 Desember 1993', '25 Desember 1994', '', '', '', 'Widodo', '', 'GKJ Boyolali', '', 'Baptis', '1994-12-25', 'ROMA', 0),
(1429, 'MURSIT HARJANTO', '', 'L', 'Krajan Lor, Paras, Cepogo', 'Sragen, 21 Mei 1974', '05 Februari 1989', '22 Oktober 1995', '22 Oktober 1995', '', '', 'Dwi Retnanningtyas', 'GKJ Boyolali', '', 'Baptis', '1989-02-05', 'PEPANTAN PARAS', 0),
(1435, 'BELLA YESICA DESTIN', '', 'P', 'Bangun Harjo,Rt 07/Rw 02, Pulisen, Boyolali', '30 Januari 1995', '25 Desember 1985', '25 Desember 2011', '', '', 'Nasib', '', 'GKJ Boyolali', '', 'Baptis', '1985-12-25', 'GALATIA', 0),
(1439, 'SETI AMURWANI', '', 'P', 'Jemowo, Taman Sari', '06 Juli 1968', '18 Mei 1985', '', '19 Maret 1996', '', '', 'Suharto', 'GKJ Boyolali', '', 'Baptis', '1985-05-18', 'PEPANTAN JEMOWO', 0),
(1440, 'SUHARTO', '', 'L', 'Jemowo, Taman Sari', '03 Maret 1966', '18 Februari 1996', '', '19 Maret 1996', '', '', 'Seti Amurwani', 'GKJ Boyolali', '', 'Baptis', '1996-02-18', 'PEPANTAN JEMOWO', 0),
(1451, 'DODIT PAULANA', '', 'L', 'Jl. Garuda, N0.21,  Kismobudoyo, Boyolali', '27 Januari 1995', '25 Desember 1995', '25 Desember 2011', '', '', 'Budiyanto HW', '', 'GKJ Boyolali', '', 'Baptis', '1995-12-25', 'FILIPI', 0),
(1452, 'KRISTANTO EKO NUGROHO', '', 'L', 'Srimulyo Rt 02/ Rw 01, Karanggeneng, Boyolali', 'Boyolali, 09 Maret 1995', '25 Desember 1995', '13 April 2014', '', '', 'Totok Sudarmanto', '', 'GKJ Boyolali', '', 'Baptis', '1995-12-25', 'PEPANTAN SUNGGINGAN', 0),
(1453, 'JOSUA RIAN ADINDA ', '', 'L', 'Perum BSP 2, Karanggeneng, Boyolali', 'Boyolali, 22 Desember 1993', '25 Desember 1995', '', '', '', 'Emanuel Sediyanto', 'Pungki Arum Puspitasari', 'GKJ Boyolali', '', 'Baptis', '1995-12-25', 'FILIPI', 0),
(1455, 'ANDREAS HADI WIBOWO', '', 'L', 'Jl. Pandanaran No.10, Rancah, Siswodipuran', '07 September 1995', '25 Desember 1995', '23 Desember 2013', '', '', 'Hadi Triwinarno', '', 'GKJ Boyolali', '', 'Baptis', '1995-12-25', 'EFESUS', 0),
(1459, 'JOKO HARYONO', '', 'L', 'Perum BSP 2, Karanggeneng, Boyolali', '06 Oktober 1954', '25 Juli 1982', '', '', '', '', 'Kristiyani Yuli Astuti', 'GKJ Boyolali', '', 'Baptis', '1982-07-25', 'FILIPI', 0),
(1460, 'KRITIYANI YULI ASTUTI', '', 'P', 'Perum BSP 2, Karanggeneng, Boyolali', '21 Juli 1955', '24 Desember 1978', '', '', '', '', 'Joko Hariyono', 'GKJ Boyolali', '', 'Baptis', '1978-12-24', 'FILIPI', 0),
(1466, 'ANDRE ELDIAN ADIASTA', '', 'L', 'Jl. Merbabu 96 Boyolali', '05 Maret 1996', '12 Mei 1996', '', '', '', 'Retno Murnianingsih', '', 'GKJ Boyolali', '', 'Baptis', '1996-05-12', 'ROMA', 0),
(1474, 'SIMON JULIANTO', '', 'L', 'PERUM GRIYA PULISEN 1 BOYOLALI', 'Sukoharjo, 31 Juli 1969', '23 Agustus 1970', '28 Mei 1987', '', '', '', 'Juni Jermiati', 'GKJ Boyolali', '', 'Baptis', '1970-08-23', 'GALATIA', 0),
(1480, 'A.CH. SUGIYO', '', 'L', 'Barak Rejo, Rt 02/Rw 01, Randu Sari, Boyolali', 'Boyolali, 12 Juli 1951', '25 Januari 1970', '', '26 November 1983', '', '', 'Sri Sulistiyani Kawuryan', 'GKJ Boyolali', '', 'Baptis', '1970-01-25', 'EFESUS', 0),
(1481, 'SRI SULISTIYANI KAWURYAN', '', 'P', 'Barak Rejo, Rt 02/Rw 01, Randu Sari, Boyolali', 'Surakarta, 12 Agustus 1959', '18 Desember 1976', '', '26 November 1983', '', '', 'A.CH. Sugiyo', 'GKJ Boyolali', '', 'Baptis', '1976-12-18', 'EFESUS', 0),
(1485, 'ANDREAS ADI NUGROHO', '', 'L', 'Barak Rejo, Rt 02/Rw 01, Randu Sari, Boyolali', 'Boyolali, 08 Juni 1984', '27 April 1986', '23 Desember 2002', '', '', 'A.CH. Sugiyo', '', 'GKJ Boyolali', '', 'Baptis', '1986-04-27', 'EFESUS', 0),
(1486, 'FILIPUS ADI KURNIAWAN', '', 'L', 'Barak Rejo, Rt 02/Rw 01, Randu Sari, Boyolali', 'Boyolali, 03Januari 1991', '25 Agustus 1991', '22 Desember 2008', '', '', 'A.CH. Sugiyo', '', 'GKJ Boyolali', '', 'Baptis', '1991-08-25', 'EFESUS', 0),
(1487, 'ELISABET ENDAH NUGRAHENI', '', 'P', 'Barak Rejo, Rt 02/Rw 01, Randu Sari, Boyolali', 'Boyolali, 17 Maret 1994', '25 Agustus 1991', '', '', '', 'A.CH. Sugiyo', '', 'GKJ Boyolali', '', 'Baptis', '1991-08-25', 'EFESUS', 0),
(1490, 'EDY SURYATMO', '', 'L', 'Watu Talenan, Pulisen, Boyolali', 'Pacitan, 26 Mei 1963', 'GKJ Wonogiri, 27 Mei 1964', '10 Juni 1984', '06 November 1986', '', '', 'Kuswinarni', 'GKJ Boyolali', '', 'Baptis', '1964-05-27', 'ROMA', 0),
(1491, 'KUSWINARNI', '', 'P', 'Watu Talenan, Pulisen, Boyolali', 'Wonogiri, 19 Februari 1964', '09 Februari 1969', '25 Desember 1982', '06 November 1986', '', '', 'Edy Suryatmo', 'GKJ Boyolali', '', 'Baptis', '1969-02-09', 'ROMA', 0),
(1492, 'SURYA PUTRI MRADHINI JALMI', '', 'P', 'Watu Talenan, Pulisen, Boyolali', 'Wonogiri, 03 November 1987', '20 Desember 1987', '', '', '', 'Edy Suryatmo', 'Donald Adi Saputro', 'GKJ Boyolali', '', 'Baptis', '1987-12-20', 'ROMA', 0),
(1493, 'HALDILA WINDI SURYA PUTRI', '', 'P', 'Watu Talenan, Pulisen, Boyolali', 'Gombong, 22 Maret 1993', '12 Desember 1993', '26 Desember 2010', '', '', 'Edy Suryatmo', 'Ardiyan Ricky Mahendra', 'GKJ Boyolali', '', 'Baptis', '1993-12-12', 'ROMA', 0),
(1500, 'HENY PURWANINGRUM', '', 'P', 'Watu Talenan, Pulisen, Boyolali', 'Boyolali, 06 April 1981', '22 Desember 1996', '19 September 1999', '', '', '', 'Agung Widyasworo', 'GKJ Boyolali', '', 'Baptis', '1996-12-22', 'ROMA', 0),
(1502, 'CHAMPIANO GUSTI PRASETYO', '', 'L', 'Perum BSP 1, Blok D.10, Karanggeneng, Boyolali', '18 Agustus 1996', '22 Desember 1996', '13 April 2014', '', '', 'AT. Agus Riyanto', '', 'GKJ Boyolali', '', 'Baptis', '1996-12-22', 'PEPANTAN SUNGGINGAN', 0),
(1506, 'AT. AGUS RIYANTO', '', 'L', 'Perum BSP 1, Blok D.10, Karanggeneng, Boyolali', 'Surakarta, 05 Februari 1961', '15 Desember 1971', '', '14 Agustus 1995', '', '', 'Endang Mego Setyawati', 'GKJ Boyolali', '', 'Baptis', '1971-12-15', 'PEPANTAN SUNGGINGAN', 0),
(1523, 'KUKUH WIJAYANTO', '', 'L', 'Jl. Merbabu 101, Boyolali', 'Boyolali, 04 Januari 1968', '25 Mei 1997', '', '04 Juli 1998', '', '', 'Sri Saptiwi', 'GKJ Boyolali', '', 'Baptis', '1997-05-25', 'ROMA', 0),
(1525, 'SERAFINE DANIK RETNO KUSUMO', '', 'P', 'Sumber Rejo, Rt 02/Rw 03, Kiringan, Boyolali', 'Blora, 08 Oktober 1973', '24 November 1973', '', '21 Juni 1997', '', '', '', 'GKJ Boyolali', '', 'Baptis', '1973-11-24', 'PEPANTAN SUNGGINGAN', 0),
(1667, 'TRIWINDAR SRIYATI', '', 'P', 'Perum BSP 2, Blok N/27, Karanggeneng, Boyolali', 'Kebumen, 17 Januari 1972', '22 Oktober 1989', '', '', '', 'Wardi & Suwuh', 'Alm. Martinus Horman', 'GKJ Boyolali', '', 'Baptis', '2001-12-19', 'FILIPI', 0),
(9002, 'jerri', '', 'P', 'jalan pettarani 5 no 55', 'Makassar', 'Ya', '-', 'belum', '-', '-', '-', 'gejera', '-', '-', '2022-11-28', 'vzxfzxf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_majelis`
--

CREATE TABLE `data_majelis` (
  `id_majelis` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(16) NOT NULL,
  `jabatan_majelis` int(11) NOT NULL,
  `tanggal_registrasi` date NOT NULL DEFAULT current_timestamp(),
  `password` varchar(8) NOT NULL,
  `status` enum('Aktif','Tidak Aktif','','') NOT NULL,
  `komisi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_majelis`
--

INSERT INTO `data_majelis` (`id_majelis`, `nama`, `username`, `jabatan_majelis`, `tanggal_registrasi`, `password`, `status`, `komisi`) VALUES
(47, '', 'Jerri', 6, '2022-12-05', '123456', '', 10),
(51, '', 'jjjjjj', 2, '2022-12-05', 'kkkkkk', 'Aktif', 0),
(52, '', 'ssss', 4, '2022-12-03', 'sss', 'Aktif', NULL),
(62, '', 'Yohanes', 0, '2022-12-03', 'Yuliminc', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `pesan` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `email`, `subject`, `pesan`, `date`) VALUES
(1, 'kidungid2020@gmail.com', 'wewewewewewe', 'wewewewewewewewewewewe', '2022-12-14 23:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `jadwal` date NOT NULL,
  `jenis_persembahan` varchar(50) NOT NULL,
  `nominal` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `id_keuangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`jadwal`, `jenis_persembahan`, `nominal`, `keterangan`, `id_keuangan`) VALUES
('2022-12-13', 'anak', 1900000, '', 0),
('2022-12-16', 'ggg', 50000, '', 1),
('2022-06-12', 'Persembahan Kantong 3', 5752000, '', 3),
('2022-06-26', 'Persembahan Kasih', 20000000, '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pelayan_ibadah`
--

CREATE TABLE `pelayan_ibadah` (
  `id_ibadah` int(11) NOT NULL,
  `nama_ibadah` text NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `jadwal_ibadah` date NOT NULL,
  `pengkotbah` varchar(50) NOT NULL,
  `organis` varchar(50) NOT NULL,
  `pemandu_nyanyian` varchar(50) NOT NULL,
  `bunga_mimbar` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `penanggung_jawab` varchar(50) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_akhir` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelayan_ibadah`
--

INSERT INTO `pelayan_ibadah` (`id_ibadah`, `nama_ibadah`, `tempat`, `jadwal_ibadah`, `pengkotbah`, `organis`, `pemandu_nyanyian`, `bunga_mimbar`, `keterangan`, `penanggung_jawab`, `jam_mulai`, `jam_akhir`) VALUES
(2, 'Ibadah Minggu ke 1', 'GKJ Boyolali Induk', '2022-07-03', 'Sumarni', 'Sdr. Dwioooo', '', 'Kelompok Filipi', 'Ibadah Minggu', '', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE `proker` (
  `id_proker` int(11) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `nama_proker` text NOT NULL,
  `jenis_kegiatan` text NOT NULL,
  `waktu` varchar(25) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proker`
--

INSERT INTO `proker` (`id_proker`, `bidang`, `nama_proker`, `jenis_kegiatan`, `waktu`, `keterangan`, `date`) VALUES
(1, 'Sekretaris', 'Pengelolaan Administrasi Kantor Gereja', 'Menerima, mengagenda dan mengarsip surat-surat masuk', 'Januari s/d Desember', '', '2022-12-15'),
(2, 'Bidang KEESAAN', 'Penyelenggaraan Kebaktian', 'menyelenggarakan kebaktian hari minggu/kebaktian rutin di induk dan pepantan', 'Januari-Desember', '', '2022-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `struktur_komisi`
--

CREATE TABLE `struktur_komisi` (
  `idnama_komisi` varchar(50) NOT NULL,
  `periode_komisi` varchar(11) NOT NULL,
  `id_komisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `struktur_komisi`
--

INSERT INTO `struktur_komisi` (`idnama_komisi`, `periode_komisi`, `id_komisi`) VALUES
('Komisi Adiyuswa', '2021', 1),
('Komisi Anak', '2021', 2),
('komisi Ibadah', '2021', 3),
('Komisi Keluarga Dewasa', '2021', 4),
('Komisi Keluarga Muda', '2021', 5),
('Komisi PAK dan Pendidikan', '2021', 6),
('Komisi PEJ', '2021', 7),
('Komisi Pemuda dan Remaja', '2021', 8),
('Komisi Pralenan', '2021', 9),
('Komisi Rumah Tangga dan Inventaris Gereja', '2021', 10),
('Komisi SBKM', '2021', 11),
('Panitia Pembangunan dan Renovasi Gedung Gereja', '2021', 12),
('Pengurus PAUD', '2021', 13),
('Pengurus Perpustakaan', '2021', 14),
('Tim Multimedia', '2021', 15),
('Tim Pengurangan Resiko Bencana', '2021', 16),
('Tim Rip dan Renop', '2021', 17),
('amamam', '202021', 18);

-- --------------------------------------------------------

--
-- Table structure for table `struktur_majelis`
--

CREATE TABLE `struktur_majelis` (
  `idjabatan_majelis` varchar(50) NOT NULL,
  `periode_majelis` varchar(11) NOT NULL,
  `id_struktur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `struktur_majelis`
--

INSERT INTO `struktur_majelis` (`idjabatan_majelis`, `periode_majelis`, `id_struktur`) VALUES
('Bendahara', '2021', 1),
('Bidang Kajian', '2021', 2),
('Bidang KESPEL', '2021', 4),
('Bidang Pembangunan', '2021', 5),
('Bidang Penata Layanan', '2021', 6),
('ketua', '2021', 8),
('Sekretaris', '2021', 9);

-- --------------------------------------------------------

--
-- Table structure for table `warta`
--

CREATE TABLE `warta` (
  `judul` text NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `warta_gereja` text NOT NULL,
  `id_warta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warta`
--

INSERT INTO `warta` (`judul`, `tanggal`, `warta_gereja`, `id_warta`) VALUES
('', '0000-00-00', '', 2),
('jerrysss', '2022-12-04', '', 3),
('sdsadasdsdsds', '2022-12-15', 'Punya mikel dihapus aja ini anak (1).docx', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_jemaat`
--
ALTER TABLE `data_jemaat`
  ADD PRIMARY KEY (`no_induk`);

--
-- Indexes for table `data_majelis`
--
ALTER TABLE `data_majelis`
  ADD PRIMARY KEY (`id_majelis`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id_keuangan`);

--
-- Indexes for table `pelayan_ibadah`
--
ALTER TABLE `pelayan_ibadah`
  ADD PRIMARY KEY (`id_ibadah`);

--
-- Indexes for table `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id_proker`);

--
-- Indexes for table `struktur_komisi`
--
ALTER TABLE `struktur_komisi`
  ADD PRIMARY KEY (`id_komisi`);

--
-- Indexes for table `struktur_majelis`
--
ALTER TABLE `struktur_majelis`
  ADD PRIMARY KEY (`id_struktur`);

--
-- Indexes for table `warta`
--
ALTER TABLE `warta`
  ADD PRIMARY KEY (`id_warta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20223;

--
-- AUTO_INCREMENT for table `data_majelis`
--
ALTER TABLE `data_majelis`
  MODIFY `id_majelis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9546;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelayan_ibadah`
--
ALTER TABLE `pelayan_ibadah`
  MODIFY `id_ibadah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10001;

--
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
  MODIFY `id_proker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `struktur_komisi`
--
ALTER TABLE `struktur_komisi`
  MODIFY `id_komisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `struktur_majelis`
--
ALTER TABLE `struktur_majelis`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `warta`
--
ALTER TABLE `warta`
  MODIFY `id_warta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
