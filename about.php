
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="https://kit.fontawesome.com/a59b9b09ab.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="css/about.css">
</head>


<body>
<?php 
include("./includes/header.php");
 ?>

 <div class="about-main container d-flex align-items-center justify-content-center flex-wrap">
 <h1 class="text-center about-us">ABOUT US</h1>
 <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled-2.jpg" class="rounded img-fluid p-4" alt="...">
 <br>
 <p class="text-center">The Ramaiah Group of Institutions was founded by Late Founder Chairman, Sri. M. S. Ramaiah. The group runs 29 institutions in Education and Healthcare which are housed on a 70-acre campus in the heart of Bengaluru city.</p>
 <p class="text-center">Ramaiah Institute of Nursing Education and Research, under the aegis of “Gokula Education Foundation”, was established in 1987. RINER is a constituent unit of Ramaiah University of Applied Sciences (RUAS)-A state private university and is recognized by the Indian Nursing Council of (INC).</p>

    <h3 class="text-center nursing-programs">Nursing Programmes</h3>
<p class="text-center">The undergraduate nursing programme provide the educational foundation to prepare the next generation of nursing professionals. The undergraduate nurses of our institution are preferred by the biggest of hospitals in India and are picked up by overseas recruiters as the students possess broad knowledge and efficient clinical skill in rendering patient care. The postgraduates are well equipped to take up leadership and administrative roles.</p>

<br>
<button class="btn-1">Start Learning Now</button>
</div>
<div class="tie-ups p-3 mb-2 bg-light text-dark d-flex justify-content-evenly">
    <div class="card">
        <div class="card-img">
            <img src="https://msriner.com/wp-content/uploads/2020/09/maintenance.png" alt="International Tie-Ups" draggable="false">
        </div>
        <h2>INTERNATIONAL TIE-UPS</h2>
        <span>We conduct need based short courses for the nurses working in our parent hospital and other hospitals regularly. In 2019, we conducted a capacity building programme for 19 nurses working with TATA coffee estates of Coorg and Haasan districts of Karnataka.</span>
    </div>

    <div class="card">
        <div class="card-img">
            <img src="https://msriner.com/wp-content/uploads/2020/09/book.png" alt="Industry Tie-Ups" draggable="false">
        </div>
        <h2>INDUSTRY TIE-UPS</h2>
        <span>We have signed an MOU with Montana State University, USA to conduct student and faculty exchange programmes. We are also looking forward to research collaboration with our international partners.</span>
    </div>
</div>
<br>

<div class="wrapper container">
<h1 class="text-center about-us">MEET THE BEST TEACHERS</h1>
<br>
      <i id="left" class="fa-solid fa-angle-left"></i>
      <ul class="carousel">
        <li class="card">
          <div class="img"><img src="images/img-1.jpg" alt="img" draggable="false"></div>
          <h2>Blanche Pearson</h2>
          <span>Sales Manager</span>
        </li>
        <li class="card">
          <div class="img"><img src="images/img-2.jpg" alt="img" draggable="false"></div>
          <h2>Joenas Brauers</h2>
          <span>Web Developer</span>
        </li>
        <li class="card">
          <div class="img"><img src="images/img-3.jpg" alt="img" draggable="false"></div>
          <h2>Lariach French</h2>
          <span>Online Teacher</span>
        </li>
        <li class="card">
          <div class="img"><img src="images/img-4.jpg" alt="img" draggable="false"></div>
          <h2>James Khosravi</h2>
          <span>Freelancer</span>
        </li>
        <li class="card">
          <div class="img"><img src="images/img-5.jpg" alt="img" draggable="false"></div>
          <h2>Kristina Zasiadko</h2>
          <span>Bank Manager</span>
        </li>
        <li class="card">
          <div class="img"><img src="images/img-6.jpg" alt="img" draggable="false"></div>
          <h2>Donald Horton</h2>
          <span>App Designer</span>
        </li>
      </ul>
      <i id="right" class="fa-solid fa-angle-right"></i>
    </div>
    <br>
    <br>
  
    <div class="section">
        <div class="content">
            <h1>We teach the art of caring through practice to perfect it</h1>
            <button>Learn More</button>
        </div>
        <div class="image">
            <img src="https://msriner.com/wp-content/uploads/2020/09/PHOTO-13-scaled.jpg" alt="Classroom Image">
        </div>
    </div>
<?php include('./includes/footer.php') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script>
   const wrapper = document.querySelector(".wrapper");
const carousel = document.querySelector(".carousel");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const arrowBtns = document.querySelectorAll(".wrapper i");
const carouselChildrens = [...carousel.children];

let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

// Get the number of cards that can fit in the carousel at once
let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to beginning of carousel for infinite scrolling
carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
    carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
});

// Insert copies of the first few cards to end of carousel for infinite scrolling
carouselChildrens.slice(0, cardPerView).forEach(card => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
});

// Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
carousel.classList.add("no-transition");
carousel.scrollLeft = carousel.offsetWidth;
carousel.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carousel left and right
arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
    });
});

const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
    // Records the initial cursor and scroll position of the carousel
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return; // if isDragging is false return from here
    // Updates the scroll position of the carousel based on the cursor movement
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
    carousel.classList.remove("dragging");
}

const infiniteScroll = () => {
    // If the carousel is at the beginning, scroll to the end
    if(carousel.scrollLeft === 0) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
        carousel.classList.remove("no-transition");
    }
    // If the carousel is at the end, scroll to the beginning
    else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");
    }

    // Clear existing timeout & start autoplay if mouse is not hovering over carousel
    clearTimeout(timeoutId);
    if(!wrapper.matches(":hover")) autoPlay();
}

const autoPlay = () => {
    if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
    // Autoplay the carousel after every 2500 ms
    timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
}
autoPlay();

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrapper.addEventListener("mouseleave", autoPlay);
</script>
</body>
</html>