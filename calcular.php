<?php
//#######################################################################
//############################################################## "ÍNDICE"
//***********************************************************************
//# *********************************************************************
//# Funciones
//## error()
//## calcular()
//### Entidad
//### Oficina
//### Obtener el primer dígito del DC.
//### Cuenta
//### Obtener el segundo dígito del DC.
//# Valores
//# Tratar errores y Resultado
//# *********************************************************************

//# Funciones
//# ---------------------------------------------------------------------
//## error()
//# ---------------------------------------------------------------------
function error() {
  echo "Solo se aceptan números.";
}

//## calcular()
//# ---------------------------------------------------------------------
function calcular($entidad, $oficina, $cuenta) {
  //### Entidad
  //# -------------------------------------------------------------------
  //Creamos un array en el que cada dígito que forma el número formará parte de
  //un índice.
  $entidadDigitos = str_split($entidad);

  //A cada índice del array le multiplicamos su correspondiente número.
  //1a cifra * 4
  $entidadDigito1 = $entidadDigitos[0] * 4;
  //2a cifra * 8
  $entidadDigito2 = $entidadDigitos[1] * 8;
  //3a cifra * 5
  $entidadDigito3 = $entidadDigitos[2] * 5;
  //4a cifra * 10
  $entidadDigito4 = $entidadDigitos[3] * 10;

  //Sumamos resultado de cada multiplicación.
  $entidadSumatorio = $entidadDigito1 + $entidadDigito2 + $entidadDigito3 + $entidadDigito4;

  //### Oficina
  //# -------------------------------------------------------------------
  //Creamos un array en el que cada dígito que forma el número formará parte de
  //un índice.
  $oficinaDigitos = str_split($oficina);

  //A cada índice del array le multiplicamos su correspondiente número.
  //1a cifra * 9
  $oficinaDigito1 = $oficinaDigitos[0] * 9;
  //2a cifra * 7
  $oficinaDigito2 = $oficinaDigitos[1] * 7;
  //3a cifra * 3
  $oficinaDigito3 = $oficinaDigitos[2] * 3;
  //4a cifra * 6
  $oficinaDigito4 = $oficinaDigitos[3] * 6;

  //Sumamos resultado de cada multiplicación.
  $oficinaSumatorio = $oficinaDigito1 + $oficinaDigito2 + $oficinaDigito3 + $oficinaDigito4;

  //### Obtener el primer dígito del DC.
  //# -------------------------------------------------------------------
  //Sumamos el sumatorio de la entidad y de la oficina.
  //Módulo (%) del total entre 11 para quedamos el resto.
  $dc1er = ($entidadSumatorio + $oficinaSumatorio) % 11;

  //### Cuenta
  //# -------------------------------------------------------------------
  //Creamos un array en el que cada dígito que forma el número formará parte de
  //un índice.
  $cuentaDigitos = str_split($cuenta);

  //A cada índice del array le multiplicamos su correspondiente número.
  //1a cifra * 9
  $cuentaDigito1 = $cuentaDigitos[0] * 1;
  //2a cifra * 7
  $cuentaDigito2 = $cuentaDigitos[1] * 2;
  //3a cifra * 3
  $cuentaDigito3 = $cuentaDigitos[2] * 4;
  //4a cifra * 6
  $cuentaDigito4 = $cuentaDigitos[3] * 8;
  //5a cifra * 6
  $cuentaDigito5 = $cuentaDigitos[4] * 5;
  //6a cifra * 6
  $cuentaDigito6 = $cuentaDigitos[5] * 10;
  //7a cifra * 6
  $cuentaDigito7 = $cuentaDigitos[6] * 9;
  //8a cifra * 6
  $cuentaDigito8 = $cuentaDigitos[7] * 7;
  //9a cifra * 6
  $cuentaDigito9 = $cuentaDigitos[8] * 3;
  //10a cifra * 6
  $cuentaDigito10 = $cuentaDigitos[9] * 6;

  //Sumamos resultado de cada multiplicación.
  $cuentaSumatorio = $cuentaDigito1 + $cuentaDigito2 + $cuentaDigito3 + $cuentaDigito4 + $cuentaDigito5 + $cuentaDigito6 + $cuentaDigito7 + $cuentaDigito8 + $cuentaDigito9 + $cuentaDigito10;

  //### Obtener el segundo dígito del DC.
  //# -------------------------------------------------------------------
  //Sumamos el sumatorio de la entidad y de la oficina.
  //Módulo (%) del total entre 11 para quedamos el resto.
  $dc2do = $cuentaSumatorio % 11;

  return $dc1er . $dc2do;
}


//# Valores
//# ---------------------------------------------------------------------
//Obtener los valores introducidos en los campos del formulario.
$entidad = $_POST['entidad']; //name="entidad"
$oficina = $_POST['oficina']; //name="oficina"
$cuenta = $_POST['cuenta']; //name="cuenta"

//# Tratar errores y Resultado
//# ---------------------------------------------------------------------
//Concatenamos los valores para poder comprobar, de golpe, que todos sean números.
$dudaNumeros = $entidad . $oficina . $cuenta;

//comprobaremos si los valores son números.
//Si son números procederemos a calcular el DC.
//Si no son números enviaremos un mensaje de error.
if (!is_numeric($dudaNumeros)) {
  echo error();

} else { //Resultado
  echo "El D.C. es: " . calcular($entidad, $oficina, $cuenta);
}

?>
