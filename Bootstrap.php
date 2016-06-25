<?php

/**
 * Disable Theme Sections
 * @author Moritz Naczenski
 */


 class Shopware_Plugins_Frontend_MNDisableThemeSections_Bootstrap extends Shopware_Components_Plugin_Bootstrap

{
	public function getversion()
	{
		return '1.0.0';
	}

	public function getlabel()
	{
		return 'DisableThemeSections';
	}

	public function install()
	{
		$this -> subscribeEvent(
			'Enlight_Controller_Action_PostDispatchSecure_Frontend',
			'onFrontendPostDispatch'
			);

		$this -> createConfig();
		
		return true;
	}

	public function onFrontendPostDispatch(Enlight_Event_EventArgs $args)	
	{
	    
			/** @var \Enlight_Controller_Action $controller */
			$controller = $args->get('subject');


			  $view = $controller->View();
			  $view->addTemplateDir(
			  __DIR__ . '/Views'
			  );
			  
			  /** Suche ausblenden **/
			  $view->assign('search', $this->Config()->get('search'));
			  $args->getSubject()->View()->extendsTemplate('frontend/plugins/MNDisableThemeSections/disable_search.tpl');
			  
			  /** Footer anpassen **/
			  $view->assign('copyright', $this->Config()->get('copyright'));
			  $view->assign('footer', $this->Config()->get('footer'));
			  $view->assign('newsletter', $this->Config()->get('newsletter'));	    
			  $view->assign('nlalternative', $this->Config()->get('nlalternative'));
			  $view->assign('service', $this->Config()->get('service'));	    
			  $view->assign('servicealternative', $this->Config()->get('servicealternative'));
			  $args->getSubject()->View()->extendsTemplate('frontend/plugins/MNDisableThemeSections/disable_footer.tpl');
			  
			  $view->assign('showcms', $this->Config()->get('showcms'));
	}


	private function createConfig()
	{

		/** Suche Konfiguration **/
         $this->Form()->setElement('select', 'search', 
            array(
                'label' => 'Suche ausblenden?', 
                'store' => array(
                    array(searchy, 'Ja'), 
                    array(searchn, 'Nein'), 
                ),
                'value' => searchn,
        ));

	    /** Copyright Konfiguration **/
         $this->Form()->setElement('select', 'copyright', 
            array(
                'label' => 'Copyright ausblenden?', 
                'store' => array(
                    array(copyrighty, 'Ja'), 
                    array(copyrightn, 'Nein'), 
                ),
                'value' => copyrightn,
        ));

	    /** Footer Konfiguration **/
         $this->Form()->setElement('select', 'footer', 
            array(
                'label' => 'Footer ausblenden?', 
                'store' => array(
                    array(footery, 'Ja'), 
                    array(footern, 'Nein'), 
                ),
                'value' => footern,
        ));


	    /** Newsletter Konfiguration **/
         $this->Form()->setElement('select', 'newsletter', 
            array(
                'label' => 'Newsletter im Footer ausblenden?', 
                'store' => array(
                    array(newslettery, 'Ja'), 
                    array(newslettern, 'Nein'), 
                ),
                'value' => newslettern,
        ));

    	$this->Form()->setElement('html', 'nlalternative', array(
        'value' => NULL,
        'label' => 'Alternativtext für Newsletter-Spalte'
    	));


    	/** Service Hotline Konfiguration **/

         $this->Form()->setElement('select', 'service', 
            array(
                'label' => 'Service Hotline im Footer ausblenden?', 
                'store' => array(
                    array(servicey, 'Ja'), 
                    array(servicen, 'Nein'), 
                ),
                'value' => servicen,
        ));;

    	$this->Form()->setElement('html', 'servicealternative', array(
        'value' => NULL,
        'label' => 'Alternativtext für Service Hotline Spalte'
    	));




	    /** Kategorietext Konfiguration **/
    	 $this->Form()->setElement('select', 'showcms', 
        	array(
        		'label' => 'Kategorietxt', 
            	'store' => array(
                	array(cmstextafteremotion, 'Kategorietext nach Einkaufswelt anzeigen'), 
                	array(cmstextbeforeemotion, 'Kategorietext vor Einkaufswelt anzeigen'), 
                	array(cmstextdisable, 'Kategorietext nicht bei Einkaufswelten anzeigen')
            	),
            	'value' => cmstextdisable,
        ));
	}
}
?>
