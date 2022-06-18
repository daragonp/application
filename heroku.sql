CREATE TABLE users(
    userid INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(64) NOT NULL,
    email VARCHAR(64) NOT NULL UNIQUE,
    password VARCHAR(64) NOT NULL,
    role ENUM('ADMIN','USER','SUPPORT') NOT NULL UNIQUE,
    usercreatedat DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    userupdatedat DATETIME NOT NULL,
    userdeletedat DATETIME
);

CREATE TABLE userimage(
    imageid INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    userid INT(10) NOT NULL,
    userimage varchar(255) NOT NULL,
    imagecreatedat DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    imageupdatedat DATETIME NOT NULL,
    imagedeletedat DATETIME
    FOREIGN KEY (userid) REFERENCES users(userid)
);