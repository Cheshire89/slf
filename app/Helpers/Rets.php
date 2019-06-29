<?php

namespace App\Helpers;

use PHRETS\Configuration;
use PHRETS\Session;

use \App\Helpers\Common;

class Rets {
    public static $instance;
    public static $query = array('Limit' => 10, 'Count' => 0, 'Format' => 'COMPACT-DECODED');

    function __construct() {
    }

    public static function instance() {
        if (!isset(self::$instance)) {
            $config = new Configuration;
            $config -> setLoginUrl('http://metro.matrixstaging.com/rets/Login.ashx')
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

        if($city === null && isset($userLocationData['city'])) {
            // $city = self::getShortValue('City', $userLocationData['city']);
            $city = self::getShortValue('City', 'Denver');
            $searchStr .= ',(City=|'.$city.')';
        } else {
            $searchStr .= ',(City=|'.$city.')';
        }

        // if($state === null && isset($userLocationData['city'])) {
        //     $state = $userLocationData['state'];
        //     $searchStr .= ',(StateOrProvince=|'.$state.')';
        // } else {
        //     $searchStr .= ',(StateOrProvince=|'.$state.')';
        // }

        // if($zip === null && isset($userLocationData['zip'])){
        //     $zip = $userLocationData['zip'];
        //     $searchStr .= ',(PostalCode=|'.$zip.')';
        // } else {
        //     $searchStr .= ',(PostalCode=|'.$zip.')';
        // }

        //For Sale Prperties only
        $searchStr .= ',(TransactionType=|FS)';

        $query = self::$query;
        $query["Limit"] = $limit;

        $searchResults = $rets->Search('Property', $propertyType, $searchStr, $query);
        $searchResults = self::parseSearchResults($rets, $searchResults);

        $rets->Disconnect();
        return $searchResults;
    }

    public static function getPropertyDetail($mls){
        $rets = self::instance();
        $searchResults = $rets->Search('Property', 'RESI', '(MLSNumber=|'.$mls.')', self::$query);
        $searchResults = self::parseSearchResults($rets, $searchResults);
        $rets->Disconnect();
        return $searchResults;
    }



    private static function parseSearchResults($rets, $searchResults){
        foreach($searchResults as $property){
            $property['CompleteAddress'] = self::concatCompleteAddress($property);
            $result = $rets->GetObject('Property', 'Photo', $property['MLSNumber'], '*', 0);
            $object = $result->first();
            if(!$object->getError()) {
                $data = $object->getContent();
                $property['MainImage'] = 'data:'.$object->getContentType().';base64,'.base64_encode($data);
            }
        }
        return $searchResults;
    }

    private static function concatCompleteAddress($property){
        $fullAddress = '';
        $fullAddress .= $property->get('StreetBuildingNumber') .' '.
                        $property->get('StreetNumber') .' '.
                        $property->get('StreetDirPrefix') .' '.
                        $property->get('StreetName') .' '.
                        $property->get('StreetSuffix') .' '.
                        $property->get('City') .', '.
                        $property->get('StateOrProvince') .' '.
                        $property->get('PostalCode');

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