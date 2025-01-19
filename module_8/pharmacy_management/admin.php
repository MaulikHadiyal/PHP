<?php
session_start();
include('db.php');

// Admin Registration
if (isset($_POST['register_admin'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = 'admin';

    $sql = "INSERT INTO managers (username, password, role) VALUES ('$username', '$password', '$role')";
    if ($conn->query($sql) === TRUE) {
        echo "Admin registered successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Admin Login
if (isset($_POST['login_admin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM managers WHERE username='$username' AND role='admin'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $admin = $result->fetch_assoc();
        if (password_verify($password, $admin['password'])) {
            $_SESSION['admin_id'] = $admin['id'];
            echo "Login successful!";
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "Admin not found!";
    }
}

// View all Managers
if (isset($_POST['view_managers'])) {
    $sql = "SELECT * FROM managers WHERE role='manager'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($manager = $result->fetch_assoc()) {
            echo "Manager: " . $manager['username'] . "<br>";
        }
    } else {
        echo "No managers found.";
    }
}

// View all Medicines
if (isset($_POST['view_all_medicines'])) {
    $sql = "SELECT * FROM medicines";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($medicine = $result->fetch_assoc()) {
            echo "Name: " . $medicine['name'] . " | Quantity: " . $medicine['quantity'] . " | Price: " . $medicine['price'] . "<br>";
        }
    } else {
        echo "No medicines available.";
    }
}
?>

<!-- HTML Form for Admin actions -->
<form method="POST">
    <h3>Admin Registration</h3>
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit" name="register_admin">Register Admin</button>
</form>

<form method="POST">
    <h3>Admin Login</h3>
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit" name="login_admin">Login</button>
</form>

<form method="POST">
    <h3>View All Managers</h3>
    <button type="submit" name="view_managers">View Managers</button>
</form>

<form method="POST">
    <h3>View All Medicines</h3>
    <button type="submit" name="view_all_medicines">View All Medicines</button>
</form>
