<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background: linear-gradient(135deg, #6c5ce7, #00b894); /* Gradient background */
            font-family: 'Arial', sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .container {
            max-width: 400px;
            width: 100%;
        }

        .card {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #2d3436;
            color: white;
            text-align: center;
            font-size: 1.25rem;
            padding: 20px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .card-body {
            background-color: white;
            padding: 30px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .form-control {
            border-radius: 12px;
            padding: 14px;
            font-size: 16px;
            border: 2px solid #dfe6e9;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: #0984e3; /* Blue border on focus */
            box-shadow: 0 0 8px rgba(9, 132, 227, 0.2);
        }

        .btn-primary {
            background-color: #0984e3;
            border: none;
            border-radius: 12px;
            padding: 12px;
            font-size: 16px;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #74b9ff;
            transform: translateY(-2px);
        }

        .btn-primary:active {
            background-color: #0984e3;
            transform: translateY(2px);
        }

        .text-danger {
            font-size: 14px;
            color: #e74c3c;
        }

        .form-text {
            font-size: 14px;
            color: #555;
            text-align: center;
            margin-top: 15px;
        }

        .form-text a {
            color: #0984e3;
            text-decoration: none;
            font-weight: bold;
        }

        .form-text a:hover {
            text-decoration: underline;
        }

        /* Animation for form appearance */
        .card {
            opacity: 0;
            animation: fadeIn 0.6s forwards;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="card shadow-lg">
            <div class="card-header">
                <h4 class="mb-0">{{ __('Forgot your password?') }}</h4>
            </div>
            <div class="card-body">
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-3">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <x-primary-button class="btn btn-primary">
                            {{ __('Email Password Reset Link') }}
                        </x-primary-button>
                    </div>
                </form>

                <div class="form-text">
                    <p>Remembered your password? <a href="{{ route('login') }}">Login here</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional for Bootstrap functionality like modals) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
