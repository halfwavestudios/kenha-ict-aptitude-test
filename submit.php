<?php
session_start();
include 'questions.php';

if (!isset($_SESSION['answers'])) {
    header("Location: index.php");
    exit;
}

$score = 0;
$results = [];

foreach ($questions as $num => $q) {
    $userAns = $_SESSION['answers'][$num] ?? null;
    $correct = $q['answer'];

    if ($userAns === $correct) $score++;

    $results[] = [
        'number'   => $num,
        'question' => $q['question'],
        'your'     => $userAns ? $q['options'][$userAns] : '—',
        'correct'  => $q['options'][$correct],
        'status'   => $userAns === $correct ? 'Correct' : ($userAns ? 'Wrong' : 'Not answered')
    ];
}

$percent = round($score / $total_questions * 100, 1);

session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Results – KeNHA ICT Officer II</title>
    <style>
        :root { --kenha-blue:#003087; --kenha-green:#006633; --kenha-red:#c8102e; --light:#f8f9fa; }
        body { font-family:system-ui,sans-serif; background:var(--light); margin:0; padding:2rem; }
        .container { max-width:1000px; margin:auto; background:white; padding:2rem; border-radius:10px; box-shadow:0 4px 16px rgba(0,0,0,0.1); }
        header { text-align:center; color:var(--kenha-blue); padding-bottom:1.2rem; border-bottom:2px solid var(--kenha-green); }
        .score-box {
            text-align:center;
            margin:2.5rem 0;
            padding:2rem;
            background:#e8f0fe;
            border-radius:12px;
        }
        .big-score { font-size:4.5rem; font-weight:bold; color:var(--kenha-green); }
        table { width:100%; border-collapse:collapse; margin-top:2rem; }
        th, td { padding:12px; border:1px solid #ddd; text-align:left; }
        th { background:var(--kenha-blue); color:white; }
        .correct { color:var(--kenha-green); font-weight:bold; }
        .wrong   { color:var(--kenha-red); }
        .btn { display:inline-block; padding:0.9rem 1.8rem; background:var(--kenha-blue); color:white; text-decoration:none; border-radius:6px; margin-top:2rem; }
        .btn:hover { background:#002366; }
    </style>
</head>
<body>

<div class="container">
    <header>
        <h1>KeNHA ICT Officer II Aptitude Test – Results</h1>
    </header>

    <div class="score-box">
        <div class="big-score"><?= $score ?> / <?= $total_questions ?></div>
        <p style="font-size:1.6rem; margin:0.8rem 0;"><?= $percent ?>%</p>
        <p style="color:#444;"><?= $percent >= 75 ? 'Excellent performance!' : ($percent >= 60 ? 'Good effort – keep practicing.' : 'More preparation recommended.') ?></p>
    </div>

    <table>
        <tr>
            <th>#</th>
            <th>Question</th>
            <th>Your Answer</th>
            <th>Correct Answer</th>
            <th>Result</th>
        </tr>
        <?php foreach ($results as $r): ?>
        <tr>
            <td><?= $r['number'] ?></td>
            <td><?= htmlspecialchars($r['question']) ?></td>
            <td><?= htmlspecialchars($r['your']) ?></td>
            <td><?= htmlspecialchars($r['correct']) ?></td>
            <td class="<?= $r['status']==='Correct'?'correct':'wrong' ?>">
                <?= $r['status'] ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <center>
        <a href="index.php" class="btn">Start New Test</a>
    </center>
</div>

</body>
</html>
