<?php

	$arquivos = [
		"music.mp4",
		"video.mov",
		"imagem.jpeg"
	];

	$extensoes = array_map(function($value){
		$extensao = explode(".",$value);
		return sprintf(".%s",array_pop($extensao));
	},$arquivos);
	sort($extensoes);

	echo "<pre>";
	echo print_r($extensoes);
	echo "</pre>";