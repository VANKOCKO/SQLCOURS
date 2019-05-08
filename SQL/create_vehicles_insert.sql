
    CREATE TABLE vehicles (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        brand VARCHAR(20) NOT NULL,
        model VARCHAR(20) NOT NULL,
        consumation DECIMAL(4,2) NOT NULL DEFAULT 0,
        production_date YEAR NOT NULL DEFAULT 2000,
        nb_doors TINYINT NOT NULL DEFAULT 5,
        horsepower TINYINT NOT NULL DEFAULT 0
    );

    INSERT INTO vehicles (brand, model, production_date, horsepower) VALUES ("Audi", "A4", "2005", 6);