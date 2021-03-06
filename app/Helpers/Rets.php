<?php

namespace App\Helpers;

use PHRETS\Configuration;
use PHRETS\Session;
use \App\Helpers\Common;
use Illuminate\Support\Facades\Log;

class Rets {
    public static $instance;
    private static $query = array('Limit' => 1000, 'Count' => 0, 'Format' => 'COMPACT-DECODED');

    function __construct() {
    }

    public static function instance() {
        if (!isset(self::$instance)) {
            $config = new Configuration;
            $config->setLoginUrl('http://metro.matrixstaging.com/rets/Login.ashx')
                    ->setUsername(env('RETS_USERNAME'))
                    ->setPassword(env('RETS_PASSWORD'))
                    ->setRetsVersion('1.8');
            $rets = new Session($config);
            $rets->Login();
            self::$instance = $rets;
            return self::$instance;
        } else {
            return self::$instance;
        }
    }

    public static function testingRets() {
        // $rets = self::instance();
        return Common::getUserGeoData();
    }

    /**
     * returns an array of properties
     * @param $propertyType {String} available types RESI, LAND, INCOME.
     * @param $limit {Number} limit number of search results
     * @params {boolean} [isCurried] Specify composing for a curried function.
     * @returns {Array} Returns the new array of composed arguments.
     */
    public static function propertySearch($propertyType, $limit = 10, $city = null, $state = null, $zip = null) {
        $rets = self::instance();
        $userLocationData = Common::getUserGeoData();
        $searchStr = '(Status=|A)';

        // if($city === null && isset($userLocationData['city'])) {
        //     // $city = self::getShortValue('City', $userLocationData['city']);
        //     $city = self::getShortValue('City', 'Denver');
        //     $searchStr .= ',(City='.$city.')';
        // } else {
        //     $city = self::getShortValue('City', $city);
        //     $searchStr .= ',(City='.$city.')';
        // }

        if($state === null && isset($userLocationData['city'])) {
            $state = 'CO';
            $searchStr .= ',(StateOrProvince=|'.$state.')';
        } else {
            $searchStr .= ',(StateOrProvince=|'.$state.')';
        }

        // if($zip === null && isset($userLocationData['zip'])){
        //     $zip = $userLocationData['zip'];
        //     $searchStr .= ',(PostalCode=|'.$zip.')';
        // } else {
        //     $searchStr .= ',(PostalCode=|'.$zip.')';
        // }

        //For Sale Prperties only
        $searchStr .= ',(TransactionType=FS)';

        $query = self::$query;
        $query["Limit"] = $limit;

        $searchResults = $rets->Search('Property', $propertyType, $searchStr, $query);
        $searchResults = self::parseSearchResults($rets, $searchResults);

        $rets->Disconnect();
        return $searchResults;
    }

    public static function fetchUpdates($updatesDate = null){
        $searchStr = '(Status=A),(StateOrProvince=CO),(TransactionType=FS)';
        if($updatesDate) {
            $lastUpdate = date("Y-m-d", strtotime($updatesDate));
            $searchStr .= ',(MatrixModifiedDT='.$lastUpdate.'-'.date('Y-m-d').')';
        }
        if(!$updatesDate){
            self::$query["Limit"] = 10000;
        }
        $rets = self::instance();
        $searchResults = $rets->Search('Property', 'RESI', $searchStr, self::$query);
        $rets->Disconnect();
        return $searchResults;
    }

    public static function getPropertyDetail($mls){
        $rets = self::instance();
        $searchResults = $rets->Search('Property', 'RESI', '(Matrix_Unique_ID='.$mls.')', self::$query);
        $searchResults = self::parseSearchResults($rets, $searchResults);
        $rets->Disconnect();
        return $searchResults;
    }

    public static function parseSearchResults($searchResults){
        foreach($searchResults as $property){
            $propterty = self::parseSearchResult($property);
        }
        return $searchResults;
    }

    public static function parseSearchResult($property){
        $property['CompleteAddress'] = self::concatCompleteAddress($property);
        $property['MainTitle'] = $property['BuildingName'] ? $property['BuildingName'] : $property['PropertyType'];

        $property['SqftTotal'] = number_format($property['SqftTotal']);
        $property['ListPrice'] = number_format($property['ListPrice']);
        $property['TaxAmount'] = number_format($property['TaxAmount']);

        $property['BathsTotal'] = round($property['BathsTotal']);
        $property['Neighborhood'] = ucwords($property['Neighborhood']);
        return $property;
    }

    private static function concatCompleteAddress($property){
        $fullAddress = '';
        $fullAddress .= $property["StreetNumber"] .' '.
                        $property["StreetDirPrefix"] .' '.
                        $property["StreetName"] .' ';
        if ($property['StreetDirPrefix']) {
            $fullAddress .= $property["StreetDirPrefix"].' ';
        }
        $fullAddress .= $property["StreetSuffix"] .' '.
                        $property["City"] .', '.
                        $property["StateOrProvince"] .' '.
                        $property["PostalCode"];

        return trim($fullAddress);
    }

    public static function getShortValue($property, $longValue) {
        $rets = self::instance();
        $response = $rets->GetLookupValues('Property', $property);
        $search = $response->firstWhere('LongValue', $longValue);
        $rets->Disconnect();
        return $search['ShortValue'];
    }
}
