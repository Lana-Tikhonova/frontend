<?php

/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);

/* Ваш адрес и тема сообщения */
$address = "frontend.lana@gmail.com";
$sub = "Сообщение с моего сайта";

/* Формат письма */
$mes = "Сообщение с сайта mad-coder.ru.\n
Имя отправителя: $name 
Электронный адрес отправителя: $email
Текст сообщения:
$message";


if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from = "Reply-To: $email \r\n";
if (mail($address, $sub, $mes, $from)) {
	header('Refresh: 5; URL=https://mad-coder.ru');
	echo '
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>    
        <div class="block">
            <p class="block__text">Письмо успешно отправленно.</p>
            <p class="block__text_two">через 5 секунд вы вернетесь на страницу</p>
            <img src="./img/icon-img-6.svg" alt="" class="block__img">
        </div>
        <style>
            * {
                box-sizing: border-box;
            }

            body {
                background-color: #E5E5E5;
                display: flex;
                align-items: center;
                justify-content: center;
                font-family: Tahoma, "Geneva", sans-serif;
            }

            .block {
                width: 350px;
                height: 300px;
                background-color: #242C34;
                color: #E5E5E5;
                border-radius: 20px;
                padding: 30px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            .block__text {
                color: inherit;
                font-size: 35px;
                line-height: 40px;
                margin: 0;
                font-weight: 700;
            }

            .block__text_two {
                margin: 0;
                margin-top: 10px;
            }

            .block__img {
                width: 300px;
                position: absolute;
                bottom: -20px;
                right: 50%;
                margin-right: -150px;
            }

            @media screen and (max-width: 440px) {
                .block {
                    width: 300px;
                    padding: 20px 23px;
                }

                .block__text {
                    font-size: 29px;
                    line-height: 35px;
                }

                .block__img {
                    width: 262px;
                    margin-right: -143px;
                }
            }
        </style>
    </body>
';}
else {
	header('Refresh: 5; URL=https://mad-coder.ru');
	echo '
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>    
    <div class="block">
        <p class="block__text">Письмо успешно отправленно.</p>
        <p class="block__text_two">через 5 секунд вы вернетесь на страницу</p>
        <img src="./img/icon-img-6.svg" alt="" class="block__img">
    </div>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #E5E5E5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Tahoma, "Geneva", sans-serif;
        }

        .block {
            width: 350px;
            height: 300px;
            background-color: #242C34;
            color: #E5E5E5;
            border-radius: 20px;
            padding: 30px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .block__text {
            color: inherit;
            font-size: 35px;
            line-height: 40px;
            margin: 0;
            font-weight: 700;
        }

        .block__text_two {
            margin: 0;
            margin-top: 10px;
        }

        .block__img {
            width: 300px;
            position: absolute;
            bottom: -20px;
            right: 50%;
            margin-right: -150px;
        }

        @media screen and (max-width: 440px) {
            .block {
                width: 300px;
                padding: 20px 23px;
            }

            .block__text {
                font-size: 29px;
                line-height: 35px;
            }

            .block__img {
                width: 262px;
                margin-right: -143px;
            }
        }
    </style>
</body>
';}
}
exit; /* Выход без сообщения, если поле bezspama чем-то заполнено */
?>