<?php
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $authorName = $_POST['authorName'];
  $chapterContent = $_POST['chapterContent'];

  // Validate and sanitize the input (You can add your own validation rules here)

  // Example validation: Check if the fields are not empty
  if (empty($authorName) || empty($chapterContent)) {
    echo 'Please fill in all the fields.';
    exit;
  }

  // Store the chapter in a file or database (You can customize this part based on your storage preference)

  // Example: Append the chapter to a text file
  $chapter = "Author: $authorName\n\n$chapterContent\n\n";
  $file = 'story.txt';

  // Open the file in append mode
  $handle = fopen($file, 'a');

  // Write the chapter to the file
  fwrite($handle, $chapter);

  // Close the file
  fclose($handle);

  // Return a success message
  echo 'Chapter submitted successfully.';
} else {
  // Handle invalid request method (GET, PUT, DELETE, etc.)
  echo 'Invalid request method.';
}
?>
