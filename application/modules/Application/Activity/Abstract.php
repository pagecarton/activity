<?php

/**
 * PageCarton
 *
 * LICENSE
 *
 * @category   PageCarton
 * @package    Application_Activity_Abstract
 * @copyright  Copyright (c) 2020 PageCarton (http://www.pagecarton.org)
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @version    $Id: Abstract.php Monday 27th of July 2020 01:57PM ayoola@ayoo.la $
 */

/**
 * @see PageCarton_Widget
 */


class Application_Activity_Abstract extends NativeApp
{
	
    /**
     * Identifier for the column to edit
     * 
     * @var array
     */
	protected $_identifierKeys = array( 'activity_id' );
 	
    /**
     * The column name of the primary key
     *
     * @var string
     */
	protected $_idColumn = 'activity_id';
	
    /**
     * Identifier for the column to edit
     * 
     * @var string
     */
	protected $_tableClass = 'Application_Activity';
	
    /**
     * Access level for player. Defaults to everyone
     *
     * @var boolean
     */
	protected static $_accessLevel = array( 0 );


    /**
     * creates the form for creating and editing page
     * 
     * param string The Value of the Submit Button
     * param string Value of the Legend
     * param array Default Values
     */
	public function createForm( $submitValue = null, $legend = null, Array $values = null )  
    {
		//	Form to create a new page
        $form = new Ayoola_Form( array( 'name' => $this->getObjectName(), 'data-not-playable' => true ) );
		$form->submitValue = $submitValue ;
//		$form->oneFieldSetAtATime = true;

		$fieldset = new Ayoola_Form_Element;
	//	$fieldset->placeholderInPlaceOfLabel = false;       
        $fieldset->addElement( array( 'name' => 'text', 'type' => 'InputText', 'value' => @$values['text'] ) );         $fieldset->addElement( array( 'name' => 'media', 'type' => 'InputText', 'value' => @$values['media'] ) );         $fieldset->addElement( array( 'name' => 'user_id', 'type' => 'InputText', 'value' => @$values['user_id'] ) );         $fieldset->addElement( array( 'name' => 'tagged_user_id', 'type' => 'InputText', 'value' => @$values['tagged_user_id'] ) ); 

		$fieldset->addLegend( $legend );
		$form->addFieldset( $fieldset );   
		$this->setForm( $form );
    } 

	// END OF CLASS
}
