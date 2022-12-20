CREATE TABLE IF NOT EXISTS 'Orders'(
    'id' int AUTO_INCREMENT PRIMARY KEY,
    'user_id' int,
    'total_price' int DEFAULT 99999,
    'address' varchar,
    'payment_method' text,
    'cost' int DEFAULT 99999,
    'money_received' int DEFAULT 99999,
    'first_name' varchar(30) UNIQUE, 
    'last_name' varchar(30) UNIQUE,
    'created' TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    'modified' TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    FOREIGN KEY ('user_id') REFERENCES Users('id'),
    UNIQUE KEY (`user_id`, `item_id`)
)   check(quantity > 0)