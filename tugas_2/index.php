<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            font-family: Arial, sans-serif;
        }

        .container {
            text-align: center;
        }

        .form-container {
            border: 1px solid black;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            background-color: #f9f9f9;
            margin-bottom: 20px;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 5px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .data-container {
            border: 1px solid black;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            background-color: #f9f9f9;
        }

        .welcome-message {
            font-size: 18px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h2>Form Mahasiswa</h2>
            <form method="post">
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" required>
                <br>
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
                <br>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>

        <?php
        include 'Mahasiswa.php';

        $mhs = new Mahasiswa();

        if (isset($_POST['submit'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];

            if ($nim && $nama) {
                $mhs->setData($nim, $nama);
                $data = $mhs->getData();
            }

            echo $mhs->printData($mhs->getData());
        }
        ?>
</body>
</html>