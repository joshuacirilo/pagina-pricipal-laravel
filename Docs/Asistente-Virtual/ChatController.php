<?php

namespace App\Http\Controllers;

use App\Services\ChatService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function __construct(private readonly ChatService $chatService) {}

    public function ask(Request $request): JsonResponse
    {
        $data = $request->validate(['question' => ['required', 'string', 'max:500']]);

        try {
            return response()->json($this->chatService->ask($data['question']));
        } catch (\Throwable $exception) {
            report($exception);

            return response()->json([
                'error' => 'El asistente no está disponible en este momento. Intenta de nuevo más tarde.',
            ], 503);
        }
    }
}
