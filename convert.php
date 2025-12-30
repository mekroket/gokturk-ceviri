<?php
require_once 'src/Converter.php';

use OguzKaan\Gokturk\Converter;

header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);
$text = $input['text'] ?? '';

if (!empty($text)) {
    $converter = new Converter();
    $result = $converter->convert($text);
    echo json_encode(['success' => true, 'result' => $result]);
} else {
    echo json_encode(['success' => false, 'message' => 'No text provided']);
}
