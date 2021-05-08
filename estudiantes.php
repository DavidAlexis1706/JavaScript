<?php
header('Access-Control-Allow-Origin: *');
header('content-type: application/json; charset=utf-8');
    $estudiantes = [
        ["nocontrol"=>"18920159","nombre"=>"CASTRO RAMIREZ GABRIELA SOLEDAD","correo"=>"L18920159@voaxaca.tecnm.mx"],
        ["nocontrol"=>"18920160","nombre"=>"CRUZ FRANCO SANDRA","correo"=>"L18920160@voaxaca.tecnm.mx"],
        ["nocontrol"=>"18920161","nombre"=>"CRUZ SANCHEZ YAZMIN GUADALUPE","correo"=>"L18920161@voaxaca.tecnm.mx"],
        ["nocontrol"=>"18920162","nombre"=>"DIAZ VASQUEZ EFRAIN","correo"=>"L18920162@voaxaca.tecnm.mx"],
        ["nocontrol"=>"18920163","nombre"=>"GARCIA CRUZ ERICK DANIEL","correo"=>"L18920163@voaxaca.tecnm.mx"],
        ["nocontrol"=>"16920425","nombre"=>"HERNANDEZ HERNANDEZ RAYMUNDO JACOB","correo"=>"L16920425@voaxaca.tecnm.mx"],
        ["nocontrol"=>"18920165","nombre"=>"JUAREZ CRUZ YENIFER","correo"=>"L18920165@voaxaca.tecnm.mx"],
        ["nocontrol"=>"C15161334","nombre"=>"LEON SANTIAGO ALEJANDRO","correo"=>"LC15161334@voaxaca.tecnm.mx"],
        ["nocontrol"=>"C14920389","nombre"=>"MATEOS ESCUDERO MARLON","correo"=>"LC14920389@voaxaca.tecnm.mx"],
        ["nocontrol"=>"17920399","nombre"=>"MELCHOR FLORES SAUL LISANDRO","correo"=>"L17920399@voaxaca.tecnm.mx"],
        ["nocontrol"=>"17920401","nombre"=>"MENDEZ PINACHO JAVIER EMANUEL","correo"=>"L17920401@voaxaca.tecnm.mx"],
        ["nocontrol"=>"C16920387","nombre"=>"PALMA LOPEZ HUTZILOPOCHTLI MARIO","correo"=>"LC16920387@voaxaca.tecnm.mx"],
        ["nocontrol"=>"17920410","nombre"=>"PEREZ MACIEL BRENDA","correo"=>"L17920410@voaxaca.tecnm.mx"],
        ["nocontrol"=>"18920173","nombre"=>"PEREZ SANTIAGO DEYSI CRISTINA","correo"=>"L18920173@voaxaca.tecnm.mx"],
        ["nocontrol"=>"18920174","nombre"=>"RAMIREZ CRUZ MARCO ANTONIO","correo"=>"L18920174@voaxaca.tecnm.mx"],
        ["nocontrol"=>"18920281","nombre"=>"RAMOS VELAZQUEZ LAZARO EMANUEL","correo"=>"L18920281@voaxaca.tecnm.mx"],
        ["nocontrol"=>"18920177","nombre"=>"SANTIAGO CARABANTES DAVID ALEXIS","correo"=>"L18920177@voaxaca.tecnm.mx"],
        ["nocontrol"=>"18920178","nombre"=>"SOSA VASQUEZ SAMUEL","correo"=>"L18920178@voaxaca.tecnm.mx"],
        ["nocontrol"=>"16920446","nombre"=>"ZARATE AQUINO ISABEL ADRIANA","correo"=>"L16920446@voaxaca.tecnm.mx"],
        ["nocontrol"=>"17920418","nombre"=>"ZAVALETA ARAGON ROGELIO","correo"=>"L17920418@voaxaca.tecnm.mx"]
    ];
    echo json_encode($estudiantes);
?>