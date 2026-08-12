<?php

namespace App\Http\Controllers;

use App\Services\ChatService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ChatController extends Controller
{
    public function __construct(protected ChatService $chatService) {}

    public function ask(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'question' => 'required|string|max:500',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        try {
            $result = $this->chatService->ask($request->input('question'));
        } catch (\Throwable $e) {
            report($e);

            return response()->json([
                'error' => 'El asistente no está disponible en este momento. Intenta de nuevo más tarde.',
            ], 503);
        }

        return response()->json($result);
    }
}
