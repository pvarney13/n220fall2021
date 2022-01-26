-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 02:02 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recordstore_db`
--
CREATE DATABASE IF NOT EXISTS `recordstore_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `recordstore_db`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` tinyint(1) NOT NULL,
  `category` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category`, `description`) VALUES
(1, 'Alternative', 'A category of rock music that emerged from the independent music underground of the 1970s and became widely popular in the 1990s'),
(2, 'Rock', 'A broad genre of popular music that originated as \"rock and roll\" in the United States in the late 1940s and early 1950s, developing into a range of different styles in the mid-1960s and later, particularly in the United States and the United Kingdom.'),
(3, 'Hip-Hop/Rap', 'A genre of popular music developed in the United States by inner-city African Americans and Latino Americans in the Bronx borough of New York City in the 1970s.'),
(4, 'R&B', 'Rhythm and blues, often abbreviated as R&B or R\'n\'B, is a genre of popular music that originated in African-American communities in the 1940s'),
(5, 'Pop', 'A genre of popular music that originated in its modern form during the mid-1950s in the United States and the United Kingdom.'),
(6, 'Electronic', 'Electronic music is music that employs electronic musical instruments, digital instruments, or circuitry-based music technology in its creation. It includes both musics made using electronic and electromechanical means (electroacoustic music). ');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `title` varchar(120) NOT NULL,
  `artist` varchar(120) NOT NULL,
  `length` time NOT NULL,
  `release_date` date NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `image` varchar(150) NOT NULL,
  `description` text DEFAULT NULL,
  `category_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `title`, `artist`, `length`, `release_date`, `price`, `image`, `description`, `category_id`) VALUES
(1, 'Nevermind', 'Nirvana', '00:42:36', '1991-09-24', '19.98', 'https://upload.wikimedia.org/wikipedia/en/b/b7/NirvanaNevermindalbumcover.jpg', 'A broad genre of popular music that originated as &#34;rock and roll&#34; in the United States in the late 1940s and early 1950s, developing into a range of different styles in the mid-1960s and later, particularly in the United States and the United Kingdom.', 2),
(2, 'To Pimp a Butterfly', 'Kendrick Lamar', '01:18:51', '2015-03-15', '24.99', 'https://upload.wikimedia.org/wikipedia/en/f/f6/Kendrick_Lamar_-_To_Pimp_a_Butterfly.png', 'A dazzling album that defined Black America both musically and lyrically, \'To Pimp A Butterfly\' is a visionary album that will resonate for decades to come.', 3),
(3, 'Depression Cherry', 'Beach House', '00:44:45', '2015-08-28', '19.99', 'https://upload.wikimedia.org/wikipedia/en/0/00/Beach_House_-_Depression_Cherry.png', 'On their fifth album, Beach House don\'t veer too far from their template: beautifully spare, sun-bleached ditties that belie their often-dreary subject matter. Sure, there’s a blown-out guitar here (the pleasantly noisy “Sparks”), or a breathy spoken word there (“PPP,” replete with Cocteau Twins-style guitar), but the duo\'s MO remains: “If it ain’t broke . . .” The creeping organ tones and Victoria Legrand\'s gauzy croon are so luxuriant, you almost forget that these are still sad songs—and it’s in that balance of light and dark that they reliably stick the landing.', 1),
(4, 'The Slow Rush', 'Tame Impala', '00:57:16', '2020-02-14', '24.99', 'https://upload.wikimedia.org/wikipedia/en/5/54/Tame_Impala_-_The_Slow_Rush.png', 'The theme of the fourth Tame Impala album is evident before hearing a note. It’s in the song names, the album title, even the art: Kevin Parker has time on his mind. Ruminating on memories, nostalgia, uncertainty about the future, and the nature of time itself lies at the heart of The Slow Rush.', 1),
(5, 'After Hours', 'The Weeknd', '00:56:19', '2020-03-20', '24.99', 'https://upload.wikimedia.org/wikipedia/en/c/c1/The_Weeknd_-_After_Hours.png', '“You can find love, fear, friends, enemies, violence, dancing, sex, demons, angels, loneliness, and togetherness all in the After Hours of the night.” —Abel Tesfaye', 4),
(6, 'My Beautiful Dark Twisted Fantasy', 'Kanye West', '01:08:36', '2010-11-22', '19.99', 'https://upload.wikimedia.org/wikipedia/en/f/f0/My_Beautiful_Dark_Twisted_Fantasy.jpg', 'My Beautiful Dark Twisted Fantasy is masterful. Even with high-profile contributors Nicki Minaj (“Monster”), Elton John (“All of the Lights”), Jay Z (“So Appalled”, “Monster”), RZA (“Dark Fantasy”, “So Appalled”), and Bon Iver (“Lost in the World”), Kanye is the orchestrator of this musical extravaganza that challenged listeners to check their preconceived notions of hip-hop and himself.', 3),
(7, 'Free Spirit', 'Khalid', '00:57:13', '2019-04-05', '19.99', 'https://upload.wikimedia.org/wikipedia/en/1/1b/Khalid_-_Free_Spirit.png', 'His much-anticipated second album, the 17-track Free Spirit—and its companion film of the same name, created by Khalid along with director Emil Nava—is a soulful, sober meditation on what he\'s learned in those intervening years and about what happens when you long for personal freedom but aren\'t yet totally sure what to do with it. Khalid talked through the stories and inspiration behind each song with Zane, so read along as you take it all in.', 4),
(8, 'Chasing Summer', 'SiR', '00:45:47', '2019-08-30', '19.99', 'https://upload.wikimedia.org/wikipedia/en/7/72/SiRChasingSummer.jpg', 'If trip-hop had been created in sunny Inglewood, California, instead of downcast Bristol, it might sound a lot like Chasing Summer. It’s mood-intensive and takes unexpected stylistic shifts, yet stays true to the block. SiR, an R&B prodigy and TDE signee, doesn’t bunker down behind muted, eclectic sound banks. His supple reading is front and center, reveling in tales of love and torment', 4),
(9, 'Swimming', 'Mac Miller', '00:58:39', '2019-08-03', '19.99', 'https://upload.wikimedia.org/wikipedia/en/5/5e/Mac_Miller_-_Swimming.png', 'On “Hurt Feelings,” the second song from his fifth studio album, Swimming, Mac Miller raps, “I paid the cost to see apostrophes, that means it’s mine/Keep to myself, taking my time.” The Pittsburgh-born MC has always been clever; on Swimming, he\'s also direct—particularly about the distance he’s kept from the public eye following a high-profile breakup and other troubles. But this isn\'t a breakup album; Miller says Swimming is a more complete picture of his life.', 3),
(10, '4', 'Foreigner', '00:42:10', '1981-07-02', '19.99', 'https://upload.wikimedia.org/wikipedia/en/e/e4/Foreigner_-_4.jpg', 'The Mick Jones and Lou Gramm–led band were hugely successful yet deceptively songwriterly. They could outline moments, even if those moments involved a bad breakup or a night of unrequited sexual longing. This 1981 album features riffy hits (“Jukebox Hero” and “Urgent,” which features Junior Walker on sax), some old-fashioned rockers (“I’m Gonna Win,” “Woman in Black”), a prom-night weeper (“Waiting for a Girl Like You”), and a Knack-like popper (“Luanne”). Streaks of synthesizers appear but never at the expense of Jones’ heavy riffing, and each tune is reinforced by Gramm’s vocals, which effortlessly alternate between the muscular and the tender.', 2),
(11, 'Daryl Hall & John Oates', 'Daryl Hall & John Oates', '00:35:20', '1975-08-18', '19.99', 'https://upload.wikimedia.org/wikipedia/en/d/dc/Hall_and_Oates%2C_Daryl_Hall_and_John_Oates_%28The_Silver_Album%29%2C_1975.png', 'This self-titled album, the duo’s fourth, took Hall & Oates back to the blue-eyed soul sound that had been mostly missing from their previous album, the Todd Rundgren–produced War Babies.', 5),
(12, 'Rumours', 'Fleetwood Mac', '00:39:43', '1977-02-04', '19.99', 'https://upload.wikimedia.org/wikipedia/en/f/fb/FMacRumours.PNG', 'Fleetwood Mac’s Rumours practically defined FM-radio in the late-‘70s. The group’s three main songwriters each carved out their territory as their romantic lives with each other were falling apart. Stevie Nicks had a touch of mystic (“Dreams,” “Gold Dust Woman”). Christine McVie wrote universal anthems (“Don’t Stop,” “Songbird”) and Lindsey Buckingham churned out dynamic pop confectionaries with undercurrents of emotional distress (“Second Hand News,” “Go Your Own Way”). Spinning tragedy into gold was clearly their specialty.', 2),
(13, 'Escape', 'Journey', '00:42:46', '1981-07-31', '19.99', 'https://upload.wikimedia.org/wikipedia/en/e/e0/JourneyEscapealbumcover.jpg', 'Like any good time capsule, 1981’s Escape doesn’t tell you everything you need to know about the moment it came from, but what it does tell you couldn’t be said about any other. At a time when punk was still rippling through rock culture, Escape offered a blockbuster optimism that played into the needs of an America shaking off the darkness of the 1970s while also remembering the sweetness of Motown (“Open Arms”) and early rock ’n’ roll (“Stone in Love”). They know the complexity of prog-rock, from Pink Floyd to Jethro Tull (“La Raza del Sol”), but here they keep it simple. Welcome to the 1980s: Journey wants you to win big and feel bigger.', 2),
(14, 'The Massacre', '50 Cent', '01:17:22', '2005-03-03', '19.99', 'https://upload.wikimedia.org/wikipedia/en/5/5e/50_Cent_-_The_Massacre.png', 'After Get Rich or Die Tryin’, 50 Cent was invincible. He’d made good on all the hype he’d earned by way of an extensive mixtape discography and released one of the most impactful debut hip-hop albums in history. So The Massacre—his follow-up to Get Rich—was the product of a man who’d suddenly gotten everything he wanted. He utilized all of the tools at his disposal—most specifically the talents and curatorial insights of Eminem and Dr. Dre—to make a bigger sequel, and the music has a sheen we see exemplified on The Massacre’s cover: The domineering Jamaica, Queens, street bully who continuously backed challengers off his corner is very much still here, except now he seems even stronger.', 3),
(15, 'Hotel California', 'The Eagles', '00:43:28', '1976-12-08', '19.99', 'https://upload.wikimedia.org/wikipedia/en/4/49/Hotelcalifornia.jpg', 'To put the Eagles’ mid-’70s dominance into perspective, consider this: In early 1976, the group released Their Greatest Hits 1971-1975, a compilation that would spend the next half-decade in the Billboard Top 200 and go on to become the biggest-selling American album of the 20th century. But here’s the crazy thing: The band’s most popular, career-defining song was still to come. That honor, of course, goes to the title track of their 1976 smash Hotel California, the record where the Eagles expunged any lingering trace of their country-rock roots and took up residence in the football stadiums of the world.', 2),
(16, 'Walking on a Dream', 'Empire of the Sun', '00:43:34', '2008-10-08', '19.99', 'https://upload.wikimedia.org/wikipedia/en/6/60/Empire_of_the_Sun_-_Walking_on_a_Dream_%28album%29.png', 'Walking on a Dream is the debut studio album by Australian electronic music duo Empire of the Sun, released on 3 October 2008 by Capitol Records. The album was produced by band members Luke Steele and Nick Littlemore, along with Peter Mayes and Donnie Sloan.', 6),
(17, '2001', 'Dr. Dre', '01:08:01', '1999-11-08', '19.99', 'https://upload.wikimedia.org/wikipedia/en/5/56/DrDre-2001.jpg', 'The real gems here are a series of guest-laden album cuts—like “The Next Episode”—that find a veritable who’s who of Los Angeles rap royalty spitting fire over some of Dre’s sparest, fiercest beats. The Chronic 2001 is the equal of its illustrious predecessor in almost every respect; a hip-hop classic from one of the greatest producers to ever approach the boards.', 3),
(18, 'Enter The Wu-Tang (36 Chambers)', 'Wu-Tang Clan', '00:58:26', '1993-11-09', '19.99', 'https://upload.wikimedia.org/wikipedia/en/5/53/Wu-TangClanEntertheWu-Tangalbumcover.jpg', 'In 1993, the Wu-Tang Clan were a grim, grimy, grindhouse alternative to G-funk’s baroque gangsta cinema: If Dr. Dre’s lush, lowrider-ready grooves were Terminator 2, then the scratchy, bloody, distorted productions of RZA on their debut album were Reservoir Dogs. Emerging from New York City’s most underrepresented borough—the literal island of Staten—here was a sound that, by nature or nurture, existed in its own raw, unapologetic bubble: corroded soul breaks, snatches of dialogue and sound effects from arcane turn-of-the-’70s Hong Kong kung fu flicks, distended keyboard lines, tape noises, snaps, and stutters', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
