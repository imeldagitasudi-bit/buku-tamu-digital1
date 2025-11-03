<?php $row = $guest->find($_GET['id']); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Tamu</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff0f5;
            color: #333;
            text-align: center;
            padding: 50px;
        }
        form {
            background: white;
            width: 400px;
            margin: auto;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        h2 { color: #e91e63; }
        input, textarea {
            width: 90%;
            margin: 10px;
            padding: 8px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #e91e63;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
        }
        button:hover {
            background-color: #c2185b;
        }
        a { color: #e91e63; text-decoration: none; }
    </style>
</head>
<body>
    <form method="post" action="index.php?action=update">
        <h2>Edit Data 💖</h2>
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <input type="text" name="name" value="<?= htmlspecialchars($row['name']) ?>" required><br>
        <textarea name="message" rows="4" required><?= htmlspecialchars($row['message']) ?></textarea><br>
        <button type="submit">Update</button><br><br>
        <a href="index.php">⬅️ Kembali</a>
    </form>
</body>
</html>
