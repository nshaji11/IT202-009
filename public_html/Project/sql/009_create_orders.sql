CREATE TABLE IF NOT EXISTS `Orders`(
    `id` int AUTO_INCREMENT PRIMARY KEY,
    `user_id` int,
    `total_price` int DEFAULT 99999,
    `address` varchar(100),
    `payment_method` text,
    `cost` int,
    `money_received` int,
    `first_name` varchar(30) UNIQUE, 
    `last_name` varchar(30) UNIQUE,
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    FOREIGN KEY (`user_id`) REFERENCES Users(`id`)
    
)