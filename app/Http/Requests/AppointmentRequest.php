<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'appointmentTitle' => 'required|min:3',
            'appointmentDescription' => 'required|min:3',
        ];
    }

    public function messages()
    {
        return [
            'appointmentTitle.required' => 'Bitte eine Titel angeben!',
            'appointmentTitle.min' => 'Der Titel muß mindestens :min Zeichen enthalten!',
            'appointmentDescription.required' => 'Bitte einen Preis angeben!',
            'appointmentDescription.min' => 'Der Preis darf nur numerische Zeichen enthalten!',
        ];
    }
}
