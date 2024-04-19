<?php
// Obtener la URL del formulario
$url = $_POST['url'];

// Lógica para obtener los datos del modelo de negocio de la URL proporcionada
// Por simplicidad, supondremos que ya tenemos los datos necesarios
$modeloNegocio = [
    'Propuesta de Valor' => 'Amplia biblioteca de música, Acceso ilimitado a canciones y álbumes, Recomendaciones personalizadas de música, Calidad de sonido premium',
    'Segmentos de Clientes' => 'Amantes de la música de todas las edades, Personas que disfrutan descubriendo nueva música, Usuarios que prefieren la comodidad del streaming sobre la compra de música',
    'Canales' => 'Plataforma de streaming de música, Aplicación móvil, Colaboraciones con fabricantes de dispositivos de audio',
    'Relaciones con Clientes' => 'Atención al cliente personalizada, Comunicación a través de redes sociales y correos electrónicos, Programas de fidelización',
    'Fuentes de Ingresos' => 'Suscripciones mensuales, Publicidad dentro de la plataforma, Colaboraciones con artistas y sellos discográficos',
    'Recursos Clave' => 'Amplia biblioteca de música licenciada, Plataforma de streaming y servidores, Equipo de desarrollo y mantenimiento de la plataforma',
    'Actividades Clave' => 'Adquisición de derechos de música, Desarrollo y mejora continua de la plataforma, Marketing y promoción de la plataforma',
    'Socios Clave' => 'Artistas y sellos discográficos, Proveedores de servicios de transmisión, Fabricantes de dispositivos de audio'
];

// Generar el JSON con los datos del modelo de negocio
echo json_encode($modeloNegocio);
?>
