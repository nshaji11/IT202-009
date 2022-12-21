ALTER TABLE `OrderItems`
ADD FOREIGN KEY (`order_id`) REFERENCES Orders(`id`);