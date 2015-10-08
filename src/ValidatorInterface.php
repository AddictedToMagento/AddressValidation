<?php

namespace AddictedToMagento\AddressValidation;

interface ValidatorInterface
{
    /**
     * @param AddressInterfacehttps://github.com/AddictedToMagento/AddressValidation.git $address
     *
     * @return ResultInterface
     */
    public function validate($address);
}