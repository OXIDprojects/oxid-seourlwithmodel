<?php
/**
 * Module information
 */
$aModule = array(
    'id'           => 'seourlwithmodel',
    'title'        => 'WIBROS SEO-URL with model',
    'email'        => 'oxid@wibros.de',
    'url'          => 'http://www.wibros.de',
    'description'  => 'Module for creating SEO URLs including the model no.',
    'thumbnail'    => 'picture.png',
    'version'      => '1.0',
    'author'       => 'WIBROS GmbH',
    'extend'       => array(
        'oxseoencoderarticle' => 'wibros/seourlwithmodel/seourlwithmodel'
    )
);