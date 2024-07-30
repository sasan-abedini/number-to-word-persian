<?php

class NumberToWords {
    private $units = ["", "یک", "دو", "سه", "چهار", "پنج", "شش", "هفت", "هشت", "نه"];
    private $teens = ["ده", "یازده", "دوازده", "سیزده", "چهارده", "پانزده", "شانزده", "هفده", "هجده", "نوزده"];
    private $tens = ["", "ده", "بیست", "سی", "چهل", "پنجاه", "شصت", "هفتاد", "هشتاد", "نود"];
    private $hundreds = ["", "صد", "دویست", "سیصد", "چهارصد", "پانصد", "ششصد", "هفتصد", "هشتصد", "نهصد"];
    private $thousands = ["", "هزار", "میلیون", "میلیارد"];

    private function convertHundreds($number) {
        $words = "";
        if ($number >= 100) {
            $words .= $this->hundreds[intval($number / 100)];
            $number %= 100;
        }
        if ($number >= 10 && $number < 20) {
            $words .= " و " . $this->teens[$number - 10];
        } else {
            if ($number >= 20) {
                $words .= " و " . $this->tens[intval($number / 10)];
                $number %= 10;
            }
            if ($number > 0) {
                $words .= " و " . $this->units[$number];
            }
        }
        return trim($words, " و ");
    }

    public function convert($number) {
        if ($number == 0) {
            return "صفر";
        }
        if ($number < 0) {
            return "منفی " . $this->convert(abs($number));
        }

        $words = "";
        $place = 0;

        while ($number > 0) {
            $n = $number % 1000;
            if ($n != 0) {
                $wordsPart = $this->convertHundreds($n);
                if ($place > 0) {
                    $wordsPart .= " " . $this->thousands[$place];
                }
                $words = $wordsPart . " " . $words;
            }
            $number = intval($number / 1000);
            $place++;
        }

        return trim($words);
    }
}

// مثال از استفاده
$converter = new NumberToWords();
echo $converter->convert(123456789);
?>
