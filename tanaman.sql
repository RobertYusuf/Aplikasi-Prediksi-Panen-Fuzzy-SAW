-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_fix
CREATE DATABASE IF NOT EXISTS `db_fix` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_fix`;

-- Dumping structure for table db_fix.alternatif
CREATE TABLE IF NOT EXISTS `alternatif` (
  `id_alternatif` int(11) unsigned NOT NULL,
  `alternatif` varchar(20) NOT NULL,
  PRIMARY KEY (`id_alternatif`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_fix.alternatif: ~3 rows (approximately)
/*!40000 ALTER TABLE `alternatif` DISABLE KEYS */;
INSERT INTO `alternatif` (`id_alternatif`, `alternatif`) VALUES
	(1, 'Gagal'),
	(2, 'Cukup'),
	(3, 'Berhasil');
/*!40000 ALTER TABLE `alternatif` ENABLE KEYS */;

-- Dumping structure for table db_fix.kriteria
CREATE TABLE IF NOT EXISTS `kriteria` (
  `id_kriteria` int(11) unsigned NOT NULL,
  `kriteria` varchar(50) DEFAULT NULL,
  `sifat` set('B','C') DEFAULT NULL,
  `bobot` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_fix.kriteria: ~4 rows (approximately)
/*!40000 ALTER TABLE `kriteria` DISABLE KEYS */;
INSERT INTO `kriteria` (`id_kriteria`, `kriteria`, `sifat`, `bobot`) VALUES
	(3, 'Warna Daun', 'B', '4'),
	(4, 'Tebal Batang', 'B', '5'),
	(5, 'Kondisi Kelopak', 'B', '5'),
	(6, 'Serangan Hama', 'C', '4');
/*!40000 ALTER TABLE `kriteria` ENABLE KEYS */;

-- Dumping structure for table db_fix.nilai
CREATE TABLE IF NOT EXISTS `nilai` (
  `id_alternatif` int(11) unsigned NOT NULL,
  `id_kriteria` int(11) unsigned NOT NULL,
  `nilai` int(11) DEFAULT NULL,
  KEY `FK_nilai_kriteria` (`id_kriteria`),
  KEY `FK_nilai_alternatif` (`id_alternatif`) USING BTREE,
  CONSTRAINT `FK_nilai_alternatif` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`),
  CONSTRAINT `FK_nilai_kriteria` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_fix.nilai: ~12 rows (approximately)
/*!40000 ALTER TABLE `nilai` DISABLE KEYS */;
INSERT INTO `nilai` (`id_alternatif`, `id_kriteria`, `nilai`) VALUES
	(1, 3, 1),
	(1, 4, 2),
	(1, 5, 2),
	(1, 6, 1),
	(2, 3, 2),
	(2, 4, 1),
	(2, 5, 1),
	(2, 6, 2),
	(3, 3, 3),
	(3, 4, 3),
	(3, 5, 3),
	(3, 6, 3);
/*!40000 ALTER TABLE `nilai` ENABLE KEYS */;

-- Dumping structure for table db_fix.subkriteria
CREATE TABLE IF NOT EXISTS `subkriteria` (
  `id_subkriteria` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `subkriteria` varchar(50) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `id_kriteria` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_subkriteria`),
  KEY `FK_subkriteria_kriteria` (`id_kriteria`),
  CONSTRAINT `FK_subkriteria_kriteria` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table db_fix.subkriteria: ~14 rows (approximately)
/*!40000 ALTER TABLE `subkriteria` DISABLE KEYS */;
INSERT INTO `subkriteria` (`id_subkriteria`, `subkriteria`, `value`, `id_kriteria`) VALUES
	(1, 'Kering', 1, 3),
	(2, 'Kuning', 2, 3),
	(3, 'Hijau ', 3, 3),
	(5, 'Kurus', 1, 4),
	(6, 'Cukup', 2, 4),
	(7, 'Tebal', 3, 4),
	(8, 'Coklat', 1, 5),
	(9, 'Kecil', 2, 5),
	(10, 'Bersih', 3, 5),
	(12, 'Banyak', 1, 6),
	(13, 'Cukup', 2, 6),
	(14, 'Sedikit', 3, 6);
/*!40000 ALTER TABLE `subkriteria` ENABLE KEYS */;

-- Dumping structure for table db_fix.tanaman
CREATE TABLE IF NOT EXISTS `tanaman` (
  `id_tanaman` int(11) unsigned NOT NULL,
  `nama_tanaman` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tanaman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_fix.tanaman: ~3 rows (approximately)
/*!40000 ALTER TABLE `tanaman` DISABLE KEYS */;
INSERT INTO `tanaman` (`id_tanaman`, `nama_tanaman`) VALUES
	(1, 'Mawar'),
	(2, 'Krisan'),
	(3, 'Hortansia'),
(4, 'Pikok'),
(5, 'Aster');
/*!40000 ALTER TABLE `tanaman` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
