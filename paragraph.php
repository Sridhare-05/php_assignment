<?php

$paragraph = "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.";

$num_characters = strlen($paragraph);

$num_words = str_word_count($paragraph);

$num_special_characters = strlen(preg_replace('/[a-zA-Z0-9\s]/', '', $paragraph));

echo "i) Number of characters including space: $num_characters <br>";
echo "ii) Number of words: $num_words <br>";
echo "iii) Number of special characters: $num_special_characters";
?>
