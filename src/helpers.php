<?php

if(! function_exists('current_year')) {
    /**
     * Gets the Current Year
     * @return integer
     */
    function current_year()
    {
        return date("Y");
    }
}

if(! function_exists('year_range')) {
    /**
     *  returns a range of years when provided a start year
     * @param  integer $start_year
     * @param  string $separator
     * @return string
     * @throws \InvalidArgumentException
     */
    function year_range($start_year = 0, $separator = ' - ')
    {
        if(! is_numeric($start_year)){
            return "Invalid Argument Format passed . It should be a number";
        }

        if( $start_year < 0){
            return "Invalid Argument passed {$start_year} . It shouldn't be a negative value";
        }

        if( $start_year == 0){
            return current_year();
        }

        return ($start_year == current_year()) ? current_year() : $start_year . $separator . current_year();
    }
}
