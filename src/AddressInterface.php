<?php

namespace AddictedToMagento\AddressValidation;

interface AddressInterface
{
    /**
     * Retrieve street address
     *
     * @return string
     */
    public function getStreetAddress();

    /**
     * Set street address
     *
     * @param string $streetAddress
     *
     * @return AddressInterface
     */
    public function setStreetAddress($streetAddress);

    /**
     * Retrieve city
     *
     * @return string
     */
    public function getCity();

    /**
     * Set city
     *
     * @param string $city
     *
     * @return AddressInterface
     */
    public function setCity($city);

    /**
     * Retrieve postcode
     *
     * @return string
     */
    public function getPostcode();

    /**
     * Set postcode
     *
     * @param string $postcode
     *
     * @return AddressInterface
     */
    public function setPostcode($postcode);

    /**
     * Retrieve country iso code
     *
     * @return string
     */
    public function getCountryIsoCode();

    /**
     * Set country iso code
     *
     * @param string $countryIsoCode
     *
     * @return AddressInterface
     */
    public function setCountryIsoCode($countryIsoCode);
}