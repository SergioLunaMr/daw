<?php
/*foreach.
author: Sergio Luna Martín
date: 24/11/2023
DNI: 31019692Y
*/
#Ejercicio 1.
// Se usará un array global llamado horario que será, un array bidimensional con los dos grupos.

$GLOBALS['horario'] = array(
      array(
            "grupo" => "2º DAW",
            // Una vez dentro del índice del array bidimensional, entramos en un array indexado con los valors de grupo, que es un string,
            //y horario, que es un array indexado.
            "horario" => array(
                  // Este array indexado tiene a su vez otro array indexado en el que están las diferentes asignaturas como arrays indexados.
                  "DWES" => array(
                        //En este array indexado disponemos de 3 valores, el nombre, profesor y las horas, que es un array unidimensional que tiene dentro
                        //arrays indexados.
                        "nombre" => "Desarrollo web en entorno servidor",
                        "profesor" => "José Aguilera",
                        //hotas es un array unidimensional con arrays indexados en cada índice
                        "horas" => array(
                              // El array indexado de cada índice contiene el día y la hora.                                               
                              array("Dia" => "L", "Hora" => "1"),
                              array("Dia" => "L", "Hora" => "2"),
                              array("Dia" => "M", "Hora" => "1"),
                              array("Dia" => "M", "Hora" => "2"),
                              array("Dia" => "X", "Hora" => "1"),
                              array("Dia" => "X", "Hora" => "2"),
                              array("Dia" => "V", "Hora" => "3"),
                              array("Dia" => "V", "Hora" => "4")
                        )
                  ),
                  "DWC" => array(
                        "nombre" => "Desarrollo Web en entorno cliente",
                        "profesor" => "Lourdes",
                        "horas" => array(
                              array("Dia" => "L", "Hora" => "3"),
                              array("Dia" => "L", "Hora" => "4"),
                              array("Dia" => "M", "Hora" => "3"),
                              array("Dia" => "M", "Hora" => "4"),
                              array("Dia" => "J", "Hora" => "1"),
                              array("Dia" => "J", "Hora" => "2")
                        )
                  ),
                  "DAWEB" => array(
                        "nombre" => "Despliegue de aplicaciones web",
                        "profesor" => "Mº Carmen",
                        "horas" => array(
                              array("Dia" => "M", "Hora" => "5"),
                              array("Dia" => "M", "Hora" => "6"),
                              array("Dia" => "V", "Hora" => "5")
                        )
                  ),
                  "DIWEB" => array(
                        "nombre" => "Diseño de interfaces web",
                        "profesor" => "Jaime",
                        "horas" => array(
                              array("Dia" => "X", "Hora" => "3"),
                              array("Dia" => "X", "Hora" => "4"),
                              array("Dia" => "J", "Hora" => "5"),
                              array("Dia" => "J", "Hora" => "6"),
                              array("Dia" => "V", "Hora" => "1"),
                              array("Dia" => "V", "Hora" => "2")
                        )
                  ),
                  "HLC" => array(
                        "nombre" => "Horarios de libre configuración",
                        "profesor" => "Sergio Luna Martín",
                        "horas" => array(
                              array("Dia" => "J", "Hora" => "3"),
                              array("Dia" => "J", "Hora" => "4"),
                              array("Dia" => "V", "Hora" => "6")
                        )
                  ),
                  "EIE" => array(
                        "nombre" => "Empresa e iniciativa emprendedora",
                        "profesor" => "Raquel",
                        "horas" => array(
                              array("Dia" => "L", "Hora" => "5"),
                              array("Dia" => "L", "Hora" => "6"),
                              array("Dia" => "X", "Hora" => "5"),
                              array("Dia" => "X", "Hora" => "6")
                        )
                  )
            )
      ),
      array(
            "grupo" => "1º DAW",
            "horario" => array(
                  "PROG" => array(
                        "nombre" => "Programación",
                        "profesor" => "Rafael del Castillo",
                        "horas" => array(
                              array("Dia" => "L", "Hora" => "3"),
                              array("Dia" => "L", "Hora" => "4"),
                              array("Dia" => "L", "Hora" => "5"),
                              array("Dia" => "L", "Hora" => "6"),
                              array("Dia" => "X", "Hora" => "3"),
                              array("Dia" => "X", "Hora" => "4"),
                              array("Dia" => "X", "Hora" => "5"),
                              array("Dia" => "X", "Hora" => "6"),
                              array("Dia" => "V", "Hora" => "1"),
                              array("Dia" => "V", "Hora" => "2"),
                              array("Dia" => "V", "Hora" => "4")
                        )
                  ),
                  "BD" => array(
                        "nombre" => "Bases de Datos",
                        "profesor" => "Amelia Pérez",
                        "horas" => array(
                              array("Dia" => "L", "Hora" => "1"),
                              array("Dia" => "L", "Hora" => "2"),
                              array("Dia" => "J", "Hora" => "3"),
                              array("Dia" => "J", "Hora" => "4")

                        )
                  ),
                  "ED" => array(
                        "nombre" => "Entornos de desarrollo",
                        "profesor" => "Manolo",
                        "horas" => array(
                              array("Dia" => "M", "Hora" => "5"),
                              array("Dia" => "M", "Hora" => "6"),
                              array("Dia" => "X", "Hora" => "1"),
                              array("Dia" => "V", "Hora" => "5"),
                              array("Dia" => "V", "Hora" => "6")
                        )
                  ),
                  "LM" => array(
                        "nombre" => "Lenguaje de marcas",
                        "profesor" => "Antonio",
                        "horas" => array(
                              array("Dia" => "M", "Hora" => "1"),
                              array("Dia" => "M", "Hora" => "2"),
                              array("Dia" => "M", "Hora" => "3"),
                              array("Dia" => "M", "Hora" => "4"),
                              array("Dia" => "J", "Hora" => "1"),
                              array("Dia" => "J", "Hora" => "2")
                        )
                  ),
                  "FOL" => array(
                        "nombre" => "Formación y orientación laboral",
                        "profesor" => "Pablo",
                        "horas" => array(
                              array("Dia" => "X", "Hora" => "2"),
                              array("Dia" => "J", "Hora" => "5"),
                              array("Dia" => "J", "Hora" => "6"),
                              array("Dia" => "V", "Hora" => "3")
                        )
                  )
            )
      )

);

