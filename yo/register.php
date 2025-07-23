<?php require_once 'config.php'; 

// Redirect if already logged in
if (is_logged_in()) {
    header("Location: home.php");
    exit();
}

// Process registration
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = db_connect();
    
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $tel = $conn->real_escape_string($_POST['tel']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $date = date('Y-m-d H:i:s');
    
    // Check if email exists
    $check = $conn->query("SELECT id FROM users WHERE email='$email'");
    
    if ($check->num_rows > 0) {
        $error = "Email already registered";
    } else {
        // Insert new user
        $sql = "INSERT INTO users (name, password, tel, email, date) 
                VALUES ('$name', '$password', '$tel', '$email', '$date')";
        
        if ($conn->query($sql) === TRUE) {
            // Get the new user's ID
            $user_id = $conn->insert_id;
            
            // Log them in automatically
            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_name'] = $name;
            
            // Redirect to home page
            header("Location: home.php");
            exit();
        } else {
            $error = "Error: " . $conn->error;
        }
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        :root {
            --logo-color: #4a90e2; /* Change this to your logo color */
            --dark-bg: #121212;
            --darker-bg: #0a0a0a;
            --text-color: #e0e0e0;
            --input-bg: #1e1e1e;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: var(--dark-bg);
            color: var(--text-color);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .register-container {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            background: var(--darker-bg);
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }
        
        .logo {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .logo img {
            max-width: 150px;
            height: auto;
        }
        
        .logo h1 {
            color: var(--logo-color);
            margin-top: 10px;
            font-size: 1.8rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"] {
            width: 100%;
            padding: 12px;
            background: var(--input-bg);
            border: 1px solid #333;
            border-radius: 4px;
            color: var(--text-color);
            font-size: 1rem;
        }
        
        input:focus {
            outline: none;
            border-color: #FFD700;
        }
        
        button {
            width: 100%;
            padding: 12px;
            background: #FFD700;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        button:hover {
            background: #FFA500;
        }
        
        .links {
            text-align: center;
            margin-top: 1.5rem;
        }
        
        .links a {
            color: #FFA500;
            text-decoration: none;
        }
        
        .links a:hover {
            text-decoration: underline;
        }
        
        .error {
            color: #ff4444;
            background: rgba(255, 68, 68, 0.1);
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 1rem;
            text-align: center;
        }
        
        .success {
            color: #00C851;
            background: rgba(0, 200, 81, 0.1);
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 1rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="logo">
            <!-- Replace with your actual logo image -->
            <img src="logo.png" alt="Your Logo">
        </div>
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $conn = db_connect();
            
            $name = $conn->real_escape_string($_POST['name']);
            $email = $conn->real_escape_string($_POST['email']);
            $tel = $conn->real_escape_string($_POST['tel']);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $date = date('Y-m-d H:i:s');
            
            $check = $conn->query("SELECT id FROM users WHERE email='$email'");
            
            if ($check->num_rows > 0) {
                echo '<div class="error">Email already registered</div>';
            } else {
                $sql = "INSERT INTO users (name, password, tel, email, date) 
                        VALUES ('$name', '$password', '$tel', '$email', '$date')";
                
                if ($conn->query($sql) === TRUE) {
                    echo '<div class="success">Registration successful! <a href="login.php">Login now</a></div>';
                } else {
                    echo '<div class="error">Error: ' . $conn->error . '</div>';
                }
            }
            $conn->close();
        }
        ?>
        
        <form method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="tel">Phone Number</label>
                <input type="tel" id="tel" name="tel">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Register</button>
        </form>
        
        <div class="links">
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>
</body>
</html>