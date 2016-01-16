<?php
if ( ! defined('BASEPATH') ) exit('No direct script access
allowed' ) ;

//fonction qui retourne le chemin d'un fichier css
if(!function_exists('css_url')){
	function  css_url($nom){

		return '../../namcreditV2/assets/css/'.$nom.'.css' ;
	}
}

//fonction qui retourne le chemin d'un fichier js
if(!function_exists('js_url')){
	function js_url($nom){
		return '../../namcreditV2/assets/js/'.$nom.'.js' ;
	}
}
	

//Récupération du chemein de l'image
if(! function_exists('img_url')) {
	function img_url($nom){
		return '../../namcredit/assetsV2/img/'.$nom ;
	}
}
	

//insertion de l'image
if(!function_exists('img')) {

	function img($nom, $alt=''){
		return '<img src="'.img_url($nom).'" alt="'.$alt.'" />';
	}
}
	

?>