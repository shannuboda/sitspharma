<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Gallery</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/video.css">
</head>
<body>

<?php include('includes/header.php'); ?>

<div class="about-main container">
    <h1 class="text-center about-us">Virtual tour of our campus and college</h1>
    <div class="video-gallery row">
        <div class="col-md-6 gallery-item">
            <video src="http://msriner.com/wp-content/uploads/2021/01/Campus-1-1.mp4" controls onclick="openModal(this)"></video>
        </div>
    
        <div class="col-md-6 gallery-item">
            <video src="http://msriner.com/wp-content/uploads/2021/01/Clg-1.mp4" controls onclick="openModal(this)"></video>
        </div>
    
    </div>

    <div id="myModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <video class="modal-content" id="modalVideo" controls></video>
    </div>
</div>

<?php include('includes/footer.php'); ?>

<script>
    function openModal(element) {
        document.getElementById("myModal").style.display = "block";
        document.getElementById("modalVideo").src = element.src;
    }

    function closeModal() {
        document.getElementById("myModal").style.display = "none";
        document.getElementById("modalVideo").src = "";
    }
</script>

</body>
</html>
