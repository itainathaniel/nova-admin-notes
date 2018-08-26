<?php

namespace Itainathaniel\AdminNotes;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class AdminNotes extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('admin-notes', __DIR__.'/../dist/js/tool.js');
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('admin-notes::navigation');
    }
}
