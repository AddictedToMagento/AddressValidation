<?php

namespace AddictedToMagento\AddressValidation;

interface ResultInterface
{
    /**
     * Is valid
     *
     * @return bool
     */
    public function isValid();

    /**
     * Retrieve street address in standardized format
     *
     * @return string
     */
    public function getStreetAddress();

    /**
     * Retrieve street number in standardized format
     *
     * @return string
     */
    public function getStreetNumber();

    /**
     * Retrieve zip/postal code in standardized format
     *
     * @return string
     */
    public function getPostcode();

    /**
     * Retrieve city in standardized format
     *
     * @return string
     */
    public function getCity();

    /**
     * Retrieve state in standardized format
     *
     * @return string
     */
    public function getState();

    /**
     * Retrieve country iso code 2 (for example: DE)
     *
     * @return string
     */
    public function getCountryIsoCode();
}