#Ejercicio 2.


#array de idiomas
// Este array simple unidimensional tiene todos los idiomas a elegir.
$GLOBALS["idiomas"] = array("Español", "Inglés", "Francés", "Aleman", "Italiano", "Portugués");
#array con el cuestionario.
// En este array unidimensional encontramos que cada uno de sus índices tienen a su vez otro array indexado, cada uno
//con los valores de las preguntas.
$GLOBALS["preguntas"] = array(
      array(
            "pregunta" => "The room where secretaries work is called an .....",
            "Tipo" => "text",
            "Respuesta" => array("office"),
            "Acierto" => 1,
            "Fallo" => 0
      ),
      array(
            "pregunta" => "To go to the top of the building you can take the .....",
            "Tipo" => "text",
            "Respuesta" => array("lift", "elevator"),
            "Acierto" => 1,
            "Fallo" => 0
      ),
      array(
            "pregunta" => "I ..... tennis every Sunday morning.",
            "Tipo" => "Multiple-choice",
            "Opciones" => array("playing", "play", "am playing", "am play"),
            "Respuesta" => "play",
            "Acierto" => 1,
            "Fallo" => -0.25
      ),
      array(
            "pregunta" => "Don't make so much noise. Noriko ..... to study for her ESL test!",
            "Tipo" => "Multiple-choice",
            "Opciones" => array("try", "tries", "tried", "is trying"),
            "Respuesta" => "is trying",
            "Acierto" => 1,
            "Fallo" => -0.25
      ),
      array(
            "pregunta" => "Jun-Sik ..... his teeth before breakfast every morning.",
            "Tipo" => "Multiple-choice",
            "Opciones" => array("will cleaned", "is cleaning", "cleans", "clean"),
            "Respuesta" => "cleans",
            "Acierto" => 1,
            "Fallo" => -0.25
      ),
      array(
            "pregunta" => "Sorry, she can't come to the phone. She ..... a bath!",
            "Tipo" => "Multiple-choice",
            "Opciones" => array("is having", "having", "have", "has"),
            "Respuesta" => "is having",
            "Acierto" => 1,
            "Fallo" => -0.25
      ),
      array(
            "pregunta" => "	..... many times every winter in Frankfurt.",
            "Tipo" => "Multiple-choice",
            "Opciones" => array("It snows", "snowed", "It is snowing", "It is snow"),
            "Respuesta" => "It snows",
            "Acierto" => 1,
            "Fallo" => -0.25
      )
);
?>