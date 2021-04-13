<?php
public static function generate_random_password(int $length = 10, int $digit = 1, int $specialChar = 1): string
    {
        $otherLen = ($digit + $specialChar);
        $upperLen = floor(($length - $otherLen) / 2);
        $lowerLen = $length - ($upperLen + $otherLen);
        $charSets = [
            ['len' => $upperLen, 'chars' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'],
            ['len' => $digit, 'chars' => '0123456789'],
            ['len' => $specialChar, 'chars' => '!@#$%&*?'],
            ['len' => $lowerLen, 'chars' => 'abcdefghijklmnopqrstuvwxyz'],

        ];

        $str = '';
        foreach ($charSets as $charSet) {
            $max = strlen($charSet['chars']) - 1;
            $len = $charSet['len'];
            for ($i = 0; $i < $len; $i++) {
                $str .= $charSet['chars'][mt_rand(0, $max)];
            }
        }
        return str_shuffle($str);
    }
