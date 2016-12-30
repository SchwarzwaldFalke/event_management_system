<?php

/**
 * @author  Christoph Bessei
 * @version 0.04
 */
class Ems_Javascript_Helper
{
    public static function get_localized_datepicker_options()
    {
        global $wp_locale;
        $args = array(
            'closeText' => __('Close', 'ems_text_domain'),
            'currentText' => __('Today', 'ems_text_domain'),
            // we must replace the text indices for the following arrays with 0-based arrays
            'monthNames' => array_values($wp_locale->month),
            'monthNamesShort' => array_values($wp_locale->month_abbrev),
            'dayNames' => array_values($wp_locale->weekday),
            'dayNamesShort' => array_values($wp_locale->weekday_abbrev),
            'dayNamesMin' => array_values($wp_locale->weekday_initial),
            // the date format must be converted from PHP date tokens to js date tokens
            'dateFormat' => self::date_format_to_jquery_datepicker_format(get_option('date_format')),

            // First day of the week from WordPress general settings
            'firstDay' => get_option('start_of_week'),
            // is Right to left language? default is false
            //'isRTL'           => $wp_locale->is_rtl,
        );
        return $args;
    }


    /**
     * Convert a date format to a jQuery UI DatePicker format
     *
     * @param string $date_format a date format
     *
     * @return string
     */
    private static function date_format_to_jquery_datepicker_format($date_format)
    {
        $chars = array(
            // Day
            'd' => 'dd', 'j' => 'd', 'l' => 'DD', 'D' => 'D',
            // Month
            'm' => 'mm', 'n' => 'm', 'F' => 'MM', 'M' => 'M',
            // Year
            'Y' => 'yy', 'y' => 'y',
        );

        return strtr((string)$date_format, $chars);
    }
} 