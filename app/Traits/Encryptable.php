<?php

namespace App\Traits;

trait Encryptable{
    public function getAtrribute($key){
        $value = parent::getAtrribute($key);

        if(in_array($key, $this->encryptable)){
            $value = Crypt::decrypt($value);
        }

        return $value;
    }

    public function setAttribute($key, $value){

        if(in_array($key, $this->encryptable)){
            $value = Crypt::encrypt($value);
        }

        return parent::setAttribute($key, $value);
    }
}
