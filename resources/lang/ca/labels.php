<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all' => 'Todos',
        'yes' => 'Sí',
        'no' => 'No',
        'copyright' => 'Copyright',
        'custom' => 'Personalizado',
        'actions' => 'Acciones',
        'active' => 'Activo',
        'buttons' => [
            'save' => 'Guardar',
            'update' => 'Actualizar',
        ],
        'hide' => 'Ocultar',
        'inactive' => 'Inactivo',
        'none' => 'Ningúno',
        'show' => 'Mostrar',
        'toggle_navigation' => 'Abrir/Cerrar menú de navegació',
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create' => 'Crear Rol',
                'edit' => 'Modificar Rol',
                'management' => 'Administració de Roles',

                'table' => [
                    'number_of_users' => 'Número de Usuarios',
                    'permissions' => 'Permisos',
                    'role' => 'Rol',
                    'sort' => 'Orden',
                    'total' => 'Todos los Roles',
                ],
            ],

            'users' => [
                'active' => 'Usuarios activos',
                'all_permissions' => 'Todos los Permisos',
                'change_password' => 'Cambiar la contrasenja',
                'change_password_for' => 'Cambiar la contrasenja para :user',
                'create' => 'Crear Usuario',
                'deactivated' => 'Usuarios desactivados',
                'deleted' => 'Usuarios eliminados',
                'edit' => 'Modificar Usuario',
                'management' => 'Administració de Usuarios',
                'no_permissions' => 'Sin Permisos',
                'no_roles' => 'No hay Roles disponibles.',
                'permissions' => 'Permisos',

                'table' => [
                    'confirmed' => 'Confirmado',
                    'created' => 'Creado',
                    'email' => 'Correo',
                    'id' => 'ID',
                    'last_updated' => 'Última modificació',
                    'name' => 'Nom',
                    'first_name' => 'Nom',
                    'last_name' => 'Apellidos',
                    'no_deactivated' => 'Ningún Usuario desactivado disponible',
                    'no_deleted' => 'Ningún Usuario eliminado disponible',
                    'other_permissions' => 'Otros Permisos',
                    'permissions' => 'Permisos',
                    'roles' => 'Roles',
                    'social' => 'Cuenta Social',
                    'total' => 'Todos los Usuarios',
                ],

                'tabs' => [
                    'titles' => [
                        'overview' => 'Resúmen',
                        'history' => 'Historia',
                    ],

                    'content' => [
                        'overview' => [
                            'avatar' => 'Avatar',
                            'confirmed' => 'Confirmado',
                            'created_at' => 'Creació',
                            'deleted_at' => 'Eliminació',
                            'email' => 'E-mail',
                            'last_login_at' => 'Último login',
                            'last_login_ip' => 'IP último login',
                            'last_updated' => 'Última Actualizació',
                            'name' => 'Nom',
                            'first_name' => 'Nom',
                            'last_name' => 'Apellidos',
                            'status' => 'Estado',
                            'timezone' => 'Zona horaria',
                        ],
                    ],
                ],

                'view' => 'Ver Usuario',
            ],
        ],
    ],

    'frontend' => [
        'auth' => [
            'login_box_title' => 'Iniciar Sessió',
            'login_button' => 'Iniciar Sessió',
            'login_with' => 'Iniciar Sessió mediante :social_media',
            'register_box_title' => 'Registrarse',
            'register_button' => 'Registrarse',
            'remember_me' => 'Recordarme',
        ],

        'contact' => [
            'box_title' => 'Contáctenos',
            'button' => 'Enviar informació',
        ],

        'passwords' => [
            'expired_password_box_title' => 'Su contrasenja ha expirado',
            'forgot_password' => '¿Ha olvidado su contrasenja?',
            'reset_password_box_title' => 'Reiniciar contrasenja',
            'reset_password_button' => 'Reiniciar contrasenja',
            'update_password_button' => 'Actualizar contrasenja',
            'send_password_reset_link_button' => 'Enviar el correo de verificació',
        ],

        'user' => [
            'passwords' => [
                'change' => 'Cambiar la contrasenja',
            ],

            'profile' => [
                'avatar' => 'Avatar',
                'created_at' => 'Creado el',
                'edit_information' => 'Modificar la informació',
                'email' => 'Correo',
                'last_updated' => 'Última modificació',
                'name' => 'Nom',
                'first_name' => 'Nom',
                'last_name' => 'Apellidos',
                'update_information' => 'Actualizar la informació',
            ],
        ],
    ],
];
