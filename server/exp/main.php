<?php
// Подключаем файл библиотеки PHPExcel
require_once './Classes/PHPExcel.php'; // Убедитесь, что путь к файлу правильный
require_once '../table.php';

// Подключение к базе данных;





// Запрос к базе данных
$table = $_GET['table'];
if ($table == 1){
    $sql = 'SELECT * FROM `postav`';
    $long = 'Location: .../tabl_1.php';
} else if ($table == 2){
    $sql = 'SELECT * FROM `potreb`';
    $long = 'Location: .../tabl_2.php';
} else if ($table == 3){
    $sql = 'SELECT * FROM otkaz 
                        LEFT JOIN potreb 
                            ON otkaz.IDпотребителя = potreb.IDпотребителя 
                        LEFT JOIN postav 
                            ON otkaz.IDизготовителя = postav.IDизготовителя 
                        ORDER BY `IDоперации` DESC';
    $long = 'Location: .../tabl_3.php';
} else if ($table == 4){
    $sql = 'SELECT * FROM torgovly 
                            LEFT JOIN potreb 
                                ON torgovly.IDпотребителя = potreb.IDпотребителя 
                            LEFT JOIN postav 
                                ON torgovly.IDизготовителя = postav.IDизготовителя 
                            ORDER BY `IDоперации` DESC';
    $long = 'Location: .../tabl_4.php';
} else if ($table == 5){
    $sql = 'SELECT * FROM `sertif`';
    $long = 'Location: .../tabl_5.php';
} else{
    header('Location: .../index_2.php');
}
// Замените на свой запрос
$result = $conect->query($sql);

if ($result->num_rows > 0) {
    // Создаем новый объект PHPExcel
    $objPHPExcel = new PHPExcel();
    $objPHPExcel->getActiveSheet()->setTitle('Data Export');

    // Записываем заголовки столбцов
    $colIndex = 0;
    while ($field = $result->fetch_field()) {
        $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colIndex++, 1, $field->name);
    }

    // Заполняем данные
    $rowIndex = 2;
    while ($row = $result->fetch_assoc()) {
        $colIndex = 0;
        foreach ($row as $cell) {
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($colIndex++, $rowIndex, $cell);
        }
        $rowIndex++;
    }

    // Устанавливаем имя файла для экспорта
    $filename = 'export_' . date('Y-m-d_H-i-s') . '.xlsx';

    // Устанавливаем заголовки для отправки файла в браузер
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');

    // Создаем writer и выводим файл
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save('php://output');
} else {
    echo "Нет данных для экспорта";
}

$conect->close();
header($long);
?>
