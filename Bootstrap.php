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

		/** Add Template directory */
		$view = $controller->View();
		$view->addTemplateDir(
		__DIR__ . '/Views'
		);
		

		/** disable search  **/
		$view->assign('search', $this->Config()->get('search'));

		/** disable footer and copyright **/
		$view->assign('copyright', $this->Config()->get('copyright'));
		$view->assign('footer', $this->Config()->get('footer'));

		/** display category text on shopping worlds **/
  		$view->assign('showcms', $this->Config()->get('showcms'));

		/** display category images on listings **/
		$view->assign('showcategoryimage', $this->Config()->get('showcategoryimage'));

		/** display category images on listings **/
		$view->assign('showcategoryimageinblog', $this->Config()->get('showcategoryimageinblog'));

		/** display shoppingworlds in blog */
		$view->assign('showblogemotion', $this->Config()->get('showblogemotion'));
		$view->assign('emotionidforblog', $this->Config()->get('emotionidforblog'));

	}


	private function createConfig()
	{

		/** "disable search" configuration **/
		 $this->Form()->setElement('select', 'search',
			array(
				'label' => 'Suche ausblenden?',
				'store' => array(
					array(searchy, 'Ja'),
					array(searchn, 'Nein'),
				),
				'value' => searchn,
				)
		 );

		/** "disable copyright" configuration **/
		 $this->Form()->setElement('select', 'copyright',
			array(
				'label' => 'Copyright ausblenden?',
				'store' => array(
					array(copyrighty, 'Ja'),
					array(copyrightn, 'Nein'),
				),
				'value' => copyrightn,
				)
		 );

		/** "disable footer" configuration **/
		 $this->Form()->setElement('select', 'footer',
			array(
				'label' => 'Footer ausblenden?',
				'store' => array(
					array(footery, 'Ja'),
					array(footern, 'Nein'),
				),
				'value' => footern,
				)
		 );

		/** display categorytext on shopping worlds **/
		 $this->Form()->setElement('select', 'showcms',
			array(
				'label' => 'Kategorietext',
				'store' => array(
					array(cmstextafteremotion, 'Kategorietext nach Einkaufswelt anzeigen'),
					array(cmstextbeforeemotion, 'Kategorietext vor Einkaufswelt anzeigen'),
					array(cmstextdisable, 'Kategorietext nicht bei Einkaufswelten anzeigen')
				),
				'value' => cmstextdisable,
				)
		 );

		/** "show category image" configuration **/
		$this->Form()->setElement('select', 'showcategoryimage',
			array(
				'label' => 'Kategoriebild anzeigen?',
				'store' => array(
					array(showcategoryimagey, 'Ja'),
					array(showcategoryimagen, 'Nein'),
				),
				'value' => showcategoryimagen,
			)
		);

		/** "show category image" configuration **/
		$this->Form()->setElement('select', 'showcategoryimageinblog',
			array(
				'label' => 'Kategoriebild im Blog anzeigen?',
				'store' => array(
					array(showcategoryimageinblogy, 'Ja'),
					array(showcategoryimageinblogn, 'Nein'),
				),
				'value' => showcategoryimageinblogn,
			)
		);

		/** "show category image" configuration **/
		$this->Form()->setElement('select', 'showblogemotion',
			array(
				'label' => 'Einkaufswelt im Blog anzeigen?',
				'store' => array(
					array(showblogemotiony, 'Ja'),
					array(showblogemotionn, 'Nein'),
				),
				'value' => showblogemotionn,
			)
		);

		/** "show category image" configuration **/
		$this->Form()->setElement('number', 'emotionidforblog',
			array(
				'label' => 'EmotionID für den Blog',
				'minValue' => 0,
				'value' => 0,
			)
		);

		$this->addFormTranslations(
			array(
				'en_GB' => array(
					'plugin_form' => array(
						'label' => 'Disable Theme Sections'
					),
					'search' => array(
						'label' => 'Display search in header?'
					),
					'copyright' => array(
						'label' => 'Display copyright in footer?'
					),
					'footer' => array(
						'label' => 'Display footer?'
					),
					'showcms' => array(
						'label' => 'Show categorytext on shopping worlds?'
					),
					'showcategoryimage' => array(
						'label' => 'Show categoryimange in listings?'
					),
					'showcategoryimageinblog' => array(
						'label' => 'Show categoryimange in blogs?'
					),
					'showblogemotion' => array(
						'label' => 'Show shopping worlds in blogs?'
					),
					'emotionidforblog' => array(
						'label' => 'EmotionID for blog'
					),
				)
			)
		);



	}
}
?>
