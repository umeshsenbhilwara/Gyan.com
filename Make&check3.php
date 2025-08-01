<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hindi-English Translation Quiz</title>
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
        }
        .question-card:hover {
            transform: translateY(-2px);
        }
        .hindi-text {
            color: #1e40af;
        }
        .answer-input:focus {
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }
    </style>
</head>
<body class="bg-gray-50">
    <?php include('Sidebar.php'); ?>
    <div id="main-content" class="lg:ml-72 transition-all duration-300 p-4 lg:p-8">
        <!-- Quiz Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-indigo-700 mb-2">Hindi to English Translation</h1>
            <p class="text-gray-600">Translate these sentences to test your skills</p>
            <div class="w-full bg-gray-200 rounded-full h-2.5 mt-4">
                <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 10%"></div>
            </div>
        </div>

        <!-- Quiz Form -->
        <form id="quizForm" class="space-y-6">
            <!-- Question 1 -->
            <div class="question-card bg-white p-6 rounded-xl shadow-md border-l-4 border-indigo-500">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">1</span>
                    <div class="flex-1">
                        <p class="text-lg font-medium text-gray-800 mb-4 hindi-text">उसके पास 5 साल पढाने का अनुभव हैं I</p>
                        <div class="flex flex-col md:flex-row gap-3">
                            <input type="text" name="187" class="answer-input flex-1 px-4 py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Type your translation...">
                            <button type="button" class="check-btn px-5 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">He has 5 years of teaching experience.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="187">
                    </div>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="question-card bg-white p-6 rounded-xl shadow-md border-l-4 border-indigo-500">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">2</span>
                    <div class="flex-1">
                        <p class="text-lg font-medium text-gray-800 mb-4 hindi-text">बड़े शहरों के लोग छोटी सोच रखते हैं I</p>
                        <div class="flex flex-col md:flex-row gap-3">
                            <input type="text" name="188" class="answer-input flex-1 px-4 py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Type your translation...">
                            <button type="button" class="check-btn px-5 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">People in big cities have a narrow mindset.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="188">
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="question-card bg-white p-6 rounded-xl shadow-md border-l-4 border-indigo-500">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">3</span>
                    <div class="flex-1">
                        <p class="text-lg font-medium text-gray-800 mb-4 hindi-text">मेरे पास अपनी स्वंय की गाड़ी थी I</p>
                        <div class="flex flex-col md:flex-row gap-3">
                            <input type="text" name="189" class="answer-input flex-1 px-4 py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Type your translation...">
                            <button type="button" class="check-btn px-5 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">I had my own car.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="189">
                    </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="question-card bg-white p-6 rounded-xl shadow-md border-l-4 border-indigo-500">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">4</span>
                    <div class="flex-1">
                        <p class="text-lg font-medium text-gray-800 mb-4 hindi-text">उसके पास जीतने का मनोबल नहीं था I</p>
                        <div class="flex flex-col md:flex-row gap-3">
                            <input type="text" name="190" class="answer-input flex-1 px-4 py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Type your translation...">
                            <button type="button" class="check-btn px-5 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">He didn't have the morale to win.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="190">
                    </div>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="question-card bg-white p-6 rounded-xl shadow-md border-l-4 border-indigo-500">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">5</span>
                    <div class="flex-1">
                        <p class="text-lg font-medium text-gray-800 mb-4 hindi-text">एक दिन मेरे पास सारी सुख सुविधा होंगी I</p>
                        <div class="flex flex-col md:flex-row gap-3">
                            <input type="text" name="191" class="answer-input flex-1 px-4 py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Type your translation...">
                            <button type="button" class="check-btn px-5 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">One day I will have all the comforts.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="191">
                    </div>
                </div>
            </div>
            <!-- Question 6 -->
            <div class="question-card bg-white p-6 rounded-xl shadow-md border-l-4 border-indigo-500">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">6</span>
                    <div class="flex-1">
                        <p class="text-lg font-medium text-gray-800 mb-4 hindi-text">वह इतराने वाला व्यवहार रखती हैं I</p>
                        <div class="flex flex-col md:flex-row gap-3">
                            <input type="text" name="192" class="answer-input flex-1 px-4 py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Type your translation...">
                            <button type="button" class="check-btn px-5 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">She has an arrogant behavior.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="192">
                    </div>
                </div>
            </div>

            <!-- Question 7 -->
            <div class="question-card bg-white p-6 rounded-xl shadow-md border-l-4 border-indigo-500">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">7</span>
                    <div class="flex-1">
                        <p class="text-lg font-medium text-gray-800 mb-4 hindi-text">मैं अपने व्यवहार के कारण कभी भी शिकायत नहीं रखूँगा I</p>
                        <div class="flex flex-col md:flex-row gap-3">
                            <input type="text" name="193" class="answer-input flex-1 px-4 py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Type your translation...">
                            <button type="button" class="check-btn px-5 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">I will never have any complaints because of my behavior.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="193">
                    </div>
                </div>
            </div>

            <!-- Question 8 -->
            <div class="question-card bg-white p-6 rounded-xl shadow-md border-l-4 border-indigo-500">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">8</span>
                    <div class="flex-1">
                        <p class="text-lg font-medium text-gray-800 mb-4 hindi-text">कुछ बड़े लोग पेसों का बहुत घमंड रखते हैं I</p>
                        <div class="flex flex-col md:flex-row gap-3">
                            <input type="text" name="194" class="answer-input flex-1 px-4 py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Type your translation...">
                            <button type="button" class="check-btn px-5 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">Some big people have a lot of pride in money.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="194">
                    </div>
                </div>
            </div>

            <!-- Question 9 -->
            <div class="question-card bg-white p-6 rounded-xl shadow-md border-l-4 border-indigo-500">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">9</span>
                    <div class="flex-1">
                        <p class="text-lg font-medium text-gray-800 mb-4 hindi-text">उसमे कुछ  खूबिया और बुराइया हैं I</p>
                        <div class="flex flex-col md:flex-row gap-3">
                            <input type="text" name="195" class="answer-input flex-1 px-4 py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Type your translation...">
                            <button type="button" class="check-btn px-5 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">He has some good qualities and bad qualities.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="195">
                    </div>
                </div>
            </div>

            <!-- Question 10 -->
            <div class="question-card bg-white p-6 rounded-xl shadow-md border-l-4 border-indigo-500">
                <div class="flex items-start space-x-3">
                    <span class="bg-indigo-100 text-indigo-800 font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">10</span>
                    <div class="flex-1">
                        <p class="text-lg font-medium text-gray-800 mb-4 hindi-text">हमारे परिवार कुछ आपसी मतभेद रखते हैं I</p>
                        <div class="flex flex-col md:flex-row gap-3">
                            <input type="text" name="196" class="answer-input flex-1 px-4 py-3 rounded-lg border border-gray-300 focus:border-indigo-500 outline-none transition" placeholder="Type your translation...">
                            <button type="button" class="check-btn px-5 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition flex items-center justify-center gap-2">
                                <i class="fas fa-check"></i> <span class="hidden sm:inline">Check</span>
                            </button>
                        </div>
                        <div class="correct-answer mt-4 hidden bg-green-50 border-l-4 border-green-500 p-4 rounded-r">
                            <p class="text-green-700 font-medium">Correct: <span class="font-normal">Our family has some mutual differences.</span></p>
                        </div>
                        <input type="hidden" name="queId[]" value="196">
                    </div>
                </div>
            </div>
            <!-- Submit Button -->
            <div class="mt-8 text-center">
                <button type="submit" name="submit_quiz_sentence" class="px-8 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition font-medium text-lg shadow-md hover:shadow-lg w-full sm:w-auto">
                    <i class="fas fa-paper-plane mr-2"></i> Submit All Answers
                </button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Check answer buttons functionality
            const checkButtons = document.querySelectorAll('.check-btn');
            
            checkButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const answerInput = this.previousElementSibling;
                    const correctAnswer = this.parentElement.nextElementSibling;
                    
                    if (answerInput.value.trim() === '') {
                        alert('Please enter your answer first.');
                        return;
                    }
                    
                    // Show the correct answer
                    correctAnswer.classList.remove('hidden');
                    
                    // Disable the input and button after checking
                    answerInput.disabled = true;
                    this.disabled = true;
                    this.innerHTML = '<i class="fas fa-check-circle"></i> <span class="hidden sm:inline">Checked</span>';
                    this.classList.remove('bg-indigo-600', 'hover:bg-indigo-700');
                    this.classList.add('bg-green-500', 'cursor-default');
                });
            });
            
            // Form submission handling
            const quizForm = document.getElementById('quizForm');
            quizForm.addEventListener('submit', function(e) {
                e.preventDefault();
                // You can add form validation here if needed
                alert('Your answers have been submitted!');
                // Uncomment to actually submit the form
                // this.submit();
            });
        });
    </script>
</div>
</body>
</html>