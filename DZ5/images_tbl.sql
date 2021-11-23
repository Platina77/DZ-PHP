USE images;
DROP TABLE IF EXISTS images;
CREATE TABLE images (
	id INT NOT NULL AUTO_INCREMENT,
	url VARCHAR(255) NOT NULL,
	size_img VARCHAR(255) NOT NULL,
	name VARCHAR(255) NOT NULL,
	view_count INT NOT NULL DEFAULT 0,
	PRIMARY KEY (id)
) CHARACTER SET utf8;

INSERT INTO images (url, size_img, name)
VALUES
('images/', '1090x650', 'image1.jpg'),
('images/', '800x653', 'image2.jpg'),
('images/', '651x800', 'image3.jpg');