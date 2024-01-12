<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h3 {
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        button{
            background-color: #434343;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h3>Form Edit Data</h3>
    <form action="<?php echo base_url('index.php/Welcome/AksiEdit')?>" method="post">
        <table class="table table-borderless">
            <tr>
                <td>Kode Produk</td>
                <td>:</td>
                <td><input type="text" name="kode_produk" value="<?php echo $data_sepatu->kode_produk ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $data_sepatu->nama ?>" required></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>:</td>
                <td><input type="text" name="deskripsi" value="<?php echo $data_sepatu->Deskripsi ?>" required></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td><input type="text" name="stok" value="<?php echo $data_sepatu->stok ?>" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga" value="<?php echo $data_sepatu->harga ?>" required></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>:</td>
                <td><input type="file" name="gambar" value="<?php echo $data_sepatu->gambar ?>" required></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Simpan"></td>
            </tr>
            <tr>
                <td colspan="3"><button onclick="goBack()">Batal</button>
<script>
    function goBack() {
        window.history.back();
    }
</script></td>
            </tr>
        </table>
    </form>
</body>
</html>
