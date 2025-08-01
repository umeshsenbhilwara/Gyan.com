<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <script src="https://cdn.tailwindcss.com"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
              <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0d9488', // Teal
                        secondary: '#14b8a6', // Light teal
                        accent: '#f59e0b', // Amber
                    },
                    animation: {
                        'bounce-right': 'bounce-right 1s infinite',
                    },
                    keyframes: {
                        'bounce-right': {
                            '0%, 100%': { transform: 'translateX(0)' },
                            '50%': { transform: 'translateX(5px)' },
                        }
                    }
                }
            }
        }
    </script>
    <style type="text/css">
        @keyframes slideIn {
            from {
                transform: translateX(-100%);
            }

            to {
                transform: translateX(0);
            }
        }

        .sidebar-animate {
            animation: slideIn 0.3s ease-out forwards;
        }
    </style>
    
</head>
<body >
       
              <!-- Mobile Header -->
    <div class="lg:hidden flex justify-between items-center p-4 bg-white shadow-sm sticky top-0 z-10">
        <h2 class="text-2xl font-bold bg-gradient-to-r from-primary to-accent bg-clip-text text-transparent">Learn
            English</h2>
        <button id="menu-btn" class="p-2 rounded-full bg-primary bg-opacity-10 text-primary">
            <i class="fas fa-bars text-xl"></i>
        </button>
    </div>

    <!-- Sidebar Overlay -->
          <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden"></div>
              
    <!-- Sidebar -->
    <div id="sidebar" class="w-72 h-full bg-gradient-to-b from-primary to-secondary text-white fixed h-screen z-40 -translate-x-full lg:translate-x-0 transition-transform duration-300 shadow-2xl overflow-y-auto scrollbar-thin scrollbar-thumb-blue-500 scrollbar-track-gray-200 ">
        <div class="p-6 bg-black bg-opacity-10 border-b border-white border-opacity-20 text-center">
            <h2 class="text-xl font-semibold tracking-wide ">
            <a href="home.php" class="inline-flex items-center justify-center w-8 h-8 bg-orange-500 rounded-full hover:bg-blue-600 text-white">
            <i class="fas fa-home"></i>
            </a>    
            English Topics</h2>
        </div>
        <ul class="py-5 space-y-2 px-4">
            <li class="group active">
                <a href="lesson1.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-book-open mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Lessons1</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="Exercise1.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-question mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Exercise1</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="make&check1.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-pen mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Make&check1</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="lesson2.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-book-open mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Lessons2</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="Exercise2.1.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-question mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Exercise2</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="make&check2.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-pen mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Make&check2</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="lesson3.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-book-open mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Lessons3</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="Exercise3.1.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-question mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Exercise3</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="make&check3.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-pen mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Make&check3</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="lesson4.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-book-open mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Lessons4</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="Exercise4.1.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-question mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Exercise4</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="make&check4.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-pen mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Make&check4</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="lesson5.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-book-open mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Lessons5</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="Exercise5.1.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-question mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Exercise5</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="make&check5.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-pen mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Make&check5</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="lesson6.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-book-open mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Lessons6</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="Exercise6.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-question mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Exercise6</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="make&check6.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-pen mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Make&check6</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="lesson7.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-book-open mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Lessons7</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="Exercise7.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-question mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Exercise7</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="make&check7.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-pen mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Make&check7</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="lesson8.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-book-open mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Lessons8</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="Exercise8.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-question mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Exercise8</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="make&check8.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-pen mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Make&check8</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="lesson9.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-book-open mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Lessons9</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="Exercise9.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-question mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Exercise9</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="make&check9.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-pen mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Make&check9</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="lesson10.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-book-open mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Lessons10</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="Exercise10.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-question mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Exercise10</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="make&check10.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-pen mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Make&check10</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="lesson11.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-book-open mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Lessons11</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="Exercise11.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-question mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Exercise11</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group active">
                <a href="make&check11.php"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-pen mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Make&check11</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            
            <li class="group">
                <a href="#vocabulary"
                    class="flex items-center px-5 py-4 rounded-lg bg-secondary bg-opacity-30 group-[.active]:bg-opacity-70 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-spell-check mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Vocabulary Builder</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group">
                <a href="#quizzes"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-40 group-[.active]:bg-opacity-80 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-question-circle mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Interactive Quizzes</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group">
                <a href="#writing"
                    class="flex items-center px-5 py-4 rounded-lg bg-secondary bg-opacity-40 group-[.active]:bg-opacity-80 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-pen-fancy mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Writing Practice</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group">
                <a href="#listening"
                    class="flex items-center px-5 py-4 rounded-lg bg-primary bg-opacity-50 group-[.active]:bg-opacity-90 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-question mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Listening Exercises</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
            <li class="group">
                <a href="#speaking"
                    class="flex items-center px-5 py-4 rounded-lg bg-secondary bg-opacity-50 group-[.active]:bg-opacity-90 group-[.active]:shadow-md group-[.active]:border-l-4 group-[.active]:border-accent transition-all duration-200 hover:translate-x-1 hover:shadow-md relative overflow-hidden">
                    <div
                        class="absolute inset-0 bg-white bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300">
                    </div>
                    <i class="fas fa-comments mr-4 w-6 text-center text-white text-opacity-80"></i>
                    <span>Speaking Practice</span>
                    <span class="ml-auto animate-bounce-right group-[.active]:inline-block hidden">→</span>
                </a>
            </li>
        </ul>
    </div>
          
    <script>
        // Toggle Sidebar on Mobile
        const menuBtn = document.getElementById('menu-btn');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebar-overlay');

        menuBtn.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
            sidebarOverlay.classList.toggle('hidden');
            document.body.classList.toggle('overflow-hidden');
        });

        // Close sidebar when clicking on overlay
        sidebarOverlay.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            sidebarOverlay.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        });

        // Add active class to clicked sidebar item
        const sidebarItems = document.querySelectorAll('#sidebar li');
        sidebarItems.forEach(item => {
            item.addEventListener('click', function () {
                sidebarItems.forEach(i => i.classList.remove('active'));
                this.classList.add('active');

                // Close sidebar on mobile after selection
                if (window.innerWidth < 1024) {
                    sidebar.classList.add('-translate-x-full');
                    sidebarOverlay.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                }
            });
        });
    </script>
</body>
</html>