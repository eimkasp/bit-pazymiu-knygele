<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		// nepamirsti nustatyti i true
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		$rules = [
			'name' => 'required|max:255|min:2',
			'surname' => 'required|max:255',
			'email' => 'required|email',
		];

		return $rules;
	}

	public function messages() {
		$messages = [
			'required' => 'Laukelis :attribute yra privalomas',
		];

		return $messages;
	}
}
