<?php
class Example extends Date_Holidays_Driver 
{
  function _buildHolidays()
  {
    // call holiday-calculation method from baseclass
    parent::_buildHolidays();
    
    // add a static holiday
    $this->_addHoliday('jesusCircumcision', $this->_year . '-01-01', 'Circumcision of Jesus');
    
    // a calculated holiday
    // if you are using helper methods to calculate movable holidays is your own decision
    $fooDate = $this->_calcFirstMondayInJanuary();
    $this->_addHoliday('firstMondayInJan', $fooDate, 'First monday in January');
    
    // Special way of adding static holidays:
    $static = array(
      'newYearsDay'   => array(
        'date'        => '01-01',
        'title'       => 'New Year\'s Day'
      ),
      'valentinesDay' => array(
        'date'        => '02-14',
        'title'       => 'Valentine\'s Day'
      ),
    );
    $this->_addStaticHolidays($static);
    
    // Check if errors occurred.
    // If yes, return the errorstack.
    if (Date_Holidays::errorsOccurred()) {
      return Date_Holidays::getErrorStack();
    }
    return true;
  }
  
  /**
  * A helper method
  */
  function _calcFirstMondayInJanuary()
  {
    $date = new Date($this->_year . '-01-01');
    while ($date->getDayOfWeek() != 1) {
      $date = $date->getNextDay();
    }
    return $date;
  }
}
?>