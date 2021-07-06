<?php

class peliculasController{

public function RetornarPeliculas($request, $response, $args){
    $listaDeParametros = $request->getParsedBody();
    // $hashDeContrasena = password_hash($listaDeParametros['nuevaContra'], PASSWORD_DEFAULT);
    $jsonpeliculas = Peliculas::obtenerPeliculas();
    $response->getBody()->Write(json_encode($jsonpeliculas));
    return $response ->withHeader('Content-Type', 'application/json');;
    //$response->getBody()->write(json_encode($usuario));

    /*$arratProvincias = Peliculas::obtenerPeliculas();
    $response->getBody()->Write(json_encode($arratProvincias));

    return $response ->withHeader('Content-Type', 'application/json');;*/




    /*Peliculas::obtenerPeliculas();
    return $response;*/
}
public function Alta($request, $response, $args){
    $pelis=  new Peliculas();


    $listaDeParametros = $request->getParsedBody();
    $pelis->titulo =  $listaDeParametros['titulo'];
    $pelis->genero =  $listaDeParametros['genero'];
    $pelis->duracion =  $listaDeParametros['duracion'];
    $pelis->descripcion =  $listaDeParametros['descripcion'];
    $pelis->puntaje =  $listaDeParametros['puntaje'];
    $pelis->imagen =  $listaDeParametros['imagen'];
    $pelis->anio =  $listaDeParametros['anio'];
    $pelis->trailer =  $listaDeParametros['trailer'];
    $pelis->CrearArticulo($pelis);
    $response->getBody()->Write("Creado");
    
    return $response ;
}


}