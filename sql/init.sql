-- Create the 'gameworld' database
CREATE DATABASE IF NOT EXISTS gameworld;

-- Use the 'gameworld' database
USE gameworld;

CREATE TABLE IF NOT EXISTS gamecategory2 (
    gameCategoryId INT AUTO_INCREMENT PRIMARY KEY,
    categoryName VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS games (
    gameId INT AUTO_INCREMENT PRIMARY KEY,
    gameTitle VARCHAR(255) NOT NULL,
    gameDescription TEXT,
    gamePrice DECIMAL(10, 2) NOT NULL,
    gameCategoryId INT,
    gameImage VARCHAR(255),
    FOREIGN KEY (gameCategoryId) REFERENCES gamecategory2(gameCategoryId)
);

INSERT INTO gamecategory2 (categoryName) VALUES
('PS4'),
('Xbox One'),
('PC');

INSERT INTO games (gameTitle, gameDescription, gamePrice, gameCategoryId, gameImage) VALUES
("Assassin's Creed: Odyssey", 'Open-world action RPG', 49.99, 1, 'images/assasinsCreedOd.jpg'),
("Battlefield V", 'First-person shooter', 39.99, 1, 'images/battlefieldCover.jpg'),
("Call of Duty: Black Ops 4", 'First-person shooter', 59.99, 1, 'images/blackOps4CoverDB.jpg'),
("Counter-Strike: Global Offensive", 'Multiplayer first-person shooter', 4.99, 1, 'images/csgoCover.jpg'),
("Cuphead", 'Run and gun indie game', 19.99, 2, 'images/cuphead.jpg'),
("Days Gone", 'Action-adventure survival horror', 44.99, 2, 'images/daysgone.jpg'),
("Destiny 2", 'Online multiplayer first-person shooter', 29.99, 2, 'images/destiny2.jpg'),
("Detroit: Become Human", 'Interactive drama and action-adventure', 39.99, 2, 'images/detroit.jpg'),
("Dragon Ball Z: Kakarot", 'Action role-playing game', 54.99, 3, 'images/dragonBallZ.gif'),
("Fallout 76", 'Multiplayer online action role-playing game', 35.99, 3, 'images/fallout76Cover.jpg'),
("FIFA 19", 'Football simulation', 25.99, 3, 'images/fifa19Xbox1Cover.jpg'),
("Gears of War 4", 'Third-person shooter', 49.99, 3, 'images/gearsOfWar4.jpg'),
("God of War", 'Action-adventure game', 39.99, 1, 'images/godOfWarCover.jpg'),
("Grand Theft Auto V", 'Action-adventure game', 29.99, 2, 'images/gta5Cover.jpg'),
("Halo 5: Guardians", 'First-person shooter', 44.99, 3, 'images/halo5G.png'),
("Heavy Rain", 'Interactive drama and action-adventure', 24.99, 1, 'images/heavyRain.jpg'),
("Horizon Zero Dawn", 'Action role-playing game', 34.99, 1, 'images/horizonZeroDawnCover.jpg'),
("LittleBigPlanet 3", 'Puzzle-platformer', 19.99, 1, 'images/lbp3Cover.jpg'),
("Minecraft", 'Sandbox game', 29.99, 1, 'images/minecraft.png'),
("Monster Hunter: World", 'Action role-playing game', 39.99, 2, 'images/monsterHunterCover.jpg'),
("Overwatch", 'First-person shooter', 29.99, 2, 'images/overwatch.jpg'),
("PUBG", 'Battle royale game', 29.99, 2, 'images/pubg.jpg'),
("Rainbow Six Siege", 'Tactical shooter', 34.99, 2, 'images/rainBowSix.jpg'),
("Red Dead Redemption 2", 'Action-adventure game', 49.99, 3, 'images/redDeadRedemptionCover.jpg'),
("Rocket League", 'Sports game', 19.99, 3, 'images/rocketLeagueCover.jpg'),
("Rust", 'Survival game', 29.99, 3, 'images/rustCover.jpg'),
("Sea of Thieves", 'Action-adventure game', 39.99, 3, 'images/seaOfThieves.jpg'),
("Skyrim", 'Action role-playing game', 29.99, 2, 'images/skyrimCover.jpg'),
("Spider-Man", 'Action-adventure game', 44.99, 1, 'images/spiderManCover.jpg'),
("Uncharted 4", 'Action-adventure game', 39.99, 1, 'images/uncharted4.jpg'),
("The Witcher 3: Wild Hunt", 'Action RPG', 39.99, 2, 'images/witcher3.jpg');

