CREATE TABLE Kraje(
    ID_kraju INT AUTO_INCREMENT PRIMARY KEY,
    nazwa VARCHAR(100) NOT NULL,
    kod_ISO CHAR(2) NOT NULL,
    waluta VARCHAR(50) NOT NULL,
    powierz FLOAT,
    jezyk_urz VARCHAR(100)
);

-- Tworzenie tabeli dla wycieczek
CREATE TABLE Wycieczki(
    ID_wycieczki INT AUTO_INCREMENT PRIMARY KEY,
    nazwa VARCHAR(100) NOT NULL,
    kontynent VARCHAR(50) NOT NULL,
    czas_trwania INT,
    opis TEXT,
    cena DECIMAL(10,2),
    nazwa_obrazka VARCHAR(100),
    ID_kraju INT,
    FOREIGN KEY (ID_kraju) REFERENCES Kraje(ID_kraju)
);