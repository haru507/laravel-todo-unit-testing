<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

abstract class ApiRequest extends FormRequest
{
    /**
     * Handle a failed validation attempt.
     *
     * @param  Validator  $validator
     * @return void
     *
     * @throws HttpResponseException
     */
    protected function failedValidation(Validator $validator): void
    {
        $data = [
            'message' => __('The given data was invalid.'),
            'errors' => $validator->errors()->toArray(),
        ];

        throw new HttpResponseException(response()->json($data, ResponseAlias::HTTP_UNPROCESSABLE_ENTITY));
    }
}
