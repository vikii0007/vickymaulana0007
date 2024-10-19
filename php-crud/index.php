<?php
include 'database.php';
$db = new Database;
// var_dump($db);
// $db->tampilData();
// $detail = $db->editData($_GET['id']);    
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, intial-scale=1">
    <title>OOP PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
        body {
            background-image: url('piki.png'); /* Ubah dengan path gambar Anda */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: 'Arial', sans-serif;
        }
        
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        table {
            border-collapse: separate;
            border-spacing: 0 15px;
        }
        
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #4CAF50;
            color: white;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        .btn {
            border-radius: 20px;
        }

        a.btn-info {
            background-color: #5bc0de;
            border: none;
        }

        a.btn-warning {
            background-color: #f0ad4e;
            border: none;
        }

        a.btn-danger {
            background-color: #d9534f;
            border: none;
        }

        a.btn-success {
            background-color: #5cb85c;
            border: none;
        }
    </style>
</head>


<body>
    <div class="container mt-3">
        <h1>OOP PHP CRUD</h1>
        <hr>
        <a href="input.php" class="btn btn-success">Tambah Data</a>
        <hr>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            </tbody>
            <?php
            $nomor = 1;
            foreach ($db->tampilData() as $dataUser) {
                ?>
                <tr>
                    <th scope="row"><?php echo $nomor++; ?></th>
                    <td><?php echo $dataUser['nama']; ?></td>
                    <td><?php echo $dataUser['alamat']; ?></td>
                    <td><?php echo $dataUser['nohp']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $dataUser['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="proses.php?id=<?php echo $dataUser['id'] ?>&aksi=hapus"
                            class="btn btn-danger btn-sm">Hapus</a>
                        <a href="detail.php?id=<?php echo $dataUser['id'] ?>" class="btn btn-info btn-sm">Detail</a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLEaAA55NDzOxhy9GkcIdslk1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>