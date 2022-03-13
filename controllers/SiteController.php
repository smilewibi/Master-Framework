<?php

namespace app\controllers;

class SiteController
{
    public function home()
    {
        $params = [
            'name' => "Master Framework"
        ];
        return Application::$app->router->renderContent('home', $params);
    }

    public function contact()
    {
        return Application::$app->router->renderView('contact');
    }
    
    public function handleContact()
    {
        return 'Handling Submitted data';
    } 
}
