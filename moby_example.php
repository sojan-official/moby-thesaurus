<?php
require_once 'MobyThesaurus.php';
echo "<h1>Demonstrating MobyThesaurus Class</h1>";

echo "<h3>Getting Synonyms for 'medications' (MobyThesaurus::GetSynonyms)</h3>";
$start_time = microtime(true);
$synonyms = MobyThesaurus::GetSynonyms("medication");
var_dump($synonyms);
echo "<br><br>Processing Time: " . (microtime(true) - $start_time) . "<br>";

echo "<br><h3>Getting Part of Speech for 'feel' (MobyThesaurus::GetPartsOfSpeech)</h3>";
$start_time = microtime(true);
$pos = MobyThesaurus::GetPartsOfSpeech("cat");
var_dump($pos);
echo "<br><br>Processing Time: " . (microtime(true) - $start_time) . "<br>";

?>
