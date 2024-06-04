
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
</head>
<style>

.wrapper {
  
  width: 100%;
  position: relative;
}
.wrapper i {
  top: 50%;
  height: 50px;
  width: 50px;
  cursor: pointer;
  font-size: 1.25rem;
  position: absolute;
  text-align: center;
  line-height: 50px;
  background: #fff;
  border-radius: 50%;
  box-shadow: 0 3px 6px rgba(0,0,0,0.23);
  transform: translateY(-50%);
  transition: transform 0.1s linear;
}
.wrapper i:active{
  transform: translateY(-50%) scale(0.85);
}
.wrapper i:first-child{
  left: -22px;
}
.wrapper i:last-child{
  right: -22px;
}
.wrapper .carousel{
  display: grid;
  grid-auto-flow: column;
  grid-auto-columns: calc((100% / 3) - 12px);
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  gap: 16px;
  border-radius: 8px;
  scroll-behavior: smooth;
  scrollbar-width: none;
}
.carousel::-webkit-scrollbar {
  display: none;
}
.carousel.no-transition {
  scroll-behavior: auto;
}
.carousel.dragging {
  scroll-snap-type: none;
  scroll-behavior: auto;
}
.carousel.dragging .card {
  cursor: grab;
  user-select: none;
}
.carousel :where(.card, .img) {
  display: flex;
  justify-content: center;
  align-items: center;
}
.carousel .card {
  scroll-snap-align: start;
  height: 342px;
  list-style: none;
  background: #fff;
  cursor: pointer;
  padding-bottom: 15px;
  flex-direction: column;
  border-radius: 8px;
}
.carousel .card .img {
  background: #8B53FF;
  height: 148px;
  width: 148px;
  border-radius: 50%;
}
.card .img img {
  width: 140px;
  height: 140px;
  border-radius: 50%;
  object-fit: cover;
  border: 4px solid #fff;
}
.carousel .card h2 {
  font-weight: 500;
  font-size: 1.56rem;
  margin: 30px 0 5px;
}
.carousel .card span {
  color: #6A6D78;
  font-size: 1.31rem;
}
@media screen and (max-width: 900px) {
  .wrapper .carousel {
    grid-auto-columns: calc((100% / 2) - 9px);
  }
}
@media screen and (max-width: 600px) {
  .wrapper .carousel {
    grid-auto-columns: 100%;
  }
}



.about-main p{
    font-size:1.1rem;
    line-height:2rem;
}
.about-us{
    text-decoration-line:underline;
  text-decoration-style: wavy;
    color:#9f225b;

}

.nursing-programs{
    text-decoration-line: underline;
  text-decoration-style: wavy;
    color:#9f225b;

}
.btn-1{
    
    display: inline-block;
                outline: 0;
                cursor: pointer;
                border: none;
                padding: 0 66px;
                height: 45px;
                line-height: 45px;
                border-radius: 7px;
                background-color: #0070f3;
                color: white;
                font-weight: 400;
                margin-bottom:3rem;
                font-size: 16px;
                box-shadow: 0 4px 14px 0 rgb(0 118 255 / 39%);
                transition: background 0.2s ease,color 0.2s ease,box-shadow 0.2s ease;               
}
.btn-1:hover{
                    background: rgba(0,118,255,0.9);
                    box-shadow: 0 6px 20px rgb(0 118 255 / 23%);
                }

                .tie-ups {
    flex-wrap: wrap !important;
    align-items: stretch;
}

.tie-ups h2 {
    font-size: calc(1rem + 0.9vw);
}

.tie-ups .card {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 4rem;
    text-align: center;
    width: 30rem;
    text-wrap: wrap;
    margin: 0.3rem;
    box-sizing: border-box;
}

.tie-ups img {
    width: 12rem;
    height: 5rem;
    margin-bottom: 1rem;
}

</style>

<style>
.section {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #4B0082; /* Dark purple background */
    color: white;
    padding: 2rem;
    height: 100vh;
    box-sizing: border-box;
}

.content {
    max-width: 50%;
}

.content h1 {
    font-size: 2.5rem;
    margin: 0 0 1rem 25px;
}

.content button {
    background-color: #C2185B; /* Button color */
    color: white;
    border: none;
    padding: 0.75rem 3.5rem;
    font-size: 1rem;
    cursor: pointer;
    border-radius: 5px;
    margin-left: 2rem
}

.image img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
}

@media (max-width: 768px) {
    .section {
        flex-direction: column;
        text-align: center;
        height: auto;
    }

    .content {
        max-width: 100%;
    }

    .content h1 {
        font-size: 2rem;
    }

    .content button {
        font-size: 1rem;
        padding: 0.5rem 1rem;
    }

    .image {
        margin-top: 1rem;
    }

    .image img {
        width: 80%;
        height: auto;
    }
}

@media (max-width: 480px) {
    .content h1 {
        font-size: 1.5rem;
    }

    .content button {
        font-size: 0.875rem;
        padding: 0.5rem 1rem;
    }
}
    </style>
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