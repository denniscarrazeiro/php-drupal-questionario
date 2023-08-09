<?php

function foiMordido(){
	if(mt_rand(0,1) == 0){
		return "Joãozinho mordeu o seu dedo !" . "<br>";
	}
	return "Joaozinho NAO mordeu o seu dedo !" . "<br>";
}

echo foiMordido();