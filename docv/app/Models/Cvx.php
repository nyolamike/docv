<?php

namespace App\Models;

class Cv {

    public static function sections(){
        return [
            [
                'name' => 'header'
            ],
            [
                'name' => 'contacts'
            ],
            [
                'name' => 'about'
            ],
            [
                'name' => 'experience'
            ],
            [
                'name' => 'articles'
            ],
            [
                'name' => 'projects'
            ]
        ];
    }

    public static function find($id){
        return [
            'sections' => self::sections()
        ];
    }
}
?>