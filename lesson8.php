<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continuous Tense</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            keyframes: {
              'fade-in': {
                '0%': { opacity: '0' },
                '100%': { opacity: '1' },
              },
              'bounce': {
                '0%, 100%': { transform: 'translateY(0)' },
                '50%': { transform: 'translateY(-10px)' },
              },
            },
            animation: {
              'fade-in': 'fade-in 1s ease-in',
              'bounce': 'bounce 1.2s infinite',
            },
          }
        }
      }
    </script>
</head>
<body class="bg-gradient-to-br from-blue-100 via-pink-50 to-purple-100 min-h-screen">
 <?php include('Sidebar.php'); ?>
    <div id="main-content" class="lg:ml-72 transition-all duration-300 p-4 lg:p-8">
<div class="max-w-4xl mx-auto mt-8 mb-8 p-4 sm:p-8 bg-white/80 rounded-2xl shadow-2xl animate-fade-in">
    <h1 class="text-3xl sm:text-5xl font-extrabold text-center text-yellow-400 mb-6 drop-shadow-lg animate-bounce">Continuous Tense</h1>
    <ul>
        <h4 class="text-xl sm:text-2xl font-bold text-gray-700 mb-4 animate-fade-in">Present, Past, and Future Continuous Tense</h4>
        <table class="min-w-[350px] w-full text-center border-collapse rounded-xl shadow-md mb-6 text-xs sm:text-base bg-gradient-to-br from-blue-50 via-pink-50 to-purple-50 overflow-hidden">
            <tr class="bg-blue-200">
                <th>Present Continuous Tense</th>
                <th>Past Continuous Tense</th>
                <th>Future Continuous Tense</th>
            </tr>
            <tr>
                <td>
                    <span class="font-semibold text-blue-700">He, She, It – Is + M.V. 1st Form + ing</span><br>
                    <span class="font-semibold text-blue-700">We, You, They – Are + M.V. 1st Form + ing</span><br>
                    <span class="font-semibold text-blue-700">I – Am + M.V. 1st Form + ing</span>
                </td>
                <td>
                    <span class="font-semibold text-purple-700">He, She, It, I – Was + M.V. 1st Form + ing</span><br>
                    <span class="font-semibold text-purple-700">We, You, They – Were + M.V. 1st Form + ing</span>
                </td>
                <td><span class="font-semibold text-pink-700">He, She, It, I, We, You, They – Will be + M.V. 1st Form + ing</span></td>
            </tr>
            <tr>
                <td class="text-blue-600">रहा हैं, रही हैं, रहे हैं, रहा हूँ</td>
                <td class="text-purple-600">रहा था, रही थी, रहे थे</td>
                <td class="text-pink-600">रहा होगा, रही होगी, रहे होंगे</td>
            </tr>
            <tr class="bg-pink-100 text-lg font-bold">
                <td colspan="3">
                    <span class="text-red-500">Examples</span>
                </td>
            </tr>
            <tr>
                <td>
                    <span class="text-blue-700 font-semibold">He is going to Chittor.</span><br>
                    वह चित्तौड़ जा रहा है<br>
                    <span class="text-blue-700 font-semibold">She is not combing hair.</span><br>
                    वह बाल कंघी नहीं कर रही है<br>
                    <span class="text-blue-700 font-semibold">Are they gargling?</span><br>
                    क्या वे गरारे कर रहे हैं?<br>
                    <span class="text-blue-700 font-semibold">Am I not grooming?</span><br>
                    क्या मैं ग्रूमिंग नहीं कर रहा हूं?
                </td>
                <td>
                    <span class="text-purple-700 font-semibold">She was getting late.</span><br>
                    उसे देर हो रही थी।<br>
                    <span class="text-purple-700 font-semibold">I was not applying balm.</span><br>
                    मैं बाम नहीं लगा रहा था।<br>
                    <span class="text-purple-700 font-semibold">Were you mooching with them?</span><br>
                    क्या आप उनके साथ घूम रहे थे?<br>
                    <span class="text-purple-700 font-semibold">Were we not celebrating the occasion?</span><br>
                    क्या हम उत्सव नहीं मना रहे थे?
                </td>
                <td>
                    <span class="text-pink-700 font-semibold">I will be weeping.</span><br>
                    मैं रो रही होऊँगी<br>
                    <span class="text-pink-700 font-semibold">She will not be learning.</span><br>
                    वह सीख नहीं रही होगी<br>
                    <span class="text-pink-700 font-semibold">They will not be hurting.</span><br>
                    वे चोट नहीं दे रहे होंगे<br>
                    <span class="text-pink-700 font-semibold">Will he not be kneading?</span><br>
                    क्या वह आटा नहीं गूँद रहा होगा?
                </td>
            </tr>
        </table>

        <table class="min-w-[350px] w-full text-center border-collapse rounded-xl shadow-md mb-6 text-xs sm:text-base bg-gradient-to-br from-blue-50 via-pink-50 to-purple-50 overflow-hidden">
            <tr class="bg-blue-200">
                <th colspan="4" class="text-lg">Continuous Tense Structure</th>
            </tr>
            <tr>
                <td>He, She, It</td>
                <td>Is</td>
                <td class="vertical-text font-bold" rowspan="6" style="writing-mode: vertical-lr; transform: rotate(180deg);">M.V. + ing form</td>
                <td rowspan="3">रहा हैं, रही हैं, रहे हैं ,रहा हूँ ,रही हूँ</td>
            </tr>
            <tr>
                <td>We, You, They</td>
                <td>Are</td>
            </tr>
            <tr>
                <td>I</td>
                <td>Am</td>
            </tr>
            <tr>
                <td>He, She, It, I</td>
                <td>Was</td>
                <td rowspan="2">रहा था, रही थी, रहे थे</td>
            </tr>
            <tr>
                <td>We, You, They</td>
                <td>Were</td>
            </tr>
            <tr>
                <td>He, She, It, I, We, You, They</td>
                <td>Will be/Shall be</td>
                <td>रहा होगा, रही होगी, रहे होंगे, रहा होऊँगा, रही होउँगी</td>
            </tr>
            <tr>
                <td>He, She, It</td>
                <td>Has been</td>
                <td class="vertical-text font-bold" rowspan="4" style="writing-mode: vertical-lr; transform: rotate(180deg);">M.V. + ing form</td>
                <td rowspan="2">रहा हैं, रही हैं, रहे हैं ,रहा हूँ ,रही हूँ</td>
            </tr>
            <tr>
                <td>I, We, You, They</td>
                <td>Have been</td>
            </tr>
            <tr>
                <td>He, She, It, I, We, You, They</td>
                <td>Had been</td>
                <td>रहा था, रही थी, रहे थे</td>
            </tr>
            <tr>
                <td>He, She, It, I, We, You, They</td>
                <td>Will have been/Shall have been</td>
                <td>रहा होगा, रही होगी, रहे होंगे, रहा होऊँगा, रही होउँगी</td>
            </tr>
        </table>

        <li class="text-base text-gray-700 font-medium">Note – "Has been", "Have been", "Had been", and "Will have been" are used when sentences indicate duration.</li>
    </ul><br>
</div>

<footer class="mt-8 text-center text-xs text-gray-400">
    <p>&copy; 2025 Learn English | All rights reserved</p>
</footer>
    </div>
</body>
</html>
