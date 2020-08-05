<?php

/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    Application_Activity_Creator
 * @copyright  Copyright (c) 2017 PageCarton (http://www.pagecarton.org)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: Creator.php Wednesday 20th of December 2017 03:23PM ayoola@ayoo.la $
 */

/**
 * @see PageCarton_Widget
 */

class Application_Activity_Creator extends Application_Activity_Abstract
{
	
    /**
     * 
     * 
     * @var string 
     */
	protected static $_objectTitle = 'Add new'; 

    /**
     * Performs the whole widget running process
     * 
     */
	public function init()
    {    
		try
		{ 
            //  Code that runs the widget goes here...
            try
            { 
                //  Code that runs the widget goes here...
                if( ! $userInfo = $this->authenticate() )
                {
                    return $this->setUnauthorized();
                }
                if( empty( $_POST['text'] ) )
                {
                    if( empty( $_POST['media'] ) )
                    {
                        $this->_objectData['badnews'] = 'Activity text or media not sent';
                        return false;
                    }                        
                }
                $values = $_POST;
                $values['user_id'] = $userInfo['user_id'];
                
                $table = Application_Activity::getInstance();
                $response = $table->insert( 
                    $values
                 );
                $this->_objectData['goodnews'] = 'Activity Saved';
                $this->_objectData['response'] = $response;
                // end of widget process
            }  
            catch( Exception $e )
            { 
                //  Alert! Clear the all other content and display whats below.
                $this->setViewContent( self::__( '<p class="badnews">Theres an error in the code</p>' ) ); 
                return false; 
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
