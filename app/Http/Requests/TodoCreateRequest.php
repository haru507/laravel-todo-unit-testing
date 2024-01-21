<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoCreateRequest extends FormRequest
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
            'title' => 'required|string|min:1|max:255',
            'isCompleted' => 'nullable|boolean',
        ];
    }

    /**
     * 定義済みバリデーションルールのエラーメッセージ取得
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'required' => ':attributeは必須です。',
            'title.string' => ':attributeは不正な型が指定されています。',
            'title.min' => ':attributeは1文字以上を入力してください。',
            'title.max' => ':attributeは255文字以下で入力してください。',
            'isCompleted.boolean' => ':attributeは不正な型が指定されています。',
        ];
    }

    /**
     * バリデーションエラーのカスタム属性の取得
     *
     * @return array
     */
    public function attributes(): array
    {
        return [
            'title' => 'タイトル',
            'isCompleted' => '完了フラグ'
        ];
    }
}
