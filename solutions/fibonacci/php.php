<?php
include "questions.html";
include "Pieces.php";

$fibonacci_seeds = array(0, 1);
$fibonacci_sequence = $fibonacci_seeds;

$chosen_pieces = array();

for ($i = 0; $i < strlen($pieces[0]); $i++) {
    $fibonacci_sequence[$i+2] = $fibonacci_sequence[$i] + $fibonacci_sequence[$i+1];
    $chosen_pieces[] = get_piece_at_index($pieces, $fibonacci_sequence[$i]);
}
$encoded_string = implode("=", $chosen_pieces);
echo get_decoding_result($encoded_string);

function get_decoding_result($decoded_string) {
    return $decoded_string;
}

function get_piece_at_index($pieces, $index) {
    return ($index > count($pieces)) ? "" : $pieces[$index];
}

?>
