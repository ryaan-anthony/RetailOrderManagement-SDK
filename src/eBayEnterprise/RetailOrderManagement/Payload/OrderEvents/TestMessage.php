<?php
/**
 * Copyright (c) 2013-2014 eBay Enterprise, Inc.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @copyright   Copyright (c) 2013-2014 eBay Enterprise, Inc. (http://www.ebayenterprise.com/)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace eBayEnterprise\RetailOrderManagement\Payload\OrderEvents;

use DateTime;
use eBayEnterprise\RetailOrderManagement\Payload\ISchemaValidator;
use eBayEnterprise\RetailOrderManagement\Payload\IValidatorIterator;
use eBayEnterprise\RetailOrderManagement\Payload\TPayload;

class TestMessage implements ITestMessage
{
    use TPayload;

    /** @var DateTime */
    protected $timestamp;

    public function __construct(IValidatorIterator $validators, ISchemaValidator $schemaValidator)
    {
        $this->validators = $validators;
        $this->schemaValidator = $schemaValidator;
    }

    public function getEventType()
    {
        return self::ROOT_NODE;
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function setTimestamp(DateTime $timestamp)
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * Serialize the various parts of the payload into XML strings and
     * simply concatenate them together.
     * @return string
     */
    protected function serializeContents()
    {
        return '';
    }

    /**
     * Name, value pairs of root attributes
     *
     * @return array
     */
    protected function getRootAttributes()
    {
        return [
            'xmlns' => $this->getXmlNamespace(),
            'timestamp' => $this->getFormattedTimestamp(),
        ];
    }

    /**
     * Format the timestamp the way the XSD wants it.
     *
     * @return string
     */
    protected function getFormattedTimestamp()
    {
        return $this->getTimestamp()->format('c');
    }


    /**
     * Fill out this payload object with data from the supplied string.
     *
     * @throws Exception\InvalidPayload
     * @param string $serializedPayload
     * @return $this
     */
    public function deserialize($serializedPayload)
    {
        $this->schemaValidate($serializedPayload);
        $ele = new \SimpleXMLElement($serializedPayload);
        return $this
            ->setTimestamp(new DateTime($ele['timestamp']))
            ->validate();
    }

    /**
     * Return the schema file path.
     * @return string
     */
    protected function getSchemaFile()
    {
        return __DIR__ . '/schema/' . static::XSD;
    }

    /**
     * Return the name of the xml root node.
     *
     * @return string
     */
    protected function getRootNodeName()
    {
        return static::ROOT_NODE;
    }

    /**
     * The XML namespace for the payload.
     *
     * @return string
     */
    protected function getXmlNamespace()
    {
        return static::XML_NS;
    }
}
