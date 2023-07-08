<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
</head>
<body>
    <h2>Add user</h2>
    <form autocomplete="off" action="" method="post">
    <label for="">Name</label>
    <input type="text" id="name" value=""><br>
    <label for="">Email</label>
    <input type="text" id="email" value=""><br>
    <select class="" id="pemesanan">
        <option value="Delicious Burger">Delicious Burger</option>
        <option value="Tasty Pizza">Tasty Pizza</option>
    </select></br>
    <button type="button" onclick="submitData('insert')">Insert</button>
    </form>
    <br>
    <a href="index.php">Go to index</a>
    <?php include 'script.php'; ?>
</body>
</html>