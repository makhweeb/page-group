<?php

namespace App\Http\Controllers;

use App\Enums\FormType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FormController extends Controller
{
    private function rules()
    {
        return [
            FormType::GENERAL_REQUEST->value => [
                'name' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string', 'max:255'],
            ],
            FormType::CALL_REQUEST->value => [
                'phone' => ['required', 'string', 'max:255'],
            ],
        ];
    }

    public function __invoke(Request $request)
    {
        $formType = FormType::tryFrom($request->input('type'));

        if ($formType === null) {
            return back();
        }

        $rules = $this->rules()[$formType->value];
        $validated = $request->validate($rules);

        $text = "📩 Заявка:\n\n";

        foreach ($validated as $key => $value) {
            $key = ucfirst($key);
            $text .= "🔸 {$key}: {$value}\n";
        }

        Http::post(config('services.telegram.bot_url'), [
            'chat_id' => config('services.telegram.chat_id'),
            'text' => $text,
        ]);

        return back()->with('success', true);
    }
}