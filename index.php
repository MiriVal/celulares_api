<?php
$celular1 = [
    "marca" => "",
    "modelo" =>"" ,
    "color" => "",
    "capacidad"=>"",
    "peso" =>"" ,
    "altura"=>"",
    "ancho"=>"",
    "grosor"=>"",
    "camara"=>"",
    "face id"=>"",
    "gps"=>"",
    "asistende de voz"=>"",
    "resistente al agua"=>"",
    
    
    
];

$celular2 = [
   "marca" => "Samsung",
    "modelo" =>"s23" ,
    "color" => "Negro",
    "capacidad de Gb"=>256,
    "capacidad de W" => 45,
    "peso g" =>168 ,
    "altura"=>158.0,
    "ancho"=>76.5,
    "grosor"=>8.2,
    "camaras"=>5,
    "face id"=>(true),
    "gps"=>(true),
    "asistende de voz"=>"Bixby",
    "resistente al agua"=>(true),
    "memoria ram" => 8,
    "sistema operativo" => "Android",
    "resolucion" => 200,
    "precio" => 25999.0",
    "microfonos" => 3,
    "calidad del sonido" => "16bits",
];

$celularn3 = [
    "nombre" => "Persona 3",
    "edad" => rand(18, 80),
    "altura" => rand(150, 200),
    "peso" => rand(50, 120),
];

$celular4 = [
    "nombre" => "Persona 4",
    "edad" => rand(18, 80),
    "altura" => rand(150, 200),
    "peso" => rand(50, 120),

    ];
    
    $celular = [
        $celular1,
        $celular2,
        $celular3,
        $celular4,
];

$celular_by_modelo = [];

foreach ($celular as $celu) {

    $people_by_name[$celu["modelo"]] = $celu;
}


if (isset($_GET["modelo"])) {
  
    $model = $_GET["modelo"];
 
    echo json_encode($celular_by_modelo[$model]);
} else {

    echo json_encode($celular);
}
