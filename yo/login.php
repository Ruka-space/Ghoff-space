<?php require_once 'config.php'; 

// Redirect if already logged in
if (is_logged_in()) {
    header("Location: home.php");
    exit();
}

// Process login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = db_connect();
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];
    
    $result = $conn->query("SELECT * FROM users WHERE email='$email' LIMIT 1");
    
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            header("Location: home.php");
            exit();
        }
    }
    
    // If we get here, login failed
    $error = "Invalid email or password";
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
        
        .login-container {
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
        input[type="password"] {
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
            color:#FFA500;
            text-decoration: none;
        }
        
        .links a:hover {
            text-decoration:  underline;
        }
        
        .error {
            color: #ff4444;
            background: rgba(255, 68, 68, 0.1);
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 1rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <!-- Replace with your actual logo image -->
            <img src="Logo.png" alt="Logo.png">
            
        </div>
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $conn = db_connect();
            $email = $conn->real_escape_string($_POST['email']);
            $password = $_POST['password'];
            
            $result = $conn->query("SELECT * FROM users WHERE email='$email' LIMIT 1");
            
            if ($result->num_rows == 1) {
                $user = $result->fetch_assoc();
                if (password_verify($password, $user['password'])) {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_name'] = $user['name'];
                    header("Location: home.php");
                    exit();
                } else {
                    echo '<div class="error">Invalid email or password</div>';
                }
            } else {
                echo '<div class="error">Invalid email or password</div>';
            }
            $conn->close();
        }
        ?>
        
        <form method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        
        <div class="links">
            <p>Don't have an account? <a href="register.php">Register here</a></p>
        </div>
    </div>
</body>
</html>