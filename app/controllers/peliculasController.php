<?php

class peliculasController{

public function RetornarPeliculas($request, $response, $args){
    $listaDeParametros = $request->getParsedBody();
    // $hashDeContrasena = password_hash($listaDeParametros['nuevaContra'], PASSWORD_DEFAULT);

    $pelicula = new Peliculas();
    $pelicula->titulo = $listaDeParametros['titulo'];

    Peliculas::obtenerPeliculas($pelicula);
    return $response;
    //$response->getBody()->write(json_encode($usuario));

    /*$arratProvincias = Peliculas::obtenerPeliculas();
    $response->getBody()->Write(json_encode($arratProvincias));

    return $response ->withHeader('Content-Type', 'application/json');;*/
}


}