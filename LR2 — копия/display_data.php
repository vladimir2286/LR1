<?php
// Подключение к базе данных
$pdo = new PDO("mysql:host=127.0.0.1;dbname=subjects;charset=utf8", 'root', '');

// Поиск
$search = isset($_GET['search']) ? '%' . $_GET['search'] . '%' : '';
$search = htmlspecialchars($search); // Валидация ввода

// Фильтр по часам курсов
$hours_filter = isset($_GET['hours']) ? $_GET['hours'] : '';
$hours_filter = htmlspecialchars($hours_filter); // Валидация ввода

// Подготовка SQL-запроса с учетом фильтров
$sql = "SELECT id, name, description, teacher, time_kyrs FROM `school subjects` WHERE name LIKE ?";
$params = array($search); // Параметризованный запрос

if (!empty($hours_filter)) {
    $sql .= " AND time_kyrs = ?";
    $params[] = $hours_filter;
}

$stmt = $pdo->prepare($sql);

// Выполнение запроса с передачей параметров
$stmt->execute($params);
$rows = $stmt->fetchAll();

// Вывод данных в табличку
if (!empty($rows)) {
    echo "<table border='1'>
            <tr>
                <th>Предмет</th>
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