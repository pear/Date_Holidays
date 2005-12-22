    function testHolidays2005stampsAndSavingsDay() {
        $drv = &Date_Holidays::factory('Germany', 2005);
        $this->assertFalse(Date_Holidays::isError($drv));
        if (Date_Holidays::isError($drv)) {
           die($drv->getMessage());
        }
        $holidays = $drv->getHolidayForDate('2005-10-30', null, true);
        $this->assertEquals('savingsDay', $holidays[0]->getInternalName(), 'should be savingsDay');
        $this->assertEquals('stampsDay', $holidays[1]->getInternalName(), 'should be stampsDay');
    }