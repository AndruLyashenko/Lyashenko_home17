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
<form action="submit.php" name="test1" method="post">
    <p></p>
    <fieldset>
        <legend>Коротко о себе</legend>
        <p class="text1"><label>Имя:<input type="text" name="firstname" value="firstname"></label></p>
        <p class="text1"><label>Фамилия:<input type="text" name="secondname" value="secondname"></label></p>
        <p class="text1"><label>Пол:<input type="radio" name="sex" checked value="sex-man">мужской </label>
            <label><input type="radio" name="sex" value="sex-woman">женский</label>
        </p>
        <p class="text1"><label>Возраст:<input type="text" name="age" value="age">лет</label></p>
    </fieldset>
    <p></p>
    <fieldset>
        <legend>Подробнее о себе</legend>
        <p><label> <input type="radio" name="gender" checked value="gender-man">Молодой человек</label></p>
        <p><label> <input type="radio" name="gender" value="gender-woman">Девушка</label></p>
        <p><label> <input type="text" name="birthday" value="birthday">Дата рождения</label>
        </p>
        <p><label> <input type="text" name="social" value="social">Семейное положение</label>
        </p>
        <p><label> <input type="text" name="work" value="work">Социальный статус</label>
        </p>
        <p><label> <input type="text" name="city" value="city">Местожительство</label></p>
        <p class="text">Что вы обычно делаете на выходных:
        </p>
        <p><label><input type="checkbox" name="activities[]" value="sleep">Сплю</label></p>
        <p><label> <input type="checkbox" name="activities[]" value="friend">Гуляю с друзьями</label>
        </p>
        <p><label><input type="checkbox" name="activities[]" value="fishing">Хожу на рыбалку</label>
        </p>
        <p><label><input type="checkbox" name="activities[]" value="play">Играю в игры</label>
        </p>
        <p class="text">Рассказать о формах в книге, посвященной HTML:</p>
        <label>
            <select size="" name="frequency[]">
                <option name="frequency[]" value="frequency">Site frequency</option>
                <option name="frequency[]" value="Vova">Vova</option>
                <option name="frequency[]" value="Andru">Andru</option>
            </select>
        </label>
        <p class="text">Сколько книг вы прочитали за свою жизнь:</p>
        <p><label><input type="radio" name="books" value="0-10">0-10</label></p>
        <p><label> <input type="radio" name="books" value="11-20">11-20</label></p>
        <p><label><input type="radio" name="books" value="21-50">21-50</label></p>
        <p><label><input type="radio" name="books" value="50+">50+</label></p>
        <p class="text">Ваши коментарии:</p>
        <p><label><textarea rows="10" cols="45" name="comment">Як тобі моє художнє оформлення?</textarea></label>
        </p>
        <p>
            <label>
                <select size="3" multiple name="forms">
                    <option name="position[]" value="first position">Первая позиция</option>
                    <option name="position[]" selected value="second position">Вторая позиция</option>
                    <option name="position[]" value="therd position">Третья позиция</option>
                </select>
            </label>
        </p>
    </fieldset>
    <p></p>
    <fieldset>
        <legend>И в заключении</legend>
        <p><input placeholder="Это поле было введено до вас"></p>
        <p class="text">Email</p>
        <label><input type="email" name="email" value="Email"></label>
        <p class="text">Хотите подписаться на самую модную рассылку спама?</p>
        <p class="cursiv">Выберите категории</p>
        <p><label> <input type="checkbox" name="spam[]" value="equipment">Оборудование</label></p>
        <p><label><input type="checkbox" name="spam[]" value="cooking">Как приготовить
                обеды</label></p>
        <p><label><input type="checkbox" name="spam[]" value="millon">Заработай
                милион за два дня!
            </label>
        </p>
        <p class="text">На сколько сложная задача:</p>
        <p><label> <input type="radio" name="complexity" value="easy">Совсем нет</label></p>
        <p><label><input type="radio" name="complexity" value="easily">Так себе</label></p>
        <p><label><input type="radio" name="complexity" value="hard">Еле справились</label></p>
    </fieldset>
    <p><input type="submit" value="Отправить"></p>
</form>
</body>
</html>