<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive English Tenses Guide</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }
        .animate-fade { animation: fadeIn 0.6s ease-out forwards; }
        .animate-bounce { animation: bounce 1.5s infinite; }
        .tense-card {
            border-left: 5px solid;
            transition: all 0.3s ease;
            opacity: 0;
        }
        .tense-card.visible { opacity: 1; }
        .tense-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        .present { border-color: #3B82F6; }
        .past { border-color: #10B981; }
        .future { border-color: #EC4899; }
        .example-row { transition: background-color 0.2s; }
        .example-row:hover { background-color: #f8fafc; }
        .floating-btn {
            animation: bounce 2s infinite;
        }
        .tab-btn {
            position: relative;
            transition: all 0.3s ease;
        }
        .tab-btn.active {
            font-weight: 600;
        }
        .tab-btn.active::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 100%;
            height: 3px;
            border-radius: 3px 3px 0 0;
        }
        .tab-btn.present.active::after {
            background-color: #3B82F6;
        }
        .tab-btn.past.active::after {
            background-color: #10B981;
        }
        .tab-btn.future.active::after {
            background-color: #EC4899;
        }
        .tab-btn:hover {
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 to-purple-50 min-h-screen font-poppins">
 <?php include('Sidebar.php'); ?>
    <div id="main-content" class="lg:ml-72 transition-all duration-300 p-4 lg:p-8">
<!-- Floating Navigation -->
<div class="fixed bottom-6 right-6 z-10">
    <button onclick="scrollToTop()" class="floating-btn bg-blue-600 text-white p-3 rounded-full shadow-lg hover:bg-blue-700 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>
</div>

<div class="max-w-6xl mx-auto px-4 py-8">
    <!-- Header -->
    <header class="text-center mb-12 animate-fade" style="animation-delay: 0.2s;">
        <h1 class="text-4xl sm:text-5xl font-bold text-gray-800 mb-4">English Tenses Mastery</h1>
        <div class="w-20 h-1 bg-gradient-to-r from-blue-400 to-purple-400 mx-auto mb-4"></div>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">Learn simple present, past, and future tenses with clear examples and Hindi translations</p>
    </header>

    <!-- Tabs Navigation - Now more button-like -->
    <div class="flex justify-center mb-8 animate-fade" style="animation-delay: 0.4s;">
        <div class="inline-flex rounded-md shadow-sm" role="group">
            <button class="tab-btn present px-6 py-3 font-medium text-gray-700 bg-white hover:bg-gray-50 border border-gray-200 rounded-l-lg active" data-tab="present">
                Present Tense
            </button>
            <button class="tab-btn past px-6 py-3 font-medium text-gray-700 bg-white hover:bg-gray-50 border-t border-b border-gray-200" data-tab="past">
                Past Tense
            </button>
            <button class="tab-btn future px-6 py-3 font-medium text-gray-700 bg-white hover:bg-gray-50 border border-gray-200 rounded-r-lg" data-tab="future">
                Future Tense
            </button>
        </div>
    </div>

    <!-- Present Tense -->
    <section id="present-tab" class="tab-content bg-white rounded-xl shadow-lg p-6 mb-8 tense-card present visible animate-fade" style="animation-delay: 0.6s;">
        <div class="flex items-center mb-6">
            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-blue-600">Simple Present Tense</h2>
        </div>

        <!-- Positive Sentences -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold text-blue-700 mb-4 flex items-center">
                <span class="w-3 h-3 bg-blue-600 rounded-full mr-2"></span>
                Positive Sentences
            </h3>
            
            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div class="bg-blue-50 p-4 rounded-lg transform transition hover:scale-[1.02]">
                    <h4 class="font-semibold text-blue-800 mb-2">Singular (He/She/It)</h4>
                    <p class="text-blue-900">M.V 1st form + s/es</p>
                    <p class="text-xs text-blue-600 mt-2">
                        <span class="font-medium">Note:</span> When M.V. ends with (sh, ch, o, x, z, ss), add 'es' instead of 's'
                    </p>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg transform transition hover:scale-[1.02]">
                    <h4 class="font-semibold text-blue-800 mb-2">Plural (I/We/You/They)</h4>
                    <p class="text-blue-900">Only M.V.1st form</p>
                    <p class="text-xs text-blue-600 mt-2">
                        Hindi Symbol: ता हैं, ती हैं, ते हैं, ता हूँ, ती हूँ
                    </p>
                </div>
            </div>
            
            <h4 class="font-medium text-blue-700 mb-3">Examples:</h4>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-blue-100">
                        <tr>
                            <th class="p-3 text-left w-10">#</th>
                            <th class="p-3 text-left">English</th>
                            <th class="p-3 text-left">Hindi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="example-row">
                            <td class="p-3">1</td>
                            <td class="p-3">He plays cricket.</td>
                            <td class="p-3">वह क्रिकेट खेलता है</td>
                        </tr>
                        <tr class="example-row">
                            <td class="p-3">2</td>
                            <td class="p-3">I watch T.V. every day.</td>
                            <td class="p-3">मैं हर दिन टीवी देखता हूँ</td>
                        </tr>
                        <tr class="example-row">
                            <td class="p-3">3</td>
                            <td class="p-3">She cooks delicious food.</td>
                            <td class="p-3">वह स्वादिष्ट भोजन बनाती है</td>
                        </tr>
                        <tr class="example-row">
                            <td class="p-3">4</td>
                            <td class="p-3">It works very fast.</td>
                            <td class="p-3">यह बहुत तेजी से काम करता है</td>
                        </tr>
                        <tr class="example-row">
                            <td class="p-3">5</td>
                            <td class="p-3">We love our country very much.</td>
                            <td class="p-3">हम अपने देश से बहुत प्यार करते हैं</td>
                        </tr>
                        <tr class="example-row">
                            <td class="p-3">6</td>
                            <td class="p-3">You get late.</td>
                            <td class="p-3">आप देर से आते हैं</td>
                        </tr>
                        <tr class="example-row">
                            <td class="p-3">7</td>
                            <td class="p-3">They purchase flowers from only this shop.</td>
                            <td class="p-3">वे केवल इसी दुकान से फुल खरीदते हैं</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Negative Sentences -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold text-blue-700 mb-4 flex items-center">
                <span class="w-3 h-3 bg-blue-600 rounded-full mr-2"></span>
                Negative Sentences
            </h3>
            
            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div class="bg-blue-50 p-4 rounded-lg transform transition hover:scale-[1.02]">
                    <h4 class="font-semibold text-blue-800 mb-2">Singular (He/She/It)</h4>
                    <p class="text-blue-900">Does + not – Doesn't</p>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg transform transition hover:scale-[1.02]">
                    <h4 class="font-semibold text-blue-800 mb-2">Plural (I/We/You/They)</h4>
                    <p class="text-blue-900">Do + not – Don't</p>
                </div>
            </div>
            
            <h4 class="font-medium text-blue-700 mb-3">Examples:</h4>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-blue-100">
                        <tr>
                            <th class="p-3 text-left w-10">#</th>
                            <th class="p-3 text-left">English</th>
                            <th class="p-3 text-left">Hindi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="example-row">
                            <td class="p-3">1</td>
                            <td class="p-3">He doesn't play cricket.</td>
                            <td class="p-3">वह क्रिकेट नहीं खेलता हैं</td>
                        </tr>
                        <tr class="example-row">
                            <td class="p-3">2</td>
                            <td class="p-3">We don't decide our career.</td>
                            <td class="p-3">हम अपना करियर निश्चित नहीं करते हैं</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Questions -->
        <div class="grid md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-xl font-semibold text-blue-700 mb-4 flex items-center">
                    <span class="w-3 h-3 bg-blue-600 rounded-full mr-2"></span>
                    Interrogative Sentences
                </h3>
                
                <div class="bg-blue-50 p-4 rounded-lg mb-4 transform transition hover:scale-[1.02]">
                    <p class="text-blue-900">Do/Does + subject + base verb?</p>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-blue-100">
                            <tr>
                                <th class="p-3 text-left w-10">#</th>
                                <th class="p-3 text-left">English</th>
                                <th class="p-3 text-left">Hindi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="example-row">
                                <td class="p-3">1</td>
                                <td class="p-3">Does she look beautiful?</td>
                                <td class="p-3">क्या वो दिखने में अच्छी लगती हैं ?</td>
                            </tr>
                            <tr class="example-row">
                                <td class="p-3">2</td>
                                <td class="p-3">Do they act like jokers?</td>
                                <td class="p-3">क्या वो जोकर्स की तरह करते हैं ?</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div>
                <h3 class="text-xl font-semibold text-blue-700 mb-4 flex items-center">
                    <span class="w-3 h-3 bg-blue-600 rounded-full mr-2"></span>
                    Interrogative Negative Sentences
                </h3>
                
                <div class="bg-blue-50 p-4 rounded-lg mb-4 transform transition hover:scale-[1.02]">
                    <p class="text-blue-900">Do/Does + subject + not + base verb?</p>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-blue-100">
                            <tr>
                                <th class="p-3 text-left w-10">#</th>
                                <th class="p-3 text-left">English</th>
                                <th class="p-3 text-left">Hindi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="example-row">
                                <td class="p-3">1</td>
                                <td class="p-3">Does she not show her eagerness?</td>
                                <td class="p-3">क्या वह उसकी जिज्ञासुता नहीं दिखाती हैं ?</td>
                            </tr>
                            <tr class="example-row">
                                <td class="p-3">2</td>
                                <td class="p-3">Do you not do good things for world?</td>
                                <td class="p-3">क्या तुम दुनिया के लिए अच्छा नहीं करते हो ?</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Past Tense -->
    <section id="past-tab" class="tab-content bg-white rounded-xl shadow-lg p-6 mb-8 tense-card past hidden animate-fade" style="animation-delay: 0.6s;">
        <div class="flex items-center mb-6">
            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-green-600">Simple Past Tense</h2>
        </div>

        <!-- Positive Sentences -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold text-green-700 mb-4 flex items-center">
                <span class="w-3 h-3 bg-green-600 rounded-full mr-2"></span>
                Positive Sentences
            </h3>
            
            <div class="bg-green-50 p-4 rounded-lg mb-6 transform transition hover:scale-[1.02]">
                <p class="text-green-900">He, She, It, I, We, You, They – M.V.2 / Did + M.V.1</p>
                <p class="text-xs text-green-600 mt-2">Hindi Symbol: आ, ई, ए / आ, ई, ए + थ</p>
            </div>
            
            <h4 class="font-medium text-green-700 mb-3">Examples:</h4>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-green-100">
                        <tr>
                            <th class="p-3 text-left">Type</th>
                            <th class="p-3 text-left">English</th>
                            <th class="p-3 text-left">Hindi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="example-row">
                            <td class="p-3 font-medium">Positive</td>
                            <td class="p-3">He woke up at 5 a.m. in morning.</td>
                            <td class="p-3">वह सुबह 5 बजे उठा</td>
                        </tr>
                        <tr class="example-row">
                            <td class="p-3 font-medium">Positive</td>
                            <td class="p-3">I went to celebrate marriage-party.</td>
                            <td class="p-3">मैं शादी की पार्टी मनाने गया था</td>
                        </tr>
                        <tr class="example-row">
                            <td class="p-3 font-medium">Negative</td>
                            <td class="p-3">It did not go to hotel.</td>
                            <td class="p-3">मैं होटल में नहीं गया</td>
                        </tr>
                        <tr class="example-row">
                            <td class="p-3 font-medium">Negative</td>
                            <td class="p-3">I did not go to celebrate marriage-party.</td>
                            <td class="p-3">मैं शादी की पार्टी नहीं मनाने गया था</td>
                        </tr>
                        <tr class="example-row">
                            <td class="p-3 font-medium">Interrogative</td>
                            <td class="p-3">Did they know about her nature?</td>
                            <td class="p-3">क्या वो उसके नेचर के बारे में जानते थे ?</td>
                        </tr>
                        <tr class="example-row">
                            <td class="p-3 font-medium">Interrogative</td>
                            <td class="p-3">Did we notice them in party?</td>
                            <td class="p-3">क्या हमने उन्हें पार्टी में नोटिस किया ?</td>
                        </tr>
                        <tr class="example-row">
                            <td class="p-3 font-medium">Interrogative Negative</td>
                            <td class="p-3">Did She not enter in class room with permission?</td>
                            <td class="p-3">क्या वो पूछकर क्लास में नहीं आयीं ?</td>
                        </tr>
                        <tr class="example-row">
                            <td class="p-3 font-medium">Interrogative Negative</td>
                            <td class="p-3">Did they not get marvelous gift?</td>
                            <td class="p-3">क्या उन्हें एक अच्छा तोहफा नहीं मिला?</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Future Tense -->
    <section id="future-tab" class="tab-content bg-white rounded-xl shadow-lg p-6 mb-8 tense-card future hidden animate-fade" style="animation-delay: 0.6s;">
        <div class="flex items-center mb-6">
            <div class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <h2 class="text-2xl font-bold text-pink-600">Simple Future Tense</h2>
        </div>

        <!-- Positive Sentences -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold text-pink-700 mb-4 flex items-center">
                <span class="w-3 h-3 bg-pink-600 rounded-full mr-2"></span>
                Positive Sentences
            </h3>
            
            <div class="bg-pink-50 p-4 rounded-lg mb-6 transform transition hover:scale-[1.02]">
                <p class="text-pink-900">He, She, It, I, We, You, They – Will / Shall + M.V.1st</p>
                <p class="text-xs text-pink-600 mt-2">Hindi Symbol: गा, गी, गे</p>
            </div>
            
            <h4 class="font-medium text-pink-700 mb-3">Examples:</h4>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-pink-100">
                        <tr>
                            <th class="p-3 text-left">Type</th>
                            <th class="p-3 text-left">English</th>
                            <th class="p-3 text-left">Hindi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="example-row">
                            <td class="p-3 font-medium">Positive</td>
                            <td class="p-3">He will mooch around with my friends.</td>
                            <td class="p-3">वह मेरे दोस्तों के साथ घूमेगा</td>
                        </tr>
                        <tr class="example-row">
                            <td class="p-3 font-medium">Positive</td>
                            <td class="p-3">I will go to court for case.</td>
                            <td class="p-3">मैं केस के लिए कोर्ट जाऊंगा</td>
                        </tr>
                        <tr class="example-row">
                            <td class="p-3 font-medium">Negative</td>
                            <td class="p-3">They won't need your support in Election.</td>
                            <td class="p-3">उन्हें तुम्हारे सहारें की जरुरत नहीं पड़ेगी</td>
                        </tr>
                        <tr class="example-row">
                            <td class="p-3 font-medium">Negative</td>
                            <td class="p-3">You won't invite your enemies.</td>
                            <td class="p-3">तुम तुम्हारे दुश्मनों को नहीं बुलाओगे</td>
                        </tr>
                        <tr class="example-row">
                            <td class="p-3 font-medium">Interrogative</td>
                            <td class="p-3">Will she fall in love with any boy?</td>
                            <td class="p-3">क्या वो किसी के साथ प्यार में गिरेगी ?</td>
                        </tr>
                        <tr class="example-row">
                            <td class="p-3 font-medium">Interrogative</td>
                            <td class="p-3">Will we forget our lover?</td>
                            <td class="p-3">क्या हम हमारे लवर को भूल पाएंगे ?</td>
                        </tr>
                        <tr class="example-row">
                            <td class="p-3 font-medium">Interrogative Negative</td>
                            <td class="p-3">Will you not write about your father?</td>
                            <td class="p-3">क्या तुम तुम्हारे पिता के बारे में नहीं लिखोगे ?</td>
                        </tr>
                        <tr class="example-row">
                            <td class="p-3 font-medium">Interrogative Negative</td>
                            <td class="p-3">Will they not like me?</td>
                            <td class="p-3">क्या वे मुझे पसंद नहीं करेंगे ?</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
</div>
<script>
    // Tab functionality
    document.querySelectorAll('.tab-btn').forEach(button => {
        button.addEventListener('click', () => {
            // Update active tab button
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active', 'text-blue-600', 'text-green-600', 'text-pink-600');
                btn.classList.add('text-gray-700');
            });
            
            const color = button.dataset.tab === 'present' ? 'blue' : 
                         button.dataset.tab === 'past' ? 'green' : 'pink';
            
            button.classList.add('active', `text-${color}-600`);
            button.classList.remove('text-gray-700');
            
            // Show content
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });
            document.getElementById(`${button.dataset.tab}-tab`).classList.remove('hidden');
        });
    });
    
    // Scroll to top function
    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
    
    // Animate tense cards on scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });
    
    document.querySelectorAll('.tense-card').forEach(card => {
        observer.observe(card);
    });
    
    // Activate first tab by default
    document.querySelector('.tab-btn').click();
</script>
</body>
</html>