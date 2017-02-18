<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home17</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<header>
    <h1>Урок "Формы": теги и их атрибуты.</h1>
    <h2>Расскажите немного о себе...</h2>
</header>
<p class="cursiv">Попробуйте создать аналогичную форму. Для целей демонстрации подойдут и вымышленные.
</p>
<form name="test1" method="post">
    <p></p>
    <fieldset>
        <legend>Коротко о себе</legend>
        <p class="text1"><label>Имя:<input type="text" name="sex" value="Андрей"></label></p>
        <p class="text1"><label>Фамилия:<input type="text" name="sex" value="Ляшенко"></label></p>
        <p class="text1"><label>Пол:<input type="radio" name="sex" checked>мужской </label>
            <label><input type="radio" name="sex">женский</label>
        </p>
        <p class="text1"><label>Возраст:<input type="text" name="sex" value="31">лет</label></p>
    </fieldset>
    <p></p>
    <fieldset>
        <legend>Подробнее о себе</legend>
        <p><label> <input type="radio" name="stat" checked>Молодой человек</label></p>
        <p><label> <input type="radio" name="stat">Девушка</label></p>
        <p><label> <input type="text" name="social" value="04.10.1985">Дата рождения</label>
        </p>
        <p><label> <input type="text" name="social" value="не женат">Семейное положение</label>
        </p>
        <p><label> <input type="text" name="social" value="ищу работу">Социальный статус</label>
        </p>
        <p><label> <input type="text" name="social" value="Черкассы">Местожительство</label></p>
        <p class="text">Что вы обычно делаете на выходных:
        </p>
        <p><label><input type="checkbox" name="sleep" value="Сплю">Сплю</label></p>
        <p><label> <input type="checkbox" name="friend" value="Гуляю с друзьями">Гуляю с друзьями</label>
        </p>
        <p><label><input type="checkbox" name="fishing" value="Хожу на рыбалку">Хожу на рыбалку</label>
        </p>
        <p><label><input type="checkbox" name="play" value="Играю в игры">Играю в игры</label>
        </p>
        <p class="text">Рассказать о формах в книге, посвященной HTML:</p>
        <label>
            <select size="" name="forms">
                <option name="forms" selected value>Site frequency</option>
                <option name="forms" value="Vova">Vova</option>
                <option name="forms" value="Andru">Andru</option>
            </select>
        </label>
        <p class="text">Сколько книг вы прочитали за свою жизнь:</p>
        <p><label><input type="radio" name="books" value="0-10">0-10</label></p>
        <p><label> <input type="radio" name="books" value="11-20">11-20</label></p>
        <p><label><input type="radio" name="books" value="21-50">21-50</label></p>
        <p><label><input type="radio" name="books" value="50+">50+</label></p>
        <p class="text">Ваши коментарии:</p>
        <p><label><textarea rows="10" cols="45" name="text">Як тобі моє художнє оформлення?</textarea></label>
        </p>
        <p>
            <label>
                <select size="3" multiple name="forms">
                    <option name="position" value="Первая позиция">Первая позиция</option>
                    <option name="position" selected value="Вторая позиция">Вторая позиция</option>
                    <option name="position" value="Третья позиция">Третья позиция</option>
                </select>
            </label>
        </p>
    </fieldset>
    <p></p>
    <fieldset>
        <legend>И в заключении</legend>
        <p><input placeholder="Это поле было введено до вас"></p>
        <p class="text">Email</p>
        <label><input type="email" name="email" id="Email"></label>
        <p class="text">Хотите подписаться на самую модную рассылку спама?</p>
        <p class="cursiv">Выберите категории</p>
        <p><label> <input type="checkbox" name="Оборудование" value="Оборудование">Оборудование</label></p>
        <p><label><input type="checkbox" name="Как приготовить обеды" value="Как приготовить обеды">Как приготовить
                обеды</label></p>
        <p><label><input type="checkbox" name="Заработай милион за два дня!" value="Заработай милион за два дня!">Заработай
                милион за два дня!
            </label>
        </p>
        <p class="text">На сколько сложная задача:</p>
        <p><label> <input type="radio" name="goal" value="Совсем нет">Совсем нет</label></p>
        <p><label><input type="radio" name="goal" value="Так себе">Так себе</label></p>
        <p><label><input type="radio" name="goal" value="Еле справились">Еле справились</label></p>
    </fieldset>
    <p><input type="submit" value="Отправить"></p>
</form>
</body>
</html>