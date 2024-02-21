<?php
    namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

    class HomeController extends Controller
    {
        
        public function home() {
            $params = [
                'name' => 'kshitiz',
            ];
            return $this->render('home', $params);
        }

        public function contact() {
            return $this->render('contact');
        }

        public function handleContact(Request $request) {
            $body = $request->getBody();
            var_dump($body);
            return "handle contact";
        }
    }

?>