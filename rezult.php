<?php
while ($user = $result->fetch_assoc()) {};
$sql = "SELECT firstname, secondname, sex, age, gender, birthday, social, work, city, activities, frequency, books, position, email, spam, complexity * FROM form_result ";

$resukt = $mysqli->query($sql);
if ($resukt) {
    echo "<p>Дані успішно додано в БД";
} else {
    echo "Виникла помилка:".$mysqli->error;
}
if ($resukt) {
while($form_result = $resukt->fetch_assoc()) {


if (!$result = $mysqli->query($sql)) {
    // О нет! запрос не удался.
    echo "Извините, возникла проблема в работе сайта.";

    // И снова: не делайте этого на реальном сайте, но в этом примере мы покажем,
    // как получить информацию об ошибке:
    echo "Ошибка: Наш запрос не удался и вот почему: \n";
    echo "Запрос: " . $sql . "\n";
    echo "Номер_ошибки: " . $mysqli->errno . "\n";
    echo "Ошибка: " . $mysqli->error . "\n";
    exit;
}}}
    ?>;