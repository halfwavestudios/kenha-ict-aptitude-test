<?php
session_start();
include 'questions.php';

if (!isset($_SESSION['answers'])) {
    $_SESSION['answers'] = [];
    $_SESSION['start_time'] = time();
}

$current = isset($_GET['q']) ? (int)$_GET['q'] : 1;
if ($current < 1 || $current > $total_questions) $current = 1;

$elapsed = time() - $_SESSION['start_time'];
$remaining = max(0, $time_limit - $elapsed);

if ($remaining <= 0 && $current <= $total_questions) {
    header("Location: submit.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KeNHA ICT Officer II Aptitude Test</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        .timer { font-size: 1.4em; color: red; font-weight: bold; }
        .question { margin: 30px 0; }
        label { display: block; margin: 10px 0; cursor: pointer; }
        .nav { margin-top: 40px; }
        button { padding: 10px 20px; font-size: 1.1em; }
    </style>
</head>
<body>

<h1>KeNHA ICT Officer II (Grade 8) Aptitude Test</h1>
<p>Time remaining: <span class="timer" id="timer"><?= gmdate("H:i:s", $remaining) ?></span></p>

<form method="post" action="submit.php">
    <input type="hidden" name="current" value="<?= $current ?>">
    <input type="hidden" name="next" value="<?= min($current + 1, $total_questions + 1) ?>">

    <div class="question">
        <h3>Question <?= $current ?> / <?= $total_questions ?></h3>
        <p><?= htmlspecialchars($questions[$current]['question']) ?></p>

        <?php foreach ($questions[$current]['options'] as $key => $opt): ?>
            <label>
                <input type="radio" name="answer" value="<?= $key ?>" <?= (isset($_SESSION['answers'][$current]) && $_SESSION['answers'][$current] === $key) ? 'checked' : '' ?> required>
                <?= $key ?>) <?= htmlspecialchars($opt) ?>
            </label>
        <?php endforeach; ?>
    </div>

    <div class="nav">
        <?php if ($current > 1): ?>
            <a href="?q=<?= $current - 1 ?>"><button type="button">Previous</button></a>
        <?php endif; ?>

        <?php if ($current < $total_questions): ?>
            <button type="submit">Next</button>
        <?php else: ?>
            <button type="submit">Finish & Submit Test</button>
        <?php endif; ?>
    </div>
</form>

<script>
let timeLeft = <?= $remaining ?>;
const timerEl = document.getElementById('timer');

const countdown = setInterval(() => {
    timeLeft--;
    let h = Math.floor(timeLeft / 3600).toString().padStart(2,'0');
    let m = Math.floor((timeLeft % 3600) / 60).toString().padStart(2,'0');
    let s = (timeLeft % 60).toString().padStart(2,'0');
    timerEl.textContent = `${h}:${m}:${s}`;

    if (timeLeft <= 0) {
        clearInterval(countdown);
        alert("Time's up! Submitting your test...");
        document.querySelector('form').submit();
    }
}, 1000);
</script>

</body>
</html>
