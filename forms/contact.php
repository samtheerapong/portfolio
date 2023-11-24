<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  $data = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message\n\n";
  $file_path = "../assets/contact/file.txt";
  $file = fopen($file_path, "a");
  fwrite($file, $data);
  fclose($file);

  // // Line API Integration
  // $line_api_url = 'https://notify-api.line.me/api/notify';
  // $line_access_token = 'xxx';

  // $line_headers = [
  //   'Content-Type: application/x-www-form-urlencoded',
  //   'Authorization: Bearer ' . $line_access_token
  // ];

  // $line_message = "New message from $name:\n\nSubject: $subject\n$message";

  // $line_data = [
  //   'message' => $line_message,
  // ];

  // $ch = curl_init();
  // curl_setopt($ch, CURLOPT_URL, $line_api_url);
  // curl_setopt($ch, CURLOPT_POST, 1);
  // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($line_data)); // Ensure data is in x-www-form-urlencoded format
  // curl_setopt($ch, CURLOPT_HTTPHEADER, $line_headers);
  // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  // $result = curl_exec($ch);
  // curl_close($ch);

  // var_dump($result);
  // $result = json_decode($result, TRUE);

  echo "Your message has been saved and sent. Thank you!";
} else {
  echo "Form submission error.";
}
