<?php
$sql = "SELECT id, name, description, id_teacher, time_kyrs FROM school_subjects";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();
if (!empty($rows)) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Описание</th>
                <th>ID учителя</th>
                <th>Часы</th>
            </tr>";
    foreach ($rows as $row) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['description']}</td>
                <td>{$row['id_teacher']}</td>
                <td>{$row['time_kyrs']}</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Нет данных для отображения.";
}
?>