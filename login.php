<?php
session_start();
include 'config.php';

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $error = "Please fill in all fields.";
    } else {
        $sql = "SELECT id, email, password FROM users WHERE email = ?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                header("Location:Home.php#courses");
                exit();
            } else {
                $error = "Invalid email or password.";
            }
        } else {
            $error = "user not found sign-up please .";
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4f46e5',
                        secondary: '#7c3aed',
                        accent: '#a5b4fc',
                        bgDark: '#1e1b4b',
                        bgLight: '#f8fafc',
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.3s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(10px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-bgDark min-h-screen flex items-center justify-center p-4 sm:p-6 lg:p-8">
    <div class="w-full max-w-xs sm:max-w-md lg:max-w-lg bg-white/10 backdrop-blur-md rounded-2xl shadow-xl border border-white/10 p-6 sm:p-8 lg:p-10">
        <div class="flex border-b border-white/20 relative">
            <button id="login-tab" class="flex-1 py-3 sm:py-4 text-center text-white font-medium text-sm sm:text-base lg:text-lg transition-colors duration-300">Login</button>
            <button id="signup-tab" class="flex-1 py-3 sm:py-4 text-center text-white/50 font-medium text-sm sm:text-base lg:text-lg transition-colors duration-300">Sign Up</button>
            <div id="active-tab" class="absolute bottom-0 left-0 h-1 bg-primary w-1/2 transition-all duration-300"></div>
        </div>
        <div class="mt-6 sm:mt-8">
            <form id="login-form" action="C:\xampp\htdocs\Gyan.com\login.php" method="POST" class="space-y-4 sm:space-y-6">
                <input type="hidden" name="login" value="1">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white text-center">Welcome Back</h2>
                <?php if ($error): ?>
                    <div class="text-red-400 text-center text-sm"><?php echo htmlspecialchars($error); ?></div>
                <?php endif; ?>
                <div class="relative group">
                    <input id="login-email" name="email" type="email" required class="w-full px-4 py-2 sm:py-3 bg-white/5 border border-white/20 rounded-lg text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-primary peer" placeholder=" ">
                    <label for="login-email" class="absolute left-4 top-2 sm:top-3 text-white/50 text-sm sm:text-base lg:text-lg transition-all duration-300 peer-placeholder-shown:top-2 sm:peer-placeholder-shown:top-3 peer-placeholder-shown:scale-100 peer-focus:-top-5 peer-focus:scale-75 peer-focus:text-primary">Email</label>
                </div>
                <div class="relative group">
                    <input id="login-password" name="password" type="password" required minlength="6" class="w-full px-4 py-2 sm:py-3 bg-white/5 border border-white/20 rounded-lg text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-primary peer" placeholder=" ">
                    <label for="login-password" class="absolute left-4 top-2 sm:top-3 text-white/50 text-sm sm:text-base lg:text-lg transition-all duration-300 peer-placeholder-shown:top-2 sm:peer-placeholder-shown:top-3 peer-placeholder-shown:scale-100 peer-focus:-top-5 peer-focus:scale-75 peer-focus:text-primary">Password</label>
                    <button type="button" class="absolute right-3 top-2 sm:top-3 text-white/50 hover:text-primary transition-colors duration-300">
                        <i class="fas fa-eye-slash"></i>
                    </button>
                </div>
                <div class="flex justify-between items-center text-xs sm:text-sm lg:text-base">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember" type="checkbox" class="h-4 w-4 rounded border-white/50 bg-white/5 focus:ring-primary text-primary">
                        <label for="remember-me" class="ml-2 text-white/70">Remember me</label>
                    </div>
                  <!--  <a href="forgot/forgot_password.php" class="text-white/70 hover:text-primary hover:underline">Forgot Password?</a> -->
                </div>
                <button type="submit" class="w-full bg-primary text-white font-semibold py-2 sm:py-3 rounded-lg hover:bg-secondary transition-all duration-300 flex items-center justify-center space-x-2">
                    <span>Login</span>
                    <i class="fas fa-sign-in-alt"></i>
                </button>
                <div class="text-center text-white/50 text-xs sm:text-sm lg:text-base">or continue with</div>
                <div class="grid grid-cols-3 gap-3 sm:gap-4">
                    <button type="button" class="bg-white/5 p-2 sm:p-3 rounded-lg hover:bg-white/10 transition-all duration-300" aria-label="Login with Google">
                        <i class="fab fa-google text-red-400"></i>
                    </button>
                    <button type="button" class="bg-white/5 p-2 sm:p-3 rounded-lg hover:bg-white/10 transition-all duration-300" aria-label="Login with Apple">
                        <i class="fab fa-apple text-gray-200"></i>
                    </button>
                    <button type="button" class="bg-white/5 p-2 sm:p-3 rounded-lg hover:bg-white/10 transition-all duration-300" aria-label="Login with GitHub">
                        <i class="fab fa-github text-purple-300"></i>
                    </button>
                </div>
            </form>
            <form id="signup-form" action="C:\xampp\htdocs\Gyan.com\signup.php" method="POST" class="space-y-4 sm:space-y-6 hidden">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white text-center">Create Account</h2>
                <div class="relative group">
                    <input id="signup-name" name="name" type="text" required class="w-full px-4 py-2 sm:py-3 bg-white/5 border border-white/20 rounded-lg text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-primary peer" placeholder=" ">
                    <label for="signup-name" class="absolute left-4 top-2 sm:top-3 text-white/50 text-sm sm:text-base lg:text-lg transition-all duration-300 peer-placeholder-shown:top-2 sm:peer-placeholder-shown:top-3 peer-placeholder-shown:scale-100 peer-focus:-top-5 peer-focus:scale-75 peer-focus:text-primary">Full Name</label>
                </div>
                <div class="relative group">
                    <input id="signup-email" name="email" type="email" required class="w-full px-4 py-2 sm:py-3 bg-white/5 border border-white/20 rounded-lg text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-primary peer" placeholder=" ">
                    <label for="signup-email" class="absolute left-4 top-2 sm:top-3 text-white/50 text-sm sm:text-base lg:text-lg transition-all duration-300 peer-placeholder-shown:top-2 sm:peer-placeholder-shown:top-3 peer-placeholder-shown:scale-100 peer-focus:-top-5 peer-focus:scale-75 peer-focus:text-primary">Email</label>
                </div>
                <div class="relative group">
                    <input id="signup-password" name="password" type="password" required minlength="6" class="w-full px-4 py-2 sm:py-3 bg-white/5 border border-white/20 rounded-lg text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-primary peer" placeholder=" ">
                    <label for="signup-password" class="absolute left-4 top-2 sm:top-3 text-white/50 text-sm sm:text-base lg:text-lg transition-all duration-300 peer-placeholder-shown:top-2 sm:peer-placeholder-shown:top-3 peer-placeholder-shown:scale-100 peer-focus:-top-5 peer-focus:scale-75 peer-focus:text-primary">Password</label>
                    <button type="button" class="absolute right-3 top-2 sm:top-3 text-white/50 hover:text-primary transition-colors duration-300">
                        <i class="fas fa-eye-slash"></i>
                    </button>
                </div>
                <div class="relative group">
                    <input id="signup-confirm" name="confirm-password" type="password" required minlength="6" class="w-full px-4 py-2 sm:py-3 bg-white/5 border border-white/20 rounded-lg text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-primary peer" placeholder=" ">
                    <label for="signup-confirm" class="absolute left-4 top-2 sm:top-3 text-white/50 text-sm sm:text-base lg:text-lg transition-all duration-300 peer-placeholder-shown:top-2 sm:peer-placeholder-shown:top-3 peer-placeholder-shown:scale-100 peer-focus:-top-5 peer-focus:scale-75 peer-focus:text-primary">Confirm Password</label>
                    <button type="button" class="absolute right-3 top-2 sm:top-3 text-white/50 hover:text-primary transition-colors duration-300">
                        <i class="fas fa-eye-slash"></i>
                    </button>
                </div>
                <div class="flex items-center text-xs sm:text-sm lg:text-base">
                    <input id="terms" name="terms" type="checkbox" required class="h-4 w-4 rounded border-white/50 bg-white/5 focus:ring-primary text-primary">
                    <label for="terms" class="ml-2 text-white/70">
                        I agree to the <a href="#" class="text-white/70 hover:text-primary hover:underline">Terms</a> & <a href="#" class="text-white/70 hover:text-primary hover:underline">Privacy Policy</a>
                    </label>
                </div>
                <button type="submit" class="w-full bg-primary text-white font-semibold py-2 sm:py-3 rounded-lg hover:bg-secondary transition-all duration-300 flex items-center justify-center space-x-2">
                    <span>Sign Up</span>
                    <i class="fas fa-user-plus"></i>
                </button>
                <div class="text-center text-white/50 text-xs sm:text-sm lg:text-base">or sign up with</div>
                <div class="grid grid-cols-3 gap-3 sm:gap-4">
                    <button type="button" class="bg-white/5 p-2 sm:p-3 rounded-lg hover:bg-white/10 transition-all duration-300" aria-label="Sign up with Google">
                        <i class="fab fa-google text-red-400"></i>
                    </button>
                    <button type="button" class="bg-white/5 p-2 sm:p-3 rounded-lg hover:bg-white/10 transition-all duration-300" aria-label="Sign up with Apple">
                        <i class="fab fa-apple text-gray-200"></i>
                    </button>
                    <button type="button" class="bg-white/5 p-2 sm:p-3 rounded-lg hover:bg-white/10 transition-all duration-300" aria-label="Sign up with GitHub">
                        <i class="fab fa-github text-purple-300"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const loginTab = document.getElementById('login-tab');
        const signupTab = document.getElementById('signup-tab');
        const loginForm = document.getElementById('login-form');
        const signupForm = document.getElementById('signup-form');
        const activeTab = document.getElementById('active-tab');

        function showLoginForm() {
            loginTab.classList.add('text-white');
            loginTab.classList.remove('text-white/50');
            signupTab.classList.add('text-white/50');
            signupTab.classList.remove('text-white');
            activeTab.style.left = '0%';
            loginForm.classList.remove('hidden');
            loginForm.classList.add('animate-slide-up');
            signupForm.classList.add('hidden');
            signupForm.classList.remove('animate-slide-up');
        }

        function showSignupForm() {
            signupTab.classList.add('text-white');
            signupTab.classList.remove('text-white/50');
            loginTab.classList.add('text-white/50');
            loginTab.classList.remove('text-white');
            activeTab.style.left = '50%';
            signupForm.classList.remove('hidden');
            signupForm.classList.add('animate-slide-up');
            loginForm.classList.add('hidden');
            loginForm.classList.remove('animate-slide-up');
        }

        loginTab.addEventListener('click', showLoginForm);
        signupTab.addEventListener('click', showSignupForm);

        document.querySelectorAll('[id$="-password"], #signup-confirm').forEach(input => {
            const eyeBtn = input.nextElementSibling;
            if (eyeBtn && eyeBtn.tagName === 'BUTTON') {
                eyeBtn.addEventListener('click', () => {
                    const icon = eyeBtn.querySelector('i');
                    if (input.type === 'password') {
                        input.type = 'text';
                        icon.classList.replace('fa-eye-slash', 'fa-eye');
                        eyeBtn.classList.add('text-primary');
                    } else {
                        input.type = 'password';
                        icon.classList.replace('fa-eye', 'fa-eye-slash');
                        eyeBtn.classList.remove('text-primary');
                    }
                });
            }
        });

        document.querySelectorAll('input').forEach(input => {
            const label = input.previousElementSibling;
            if (label && label.tagName === 'LABEL') {
                if (input.value) {
                    label.classList.add('-top-5', 'scale-75', 'text-primary');
                    label.classList.remove('top-2', 'sm:top-3', 'scale-100', 'text-white/50');
                }
                input.addEventListener('focus', () => {
                    label.classList.add('-top-5', 'scale-75', 'text-primary');
                    label.classList.remove('top-2', 'sm:top-3', 'scale-100', 'text-white/50');
                });
                input.addEventListener('blur', () => {
                    if (!input.value) {
                        label.classList.remove('-top-5', 'scale-75', 'text-primary');
                        label.classList.add('top-2', 'sm:top-3', 'scale-100', 'text-white/50');
                    }
                });
            }
        });

        document.addEventListener('DOMContentLoaded', showLoginForm);
    </script>
</body>
</html>
<?php
mysqli_close($db);
?>
