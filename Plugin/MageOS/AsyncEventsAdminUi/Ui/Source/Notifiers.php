<?php
namespace MageOS\EventBridge\Plugin\MageOS\AsyncEventsAdminUi\Ui\Source;

use MageOS\AsyncEventsAdminUi\Ui\Source\Notifiers as Subject;

class Notifiers
{
    public function afterToOptionArray(Subject $subject, $result)
    {
        $result[] = [
            'value' => 'event_bridge',
            'label' => 'AWS Event Bridge',
        ];
        return $result;
    }
}
