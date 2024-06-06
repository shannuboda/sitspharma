<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="https://kit.fontawesome.com/a59b9b09ab.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/admission.css">

    <style>
    .about-us {
        text-decoration-line: underline;
        text-decoration-style: wavy;
        color: #9f225b;

    }
    </style>
    <style>
    .about-main{
  margin-top: 4rem!important;
}
</style>

</head>
<?php include('includes/header.php'); ?>
<div class="about-main container d-flex align-items-center justify-content-center flex-wrap">
</div>

<section class="courses container">
    <h1><u>COURSES OFFERED</u></h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col course">
            <div class="card h-100">
                <img src="https://msriner.com/wp-content/uploads/2021/01/4a9a2e47ead90b205b3c44ed64baae55.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">General Nursing & Midwifery</h5>
                    <div class="cc" style="display:flex;justify-content:space-between">
                        <p>
                            intake:60
                        </p>
                        <p>
                            Duration:3 years
                        </p>
                        <br>

                    </div>
                    <button class="course-btn">Preview</button>
                </div>
            </div>
        </div>
        <div class="col course">
            <div class="card h-100">
                <img src="https://msriner.com/wp-content/uploads/2021/01/4a9a2e47ead90b205b3c44ed64baae55.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">General Nursing & Midwifery</h5>
                    <div class="cc" style="display:flex;justify-content:space-between">
                        <p>
                            intake:60
                        </p>
                        <p>
                            Duration:3 years
                        </p>
                        <br>

                    </div>
                    <button class="course-btn">Preview</button>
                </div>
            </div>
        </div>
        <div class="col course">
            <div class="card h-100">
                <img src="https://msriner.com/wp-content/uploads/2021/01/4a9a2e47ead90b205b3c44ed64baae55.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">General Nursing & Midwifery</h5>
                    <div class="cc" style="display:flex;justify-content:space-between">
                        <p>
                            intake:60
                        </p>
                        <p>
                            Duration:3 years
                        </p>
                        <br>

                    </div>
                    <button class="course-btn">Preview</button>
                </div>
            </div>
        </div>
        <div class="col course">
            <div class="card h-100">
                <img src="https://msriner.com/wp-content/uploads/2021/01/4a9a2e47ead90b205b3c44ed64baae55.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">General Nursing & Midwifery</h5>
                    <div class="cc" style="display:flex;justify-content:space-between">
                        <p>
                            intake:60
                        </p>
                        <p>
                            Duration:3 years
                        </p>
                        <br>

                    </div>
                    <button class="course-btn">Preview</button>
                </div>
            </div>
        </div>
    </div>
</section>
<br>

<h1 class="text-center about-us">APPLY FOR THE ADMISSIONS</h1>
<br>
<div class="row container admn-form">

    <div class="col-12 col-lg-12 col-md-12 mr-left">

        <div id="accordion-3-a4" class="panel-collapse bg-acc " data-parent="#accordion-3">

            <div class="panel-body">
                <form action="send_email_grievance.php" method="POST" enctype="multipart/form-data" id="serform1"
                    name="enquiry">

                    <label for="fname">Full Name</label>
                    <input type="text" id="fname" name="fname" placeholder="Your Full Name..">

                    <label for="email">Email Id</label>
                    <input type="email" id="email" name="email" placeholder="Your Email">

                    <label for="phn">Phone Number</label>
                    <input type="text" id="phn" name="phn" placeholder="Phone Number..">
                    <label for="subject">Send Your Complaint</label>

                    <textarea id="subject" name="subject" placeholder="Write Complaint.."
                        style="height:200px"></textarea>

                    <input type="submit" name="submit" value="Submit">
                </form>


            </div>

        </div>
    </div>
</div>
</div>

<?php include('includes/footer.php'); ?>

<body>

</body>

</html>