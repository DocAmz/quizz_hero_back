<?php

require(__DIR__ . "/Repository/DataLog.php");

$allowed_methods = [
    'questions'
];

class GetApp extends Methode
{


    public static function Questions()
    {

        $db = new DataLog();

        $Qry = $db->getQuestion('WHERE id="1"');

        if ($Qry == null) {
            $Qry_values = "no value";
        } else {
            $Qry_values = $Qry;
        }

        $data = $Qry_values;

        echo Methode::encodeData([
            'data' => 'questions',
            'id' => $data['id'],
            'status' => $data['status'],
            'type' => $data['type'],
            'author' => $data['author'],
            'timestamp' => $data['timestamp'],
            'question' => $data['question'],
            'reponses' => $data['reponses'],
            'views' => $data['views'],
        ]);
    }
}
