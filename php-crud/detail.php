<?php
include 'database.php';
$db = new Database;
$detail = $db->editData($_GET['id']);  // Use the same editData() function to fetch the details.
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg, #74ebd5 0%, #acb6e5 100%);
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            color: #fff;
            margin-bottom: 30px;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .card img {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            object-fit: cover;
            height: 200px;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            color: #007bff;
            font-weight: bold;
            text-align: center;
        }

        .card-text {
            font-size: 1rem;
            color: #555;
        }

        .card-text strong {
            color: #007bff;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            width: 100%;
            padding: 10px;
            font-size: 1.1rem;
            border-radius: 10px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .card {
            margin: auto;
            width: 300px;
            background-color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>User Detail</h1>
        <hr>

        <?php
        foreach ($detail as $dataUser) {
            ?>
            <div class="card">
                <img src="uploads/<?php echo $dataUser['foto']; ?>" class="card-img-top" alt="User Photo">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $dataUser['nama']; ?></h5>
                    <p class="card-text">
                        <strong>Jenis Kelamin:</strong> <?php echo $dataUser['jenis_kelamin']; ?><br>
                        <strong>No HP:</strong> <?php echo $dataUser['nohp']; ?><br>
                        <strong>Email:</strong> <?php echo $dataUser['email']; ?><br>
                        <strong>Alamat:</strong> <?php echo $dataUser['alamat']; ?>
                    </p>
                    <a href="index.php" class="btn btn-primary">Kembali</a>
                </div>
            </div>
            <?php
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLEaAA55NDzOxhy9GkcIdslk1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
