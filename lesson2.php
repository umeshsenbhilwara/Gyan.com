<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghyaan.com - Lesson 2: Use of 'Used to'</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
        }
        
        .section-card {
            transition: all 0.3s ease;
            border-left: 4px solid #4f46e5;
            background: linear-gradient(to right, #ffffff 0%, #f9fafb 100%);
        }
        
        .section-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px -5px rgba(79, 70, 229, 0.2);
        }
        
        .header-gradient {
            background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
        }
        
        table {
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
        }
        
        th {
            background-color: #4f46e5;
            color: white;
            font-weight: 500;
        }
        
        tr:nth-child(even) {
            background-color: #f8fafc;
        }
        
        tr:hover {
            background-color: #eef2ff;
        }
        
        .hindi-text {
            color: #1e40af;
            font-weight: 500;
        }
        
        .english-text {
            color: #4338ca;
            font-weight: 500;
        }
        
        @media (max-width: 768px) {
            .mobile-flex-col {
                flex-direction: column;
            }
            
            .mobile-text-center {
                text-align: center;
            }
            
            .mobile-p-3 {
                padding: 0.75rem;
            }
            
            .section-card {
                border-left: 3px solid #4f46e5;
            }
        }
        
        .floating-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #4f46e5;
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            z-index: 50;
        }
        
        .floating-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body class="bg-gray-50" oncontextmenu="return false;">
    <!-- Floating action button -->
    <a href="#" class="floating-btn">
        <i class="fas fa-arrow-up text-white"></i>
    </a>
        <?php include('Sidebar.php'); ?>
      <div id="main-content" class="lg:ml-72 transition-all duration-300 p-4 lg:p-8">
    <header class="header-gradient text-white py-6 text-center shadow-md">
        <div class="container mx-auto px-4">
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-2">Use of 'Used to' (किया करता था)</h1>
            <p class="text-sm sm:text-base md:text-lg opacity-90">Learn how to describe past habitual actions and states</p>
            <div class="mt-4 flex justify-center space-x-2">
                <span class="px-3 py-1 bg-white bg-opacity-20 rounded-full text-xs">Grammar</span>
                <span class="px-3 py-1 bg-white bg-opacity-20 rounded-full text-xs">Beginner</span>
                <span class="px-3 py-1 bg-white bg-opacity-20 rounded-full text-xs">Hindi-English</span>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8 max-w-4xl">
        <!-- Introduction Section -->
        <section class="section-card rounded-lg shadow-sm mb-8 p-6">
            <div class="flex items-start mobile-flex-col">
                <div class="flex-1">
                    <h2 class="text-xl sm:text-2xl font-semibold text-indigo-700 mb-4 flex items-center">
                        <span class="bg-indigo-100 p-2 rounded-full mr-3">
                            <i class="fas fa-info-circle text-indigo-600"></i>
                        </span>
                        Introduction
                    </h2>
                    <p class="text-gray-700 mb-4">"Used to" is used to talk about past habits or states that are no longer true. In Hindi, we use "किया करता था" for the same purpose.</p>
                    <div class="bg-indigo-50 p-4 rounded-lg border-l-4 border-indigo-400">
                        <p class="text-indigo-800 font-medium">जब भी हमें हमारे बचपन या भूतकाल की किसी नियमित गतिविधि को बताना होता है, तो "used to" का प्रयोग किया जाता है।</p>
                    </div>
                </div>
                <div class="ml-6 mobile-ml-0 mobile-mt-4 w-48 mobile-w-full">
                    <div class="bg-indigo-100 p-4 rounded-lg text-center">
                        <i class="fas fa-lightbulb text-yellow-500 text-3xl mb-2"></i>
                        <p class="text-sm font-medium text-indigo-800">Remember: "Used to" always refers to the past</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 1. Use of "Used to" -->
        <section class="section-card rounded-lg shadow-sm mb-8 p-6">
            <h2 class="text-xl sm:text-2xl font-semibold text-indigo-700 mb-4 flex items-center">
                <span class="bg-indigo-100 p-2 rounded-full mr-3">
                    <i class="fas fa-check-circle text-indigo-600"></i>
                </span>
                1. Use of "Used to" (किया करता था)
            </h2>
            <p class="text-gray-700 mb-4">For past habitual actions that happened regularly but don't happen now:</p>
            
            <div class="overflow-x-auto rounded-lg border border-gray-200 shadow-sm">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="p-3 text-left text-sm font-medium">#</th>
                            <th class="p-3 text-left text-sm font-medium">English Sentence</th>
                            <th class="p-3 text-left text-sm font-medium">हिंदी अनुवाद</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-3 border-t border-gray-200">1</td>
                            <td class="p-3 border-t border-gray-200 english-text">I used to mumble.</td>
                            <td class="p-3 border-t border-gray-200 hindi-text">मैं अस्पष्ट बोला करता था।</td>
                        </tr>
                        <tr>
                            <td class="p-3 border-t border-gray-200">2</td>
                            <td class="p-3 border-t border-gray-200 english-text">Brother used to bother Momma.</td>
                            <td class="p-3 border-t border-gray-200 hindi-text">भैया मम्मी को परेशान करता था।</td>
                        </tr>
                        <tr>
                            <td class="p-3 border-t border-gray-200">3</td>
                            <td class="p-3 border-t border-gray-200 english-text">She used to play with soil/sand.</td>
                            <td class="p-3 border-t border-gray-200 hindi-text">वह मिट्टी से खेला करती थी।</td>
                        </tr>
                        <tr>
                            <td class="p-3 border-t border-gray-200">4</td>
                            <td class="p-3 border-t border-gray-200 english-text">Father used to bring chocolates.</td>
                            <td class="p-3 border-t border-gray-200 hindi-text">पापा चॉकलेट लाया करते थे।</td>
                        </tr>
                        <tr>
                            <td class="p-3 border-t border-gray-200">5</td>
                            <td class="p-3 border-t border-gray-200 english-text">I used to negotiate.</td>
                            <td class="p-3 border-t border-gray-200 hindi-text">मैं सौदा किया करता था।</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="mt-4 bg-blue-50 p-4 rounded-lg">
                <p class="text-blue-800 font-medium flex items-start">
                    <i class="fas fa-info-circle text-blue-500 mt-1 mr-2"></i>
                    <span>Note: "Used to" is only for the past. For present habits, use "usually" or simple present tense.</span>
                </p>
            </div>
        </section>

        <!-- 2. Use of "Didn't use to" -->
        <section class="section-card rounded-lg shadow-sm mb-8 p-6">
            <h2 class="text-xl sm:text-2xl font-semibold text-indigo-700 mb-4 flex items-center">
                <span class="bg-indigo-100 p-2 rounded-full mr-3">
                    <i class="fas fa-times-circle text-indigo-600"></i>
                </span>
                2. Use of "Didn't use to" (नहीं किया करता था)
            </h2>
            <p class="text-gray-700 mb-4">Negative form for actions that didn't happen regularly in the past:</p>
            
            <div class="overflow-x-auto rounded-lg border border-gray-200 shadow-sm">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="p-3 text-left text-sm font-medium">#</th>
                            <th class="p-3 text-left text-sm font-medium">English Sentence</th>
                            <th class="p-3 text-left text-sm font-medium">हिंदी अनुवाद</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-3 border-t border-gray-200">1</td>
                            <td class="p-3 border-t border-gray-200 english-text">He didn't use to play cricket.</td>
                            <td class="p-3 border-t border-gray-200 hindi-text">वह क्रिकेट नहीं खेला करता था।</td>
                        </tr>
                        <tr>
                            <td class="p-3 border-t border-gray-200">2</td>
                            <td class="p-3 border-t border-gray-200 english-text">I didn't use to speak much.</td>
                            <td class="p-3 border-t border-gray-200 hindi-text">मैं ज्यादा नहीं बोला करता था।</td>
                        </tr>
                        <tr>
                            <td class="p-3 border-t border-gray-200">3</td>
                            <td class="p-3 border-t border-gray-200 english-text">I didn't use to mind.</td>
                            <td class="p-3 border-t border-gray-200 hindi-text">मैं ध्यान नहीं दिया करता था।</td>
                        </tr>
                        <tr>
                            <td class="p-3 border-t border-gray-200">4</td>
                            <td class="p-3 border-t border-gray-200 english-text">I didn't use to lock.</td>
                            <td class="p-3 border-t border-gray-200 hindi-text">मैं ताला नहीं लगाया करता था।</td>
                        </tr>
                        <tr>
                            <td class="p-3 border-t border-gray-200">5</td>
                            <td class="p-3 border-t border-gray-200 english-text">I didn't use to manage.</td>
                            <td class="p-3 border-t border-gray-200 hindi-text">मैं प्रबंध नहीं किया करता था।</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="mt-4 bg-yellow-50 p-4 rounded-lg">
                <p class="text-yellow-800 font-medium flex items-start">
                    <i class="fas fa-exclamation-triangle text-yellow-500 mt-1 mr-2"></i>
                    <span>Common mistake: Don't say "didn't used to". The correct form is "didn't use to".</span>
                </p>
            </div>
        </section>

        <!-- 3. Use of "Used to be" -->
        <section class="section-card rounded-lg shadow-sm mb-8 p-6">
            <h2 class="text-xl sm:text-2xl font-semibold text-indigo-700 mb-4 flex items-center">
                <span class="bg-indigo-100 p-2 rounded-full mr-3">
                    <i class="fas fa-user-circle text-indigo-600"></i>
                </span>
                3. Use of "Used to be" (हुआ करता था)
            </h2>
            <p class="text-gray-700 mb-4">For past states or characteristics that have changed:</p>
            
            <div class="overflow-x-auto rounded-lg border border-gray-200 shadow-sm">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="p-3 text-left text-sm font-medium">#</th>
                            <th class="p-3 text-left text-sm font-medium">English Sentence</th>
                            <th class="p-3 text-left text-sm font-medium">हिंदी अनुवाद</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-3 border-t border-gray-200">1</td>
                            <td class="p-3 border-t border-gray-200 english-text">They used to be jolly.</td>
                            <td class="p-3 border-t border-gray-200 hindi-text">वे मजाकिया हुआ करते थे।</td>
                        </tr>
                        <tr>
                            <td class="p-3 border-t border-gray-200">2</td>
                            <td class="p-3 border-t border-gray-200 english-text">He used to be mischievous.</td>
                            <td class="p-3 border-t border-gray-200 hindi-text">वह शरारती हुआ करता था।</td>
                        </tr>
                        <tr>
                            <td class="p-3 border-t border-gray-200">3</td>
                            <td class="p-3 border-t border-gray-200 english-text">I used to be shy.</td>
                            <td class="p-3 border-t border-gray-200 hindi-text">मैं शर्मीला हुआ करता था।</td>
                        </tr>
                        <tr>
                            <td class="p-3 border-t border-gray-200">4</td>
                            <td class="p-3 border-t border-gray-200 english-text">I used to be miser.</td>
                            <td class="p-3 border-t border-gray-200 hindi-text">मैं कंजूस हुआ करता था।</td>
                        </tr>
                        <tr>
                            <td class="p-3 border-t border-gray-200">5</td>
                            <td class="p-3 border-t border-gray-200 english-text">I used to be reckless.</td>
                            <td class="p-3 border-t border-gray-200 hindi-text">मैं लापरवाह हुआ करता था।</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="mt-4 bg-purple-50 p-4 rounded-lg">
                <p class="text-purple-800 font-medium flex items-start">
                    <i class="fas fa-lightbulb text-purple-500 mt-1 mr-2"></i>
                    <span>Tip: "Used to be" describes how someone was in the past but isn't anymore.</span>
                </p>
            </div>
        </section>

        <!-- 4. Use of "Didn't use to be" -->
        <section class="section-card rounded-lg shadow-sm mb-8 p-6">
            <h2 class="text-xl sm:text-2xl font-semibold text-indigo-700 mb-4 flex items-center">
                <span class="bg-indigo-100 p-2 rounded-full mr-3">
                    <i class="fas fa-user-slash text-indigo-600"></i>
                </span>
                4. Use of "Didn't use to be" (नहीं हुआ करता था)
            </h2>
            <p class="text-gray-700 mb-4">Negative form for states or characteristics that weren't true in the past:</p>
            
            <div class="overflow-x-auto rounded-lg border border-gray-200 shadow-sm">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="p-3 text-left text-sm font-medium">#</th>
                            <th class="p-3 text-left text-sm font-medium">English Sentence</th>
                            <th class="p-3 text-left text-sm font-medium">हिंदी अनुवाद</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-3 border-t border-gray-200">1</td>
                            <td class="p-3 border-t border-gray-200 english-text">I didn't use to be hardworking.</td>
                            <td class="p-3 border-t border-gray-200 hindi-text">मैं मेहनती नहीं हुआ करता था।</td>
                        </tr>
                        <tr>
                            <td class="p-3 border-t border-gray-200">2</td>
                            <td class="p-3 border-t border-gray-200 english-text">He didn't use to be loutish.</td>
                            <td class="p-3 border-t border-gray-200 hindi-text">वह पागल नहीं हुआ करता था।</td>
                        </tr>
                        <tr>
                            <td class="p-3 border-t border-gray-200">3</td>
                            <td class="p-3 border-t border-gray-200 english-text">I didn't use to be gullible.</td>
                            <td class="p-3 border-t border-gray-200 hindi-text">मैं भोला नहीं हुआ करता था।</td>
                        </tr>
                        <tr>
                            <td class="p-3 border-t border-gray-200">4</td>
                            <td class="p-3 border-t border-gray-200 english-text">My granny didn't use to be cynic.</td>
                            <td class="p-3 border-t border-gray-200 hindi-text">मेरी दादी सनकी नहीं हुआ करती थी।</td>
                        </tr>
                        <tr>
                            <td class="p-3 border-t border-gray-200">5</td>
                            <td class="p-3 border-t border-gray-200 english-text">She didn't use to be foxy.</td>
                            <td class="p-3 border-t border-gray-200 hindi-text">वह चालाक नहीं हुआ करती थी।</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- 5. Note on "Would" -->
        <section class="section-card rounded-lg shadow-sm mb-8 p-6">
            <h2 class="text-xl sm:text-2xl font-semibold text-indigo-700 mb-4 flex items-center">
                <span class="bg-indigo-100 p-2 rounded-full mr-3">
                    <i class="fas fa-exchange-alt text-indigo-600"></i>
                </span>
                5. "Would" as Alternative
            </h2>
            <p class="text-gray-700 mb-4">"Would" can replace "used to" for repeated past actions (but not states):</p>
            
            <div class="bg-indigo-50 p-4 rounded-lg mb-4">
                <p class="text-indigo-800 font-medium mb-2">Example:</p>
                <p class="text-gray-700 italic">
                    I used to study in TILS. <span class="text-indigo-600 font-medium">I would learn</span> English there. <span class="text-indigo-600 font-medium">I would gain</span> confidence. <span class="text-indigo-600 font-medium">Sir would motivate</span> us. <span class="text-indigo-600 font-medium">I would win</span> trophies and remove fear.
                </p>
            </div>
            
            <div class="bg-green-50 p-4 rounded-lg">
                <p class="text-green-800 font-medium flex items-start">
                    <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                    <span>Remember: Use "would" only for actions, not states ("I would be shy" is incorrect).</span>
                </p>
            </div>
        </section>

        <!-- Practice CTA -->
        <section class="bg-gradient-to-r from-indigo-500 to-purple-600 rounded-lg shadow-md p-6 text-center text-white mb-8">
            <h2 class="text-xl sm:text-2xl font-bold mb-3">Ready to Practice?</h2>
            <p class="mb-5 opacity-90">Test your understanding of "used to" with interactive exercises</p>
            <button class="bg-white text-indigo-600 font-semibold py-2 px-6 rounded-full shadow-md hover:bg-indigo-50 transition duration-300">
               <a href="Exercise2.1.php">Start Practice Now</a>
            </button>
        </section>
    </main>
    </div>
    <script>
        // Simple back to top button functionality
        document.querySelector('.floating-btn').addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Show/hide back to top button based on scroll position
        window.addEventListener('scroll', function() {
            const btn = document.querySelector('.floating-btn');
            if (window.pageYOffset > 300) {
                btn.style.display = 'flex';
            } else {
                btn.style.display = 'none';
            }
        });
    </script>
</body>
</html>