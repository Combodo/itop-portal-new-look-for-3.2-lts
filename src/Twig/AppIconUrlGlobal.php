<?php

namespace Combodo\iTop\Portal\Twig;

use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;
use Combodo\iTop\Portal\Routing\UrlGenerator;
use MetaModel;

class AppIconUrlGlobal extends AbstractExtension implements GlobalsInterface
{
	private $oUrlGenerator;

	public function __construct(UrlGenerator $oUrlGenerator)
	{
		$this->oUrlGenerator = $oUrlGenerator;
	}

	/**
	 * Return global variables.
	 *
	 * @return array
	 */
	public function getGlobals(): array
	{
		$data = array();

		// Try if a custom URL was set in the configuration file
		if(MetaModel::GetConfig()->IsCustomValue('app_icon_url')) {
			$data['app_icon_url'] = $_ENV['COMBODO_CONF_APP_ICON_URL'] ;
		}
		// Otherwise use the home page
		else {
			$data['app_icon_url'] = $this->oUrlGenerator->generate('p_home');
		}
		
		return $data;
	}
}