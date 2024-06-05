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
  <style>
    .about-us{
      text-decoration-line:underline;
    text-decoration-style: wavy;
      color:#9f225b;
  
  }

  @keyframes slide {
  from {
    transform: translateX(0);
  }
  to {
    transform: translateX(-100%);
  }
}

.logos {
  overflow: hidden;
  padding: 60px 0;
  background: white;
  white-space: nowrap;
  position: relative;
}

.logos:before,
.logos:after {
  position: absolute;
  top: 0;
  width: 250px;
  height: 100%;
  content: "";
  z-index: 2;
}

.logos:before {
  left: 0;
}

.logos:after {
  right: 0;
}

.logos:hover .logos-slide {
  animation-play-state: paused;
}

.logos-slide {
  display: inline-block;
  animation: 35s slide infinite linear;
}

.logos-slide img {
  height: 120px;
  margin: 0 40px;
}
.about-main h5{
    text-align: justify;
    line-height: 3rem;
}
.location-map{
                display:flex;
                margin-left:auto;
                margin-right:auto;
            }
  </style>
</head>
<?php include('includes/header.php'); ?>
<div class="about-main container d-flex align-items-center flex-column justify-content-center ">
 <h1 class="text-center about-us">PLACEMENTS</h1>
 <br>
 <h5>
 We have consistently maintained an excellent placement record offering 100% placements to our students across India. Our training & placement department understands the industry trend and has tailored its liasoning policies with corporate hospitals. The students are also placed at Ramaiah hospitals. Some of the corporate hospitals that have recruited our students are Columbia Asia Hospitals, Medanta Medicity, Fortis, Apollo, HCG, for their hospitals in Delhi, Kolkata, Chennai, Bangalore etc.
 </h5>
</div>


<div class="logos">
      <div class="logos-slide">
        <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled5.jpg" />
        <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled4.jpg" />
        <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled-1.jpg" />
        <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled.jpg" />
        <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled2.jpg" />
        <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled3.jpg" />
        <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled5.jpg" />
        <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled4.jpg" />
        <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled-1.jpg" />
        <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled.jpg" />
        <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled2.jpg" />
        <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled3.jpg" />
      </div>

      <div class="logos-slide">
      <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled5.jpg" />
        <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled4.jpg" />
        <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled-1.jpg" />
        <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled.jpg" />
        <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled2.jpg" />
        <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled3.jpg" />
        <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled5.jpg" />
        <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled4.jpg" />
        <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled-1.jpg" />
        <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled.jpg" />
        <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled2.jpg" />
        <img src="https://msriner.com/wp-content/uploads/2021/01/Untitled3.jpg" />
      </div>
    </div>
 

    <div class="map-container">
           <!-- Map setup link below -->
        <!-- https://www.embedmap.net/ -->
    <iframe
        width="520"
        height="400"
        frameborder="0"
        scrolling="no"
        marginheight="0"
        marginwidth="0"
        id="gmap_canvas"
        src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=NGO%20colony%20Kadapa+(Kadapa)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
    </iframe>
    <a href='https://www.acadoo.de/fachrichtungen/ghostwriter-medizin/'>Ghostwriter Medizin</a>
</div>
<script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=bf93d1a1fb0d411f69b61e224749a39b95c7e22e'></script>


    <!-- <div class="location-map">
     
    <iframe width="520" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=NGO%20colony%20Kadapa+(Kadapa)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='https://www.acadoo.de/fachrichtungen/ghostwriter-medizin/'>Ghostwriter Medizin</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=bf93d1a1fb0d411f69b61e224749a39b95c7e22e'></script>
    </div> -->

<?php include('includes/footer.php'); ?>
<body>
    
</body>
</html>