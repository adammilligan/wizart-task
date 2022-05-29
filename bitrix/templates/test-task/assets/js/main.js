const validation = new JustValidate('#form');

validation
    .addField('#name', [
        {
            rule: 'required',
            errorMessage: 'Поле обязательно для заполнения',
        },
        {
            rule: 'minLength',
            value: 3,
        },
        {
            rule: 'maxLength',
            value: 30,
        },
        {
            rule: 'customRegexp',
            value: /^[аАбБвВгГдДеЕёЁжЖзЗиИйЙкКлЛмМнНоОпПрРсСтТуУфФхХцЦчЧшШщЩъЪыЫьЬэЭюЮяЯ]+$/,
            errorMessage: 'Поле заполнено не корректно'
        },
    ])
    .addField('#surname', [
        {
            rule: 'required',
            errorMessage: 'Поле обязательно для заполнения',
        },
        {
            rule: 'minLength',
            value: 3,
        },
        {
            rule: 'maxLength',
            value: 30,
        },
        {
            rule: 'customRegexp',
            value: /^[аАбБвВгГдДеЕёЁжЖзЗиИйЙкКлЛмМнНоОпПрРсСтТуУфФхХцЦчЧшШщЩъЪыЫьЬэЭюЮяЯ]+$/,
            errorMessage: 'Поле заполнено не корректно'
        },
    ])
    .addField('#email', [
        {
            rule: 'required',
            errorMessage: 'Поле обязательно для заполнения',
        },
        {
            rule: 'email',
            errorMessage: 'Email введён не верно',
        },
    ])
    .addField("#phone", [
    {
        rule: 'required',
        errorMessage: 'Поле обязательно для заполнения',
    },
    {
        rule: 'customRegexp',
        value: /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/,
        errorMessage: 'Поле заполнено не корректно'
    },
    ])
    .addField('#city', [
        {
            rule: 'required',
            errorMessage: 'Поле обязательно для заполнения',
        },
        {
            rule: 'minLength',
            value: 3,
        },
        {
            rule: 'maxLength',
            value: 30,
        },
        {
            rule: 'customRegexp',
            value: /^[аАбБвВгГдДеЕёЁжЖзЗиИйЙкКлЛмМнНоОпПрРсСтТуУфФхХцЦчЧшШщЩъЪыЫьЬэЭюЮяЯ]+$/,
            errorMessage: 'Поле заполнено не корректно'
        },
    ])
