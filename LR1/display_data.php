<?php
// Подключение к базе данных
$pdo = new PDO("mysql:host=127.0.0.1;dbname=subjects;charset=utf8", 'root', '');

// Поиск
$search = isset($_GET['search']) ? '%' . $_GET['search'] . '%' : '';

// Условие для выбора нужных строк
$name_condition = '';
if ($search === 'История') {
    $name_condition = "name = 'История'";
} elseif ($search === 'Обществознание') {
    $name_condition = "name = 'Обществознание'";
} else {
    $name_condition = "name LIKE ?";
}


// Подготовка SQL-запроса с учетом фильтра
$sql = "SELECT id, name, description, teacher, time_kyrs FROM `school subjects` WHERE $name_condition";
$stmt = $pdo->prepare($sql);
if ($search !== 'История' && $search !== 'Обществознание') {
    $stmt->execute([$search]);
} else {
    $stmt->execute();
}
$rows = $stmt->fetchAll();

// Вывод данных в табличку
if (!empty($rows)) {
    echo "<table border='1'>
            <tr>
                <th>Имя</th>
                <th>Описание</th>
                <th>Учитель</th>
                <th>Часы</th>
            </tr>";
    foreach ($rows as $row) {
        echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['description']}</td>
                <td>{$row['teacher']}</td>
                <td>{$row['time_kyrs']}</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Нет данных для отображения.";
}
?>
