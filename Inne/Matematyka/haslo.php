<?php

$haslo = password_hash('Geografia20', PASSWORD_BCRYPT);

return [
    'imie' => 'admin',
    'pass' => $haslo
];