<?php namespace App\Http\Requests\Admin\Jobaddlayouts;

use App\Http\Requests\Request;

class CreateJobaddlayoutRequest extends Request
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
			'logo' => 'required',
			'logo_position' => 'required',
			'header' => 'required',
			'header_position' => 'required',
			'button_color' => 'required',
			'background_color' => 'required',
			'text_color' => 'required',
		];
    }

}
