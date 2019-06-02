-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2019 at 05:41 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_detail`
--

CREATE TABLE `billing_detail` (
  `billing_detail_id` int(11) NOT NULL,
  `billing_info_id` int(11) NOT NULL,
  `card_number` int(11) NOT NULL,
  `card_expire` int(11) NOT NULL,
  `card_cvv` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `billing_info`
--

CREATE TABLE `billing_info` (
  `billing_id` int(11) NOT NULL,
  `amount` decimal(10,0) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `is_show` tinyint(1) NOT NULL DEFAULT '1',
  `fullname` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`) VALUES
(1, 'Games'),
(3, 'Design'),
(4, 'Technology'),
(5, 'Film & Video'),
(6, 'Music'),
(7, 'Fashion'),
(8, 'Publishing'),
(9, 'Food'),
(10, 'Art'),
(11, 'Comics'),
(12, 'Illustration'),
(13, 'Photography'),
(14, 'Theater'),
(15, 'Crafts'),
(16, 'Journalism'),
(17, 'Dance');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(11) NOT NULL,
  `name` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `description` text COLLATE utf8_bin,
  `address` text COLLATE utf8_bin,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '4',
  `title` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `url` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `summary` text COLLATE utf8_bin,
  `shortsummary` text COLLATE utf8_bin,
  `amount` int(150) DEFAULT NULL,
  `raised` int(150) DEFAULT NULL,
  `long_temp` text COLLATE utf8_bin,
  `doc_url` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `video_url` text COLLATE utf8_bin,
  `img` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `challenge_text` text COLLATE utf8_bin,
  `info` text COLLATE utf8_bin,
  `url1` text COLLATE utf8_bin,
  `url2` text COLLATE utf8_bin,
  `url3` text COLLATE utf8_bin,
  `url4` text COLLATE utf8_bin,
  `project_owner` text COLLATE utf8_bin,
  `start_at` datetime DEFAULT NULL,
  `end_at` datetime DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `category_id`, `title`, `url`, `summary`, `shortsummary`, `amount`, `raised`, `long_temp`, `doc_url`, `video_url`, `img`, `owner_id`, `challenge_text`, `info`, `url1`, `url2`, `url3`, `url4`, `project_owner`, `start_at`, `end_at`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 0, 'Wiggle The Moment : 3D Film Camera by RETO3D', 'www.google.com', 'Кинографийн дуртай хүн бүрт зориулан 3D кино камерыг эхлүүлсэн бөгөөд төслийн үр дүнг гаргахын тулд бидэнд дэмжлэг хэрэгтэй байна.\r\n\r\n3D гэрэл зураг нь киноны тодорхой төрлийн зураг байх тул киноны ихэнх хэрэглэгчид оршин тогтнохоо мэдэхгүй байж болно. Зах зээл 3-р камергүй, 2-р гар утасны зах зээлийн үнийг үл хүлээн зөвшөөрдөг. Бид хуучин стерео камерыг шинжилж, манай дизайныг сайжруулсан. RETO3D нь жижиг бөгөөд хөнгөн, хямд, хэрэглэхэд хялбар. Энэ нь баригдсан флэш бөгөөд кино хэмнэх! Бид мөн GIF-ыг хэрэглэгчдэд зориулж зураг боловсруулахад зориулж боловсруулсан бөгөөд энэ нь PhotoShop-ийг ашиглахад төвөгтэй, цаг хугацаа шаарддаг процессыг шийддэг.', 'Кинографийн дуртай хүн бүрт зориулан 3D кино камерыг эхлүүлсэн бөгөөд төслийн үр дүнг гаргахын тулд бидэнд дэмжлэг хэрэгтэй байна.', 120000, 50000, 'We ship worldwide. Import taxes and handling charges may apply to international orders. Under estimation, first-round shipping for early bird backers will be in June 2019. The coming batch will take place in August. We will work closely with manufacturers to make sure prompt delivery. We will surely keep you inform if there happens to be any unexpected delays.', 'Testing Project', 'www.video.com', 'public/imggoalz_20190210071536.jpg', NULL, 'text text text', 'text', 'www1', 'www2', 'www3', 'www4', 'text', '2019-10-01 00:00:00', '2019-12-31 00:00:00', 1, '2019-03-17 08:33:29', '2019-05-23 23:20:54'),
