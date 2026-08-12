<?php

// Agrega este bloque dentro del array que retorna config/services.php,
// junto a los demás servicios (mailgun, postmark, etc.)

'ollama' => [
    'url' => env('OLLAMA_URL', 'http://localhost:11434'),
    'embedding_model' => env('OLLAMA_EMBEDDING_MODEL', 'nomic-embed-text'),
    'chat_model' => env('OLLAMA_CHAT_MODEL', 'qwen2.5:3b'),
],
