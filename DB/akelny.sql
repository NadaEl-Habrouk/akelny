-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12 مايو 2023 الساعة 15:12
-- إصدار الخادم: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akelny`
--

-- --------------------------------------------------------

--
-- بنية الجدول `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `message` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `contact`
--

INSERT INTO `contact` (`contact_id`, `user_name`, `email`, `phone`, `message`, `user_id`) VALUES
(1, 'ahmed saad', 'ahmedsaad67@gmail.com', '01154003369', 'i have a problem in my account , i could not see many of meals ', 3);

-- --------------------------------------------------------

--
-- بنية الجدول `feedback`
--

CREATE TABLE `feedback` (
  `fb_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `feedback`
--

INSERT INTO `feedback` (`fb_id`, `email`, `message`, `user_id`) VALUES
(12, 'alaaali@gmail.com', 'the food is very good', 2),
(13, 'nadasaad5000@gmail.com', 'the restaurant is beautiful', 1),
(14, 'alaaali@gmail.com', 'this is good', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `menu`
--

CREATE TABLE `menu` (
  `meal_id` int(11) NOT NULL,
  `meal_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `ingredients` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `menu`
--

INSERT INTO `menu` (`meal_id`, `meal_name`, `image`, `price`, `ingredients`) VALUES
(1, 'Margherita pizza \r\n', 'https://dashboard.supermama.me/photos/93984/5e728595895d2.jpg\n', 50, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(2, 'Meat pizza', 'https://dashboard.supermama.me/photos/93984/5e7285fc97245.png\n', 65, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(3, 'Mexican Taco Pizza', 'https://www.tareekaa.com/wp-content/uploads/2017/11/%D8%A8%D9%8A%D8%AA%D8%B2%D8%A7-%D8%A7%D9%84%D8%AA%D8%A7%D9%83%D9%88-%D8%A7%D9%84%D9%85%D9%83%D8%B3%D9%8A%D9%83%D9%8A%D8%A9-300x223.jpg\n', 75, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(4, 'chicken & BBQ pizza\r\n', 'https://dashboard.supermama.me/photos/93984/5e7285c075385.jpg\n', 57, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(5, 'pepperoni pizza\r\n', 'https://dashboard.supermama.me/photos/93984/5e72862ed42f1.jpg\n', 53, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(6, 'Grilled fish fillet\r\n ', 'https://cdn.altibbi.com/cdn/cache/1000x500/image/2019/05/19/9107fb81d62371906e6fde2c64af0345.png.webp', 100, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(7, 'Sinjar fish', 'https://www.mosoah.com/wp-content/uploads/2017/08/Fish-of-Siberia-640x360.jpg\n', 120, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(8, 'Grilled fish', 'https://i0.wp.com/www.tareekaa.com/wp-content/uploads/2016/11/14639656_10154658604896584_2255240727605895228_n.jpg?zoom=2\n', 90, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(9, 'Fish fillet\r\n', 'https://kitchen.sayidaty.net/uploads/small/0d/0df5114febb67ebc804053b945324672_w750_h500.jpg\n', 97, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(11, 'Pasta with cheese\r\n', 'https://kitchen.sayidaty.net/uploads/node/tortillini.jpg\n', 80, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(12, 'lasagna bolognese', 'https://www.atyabtabkha.com/tachyon/sites/2/2021/12/a27b7183dcc9979d8a3afff9adb995951968d0fb.jpg', 90, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(13, 'cacio e pepe', 'https://www.atyabtabkha.com/tachyon/sites/2/2021/12/d83b1a902cdc955d84ccb4c471fbd1a9864c3f2f.jpg', 150, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(14, 'Pasta norma', 'https://www.atyabtabkha.com/tachyon/sites/2/2021/12/2ef69679eba96f574a6b536844217171472ea5b3.jpg', 130, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(15, 'Pasta with red sauce', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzL2v6Vl_3HUMBH9FULrC6NkdUHLynq0_EHQ&usqp=CAU', 70, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(16, 'Meat Casserole', 'https://media.istockphoto.com/id/1182078062/photo/beef-meat-stew.jpg?s=612x612&w=0&k=20&c=mDNzg3eYnBLc1hwi7ZwVgNvwv9rtA2DP-ANwe8Q5e2Q=', 450, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(17, 'Meat With Onions\r\n ', 'https://shamlola.s3.amazonaws.com/Shamlola_Images/7/src/f088addbed1579c9134df349f95dac05eb6ab5c6.jpg', 390, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(18, 'Meatballs with Potatoes\r\n', 'https://kitchen.sayidaty.net/uploads/small/5c/5cb2d056eb75c386c2adbab612345b35_w750_h500.jpg', 400, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(19, 'Meat Stuffed ', 'https://1.bp.blogspot.com/-uItzHRbSeVs/Vc0rGpeyvEI/AAAAAAAAAqU/Lel2iaQ4-HY/s1600/%25D8%25B7%25D8%25B1%25D9%258A%25D9%2582%25D8%25A9-%25D8%25B9%25D9%2585%25D9%2584-%25D9%2584%25D8%25AD%25D9%2585-%25D9%2585%25D8%25AD%25D8%25B4%25D9%2588-%25D8%25A8%25D8%25A7', 350, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(20, 'Grilled Beef With Sauce\r\n', 'https://th.bing.com/th/id/R.62797e58ccc7c657546c9945f90585c4?rik=20Bm0PCBsEXpSg&pid=ImgRaw&r=0', 430, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(21, 'Grilled Chicken', 'https://th.bing.com/th/id/R.1a083af66966377d41fbeb66ec1c533a?rik=yNKSort161HgWg&pid=ImgRaw&r=0', 120, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(22, 'Chicken Fajitas', 'https://www.tareekaa.com/wp-content/uploads/2015/02/%D9%81%D8%A7%D9%87%D9%8A%D8%AA%D8%A7-%D8%A7%D9%84%D8%AF%D8%AC%D8%A7%D8%AC.jpg', 160, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(23, 'Chicken Pane\r\n ', 'https://rjeem.com/wp-content/uploads/2019/07/%D8%A8%D8%A7%D9%86%D9%8A%D9%87-%D8%A7%D9%84%D8%AF%D8%AC%D8%A7%D8%AC-%D8%A8%D8%A7%D9%84%D8%A8%D9%82%D8%B3%D9%85%D8%A7%D8%B7.jpg', 130, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(24, 'Crispy Chicken\r\n', 'https://bloximages.chicago2.vip.townnews.com/niagara-gazette.com/content/tncms/assets/v3/editorial/b/d0/bd0e4dc2-3aab-59e8-8c5b-9a1bdc44c6c8/53ed6540bc081.image.jpg?resize=990%2C683', 150, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(25, 'chinese Chicken \r\n', 'https://www.tareekaa.com/wp-content/uploads/2015/04/%D8%A7%D9%84%D8%AF%D8%AC%D8%A7%D8%AC-%D8%A7%D9%84%D8%B5%D9%8A%D9%86%D9%8A-%D8%A8%D8%A7%D9%84%D8%AE%D8%B6%D8%B1%D8%A7%D9%88%D8%A7%D8%AA.jpg', 200, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(26, 'Tea\r\n ', 'http://t0.gstatic.com/images?q=tbn:ANd9GcSPTMKifi6JCKYpvPi9mqq2PZ0DT4NCfVPVHDIficVaIIXEl37q', 20, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(27, 'Green Tea\r\n', 'https://www.verywellhealth.com/thmb/-UMMhHnHTTzvD21bDOyWugU-EBM=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-970151326-6f625e48ee894f84bb70e76f9c84cf95.jpg', 25, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(28, 'Strawberry Daiquiri\r\n', 'https://rusticfamilyrecipes.com/wp-content/uploads/2022/06/Frozen-Strawberry-Daiquiri-07sq.jpg', 15, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(29, 'Italian Amaretto ', 'https://www.platingsandpairings.com/wp-content/uploads/2019/07/italian-margaritas-10-480x270.jpg', 36, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(30, 'Coffe\r\n ', 'https://media.gemini.media/img/Medium/2018/6/23/2018_6_23_12_20_34_515.jpg', 35, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(31, 'Millk Coffe', 'https://www.acouplecooks.com/wp-content/uploads/2021/09/Almond-Milk-Coffee-001.jpg', 45, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n\r\n'),
(36, 'PIZZAS\r\n\r\n', 'https://guardian.ng/wp-content/uploads/2019/07/different-types-of-pizza-974x648.jpg', 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n'),
(37, 'FISH\r\n\r\n', 'https://c.ndtvimg.com/2021-02/gsq3frgg_fish-fry_625x300_10_February_21.jpg', 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n'),
(38, 'PASTA\r\n\r\n', 'https://www.eatthis.com/wp-content/uploads/sites/4/2021/11/spaghetti.jpg?quality=82&strip=1', 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n'),
(39, 'MEATS\r\n\r\n', 'https://media.istockphoto.com/id/1050993738/photo/two-grilled-marbled-beef-steaks-striploin-with-spices-isolated-on-white-background-top-view.jpg?s=612x612&w=0&k=20&c=ffde7_Ry-YeeLUT4fDZXDowiPSJerVknzYy3QIQBDVE=', 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n'),
(40, 'CHICKEN MEALS\r\n\r\n', 'https://www.justfood.tv/userfiles/image/0chicken%20greek02.jpg', 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n'),
(41, 'DRINKS', 'https://m.media-amazon.com/images/I/61q4PpYPbhL._AC_UF894,1000_QL80_FMwebp_.jpg', 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, explicabo.\r\n');

-- --------------------------------------------------------

--
-- بنية الجدول `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `meal_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `order`
--

INSERT INTO `order` (`order_id`, `user_name`, `address`, `phone`, `meal_name`, `user_id`) VALUES
(17, 'Nada saad', 'damnhour', '012233604520', 'pepperoni pizza', 1),
(18, 'Nada saad', 'damnhour', '012233604520', ' chicken & BBQ pizza', 1),
(19, 'Nada saad', 'damnhour', '012233604520', ' chicken & BBQ pizza', 1),
(20, 'Nada saad', 'damnhour', '012233604520', 'pepperoni pizza', 1),
(21, 'Nada saad', 'damnhour', '012233604520', 'pepperoni pizza', 1),
(22, 'Nada saad', 'damnhour', '012233604520', 'pepperoni pizza and chicken & BBQ pizza', 1),
(23, 'Nada saad', 'damnhour', '012233604520', 'pepperoni pizza and chicken & BBQ pizza', 1),
(24, 'alaa ali', 'damnhour', '012233604520', 'pasta with tea drink', 2),
(25, 'Nada saad', 'damnhour', '012233604520', 'pasta with tea drink', 6);

-- --------------------------------------------------------

--
-- بنية الجدول `reseve`
--

CREATE TABLE `reseve` (
  `table_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `meal_name` varchar(255) NOT NULL,
  `num_of_table` int(11) NOT NULL,
  `num_of_people` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `appointment` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `reseve`
--

INSERT INTO `reseve` (`table_id`, `user_name`, `meal_name`, `num_of_table`, `num_of_people`, `user_id`, `appointment`) VALUES
(8, 'alaa ali', ' pasta with tea drink', 1, 4, 6, '1970-01-01'),
(9, 'alaa ali', ' pepperoni pizza ', 5, 11, 6, '1970-01-01'),
(10, 'alaa ali', ' pasta with tea drink', 1, 7, 6, '2023-05-12'),
(11, 'alaa ali', ' pepperoni pizza ', 5, 11, 6, '1970-01-01');

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`user_id`, `fname`, `lname`, `email`, `password`, `phone`, `is_admin`, `gender`) VALUES
(6, '     alaa', '     ali', 'alaaali@gmail.com', '     78945612300', '01233004456', 0, 'female'),
(7, 'Nada', 'El-Habrouk', 'nadasaad@gmail.com', '100200300', '01022265400', 1, 'female'),
(8, 'Alaa', 'Alia', 'alaa@gmail.com', '1598742065', '01022265400', 1, 'female\r\n'),
(9, 'Nada', 'Yout', 'nada@gmail.com', '02314599755', '01022265400', 1, 'female\r\n'),
(10, 'Nada', 'Sobhy', 'nada574@gmail.com', '12364478521', '01022265400', 1, 'female'),
(11, 'Sara', 'Elbadry', 'sara@gmail.com', '123045699870', '01022265400', 1, 'female'),
(12, 'Rokaia', 'Shreet', 'rokaia@gmail.com', '1203478951', '01022265400', 1, 'female'),
(13, 'Rofyda', 'Mohamed', 'rofyda@gmail.com', '145895008', '01022265400', 1, 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`meal_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `reseve`
--
ALTER TABLE `reseve`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `meal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `reseve`
--
ALTER TABLE `reseve`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
