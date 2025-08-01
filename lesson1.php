<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Imperative Sentences Guide</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#3b82f6',
            secondary: '#10b981',
            accent: '#f59e0b',
          },
          animation: {
            'fade-in': 'fadeIn 0.5s ease-in',
            'slide-up': 'slideUp 0.5s ease-out',
          },
          keyframes: {
            fadeIn: {
              '0%': { opacity: '0' },
              '100%': { opacity: '1' },
            },
            slideUp: {
              '0%': { transform: 'translateY(20px)', opacity: '0' },
              '100%': { transform: 'translateY(0)', opacity: '1' },
            }
          }
        }
      }
    }
  </script>
  <style type="text/css">
    @keyframes pulse {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.05); }
    }
    .hover-pulse:hover {
      animation: pulse 1s infinite;
    }
    .highlight-row {
      transition: all 0.3s ease;
    }
    .highlight-row:hover {
      background-color: #f3f4f6;
      transform: translateX(4px);
    }
  </style>
</head>
<body>
    <?php include('Sidebar.php'); ?>
      <div id="main-content" class="lg:ml-72 transition-all duration-300 p-4 lg:p-8"> 
<div class="max-w-6xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden animate-fade-in">
    <!-- Header Section -->
    <div class="bg-gradient-to-r from-primary to-accent p-6 text-white">
      <div class="flex items-center justify-between">
        <h1 class="text-2xl md:text-3xl font-bold flex items-center">
          <i class="fas fa-language mr-3"></i>
          How to make Imperative Sentences?
        </h1>
        <div class="flex space-x-2">
          <span class="px-3 py-1 bg-white bg-opacity-20 rounded-full text-sm flex items-center">
            <i class="fas fa-book-open mr-1"></i> Grammar
          </span>
        </div>
      </div>
    </div>

    <!-- Content Section -->
    <div class="p-6 md:p-8">
      <!-- Introduction -->
      <div class="mb-8 animate-slide-up">
        <div class="flex items-start mb-4">
          <div class="bg-primary bg-opacity-10 p-3 rounded-full mr-4 text-primary">
            <i class="fas fa-info-circle text-lg"></i>
          </div>
          <p class="text-gray-700 flex-1">
            जब भी हमें किसी व्यक्ति से किसी काम को करने या ना करने के लिए कहना हो तो ये वाक्य काम में लिए जाते है, Don't, Do not व Won't को negative वाक्यों के लिए लगाया जाता हैं
          </p>
        </div>
        
        <div class="flex items-start">
          <div class="bg-secondary bg-opacity-10 p-3 rounded-full mr-4 text-secondary">
            <i class="fas fa-lightbulb text-lg"></i>
          </div>
          <p class="text-gray-700 flex-1">
            "Do" is to be applied before a main verb when conversation is being done in a formal manner
          </p>
        </div>
      </div>

      <!-- Formal/Informal Table -->
      <div class="mb-10 overflow-x-auto animate-slide-up" style="animation-delay: 0.2s">
        <div class="flex items-center mb-4">
          <i class="fas fa-table mr-2 text-primary"></i>
          <h2 class="text-xl font-semibold text-gray-800">Formal vs Informal Imperatives</h2>
        </div>
        
        <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-large text-gray-900 uppercase tracking-wider">No.</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-large text-gray-900 uppercase tracking-wider">English</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-large text-gray-900 uppercase tracking-wider">Type</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-large text-gray-900 uppercase tracking-wider">Hindi</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <!-- Row 1 -->
              <tr class="highlight-row">
                <td rowspan="2" class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center">1</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-large">Sit</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Informal</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">बैठो</td>
              </tr>
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Do Sit</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Formal</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">बैठिये</td>
              </tr>
              
              <!-- Row 2 -->
              <tr class="highlight-row">
                <td rowspan="2" class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center">2</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Teach</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Informal</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">पढाओ</td>
              </tr>
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Do Teach</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Formal</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">पढाईए</td>
              </tr>
              
              <!-- Row 3 -->
              <tr class="highlight-row">
                <td rowspan="2" class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center">3</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Buy</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Informal</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">खरीदा</td>
              </tr>
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Do buy</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Formal</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">खरीदिये</td>
              </tr>
              
              <!-- Row 4 -->
              <tr class="highlight-row">
                <td rowspan="2" class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center">4</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Blush</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Informal</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">शरमाओ</td>
              </tr>
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Do Blush</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Formal</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">शरमाईए</td>
              </tr>
              
              <!-- Row 5 -->
              <tr class="highlight-row">
                <td rowspan="2" class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center">5</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Bless</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Informal</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">आशीर्वाद दो</td>
              </tr>
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Do Bless</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Formal</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">आशीर्वाद दीजिये</td>
              </tr>
              
              <!-- Row 6 -->
              <tr class="highlight-row">
                <td rowspan="2" class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center">6</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Find</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Informal</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">खोजो</td>
              </tr>
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Do Find</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Formal</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">खोजिये</td>
              </tr>
              
              <!-- Row 7 -->
              <tr class="highlight-row">
                <td rowspan="2" class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 text-center">7</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Meet</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Informal</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">मिलो</td>
              </tr>
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Do Meet</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                  <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs">Formal</span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">मिलिए</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Don't Section -->
      <div class="mb-10 animate-slide-up" style="animation-delay: 0.3s">
        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6 rounded-r-lg">
          <div class="flex">
            <div class="flex-shrink-0">
              <i class="fas fa-exclamation-circle text-yellow-400 mt-1 mr-3"></i>
            </div>
            <div>
              <h3 class="text-lg font-medium text-yellow-800">"Do not" vs "Don't"</h3>
              <p class="text-yellow-700">
                "Do not" is similarly used as 'Do' when the conversation is being done in a formal manner.
                "Don't" (Short form of do not) is used when conversation is being done informally between friends.
              </p>
            </div>
          </div>
        </div>

        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">No.</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">English</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Hindi (Informal)</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Hindi (Formal)</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Don't Shiver</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">धुजो मत</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">धुजिये मत</td>
              </tr>
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Don't Assume</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">कल्पना मत कर</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">कल्पना मत करिए</td>
              </tr>
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Don't Crawl</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">रेंगिये मत</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">रेंगो मत</td>
              </tr>
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">4</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Don't Compare</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">तुलना मत करिए</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">तुलना मत करो</td>
              </tr>
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">5</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Don't Comment</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">टिप्पणी मत करिए</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">टिप्पणी मत कर</td>
              </tr>
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">6</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Don't Munch</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">चबाइए मत</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">चबाओ मत</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Won't Section -->
      <div class="animate-slide-up" style="animation-delay: 0.4s">
        <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-6 rounded-r-lg">
          <div class="flex">
            <div class="flex-shrink-0">
              <i class="fas fa-ban text-red-400 mt-1 mr-3"></i>
            </div>
            <div>
              <h3 class="text-lg font-medium text-red-800">Using "Won't"</h3>
              <p class="text-red-700">
                "Won't" is used for restraining someone to do something
              </p>
            </div>
          </div>
        </div>

        <div class="overflow-x-auto">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">English</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">Hindi</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Won't Accept</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">स्वीकार मत करना</td>
              </tr>
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Won't Bring</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">मत लाना</td>
              </tr>
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Won't Cook</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">खाना मत पकाना</td>
              </tr>
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Won't Copy</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">नक़ल मत करना</td>
              </tr>
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Won't Hang</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">लटकना मत / टांगना मत</td>
              </tr>
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Won't Injure</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">चोट मत पहुँचाना</td>
              </tr>
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Won't Grunt</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">गुर्राना मत</td>
              </tr>
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Won't Grant</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">मंजूर मत करना</td>
              </tr>
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Won't Foster</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">पालन पोषण मत करना</td>
              </tr>
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Won't Insult</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">अपमान मत करना</td>
              </tr>
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Won't Nap</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">झपकी मत लेना</td>
              </tr>
              <tr class="highlight-row">
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Won't Object</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">विरोध मत करना</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Practice Button -->
      <div class="mt-12 text-center animate-slide-up" style="animation-delay: 0.5s">
        <button class="hover-pulse inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-gradient-to-r from-primary to-accent hover:from-primary-dark hover:to-accent-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
          <i class="fas fa-pen-alt mr-2"></i>
          <a href="Exercise1.php">Practice These Sentences</a>
        </button>
      </div>
    </div>
  </div>
</body>
</html>