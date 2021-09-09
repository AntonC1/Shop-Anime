SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `getcat` (IN `cid` INT)  SELECT * FROM categories WHERE cat_id=cid$$
DELIMITER ;
CREATE TABLE `admin_info` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(300) NOT NULL,
  `admin_password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `admin_info` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'admin', 'admin@gmail.com', '25f9e794323b453885f5181f1b624d0b');
CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Im a spider so what'),
(2, 'Atack on Titan'),
(3, 'Chainsaw Man'),
(4, 'Black Clover'),
(5, 'Full Metal Alchemist'),
(6, 'Classroom Of The Elite');
CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(6, 26, '::1', 4, 1),
(9, 10, '::1', 7, 1),
(10, 11, '::1', 7, 1),
(11, 45, '::1', 7, 1),
(44, 5, '::1', 3, 0),
(46, 2, '::1', 3, 0),
(48, 72, '::1', 3, 0),
(49, 60, '::1', 8, 1),
(50, 61, '::1', 8, 1),
(51, 1, '::1', 8, 1),
(52, 5, '::1', 9, 1),
(53, 2, '::1', 14, 1),
(54, 3, '::1', 14, 1),
(55, 5, '::1', 14, 1),
(56, 1, '::1', 9, 1),
(57, 2, '::1', 9, 1),
(71, 61, '127.0.0.1', -1, 1);
CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Manga'),
(2, 'Light Novel'),
(3, 'Figurki'),
(4, 'Ubrania'),
(5, 'Naklejki'),
(6, 'Plakaty'),
(7, 'Akcesoria');
CREATE TABLE `email_info` (
  `email_id` int(100) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `email_info` (`email_id`, `email`) VALUES
(3, 'admin@gmail.com'),
(4, 'anton@gmail.com'),
(5, 'jan@gmail.com');
CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `p_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `trx_id`, `p_status`) VALUES
(1, 12, 7, 1, '07M47684BS5725041', 'Completed'),
(2, 14, 2, 1, '07M47684BS5725041', 'Completed');
CREATE TABLE `orders_info` (
  `order_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(10) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardnumber` varchar(20) NOT NULL,
  `expdate` varchar(255) NOT NULL,
  `prod_count` int(15) DEFAULT NULL,
  `total_amt` int(15) DEFAULT NULL,
  `cvv` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `orders_info` (`order_id`, `user_id`, `f_name`, `email`, `address`, `city`, `state`, `zip`, `cardname`, `cardnumber`, `expdate`, `prod_count`, `total_amt`, `cvv`) VALUES
(1, 12, 'Antek', 'anton@gmail.com', 'Piotrkowska', 'Lodz', 'Lodzkie', 97117, 'antek', '4321 2345 6788 7654', '12/22', 3, 560, 1234);
CREATE TABLE `order_products` (
  `order_pro_id` int(10) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(15) DEFAULT NULL,
  `amt` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `order_products` (`order_pro_id`, `order_id`, `product_id`, `qty`, `amt`) VALUES
(73, 1, 1, 1, 100),
(74, 1, 4, 2, 200),
(75, 1, 8, 1, 400);
CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 1, 2, 'Atack on Titan Manga Vol.1', 50, 'Attack On Titan 1 Autor Hajime Isayama', '04471305_attack-on-titan-1.jpg', 'Atack on titan'),
(2, 1, 3, 'Chaisaw man Manga Vol.1', 25, 'Chainsaw Man 1 autor Tatsuki Fujimoto', '81s8xJUzWGL.jpg', 'Chaisaw man'),
(3, 1, 3, 'Chaisaw man Manga Vol.2', 25, 'Chainsaw Man 2 autor Tatsuki Fujimoto', '9781974709946_p0_v1_s1200x630.jpg', 'Chaisaw man'),
(4, 1, 3, 'Chaisaw man Manga Vol.3', 25, 'Chainsaw Man 3 autor Tatsuki Fujimoto ', 'Volume_03.png', 'Chaisaw man'),
(5, 1, 2, 'Atack on Titan Manga Vol.2', 50, 'Attack On Titan 2 Autor Hajime Isayama', 'attack-on-titan-bd-2.jpg', 'Atack on titan'),
(6, 1, 1, 'Im a spider so what Manga Vol.1', 30, 'Im a spider so what manga 1 autro Okina Baba', '51IEyMYyyVL._AC_SY580_.jpg', 'Spider'),
(7, 1, 1, 'Im a spider so what Manga Vol.2', 30, 'Im a spider so what manga 2 autro Okina Baba', '513FJNCNuUL._AC_SY580_.jpg', 'Spider'),
(8, 1, 4, 'Black clover Vol.1', 40, 'Black clover 1 autor Yuki Tabata', '16107194_black-clover-01.jpg', 'Black clover'),
(9, 1, 3, 'Chaisaw man Manga Vol.4', 25, 'Chainsaw Man 4 autor Tatsuki Fujimoto', '81ww5rFJirL.jpg', 'Chaisaw man'),
(10, 2, 6, 'Classroom of the Elite Vol.1', 45, 'Classroom of the Elite 1 by Syougo Kinugasa ', '518Um1Lm5kL._SX349_BO1,204,203,200_.jpg', 'Classroom'),
(11, 2, 6, 'Classroom of the Elite Vol.2', 45, 'Classroom of the Elite 2 by Syougo Kinugasa', '9781642751390.jpg', 'Classroom'),
(12, 2, 6, 'Classroom of the Elite Vol.3', 45, 'Classroom of the Elite 3 by Syougo Kinugasa', '9781642757231.jpg', 'Classroom'),
(13, 2, 6, 'Classroom of the Elite Vol.4', 45, 'Classroom of the Elite 4 by Syougo Kinugasa', '9781645051978.jpg', 'Classroom'),
(14, 2, 6, 'Classroom of the Elite Vol.5', 45, 'Classroom of the Elite 4 by Syougo Kinugasa', '51XuS1LoRPL._AC_SY780_.jpg', 'Classroom'),
(15, 2, 6, 'Classroom of the Elite Vol.6', 45, 'Classroom of the Elite 5 by Syougo Kinugasa', '9781645057512.jpg', 'Classroom'),
(16, 3, 2, 'Mikasa Ackerman AoT 1/8', 579, 'Figurka Attack on Titan ARTFXJ 1/8 Mikasa Ackerman Renewal Package Ver.', 'x_ktopp802.jpg', 'Atack on titan'),
(17, 3, 2, 'Levi Aot Nendoroid', 259, 'Figurka Attack on Titan Nendoroid - Levi', 'x_gsc12494.jpg', 'Atack on titan'),
(19, 3, 2, 'Eren Yeager AoT Figma', 800, 'Good Smile Attack on Titan: Eren Yeager Figma Action Figure', '61Ez5Xx+X4L._AC_SL1000_.jpg', 'Atack on titan'),
(20, 3, 3, 'Figurka Nendoroid -Denji', 292, 'Figurka Chainsaw Man Nendoroid - Denji', 'x_gsc12383.jpg', 'Chainsaw Man'),
(21, 3, 3, 'Figurka Nendoroid -Power', 256, 'Figurka Chainsaw Man Nendoroid - Power', 'x_gsc12420.jpg', 'Chainsaw Man'),
(22, 4, 6, 'Koszulka CotE Ver.1', 30, 'Ubrania klasie elity Kiyotaka Suzune Horikita Anime czerwony Youkoso Jitsuryoku moda z krótkim rękawem T-shirt', 'Ubrania-klasie-elity-Kiyotaka-Suzune-Horikita-Anime-czerwony-Youkoso-Jitsuryoku-moda-z-kr-tkim-r-kawem.jpg_q50.jpg', 'Classroom'),
(23, 4, 6, 'Koszulka CotE Ver.2', 35, 'Klasa elity Kiyotaka Ayanokoji Suzune Horikita odzież koszulka z motywem Anime moda męska z krótkim rękawem ponadgabarytowe męskie koszulki', 'ssrco,classic_tee,mens,101010_01c5ca27c6,front_alt,square_product,600x600.jpg', 'Classroom'),
(24, 4, 2, 'Bluza AoT Ver.1', 50, 'Bluza', '6034a6dac1d392b49ff165fe-large.jpg', 'Atack on Titan'),
(25, 4, 2, 'Bluza AoT Ver.1', 100, 'Bluza', 'Nowe-Anime-attack-on-titan-kobiet-mężczyzn-dorosłych-Unisex-odzież-moda-sweter-T-Shirt-Student-wygodne-Cosplay-ciepły-kostium-tanie-tanio-CN-(pochodzenie)-Bluzy-Dla-dorosłych-tops-Attack-On-Titan-COTTON.jpg_640x640.jpg', 'Atack on Titan'),
(27, 4, 2, 'Koszulka Aot Ver.1', 40, 'Koszulka', 'Japo-skie-anime-atak-na-tytana-gigantyczny-t-shirt-harcerstwo-legion-ubrania-shingeki-no-kyojin-koszulka.jpg', 'Atack on Titan'),
(32, 4, 3, 'Bluza Chaisaw man Ver.1', 90, 'Bluza', 'Anime-Chainsaw-Man-Pochita-Cosplay-codzienna-bluza-z-kapturem-moda-bluza-p-aszcz-z-kr-tkim.jpg', 'Chainsaw man'),
(33, 4, 2, 'Koszulka Aot Ver.2', 45, 'Koszulka', 'LIASOSO-3D-Print-Unisex-Anime-Attack-On-Titan-Eren-Mikasa-Reiner-Bertolt-Tshirt-Summer-T-shirt.jpg', 'Atack on Titan'),
(34, 4, 4, 'Koszulka Black Clover Ver.1', 89, 'Koszulka', '146643362_max.JPG', 'Black Clover'),
(35, 4, 1, 'Koszulka Im a spider so what Ver.1', 88, 'Koszulka', '5323247_0.png', 'Spider'),
(36, 4, 5, 'Koszulka FullMetal Alchemist Ver.1', 50, 'Koszulka', '0_0_productGfx_bcca2585408fe2f6843e6517d329522f.jpg', 'Fullmetal'),
(37, 4, 5, 'Koszulka FullMetal Alchemist Ver.2', 35, 'Koszulka', 'Fullmetal-Alchemist-T-Shirt-m-czy-ni-bawe-na-T-Shirt-w-stylu-Vintage-Elric-Edward.jpg_q50.jpg', 'Fullmetal'),
(38, 4, 4, 'Koszulka Black Clover Ver.2', 85, 'Koszulka', '6046321_0.png', 'Black Clover'),
(39, 4, 5, 'Koszulka FullMetal Alchemist Ver.3', 50, 'Koszulka', 'koszulka-fullmetal-alchemist-10.jpg', 'Fullmetal'),
(40, 2, 6, 'Classroom of the Elite Vol.7', 45, 'Classroom of the Elite 5 by Syougo Kinugasa', '9781645058205.jpg', 'Classroom'),
(45, 1, 2, 'Atack on Titan Manga Vol.3', 50, 'Attack On Titan 3 Autor Hajime Isayama', '01220642_attack-on-titan-3.jpg', 'Atack on titan'),
(46, 1, 2, 'Atack on Titan Manga Vol.4', 50, 'Attack On Titan 4 Autor Hajime Isayama', 'attack-on-titan-4.jpg', 'Atack on titan'),
(47, 4, 6, 'Koszulka CotE Ver.3', 20, 'Koszulka', 'Klasa-elity-Kiyotaka-Ayanokouji-Cosplay-T-Shirt-japo-skie-Anime-letnia-koszulka-koszulka-kostium-Cosplay-na.jpg_640x640.jpg', 'Classroom'),
(48, 1, 3, 'Chaisaw man Manga Vol.5', 25, 'Chainsaw Man 5 autor Tatsuki Fujimoto', '81bon2UnBkL.jpg', 'Chainsaw Man'),
(49, 1, 3, 'Chaisaw man Manga Vol.6', 25, 'Chainsaw Man 6 autor Tatsuki Fujimoto', '81MGKtXpdRL.jpg', 'Chainsaw Man'),
(50, 3, 2, 'Figurka Eren Yeager Aot', 650, 'Eren Yeager ARTFXJ | Kotobukiya figure | Attack on Titan', 'Eren-Yeager-Kotobukiya-ARTFXJ-Renewal-Attack-on-Titan.jpg', 'Atack on Titan'),
(51, 3, 4, 'Figurka Asta Black Clover', 95, 'Black Clover DXF Asta figure 13cm', 'black-clover-dxf-asta-figure-13cm.jpg', 'Black Clover'),
(52, 3, 4, 'Figurka Yuno Black Clover', 150, 'Black Clover Yuno DXF Figure', 'charmingsushi-banpresto-black-clover-yuno-dxf-figure-4983164172959-28194810724415_1000x1000.jpg', 'Black Clover'),
(53, 3, 4, 'Figurka Asta v.2 Black Clover', 110, 'Black Clover DXF Asta figure 13cm', 'asta-figure-black-clover-dxf-figure-version-black-asta-ver-banpresto.jpg', 'Black Clover'),
(54, 3, 2, 'Figurka Eren i Armored Titan', 4500, 'Figurka', 'mEasbTBQ_jpeg_2000x.jpg', 'Atack on Titan'),
CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(12, 'Antek', 'Ciszewski', 'antek@gmail.com', 'Antek', '9448121558', 'Lodz', 'Polska'),
(15, 'Jan', 'Kowalski', 'jan@gmail.com', 'Jan', '536487276','Lodz', 'Polska'),
(16, 'Marian', 'Bon', 'marian@gmail.com', 'Marian', '9871236534', 'Lodz', 'Polska'),
(19, 'Kacper', 'Kaminski', 'kacper@gmail.com', 'Kacper', '9871236534', 'Lodz', 'Polska'),
(21, 'Natalia', 'Oleska', 'natalia@gmail.com', 'Natalia', '202-555-01', 'Lodz', 'Polska'),
(22, 'Ewa', 'Pudzianowska', 'ewa@gmail.com', 'Ewa', '9877654334', 'Lodz', 'Polska'),
(23, 'Mateusz', 'Wesolowski', 'mateusz@gmail.com', 'Mateusz', '9876543234', 'Lodz', 'Polska'),
(24, 'Mariusz', 'Wisniecki', 'mariusz@gmail.com', 'Mariusz', '9535688928', 'Lodz', 'Polska'),
(25, 'Agnieszka', 'Kot', 'agnieszka@gmail.com', 'Agnieszka', '9535688928', 'Lodz', 'Polska');
DELIMITER $$
CREATE TRIGGER `after_user_info_insert` AFTER INSERT ON `user_info` FOR EACH ROW BEGIN 
INSERT INTO user_info_backup VALUES(new.user_id,new.first_name,new.last_name,new.email,new.password,new.mobile,new.address1,new.address2);
END
$$
DELIMITER ;
CREATE TABLE `user_info_backup` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `user_info_backup` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(12, 'Antek', 'Ciszewski', 'antek@gmail.com', 'Antek', '9448121558', 'Lodz', 'Polska'),
(15, 'Jan', 'Kowalski', 'jan@gmail.com', 'Jan', '536487276', 'Lodz', 'Polska'),
(16, 'Marian', 'Bon', 'marian@gmail.com', 'Marian', '9871236534', 'Lodz', 'Polska'),
(19, 'Kacper', 'Kaminski', 'kacper@gmail.com', 'Kacper', '9871236534', 'Lodz', 'Polska'),
(21, 'Natalia', 'Oleska', 'natalia@gmail.com', 'Natalia', '202-555-01', 'Lodz', 'Polska'),
(22, 'Ewa', 'Pudzianowska', 'ewa@gmail.com', 'Ewa', '9877654334', 'Lodz', 'Polska'),
(23, 'Mateusz', 'Wesolowski', 'mateusz@gmail.com', 'Mateusz', '9876543234', 'Lodz', 'Polska'),
(24, 'Mariusz', 'Wisniecki', 'mariusz@gmail.com', 'Mariusz', '9535688928', 'Lodz', 'Polska'),
(25, 'Agnieszka', 'Kot', 'agnieszka@gmail.com', 'Agnieszka', '9535688928', 'Lodz', 'Polska');
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`);
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);
ALTER TABLE `email_info`
  ADD PRIMARY KEY (`email_id`);
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);
ALTER TABLE `orders_info`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`order_pro_id`),
  ADD KEY `order_products` (`order_id`),
  ADD KEY `product_id` (`product_id`);
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);
ALTER TABLE `user_info_backup`
  ADD PRIMARY KEY (`user_id`);
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
ALTER TABLE `email_info`
  MODIFY `email_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
ALTER TABLE `orders_info`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
ALTER TABLE `order_products`
  MODIFY `order_pro_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
ALTER TABLE `user_info_backup`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
ALTER TABLE `orders_info`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`);
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products` FOREIGN KEY (`order_id`) REFERENCES `orders_info` (`order_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
