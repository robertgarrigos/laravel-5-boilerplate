<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Exception Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in Exceptions thrown throughout the system.
    | Regardless where it is placed, a button can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'backend' => [
        'access' => [
            'roles' => [
                'already_exists' => 'Aquest Rol ja existeix. Si us plau, especifiqueu un nom de Rol diferent.',
                'cant_delete_admin' => 'No podeu eliminar el Rol de Administrador.',
                'create_error' => 'Hi ha hagut un problema en crear el Rol. Intenteu-ho de nuevo.',
                'delete_error' => 'Hi ha hagut un problema al eliminar el Rol. Intenteu-ho de nuevo.',
                'has_users' => 'No podeu eliminar un Rol que tenga Usuarios asignados.',
                'needs_permission' => 'Debe seleccionar al menys un permiso para cada Rol.',
                'not_found' => 'El Rol requerido no existeix.',
                'update_error' => 'Hi ha hagut un problema al modificar el Rol. Intenteu-ho de nuevo.',
            ],

            'users' => [
                'already_confirmed' => 'Aquest Usuario ja fue confirmado.',
                'cant_confirm' => 'Hi ha hagut un problema al confirmar la cuenta de Usuario.',
                'cant_deactivate_self' => 'No podeu desactivarse a sí mismo.',
                'cant_delete_admin' => 'No podeu eliminar el superadministrador.',
                'cant_delete_self' => 'No podeu eliminarse a sí mismo.',
                'cant_delete_own_session' => 'No podeus borrar su propia sessió.',
                'cant_restore' => 'Aquest Usuario no fue eliminado, por lo que no se podeu restaurar.',
                'cant_unconfirm_admin' => 'No podeu anular la confirmació del superadministrador.',
                'cant_unconfirm_self' => 'No podeu anular su propia confirmació.',
                'create_error' => 'Hi ha hagut un problema al crear el Usuario. Intenteu-ho de nuevo.',
                'delete_error' => 'Hi ha hagut un problema al eliminar el Usuario. Intenteu-ho de nuevo.',
                'delete_first' => 'Aquest Usuario debe ser eliminado primero antes de que pueda ser destruido permanentemente.',
                'email_error' => 'Ja hay un Usuario con la direcció de e-mail especificada.',
                'mark_error' => 'Hi ha hagut un problema al modificar el Usuario. Intenteu-ho de nuevo.',
                'not_confirmed' => 'Aquest Usuario no está confirmado.',
                'not_found' => 'El Usuario requerido no existeix.',
                'restore_error' => 'Hi ha hagut un problema al restaurar el Usuario. Intenteu-ho de nuevo.',
                'role_needed_create' => 'Los Usuarios deben tener al menys un Rol.',
                'role_needed' => 'Debe elegir al menys un Rol.',
                'social_delete_error' => 'Hi ha hagut un problema al eliminar la cuenta social del Usuario.',
                'update_error' => 'Hi ha hagut un problema al modificar el Usuario. Intenteu-ho de nuevo.',
                'update_password_error' => 'Hi ha hagut un problema al cambiar la contrasenja. Intenteu-ho de nuevo.',
            ],
        ],
    ],

    'frontend' => [
        'auth' => [
            'confirmation' => [
                'already_confirmed' => 'Su cuenta ja ha sido verificada.',
                'confirm' => '¡Revise su correo i verifique su cuenta!',
                'created_confirm' => 'Su cuenta ha sido creada. Le hemos enviado un e-mail con un enlace de verificació.',
                'created_pending' => 'Su cuenta fue creada con éxito i está pendiente de aprobació. Se enviará un correo electrónico cuando su cuenta sea aprobada.',
                'mismatch' => 'El código de verificació no coincide.',
                'not_found' => 'El código de verificació especificado no existeix.',
                'pending' => 'Su cuenta esta actualmente pendiente de aprobació',
                'resend' => 'Su cuenta no ha sido verificada todavía. Si us plau, revise su e-mail, o <a href=":url">pulse aquí</a> para re-enviar el correo de verificació.',
                'success' => '¡Su cuenta ha sido verificada satisfactoriamente!',
                'resent' => 'Un nuevo correo de verificació le ha sido enviado.',
            ],

            'deactivated' => 'Su cuenta ha sido desactivada.',
            'email_taken' => 'El correo especificado ja está registrado.',

            'password' => [
                'change_mismatch' => 'La contrasenja antigua no coincide.',
                'reset_problem' => 'Hi ha hagut un problema al restablecer su contrasenja. Si us plau, vuelva a enviar el correo electrónico de restablecimiento de contrasenja',
            ],

            'registration_disabled' => 'Los registros se encuentran actualmente cerrados.',
        ],
    ],
];
