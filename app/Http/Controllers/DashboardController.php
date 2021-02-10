<?php

namespace App\Http\Controllers;

class DashboardController extends RequestController
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        if ($this->isMethod('GET')) {
            return $this->view();
        }

        return back()->with('success', 'Successfully Done That.');
    }
}
