<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Success - Query Sent</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .success-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #4CAF50;
            margin-bottom: 20px;
            font-size: 24px;
        }
        p {
            font-size: 18px;
            margin-bottom: 20px;
            color: #333;
        }
        a {
            text-decoration: none;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="success-container">
    <h1>Thank You!</h1>
    <p>Your message has been successfully sent. We will get back to you shortly.</p>
    <a href="index.php">Go Back to Home</a>
</div>


<script>
    setTimeout(function() {
        window.location.href = 'index.php'; // Redirect to homepage after 1 second
    }, 3000); // 1000 milliseconds = 1 second
</script>
</body>
</html>
