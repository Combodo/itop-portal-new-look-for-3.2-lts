<?php
/**
 * Copyright (C) 2013-2024 Combodo SAS
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 */

namespace Combodo\iTop\Portal\Twig;

use appUserPreferences;
use MetaModel;
use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;

/**
 * Class ConfigurationGlobal
 *
 * Twig global injection.
 *
 * @author Stephen Abello <stephen.abello@combodo.com>
 * @package Combodo\iTop\Portal\Twig
 */
class ConfigurationGlobal extends AbstractExtension implements GlobalsInterface
{

	/**
	 * Constructor.
	 *
	 */
	public function __construct()
	{

	}

	/**
	 * Return global variables.
	 *
	 * @return array
	 */
	public function getGlobals(): array
	{
		$data = array();
		$sPortalId = $_ENV['PORTAL_ID'];
		$aMenuDisplayStyle =  MetaModel::GetConfig()->GetModuleSetting('itop-portal-new-look-for-3.2-lts', 'menu_display_style', ['itop-portal' => 'vertical']);
		
		if(array_key_exists($sPortalId, $aMenuDisplayStyle)){
			$data['look_module_parameters'] = ['menu_display_style' => $aMenuDisplayStyle[$sPortalId]];
		}
		else{
			$data['look_module_parameters'] = $aMenuDisplayStyle;
		}

		return $data;
	}

}