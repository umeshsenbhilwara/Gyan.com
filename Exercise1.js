function showResults() {
    let result = "<h2>Results:</h2>";
    const questions = document.getElementsByClassName("question-box");
    for (let i = 0; i < questions.length; i++) {
        const options = questions[i].querySelectorAll("input[type='radio']");
        let selectedOption = "";
        for (let j = 0; j < options.length; j++) {
            if (options[j].checked) {
                selectedOption = options[j].value;
                break;
            }
        }

        const correctAnswer = getCorrectAnswer(i + 1); // Get correct answer based on question number
        result += "<p><strong>Question " + (i + 1) + ":</strong><br>";
        result += "Your answer: " + selectedOption + "<br>";
        result += "Correct answer: " + correctAnswer + "</p>";
    }
    document.getElementById("result").innerHTML = result;
}

function getCorrectAnswer(questionNumber) {
    // Function to return correct answer based on question number
    switch (questionNumber) {
        case 1: return "Write in book";
        case 2: return "पेन मत काम में लीजिये।";
        case 3: return "Do sit.";
        case 4: return "उसे मौका दो।";
        case 5: return "Don't operate her computer.";
        case 6: return "Do solve this puzzle.";
        case 7: return "Tear this page.";
        case 8: return "इसे वहाँ रखिए";
        case 9: return "Do not go in that room.";
        case 10: return "Won't eat non-veg.";
        default: return "Unknown";
    }
}
