<?php
    namespace app\models;

    use app\core\Model;
    use app\core\DbModel;

    class User extends DbModel
    {
        const STATUS_INACTIVE = 0;
        const STATUS_ACTIVE = 1;
        const STATUS_DELETED = 2;
        public string $firstName = '';
        public string $lastName = '';
        public string $email = '';
        public string $password = '';
        public string $confirmPassword = '';
        public int $status;

        public function tableName(): string {
            return 'users';
        }

        public function attributes(): array {
            return ['firstName', 'lastName', 'email', 'password', 'status'];
        }

        public function save()
        {
            $this->password = password_hash($this->password, PASSWORD_DEFAULT);
            $this->status = self::STATUS_INACTIVE; 
            return parent::save();
        }

        public function rules(): array
        {
            return [
                'firstName' => [self::RULE_REQUIRED],
                'lastName' => [self::RULE_REQUIRED],
                'email' => [self::RULE_REQUIRED, self::RULE_EMAIL, [self::RULE_UNIQUE, 'class' => self::class]],
                'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 24]],
                'confirmPassword' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']]
            ];
        }
    }
    

?>