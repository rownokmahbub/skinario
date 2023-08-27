CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) 

CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type` enum('oily','combination','dry','acne-prone','hyper-pigmented','sensitive') DEFAULT NULL,
  `category` enum('product','medicine') DEFAULT NULL,
  PRIMARY KEY (`id`)
) 


INSERT INTO `products` VALUES (1,'product 1','1234','./assets/exfoliator/download (1).jpg','oily','product'),(2,'product 2','3121','./assets/exfoliator/download (1).jpg','acne-prone','product'),(3,'product 4','3289','./assets/exfoliator/download (1).jpg','hyper-pigmented','product'),(4,'product x','7887','./assets/exfoliator/download (1).jpg','dry','product'),(5,'medicine 1','23','./assets/exfoliator/download (1).jpg',NULL,'medicine'),(6,'medicine 2','32','./assets/exfoliator/download (1).jpg',NULL,'medicine'),(7,'medicine 3','34','./assets/exfoliator/download (1).jpg',NULL,'medicine'),(8,'medicine 4','12','./assets/exfoliator/download (1).jpg',NULL,'medicine');


CREATE TABLE `payment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `address` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `delivery_type` enum('pathao','cod') DEFAULT NULL,
  `payment_type` enum('bkash','nagad','rocket') DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payment_users_id_fk` (`user_id`),
  CONSTRAINT `payment_users_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) 

CREATE TABLE `order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `payment_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_products_id_fk` (`product_id`),
  KEY `order_users_id_fk` (`user_id`),
  KEY `order_payment_id_fk` (`payment_id`),
  CONSTRAINT `order_payment_id_fk` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`id`),
  CONSTRAINT `order_products_id_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  CONSTRAINT `order_users_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
)



CREATE TABLE `doctors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `institution` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) 


INSERT INTO `doctors` VALUES (1,'Miftahul Jannat Jebin','SHahid Suhrawardy Medical College','MBBS'),(2,'Shamima Alam','Dhaka Medical College','MBBS'),(3,'Wahaj Ali\n','Dhaka Medical College','MBBS');



CREATE TABLE `appointment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `type` enum('online','offline') DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `doctor_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `appointment_users_id_fk` (`user_id`),
  KEY `appointment_doctors_id_fk` (`doctor_id`),
  CONSTRAINT `appointment_doctors_id_fk` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`),
  CONSTRAINT `appointment_users_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) 
