<?php

/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    Application_Activity_List
 * @copyright  Copyright (c) 2017 PageCarton (http://www.pagecarton.org)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: List.php Wednesday 20th of December 2017 03:21PM ayoola@ayoo.la $
 */

/**
 * @see PageCarton_Widget
 */

class Application_Activity_ShowAll extends Application_Activity_Abstract
{
 	
    /**
     * 
     * 
     * @var string 
     */
	  protected static $_objectTitle = 'List';   

    /**
     * Performs the creation process
     *
     * @param void
     * @return void
     */	
    public function init()
    {
        if( ! $userInfo = $this->authenticate() )
        {
            $this->_objectData['badnews'] = 'Auth is false';
            return false;
        }
        if( ! empty( $_POST['activity_user_id'] ) )
        {
            $this->_dbWhereClause['user_id'] = $_POST['activity_user_id'];                     
        }
        $this->_objectData = $this->getDbData();       
    }
	// END OF CLASS
}
