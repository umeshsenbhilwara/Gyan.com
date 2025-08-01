<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passive Voice Guide - English/Hindi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#10B981',
                        accent: '#EF4444',
                        dark: '#1F2937',
                        light: '#F9FAFB'
                    }
                }
            }
        }
    </script>
    <style>
        .hindi {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

<?php include('Sidebar.php'); ?>
    <div id="main-content" class="lg:ml-72 transition-all duration-300 p-4 lg:p-8">
    
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <!-- Header -->
        <header class="mb-12 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-accent mb-2">Complete Guide to Passive Voice</h1>
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4 hindi">पैसिव वॉइस की पूरी गाइड</h2>
            <div class="w-24 h-1.5 bg-primary rounded-full mx-auto"></div>
        </header>

        <!-- Main Content -->
        <div class="bg-white rounded-xl shadow-lg p-6 md:p-8 mb-12">
            <!-- Introduction Section -->
            <section class="mb-12">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl md:text-3xl font-semibold text-dark">Understanding Active and Passive Voice</h2>
                    <h2 class="text-xl md:text-2xl font-semibold text-dark hindi">एक्टिव और पैसिव वॉइस को समझना</h2>
                </div>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Active Voice Card -->
                    <div class="bg-blue-50 p-6 rounded-lg border-l-4 border-blue-500">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-medium text-blue-700 flex items-center">
                                <i class="fas fa-bullhorn mr-2"></i> Active Voice
                            </h3>
                            <h3 class="text-lg font-medium text-blue-700 hindi">एक्टिव वॉइस</h3>
                        </div>
                        <p class="text-gray-700 mb-2">Focuses on the performer of the action (the subject).</p>
                        <p class="text-gray-700 mb-4 hindi">क्रिया करने वाले (कर्ता) पर ध्यान केंद्रित करता है।</p>
                        <div class="bg-white p-4 rounded border border-gray-200">
                            <p class="font-medium">Structure: <span class="hindi font-normal">संरचना:</span></p>
                            <p class="text-gray-700">Subject + Verb + Object</p>
                            <p class="text-gray-700 hindi">कर्ता + क्रिया + कर्म</p>
                        </div>
                    </div>
                    
                    <!-- Passive Voice Card -->
                    <div class="bg-green-50 p-6 rounded-lg border-l-4 border-green-500">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-xl font-medium text-green-700 flex items-center">
                                <i class="fas fa-project-diagram mr-2"></i> Passive Voice
                            </h3>
                            <h3 class="text-lg font-medium text-green-700 hindi">पैसिव वॉइस</h3>
                        </div>
                        <p class="text-gray-700 mb-2">Focuses on the action or the receiver of the action.</p>
                        <p class="text-gray-700 mb-4 hindi">क्रिया या क्रिया के प्राप्तकर्ता पर ध्यान केंद्रित करता है।</p>
                        <div class="bg-white p-4 rounded border border-gray-200">
                            <p class="font-medium">Structure: <span class="hindi font-normal">संरचना:</span></p>
                            <p class="text-gray-700">Object + Be + Past Participle + (by Subject)</p>
                            <p class="text-gray-700 hindi">कर्म + Be + क्रिया का तीसरा रूप + (कर्ता द्वारा)</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Examples Section -->
            <section class="mb-12">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl md:text-3xl font-semibold text-dark">Examples Comparison</h2>
                    <h2 class="text-xl md:text-2xl font-semibold text-dark hindi">उदाहरण तुलना</h2>
                </div>
                
                <!-- Active Voice Examples -->
                <div class="mb-10">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-medium text-blue-700">Active Voice Examples:</h3>
                        <h3 class="text-lg font-medium text-blue-700 hindi">एक्टिव वॉइस उदाहरण:</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse">
                            <thead>
                                <tr class="bg-blue-600 text-white">
                                    <th class="p-4 text-left w-1/2">English</th>
                                    <th class="p-4 text-left w-1/2 hindi">हिंदी</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-200 hover:bg-gray-50">
                                    <td class="p-4"><span class="text-accent font-medium">Abhilash Sir</span> is teaching English.</td>
                                    <td class="p-4 hindi"><span class="text-accent font-medium">अभिलाष सर</span> अंग्रेजी पढ़ा रहे हैं।</td>
                                </tr>
                                <tr class="border-b border-gray-200 hover:bg-gray-50">
                                    <td class="p-4"><span class="text-accent font-medium">Diwyanshi Ma'am</span> has given the spoken task.</td>
                                    <td class="p-4 hindi"><span class="text-accent font-medium">दिव्यांशी मैम</span> ने Spoken टास्क दिया है।</td>
                                </tr>
                                <tr class="border-b border-gray-200 hover:bg-gray-50">
                                    <td class="p-4"><span class="text-accent font-medium">Sonali Ma'am</span> will make students good orators.</td>
                                    <td class="p-4 hindi"><span class="text-accent font-medium">सोनाली मैम</span> छात्रों को अच्छे वक्ता बनाएंगी।</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="p-4"><span class="text-accent font-medium">Pratik Sir</span> doesn't think negatively.</td>
                                    <td class="p-4 hindi"><span class="text-accent font-medium">प्रतीक सर</span> नकारात्मक नहीं सोचते।</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Passive Voice Examples -->
                <div>
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-medium text-green-700">Passive Voice Examples:</h3>
                        <h3 class="text-lg font-medium text-green-700 hindi">पैसिव वॉइस उदाहरण:</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse">
                            <thead>
                                <tr class="bg-green-600 text-white">
                                    <th class="p-4 text-left w-1/2">English</th>
                                    <th class="p-4 text-left w-1/2 hindi">हिंदी</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-200 hover:bg-gray-50">
                                    <td class="p-4">Your courier will be dispatched soon.</td>
                                    <td class="p-4 hindi">आपका कूरियर जल्द ही भेज दिया जाएगा।</td>
                                </tr>
                                <tr class="border-b border-gray-200 hover:bg-gray-50">
                                    <td class="p-4">Your mail has been sent.</td>
                                    <td class="p-4 hindi">आपका मेल भेज दिया गया है।</td>
                                </tr>
                                <tr class="border-b border-gray-200 hover:bg-gray-50">
                                    <td class="p-4">Diwali is celebrated in the whole of India.</td>
                                    <td class="p-4 hindi">दीवाली पूरे भारत में मनाई जाती है।</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="p-4">Kalpana was killed.</td>
                                    <td class="p-4 hindi">कल्पना को मार दिया गया।</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <!-- Golden Rules Section -->
            <section class="mb-12">
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-lg mb-8">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-star text-yellow-500 text-2xl mr-3"></i>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800">Golden Rules of Passive Voice</h3>
                            <h3 class="text-xl font-bold text-gray-800 hindi">पैसिव वॉइस के सुनहरे नियम</h3>
                        </div>
                    </div>
                    <p class="text-lg text-gray-700 mb-2">Passive Voice is formed by using the appropriate form of "to be" + the past participle (3rd form) of the main verb.</p>
                    <p class="text-lg text-gray-700 hindi">पैसिव वॉइस "to be" के उपयुक्त रूप + मुख्य क्रिया का past participle (तीसरा रूप) का उपयोग करके बनाया जाता है।</p>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th class="p-4 text-center w-1/2">Active Voice Structure</th>
                                <th class="p-4 text-center w-1/2">Passive Voice Conversion</th>
                            </tr>
                            <tr class="bg-primary/90 text-white">
                                <th class="p-2 text-center w-1/2 hindi">एक्टिव वॉइस संरचना</th>
                                <th class="p-2 text-center w-1/2 hindi">पैसिव वॉइस रूपांतरण</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="p-4 text-center font-medium">Only M.V. 1st form</td>
                                <td class="p-4 text-center">Is/are/am + M.V. 3rd form</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="p-4 text-center font-medium">______ + M.V. 1st form</td>
                                <td class="p-4 text-center">Be + M.V. 3rd form</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="p-4 text-center font-medium">Only M.V. 2nd form</td>
                                <td class="p-4 text-center">Was/were + M.V. 3rd form</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="p-4 text-center font-medium">______ + M.V. 3rd form</td>
                                <td class="p-4 text-center">Been + M.V. 3rd form</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="p-4 text-center font-medium">______ + M.V. + ing form</td>
                                <td class="p-4 text-center">Being + M.V. 3rd form</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Tenses Conversion Section -->
            <section class="mb-12">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl md:text-3xl font-semibold text-dark">Tense-wise Conversion</h2>
                    <h2 class="text-xl md:text-2xl font-semibold text-dark hindi">टेंस के अनुसार रूपांतरण</h2>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-purple-600 text-white">
                                <th class="p-4 text-left">Tense</th>
                                <th class="p-4 text-left hindi">काल</th>
                                <th class="p-4 text-left">Active Voice</th>
                                <th class="p-4 text-left">Passive Voice</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="p-4 font-medium">Simple Present</td>
                                <td class="p-4 font-medium hindi">सामान्य वर्तमान</td>
                                <td class="p-4">She writes a letter.</td>
                                <td class="p-4">A letter is written by her.</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="p-4 font-medium">Present Continuous</td>
                                <td class="p-4 font-medium hindi">वर्तमान अपूर्ण</td>
                                <td class="p-4">She is writing a letter.</td>
                                <td class="p-4">A letter is being written by her.</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="p-4 font-medium">Present Perfect</td>
                                <td class="p-4 font-medium hindi">वर्तमान पूर्ण</td>
                                <td class="p-4">She has written a letter.</td>
                                <td class="p-4">A letter has been written by her.</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="p-4 font-medium">Simple Past</td>
                                <td class="p-4 font-medium hindi">सामान्य भूत</td>
                                <td class="p-4">She wrote a letter.</td>
                                <td class="p-4">A letter was written by her.</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="p-4 font-medium">Past Continuous</td>
                                <td class="p-4 font-medium hindi">भूत अपूर्ण</td>
                                <td class="p-4">She was writing a letter.</td>
                                <td class="p-4">A letter was being written by her.</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="p-4 font-medium">Past Perfect</td>
                                <td class="p-4 font-medium hindi">भूत पूर्ण</td>
                                <td class="p-4">She had written a letter.</td>
                                <td class="p-4">A letter had been written by her.</td>
                            </tr>
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                <td class="p-4 font-medium">Simple Future</td>
                                <td class="p-4 font-medium hindi">सामान्य भविष्य</td>
                                <td class="p-4">She will write a letter.</td>
                                <td class="p-4">A letter will be written by her.</td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="p-4 font-medium">Future Perfect</td>
                                <td class="p-4 font-medium hindi">भविष्य पूर्ण</td>
                                <td class="p-4">She will have written a letter.</td>
                                <td class="p-4">A letter will have been written by her.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Usage Tips Section -->
            <section class="mb-12">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl md:text-3xl font-semibold text-dark">When to Use Passive Voice</h2>
                    <h2 class="text-xl md:text-2xl font-semibold text-dark hindi">पैसिव वॉइस कब प्रयोग करें</h2>
                </div>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-indigo-50 p-6 rounded-lg">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-medium text-indigo-700 flex items-center">
                                <i class="fas fa-check-circle mr-2"></i> Appropriate Uses
                            </h3>
                            <h3 class="text-lg font-medium text-indigo-700 hindi">उचित प्रयोग</h3>
                        </div>
                        <ul class="list-disc pl-5 space-y-2 text-gray-700">
                            <li>When the doer is unknown or unimportant</li>
                            <li class="hindi">जब कर्ता अज्ञात या महत्वहीन हो</li>
                            <li>When the action is more important than the doer</li>
                            <li class="hindi">जब क्रिया कर्ता से अधिक महत्वपूर्ण हो</li>
                            <li>In scientific/technical writing to maintain objectivity</li>
                            <li class="hindi">वैज्ञानिक/तकनीकी लेखन में वस्तुनिष्ठता बनाए रखने के लिए</li>
                            <li>When you want to be diplomatic or avoid blame</li>
                            <li class="hindi">जब आप कूटनीतिक बनना चाहते हैं या दोष से बचना चाहते हैं</li>
                            <li>When the receiver is the main focus</li>
                            <li class="hindi">जब प्राप्तकर्ता मुख्य फोकस हो</li>
                        </ul>
                    </div>
                    
                    <div class="bg-pink-50 p-6 rounded-lg">
                        <div class="flex justify-between items-center mb-3">
                            <h3 class="text-xl font-medium text-pink-700 flex items-center">
                                <i class="fas fa-times-circle mr-2"></i> When to Avoid
                            </h3>
                            <h3 class="text-lg font-medium text-pink-700 hindi">कब टालें</h3>
                        </div>
                        <ul class="list-disc pl-5 space-y-2 text-gray-700">
                            <li>When the doer is important to the meaning</li>
                            <li class="hindi">जब कर्ता अर्थ के लिए महत्वपूर्ण हो</li>
                            <li>When active voice would make the sentence clearer</li>
                            <li class="hindi">जब एक्टिव वॉइस वाक्य को स्पष्ट बनाए</li>
                            <li>In most business writing (can sound bureaucratic)</li>
                            <li class="hindi">अधिकांश व्यावसायिक लेखन में (यह नौकरशाही लग सकता है)</li>
                            <li>When it makes sentences unnecessarily wordy</li>
                            <li class="hindi">जब यह वाक्यों को अनावश्यक रूप से लंबा बनाए</li>
                            <li>In instructions or direct communication</li>
                            <li class="hindi">निर्देशों या प्रत्यक्ष संचार में</li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Practice Section -->
            <section>
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl md:text-3xl font-semibold text-dark">Practice Exercises</h2>
                    <h2 class="text-xl md:text-2xl font-semibold text-dark hindi">अभ्यास प्रश्न</h2>
                </div>
                
                <div class="bg-blue-50 p-6 rounded-lg mb-8">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-medium text-blue-700">Convert these active sentences to passive:</h3>
                        <h3 class="text-lg font-medium text-blue-700 hindi">इन एक्टिव वाक्यों को पैसिव में बदलें:</h3>
                    </div>
                    <ol class="list-decimal pl-5 space-y-4">
                        <li class="p-3 bg-white rounded border border-gray-200">The chef prepares delicious meals every day.</li>
                        <li class="p-3 bg-white rounded border border-gray-200">Someone has stolen my bicycle.</li>
                        <li class="p-3 bg-white rounded border border-gray-200">The company will announce the results tomorrow.</li>
                        <li class="p-3 bg-white rounded border border-gray-200">People speak English all over the world.</li>
                        <li class="p-3 bg-white rounded border border-gray-200">The storm damaged several houses.</li>
                    </ol>
                </div>
                
                <div class="bg-green-50 p-6 rounded-lg">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-medium text-green-700">Convert these passive sentences to active:</h3>
                        <h3 class="text-lg font-medium text-green-700 hindi">इन पैसिव वाक्यों को एक्टिव में बदलें:</h3>
                    </div>
                    <ol class="list-decimal pl-5 space-y-4">
                        <li class="p-3 bg-white rounded border border-gray-200">The book was written by J.K. Rowling.</li>
                        <li class="p-3 bg-white rounded border border-gray-200">A new shopping mall is being built in our town.</li>
                        <li class="p-3 bg-white rounded border border-gray-200">The decision will be made by the committee.</li>
                        <li class="p-3 bg-white rounded border border-gray-200">All the tickets had been sold before we arrived.</li>
                        <li class="p-3 bg-white rounded border border-gray-200">The injured players were being treated by the medical team.</li>
                    </ol>
                </div>
            </section>
        </div>

        <!-- Footer -->
        <!--<footer class="text-center text-gray-500 text-sm mt-12">
            <div class="flex flex-col md:flex-row justify-between items-center mb-6">
                <div class="mb-4 md:mb-0">
                    <h4 class="text-lg font-medium text-gray-700 mb-2">English Grammar Guide</h4>
                    <p class="hindi">अंग्रेजी व्याकरण गाइड</p>
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="text-blue-600 hover:text-blue-800 text-xl"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-blue-400 hover:text-blue-600 text-xl"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-red-500 hover:text-red-700 text-xl"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="text-gray-700 hover:text-black text-xl"><i class="fab fa-github"></i></a>
                </div>
            </div>
            <div class="border-t border-gray-200 pt-6">
                <p>© 2023 English Learning Resources. All rights reserved.</p>
                <p class="hindi">© 2023 अंग्रेजी सीखने के संसाधन। सर्वाधिकार सुरक्षित।</p>
                <p class="mt-2">Created with <i class="fas fa-heart text-red-500"></i> for English learners</p>
                <p class="hindi">अंग्रेजी सीखने वालों के लिए <i class="fas fa-heart text-red-500"></i> के साथ बनाया गया</p>
            </div>
        </footer> -->
    </div>
    </div>
</body>
</html>