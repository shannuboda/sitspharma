<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

.courses-section {
    text-align: center;
    padding: 50px 20px;
    background-color: white;
}

.section-title {
    font-size: 36px;
    color: #BA1F33;
    margin-bottom: 20px;
    position: relative;
}

.section-title::after {
    content: '';
    display: block;
    width: 50px;
    height: 3px;
    background-color: #BA1F33;
    margin: 10px auto 0;
}

.cards-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.card {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    max-width: 300px;
    transition: transform 0.2s;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    margin: 10px;
}

.card-image img {
    width: 100%;
    height: auto;
    display: block;
}

.card-content {
    padding: 20px;
    text-align: left;
    flex-grow: 1;
}

.card-content h2 {
    font-size: 20px;
    margin-bottom: 10px;
}

.card-content p {
    font-size: 16px;
    margin: 5px 0;
}

.card-footer {
    padding: 10px 20px;
    background-color: #BA1F33;
    text-align: center;
}

.preview-button {
    padding: 10px 20px;
    background-color: #5E35B1;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.preview-button:hover {
    background-color: #4527A0;
}

@media (max-width: 768px) {
    .cards-container {
        flex-direction: column;
        align-items: center;
    }

    .card {
        max-width: 90%;
    }
}

    </style>
</head>
<body>
    <section class="courses-section">
        <h1 class="section-title">Courses</h1>
        <div class="cards-container">
            <div class="card" style="border-bottom:2px solid red">
                <div class="card-image">
                    <img src="https://msriner.com/wp-content/uploads/2021/01/Capture-1.jpg" alt="General Nursing & Midwifery">
                </div>
                <div class="card-content">
                    <h2>General Nursing & Midwifery</h2>
                    <p>Intake: 60</p>
                    <p>Duration: 3 Years</p>
                    <button class="preview-button">Preview</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="https://msriner.com/wp-content/uploads/2020/09/POST_BASIC_NURSING.jpg" alt="B.Sc. Nursing">
                </div>
                <div class="card-content">
                    <h2>B.Sc. Nursing</h2>
                    <p>Intake: 100</p>
                    <p>Duration: 4 Years</p>
                    <button class="preview-button">Preview</button>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="https://msriner.com/wp-content/uploads/2020/09/POST_BASIC_NURSING.jpg" alt="B.Sc. (Post Basic) Nursing">
                </div>
                <div class="card-content">
                    <h2>B.Sc. (Post Basic) Nursing</h2>
                    <p>Intake: 30</p>
                    <p>Duration: 2 Years</p>
                    <button class="preview-button">Preview</button>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
