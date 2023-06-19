<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Perform authentication logic here, e.g., check credentials against a database

  if ($username === 'example@example.com' && $password === 'password') {
    // Authentication successful
    header('Location: dashboard.html'); // Redirect to the dashboard page
    exit;
  } else {
    // Authentication failed
    echo 'Invalid username or password';
  }
}
?>
