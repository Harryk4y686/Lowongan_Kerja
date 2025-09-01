<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | CloseCall</title>
    @vite('resources/css/app.css') <!-- Tailwind -->
    <style>
        /* Background gradient */
        body {
            background: linear-gradient(to bottom right, #b3ffab, #12fff7);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
        }

        /* Card utama */
        .card {
            background: white;
            display: flex;
            width: 900px;
            max-width: 95%;
            border-radius: 15px;
            box-shadow: 0px 8px 20px rgba(0,0,0,0.15);
            overflow: hidden;
        }

        /* Bagian kiri (logo/ilustrasi) */
        .bagian-kiri {
            background: linear-gradient(to bottom, #e5e7eb, #9ca3af);
            flex: 1;
            display: flex;
            justify-content: start;
            align-items: start;
            padding: 20px;
        }
        .logo {
            height: 40px;
        }

        /* Bagian kanan (form) */
        .card-right {
            flex: 1.3;
            background: white;
            padding: 40px;
        }

        .title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        form input {
            width: 100%;
            padding: 12px;
            margin-top: 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            outline: none;
            transition: all 0.2s;
        }

        form input:focus {
            border-color: #10b981; /* Tailwind emerald-500 */
            box-shadow: 0px 0px 4px rgba(16,185,129,0.6);
        }

        .checkbox {
            display: flex;
            align-items: center;
            margin: 15px 0;
            font-size: 0.875rem;
        }

        .btn-register {
            background: #10b981;
            color: white;
            padding: 12px;
            width: 100%;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn-register:hover {
            background: #059669;
        }

        .social-login {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .social-login img {
            width: 40px;
            height: 40px;
            cursor: pointer;
        }

        .login-link {
            text-align: center;
            margin-top: 10px;
            font-size: 0.9rem;
        }

        .login-link a {
            color: #10b981;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="card">
        <!-- Kiri -->
        <div class="bagian-kiri">
            <img src="/images/logo.png" alt="CloseCall Logo" class="logo">
        </div>

        <!-- Kanan -->
        <div class="card-right">
            <h2 class="title">Welcome to CloseCall!</h2>
            <p class="font-semibold mb-4">Register</p>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
                <input type="email" name="email" placeholder="Email or Phone" required>
                <input type="text" name="country" placeholder="Country" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="password_confirmation" placeholder="Password Verify" required>

                <div class="checkbox">
                    <input type="checkbox" required class="mr-2">
                    <label>I have read and accepted the terms and conditions</label>
                </div>

                <button type="submit" class="btn-register">Register</button>

                <div class="login-link">
                    Already have an account? <a href="{{ route('login') }}">Login</a>
                </div>

                <div class="flex items-center my-4">
                    <hr class="flex-grow border-gray-300">
                    <span class="mx-2 text-gray-500">or</span>
                    <hr class="flex-grow border-gray-300">
                </div>

                <div class="social-login">
                    <img src="/images/facebook.png" alt="Facebook">
                    <img src="/images/google.png" alt="Google">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
