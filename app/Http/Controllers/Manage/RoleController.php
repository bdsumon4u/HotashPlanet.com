<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Models\Permission;
use App\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Role::class);

        return $this->view([
            'permissions' => Permission::grouped(),
            'roles' => Role::with('permissions')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Role::class);

        return $this->view([

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\RoleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        Role::create($request->validated());

        return redirect()
            ->action([static::class, 'index'])
            ->with('success', 'Role Has Been Created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        $this->authorize('view', $role);

        return $this->view([

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $this->authorize('update', $role);

        return $this->view([

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\RoleRequest  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, Role $role)
    {
        $role->update($request->validated());

        return redirect()
            ->action([static::class, 'index'])
            ->with('success', 'Role Has Been Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $this->authorize('delete', $role);

        $role->delete();

        return redirect()
            ->action([static::class, 'index'])
            ->with('success', 'Role Has Been Deleted.');
    }

    /**
     * Restore the specified resource from trash.
     *
     * @param \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function restore(Role $role)
    {
        $this->authorize('restore', $role);

        $role->restore();

        return redirect()
            ->action([static::class, 'index'])
            ->with('success', 'Role Has Been Restored.');
    }

    /**
     * Permanently remove the specified resource from storage.
     *
     * @param \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function forceDelete(Role $role)
    {
        $this->authorize('forceDelete', $role);

        $role->forceDelete();

        return redirect()
            ->action([static::class, 'index'])
            ->with('success', 'Role Has Been Permanently Deleted.');
    }
}
