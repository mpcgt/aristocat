CREATE DATABASE mydb;
CREATE TABLE users (
    id INT AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);
ALTER TABLE posts
ADD user_id INT,
ADD FOREIGN KEY (user_id) REFERENCES users(id);
INSERT INTO users (username, email)
VALUES ('JohnDoe', 'john.doe@example.com');
SELECT * FROM users;
UPDATE users SET email = 'new_email@example.com'
WHERE id = 1;
DELETE FROM users
WHERE id = 1;