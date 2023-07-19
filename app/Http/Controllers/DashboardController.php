<?php

namespace App\Http\Controllers;

use App\Models\FedexAuth;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function __construct()
    {
        $_SESSION["menuActive"] = 'dashboard';
    }

    public function index(): object
    {
        return view('dashboard.index');
    }


/*$existingToken = FedexAuth::query()->first();
$start = Carbon::parse($existingToken->created_at);
$now = Carbon::now();

return $now->diffInSeconds($start);
$payload = 'grant_type=client_credentials&client_id=' . env('FEDEX_FREIGHT_API_KEY') . '&client_secret=' . env('FEDEX_FREIGHT_SECRET_KEY');
$headers = [
'Content-Type' => 'application/x-www-form-urlencoded'
];
$ch = curl_init($source->getAuthUrl());
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
return $token->id;*/
}