(2, 0, 'The Lomogon 2.5/32 Art Lens', 'https://www.kickstarter.com/projects/lomography/the-lomogon-25-32-art-lens?ref=section-design-tech-projectcollection-tag-newest', 'Гудамжны адал явдлуудыг цахилгаанжуулахын тулд гар хийцийн линз. Lomography-ийн домогт гоо зүйн мэдрэмж нь хамгийн сүүлийн үеийн оптик чанарыг хангасан.', NULL, NULL, NULL, 'Ломогон бол технологийн өндөр, гэрэл гэгээтэй, дурсамжтай объект юм. Зургаан бүлгээс бүрдсэн 6 бүрээстэй линз элементийг бүтээсэн. Lomogon нь гажуудлыг багасгах, микро-эрсдлийг багасгахын тулд оптималь алдааг залруулж, илүү сайн өнгө, аяны шилжилтийг өгдөг. Хамгийн ойрын чиглэлтэй зай нь 0,4 м, та нар хамгийн бага нарийвчлалтай нарийн ширхэгтэй фокус, өндөр нарийвчлалтайгаар барьж чадна. Lomogon нь Canon EF болон Nikon F холболт дээр ажиллах боломжтой. Энэ нь бас Lomography-аас боломжтой адаптеруудтай олон тооны бусад байгууллагатай нийцтэй байх болно.', 'Testing Project', NULL, 'public/img/bg-01.jpg', NULL, 'text', NULL, 'www1', 'www2', 'www3', 'www4', NULL, NULL, NULL, 0, '2019-03-17 11:10:46', '2019-05-08 03:27:02'),
(3, 0, 'Stemoscope, Listen to the Sound of Life', 'https://www.kickstarter.com/projects/1331775203/stemoscope-listen-to-the-sound-of-life?ref=section-design-tech-projectcollection-tag-newest', 'Уламжлал ёсоор бол чагнуур нь зєвхєн эмч нарт зориулж зєвхєн эмнэлгийн євчнийг сонсоход хэрэглэдэг. Гэхдээ иймэрхүү хэрэгслүүд бидэнд илүү их зүйлийг мэдэрч чадна. Дотоод олон дуу чимээ байгаа боловч ажиглагдахгүй байна: Бие махбод, амьтан, ургамлын дуу чимээ. Бидний эргэн тойрон дахь дэлхийн хэмнэлүүд танд гайхаж, баяртай байдаг.\r\n\r\nТиймээс бид бага оврын, овор багатай, хямд, хэрэглэхэд хялбар хангалттай дэвшилтэт утасгүй чагнуурыг Stemoscope хийсэн. Энэ нь танд сонсогдож, хуваалцах, судлах боломжийг олгодог онцлогтой баян програмтай юм', 'Ухаалаг, холбогдсон утасгүй чагнуур нь амьдралын нуугдсан дуу авиа сонсох боломжийг олгодог.', 300000, 150000, 'Чи зүрхэндээ цээж цохиж байгааг мэдэрч байгаадаа сэтгэл догдолж байсан уу? Та төрөөгүй хүүхдийн зүрхний цохилтыг сонсох гайхамшигтай зүйлийг үзсэн үү? Үнэндээ, амьдрал иймэрхүү гайхамшигтай мөчүүдээр дүүрэн байдаг бөгөөд эдүгээ эдгээр үнэт цаг мөчийг тэмдэглэж, хуваалцаж, мөн хадгалж чадна.', NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2019-03-17 11:13:33', '2019-05-23 19:49:22'),
(4, 0, 'MIND KIT: Maker Kit Exclusively for Robotics', 'https://www.kickstarter.com/projects/1090670314/mind-kit-maker-kit-exclusively-for-robotics?ref=section-design-tech-projectcollection-tag-newest', 'Роботууд Дараагийн том платформ байна\r\nMIND KIT бол роботыг эхлүүлэх хамгийн хурдан бөгөөд хамгийн хялбар арга юм. Бид роботыг оновчтой нэг самбарт компьютер, програмчлалын робот (MIND OS), бүх роботын мөрөөдөл, олон нийтийн хэлэлцүүлэг, туслах, дуртай робот хосолсон олон нийтийн форум гэх мэт програм хангамжийн системээр хангадаг. MIND KIT нь бид өөрийн робот бүтээх бүх хэрэгслийг танд өгдөг.', 'Хамгийн романтик, хэрэглэхэд хялбар хөгжүүлэгчийн хэрэгсэл ашиглан робот хий. Роботын хувьд зөвхөн баригдсан. Барилга эхлэх цаг болжээ.', 2000000, 150000, 'Барилгын роботын хөгжилдөх хэсэг нь таны нэмж болох бүх сэрүүн хэсгүүдтэй туршилт хийж байна. Тиймээс та роботыг үнэхээр оновчтой болгохын тулд танд янз бүрийн суурь, мотор, servos, мэдрэгч цэс, цэсийг сонгож аваарай!\r\n\r\nЭдгээр нэмэгдлүүдийг худалдан авахын тулд эхлээд гурван шагналын багцын аль нэгийг сонгоод дараа нь дээрх хүснэгтээс таны нэмсэн нэмэгдлүүдийг сонгож, үнийг нь нийт барьцааны хэмжээгээ нэмнэ үү. Бид таны манифестийг баталж, дараа нь төлбөрийг хүргэх төлбөрийн өөрчлөлтийг цуглуулна.', NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2019-03-17 11:14:00', '2019-03-17 11:14:00'),
(5, 0, 'Пико: Илэрхийлэлтэй бяцхан роботын толгой.', 'https://www.kickstarter.com/projects/ohbot2/picoh-an-expressive-little-robot-head?ref=section-design-tech-projectcollection-tag-category', 'Энгийн хөдөлгөөн, үг хэллэгээс эхлээд бүрэн сүйрсэн хувийн туслах Пико бол кодоор удирддаг хязгааргүй хязгааргүй робот юм.', 'Пико бол програмчлагдах боломжтой робот юм. Тооцоолох, AI болон роботыг судлах хөгжилтэй, бүтээлч арга хэрэгсэл.', 300000, 110000, NULL, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2019-03-17 11:14:10', '2019-03-17 11:14:10'),
(6, 0, 'Little Sophia by Hanson Robotics', 'https://www.kickstarter.com/projects/1240047277/little-sophia-by-hanson-robotics?ref=discovery_tag_category', 'Бяцхан София нь Софиягийн эгч, Хансон роботын гэр бүлийн хамгийн шинэ гишүүн юм. Тэрээр 14 \"өндөр, роботын найз, 8+ насны охид, хөвгүүдийн хувьд адал явдалт зугаа цэнгэл, сэтгэл ханамжийг сурч, сурахад нь тусална.\r\n\r\nБяцхан София алхаж, ярьж, дуулж, тоглоом тоглож, том эгч шиг жүжиглэх боломжтой. Бяцхан Софигийн програм хангамж бүхий Hanson AI академийн хичээлүүдээр дамжуулан тэрээр хүүхдүүдэд зориулсан сургалтын програм хангамж болох хүүхдийн аюулгүй, интерактив, хүний роботын туршлагыг сурч чадна. Хүүхдүүд, сурган хүмүүжүүлэгчид, тэр ч байтугай Софи Роботын фенүүд, наснаас үл хамааран София маш дургүйг олох болно!', 'Роботын бяцхан эгч София, 8-р зууны турш суралцах хамтрагчийн шинэ төрлийн STEM, AI зэрэг шинэ төрлийг танилцуулж байна.', 750000, 652500, NULL, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2019-03-17 11:16:10', '2019-05-07 20:51:09'),
(7, 0, 'Joulescope: Нарийвчлал DC Эрчим хүчний анализатор', NULL, 'Бүтээгдэхүүний хөгжүүлэлтийн үед эрчим хүчний хэрэглээг хэмжих нь ялангуяа зайны цэнэг болон байнгын төхөөрөмжүүдийн хувьд чухал ач холбогдолтой. Гэсэн хэдий ч, эрчим хүчний хэрэглээг зөв тооцоолох нь үнэтэй, төвөгтэй, алдаатай байдаг.', 'Эрчим хүч хэмнэлттэй, илүү үр ашигтай бүтээгдэхүүн үйлдвэрлэх боломжийг танд олгодог хямд, хэрэглэхэд хялбар хэрэгсэл.', 700000, 550000, NULL, NULL, '', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2019-03-17 11:17:03', '2019-03-17 11:17:03'),
(8, 0, 'ner', 'www.google.com', 'text', NULL, 5000000, NULL, NULL, 'Testing Project  admin', 'www.video.com', 'public/imgcause-1.jpg', NULL, 'text text', 'text', 'www1', 'www2', 'www3', 'www4', 'text', '2019-05-01 00:00:00', '2019-06-01 00:00:00', 1, '2019-03-17 11:26:15', '2019-03-27 00:38:31'),
(9, 0, 'ner', NULL, 'tailbar', NULL, 50000, NULL, NULL, NULL, '', 'cause-1.jpg', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2019-03-17 11:43:30', '2019-03-17 11:43:30'),
(10, 0, 'ner', NULL, 'sdf', NULL, 123456, NULL, NULL, NULL, '', 'cause-2.jpg', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2019-03-17 11:44:22', '2019-03-17 11:44:22'),
(11, 0, 'LUFFY SNAKE MAN ep870', 'http://localhost/phpmyadmin/tbl_structure.php?db=dbdev&table=projects', 'algadaa', NULL, 5000, NULL, NULL, NULL, '', 'cause-1.jpg', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2019-03-17 11:45:56', '2019-03-17 11:45:56'),
(12, 0, 'Testing Project', 'www.google.com', 'Testing Project', 'Testing Project', 300000, NULL, NULL, 'Testing Project', 'www.video.com', 'public/img/bg.jpg', NULL, 'Testing Project', 'Testing Project', 'wwww', 'www2', 'www3', 'www4', 'Testing Project', '2019-04-03 00:00:00', '2019-04-30 00:00:00', 1, '2019-03-25 09:22:18', '2019-03-25 09:22:18'),
(13, 0, 'Testing Project  User 5', 'ok.ru/videoembed/1020086258375', 'Testing Project  User 5', 'Testing Project  User 5', 500000, NULL, NULL, 'Testing Project  User 5', 'www.video.com', 'public/imgcause-1.jpg', NULL, 'Testing Project  User 5', 'Testing Project  User 5', 'www1', 'www2', 'www3', 'www4', 'Testing Project  User 5', '2019-03-30 00:00:00', '2019-05-01 00:00:00', 1, '2019-03-27 06:35:03', '2019-03-27 06:35:03'),
(14, 0, 'Testing Project  User 5', 'www.google.com', 'Testing Project  User 5 desc', 'Testing Project  User 5 desc', 50000, 5000, NULL, 'Testing Project  User 5', 'www.video.com', 'public/imgcause-1.jpg', 5, 'Testing Project  User 5 challenge', 'Testing Project  User 5 acc info', 'www1', 'www2', 'www3', 'www4', 'Testing Project  User 5 Owner info', '2019-03-29 00:00:00', '2019-05-01 00:00:00', 0, '2019-03-27 06:39:14', '2019-05-08 02:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `project_detail`
--

CREATE TABLE `project_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `owner` text COLLATE utf8_bin,
  `owner_detail` text COLLATE utf8_bin,
  `total_amount` decimal(10,0) DEFAULT NULL,
  `raised` decimal(10,0) DEFAULT NULL,
  `start_at` datetime DEFAULT NULL,
  `end_at` datetime DEFAULT NULL,
  `url1` text COLLATE utf8_bin,
  `url2` text COLLATE utf8_bin,
  `url3` text COLLATE utf8_bin,
  `url4` text COLLATE utf8_bin,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `username` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `firstname` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `lastname` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `email_verified_at` tinyint(1) DEFAULT '0',
  `is_active` tinyint(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `is_admin`, `username`, `firstname`, `lastname`, `email`, `password`, `email_verified_at`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'useradmin', 'purevsuren', 'batsuuri', 'puujeero@gmail.com', '$2y$10$730awU9Ei0AWfZiAvwKxoefxptMaDbO1CM9vhlTOiOCbdXouQ/c/K', 0, 1, '2019-03-15 06:39:27', '2019-05-23 21:48:23'),
(2, 1, 'Admin', 'Admin', 'admin', 'admin@admin.com', '$2y$10$oFHFudFKo65viME/jRSbtOzXI.ONyIMbZqrECkFs7Rlghy18cyuam', 0, 1, '2019-03-15 21:13:11', '2019-03-15 21:13:11'),
(3, 0, 'username1', 'userfirst', 'userlast', 'user@user.com', '$2y$10$zlE8MGrqtn4qIbgBfoCkb.aPsaFIfL66Yrht1DZ8XGP0gUF1ooFB6', 0, 1, '2019-03-22 21:55:40', '2019-05-23 22:56:31'),
(4, 1, 'newadmin', 'new', 'admin', 'newadmin@admin.com', '$2y$10$d3hoYlZ78676jd9XTzTtMeDzUJTi4KhsM/XA7ZTqgeMFN.wRzBKAW', 0, 1, '2019-03-24 00:19:19', '2019-03-24 00:21:12'),
(5, 0, 'username2', 'firstuser', 'lastuser', 'user2@user.com', '$2y$10$WfWxTJLAMlAoiqpef/Wj5.WNRNdUO3b33qiCNovdi1T/C9FueuwZa', 0, 1, '2019-03-24 00:22:36', '2019-03-24 00:22:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing_detail`
--
ALTER TABLE `billing_detail`
  ADD PRIMARY KEY (`billing_detail_id`);

--
-- Indexes for table `billing_info`
--
ALTER TABLE `billing_info`
  ADD PRIMARY KEY (`billing_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_detail`
--
ALTER TABLE `project_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing_detail`
--
ALTER TABLE `billing_detail`
  MODIFY `billing_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `billing_info`
--
ALTER TABLE `billing_info`
  MODIFY `billing_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `project_detail`
--
ALTER TABLE `project_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
