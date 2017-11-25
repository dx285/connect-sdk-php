<?php
/*
 * This class was auto-generated from the API references found at
 * https://epayments-api.developer-ingenico.com/s2sapi/v1/
 */
namespace Ingenico\Connect\Sdk\Domain\Payment\Definitions;

use Ingenico\Connect\Sdk\Domain\Definitions\AbstractPaymentMethodSpecificInput;
use Ingenico\Connect\Sdk\Domain\Payment\Definitions\SepaDirectDebitPaymentProduct771SpecificInput;
use UnexpectedValueException;

/**
 * @package Ingenico\Connect\Sdk\Domain\Payment\Definitions
 */
class SepaDirectDebitPaymentMethodSpecificInputBase extends AbstractPaymentMethodSpecificInput
{
    /**
     * @var SepaDirectDebitPaymentProduct771SpecificInput
     */
    public $paymentProduct771SpecificInput = null;

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
    {
        parent::fromObject($object);
        if (property_exists($object, 'paymentProduct771SpecificInput')) {
            if (!is_object($object->paymentProduct771SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct771SpecificInput, true) . '\' is not an object');
            }
            $value = new SepaDirectDebitPaymentProduct771SpecificInput();
            $this->paymentProduct771SpecificInput = $value->fromObject($object->paymentProduct771SpecificInput);
        }
        return $this;
    }
}