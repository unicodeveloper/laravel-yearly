<?php

namespace Busayo\Yearly;

class YearAfterYear
{
    /**
     * Gets the Current Year
     * @return integer
     */
    public function current_year()
    {
        return date("Y");
    }

    /**
     *  returns a range of years when provided a start year
     * @param  integer $start_year
     * @param  string $separator
     * @return string
     */
    public function current_year_range($start_year, $separator = ' - ')
    {
        ($start_year == $this->current_year()) ? $year_range = $this->current_year() : $year_range =  $start_year . $separator . $this->current_year();

        return $year_range;
    }
}
