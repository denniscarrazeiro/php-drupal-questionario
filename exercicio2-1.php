<?php

function foiMordido(){
	if(mt_rand(0,1) == 0){
		return true;
	}
	return false;
}

var_dump(foiMordido());