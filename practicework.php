<?php
echo '<h1>kuch to hona chaiye</h1>';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get all submitted answers
    echo '<h1>kuch to hona chaiye</h1>';

    $answers = [];
    foreach ($_POST as $key => $value) {
        if (strpos($key, 'question_') === 0) {
            $question_id = str_replace('question_', '', $key);
            $answers[$question_id] = $value; // Store answer for each question
        }
    }

    // Get question IDs from hidden inputs
    $question_ids = $_POST['queId'] ?? [];

    // Process answers and question IDs...
}
?>
