-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 09:22 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `19156892`
--
CREATE DATABASE IF NOT EXISTS `19156892` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `19156892`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `author` text NOT NULL,
  `book_id` int(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `genre` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `book_image` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`author`, `book_id`, `price`, `date`, `genre`, `title`, `book_image`, `description`) VALUES
('Merlin Sheldrake', 1, '9.99', '2020-09-03', 'Science', 'Entangled Life: How Fungi Make Our Worlds, Change Our Minds and Shape Our Futures', 'entangled_life', 'Entangled Life is a mind-altering journey into a spectacular and neglected world, and shows that fungi provide a key to understanding both the planet on which we live, and life itself. The more we learn about fungi, the less makes sense without them.'),
('Charlie Mackesy', 2, '8', '2019-10-10', 'Society', 'The Boy, The Mole, The Fox and The Horse', 'the_boy_the_mole_the_fox', '\'You will not be able to buy a more beautiful book for Christmas for somebody you love\' Chris Evans A book of hope for uncertain times. Enter the world of Charlie\'s four unlikely friends, discover their story and their most important life lessons. The conversations of the boy, the mole, the fox and the horse have been shared thousands of times online, recreated in school art classes, hung on hospital walls and turned into tattoos. In Charlie\'s first book, you will find his most-loved illustrations and some new ones too. \'A wonderful work of art and a wonderful window into the human heart\' Richard Curtis'),
('Dean Nicholson ', 3, '9.99', '2020-09-29', 'Travel', 'Nala\'s World: One man, his rescue cat and a bike ride around the globe', 'nala_world', 'Instagram phenomenon @1bike1world Dean Nicholson reveals the full story of his life-changing friendship with rescue cat Nala and their inspiring adventures together on a bike journey around the world'),
('Adam Kay', 4, '6.99', '2020-10-15', 'Children', 'Kay’s Anatomy: A Complete (and Completely Disgusting) Guide to the Human Body', 'children_anatomy', 'THE RECORD-BREAKING NUMBER ONE BESTSELLER\'Totally brilliant!\' - Jacqueline Wilson\'If only this funny and informative book had been around when I was too embarrassed to teach my kids about bodily functions\' - David Baddiel\'The sort of book I would have loved as a child\''),
('Ken Follett', 5, '8.99', '2020-09-15', 'Adventure', 'The Evening and the Morning: The Prequel to The Pillars of the Earth, A Kingsbridge Novel', 'adventure_evening_and_morning', 'A TIME OF CONFLICT\r\nIt is 997 CE, the end of the Dark Ages, and England faces attacks from the Welsh in the west and the Vikings in the east. Life is hard, and those with power wield it harshly, bending justice according to their will – often in conflict with the king. With his grip on the country fragile and with no clear rule of law, chaos and bloodshed reign\r\n'),
('Richard Osman', 7, '9.99', '2020-09-03', 'Mystery', 'The Thursday Murder Club: The Record-Breaking', 'thursday_murder', 'Such a beacon of pleasure\' KATE ATKINSON\'So smart and funny. Deplorably good\' IAN RANKIN\'A gripping read\' SUNDAY TIMESTHE FIRST BOOK IN THE #1 BESTSELLING THURSDAY MURDER CLUB SERIES BY TV PRESENTER Richard Osman'),
('Marry Berry', 8, '12.99', '2020-09-17', 'cooking', 'Mary Berry\'s Simple Comforts', 'marry_berry', 'Find comfort with Mary\'s easy home cooking. In this brand new tie-in to a new BBC Two series, Mary Berry shares over 120 of her ultimate food recipes, all made simply and guaranteed to get smiles around your kitchen table. Mary\'s utterly reliable recipes are perfect for days when you want tasty and dependable food'),
('Phillip Schofield ', 9, '10.99', '2020-10-15', 'Biography', 'Life\'s What You Make It', 'life_what_you_make_It', 'Phillip Schofield is one of our most loved TV presenters, having spent nearly 40 years hosting some of the biggest shows on screen. Since gaining popularity working as a children\'s presenter for the BBC hosting The Broom Cupboard in 1985, Phillip has gone on to present multiple series of Going Live and more recently, Dancing On Ice, The Cube, 5 Gold Rings, Mr & Mrs and two Royal Weddings'),
('Kay Featherstone', 10, '8.99', '2019-03-21', 'cooking', 'Pinch of Nom: 100 Slimming, Home-style Recipes', 'pinch_of_nom', 'The must-have cookbook from the UK\'s most popular food blog, Americanized for a US audience!For breakfast, lunch, dinner, and desserts, Kate Allinson and Kay Featherstone\'s pinchofnom.com has helped millions of people cook delicious food and lose weight'),
(' Arsene Wenger', 11, '9.99', '2020-10-13', 'Autobiography', 'My Life in Red and White: My Autobiography', 'my_life_in_red', 'There is only one Arsene Wenger - and for the very first time, in his own words, this is his story. In this definitive autobiography, the world-renowned revolutionary football manager discusses his life'),
('Martin Kemp', 22, '6.99', '2020-10-29', 'Music', 'Shirlie and Martin Kemp: It\'s a Love Story', 'its_a_love_story', 'IT\'S A LOVE STORY tells the incredible story of Martin and Shirlie Kemp - from the moment they set eyes on each other, through their stellar careers, to raising a family together. The book uncovers the personal highs and lows of Britain\'s favourite couple, and the unbreakable bond that has kept them strong'),
('DK', 23, '6.19', '2014-07-01', 'History', 'Ancient Egypt', 'egypt', 'In it, we follow them from sixth-century Alexandria to ninth-century Baghdad, from Muslim Córdoba to Catholic Toledo, from Salerno’s medieval medical school to Palermo, capital of Sicily’s vibrant mix of cultures, and – finally – to Venice, where that great merchant city’s printing presses would enable Euclid’s geometry, Ptolemy’s system of the stars and Galen’s vast body of writings on medicine to spread even more widely.'),
('Brandon Stanton', 24, '10.99', '2020-10-06', 'History', 'Humans', 'humans', 'Brandon Stanton’s Humans is a book that connects readers as global citizens at a time when erecting more borders is the order of the day. It shows us the entire world, one story at a time . . .Brandon Stanton’s Humans – his most moving and compelling book to date – shows us the world');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `email` varchar(100) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`email`, `contact_number`, `customer_id`, `first_name`, `last_name`, `password`) VALUES
('ryan.needham@gmail.com', 747607901, 1, 'Ryan', 'Needham', '1234'),
('Gregory.Sampson@gmail.com', 742656781, 2, 'Gregory', 'Sampson', '1235'),
('hhoweel@gmail.com', 746535793, 3, 'Harrison', 'Howell', '1236'),
('LorenzoZinchi@gmail.com', 745246544, 4, 'Lorenzo', 'Zinchi', '1237'),
('William.Goodbye@gmail.com', 741124403, 5, 'William', 'Goodbye', '1238'),
('joshneedham98@gmail.com', 754335323, 12, 'Josh', 'Needham', '1239'),
('patryk@gmail.com', 76546355, 17, 'Patryk', 'Buzcheck', '1333'),
('jaypatel@mail.bcu.ac.uk', 7653565, 23, 'Jay', 'Patel', '123456'),
('ryan.needham58@gmail.com', 2147483647, 24, 'Ryan', 'Needham', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `email` text NOT NULL,
  `order_date` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `email`, `order_date`, `status`) VALUES
(6, 'ryan.needham@gmail.com', '2020-11-04', 'on-going'),
(7, 'LorenzoZinchi@gmail.com', '2020-11-24', 'on-going'),
(8, 'hhoweel@gmail.com', '2020-08-20', 'Completed'),
(9, 'joshneedham98@gmail.com\r\n', '2020-09-23', 'Completed'),
(10, 'patryk@gmail.com', '2020-11-16', 'cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `subject` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `name`, `subject`, `email`) VALUES
(1, 'Ryan Needham', 'How long until Delivery?', 'ryan.needham98@gmail.com'),
(3, 'Ryan Needham', 'testing ', 'ryan.needham@gmail.com'),
(6, 'Ryan Needham', 'this is a test to see if it works', 'ryan.needham@gmail.com'),
(7, 'Ryan Needham', 'SUPER TESTING', 'ryan.needham@gmail.com'),
(8, 'Jay Patel', 'Joined 3 tables together', 'jaypatel@mail.bcu.ac.uk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
