-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: otshop
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `binh_luan`
--

DROP TABLE IF EXISTS `binh_luan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL AUTO_INCREMENT,
  `noi_dung` varchar(255) NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ma_kh` varchar(20) NOT NULL,
  `ngay_bl` date NOT NULL,
  PRIMARY KEY (`ma_bl`),
  KEY `ma_kh` (`ma_kh`),
  KEY `ma_kh_2` (`ma_kh`),
  KEY `ma_hh` (`ma_hh`),
  CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `binh_luan`
--

LOCK TABLES `binh_luan` WRITE;
/*!40000 ALTER TABLE `binh_luan` DISABLE KEYS */;
INSERT INTO `binh_luan` VALUES (8,'đẹp xuất sắc nhức nách vcl luôn',5,'admin','2021-10-09'),(10,'hi',5,'admin','2021-10-09'),(11,'dễ thương quá',6,'admin','2021-10-09'),(12,'dễ thương quá',6,'admin','2021-10-09'),(13,'dễ thương quá',6,'admin','2021-10-09'),(14,'chất liệu tốt, đẹp',11,'user','2021-10-11'),(15,'chất liệu tốt, đẹp',9,'admin','2022-10-05'),(16,'demo',11,'admin','2022-10-05');
/*!40000 ALTER TABLE `binh_luan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hang_hoa`
--

DROP TABLE IF EXISTS `hang_hoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL AUTO_INCREMENT,
  `ten_hh` varchar(50) NOT NULL,
  `don_gia` double(10,2) NOT NULL,
  `giam_gia` double(10,2) DEFAULT 0.00,
  `hinh` varchar(50) NOT NULL,
  `ngay_nhap` date DEFAULT NULL,
  `mo_ta` text NOT NULL,
  `dac_biet` tinyint(1) NOT NULL,
  `so_luot_xem` int(11) NOT NULL DEFAULT 0,
  `ma_loai` int(10) NOT NULL,
  PRIMARY KEY (`ma_hh`),
  KEY `ma_loai` (`ma_loai`),
  CONSTRAINT `hang_hoa_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hang_hoa`
--

LOCK TABLES `hang_hoa` WRITE;
/*!40000 ALTER TABLE `hang_hoa` DISABLE KEYS */;
INSERT INTO `hang_hoa` VALUES (5,'Áo Khoác Nam Đen Không Mũ',300000.00,3.00,'6d114101542c9ee6883666767182a384.png','2021-10-09','Áo khoác nam màu đen không nón cực ngầu và mạnh mẽ',0,4,6),(6,'Áo Hoddie Con Vịt',100000.00,3.00,'afd396a9c2e43d6129d00bc9b9a6b89f.png','2021-10-09','Áo hoddie con vịt màu vàng siu dễ thương',0,10,3),(7,'Áo Khoác Nam Nâu',100000.00,1.00,'54-0810502805-3-30-03-2017.png','2021-10-08','Áo khoác nam màu nâu cá tính, mạnh mã là lịch lãm',0,3,6),(8,'Áo Thun Tay Lỡ Hình Chibi',75000.00,3.00,'ao-thun-tam-tay-lo--uniqlo----w188.png','2021-10-10','Áo thun nam tay lỡ vô cùng dễ thương',0,7,4),(9,'Áo Thun Nam Đen Tay Ngắn',100000.00,3.00,'th.png','2021-10-09','Áo thun nam tay ngắn rất thích hợp cho mùa hè đầy nóng nực',0,5,4),(10,'Áo Khoác Nữ Vàng Phong Cách',400000.00,0.10,'kisspng-blouse-dress-shirt-the-three-wise-men.png','2021-10-09','Áo khoác nữa cực dễ thương',0,9,7),(11,'Áo Thun Tay Lỡ Màu Trắng',50000.00,3.00,'bc8.png','2021-10-09','Áo thun tay lỡ màu trắng tin khôi cho cả nam và nữ',0,7,4),(12,'Áo Khoác Nữ Màu Hồng',500000.00,1.00,'png-clipart-aestmbnail.png','2021-10-08','Áo khoác nữ màu hồng ấm áp cho các bạn gái vào mùa đông lạnh lẽo',0,3,7),(13,'Áo Thun Đen Tay Lỡ',555000.00,0.00,'ao-thun-tam-tay-lo--uniqlo----w1882.png','2021-10-10','Áo thun nam đen tay lỡ siêu chất lượng',0,6,4),(14,'Áo Sơ Mi Tay Dài',120000.00,3.00,'ao-s-trang-alsw17-mo23.png','2021-10-09','Áo mi sơ lịch lãm, trang nhã cho các quý ông',0,5,5),(15,'Áo Khoác Dù Nam Màu Đen',100000.00,0.00,'tải xuống.png','2021-10-10','Áo khoác dù chống thấm nước hiệu quả',0,0,6);
/*!40000 ALTER TABLE `hang_hoa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `khach_hang`
--

DROP TABLE IF EXISTS `khach_hang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `khach_hang` (
  `ma_kh` varchar(20) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `ho_ten` varchar(50) NOT NULL,
  `kich_hoat` bit(1) NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `vai_tro` bit(1) NOT NULL,
  PRIMARY KEY (`ma_kh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `khach_hang`
--

LOCK TABLES `khach_hang` WRITE;
/*!40000 ALTER TABLE `khach_hang` DISABLE KEYS */;
INSERT INTO `khach_hang` VALUES ('admin','12345678','Admin tối cao','','Poly.png','caodangfpt@gmail.com',''),('truchuynh','12345678','nguyen truc huynh','\0','logo.png','nguyentruchuynh2002@gmail.com','\0'),('user','12345678','Tài khoản người dùng','\0','logo.png','dzuilamgdbd3@gmail.com','\0');
/*!40000 ALTER TABLE `khach_hang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loai`
--

DROP TABLE IF EXISTS `loai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loai` (
  `ma_loai` int(10) NOT NULL AUTO_INCREMENT,
  `ten_loai` varchar(50) NOT NULL,
  PRIMARY KEY (`ma_loai`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loai`
--

LOCK TABLES `loai` WRITE;
/*!40000 ALTER TABLE `loai` DISABLE KEYS */;
INSERT INTO `loai` VALUES (3,'Hoddie'),(4,'Áo Thun'),(5,'Áo Sơ Mi'),(6,'Áo khoác Nam'),(7,'Áo Khoác Nữ');
/*!40000 ALTER TABLE `loai` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-05 20:36:17
