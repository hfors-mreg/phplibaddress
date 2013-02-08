<?php
/**
 * This file is part of the phplibaddress package
 *
 * Copyright (c) 2012 Hannes Forsgård
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace iio\phplibaddress;

use iio\localefacade\LocaleFacade;

/**
 * Base container of address parts
 *
 * @author  Hannes Forsgård <hannes.forsgard@gmail.com>
 * @package phplibaddress
 */
class Address
{
    /**
     * @var string Address form
     */
    private $form = '';

    /**
     * @var string Address given name
     */
    private $givenName = '';

    /**
     * @var string Address surname
     */
    private $surname = '';

    /**
     * @var string Address name of organisation
     */
    private $organisationName = '';

    /**
     * @var string Address legal status
     */
    private $legalStatus = '';

    /**
     * @var string Address organisational unit
     */
    private $organisationalUnit = '';

    /**
     * @var string Address name of mailee
     */
    private $mailee = '';

    /**
     * @var string Address mailee role descriptor
     */
    private $maileeRoleDescriptor = 'c/o';

    /**
     * @var string Type of delivery service
     */
    private $deliveryService = '';

    /**
     * @var string Specification of delivery service
     */
    private $alternateDeliveryService = '';

    /**
     * @var string Address thoroughfare (street name)
     */
    private $thoroughfare = '';

    /**
     * @var string Address plot (street number)
     */
    private $plot = '';

    /**
     * @var string Address littera (letter)
     */
    private $littera = '';

    /**
     * @var string Address stairwell
     */
    private $stairwell = '';

    /**
     * @var string Address door (apartment number)
     */
    private $door = '';

    /**
     * @var string Address floor
     */
    private $floor = '';

    /**
     * @var string Address supplementary data
     */
    private $supplementaryDeliveryPointData = '';

    /**
     * @var string Address postcode (zip code)
     */
    private $postcode = '';

    /**
     * @var string Address town
     */
    private $town = '';

    /**
     * @var array ISO 3166-1 country code translator
     */
    private $countryCodes;

    /**
     * @var string ISO 3166 alpha 2 destination country code
     */
    private $country = '';

    /**
     * @var string ISO 3166 alpha 2 origin country code
     */
    private $countryOfOrigin = '';

    /**
     * Constructor
     *
     * @param LocaleFacade $locale The translation language should be
     *     set either to the language of the originating country, or to one of the
     *     colonial languages (eg. english).
     */
    public function __construct(LocaleFacade $locale)
    {
        $this->countryCodes = $locale->getDisplayCountries();
    }

    /**
     * Get form
     *
     * @return string
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Set form
     *
     * @param  string $form
     * @return void
     */
    public function setForm($form)
    {
        assert('is_string($form)');
        $this->form = $form;
    }

