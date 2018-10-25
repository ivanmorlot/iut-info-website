USE iut_info_website;

CREATE TABLE IF NOT EXISTS address (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    country varchar(200),
    city varchar(200),
    state varchar(200),
    postal_code varchar(200),
    supplement varchar(200)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS student (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    gender enum('F','M'),
    firstname varchar(200),
    lastname varchar(200),
    email varchar(200) UNIQUE,
    password varchar(32),
    birthdate datetime,
    main_phone_number varchar(30),
    profil_picture binary(10000000),
    address_id int NOT NULL,
    FOREIGN KEY (address_id) REFERENCES address(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS testimonial (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    publication_date datetime,
    description varchar(10000),
    status enum('validated', 'canceled'),
    student_id int NOT NULL,
    FOREIGN KEY (student_id) REFERENCES student(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS teacher (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    gender enum('F','M'),
    firstname varchar(200),
    lastname varchar(200),
    email varchar(200) UNIQUE,
    password varchar(32),
    main_phone_number varchar(30)
    profil_picture binary(10000000)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS compagny (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    compagny_name varchar(200),
    email varchar(200) UNIQUE,
    password varchar(32),
    main_phone_number varchar(30),
    compagny_description varchar(10000),
    compagny_logo binary(10000000)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS formation (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    formation_name varchar(200),
    formation_description varchar(10000),
    price float
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS traineeship_offer (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email_contact varchar(200) UNIQUE,
    contact_phone_number varchar(30),
    description varchar(10000),
    remuneration float,
    compagny_id int NOT NULL,
    FOREIGN KEY (compagny_id) REFERENCES compagny(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS apprenticeship_offer (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email_contact varchar(200) UNIQUE,
    contact_phone_number varchar(30),
    description varchar(10000),
    remuneration float,
    compagny_id int NOT NULL,
    FOREIGN KEY (compagny_id) REFERENCES compagny(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS interactive_map_location (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name varchar(200),
    website varchar(200)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;