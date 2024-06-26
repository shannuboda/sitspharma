<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Responsive Navigation Menu Bar</title>
    <style>
    .contact-label {
        background-color: #d84315;
        color: white;
        padding: 10px;
        display: flex;
        justify-content: space-around;
        align-items: center;
        height: 2rem;
    }

    .contact-info {
        display: flex;
        align-items: center;
    }

    .contact-info i {
        margin-right: 8px;
    }

    .social-media-icons {
        display: flex;
        gap: 10px;
    }

    .social-media-icons a {
        color: white;
        font-size: 20px;
        transition: color 0.3s ease;
    }

    .social-media-icons a:hover {
        color: #ffcc00;
    }

    @media screen and (max-width:768px) {
        .contact-label {
            display: none;
        }
    }
    </style>
</head>

<body style="display:flex;flex-direction: column">
    <div class="contact-label">
        <div class="contact-info">
            <i class="fas fa-envelope"></i> info@msriner.com
            <i class="fas fa-phone" style="margin-left: 20px;"></i> +9180-23604047
        </div>
        <div class="social-media-icons">
            <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
    <nav>

        <div class="nav-bar">
            <img src="http://msriner.com/wp-content/uploads/2019/05/color-logo.png" alt="" srcset=""
                style="height: 4rem;">

            <i class='bx bx-menu sidebarOpen'></i>
            <div class="menu">
                <div class="logo-toggle">
                    <i class='bx bx-x siderbarClose'></i>
                </div>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li>
                        <a href="#">About <span class="dropdown-toggle"></span></a>
                        <ul class="sub-menu">
                            <li><a href="about.php">About US</a></li>
                            <li><a href="administration.php">Administration</a></li>
                            <li><a href="facilities.php">Facilities</a></li>
                            <li><a href="affiliation.php">Affiliation</a></li>
                            <li><a href="annualreport.php">Annual Reports</a></li>
                            <li><a href="contactus.php">Contact US</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Academics <span class="dropdown-toggle"></span></a>
                        <ul class="sub-menu">
                            <li><a href="departments.php">Departments</a></li>
                            <li><a href="administration.php">Courses</a></li>
                            <li><a href="faculty.php">Faculty</a></li>
                            <li><a href="studentfeedback.php">Student Feedback</a></li>

                        </ul>
                    </li>

                    <li><a href="admission.php">Admissions</a></li>
                    <li><a href="outreach.php">Community Outreach</a></li>
                    <li><a href="placements.php">Placement</a></li>
                    <li><a href="research.php">Research</a></li>
                    <li><a href="departments.php">Alumini</a></li>
                    <li><a href="news&events.php">News & events</a></li>
                    <li><a href="careers.php">Careers</a></li>
                    <li>
                        <a href="#">Gallery <span class="dropdown-toggle"></span></a>
                        <ul class="sub-menu">
                            <li><a href="Photos.php">Photos</a></li>
                            <li><a href="video.php">Videos</a></li>
                        </ul>
                    </li>
                    <li><a href="enotice.php">E - Notice</a></li>
                </ul>
            </div>
        </div>

        <div class="mq">
            <ul>
                <li><i class="fa fa-arrow-right"></i> <a href="https://example.com/article1"
                        target="_blank">Understanding the Basics of Web Development</a></li>
                <li><i class="fa fa-arrow-right"></i> <a href="https://example.com/article2" target="_blank">A
                        Comprehensive Guide to CSS Grid Layout</a></li>
                <li><i class="fa fa-arrow-right"></i> <a href="https://example.com/article3" target="_blank">JavaScript
                        ES6 Features You Should Know</a></li>
                <li><i class="fa fa-arrow-right"></i> <a href="https://example.com/article4" target="_blank">How to
                        Optimize Your Website for SEO</a></li>
                <li><i class="fa fa-arrow-right"></i> <a href="https://example.com/article5" target="_blank">Top 10
                        JavaScript Libraries for Front-End Development</a></li>
                <li><i class="fa fa-arrow-right"></i> <a href="https://example.com/article6" target="_blank">The Future
                        of Web Development: Trends to Watch</a></li>
                <li><i class="fa fa-arrow-right"></i> <a href="https://example.com/article7" target="_blank">An
                        Introduction to Responsive Web Design</a></li>
                <li><i class="fa fa-arrow-right"></i> <a href="https://example.com/article8" target="_blank">How to Use
                        Flexbox for Modern Layouts</a></li>
            </ul>

        </div>
    </nav>


    <script src="script.js"></script>
    <script>
    const body = document.querySelector("body"),
        nav = document.querySelector("nav"),
        sidebarOpen = document.querySelector(".sidebarOpen"),
        sidebarClose = document.querySelector(".siderbarClose"),
        navLinks = document.querySelectorAll(".nav-links li");

    // JS code to toggle sidebar
    sidebarOpen.addEventListener("click", () => {
        nav.classList.add("active");
    });

    sidebarClose.addEventListener("click", () => {
        nav.classList.remove("active");
    });

    body.addEventListener("click", e => {
        let clickedElm = e.target;
        if (!clickedElm.classList.contains("sidebarOpen") && !clickedElm.closest(".menu") && !clickedElm
            .closest(".nav-bar")) {
            nav.classList.remove("active");
        }
    });

    // JS code to toggle sub-menu
    navLinks.forEach(link => {
        const dropdownToggle = link.querySelector(".dropdown-toggle");
        if (dropdownToggle) {
            dropdownToggle.addEventListener("click", () => {
                link.classList.toggle("active");
            });
        }
    });
    </script>
</body>

</html>