<?php

namespace App\Http\Controllers;

class ProjectsController extends Controller
{
    public function show($type)
    {
        $content = [];
        switch ($type) {
            case 'ozee':
                $content = $this->ozeeContent();
                break;
            case 'wakfy':
                $content = $this->wakfyContent();
                break;
            case 'qsalary':
                $content = $this->qsalaryContent();
                break;
            case 'jawaher':
                $content = $this->jawaherContent();
                break;
            case 'atlas':
                $content = $this->atlasContent();
                break;
            case 'flyallover':
                $content = $this->flyalloverContent();
                break;
            case 'nyc':
                $content = $this->nycContent();
                break;
            default:
                abort(404);
        }
        return view('our-work-details', ['content' => $content]);
    }

    public function ozeeContent(): array
    {
        return [
            'paragraph1' => __('projects.ozee.paragraph1'),
            'paragraph2' => __('projects.ozee.paragraph2'),
            'paragraph3' => __('projects.ozee.paragraph3'),
            'images' => [
                asset('assets/img/projects/ozee/1.jpg'),
                asset('assets/img/projects/ozee/2.jpg'),
                asset('assets/img/projects/ozee/3.jpg'),
            ],
        ];
    }

    public function wakfyContent(): array
    {
        return [
            'paragraph1' => __('projects.wakfy.paragraph1'),
            'paragraph2' => __('projects.wakfy.paragraph2'),
            'paragraph3' => __('projects.wakfy.paragraph3'),
            'images' => [
                asset('assets/img/projects/wakfy/1.jpg'),
                asset('assets/img/projects/wakfy/2.jpg'),
                asset('assets/img/projects/wakfy/3.jpg'),
            ],
        ];
    }

    public function qsalaryContent(): array
    {
        return [
            'paragraph1' => __('projects.qsalary.paragraph1'),
            'paragraph2' => __('projects.qsalary.paragraph2'),
            'paragraph3' => __('projects.qsalary.paragraph3'),
            'images' => [
                asset('assets/img/projects/qsalary/1.jpg'),
                asset('assets/img/projects/qsalary/2.jpg'),
                asset('assets/img/projects/qsalary/3.jpg'),
            ],
        ];
    }

    public function jawaherContent(): array
    {
        return [
            'paragraph1' => __('projects.jawaher.paragraph1'),
            'paragraph2' => __('projects.jawaher.paragraph2'),
            'paragraph3' => __('projects.jawaher.paragraph3'),
            'images' => [
                asset('assets/img/projects/jawaher/1.jpg'),
                asset('assets/img/projects/jawaher/2.jpg'),
                asset('assets/img/projects/jawaher/3.jpg'),
            ],
        ];
    }

    public function atlasContent(): array
    {
        return [
            'paragraph1' => __('projects.atlas.paragraph1'),
            'paragraph2' => __('projects.atlas.paragraph2'),
            'paragraph3' => __('projects.atlas.paragraph3'),
            'images' => [
                asset('assets/img/projects/atlas/1.jpg'),
                asset('assets/img/projects/atlas/2.jpg'),
                asset('assets/img/projects/atlas/3.jpg'),
            ],
        ];
    }

    public function flyalloverContent(): array
    {
        return [
            'paragraph1' => __('projects.flyallover.paragraph1'),
            'paragraph2' => __('projects.flyallover.paragraph2'),
            'paragraph3' => __('projects.flyallover.paragraph3'),
            'images' => [
                asset('assets/img/projects/flyallover/1.jpg'),
                asset('assets/img/projects/flyallover/2.jpg'),
                asset('assets/img/projects/flyallover/3.jpg'),
            ],
        ];
    }

    public function nycContent(): array
    {
        return [
            'paragraph1' => __('projects.nyc.paragraph1'),
            'paragraph2' => __('projects.nyc.paragraph2'),
            'paragraph3' => __('projects.nyc.paragraph3'),
            'images' => [
                asset('assets/img/projects/nyc/1.jpg'),
                asset('assets/img/projects/nyc/2.jpg'),
                asset('assets/img/projects/nyc/3.jpg'),
            ],
        ];
    }
}
