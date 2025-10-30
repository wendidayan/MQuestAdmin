<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
     <link rel="stylesheet" href="{{ asset('assets/css/index_style.css') }}">
</head>
<body>
    <div class="login-container">
        <div class="logo-container">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="logo">
        </div>
        <h2>Welcome!</h2>
        <p>Please login to your account</p>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter email" required>
        </div>
        <div class="input-group">
            <div class="password-header">
                <label for="password">Password</label>
                <a href="forgot_password.html" class="forgot-password">Forgot Password?</a>
            </div>
            <input type="password" id="password" name="password" placeholder="Enter password" required>
        </div>
        <button class="login-button" onclick="handleLogin()">Login</button>
        <p class="register-link">Don't have an account? <a href="{{ route('register') }}">Register Instead</a></p>
    </div>
    <div class="alert" id="alert" style="display: none;">
        <p id="alert-message"></p>
        <button onclick="closeAlert()">OK</button>
    </div>
    <script src="./userside_backend/user.js"></script>
    <script>
        async function handleLogin() {
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        if (!email || !password) {
            showAlert('Please enter your email and password');
            return;
        }

        try {
            const response = await login(email, password); // from user.js

            if (!response.success) {
                showAlert('Login failed. Please try again.');
                return;
            }

            const user = response.user;

            // ✅ Save user + token in localStorage
            localStorage.setItem('user', JSON.stringify(user));
            localStorage.setItem('token', response.token);

            showAlert(`Login successful! Welcome, ${user.first_name}!`);

            setTimeout(async () => {
                if (user.role_id === 1) {
                    // Admin needs secret key
                    const secretKey = prompt("Admin detected. Please enter your secret key:");
                    if (!secretKey) {
                        showAlert("Secret key is required for admin access.");
                        return;
                    }

                    try {
                        const confirmRes = await confirmAdminLogin(user.server_id, secretKey);
                        if (confirmRes.success) {
                            window.location.href = 'home_admin.html';
                        } else {
                            showAlert(confirmRes.error || "Admin confirmation failed.");
                        }
                    } catch (err) {
                        showAlert(err.message);
                    }

                } else if (user.role_id === 2) {
                    window.location.href = 'home_teacher.html';
                } else if (response.user.role_id === 3) {
                    const userId = response.user.id;
                    const token = response.token; // from your login API
                    
                    // Send userId + token to the app
                    window.location.href = `intent://open?userId=${userId}&token=${token}#Intent;package=com.anonymous.MQuest;scheme=app;end`;

                    // Fallback to download page if not installed
                    setTimeout(() => {
                        window.location.href = "https://play.google.com/store/apps/details?id=com.myapp";
                    }, 2000);
                }
            }, 1200);

        } catch (error) {
            console.error("Login error:", error);
            showAlert(error.message || 'Login failed. Please try again.');
        }
    }

    function showAlert(message) {
        document.getElementById('alert-message').textContent = message;
        document.getElementById('alert').style.display = 'flex';
    }

    function closeAlert() {
        document.getElementById('alert').style.display = 'none';
    }
    </script>
</body>
</html>