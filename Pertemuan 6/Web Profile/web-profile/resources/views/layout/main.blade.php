<!DOCTYPE html>
<html>
<head>
    <title>Web Profile Daffa</title>

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #f4f6f9;
        }

        /* NAVBAR */
        nav {
            background: #1f2a36;
            padding: 15px;
            position: sticky;
            top: 0;
        }

        nav a {
            color: white;
            margin-right: 20px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        nav a:hover {
            color: #00adb5;
        }

        /* CONTAINER */
        .container {
            padding: 30px;
        }

        /* CARD */
        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        /* PROFILE */
        .profile {
            text-align: center;
        }

        .profile img {
            width: 120px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        h1 {
            margin-bottom: 5px;
        }

        /* LIST */
        ul {
            padding-left: 20px;
        }

        /* FADE ANIMATION */
        .fade {
            animation: fadeIn 0.8s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>

</head>
<body>

<nav>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/skills">Skills</a>
    <a href="/experience">Experience</a>
</nav>

<div class="container fade">
    @yield('content')
</div>

</body>
</html>