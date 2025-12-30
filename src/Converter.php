<?php

namespace OguzKaan\Gokturk;

class Converter
{
    private $vowels = [
        'a' => ['type' => 'thick', 'char' => '𐰀'],
        'e' => ['type' => 'thin', 'char' => '𐰀'], // Usually same rune, sometimes differentiated
        'ı' => ['type' => 'thick', 'char' => '𐰃'],
        'i' => ['type' => 'thin', 'char' => '𐰃'],
        'o' => ['type' => 'thick', 'char' => '𐰆'],
        'u' => ['type' => 'thick', 'char' => '𐰆'],
        'ö' => ['type' => 'thin', 'char' => '𐰇'],
        'ü' => ['type' => 'thin', 'char' => '𐰇'],
    ];

    private $consonants = [
        'b' => ['thick' => '𐰉', 'thin' => '𐰋'],
        'c' => ['neutral' => '𐰲'], // Maps to Ç
        'ç' => ['neutral' => '𐰲'],
        'd' => ['thick' => '𐰑', 'thin' => '𐰓'],
        'f' => ['neutral' => '𐰯'], // Maps to P
        'g' => ['thick' => '𐰍', 'thin' => '𐰏'],
        'ğ' => ['thick' => '𐰍', 'thin' => '𐰏'],
        'h' => ['thick' => '𐰴', 'thin' => '𐰚'], // Maps to K
        'j' => ['neutral' => '𐰲'], // Maps to Ç
        'k' => ['thick' => '𐰴', 'thin' => '𐰚'],
        'l' => ['thick' => '𐰞', 'thin' => '𐰠'],
        'm' => ['neutral' => '𐰢'],
        'n' => ['thick' => '𐰣', 'thin' => '𐰤'],
        'p' => ['neutral' => '𐰯'],
        'r' => ['thick' => '𐰺', 'thin' => '𐰼'],
        's' => ['thick' => '𐰽', 'thin' => '𐰾'],
        'ş' => ['neutral' => '𐱁'],
        't' => ['thick' => '𐱃', 'thin' => '𐱅'],
        'v' => ['thick' => '𐰉', 'thin' => '𐰋'], // Maps to B
        'y' => ['thick' => '𐰖', 'thin' => '𐰘'],
        'z' => ['neutral' => '𐰔'],
        // Special clusters could be added here
    ];

    private $punctuations = [
        ' ' => ':', // Word separator
        '.' => '',
        ',' => '',
        // Add more as needed
    ];

    public function convert(string $text): string
    {
        $text = mb_strtolower($text, 'UTF-8');
        $length = mb_strlen($text, 'UTF-8');
        $result = '';

        // Default to thick harmony if no vowel found yet (common assumption)
        $currentHarmony = 'thick';

        // First pass: Determine initial harmony from the first vowel
        for ($i = 0; $i < $length; $i++) {
            $char = mb_substr($text, $i, 1, 'UTF-8');
            if (isset($this->vowels[$char])) {
                $currentHarmony = $this->vowels[$char]['type'];
                break;
            }
        }

        for ($i = 0; $i < $length; $i++) {
            // Check for 'ng' digraph first
            if ($i + 1 < $length) {
                $nextChar = mb_substr($text, $i + 1, 1, 'UTF-8');
                $digraph = mb_substr($text, $i, 1, 'UTF-8') . $nextChar;
                if ($digraph === 'ng') {
                    $result .= '𐰭';
                    $i++; // Skip next char
                    continue;
                }
            }

            $char = mb_substr($text, $i, 1, 'UTF-8');

            // Check if it's a vowel
            if (isset($this->vowels[$char])) {
                $currentHarmony = $this->vowels[$char]['type'];
                $result .= $this->vowels[$char]['char'];
                continue;
            }

            // Check if it's a consonant
            if (isset($this->consonants[$char])) {
                $cons = $this->consonants[$char];
                if (isset($cons['neutral'])) {
                    $result .= $cons['neutral'];
                } else {
                    $result .= $cons[$currentHarmony];
                }
                continue;
            }

            // Check punctuation
            if (isset($this->punctuations[$char])) {
                $result .= $this->punctuations[$char];
                continue;
            }

            // Fallback: keep original char if not found (e.g. numbers)
            $result .= $char;
        }

        return $result;
    }

    public function reverseConvert(string $text): string
    {
        $length = mb_strlen($text, 'UTF-8');
        $result = '';
        $currentHarmony = 'thick'; // Default

        // First pass: Determine harmony from consonants
        for ($i = 0; $i < $length; $i++) {
            $char = mb_substr($text, $i, 1, 'UTF-8');
            foreach ($this->consonants as $lat => $map) {
                if (isset($map['thick']) && $map['thick'] === $char) {
                    $currentHarmony = 'thick';
                    break 2;
                }
                if (isset($map['thin']) && $map['thin'] === $char) {
                    $currentHarmony = 'thin';
                    break 2;
                }
            }
        }

        for ($i = 0; $i < $length; $i++) {
            $char = mb_substr($text, $i, 1, 'UTF-8');

            // Special case for 'ng'
            if ($char === '𐰭') {
                $result .= 'ng';
                continue;
            }

            // Check vowels
            reset($this->vowels);
            foreach ($this->vowels as $lat => $map) {
                if ($map['char'] === $char) {
                    // Ambiguity handling
                    if ($char === '𐰀') {
                        $result .= ($currentHarmony === 'thick') ? 'a' : 'e';
                    } elseif ($char === '𐰃') {
                        $result .= ($currentHarmony === 'thick') ? 'ı' : 'i';
                    } elseif ($char === '𐰆') {
                        $result .= ($currentHarmony === 'thick') ? 'u' : 'o'; // Simplified
                    } elseif ($char === '𐰇') {
                        $result .= ($currentHarmony === 'thick') ? 'ü' : 'ö'; // Simplified
                    } else {
                        $result .= $lat;
                    }
                    continue 2;
                }
            }

            // Check consonants
            foreach ($this->consonants as $lat => $map) {
                if (isset($map['neutral']) && $map['neutral'] === $char) {
                    $result .= $lat;
                    continue 2;
                }
                if (isset($map['thick']) && $map['thick'] === $char) {
                    $currentHarmony = 'thick';
                    $result .= $lat;
                    continue 2;
                }
                if (isset($map['thin']) && $map['thin'] === $char) {
                    $currentHarmony = 'thin';
                    $result .= $lat;
                    continue 2;
                }
            }

            // Check punctuation
            foreach ($this->punctuations as $lat => $gok) {
                if ($gok === $char) {
                    $result .= $lat;
                    continue 2;
                }
            }

            // Fallback
            $result .= $char;
        }

        return $result;
    }
}
