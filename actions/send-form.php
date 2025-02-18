<?php
// verifying request is sent from previous page
session_start();
$token = $_POST['token'];
if($token != $_SESSION['token']) {
    header('Location:/../index.php?alert=0&message='.urlencode('Invalid Session Token'));
    exit;
}

// loading .env file
require_once '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Access the environment variable
$webhook_url = $_ENV['DISCORD_WEBHOOK_URL'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // access the POST sent
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // creating discord message
    $discord_message = json_encode([
        "content" => "**New Contact Form Submission**\nName: $name\nEmail: $email\nMessage: $message"
    ]);

    // setting up curl for sending POST request to the webhook URL
    $ch = curl_init($webhook_url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $discord_message);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // executing the cURL request
    $response = curl_exec($ch);
    curl_close($ch);

    // redirection to the main site with result
    if ($response === false) {
        header('Location:/../index.php?alert=0&message='.urlencode('Something went wrong!'));
    } else {
        header('Location:/../index.php?alert=1&message='.urlencode('Message sent !'));
    }
}
