<?php
namespace app\core\form;

use app\core\Model;

class InputField extends BaseField
{
    public string $fieldType;
    
    public const FIELD_TYPE_TEXT = 'text';
    public const FIELD_TYPE_NUMBER = 'number';
    public const FIELD_TYPE_PASSWORD = 'password';

    public function __construct(Model $model, string $attribute)
    {
        $this->fieldType = self::FIELD_TYPE_TEXT;
        parent::__construct($model, $attribute);
    }

    public function passwordField()
    {
        $this->fieldType = self::FIELD_TYPE_PASSWORD;
        return $this;
    }

    public function renderInput(): string
    {
        return sprintf('<input type="%s" name="%s" value="%s" class="form-control%s">',
        $this->attribute,
        $this->model->{$this->attribute},
        $this->model->hasError($this->attribute) ? ' is-invalid' : '',
        $this->model->getFirstError($this->attribute)
        
    );
    }
}
?>
