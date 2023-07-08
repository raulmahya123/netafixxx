<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        /* CSS untuk navbar */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .navbar-logo {
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
            color: #fff;
        }

        .navbar-menu {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar-menu li {
            margin-right: 10px;
        }

        .navbar-menu li a {
            text-decoration: none;
            color: #fff;
            padding: 5px;
        }

        .navbar-menu li a:hover {
            background-color: #555;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 20px;
            padding: 20px;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            background-color: #f9f9f9;
        }

        .card img {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .card h3 {
            margin-top: 0;
        }
          /* CSS untuk tampilan tabel */
          table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* CSS untuk tombol */
        a.button,
        button {
            display: inline-block;
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

        a.button:hover,
        button:hover {
            background-color: #45a049;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 14px;
            margin-top: auto;
        }

        .footer-social-icons {
            margin-bottom: 10px;
        }

        .footer-social-icons a {
            display: inline-block;
            margin-right: 10px;
            color: #fff;
            font-size: 18px;
            text-decoration: none;
        }

        .footer-social-icons a:hover {
            color: #bbb;
        }

        .footer-links {
            list-style-type: none;
            padding: 0;
            margin-bottom: 10px;
        }

        .footer-links li {
            display: inline-block;
            margin-right: 10px;
        }

        .footer-links li a {
            color: #fff;
            text-decoration: none;
        }

        .footer-links li a:hover {
            color: #bbb;
        }

        a.add-user-link {
        display: inline-block;
        padding: 8px 16px;
        background-color: #4CAF50;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    a.add-user-link:hover {
        background-color: #45a049;
    }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="#" class="navbar-logo">My Website</a>
        <ul class="navbar-menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
</head>
<body>
    <div class="header">
        <h1>Welcome to Food Land</h1>
        <p>Discover delicious food from our menu</p>
    </div>

    <div class="container">
        <div class="card">
            <img src="food1.jpg" alt="Food 1">
            <h3>Delicious Burger</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>

        <div class="card">
            <img src="food2.jpg" alt="Food 2">
            <h3>Tasty Pizza</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>

        <div class="card">
            <img src="food3.jpg" alt="Food 3">
            <h3>Yummy Sushi</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>

        <!-- Add more cards for other food items -->

    </div>
</body>
<body>
    <h2>PEMESANAN</h2>
    <table border = 1 >
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Email</td>
            <td>Gender</td>
            <td>Action</td>
        </tr>
        <?php
        require 'config.php';
        $rows = mysqli_query($conn,"SELECT * FROM user");
        $i = 1;
        ?>
        <?php foreach ($rows as $row) : ?>
            <tr id = <?php echo $row["id"]?>>
            <td><?php echo $i++;?></td>
            <td><?php echo $row["name"]?></td>
            <td><?php echo $row["email"]?></td>
            <td><?php echo $row["pemesanan"]?></td>
            <td>
                <a href="edituser.php?id=<?php echo $row["id"];?>">Edit</a>
                <button type="button" onclick="submitData(<?php echo $row['id'];?>)">delete</button>
            </td>
            </tr>
            <?php endforeach;?>
    </table>
    <br>
    <a href="adduser.php">Add user</a>
    <?php require 'script.php'; ?>
</body>
<body>
    <div class="content">
        <!-- Content goes here -->
    </div>

    <footer class="footer">
        <div class="footer-social-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="footer-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <p>&copy; 2023 Your Company. All rights reserved.</p>
    </footer>

</body>

</html>