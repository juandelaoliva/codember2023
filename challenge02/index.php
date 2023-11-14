/**
 * This script reads a message from a file and performs operations on it based on certain characters.
 * Allowed characters are #, @, *, and &. 
 * # increments a counter, @ decrements a counter, * squares the counter, and & appends the counter to a result string.
 * If any other character is encountered, an error message is displayed.
 * The final result string is displayed at the end of the script.
 *
 * @param string $message The message to be processed, read from a file.
 * @param int $length The length of the message.
 * @param int $counter The counter that is incremented, decremented, or squared based on the characters in the message.
 * @param string $res The result string that is appended with the value of the counter when the & character is encountered.
 * @return void
 */
<?php
// Read the message from the file
$message = file_get_contents('message_02.txt');

// Check if the file was read successfully
if ($message === false) {
    // Handle the error
    echo "Error reading file";
}
// Get the length of the message
$length = strlen($message);
// Initialize the counter and result string
$counter = 0;
$res = '';

// Loop through the message and perform operations based on the characters
for ($i = 0; $i < $length; $i++) {
    switch ($message[$i]) {
        case "#":
            $counter += 1;
            break;
        case "@":
            $counter -= 1;
            break;
        case "*":
            $counter *= $counter;
            break;
        case "&":
            $res .= $counter;
            break;
        default:
            echo "This character" . $message[$i] . " is not allowed";
    }
}

// Display the result
echo $res;




