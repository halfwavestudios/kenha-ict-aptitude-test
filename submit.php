<?php
session_start();
include 'questions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['answer'], $_POST['current'])) {
    $q = (int)$_POST['current'];
    $_SESSION['answers'][$q] = $_POST['answer'];
}

$score = 0;
$results = [];

foreach ($questions as $num => $q) {
    $user_ans = $_SESSION['answers'][$num] ?? null;
    $correct = $q['answer'];
    $is_correct = ($user_ans === $correct);
    if ($is_correct) $score++;

    $results[] = [
        'num' => $num,
        'question' => $q['question'],
        'your_answer' => $user_ans ? $q['options'][$user_ans] : 'Not answered',
        'correct_answer' => $q['options'][$correct],
        'status' => $is_correct ? 'Correct' : 'Wrong'
    ];
}

session_destroy(); // Clear session after results
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Results - KeNHA ICT Test</title>
    <style> body { font-family: Arial; } table { border-collapse: collapse; width: 100%; } th,td { border: 1px solid #ddd; padding: 8px; } th { background: #f2f2f2; } .correct { color: green; } .wrong { color: red; } </style>
</head>
<body>

<h1>Your Aptitude Test Results</h1>
<h2>Score: <?= $score ?> / <?= count($questions) ?> (<?= round(($score / count($questions)) * 100, 1) ?>%)</h2>

<table>
    <tr><th>Q#</th><th>Question</th><th>Your Answer</th><th>Correct Answer</th><th>Status</th></tr>
    <?php foreach ($results as $r): ?>
    <tr>
        <td><?= $r['num'] ?></td>
        <td><?= htmlspecialchars($r['question']) ?></td>
        <td><?= htmlspecialchars($r['your_answer']) ?></td>
        <td><?= htmlspecialchars($r['correct_answer']) ?></td>
        <td class="<?= $r['status']==='Correct'?'correct':'wrong' ?>"><?= $r['status'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<p><a href="index.php">Restart Test</a></p>

</body>
</html>
