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
  <link rel="stylesheet" href="css/photo-gallery.css">
  <style>
    .about-main{
  margin-top: 4rem!important;
}
</style>
</head>
<?php include('includes/header.php'); ?>
<div class="about-main container ">
 <h1 class="text-center about-us">Event Name</h1>
 <div class="gallery">
 <div class="gallery-item"><img src="https://picsum.photos/300?random=1" alt="Image 1" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://picsum.photos/300?random=2" alt="Image 2" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://picsum.photos/300?random=3" alt="Image 3" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://picsum.photos/300?random=4" alt="Image 4" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://picsum.photos/300?random=5" alt="Image 5" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://picsum.photos/300?random=6" alt="Image 6" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://picsum.photos/300?random=7" alt="Image 7" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://picsum.photos/300?random=8" alt="Image 8" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://picsum.photos/300?random=9" alt="Image 9" onclick="openModal(this)"></div>
        <div class="gallery-item"><img src="https://picsum.photos/300?random=10" alt="Image 10" onclick="openModal(this)"></div>
   </div>

    <div id="myModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="modalImage">
    </div>

</div>
<?php include('includes/footer.php'); ?>
<script>
    // script.js
function openModal(element) {
    document.getElementById("myModal").style.display = "block";
    document.getElementById("modalImage").src = element.src;
}

function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

</script>
<body>
    
</body>
</html>