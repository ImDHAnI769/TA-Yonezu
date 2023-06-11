/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.27-MariaDB : Database - db_yonezu
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_yonezu` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;

USE `db_yonezu`;

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `passwrod` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `login` */

insert  into `login`(`id`,`username`,`passwrod`) values 
(1,'Bima','TDR3000'),
(2,'Reza','Ajojing1414'),
(3,'Ikhwa','4e1me');

/*Table structure for table `tb_novel` */

DROP TABLE IF EXISTS `tb_novel`;

CREATE TABLE `tb_novel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seri` char(10) NOT NULL,
  `deskripsi_singkat_novel` text DEFAULT NULL,
  `judul` varchar(50) NOT NULL,
  `cover` text NOT NULL,
  `deskripsi` text NOT NULL,
  `pdf` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tb_novel` */

insert  into `tb_novel`(`id`,`seri`,`deskripsi_singkat_novel`,`judul`,`cover`,`deskripsi`,`pdf`) values 
(5,'00001','Keterangan: Amakawa Haruto adalah seorang pemuda yang meninggal sebelum bertemu kembali dengan teman masa kecilnya yang menghilang lima tahun lalu.  Rio adalah...','Seirei gensuki Vol.1','vol_1.jpg','Keterangan: Amakawa Haruto adalah seorang pemuda yang meninggal sebelum bertemu kembali dengan teman masa kecilnya yang menghilang lima tahun lalu.  Rio adalah anak laki-laki yang tinggal di daerah kumuh yang ingin balas dendam untuk ibunya, yang dibunuh di hadapannya ketika dia berumur lima tahun. Bumi dan dunia lain. Dua orang dengan latar belakang dan nilai yang sangat berbeda. Entah kenapa, ingatan dan kepribadian Haruto yang seharusnya sudah mati dibangkitkan kembali di tubuh Rio.  Saat keduanya bingung karena ingatan dan kepribadian mereka menyatu, Rio (Haruto) memutuskan untuk hidup di dunia baru ini. Seiring dengan ingatan Haruto, Rio membangkitkan \"kekuatan khusus\" yang tidak diketahui, dan tampaknya jika dia berhasil menggunakannya dengan baik, dia bisa hidup lebih baik.  Namun sebelum itu, Rio menghadapi penculikan yang ternyata melibatkan dua putri Kerajaan Bertram tempat dia tinggal. Setelah menyelamatkan para putri, Rio diberikan beasiswa ke Royal Academy, sebuah sekolah untuk orang kaya dan berkuasa.  Menjadi yatim piatu yang miskin di sekolah yang penuh dengan bangsawan ternyata menjadi situasi yang sangat menjijikkan.','https://drive.google.com/file/d/1bHSzTG7oYU0LymGKvmdF5V0VPVqnVYmf/view?usp=drive_link'),
(6,'00002','Keterangan: Amakawa Haruto adalah seorang pemuda yang meninggal sebelum bertemu kembali dengan teman masa kecilnya yang menghilang lima tahun lalu.  Rio adalah...','Seirei gensuki Vol.2','vol_2.jpg','Keterangan: Amakawa Haruto adalah seorang pemuda yang meninggal sebelum bertemu kembali dengan teman masa kecilnya yang menghilang lima tahun lalu.  Rio adalah anak laki-laki yang tinggal di daerah kumuh yang ingin balas dendam untuk ibunya, yang dibunuh di hadapannya ketika dia berumur lima tahun. Bumi dan dunia lain. Dua orang dengan latar belakang dan nilai yang sangat berbeda. Entah kenapa, ingatan dan kepribadian Haruto yang seharusnya sudah mati dibangkitkan kembali di tubuh Rio.  Saat keduanya bingung karena ingatan dan kepribadian mereka menyatu, Rio (Haruto) memutuskan untuk hidup di dunia baru ini. Seiring dengan ingatan Haruto, Rio membangkitkan \"kekuatan khusus\" yang tidak diketahui, dan tampaknya jika dia berhasil menggunakannya dengan baik, dia bisa hidup lebih baik.  Namun sebelum itu, Rio menghadapi penculikan yang ternyata melibatkan dua putri Kerajaan Bertram tempat dia tinggal. Setelah menyelamatkan para putri, Rio diberikan beasiswa ke Royal Academy, sebuah sekolah untuk orang kaya dan berkuasa.  Menjadi yatim piatu yang miskin di sekolah yang penuh dengan bangsawan ternyata menjadi situasi yang sangat menjijikkan.','https://drive.google.com/file/d/1lg5uwgHX2fM4gFmQ6LLBXcnmur22anxL/view?usp=drive_link'),
(7,'00003','Keterangan: Amakawa Haruto adalah seorang pemuda yang meninggal sebelum bertemu kembali dengan teman masa kecilnya yang menghilang lima tahun lalu.  Rio adalah...','Seirei gensuki Vol.3','vol_3.jpg','Keterangan: Amakawa Haruto adalah seorang pemuda yang meninggal sebelum bertemu kembali dengan teman masa kecilnya yang menghilang lima tahun lalu.  Rio adalah anak laki-laki yang tinggal di daerah kumuh yang ingin balas dendam untuk ibunya, yang dibunuh di hadapannya ketika dia berumur lima tahun. Bumi dan dunia lain. Dua orang dengan latar belakang dan nilai yang sangat berbeda. Entah kenapa, ingatan dan kepribadian Haruto yang seharusnya sudah mati dibangkitkan kembali di tubuh Rio.  Saat keduanya bingung karena ingatan dan kepribadian mereka menyatu, Rio (Haruto) memutuskan untuk hidup di dunia baru ini. Seiring dengan ingatan Haruto, Rio membangkitkan \"kekuatan khusus\" yang tidak diketahui, dan tampaknya jika dia berhasil menggunakannya dengan baik, dia bisa hidup lebih baik.  Namun sebelum itu, Rio menghadapi penculikan yang ternyata melibatkan dua putri Kerajaan Bertram tempat dia tinggal. Setelah menyelamatkan para putri, Rio diberikan beasiswa ke Royal Academy, sebuah sekolah untuk orang kaya dan berkuasa.  Menjadi yatim piatu yang miskin di sekolah yang penuh dengan bangsawan ternyata menjadi situasi yang sangat menjijikkan.','https://drive.google.com/file/d/1OySZa2bJMiu00kcSa_4BvoWzJPtUPwBd/view?usp=sharing'),
(8,'00004','Keterangan: Amakawa Haruto adalah seorang pemuda yang meninggal sebelum bertemu kembali dengan teman masa kecilnya yang menghilang lima tahun lalu. Rio adalah a...','Seirei gensuki Vol.4','vol_4.jpg','Keterangan: Amakawa Haruto adalah seorang pemuda yang meninggal sebelum bertemu kembali dengan teman masa kecilnya yang menghilang lima tahun lalu. Rio adalah anak laki-laki yang tinggal di daerah kumuh yang ingin balas dendam untuk ibunya, yang dibunuh di hadapannya ketika dia berumur lima tahun. Bumi dan dunia lain. Dua orang dengan latar belakang dan nilai yang sangat berbeda. Entah kenapa, ingatan dan kepribadian Haruto yang seharusnya sudah mati dibangkitkan kembali di tubuh Rio. Saat keduanya bingung karena ingatan dan kepribadian mereka menyatu, Rio (Haruto) memutuskan untuk hidup di dunia baru ini. Seiring dengan ingatan Haruto, Rio membangkitkan \"kekuatan khusus\" yang tidak diketahui, dan tampaknya jika dia berhasil menggunakannya dengan baik, dia bisa hidup lebih baik. Namun sebelum itu, Rio menghadapi penculikan yang ternyata melibatkan dua putri Kerajaan Bertram tempat dia tinggal. Setelah menyelamatkan para putri, Rio diberikan beasiswa ke Royal Academy, sebuah sekolah untuk orang kaya dan berkuasa. Menjadi yatim piatu yang miskin di sekolah yang penuh dengan bangsawan ternyata menjadi situasi yang sangat menjijikkan.','https://drive.google.com/file/d/1OySZa2bJMiu00kcSa_4BvoWzJPtUPwBd/view?usp=sharing');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
