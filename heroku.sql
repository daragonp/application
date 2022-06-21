CREATE TABLE roles(
    roleid TINYINT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    rolename VARCHAR(16) NOT NULL UNIQUE,
    roledescription TEXT,
    rolecreatedat DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    roleupdatedat DATETIME NOT NULL,
    roledeletedat DATETIME
);

INSERT INTO roles(rolename, roledescription, rolecreatedat, roleupdatedat) VALUES('ADMIN', 'El administrador del sistema puede crear usuarios y resolver inconvenientes que estos tengan durante el uso del mismo.', DEFAULT, NOW());

INSERT INTO roles(rolename, roledescription, rolecreatedat, roleupdatedat) VALUES('SUPPORT', 'El usuario de soporte es quien puede brindar ayuda a los otros usuarios no administradores y resolver inquietudes de los mismos.', DEFAULT, NOW());

INSERT INTO roles(rolename, roledescription, rolecreatedat, roleupdatedat) VALUES('USER', 'Con este rol, un usuario del sistema, puede hacer las tareas que le sean habilitadas.', DEFAULT, NOW());


CREATE TABLE users(
    userid INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(64) NOT NULL,
    email VARCHAR(64) NOT NULL UNIQUE,
    password VARCHAR(64) NOT NULL,
    userphone VARCHAR(15),
    useraddress VARCHAR(64),
    roleid TINYINT(3) NOT NULL,
    usercreatedat DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    userupdatedat DATETIME NOT NULL,
    userdeletedat DATETIME,
    FOREIGN KEY (roleid) REFERENCES roles(roleid)
);

INSERT INTO users(fullname, email, password, userphone, useraddress, roleid, usercreatedat, userupdatedat) VALUES('Administrador Del Sistema', 'administrador@admin.admin', '$2y$10$zaSS.uCtO1Y7BO5iDqqpXuTnzF7X7gMjqAF9we6l7a3iFkrZwXJuq', '6017987654', 'Avenida Siempre Viva # 7 - 42', 1, DEFAULT, NOW());

CREATE TABLE userimage(
    imageid INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    userid INT(10) NOT NULL,
    userimage varchar(255) NOT NULL,
    imagecreatedat DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    imageupdatedat DATETIME NOT NULL,
    imagedeletedat DATETIME,
    FOREIGN KEY (userid) REFERENCES users(userid)
);

CREATE TABLE userupdate(
    id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    userid INT(10) NOT NULL,
    updatedescription TEXT NOT NULL,
    dateofupdate DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (userid) REFERENCES users(userid)
);

--TABLA PARA GUARDAR LOS EVENTOS DE ACTUALIZACIÓN DE DATOS DE UN USUARIO.
