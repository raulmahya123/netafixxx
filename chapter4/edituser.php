<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user</title>
    <style>
        /* CSS untuk form */
        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="button"] {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        button[type="button"]:hover {
            background-color: #45a049;
        }

        a {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: #4CAF50;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    <script>
        function submitData(action) {
            var id = document.getElementById("id").value;
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var gender = document.getElementById("gender").value;

            // Lakukan proses pengiriman data atau pengeditan sesuai kebutuhan
            // ...

            // Setelah selesai, arahkan kembali ke index.php
            window.location.href = "index.php";
        }
    </script>
</head>
<body>
    <h2>Edit user</h2>
    <form autocomplete="off" action="" method="post">
        <?php
        require 'config.php';
        $id = $_GET["id"];
        $rows = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM user WHERE id = $id"));
        ?>
        <input type="hidden" id="id" value="<?php echo $rows['id'];?>"></input>
        <label for="name">Name</label>
        <input type="text" id="name" value="<?php echo $rows['name'];?>"><br>
        <label for="email">Email</label>
        <input type="text" id="email" value="<?php echo $rows['email'];?>"><br>
        <label for="pemesanan">Pemesanan</label>
        <select class="" id="pemesanan">
            <option value="Delicious Burger" <?php if($rows["pemesanan"] == "Delicious Burger") echo "selected"?>>Delicious Burger</option>
            <option value="Tasty Pizza" <?php if($rows["pemesanan"] == "Tasty Pizza") echo "selected"?>>Tasty Pizza</option>
        </select><br>
        <button type="button" onclick="submitData('edit')">Edit</button>
    </form>
    <br>
    <a href="index.php">Go to index</a>
    <?php include 'script.php'; ?>
</body>
</html>
