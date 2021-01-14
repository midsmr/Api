<?php
// +---------------------------------------------------------
// | PHP is the best language in the world
// +---------------------------------------------------------
// | Copyright (c) 2021 midsmr All rights reserved.
// +---------------------------------------------------------
// | Date: 2021/1/14
// +---------------------------------------------------------
// | Author: midsmr <midsmr@qq.com>
// +---------------------------------------------------------
namespace App\Http\Controllers;

use App\Lib\Parsedown;
use Illuminate\Http\Request;

class DocController
{
    private $markdown;

    public function __construct()
    {
        $this->markdown = new Parsedown();
    }

    public function index(Request $request, $action = 'index')
    {
        if (isset(config('list')[$action])) {
            if ($action == 'index') {
                $markdown = file_get_contents(base_path('README.md'));
            } else {
                $markdown = file_get_contents(markdown_path($action . '.md'));
            }
            $content = $this->markdown->text($markdown);
            $title = config('list.' . $action . '.title');
            $description = config('list.' . $action . '.description');
        } else {
            $content = '<div style="text-align: center;"><h2>404 Not Found !!!</h2></div>';
            $title = '404 Not Found';
            $description = '没有该页面';
        }
        return view('app', ['content' => $content, 'title' => $title, 'description' => $description, 'action' => $action]);
    }
}