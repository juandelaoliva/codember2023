/**
* FILEPATH: /workspaces/codember2023/challenge01/index.php
*
* This script reads a message from a file, splits it into words based on space delimiter,
* and counts the occurrence of each word. The final result is a string that contains each
* unique word and its count. The result is printed to the screen.
*/
<?php
// Read the message from the file
$message = file_get_contents('message_01.txt');

// Check if the file was read successfully
if ($message === false) {
    // Handle the error
    echo "Error reading file";
}

// Splitting the message into words based on space delimiter
$words = explode(" ", $message);
// Initializing an array to hold the count of each word
$indexedWords = [];
// Initializing a string to hold the final result
$finalResult = '';

// Iterating over each word in the message
foreach ($words as &$word) {
    // Converting word to lowercase for case-insensitive comparison
    $newWord = strtolower($word);
    // Checking if the word already exists in the array
    if (array_key_exists($newWord, $indexedWords)) {
        // Incrementing the count of the word
        $indexedWords[$newWord] += 1;
    } else {
        // Adding the word to the array with a count of 1
        $indexedWords[$newWord] = 1;
    }
}

// Iterating over the indexedWords array to build the final result string
foreach ($indexedWords as $key => $value) {
    // Appending the word and its count to the final result with a space for readability
    $finalResult .= $key . $value;
}

// Print array for visibility.
print_r($indexedWords);

//This is the result.
echo 'Final result--->' . $finalResult;


