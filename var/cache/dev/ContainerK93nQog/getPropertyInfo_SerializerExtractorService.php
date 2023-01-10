<?php

namespace ContainerK93nQog;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPropertyInfo_SerializerExtractorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'property_info.serializer_extractor' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['property_info.serializer_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor(($container->privates['serializer.mapping.class_metadata_factory'] ?? $container->load('getSerializer_Mapping_ClassMetadataFactoryService')));
    }
}
