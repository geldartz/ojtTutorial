<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DevelopersRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
       return $this->isMethod('post') ? $this->createRules() : $this->updateRules();
    }

    public function createRules() :array {
        return [
            'name' => 'required|unique:developers|max:100',
            'title' => 'required|max:100',
            'email' => 'required|email|unique:developers|max:100',
            'role' => 'required|max:20',
        ];
    }

    public function updateRules(){
        return [
            'name' => 'required|max:100|unique:developers,id,'.$this->get('id'),
            'title' => 'required|max:100',
            'email' => 'required|email|max:100|unique:developers,id,'.$this->get('id'),
            'role' => 'required|max:20',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(){
        return [
            'name.required' => 'Kulang ng name',
            'name.unique' => 'The name has been claimed by another individual.',
        ];
    }



}
