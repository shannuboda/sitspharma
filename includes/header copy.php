<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Responsive Navigation Menu Bar</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            transition: all 0.4s ease;
        }
        :root {
            --body-color: #E4E9F7;
            --nav-color: #3b1d64;
            --side-nav: #010718;
            --text-color: #FFF;
            --search-bar: #F2F2F2;
            --search-text: #010718;
        }
        nav {
           
           
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
            font-size: 25px;
            padding: 5px;
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
            max-width: 100%;
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
        .nav-links li a::before {
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            transform: translateX(-50%);
            height: 6px;
            width: 6px;
            border-radius: 50%;
            background-color: var(--text-color);
            opacity: 0;
            transition: all 0.3s ease;
        }
        .nav-links li:hover a::before {
            opacity: 1;
        }
        .nav-bar .darkLight-searchBox {
            display: flex;
            align-items: center;
        }
        .darkLight-searchBox .dark-light,
        .darkLight-searchBox .searchToggle {
            height: 40px;
            width: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 5px;
        }
        .dark-light i,
        .searchToggle i {
            position: absolute;
            color: var(--text-color);
            font-size: 22px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .dark-light i.sun {
            opacity: 0;
            pointer-events: none;
        }
        .dark-light.active i.sun {
            opacity: 1;
            pointer-events: auto;
        }
        .dark-light.active i.moon {
            opacity: 0;
            pointer-events: none;
        }
        .searchToggle i.cancel {
            opacity: 0;
            pointer-events: none;
        }
        .searchToggle.active i.cancel {
            opacity: 1;
            pointer-events: auto;
        }
        .searchToggle.active i.search {
            opacity: 0;
            pointer-events: none;
        }
        .searchBox {
            position: relative;
        }
        .searchBox .search-field {
            position: absolute;
            bottom: -85px;
            right: 5px;
            height: 50px;
            width: 300px;
            display: flex;
            align-items: center;
            background-color: var(--nav-color);
            padding: 3px;
            border-radius: 6px;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.1);
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s ease;
        }
        .searchToggle.active ~ .search-field {
            bottom: -74px;
            opacity: 1;
            pointer-events: auto;
        }
        .search-field::before {
            content: '';
            position: absolute;
            right: 14px;
            top: -4px;
            height: 12px;
            width: 12px;
            background-color: var(--nav-color);
            transform: rotate(-45deg);
            z-index: -1;
        }
        .search-field input {
            height: 100%;
            width: 100%;
            padding: 0 45px 0 15px;
            outline: none;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 400;
            color: var(--search-text);
            background-color: var(--search-bar);
        }
        body.dark .search-field input {
            color: var(--text-color);
        }
        .search-field i {
            position: absolute;
            color: var(--nav-color);
            right: 15px;
            font-size: 22px;
            cursor: pointer;
        }
        body.dark .search-field i {
            color: var(--text-color);
        }
        .nav-links li .dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: var(--nav-color);
            padding: 10px 0;
            border-radius: 6px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            z-index: 100;
        }
        .nav-links li .dropdown li {
            width: 100%;
        }
        .nav-links li .dropdown li a {
            padding: 10px;
            width: 100%;
            display: block;
            color: var(--text-color);
            text-decoration: none;
        }
        .nav-links li:hover .dropdown {
            display: block;
        }
        @media screen and (max-width:1024px) {
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
                overflow-x:scroll;
            }
            nav.active .menu {
                left: -0%;
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
                font-size: 24px;
                cursor: pointer;
            }
            .nav-bar .nav-links {
                flex-direction: column;
                padding-top: 30px;
            }
            .nav-links li a {
                display: block;
                margin-top: 10px;
                font-size: 2.2rem;
            }
            .nav-links li .dropdown {
                position: static;
                background-color: var(--side-nav);
                box-shadow: none;
                padding: 0;
                border-radius: 0;
            }
            .nav-links li .dropdown li a {
                font-size: 1.8rem;
                padding: 15px;
            }
        }

        /* Other styles remain unchanged */

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
        overflow-x: auto;
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
        font-size: 24px;
        cursor: pointer;
    }
    .nav-bar .nav-links {
        flex-direction: column;
        padding-top: 30px;
    }
    .nav-links li {
        width: 100%;
    }
    .nav-links li a {
        display: block;
        margin-top: 10px;
        font-size: 2.2rem;
    }
    .nav-links li .dropdown {
        position: static;
        background-color: var(--side-nav);
        box-shadow: none;
        padding: 0;
        border-radius: 0;
        display: none; /* Hide dropdown by default */
    }
    .nav-links li .dropdown li a {
        font-size: 1.8rem;
        padding: 15px;
    }
    .nav-links li.active .dropdown {
        display: block; /* Show dropdown when parent li is active */
    }
}
.mq {
            overflow: hidden;
            white-space: nowrap;
            width: 100%; /* Adjust width as necessary */
            height: 50px; /* Adjust height as necessary */
            border: 1px solid #ccc;
            box-sizing: border-box;
            position: relative;
            background-color: #fff;
            padding: 5px;
        }
        .mq ul {
            color:#7f7fff;
            display: inline-block;
            padding: 0;
            margin: 0;
            list-style-type: none;
            animation: marquee 30s linear infinite;
        }
        .mq li {
            display: inline-block;
            margin-right: 10px; /* Adjust space between items as needed */
            white-space: nowrap; /* Prevent wrapping inside list items */
        }
        @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        .mq:hover ul {
            animation-play-state: paused;
        }

        .carousel-inner {
    position: relative;
    width: 100%;
    height: 23rem !important;
    overflow: hidden;
}
    </style>
