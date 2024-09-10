<?php

//Menampilkan Data Buku yang Direntalkan

include 'koneksi_db.php';

// Query untuk menampilkan buku yang direntalkan
$query = "
    SELECT Buku.Title, Buku.Author, Buku.Price_rent, Rent.Date_Rent, Rent.Date_Return
    FROM Rent
    JOIN Buku ON Rent.Book_id = Buku.Id
";
$stmt = $pdo->prepare($query);
$stmt->execute();
$rentedBooks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku yang Direntalkan</title>
</head>
<body>

<h1>Data Buku yang Direntalkan</h1>

<!-- Tombol untuk filter data -->
<form method="get" action="filter.php">
    <button type="submit" name="filter" value="filter_not_rented">Filter Buku Belum Pernah Dipinjam</button>
    <button type="submit" name="filter" value="filter_price_range">Filter Harga Sewa 2000 - 6000</button>
    <button type="submit" name="filter" value="filter_customers">Customer Meminjam > 10 Kali</button>
</form>

<table border="1">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Price Rent</th>
        <th>Date Rent</th>
        <th>Date Return</th>
    </tr>
    <?php foreach ($rentedBooks as $book): ?>
    <tr>
        <td><?php echo htmlspecialchars($book['Title']); ?></td>
        <td><?php echo htmlspecialchars($book['Author']); ?></td>
        <td><?php echo htmlspecialchars($book['Price_rent']); ?></td>
        <td><?php echo htmlspecialchars($book['Date_Rent']); ?></td>
        <td><?php echo htmlspecialchars($book['Date_Return']); ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
