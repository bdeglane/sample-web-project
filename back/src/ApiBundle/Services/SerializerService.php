<?php

namespace ApiBundle\Services;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;


class SerializerService
{
    const JSON = 'json';
    const XML = 'xml';


    /**
     * @return array
     */
    private function getNormalizers(): array
    {
        $normalizers = [new ObjectNormalizer()];
        return $normalizers;
    }

    /**
     * @return array
     */
    private function getEncoders(): array
    {
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        return $encoders;
    }

    /**
     * @return Serializer
     */
    private function getSerializer(): Serializer
    {
        $normalizers = $this->getNormalizers();
        $encoders = $this->getEncoders();
        return new Serializer($normalizers, $encoders);
    }

    /**
     * @param $entity
     * @param $format
     * @return string
     */
    private function serialize($entity, $format)
    {
        return $this->getSerializer()->serialize($entity, $format);
    }

    /**
     * @param $entity
     * @param $object
     * @param $format
     * @return object
     */
    private function deserialize($entity, $object, $format)
    {
        return $this->getSerializer()->deserialize($entity, $object, $format);
    }

    /**
     * @param $entity
     * @return string
     */
    public function jsonSerialize($entity)
    {
        return $this->serialize($entity, SerializerService::JSON);
    }

    /**
     * @param $string
     * @param $object
     * @return string
     */
    public function jsonDeserialize($string, $object)
    {
        return $this->deserialize($string, $object, SerializerService::JSON);
    }
}