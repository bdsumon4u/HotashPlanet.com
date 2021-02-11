<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Category::class);

        return $this->view([
            'categories' => Category::depthed()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Category::class);

        return $this->view([

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        Category::create($request->validated());

        return redirect()
            ->action([static::class, 'index'])
            ->with('success', 'Category Has Been Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $this->authorize('view', $category);

        return $this->view([

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $this->authorize('update', $category);

        return $this->view([

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->validated());

        return redirect()
            ->action([static::class, 'index'])
            ->with('success', 'Category Has Been Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $this->authorize('delete', $category);

        $category->delete();

        return redirect()
            ->action([static::class, 'index'])
            ->with('success', 'Category Has Been Deleted.');
    }

    /**
     * Restore the specified resource from trash.
     *
     * @param \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function restore(Category $category)
    {
        $this->authorize('restore', $category);

        $category->restore();

        return redirect()
            ->action([static::class, 'index'])
            ->with('success', 'Category Has Been Restored.');
    }

    /**
     * Permanently remove the specified resource from storage.
     *
     * @param \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function forceDelete(Category $category)
    {
        $this->authorize('forceDelete', $category);

        $category->forceDelete();

        return redirect()
            ->action([static::class, 'index'])
            ->with('success', 'Category Has Been Permanently Deleted.');
    }
}
