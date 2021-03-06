<?php namespace Dick\TranslationManager\Http\Requests;

use App\Http\Requests\Request;
use Dick\CRUD\Http\Requests\CrudRequest as CrudRequest;

class LanguageRequest extends CrudRequest {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		// only allow creates if the user is logged in
		return \Auth::check() && (\Entrust::hasRole('superadmin'));
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required|min:3|max:255',
			'abbr' => 'required|min:2|max:2'
		];
	}

}
