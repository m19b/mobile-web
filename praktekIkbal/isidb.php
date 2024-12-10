/*
Navicat Premium Data Transfer

Source Server : localhost_3306_1
Source Server Type : MySQL
Source Server Version : 100432 (10.4.32-MariaDB)
Source Host : localhost:3306
Source Schema : dbwebikbal

Target Server Type : MySQL
Target Server Version : 100432 (10.4.32-MariaDB)
File Encoding : 65001

Date: 10/12/2024 15:33:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for berita
-- ----------------------------
DROP TABLE IF EXISTS `berita`;
CREATE TABLE `berita` (
`id` int NOT NULL AUTO_INCREMENT,
`judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
`isi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
`kategori` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
`tanggal_publikasi` date NULL DEFAULT NULL,
`penulis` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
`gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
`publis` enum('Y','T') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Y',
`sumber` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
`tag` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of berita
-- ----------------------------
INSERT INTO `berita` VALUES (1, 'UTM Juara Lomba Debat Nasional', 'Tim debat UTM berhasil meraih juara pertama dalam
lomba debat nasional...', 'Kemahasiswaan', '2024-04-15', 'BEM UTM', 'debat.jpg', 'Y', 'Website BEM', '#debat
#kemahasiswaan');
INSERT INTO `berita` VALUES (2, 'Penerimaan Mahasiswa Baru UTM Tahun 2024 Dibuka', 'Pendaftaran mahasiswa baru UTM tahun
2024 resmi dibuka...', 'Akademik', '2024-03-01', 'Humas UTM', 'pmb.jpg', 'Y', 'Website UTM', '#pmb #utm');
INSERT INTO `berita` VALUES (3, 'Workshop Pengembangan Startup di UTM', 'UTM mengadakan workshop pengembangan
startup...', 'Akademik', '2024-05-10', 'Fakultas Teknik', 'workshop.jpg', 'Y', 'Website Fakultas Teknik', '#startup
#teknologi');
INSERT INTO `berita` VALUES (4, 'Bantuan Beasiswa untuk Mahasiswa Berprestasi', 'UTM memberikan bantuan beasiswa bagi
mahasiswa berprestasi...', 'Akademik', '2024-04-20', 'Biro Akademik', 'beasiswa.jpg', 'Y', 'Website Biro Akademik',
'#beasiswa #prestasi');
INSERT INTO `berita` VALUES (5, 'Pengabdian Masyarakat di Desa Sekitar Kampus', 'Mahasiswa UTM melaksanakan pengabdian
masyarakat...', 'Kemahasiswaan', '2024-03-25', 'LPPM UTM', 'pengabdian.jpg', 'Y', 'Website LPPM', '#pengabdian
#masyarakat');
INSERT INTO `berita` VALUES (6, 'Kerja Sama UTM dengan Perusahaan Teknologi', 'UTM menjalin kerja sama dengan perusahaan
teknologi ternama...', 'Akademik', '2024-04-05', 'Bem UTM', 'kerjasama.jpg', 'Y', 'Website Rektorat', '#kerjasama
#teknologi');
INSERT INTO `berita` VALUES (7, 'Seminar Nasional dengan Tema Inovasi Teknologi', 'Seminar nasional dengan tema inovasi
teknologi digelar di UTM...', 'Akademik', '2024-05-25', 'Fakultas MIPA', 'seminar.jpg', 'Y', 'Website Fakultas MIPA',
'#seminar #inovasi');
INSERT INTO `berita` VALUES (8, 'Tim Robotika UTM Raih Juara', 'Tim robotika UTM berhasil meraih juara dalam kompetisi
robotik nasional...', 'Kemahasiswaan', '2024-04-10', 'HIMA Teknik Elektro', 'robotik.jpg', 'Y', 'Website HIMA',
'#robotik #kemahasiswaan');
INSERT INTO `berita` VALUES (9, 'Pembukaan Unit Kegiatan Mahasiswa Baru', 'UTM mengadakan kegiatan pembukaan UKM
baru...', 'Kemahasiswaan', '2024-03-15', 'BEM UTM', 'ukm.jpg', 'Y', 'Website BEM', '#ukm #kemahasiswaan');
INSERT INTO `berita` VALUES (10, 'Webinar tentang Kecerdasan Buatan', 'Webinar tentang kecerdasan buatan diadakan oleh
Fakultas Ilmu Komputer UTM...', 'Akademik', '2024-05-05', 'Fakultas Ilmu Komputer', 'webinar.jpg', 'Y', 'Website
Fakultas Ilmu Komputer', '#webinar #kecerdasan_buatan');

-- ----------------------------
-- Table structure for biayakuliah
-- ----------------------------
DROP TABLE IF EXISTS `biayakuliah`;
CREATE TABLE `biayakuliah` (
`id` int NOT NULL AUTO_INCREMENT,
`fakultas` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
`prodi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
`nominal` decimal(10, 0) NULL DEFAULT 0,
`satuan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Bulan',
`ikon` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
`posisi` char(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
`urut` int NULL DEFAULT 0,
PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of biayakuliah
-- ----------------------------
INSERT INTO `biayakuliah` VALUES (1, 'Teknologi Informasi dan Komunikasi (S1)', 'Teknik Informatika', 5000000,
'Semester', 'bi bi-box', 'featured', 0);
INSERT INTO `biayakuliah` VALUES (2, 'Teknologi Informasi dan Komunikasi (S1)', 'Sistem Informasi', 5000000, 'Semester',
'bi bi-box', '', 0);

-- ----------------------------
-- Table structure for biayakuliah_item
-- ----------------------------
DROP TABLE IF EXISTS `biayakuliah_item`;
CREATE TABLE `biayakuliah_item` (
`id` int NOT NULL AUTO_INCREMENT,
`ikon` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
`coret` enum('na','') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '',
`uraian` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
`biayakuliah_id` int NULL DEFAULT NULL,
`urut` int NULL DEFAULT 0,
PRIMARY KEY (`id`) USING BTREE,
INDEX `biayakuliah_id`(`biayakuliah_id` ASC) USING BTREE,
CONSTRAINT `biayakuliah_item_ibfk_1` FOREIGN KEY (`biayakuliah_id`) REFERENCES `biayakuliah` (`id`) ON DELETE RESTRICT
ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of biayakuliah_item
-- ----------------------------
INSERT INTO `biayakuliah_item` VALUES (1, 'bi-check', '', 'Biaya Pendaftaran', 1, 0);
INSERT INTO `biayakuliah_item` VALUES (2, 'bi-check', '', 'Biaya SPP ( 4.700.000 / Semester)', 1, 0);
INSERT INTO `biayakuliah_item` VALUES (3, 'bi-check', '', 'Biaya SPMA (1.000.000 / Semester)', 1, 0);
INSERT INTO `biayakuliah_item` VALUES (4, 'bi-check', '', 'Biaya SPP ( 4.700.000 / Semester)', 2, 0);
INSERT INTO `biayakuliah_item` VALUES (5, 'bi-check', '', 'Biaya SPMA ( 700.000 / Semester)', 2, 0);

-- ----------------------------
-- Table structure for galeri
-- ----------------------------
DROP TABLE IF EXISTS `galeri`;
CREATE TABLE `galeri` (
`id` int NOT NULL AUTO_INCREMENT,
`kategori` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
`nama_foto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
`ket` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
`uraian` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
`saktif` enum('Y','T') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'T',
PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of galeri
-- ----------------------------
INSERT INTO `galeri` VALUES (1, 'Dosen', 'g2.png', 'Bapak Dr. Muhammad Multazam, S.Kom., M.Kom', 'Dosen pengampuh
matakuliah web', 'Y');
INSERT INTO `galeri` VALUES (2, 'Kampus', 'g1.png', 'Kampus UTM', 'Tampak Depan', 'Y');

-- ----------------------------
-- Table structure for layanan
-- ----------------------------
DROP TABLE IF EXISTS `layanan`;
CREATE TABLE `layanan` (
`idLayanan` int NOT NULL AUTO_INCREMENT,
`judulLayanan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
`deskipsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
`icon` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
PRIMARY KEY (`idLayanan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of layanan
-- ----------------------------
INSERT INTO `layanan` VALUES (1, 'Dosen yang ', 'Memiliki dosen yang profesional', 'bi-person-fill');
INSERT INTO `layanan` VALUES (2, 'Ruang Kuliah Representatif', 'memiliki ruang kuliah yang Ruang Kuliah Representatif
Ruang Kuliah Representatif Ruang Kuliah Representatif', 'bi-building-fill');
INSERT INTO `layanan` VALUES (3, 'Lap. Komputer Lengkap', 'Lap. Komputer Lengkap Lap. Komputer Lengkap Lap. Komputer
Lengkap Lap. Komputer Lengkap Lap. Komputer Lengkap Lap. Komputer Lengkap', 'bi-pc-display');
INSERT INTO `layanan` VALUES (4, 'Sistem Informasi Akademik', 'memiliki Sistem Informasi Akademik Sistem Informasi
Akademik Sistem Informasi Akademik Sistem Informasi Akademik Sistem Informasi Akademik', 'bi-database-fill');

-- ----------------------------
-- Table structure for profil_utm
-- ----------------------------
DROP TABLE IF EXISTS `profil_utm`;
CREATE TABLE `profil_utm` (
`id` int NOT NULL AUTO_INCREMENT,
`nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
`judul` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
`uraian` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of profil_utm
-- ----------------------------
INSERT INTO `profil_utm` VALUES (1, 'sejarah', 'Sejarah Universitas Teknologi Mataram', 'Universitas Teknologi Mataram
(UTM Mataram) merupakan penggabungan dari Sekolah Tinggi Manajemen Informatika Komputer Mataram dan Akademi Sekretari
dan Manajemen Mataram dengan Keputusan Menristekdikti RI Nomor : 660/KPT/I/2019 tanggal 29 Juli 2019.');
INSERT INTO `profil_utm` VALUES (7, 'visi', 'Visi Universitas Mataram', 'Menjadi universitas yang unggul di bidang
teknologi dan bisnis digital secara nasional berlandaskan jiwa wirausaha pada tahun 2030.');
INSERT INTO `profil_utm` VALUES (8, 'misi', 'Misi Universitas Mataram', 'Menyelenggarakan pendidikan yang bermutu
berbasis teknologi dan jiwa kewirausahaan.');
INSERT INTO `profil_utm` VALUES (9, 'misi', 'Misi Universitas Mataram', 'Melaksanakan penelitian yang bermanfaat bagi
kesejahteraan masyarakat.');
INSERT INTO `profil_utm` VALUES (10, 'misi', 'Misi Universitas Mataram', 'Melaksanakan pengabdian kepada masyarakat
dalam bentuk pemberdayaan usaha kecil dan menengah.');
INSERT INTO `profil_utm` VALUES (11, 'misi', 'Misi Universitas Mataram', 'Membangun kerjasama baik ditingkat nasional
maupun internasional.');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
`email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
`password` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
`nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('ikbal@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', 'Muhammad Ikbal');

SET FOREIGN_KEY_CHECKS = 1;