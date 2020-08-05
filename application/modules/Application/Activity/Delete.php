<?php

/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    Application_Activity_Delete
 * @copyright  Copyright (c) 2017 PageCarton (http://www.pagecarton.org)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: Delete.php Wednesday 20th of December 2017 08:14PM ayoola@ayoo.la $
 */

/**
 * @see PageCarton_Widget
 */

class Application_Activity_Delete extends Application_Activity_Abstract
{

    /**
     * Performs the whole widget running process
     * 
     */
	public function init()
    {    
		try
		{ 
            if( ! $userInfo = $this->authenticate() )
            {
                return $this->setUnauthorized();
            }
            if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
                
                $response = Application_Activity::getInstance()->delete( array( 'activity_id' => $_REQUEST['activity_id'] ) );
                $this->_objectData['goodnews'] = 'Activity Deleted';
                $this->_objectData['response'] = $response;
            }
             // end of widget process
          
		}  
		catch( Exception $e )
        { 
            //  Alert! Clear the all other content and display whats below.
            $this->setViewContent( self::__( '<p class="badnews">' . $e->getMessage() . '</p>' ) ); 
            $this->setViewContent( self::__( '<p class="badnews">Theres an error in the code</p>' ) ); 
            return false; 
        }
	}
	// END OF CLASS
}
