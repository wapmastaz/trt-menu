<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcademicSessionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date'],
            'is_active' => ['required', 'integer'],
            'current_session' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
