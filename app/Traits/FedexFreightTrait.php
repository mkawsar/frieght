<?php

namespace App\Traits;

use App\Models\FedexAuth;
use Carbon\Carbon;

trait FedexFreightTrait
{

    public function getOauth(): object
    {
        $token = new \stdClass();
        $existingToken = FedexAuth::query()->first();
        if (empty($existingToken)) {
            $token = $this->getToken();
        } else {
            $start = Carbon::parse($existingToken->created_at);
            $now = Carbon::now();

            if ($now->diffInSeconds($start) <= $existingToken->expires_in) {
                $token = $existingToken;
            } else {
                if ($existingToken->delete()) {
                    $token = $this->getToken();
                }
            }
        }
        return $token;
    }

    private function getToken(): object
    {
        $url = env('FEDEX_FREIGHT_API') . '/oauth/token';
        $payload = 'grant_type=client_credentials&client_id=' . env('FEDEX_FREIGHT_API_KEY') . '&client_secret=' . env('FEDEX_FREIGHT_SECRET_KEY');
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded'
        ];
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($ch);
        $json = json_decode($response, true);
        curl_close($ch);

        $token = new FedexAuth();
        $token->access_token = $json['access_token'];
        $token->token_type = $json['token_type'];
        $token->expires_in = $json['expires_in'];
        $token->scope = $json['scope'];

        $token->save();
        return $token;
    }
}
