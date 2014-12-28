<?php

class turkce{
    public function kucuk_harf($str){
		$sonuc = mb_strtolower($str, 'UTF-8');
        return $sonuc;
    }
    public function buyuk_harf($str){
    	$sonuc = mb_strtoupper($str, 'UTF-8');
        return $sonuc;
    }
    public function cumle_duzeni(){
        
    }
 }