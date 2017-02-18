<?php
$firstname = $_POST ['Андрей'];
$secondname = $_POST ['Ляшенко'];
$sex = $_POST ['sex-man'];
$age = $_POST ['31'];
$gender = $_POST ['gender-man'];
$birthday = $_POST ['04.10.1985'];
$social = $_POST ['не женат'];
$work = $_POST ['ищу работу'];
$city = $_POST ['Черкассы'];

$activities = $_POST ['sleep'];
$frequency = $_POST ['Andru'];

$sleep = $_POST ['sleep'];
$friend = $_POST ['friend'];
$fishing = $_POST ['fishing'];
$play = $_POST ['play'];
$forms = $_POST ['Andru'];
$books = $_POST ['50+'];
$position = $_POST ['Вторая позиция'];
$email = $_POST ['scientist_andru@ukr.net'];
$equipment = $_POST ['equipment'];
$complexity = $_POST ['cooking'];
$millon = $_POST ['millon'];
$goal = $_POST ['hard'];

$mysqli = new mysqli('127.0.0.1', 'root', '', 'home17');
// О нет!! переменная connect_errno существует, а это значит, что соединение не было успешным!
if ($mysqli->connect_errno) {
    // Соединение не удалось. Что нужно делать в этом случае?
    // Можно отправить письмо администратору, отразить ошибку в журнале,
    // информировать пользователя об ошибке на экране и т.п.
    // Вам не нужно при этом раскрывать конфиденциальную информацию, поэтому
    // просто попробуем так:
    echo "Извините, возникла проблема на сайте";

    // На реальном сайте этого делать не следует, но в качестве примера мы покажем
    // как распечатывать информацию о подробностях возникшей ошибки MySQL
    echo "Ошибка: Не удалсь создать соединение с базой MySQL и вот почему: \n";
    echo "Номер_ошибки: " . $mysqli->connect_errno . "\n";
    echo "Ошибка: " . $mysqli->connect_error . "\n";

    // Вы можете захотеть показать что-то еще, но мы просто выйдем
    exit;
}



$sql = "INSERT INTO form_result (firstname, secondname, sex, age, gender, birthday, social, work, city, activities, frequency, books, position, email, spam, complexity)".
    " VALUES ('$firstname', '$secondname', '$sex', '$age', '$gender' '$birthday', '$social',".
    "'$work', '$city', '$activities', '$frequency', '$books', '$multiplesel', '$email', '$equipment', '$complexity');";
echo $sql;

$result = $mysqli->query($sql);
if ($result) {
    echo "<p>Дані успішно додано в БД";
} else {
    echo "Виникла помилка:".$mysqli->error;
};

<a href="rezult.php">Дані успішно додано в БД</a>;
?>
