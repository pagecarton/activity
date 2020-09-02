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
            return $this->setUnauthorized();
        }
        if( ! empty( $_GET['activity_user_id'] ) )
        {
            $this->_dbWhereClause['user_id'] = $_GET['activity_user_id'];                     
        }
        if( ! empty( $_GET['profile_url'] ) )
        {
            $this->_dbWhereClause['profile_url'] = $_GET['profile_url'];                     
        }
        if( ! empty( $_GET['tagged_profiles'] ) )
        {
            $this->_dbWhereClause['tagged_profiles'] = $_GET['tagged_profiles'];                     
        }
        $this->_dbSelectOptions['where_join_operator'] = '||';
    //    var_export( $this->_dbWhereClause );
        $this->_objectData = $this->getDbData();       
    }
	// END OF CLASS
}
