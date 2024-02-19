<?php
    namespace app\controllers;
    use app\core\Controller;
    use app\core\Request;
    use app\models\RegisterModel;

    class AuthController extends Controller
    {
        public function login()
        {
            $this->setLayout('mainLayout');
            return $this->render('login');
        }  

        public function register(Request $request)
        {
            $this->setLayout('mainLayout');
            $registerModel = new RegisterModel;

            if($request->isPost()) {
                $registerModel->loadData($request->getBody());
                if($registerModel->validate())
                {
                    return 'success';
                }
                echo '<pre>';
                var_dump($registerModel->errors);   
                echo '<pre>';

                return $this->render('register', ['model' => $registerModel]);
            }
            return $this->render('register', ['model' => $registerModel]);
        }
    }