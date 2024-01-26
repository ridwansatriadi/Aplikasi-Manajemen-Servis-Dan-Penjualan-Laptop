<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Login</title>
    <style>
        body {
            background-image: url('ServisLaptop.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            height: 100vh;
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 20px; /* Jarak antara logo dan formulir */
        }

        .logo {
            width: 150px; /* Ubah sesuai keinginan Anda */
            height: 150px; /* Ubah sesuai keinginan Anda */
            border-radius: 50%;
            overflow: hidden;
        }

        .logo img {
            width: 100%;
            height: auto;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            text-align: center;
            margin-top: 20px; /* Jarak antara formulir login dan formulir register */
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
            color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="logo-container">
        <div class="logo">
            <img src="pioner-komputer.jpeg" alt="Logo">
        </div>
    </div>

    <div class="form-container">
        <h2 style="color: #333;">Register</h2>
        <form method="POST" action="#" class="needs-validation" novalidate>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>

        <div>
            <p style="color: #333;">Already have an account? <a href="#">Login</a></p>
        </div>
    </div>
</body>

</html>
