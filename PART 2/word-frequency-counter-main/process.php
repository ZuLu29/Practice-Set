<?php
$inputText = $_POST['text']; 
$words = str_word_count(strtolower($inputText), 1);
?>