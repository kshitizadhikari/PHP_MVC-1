<?php
    namespace app\models;

    use app\core\Model;

    class RegisterModel extends Model
    {
        public string $firstName;
        public string $lastName;
        public string $email;
        public string $password;
        public string $confirmPassword;


        public function register()
        {
            echo "Creating user";
        }

        public function rules(): array
        {
            return [
                'firstName' => [self::RULE_REQUIRED],
                'lastName' => [self::RULE_REQUIRED],
                'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
                'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'min' => 24]],
                'confirmPassword' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']]
            ];
        }
    }
    

?>