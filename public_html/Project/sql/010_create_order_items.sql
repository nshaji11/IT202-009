CREATE TABLE IF NOT EXISTS `OrderItems`(
    id int AUTO_INCREMENT PRIMARY KEY,
    order_id int,
    item_id int,
    quantity int,
    user_id int,
    cost int,
    FOREIGN KEY (`user_id`) REFERENCES Users(`id`),
    FOREIGN KEY (`item_id`) REFERENCES Products(`id`),
    check(quantity > 0)
)