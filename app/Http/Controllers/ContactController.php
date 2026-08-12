<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLeadRequest;
use App\Models\Lead;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    public function store(StoreLeadRequest $request): RedirectResponse
    {
        Lead::create([
            'nombre' => $request->validated('nombre'),
            'contacto' => $request->validated('contacto'),
            'interes' => $request->validated('interes'),
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return redirect()
            ->to(route('index-3') . '#contacto')
            ->with('status', 'Recibimos tu solicitud. Te contactaremos pronto.');
    }
}
