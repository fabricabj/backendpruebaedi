<?php

class peliculasController{

public function RetornarPeliculas($request, $response, $args){
    //$listaDeParametros = $request->getParsedBody();
    // $hashDeContrasena = password_hash($listaDeParametros['nuevaContra'], PASSWORD_DEFAULT);

    

    Peliculas::obtenerPeliculas();
    return $response;
    $jsonpeliculas = Provincia::obtenerPeliculas();
    $response->getBody()->Write(json_encode($jsonpeliculas));
    return $response ->withHeader('Content-Type', 'application/json');;
    //$response->getBody()->write(json_encode($usuario));

    /*$arratProvincias = Peliculas::obtenerPeliculas();
    $response->getBody()->Write(json_encode($arratProvincias));

    return $response ->withHeader('Content-Type', 'application/json');;*/
}


}