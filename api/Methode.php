<?php

class Methode
{

    public static function encodeData($D = [])
    {
        return @json_encode($D, 128);
    }

    public function apiError($message)
    {
        echo $this->encodeData([
            'error' => true,
            'reason' => $message
        ]);
    }

    public function caseString($str, $delimiter = "_")
    {
        return str_replace($delimiter, '', ucwords($str, $delimiter));
    }
}
