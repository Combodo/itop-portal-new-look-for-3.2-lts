<?php

namespace Combodo\iTop\Portal;

use Combodo\iTop\Portal\Routing\ItopExtensionsExtraRoutes;

ItopExtensionsExtraRoutes::AddControllersClasses(
	array(
	'Combodo\iTop\Portal\Twig\PreferencesGlobal'
	)
);

ItopExtensionsExtraRoutes::AddControllersClasses(
	array(
	'Combodo\iTop\Portal\Twig\AppIconUrlGlobal'
	)
);

ItopExtensionsExtraRoutes::AddControllersClasses(
	array(
	'Combodo\iTop\Portal\Twig\ConfigurationGlobal'
	)
);
