<?php
session_start();
include 'questions.php';

if (!isset($_SESSION['answers'])) {
    $_SESSION['answers'] = [];
    $_SESSION['start_time'] = time();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['current']) || !isset($_POST['answer'])) {
    header("Location: index.php");
    exit;
}

$current = (int)$_POST['current'];
$selected = $_POST['answer'];

if (isset($questions[$current])) {
    $_SESSION['answers'][$current] = $selected;
}

$elapsed = time() - $_SESSION['start_time'];
$remaining = max(0, 3600 - $elapsed);

if ($remaining <= 0) {
    header("Location: submit.php");
    exit;
}

$is_correct = ($selected === $questions[$current]['answer']);
$correct_letter = $questions[$current]['answer'];
$correct_text = $questions[$current]['options'][$correct_letter];

$feedback_class = $is_correct ? 'correct' : 'incorrect';
$feedback_text = $is_correct ? 'Correct!' : 'Incorrect';

$next_q = $current + 1;
$is_last = ($next_q > $total_questions);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question <?= $current ?> Feedback - KeNHA ICT Test</title>
    <style>
        :root {
            --kenha-blue: #003087;
            --kenha-green: #006633;
            --kenha-red: #c8102e;
            --kenha-gray: #f5f5f5;
        }
        body { font-family: system-ui, sans-serif; background: var(--kenha-gray); margin: 0; padding: 2rem; }
        .container { max-width: 900px; margin: auto; background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
        header { text-align: center; color: var(--kenha-blue); padding-bottom: 1rem; border-bottom: 2px solid var(--kenha-green); }
        .feedback { text-align: center; font-size: 1.8rem; font-weight: bold; margin: 2rem 0; padding: 1.5rem; border-radius: 8px; }
        .correct { background: #e8f5e9; color: var(--kenha-green); }
        .incorrect { background: #ffebee; color: var(--kenha-red); }
        .explanation { margin: 1.5rem 0; padding: 1rem; background: #f9f9f9; border-left: 4px solid var(--kenha-blue); }
        .btn { display: inline-block; padding: 1rem 2rem; background: var(--kenha-blue); color: white; text-decoration: none; border-radius: 6px; font-size: 1.2rem; margin-top: 1.5rem; }
        .btn:hover { background: #00205b; }
        .disabled { background: #aaa; cursor: not-allowed; }
    </style>
</head>
<body>

<div class="container">
    <header>
        <h1>KeNHA ICT Officer II Aptitude Test</h1>
        <p>Question <?= $current ?> of <?= $total_questions ?> – Feedback</p>
    </header>

    <div class="feedback <?= $feedback_class ?>">
        <?= $feedback_text ?>
    </div>

    <p><strong>Your answer:</strong> <?= htmlspecialchars($questions[$current]['options'][$selected] ?? '—') ?></p>
    <p><strong>Correct answer:</strong> <?= htmlspecialchars($correct_text) ?></p>

    <?php if (!$is_correct): ?>
        <div class="explanation">
            <strong>Quick explanation:</strong> Review the concept related to this question for better understanding in future attempts.
        </div>
    <?php endif; ?>

    <?php if ($is_last): ?>
        <form action="submit.php" method="post">
            <input type="hidden" name="final_submit" value="1">
            <button type="submit" class="btn">View Full Results & Score</button>
        </form>
    <?php else: ?>
        <a href="index.php?q=<?= $next_q ?>" class="btn">Continue to Next Question</a>
    <?php endif; ?>

    <p style="text-align:center; margin-top:2rem; color:#555;">
        Time remaining: <?= gmdate("H:i:s", $remaining) ?> | Total answered: <?= count($_SESSION['answers']) ?>
    </p>
</div>

</body>
</html>
