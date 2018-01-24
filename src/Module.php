<?php
namespace LeoGalleguillos\Flash;

use LeoGalleguillos\Flash\Model\Service\Flash as FlashService;
use Zend\Mvc\MvcEvent;

class Module
{
    public function getConfig()
    {
        return [

        ];
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                FlashService::class => function ($serviceManager) {
                    return new FlashService();
                },
            ],
        ];
    }
}
