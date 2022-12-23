CREATE TABLE IF NOT EXISTS `Ratings`

(
    `id` int AUTO_INCREMENT PRIMARY  KEY,
    `product_id` int DEFAULT  0,
    `user_id` int,
    `rating` int,
    `comment` TEXT,
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    
    FOREIGN KEY (`user_id`) REFERENCES Users(`id`),
    
    UNIQUE KEY (`user_id`)
)