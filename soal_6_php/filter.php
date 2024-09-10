<?php
//Menampilkan Data Buku Berdasarkan Filter

include 'koneksi_db.php';

$filter = $_GET['filter'] ?? '';

$query = '';

if ($filter === 'filter_price_range') {
    $query = "
        SELECT * FROM Buku WHERE Price_rent > 2000 AND Price_rent < 6000
    ";
} elseif ($filter === 'filter_not_rented') {
    $query = "
        SELECT * FROM Buku
        LEFT JOIN Rent ON Buku.Id = Rent.Book_id
        WHERE Rent.Book_id IS NULL
    ";
} elseif ($filter === 'filter_customers') {
    $query = "
        SELECT Customer.Name, Buku.Title, COUNT(Rent.Id) AS jumlah_pinjam
        FROM Rent
        JOIN Customer ON Rent.Customer_id = Customer.Id
        JOIN Buku ON Rent.Book_id = Buku.Id
        GROUP BY Customer.Name
        HAVING COUNT(Rent.Id) > 10
    ";
}

$stmt = $pdo->prepare($query);
$stmt->execute();
$filteredData = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Filter</title>
</head>
<body>

<h1>Hasil Filter</h1>

<table border="1">
    <tr>
        <?php if ($filter === 'filter_customers'): ?>
            <th>Nama Customer</th>
            <th>Judul Buku</th>
            <th>Jumlah Buku Dipinjam</th>
        <?php else: ?>
            <th>Title</th>
            <th>Author</th>
            <th>Price Rent</th>
        <?php endif; ?>
    </tr>
    <?php foreach ($filteredData as $data): ?>
    <tr>
        <?php if ($filter === 'filter_customers'): ?>
            <td><?php echo htmlspecialchars($data['Name']); ?></td>
            <td><?php echo htmlspecialchars($data['Title']); ?></td>
            <td><?php echo htmlspecialchars($data['jumlah_pinjam']); ?></td>
        <?php else: ?>
            <td><?php echo htmlspecialchars($data['Title']); ?></td>
            <td><?php echo htmlspecialchars($data['Author']); ?></td>
            <td><?php echo htmlspecialchars($data['Price_rent']); ?></td>
        <?php endif; ?>
    </tr>
    <?php endforeach; ?>
</table>

<a href="index.php">Kembali ke Data Buku yang Direntalkan</a>

</body>
</html>
