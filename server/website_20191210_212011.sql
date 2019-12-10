-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE TABLE "users" ----------------------------------------
CREATE TABLE `users` ( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`username` VarChar( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`email` VarChar( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`pasword` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`phone` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`age` Int( 3 ) NOT NULL,
	PRIMARY KEY ( `id` ),
	CONSTRAINT `unique_email` UNIQUE( `email` ),
	CONSTRAINT `unique_phone` UNIQUE( `phone` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 46;
-- -------------------------------------------------------------


-- Dump data of "users" ------------------------------------
INSERT INTO `users`(`id`,`username`,`email`,`pasword`,`phone`,`age`) VALUES 
( '1', 'vasa', 'vasa@gmail.com', '1111', '+380509552210', '25' ),
( '2', 'vasi', 'vasi@gmail.com', '1111', '+380509582210', '66' ),
( '3', 'pit', 'pit@gmail.com', '1111', '+380509556533', '77' ),
( '4', 'anya', 'anya@gmail.com', '1111', '+380509556633', '22' ),
( '6', 'anya', 'anya2@gmail.com', '1111', '+380675648362', '25' ),
( '8', 'anya', 'anya3@gmail.com', '1111', '+380675648352', '25' ),
( '10', 'vasa-1', 'vasa-1@gmail.com', '6674654564', '+380658994450', '25' ),
( '20', 'Vasiliy', 'Vasiliy5@gmail.com', 'Vasiliy777', '+380907775530', '25' ),
( '21', 'Vasiliyjh', 'Vasiliygrh@gmail.com', 'Vasiliy777', '+380956775530', '25' ),
( '22', 'Vasiliy', 'Vasiliy@gmail.com', 'Vasiliy777', '+380906775530', '25' ),
( '29', 'Vasiliy', 'Vasiliy4@gmail.com', 'Vasiliy7778', '+380900375530', '25' ),
( '47', 'Vasiliy', 'Vasiliy999@gmail.com', 'Vasiliy777', '+380977775530', '25' );
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


