<?php
require_once('C:\Users\Pramuditha\PhpstormProjects\keelles\notify-php\autoload.php');

// Replace these values with your actual user ID and API key
$user_id = "25275";
$api_key = "Px9mV7unOUrVWjZAKAYH";

// Message details
$message = "Please use the code 123456 to verify your account.";
$to = "94740121043"; // Replace with the recipient's phone number


// Optional contact details
$contact_fname = ""; // Contact First Name
$contact_lname = ""; // Contact Last Name
$contact_email = ""; // Contact Email Address
$contact_address = ""; // Contact Physical Address
$contact_group = 0; // Group ID to associate the contact with (optional)
$type = null; // Message type. Provide as unicode to support unicode (optional)

// Initialize API instance
$api_instance = new NotifyLk\Api\SmsApi();

try {
    // Send SMS
    $api_instance->sendSMS($user_id, $api_key, $message, $to, $contact_fname, $contact_lname, $contact_email, $contact_address, $contact_group, $type);

    echo "SMS sent successfully.";
} catch (Exception $e) {
    echo 'Exception when calling SmsApi->sendSMS: ', $e->getMessage(), PHP_EOL;
}
?>
