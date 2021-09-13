<?php
return [
    /**
     * Habilitar si existe proceso de login dentro del proyecto
     */
    'ENABLE_API' => env('FACEBOOK_API', true),

    /**
     * Habilitar si existe proceso de login dentro del proyecto
     */

    'HAS_LOGIN' =>  env('FACEBOOK_LOGIN', true),

    /**
     * Modelo enccargado de recuperar la información del usuario
     * registrado en sesión
     */

    'MODEL_LOGIN' => 'App\GMS\GMSClient',

    /**
     * Habilita el debug de eventos dentro de facebook
     * https://business.facebook.com/ "provar eventos"
     */

    'DEBUG' => env('FACEBOOK_DEBUG', false),

    /**
     * Codigo de debug proporcionado por facebook
     * https://business.facebook.com/ "provar eventos"
     */

    'DEBUG_CODE' => env('FACEBOOK_DEBUG_CODE', ''),

];