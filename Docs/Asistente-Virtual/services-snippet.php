<?php

'ollama' => [
    'url' => env('OLLAMA_URL', 'http://localhost:11434'),
    'embedding_model' => env('OLLAMA_EMBEDDING_MODEL', 'nomic-embed-text'),
    'chat_model' => env('OLLAMA_CHAT_MODEL', 'qwen2.5:3b'),
],
