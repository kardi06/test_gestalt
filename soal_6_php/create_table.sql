CREATE DATABASE IF NOT EXISTS rental_buku;

USE rental_buku;

CREATE TABLE Buku (
    Id BIGINT AUTO_INCREMENT PRIMARY KEY,
    Title VARCHAR(100) NOT NULL,
    Author VARCHAR(100),
    Price_rent NUMERIC CHECK (Price_rent > 0),
    Book_category VARCHAR(10) CHECK (Book_category IN ('MANGA', 'NOVEL', 'MAGAZINE'))
);

CREATE TABLE Customer (
    Id BIGINT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(100) NOT NULL,
    identity_card_number VARCHAR(50) NOT NULL,
    Address VARCHAR(50)
);

CREATE TABLE Rent (
    Id BIGINT AUTO_INCREMENT PRIMARY KEY,
    Customer_id BIGINT,
    Book_id BIGINT,
    Date_Rent DATE NOT NULL,
    Date_Return DATE CHECK (Date_Return > Date_Rent),
    FOREIGN KEY (Customer_id) REFERENCES Customer(Id),
    FOREIGN KEY (Book_id) REFERENCES Buku(Id)
);
