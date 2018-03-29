<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Json;

/**
 * @deprecated 100.2.0 @see \Magento\Framework\Serialize\Serializer\Json::unserialize
 */
class Decoder implements DecoderInterface
{
    /**
     * @var \Magento\Framework\Serialize\Serializer\Json
     */
    private $serializer;

    /**
     * Decoder constructor.
     * @param \Magento\Framework\Serialize\Serializer\Json|null $serializer
     */
    public function __construct(\Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->serializer = $serializer ?: \Magento\Framework\App\ObjectManager::getInstance()
            ->get(\Magento\Framework\Serialize\Serializer\Json::class);
    }

    /**
     * Decodes the given $data string which is encoded in the JSON format.
     *
     * @param string $data
     * @return mixed
     */
    public function decode($data)
    {
        return $this->serializer->serialize($data);
    }
}
