<?php

/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    Application_Activity
 * @copyright  Copyright (c) 2020 PageCarton (http://www.pagecarton.org)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: Activity.php Monday 27th of July 2020 01:57PM ayoola@ayoo.la $
 */

/**
 * @see PageCarton_Table
 */


class Application_Activity extends PageCarton_Table
{

    /**
     * The table version (SVN COMPATIBLE)
     *
     * @param string
     */
    protected $_tableVersion = '0.1';  

    /**
     * Table data types and declaration
     * array( 'fieldname' => 'DATATYPE' )
     *
     * @param array
     */
	protected $_dataTypes = array (
  'text' => 'INPUTTEXT',
  'media' => 'JSON',
  'user_id' => 'INPUTTEXT',
  'profile_url' => 'INPUTTEXT',
  'tagged_profiles' => 'JSON',
);


	// END OF CLASS
}
