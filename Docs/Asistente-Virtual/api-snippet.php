<?php

// Agrega esto en routes/api.php

use App\Http\Controllers\ChatController;

Route::post('/chat', [ChatController::class, 'ask'])
    ->middleware('throttle:20,1'); // opcional: máximo 20 preguntas por minuto por IP
