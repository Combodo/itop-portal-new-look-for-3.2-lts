<?php
/**
 * Copyright (C) 2013-2025 Combodo SAS
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

/** @noinspection PhpUnhandledExceptionInspection */
SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'itop-portal-new-look-for-3.2-lts/1.0.1', array(
		// Identification
		'label' => 'Portal new look for 3.2 LTS',
		'category' => 'Portal',
		// Setup
		'dependencies' => array(
			'itop-portal-base/3.2.1||itop-portal/3.2.1||itop-portal-business-partner/1.1.0',
		),
		'mandatory' => false,
		'visible' => true,
		// Components
		'datamodel' => array(
			 '../itop-portal-base/portal/vendor/autoload.php',
			'src/Twig/PreferencesGlobal.php',
			'src/Twig/AppIconUrlGlobal.php',
			'src/Router/GlobalVariablesControllerRouter.php',
			'src/Router/PreferencesRouter.php',
			'vendor/autoload.php'
		),
		'webservice' => array(
		),
		'dictionary' => array(
		),
		'data.struct' => array(
		),
		'data.sample' => array(
		),
		// Documentation
		'doc.manual_setup' => '',
		'doc.more_information' => '',
		// Default settings
		'settings' => array(
		),
	)
);
