<?php
class Usuario
{
   private $_nombre;
   private $_clave;
   private $_mail;

   public function __construct($nombre, $clave, $mail)
   {
        $this->_nombre = $nombre;
        $this->_clave = $clave;
        $this->_mail = $mail;
   }

   public static function guardarUsuario(Usuario $usuario)
   {
      $datosUsuario = [$usuario->_nombre, $usuario->_clave, $usuario->_mail];
      $archivo = fopen('usuarios.csv', 'a');
      if($archivo !== false)
      {
         fputcsv($archivo, $datosUsuario);
         fclose($archivo);
         return true;
      }
      return false;
   }
}