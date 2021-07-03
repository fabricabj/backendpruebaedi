<?php

class peliculasController{

public function RetornarPeliculas($request, $response, $args){
    $listaDeParametros = $request->getParsedBody();
    // $hashDeContrasena = password_hash($listaDeParametros['nuevaContra'], PASSWORD_DEFAULT);

    

    Peliculas::obtenerPeliculas();
    return $response;
    //$response->getBody()->write(json_encode($usuario));

    /*$arratProvincias = Peliculas::obtenerPeliculas();
    $response->getBody()->Write(json_encode($arratProvincias));

    return $response ->withHeader('Content-Type', 'application/json');;*/
}


}