<?php

class peliculasController{

public function RetornarPeliculas($request, $response, $args){
    $listaDeParametros = $request->getParsedBody();
    // $hashDeContrasena = password_hash($listaDeParametros['nuevaContra'], PASSWORD_DEFAULT);
    $jsonpeliculas = Peliculas::obtenerPeliculas();
    $response->getBody()->Write(json_encode($jsonpeliculas));
    return $response ->withHeader('Content-Type', 'application/json');
    //$response->getBody()->write(json_encode($usuario));

    /*$arratProvincias = Peliculas::obtenerPeliculas();
    $response->getBody()->Write(json_encode($arratProvincias));

    return $response ->withHeader('Content-Type', 'application/json');;*/




    /*Peliculas::obtenerPeliculas();
    return $response;*/
}
public function Alta($request, $response, $args){
       $listaDeParametros = $request->getParsedBody();
        // $hashDeContrasena = password_hash($listaDeParametros['nuevaContra'], PASSWORD_DEFAULT);

        $peliculas = new Peliculas();
        $peliculas->id_pelicula = $listaDeParametros['id_pelicula'];
        $peliculas->titulo = $listaDeParametros['titulo'];
        $peliculas->duracion = $listaDeParametros['duracion'];
        $peliculas->descripcion = $listaDeParametros['descripcion'];
        $peliculas->puntaje = $listaDeParametros['puntaje'];
        $peliculas->imagen = $listaDeParametros['imagen'];
        $peliculas->anio = $listaDeParametros['anio'];
        $peliculas->trailer = $listaDeParametros['trailer'];

        Peliculas::CrearPeliculas($peliculas);
        $response->getBody()->write(json_encode($peliculas));

        return $response;
}
public function FormModPelicula($request, $response, $args){
    $listaDeParametros = $request->getParsedBody();
     // $hashDeContrasena = password_hash($listaDeParametros['nuevaContra'], PASSWORD_DEFAULT);

     $peliculas = new Peliculas();
     $jsonpeliculas = Peliculas::obtenerPeliculasMod();
     $response->getBody()->Write(json_encode($jsonpeliculas));
     return $response ->withHeader('Content-Type', 'application/json');

}
public function DeletePelicula($request, $response, $args){
    $listaDeParametros = $request->getParsedBody();
    $peliculas=  new Peliculas();
    $peliculas->id_pelicula =  $listaDeParametros['id_pelicula'];

    Peliculas::EliminarPelicula($peliculas);
    $response->getBody()->Write("Eliminado");
    return $response;

}
public function obtenerFormMod($request, $response, $args){
    $listaDeParametros = $request->getParsedBody();
    $peliculas = new Peliculas();
    $peliculas->id_pelicula = $listaDeParametros['id_pelicula'];
    // $hashDeContrasena = password_hash($listaDeParametros['nuevaContra'], PASSWORD_DEFAULT);
    $jsonpeliculas = Peliculas::FormModPelicula($peliculas);
    $response->getBody()->Write(json_encode($jsonpeliculas));
    return $response ->withHeader('Content-Type', 'application/json');
    $json_string = json_encode($response);
    $file = 'peliculas.json';
    file_put_contents($file, $json_string);

}


}