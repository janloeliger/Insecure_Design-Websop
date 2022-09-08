USE insecure_shop_db;
CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password) VALUES ('p.muster', 'pwd');
INSERT INTO users (username, password) VALUES ('h.muster', 'pwd');
INSERT INTO users (username, password) VALUES ('karl', 'pwd');
INSERT INTO users (username, password) VALUES ('Fanta', 'pwd');
INSERT INTO users (username, password) VALUES ('Soos', 'pwd');