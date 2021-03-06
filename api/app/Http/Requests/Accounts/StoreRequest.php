<?php

namespace App\Http\Requests\Accounts;

use App\Http\Requests\BaseRequest;

class StoreRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'balance' => 'required|numeric',
            'user_id' => 'required|numeric'
        ];
    }
}
