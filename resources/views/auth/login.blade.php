<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login v5 - Kaon</title>
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
  height: 100vh;
  display: flex;
  background-color: #f8f9fa;
}

.container {
  display: flex;
  width: 100%;
  height: 100vh;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  background: white;
}

.left-panel {
  flex: 1;
  background: url('../img/background.png') center center / cover no-repeat;
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  color: white;
  overflow: hidden;
}

.left-panel::before {
  content: '';
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: linear-gradient(45deg, rgba(255,255,255,0.1) 0%, transparent 50%, rgba(255,255,255,0.05) 100%);
  transform: rotate(45deg);
  pointer-events: none;
}

.logo {
  font-size: 4rem;
  font-weight: bold;
  margin-bottom: 2rem;
  text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
  letter-spacing: -2px;
  z-index: 2;
}

.tagline {
  font-size: 1.3rem;
  text-align: center;
  line-height: 1.6;
  max-width: 400px;
  font-weight: 300;
  z-index: 2;
  text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
}

.right-panel {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 3rem;
  background: white;
}

.version {
  position: absolute;
  top: 20px;
  left: 20px;
  color: #666;
  font-size: 0.9rem;
  font-weight: 500;
}

.login-header {
  margin-bottom: 2rem;
}

.login-title {
  font-size: 2.5rem;
  color: #c41e3a;
  font-weight: bold;
  margin-bottom: 0.5rem;
}

.login-subtitle {
  color: #888;
  font-size: 1.1rem;
  font-weight: 400;
}

.login-link {
  text-align: center;
  margin-top: 15px;
  color: #888;
}

.login-link a {
  color: #253D90;
  text-decoration: none;
  font-weight: 600;
  transition: color 0.2s ease;
}

.login-link a:hover {
  color: #a30000;
  text-decoration: underline;
}

.form-group {
  margin-bottom: 1.5rem;
}

.form-label {
  display: block;
  margin-bottom: 0.5rem;
  color: #2c5aa0;
  font-weight: 600;
  font-size: 1rem;
}

.form-input {
  width: 100%;
  padding: 1rem;
  padding-right: 45px;
  border: 2px solid #e1e5e9;
  border-radius: 8px;
  font-size: 1rem;
  transition: all 0.3s ease;
  background: #f8f9fa;
}

.form-input:focus {
  outline: none;
  border-color: #c41e3a;
  background: white;
  box-shadow: 0 0 0 3px rgba(196, 30, 58, 0.1);
}

.form-options {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  margin-bottom: 2rem;
}

.reset-link {
  color: #2c5aa0;
  text-decoration: none;
  font-size: 0.95rem;
  font-weight: 500;
  transition: color 0.3s ease;
}

.reset-link:hover {
  color: #1a4480;
  text-decoration: underline;
}

.login-button {
  width: 100%;
  padding: 1rem;
  background: linear-gradient(135deg, #c41e3a 0%, #a01729 100%);
  color: white;
  border: none;
  border-radius: 50px;
  font-size: 1.1rem;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.login-button:hover {
  background: linear-gradient(135deg, #a01729 0%, #8b1122 100%);
  transform: translateY(-2px);
  box-shadow: 0 4px 12px rgba(196, 30, 58, 0.4);
}

.login-button:active {
  transform: translateY(0);
}

.password-container {
  position: relative;
  display: flex;
  align-items: center;
}

.toggle-password-icon {
  position: absolute;
  right: 15px;
  cursor: pointer;
  width: 22px;
  height: 22px;
  opacity: 0.7;
}

.toggle-password-icon:hover {
  opacity: 1;
}

@media (max-width: 768px) {
  .container {
    flex-direction: column;
  }

  .left-panel {
    flex: none;
    height: 40vh;
  }

  .logo {
    font-size: 3rem;
    margin-bottom: 1rem;
  }

  .tagline {
    font-size: 1.2rem;
  }

  .right-panel {
    padding: 2rem;
  }

  .login-title {
    font-size: 2rem;
  }
}

  </style>
</head>
<body>
  <div class="version">Login v5</div>

  <div class="container">
    <div class="left-panel">
      <div class="logo">Kaon</div>
      <div class="tagline">
        An application that will make your gift sending experience even more memorable
      </div>
    </div>

    <div class="right-panel">
      <div class="login-header">
        <h1 class="login-title">Login</h1>
        <p class="login-subtitle">Login to your account.</p>
      </div>

      <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
        <label for="nik" class="form-label">NIK</label>
        <input type="text" id="nik" name="nik" class="form-input" required value="{{ old('nik') }}" autofocus />
        @error('nik')
            <span style="color:red;">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="password" class="form-label">Password</label>
        <div class="password-container">
            <input type="password" id="password" name="password" class="form-input" required />
            <!-- SVG icon will be injected by JS, no <img> here -->
        </div>
        @error('password')
            <span style="color:red;">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-options">
        <a href="{{ route('password.request') }}" class="reset-link">Reset Password?</a>
    </div>

    <button type="submit" class="login-button">Login</button>
</form>


      <p class="login-link">
        Don't have an account? <a href="{{ route('register') }}" id="loginLink">Register here</a>
      </p>
    </div>
  </div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Animate form elements
    const elements = document.querySelectorAll('.login-header, .form-group, .form-options, .login-button');
    elements.forEach((el, index) => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'all 0.6s ease';
        setTimeout(() => {
            el.style.opacity = '1';
            el.style.transform = 'translateY(0)';
        }, index * 100);
    });

    // Insert SVG after password input
    const pwContainer = document.querySelector('.password-container');
    if (pwContainer && passwordInput) {
        pwContainer.appendChild(eyeIcon);
        let visible = false;
        eyeIcon.addEventListener('click', function () {
            visible = !visible;
            passwordInput.type = visible ? 'text' : 'password';
            // Change icon
            if (visible) {
                eyeIcon.innerHTML = `
                  <path d="M12 5c-7 0-10 7-10 7s3 7 10 7 10-7 10-7-3-7-10-7zm0 12c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8a3 3 0 100 6 3 3 0 000-6z" fill="#888"/>
                `;
            } else {
                eyeIcon.innerHTML = `
                  <path d="M1 1l22 22M12 5c-7 0-10 7-10 7s3 7 10 7c2.1 0 3.93-.37 5.44-.99M17.94 17.94C19.61 16.61 21 14.5 21 12c0-2.5-1.39-4.61-3.06-5.94M9.53 9.53A3 3 0 0112 9c1.66 0 3 1.34 3 3 0 .47-.11.91-.29 1.29" stroke="#888" stroke-width="2" fill="none"/>
                `;
            }
        });
    }

    // Register link alert (optional, can be removed if not needed)
    const loginLink = document.getElementById('loginLink');
    if (loginLink) {
        loginLink.addEventListener('click', function (e) {
            // e.preventDefault(); // Uncomment if you want to prevent navigation
            // alert('Redirecting to register page...');
        });
    }
});
</script>
</body>
</html>
