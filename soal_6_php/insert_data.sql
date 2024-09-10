-- Insert data ke tabel Buku
INSERT INTO Buku (Id, Title, Author, Price_rent, Book_category) VALUES
(1, 'Naruto', 'Masashi Kishimoto', 3000, 'MANGA'),
(2, 'One Piece', 'Eiichiro Oda', 3500, 'MANGA'),
(3, 'Harry Potter', 'J.K. Rowling', 5000, 'NOVEL'),
(4, 'National Geographic', 'Various', 2000, 'MAGAZINE'),
(5, 'The Hobbit', 'J.R.R. Tolkien', 4000, 'NOVEL');

-- Insert data ke tabel Customer
INSERT INTO Customer (Id, Name, identity_card_number, Address) VALUES
(1, 'Agung Pratama', 'ID123456789', 'Jakarta'),
(2, 'Joni Mamen', 'ID987654321', 'Surabaya');

-- Insert data ke tabel Rent
INSERT INTO Rent (Id, Customer_id, Book_id, Date_Rent, Date_Return) VALUES
(1, 1, 1, '2024-09-01', '2024-09-05'),
(2, 2, 3, '2024-09-02', '2024-09-06');
