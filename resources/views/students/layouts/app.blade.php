<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Custom styles */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            margin: 0;
            height: 100vh;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 250px;
            background-color: #53b1a6;  /* Green color for the top part */
            background-image: url('{{ asset('C:\Users\mohda\OneDrive\Pictures\Screenshots\Screenshot 2024-11-06 153703.jpg') }}');  /* Path to the image in the public directory */
            background-size: cover;
            padding: 20px;
            color: white;
            height: 100vh;
            background-position: center;
        }

        .sidebar h2 {
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            margin-bottom: 10px;
            padding: 10px;
            background-color: rgba(88, 195, 177, 0.8);  /* Semi-transparent background for the links */
            border-radius: 5px;
        }

        .sidebar a:hover {
            background-color: #47a094;
        }

        /* Content Area Styling */
        .content {
            padding: 20px;
            flex-grow: 1;
            background: linear-gradient(to bottom right, #f0f4f8, #e8f5e9); /* Light gradient */
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        /* Decorative Box for Content */
        .content-box {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 90%;
            max-width: 800px;
        }

        .content-box h1 {
            font-size: 2em;
            color: #53b1a6;
            text-align: center;
            margin-bottom: 20px;
        }

        .content-box p {
            font-size: 1.2em;
            text-align: center;
            color: #555;
        }

        /* Decorative Shapes */
        .decorative-circle {
            position: absolute;
            width: 150px;
            height: 150px;
            background: #53b1a6;
            border-radius: 50%;
            top: 10%;
            left: 10%;
            opacity: 0.2;
        }

        .decorative-rectangle {
            position: absolute;
            width: 200px;
            height: 100px;
            background: #47a094;
            top: 70%;
            right: 10%;
            transform: rotate(-10deg);
            opacity: 0.3;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <!-- Add the school logo here -->
        <div class="logo-container">
            <img src="https://s3-alpha-sig.figma.com/img/b997/8945/e392638012cc4cce814e1a78c3b95498?Expires=1731888000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Wk752RJjS5apvVoS5McKsVZjQ52Fr13lS2owiqRrDCMNBGtH-TL4ED8nmlUKi1P5cSuth7Hj3gg36PdDUsfyntVXrttW0X~83GztvcBkdfyIc2pjGmyEIMT-3QPjOYCh1auupHj~AsIAxfs2kCN5tEtIUFur8rcfuHS0s-vBMNO~1Ka9zyqsxMVxzLw9tiTMRCvCZwaTdwNF39OanSH9ogITqkBBgv9fxIUFBMId4QDioqVEpCimYqfUVau13BF9jcToaSTDDfGfAEa0B05t7T1R5qIm6Q2Eeu9ubqgQVDMHuG5IipTiIYTkJVvCrUy0kDP4knxCIxdFL52luZJIcw__" alt="School Logo">
        </div>
        <h2>MENU</h2>
        <!-- Sidebar Menu Options -->
        <a href="{{ url('/homework/create') }}">Homework</a> <!-- Added the link to the homework creation page -->
        <a href="{{ url('/events') }}">Events/Programs</a>
        <a href="{{ url('/hafazan') }}">Hafazan & Tilawah</a>
        <a href="{{ url('/notifications') }}">Notification</a>
        <a href="{{ url('/students') }}">Students List</a>
        <a href="{{ url('/calendar') }}">Calendar</a>
    </div>
    <div class="content">
        <!-- Add decorative shapes -->
        <div class="decorative-circle"></div>
        <div class="decorative-rectangle"></div>
        
        <!-- Content Area Box -->
        <div class="content-box">
            @yield('content') <!-- Dynamically inject content -->
        </div>
    </div>
</body>
</html>
