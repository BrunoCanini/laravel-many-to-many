<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            "title" => "required|min:3|max:160",
            "content" => "max:65535",
            "deadline" => "required",
            "image"=> "nullable|image|",
            "category_id" => "nullable|exists:categories,id",
            "technologys" => "required",

        ];
    }

    public function messages()
    {
        return[
            "title.required" => "Titolo Mancante"
        ];
    }
}
