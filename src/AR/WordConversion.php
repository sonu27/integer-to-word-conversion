<?php
namespace AR;

class WordConversion
{
    private static $oneToNineteen = [
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine',
        10 => 'ten',
        11 => 'eleven',
        12 => 'twelve',
        13 => 'thirteen',
        14 => 'fourteen',
        15 => 'fifteen',
        16 => 'sixteen',
        17 => 'seventeen',
        18 => 'eighteen',
        19 => 'nineteen',
    ];
    
    private static $tens = [
        1 => 'ten',
        2 => 'twenty',
        3 => 'thirty',
        4 => 'forty',
        5 => 'fifty',
        6 => 'sixty',
        7 => 'seventy',
        8 => 'eighty',
        9 => 'ninety',
    ];

    public function convert($number)
    {
        $output = '';

        if ($number === 0) {
            return 'zero';
        }

        $numberString = str_pad(strval($number), 9, '0', STR_PAD_LEFT);

        $subString = substr($numberString, -9, 3);
        $millions = $this->convertLessThan1000(intval($subString));
        if (!empty($millions)) {
            $output .= $millions.' million';
        }

        $subString = substr($numberString, -6, 3);
        $thousands = $this->convertLessThan1000(intval($subString));
        if (!empty($thousands)) {
            if (!empty($millions) && !empty($thousands)) {
                $output .= ' ';
            }
            $output .= $thousands.' thousand';
        }

        $subString = substr($numberString, -3);
        $hundreds  = $this->convertLessThan1000(intval($subString));
        if (!empty($thousands) && !empty($hundreds)) {
            $output .= ' ';
        }
        $output .= $hundreds;

        return $output;
    }

    private function convertLessThan1000($number)
    {
        $output = '';
        if ($number < 20) {
            $output = self::$oneToNineteen[$number];
        } else {
            $numberString = str_pad(strval($number), 3, '0', STR_PAD_LEFT);

            if ($numberString[0] !== '0') {
                $output = self::$oneToNineteen[intval($numberString[0])].' hundred';
            }

            if ($numberString[0] !== '0' && ($numberString[1] !== '0' || $numberString[2] !== '0')) {
                $output .= ' and ';
            }

            if ($numberString[1] !== '0') {
                $output .= self::$tens[intval($numberString[1])];
            }

            if ($numberString[2] !== '0') {
                if ($numberString[1] !== '0') {
                    $output .= ' ';
                }

                $output .= self::$oneToNineteen[intval($numberString[2])];
            }
        }

        return $output;
    }
}
