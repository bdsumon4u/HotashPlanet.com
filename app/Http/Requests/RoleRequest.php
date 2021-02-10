<?php

namespace App\Http\Requests;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
{
    protected $param = 'role';
    protected $model = Role::class;

    protected $rules = [
        //
    ];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        if ($this->isMethod('POST')) {
            return $this->user()->can('create', $this->model);
        }

        $this->model = $this->route($this->param);
        return $this->user()->can('update', $this->model);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->isMethod('POST')) {
            return $this->rules;
        }

        return array_merge($this->rules, [
            //
        ]);
    }
}
