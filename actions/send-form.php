<?php

session_start();
$token = $_POST['token'];
if($token != $_SESSION['token']) {
    header('Location:/../index.php?alert=0&message=Invalid Session Token');
    exit;
}


require_once '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();


echo "<pre>";
print_r($_ENV);  // This should show all the environment variables loaded from the .env file
echo "</pre>";

// Access the environment variable
$webhook_url = $_ENV['DISCORD_WEBHOOK_URL'];

echo $webhook_url;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $discord_message = json_encode([
        "content" => "**New Contact Form Submission**\nName: $name\nEmail: $email\nMessage: $message"
    ]);

    // Set up cURL for sending the POST request to the webhook URL
    $ch = curl_init($webhook_url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $discord_message);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute the cURL request
    $response = curl_exec($ch);
    curl_close($ch);

    if ($response === false) {
        header('Location:/../index.php?alert=0&message=Something went wrong!');
    } else {
        header('Location:/../index.php?alert=1&message=Message sent !');
    }
}