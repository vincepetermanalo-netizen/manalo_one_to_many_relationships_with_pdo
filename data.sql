CREATE TABLE brands (
    brand_id INT AUTO_INCREMENT PRIMARY KEY,
    brand_name VARCHAR (50),
    country_of_origin VARCHAR (50),
    founder VARCHAR (50),
    established_year VARCHAR (50),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE guitars (
    guitar_id INT AUTO_INCREMENT PRIMARY KEY,
    guitar_name VARCHAR (50);
    technologies_used TEXT,
    brand_id INT,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);