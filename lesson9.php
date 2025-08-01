<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfect Tense Mastery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              poppins: ['Poppins', 'sans-serif'],
            },
            colors: {
              primary: '#4F46E5',
              secondary: '#EC4899',
              accent: '#10B981',
            },
            keyframes: {
              'fade-in': {
                '0%': { opacity: '0' },
                '100%': { opacity: '1' },
              },
              'bounce': {
                '0%, 100%': { transform: 'translateY(0)' },
                '50%': { transform: 'translateY(-10px)' },
              },
              'float': {
                '0%, 100%': { transform: 'translateY(0)' },
                '50%': { transform: 'translateY(-5px)' },
              },
            },
            animation: {
              'fade-in': 'fade-in 0.8s ease-in',
              'bounce': 'bounce 1.5s infinite',
              'float': 'float 3s ease-in-out infinite',
            },
          }
        }
      }
    </script>
    <style>
        .highlight-card {
            transition: all 0.3s ease;
        }
        .highlight-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .tense-header {
            position: relative;
        }
        .tense-header::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #4F46E5, #EC4899);
            border-radius: 3px;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 via-purple-50 to-pink-50 min-h-screen font-poppins">
    <?php include('Sidebar.php'); ?>
      <div id="main-content" class="lg:ml-72 transition-all duration-300 p-4 lg:p-8">
