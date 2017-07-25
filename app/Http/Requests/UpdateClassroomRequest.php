<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClassroomRequest extends CreateClassroomRequest
{
	public function rules()
    {
        return [
            'num_class' => 'required|integer',
        ];
    }
}
