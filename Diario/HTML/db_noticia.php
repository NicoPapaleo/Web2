<?php

function getNoticias(){
    $n1 = new stdClass();
    $n1->titulo = 'Noticia 1';
    $n1->contenido = 'Contenido noticia 1 bla bla bla bla...';
    $n1->imagen = 'supuesta imagen';
    
    $n2 = new stdClass();
    $n2->titulo = 'Noticia 2';
    $n2->contenido = 'Contenido noticia 2 bla bla bla bla...';
    $n2->imagen = 'supuesta imagen';

    $n3 = new stdClass();
    $n3->titulo = 'Noticia 3';
    $n3->contenido = 'Contenido noticia 3 bla bla bla bla...';
    $n3->imagen = 'supuesta imagen';
    
    $n4 = new stdClass();
    $n4->titulo = 'Noticia 4';
    $n4->contenido = 'Contenido noticia 4 bla bla bla bla...';
    $n4->imagen = 'supuesta imagen';

    $noticias = [$n1, $n2, $n3, $n4];
    return $noticias;
}

function getNoticiaById($id) {
    $noticias = getNoticias();
    return $noticias[$id];
}
