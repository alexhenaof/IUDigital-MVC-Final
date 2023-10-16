<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => ['required', 'string', 'max:255'],
            'cantidad_creditos' => ['required', 'integer', 'min:1'],
            'nombre_docente' => ['required', 'string', 'max:255'],
            'prerrequisito' => ['nullable', 'exists:courses,nombre'],
            'trabajo_autonomo' => ['required', 'integer', 'min:1'],
            'trabajo_dirigido'=> ['required', 'integer', 'min:1'],
            'programa' => ['required', 'string', 'max:255'],
            'semestre'=> ['required', 'integer', 'min:1'],
        ];
    }
}
