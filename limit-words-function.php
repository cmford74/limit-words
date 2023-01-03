<?php
/**
* limitWords($text,$limit)
* @purpose Limits the word count of a given string
* @param (string $text)  String to proess
* @param (int $limit)  Number of words to limit the given string to
* @return (string) Returns limited string
**/
public function limitWords($text,$limit) {
  if (str_word_count($text, 0) > $limit) {
      $words = str_word_count($text, 2);
      $pos = array_keys($words);
      $text = substr($text, 0, $pos[$limit]) . '...';
  }
  return $text;
}
