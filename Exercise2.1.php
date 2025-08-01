<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Grammar Quiz</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .option {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
        .option:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .correct {
            background-color: #d1fae5 !important;
            border-color: #10b981 !important;
            box-shadow: 0 0 10px rgba(16, 185, 129, 0.3);
        }
        .wrong {
            background-color: #fee2e2 !important;
            border-color: #ef4444 !important;
            box-shadow: 0 0 10px rgba(239, 68, 68, 0.3);
        }
        .option-color-1 { background-color: #e0f2fe; border-color: #38bdf8; }
        .option-color-2 { background-color: #fef3c7; border-color: #facc15; }
        .option-color-3 { background-color: #fce7f3; border-color: #ec4899; }
        .option-color-4 { background-color: #e0e7ff; border-color: #818cf8; }
    </style>
</head>
   <body>
      <?php include('Sidebar.php'); ?>
      <div id="main-content" class="lg:ml-72 transition-all duration-300 p-4 lg:p-8">
       
      <div class="max-w-4xl w-full bg-white rounded-3xl shadow-2xl p-8">
        <h1 class="text-4xl font-extrabold text-gray-800 mb-8 text-center bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-600">Interactive Grammar Quiz</h1>
        
        <!-- Question 1 -->
        <div class="mb-8 p-6 bg-gray-50 rounded-2xl border border-gray-200">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Question #1</h2>
            <p class="text-xl text-gray-700 mb-4">Parents used to .............................. children properly.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <label class="option p-4 border rounded-lg cursor-pointer option-color-1">
                    <input type="radio" name="q1" value="nourish" class="mr-3 accent-blue-500" onchange="checkAnswer('q1', 'nourished', this)">nourish
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-2">
                    <input type="radio" name="q1" value="nourishing" class="mr-3 accent-yellow-500" onchange="checkAnswer('q1', 'nourished', this)">nourishing
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-3">
                    <input type="radio" name="q1" value="nourished" class="mr-3 accent-pink-500" onchange="checkAnswer('q1', 'nourished', this)">nourished
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-4">
                    <input type="radio" name "“q1" value="nourishment" class="mr-3 accent-indigo-500" onchange="checkAnswer('q1', 'nourished', this)">nourishment
                </label>
            </div>
            <p class="mt-3 text-base font-semibold feedback-q1 hidden"></p>
        </div>

        <!-- Question 2 -->
        <div class="mb-8 p-6 bg-gray-50 rounded-2xl border border-gray-200">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Question #2</h2>
            <p class="text-xl text-gray-700 mb-4">Politicians .............................. befool people.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <label class="option p-4 border rounded-lg cursor-pointer option-color-1">
                    <input type="radio" name="q2" value="use to" class="mr-3 accent-blue-500" onchange="checkAnswer('q2', 'used to', this)">use to
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-2">
                    <input type="radio" name="q2" value="uses" class="mr-3 accent-yellow-500" onchange="checkAnswer('q2', 'used to', this)">uses
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-3">
                    <input type="radio" name="q2" value="used to" class="mr-3 accent-pink-500" onchange="checkAnswer('q2', 'used to', this)">used to
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-4">
                    <input type="radio" name="q2" value="would to" class="mr-3 accent-indigo-500" onchange="checkAnswer('q2', 'used to', this)">would to
                </label>
            </div>
            <p class="mt-3 text-base font-semibold feedback-q2 hidden"></p>
        </div>

        <!-- Question 3 -->
        <div class="mb-8 p-6 bg-gray-50 rounded-2xl border border-gray-200">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Question #3</h2>
            <p class="text-xl text-gray-700 mb-4">I used to .............................. School and I .............................. play with my friends.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <label class="option p-4 border rounded-lg cursor-pointer option-color-1">
                    <input type="radio" name="q3" value="go, used" class="mr-3 accent-blue-500" onchange="checkAnswer('q3', 'go, would', this)">go, used
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-2">
                    <input type="radio" name="q3" value="went, used to" class="mr-3 accent-yellow-500" onchange="checkAnswer('q3', 'go, would', this)">went, used to
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-3">
                    <input type="radio" name="q3" value="go, would" class="mr-3 accent-pink-500" onchange="checkAnswer('q3', 'go, would', this)">go, would
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-4">
                    <input type="radio" name="q3" value="going, used to" class="mr-3 accent-indigo-500" onchange="checkAnswer('q3', 'go, would', this)">going, used to
                </label>
            </div>
            <p class="mt-3 text-base font-semibold feedback-q3 hidden"></p>
        </div>

        <!-- Question 4 -->
        <div class="mb-8 p-6 bg-gray-50 rounded-2xl border border-gray-200">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Question #4</h2>
            <p class="text-xl text-gray-700 mb-4">Abdul Kalam .............................. President of India.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <label class="option p-4 border rounded-lg cursor-pointer option-color-1">
                    <input type="radio" name="q4" value="would" class="mr-3 accent-blue-500" onchange="checkAnswer('q4', 'used to be', this)">would
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-2">
                    <input type="radio" name="q4" value="used to" class="mr-3 accent-yellow-500" onchange="checkAnswer('q4', 'used to be', this)">used to
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-3">
                    <input type="radio" name="q4" value="use to be" class="mr-3 accent-pink-500" onchange="checkAnswer('q4', 'used to be', this)">use to be
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-4">
                    <input type="radio" name="q4" value="used to be" class="mr-3 accent-indigo-500" onchange="checkAnswer('q4', 'used to be', this)">used to be
                </label>
            </div>
            <p class="mt-3 text-base font-semibold feedback-q4 hidden"></p>
        </div>

        <!-- Question 5 -->
        <div class="mb-8 p-6 bg-gray-50 rounded-2xl border border-gray-200">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Question #5</h2>
            <p class="text-xl text-gray-700 mb-4">He didn't .............................. come on time.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <label class="option p-4 border rounded-lg cursor-pointer option-color-1">
                    <input type="radio" name="q5" value="use to" class="mr-3 accent-blue-500" onchange="checkAnswer('q5', 'use to', this)">use to
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-2">
                    <input type="radio" name="q5" value="used to" class="mr-3 accent-yellow-500" onchange="checkAnswer('q5', 'use to', this)">used to
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-3">
                    <input type="radio" name="q5" value="would" class="mr-3 accent-pink-500" onchange="checkAnswer('q5', 'use to', this)">would
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-4">
                    <input type="radio" name="q5" value="would to" class="mr-3 accent-indigo-500" onchange="checkAnswer('q5', 'use to', this)">would to
                </label>
            </div>
            <p class="mt-3 text-base font-semibold feedback-q5 hidden"></p>
        </div>

        <!-- Question 6 -->
        <div class="mb-8 p-6 bg-gray-50 rounded-2xl border border-gray-200">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Question #6</h2>
            <p class="text-xl text-gray-700 mb-4">She used to come here but she .............................. work cordially.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <label class="option p-4 border rounded-lg cursor-pointer option-color-1">
                    <input type="radio" name="q6" value="would to" class="mr-3 accent-blue-500" onchange="checkAnswer('q6', 'would not', this)">would to
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-2">
                    <input type="radio" name="q6" value="would not" class="mr-3 accent-yellow-500" onchange="checkAnswer('q6', 'would not', this)">would not
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-3">
                    <input type="radio" name="q6" value="didn't used to" class="mr-3 accent-pink-500" onchange="checkAnswer('q6', 'would not', this)">didn't used to
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-4">
                    <input type="radio" name="q6" value="used to be" class="mr-3 accent-indigo-500" onchange="checkAnswer('q6', 'would not', this)">used to be
                </label>
            </div>
            <p class="mt-3 text-base font-semibold feedback-q6 hidden"></p>
        </div>

        <!-- Question 7 -->
        <div class="mb-8 p-6 bg-gray-50 rounded-2xl border border-gray-200">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Question #7</h2>
            <p class="text-xl text-gray-700 mb-4">Pupils .............................. disrespect their guru in golden age.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <label class="option p-4 border rounded-lg cursor-pointer option-color-1">
                    <input type="radio" name="q7" value="didn't use to" class="mr-3 accent-blue-500" onchange="checkAnswer('q7', "didn't use to", this)">didn't use to
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-2">
                    <input type="radio" name="q7" value="didn't use to be" class="mr-3 accent-yellow-500" onchange="checkAnswer('q7', "didn't use to", this)">didn't use to be
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-3">
                    <input type="radio" name="q7" value="would be" class="mr-3 accent-pink-500" onchange="checkAnswer('q7', "didn't use to", this)">would be
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-4">
                    <input type="radio" name="q7" value="would" class="mr-3 accent-indigo-500" onchange="checkAnswer('q7', "didn't use to", this)">would
                </label>
            </div>
            <p class="mt-3 text-base font-semibold feedback-q7 hidden"></p>
        </div>

        <!-- Question 8 -->
        <div class="mb-8 p-6 bg-gray-50 rounded-2xl border border-gray-200">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Question #8</h2>
            <p class="text-xl text-gray-700 mb-4">I didn't use to be ..............................</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <label class="option p-4 border rounded-lg cursor-pointer option-color-1">
                    <input type="radio" name="q8" value="happy" class="mr-3 accent-blue-500" onchange="checkAnswer('q8', 'happy', this)">happy
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-2">
                    <input type="radio" name="q8" value="happily" class="mr-3 accent-yellow-500" onchange="checkAnswer('q8', 'happy', this)">happily
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-3">
                    <input type="radio" name="q8" value="help" class="mr-3 accent-pink-500" onchange="checkAnswer('q8', 'happy', this)">help
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-4">
                    <input type="radio" name="q8" value="NOTA" class="mr-3 accent-indigo-500" onchange="checkAnswer('q8', 'happy', this)">NOTA
                </label>
            </div>
            <p class="mt-3 text-base font-semibold feedback-q8 hidden"></p>
        </div>

        <!-- Question 9 -->
        <div class="mb-8 p-6 bg-gray-50 rounded-2xl border border-gray-200">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Question #9</h2>
            <p class="text-xl text-gray-700 mb-4">My parents used to be poor but they .............................. dishonest.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <label class="option p-4 border rounded-lg cursor-pointer option-color-1">
                    <input type="radio" name="q9" value="didn't used to" class="mr-3 accent-blue-500" onchange="checkAnswer('q9', 'would not', this)">didn't used to
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-2">
                    <input type="radio" name="q9" value="would not" class="mr-3 accent-yellow-500" onchange="checkAnswer('q9', 'would not', this)">would not
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-3">
                    <input type="radio" name="q9" value="use to be" class="mr-3 accent-pink-500" onchange="checkAnswer('q9', 'would not', this)">use to be
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-4">
                    <input type="radio" name="q9" value="wouldn't be" class="mr-3 accent-indigo-500" onchange="checkAnswer('q9', 'would not', this)">wouldn't be
                </label>
            </div>
            <p class="mt-3 text-base font-semibold feedback-q9 hidden"></p>
        </div>

        <!-- Question 10 -->
        <div class="mb-8 p-6 bg-gray-50 rounded-2xl border border-gray-200">
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Question #10</h2>
            <p class="text-xl text-gray-700 mb-4">He .............................. unsuccessful because he .............................. work hard.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <label class="option p-4 border rounded-lg cursor-pointer option-color-1">
                    <input type="radio" name="q10" value="used to, not used to" class="mr-3 accent-blue-500" onchange="checkAnswer('q10', 'used to be, wouldn't', this)">used to, not used to
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-2">
                    <input type="radio" name="q10" value="used to be, wouldn't" class="mr-3 accent-yellow-500" onchange="checkAnswer('q10', 'used to be, wouldn't', this)">used to be, wouldn't
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-3">
                    <input type="radio" name="q10" value="didn't used to, use to be" class="mr-3 accent-pink-500" onchange="checkAnswer('q10', 'used to be, wouldn't', this)">didn't used to, use to be
                </label>
                <label class="option p-4 border rounded-lg cursor-pointer option-color-4">
                    <input type="radio" name="q10" value="would, would be" class="mr-3 accent-indigo-500" onchange="checkAnswer('q10', 'used to be, wouldn't', this)">would, would be
                </label>
            </div>
            <p class="mt-3 text-base font-semibold feedback-q10 hidden"></p>
        </div>
        <div class="text-center mt-8">
                 <button type="button" id="showResults" class="px-6 py-3 bg-indigo-600 text-white font-medium rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                   <a href="lesson3.php">Next-></a> 
                 </button>
                 </div>
    </div>
      </div>           
    <script>
        function checkAnswer(questionId, correctAnswer, element) {
            const feedback = document.querySelector(`.feedback-${questionId}`);
            const options = document.querySelectorAll(`input[name="${questionId}"]`);
            options.forEach(opt => {
                const parent = opt.parentElement;
                parent.classList.remove('correct', 'wrong');
            });

            if (element.value === correctAnswer) {
                element.parentElement.classList.add('correct');
                feedback.textContent = 'Correct!';
                feedback.classList.add('text-green-600');
            } else {
                element.parentElement.classList.add('wrong');
                feedback.textContent = 'Wrong!';
                feedback.classList.add('text-red-600');
            }
            feedback.classList.remove('hidden');
        }
    </script>
</body>
</html>