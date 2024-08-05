<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #121212;
      color: #ffffff;
    }

    .login-container {
      background-color: #1e1e1e;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.5);
      transition: box-shadow 0.3s ease, transform 0.3s ease;
    }

    .login-container:hover {
      box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.7);
      transform: translateY(-0.5rem);
    }

    .login-container h2 {
      font-weight: 600;
      margin-bottom: 1.5rem;
    }

    .login-container .form-control {
      background-color: #333;
      border: 1px solid #444;
      border-radius: 0.5rem;
      color: #fff;
    }

    .login-container .form-control:focus {
      background-color: #444;
      border-color: #555;
    }

    .login-container .btn-primary {
      background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
      border: none;
      border-radius: 0.5rem;
      transition: background 0.3s ease;
    }

    .login-container .btn-primary:hover {
      background: linear-gradient(135deg, #0056b3 0%, #003a75 100%);
    }

    .login-container .text-center a {
      color: #007bff;
      transition: color 0.3s ease;
    }

    .login-container .text-center a:hover {
      color: #0056b3;
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="login-container">
    <h2 class="text-center">Login</h2>
    <form method="POST" action="{{ route('login.index') }}">
      @csrf
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" required autofocus>
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
        @error('password')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="form-check mb-3">
        <input type="checkbox" class="form-check-input" id="remember" name="remember">
        <label class="form-check-label" for="remember">Remember Me</label>
      </div>
      <button type="submit" class="btn btn-primary w-100">Login</button>
      <div class="text-center mt-3">
        <a href="{{ route('login.index') }}">Forgot Your Password?</a>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