<div class="max-w-6xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
    <!-- Header Section -->
    <header class="text-center mb-12 animate-fade-in">
        <h1 class="text-4xl sm:text-5xl font-bold text-primary mb-4 animate-float">Perfect Tense Mastery</h1>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">Understand the present, past, and future perfect tenses with clear examples and Hindi translations.</p>
    </header>

    <!-- Main Content -->
    <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl overflow-hidden animate-fade-in">
        <!-- Tabs Navigation -->
        <div class="grid grid-cols-3 divide-x divide-gray-200 border-b border-gray-200">
            <button class="tab-btn py-4 px-2 text-center font-semibold text-primary bg-indigo-50" data-tab="present">Present Perfect</button>
            <button class="tab-btn py-4 px-2 text-center font-semibold text-secondary" data-tab="past">Past Perfect</button>
            <button class="tab-btn py-4 px-2 text-center font-semibold text-accent" data-tab="future">Future Perfect</button>
        </div>

        <!-- Tab Contents -->
        <div class="p-6 sm:p-8">
            <!-- Present Perfect -->
            <div id="present-tab" class="tab-content">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-primary mb-4 tense-header">Present Perfect Tense</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-blue-50 p-6 rounded-xl highlight-card">
                            <h3 class="font-bold text-blue-700 mb-3">Structure</h3>
                            <p class="mb-2"><span class="font-semibold">Subject + have/has + past participle (V3)</span></p>
                            <p class="text-gray-600">He, She, It, I, We, You, They – Have/Has + M.V.3 Form</p>
                            <div class="mt-4 p-3 bg-white rounded-lg">
                                <p class="text-gray-700">आ / ई / ए + ह</p>
                                <p class="text-gray-700">चुका हैं, चुकी हैं, चुके हैं, चुका हूँ</p>
                            </div>
                        </div>
                        <div class="bg-blue-50 p-6 rounded-xl highlight-card">
                            <h3 class="font-bold text-blue-700 mb-3">Examples</h3>
                            <div class="space-y-4">
                                <div>
                                    <p class="font-semibold text-blue-800">I have affected.</p>
                                    <p class="text-gray-600">मैंने प्रभावित किया है।</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-blue-800">They have not plucked flowers.</p>
                                    <p class="text-gray-600">उन्होंने फूल नहीं तोड़े हैं।</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-blue-800">Have they got passed in exams?</p>
                                    <p class="text-gray-600">क्या वे परीक्षा में पास हुए हैं?</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-blue-800">Has he not said to me?</p>
                                    <p class="text-gray-600">क्या उसने मुझसे नहीं कहा है?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Past Perfect -->
            <div id="past-tab" class="tab-content hidden">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-secondary mb-4 tense-header">Past Perfect Tense</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-pink-50 p-6 rounded-xl highlight-card">
                            <h3 class="font-bold text-pink-700 mb-3">Structure</h3>
                            <p class="mb-2"><span class="font-semibold">Subject + had + past participle (V3)</span></p>
                            <p class="text-gray-600">He, She, It, I, We, You, They – Had + M.V.3 Form</p>
                            <div class="mt-4 p-3 bg-white rounded-lg">
                                <p class="text-gray-700">आ, ई, ए / आ, ई, ए + थ</p>
                                <p class="text-gray-700">चुका था, चुकी थी, चुके थे</p>
                            </div>
                        </div>
                        <div class="bg-pink-50 p-6 rounded-xl highlight-card">
                            <h3 class="font-bold text-pink-700 mb-3">Examples</h3>
                            <div class="space-y-4">
                                <div>
                                    <p class="font-semibold text-pink-800">It had worked.</p>
                                    <p class="text-gray-600">इसने काम किया था।</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-pink-800">You had not presented.</p>
                                    <p class="text-gray-600">आपने प्रस्तुत नहीं किया था।</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-pink-800">Had you done your schooling?</p>
                                    <p class="text-gray-600">क्या आपने अपनी स्कूली पढ़ाई की थी?</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-pink-800">Had She not looked Beautiful?</p>
                                    <p class="text-gray-600">क्या वह सुंदर नहीं दिखी थी?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Future Perfect -->
            <div id="future-tab" class="tab-content hidden">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-accent mb-4 tense-header">Future Perfect Tense</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-green-50 p-6 rounded-xl highlight-card">
                            <h3 class="font-bold text-green-700 mb-3">Structure</h3>
                            <p class="mb-2"><span class="font-semibold">Subject + will have + past participle (V3)</span></p>
                            <p class="text-gray-600">He, She, It, I, We, You, They – Will have + M.V.3 Form</p>
                            <div class="mt-4 p-3 bg-white rounded-lg">
                                <p class="text-gray-700">हो गया होगा</p>
                                <p class="text-gray-700">चुका होगा, चुकी होगी, चुके होंगे</p>
                            </div>
                        </div>
                        <div class="bg-green-50 p-6 rounded-xl highlight-card">
                            <h3 class="font-bold text-green-700 mb-3">Examples</h3>
                            <div class="space-y-4">
                                <div>
                                    <p class="font-semibold text-green-800">I will have forbidden it.</p>
                                    <p class="text-gray-600">मैंने इसे मना किया होगा।</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-green-800">She will not have put it on the chair.</p>
                                    <p class="text-gray-600">उसने इसे कुर्सी पर नहीं रखा होगा।</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-green-800">Will you have acted well?</p>
                                    <p class="text-gray-600">क्या आपने अच्छा अभिनय किया होगा?</p>
                                </div>
                                <div>
                                    <p class="font-semibold text-green-800">Will she not have dreamt?</p>
                                    <p class="text-gray-600">क्या उसने सपने नहीं देखे होंगे?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comparison Table -->
            <div class="mt-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Perfect Tenses Comparison</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white rounded-lg overflow-hidden shadow-md">
                        <thead class="bg-gradient-to-r from-primary to-secondary text-white">
                            <tr>
                                <th class="py-3 px-4 text-left">Tense</th>
                                <th class="py-3 px-4 text-left">English Structure</th>
                                <th class="py-3 px-4 text-left">Hindi Equivalent</th>
                                <th class="py-3 px-4 text-left">Example</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="py-3 px-4 font-semibold text-primary">Present Perfect</td>
                                <td class="py-3 px-4">Have/Has + V3</td>
                                <td class="py-3 px-4">चुका है, चुकी है, चुके हैं</td>
                                <td class="py-3 px-4">I have eaten. (मैंने खा लिया है।)</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="py-3 px-4 font-semibold text-secondary">Past Perfect</td>
                                <td class="py-3 px-4">Had + V3</td>
                                <td class="py-3 px-4">चुका था, चुकी थी, चुके थे</td>
                                <td class="py-3 px-4">I had eaten. (मैंने खा लिया था।)</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 font-semibold text-accent">Future Perfect</td>
                                <td class="py-3 px-4">Will have + V3</td>
                                <td class="py-3 px-4">चुका होगा, चुकी होगी, चुके होंगे</td>
                                <td class="py-3 px-4">I will have eaten. (मैंने खा लिया होगा।)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Practice Section -->
    <div class="mt-12 bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-6 sm:p-8 animate-fade-in">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Practice Exercises</h2>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-indigo-50 p-6 rounded-xl">
                <h3 class="font-bold text-indigo-700 mb-3">Fill in the blanks</h3>
                <div class="space-y-4">
                    <div>
                        <p class="mb-2">She __________ (finish) her homework before going out.</p>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                    <div>
                        <p class="mb-2">By next month, we __________ (complete) the project.</p>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>
                </div>
                <button class="mt-4 bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition">Check Answers</button>
            </div>
            <div class="bg-purple-50 p-6 rounded-xl">
                <h3 class="font-bold text-purple-700 mb-3">Translate to English</h3>
                <div class="space-y-4">
                    <div>
                        <p class="mb-2">मैंने यह पुस्तक पहले ही पढ़ ली है।</p>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500">
                    </div>
                    <div>
                        <p class="mb-2">वे शाम तक यहाँ पहुँच चुके होंगे।</p>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500">
                    </div>
                </div>
                <button class="mt-4 bg-purple-600 text-white px-4 py-2 rounded-md hover:bg-purple-700 transition">Check Answers</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-12 text-center text-sm text-gray-500">
        <p>&copy; 2025 English Tense Mastery | All Rights Reserved</p>
        <p class="mt-2">Made with ❤️ for English learners</p>
    </footer>
</div>
</div>
<script>
    // Tab functionality
    document.addEventListener('DOMContentLoaded', function() {
        const tabButtons = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');
        
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                tabButtons.forEach(btn => {
                    btn.classList.remove('bg-indigo-50', 'text-primary');
                    btn.classList.add('text-gray-600');
                });
                
                // Add active class to clicked button
                button.classList.add('bg-indigo-50', 'text-primary');
                button.classList.remove('text-gray-600');
                
                // Hide all tab contents
                tabContents.forEach(content => {
                    content.classList.add('hidden');
                });
                
                // Show selected tab content
                const tabId = button.getAttribute('data-tab') + '-tab';
                document.getElementById(tabId).classList.remove('hidden');
            });
        });
        
        // Activate first tab by default
        tabButtons[0].click();
    });
</script>
</body>
</html>