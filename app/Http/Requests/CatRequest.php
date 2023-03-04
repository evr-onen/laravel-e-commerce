<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'main_id' => 'required|integer',
            'name' => 'required|string'

        ];
    }
    public function messages()
    {
        return [
            'main_id.required' => 'Main kategori yazılmadı',
            'name.required' => 'Name boş geldi',
            'main_id.required' => 'main sayı olarak gelmeli',
            'name.required' => 'Name string bir ifade olarak gelmeli',
        ];
    }
}
