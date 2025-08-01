<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghyaan.com - Hindi to English Translation Quiz</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
        }
        
        .question-card {
            transition: all 0.3s ease;
            border-left: 4px solid #4f46e5;
            border-radius: 1.5rem;
        }
        
        .question-card.correct { border-left-color: #10b981; }
        .question-card.incorrect { border-left-color: #ef4444; }
        
        .answer-input {
            min-height: 48px;
            word-break: break-word;
            overflow-wrap: break-word;
        }
        
        .check-btn {
            min-height: 48px;
            min-width: 48px;
        }
        
        .hindi-text {
            word-break: break-word;
            overflow-wrap: break-word;
            white-space: normal;
        }
        
        .correct-answer, .incorrect-answer {
            transition: all 0.3s ease;
        }
        
        @media (max-width: 640px) {
            .question-card {
                padding: 1rem;
            }
            
            .answer-input, .check-btn {
                width: 100%;
            }
            
            .hindi-text, .answer-input {
                font-size: 0.875rem; /* text-sm */
            }
        }
        
        @media (max-width: 400px) {
            .hindi-text, .answer-input, .correct-answer, .incorrect-answer {
                font-size: 0.75rem; /* text-xs */
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
       <div class="text-center mb-6 sm:mb-8">
            <h1 class="text-xl sm:text-2xl md:text-3xl font-bold text-indigo-700 mb-2">Hindi to English Translation Quiz</h1>
            <p class="text-sm sm:text-base md:text-lg text-gray-600">Translate the Hindi sentences into English</p>
            <div class="mt-4 flex justify-center items-center">
                <div class="w-full bg-gray-200 rounded-full h-2.5 max-w-full sm:max-w-md">
                    <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 0%" id="progress-bar"></div>
                </div>
                <span class="ml-4 text-sm font-medium text-gray-700" id="progress-text">0/10</span>
            </div>
        </div>
        
        <form id="quizForm" action="practicework.php?typeId=1&topicId=5" method="POST">
            <!-- Question 1 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">1</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">हम सिर्फ समस्याओं के बारे में बात करते रहते हैं</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="197" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 1">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 1">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">We keep talking about problems only.</span></p>
                        </div>
                        <div class="incorrect-answer mt-4 hidden bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium">Incorrect: <span class="font-normal">The correct answer is: We keep talking about problems only.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="197">
                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">2</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">मैं रात भर माँ को याद करके सिसकियाँ भरता रहा</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="198" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 2">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 2">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">I kept sobbing all night remembering my mother.</span></p>
                        </div>
                        <div class="incorrect-answer mt-4 hidden bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium">Incorrect: <span class="font-normal">The correct answer is: I kept sobbing all night remembering my mother.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="198">
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">3</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">हम सपनों के बजाय महत्वहीन चीज़ों का पीछा करते रहते हैं</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="199" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 3">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 3">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">We keep chasing insignificant things instead of dreams.</span></p>
                        </div>
                        <div class="incorrect-answer mt-4 hidden bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium">Incorrect: <span class="font-normal">The correct answer is: We keep chasing insignificant things instead of dreams.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="199">
                    </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">4</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">उसके अभिभावक उसकी छोटी सी गलती के लिए उसे जीवन भर फटकारते रहेंगे</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="200" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 4">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 4">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">Her parents will keep scolding her for a small mistake her whole life.</span></p>
                        </div>
                        <div class="incorrect-answer mt-4 hidden bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium">Incorrect: <span class="font-normal">The correct answer is: Her parents will keep scolding her for a small mistake her whole life.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="200">
                    </div>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">5</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">सपने ना रखने वाले लोग हमेशा सपना पूरा करने वालों का मज़ाक उड़ाते रहते हैं</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="201" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 5">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 5">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">People who don’t have dreams always keep mocking those who fulfill their dreams.</span></p>
                        </div>
                        <div class="incorrect-answer mt-4 hidden bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium">Incorrect: <span class="font-normal">The correct answer is: People who don’t have dreams always keep mocking those who fulfill their dreams.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="201">
                    </div>
                </div>
            </div>

            <!-- Question 6 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">6</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">अच्छे लोग हमेशा अपनी अच्छाई दर्शाते रहेंगे</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="202" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 6">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 6">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">Good people will always keep showing their goodness.</span></p>
                        </div>
                        <div class="incorrect-answer mt-4 hidden bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium">Incorrect: <span class="font-normal">The correct answer is: Good people will always keep showing their goodness.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="202">
                    </div>
                </div>
            </div>

            <!-- Question 7 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">7</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">वह परीक्षा खत्म करके दिन भर रबड़ता रहा</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="203" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 7">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 7">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">He kept sulking all day after finishing the exam.</span></p>
                        </div>
                        <div class="incorrect-answer mt-4 hidden bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium">Incorrect: <span class="font-normal">The correct answer is: He kept sulking all day after finishing the exam.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="203">
                    </div>
                </div>
            </div>

            <!-- Question 8 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">8</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">उसका परिवार वैष्णो देवी के दर्शन को जाता रहता हैं</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="204" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 8">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 8">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">His family keeps going to visit Vaishno Devi.</span></p>
                        </div>
                        <div class="incorrect-answer mt-4 hidden bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium">Incorrect: <span class="font-normal">The correct answer is: His family keeps going to visit Vaishno Devi.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="204">
                    </div>
                </div>
            </div>

            <!-- Question 9 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">9</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">वह परीक्षा में पास होने के लिए ज़मीन आसमान एक करती रही</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="205" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 9">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 9">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">She kept moving heaven and earth to pass the exam.</span></p>
                        </div>
                        <div class="incorrect-answer mt-4 hidden bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium">Incorrect: <span class="font-normal">The correct answer is: She kept moving heaven and earth to pass the exam.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="205">
                    </div>
                </div>
            </div>

            <!-- Question 10 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">10</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">वह हर छोटी छोटी बात पर रोता रहता हैं</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="206" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 10">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 10">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">He keeps crying over every small thing.</span></p>
                        </div>
                        <div class="incorrect-answer mt-4 hidden bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium">Incorrect: <span class="font-normal">The correct answer is: He keeps crying over every small thing.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="206">
                    </div>
                </div>
            </div>

            <div class="text-center mt-6 sm:mt-8">
                <button type="button" id="showResults" class="px-4 sm:px-6 py-2 sm:py-3 bg-indigo-600 text-white font-medium rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 min-h-[48px]">
                    Show Results
                </button>
            </div>
        </form>
        
        <div id="resultsSummary" class="hidden mt-6 sm:mt-8 bg-white p-4 sm:p-6 rounded-lg shadow-md">
            <h3 class="text-base sm:text-xl font-semibold text-gray-800 mb-4">Quiz Results</h3>
            <div class="flex items-center justify-between mb-2">
                <span class="text-gray-700 text-sm sm:text-base">Total Questions:</span>
                <span class="font-medium text-sm sm:text-base" id="totalQuestions">10</span>
            </div>
            <div class="flex items-center justify-between mb-2">
                <span class="text-gray-700 text-sm sm:text-base">Correct Answers:</span>
                <span class="font-medium text-green-600 text-sm sm:text-base" id="correctAnswers">0</span>
            </div>
            <div class="flex items-center justify-between mb-4">
                <span class="text-gray-700 text-sm sm:text-base">Score:</span>
                <span class="font-medium text-indigo-600 text-sm sm:text-base" id="scorePercentage">0%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2.5">
                <div class="bg-indigo-600 h-2.5 rounded-full" id="scoreBar" style="width: 0%"></div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const correctAnswers = {
                '197': 'We keep talking about problems only.',
                '198': 'I kept sobbing all night remembering my mother.',
                '199': 'We keep chasing insignificant things instead of dreams.',
                '200': 'Her parents will keep scolding her for a small mistake her whole life.',
                '201': 'People who don’t have dreams always keep mocking those who fulfill their dreams.',
                '202': 'Good people will always keep showing their goodness.',
                '203': 'He kept sulking all day after finishing the exam.',
                '204': 'His family keeps going to visit Vaishno Devi.',
                '205': 'She kept moving heaven and earth to pass the exam.',
                '206': 'He keeps crying over every small thing.'
            };
            
            const checkButtons = document.querySelectorAll('.check-btn');
            const progressBar = document.getElementById('progress-bar');
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
                    
                    correctAnswerDiv.classList.add('hidden');
                    incorrectAnswerDiv.classList.add('hidden');
                    questionCard.classList.remove('correct', 'incorrect');
                    
                    if (userAnswer === correctAnswer) {
                        questionCard.classList.add('correct');
                        correctAnswerDiv.classList.remove('hidden');
                        if (!questionCard.hasAttribute('data-answered')) {
                            correctCount++;
                        }
                    } else {
                        questionCard.classList.add('incorrect');
                        incorrectAnswerDiv.classList.remove('hidden');
                    }
                    
                    if (!questionCard.hasAttribute('data-answered')) {
                        questionCard.setAttribute('data-answered', 'true');
                        answeredQuestions++;
                        progressBar.style.width = `${(answeredQuestions / totalQuestions) * 100}%`;
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
            });
        });
    </script>
</div>
</body>
</html>