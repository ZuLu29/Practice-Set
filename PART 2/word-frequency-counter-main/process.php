<?php

$stopWords = ["the", "and", "in", "of", "to", "a", "is", "for", "on", "with", "as", "an", "at", "by", "that", 
"would", "should", "can", "could", "may", "might", "must", "about", "above", "below", "into", "out", "same", "so", 
"than", "too", "very", "s", "t", "can't", "don't", "shouldn't", "won't", "wouldn't"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputText = $_POST['text'];
    $sortingOrder = $_POST['sort'];
    $displayLimit = (int)$_POST['limit'];

    $words = str_word_count(strtolower($inputText), 1);

    $filteredWords = array_diff($words, $stopWords);

    $wordFrequencies = array_count_values($filteredWords);

    if ($sortingOrder === 'asc') {
        asort($wordFrequencies);
    } else {
        arsort($wordFrequencies);
    }

    $wordFrequencies = array_slice($wordFrequencies, 0, $displayLimit, true);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Frequency Counter - Results</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Word Frequency Counter - Results</h1>
    <a href="index.html">Back to Input</a>
    <br><br>
    <?php if (!empty($wordFrequencies)): ?>
        <table>
            <thead>
                <tr>
                    <th>Word</th>
                    <th>Frequency</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($wordFrequencies as $word => $frequency): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($word); ?></td>
                        <td><?php echo $frequency; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No words to display.</p>
    <?php endif; ?>
</body>
</html>