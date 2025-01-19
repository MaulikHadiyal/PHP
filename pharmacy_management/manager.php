<?php
session_start();
include('db.php');

// Handle Manager Registration
if (isset($_POST['register_manager'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encrypt password
    $role = 'manager';

    $sql = "INSERT INTO managers (username, password, role) VALUES ('$username', '$password', '$role')";
    if ($conn->query($sql) === TRUE) {
        echo "Manager registered successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

// Handle Manager Login
if (isset($_POST['login_manager'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM managers WHERE username='$username' AND role='manager'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $manager = $result->fetch_assoc();
        if (password_verify($password, $manager['password'])) {
            $_SESSION['manager_id'] = $manager['id'];
            echo "Login successful!";
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "Manager not found!";
    }
}

// Add Medicine
if (isset($_POST['add_medicine'])) {
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $sql = "INSERT INTO medicines (name, quantity, price) VALUES ('$name', '$quantity', '$price')";
    if ($conn->query($sql) === TRUE) {
        echo "Medicine added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

// View Medicines
if (isset($_POST['view_medicines'])) {
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

// Delete Medicine
if (isset($_POST['delete_medicine'])) {
    $medicine_id = $_POST['medicine_id'];

    $sql = "DELETE FROM medicines WHERE id='$medicine_id'";
    if ($conn->query($sql) === TRUE) {
        echo "Medicine deleted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!-- HTML Form for Manager actions -->
<form method="POST">
    <h3>Manager Registration</h3>
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit" name="register_manager">Register Manager</button>
</form>

<form method="POST">
    <h3>Manager Login</h3>
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit" name="login_manager">Login</button>
</form>

<form method="POST">
    <h3>Add Medicine</h3>
    <input type="text" name="name" placeholder="Medicine Name" required><br>
    <input type="number" name="quantity" placeholder="Quantity" required><br>
    <input type="number" name="price" placeholder="Price" required><br>
    <button type="submit" name="add_medicine">Add Medicine</button>
</form>

<form method="POST">
    <h3>View Medicines</h3>
    <button type="submit" name="view_medicines">View All Medicines</button>
</form>

<form method="POST">
    <h3>Delete Medicine</h3>
    <input type="number" name="medicine_id" placeholder="Medicine ID to Delete" required><br>
    <button type="submit" name="delete_medicine">Delete Medicine</button>
</form>
