<?php

namespace BlogBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Tests\Templating\Fixture\BarBundle\Controller\BarController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;


class BaseController extends Controller
{

    const JSON = 'json';

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
    protected function jsonSerialize($entity)
    {
        return $this->serialize($entity, BaseController::JSON);
    }

    /**
     * @param $string
     * @param $object
     * @return string
     */
    protected function jsonDeserialize($string, $object)
    {
        return $this->deserialize($string, $object, BaseController::JSON);
    }
}