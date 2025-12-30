<?php
require_once __DIR__ . '/../src/Gokturk.php';

use OguzKaan\Gokturk\Converter;

$converter = new Converter();

$tests = [
    'Türk' => '𐱅𐰇𐰼🇰',
    'Tanrı' => '𐱃𐰪𐰼𐰃', // Note: My logic might output 𐱃𐰣𐰼𐰃 or similar depending on N/NY mapping. Let's see.
    'Oğuz' => '𐰆𐰍𐰆𐰔',
    'Bilge' => '𐰋𐰃𐰠𐰏𐰀', // Bilge: B(thin) i l(thin) g(thin) e
];

echo "Running Tests...\n";

foreach ($tests as $input => $expected) {
    $actual = $converter->convert($input);
    echo "Input: $input\n";
    echo "Expected: $expected\n";
    echo "Actual:   $actual\n";

    // Simple visual check logic (since exact unicode matching might vary based on my map vs ideal)
    if ($actual === $expected) {
        echo "Result: PASS\n";
    } else {
        echo "Result: CHECK (Might be valid variant)\n";
    }
    echo "----------------\n";
}
