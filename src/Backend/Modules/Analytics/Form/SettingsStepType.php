<?php

namespace Backend\Modules\Analytics\Form;

use Backend\Core\Engine\TwigTemplate;
use Common\ModulesSettings;
use Google_Service_Analytics;

/**
 * An interface so we can split the settings form up into multiple forms
 *
 * @author Jelmer Prins <jelmer@sumocoders.be>
 */
interface SettingsStepType
{
    /**
     * @param TwigTemplate $template
     */
    public function parse(TwigTemplate $template);

    /**
     * @return bool
     */
    public function handle();
}
