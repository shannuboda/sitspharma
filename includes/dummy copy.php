<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

.hero-section {
    background-color: #7E57C2;
    color: white;
    text-align: center;
    padding: 50px 20px;
}

.hero-content h1 {
    margin: 0;
    font-size: 2em;
}

.enquiry-section {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 50px 20px;
    background-color: white;
}

.enquiry-content {
    max-width: 1200px;
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: flex-start;
}

.join-us {
    flex: 1;
    min-width: 300px;
    margin-bottom: 20px;
}

.join-us h2 {
    color: #BA1F33;
    font-size: 36px;
    margin-bottom: 10px;
}

.join-us p {
    color: #BA1F33;
    font-size: 20px;
    font-style: italic;
}

.enquiry-form-container {
    flex: 1;
    min-width: 300px;
    max-width: 400px;
    width: 100%;
    background-color: #FFFFFF;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.enquiry-form {
    display: flex;
    flex-direction: column;
}

.enquiry-form h3 {
    background-color: #7E57C2;
    color: white;
    padding: 10px;
    margin: -20px -20px 20px -20px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    text-align: center;
}

.enquiry-form input {
    width: calc(100% - 20px);
    padding: 10px;
    margin: 10px auto;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.enquiry-form button {
    width: calc(100% - 20px);
    padding: 10px;
    background-color: #E64A19;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    margin: 10px auto;
}

.enquiry-form button:hover {
    background-color: #D84315;
}

@media (max-width: 768px) {
    .enquiry-content {
        flex-direction: column;
        align-items: center;
    }

    .join-us, .enquiry-form-container {
        max-width: 100%;
        margin-bottom: 20px;
    }

    .hero-content h1 {
        font-size: 1.5em;
    }

    .join-us h2 {
        font-size: 28px;
    }

    .join-us p {
        font-size: 18px;
    }
}

@media (max-width: 480px) {
    .hero-content h1 {
        font-size: 1.2em;
    }

    .join-us h2 {
        font-size: 24px;
    }

    .join-us p {
        font-size: 16px;
    }

    .enquiry-form h3 {
        font-size: 18px;
    }

    .enquiry-form input, .enquiry-form button {
        width: calc(100% - 20px);
        margin: 10px auto;
    }
}


    </style>
</head>
<body>

<section class="hero-section">
        <div class="hero-content">
            <h1>We Train The Hands That Heal</h1>
        </div>
    </section>
    <section class="enquiry-section">
        <div class="enquiry-content">
            <div class="join-us">
                <h2>Join Us</h2>
                <p>We offer a dynamic, hands-on education.</p>
            </div>
            <div class="enquiry-form-container">
                <form class="enquiry-form">
                    <h3>Enquire Now</h3>
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Email Address" required>
                    <input type="tel" name="phone" placeholder="Phone Number" required>
                    <input type="text" name="subject" placeholder="Subject" required>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>