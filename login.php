<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant-Themed Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #e8f5e9; /* Light green background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }

        .login-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 350px;
            width: 100%;
            border-left: 5px solid #4CAF50; /* Green plant border */
            transition: 0.3s ease-in-out;
            overflow: hidden;
        }

        h2 {
            color: #2e7d32; /* Dark green heading */
            font-size: 24px;
            margin-bottom: 15px;
        }

        .input-box {
            width: 100%;
            padding-top: 15px;
            padding-bottom: 15px;
            margin: 10px 0;
            border: 1px solid #4CAF50;
            border-radius: 5px;
            font-size: 16px;
            transition: 0.3s;
        }

        .input-box:focus {
            outline: none;
            border-color: #388E3C;
            box-shadow: 0 0 5px rgba(56, 142, 60, 0.5);
        }

        .btn {
            background: #4CAF50;
            color: white;
            border: none;
            padding: 12px 15px;
            width: 100%;
            cursor: pointer;
            font-size: 18px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn:hover {
            background: #388E3C; /* Darker green */
        }

        .link {
            display: block;
            margin-top: 10px;
            color: #2e7d32;
            text-decoration: none;
            font-size: 14px;
        }

        .link:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media screen and (max-width: 480px) {
            body {
                padding: 10px;
            }
            .login-container {
                width: 100%;
                padding: 20px;
                box-shadow: none;
            }
            h2 {
                font-size: 20px;
            }
            .input-box {
                font-size: 14px;
            }
            .btn {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

<div class="login-container">
    <img src="img/core-img/logo-remove.png">
    <h2>🌱 Plant Lovers Login</h2>
    <form action="login_process.php" method="POST">
        <input type="text" name="email" class="input-box" placeholder="Email" required>
        <input type="password" name="password" class="input-box" placeholder="Password" required>
        <button type="submit" class="btn">Login</button>
        <a href="#" class="link">Forgot Password?</a>
        <a href="registration.php" class="link">Create an Account</a>
    </form>
</div>

</body>
</html>
