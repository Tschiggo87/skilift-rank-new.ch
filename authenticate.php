<!-- authenticate.php -->
<?php
session_start();

// Benutzernamen und Passwörter für die Demonstration hardcoden
$valid_credentials = [
    'username1' => 'password1',
    'username2' => 'password2',
];

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($valid_credentials[$username]) && $valid_credentials[$username] === $password) {
    $_SESSION['loggedin'] = true;
    header('Location: index.php');
} else {
    echo "Ungültige Anmeldeinformationen.";
}
?>
