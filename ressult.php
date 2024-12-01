<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Result</title>
</head>
<body>
    <h2>Login Result</h2>
    <?php
        // Mendapatkan nilai dari form
        $username = $_GET['username'];
        $password = htmlspecialchars($_GET['password']);

        // Menampilkan hasil input
        echo "<p>Username: $username</p>";
        echo "<p>Password: $password</p>";
    ?>
</body>
</html>
