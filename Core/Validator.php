<?php

namespace Core;

use DateTime;
use DateTimeImmutable;

class Validator
{

    public static function sanitize($value) {
        return htmlspecialchars(trim($value)); 
    }

    public static function string($value, $min = 1, $max = INF)
    {
        $value = Self::sanitize($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function exists($value)
    {
        $value = trim($value);

        return !empty($value);
    }

    public static function email(string $value): bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function greaterThan(int $value, int $greaterThan): bool
    {
        return $value > $greaterThan;
    }

    public static function equals($value, $other): bool {
        return $value == $other;
    }

    public static function username($value) {
            return preg_match('/^[A-Za-z0-9_ ]{4,20}$/', $value);
    }

    public static function date($date, $format = 'Y-m-d H:i:s') {
        $d = DateTimeImmutable::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }

    public static function greaterThandate($date, $graterThan, $format = 'Y-m-d H:i:s') {
        $d = DateTimeImmutable::createFromFormat($format, $date);
        $g = DateTimeImmutable::createFromFormat($format, $graterThan);

        return $d > $g;
    }

    public static function number($value, $min = 0, $max = INF) {
        return filter_var($value, FILTER_VALIDATE_INT, ['min_range' => $min, 'max_range' => $max]);
    }

    public static function checkbox($values, $expected) {
        if (isset($values)) {
            foreach ($values as $value) {
                if (!in_array($value, $expected)) {
                    return false;
                }
            }
            return true;
        }
    }

    public static function fileType($uploadedFile, $allowedfileExtensions) {
            $fileName = $uploadedFile['name'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));    
        
            return in_array($fileExtension, $allowedfileExtensions);
    }

    public static function fileSize($uploadedFile, $maxFileSize) {
        $fileSize = $uploadedFile['size'];

        return $fileSize < $maxFileSize;
}
}