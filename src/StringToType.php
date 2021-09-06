<?php declare(strict_types=1);

namespace StringToType;

/**
 * String to type converter
 *
 * @author  Johannes Rebhan <der.waldgeist@gmail.com>
 *
 * @see     http://waldgeist.org
 *
 * @license MIT License see LICENSE file
 */
class StringToType
{
    public static function convert(string $value, bool $trim = false)
    {
        if ($trim) {
            $value = \trim($value);
        }

        if ($value === 'null') {
            return null;
        }

        if ($value === '' || \strpos($value, ' ') !== false) {
            return $value;
        }

        if ($value === '0' || (\is_numeric($value) && \substr($value, -1) !== '.'
                && !(\strpos($value, '0') === 0 && \strpos($value, '.') !== 1)
                && !(\strpos($value, '-') === 0 && \strpos($value, '0') === 1 && \strpos($value, '.') !== 2))) {
            if (\strpos($value, '.') === false) {
                return (int)$value;
            }
            return (float)$value;
        }

        $conversion = \filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);

        if ($conversion !== null) {
            return $conversion;
        }

        return $value;
    }
}