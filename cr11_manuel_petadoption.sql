-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 30. Mrz 2020 um 09:05
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr11_manuel_petadoption`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `breed` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `availability` date DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `hobby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `animals`
--

INSERT INTO `animals` (`id`, `breed`, `name`, `age`, `type`, `image`, `zip_code`, `city`, `address`, `availability`, `description`, `hobby`) VALUES
(1, 'Frog', 'Hansi', 1, 'Small Animal', 'picture/frog.jpg', '1220 Vienna/Austria', 'Vienna', 'Hubertgasse 5', '2020-04-16', 'Frogs are amphibians that are known for their jumping abilities, croaking sounds, bulging eyes and slimy skin. They live all over the world and are among the most diverse animals in the world, with more than 6,000 species. Frogs substantially outnumber the two other groups of amphibians — salamanders and caecilians.', ''),
(2, 'Rat', 'Joe', 2, 'Small Animal ', 'picture/rat.jpg', '1010 Vienna/Austria', 'Vienna', 'Lassenstraße 15', '2020-03-16', 'Rats are generally slender with a pointed head, large eyes, and prominent, thinly furred ears. They have moderately long legs and long, sharp claws. The bald soles of their narrow hind feet possess fleshy pads of variable size, depending on species.', ''),
(3, 'Hamster', 'Mr Hamster', 2, 'Small Animal', 'picture/hamster.jpg', '1220 Vienna/Austria', 'Vienna', 'Stradlbreiten 7a ', '2021-03-18', 'Hamsters are typically stout-bodied, with tails shorter than body length, and have small, furry ears, short, stocky legs, and wide feet. They have thick, silky fur, which can be long or short, colored black, grey, honey, white, brown, yellow, red, or a mix, depending on the species.', ''),
(4, 'Rabbit', 'Luisa', 4, 'Small Animal', 'picture/rabbit.jpg', '5400 Hallein/Austria', 'Salzburg', 'Walterstraße 66', '2020-03-10', 'Rabbits are small, furry, mammals with long ears, short fluffy tails, and strong, large hind legs. They have 2 pairs of sharp incisors (front teeth), one pair on top and one pair on the bottom. They also have 2 peg teeth behind the top incisors.', ''),
(9, 'Elephant', 'Luna', 44, 'Big Animal', 'picture/elephant.jpg', '9523 Villach/Austria', 'Villach', 'Schloßbergweg 26', NULL, 'Elephant, (family Elephantidae), largest living land animal, characterized by its long trunk (elongated upper lip and nose), columnar legs, and huge head with temporal glands and wide, flat ears. Elephants are grayish to brown in colour, and their body hair is sparse and coarse.', ''),
(10, 'Brown Bear', 'Walter', 12, 'Big Animal', 'picture/bear.jpg', '6020 Innsbruck/Austria', 'Innsbruck', 'Weiherburggasse 37a', NULL, 'Bears have large bodies, stocky legs, a long snout, shaggy hair, paws with claws, and a short tail. Even though bears are big and heavy, they can run very fast and are also good at climbing and swimming. Bears have a large brain and are one of the more intelligent mammals.', ''),
(11, 'Cow', 'Frida', 17, 'Big Animal ', 'picture/cow.jpg', '9020 Klagenfurt am Wörthersee/Austria', 'Klagenfurt am Wörthersee', 'Schleppe-Platz 5/1', NULL, 'A cow is a mature female and a bull an adult male of a bovine family. A heifer is a female cow that hasn\'t had a calf yet. ... Modern domestic cattle are believed to belong to either the species Bos taurus (like Holstein, Brown Swiss, Jersey and Guemsey), or the species Bos indicus which are humped cattle like the Brahman.', ''),
(12, 'Orca Wale', 'Corky', 46, 'Big Animal ', 'picture/orca.jpg', 'CA 92109/USA', 'CA', '500 Sea World Dr, San Diego', NULL, 'Description: The orca (killer whale) is a toothed whale and is the largest member of the Dolphin family. These large marine mammals are easily distinguished by their black-and-white coloration, large dorsal fin and a sleek, streamlined body.', ''),
(13, 'Dog', 'Doggo', 11, 'Old Animal', 'picture/dog.jpg', '1230 Vienna/Austria', 'Vienna', 'Lallagasse 5', '2019-12-15', 'Dogs (Canis lupus familiaris) are domesticated mammals, not natural wild animals. They were originally bred from wolves. They have been bred by humans for a long time, and were the first animals ever to be domesticated. ... Today, some dogs are used as pets, others are used to help humans do their work.', 'Dogs love the outside world. All the new smells and things to see and people to meet. It’s great. Show them a leash or mention the word “walk” and you’ll have an excited (possibly) salivating creature on your hands. Snap on the leash and you’re good to go'),
(14, 'Cat', 'Bubba', 16, 'Old Animal', 'picture/cat.jpg', '2345 Brunn am Gebirge/Austria', 'Brunn am Gebirge', 'Wolfholzgasse 12', '2019-12-17', 'Cats, also called domestic cats (Felis catus), are small, carnivorous (meat-eating) mammals, of the family Felidae. Domestic cats are often called house cats when kept as indoor pets. Cats have been domesticated (tamed) for nearly 10,000 years. They are one of the most popular pets in the world.', 'Cats love to pounce. It’s a good way to hone their already sharp hunting skills, and perfect for someone with a rodent problem. They’ll pounce on toys, shiny things, balls, toes, their tails, and even things that us mere humans can’t see.'),
(15, 'Parrot', 'Peppi', 60, 'Old Animal', 'picture/parrot.jpg', '1020 Vienna/Austria', 'Vienna', 'Traumgasse 87', '2020-04-29', 'Parrots have a heavy, in relation to their size, and compact body with a large head and a short neck. Their beaks are short, strong and curved. The two parts of the beak are very strong and used to break fruits and seeds. ... Many parrots are vividly coloured, and some are multi-coloured.', 'Of course, our pet birds can certainly make us laugh out loud from time to time, whether they mean to or not. Some parrots species seem to especially fit the joker role more so than others. Take, for example, African greys, cockatoos and macaws. African g'),
(16, 'Duck', 'Susi', 9, 'Old Animal', 'picture/duck.jpg', '1210 Vienna/Austria', 'Vienna', 'Emillstraße 7', '2020-05-28', 'Ducks are birds that are also called “waterfowls” because they are normally found in places with water like marshes, oceans, rivers, ponds, and lakes. ... Ducks are related to geese and swans, but the duck is the smallest of them all. Ducks have shorter necks and wings than other waterfowl, and they also have a stout body.', 'This duck loves to play fetch');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `login`
--

CREATE TABLE `login` (
  `USERNAME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `TOKEN` int(11) DEFAULT NULL,
  `status` enum('use','admin') NOT NULL DEFAULT 'use'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `login`
--

INSERT INTO `login` (`USERNAME`, `EMAIL`, `PASSWORD`, `TOKEN`, `status`) VALUES
('Hannes', 'Hannes@aon.at', '$2y$10$xX53jSifFzZ3wi8juRa3NeeiQtjYJSvoO6H9uCHwlONksBfk6uRXi', NULL, 'use'),
('Manuel', 'manuel13@aon.at', '$2y$10$rcNSwDtdb7Y3vudZDXAAN.FEh0pQfUQCUQ.3ADUwTX4F5acm5F57u', NULL, 'admin');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`USERNAME`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
