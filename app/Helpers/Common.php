<?php

namespace App\Helpers;

class Common {
    public static function getUserGeoData(){
        $user_ip = getenv('REMOTE_ADDR');
        $geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));

        $userGeoData = array(
            'country'=>$geo["geoplugin_countryName"],
            'city'=>$geo["geoplugin_city"],
            'state'=>$geo["geoplugin_regionCode"],
            'zip'=>self::getZipCode($geo['geoplugin_latitude'], $geo['geoplugin_longitude'])
        );
        return $userGeoData;
    }

    private static function getZipCode($lat, $long){
        $query = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='.$lat.','.$long.'&key='.env('GOOGLE_MAPS_KEY');
        $data = file_get_contents($query);
        if($data){
            $data = json_decode($data);
            $zipCode = null;
            foreach($data as $chunk){
                if(isset($chunk->address_components) && isset($chunk->address_components->postal_code)){
                    $zipCode = $chunk->address_components->postal_code;
                }
            }
            return $zipCode;
        } else {
            return null;
        }
    }
}