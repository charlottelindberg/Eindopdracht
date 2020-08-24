CREATE TABLE `inlog` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `naam` varchar(255),
  `password` varchar(255),
  `status` tinyint
);

CREATE TABLE `gebruikers` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `naam` varchar(255),
  `adres` varchar(255),
  `status` tinyint
);

CREATE TABLE `diersoort` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `type` tinyint
);

CREATE TABLE `honden` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `leeftijd` varchar(255),
  `geslacht` varchar(255),
  `gesteriliseerd` boolean,
  `uitleg` varchar(255)
);

CREATE TABLE `katten` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `leeftijd` varchar(255),
  `geslacht` varchar(255),
  `gesteriliseerd` boolean,
  `uitleg` varchar(255)
);

CREATE TABLE `konijnen` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `leeftijd` varchar(255),
  `geslacht` varchar(255),
  `gesteriliseerd` boolean,
  `uitleg` varchar(255)
);

CREATE TABLE `vogels` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `leeftijd` varchar(255),
  `geslacht` varchar(255),
  `gesteriliseerd` boolean,
  `uitleg` varchar(255)
);

CREATE TABLE `paarden` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `leeftijd` varchar(255),
  `geslacht` varchar(255),
  `gesteriliseerd` boolean,
  `uitleg` varchar(255)
);

CREATE TABLE `reptielen` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `leeftijd` varchar(255),
  `geslacht` varchar(255),
  `gesteriliseerd` boolean,
  `uitleg` varchar(255)
);

CREATE TABLE `knaagdieren` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `leeftijd` varchar(255),
  `geslacht` varchar(255),
  `gesteriliseerd` boolean,
  `uitleg` varchar(255)
);

ALTER TABLE `inlog` ADD FOREIGN KEY (`id`) REFERENCES `gebruikers` (`id`);

ALTER TABLE `inlog` ADD FOREIGN KEY (`status`) REFERENCES `gebruikers` (`status`);

ALTER TABLE `diersoort` ADD FOREIGN KEY (`type`) REFERENCES `honden` (`id`);

ALTER TABLE `diersoort` ADD FOREIGN KEY (`type`) REFERENCES `katten` (`id`);

ALTER TABLE `diersoort` ADD FOREIGN KEY (`type`) REFERENCES `konijnen` (`id`);

ALTER TABLE `diersoort` ADD FOREIGN KEY (`type`) REFERENCES `vogels` (`id`);

ALTER TABLE `diersoort` ADD FOREIGN KEY (`type`) REFERENCES `paarden` (`id`);

ALTER TABLE `diersoort` ADD FOREIGN KEY (`type`) REFERENCES `reptielen` (`id`);

ALTER TABLE `diersoort` ADD FOREIGN KEY (`type`) REFERENCES `knaagdieren` (`id`);
