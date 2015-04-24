<?php
return array(

    'multi' => array(
        'teacher' => array(
            'driver' => 'database',
            'table' => 'teachers'
        ),
        'user' => array(
            'driver' => 'database',
            'table' => 'users'
        )
    ),

    'reminder' => array(

        'email' => 'emails.auth.reminder',

        'table' => 'password_reminders',

        'expire' => 60,

    ),

);
