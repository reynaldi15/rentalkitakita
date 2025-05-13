<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="/css/login.css" rel="stylesheet">
</head>
<body>

  <div class="login-container">
    <!-- Icon mobil -->
    <div class="login-logo">
      <i class="fas fa-car"></i>
    </div>

    <!-- Form login -->
    <form method="POST" action="{{ route('login') }}">
      @csrf

      @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
      @endif

      <div class="form-group">
        <i class="fas fa-user form-icon"></i>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
              placeholder="USERNAME" value="{{ old('email') }}" required autofocus>
        @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
        <i class="fas fa-lock form-icon"></i>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
              placeholder="PASSWORD" required>
        @error('password')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <button type="submit" class="btn btn-login">LOGIN</button>
    </form>

    @if (Route::has('password.request'))
      <a href="{{ route('password.request') }}">Lupa Password?</a>
    @endif
  </div>

</body>
</html>
