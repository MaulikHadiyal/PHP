<!-- resources/views/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <header>
        <h1>Registration Page</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/contact">Contact Us</a></li>
            <li><a href="/gallery">Gallery</a></li>
            <li><a href="/register">Register</a></li>
            <li><a href="/login">Login</a></li>
        </ul>
    </nav>
    <main>
        <form action="#" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name"><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email"><br><br>
            <button type="submit" style="margin: left 40px;;">Register</button>
        </form>
    </main>
</body>
</html>
