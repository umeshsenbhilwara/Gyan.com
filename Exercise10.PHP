<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghyaan.com - English Grammar Quiz (Passive Voice)</title>
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
        
        .question-card.correct { border-left: 4px solid #10b981; }
        .question-card.incorrect { border-left: 4px solid #ef4444; }
        
        .option { transition: all 0.2s ease; }
        .option:hover { transform: translateX(5px); }
        .option.selected { background-color: #e0e7ff; }
        .option.correct { background-color: #d1fae5; border-left: 3px solid #10b981; }
        .option.incorrect { background-color: #fee2e2; border-left: 3px solid #ef4444; }
        
        .radio-circle {
            flex: 0 0 auto;
            width: 1.5rem;
            height: 1.5rem;
            border-radius: 50%;
            border: 2px solid #d1d5db;
            margin-right: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .option input:checked + label .radio-circle::after {
            content: '';
            width: 0.75rem;
            height: 0.75rem;
            background-color: #4f46e5;
            border-radius: 50%;
        }
        
        .feedback {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        
        .feedback.show { max-height: 500px; }
        
        @media (max-width: 640px) {
            .option-container {
                flex-direction: column;
                gap: 0.5rem;
            }
        }
    </style>
</head>
<body class="bg-gray-50">
<?php include('Sidebar.php'); ?>
<div id="main-content" class="lg:ml-72 transition-all duration-300 p-4 lg:p-8">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-indigo-700 mb-2">English Grammar Quiz</h1>
            <p class="text-gray-600">Test your grammar knowledge with these fill-in-the-blank questions</p>
            <div class="mt-4 flex justify-center items-center">
                <div class="w-full bg-gray-200 rounded-full h-2.5 max-w-md">
                    <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 0%" id="progress-bar"></div>
                </div>
                <span class="ml-4 text-sm font-medium text-gray-700" id="progress-text">0/10</span>
            </div>
        </div>
        
        <form id="quizForm" action="practicework.php?typeId=3&topicId=13" method="POST">
            <!-- Question 1 -->
            <div class="question-card bg-white rounded-lg shadow-md mb-6 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-gray-800">Question #1</h3>
                        <span class="text-sm font-medium text-gray-500 hidden feedback-status"></span>
                    </div>
                    <p class="mt-2 text-lg text-gray-700">Your computer has been ..............................</p>
                    <div class="mt-4 option-container flex flex-wrap gap-3">
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="147" id="q1-1" value="1" class="hidden" aria-checked="false">
                            <label for="q1-1" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>repair</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="true">
                            <input type="radio" name="147" id="q1-2" value="2" class="hidden" aria-checked="false">
                            <label for="q1-2" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>repaired</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="147" id="q1-3" value="3" class="hidden" aria-checked="false">
                            <label for="q1-3" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>repairing</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="147" id="q1-4" value="4" class="hidden" aria-checked="false">
                            <label for="q1-4" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>get repaired</span>
                            </label>
                        </div>
                    </div>
                    <div class="feedback mt-3 text-sm">
                        <div class="feedback-content p-3 rounded-md hidden"></div>
                    </div>
                    <input type="hidden" name="queId[]" value="147" id="queId">
                </div>
            </div>
            
            <!-- Question 2 -->
            <div class="question-card bg-white rounded-lg shadow-md mb-6 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-gray-800">Question #2</h3>
                        <span class="text-sm font-medium text-gray-500 hidden feedback-status"></span>
                    </div>
                    <p class="mt-2 text-lg text-gray-700">Winners are ..............................</p>
                    <div class="mt-4 option-container flex flex-wrap gap-3">
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="148" id="q2-1" value="1" class="hidden" aria-checked="false">
                            <label for="q2-1" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>confer</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="true">
                            <input type="radio" name="148" id="q2-2" value="2" class="hidden" aria-checked="false">
                            <label for="q2-2" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>being conferred</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="148" id="q2-3" value="3" class="hidden" aria-checked="false">
                            <label for="q2-3" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>being confer</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="148" id="q2-4" value="4" class="hidden" aria-checked="false">
                            <label for="q2-4" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>getting confer</span>
                            </label>
                        </div>
                    </div>
                    <div class="feedback mt-3 text-sm">
                        <div class="feedback-content p-3 rounded-md hidden"></div>
                    </div>
                    <input type="hidden" name="queId[]" value="148" id="queId">
                </div>
            </div>
            
            <!-- Question 3 -->
            <div class="question-card bg-white rounded-lg shadow-md mb-6 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-gray-800">Question #3</h3>
                        <span class="text-sm font-medium text-gray-500 hidden feedback-status"></span>
                    </div>
                    <p class="mt-2 text-lg text-gray-700">Mobile is .............................. too much.</p>
                    <div class="mt-4 option-container flex flex-wrap gap-3">
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="149" id="q3-1" value="1" class="hidden" aria-checked="false">
                            <label for="q3-1" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>hang</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="149" id="q3-2" value="2" class="hidden" aria-checked="false">
                            <label for="q3-2" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>being hang</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="149" id="q3-3" value="3" class="hidden" aria-checked="false">
                            <label for="q3-3" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>getting hanged</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="true">
                            <input type="radio" name="149" id="q3-4" value="4" class="hidden" aria-checked="false">
                            <label for="q3-4" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>Hanged</span>
                            </label>
                        </div>
                    </div>
                    <div class="feedback mt-3 text-sm">
                        <div class="feedback-content p-3 rounded-md hidden"></div>
                    </div>
                    <input type="hidden" name="queId[]" value="149" id="queId">
                </div>
            </div>
            
            <!-- Question 4 -->
            <div class="question-card bg-white rounded-lg shadow-md mb-6 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-gray-800">Question #4</h3>
                        <span class="text-sm font-medium text-gray-500 hidden feedback-status"></span>
                    </div>
                    <p class="mt-2 text-lg text-gray-700">I was .............................. by principal.</p>
                    <div class="mt-4 option-container flex flex-wrap gap-3">
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="true">
                            <input type="radio" name="150" id="q4-1" value="1" class="hidden" aria-checked="false">
                            <label for="q4-1" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>scolded</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="150" id="q4-2" value="2" class="hidden" aria-checked="false">
                            <label for="q4-2" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>being scold</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="150" id="q4-3" value="3" class="hidden" aria-checked="false">
                            <label for="q4-3" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>scold</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="150" id="q4-4" value="4" class="hidden" aria-checked="false">
                            <label for="q4-4" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>scolding</span>
                            </label>
                        </div>
                    </div>
                    <div class="feedback mt-3 text-sm">
                        <div class="feedback-content p-3 rounded-md hidden"></div>
                    </div>
                    <input type="hidden" name="queId[]" value="150" id="queId">
                </div>
            </div>
            
            <!-- Question 5 -->
            <div class="question-card bg-white rounded-lg shadow-md mb-6 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-gray-800">Question #5</h3>
                        <span class="text-sm font-medium text-gray-500 hidden feedback-status"></span>
                    </div>
                    <p class="mt-2 text-lg text-gray-700">My building .............................. inaugurated by D.M.</p>
                    <div class="mt-4 option-container flex flex-wrap gap-3">
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="151" id="q5-1" value="1" class="hidden" aria-checked="false">
                            <label for="q5-1" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>had</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="151" id="q5-2" value="2" class="hidden" aria-checked="false">
                            <label for="q5-2" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>will</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="151" id="q5-3" value="3" class="hidden" aria-checked="false">
                            <label for="q5-3" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>have been</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="true">
                            <input type="radio" name="151" id="q5-4" value="4" class="hidden" aria-checked="false">
                            <label for="q5-4" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>had been</span>
                            </label>
                        </div>
                    </div>
                    <div class="feedback mt-3 text-sm">
                        <div class="feedback-content p-3 rounded-md hidden"></div>
                    </div>
                    <input type="hidden" name="queId[]" value="151" id="queId">
                </div>
            </div>
            
            <!-- Question 6 -->
            <div class="question-card bg-white rounded-lg shadow-md mb-6 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-gray-800">Question #6</h3>
                        <span class="text-sm font-medium text-gray-500 hidden feedback-status"></span>
                    </div>
                    <p class="mt-2 text-lg text-gray-700">You .............................. tomorrow by your parents.</p>
                    <div class="mt-4 option-container flex flex-wrap gap-3">
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="true">
                            <input type="radio" name="152" id="q6-1" value="1" class="hidden" aria-checked="false">
                            <label for="q6-1" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>will be punished</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="152" id="q6-2" value="2" class="hidden" aria-checked="false">
                            <label for="q6-2" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>will be punish</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="152" id="q6-3" value="3" class="hidden" aria-checked="false">
                            <label for="q6-3" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>will been punished</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="152" id="q6-4" value="4" class="hidden" aria-checked="false">
                            <label for="q6-4" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>will be punishing</span>
                            </label>
                        </div>
                    </div>
                    <div class="feedback mt-3 text-sm">
                        <div class="feedback-content p-3 rounded-md hidden"></div>
                    </div>
                    <input type="hidden" name="queId[]" value="152" id="queId">
                </div>
            </div>
            
            <!-- Question 7 -->
            <div class="question-card bg-white rounded-lg shadow-md mb-6 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-gray-800">Question #7</h3>
                        <span class="text-sm font-medium text-gray-500 hidden feedback-status"></span>
                    </div>
                    <p class="mt-2 text-lg text-gray-700">The room .............................. by me daily.</p>
                    <div class="mt-4 option-container flex flex-wrap gap-3">
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="153" id="q7-1" value="1" class="hidden" aria-checked="false">
                            <label for="q7-1" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>is clean</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="true">
                            <input type="radio" name="153" id="q7-2" value="2" class="hidden" aria-checked="false">
                            <label for="q7-2" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>is cleaned</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="153" id="q7-3" value="3" class="hidden" aria-checked="false">
                            <label for="q7-3" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>cleans</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="153" id="q7-4" value="4" class="hidden" aria-checked="false">
                            <label for="q7-4" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>has cleaned</span>
                            </label>
                        </div>
                    </div>
                    <div class="feedback mt-3 text-sm">
                        <div class="feedback-content p-3 rounded-md hidden"></div>
                    </div>
                    <input type="hidden" name="queId[]" value="153" id="queId">
                </div>
            </div>
            
            <!-- Question 8 -->
            <div class="question-card bg-white rounded-lg shadow-md mb-6 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-gray-800">Question #8</h3>
                        <span class="text-sm font-medium text-gray-500 hidden feedback-status"></span>
                    </div>
                    <p class="mt-2 text-lg text-gray-700">India is ..............................</p>
                    <div class="mt-4 option-container flex flex-wrap gap-3">
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="154" id="q8-1" value="1" class="hidden" aria-checked="false">
                            <label for="q8-1" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>getting develop</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="154" id="q8-2" value="2" class="hidden" aria-checked="false">
                            <label for="q8-2" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>getting developing</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="true">
                            <input type="radio" name="154" id="q8-3" value="3" class="hidden" aria-checked="false">
                            <label for="q8-3" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>getting developed</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="154" id="q8-4" value="4" class="hidden" aria-checked="false">
                            <label for="q8-4" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>develop</span>
                            </label>
                        </div>
                    </div>
                    <div class="feedback mt-3 text-sm">
                        <div class="feedback-content p-3 rounded-md hidden"></div>
                    </div>
                    <input type="hidden" name="queId[]" value="154" id="queId">
                </div>
            </div>
            
            <!-- Question 9 -->
            <div class="question-card bg-white rounded-lg shadow-md mb-6 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-gray-800">Question #9</h3>
                        <span class="text-sm font-medium text-gray-500 hidden feedback-status"></span>
                    </div>
                    <p class="mt-2 text-lg text-gray-700">This topic .............................. in class.</p>
                    <div class="mt-4 option-container flex flex-wrap gap-3">
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="true">
                            <input type="radio" name="155" id="q9-1" value="1" class="hidden" aria-checked="false">
                            <label for="q9-1" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>has been taught</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="155" id="q9-2" value="2" class="hidden" aria-checked="false">
                            <label for="q9-2" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>has been teaching</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="155" id="q9-3" value="3" class="hidden" aria-checked="false">
                            <label for="q9-3" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>have teach</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="155" id="q9-4" value="4" class="hidden" aria-checked="false">
                            <label for="q9-4" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>has been teach</span>
                            </label>
                        </div>
                    </div>
                    <div class="feedback mt-3 text-sm">
                        <div class="feedback-content p-3 rounded-md hidden"></div>
                    </div>
                    <input type="hidden" name="queId[]" value="155" id="queId">
                </div>
            </div>
            
            <!-- Question 10 -->
            <div class="question-card bg-white rounded-lg shadow-md mb-6 overflow-hidden">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-semibold text-gray-800">Question #10</h3>
                        <span class="text-sm font-medium text-gray-500 hidden feedback-status"></span>
                    </div>
                    <p class="mt-2 text-lg text-gray-700">.............................. were being washed.</p>
                    <div class="mt-4 option-container flex flex-wrap gap-3">
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="true">
                            <input type="radio" name="156" id="q10-1" value="1" class="hidden" aria-checked="false">
                            <label for="q10-1" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>Clothes</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="156" id="q10-2" value="2" class="hidden" aria-checked="false">
                            <label for="q10-2" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>Fruit</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="156" id="q10-3" value="3" class="hidden" aria-checked="false">
                            <label for="q10-3" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>floor</span>
                            </label>
                        </div>
                        <div class="option p-3 rounded-md cursor-pointer flex-1 min-w-[150px]" data-correct="false">
                            <input type="radio" name="156" id="q10-4" value="4" class="hidden" aria-checked="false">
                            <label for="q10-4" class="flex items-center cursor-pointer">
                                <span class="radio-circle"></span>
                                <span>utensil</span>
                            </label>
                        </div>
                    </div>
                    <div class="feedback mt-3 text-sm">
                        <div class="feedback-content p-3 rounded-md hidden"></div>
                    </div>
                    <input type="hidden" name="queId[]" value="156" id="queId">
                </div>
            </div>
            
            <div class="text-center mt-8">
                <button type="button" id="showResults" class="px-6 py-3 bg-indigo-600 text-white font-medium rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Show Results
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
            const totalQuestions = document.querySelectorAll('.question-card').length;
            let answeredQuestions = 0;
            let correctAnswers = 0;

            options.forEach(option => {
                option.addEventListener('click', function() {
                    const questionCard = this.closest('.question-card');
                    const feedback = questionCard.querySelector('.feedback-content');
                    const feedbackStatus = questionCard.querySelector('.feedback-status');
                    const isCorrect = this.getAttribute('data-correct') === 'true';
                    
                    const allOptions = questionCard.querySelectorAll('.option');
                    allOptions.forEach(opt => {
                        opt.classList.remove('selected', 'correct', 'incorrect');
                        opt.querySelector('input').setAttribute('aria-checked', 'false');
                    });

                    this.classList.add('selected');
                    this.querySelector('input').setAttribute('aria-checked', 'true');
                    
                    if (isCorrect) {
                        this.classList.add('correct');
                        questionCard.classList.add('correct');
                        questionCard.classList.remove('incorrect');
                        feedbackStatus.textContent = 'Correct!';
                        feedbackStatus.classList.remove('text-red-500');
                        feedbackStatus.classList.add('text-green-500');
                        feedback.innerHTML = '<i class="fas fa-check-circle text-green-500 mr-2"></i> Well done! Your answer is correct.';
                    } else {
                        this.classList.add('incorrect');
                        questionCard.classList.add('incorrect');
                        questionCard.classList.remove('correct');
                        feedbackStatus.textContent = 'Incorrect';
                        feedbackStatus.classList.remove('text-green-500');
                        feedbackStatus.classList.add('text-red-500');
                        const correctOption = questionCard.querySelector('.option[data-correct="true"]');
                        correctOption.classList.add('correct');
                        feedback.innerHTML = '<i class="fas fa-times-circle text-red-500 mr-2"></i> The correct answer is: ' + 
                            correctOption.querySelector('label span:last-child').textContent.trim();
                    }
                    
                    feedback.classList.remove('hidden');
                    feedbackStatus.classList.remove('hidden');
                    questionCard.querySelector('.feedback').classList.add('show');

                    if (!questionCard.hasAttribute('data-answered')) {
                        questionCard.setAttribute('data-answered', 'true');
                        answeredQuestions++;
                        if (isCorrect) correctAnswers++;
                        
                        progressBar.style.width = `${(answeredQuestions / totalQuestions) * 100}%`;
                        progressText.textContent = `${answeredQuestions}/${totalQuestions}`;
                    }
                });
            });

            showResultsBtn.addEventListener('click', function() {
                document.getElementById('totalQuestions').textContent = totalQuestions;
                document.getElementById('correctAnswers').textContent = correctAnswers;
                const percentage = Math.round((correctAnswers / totalQuestions) * 100);
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