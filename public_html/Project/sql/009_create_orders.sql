CREATE TABLE IF NOT EXISTS `Orders`(
    `id` int AUTO_INCREMENT PRIMARY KEY,
    `user_id` int,
    `first_name` varchar(30) UNIQUE, 
    `last_name` varchar(30) UNIQUE,
    `total_price` int DEFAULT 99999,
    `address` varchar(100),
    `cost` int,
    `payment_method` text,
    `money_received` int,
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    FOREIGN KEY (`user_id`) REFERENCES Users(`id`)
    
)