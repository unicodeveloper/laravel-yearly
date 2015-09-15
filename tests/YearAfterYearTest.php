<?php

namespace Busayo\Yearly\Test;

use Busayo\Yearly\YearAfterYear as Yearly;

class YearAfterYearTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Hold instance of Yearly
     * @var object
     */
    protected $yearly;

    /**
     * Get the Current Year
     * @return integer
     */
    private function getCurrentYear()
    {
        return date("Y");
    }

    /**
     * Create an instance of Yearly
     * @return void
     */
    private function instantiateYearly()
    {
        $this->yearly = new Yearly();
    }

    /**
     *  Create an instance of Yearly before running each tests
     */
    public function setUp()
    {
        $this->instantiateYearly();
    }

    /**
     * Test that it returns the current year
     * @return boolean
     */
    public function testCurrentYear()
    {
        $this->assertEquals($this->getCurrentYear(), $this->yearly->current_year());
    }

    /**
     * Test that it returns a range of years when a particular year is passed in as an argument
     * @return boolean
     */
    public function testRangeOfYearsWhenProvidedAStartYear()
    {
        $startYear = 2002;

        $this->assertEquals("{$startYear} - {$this->getCurrentYear()}", $this->yearly->year_range($startYear));
    }

    /**
     * Test that it returns the current year if the start year equals current year
     * @return boolean
     */
    public function testReturnValueWhenStartYearEqualsCurrentYear()
    {
        $startYear = $this->getCurrentYear();

        $this->assertEquals($this->getCurrentYear(), $this->yearly->year_range($startYear));
    }
}
