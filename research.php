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
    <style>
    .about-main {
        margin-top: 4rem !important;
    }

    .about-us {
        text-decoration-line: underline;
        text-decoration-style: wavy;
        color: #9f225b;

    }

    .about-main h5 {
        text-align: center;
        line-height: 3rem;
    }

    #myTabContent {
        background: gray;
        padding: 2rem;
        color: white;
    }

    .sec-2-1 {
        background-color: #F5A278;
        padding: 64px;
        text-align: center;
        color: aliceblue;

    }

    /* For tablet view */
    @media (min-width: 420px) and (max-width: 768px) {
        div[style] {
            padding: 15px;
        }

        h1 {
            font-size: 24px;
        }

        button[style] {
            padding: 8px 15px;
        }
    }
    </style>
</head>

<body>

    <?php include('includes/header.php'); ?>
    <div class="about-main container d-flex align-items-center justify-content-center flex-wrap">
        <h1 class="text-center about-us">RESEARCH</h1>
        <br>
        <h5>
            We aim at generating new knowledge and demonstrate high standards of excellence in research for a global
            society. The faculty and students have a number of ongoing funded and non-funded research projects in hand.
        </h5>
        <br>
        <ul class="nav nav-tabs tab-headings" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                    role="tab" aria-controls="home" aria-selected="true">Community Health Nursing</button>
            </li>

            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                    role="tab" aria-controls="contact" aria-selected="false">International Student Exchange
                    Programme</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Lorem ipsum
                dolor sit amet consectetur adipisicing elit. Voluptas, dolore obcaecati sequi eos quasi sapiente animi
                minima perferendis mollitia corrupti ducimus sint soluta repellendus provident voluptatibus, architecto
                harum omnis? Nostrum optio vitae quis architecto veniam laudantium voluptatibus quam molestiae, incidunt
                cupiditate, fuga ab atque accusantium maxime, sint rem maiores eos. Veritatis facere similique
                consectetur quo dolores? Mollitia quia eaque hic perferendis tenetur vel quis. Fuga earum natus deleniti
                doloremque tenetur quia atque unde voluptate est consequuntur, ipsum aperiam provident dolor suscipit,
                asperiores repellendus ea hic ex aliquam excepturi nemo beatae amet eveniet commodi. Impedit, natus aut?
                Asperiores beatae quidem hic accusamus delectus iste vitae aperiam odio tenetur modi sapiente dolor
                cupiditate suscipit rem corrupti, itaque esse dolorum aliquid sed soluta pariatur? Distinctio sit nulla
                iure minus dolorem esse velit totam facere, eos excepturi perspiciatis iste similique recusandae maxime
                itaque! Similique beatae ratione placeat unde reiciendis minima sunt laboriosam, corrupti enim repellat
                odio harum ipsum, ex nostrum quisquam quos distinctio. Eius aliquam corrupti quia impedit cupiditate
                nemo doloribus obcaecati neque voluptate sint esse sunt quos officia, deserunt ut corporis unde, optio
                in porro incidunt molestias illo! Consectetur voluptatum, aperiam ratione sed recusandae odit soluta in?
                Qui, beatae perferendis provident ex soluta voluptates error suscipit adipisci eius consectetur nisi
                modi eaque tenetur distinctio molestias, dolores libero alias consequatur cumque. Perferendis laboriosam
                rem magnam autem vel, alias ea nihil voluptatem illum adipisci delectus quod quae temporibus ut possimus
                sit soluta, ad sed, cumque corporis vero. Ut beatae quaerat inventore quod in sequi veniam ratione quos
                magnam doloribus consequuntur, assumenda accusamus fugit nobis necessitatibus, impedit, debitis velit.
                Delectus voluptatem officiis soluta! Ducimus laborum itaque voluptate, at quis, incidunt dignissimos
                quos exercitationem nam nostrum omnis, odio rerum accusantium nulla dolorem suscipit inventore! Quaerat
                placeat dolores, recusandae maxime deleniti quia corrupti quas accusantium temporibus tempora officiis.
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Lorem ipsum dolor, sit
                amet consectetur adipisicing elit. Natus, inventore eius esse est aspernatur beatae porro amet vitae
                obcaecati dolorum sit aperiam aut, doloribus molestias quam laborum ad architecto tenetur rem? Quas
                quibusdam numquam consequuntur, aspernatur, quo nihil perferendis voluptatem nemo placeat sed nesciunt
                obcaecati doloremque earum nulla animi expedita nostrum neque delectus eos non totam! Quae nam,
                doloremque porro odio in illum ex! Necessitatibus quia aliquid culpa quae porro laboriosam minima,
                minus, exercitationem deserunt eum ducimus excepturi ad amet quos at illo unde nobis quas maiores eius
                commodi ex. Odio debitis doloribus iste, ad aut, facere corrupti, vel deserunt enim placeat eos ab alias
                in quaerat hic vitae quod officia eius adipisci minus fuga quibusdam voluptatum? Consequuntur distinctio
                odit voluptatem eaque at iste consectetur minus enim, veniam, natus aperiam? Consectetur assumenda vero
                sit accusantium eligendi, deserunt officia temporibus harum a reprehenderit iste at asperiores excepturi
                obcaecati consequuntur molestiae illum? Nesciunt dicta explicabo modi nobis beatae! Nobis, quisquam!
                Doloribus quidem a eveniet minus debitis consequatur inventore eaque, illum temporibus exercitationem
                vero praesentium ad eum assumenda perferendis, libero, odit architecto est ducimus fuga fugiat modi?
                Officia nobis beatae maiores, debitis dignissimos fugit nam error quas. Sit, maiores incidunt repellat
                deserunt quas dolor deleniti adipisci! Delectus sed odio saepe est consequuntur repudiandae corrupti et
                deleniti. Eos error dignissimos saepe! Doloremque eveniet obcaecati laudantium fugiat inventore
                praesentium dignissimos quia aperiam aliquid ad illo aspernatur, ducimus deserunt doloribus repellendus
                eligendi. Obcaecati, repellendus nisi nostrum eligendi eum cumque facilis non adipisci incidunt tempora
                iure ipsam sequi cum veritatis, cupiditate, soluta temporibus consectetur quisquam quas voluptatum
                dolorum doloremque velit et. Itaque, voluptatibus voluptas! Perspiciatis ad ducimus eligendi quisquam
                totam, maxime et nulla fuga nam neque fugiat, assumenda quia rem commodi similique, aut vitae quibusdam
                quae illo voluptatum? Provident, tempore enim libero quaerat nemo dolore nam illum.</div>
        </div>
    </div>


    <br>
    <div class="sec-2">
        <div class="sec-2-1">
            <h1>Preparing nurses with sound knowledge and efficient clinical skills</h1>
            <button
                style="background-color: #5A4993; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Visit
                Our Research Page</button>
        </div>
        <?php include('includes/footer.php'); ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

</body>

</html>