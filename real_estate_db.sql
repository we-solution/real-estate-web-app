-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 20, 2018 at 07:47 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `user_id`, `name`, `name_en`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'ផ្ទះសំរាប់លក់', 'House for Sale', '1520521084.png', 1, '2018-03-08 07:58:04', '2018-03-08 07:58:04'),
(2, NULL, 1, 'ដីសំរាប់លក់', 'Land for Sale', '1520521096.png', 1, '2018-03-08 07:58:16', '2018-03-08 07:58:16'),
(3, NULL, 1, 'លក់ប្រញ្ញាប់', 'Land Fast Sell', '1527393963.png', 1, '2018-05-26 21:06:03', '2018-05-26 21:06:03'),
(4, 1, 1, 'Test', 'Test', '1529508664.jpg', 1, '2018-06-20 08:31:04', '2018-06-20 08:31:04'),
(5, NULL, 1, 'ព័ត័មាន', 'News', '1529514885.png', 1, '2018-06-20 10:14:45', '2018-06-20 10:14:45'),
(6, NULL, 1, 'ផ្សេងៗ', 'Others', '1529514940.png', 1, '2018-06-20 10:15:40', '2018-06-20 10:15:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_11_000000_create_roles_table', 1),
(18, '2014_10_12_000000_create_users_table', 1),
(19, '2014_10_12_100000_create_password_resets_table', 1),
(20, '2017_11_06_053706_create_categories_table', 1),
(21, '2017_11_07_085348_create_products_table', 1),
(22, '2017_11_26_015112_create_slides_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `cat_id` int(10) UNSIGNED DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  `price` double(8,2) NOT NULL DEFAULT '0.00',
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phones` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `cat_id`, `title`, `title_en`, `images`, `desc`, `desc_en`, `status`, `price`, `latitude`, `longitude`, `phones`, `email`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'បង់រំលស់ការប្រាក់0%រយៈពេល 24ខែ', 'បង់រំលស់ការប្រាក់0%រយៈពេល 24ខែ', '[\"a5hM4z.jpg\",\"yXjLyB.jpg\",\"xmyRtF.jpg\",\"mAWhC8.jpg\"]', 'គម្រោង “ភូមិប្រណិតព្រែកឯង” បញ្ចុះតម្លៃរហូតដល់8% និងទទួលបានកាដូពិសេស\r\nលក្ខខណ្ឌបង់ប្រាក់ងាយៗ\r\n- បង់រំលស់ឥតប្រាក់កក់រយៈពេល 24ខែ\r\n- បង់រំលស់ជាមួយបុរីរហូតដល់ 90%\r\n- បង់រំលស់ជាមួយធនាគារ ដោយអត្រាការប្រាក់ទាបបំផុត\r\nបុរីមានលក់ផ្ទះប្រភេទ ៖\r\n- វីឡាភ្លោះ ទំហំ 6x12m\r\n- វីឡាកូនកាត់ ទំហំ 5.2x12m\r\n- ផ្ទះល្វែងប្រភេទA ទំហំ 4.5x18m\r\n- ផ្ទះល្វែងប្រភេទB ទំហំ 4.5x18m (ផ្លូវមុខក្រោយ)\r\n- ផ្ទះល្វែងប្រភេទC ទំហំ 4.5x16m\r\nមានតម្លៃចាប់ពី $90,000ឡើងទៅ​ និងបញ្ចុះតម្លៃរហូតដល់ 8%\r\nទីតាំងស្ថិតនៅចម្ងាយ5km ពីស្ពានព្រះមុន្នីវង្ស (ជិតផ្សាព្រែកឯង)', 'គម្រោង “ភូមិប្រណិតព្រែកឯង” បញ្ចុះតម្លៃរហូតដល់8% និងទទួលបានកាដូពិសេស\r\nលក្ខខណ្ឌបង់ប្រាក់ងាយៗ\r\n- បង់រំលស់ឥតប្រាក់កក់រយៈពេល 24ខែ\r\n- បង់រំលស់ជាមួយបុរីរហូតដល់ 90%\r\n- បង់រំលស់ជាមួយធនាគារ ដោយអត្រាការប្រាក់ទាបបំផុត\r\nបុរីមានលក់ផ្ទះប្រភេទ ៖\r\n- វីឡាភ្លោះ ទំហំ 6x12m\r\n- វីឡាកូនកាត់ ទំហំ 5.2x12m\r\n- ផ្ទះល្វែងប្រភេទA ទំហំ 4.5x18m\r\n- ផ្ទះល្វែងប្រភេទB ទំហំ 4.5x18m (ផ្លូវមុខក្រោយ)\r\n- ផ្ទះល្វែងប្រភេទC ទំហំ 4.5x16m\r\nមានតម្លៃចាប់ពី $90,000ឡើងទៅ​ និងបញ្ចុះតម្លៃរហូតដល់ 8%\r\nទីតាំងស្ថិតនៅចម្ងាយ5km ពីស្ពានព្រះមុន្នីវង្ស (ជិតផ្សាព្រែកឯង)', 1, 90000.00, '11.5678282', '104.91239949999999', '[\"070 333920\\/ 095 333920\",\"070 333920\\/ 095 333920\"]', '', '2018-03-08 07:59:33', '2018-03-08 07:59:33'),
(2, 1, 1, 'ផ្ទះល្វែង E0, E1 បុរីពិភពថ្មី សាលាមុំ លក់បន្ទាន់ខ្លាំង', 'ផ្ទះល្វែង E0, E1 បុរីពិភពថ្មី សាលាមុំ លក់បន្ទាន់ខ្លាំង', '[\"Ss8aAT.jpg\",\"gqdqWw.jpg\",\"7AlS4g.jpg\",\"MIc15R.jpg\"]', 'ផ្ទះល្វែង E0, E1 ស្ថិតក្នុងបុរីពិភពថ្មី​ បឹងឈូក ត្រូវការលក់បន្ទាន់ខ្លាំង។ \r\n* ទំហំផ្ទះ​ 4ម​ x 16ម។ សល់ដីមុខ​ 4ម​ សល់ដីក្រោយ​ 1.5ម។\r\n* ផ្ទះមាន 2 ជាន់គឺ​ ជាន់ផ្ទាល់ដី​ ជាន់ឡៅតឿ និងជាន់ទី១​។ \r\n* ផ្ទះមាន​ 4 បន្ទប់គេង​ និង​5 បន្ទប់ទឹក។ \r\n*​ ប្លង់រឹង។\r\n* ផ្លូវមុខផ្ទះមានទំហំ 8ម ធំទូលាយ ងាយស្រួលធ្វើដំណើ។\r\n* លក្ខណៈរស់នៅទាន់សម័យ មានសួនច្បារលក្ខណៈធម្មជាតិ ស្រួលរស់នៅ មាន \r\nសុវត្ថិភាព ​និងផាសុខភាព។\r\n*​ លក់បន្ទាន់ខ្លាំងតំលៃក្រោមទីផ្សារត្រឹមតែ 79,900 ដុល្លារ (អាចចរចាបាន)។​ តំលៃនេះបូករួមទាំងការកាត់ឈ្មោះប្លង់រឹង។\r\n*អាចបង់រំលស់តាមធនាគាររយៈពេល25ឆ្នាំបាន តែតំរូវឲ្យបង់30%នៃតំលៃផ្ទះជាមុន។', 'ផ្ទះល្វែង E0, E1 ស្ថិតក្នុងបុរីពិភពថ្មី​ បឹងឈូក ត្រូវការលក់បន្ទាន់ខ្លាំង។ \r\n* ទំហំផ្ទះ​ 4ម​ x 16ម។ សល់ដីមុខ​ 4ម​ សល់ដីក្រោយ​ 1.5ម។\r\n* ផ្ទះមាន 2 ជាន់គឺ​ ជាន់ផ្ទាល់ដី​ ជាន់ឡៅតឿ និងជាន់ទី១​។ \r\n* ផ្ទះមាន​ 4 បន្ទប់គេង​ និង​5 បន្ទប់ទឹក។ \r\n*​ ប្លង់រឹង។\r\n* ផ្លូវមុខផ្ទះមានទំហំ 8ម ធំទូលាយ ងាយស្រួលធ្វើដំណើ។\r\n* លក្ខណៈរស់នៅទាន់សម័យ មានសួនច្បារលក្ខណៈធម្មជាតិ ស្រួលរស់នៅ មាន \r\nសុវត្ថិភាព ​និងផាសុខភាព។\r\n*​ លក់បន្ទាន់ខ្លាំងតំលៃក្រោមទីផ្សារត្រឹមតែ 79,900 ដុល្លារ (អាចចរចាបាន)។​ តំលៃនេះបូករួមទាំងការកាត់ឈ្មោះប្លង់រឹង។\r\n*អាចបង់រំលស់តាមធនាគាររយៈពេល25ឆ្នាំបាន តែតំរូវឲ្យបង់30%នៃតំលៃផ្ទះជាមុន។', 1, 79900.00, '11.568033162708081', '104.91139635382842', '[\"016 54 94 00\",\"092 54 94 00\"]', '', '2018-03-08 08:14:26', '2018-03-08 08:14:26'),
(3, 1, 1, 'វីឡាកូនកាត់ LC1 សេរីថ្មី ក្នុងបុរីប៉េងហ៊ួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង', 'វីឡាកូនកាត់ LC1 សេរីថ្មី ក្នុងបុរីប៉េងហ៊ួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង', '[\"9OgcKp.jpg\",\"Wv2zVo.jpg\",\"TSeBqz.jpg\",\"IxKyjB.jpg\"]', '* វីឡាកូនកាត់ LC1 ក្នុងបុរីប៉េងហ៊ួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង។\r\n*ទំហំផ្ទះ៖ 5ម x 10ម សល់ក្រោយផ្ទះ 3ម សល់មុខផ្ទះ5ម។\r\n* ទំហំដី៖ 5ម x 15ម​។\r\n* មាន 2 បន្ទប់គេង និង 3 បន្ទប់ទឹក។\r\n* ផ្ទះមាន 3 ជាន់គឺ៖ ជាន់ផ្ទាល់ដី និង ជាន់ទី1។\r\n* ផ្ទះស៊េរីថ្មី ស្អាត ផ្ទះបាយ និង បន្ទប់ទទួលភ្ញៀវដាច់ដោយឡែក។\r\n* ផ្លូវមុខផ្ទះមានទំហំ 8ម ធំទូលាយ ងាយស្រួលធ្វើដំណើ និងចតរថយន្ត។\r\n* លក្ខណៈរស់នៅទាន់សម័យ មានសួនច្បារលក្ខណៈធម្មជាតិ ស្រួលរស់នៅ មាន \r\nសុវត្ថិភាព ​និងផាសុខភាព។\r\n* លក់បន្ទាន់ខ្លាំងតំលៃក្រោមទីផ្សារ ត្រឹមតែ 76,000ដុល្លារ។ មានប្លង់បំបែកក្បាលដី អាចធ្វើប្លង់រឹងបាន។\r\n* មានត្រឹមតឺ៥០% អាចចូលរស់នៅបាន។', '* វីឡាកូនកាត់ LC1 ក្នុងបុរីប៉េងហ៊ួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង។\r\n*ទំហំផ្ទះ៖ 5ម x 10ម សល់ក្រោយផ្ទះ 3ម សល់មុខផ្ទះ5ម។\r\n* ទំហំដី៖ 5ម x 15ម​។\r\n* មាន 2 បន្ទប់គេង និង 3 បន្ទប់ទឹក។\r\n* ផ្ទះមាន 3 ជាន់គឺ៖ ជាន់ផ្ទាល់ដី និង ជាន់ទី1។\r\n* ផ្ទះស៊េរីថ្មី ស្អាត ផ្ទះបាយ និង បន្ទប់ទទួលភ្ញៀវដាច់ដោយឡែក។\r\n* ផ្លូវមុខផ្ទះមានទំហំ 8ម ធំទូលាយ ងាយស្រួលធ្វើដំណើ និងចតរថយន្ត។\r\n* លក្ខណៈរស់នៅទាន់សម័យ មានសួនច្បារលក្ខណៈធម្មជាតិ ស្រួលរស់នៅ មាន \r\nសុវត្ថិភាព ​និងផាសុខភាព។\r\n* លក់បន្ទាន់ខ្លាំងតំលៃក្រោមទីផ្សារ ត្រឹមតែ 76,000ដុល្លារ។ មានប្លង់បំបែកក្បាលដី អាចធ្វើប្លង់រឹងបាន។\r\n* មានត្រឹមតឺ៥០% អាចចូលរស់នៅបាន។', 1, 76000.00, '11.567723090860733', '104.90974411307525', '[\"016 245 646\",\"012 245 646\"]', '', '2018-03-09 08:17:52', '2018-03-09 08:17:52'),
(4, 1, 1, 'វីឡាកូនកាត់ខាង LA ក្នុងបុរី ប៉េងហួត បឹងស្នោរ លក់បន្ទាន់ខ្លាំង', 'វីឡាកូនកាត់ខាង LA ក្នុងបុរី ប៉េងហួត បឹងស្នោរ លក់បន្ទាន់ខ្លាំង', '[\"CFe7u0.jpg\",\"6P3LZf.jpg\",\"V6eBaa.jpg\",\"IkywSq.jpg\"]', '* វីឡាកូនកាត់ខាង LA ក្នុងបុរី ប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង។\r\n* ទំហំផ្ទះ៖ 5ម x 15ម សល់ក្រោយផ្ទះ 3ម សល់មុខផ្ទះ5ម​សល់ចំហៀងផ្ទះ 1ម។\r\n* ទំហំដី៖ 6ម x 20ម។\r\n* ប្លង់រឹង។\r\n* ផ្ទះមានបន្ទប់គេងចំនួន 4 បន្ទប់ទឹកចំនួន 5 បន្ទប់ទទួលភ្ញៀវចំនួន 1 និងផ្ទះបាយចំនួន 1។​ \r\n* ផ្ទះមាន 3 ជាន់គឺ៖ ជាន់ផ្ទាល់ដី ជាន់ទី1 និងជាន់ទី2។\r\n* ផ្លូវមុខផ្ទះមានទំហំ 8ម ធំទូលាយ ងាយស្រួលធ្វើដំណើ។\r\n* លក្ខណៈរស់នៅទាន់សម័យ មានសួនច្បារលក្ខណៈធម្មជាតិ ស្រួលរស់នៅ មាន \r\nសុវត្ថិភាព ​និងផាសុខភាព។\r\n* លក់បន្ទាន់តំលៃក្រោមទីផ្សារត្រឹមតែ 145,000 ដុល្លារ (អាចចរចាបាន)។ តំលៃនេះបូករួមទាំងការកាត់ឈ្មោះប្លង់រឹង។ តម្លៃលក់របស់បុរីបច្ចុប្បន្ន 150,000ដុល្លារ ប្លង់ទន់។\r\n* អាចបង់រំលួសរយៈពេល25ឆ្នាំបាន តែតំរូវឲ្យបង់30%នៃតំលៃផ្ទះជាមុន។', '* វីឡាកូនកាត់ខាង LA ក្នុងបុរី ប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង។\r\n* ទំហំផ្ទះ៖ 5ម x 15ម សល់ក្រោយផ្ទះ 3ម សល់មុខផ្ទះ5ម​សល់ចំហៀងផ្ទះ 1ម។\r\n* ទំហំដី៖ 6ម x 20ម។\r\n* ប្លង់រឹង។\r\n* ផ្ទះមានបន្ទប់គេងចំនួន 4 បន្ទប់ទឹកចំនួន 5 បន្ទប់ទទួលភ្ញៀវចំនួន 1 និងផ្ទះបាយចំនួន 1។​ \r\n* ផ្ទះមាន 3 ជាន់គឺ៖ ជាន់ផ្ទាល់ដី ជាន់ទី1 និងជាន់ទី2។\r\n* ផ្លូវមុខផ្ទះមានទំហំ 8ម ធំទូលាយ ងាយស្រួលធ្វើដំណើ។\r\n* លក្ខណៈរស់នៅទាន់សម័យ មានសួនច្បារលក្ខណៈធម្មជាតិ ស្រួលរស់នៅ មាន \r\nសុវត្ថិភាព ​និងផាសុខភាព។\r\n* លក់បន្ទាន់តំលៃក្រោមទីផ្សារត្រឹមតែ 145,000 ដុល្លារ (អាចចរចាបាន)។ តំលៃនេះបូករួមទាំងការកាត់ឈ្មោះប្លង់រឹង។ តម្លៃលក់របស់បុរីបច្ចុប្បន្ន 150,000ដុល្លារ ប្លង់ទន់។\r\n* អាចបង់រំលួសរយៈពេល25ឆ្នាំបាន តែតំរូវឲ្យបង់30%នៃតំលៃផ្ទះជាមុន។', 1, 145000.00, '11.56669301920724', '104.91650864421081', '[\"016 54 94 00\",\"092 54 94 00\"]', '', '2018-03-09 08:21:13', '2018-03-09 08:21:13'),
(5, 1, 1, 'ផ្ទះល្វែង E0, E1,E2 នៅក្បែរ បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង', 'ផ្ទះល្វែង E0, E1,E2 នៅក្បែរ បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង', '[\"ItpCxt.jpg\",\"QkEzN3.jpg\",\"2e4li2.jpg\",\"neIRKV.jpg\"]', 'ផ្ទះល្វែង E0, E1,E2 នៅក្បែរ បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង។\r\n* ទំហំដី 7ម​ x 34ម \r\n* ទំហំផ្ទះ​ 6ម​ x 28ម \r\n* ផ្ទះមាន 3 ជាន់គឺ​ ជាន់ផ្ទាល់ដី​ ជាន់ឡៅតឿ ជាន់ទី១ និង​ជាន់ទី2​។\r\n* ផ្ទះមាន​ 5 បន្ទប់គេង​ និង​5 បន្ទប់ទឹក។\r\n* លក្ខណៈរស់នៅទាន់សម័យ ស្រួលរស់នៅ មានសុវត្ថិភាព ​និងផាសុខភាព។\r\n*​ លក់បន្ទាន់ខ្លាំងតំលៃក្រោមទីផ្សារត្រឹមតែ 270,000 ដុល្លារ (អាចចរចាបាន)។​ \r\n*អាចបង់រំលស់តាមធនាគាររយៈពេល25ឆ្នាំបាន តែតំរូវឲ្យបង់30%នៃតំលៃផ្ទះជាមុន។', 'ផ្ទះល្វែង E0, E1,E2 នៅក្បែរ បុរីប៉េងហួត បឹងស្នោរ ត្រូវការលក់បន្ទាន់ខ្លាំង។\r\n* ទំហំដី 7ម​ x 34ម \r\n* ទំហំផ្ទះ​ 6ម​ x 28ម \r\n* ផ្ទះមាន 3 ជាន់គឺ​ ជាន់ផ្ទាល់ដី​ ជាន់ឡៅតឿ ជាន់ទី១ និង​ជាន់ទី2​។\r\n* ផ្ទះមាន​ 5 បន្ទប់គេង​ និង​5 បន្ទប់ទឹក។\r\n* លក្ខណៈរស់នៅទាន់សម័យ ស្រួលរស់នៅ មានសុវត្ថិភាព ​និងផាសុខភាព។\r\n*​ លក់បន្ទាន់ខ្លាំងតំលៃក្រោមទីផ្សារត្រឹមតែ 270,000 ដុល្លារ (អាចចរចាបាន)។​ \r\n*អាចបង់រំលស់តាមធនាគាររយៈពេល25ឆ្នាំបាន តែតំរូវឲ្យបង់30%នៃតំលៃផ្ទះជាមុន។', 1, 270000.00, '11.567355208562448', '104.9110852175827', '[\"016 54 94 00\",\"016 54 94 00\"]', '', '2018-03-09 08:25:47', '2018-03-09 08:25:47'),
(6, 1, 2, 'កំពុងស្វែងរកដីទ្បូតិ៍ទិញទុកបើកអាជីវកម្មមែនទេ', 'កំពុងស្វែងរកដីទ្បូតិ៍ទិញទុកបើកអាជីវកម្មមែនទេ', '[\"hrQvAE.jpg\",\"QkYHHm.jpg\",\"oFMdzx.jpg\",\"BqLuzc.jpg\"]', 'ដីទ្បូតិ៍ពុះឡូតិ៍លក់អាចបើកអាជីវកម្មបាន\r\n\r\n5m x 30m = 6,800$ \r\n15m x 30m= 20,000$\r\n-ដីកែងជាប់ក្លោងទ្វារវត្ដកោះអណ្ដែត\r\n-ខាងត្បូងផ្សារបែកចាន 3km \r\n-នៅជិតផ្ទះល្វែងហូររុងរឿង \r\n-ទល់មុខរោងចក្រកាត់ដេរ \r\n-មានទឹក ភ្លើងរដ្ធ លូ ជាស្រេច', 'ដីទ្បូតិ៍ពុះឡូតិ៍លក់អាចបើកអាជីវកម្មបាន\r\n\r\n5m x 30m = 6,800$ \r\n15m x 30m= 20,000$\r\n-ដីកែងជាប់ក្លោងទ្វារវត្ដកោះអណ្ដែត\r\n-ខាងត្បូងផ្សារបែកចាន 3km \r\n-នៅជិតផ្ទះល្វែងហូររុងរឿង \r\n-ទល់មុខរោងចក្រកាត់ដេរ \r\n-មានទឹក ភ្លើងរដ្ធ លូ ជាស្រេច', 1, 6800.00, '11.567081924256485', '104.9101303511734', '[\"096 2009 800\",\"096 2009 800\"]', '', '2018-03-09 08:40:16', '2018-03-09 08:40:16'),
(7, 1, 2, 'ដីកែង 30x40 ជិតបុរីពិភពថ្មីផ្សារឈូកមាស លក់បន្ទាន់ខ្លាំង', 'ដីកែង 30x40 ជិតបុរីពិភពថ្មីផ្សារឈូកមាស លក់បន្ទាន់ខ្លាំង', '[\"Wt1cOn.jpg\",\"jFZIyz.jpg\",\"Cyahvx.jpg\",\"vcdMGn.jpg\"]', '*ដីកែង ជិតបុរីពិភពថ្មីផ្សារឈូកមាស លក់បន្ទាន់ខ្លាំង។\r\n*ទំហំដី ៖ 30មx40ម។\r\n​*ប្លង់រឹង។\r\n*តំលៃ៖ 650 ដុល្លារ ក្នុង1ម៉ែត្រការ៉េ (អាចចរចាបាន)។ តម្លៃនេះបូករួមទាំងការផ្ទេឈ្មោះកម្មសិទ្ធិប្លង់រឹង។\r\n* ផ្លូវមានទំហំ 8ម ធំទូលាយ ងាយស្រួលធ្វើដំណើ។\r\n*ដីធំស្មើស្អាត ទីតាំងល្អ អាធ្វើវីឡា ឃ្លាំង ឬអគារពាណិជ្ជកម្ម។\r\n*អាចបង់រំលស់តាមធនាគាររយៈពេល20ឆ្នាំបាន តែតំរូវឲ្យបង់30%នៃតំលៃផ្ទះជាមុន។', '*ដីកែង ជិតបុរីពិភពថ្មីផ្សារឈូកមាស លក់បន្ទាន់ខ្លាំង។\r\n*ទំហំដី ៖ 30មx40ម។\r\n​*ប្លង់រឹង។\r\n*តំលៃ៖ 650 ដុល្លារ ក្នុង1ម៉ែត្រការ៉េ (អាចចរចាបាន)។ តម្លៃនេះបូករួមទាំងការផ្ទេឈ្មោះកម្មសិទ្ធិប្លង់រឹង។\r\n* ផ្លូវមានទំហំ 8ម ធំទូលាយ ងាយស្រួលធ្វើដំណើ។\r\n*ដីធំស្មើស្អាត ទីតាំងល្អ អាធ្វើវីឡា ឃ្លាំង ឬអគារពាណិជ្ជកម្ម។\r\n*អាចបង់រំលស់តាមធនាគាររយៈពេល20ឆ្នាំបាន តែតំរូវឲ្យបង់30%នៃតំលៃផ្ទះជាមុន។', 1, 650.00, '11.567728346318631', '104.91456672488403', '[\"016 245 646\",\"016 245 646\"]', '', '2018-03-09 08:42:26', '2018-03-09 08:42:26'),
(8, 1, 1, 'ដីលក់បន្ទាន់នៅសង្កាត់កំបូល - ម្ចាស់ដីផ្ទាល់', 'ដីលក់បន្ទាន់នៅសង្កាត់កំបូល - ម្ចាស់ដីផ្ទាល់', '[\"H5eQkl.jpg\",\"T9xsZ4.jpg\",\"5GDnBW.jpg\",\"O65dtD.jpg\"]', 'ដីលក់បន្ទាន់នៅសង្កាត់កំបូល ខណ្ឌពេាធិ៍សែនជយ័​ \r\nទំហំ៖ 43946 ម៉ែត្រការ៉េ\r\nតំលៃ៖ 180$/ម៉ែត្រការ៉េ ចរចាបាន\r\nដីមាននីវ៉ូខ្ពស់ដូចនេះមិនចាំបាច់ចាក់ដីនេាះទេ មានទឺក មានភ្លើង មានផ្លូវបេតុងខ្វាត់ខែ្វង ជាតំបន់ទីប្រជំុជន មានផ្សារ មានរេាងចក្រ តំបន់សេដ្ធិកិច្ជពិសេសដែលមានរេាងចក្រកូកាកូឡា រេាងចក្រធំៗរបស់ក្រុមហ៊ុនជប៉ុនជាច្រេីន និងមានសំណង់ផ្ទះល្វែងកំពុងធ្វើរដាក់លក់ជាបន្តបន្ទាប់៕ ដីនេះល្អអាចវិនិយេាគសាងសង់ជាបុរី រេាងចក្រ ផែរស្ងួត ឬ ជាកន្លែងកម្សានផ្សេងៗ ៕', 'ដីលក់បន្ទាន់នៅសង្កាត់កំបូល ខណ្ឌពេាធិ៍សែនជយ័​ \r\nទំហំ៖ 43946 ម៉ែត្រការ៉េ\r\nតំលៃ៖ 180$/ម៉ែត្រការ៉េ ចរចាបាន\r\nដីមាននីវ៉ូខ្ពស់ដូចនេះមិនចាំបាច់ចាក់ដីនេាះទេ មានទឺក មានភ្លើង មានផ្លូវបេតុងខ្វាត់ខែ្វង ជាតំបន់ទីប្រជំុជន មានផ្សារ មានរេាងចក្រ តំបន់សេដ្ធិកិច្ជពិសេសដែលមានរេាងចក្រកូកាកូឡា រេាងចក្រធំៗរបស់ក្រុមហ៊ុនជប៉ុនជាច្រេីន និងមានសំណង់ផ្ទះល្វែងកំពុងធ្វើរដាក់លក់ជាបន្តបន្ទាប់៕ ដីនេះល្អអាចវិនិយេាគសាងសង់ជាបុរី រេាងចក្រ ផែរស្ងួត ឬ ជាកន្លែងកម្សានផ្សេងៗ ៕', 1, 180.00, '11.568175059879593', '104.9100042873497', '[\"011 898 006\",\"011 898 006\"]', '', '2018-03-09 08:45:06', '2018-03-09 08:45:06'),
(9, 1, 2, 'ដីលក់បន្ទាន់នៅខេត្តកំពង់ស្ពឺ', 'ដីលក់បន្ទាន់នៅខេត្តកំពង់ស្ពឺ', '[\"W4Az0y.jpg\",\"q4W5hX.jpg\",\"fq0Dd2.jpg\",\"TJukxM.jpg\"]', 'ដីលក់បន្ទាន់នៅខេត្តកំពង់ស្ពឺ\r\n– តំលៃ : 38$/ម៉ែត្រការ៉េ ចរចាបាន\r\n– ទីតាំងស្ថិតនៅ: ស្រុកសំរោងទង ខេត្តកំពង់ស្ពឺ\r\n– ទំហំដី: 5​ហិចតា​ + 723ម៉ែត្រការ៉េ\r\n– ប្លង់: រឹង\r\n– ពិព៍រនា : ទីតាំងដីនេះមានចំងាយពីផ្លូវជាតិលេខ៤ ផ្សារថ្នល់ទទឹង 5 គីឡូម៉ែត្រ នឹង ជាខ្សែផ្លូវចន្លោះរវាង ផ្លូវជាតិលេខ 4 និងផ្លូវជាតិលេខ 5។ ជាតំបន់កំពុងអភិវឌ្ឍន៍ខ្លាំង រោងចក្រ គំរោងសាងសង់ផ្ទះ និងគំរោងដីពុះឡូន៍លក់។\r\nសំរាប់ពត៍មានបន្ថែមសូមខលមកលេខៈ 015 777 586/011 898 006 / 096 492 8888\r\nឬ អុីមែល : info.epiagency@gmail.com\r\nវេបសាយ​ : easypropertyrealty.com\r\nហ្វេសបុក : Easy Property Investment', 'ដីលក់បន្ទាន់នៅខេត្តកំពង់ស្ពឺ\r\n– តំលៃ : 38$/ម៉ែត្រការ៉េ ចរចាបាន\r\n– ទីតាំងស្ថិតនៅ: ស្រុកសំរោងទង ខេត្តកំពង់ស្ពឺ\r\n– ទំហំដី: 5​ហិចតា​ + 723ម៉ែត្រការ៉េ\r\n– ប្លង់: រឹង\r\n– ពិព៍រនា : ទីតាំងដីនេះមានចំងាយពីផ្លូវជាតិលេខ៤ ផ្សារថ្នល់ទទឹង 5 គីឡូម៉ែត្រ នឹង ជាខ្សែផ្លូវចន្លោះរវាង ផ្លូវជាតិលេខ 4 និងផ្លូវជាតិលេខ 5។ ជាតំបន់កំពុងអភិវឌ្ឍន៍ខ្លាំង រោងចក្រ គំរោងសាងសង់ផ្ទះ និងគំរោងដីពុះឡូន៍លក់។\r\nសំរាប់ពត៍មានបន្ថែមសូមខលមកលេខៈ 015 777 586/011 898 006 / 096 492 8888\r\nឬ អុីមែល : info.epiagency@gmail.com\r\nវេបសាយ​ : easypropertyrealty.com\r\nហ្វេសបុក : Easy Property Investment', 1, 38.00, '11.5678282', '104.91239949999999', '[\"015 777 586\",\"015 777 586\"]', '', '2018-03-09 08:47:40', '2018-03-09 08:47:40'),
(10, 1, 1, 'ដីពុះឡូត៏ថ្មី វាលស្បូវ ព្រែកឯង ភ្នំពេញ (តម្លៃធូរថ្លៃ) !!!', 'ដីពុះឡូត៏ថ្មី វាលស្បូវ ព្រែកឯង ភ្នំពេញ (តម្លៃធូរថ្លៃ) !!!', '[\"uCzdF1.jpg\",\"YCZABb.jpg\",\"B5yTvf.jpg\",\"QGDlv8.jpg\"]', 'ដីពុះឡូត៏ថ្មី នៅវាលស្បូវ ព្រែកឯង ក្រុងភ្នំពេញ !!!\r\n..... ចាប់ពី 9700$ / ឡូតិ៏ > ទំហំ 4.5m x 15m\r\n... ចាប់ពី 11500$ / ឡូតិ៏ > ទំហំ 4.5m x 16m\r\n... ចាប់ពី 15000$ / ឡូតិ៏ > ទំហំ 5m x 20m\r\n... ចាប់ពី 34000$ / ឡូតិ៏ > ទំហំ 10m x 20m\r\n-បង់ផ្តាច់ ឬបង់រំលស់ ពី1ទៅ5ឆ្នាំ តាមចិត្តអតិថិជន\r\n-មានប្រព័ន្ធភ្លើងរដ្ឋ, ផ្លូវបេតុង, ទឹកស្អាត និងលូបង្ហូរ\r\n-ទីតាំងដី៖ សង្កាត់វាលស្បូវ ខ័ណ្ឌច្បារអំពៅ រាជធានីភ្នំពេញ (2kmពីបុរីប៉េងហ៊ួត និងជិតផ្សារព្រែកឯង)។', 'ដីពុះឡូត៏ថ្មី នៅវាលស្បូវ ព្រែកឯង ក្រុងភ្នំពេញ !!!\r\n..... ចាប់ពី 9700$ / ឡូតិ៏ > ទំហំ 4.5m x 15m\r\n... ចាប់ពី 11500$ / ឡូតិ៏ > ទំហំ 4.5m x 16m\r\n... ចាប់ពី 15000$ / ឡូតិ៏ > ទំហំ 5m x 20m\r\n... ចាប់ពី 34000$ / ឡូតិ៏ > ទំហំ 10m x 20m\r\n-បង់ផ្តាច់ ឬបង់រំលស់ ពី1ទៅ5ឆ្នាំ តាមចិត្តអតិថិជន\r\n-មានប្រព័ន្ធភ្លើងរដ្ឋ, ផ្លូវបេតុង, ទឹកស្អាត និងលូបង្ហូរ\r\n-ទីតាំងដី៖ សង្កាត់វាលស្បូវ ខ័ណ្ឌច្បារអំពៅ រាជធានីភ្នំពេញ (2kmពីបុរីប៉េងហ៊ួត និងជិតផ្សារព្រែកឯង)។', 1, 9700.00, '11.56709243519626', '104.91023763953399', '[\"015 799 133\",\"015 799 133\"]', '', '2018-03-09 08:49:36', '2018-03-09 08:49:36'),
(11, 1, 2, 'Land for Sale near Siem Reap International Airport', 'Land for Sale near Siem Reap International Airport', '[\"xdPWLx.jpg\",\"Rh6Dnz.jpg\",\"R2BDUI.jpg\",\"aVFSi7.jpg\"]', 'Land for Sale near Siem Reap International Airport \r\n- Land size: 34 hectares\r\n- Asking price: USD 3,400,000\r\n- Very good location for all kinds of development project and investment \r\n- 5km from Siem Reap Airport, Sangkat Krabei Riel,', 'Land for Sale near Siem Reap International Airport \r\n- Land size: 34 hectares\r\n- Asking price: USD 3,400,000\r\n- Very good location for all kinds of development project and investment \r\n- 5km from Siem Reap Airport, Sangkat Krabei Riel,', 1, 34000.00, '11.5678282', '104.91239949999999', '[\"070 9999 44\",\"070 9999 44\"]', '', '2018-03-09 08:51:44', '2018-03-09 08:51:44'),
(12, 1, 2, 'ដីលក់បន្ទាន់ ម្ចាស់ត្រូវកាលុយ', 'ដីលក់បន្ទាន់ ម្ចាស់ត្រូវកាលុយ', '[\"DOMbJS.jpg\",\"04NAzw.jpg\",\"jFHmfU.jpg\",\"S8TxJd.jpg\"]', 'ដីស្វាយ លក់បន្ទាន់ទុំហំដី15m×400m ដីចុះពីថ្នល់ជាតិ មួយគីឡូម៉ែត ជាប់ផ្លូវលំធំទូលាយ ដាំស្វាយបានជាងពីរយដើម ផ្លែបានផល់បីឆ្នាំហើយ លក់ 40000$ ស្ថិតនៅឃុំត្រើយស្លា ស្រុកស្អាង ខេត្តកណ្តាល', 'ដីស្វាយ លក់បន្ទាន់ទុំហំដី15m×400m ដីចុះពីថ្នល់ជាតិ មួយគីឡូម៉ែត ជាប់ផ្លូវលំធំទូលាយ ដាំស្វាយបានជាងពីរយដើម ផ្លែបានផល់បីឆ្នាំហើយ លក់ 40000$ ស្ថិតនៅឃុំត្រើយស្លា ស្រុកស្អាង ខេត្តកណ្តាល', 1, 40000.00, '11.567607470761947', '104.91082236109924', '[\"015330754\",\"015330754\"]', '', '2018-03-09 09:18:08', '2018-03-09 09:18:08'),
(13, 1, 1, 'ដីលក់ ​ជួល ក្បែររោងចក្រស្ទឹងមានជ័យ', 'ដីលក់ ​ជួល ក្បែររោងចក្រស្ទឹងមានជ័យ', '[\"NrPuco.jpg\",\"8M7dNx.jpg\",\"xlBlgi.jpg\",\"HZad5C.jpg\"]', 'ដីលក់ រឺជួល អាចសង់បន្ទប់ជួលបាន ក្បែររោងចក្រ\r\nទំហំដី : 24m x 31m ផ្លូវបេតុង តំលៃ 535$/ម2\r\nទីតាំងនៅជិតរោងចក្រភូមិឫស្សីប្រហែល 50ម សង្កាត់ស្ទឹងមានជ័យ ខ មានជ័យ ភ្នំពេញ។ (ចុះតាមផ្លូវជាប់សាំងតេឡាហួសបុរីប៉េងហួតប៉ុស្ត៌វិទ្យុប្រហែល200មតាមផ្លូវឆ្ពោះទៅចំការដូង', 'ដីលក់ រឺជួល អាចសង់បន្ទប់ជួលបាន ក្បែររោងចក្រ\r\nទំហំដី : 24m x 31m ផ្លូវបេតុង តំលៃ 535$/ម2\r\nទីតាំងនៅជិតរោងចក្រភូមិឫស្សីប្រហែល 50ម សង្កាត់ស្ទឹងមានជ័យ ខ មានជ័យ ភ្នំពេញ។ (ចុះតាមផ្លូវជាប់សាំងតេឡាហួសបុរីប៉េងហួតប៉ុស្ត៌វិទ្យុប្រហែល200មតាមផ្លូវឆ្ពោះទៅចំការដូង', 1, 398500.00, '11.567507617001827', '104.91060241996001', '[\"09876543\",\"09876543\"]', '', '2018-03-09 09:19:49', '2018-03-09 09:19:49'),
(14, 1, 2, 'ដីលក់ ជួល តាមផ្លូវឫស្ស៊ី អាស៊ីអគ្នេយ៌', 'ដីលក់ ជួល តាមផ្លូវឫស្ស៊ី អាស៊ីអគ្នេយ៌', '[\"shAJsB.jpg\",\"Yr9DcF.jpg\",\"qa1QHS.jpg\",\"N2BY5J.jpg\"]', 'ដីទំហំ 29.5 x 29.5 នៅលើដីមាន 10 បន្ទប់ជួលស្រាប់ ស្តិតនៅ ក្រោយអាគារពាណិជ្ជកម្មអេដវូដ ទឹកថ្លា ខាងលិចប៉ុស្តិ៏ួទូរទស្សន៏អាស៊ីអាគ្នេយ៏ ឬ ស្តុុបដីហុយ ប្រហែល 500ម ​ឬពីផ្លូវឫស្ស៊ីប្រហែល200ម ។', 'ដីទំហំ 29.5 x 29.5 នៅលើដីមាន 10 បន្ទប់ជួលស្រាប់ ស្តិតនៅ ក្រោយអាគារពាណិជ្ជកម្មអេដវូដ ទឹកថ្លា ខាងលិចប៉ុស្តិ៏ួទូរទស្សន៏អាស៊ីអាគ្នេយ៏ ឬ ស្តុុបដីហុយ ប្រហែល 500ម ​ឬពីផ្លូវឫស្ស៊ីប្រហែល200ម ។', 1, 595000.00, '11.567759879063978', '104.90961268483352', '[\"0908756432\",\"09876543\"]', '', '2018-03-09 09:21:31', '2018-03-09 09:21:31'),
(15, 1, 1, 'Land for Urgent sale Below market price ( Tuol Tom Poung )', 'Land for Urgent sale Below market price ( Tuol Tom Poung )', '[\"IM4OO4.jpg\",\"QYo2Il.jpg\",\"gqAuwl.jpg\",\"bOKPBG.jpg\"]', 'ដីលក់ប្រញាប់តំម្លៃក្រោមទីផ្សារ\r\n* ទំហំដី : 15 m x 25 m ( 375 m2) , \r\n* ទំហំផ្លូវ : ​8m , ដីដែលមានឃ្លាំងស្រាប់អាចដាក់ជួលបាន, ប្លង់ទន់ ,មានអគ្គិសនីនិងទឹក: អាចប្រើប្រាស់បាន\r\n* គោលបំណង : សម្រាប់ទិញទុកចំណេញ , ធ្វើជាឃ្លាំស្្តប់ឥវ៉ាន់ផ្ទាល់ខ្លួន \r\n* តម្លៃ លក់ : 475000 ( ចរចារ)\r\n* ទីតាំងស្ថិតនៅ ផ្លូវ ៤៧២ ក្រុម ៣ ភូមិ ១ សង្កាត់ទួលទំពូងទី១ ខណ្ឌចំការមន \r\n* ទំនាក់ទំនង : 012 387 108 ( 24-h/week)', 'Land for Urgent sale at Below market price\r\n* Land size: 15 m x 25 m (375 m2),\r\n* Road size: 8m, available land available, soft title, Electricity & water: available to use already\r\n* Goal: buy a profit, to keep your personal belongings\r\n* Sale price: 475000 (Negotiable)\r\n* Street 472, Group 3, Village 1, Sangkat Toul Tum Poung I, Khan Chamkar Morn\r\n* Contact: 012 387 108 (24-h / week)', 1, 475000.00, '11.567376230421097', '104.91013571559142', '[\"09876543\",\"098765409\"]', '', '2018-03-09 09:24:00', '2018-03-09 09:24:00'),
(16, 1, 1, 'លក់ដីមួយឡូត៍', 'Land for sale part', '[\"iDh8ld.jpg\",\"Gc2PLD.jpg\",\"rHO2Xx.jpg\",\"C05m0V.jpg\"]', 'សួស្តីអតិថិជនទាំងអស់គ្នា ខ្ញុំចង់លក់ដីឡូត៍មួយកន្លែង. ទំហំ. 5*20m ស្ថិតនៅ សង្កាត់ពន្សាំង\r\nខ័ណ្ណព្រែកព្នៅ រាជធានីភ្នំពេញ នៅជិតបឹងកប់ស្រូវ ជាប្រភេទដីលេខមួយ ។', 'សួស្តីអតិថិជនទាំងអស់គ្នា ខ្ញុំចង់លក់ដីឡូត៍មួយកន្លែង. ទំហំ. 5*20m ស្ថិតនៅ សង្កាត់ពន្សាំង\r\nខ័ណ្ណព្រែកព្នៅ រាជធានីភ្នំពេញ នៅជិតបឹងកប់ស្រូវ ជាប្រភេទដីលេខមួយ ។', 1, 7300.00, '11.567565427077817', '104.91038784323882', '[\"098 48 68 32\",\"098 48 68 32\"]', '', '2018-03-09 09:25:31', '2018-03-09 09:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `user_id`, `title`, `title_en`, `desc`, `desc_en`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'ភ្នំពេញ បង្ហាញពីអាគារ', 'Phnom Penh shows building', 'អារគារ​ ទាំងអស់', 'All building', '1520608111.jpg', 1, '2018-03-09 08:08:31', '2018-03-09 08:08:31'),
(2, 1, 'ផ្ទះល្អ', 'Condo', 'ផ្ទះល្អនៅកម្ពុជា', 'Home is very good for living', '1520608437.jpg', 1, '2018-03-09 08:13:57', '2018-03-09 08:13:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Admin', 'admin@gmail.com', '$2y$10$K4ZP/bO5bkFo0xY1eHI8EuByCXG/LZddStuFGkED8dwOU815WsTzi', 'agMfEp9WJ2wVxS3XZyA5OQDpxC1bJSxYEVZOnqsU6dWIjF5gA2GOb6yCh96E', '2018-03-08 07:56:30', '2018-03-08 07:56:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slides_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `slides`
--
ALTER TABLE `slides`
  ADD CONSTRAINT `slides_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
