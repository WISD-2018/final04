<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class UserRequest extends FormRequest
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
            //
            'name'=>'required|min:1|max:255',
            'address'=>'required|min:1|max:255',
            'phone'=>'required|min:10|max:255',
            'email'=>'required|min:1|max:255',
            'type'=>'required',

        ];
    }
}