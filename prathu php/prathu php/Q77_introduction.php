<?php
$filename = "introduction.txt";
$content = "I am a web developer specializing in PHP";

// Write content to file
file_put_contents($filename, $content);
echo "File '$filename' created successfully!<br><br>Content:<br>";

// Read and display file content line by line
foreach (file($filename) as $line) {
    echo $line . "<br>";
}

echo "<br>Executed by Prathu Garg 0221BCA093";
?>
