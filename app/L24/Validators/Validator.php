<?php
/**
 * Created by PhpStorm.
 * User: jimmitjoo
 * Date: 15-01-20
 * Time: 15:09
 */
namespace L24\Validators;

use Illuminate\Validation\Factory as Validator;
use Illuminate\Validation\Validator as ValidatorInstance;

abstract class Validator {

    /**
     * @var Validator
     */
    private $validator;

    private $validation;

    function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    public function validate(array $data)
    {
        $this->validation = $this->validator->make($data, $this->getValidationRules());

        if ($this->validation->fails()){
            throw new \Exception('Validation failed', $this->getValidationErrors());
        }
    }

    protected function getValidationRules()
    {
        return $this->rules;
    }

    protected function getValidationErrors()
    {
        return $this->validation->errors();
    }

}