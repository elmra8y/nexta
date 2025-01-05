<?php

namespace App\Http\Controllers;

class ProjectsController extends Controller
{
    public function show($type)
    {
        $content = [];
        if ($type == 'ux')
            $content = $this->uxContent();
        return view('our-services-details');
    }

    public function uxContent(): array
    {
        return [
            'paragraph1' => 'Services',
            'paragraph2' => 'Services',
            'paragraph3' => 'Services',
        ];

    }
}
