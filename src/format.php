<?php  
//composer es la herramienta que nos ayudara a gestionar paquetes
//en un archivo composer es un archivo json donde van varios datos 
//el nombre del programador y el nombre del paquete
//el nombre del autor o los autores 
//lo que nuestro paquete requiere 
//un sistema de autocarga para que todo se cargue al momento de iniciar el sistema 
//en el sistema de autocarga ponemos la instruccion psr4 con la configuracion 
//la instrucion files configura los diferentes elementos de autocarga 
//
namespace Text;// esto hace referencia  a nuestro namespace llamado text
class Format{ //el nombre de la clase deve ser el mismo que el nombre de este archivo pero sin la extencion .php
    public static function upperText($value){
        return strtoupper($value);
    }
}

//para utilizar el sistema de autocarga de composer vamos a la terminar y escribimos composer dump
//esto crea una carpeta vendor y dentro un archivo que se llama autoload, esta configuracion registra los helpers