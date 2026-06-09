<?php
// Выключаем вывод ошибок в тело ответа, чтобы не ломать заголовки
ini_set('display_errors', 0);
error_reporting(0);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Твоя почта (куда придет письмо)
    $to = "твоя-почта@gmail.com"; 
    
    // 2. Тема
    $subject = "Заявка с сайта auto.cg721411.tw1.ru";

    // 3. Собираем ВСЕ данные, которые пришли из формы, в текст
    $message = "Данные из формы:\n\n";
    
    foreach ($_POST as $key => $value) {
        if (!empty($value)) {
            // Делаем ключ красивым (user_name -> Name)
            $label = ucfirst(str_replace(['user_', '_'], ['', ' '], $key));
            $message .= "$label: $value\n";
        }
    }

    // 4. Заголовки (From ОБЯЗАТЕЛЬНО на домене хостинга)
    $headers = "From: admin@auto.cg721411.tw1.ru\r\n";
    $headers .= "Reply-To: admin@auto.cg721411.tw1.ru\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // 5. Отправка
    if (mail($to, $subject, $message, $headers)) {
        header('Content-Type: application/json');
        echo json_encode(["status" => "success"]);
    } else {
        header('HTTP/1.1 500 Internal Server Error');
        echo "Хостинг отклонил функцию mail. Проверь папку СПАМ или From.";
    }
} else {
    echo "Access denied";
}