<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'O campo :attribute deve ser aceito.',
    'active_url'           => 'O campo :attribute não é uma URL válida.',
    'after'                => 'O campo :attribute deve ser uma data maior que :date.',
    'after_or_equal'       => 'O campo :attribute deve ser uma data maior ou igual a :date.',
    'alpha'                => 'O campo :attribute deve apenas conter letras.',
    'alpha_dash'           => 'O campo :attribute deve apenas conter letras, números, and traços.',
    'alpha_num'            => 'O campo :attribute deve apenas conter letras e números.',
    'array'                => 'O campo :attribute deve ser um array.',
    'before'               => 'O campo :attribute deve ser uma data menor que :date.',
    'before_or_equal'      => 'O campo :attribute deve ser uma data menor ou igual a :date.',
    'between'              => [
        'numeric' => 'O campo :attribute deve ser entre :min e :max.',
        'file'    => 'O campo :attribute deve ser entre :min e :max kbs.',
        'string'  => 'O campo :attribute deve ser entre :min e :max carácteres.',
        'array'   => 'O campo :attribute must have entre :min e :max items.',
    ],
    'boolean'              => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed'            => 'O campo :attribute de confirmação não é igual.',
    'date'                 => 'O campo :attribute não é uma data válida.',
    'date_format'          => 'O campo :attribute não tem o formato correto :format.',
    'different'            => 'O campo :attribute e :other deve ser diferentes.',
    'digits'               => 'O campo :attribute deve ser :digits digitos.',
    'digits_between'       => 'O campo :attribute deve ser entre :min e :max digitos.',
    'dimensions'           => 'O campo :attribute tem a dimensão incorreta.',
    'distinct'             => 'O campo :attribute tem um valor duplicado.',
    'email'                => 'O campo :attribute deve ser um email válido.',
    'exists'               => 'O campo selecionado :attribute é inválido.',
    'file'                 => 'O campo :attribute deve ser um arquivo.',
    'filled'               => 'O campo :attribute teve ter um valor.',
    'image'                => 'O campo :attribute deve ser um imagem.',
    'in'                   => 'O campo selecionado :attribute é inválido.',
    'in_array'             => 'O campo :attribute não existe em :other.',
    'integer'              => 'O campo :attribute deve ser um inteiro.',
    'ip'                   => 'O campo :attribute deve ser um IP válido.',
    'ipv4'                 => 'O campo :attribute deve ser um IPv4 válido.',
    'ipv6'                 => 'O campo :attribute deve ser um IPv6 válido.',
    'json'                 => 'O campo :attribute deve ser um JSON válido.',
    'max'                  => [
        'numeric' => 'O campo :attribute não pode ser maior que :max.',
        'file'    => 'O campo :attribute não pode ser maior que :max kbs.',
        'string'  => 'O campo :attribute não pode ser maior que :max carácteres.',
        'array'   => 'O campo :attribute não deve ter mais que :max itens.',
    ],
    'mimes'                => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes'            => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'min'                  => [
        'numeric' => 'O campo :attribute deve ser ao menos :min.',
        'file'    => 'O campo :attribute deve ser ao menos :min kbs.',
        'string'  => 'O campo :attribute deve ser ao menos :min carácteres.',
        'array'   => 'O campo :attribute must have ao menos :min itens.',
    ],
    'not_in'               => 'O selected :attribute é inválido.',
    'numeric'              => 'O campo :attribute deve ser um número.',
    'present'              => 'O campo :attribute deve estar presente.',
    'regex'                => 'O campo :attribute está com formato inválido.',
    'required'             => 'O campo :attribute é obrigatório.',
    'required_if'          => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_unless'      => 'O campo :attribute é obrigatório menos quando :other estiver em :values.',
    'required_with'        => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without'     => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos valores :values está presente.',
    'same'                 => 'O campo :attribute e :other devem ser iguais.',
    'size'                 => [
        'numeric' => 'O campo :attribute deve ser :size.',
        'file'    => 'O campo :attribute deve ser :size kbs.',
        'string'  => 'O campo :attribute deve ser :size carácteres.',
        'array'   => 'O campo :attribute must contain :size items.',
    ],
    'string'               => 'O campo :attribute deve ser um texto.',
    'timezone'             => 'O campo :attribute deve ser um zona válida.',
    'unique'               => 'O campo :attribute já existe.',
    'uploaded'             => 'O campo :attribute falhou na atualização.',
    'url'                  => 'O campo :attribute tem o formato inválido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
