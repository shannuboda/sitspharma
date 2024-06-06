<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style.css">
    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Responsive Navigation Menu Bar</title>
    <style>
        /* ===== Google Font Import - Poppins ===== */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
      

        /* ===== Colours ===== */
        :root {
            --body-color: #E4E9F7;
            --nav-color: #3b1d64;
            --side-nav: #3b1d64;
            --text-color: #FFF;
            --search-bar: #F2F2F2;
            --search-text: #010718;
        }

      

        nav {
            position: fixed;
            top: 0;
            left: 0;
            height: 70px;
            width: 100%;
            background-color: var(--nav-color);
            z-index: 100;
        }

        body.dark nav {
            border: 1px solid #393838;
        }

        nav .nav-bar {
            position: relative;
            height: 100%;
            max-width: 1350px;
            width: 100%;
            background-color: var(--nav-color);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        nav .nav-bar .sidebarOpen {
            color: var(--text-color);
            font-size: 30px;
            padding: 10px;
            cursor: pointer;
            display: none;
        }

        nav .nav-bar .logo a {
            font-size: 25px;
            font-weight: 500;
            color: var(--text-color);
            text-decoration: none;
        }

        .menu .logo-toggle {
            display: none;
        }

        .nav-bar .nav-links {
            display: flex;
            align-items: center;
        }

        .nav-bar .nav-links li {
            margin: 0 5px;
            list-style: none;
            position: relative;
        }

        @media screen and (min-width: 1216px) and (max-width: 1366px) {
            .nav-bar .nav-links li {
                margin: 0px !important;
            }
        }

        .nav-links li a {
            position: relative;
            font-size: 14px;
            font-weight: 400;
            color: var(--text-color);
            text-decoration: none;
            padding: 8px;
            margin-left: 0.5rem;
        }

       
    

        .nav-links li .sub-menu {
            display: none;
            position: absolute;
            background-color: var(--side-nav);
            top: 100%;
            left: 0;
            padding: 10px 0;
            border-radius: 5px;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.1);
        }

        .nav-links li .sub-menu li {
            margin: 0;
        }

        .nav-links li .sub-menu li a {
            padding: 10px 20px;
            font-size: 14px;
            white-space: nowrap;
        }

        .nav-links li:hover .sub-menu {
            display: block;
        }

        .nav-bar .darkLight-searchBox {
            display: flex;
            align-items: center;
        }

        @media screen and (max-width: 1024px) {
            .nav-links li a {
                font-size: 9px;
            }
        }

        @media (max-width: 790px) {
            nav .nav-bar .sidebarOpen {
                display: block;
            }

            .menu {
                position: fixed;
                height: 100%;
                width: 320px;
                left: -100%;
                top: 0;
                padding: 20px;
                background-color: var(--side-nav);
                z-index: 100;
                transition: all 0.4s ease;
                overflow-x: scroll;
            }

            nav.active .menu {
                left: 0;
            }

            nav.active .nav-bar .navLogo a {
                opacity: 0;
                transition: all 0.3s ease;
            }

            .menu .logo-toggle {
                display: block;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .logo-toggle .siderbarClose {
                color: var(--text-color);
                font-size: 30px;
                cursor: pointer;
            }

            .nav-bar .nav-links {
                flex-direction: column;
                padding-top: 30px;
            }

            .nav-links li a {
                display: block;
                margin-top: 10px;
                font-size: 1.5rem;
            }

            .nav-links li .sub-menu {
                position: static;
                box-shadow: none;
                background-color: transparent;
                padding: 0;
            }

            .nav-links li .sub-menu li a {
                font-size: 1.2rem;
                padding: 10px 20px;
            }

            .nav-links li:hover .sub-menu {
                display: none;
            }

            .nav-links li.active .sub-menu {
                display: block;
            }

            .nav-links li .dropdown-toggle {
                cursor: pointer;
                display: inline-block;
                font-size: 1.2rem;
                margin-left: 5px;
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen'></i>
            <div class="menu">
                <div class="logo-toggle">
                    <i class='bx bx-x siderbarClose'></i>
                </div>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="committee.php">Committee</a></li>
                    <li>
                        <a href="#">Call for Papers <span class="dropdown-toggle">+</span></a>
                        <ul class="sub-menu">
                            <li><a href="#">Submission Guidelines</a></li>
                            <li><a href="#">Topics</a></li>
                            <li><a href="#">Important Dates</a></li>
                        </ul>
                    </li>
                    <li><a href="cos.php">Call for Sponsors</a></li>
                    <li><a href="impDates.php">Important Dates</a></li>
                    <li><a href="registration.php">Registration</a></li>
                    <li><a href="keynote.php">Keynote</a></li>
                    <li><a href="acceptedpapers.php">Accepted Papers</a></li>
                    <li>
                        <a href="#">Publications <span class="dropdown-toggle">+</span></a>
                        <ul class="sub-menu">
                            <li><a href="#">Journal</a></li>
                            <li><a href="#">Conference Proceedings</a></li>
                        </ul>
                    </li>
                    <li><a href="downloads.php">Downloads</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
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
            if (!clickedElm.classList.contains("sidebarOpen") && !clickedElm.closest(".menu") && !clickedElm.closest(".nav-bar")) {
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
