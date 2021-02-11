<?php

namespace App\Http\Requests;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    protected $param = 'category';
    protected $model = Category::class;

    protected $rules = [
        'name' => 'required|string|max:25',
        'slug' => 'required|string|max:25',
        'parent_id' => 'nullable|integer',
        'order' => 'nullable|integer',
    ];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