    /**
     * Get given name
     *
     * @return string
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * Set given name
     *
     * @param  string $givenName
     * @return void
     */
    public function setGivenName($givenName)
    {
        assert('is_string($givenName)');
        $this->givenName = $givenName;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set surname
     *
     * @param  string $surname
     * @return void
     */
    public function setSurname($surname)
    {
        assert('is_string($surname)');
        $this->surname = $surname;
    }

    /**
     * Get name of organisation
     *
     * @return string
     */
    public function getOrganisationName()
    {
        return $this->organisationName;
    }

    /**
     * Set name of organisation
     *
     * @param  string $organisationName
     * @return void
     */
    public function setOrganisationName($organisationName)
    {
        assert('is_string($organisationName)');
        $this->organisationName = $organisationName;
    }

    /**
     * Get legal status
     *
     * @return string
     */
    public function getLegalStatus()
    {
        return $this->legalStatus;
    }

    /**
     * Set legal status
     *
     * @param  string $legalStatus
     * @return void
     */
    public function setLegalStatus($legalStatus)
    {
        assert('is_string($legalStatus)');
        $this->legalStatus = $legalStatus;
    }

    /**
     * Get organisational unit
     *
     * @return string
     */
    public function getOrganisationalUnit()
    {
        return $this->organisationalUnit;
    }

    /**
     * Set organisational unit
     *
     * @param  string $organisationalUnit
     * @return void
     */
    public function setOrganisationalUnit($organisationalUnit)
    {
        assert('is_string($organisationalUnit)');
        $this->organisationalUnit = $organisationalUnit;
    }

    /**
     * Get name of mailee
     *
     * @return string
     */
    public function getNameOfMailee()
    {
        return $this->mailee;
    }

    /**
     * Set name of mailee
     *
     * @param  string $mailee
     * @return void
     */
    public function setNameOfMailee($mailee)
    {
        assert('is_string($mailee)');
        $this->mailee = $mailee;
    }

    /**
     * Get mailee role descriptor
     *
     * @return string
     */
    public function getMaileeRoleDescriptor()
    {
        return $this->maileeRoleDescriptor;
    }

    /**
     * Set mailee role descriptor
     *
     * @param  string $maileeRoleDescriptor
     * @return void
     */
    public function setMaileeRoleDescriptor($maileeRoleDescriptor)
    {
        assert('is_string($maileeRoleDescriptor)');
        $this->maileeRoleDescriptor = $maileeRoleDescriptor;
    }

    /**
     * Get thoroughfare (street name)
     *
     * @return string
     */
    public function getThoroughfare()
    {
        return $this->thoroughfare;
    }

    /**
     * Set thoroughfare (street name)
     *
     * @param  string $thoroughfare
     * @return void
     */
    public function setThoroughfare($thoroughfare)
    {
        assert('is_string($thoroughfare)');
        $this->thoroughfare = $thoroughfare;
    }

    /**
     * Get plot (street number)
     *
     * @return string
     */
    public function getPlot()
    {
        return $this->plot;
    }

    /**
     * Set plot (street number)
     *
     * @param  string $plot
     * @return void
     */
    public function setPlot($plot)
    {
        assert('is_string($plot)');
        $this->plot = $plot;
    }

    /**
     * Get littera (letter)
     *
     * @return string
     */
    public function getLittera()
    {
        return $this->littera;
    }

    /**
     * Set littera (letter)
     *
     * @param  string $littera
     * @return void
     */
    public function setLittera($littera)
    {
        assert('is_string($littera)');
        $this->littera = $littera;
    }

    /**
     * Get stairwell
     *
     * @return string
     */
    public function getStairwell()
    {
        return $this->stairwell;
    }

    /**
     * Set stairwell
     *
     * @param  string $stairwell
     * @return void
     */
    public function setStairwell($stairwell)
    {
        assert('is_string($stairwell)');
        $this->stairwell = $stairwell;
    }

    /**
     * Get door (apartment number)
     *
     * @return string
     */
    public function getDoor()
    {
        return $this->door;
    }

    /**
     * Set door (apartment number)
     *
     * @param  string $door
     * @return void
     */
    public function setDoor($door)
    {
        assert('is_string($door)');
        $this->door = $door;
    }

    /**
     * Get floor
     *
     * @return string
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Set floor
     *
     * @param  string $floor
     * @return void
     */
    public function setFloor($floor)
    {
        assert('is_string($floor)');
        $this->floor = $floor;
    }

    /**
     * Get supplementary delivery point information
     *
     * @return string
     */
    public function getSupplementaryData()
    {
        return $this->supplementaryDeliveryPointData;
    }

    /**
     * Set supplementary delivery point information
     *
     * @param  string $supplementaryData
     * @return void
     */
    public function setSupplementaryData($supplementaryData)
    {
        assert('is_string($supplementaryData)');
        $this->supplementaryDeliveryPointData = $supplementaryData;
    }

    /**
     * Get postcode (zip code)
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set postcode (zip code)
     *
     * @param  string $postcode
     * @return void
     */
    public function setPostcode($postcode)
    {
        assert('is_string($postcode)');
        $this->postcode = $postcode;
    }

    /**
     * Get town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Set town
     *
     * @param  string $town
     * @return void
     */
    public function setTown($town)
    {
        assert('is_string($town)');
        $this->town = $town;
    }

    /**
     * Set destination country code
     *
     * @param  string $code Two letter ISO 3166-1 country code
     * @return void
     */
    public function setCountryCode($code)
    {
        assert('is_string($code) && strlen($code) == 2 && ctype_alpha($code)');
        $this->country = strtoupper($code);
    }

    /**
     * Ǵet current destination country code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->country;
    }

    /**
     * Get name of country
     *
     * @return string Returns the empty string if no translation could be found
     */
    public function getCountry()
    {
        return isset($this->countryCodes[$this->getCountryCode()])
            ? $this->countryCodes[$this->getCountryCode()]
            : '';
    }

    /**
     * Set orogin country code
     *
     * @param  string $code Two letter ISO 3166-1 country code
     * @return void
     */
    public function setCountryOfOrigin($code)
    {
        assert('is_string($code) && strlen($code) == 2 && ctype_alpha($code)');
        $this->countryOfOrigin = strtoupper($code);
    }

    /**
     * Ǵet code for country of origin
     *
     * @return string
     */
    public function getCountryOfOrigin()
    {
        return $this->countryOfOrigin;
    }

    /**
     * Check if this is a domestic address
     *
     * @return bool
     */
    public function isDomestic()
    {
        return (
            $this->getCountryCode() === ''
            || $this->getCountryCode() === $this->getCountryOfOrigin()
        );
    }

    /**
     * Set type of delivery service
     *
     * @param  string $service
     * @return void
     */
    public function setDeliveryService($service)
    {
        assert('is_string($service)');
        $this->deliveryService = trim($service);
    }

    /**
     * Get type of delivery service
     *
     * @return string
     */
    public function getDeliveryService()
    {
        return $this->deliveryService;
    }

    /**
     * Set specification of delivery service
     *
     * @param  string $service
     * @return void
     */
    public function setAlternateDeliveryService($service)
    {
        assert('is_string($service)');
        $this->alternateDeliveryService = trim($service);
    }

    /**
     * Get specification of delivery service
     *
     * @return string
     */
    public function getAlternateDeliveryService()
    {
        return $this->alternateDeliveryService;
    }

    /**
     * Check if this is an administrative service point address
     *
     * @return bool
     */
    public function isServicePoint()
    {
        return $this->getDeliveryService() != '';
    }

    /**
     * Check if this is a geographical address location
     *
     * @return bool
     */
    public function isDeliveryLocation()
    {
        return $this->getThoroughfare() != '';
    }
}
