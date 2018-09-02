-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 02, 2018 at 11:17 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aula_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extensao` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci,
  `preco` decimal(10,4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`id`, `nome`, `extensao`, `descricao`, `preco`) VALUES
(28, 'Figma Megumin', 'jpeg', 'My name is Megumin!\r\nFrom the anime series &quot;KONO SUBARASHII SEKAI NI SYUKUFUKU WO! 2&quot; comes a figma of the Explosion Arch-Wizard, Megumin!\r\n\r\n・The smooth yet posable figma joints allow you to act out a variety of different scenes.\r\n・A flexible plastic is used in specific areas, allowing proportions to be kept without compromising posability.\r\n・She comes with three face plates including a smiling expression, a chanting expression and a depressed expression.\r\n・Optional parts include her staff, which comes with an effect part and mounting part to display her casting her explosion magic, along with an interchangeable purple orb to display on her staff.\r\n・In addition, a hair part with attached eye patch, an eye glimmer effect as well as her familiar, Chomusuke, are also included.\r\n・An articulated figma stand is included, which allows various poses to be taken.\r\n\r\n&copy;2017 暁なつめ・三嶋くろね／ＫＡＤＯＫＡＷＡ／このすば２製作委員会', '220.0000'),
(29, ' Nendoroid Jotaro Kujo', 'jpeg', 'Yare Yare Daze\r\nFrom the anime, &quot;JoJo&#039;s Bizarre Adventure: Stardust Crusaders&quot; comes a Nendoroid of the quiet and calm protagonist, Jotaro Kujo! The figure is fully articulated, so you can display him in a wide variety of poses. Face plates include his intrepid standard expression, his &quot;Ora Ora&quot; expression, as though he&#039;s unleashing a flurry of attacks, as well as a dauntless smiling expression.\r\nHis included school uniform hat that appears to be a part of his hair comes in a standard version as well as a version with a lower hat brim. In addition, he comes with an effect part made in the image of his stand, &quot;Star Platinum,&quot; so you can enjoy recreating all kinds of battle scenes from the show! Be sure to add the Nendoroid-sized Jotaro Kujo to your collection!\r\n\r\n&copy;Hirohiko Araki&amp;LUCKY LAND COMMUNICATIONS/SHUEISHA･JOJO&rsquo;s Animation SC Project', '200.0000'),
(30, 'Racing Miku: Vers&atilde;o Tony Haregi', 'jpeg', 'Thank you for your continued passionate support!\r\nA full scale figure of the official character of the Hatsune Miku GT Project &ldquo;Racing Miku&rdquo; in the style of the SUZUKA 10 HOURS support illustration, &ldquo;Racing Miku: Tony Haregi Ver.&rdquo;! The adorable fairy Racing Miku by popular illustrator Tony has been transformed into another figure, this time wearing a beautiful haregi. The figure makes use of clear parts in her translucent hair, which has been carefully sculpted to spread out in a circular shape. Her pearl-like kimono is decorated with an elegant design. Her gentle expression looking ahead gives Racing Miku a charming, ladylike appearance. Be sure to add her to your collection!\r\n\r\n*The GSR coupon may be applied to this item.\r\nhttp://www.goodsmileracing.com/news/code/\r\n\r\n&copy; Tony / Crypton Future Media, INC. www.piapro.net directed by コヤマシゲト', '600.0000'),
(31, ' Holo: Dez Anos de &#039;Spice and Wolf&#039;', 'jpeg', 'Look upon my glorious tail! Have you no words of praise?\r\nTo commemorate Spice and Wolf&#039;s 10th anniversary, a specially drawn illustration of Holo by creator Juu Ayakura has been brought into figure-form! While maintaining the intricate detail and soft atmosphere of the original illustration, her lively motion has been captured with great care, to the point where it feels like could come alive at any moment! Her gentle stride, fluttering skirt, flaxen hair blowing in the wind, and smooth, clear skin are just some of the highlights of this figure. Translucent parts are utilized for a part of her clothes, while intricate attention to detail can be seen in small parts like the wooden mug and sachet necklace, created faithfully according to the original illustration. The fine details can be enjoyed from any angle, so be sure to add her to your collection and see for yourself!\r\n\r\n&copy;支倉凍砂／アスキー・メディアワークス／「狼と香辛料Ⅱ」製作委員会', '600.0000'),
(32, 'Japari Bus', 'jpeg', 'A palm-sized figure of the Japari Bus from Kemono Friends!\r\nThe Japari Bus from the Kemono Friends anime series has been transformed into an adorable little model for fans to add to their collection! The product is a set that also includes figures of Serval, Kaban, Common Raccoon and Fennec Fox, along with Lucky Beast as the driver of the bus!\r\n\r\n&copy;けものフレンズプロジェクトA', '360.0000'),
(33, ' Nendoroid White Blood Cell', 'jpeg', 'Bye bye, bacteria.\r\nFrom the anime series &quot;Cells at Work! comes a Nendoroid of the cell that kills foreign bacteria and viruses in the body - the White Blood Cell! He comes with three face plates including a standard expression, a combat expression as well as a smiling expression. The body is articulated which allows him to be posed in various different poses.\r\nOptional parts include his knife for combatting the viruses as well as the receptor for locating the unwanted bacteria in the body. He also comes with a speech plate to display him saying his catch phrase from the series - &quot;Bye bye, bacteria&quot;. Be sure to add him to your collection and enjoy all sorts of cute situations in Nendoroid size!\r\n\r\n&copy;AS/K,A,D', '180.0000'),
(34, 'Nendoroid Soldier: 76: Classic Skin Edition', 'jpeg', '&quot;We&#039;re all soldiers now.&quot;\r\nFrom the globally popular multiplayer team based shooter Overwatch&reg;, comes the ninth Nendoroid figure from the series - Soldier: 76! The figure is fully articulated and his mask can be detached allowing for all sorts of display options. The iconic &quot;76&quot; printed on his back has also been faithfully captured on the Nendoroid.\r\nA variety of optional parts are included to recreate all of his abilities from the game in cute Nendoroid size. His Helix Rockets are included and come with their own stand to be displayed spiralling out toward his opponents, and a Biotic Field part is included to keep him and his squadmates healthy.\r\nAn alternate mask part with a special attachment is also included allowing Soldier: 76 to be displayed making use of his Tactical Visor ultimate ability! Last but not least, he also comes with a golf club for some more playful poses! Be sure to add him to your collection and display him with the previously announced heroes in the Overwatch&reg; Nendoroid series!\r\n\r\n■ OVERWATCH x GOODSMILE COMPANY Special Site\r\nhttp://special.goodsmile.info/overwatch/\r\n\r\n&copy; 2018 Blizzard Entertainment, Inc. All rights reserved. Overwatch, the Overwatch logo, and Blizzard Entertainment are trademarks or registered trademarks of Blizzard Entertainment, Inc. in the US and/or other countries. Visit us at gear.blizzard.com', '200.0000'),
(35, ' MODEROID Strelitzia', 'jpeg', 'The true form of the &quot;Steel Lady&quot;, Strelitzia!\r\nFrom the anime series &quot;DARLING in the FRANXX&quot; comes a plastic model kit of the FRANXX that Hiro and Zero Two ride, Strelitzia! The &quot;Steel Lady&quot; has been carefully supervised by series mechanical designer Shigeto Koyama, and modeled with great care by sakanoryo (dragon studio)! The elegant design of the mecha has been captured in beautiful detail for fans to enjoy building and displaying in their collection!\r\nThe model stands approximately 18cm tall when built and features runners separated into four colors (white, red, yellow, grey) as well as partially pre-painted parts which allow the model to look amazing simply by being put together! The joints of the build model are articulated allowing for various poses, and the face parts comes in two different versions: a pre-painted version and a blank version that can be completed with stickers.\r\nThe model also comes with the Queen Pike approximately 27cm in length, a shield and a stand to hold the model in place. The cables on the Queen Pike are made from a soft material.\r\n\r\n&copy;ダーリン・イン・ザ・フランキス製作委員会', '200.0000'),
(36, 'Racing Miku 2018: Chaveiros Colecion&aacute;veis de Borracha', 'jpeg', 'Collectible rubber keychains featuring Racing Miku 2018 Ver.!\r\nFrom the Hatsune Miku GT Project comes a selection of collectible rubber straps featuring the cute Nendoroid illustrations of Racing Miku 2018 Ver.! The line-up includes they main visual, the alternate side visual, the Thailand Ver., the Rd.1 Support Ver., Rd.2 Support Ver. and Rd.3 Support Ver. for a total of six different varieties to collect!\r\n\r\n* Please note that this item is not applicable for the GSR coupon.\r\nhttp://www.goodsmileracing.com/news/code/\r\n\r\n&copy; Hiro Kanzaki / Crypton Future Media, INC. www.piapro.net directed by Shigeto Koyama costume design by kome100', '160.0000'),
(37, ' Nendoroid Atsuko Kagari(Segunda Release)', 'jpeg', 'My magic is a heart with faith!!\r\nFrom the anime series &quot;Little Witch Academia&quot; comes a rerelease of the witch apprentice who looks up to Shiny Chariot - Nendoroid Atsuko Kagari! She comes with three face plates including a cheerful smiling expression, an expression with sparkling eyes for when she gets excited about magic as well as a flustered expression that captures her personality perfectly!\r\nOptional parts include her wand, broom and the Shiny Rod, and she even comes with rabbit ears to recreate the scene where she failed to cast transformation magic. Be sure to add the always excited and cheerful Akko to your Nendoroid collection!', '180.0000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`) VALUES
(18, 'root', 'root@root.com', '$2y$10$l5qijmbyVZ/PhYduQ57MceY1eJ7LyMWYzlk9SFtrmLiqXBiC5kBpS', 1),
(22, 'Pietro', 'pietrocarrara@gmail.com', '$2y$10$g1gABKgpV3/V10evYouXTedTeAsMJ3WmWenfKVv1ArvksrlvF2T32', 0),
(23, 'Arthur', 'arthurrosso@gmail.com', '$2y$10$BSJ8IfPRCNt19ToMIskeveIdF45dBX04x5.cdSQCbVOcxM4bKl58i', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