</head>
<body style="display:flex;flex-direction: column">

<div class="">
<img src="https://lh5.googleusercontent.com/proxy/EOa3us5uxXAdrPGxIcWCs2DNKL6a3w49bpb7yGIUu83JQTWoX9aStabmBL0YZTiqGWRMUldSvc6J7tDqH1WPnNc3_NeGEzaql22ix-tYTy1DagKd-1k" alt="" srcset="" style="height: 6rem;">
</div>
    <nav style="">
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen'></i>
            <!-- <span class="logo navLogo"><a href="#">CodingLab</a></span> -->

            <div class="menu">
                <div class="logo-toggle">
                    <!-- <span class="logo"><a href="#">CodingLab</a></span> -->
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                   
                    <li>
                    <a href="#">Committee</a>
                        <ul class="dropdown">
                            <li><a href="subcommittee1.php">Subcommittee 1</a></li>
                            <li><a href="subcommittee2.php">Subcommittee 2</a></li>
                        </ul>
                    </li>
                    <li><a href="cop.php">Call for Papers</a></li>
                    <li><a href="cos.php">Call for Sponsors</a></li>
                    <li><a href="impDates.php">Important Dates</a></li>
                    <li><a href="registration.php">Registration</a></li>
                    <li><a href="keynote.php">Keynote</a></li>
                    <li><a href="acceptedpapers.php">Accepted Papers</a></li>
                    <li><a href="publications.php">Publications</a></li>
                    <li><a href="downloads.php">Downloads</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="mq" >
        <ul style="">
            <li>>><a href="">Lorem, ipsum.</a></li>
            <li>>>Lorem ipsum dolor sit.</li>
            <li>>>Lorem, ipsum.</li>
            <li>>>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus modi a ipsam.</li>
            <li>>>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic a reprehenderit molestiae iste! Fuga doloremque voluptate molestias culpa. Libero sed magni in?</li>
            <li>>>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam sit recusandae incidunt!</li>
            <li>>>Lorem.</li>
            <li>>>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore non odio perspiciatis.</li>
        </ul>
    </div>
    <script src="script.js"></script>
    <script>
const body = document.querySelector("body"),
      nav = document.querySelector("nav"),
      sidebarOpen = document.querySelector(".sidebarOpen"),
      siderbarClose = document.querySelector(".siderbarClose");

sidebarOpen.addEventListener("click", () => {
    nav.classList.add("active");
});

siderbarClose.addEventListener("click", () => {
    nav.classList.remove("active");
});

body.addEventListener("click", e => {
    let clickedElm = e.target;
    if (!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")) {
        nav.classList.remove("active");
    }
});

const navLinks = document.querySelectorAll('.nav-links > li');

navLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        const dropdown = link.querySelector('.dropdown');
        if (dropdown) {
            e.preventDefault();
            dropdown.classList.toggle('show');
            link.classList.toggle('active');
        }
    });
});

// Close dropdowns when clicking outside
body.addEventListener('click', (e) => {
    if (!e.target.closest('.nav-links > li')) {
        document.querySelectorAll('.nav-links > li .dropdown').forEach(dropdown => {
            dropdown.classList.remove('show');
        });
        document.querySelectorAll('.nav-links > li').forEach(link => {
            link.classList.remove('active');
        });
    }
});

    </script>
</body>
</html>
