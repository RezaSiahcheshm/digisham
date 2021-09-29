<?php

namespace App\Notifications\Channels;

use Ghasedak\GhasedakApi;

trait sendGhasedakSMS
{
    public function sendGhasedakSMS($receptor , $code)
    {
        $apikey = config('services.ghasedak.key');
        try {
            $api = new GhasedakApi($apikey);
            $api->Verify($receptor,1,"auth",$code);
        } catch (ApiException | HttpException $e) {
            throw $e;
        }
    }
}