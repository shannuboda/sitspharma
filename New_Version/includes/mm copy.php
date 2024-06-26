<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Header with Sub-Headers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #4b2e83; /* Your header color */
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 16px;  
            border: none;
            outline: none;
            color: white;
            padding: 14px 20px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
            background-color: #ddd;
            color: black;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        @media screen and (max-width: 600px) {
            .navbar a, .navbar input[type="text"], .navbar a.dropbtn, .navbar a:hover, .dropdown-content a:hover {
                float: none;
                display: block;
                text-align: left;
            }
            .navbar a.dropbtn {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="#home">Home</a>
        <div class="dropdown">
            <button class="dropbtn">About 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#about-us">About Us</a>
                <a href="#team">Our Team</a>
                <a href="#careers">Careers</a>
            </div>
        </div> 
        <div class="dropdown">
            <button class="dropbtn">Academics 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#departments">Departments</a>
                <a href="#courses">Courses</a>
                <a href="#faculty">Faculty</a>
                <a href="#feedback">Student Feedback</a>
            </div>
        </div> 
        <a href="#admissions">Admissions</a>
        <a href="#activities">Activities</a>
        <a href="#community">Community Outreach</a>
        <a href="#placement">Placement</a>
        <a href="#research">Research</a>
        <a href="#alumni">Alumni</a>
        <a href="#news">News & Events</a>
        <a href="#career">Career</a>
    </div>
</body>
</html>
