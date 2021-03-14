<?php

namespace App;

class Status
{

    public function apiCallGet($server, $access_token, $calltype)
    {
        $ch = curl_init($server . $calltype);
        curl_setopt_array($ch, array(
            CURLOPT_HTTPGET => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                'authorization:Bearer ' . $access_token, // "authorization:Bearer", et non pas "authorization: Bearer"
                'Content-Type:application/json' // "Content-Type:application/json", et non pas "Content-Type: application/json"
            ),
        ));
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // dd($httpcode);

        if ($httpcode === 200) {
            if ($response === false) {
                return (curl_error($ch));
            }
            $responseData = json_decode($response, true);
            return $responseData;
        } else {
            if ($httpcode === 401) {
                if ($response === false) {
                    return (curl_error($ch));
                }
                $responseData = json_decode($response, true);
                return $responseData;
            } else {
                $response = ['success' => false];
                // $responseData = json_encode($response, true);
                // $responseData = json_decode($response, true);
                return $response;
            }
        }
    }


    public function apiCallPost($server, $postData, $access_token,  $calltype)
    {
        $ch = curl_init($server . $calltype);
        curl_setopt_array($ch, array(
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                'authorization:Bearer ' . $access_token, // "authorization:Bearer", et non pas "authorization: Bearer"
                'Content-Type:application/json' // "Content-Type:application/json", et non pas "Content-Type: application/json"
            ),
            CURLOPT_POSTFIELDS => json_encode($postData)
        ));
        $response = curl_exec($ch);
        if ($response === false) {
            return (curl_error($ch));
        }
        $responseData = json_decode($response, true);
        die(var_dump($response));
        return $responseData;
    }
}
