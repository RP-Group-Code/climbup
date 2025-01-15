<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">

    <!-- Tambahkan CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f8fb;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 30px;
        }
        .btn-custom {
            border-radius: 30px;
            background-color: #28a745;
            color: #fff;
            font-weight: bold;
        }
        .btn-custom:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <center>
            <img src="/img/climbuplogo.png" alt="climbup" class="mt-2 mb-5" style="width: 300PX">
        </center>

        {{-- <div class="login-title">WELCOME</div> --}}
        <form action="$" method="POST">
            @csrf
            <!-- Username -->
            <div class="mb-3">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <!-- Password -->
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <!-- Submit Button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-custom mt-5">LOGIN</button>
            </div>
        </form>
    </div>

    <!-- Tambahkan JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
