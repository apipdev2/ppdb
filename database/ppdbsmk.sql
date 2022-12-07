/*
 Navicat Premium Data Transfer

 Source Server         : php 7.3
 Source Server Type    : MySQL
 Source Server Version : 100419
 Source Host           : localhost:3306
 Source Schema         : ppdbsmk

 Target Server Type    : MySQL
 Target Server Version : 100419
 File Encoding         : 65001

 Date: 06/12/2022 10:21:15
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for berkas
-- ----------------------------
DROP TABLE IF EXISTS `berkas`;
CREATE TABLE `berkas`  (
  `id_berkas` int NOT NULL AUTO_INCREMENT,
  `image` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_berkas` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_peserta` int NOT NULL,
  PRIMARY KEY (`id_berkas`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of berkas
-- ----------------------------
INSERT INTO `berkas` VALUES (7, '265-2658571_receipt-bot-logo-hd-png-download.png', 'KIP', 8);

-- ----------------------------
-- Table structure for berkebutuhan_khusus
-- ----------------------------
DROP TABLE IF EXISTS `berkebutuhan_khusus`;
CREATE TABLE `berkebutuhan_khusus`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `kebutuhan_khusus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of berkebutuhan_khusus
-- ----------------------------
INSERT INTO `berkebutuhan_khusus` VALUES (1, 'Tidak');
INSERT INTO `berkebutuhan_khusus` VALUES (2, 'Netra');
INSERT INTO `berkebutuhan_khusus` VALUES (3, 'Rungu');
INSERT INTO `berkebutuhan_khusus` VALUES (4, 'Grahita Ringan');
INSERT INTO `berkebutuhan_khusus` VALUES (5, 'Grahita Sedang');
INSERT INTO `berkebutuhan_khusus` VALUES (6, 'Daksa Ringan');
INSERT INTO `berkebutuhan_khusus` VALUES (7, 'Daksa Sedang');
INSERT INTO `berkebutuhan_khusus` VALUES (8, 'Wicara');
INSERT INTO `berkebutuhan_khusus` VALUES (9, 'Tuna Ganda');
INSERT INTO `berkebutuhan_khusus` VALUES (10, 'Hiper aktif');
INSERT INTO `berkebutuhan_khusus` VALUES (11, 'Cerdas Istimewa');
INSERT INTO `berkebutuhan_khusus` VALUES (12, 'Bakat Istimewa');
INSERT INTO `berkebutuhan_khusus` VALUES (13, 'Kesulitan Belajar');
INSERT INTO `berkebutuhan_khusus` VALUES (14, 'Narkoba');
INSERT INTO `berkebutuhan_khusus` VALUES (15, 'Indigo');
INSERT INTO `berkebutuhan_khusus` VALUES (16, 'Down Sindrome');
INSERT INTO `berkebutuhan_khusus` VALUES (17, 'Autis');

-- ----------------------------
-- Table structure for cabut_berkas
-- ----------------------------
DROP TABLE IF EXISTS `cabut_berkas`;
CREATE TABLE `cabut_berkas`  (
  `id_cb` int NOT NULL AUTO_INCREMENT,
  `id_tahun` int NULL DEFAULT NULL,
  `tanggal_cb` date NULL DEFAULT NULL,
  `id_peserta` int NULL DEFAULT NULL,
  `pencabut_berkas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `total_du` int NULL DEFAULT NULL,
  `potongan_cb` int NULL DEFAULT NULL,
  `diterima` int NULL DEFAULT NULL,
  `id_user` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_cb`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cabut_berkas
-- ----------------------------

-- ----------------------------
-- Table structure for captcha
-- ----------------------------
DROP TABLE IF EXISTS `captcha`;
CREATE TABLE `captcha`  (
  `captcha_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `captcha_time` int UNSIGNED NOT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `word` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`captcha_id`) USING BTREE,
  INDEX `word`(`word`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 163 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of captcha
-- ----------------------------
INSERT INTO `captcha` VALUES (154, 1670276574, '::1', 'lSCu');
INSERT INTO `captcha` VALUES (155, 1670276865, '::1', 'gMLz');
INSERT INTO `captcha` VALUES (156, 1670276896, '::1', 'RkxD');
INSERT INTO `captcha` VALUES (157, 1670276917, '::1', 'edOB');
INSERT INTO `captcha` VALUES (158, 1670276937, '::1', 'HhLq');
INSERT INTO `captcha` VALUES (159, 1670276949, '::1', 'UJXl');
INSERT INTO `captcha` VALUES (160, 1670276956, '::1', 'arxN');
INSERT INTO `captcha` VALUES (161, 1670277058, '::1', 'dpLO');
INSERT INTO `captcha` VALUES (162, 1670277064, '::1', 'kLts');

-- ----------------------------
-- Table structure for formulir
-- ----------------------------
DROP TABLE IF EXISTS `formulir`;
CREATE TABLE `formulir`  (
  `id_formulir` int NOT NULL AUTO_INCREMENT,
  `tahun_pelajaran` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jalur_pendaftaran` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_peserta` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_kelamin` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nisn` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nik` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tempat_lahir` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_lahir` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_registrasi_akta_lahir` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `agama` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kewarganegaraan` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `berkebutuhan_khusus` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rt` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rw` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_dusun` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_kelurahan` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kecamatan` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode_pos` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `latitude` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `longitude` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tempat_tinggal` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `moda_transportasi` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_kks` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `anak_ke` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `penerima_kps_pkh` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_kps_pkh` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `penerima_kip` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_kip` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_tertera_di_kip` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `terima_fisik_kartu_kip` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_ayah` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nik_ayah` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tahun_lahir_ayah` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pendidikan_ayah` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pekerjaan_ayah` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `penghasilan_bulanan_ayah` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `berkebutuhan_khusus_ayah` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_ibu` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nik_ibu` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tahun_lahir_ibu` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pendidikan_ibu` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pekerjaan_ibu` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `penghasilan_bulanan_ibu` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `berkebutuhan_khusus_ibu` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_wali` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nik_wali` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tahun_lahir_wali` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pendidikan_wali` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pekerjaan_wali` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `penghasilan_bulanan_wali` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_telepon_rumah` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nomor_hp` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_ekstrakurikuler` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tinggi_badan` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `berat_badan` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jarak_ke_sekolah` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jumlah_saudara_kandung` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jurusan` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `asal_sekolah` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_peserta_ujian` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_seri_ijazah` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_seri_skhu` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nilai_usbn` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nilai_rapor` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nilai_unbk_unkp` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ketentuan` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `akte_kelahiran` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kartu_keluarga` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `skl_skhu` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `skd` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `berkaslain` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tipe` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode_daring` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode_luring` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode_formulir` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto_full` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rapor` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sktm` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ktp_ortu` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kartu_bantuan` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sptjm` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sp` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_formulir`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of formulir
-- ----------------------------
INSERT INTO `formulir` VALUES (1, 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', '', '', 'Ya', 'Ya', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', '', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', '', 'Ya', '', '', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', '', '', '', '', '', '', '<ol>\r\n <li>Setiap calon peserta didik wajib mengisi formulir pendaftaran dengan lengkap.</li>\r\n <li>Data-data yang diisikan pada formulir PPDB Online harus sesuai dengan data asli dan benar adanya.</li>\r\n <li>Calon peserta didik yang sudah mendaftar secara online wajib mencetak bukti pendaftaran sebanyak dua rangkap sebagai bukti pendaftaran dan dilampirkan dalam persyaratan yang diminta oleh Panitia PPDB.</li>\r\n <li>Calon peserta didik yang sudah mendaftarkan diri melalui PPDB Online wajib menyerahkan dokumen persyaratan yang sudah ditentukan oleh Panitia PPDB.</li>\r\n <li>Calon peserta didik yang telah mendaftar tidak dapat mencabut berkas pendaftaran dengan alasan apapun.</li>\r\n</ol>', '', 'Ya', 'Ya', '', '', '', '3', '13-0002', '13-0002', '', '', '', 'Ya', 'Ya', 'Ya', '', '');

-- ----------------------------
-- Table structure for identitas
-- ----------------------------
DROP TABLE IF EXISTS `identitas`;
CREATE TABLE `identitas`  (
  `id_identitas` int NOT NULL AUTO_INCREMENT,
  `nama_sekolah` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode_sekolah` varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `npsn` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenjang` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kepala_sekolah` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nip` varchar(18) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kelurahan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kecamatan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kabupaten` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode_pos` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_telepon` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `website` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `latitude` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `longitude` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gis` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `apikey` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `logo` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bglogin` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status_pendaftaran` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status_hasil` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status_daftar_ulang` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `penomoran` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `stempel` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ttd` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `header` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hstempel` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `httd` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sstempel` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sttd` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_identitas`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of identitas
-- ----------------------------
INSERT INTO `identitas` VALUES (1, 'SMPN 1 TUMIJAJAR', '12130002', '10808388', 'NEGERI', 'SMP/MTs', 'Jalan Jendral Sudirman No. 1 Murnijaya', 'Sri Mustika Ningsih, S.Pd', '196508151986092003', 'Murnijaya', 'Tumijajar', 'Tulang Bawang Barat', '34592', '07257576180', 'smpn1tumijajar.sch.id', 'smpntumijajar1@gmail.com', '-4.6221235655318225', '105.10049032725532', '', 'AIzaSyBchRI_21q70ikqLxY-SxgiRJUY6BWMav8', 'logo.png', 'background.png', '', '', '', 'otomatis', 'stempel.png', 'bglogin.png', 'header.png', '110', '95', 'Ya', 'Ya');

-- ----------------------------
-- Table structure for jalur
-- ----------------------------
DROP TABLE IF EXISTS `jalur`;
CREATE TABLE `jalur`  (
  `id_jalur` int NOT NULL AUTO_INCREMENT,
  `jalur` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `persentase` int NOT NULL,
  `status_jalur` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_jalur`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jalur
-- ----------------------------
INSERT INTO `jalur` VALUES (1, 'Zonasi', 60, 'Aktif');
INSERT INTO `jalur` VALUES (2, 'Prestasi', 20, 'Aktif');
INSERT INTO `jalur` VALUES (3, 'Afirmasi', 15, 'Aktif');
INSERT INTO `jalur` VALUES (4, 'Perpindahan', 5, 'Aktif');
INSERT INTO `jalur` VALUES (5, 'umum', 500, 'Aktif');

-- ----------------------------
-- Table structure for jenis_pembayaran
-- ----------------------------
DROP TABLE IF EXISTS `jenis_pembayaran`;
CREATE TABLE `jenis_pembayaran`  (
  `id_jenis` int NOT NULL AUTO_INCREMENT,
  `id_tahun` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jenis_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `besarnya` int NULL DEFAULT NULL,
  `kategori_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_jenis`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jenis_pembayaran
-- ----------------------------
INSERT INTO `jenis_pembayaran` VALUES (2, '6', 'Daftar Ulang Ke-1', 0, 'Angsuran', 'Y');
INSERT INTO `jenis_pembayaran` VALUES (6, '6', 'Daftar Ulang Ke-2', 0, 'Angsuran', 'Y');
INSERT INTO `jenis_pembayaran` VALUES (7, '6', 'Daftar Ulang Ke-3', 0, 'Angsuran', 'Y');
INSERT INTO `jenis_pembayaran` VALUES (8, '6', 'Cabut Berkas', 0, NULL, 'N');

-- ----------------------------
-- Table structure for jurusan
-- ----------------------------
DROP TABLE IF EXISTS `jurusan`;
CREATE TABLE `jurusan`  (
  `id_jurusan` int NOT NULL AUTO_INCREMENT,
  `bidang_keahlian` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_jurusan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kuota_jurusan` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_jurusan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jurusan
-- ----------------------------
INSERT INTO `jurusan` VALUES (1, 'Umum', 'Umum', '288');
INSERT INTO `jurusan` VALUES (3, 'Teknik', 'Rekayasa Perangkat Lunak', '90');
INSERT INTO `jurusan` VALUES (5, 'Teknik', 'Teknik Komputer dan Jaringan', '90');

-- ----------------------------
-- Table structure for pembayaran_detail
-- ----------------------------
DROP TABLE IF EXISTS `pembayaran_detail`;
CREATE TABLE `pembayaran_detail`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_bayar` date NULL DEFAULT NULL,
  `id_tahun` int NULL DEFAULT NULL,
  `no_pendaftaran` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_jenis` int NULL DEFAULT NULL,
  `besarnya_pembayaran` int NULL DEFAULT NULL,
  `id_user` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pembayaran_detail
-- ----------------------------
INSERT INTO `pembayaran_detail` VALUES (18, 'TR-202212000001', '2022-12-03', 6, '202212000002', 7, 560000, 1);

-- ----------------------------
-- Table structure for pengumuman
-- ----------------------------
DROP TABLE IF EXISTS `pengumuman`;
CREATE TABLE `pengumuman`  (
  `id_pengumuman` int NOT NULL AUTO_INCREMENT,
  `type` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `text` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pengumuman`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pengumuman
-- ----------------------------
INSERT INTO `pengumuman` VALUES (2, 'Member', 'Syarat Pendaftaran', '<ol>\r\n <li>Mengisi formulir yang telah disediakan melalui online ppdb.smpn1tumijajar.sch.id.</li>\r\n <li>Usia maksimal 15 tahun (1 Juli 2021).</li>\r\n <li>Ijazah terakhir/Surat Keterangan Lulus + foto copy legalisir 2 lembar.</li>\r\n <li>Kartu Keluarga/Surat Keterangan Domisili (minimal sudah 1 tahun) + foto copy legalisir 2 lembar.</li>\r\n <li>KTP Orangtua + foto copy 2 lembar.</li>\r\n <li>Akta Kelahiran + foto copy 2 lembar.</li>\r\n <li>Photo berwarna 3x4 sebanyak 2 lembar.</li>\r\n <li>Kartu bantuan sosial (PKH/KPS/KIP/SKTM) untuk jalur afirmasi.</li>\r\n <li>Surat penugasan dari instansi, lembaga, kantor atau perusahaan yang mempekerjakan (untuk jalur Perpindahan tugas orangtua).</li>\r\n <li>Bukti prestasi nilai rapor semester 1 s.d. 5, hasil perlombaan akademik/non akademik tingkat Internasional/Nasional/Provinsi/Kabupaten/Kecamatan/Sekolah/Hafiz Al Quran yang diterbitkan minimal 6 bulan dan maksimal 3 tahun (untuk jalur prestasi).</li>\r\n <li>Formulir Pendaftaran (2 rangkap) beserta syarat-syarat yang diminta dimasukkan ke dalam stofmap folio (forte/biola) 2 buah dan diserahkan ke sekolah.\r\n <ul>\r\n  <li>Laki-laki warna Merah.</li>\r\n  <li>Perempuan warna Biru.</li>\r\n </ul>\r\n </li>\r\n <li>calon peserta didik yang telah mendaftar tidak dapat mencabut berkas pendaftaran dengan alasan apapun.</li>\r\n</ol>', '2021-05-25 22:30:51');
INSERT INTO `pengumuman` VALUES (3, 'Formulir', 'Keterangan bawah formulir', '<p>Catatan :</p>\r\n\r\n<ol>\r\n <li>Yang bertandatangan Orangtua/Wali atau Siswa bertanggung jawab secara hukum terhadap kebenaran data yang tercantum.</li>\r\n <li>Formulir Pendaftaran di cetak sebanyak dua rangkap.</li>\r\n <li>Calon Peserta Didik Baru <strong>Wajib</strong> mencantumkan <strong>Nomor Induk Siswa Nasional (NISN)</strong>.</li>\r\n <li>Ijazah/SKL Asli ditunjukkan kepada sekolah yang di daftar.</li>\r\n <li>Pengumuman Calon Peserta Didik Baru yang diterima tanggal 29 s.d 30 Juni 2021.</li>\r\n <li>Daftar ulang bagi calon siswa yang diterima pada tanggal 1 s.d 2 Juli 2021 membawa/menyerahkan formulir pendaftaran.</li>\r\n <li>Calon Peserta Didik Baru yang diterima tetapi tidak mendaftar ulang maka di anggap <strong>GUGUR</strong>.</li>\r\n <li>Calon Peserta Didik Baru yang telah mendaftar tidak dapat mencabut berkas pendaftaran dengan alasan apapun.</li>\r\n</ol>', '2021-05-31 13:01:19');
INSERT INTO `pengumuman` VALUES (5, 'SKL', 'di isi dengan nomor pengumuman untuk skl', '<p>Ketentuan lainnya :</p>\r\n\r\n<ul>\r\n <li>Menyerahkan Formulir Pendaftaran.</li>\r\n <li>Peserta yang tidak melakukan <strong>REGISTRASI ULANG</strong> sesuai ketentuan dinyatakan <strong>GURUR</strong>.</li>\r\n</ul>', '2021-05-25 22:33:14');
INSERT INTO `pengumuman` VALUES (6, 'Publik', 'Alur PPDB', '<ol>\r\n <li>Calon peserta didik membuat akun pengguna di <a href=\"http://ppdb.smpn1tumijajar.sch.id/\">http://ppdb.smpn1tumijajar.sch.id/</a></li>\r\n <li>Calon peserta didik login menggunakan NISN dan kata sandi/password yang telah dibuat sebelumnya</li>\r\n <li>Calon peserta didik mengisi formulir pendaftaran</li>\r\n <li>Calon peserta didik menambahkan prestasi akademik/non akademik (jalur prestasi)</li>\r\n <li>Calon peserta didik mencetak bukti pendaftaran sebanyak dua rangkap</li>\r\n <li>Serahkan Bukti Pendaftaran beserta lampirkan syarat-syarat lainnya ke Panitia PPDB untuk diverifikasi</li>\r\n <li>Calon peserta didik yang telah mendaftar tidak dapat mencabut berkas pendaftaran dengan alasan apapun</li>\r\n</ol>', '2021-05-25 22:32:57');

-- ----------------------------
-- Table structure for peserta
-- ----------------------------
DROP TABLE IF EXISTS `peserta`;
CREATE TABLE `peserta`  (
  `id_peserta` int NOT NULL AUTO_INCREMENT,
  `no_pendaftaran` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_daftar` date NULL DEFAULT NULL,
  `id_tahun` int NULL DEFAULT NULL,
  `id_jalur` int NULL DEFAULT NULL,
  `nama_peserta` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nisn` varchar(18) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nik` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempat_lahir` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_lahir` date NULL DEFAULT NULL,
  `no_registrasi_akta_lahir` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `agama` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kewarganegaraan` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `berkebutuhan_khusus` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kode_pos` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `latitude` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `longitude` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempat_tinggal` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `moda_transportasi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_kks` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `anak_ke` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `penerima_kps_pkh` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_kps_pkh` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `penerima_kip` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_kip` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_tertera_di_kip` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `terima_fisik_kartu_kip` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_ayah` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nik_ayah` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempat_lahir_ayah` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_lahir_ayah` date NULL DEFAULT NULL,
  `pendidikan_ayah` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pekerjaan_ayah` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `penghasilan_bulanan_ayah` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `berkebutuhan_khusus_ayah` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_ayah` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_ibu` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nik_ibu` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempat_lahir_ibu` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_lahir_ibu` date NULL DEFAULT NULL,
  `pendidikan_ibu` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pekerjaan_ibu` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `penghasilan_bulanan_ibu` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `berkebutuhan_khusus_ibu` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_ibu` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_wali` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nik_wali` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempat_lahir_wali` varchar(55) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pendidikan_wali` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pekerjaan_wali` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_lahir_wali` date NULL DEFAULT NULL,
  `penghasilan_bulanan_wali` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_wali` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nomor_hp` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis_ekstrakurikuler` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tinggi_badan` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `berat_badan` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jarak` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jumlah_saudara_kandung` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_jurusan` int NULL DEFAULT NULL,
  `jurusan2` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `asal_sekolah` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_kk` int NULL DEFAULT NULL,
  `no_un` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_seri_ijazah` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_seri_skhu` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nilai_rapor` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nilai_usbn` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nilai_unbk_unkp` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_pendaftaran` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_daftar_ulang` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_users` int NULL DEFAULT NULL,
  `id_potongan` int NULL DEFAULT NULL,
  `pilihan_sekolah_lain` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `catatan` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `size_jurusan` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `size_olahraga` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_peserta`) USING BTREE,
  UNIQUE INDEX `no_pendaftaran`(`no_pendaftaran`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of peserta
-- ----------------------------
INSERT INTO `peserta` VALUES (2, '202212000002', '2022-12-04', 6, NULL, 'RADEN KIAN SANTANG', 'P', '20139844', '36038848484833', 'Tangerang', '2022-12-05', 'TL-07092022VNK', 'Islam\r\n', NULL, 'Tidak', 'Kp.nagreg rt.16/09 ds.cisoka kec.cisoka kab.tangerang', NULL, NULL, NULL, 'Bersama orang Tua', 'Kendaraan Pribadi', NULL, '2', NULL, NULL, NULL, '768768', NULL, NULL, 'ISHAK', '36717777', 'Tangerang', '2022-12-05', NULL, 'Pedagang Besar\r', '5 juta - 20 juta\r\n', 'Tidak', '08976876878', 'sarminah', '3672222888', 'Blora', '2022-12-04', NULL, 'Tidak Bekerja\r\n', 'Tidak Berpenghasilan\r\n', 'Tidak', '', '', '', '', NULL, NULL, '0000-00-00', NULL, '', NULL, 'aconkwiwin12@gmail.com', NULL, NULL, '176', '56', 'Kurang Dari 1 KM', '4', 3, 'Umum', 'SMP N 2 OK', 2147483647, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', 'Y', 'N', 1, 4, NULL, NULL, 'default.jpg', NULL, NULL);
INSERT INTO `peserta` VALUES (4, '202212000004', '2022-12-04', 6, NULL, '11', 'L', '11', '11', '11', '0000-00-00', '', NULL, NULL, NULL, '', NULL, NULL, NULL, '', '', NULL, '', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, '', '', '', '', '0000-00-00', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '0000-00-00', NULL, '', NULL, '', NULL, NULL, '', '', NULL, '', 0, '', 'SMP N 2 OK', 11, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL, NULL, 1, NULL, NULL, NULL, 'default.jpg', NULL, NULL);
INSERT INTO `peserta` VALUES (7, '202212000005', '2022-12-05', 6, NULL, 'coang', 'L', '12776334', '1234123412', 'Tangerang', '2022-12-05', '', 'Islam\r\n', NULL, 'Tidak', 'dkalsdf', NULL, NULL, NULL, 'Bersama orang Tua', 'Kendaraan Pribadi', NULL, '1', NULL, NULL, NULL, '', NULL, NULL, '', 'asd', '', '0000-00-00', NULL, NULL, NULL, NULL, '', '', 'd', '', '0000-00-00', NULL, NULL, NULL, NULL, '', '', '', '', NULL, NULL, '0000-00-00', NULL, '', NULL, '', '$10$JcHaMYZk7bPyFxKOdOOe6ehadF23NxQJI1vdqqiM4q9rJTypNNRwG', NULL, '123', '121', 'Kurang Dari 1 KM', '2', 3, 'Umum', 'asdfasdfas', 2147483647, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL, NULL, 9, NULL, NULL, NULL, 'default.jpg', NULL, NULL);
INSERT INTO `peserta` VALUES (8, '202212000006', '2022-12-05', 6, NULL, 'oray taneh', 'L', '1234', '123123123', 'Tanah abang', '2022-12-05', 'TL-07092022ng', 'Islam\r\n', NULL, 'Netra', 'adfasdfasdf', NULL, NULL, NULL, 'Bersama Orang Tua', 'Jalan Kaki', NULL, '2', NULL, NULL, NULL, 'ERT444', NULL, NULL, 'RAHMAN', '36717777', 'Tangerang', '2022-12-06', 'Tidak sekolah\r\n', 'Wiraswasta\r\n', '2 juta - 4.999.999\r\n', 'Tidak', '08123', 'sarminah', '3672222', 'Blora', '2022-12-05', 'Tidak sekolah\r\n', 'Tidak Bekerja\r\n', 'Tidak Berpenghasilan\r\n', 'Tidak', '089192', '', '', '', 'Tidak sekolah\r\n', 'Tidak Bekerja\r\n', '0000-00-00', 'Kurang dari 500.000\r\n', '', '08979789', 'oray@gmail.com', '$2y$10$rBSupxKUxRnT/cdCwNhahOGVIOHSFx2Y/sgwOLAG9ka9wl68evJM6', NULL, '123', '321', 'Kurang Dari 1 KM', '3', 5, 'Teknik Komputer dan Jaringan', 'smp 12', 56456, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', 'Y', NULL, NULL, 6, NULL, NULL, 'K1T1S1.jpg', NULL, NULL);

-- ----------------------------
-- Table structure for potongan_peserta
-- ----------------------------
DROP TABLE IF EXISTS `potongan_peserta`;
CREATE TABLE `potongan_peserta`  (
  `id_diskon` int NOT NULL AUTO_INCREMENT,
  `id_peserta` int NULL DEFAULT NULL,
  `id_jenis_potongan` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_diskon`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of potongan_peserta
-- ----------------------------
INSERT INTO `potongan_peserta` VALUES (1, 6, 2);
INSERT INTO `potongan_peserta` VALUES (2, 2, 1);
INSERT INTO `potongan_peserta` VALUES (3, 3, 6);

-- ----------------------------
-- Table structure for riwayatkelas
-- ----------------------------
DROP TABLE IF EXISTS `riwayatkelas`;
CREATE TABLE `riwayatkelas`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nis` bigint NOT NULL,
  `id_kelas` int NOT NULL,
  `id_kurikulum` int NULL DEFAULT NULL,
  `status` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ket` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of riwayatkelas
-- ----------------------------
INSERT INTO `riwayatkelas` VALUES (1, 20210001, 77, 1, NULL, NULL, '2022-10-13 14:58:29', NULL);
INSERT INTO `riwayatkelas` VALUES (4, 20210002, 77, 1, NULL, NULL, '2022-10-13 15:15:08', NULL);

-- ----------------------------
-- Table structure for sekolah
-- ----------------------------
DROP TABLE IF EXISTS `sekolah`;
CREATE TABLE `sekolah`  (
  `id_sekolah` int NOT NULL AUTO_INCREMENT,
  `npsn_sekolah` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `asal_sekolah` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat_sekolah` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kelurahan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status_sekolah` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kecamatan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_sekolah`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 191 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sekolah
-- ----------------------------
INSERT INTO `sekolah` VALUES (1, '10809656', 'SD N 1 GADING KENCANA', 'Jln. Gajah Mati, Tiyuh Gading Kencana', 'Marga Kencana', 'NEGERI', 'Tulang Bawang Udik');
INSERT INTO `sekolah` VALUES (2, '10808607', 'SD N 1 GEDUNG RATU', 'Kampung Gedung Ratu', 'GEDUNG RATU', 'NEGERI', 'Tulang Bawang Udik');
INSERT INTO `sekolah` VALUES (3, '10801363', 'SD N 1 KAGUNGAN RATU', 'Kagungan Ratu', 'KAGUNGAN RATU', 'NEGERI', 'Tulang Bawang Udik');
INSERT INTO `sekolah` VALUES (4, '10809651', 'SD N 1 KAGUNGAN RATU AGUNG', 'Suku III Tiyuh Kagungan Ratu Agung', 'Kagungan Ratu', 'NEGERI', 'Tulang Bawang Udik');
INSERT INTO `sekolah` VALUES (5, '10808624', 'SD N 1 KARTA', 'Karta', 'Karta', 'NEGERI', 'Tulang Bawang Udik');
INSERT INTO `sekolah` VALUES (6, '10808625', 'SD N 1 KARTA RAHARJA', 'Karta Raharja', 'KARTA RAHARJA', 'NEGERI', 'Tulang Bawang Udik');
INSERT INTO `sekolah` VALUES (7, '10809603', 'SD N 1 KARTA RAYA', 'Jl.ratu Pengadilan', 'Karta Raharja', 'NEGERI', 'Tulang Bawang Udik');
INSERT INTO `sekolah` VALUES (8, '10808626', 'SD N 1 KARTA SARI', 'KARTA SARI', 'Karta Sari', 'NEGERI', 'Tulang Bawang Udik');
INSERT INTO `sekolah` VALUES (9, '10809681', 'SD N 1 KARTA TANJUNG SELAMAT', 'Karta', 'Karta', 'NEGERI', 'Tulang Bawang Udik');
INSERT INTO `sekolah` VALUES (10, '10808647', 'SD N 1 MARGA KENCANA', 'Marga Kencana', 'MARGA KENCANA', 'NEGERI', 'Tulang Bawang Udik');
INSERT INTO `sekolah` VALUES (11, '10808755', 'SD N 1 WAY SIDO', 'Way Sido', 'WAY SIDO', 'NEGERI', 'Tulang Bawang Udik');
INSERT INTO `sekolah` VALUES (12, '10809594', 'SD N 2 GEDUNG RATU', 'GEDUNG RATU', 'GEDUNG RATU', 'NEGERI', 'Tulang Bawang Udik');
INSERT INTO `sekolah` VALUES (13, '10809601', 'SD N 2 KAGUNGAN RATU', 'Kagungan Ratu', 'KAGUNGAN RATU', 'NEGERI', 'Tulang Bawang Udik');
INSERT INTO `sekolah` VALUES (14, '10809602', 'SD N 2 KARTA', 'Karta', 'KARTA', 'NEGERI', 'Tulang Bawang Udik');
INSERT INTO `sekolah` VALUES (15, '10809653', 'SD N 2 KARTA RAHARJA', 'Jl. Ratu Pengadilan No1', 'Karta Raharja', 'NEGERI', 'Tulang Bawang Udik');
INSERT INTO `sekolah` VALUES (16, '10808017', 'SD N 2 KARTASARI', 'Kartasari', 'KARTASARI', 'NEGERI', 'Tulang Bawang Udik');
INSERT INTO `sekolah` VALUES (17, '10810624', 'SD N 2 MARGA KENCANA', 'Marga Kencana', 'MARGA KENCANA', 'NEGERI', 'Tulang Bawang Udik');
INSERT INTO `sekolah` VALUES (18, '10809638', 'SD N 2 WAY SIDO', 'Jl. Raya Way Sido', 'WAY SIDO', 'NEGERI', 'Tulang Bawang Udik');
INSERT INTO `sekolah` VALUES (19, '10809680', 'SD N 3 KAGUNGAN RATU', 'Kagungan Ratu RT 03 RW 05', 'Kagungan Ratu', 'NEGERI', 'Tulang Bawang Udik');
INSERT INTO `sekolah` VALUES (20, '10809652', 'SD N 3 KARTA', 'Karta', 'KARTA', 'NEGERI', 'Tulang Bawang Udik');
INSERT INTO `sekolah` VALUES (21, '10808610', 'SD N GUNUNG KATUN MALAY', 'Gunung Katun Malay', 'GUNUNG KATUN MALAY', 'NEGERI', 'Tulang Bawang Udik');
INSERT INTO `sekolah` VALUES (22, '10810635', 'SD N GUNUNG KATUN TANJUNGAN', 'Gunung Katun Tanjungan', 'Gunung Katun Tanjungan', 'NEGERI', 'Tulang Bawang Udik');
INSERT INTO `sekolah` VALUES (23, '69975758', 'MI QUR`AN DAYAMURNI', 'KOMPLEK TELKOMSEL', 'Daya Asri', 'SWASTA', 'Tumijajar');
INSERT INTO `sekolah` VALUES (24, '69956124', 'MIS MIFTAHUL HUDA', 'Jalan Terusan Nunyai', 'Gunung Menanti', 'SWASTA', 'Tumijajar');
INSERT INTO `sekolah` VALUES (25, '69888432', 'SD ISLAM ASSUNIYAH', 'MURNI JAYA', 'MURNI JAYA', 'SWASTA', 'Tumijajar');
INSERT INTO `sekolah` VALUES (26, '69964970', 'SD ISLAM UNGGULAN HIDAYATUL MUBTADIIN', 'RT 03 RW 01 TIYUH DAYA MURNI', 'Daya Murni', 'SWASTA', 'Tumijajar');
INSERT INTO `sekolah` VALUES (27, '69945993', 'SD IT AL-BAYAN', 'JL. RATU PENGADILAN, DAYA MURNI, RT 003/ RW 006', 'Daya Murni', 'SWASTA', 'Tumijajar');
INSERT INTO `sekolah` VALUES (28, '10808592', 'SD N 1 DAYA ASRI', 'Jln. Jendral Sudirman Daya Asri', 'Daya Asri', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (29, '10808593', 'SD N 1 DAYA MURNI', 'Jl. Ratu Pengadilan Dayamurni Kec.Tumijajar', 'Daya Murni', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (30, '10808594', 'SD N 1 DAYA SAKTI', 'Daya Sakti', 'DAYA SAKTI', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (31, '10808643', 'SD N 1 MAKARTI', 'Makarti', 'MAKARTI', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (32, '10808651', 'SD N 1 Margo Mulyo', 'Margo Mulyo', 'Margo Mulyo', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (33, '10808649', 'SD N 1 MARGODADI', 'Jl. Margomulyo Rk.04 RT. 10 Margodadi', 'Margo Dadi', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (34, '10808671', 'SD N 1 MURNI JAYA', 'Jalan Jendral Sudirman, Desa Murni Jaya', 'Murni Jaya', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (35, '69838554', 'SD N 1 SUMBER REJO', 'Sumber Rejo', 'Sumber Rejo', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (36, '10808790', 'SD N 2 DAYA ASRI', 'Jl. Jenderal Sudirman', 'Daya Asri', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (37, '10808791', 'SD N 2 DAYA MURNI', 'Jl. Ratu Pengadilan No. 290', 'Daya Murni', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (38, '10809646', 'SD N 2 DAYA SAKTI', 'Tiyuh Daya Sakti', 'Daya Sakti', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (39, '10809608', 'SD N 2 MAKARTI', 'Makarti', 'MAKARTI', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (40, '10808031', 'SD N 2 MARGO MULYO', 'Margo Mulyo', 'Margo Mulyo', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (41, '10808030', 'SD N 2 MARGODADI', 'Margo Dadi', 'Margo Dadi', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (42, '10809612', 'SD N 2 MURNI JAYA', 'Jl.raya Lk 4 Murni Jaya', 'MURNI JAYA', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (43, '10809627', 'SD N 2 SUMBER REJO', 'Sumber Rejo', 'SUMBER REJO', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (44, '10809645', 'SD N 3 DAYA MURNI', 'Daya Murni Lk 4 Jl. Ratu Pengadilan', 'Daya Murni', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (45, '10809677', 'SD N 3 DAYA SAKTI', 'Daya Sakti', 'Daya Sakti', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (46, '10809655', 'SD N 3 MAKARTI', 'Jl.Banyuwangi', 'Makarti', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (47, '10811579', 'SD N 3 MARGO MULYO', 'Margo Mulyo', 'Margo Mulyo', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (48, '10808117', 'SD N 3 MARGODADI', 'Margo Dadi', 'Margo Dadi', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (49, '10809660', 'SD N 3 MURNI JAYA', 'Jln Jendral Sudirman', 'Murni Jaya', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (50, '10809676', 'SD N 4 DAYA MURNI', 'Daya Murni', 'DAYA MURNI', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (51, '10808152', 'SD N 4 MARGO DADI', 'Margo Dadi', 'MARGO DADI', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (52, '10810724', 'SD N 5 DAYA MURNI', 'Daya Murni', 'DAYA MURNI', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (53, '10808179', 'SD N GUNUNG MENANTI', 'Jl. Way Terusan', 'GUNUNG MENANTI', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (54, '10808792', 'SD N GUNUNG TIMBUL', 'Jln. Raden Saleh, TIYUH GUNUNG TIMBUL', 'Gunung Timbul', 'NEGERI', 'Tumijajar');
INSERT INTO `sekolah` VALUES (55, '69990588', 'SDIT FAVORIT NUR ALIF', 'Daya Murni', 'Daya Murni', 'SWASTA', 'Tumijajar');
INSERT INTO `sekolah` VALUES (56, '60705956', 'MIN 1 TULANGBAWANG BARAT', 'Jalan Dua Brebes RT 02 RW 07', 'Panaragan Jaya', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (57, '69726284', 'MIS AL FATAH PANARAGAN', 'Blok Muslimin', 'Panaragan', 'SWASTA', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (58, '69819484', 'MIS DARUL HASAN', 'Jl. Dua Panaragan Jaya RW 01, RT 02', 'Panaragan Jaya', 'SWASTA', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (59, '69854314', 'MIS DARUL ULUM', 'Jalan Gajah Mada No. 216', 'Panaragan Jaya', 'SWASTA', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (60, '60705957', 'MIS MATHOLIUL FALAH', 'Jalan Perintis No. 01', 'Candra Kencana', 'SWASTA', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (61, '60705958', 'MIS NURUL IMAN', 'Jalan Raya Pulung Kencana', 'Pulung Kencana', 'SWASTA', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (62, '69726139', 'MIS NURUL MUTTAQIN', 'Jalan Brawijaya No. 740 Suku IV/15', 'Penumangan Baru', 'SWASTA', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (63, '69831530', 'SD ISLAM TERPADU MADANI', 'Candra Mukti Rt 03, Rw 01', 'Candra Mukti', 'SWASTA', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (64, '10808224', 'SD MUHAMMADIYAH MULYA ASRI', 'Mulya Asri', 'Mulya Asri', 'SWASTA', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (65, '10809644', 'SD N 1 CANDRA JAYA', 'Jln. Siliwangi Rt. 14 Rw. 04, Tiyuh Candra Jaya', 'Candra Jaya', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (66, '10808589', 'SD N 1 CANDRA KENCANA', 'Candra Kencana', 'Candra Kencana', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (67, '10808786', 'SD N 1 CANDRA MUKTI', 'RK 3 RT 15 Tiyuh Candra Mukti', 'Candra Mukti', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (68, '10808153', 'SD N 1 MARGA ASRI', 'Jln. Peternakan, Tiyuh Marga Asri', 'Mulya Asri', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (69, '10808169', 'SD N 1 MEKAR ASRI', 'Jln. Merdeka Timur No. 109, Tiyuh Mekar Asri', 'Mulya Asri', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (70, '10808660', 'SD N 1 MENGGALA MAS', 'Jl.SD Impres Menggala Mas', 'Menggala Mas', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (71, '10808668', 'SD N 1 MULYA ASRI', 'Jalan Merdeka Barat Gg. Kresna No.193', 'Mulya Asri', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (72, '10809611', 'SD N 1 MULYA JAYA', 'TIYUH MULYA JAYA', 'MULYA JAYA', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (73, '10808670', 'SD N 1 MULYA KENCANA', 'Jl. Diponegoro Desa Mulya Kencana', 'Mulya Kencana', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (74, '10808676', 'SD N 1 PANARAGAN', 'Panaragan', 'PANARAGAN', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (75, '10808677', 'SD N 1 PANARAGAN JAYA', 'JL.SILIWANGI RK 03 RT 03', 'PANARAGAN JAYA', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (76, '10809684', 'SD N 1 PANARAGAN JAYA INDAH', 'Jln. PAHLAWAN RT 5 RW 2', 'PANARAGAN JAYA INDAH', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (77, '10808124', 'SD N 1 PANARAGAN JAYA UTAMA', 'Jln. Arjuna 07 RT 03 RW 3', 'PANARAGAN JAYA UTAMA', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (78, '10808693', 'SD N 1 PENUMANGAN', 'Penumangan', 'PENUMANGAN', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (79, '10808694', 'SD N 1 PENUMANGAN BARU', 'Penumangan Baru', 'PENUMANGAN BARU', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (80, '10808695', 'SD N 1 PULUNG KENCANA', 'Jln. Raya Pulung Kencana', 'PULUNG KENCANA', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (81, '10808716', 'SD N 1 SUKA MAJU', 'Jl. Raya Sukamaju', 'Panaragan', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (82, '10808739', 'SD N 1 TIRTA KENCANA', 'Tirta Kencana', 'Tirta Kencana', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (83, '10809633', 'SD N 1 TIRTA MAKMUR', 'Tiyuh Tirta Makmur', 'Tirta Makmur', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (84, '10808041', 'SD N 1 TUNAS ASRI', 'Jl. Sendang Gayur 96, Suku 3 Tiyuh Tunas Asri', 'Tunas Asri', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (85, '10808761', 'SD N 1 WONOKERTO', 'Wonokerto', 'Wonokerto', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (86, '10809689', 'SD N 2 CANDRA JAYA', 'Jln. NANGKA NO 2, Tiyuh Candra Jaya', 'Candra Jaya', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (87, '10809675', 'SD N 2 CANDRA MUKTI', 'Jln. Jendral Sudirman, Tiyuh Candra Mukti', 'Candra Mukti', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (88, '10809683', 'SD N 2 MULYA JAYA', 'Mulya Jaya', 'MULYA JAYA', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (89, '10809659', 'SD N 2 MULYA KENCANA', 'Jl. Diponegoro Tiyuh Mulya Kencana', 'Mulya Kencana', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (90, '10808119', 'SD N 2 MULYO ASRI', 'Mulyo Asri', 'Mulya Asri', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (91, '10809614', 'SD N 2 PANARAGAN', 'Panaragan', 'Panaragan', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (92, '10809615', 'SD N 2 PANARAGAN JAYA', 'Panaragan Jaya', 'PANARAGAN JAYA', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (93, '10808056', 'SD N 2 PENUMANGAN', 'Penumangan', 'PENUMANGAN', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (94, '10809618', 'SD N 2 PENUMANGAN BARU', 'Jl. Sriwijaya Penumangan Baru', 'Penumangan Baru', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (95, '10809619', 'SD N 2 PULUNG KENCANA', 'Pulung Kencana', 'PULUNG KENCANA', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (96, '10809670', 'SD N 2 TIRTA KENCANA', 'Tiyuh Tirta Kencana', 'Tirta Kencana', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (97, '10809693', 'SD N 2 TIRTA MAKMUR', 'Tiyuh Tirta Makmur', 'Tirta Makmur', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (98, '10808164', 'SD N 2 TUNAS ASRI', 'Jl. Raya Tiyuh Tunas Asri', 'Tunas Asri', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (99, '10809691', 'SD N 3 MULYA KENCANA', 'Tiyuh Mulya Kencana', 'Mulya Kencana', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (100, '10809692', 'SD N 3 PANARAGAN JAYA', 'Tiyuh Panaragan Jaya', 'Panaragan Jaya', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (101, '10808126', 'SD N 3 PENUMANGAN BARU', 'Jln Brawijaya', 'Penumangan Baru', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (102, '10809662', 'SD N 3 PULUNG KENCANA', 'Pulung Kencana', 'PULUNG KENCANA', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (103, '10809687', 'SD N 3 TIRTA KENCANA', 'Tiyuh Tirta Kencana', 'Tirta Kencana', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (104, '10809695', 'SD N 3 TUNAS ASRI', 'Jln. Sindang Gayur, Tiyuh Tunas Asri', 'Tunas Asri', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (105, '10809685', 'SD N 4 PULUNG KENCANA', 'Pulung Kencana', 'Pulung Kencana', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (106, '10809694', 'SD N 6 MULYA KENCANA', 'Mulya Kencana', 'Mulya Kencana', 'NEGERI', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (107, '10808210', 'SD S ISLAM AL FURQON', 'Jl.pahlawan', 'Panaragan Jaya', 'SWASTA', 'Tulang Bawang Tengah');
INSERT INTO `sekolah` VALUES (108, '69854313', 'MIS MAKARIMAL AKHLAK', 'Jalan Raya Blok J RT 013/04', 'Kibang Yekti Jaya', 'SWASTA', 'Lambu Kibang');
INSERT INTO `sekolah` VALUES (109, '10809924', 'SD N 1 GILANG TUNGGAL MAKARTA', 'Jl. Plamboyan TIYUH GILANG TUNGGAL MAKARTA', 'GILANG TUNGGAL MAKARTA', 'NEGERI', 'Lambu Kibang');
INSERT INTO `sekolah` VALUES (110, '10808612', 'SD N 1 GUNUNG SARI', 'RT 007 RW 002', 'Gunung Sari', 'NEGERI', 'Lambu Kibang');
INSERT INTO `sekolah` VALUES (111, '10808636', 'SD N 1 KIBANG BUDI JAYA', 'Jl. Lintas Unit 6', 'Kibang Budi Jaya', 'NEGERI', 'Lambu Kibang');
INSERT INTO `sekolah` VALUES (112, '10808638', 'SD N 1 KIBANG MULYA JAYA', 'Kibang Mulya Jaya', 'Kibang Mulya Jaya', 'NEGERI', 'Lambu Kibang');
INSERT INTO `sekolah` VALUES (113, '10808637', 'SD N 1 KIBANG TRI JAYA', 'Jl.Ethanol No.100', 'Kibang Tri Jaya', 'NEGERI', 'Lambu Kibang');
INSERT INTO `sekolah` VALUES (114, '10809606', 'SD N 1 KIBANG YEKTI JAYA', 'Kibang Yekti Jaya', 'Kibang Yekti Jaya', 'NEGERI', 'Lambu Kibang');
INSERT INTO `sekolah` VALUES (115, '10808642', 'SD N 1 LESUNG BHAKTI JAYA', 'Jln Taruna Rt6 Rw 2', 'LESUNG BAKTI JAYA', 'NEGERI', 'Lambu Kibang');
INSERT INTO `sekolah` VALUES (116, '10808657', 'SD N 1 MEKAR SARI', 'Jl. Raya Mekar Sari Jaya', 'Mekar Sari Jaya', 'NEGERI', 'Lambu Kibang');
INSERT INTO `sekolah` VALUES (117, '10808675', 'SD N 1 PAGAR JAYA', 'Pagar Jaya', 'PAGAR JAYA', 'NEGERI', 'Lambu Kibang');
INSERT INTO `sekolah` VALUES (118, '10808725', 'SD N 1 SUMBER REJO', 'Sumber Rejo', 'SUMBER REJO', 'NEGERI', 'Lambu Kibang');
INSERT INTO `sekolah` VALUES (119, '10809605', 'SD N 2 KIBANG BUDI JAYA', 'Lintas Unit 6', 'Kibang Budi Jaya', 'NEGERI', 'Lambu Kibang');
INSERT INTO `sekolah` VALUES (120, '10808113', 'SD N 2 KIBANG YEKTI JAYA', 'KIBANG YEKTI JAYA', 'Kibang Yekti Jaya', 'NEGERI', 'Lambu Kibang');
INSERT INTO `sekolah` VALUES (121, '10808112', 'SD N 3 KIBANG BUDI JAYA', 'Kibang Budi Jaya', 'KIBANG BUDI JAYA', 'NEGERI', 'Lambu Kibang');
INSERT INTO `sekolah` VALUES (122, '10809682', 'SD N 4 KIBANG BUDI JAYA', 'Kibang Budi Jaya', 'Kibang Budi Jaya', 'NEGERI', 'Lambu Kibang');
INSERT INTO `sekolah` VALUES (123, '69754453', 'MIS AMANAH I', 'Jalan Putra Dewa', 'Bujung Sari Marga', 'SWASTA', 'Pagar Dewa');
INSERT INTO `sekolah` VALUES (124, '10808558', 'SD N 1 BAKEM SUKA MULYA', 'Bakem Suka Mulya Kec. Pagar Dewa Kab.Tulang Bawang Barat', 'Pagar Dewa Suka Mulya', 'NEGERI', 'Pagar Dewa');
INSERT INTO `sekolah` VALUES (125, '69892758', 'SD N 1 CAHYOU RANDU', 'JL. PENDIDIKAN NO 156', 'Cahyou Randu', 'NEGERI', 'Pagar Dewa');
INSERT INTO `sekolah` VALUES (126, '10808674', 'SD N 1 PAGAR DEWA', 'Pagar Dewa', 'PAGAR DEWA', 'NEGERI', 'Pagar Dewa');
INSERT INTO `sekolah` VALUES (127, '10809613', 'SD N 2 PAGAR DEWA', 'Pagar Dewa', 'PAGAR DEWA', 'NEGERI', 'Pagar Dewa');
INSERT INTO `sekolah` VALUES (128, '10812422', 'SDS Bujung Dewa', 'Bujung Dewa', 'Bujung Dewa', 'SWASTA', 'Pagar Dewa');
INSERT INTO `sekolah` VALUES (129, '10804273', 'SD N 1 AGUNG JAYA', 'Jalan Poros Tengah Agung Jaya', 'Agung Jaya', 'NEGERI', 'Way Kenanga');
INSERT INTO `sekolah` VALUES (130, '10808771', 'SD N 1 BALAM ASRI', 'Jalan Bumi Perkemahan', 'BALAM ASRI', 'NEGERI', 'Way Kenanga');
INSERT INTO `sekolah` VALUES (131, '10808562', 'SD N 1 BALAM JAYA', 'Jl. Poros', 'Balam Jaya', 'NEGERI', 'Way Kenanga');
INSERT INTO `sekolah` VALUES (132, '10808620', 'SD N 1 INDRALOKA I', 'Jalan Poros Indraloka I', 'Indraloka I', 'NEGERI', 'Way Kenanga');
INSERT INTO `sekolah` VALUES (133, '10808621', 'SD N 1 INDRALOKA II', 'Jl. Sulawesi', 'Indraloka II', 'NEGERI', 'Way Kenanga');
INSERT INTO `sekolah` VALUES (134, '10808045', 'SD N 1 INDRALOKA JAYA', 'Jl. Sulawesi', 'Indraloka Jaya', 'NEGERI', 'Way Kenanga');
INSERT INTO `sekolah` VALUES (135, '10810701', 'SD N 1 INDRALOKA MUKTI', 'Jln. Soekarno Hatta Gg. Jeruk', 'Indraloka Mukti', 'NEGERI', 'Way Kenanga');
INSERT INTO `sekolah` VALUES (136, '10808661', 'SD N 1 MERCU BUANA', 'Jln. Poros Utama Kecamatan Way Kenanga', 'Mercu Buana', 'NEGERI', 'Way Kenanga');
INSERT INTO `sekolah` VALUES (137, '10808673', 'SD N 1 PAGAR BUANA', 'Jl. Poros', 'Pagar Buana', 'NEGERI', 'Way Kenanga');
INSERT INTO `sekolah` VALUES (138, '10809643', 'SD N 1 SIDO AGUNG', 'Jalan Poros Sidorejo', 'Agung Jaya', 'NEGERI', 'Way Kenanga');
INSERT INTO `sekolah` VALUES (139, '10808768', 'SD N 2 AGUNG JAYA', 'Jalan Poros Agung Jaya', 'Agung Jaya', 'NEGERI', 'Way Kenanga');
INSERT INTO `sekolah` VALUES (140, '69787517', 'SD N 2 INDRALOKA II', 'Jln. Simpang Asahan', 'Indraloka Ii', 'NEGERI', 'Way Kenanga');
INSERT INTO `sekolah` VALUES (141, '10809679', 'SD N 2 INDRALOKA MUKTI', 'Jl. SImpang Sulawesi', 'Indraloka Mukti', 'NEGERI', 'Way Kenanga');
INSERT INTO `sekolah` VALUES (142, '60705950', 'MIS AL HIDAYAH', 'Jalan Beringin No. 02', 'Setia Bumi', 'SWASTA', 'Gunung Terang');
INSERT INTO `sekolah` VALUES (143, '10808609', 'SD N 1 GUNUNG AGUNG', 'jln Ethanol Gunung Agung', 'Gunung Agung', 'NEGERI', 'Gunung Terang');
INSERT INTO `sekolah` VALUES (144, '10808614', 'SD N 1 GUNUNG TERANG', 'Gunung Terang', 'Gunung Terang', 'NEGERI', 'Gunung Terang');
INSERT INTO `sekolah` VALUES (145, '10808743', 'SD N 1 MULYO JADI', 'Jln. POROS 2 TIYUH MULYO JADI', 'Mulyo Jadi', 'NEGERI', 'Gunung Terang');
INSERT INTO `sekolah` VALUES (146, '10808701', 'SD N 1 Setia Bumi', 'Jln Poros Setia Bumi', 'Setia Bumi', 'NEGERI', 'Gunung Terang');
INSERT INTO `sekolah` VALUES (147, '10808005', 'SD N 1 TERANG BUMI AGUNG', 'Jln. POSOS 2 TIYUH TERANG BUMI AGUNG', 'Terang Bumi Agung', 'NEGERI', 'Gunung Terang');
INSERT INTO `sekolah` VALUES (148, '10809648', 'SD N 1 TERANG MAKMUR', 'Jln. POROS TIYUH TERANG MAKMUR', 'Terang Makmur', 'NEGERI', 'Gunung Terang');
INSERT INTO `sekolah` VALUES (149, '10808147', 'SD N 1 TERANG MULYA', 'TERANG MULYA', 'TERANG MULYA', 'NEGERI', 'Gunung Terang');
INSERT INTO `sekolah` VALUES (150, '10808084', 'SD N 1 TOTO MULYO', 'Toto Mulyo', 'Toto Mulyo', 'NEGERI', 'Gunung Terang');
INSERT INTO `sekolah` VALUES (151, '10809597', 'SD N 2 GUNUNG TERANG', 'Gunung Terang', 'GUNUNG TERANG', 'NEGERI', 'Gunung Terang');
INSERT INTO `sekolah` VALUES (152, '10808062', 'SD N 2 SETIA BUMI', 'Setia Bumi', 'SETIA BUMI', 'NEGERI', 'Gunung Terang');
INSERT INTO `sekolah` VALUES (153, '10809671', 'SD N 2 TOTO MULYO', 'Jln. POROS 1 TIYUH TOTO MULYO', 'Toto Mulyo', 'NEGERI', 'Gunung Terang');
INSERT INTO `sekolah` VALUES (154, '10809664', 'SD N 3 SETIA BUMI', 'JLN Setia Bumi', 'SETIA BUMI', 'NEGERI', 'Gunung Terang');
INSERT INTO `sekolah` VALUES (155, '10808738', 'SD S TERANG AGUNG', 'Terang Agung', 'TERANG AGUNG', 'SWASTA', 'Gunung Terang');
INSERT INTO `sekolah` VALUES (156, '10808564', 'SD N 1 BANGUN JAYA', 'Bangun Jaya', 'BANGUN JAYA', 'NEGERI', 'Gunung Agung');
INSERT INTO `sekolah` VALUES (157, '10809636', 'SD N 1 DWI KORA JAYA', 'Jln. DWI KORA JAYA', 'Dwi Kora Jaya', 'NEGERI', 'Gunung Agung');
INSERT INTO `sekolah` VALUES (158, '10810376', 'SD N 1 Jaya Murni', 'Jaya Murni', 'Jaya Murni', 'NEGERI', 'Gunung Agung');
INSERT INTO `sekolah` VALUES (159, '69863229', 'SD N 1 MARGA JAYA', 'Marga Jaya', 'Marga Jaya', 'NEGERI', 'Gunung Agung');
INSERT INTO `sekolah` VALUES (160, '10808656', 'SD N 1 MEKAR JAYA', 'JALAN POROS', 'Mekar Jaya', 'NEGERI', 'Gunung Agung');
INSERT INTO `sekolah` VALUES (161, '10808669', 'SD N 1 MULYA JAYA', 'Kp. Mulya Jaya', 'Mulya Jaya', 'NEGERI', 'Gunung Agung');
INSERT INTO `sekolah` VALUES (162, '10809658', 'SD N 1 MULYA SARI', 'TIYUH MULYA SARI', 'MULYA SARI', 'NEGERI', 'Gunung Agung');
INSERT INTO `sekolah` VALUES (163, '10808715', 'SD N 1 SUKA JAYA', 'Jln Poros Suka Jaya Indah 01', 'SUKA JAYA', 'NEGERI', 'Gunung Agung');
INSERT INTO `sekolah` VALUES (164, '10808723', 'SD N 1 SUMBER JAYA', 'Sumber Jaya', 'SUMBER JAYA', 'NEGERI', 'Gunung Agung');
INSERT INTO `sekolah` VALUES (165, '10809625', 'SD N 1 SUMBER REJEKI', 'Jln. POROS TIYUH SUMBER REJEKI', 'SUMBER REJEKI', 'NEGERI', 'Gunung Agung');
INSERT INTO `sekolah` VALUES (166, '10808749', 'SD N 1 TRI TUNGGAL JAYA', 'Jalan. Sri Wijaya', 'Tri Tunggal Jaya', 'NEGERI', 'Gunung Agung');
INSERT INTO `sekolah` VALUES (167, '10808750', 'SD N 1 TUNAS JAYA', 'Tunas Jaya', 'TUNAS JAYA', 'NEGERI', 'Gunung Agung');
INSERT INTO `sekolah` VALUES (168, '10808202', 'SD N 1 WONOREJO', 'Jln. Poros Kampung Wonorejo', 'WONOREJO', 'NEGERI', 'Gunung Agung');
INSERT INTO `sekolah` VALUES (169, '10808772', 'SD N 2 BANGUN JAYA', 'Jl. Brawijaya', 'BANGUN JAYA', 'NEGERI', 'Gunung Agung');
INSERT INTO `sekolah` VALUES (170, '10804016', 'SD N 2 Marga Jaya', 'Marga Jaya', 'MARGA JAYA', 'NEGERI', 'Gunung Agung');
INSERT INTO `sekolah` VALUES (171, '10808035', 'SD N 2 MEKAR JAYA', 'MEKAR JAYA', 'MEKAR JAYA', 'NEGERI', 'Gunung Agung');
INSERT INTO `sekolah` VALUES (172, '10809610', 'SD N 2 MULYA JAYA', 'Mulya Jaya', 'Mulya Jaya', 'NEGERI', 'Gunung Agung');
INSERT INTO `sekolah` VALUES (173, '10809668', 'SD N 2 SUKA JAYA', 'Jalan Kumboyono', 'Suka Jaya', 'NEGERI', 'Gunung Agung');
INSERT INTO `sekolah` VALUES (174, '10808072', 'SD N 2 SUMBER JAYA', 'Sumber Jaya', 'SUMBER JAYA', 'NEGERI', 'Gunung Agung');
INSERT INTO `sekolah` VALUES (175, '10809672', 'SD N 2 TUNAS JAYA', 'Tiyuh Tunas Jaya', 'Tunas Jaya', 'NEGERI', 'Gunung Agung');
INSERT INTO `sekolah` VALUES (176, '10808212', 'SD S KASIH ABADI', 'Jl Poros Gang 3', 'Mulya Jaya', 'SWASTA', 'Gunung Agung');
INSERT INTO `sekolah` VALUES (177, '60705951', 'MIS BUSTANUL ULUM', 'Jalan Poros Inhutani Tiyuh Sakti Jaya', 'Sakti Jaya', 'SWASTA', 'Batu Putih');
INSERT INTO `sekolah` VALUES (178, '69726140', 'MIS DARUL ULUM', 'Jalan Poros 2', 'Marga Sari', 'SWASTA', 'Batu Putih');
INSERT INTO `sekolah` VALUES (179, '60705952', 'MIS HIDAYATUL MUBTADIIN', 'Jalan Raden Intan RT 05/02', 'Margo Mulyo', 'SWASTA', 'Batu Putih');
INSERT INTO `sekolah` VALUES (180, '69854315', 'MIS SABILIL MUHTADIN', 'Jalan Poros 02', 'Toto Makmur', 'SWASTA', 'Batu Putih');
INSERT INTO `sekolah` VALUES (181, '10808648', 'SD N 1 MARGA SARI', 'Jln. Marga Sari', 'Marga Sari', 'NEGERI', 'Batu Putih');
INSERT INTO `sekolah` VALUES (182, '10808032', 'SD N 1 MARGO DADI', 'Margo Dadi', 'Margo Dadi', 'NEGERI', 'Batu Putih');
INSERT INTO `sekolah` VALUES (183, '69775301', 'SD N 1 MARGO MULYO', 'Margo Mulyo Kec.batu putih', 'Margo Mulyo', 'NEGERI', 'Batu Putih');
INSERT INTO `sekolah` VALUES (184, '10808033', 'SD N 1 MULYO SARI', 'Mulyo Sari', 'Mulyo Sari', 'NEGERI', 'Batu Putih');
INSERT INTO `sekolah` VALUES (185, '10808680', 'SD N 1 PANCA MARGA', 'Panca Marga', 'Panca Marga', 'NEGERI', 'Batu Putih');
INSERT INTO `sekolah` VALUES (186, '10808700', 'SD N 1 SAKTI JAYA', 'Sakti Jaya', 'Sakti Jaya', 'NEGERI', 'Batu Putih');
INSERT INTO `sekolah` VALUES (187, '10809616', 'SD N 1 SIDO MAKMUR', 'TIYUH SIDO MAKMUR', 'Sido Makmur', 'NEGERI', 'Batu Putih');
INSERT INTO `sekolah` VALUES (188, '10808744', 'SD N 1 TOTO KATON', 'Toto Katon', 'Toto Katon', 'NEGERI', 'Batu Putih');
INSERT INTO `sekolah` VALUES (189, '10808136', 'SD N 1 TOTO MAKMUR', 'Jln. POROS 1 TIYUH TOTO MAKMUR', 'Toto Makmur', 'NEGERI', 'Batu Putih');
INSERT INTO `sekolah` VALUES (190, '10809635', 'SD N 1 TOTO WONODADI', 'Jln. POROS TIYUH TOTO WONODADI', 'Toto Wonodadi', 'NEGERI', 'Batu Putih');

-- ----------------------------
-- Table structure for setting_pembayaran
-- ----------------------------
DROP TABLE IF EXISTS `setting_pembayaran`;
CREATE TABLE `setting_pembayaran`  (
  `id_setting_pembayaran` int NOT NULL AUTO_INCREMENT,
  `id_jenis_pembayaran` int NULL DEFAULT NULL,
  `nominal` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_setting_pembayaran`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of setting_pembayaran
-- ----------------------------

-- ----------------------------
-- Table structure for siswa
-- ----------------------------
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa`  (
  `id_siswa` int NOT NULL AUTO_INCREMENT,
  `id_tahun` int NULL DEFAULT NULL,
  `id_jalur` int NULL DEFAULT NULL,
  `nama_peserta` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nisn` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nik` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempat_lahir` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal_lahir` date NULL DEFAULT NULL,
  `no_registrasi_akta_lahir` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `agama` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kewarganegaraan` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `berkebutuhan_khusus` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `kode_pos` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempat_tinggal` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `moda_transportasi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_kks` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `anak_ke` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `penerima_kps_pkh` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_kps_pkh` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `penerima_kip` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_kip` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_tertera_di_kip` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `terima_fisik_kartu_kip` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_ayah` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nik_ayah` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tahun_lahir_ayah` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pendidikan_ayah` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pekerjaan_ayah` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `penghasilan_bulanan_ayah` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `berkebutuhan_khusus_ayah` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_ibu` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nik_ibu` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tahun_lahir_ibu` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pendidikan_ibu` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pekerjaan_ibu` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `penghasilan_bulanan_ibu` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `berkebutuhan_khusus_ibu` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_wali` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nik_wali` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tahun_lahir_wali` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pendidikan_wali` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pekerjaan_wali` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `penghasilan_bulanan_wali` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_telepon_rumah` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nomor_hp` varchar(12) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tinggi_badan` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `berat_badan` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_jarak` int NULL DEFAULT NULL,
  `jumlah_saudara_kandung` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `asal_sekolah` varchar(225) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_un` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_seri_ijazah` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_seri_skhu` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nilai_rapor` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nilai_usbn` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nilai_unbk_unkp` varchar(6) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_siswa`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of siswa
-- ----------------------------
INSERT INTO `siswa` VALUES (1, 6, NULL, 'apip', 'L', '127763', '360388484848', 'tangerang', '2022-11-20', NULL, 'Islam', 'Indonesia (WNI)', NULL, 'kp.nagreg', '15730', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL);
INSERT INTO `siswa` VALUES (2, 6, NULL, 'apip12', 'L', '20139844', '36038848484833', 'tangerang', '2022-11-02', NULL, 'Islam', 'Indonesia (WNI)', NULL, 'kp.nagreg', '15730', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL);
INSERT INTO `siswa` VALUES (3, 6, NULL, 'apip1212', 'L', '123456', '360388484848555', 'tangerang', '2022-11-04', NULL, 'Islam', 'Indonesia (WNI)', NULL, 'kp.nagreg', '15730', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL);
INSERT INTO `siswa` VALUES (4, NULL, NULL, 'arif munawar', NULL, NULL, '36038848484833', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL);
INSERT INTO `siswa` VALUES (5, 6, NULL, 'RIDWAN KAMIL', NULL, NULL, '213412', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL);
INSERT INTO `siswa` VALUES (6, 6, NULL, 'SUDIRMAN SE', NULL, NULL, '360388484848501', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Y', NULL);

-- ----------------------------
-- Table structure for tahunajaran
-- ----------------------------
DROP TABLE IF EXISTS `tahunajaran`;
CREATE TABLE `tahunajaran`  (
  `id_tahun` int NOT NULL AUTO_INCREMENT,
  `tahun` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kuota` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tahun_ajaran` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status_tahun` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_tahun`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tahunajaran
-- ----------------------------
INSERT INTO `tahunajaran` VALUES (5, '2021', '288', '2021/2022', 'Tidak Aktif');
INSERT INTO `tahunajaran` VALUES (6, '2022', '500', '2022/2023', 'Aktif');
INSERT INTO `tahunajaran` VALUES (7, '2024', '500', '2024/2025', 'Tidak Aktif');

-- ----------------------------
-- Table structure for tbl_agama
-- ----------------------------
DROP TABLE IF EXISTS `tbl_agama`;
CREATE TABLE `tbl_agama`  (
  `id_agama` int NOT NULL AUTO_INCREMENT,
  `agama` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_agama`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_agama
-- ----------------------------
INSERT INTO `tbl_agama` VALUES (1, 'Islam\r\n');
INSERT INTO `tbl_agama` VALUES (2, 'Kristen Protestan');
INSERT INTO `tbl_agama` VALUES (3, 'Katholik');
INSERT INTO `tbl_agama` VALUES (4, 'Hindu');
INSERT INTO `tbl_agama` VALUES (5, 'Buddha');
INSERT INTO `tbl_agama` VALUES (6, 'Kong Hu Chu');
INSERT INTO `tbl_agama` VALUES (7, 'Lainnya');

-- ----------------------------
-- Table structure for tbl_kelas
-- ----------------------------
DROP TABLE IF EXISTS `tbl_kelas`;
CREATE TABLE `tbl_kelas`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_tahunajaran` int NOT NULL,
  `tingkat` int NULL DEFAULT NULL,
  `kelas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_kelas
-- ----------------------------
INSERT INTO `tbl_kelas` VALUES (1, 0, 10, 'X AP B', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for tbl_kolektif
-- ----------------------------
DROP TABLE IF EXISTS `tbl_kolektif`;
CREATE TABLE `tbl_kolektif`  (
  `id_kolektif` int NOT NULL AUTO_INCREMENT,
  `id_kolektor` int NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  `nama_kolektif` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_peserta` int NULL DEFAULT NULL,
  `biaya_pendaftaran` int NULL DEFAULT NULL,
  `cashback` int NULL DEFAULT NULL,
  `id_user` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_kolektif`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_kolektif
-- ----------------------------
INSERT INTO `tbl_kolektif` VALUES (1, 2, '2022-12-05', 'RISKO AMANDA', 'TKJ guru dia', 2, 100000, 50000, 1);
INSERT INTO `tbl_kolektif` VALUES (2, 1, '2022-12-05', '', '', 1, 100000, 0, 1);
INSERT INTO `tbl_kolektif` VALUES (3, 2, '2022-12-06', 'rojak', 'ada deh', 8, 100000, 50000, 1);

-- ----------------------------
-- Table structure for tbl_kolektor
-- ----------------------------
DROP TABLE IF EXISTS `tbl_kolektor`;
CREATE TABLE `tbl_kolektor`  (
  `id_kolektor` int NOT NULL AUTO_INCREMENT,
  `jenis_kolektor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nominal` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_kolektor`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_kolektor
-- ----------------------------
INSERT INTO `tbl_kolektor` VALUES (1, 'Tidak Ada', 0);
INSERT INTO `tbl_kolektor` VALUES (2, 'Guru/Pendidik', 50000);
INSERT INTO `tbl_kolektor` VALUES (3, 'Peserta Didik', 30000);

-- ----------------------------
-- Table structure for tbl_pekerjaan
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pekerjaan`;
CREATE TABLE `tbl_pekerjaan`  (
  `id_pekerjaan` int NOT NULL AUTO_INCREMENT,
  `nama_pekerjaan` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_pekerjaan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_pekerjaan
-- ----------------------------
INSERT INTO `tbl_pekerjaan` VALUES (1, 'Tidak Bekerja\r\n');
INSERT INTO `tbl_pekerjaan` VALUES (2, 'Nelayan\r\n');
INSERT INTO `tbl_pekerjaan` VALUES (3, 'Petani\r\n');
INSERT INTO `tbl_pekerjaan` VALUES (4, 'Peternak\r\n');
INSERT INTO `tbl_pekerjaan` VALUES (5, 'PNS/TNI/Polri\r\n');
INSERT INTO `tbl_pekerjaan` VALUES (6, 'Karyawan Swasta\r\n');
INSERT INTO `tbl_pekerjaan` VALUES (7, 'Pedagang Kecil\r\n');
INSERT INTO `tbl_pekerjaan` VALUES (8, 'Pedagang Besar\r\n');
INSERT INTO `tbl_pekerjaan` VALUES (9, 'Wiraswasta\r\n');
INSERT INTO `tbl_pekerjaan` VALUES (10, 'Wirausaha\r\n');
INSERT INTO `tbl_pekerjaan` VALUES (11, 'Buruh\r\n');
INSERT INTO `tbl_pekerjaan` VALUES (12, 'Pensiunan\r\n');
INSERT INTO `tbl_pekerjaan` VALUES (13, 'Ibu Rumah Tangga\r\n');

-- ----------------------------
-- Table structure for tbl_pendidikan
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pendidikan`;
CREATE TABLE `tbl_pendidikan`  (
  `id_pendidikan` int NOT NULL AUTO_INCREMENT,
  `nama_pendidikan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_pendidikan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_pendidikan
-- ----------------------------
INSERT INTO `tbl_pendidikan` VALUES (1, 'Tidak sekolah\r\n');
INSERT INTO `tbl_pendidikan` VALUES (2, 'Putus Sekolah\r\n');
INSERT INTO `tbl_pendidikan` VALUES (3, 'SD/MI/sederajat\r\n');
INSERT INTO `tbl_pendidikan` VALUES (4, 'SMP/MTs/sederajat\r\n');
INSERT INTO `tbl_pendidikan` VALUES (5, 'SMA/SMK/MA/sederajat\r\n');
INSERT INTO `tbl_pendidikan` VALUES (6, 'D1\r\n');
INSERT INTO `tbl_pendidikan` VALUES (7, 'D2\r\n');
INSERT INTO `tbl_pendidikan` VALUES (8, 'D3\r\n');
INSERT INTO `tbl_pendidikan` VALUES (9, 'D4/S1\r\n');
INSERT INTO `tbl_pendidikan` VALUES (10, 'S2\r\n');
INSERT INTO `tbl_pendidikan` VALUES (11, 'S3\r\n');

-- ----------------------------
-- Table structure for tbl_penghasilan
-- ----------------------------
DROP TABLE IF EXISTS `tbl_penghasilan`;
CREATE TABLE `tbl_penghasilan`  (
  `id_penghasilan` int NOT NULL AUTO_INCREMENT,
  `penghasilan` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_penghasilan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_penghasilan
-- ----------------------------
INSERT INTO `tbl_penghasilan` VALUES (1, 'Kurang dari 500.000\r\n');
INSERT INTO `tbl_penghasilan` VALUES (2, '500.000 - 999.9999\r\n');
INSERT INTO `tbl_penghasilan` VALUES (3, '1 juta - 1.999.999\r\n');
INSERT INTO `tbl_penghasilan` VALUES (4, '2 juta - 4.999.999\r\n');
INSERT INTO `tbl_penghasilan` VALUES (5, '5 juta - 20 juta\r\n');
INSERT INTO `tbl_penghasilan` VALUES (6, 'Lebih dari 20 juta\r\n');
INSERT INTO `tbl_penghasilan` VALUES (7, 'Tidak Berpenghasilan\r\n');

-- ----------------------------
-- Table structure for tbl_potongan
-- ----------------------------
DROP TABLE IF EXISTS `tbl_potongan`;
CREATE TABLE `tbl_potongan`  (
  `id_potongan` int NOT NULL AUTO_INCREMENT,
  `jenis_potongan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nominal` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_potongan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_potongan
-- ----------------------------
INSERT INTO `tbl_potongan` VALUES (1, 'Petugas Internal', 800000);
INSERT INTO `tbl_potongan` VALUES (2, 'KTA PGRI', 500000);
INSERT INTO `tbl_potongan` VALUES (3, 'Beasiswa Akademik', 250000);
INSERT INTO `tbl_potongan` VALUES (4, 'Beasiswa Non Akademik', 250000);
INSERT INTO `tbl_potongan` VALUES (5, 'Yatim Piatu', 500000);
INSERT INTO `tbl_potongan` VALUES (6, 'Tidak', 0);

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user`  (
  `id_user` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `full_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_level` int NULL DEFAULT NULL,
  `image` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `is_active` enum('Y','N') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Y',
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES (1, 'admin@gmail.com', 'administrator', 'Administrator', '$2y$10$3ltF8szQPedU9cQPEcrqj.JOv6vT874XOO4POXJA1WdC5vpL4pw0y', 1, 'illustrations-gallery-it-support.png', 'Y');
INSERT INTO `tbl_user` VALUES (6, 'apipduabelas@gmail.com', 'apip', 'user satu', '$2y$10$JcHaMYZk7bPyFxKOdOOe6ehadF23NxQJI1vdqqiM4q9rJTypNNRwG', 2, 'Tulips.jpg', 'Y');
INSERT INTO `tbl_user` VALUES (9, 'eto@gmail.com', 'eto', '', '$2y$10$7jznfHbP38PRfBt9/4yCSesk6tB3ePDNVdfOpWyHk3srKhDnYHxMa', 3, 'default.jpg', 'Y');

-- ----------------------------
-- Table structure for tbl_userlevel
-- ----------------------------
DROP TABLE IF EXISTS `tbl_userlevel`;
CREATE TABLE `tbl_userlevel`  (
  `id_level` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_level` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_level`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of tbl_userlevel
-- ----------------------------
INSERT INTO `tbl_userlevel` VALUES (1, 'admin');
INSERT INTO `tbl_userlevel` VALUES (2, 'guru');
INSERT INTO `tbl_userlevel` VALUES (3, 'petugas');
INSERT INTO `tbl_userlevel` VALUES (4, 'siswa');

-- ----------------------------
-- Table structure for tempat_tinggal
-- ----------------------------
DROP TABLE IF EXISTS `tempat_tinggal`;
CREATE TABLE `tempat_tinggal`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `tinggal_bersama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tempat_tinggal
-- ----------------------------
INSERT INTO `tempat_tinggal` VALUES (1, 'Bersama orang tua\r\n');
INSERT INTO `tempat_tinggal` VALUES (2, 'Wali\r\n');

-- ----------------------------
-- Table structure for transaksi_pembayaran
-- ----------------------------
DROP TABLE IF EXISTS `transaksi_pembayaran`;
CREATE TABLE `transaksi_pembayaran`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_bayar` date NULL DEFAULT NULL,
  `id_tahun` int NULL DEFAULT NULL,
  `no_pendaftaran` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_jenis` int NULL DEFAULT NULL,
  `besarnya_pembayaran` int NULL DEFAULT NULL,
  `diskon` int NULL DEFAULT NULL,
  `id_user` int NULL DEFAULT NULL,
  `ket` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of transaksi_pembayaran
-- ----------------------------
INSERT INTO `transaksi_pembayaran` VALUES (1, 'TR-202212000001', '2022-12-05', 6, '202212000001', 2, 600000, 150000, 1, NULL);
INSERT INTO `transaksi_pembayaran` VALUES (2, 'TR-202212000002', '2022-12-05', 6, '202212000001', 6, 700000, 0, 1, NULL);
INSERT INTO `transaksi_pembayaran` VALUES (3, 'TR-202212000003', '2022-12-06', 6, '202212000001', 7, 50000, 0, 1, NULL);

-- ----------------------------
-- Table structure for transaksi_pembayaran_tmp
-- ----------------------------
DROP TABLE IF EXISTS `transaksi_pembayaran_tmp`;
CREATE TABLE `transaksi_pembayaran_tmp`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode_pembayaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_bayar` date NULL DEFAULT NULL,
  `id_tahun` int NULL DEFAULT NULL,
  `no_pendaftaran` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_jenis` int NULL DEFAULT NULL,
  `diskon` int NULL DEFAULT NULL,
  `besarnya_pembayaran` int NULL DEFAULT NULL,
  `id_user` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 94 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of transaksi_pembayaran_tmp
-- ----------------------------

-- ----------------------------
-- Table structure for transportasi
-- ----------------------------
DROP TABLE IF EXISTS `transportasi`;
CREATE TABLE `transportasi`  (
  `id_transportasi` int NOT NULL AUTO_INCREMENT,
  `nama_transportasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_transportasi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of transportasi
-- ----------------------------
INSERT INTO `transportasi` VALUES (1, 'Jalan Kaki');
INSERT INTO `transportasi` VALUES (2, 'Kendaraan Pribadi');
INSERT INTO `transportasi` VALUES (3, 'Kendaraan Umum');
INSERT INTO `transportasi` VALUES (4, 'Jemputan Sekolah');
INSERT INTO `transportasi` VALUES (5, 'Ojek');
INSERT INTO `transportasi` VALUES (6, 'Lainnya');

SET FOREIGN_KEY_CHECKS = 1;
