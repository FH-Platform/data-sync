<?php

namespace FHPlatform\DataSyncBundle\Tests\Util\Es\Config\Provider;

use FHPlatform\ConfigBundle\TagProvider\Index\ProviderEntity;

class TestProviderEntity extends ProviderEntity
{
    public function getClassName(): string
    {
        return 'Test';
    }
}
