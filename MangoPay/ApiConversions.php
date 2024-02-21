<?php

namespace MangoPay;

/**
 * Class to management MangoPay API for instant conversions
 */
class ApiConversions extends Libraries\ApiBase
{
    /**
     * This endpoint allows the platform to get a real
     * time indicative market rate of a specific currency pair.
     * The rate returned is given in real time.
     * @param string $debitedCurrency The sell currency – the currency of the wallet to be debited
     * @param string $creditedCurrency The buy currency – the currency of the wallet to be credited.
     * @return \MangoPay\ConversionRate object returned from API
     */
    public function GetConversionRate($debitedCurrency, $creditedCurrency)
    {
        return $this->GetObject('get_conversion_rate', '\MangoPay\ConversionRate', $debitedCurrency, $creditedCurrency);
    }

    /**
     * This endpoint allows the platform to move funds between two
     * wallets of different currencies instantaneously.
     * @return \MangoPay\InstantConversion object returned from API
     */
    public function CreateInstantConversion($instantConversion)
    {
        return $this->CreateObject('create_instant_conversion', $instantConversion, '\MangoPay\InstantConversion');
    }

    /**
     * This endpoint allows the platform to get
     * the details of a conversion which has been carried out.
     * @param string $id The unique identifier of the conversion.
     * @return \MangoPay\InstantConversion object returned from API
     */
    public function GetInstantConversion($id)
    {
        return $this->GetObject('get_instant_conversion', '\MangoPay\InstantConversion', $id);
    }

    /**
     * This call guarantees a conversion rate to let you Create a Quoted Conversion.
     * @param Quote $quote
     * @return Quote
     */
    public function CreateQuote($quote)
    {
        return $this->CreateObject('create_conversion_quote', $quote, '\MangoPay\Quote');
    }

    /**
     * This endpoint allows the platform to get the details of a quote
     * @param string $quoteId
     * @return Quote
     */
    public function GetQuote($quoteId)
    {
        return $this->GetObject('get_conversion_quote', '\MangoPay\Quote', $quoteId);
    }

    /**
     * This call triggers a conversion, at the rate guaranteed by its quote, of the debited funds to the credited wallet.
     *
     * @param QuotedConversion $quotedConversion
     * @return QuotedConversion
     */
    public function CreateQuotedConversion($quotedConversion)
    {
        return $this->CreateObject('create_quoted_conversion', $quotedConversion, '\MangoPay\QuotedConversion');
    }

}
