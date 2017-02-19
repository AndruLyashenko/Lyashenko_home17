<?php
$firstname = $_POST ['firstname'];
$secondname = $_POST ['secondname'];
$sex = $_POST ['sex'];
if ($sex == 'sex-man') {
    $sexWord = 'Мужcкой';
} else {
    $sexWord = 'Женский';
}
$age = $_POST ['age'];
$gender = $_POST ['gender'];
if ($gender == 'gender-man') {
    $genderWord = 'Мужcкой';
} else {
    $genderWord = 'Женский';
}
$birthday = $_POST ['birthday'];
$social = $_POST ['social'];
$work = $_POST ['work'];
$city = $_POST ['city'];
$active = $_REQUEST['activities'];
$test = '';
if (isset($active)) {
    $test = implode(', ', $active);
};
$books = $_POST ['books'];
$comment = $_POST ['comment'];
$email = $_POST ['email'];
$spam = $_POST ['spam'];
$spamAsString = '';
if (isset($spam)) {
    $spamAsString = implode(', ', $spam);
};
$complexity = $_POST ['complexity'];

$mysqli = new mysqli('localhost', 'root', '', 'home17');
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

$firstname = mysqli_real_escape_string($mysqli, $firstname);
$secondname = mysqli_real_escape_string($mysqli, $secondname);
$sexWord = mysqli_real_escape_string($mysqli, $sexWord);
$age = mysqli_real_escape_string($mysqli, $age);
$genderWord = mysqli_real_escape_string($mysqli, $genderWord);
$birthday = mysqli_real_escape_string($mysqli, $birthday);
$social = mysqli_real_escape_string($mysqli, $social);
$work = mysqli_real_escape_string($mysqli, $work);
$city = mysqli_real_escape_string($mysqli, $city);
$test = mysqli_real_escape_string($mysqli, $test);
$books = mysqli_real_escape_string($mysqli, $books);
$comment = mysqli_real_escape_string($mysqli, $comment);
$spamAsString = mysqli_real_escape_string($mysqli, $spamAsString);
$complexity = mysqli_real_escape_string($mysqli, $complexity);


$sql = "INSERT INTO form_rezult(firstname, secondname, sex, age, gender, birthday, social, work, city, activities, comment, books, email, spam, complexity)" .
    " VALUES ('$firstname', '$secondname', '$sex', '$age', '$gender' '$birthday', '$social',".
    "'$work', '$city', '$books', '$email', '$spamAsString', '$complexity');";
echo $sql;

$result = $mysqli->query($sql);
if ($result) {
    echo "<p>Дані успішно додано в БД";
} else {
    echo "Виникла помилка:" . $mysqli->error;
};
?>

<a href="rezult.php">Дані успішно додано в БД</a>;

