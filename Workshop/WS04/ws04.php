<?php
$name = 'Иннокентий';
$city = 'Москва';
$profession = 'Дизайнер';
$email = 'email@email.com';
$phone = 89037778866;

$skills = [
    [
        'name' => 'Фотошоп',
        'percent' => 30,
    ],
    [
        'name' => 'Иллюстратор',
        'percent' => 70,
    ],
    [
        'name' => 'Медиа',
        'percent' => 40,
    ],
    [
        'name' => 'Java Script, PHP',
        'percent' => 50,
    ],
];

$experience = [
    [
        'title' => 'Front End Разработчик',
        'startdate' => 'Январь-2015',
        'enddate' => 'По настоящее время',
        'description' => 'Создание пользовательского интерфейса сайтов, приложений и ПО. Компания А.',
    ],
    [
        'title' => 'Web Разработчик',
        'startdate' => 'Март-2012',
        'enddate' => 'Декабрь-2014',
        'description' => 'Разработка и поддержка веб-приложений: сайтов, сервисов, различных платформ.Компания Б.',
    ],
    [
        'title' => 'Графический дизайнер',
        'startdate' => 'Июнь-2010',
        'enddate' => 'Март-2012',
        'description' => 'Разработка проектов художественного оформления, эскизы и визуализация концепций дизайна Web-интерфейсов. Компания В.',
    ],
    [
        'title' => 'HTML-верстальщик ',
        'startdate' => 'Июнь-2010',
        'enddate' => 'Февраль - 2012',
        'description' => 'Создание HTML-шаблонов для сайтов. Компания С.',
    ],
];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" nonce="6c4b22d93ab34a06aa280d8eafe"
        src="//local.adguard.org?ts=1673448733449&amp;type=content-script&amp;dmn=s838sas.storage.yandex.net&amp;pth=%2Frdisk%2Fec291268dac8234c344a9dbf700e7eb044cdfb25fb8798391afe65c7652cdddd%2F63bf0b96%2FvDC5b3GvGBFvwyYfZYtKrGS1NaHEQDCkCnqQ4ifg--RZk1j3mBhsCY09wJMGS6h3nRZNd9gsrdfa1-MS_T4tRw%3D%3D%3Fuid%3D990750426%26filename%3Dcv.html%26disposition%3Dattachment%26hash%3D%26limit%3D0%26content_type%3Dtext%252Fhtml%26owner_uid%3D990750426%26fsize%3D6635%26hid%3Dbff0f7b497b4d2f196f44728221d9d18%26media_type%3Ddevelopment%26tknv%3Dv2%26etag%3Dade2b95bb871a7a02d27449a88021065%26rtoken%3DObtSUL0Snd5J%26force_default%3Dyes%26ycrid%3Dna-9fc70d26e04dc7e8e5594117e39972c8-downloader20h%26ts%3D5f201de899180%26s%3D3d98f560985edc3ce2cea780e1d0259fe9b7984bed044be27bfb78bfd64d0344%26pb%3DU2FsdGVkX1_a6MhjroC0voiVv2ZT1Lxy1nyTgKuR3-ta_X1FdcNo4gMtqb4MrSjAHVPHvPaQDelGia5cnd1YqouT2fkKhEx7rRQ9m55_3Wc&amp;app=browser.exe&amp;css=3&amp;js=1&amp;rel=1&amp;rji=1&amp;sbe=1"></script>
    <script type="text/javascript" nonce="6c4b22d93ab34a06aa280d8eafe"
        src="//local.adguard.org?ts=1673448733449&amp;name=AdGuard%20Extra&amp;name=AdGuard%20Popup%20Blocker&amp;type=user-script"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Jost', sans-serif;
        }
    </style>
</head>

<body class="w3-light-grey">

    <!-- Page Container -->
    <div class="w3-content w3-margin-top" style="max-width:1400px;">

        <!-- The Grid -->
        <div class="w3-row-padding">

            <!-- Left Column -->
            <div class="w3-third">

                <div class="w3-white w3-text-grey w3-card-4">
                    <div class="w3-display-container">
                        <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp"
                            style="width:100%" alt="Avatar">
                        <div class="w3-display-bottomleft w3-container w3-text-black">
                            <h2>
                                <?php echo $name; ?>
                            </h2>
                        </div>
                    </div>
                    <div class="w3-container">
                        <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $profession; ?></p>
                        <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>
                            <?php echo $city; ?>
                        </p>
                        <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>
                            <?php echo $email; ?>
                        </p>
                        <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>
                            <?php echo $phone; ?>
                        </p>
                        <hr>

                        <p class="w3-large"><b><i
                                    class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
                        <?php for ($i = 0; $i < count($skills); $i++) : ?>
                            <p><?php echo $skills[$i]["name"]; ?></p>
                            <div class="w3-light-grey w3-round-xlarge w3-small">
                                <div class="w3-container w3-center w3-round-xlarge w3-teal"
                                    style="width:<?php echo $skills[$i]["percent"]; ?>%">
                                    <?php echo $skills[$i]["percent"]; ?>
                                </div>
                            </div>
                        <?php endfor; ?>
                        <br>

                        <p class="w3-large w3-text-theme"><b><i
                                    class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
                        <p>Английский</p>
                        <div class="w3-light-grey w3-round-xlarge">
                            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
                        </div>
                        <p>Испанский</p>
                        <div class="w3-light-grey w3-round-xlarge">
                            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
                        </div>
                        <p>Немецкий</p>
                        <div class="w3-light-grey w3-round-xlarge">
                            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
                        </div>
                        <br>
                    </div>
                </div><br>

                <!-- End Left Column -->
            </div>

            <!-- Right Column -->
            <div class="w3-twothird">

            <div class="w3-container w3-card w3-white w3-margin-bottom">
                    <h2 class="w3-text-grey w3-padding-16"><i
                            class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
                    <div class="w3-container">
                        <?php for ($i = 0; $i < count($experience); $i++): ?>
                            <h5 class="w3-opacity"><b><?php echo $experience[$i]['title']; ?></b></h5>
                            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
                                <?php echo $experience[$i]['startdate']; ?> - <span><?php echo $experience[$i]['enddate']; ?></span>
                            </h6>
                            <p>
                                <?php echo $experience[$i]['description']; ?>
                            </p>
                            <hr>
                        <?php endfor; ?>
                    </div>
                </div>
                

                <div class="w3-container w3-card w3-white">
                    <h2 class="w3-text-grey w3-padding-16"><i
                            class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>gb.ru</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
                        <p>Web Development! All I need to know in one place</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>London Business School</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
                        <p>Master Degree</p>
                        <hr>
                    </div>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b>School of Coding</b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
                        <p>Bachelor Degree</p><br>
                    </div>
                </div>

                <!-- End Right Column -->
            </div>

            <!-- End Grid -->
        </div>

        <!-- End Page Container -->
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-teal w3-center w3-margin-top">
        <p>Find me on social media.</p>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        <!-- End footer -->
    </footer>

</body>

</html>