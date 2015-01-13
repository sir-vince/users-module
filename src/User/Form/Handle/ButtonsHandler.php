<?php namespace Anomaly\UsersModule\User\Form\Handle;

/**
 * Class ButtonsHandler
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\UsersModule\User\Form\Handle
 */
class ButtonsHandler
{

    /**
     * Return the form buttons.
     *
     * @return array
     */
    public function handle()
    {
        return [
            'cancel',
            'delete'
        ];
    }
}