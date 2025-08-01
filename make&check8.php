<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghyaan.com - Hindi to English Translation Quiz</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
        }
        
        .question-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border-left: 4px solid #4f46e5;
            border-radius: 1.5rem;
            transform: translateY(0);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        
        .question-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 15px rgba(79, 70, 229, 0.1);
        }
        
        .question-card.correct { 
            border-left-color: #10b981;
            background-color: rgba(16, 185, 129, 0.03);
        }
        .question-card.incorrect { 
            border-left-color: #ef4444;
            background-color: rgba(239, 68, 68, 0.03);
        }
        
        .answer-input {
            min-height: 48px;
            word-break: break-word;
            overflow-wrap: break-word;
            transition: all 0.3s ease;
        }
        
        .answer-input:focus {
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }
        
        .check-btn {
            min-height: 48px;
            min-width: 48px;
            transition: all 0.3s ease;
            transform: scale(1);
        }
        
        .check-btn:hover {
            transform: scale(1.03);
        }
        
        .check-btn:active {
            transform: scale(0.98);
        }
        
        .hindi-text {
            word-break: break-word;
            overflow-wrap: break-word;
            white-space: normal;
            position: relative;
            padding-bottom: 8px;
        }
        
        .hindi-text::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #4f46e5, #8b5cf6);
            border-radius: 3px;
        }
        
        .correct-answer, .incorrect-answer {
            transition: all 0.5s ease;
            max-height: 0;
            overflow: hidden;
            opacity: 0;
        }
        
        .correct-answer.show, .incorrect-answer.show {
            max-height: 200px;
            opacity: 1;
            margin-top: 0.5rem;
        }
        
        .progress-ring__circle {
            transition: stroke-dashoffset 0.5s;
            transform: rotate(-90deg);
            transform-origin: 50% 50%;
        }
        
        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: #f00;
            opacity: 0;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .fade-in {
            animation: fadeIn 0.6s ease forwards;
        }
        
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        .bounce {
            animation: bounce 0.8s ease infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .pulse {
            animation: pulse 1.5s ease infinite;
        }
        
        @keyframes tada {
            0% { transform: scale(1); }
            10%, 20% { transform: scale(0.9) rotate(-3deg); }
            30%, 50%, 70%, 90% { transform: scale(1.1) rotate(3deg); }
            40%, 60%, 80% { transform: scale(1.1) rotate(-3deg); }
            100% { transform: scale(1) rotate(0); }
        }
        
        .tada {
            animation: tada 1s ease;
        }
        
        @media (max-width: 640px) {
            .question-card {
                padding: 1rem;
            }
            
            .answer-input, .check-btn {
                width: 100%;
            }
            
            .hindi-text, .answer-input {
                font-size: 0.875rem;
            }
        }
        
        @media (max-width: 400px) {
            .hindi-text, .answer-input, .correct-answer, .incorrect-answer {
                font-size: 0.75rem;
            }
            
            .question-card {
                padding: 0.75rem;
            }
            
            .check-btn {
                padding: 0.5rem;
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <?php include('Sidebar.php'); ?>
    <div id="main-content" class="lg:ml-72 transition-all duration-300 p-4 lg:p-8">
    <div class="container mx-auto px-2 sm:px-4 py-6 sm:py-8 max-w-full sm:max-w-4xl">
        <!-- Header with animated progress -->
        <div class="text-center mb-6 sm:mb-8" data-aos="fade-down">
            <div class="flex justify-center mb-4">
                <div class="bg-indigo-100 p-3 rounded-full">
                    <i class="fas fa-language text-indigo-600 text-3xl"></i>
                </div>
            </div>
            <h1 class="text-xl sm:text-2xl md:text-3xl font-bold text-indigo-700 mb-2">Hindi to English Translation Quiz</h1>
            <p class="text-sm sm:text-base md:text-lg text-gray-600 flex items-center justify-center gap-2">
                <i class="fas fa-info-circle text-indigo-500"></i>
                Translate the Hindi sentences into English
            </p>
            <div class="mt-4 flex justify-center items-center">
                <div class="relative">
                    <svg class="progress-ring w-20 h-20" viewBox="0 0 100 100">
                        <circle class="progress-ring__circle stroke-gray-200" stroke-width="6" fill="transparent" r="40" cx="50" cy="50"/>
                        <circle class="progress-ring__circle stroke-indigo-600" stroke-width="6" stroke-dasharray="251.2" stroke-dashoffset="251.2" fill="transparent" r="40" cx="50" cy="50" id="progress-circle"/>
                    </svg>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="text-lg font-medium text-gray-700" id="progress-text">0/10</span>
                    </div>
                </div>
            </div>
        </div>
        
        <form id="quizForm" action="practicework.php?typeId=1&topicId=11" method="POST">
            <!-- Question 1 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6" data-aos="fade-up" data-aos-delay="50">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">1</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">वह संस्थान स्टाफ की कमी से झूझ रहा हैं I</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="237" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 1">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 1">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium flex items-start gap-2">
                                <i class="fas fa-check-circle mt-1 text-green-500"></i>
                                <span>Most Appropriate Answer: <span class="font-normal">That institute is struggling with a shortage of staff.</span></span>
                            </p>
                        </div>
                        <div class="incorrect-answer mt-4 bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium flex items-start gap-2">
                                <i class="fas fa-times-circle mt-1 text-red-500"></i>
                                <span>Most Appropriate Answer: <span class="font-normal">That institute is struggling with a shortage of staff.</span></span>
                            </p>
                        </div>
                        <input type="hidden" name="queId[]" value="237">
                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">2</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">हम प्यार और अच्छाई फैला रहे हैं I</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="238" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 2">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 2">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium flex items-start gap-2">
                                <i class="fas fa-check-circle mt-1 text-green-500"></i>
                                <span>Most Appropriate Answer: <span class="font-normal">We are spreading love and goodness.</span></span>
                            </p>
                        </div>
                        <div class="incorrect-answer mt-4 bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium flex items-start gap-2">
                                <i class="fas fa-times-circle mt-1 text-red-500"></i>
                                <span>Most Appropriate Answer: <span class="font-normal">We are spreading love and goodness.</span></span>
                            </p>
                        </div>
                        <input type="hidden" name="queId[]" value="238">
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6" data-aos="fade-up" data-aos-delay="150">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">3</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">मैं नए माहौल में ढलने की कोशिश कर रही हूँ I</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="239" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 3">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 3">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium flex items-start gap-2">
                                <i class="fas fa-check-circle mt-1 text-green-500"></i>
                                <span>Most Appropriate Answer: <span class="font-normal">I am trying to adjust to the new environment.</span></span>
                            </p>
                        </div>
                        <div class="incorrect-answer mt-4 bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium flex items-start gap-2">
                                <i class="fas fa-times-circle mt-1 text-red-500"></i>
                                <span>Most Appropriate Answer: <span class="font-normal">I am trying to adjust to the new environment.</span></span>
                            </p>
                        </div>
                        <input type="hidden" name="queId[]" value="239">
                    </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">4</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">वह 2 घंटो से एक ही गाना गुनगुना रहा हैं I</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="240" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 4">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 4">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium flex items-start gap-2">
                                <i class="fas fa-check-circle mt-1 text-green-500"></i>
                                <span>Most Appropriate Answer: <span class="font-normal">He has been humming the same song for 2 hours.</span></span>
                            </p>
                        </div>
                        <div class="incorrect-answer mt-4 bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium flex items-start gap-2">
                                <i class="fas fa-times-circle mt-1 text-red-500"></i>
                                <span>Most Appropriate Answer: <span class="font-normal">He has been humming the same song for 2 hours.</span></span>
                            </p>
                        </div>
                        <input type="hidden" name="queId[]" value="240">
                    </div>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6" data-aos="fade-up" data-aos-delay="250">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">5</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">हम सोमवार से स्कूल नहीं जा रहे थे I</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="241" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 5">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 5">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium flex items-start gap-2">
                                <i class="fas fa-check-circle mt-1 text-green-500"></i>
                                <span>Most Appropriate Answer: <span class="font-normal">We were not going to school since Monday.</span></span>
                            </p>
                        </div>
                        <div class="incorrect-answer mt-4 bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium flex items-start gap-2">
                                <i class="fas fa-times-circle mt-1 text-red-500"></i>
                                <span>Most Appropriate Answer: <span class="font-normal">We were not going to school since Monday.</span></span>
                            </p>
                        </div>
                        <input type="hidden" name="queId[]" value="241">
                    </div>
                </div>
            </div>

            <!-- Question 6 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">6</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">कल हम दिल्ली के लिए रवाना हो रहे होंगे I</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="242" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 6">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 6">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium flex items-start gap-2">
                                <i class="fas fa-check-circle mt-1 text-green-500"></i>
                                <span>Most Appropriate Answer: <span class="font-normal">Tomorrow we will be leaving for Delhi.</span></span>
                            </p>
                        </div>
                        <div class="incorrect-answer mt-4 bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium flex items-start gap-2">
                                <i class="fas fa-times-circle mt-1 text-red-500"></i>
                                <span>Most Appropriate Answer: <span class="font-normal">Tomorrow we will be leaving for Delhi.</span></span>
                            </p>
                        </div>
                        <input type="hidden" name="queId[]" value="242">
                    </div>
                </div>
            </div>

            <!-- Question 7 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6" data-aos="fade-up" data-aos-delay="350">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">7</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">क्या तुम उसे बर्बाद कर रही हो ?</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="243" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 7">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 7">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium flex items-start gap-2">
                                <i class="fas fa-check-circle mt-1 text-green-500"></i>
                                <span>Most Appropriate Answer: <span class="font-normal">Are you ruining him?</span></span>
                            </p>
                        </div>
                        <div class="incorrect-answer mt-4 bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium flex items-start gap-2">
                                <i class="fas fa-times-circle mt-1 text-red-500"></i>
                                <span>Most Appropriate Answer: <span class="font-normal">Are you ruining him?</span></span>
                            </p>
                        </div>
                        <input type="hidden" name="queId[]" value="243">
                    </div>
                </div>
            </div>

            <!-- Question 8 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6" data-aos="fade-up" data-aos-delay="400">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">8</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">क्या मैं अपने बच्चे का सही से पालन पोषण कर रही हूँ?</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="244" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 8">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 8">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium flex items-start gap-2">
                                <i class="fas fa-check-circle mt-1 text-green-500"></i>
                                <span>Most Appropriate Answer: <span class="font-normal">Am I raising my child properly?</span></span>
                            </p>
                        </div>
                        <div class="incorrect-answer mt-4 bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium flex items-start gap-2">
                                <i class="fas fa-times-circle mt-1 text-red-500"></i>
                                <span>Most Appropriate Answer: <span class="font-normal">Am I raising my child properly?</span></span>
                            </p>
                        </div>
                        <input type="hidden" name="queId[]" value="244">
                    </div>
                </div>
            </div>

            <!-- Question 9 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6" data-aos="fade-up" data-aos-delay="450">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">9</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">मैं 5 सालों से इस रिश्ते को निभाने की कोशिश कर रही हूँ ?</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="245" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 9">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 9">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium flex items-start gap-2">
                                <i class="fas fa-check-circle mt-1 text-green-500"></i>
                                <span>Most Appropriate Answer: <span class="font-normal">I have been trying to maintain this relationship for 5 years.</span></span>
                            </p>
                        </div>
                        <div class="incorrect-answer mt-4 bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium flex items-start gap-2">
                                <i class="fas fa-times-circle mt-1 text-red-500"></i>
                                <span>Most Appropriate Answer: <span class="font-normal">I have been trying to maintain this relationship for 5 years.</span></span>
                            </p>
                        </div>
                        <input type="hidden" name="queId[]" value="245">
                    </div>
                </div>
            </div>

            <!-- Question 10 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6" data-aos="fade-up" data-aos-delay="500">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">10</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">क्या वह अपने सपनों के लिए मेहनत कर रहा हैं ?</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="246" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 10">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 10">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium flex items-start gap-2">
                                <i class="fas fa-check-circle mt-1 text-green-500"></i>
                                <span>Most Appropriate Answer: <span class="font-normal">Is he working hard for his dreams?</span></span>
                            </p>
                        </div>
                        <div class="incorrect-answer mt-4 bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium flex items-start gap-2">
                                <i class="fas fa-times-circle mt-1 text-red-500"></i>
                                <span>Most Appropriate Answer: <span class="font-normal">Is he working hard for his dreams?</span></span>
                            </p>
                        </div>
                        <input type="hidden" name="queId[]" value="246">
                    </div>
                </div>
            </div>

            <div class="text-center mt-6 sm:mt-8" data-aos="fade-up" data-aos-delay="550">
                <button type="button" id="showResults" class="px-4 sm:px-6 py-2 sm:py-3 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 min-h-[48px] transition transform hover:scale-105 active:scale-95 flex items-center justify-center gap-2">
                    <i class="fas fa-chart-bar"></i> Show Results
                </button>
            </div>
        </form>
        
        <div id="resultsSummary" class="hidden mt-6 sm:mt-8 bg-white p-4 sm:p-6 rounded-lg shadow-md" data-aos="zoom-in">
            <div class="flex justify-center mb-4">
                <div class="bg-indigo-100 p-3 rounded-full">
                    <i class="fas fa-trophy text-indigo-600 text-3xl"></i>
                </div>
            </div>
            <h3 class="text-base sm:text-xl font-semibold text-gray-800 mb-4 text-center">Quiz Results</h3>
            <div class="flex items-center justify-between mb-2">
                <span class="text-gray-700 text-sm sm:text-base flex items-center gap-2">
                    <i class="fas fa-question-circle text-indigo-500"></i> Total Questions:
                </span>
                <span class="font-medium text-sm sm:text-base" id="totalQuestions">10</span>
            </div>
            <div class="flex items-center justify-between mb-2">
                <span class="text-gray-700 text-sm sm:text-base flex items-center gap-2">
                    <i class="fas fa-check-circle text-green-500"></i> Correct Answers:
                </span>
                <span class="font-medium text-green-600 text-sm sm:text-base" id="correctAnswers">0</span>
            </div>
            <div class="flex items-center justify-between mb-4">
                <span class="text-gray-700 text-sm sm:text-base flex items-center gap-2">
                    <i class="fas fa-percentage text-indigo-500"></i> Score:
                </span>
                <span class="font-medium text-indigo-600 text-sm sm:text-base" id="scorePercentage">0%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2.5">
                <div class="bg-indigo-600 h-2.5 rounded-full" id="scoreBar" style="width: 0%"></div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 800,
            easing: 'ease-out-cubic'
        });

        document.addEventListener('DOMContentLoaded', function() {
            const correctAnswers = {
                '237': 'That institute is struggling with a shortage of staff.',
                '238': 'We are spreading love and goodness.',
                '239': 'I am trying to adjust to the new environment.',
                '240': 'He has been humming the same song for 2 hours.',
                '241': 'We were not going to school since Monday.',
                '242': 'Tomorrow we will be leaving for Delhi.',
                '243': 'Are you ruining him?',
                '244': 'Am I raising my child properly?',
                '245': 'I have been trying to maintain this relationship for 5 years.',
                '246': 'Is he working hard for his dreams?'
            };
            
            const checkButtons = document.querySelectorAll('.check-btn');
            const progressCircle = document.getElementById('progress-circle');
            const progressText = document.getElementById('progress-text');
            const showResultsBtn = document.getElementById('showResults');
            const resultsSummary = document.getElementById('resultsSummary');
            const totalQuestions = Object.keys(correctAnswers).length;
            let answeredQuestions = 0;
            let correctCount = 0;
            
            checkButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const questionCard = this.closest('.question-card');
                    const input = questionCard.querySelector('.answer-input');
                    const correctAnswerDiv = questionCard.querySelector('.correct-answer');
                    const incorrectAnswerDiv = questionCard.querySelector('.incorrect-answer');
                    const queId = questionCard.querySelector('input[name="queId[]"]').value;
                    const userAnswer = input.value.trim().toLowerCase();
                    const correctAnswer = correctAnswers[queId].toLowerCase();
                    
                    correctAnswerDiv.classList.remove('show');
                    incorrectAnswerDiv.classList.remove('show');
                    questionCard.classList.remove('correct', 'incorrect');
                    
                    if (userAnswer === correctAnswer) {
                        questionCard.classList.add('correct');
                        correctAnswerDiv.classList.add('show');
                        if (!questionCard.hasAttribute('data-answered')) {
                            correctCount++;
                        }
                    } else {
                        questionCard.classList.add('incorrect');
                        incorrectAnswerDiv.classList.add('show');
                    }
                    
                    if (!questionCard.hasAttribute('data-answered')) {
                        questionCard.setAttribute('data-answered', 'true');
                        answeredQuestions++;
                        const progress = (answeredQuestions / totalQuestions) * 251.2;
                        progressCircle.style.strokeDashoffset = 251.2 - progress;
                        progressText.textContent = `${answeredQuestions}/${totalQuestions}`;
                    }
                });
            });
            
            showResultsBtn.addEventListener('click', function() {
                document.getElementById('totalQuestions').textContent = totalQuestions;
                document.getElementById('correctAnswers').textContent = correctCount;
                const percentage = Math.round((correctCount / totalQuestions) * 100);
                document.getElementById('scorePercentage').textContent = `${percentage}%`;
                document.getElementById('scoreBar').style.width = `${percentage}%`;
                
                resultsSummary.classList.remove('hidden');
                this.classList.add('hidden');
                resultsSummary.scrollIntoView({ behavior: 'smooth' });
                
                // Trigger confetti effect if score is 80% or higher
                if (percentage >= 80) {
                    createConfetti();
                }
            });

            function createConfetti() {
                const colors = ['#f00', '#0f0', '#00f', '#ff0', '#f0f'];
                for (let i = 0; i < 50; i++) {
                    const confetti = document.createElement('div');
                    confetti.className = 'confetti';
                    confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                    confetti.style.left = `${Math.random() * 100}vw`;
                    confetti.style.top = `${Math.random() * 100}vh`;
                    confetti.style.animation = `fall ${Math.random() * 2 + 1}s linear`;
                    document.body.appendChild(confetti);
                    setTimeout(() => confetti.remove(), 3000);
                }
            }

            const style = document.createElement('style');
            style.textContent = `
                @keyframes fall {
                    0% { transform: translateY(-100vh) rotate(0deg); opacity: 1; }
                    100% { transform: translateY(100vh) rotate(360deg); opacity: 0; }
                }
            `;
            document.head.appendChild(style);
        });
    </script>
</div>
</body>
</html>