<?php
/*
* FormatBooleanHelper
*
* CakePHP Helper created to format boolean values in either Yes/No or True/False text.
* By:  Jared Testa
*
*/

namespace App\View\Helper;

use Cake\View\Helper;

class UserHelper extends Helper
{

/**
 * yesNo method
 *
 * @param boolean| $value boolean
 * @return string
 *
 */

public function getUser() {
    return $this->Users->getUser();
}

/**
 * trueFalse method
 *
 * @param boolean| $value boolean
 * @return string
 *
 */

public function trueFalse($value, $showFalse = true) {
    return ($value) ? "True" : (($showFalse) ? "False" : "");
}

}

?>