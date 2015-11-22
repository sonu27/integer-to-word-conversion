<?php
namespace AR;

class WordConversion
{
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
        $subString = substr($numberString, -3);

        $output = $this->convertLessThan1000($number);

        return $output;
    }

    private function convertLessThan1000($number)
    {
        $output = '';
        if ($number < 20) {
            $output = $this->convert0To19($number);
        } else {
            $numberString = str_pad(strval($number), 3, '0', STR_PAD_LEFT);

            if ($numberString[0] !== '0') {
                $output = $this->convert0To19(intval($numberString[0])).' hundred';
            }

            if ($numberString[0] !== '0' && ($numberString[1] !== '0' || $numberString[2] !== '0')) {
                $output .= ' and ';
            }

            if ($numberString[1] !== '0') {
                $output .= self::$tens[intval($numberString[1])];
            }

            if ($numberString[2] !== '0') {
                $output .= $this->convert0To19(intval($numberString[2]));
            }
        }

        return $output;
    }

    private function convert0To19($number)
    {
        $output = '';
        switch ($number) {
            case 1:
                $output = 'one';
                break;
            case 2:
                $output = 'two';
                break;
            case 3:
                $output = 'three';
                break;
            case 4:
                $output = 'four';
                break;
            case 5:
                $output = 'five';
                break;
            case 6:
                $output = 'six';
                break;
            case 7:
                $output = 'seven';
                break;
            case 8:
                $output = 'eight';
                break;
            case 9:
                $output = 'nine';
                break;
            case 10:
                $output = 'ten';
                break;
            case 11:
                $output = 'eleven';
                break;
            case 12:
                $output = 'twelve';
                break;
            case 13:
                $output = 'thirteen';
                break;
            case 14:
                $output = 'fourteen';
                break;
            case 15:
                $output = 'fifteen';
                break;
            case 16:
                $output = 'sixteen';
                break;
            case 17:
                $output = 'seventeen';
                break;
            case 18:
                $output = 'eighteen';
                break;
            case 19:
                $output = 'nineteen';
                break;
        }

        return $output;
    }
}
