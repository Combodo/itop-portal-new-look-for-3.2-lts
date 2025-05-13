<?php

namespace Combodo\iTop\Portal;

use Combodo\iTop\Portal\Routing\ItopExtensionsExtraRoutes;

/** @noinspection PhpUnhandledExceptionInspection */
ItopExtensionsExtraRoutes::AddRoutes(array(
	array(
		'pattern' => '/preferences/setPreference',
		'callback' => 'Combodo\iTop\Portal\Controller\PreferencesController::SetPreferenceAction',
		'bind' => 'p_preferences_set_preference'
	)
));

ItopExtensionsExtraRoutes::AddControllersClasses(
	array(
		'Combodo\iTop\Portal\Controller\PreferencesController'
	)
);