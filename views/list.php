<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buku Tamu Digital</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffe6f2;
            color: #444;
            text-align: center;
            margin: 0;
            padding: 30px;
        }
        h2 {
            color: #e91e63;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            border: 1px solid #f5a6c1;
            padding: 10px;
        }
        th {
            background: #ffb6c1;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #fff5fa;
        }
        a {
            color: #e91e63;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .btn {
            background: #e91e63;
            color: white;
            padding: 8px 15px;
            border-radius: 8px;
            text-decoration: none;
        }
        .btn:hover {
            background: #c2185b;
        }
    </style>
</head>
<body>
    <h2>📖 Buku Tamu Digital</h2>
    <a href="index.php?action=add" class="btn">+ Tambah Tamu</a>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Pesan</th>
            <th>Aksi</th>
        </tr>
        <?php if(!empty($data)): ?>
            <?php foreach ($data as $i => $row): ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= htmlspecialchars($row['name']) ?></td>
                <td><?= htmlspecialchars($row['message']) ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?= $row['id'] ?>">✏️ Edit</a> |
                    <a href="index.php?action=delete&id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus data ini?')">🗑️ Hapus</a>
                </td>
            </tr>
            <?php endforeach ?>
        <?php else: ?>
            <tr><td colspan="4">Belum ada tamu 💕</td></tr>
        <?php endif; ?>
    </table>
</body>
</html>
