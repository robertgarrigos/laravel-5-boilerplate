<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'El campo :attribute debe ser aceptado.',
    'active_url' => 'El campo :attribute no es una URL válida.',
    'after' => 'El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal' => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El campo :attribute solo debe contener letras.',
    'alpha_dash' => 'El campo :attribute solo debe contener letras, números i barras.',
    'alpha_num' => 'El campo :attribute solo debe contener letras i números.',
    'array' => 'El campo :attribute debe ser una lista.',
    'before' => 'El campo :attribute debe ser una fecha anterior a :date.',
    'before_or_equal' => 'El campo :attribute debe ser una fecha anterior o igual a :date.',
    'between' => [
        'numeric' => 'El campo :attribute debe ser un número entre :min i :max.',
        'file' => 'El fichero del campo :attribute ha de tenir entre :min i :max kilobytes.',
        'string' => 'El campo :attribute ha de tenir entre :min i :max caràcters.',
        'array' => 'La lista :attribute debe contener entre :min i :max elementos.',
    ],
    'boolean' => 'El campo :attribute debe ser booleano.',
    'confirmed' => 'El campo :attribute de confirmació no coincide.',
    'date' => 'El campo :attribute no es una fecha válida.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'La fecha :attribute debe coincidir con el formato :format.',
    'different' => 'Los campos :attribute i :other deben ser diferents.',
    'digits' => 'El número :attribute ha de tenir :digits dígitos.',
    'digits_between' => 'El número :attribute ha de tenir entre :min i :max dígitos.',
    'dimensions' => 'La imagen del campo :attribute tiene dimensiones inválidas.',
    'distinct' => 'El campo :attribute contiene un valor duplicado.',
    'email' => 'El campo :attribute debe contener un e-mail vàlid.',
    'exists' => 'El campo :attribute seleccionado es invàlid.',
    'file' => 'El campo :attribute debe ser un archivo.',
    'filled' => 'El campo :attribute es obligatorio.',
    'gt' => [
        'numeric' => 'El campo :attribute debe ser mayor que :value.',
        'file' => 'El fichero :attribute ha de tenir un tamanyo de més de :value kilobytes.',
        'string' => 'El campo :attribute ha de tenir més de :value caràcters.',
        'array' => 'La lista :attribute ha de tenir més de :value elementos.',
    ],
    'gte' => [
        'numeric' => 'El campo :attribute debe ser mayor o igual que :value.',
        'file' => 'El fichero :attribute ha de tenir un tamanyo mayor o igual de :value kilobytes.',
        'string' => 'El campo :attribute ha de tenir :value caràcters o més.',
        'array' => 'La lista :attribute ha de tenir :value elementos o més.',
    ],
    'image' => 'El campo :attribute debe contener una imagen.',
    'in' => 'El campo :attribute seleccionado no es vàlid.',
    'in_array' => 'El campo :attribute no existeix en :other.',
    'integer' => 'El campo :attribute debe ser un número entero.',
    'ip' => 'El campo :attribute debe contener una direcció IP válida.',
    'ipv4' => 'El campo :attribute debe contener una Direcció IPv4 válida.',
    'ipv6' => 'El campo :attribute debe contener una Direcció IPv6 válida.',
    'json' => 'El campo :attribute debe contener un JSON vàlid.',
    'lt' => [
        'numeric' => 'El campo :attribute debe ser menor que :value.',
        'file' => 'El fichero del campo :attribute ha de tenir un tamanyo menor de :value kilobytes.',
        'string' => 'El campo :attribute ha de tenir menys de :value caràcters.',
        'array' => 'La lista :attribute ha de tenir menys de :value elementos.',
    ],
    'lte' => [
        'numeric' => 'El campo :attribute debe ser menor o igual que :value.',
        'file' => 'El fichero del campo :attribute ha de tenir un tamanyo menor o igual de :value kilobytes.',
        'string' => 'El campo :attribute ha de tenir :value caràcters o menys.',
        'array' => 'La lista :attribute ha de tenir :value elementos o menys.',
    ],
    'max' => [
        'numeric' => 'El número :attribute no debe ser mayor que :max.',
        'file' => 'El fichero del campo :attribute no ha de tenir un tamanyo mayor de :max kilobytes.',
        'string' => 'El texto :attribute ha de tenir menys de :max caràcters.',
        'array' => 'La lista :attribute debe contener menys de :max elementos.',
    ],
    'mimes' => 'El fichero :attribute ha de tenir el formato/s :values.',
    'min' => [
        'numeric' => 'El número :attribute debe ser mayor o igual que :min.',
        'file' => 'El fichero del campo :attribute ha de tenir un tamanyo menor o igual de :min kilobytes.',
        'string' => 'El texto :attribute ha de tenir, al menys, :min caràcters.',
        'array' => 'La lista :attribute debe contener, al menys, :min elementos.',
    ],
    'not_in' => 'El campo :attribute seleccionado no es vàlid.',
    'not_regex' => 'El formato del campo :attribute no es vàlid.',
    'numeric' => 'El campo :attribute debe ser un número.',
    'present' => 'El campo :attribute debe estar presente.',
    'regex' => 'El formato del campo :attribute no es vàlid.',
    'required' => 'El campo :attribute es obligatorio.',
    'required_if' => 'El campo :attribute es obligatorio cuando :other tiene valor :value.',
    'required_unless' => 'El campo :attribute es obligatorio, excepto cuando :other esta en :values.',
    'required_with' => 'El campo :attribute es obligatorio cuando :values están presentes.',
    'required_with_all' => 'El campo :attribute es obligatorio cuando :values están presentes.',
    'required_without' => 'El campo :attribute es obligatorio cuando :values no están presentes.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de :values están presentes.',
    'same' => 'Los campos :attribute i :other deben coincidir.',
    'size' => [
        'numeric' => 'El número :attribute ha de tenir :size caràcters.',
        'file' => 'El fichero :attribute ha de tenir :size kilobytes.',
        'string' => 'El texto :attribute ha de tenir :size caràcters.',
        'array' => 'La lista :attribute debe contener :size elementos.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'El campo :attribute debe contener texto.',
    'timezone' => 'El campo :attribute debe contener una zona horaria válida.',
    'unique' => 'El campo :attribute ja está en uso.',
    'uploaded' => 'El campo :attribute no se pudo actualizar.',
    'url' => 'El enlace :attribute ha de tenir un formato vàlid.',
    'uuid' => 'El campo :attribute debe ser un UUID vàlid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'mensaje-personalizado',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'backend' => [
            'access' => [
                'permissions' => [
                    'associated_roles' => 'Roles asociados',
                    'dependencies' => 'Dependencias',
                    'display_name' => 'Nom a mostrar',
                    'group' => 'Grupo',
                    'group_sort' => 'Orden del Grupo',

                    'groups' => [
                        'name' => 'Nom del Grupo',
                    ],

                    'name' => 'Nom',
                    'first_name' => 'Nom',
                    'last_name' => 'Apellidos',
                    'system' => 'Sistema',
                ],

                'roles' => [
                    'associated_permissions' => 'Permisos asociados',
                    'name' => 'Nom',
                    'sort' => 'Orden',
                ],

                'users' => [
                    'active' => 'Activo',
                    'associated_roles' => 'Roles asociados',
                    'confirmed' => 'Confirmado',
                    'email' => 'Direcció de correo',
                    'name' => 'Nom',
                    'last_name' => 'Apellidos',
                    'first_name' => 'Nom',
                    'other_permissions' => 'Otros Permisos',
                    'password' => 'Contrasenja',
                    'password_confirmation' => 'Confirmació de la Contrasenja',
                    'send_confirmation_email' => 'Enviar correo de confirmació',
                    'timezone' => 'Zona horaria',
                    'language' => 'Lenguaje',
                ],
            ],
        ],

        'frontend' => [
            'avatar' => 'Avatar',
            'email' => 'Direcció de correo',
            'first_name' => 'Nom',
            'last_name' => 'Apellidos',
            'name' => 'Nom completo',
            'password' => 'Contrasenja',
            'password_confirmation' => 'Confirmació de la contrasenja',
            'phone' => 'Teléfono',
            'message' => 'Mensaje',
            'old_password' => 'Antigua contrasenja',
            'new_password' => 'Nueva contrasenja',
            'new_password_confirmation' => 'Confirmació de la nueva contrasenja',
            'timezone' => 'Zona Horaria',
            'language' => 'Lenguaje',
        ],
    ],
];
