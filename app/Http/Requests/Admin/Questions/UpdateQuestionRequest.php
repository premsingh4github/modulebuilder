<?php namespace App\Http\Requests\Admin\Questions;

use App\Http\Requests\Request;

class UpdateQuestionRequest extends Request
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
			'type' => 'required',
			'category' => 'required',
			'title' => 'required',
		];
    }

}