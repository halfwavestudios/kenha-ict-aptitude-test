<?php
// index.php - corrected & complete version (July 2025 style)

session_start();

// Force session initialization
if (!isset($_SESSION['answers'])) {
    $_SESSION['answers'] = [];
}
if (!isset($_SESSION['start_time'])) {
    $_SESSION['start_time'] = time();
}

// Load questions
include 'questions.php';  // must define $questions array and $total_questions

// Get current question number (0 = instructions/start screen)
$current = isset($_GET['q']) ? (int)$_GET['q'] : 0;

// Calculate remaining time
$elapsed   = time() - ($_SESSION['start_time'] ?? 0);
$remaining = max(0, 3600 - $elapsed);

// Only redirect to results if test has actually started AND time is up
if ($remaining <= 0 && $current >= 1) {
    header("Location: submit.php");
    exit;
}

// Prevent skipping ahead (only allow question N if N-1 was answered)
if ($current > 1 && !isset($_SESSION['answers'][$current - 1])) {
    header("Location: index.php?q=" . ($current - 1));
    exit;
}

// Safety: invalid question number → go back to start
if ($current < 0 || $current > $total_questions) {
    $current = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>KeNHA ICT Officer II Aptitude Test</title>
    <style>
        :root {
            --kenha-blue:  #003087;
            --kenha-green: #006633;
            --kenha-red:   #c8102e;
            --light:       #f8f9fa;
            --dark:        #222;
        }
        body {
            font-family: system-ui, -apple-system, sans-serif;
            background: var(--light);
            color: var(--dark);
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }
        header {
            background: var(--kenha-blue);
            color: white;
            text-align: center;
            padding: 1.4rem 1rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }
        header h1 {
            margin: 0;
            font-size: 1.9rem;
        }
        .container {
            max-width: 860px;
            margin: 2rem auto;
            padding: 0 1.2rem;
        }
        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
            padding: 2.2rem;
        }
        .btn {
            display: inline-block;
            padding: 0.95rem 2.4rem;
            font-size: 1.15rem;
            background: var(--kenha-blue);
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            text-decoration: none;
        }
        .btn:hover {
            background: #002366;
        }
        .timer {
            font-size: 1.7rem;
            font-weight: bold;
            text-align: center;
            margin: 1.2rem 0;
        }
        .timer.low {
            color: var(--kenha-red);
        }
        .instructions ul {
            padding-left: 1.6rem;
        }
        .option label {
            display: block;
            margin: 0.7rem 0;
            padding: 1rem;
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            cursor: pointer;
        }
        .option label:hover {
            background: #e8f0fe;
        }
        @media (max-width: 600px) {
            .card { padding: 1.6rem; }
            .btn { width: 100%; }
        }
    </style>
</head>
<body>

<header>
    <h1>KeNHA ICT Officer II (Grade 8) Aptitude Test</h1>
    <p>60 Questions • 60 Minutes • Immediate Feedback Mode</p>
</header>

<div class="container">

    <?php if ($current === 0): ?>
        <!-- ── START / INSTRUCTIONS SCREEN ── -->
        <div class="card">
            <h2>Welcome – Test Instructions</h2>
            <div class="instructions">
                <p>This is a practice version with <strong>immediate feedback</strong> after each question.</p>
                <ul>
                    <li>Answer one question → see immediately if correct</li>
                    <li>You must answer each question to move forward</li>
                    <li>You cannot go back or skip questions</li>
                    <li>The 60-minute timer runs continuously</li>
                    <li>Full score and detailed review only appear after question 60</li>
                </ul>
            </div>

            <div style="text-align: center; margin-top: 2.5rem;">
                <a href="index.php?q=1" class="btn">Begin Test</a>
            </div>
        </div>

    <?php else: ?>
        <!-- ── QUESTION SCREEN ── -->
        <div class="card">

            <p style="text-align:center; font-weight:600; margin-bottom:0.8rem;">
                Question <?= $current ?> of <?= $total_questions ?>
            </p>

            <div class="timer <?= $remaining <= 300 ? 'low' : '' ?>" id="timer">
                <?= gmdate('H:i:s', $remaining) ?>
            </div>

            <form method="post" action="process.php">
                <input type="hidden" name="current" value="<?= $current ?>">

                <h3 style="color: var(--kenha-blue); margin-bottom: 1.4rem;">
                    <?= htmlspecialchars($questions[$current]['question']) ?>
                </h3>

                <div class="option">
                    <?php foreach ($questions[$current]['options'] as $key => $text): ?>
                        <label>
                            <input type="radio" name="answer" value="<?= $key ?>" required style="margin-right: 0.9rem;">
                            <strong><?= $key ?>)</strong> <?= htmlspecialchars($text) ?>
                        </label>
                    <?php endforeach; ?>
                </div>

                <div style="text-align: center; margin-top: 2.5rem;">
                    <button type="submit" class="btn">Submit Answer</button>
                </div>
            </form>

        </div>
    <?php endif; ?>

</div>

<script>
// Client-side timer (visual only – server enforces real timeout)
let timeLeft = <?= $remaining ?>;
const timerEl = document.getElementById('timer');

if (timerEl) {
    const tick = setInterval(() => {
        timeLeft--;
        let h = String(Math.floor(timeLeft / 3600)).padStart(2,'0');
        let m = String(Math.floor((timeLeft % 3600) / 60)).padStart(2,'0');
        let s = String(timeLeft % 60).padStart(2,'0');
        timerEl.textContent = `${h}:${m}:${s}`;

        if (timeLeft <= 300) timerEl.classList.add('low');

        if (timeLeft <= 0) {
            clearInterval(tick);
            alert("Time has expired.");
            window.location.href = "submit.php";
        }
    }, 1000);
}
</script>

</body>
</html>
