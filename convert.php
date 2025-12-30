<?php
require_once 'src/Converter.php';

use OguzKaan\Gokturk\Converter;

header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);
$text = $input['text'] ?? '';
$direction = $input['direction'] ?? 'latin-to-gokturk';

if (!empty($text)) {
    $converter = new Converter();
    if ($direction === 'gokturk-to-latin') {
        $result = $converter->reverseConvert($text);
    } else {
        $result = $converter->convert($text);
    }
    echo json_encode(['success' => true, 'result' => $result]);
} else {
    echo json_encode(['success' => false, 'message' => 'No text provided']);
}
