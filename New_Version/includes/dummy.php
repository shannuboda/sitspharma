<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Slideshow</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.slideshow-container {
    position: relative;
    max-width: 100%;
    margin: auto;
    overflow: hidden;
}

.slide {
    display: none;
    position: relative;
}

.fade {
    animation-name: fade;
    animation-duration: 1.5s;
}

@keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
}

img {
    vertical-align: middle;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.text-box {
    max-width: 600px;
}

.text-box h2 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.text-box h1 {
    font-size: 2em;
    margin-bottom: 20px;
}

.search-box {
    display: flex;
    align-items: center;
}

.search-box input[type="text"] {
    padding: 10px;
    font-size: 16px;
    border: none;
    border-radius: 5px 0 0 5px;
    width: 80%;
}

.search-box button {
    padding: 10px;
    font-size: 16px;
    border: none;
    background-color: #f44336;
    color: white;
    border-radius: 0 5px 5px 0;
    cursor: pointer;
}

.search-box button:hover {
    background-color: #d32f2f;
}

.prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
}

.next {
    right: 0;
    border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
}

@media (max-width: 768px) {
    .text-box h2 {
        font-size: 1.2em;
    }

    .text-box h1 {
        font-size: 1.5em;
    }

    .search-box input[type="text"] {
        width: 70%;
    }
}

@media (max-width: 480px) {
    .text-box h2 {
        font-size: 1em;
    }

    .text-box h1 {
        font-size: 1.2em;
    }

    .search-box input[type="text"] {
        width: 60%;
    }
}

    </style>
</head>
<body>
    <div class="slideshow-container">

        <div class="slide fade">
            <img src="../images/1.PNG" style="width:100%">
            <div class="overlay">
                <div class="text-box">
                    <h2>One of the most reputed nursing college in Karnataka</h2>
                    <h1>Start learning with us now</h1>
                    <div class="search-box">
                        <input type="text" placeholder="Search courses...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add more slides as needed -->

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <script src="script.js"></script>
    <script>
let slideIndex = 0;
showSlides();

function showSlides() {
    let slides = document.getElementsByClassName("slide");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 5000); // Change image every 5 seconds
}

function plusSlides(n) {
    slideIndex += n - 1;
    showSlides();
}

    </script>
</body>
</html>
