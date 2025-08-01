<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghyaan.com - English Practice</title>
       <link  rel="stylesheet" href="./output.css" >
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
        }
        
        .question-card.correct {
            border-left: 4px solid #10b981;
        }
        
        .question-card.incorrect {
            border-left: 4px solid #ef4444;
        }
        
        .option {
            transition: all 0.2s ease;
        }
        
        .option:hover {
            transform: translateX(5px);
        }
        
        .option.selected {
            background-color: #e0e7ff;
        }
        
        .option.correct {
            background-color: #d1fae5;
            border-left: 3px solid #10b981;
        }
        
        .option.incorrect {
            background-color: #fee2e2;
            border-left: 3px solid #ef4444;
        }
        
        .feedback {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        
        .feedback.show {
            max-height: 100px;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-50 to-amber-50 min-h-screen bg-gradient-to-b from-primary to-secondary ">
             
         <!--  <iframe src="sidebar.html" class="w-full h-full bg-red"></iframe> -->
        <?php include 'sidebar.php';?>
          
          <div id="main-content" class="lg:ml-72 transition-all duration-300 p-4 lg:p-8">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-indigo-700 mb-2">English Practice Quiz</h1>
            <p class="text-gray-600">Test your knowledge with these translation questions</p>
            <div class="mt-4 flex justify-center items-center">
                <div class="w-full bg-gray-200 rounded-full h-2.5 max-w-md">
                    <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 0%" id="progress-bar"></div>
                </div>
                <span class="ml-4 text-sm font-medium text-gray-700" id="progress-text">0/10</span>
            </div>
        </div>
        
        <form id="quizForm">
            <!-- Question 1 -->
            <div class="question-card bg-white rounded-lg shadow-md mb-6 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-gray-800">Question #1</h3>
                        <span class="text-sm font-medium text-gray-500 hidden feedback-status"></span>
                    </div>
                    <p class="mt-2 text-lg text-gray-700">English of "किताब में लिख दीजिये।"</p>
                    
                    <div class="mt-4 space-y-3">
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q1" id="q1-1" class="hidden">
                            <label for="q1-1" class="flex items-center cursor-pointer">
                                <span class="flex items-center justify-center w-6 h-6 rounded-full border border-gray-300 mr-3"></span>
                                <span>Write in book.</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="true">
                            <input type="radio" name="q1" id="q1-2" class="hidden">
                            <label for="q1-2" class="flex items-center cursor-pointer">
                                <span class="flex items-center justify-center w-6 h-6 rounded-full border border-gray-300 mr-3"></span>
                                <span>Do write in book.</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q1" id="q1-3" class="hidden">
                            <label for="q1-3" class="flex items-center cursor-pointer">
                                <span class="flex items-center justify-center w-6 h-6 rounded-full border border-gray-300 mr-3"></span>
                                <span>Make write in book.</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q1" id="q1-4" class="hidden">
                            <label for="q1-4" class="flex items-center cursor-pointer">
                                <span class="flex items-center justify-center w-6 h-6 rounded-full border border-gray-300 mr-3"></span>
                                <span>Won't write in book.</span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="feedback mt-3 text-sm">
                        <div class="feedback-content p-3 rounded-md hidden"></div>
                    </div>
                </div>
            </div>
            
            <!-- Question 2 -->
            <div class="question-card bg-white rounded-lg shadow-md mb-6 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-gray-800">Question #2</h3>
                        <span class="text-sm font-medium text-gray-500 hidden feedback-status"></span>
                    </div>
                    <p class="mt-2 text-lg text-gray-700">Hindi of 'Don't use Pen'.</p>
                    
                    <div class="mt-4 space-y-3">
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="true">
                            <input type="radio" name="q2" id="q2-1" class="hidden">
                            <label for="q2-1" class="flex items-center cursor-pointer">
                                <span class="flex items-center justify-center w-6 h-6 rounded-full border border-gray-300 mr-3"></span>
                                <span>पेन मत काम में लीजिये।</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q2" id="q2-2" class="hidden">
                            <label for="q2-2" class="flex items-center cursor-pointer">
                                <span class="flex items-center justify-center w-6 h-6 rounded-full border border-gray-300 mr-3"></span>
                                <span>पेन से काम मत करिएगा।</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q2" id="q2-3" class="hidden">
                            <label for="q2-3" class="flex items-center cursor-pointer">
                                <span class="flex items-center justify-center w-6 h-6 rounded-full border border-gray-300 mr-3"></span>
                                <span>काम मत करिए पेन से।</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q2" id="q2-4" class="hidden">
                            <label for="q2-4" class="flex items-center cursor-pointer">
                                <span class="flex items-center justify-center w-6 h-6 rounded-full border border-gray-300 mr-3"></span>
                                <span>पेन काम मे मत लो।</span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="feedback mt-3 text-sm">
                        <div class="feedback-content p-3 rounded-md hidden"></div>
                    </div>
                </div>
            </div>
            
            <!-- Question 3 -->
            <div class="question-card bg-white rounded-lg shadow-md mb-6 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-gray-800">Question #3</h3>
                        <span class="text-sm font-medium text-gray-500 hidden feedback-status"></span>
                    </div>
                    <p class="mt-2 text-lg text-gray-700">Which one shows respect?</p>
                    
                    <div class="mt-4 space-y-3">
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q3" id="q3-1" class="hidden">
                            <label for="q3-1" class="flex items-center cursor-pointer">
                                <span class="flex items-center justify-center w-6 h-6 rounded-full border border-gray-300 mr-3"></span>
                                <span>Don't sit</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q3" id="q3-2" class="hidden">
                            <label for="q3-2" class="flex items-center cursor-pointer">
                                <span class="flex items-center justify-center w-6 h-6 rounded-full border border-gray-300 mr-3"></span>
                                <span>Won't sit</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="true">
                            <input type="radio" name="q3" id="q3-3" class="hidden">
                            <label for="q3-3" class="flex items-center cursor-pointer">
                                <span class="flex items-center justify-center w-6 h-6 rounded-full border border-gray-300 mr-3"></span>
                                <span>Do sit.</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q3" id="q3-4" class="hidden">
                            <label for="q3-4" class="flex items-center cursor-pointer">
                                <span class="flex items-center justify-center w-6 h-6 rounded-full border border-gray-300 mr-3"></span>
                                <span>AOTA</span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="feedback mt-3 text-sm">
                        <div class="feedback-content p-3 rounded-md hidden"></div>
                    </div>
                </div>
            </div>
            
            <!-- Add more questions following the same pattern -->
               
            <!-- Question 4 -->
            <div class="question-card bg-white rounded-lg shadow-md mb-6 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-gray-800">Question #4</h3>
                        <span class="text-sm font-medium text-gray-500 hidden feedback-status"></span>
                    </div>
                    <p class="mt-2 text-lg text-gray-700">Hindi of 'Give him chance'.</p>
                    
                    <div class="mt-4 space-y-3">
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q4" id="q4-1" class="hidden option-radio">
                            <label for="q4-1" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>उसे मौका दो।</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="true">
                            <input type="radio" name="q4" id="q4-2" class="hidden option-radio">
                            <label for="q4-2" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>उसे मौका दीजिये।</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q4" id="q4-3" class="hidden option-radio">
                            <label for="q4-3" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>मौका मत देना उसे।</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q4" id="q4-4" class="hidden option-radio">
                            <label for="q4-4" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>मौका देंगे उसे।</span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="feedback mt-3 text-sm">
                        <div class="feedback-content p-3 rounded-md hidden"></div>
                    </div>
                </div>
            </div>
            
            <!-- Question 5 -->
            <div class="question-card bg-white rounded-lg shadow-md mb-6 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-gray-800">Question #5</h3>
                        <span class="text-sm font-medium text-gray-500 hidden feedback-status"></span>
                    </div>
                    <p class="mt-2 text-lg text-gray-700">English of "उसका कम्प्युटर मत चला।"</p>
                    
                    <div class="mt-4 space-y-3">
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q5" id="q5-1" class="hidden option-radio">
                            <label for="q5-1" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>Do not operate her computer</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="true">
                            <input type="radio" name="q5" id="q5-2" class="hidden option-radio">
                            <label for="q5-2" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>Don't operate her computer.</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q5" id="q5-3" class="hidden option-radio">
                            <label for="q5-3" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>Won't operate her computer.</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q5" id="q5-4" class="hidden option-radio">
                            <label for="q5-4" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>NOTA</span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="feedback mt-3 text-sm">
                        <div class="feedback-content p-3 rounded-md hidden"></div>
                    </div>
                </div>
            </div>
            
            <!-- Question 6 -->
            <div class="question-card bg-white rounded-lg shadow-md mb-6 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-gray-800">Question #6</h3>
                        <span class="text-sm font-medium text-gray-500 hidden feedback-status"></span>
                    </div>
                    <p class="mt-2 text-lg text-gray-700">English of "इस पहेली को सुलझा।"</p>
                    
                    <div class="mt-4 space-y-3">
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q6" id="q6-1" class="hidden option-radio">
                            <label for="q6-1" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>Do solve this puzzle.</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q6" id="q6-2" class="hidden option-radio">
                            <label for="q6-2" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>Do solving this puzzle</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q6" id="q6-3" class="hidden option-radio">
                            <label for="q6-3" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>Won't solve this puzzle.</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="true">
                            <input type="radio" name="q6" id="q6-4" class="hidden option-radio">
                            <label for="q6-4" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>Solve this puzzle.</span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="feedback mt-3 text-sm">
                        <div class="feedback-content p-3 rounded-md hidden"></div>
                    </div>
                </div>
            </div>
            
            <!-- Question 7 -->
            <div class="question-card bg-white rounded-lg shadow-md mb-6 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-gray-800">Question #7</h3>
                        <span class="text-sm font-medium text-gray-500 hidden feedback-status"></span>
                    </div>
                    <p class="mt-2 text-lg text-gray-700">English of "इस पेज को फाड़ दीजिये।"</p>
                    
                    <div class="mt-4 space-y-3">
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="true">
                            <input type="radio" name="q7" id="q7-1" class="hidden option-radio">
                            <label for="q7-1" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>Tear this page.</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q7" id="q7-2" class="hidden option-radio">
                            <label for="q7-2" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>Won't tear this page.</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q7" id="q7-3" class="hidden option-radio">
                            <label for="q7-3" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>Do tear this page.</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q7" id="q7-4" class="hidden option-radio">
                            <label for="q7-4" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>Both A & C</span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="feedback mt-3 text-sm">
                        <div class="feedback-content p-3 rounded-md hidden"></div>
                    </div>
                </div>
            </div>
            
            <!-- Question 8 -->
            <div class="question-card bg-white rounded-lg shadow-md mb-6 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-gray-800">Question #8</h3>
                        <span class="text-sm font-medium text-gray-500 hidden feedback-status"></span>
                    </div>
                    <p class="mt-2 text-lg text-gray-700">Hindi of 'Do keep this there'.</p>
                    
                    <div class="mt-4 space-y-3">
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q8" id="q8-1" class="hidden option-radio">
                            <label for="q8-1" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>इसे वहाँ रख</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="true">
                            <input type="radio" name="q8" id="q8-2" class="hidden option-radio">
                            <label for="q8-2" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>इसे वहाँ रखिए</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q8" id="q8-3" class="hidden option-radio">
                            <label for="q8-3" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>इसे वहाँ रखना</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q8" id="q8-4" class="hidden option-radio">
                            <label for="q8-4" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>AOTA</span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="feedback mt-3 text-sm">
                        <div class="feedback-content p-3 rounded-md hidden"></div>
                    </div>
                </div>
            </div>
            
            <!-- Question 9 -->
            <div class="question-card bg-white rounded-lg shadow-md mb-6 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-gray-800">Question #9</h3>
                        <span class="text-sm font-medium text-gray-500 hidden feedback-status"></span>
                    </div>
                    <p class="mt-2 text-lg text-gray-700">English of "मत जाना उस कमरे में।"</p>
                    
                    <div class="mt-4 space-y-3">
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="true">
                            <input type="radio" name="q9" id="q9-1" class="hidden option-radio">
                            <label for="q9-1" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>Do not go in that room.</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q9" id="q9-2" class="hidden option-radio">
                            <label for="q9-2" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>DO go in that room.</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q9" id="q9-3" class="hidden option-radio">
                            <label for="q9-3" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>Won't go in that room.</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q9" id="q9-4" class="hidden option-radio">
                            <label for="q9-4" class="flex items-center cursor-pointer">
                                <span class="radio-circle flex items-center justify-center w-5 h-5 rounded-full border-2 border-gray-300 mr-3 relative"></span>
                                <span>Both A & C</span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="feedback mt-3 text-sm">
                        <div class="feedback-content p-3 rounded-md hidden"></div>
                    </div>
                </div>
            </div>
            
            <!-- Question 10 -->
            <div class="question-card bg-white rounded-lg shadow-md mb-6 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-gray-800">Question #10</h3>
                        <span class="text-sm font-medium text-gray-500 hidden feedback-status"></span>
                    </div>
                    <p class="mt-2 text-lg text-gray-700">Which one is little rude?</p>
                    
                    <div class="mt-4 space-y-3">
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q10" id="q10-1" class="hidden">
                            <label for="q10-1" class="flex items-center cursor-pointer">
                                <span class="flex items-center justify-center w-6 h-6 rounded-full border border-gray-300 mr-3"></span>
                                <span>Do drink juice.</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q10" id="q10-2" class="hidden">
                            <label for="q10-2" class="flex items-center cursor-pointer">
                                <span class="flex items-center justify-center w-6 h-6 rounded-full border border-gray-300 mr-3"></span>
                                <span>Do write a story.</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="true">
                            <input type="radio" name="q10" id="q10-3" class="hidden">
                            <label for="q10-3" class="flex items-center cursor-pointer">
                                <span class="flex items-center justify-center w-6 h-6 rounded-full border border-gray-300 mr-3"></span>
                                <span>Won't eat non-veg.</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer" data-correct="false">
                            <input type="radio" name="q10" id="q10-4" class="hidden">
                            <label for="q10-4" class="flex items-center cursor-pointer">
                                <span class="flex items-center justify-center w-6 h-6 rounded-full border border-gray-300 mr-3"></span>
                                <span>Do read a book.</span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="feedback mt-3 text-sm">
                        <div class="feedback-content p-3 rounded-md hidden"></div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-8">
                <button type="button" id="showResults" class="px-6 py-3 bg-indigo-600 text-white font-medium rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Show Results
                </button>
                 <button type="button" id="showResults" class="px-6 py-3 bg-indigo-600 text-white font-medium rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                   <a href="lesson2.php">Next-></a> 
                 </button>
            </div>
        </form>
        
        <div id="resultsSummary" class="hidden mt-8 bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Quiz Results</h3>
            <div class="flex items-center justify-between mb-2">
                <span class="text-gray-700">Total Questions:</span>
                <span class="font-medium" id="totalQuestions">10</span>
            </div>
            <div class="flex items-center justify-between mb-2">
                <span class="text-gray-700">Correct Answers:</span>
                <span class="font-medium text-green-600" id="correctAnswers">0</span>
            </div>
            <div class="flex items-center justify-between mb-4">
                <span class="text-gray-700">Score:</span>
                <span class="font-medium text-indigo-600" id="scorePercentage">0%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2.5">
                <div class="bg-indigo-600 h-2.5 rounded-full" id="scoreBar" style="width: 0%"></div>
            </div>
        </div>
    </div>
             </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const options = document.querySelectorAll('.option');
            const progressBar = document.getElementById('progress-bar');
            const progressText = document.getElementById('progress-text');
            const showResultsBtn = document.getElementById('showResults');
            const resultsSummary = document.getElementById('resultsSummary');
            let answeredQuestions = 0;
            let correctAnswers = 0;
            
            // Add click event to all options
            options.forEach(option => {
                option.addEventListener('click', function() {
                    const questionCard = this.closest('.question-card');
                    const feedback = questionCard.querySelector('.feedback-content');
                    const feedbackStatus = questionCard.querySelector('.feedback-status');
                    const isCorrect = this.getAttribute('data-correct') === 'true';
                    
                    // Remove selected class from all options in this question
                    const allOptions = questionCard.querySelectorAll('.option');
                    allOptions.forEach(opt => {
                        opt.classList.remove('selected', 'correct', 'incorrect');
                    });
                    
                    // Add appropriate classes to selected option
                    this.classList.add('selected');
                    if (isCorrect) {
                        this.classList.add('correct');
                        questionCard.classList.add('correct');
                        questionCard.classList.remove('incorrect');
                        feedbackStatus.textContent = 'Correct!';
                        feedbackStatus.classList.remove('text-red-500');
                        feedbackStatus.classList.add('text-green-500');
                    } else {
                        this.classList.add('incorrect');
                        questionCard.classList.add('incorrect');
                        questionCard.classList.remove('correct');
                        feedbackStatus.textContent = 'Incorrect';
                        feedbackStatus.classList.remove('text-green-500');
                        feedbackStatus.classList.add('text-red-500');
                        
                        // Highlight correct answer
                        const correctOption = questionCard.querySelector('.option[data-correct="true"]');
                        correctOption.classList.add('correct');
                    }
                    
                    // Show feedback
                    feedback.innerHTML = isCorrect ? 
                        '<i class="fas fa-check-circle text-green-500 mr-2"></i> Well done! Your answer is correct.' :
                        '<i class="fas fa-times-circle text-red-500 mr-2"></i> The correct answer is: ' + questionCard.querySelector('.option[data-correct="true"]').textContent.trim();
                    
                    feedback.classList.remove('hidden');
                    feedbackStatus.classList.remove('hidden');
                    
                    // Update progress
                    if (!questionCard.hasAttribute('data-answered')) {
                        questionCard.setAttribute('data-answered', 'true');
                        answeredQuestions++;
                        if (isCorrect) correctAnswers++;
                        
                        progressBar.style.width = `${(answeredQuestions / 10) * 100}%`;
                        progressText.textContent = `${answeredQuestions}/10`;
                    }
                });
            });
            
            // Show results button
            showResultsBtn.addEventListener('click', function() {
                document.getElementById('totalQuestions').textContent = '10';
                document.getElementById('correctAnswers').textContent = correctAnswers;
                const percentage = Math.round((correctAnswers / 10) * 100);
                document.getElementById('scorePercentage').textContent = `${percentage}%`;
                document.getElementById('scoreBar').style.width = `${percentage}%`;
                
                resultsSummary.classList.remove('hidden');
                this.classList.add('hidden');
                
                // Scroll to results
                resultsSummary.scrollIntoView({ behavior: 'smooth' });
            });
        });
    </script>
</body>
</html>