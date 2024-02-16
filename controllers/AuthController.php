<?php
    namespace app\controllers;
    use app\core\Controller;
    use app\core\Request;

    class AuthController extends Controller
    {
        public function login()
        {
            return $this->render('login');
        }

        public function register(Request $request)
        {
            return $this->render('register');
        }
    }