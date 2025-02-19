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


}


?>