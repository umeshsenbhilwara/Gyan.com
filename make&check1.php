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
    <div id="main-content" class="container mx-auto px-2 sm:px-4 py-6 sm:py-8 max-w-full sm:max-w-4xl">
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
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">आप छींकिए मत ।</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="167" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 1">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 1">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">Don't sneeze.</span></p>
                        </div>
                        <div class="incorrect-answer mt-4 hidden bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium">Incorrect: <span class="font-normal">The correct answer is: Don't sneeze.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="167">
                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">2</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">पापा पर मत चिल्ला ।</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="168" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 2">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 2">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">Don't shout at father.</span></p>
                        </div>
                        <div class="incorrect-answer mt-4 hidden bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium">Incorrect: <span class="font-normal">The correct answer is: Don't shout at father.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="168">
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">3</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">खाने में मीठा मत परोसना ।</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="169" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 3">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 3">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">Don't serve sweets in the meal.</span></p>
                        </div>
                        <div class="incorrect-answer mt-4 hidden bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium">Incorrect: <span class="font-normal">The correct answer is: Don't serve sweets in the meal.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="169">
                    </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">4</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">इन बच्चो की देखभाल करिए</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="170" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 4">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 4">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">Take care of these children.</span></p>
                        </div>
                        <div class="incorrect-answer mt-4 hidden bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium">Incorrect: <span class="font-normal">The correct answer is: Take care of these children.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="170">
                    </div>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">5</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">साफ पानी पिया कर</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="171" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 5">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 5">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class  ="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">Drink clean water.</span></p>
                        </div>
                        <div class="incorrect-answer mt-4 hidden bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium">Incorrect: <span class="font-normal">The correct answer is: Drink clean water.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="171">
                    </div>
                </div>
            </div>

            <!-- Question 6 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">6</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">मेरा कमरा साफ मत करना ।</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="172" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 6">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 6">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">Don't clean my room.</span></p>
                        </div>
                        <div class="incorrect-answer mt-4 hidden bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium">Incorrect: <span class="font-normal">The correct answer is: Don't clean my room.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="172">
                    </div>
                </div>
            </div>

            <!-- Question 7 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">7</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">यह किताब पढ़ो</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="173" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 7">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 7">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">Read this book.</span></p>
                        </div>
                        <div class="incorrect-answer mt-4 hidden bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium">Incorrect: <span class="font-normal">The correct answer is: Read this book.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="173">
                    </div>
                </div>
            </div>

            <!-- Question 8 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6">
                <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">8</span>
                <div class="flex-1">
                    <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">पापा से बहस मत करिए ।</p>
                    <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                        <input type="text" name="174" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 8">
                        <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 8">
                            <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                        </button>
                    </div>
                    <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                        <p class="text-green-700 font-medium">Correct: <span class="font-normal">Don't argue with father.</span></p>
                    </div>
                    <div class="incorrect-answer mt-4 hidden bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                        <p class="text-red-700 font-medium">Incorrect: <span class="font-normal">The correct answer is: Don't argue with father.</span></p>
                    </div>
                    <input type="hidden" name="queId[]" value="174">
                </div>
            </div>

            <!-- Question 9 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6">
                <div class="flex items-start space-x-3">
                <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">9</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">खाना बर्बाद मत कर ।</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="175" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 9">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 9">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">Don't waste food.</span></p>
                        </div>
                        <div class="incorrect-answer mt-4 hidden bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium">Incorrect: <span class="font-normal">The correct answer is: Don't waste food.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="175">
                    </div>
                </div>
            </div>

            <!-- Question 10 -->
            <div class="question-card bg-white p-4 sm:p-6 rounded-3xl shadow-md border-l-4 border-indigo-500 mb-6">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">10</span>
                    <div class="flex-1">
                        <p class="text-sm sm:text-lg font-medium text-gray-800 mb-4 hindi-text">शर्ट पर रंग मत लगा ।</p>
                        <div class="flex flex-col sm:flex-row gap-2 sm:gap-3">
                            <input type="text" name="176" class="answer-input flex-1 px-3 sm:px-4 py-2 sm:py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Enter Your Answer" aria-label="Translation for question 10">
                            <button type="button" class="check-btn px-4 sm:px-5 py-2 sm:py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2" aria-label="Check answer for question 10">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">Don't stain the shirt.</span></p>
                        </div>
                        <div class="incorrect-answer mt-4 hidden bg-red-50 border-l-4 border-red-500 p-4 rounded-r">
                            <p class="text-red-700 font-medium">Incorrect: <span class="font-normal">The correct answer is: Don't stain the shirt.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="176">
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
                '167': "Don't sneeze.",
                '168': "Don't shout at father.",
                '169': "Don't serve sweets in the meal.",
                '170': 'Take care of these children.',
                '171': 'Drink clean water.',
                '172': "Don't clean my room.",
                '173': 'Read this book.',
                '174': "Don't argue with father.",
                '175': "Don't waste food.",
                '176': "Don't stain the shirt."
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
</body>
</html>