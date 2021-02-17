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

    'accepted'             => '必须接受 :attribute.',
    'active_url'           => ':attribute 不是有效 URL.',
    'after'                => ':attribute 必须是晚于 :date 的时间.',
    'after_or_equal'       => ':attribute 必须是晚于或等于 :date 的时间.',
    'alpha'                => ':attribute 只接受英文字符.',
    'alpha_dash'           => ':attribute 只接受英文字符，数字和短横线.',
    'alpha_num'            => ':attribute 只接受英文字符，数字.',
    'array'                => ':attribute 只接受数组.',
    'before'               => ':attribute 必须是早于 :date 的时间.',
    'before_or_equal'      => ':attribute 必须是早于或等于 :date 的时间.',
    'between'              => [
        'numeric' => ':attribute 必须介于 :min and :max.',
        'file'    => ':attribute 必须介于 :min and :max KB.',
        'string'  => ':attribute 必须介于 :min and :max 英文字符.',
        'array'   => ':attribute 必须包含介于 :min and :max 元素.',
    ],
    'boolean'              => ':attribute 值必须是 true 或 false.',
    'confirmed'            => ':attribute 确认信息不匹配.',
    'date'                 => ':attribute 不是有效日期.',
    'date_format'          => ':attribute 不符合格式 :format.',
    'different'            => ':attribute 与 :other 必须不同.',
    'digits'               => ':attribute 必须 :digits 位.',
    'digits_between'       => ':attribute 必须介于 :min and :max digits.',
    'dimensions'           => ':attribute 含有无效图像维度.',
    'distinct'             => ':attribute 值有重复.',
    'email'                => ':attribute 必须是有效email.',
    'exists'               => '选中的 :attribute 无效.',
    'file'                 => ':attribute 必须是文件.',
    'filled'               => ':attribute 必须有值.',
    'image'                => ':attribute 必须是图像.',
    'in'                   => '选中的 :attribute 无效.',
    'in_array'             => ':other 中不包含 :attribute.',
    'integer'              => ':attribute 必须是整数.',
    'ip'                   => ':attribute 必须是有效 IP 地址.',
    'ipv4'                 => ':attribute 必须是有效 IPv4 地址.',
    'ipv6'                 => ':attribute 必须是有效 IPv6 地址.',
    'json'                 => ':attribute 必须是有效 JSON 字符串.',
    'max'                  => [
        'numeric' => ':attribute 必须大于 :max.',
        'file'    => ':attribute 必须大于 :max KB.',
        'string'  => ':attribute 必须大于 :max 字符.',
        'array'   => ':attribute 必须包含多于 :max 元素.',
    ],
    'mimes'                => ':attribute 文件类型必须是: :values.',
    'mimetypes'            => ':attribute 文件类型必须是: :values.',
    'min'                  => [
        'numeric' => ':attribute 至少 :min.',
        'file'    => ':attribute 至少 :min KB.',
        'string'  => ':attribute 至少 :min 字符.',
        'array'   => ':attribute 至少包含 :min 元素.',
    ],
    'not_in'               => '选中的 :attribute 无效.',
    'numeric'              => ':attribute 必须是数字.',
    'present'              => ':attribute 必须存在.',
    'regex'                => ':attribute 格式无效.',
    'required'             => ':attribute 必需.',
    'required_if'          => '当 :other 等于 :value 时，:attribute 必需.',
    'required_unless'      => 'unless :other is in :values.',
    'required_with'        => '当 :values 存在时，:attribute 必需.',
    'required_with_all'    => '当 :values 存在时，:attribute 必需.',
    'required_without'     => '当 :values 不存在时，:attribute 必需.',
    'required_without_all' => '当 :values 都不存在时，:attribute 必需.',
    'same'                 => ':attribute 与 :other 必须匹配.',
    'size'                 => [
        'numeric' => 'The :attribute 必须是 :size.',
        'file'    => 'The :attribute 必须是 :size KB.',
        'string'  => 'The :attribute 必须是 :size 字符.',
        'array'   => 'The :attribute 必须包含 :size 元素.',
    ],
    'string'               => 'The :attribute 必须是字符串.',
    'timezone'             => 'The :attribute 必须是有效时区.',
    'unique'               => 'The :attribute 已经存在.',
    'uploaded'             => 'The :attribute 上传失败.',
    'url'                  => 'The :attribute 格式无效.',

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
            'rule-name' => '自定义消息',
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
