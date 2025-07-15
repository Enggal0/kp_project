<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register - Kaon</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
    }

    body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            display: flex;
            background-color: #f8f9fa;
        }
    .container {
      display: flex;
      width: 100%;
      box-shadow: 0 0 30px rgba(0,0,0,0.1);
      background: white;
    }

    .left-panel {
        width: 40%;
        flex: 1;
        background: url('background.png') center center / cover no-repeat;
        background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
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

    @keyframes shimmer {
      0% { background-position: -200px 0; }
      100% { background-position: 200px 0; }
    }

    .diagonal-overlay {
      position: absolute;
      top: -50%;
      left: -10%;
      width: 120%;
      height: 200%;
      background: linear-gradient(45deg, rgba(0,0,0,0.1) 0%, transparent 30%, rgba(255,255,255,0.1) 70%, transparent 100%);
      transform: rotate(15deg);
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
      width: 60%;
      padding: 40px 60px 40px;
      /* background: white; */
      display: flex;
      flex-direction: column;
      justify-content: center;
      position: relative;
    }

    .register-title {
      font-size: 32px;
      color: #b90000;
      margin-bottom: 5px;
      font-weight: 700;
      letter-spacing: -1px;
    }

    .subtitle {
      color: #888;
      margin-bottom: 30px;
      font-size: 1.2rem;
      font-weight: 400;
    }

    #messageContainer {
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
      position: relative;
    }

    form input {
      width: 100%;
      padding: 14px;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 14px;
      transition: all 0.3s ease;
      background: #f9fafb;
      color: #374151;
    }

    form input:focus {
      outline: none;
      border-color: #3b82f6;
      background: white;
      box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
      transform: translateY(-1px);
    }

    password-wrapper {
        position: relative;
        display: flex;
        align-items: center;
        }

    .password-wrapper input {
        width: 100%;
        padding: 14px;
        padding-right: 45px; /* Tambahkan space kanan agar icon tidak menumpuk */
        border: 1px solid #ddd;
        border-radius: 6px;
        background-color: #f9fafb;
        font-size: 14px;
        }

    .toggle-password {
      position: absolute;
      right: 12px;
      top: 50%;
        transform: translateY(-50%);
      cursor: pointer;
      font-size: 18px;
      color: #888;
      background: none;
      border: none;
      padding: 8px;
      border-radius: 6px;
      transition: all 0.2s ease;
    }

    .toggle-password:hover {
      background: #f3f4f6;
      color: #374151;
    }

    .toggle-password img {
        width: 20px;
        height: 20px;
}

    .register-btn {
      width: 100%;
      padding: 14px;
      background: linear-gradient(135deg, #b90000 0%, #8b0000 100%);
      color: white;
      font-weight: bold;
      border: none;
      border-radius: 25px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 10px;
      transition: all 0.3s ease;
      text-transform: uppercase;
      letter-spacing: 1px;
      box-shadow: 0 4px 15px rgba(185, 0, 0, 0.3);
    }

    .register-btn:hover:not(:disabled) {
      background: linear-gradient(135deg, #a30000 0%, #720000 100%);
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(185, 0, 0, 0.4);
    }

    .register-btn:active {
      transform: translateY(0);
    }

    .register-btn:disabled {
      opacity: 0.6;
      cursor: not-allowed;
      transform: none;
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

    .error-message {
      background: linear-gradient(135deg, #fee2e2 0%, #fecaca 100%);
      color: #dc2626;
      padding: 1rem;
      border-radius: 12px;
      font-size: 0.9rem;
      margin-bottom: 1.5rem;
      border-left: 4px solid #dc2626;
      animation: slideIn 0.3s ease;
    }

    .success-message {
      background: linear-gradient(135deg, #dcfce7 0%, #bbf7d0 100%);
      color: #16a34a;
      padding: 1rem;
      border-radius: 12px;
      font-size: 0.9rem;
      margin-bottom: 1.5rem;
      border-left: 4px solid #16a34a;
      animation: slideIn 0.3s ease;
    }

    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateY(-10px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .loading-spinner {
      display: inline-block;
      width: 20px;
      height: 20px;
      border: 2px solid rgba(255,255,255,0.3);
      border-radius: 50%;
      border-top-color: white;
      animation: spin 1s ease-in-out infinite;
      margin-right: 10px;
    }

    @keyframes spin {
      to { transform: rotate(360deg); }
    }

    /* Form validation styles */
    form input.invalid {
      border-color: #ef4444;
      background: #fef2f2;
    }

    form input.valid {
      border-color: #22c55e;
      background: #f0fdf4;
    }

    .validation-message {
      font-size: 0.85rem;
      margin-top: 0.5rem;
      transition: all 0.2s ease;
    }

    .validation-message.error {
      color: #ef4444;
    }

    .validation-message.success {
      color: #22c55e;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
      }
      
      .left-panel {
        width: 100%;
        height: 35vh;
        padding: 2rem;
      }
      
      .right-panel {
        width: 100%;
        padding: 40px 20px;
        justify-content: flex-start;
        overflow-y: auto;
      }
      
      .register-title {
        font-size: 28px;
      }

      .subtitle {
        font-size: 1rem;
      }
    }

    @media (max-width: 480px) {
      .right-panel {
        padding: 30px 15px;
      }
      
      .register-title {
        font-size: 24px;
      }

       .password-container {
            position: relative;
            display: flex;
            align-items: center;
        }

        .form-input {
            width: 100%;
            padding: 1rem;
            padding-right: 45px;
            border: 2px solid #e1e5e9;
            border-radius: 8px;
            font-size: 1rem;
            background: #f8f9fa;
        }

        .form-input:focus {
            outline: none;
            border-color: #c41e3a;
            background: white;
            box-shadow: 0 0 0 3px rgba(196, 30, 58, 0.1);
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
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="left-panel">
      <div class="diagonal-overlay"></div>
      <div class="logo">Kaon</div>
      <p class="tagline">
        An application designed to enhance task coordination and employee performance tracking in one integrated platform
      </p>
    </div>
    <div class="right-panel">
      <h1 class="register-title">Register</h1>
      <p class="subtitle">Sign up to get started.</p>
      
      <div id="messageContainer"></div>
      
      <form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div class="form-group">
        <x-input-label for="name" :value="__('Full Name')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email -->
    <div class="form-group">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- NIK -->
    <div class="form-group">
        <x-input-label for="nik" :value="__('NIK')" />
        <x-text-input id="nik" class="block mt-1 w-full" type="text" name="nik" :value="old('nik')" required autocomplete="off" maxlength="16" />
        <x-input-error :messages="$errors->get('nik')" class="mt-2" />
    </div>

    <!-- Role -->
    <div class="form-group">
        <x-input-label for="role" :value="__('Role')" />
        <select id="role" name="role" class="block mt-1 w-full rounded-md" required>
            <option value="" disabled {{ old('role') ? '' : 'selected' }}>{{ __('Select Role') }}</option>
            <option value="manager" {{ old('role') == 'manager' ? 'selected' : '' }}>Manager</option>
            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="employee" {{ old('role') == 'employee' ? 'selected' : '' }}>Employee</option>
        </select>
        <x-input-error :messages="$errors->get('role')" class="mt-2" />
    </div>

    <!-- Phone -->
    <div class="form-group">
        <x-input-label for="phone" :value="__('Phone')" />
        <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="tel" />
        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="form-group">
        <x-input-label for="password" :value="__('Password')" />
        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="form-group">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>
        <x-primary-button class="ms-4" type="submit">
            {{ __('Register') }}
        </x-primary-button>
    </div>
</form>

      <p class="login-link">
        Already have an account? <a href="{{ route('login') }}">Login here</a>
      </p>
    </div>
  </div>
  
  <script>
    // Form elements
    const form = document.getElementById('registerForm');
    const submitBtn = document.getElementById('submitBtn');
    const messageContainer = document.getElementById('messageContainer');

    // Input elements
    const fullName = document.getElementById('fullName');
    const email = document.getElementById('email');
    const nik = document.getElementById('nik');
    const phone = document.getElementById('phone');
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirmPassword');

    // Password toggle functionality
   function togglePassword(inputId, toggleElement) {
    const input = document.getElementById(inputId);
    const iconImg = toggleElement.querySelector('img');

    if (input.type === 'password') {
        input.type = 'text';
        iconImg.src = 'pass-open.png'; // ganti ke ikon buka
    } else {
        input.type = 'password';
        iconImg.src = 'pass-close.png'; // ganti ke ikon tutup
    }
    }


    // NIK validation - only numbers
    nik.addEventListener('input', function() {
      this.value = this.value.replace(/\D/g, '');
      validateField(this, 'nik');
    });

    // Phone validation
    phone.addEventListener('input', function() {
      this.value = this.value.replace(/[^0-9+\-\s()]/g, '');
      validateField(this, 'phone');
    });

    // Real-time validation
    fullName.addEventListener('blur', () => validateField(fullName, 'fullName'));
    email.addEventListener('blur', () => validateField(email, 'email'));
    password.addEventListener('input', () => validateField(password, 'password'));
    confirmPassword.addEventListener('blur', () => validateField(confirmPassword, 'confirmPassword'));

    function validateField(field, type) {
      const value = field.value.trim();
      const errorElement = document.getElementById(type + 'Error');
      let isValid = true;
      let message = '';

      switch(type) {
        case 'fullName':
          if (value.length < 2) {
            isValid = false;
            message = 'Full name must be at least 2 characters';
          } else if (!/^[a-zA-Z\s]+$/.test(value)) {
            isValid = false;
            message = 'Full name can only contain letters and spaces';
          }
          break;

        case 'email':
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailRegex.test(value)) {
            isValid = false;
            message = 'Please enter a valid email address';
          }
          break;

        case 'phone':
          if (value.length < 10) {
            isValid = false;
            message = 'Phone number must be at least 10 digits';
          }
          break;

        case 'password':
          if (value.length < 8) {
            isValid = false;
            message = 'Password must be at least 8 characters';
          } else if (!/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)/.test(value)) {
            isValid = false;
            message = 'Password must contain uppercase, lowercase, and number';
          }
          break;

        case 'confirmPassword':
          if (value !== password.value) {
            isValid = false;
            message = 'Passwords do not match';
          }
          break;
      }

      // Update field appearance
      field.classList.remove('valid', 'invalid');
      if (value) {
        field.classList.add(isValid ? 'valid' : 'invalid');
      }

      // Update error message
      errorElement.textContent = message;
      errorElement.className = 'validation-message ' + (isValid ? 'success' : 'error');

      return isValid;
    }

    // Form submission
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Validate all fields
      const isValidForm = [
        validateField(fullName, 'fullName'),
        validateField(email, 'email'),
        validateField(nik, 'nik'),
        validateField(phone, 'phone'),
        validateField(password, 'password'),
        validateField(confirmPassword, 'confirmPassword')
      ].every(Boolean);

      if (!isValidForm) {
        showMessage('Please fix the errors above before submitting.', 'error');
        return;
      }

      // Show loading state
      const originalText = submitBtn.textContent;
      submitBtn.innerHTML = '<span class="loading-spinner"></span>Registering...';
      submitBtn.disabled = true;

      // Clear previous messages
      messageContainer.innerHTML = '';

      // Simulate registration process
      setTimeout(() => {
        // Simulate success
        showMessage('Registration successful! Welcome to Kaon. You can now login with your credentials.', 'success');
        
        // Reset form
        form.reset();
        
        // Remove validation classes
        document.querySelectorAll('form input').forEach(input => {
          input.classList.remove('valid', 'invalid');
        });
        
        // Clear validation messages
        document.querySelectorAll('.validation-message').forEach(msg => {
          msg.textContent = '';
          msg.className = 'validation-message';
        });
        
        // Reset button
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
        
        // Scroll to top to see success message
        window.scrollTo({ top: 0, behavior: 'smooth' });
      }, 2000);
    });

    function showMessage(message, type) {
      const messageClass = type === 'error' ? 'error-message' : 'success-message';
      messageContainer.innerHTML = `<div class="${messageClass}">${message}</div>`;
    }

    // Input focus animations
    const inputs = document.querySelectorAll('form input');
    inputs.forEach(input => {
      input.addEventListener('focus', function() {
        if (this.parentElement.classList.contains('password-field')) {
          this.parentElement.parentElement.classList.add('focused');
        } else {
          this.parentElement.classList.add('focused');
        }
      });
      
      input.addEventListener('blur', function() {
        if (this.parentElement.classList.contains('password-field')) {
          this.parentElement.parentElement.classList.remove('focused');
        } else {
          this.parentElement.classList.remove('focused');
        }
      });
    });

    // Animate elements on load
    document.addEventListener('DOMContentLoaded', function() {
      const elements = document.querySelectorAll('.register-title, .subtitle, .form-group, .register-btn, .login-link');
      elements.forEach((el, index) => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
        
        setTimeout(() => {
          el.style.opacity = '1';
          el.style.transform = 'translateY(0)';
        }, index * 150);
      });

      // Animate logo
      setTimeout(() => {
        document.querySelector('.logo').style.transform = 'scale(1.05)';
        setTimeout(() => {
          document.querySelector('.logo').style.transform = 'scale(1)';
        }, 300);
      }, 500);
    });
  </script>
</body>
</html>