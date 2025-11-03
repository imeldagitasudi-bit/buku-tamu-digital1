<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Tamu</title>
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
    <form method="post" action="index.php?action=save">
        <h2>Tambah Tamu 💕</h2>
        <input type="text" name="name" placeholder="Nama lengkap" required><br>
        <textarea name="message" rows="4" placeholder="Pesanmu..." required></textarea><br>
        <button type="submit">Simpan</button><br><br>
        <a href="index.php">⬅️ Kembali</a>
    </form>
</body>
</html>
