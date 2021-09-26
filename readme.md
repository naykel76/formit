<p align="center"><a href="https://naykel.com.au" target="_blank"><img src="https://avatars0.githubusercontent.com/u/32632005?s=460&u=d1df6f6e0bf29668f8a4845271e9be8c9b96ed83&v=4" width="120"></a></p>

<a href="https://packagist.org/packages/naykel/formit"><img src="https://img.shields.io/packagist/dt/naykel/formit" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/naykel/formit"><img src="https://img.shields.io/packagist/v/naykel/formit" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/naykel/formit"><img src="https://img.shields.io/packagist/l/naykel/formit" alt="License"></a>

# NAYKEL Formit

Form components package including WYSIWYG editor for NayKel Laravel applications.

- [Installation and Configuration](#installation-and-configuration)
  - [Before you begin](#before-you-begin)
  - [Install the package via composer:](#install-the-package-via-composer)
  - [Publish required assets:](#publish-required-assets)
  - [Publish optional assets:](#publish-optional-assets)
- [Common Attributes](#common-attributes)
  - [Submit](#submit)
- [Change log](#change-log)

## Installation and Configuration

### Before you begin

- This package requires Google reCAPTCHA for validation. Once installed be sure to add the Google Captcha keys to your `.env` file.

### Install the package via composer:

    composer require naykel/formit

### Publish required assets:

    php artisan vendor:publish --tag=nkr

### Publish optional assets:

    php artisan vendor:publish --tag=formit-opt



## Common Attributes

Form controls by default are wrapped inside a `.frm-row`.

| Attribute  | Default | Description                              |
| ---------- | ------- | ---------------------------------------- |
| for        | `null`  |                                          |
| value      | `null`  |                                          |
| label      | `null`  | Leave blank to remove label              |
| adv        | `false` | Remove `.frm-row` for custom layouts     |
| helpText   | `null`  |                                          |
| required   | `true`  |                                          |
| rowClasses | `null`  | Add additional classes to the `.frm-row` |


### Submit

Accepts standard HTML attributes including `class`

| Attribute  | Default | Description                                      |
| ---------- | ------- | ------------------------------------------------ |
| label      | `null`  | Leave blank for default "Submit"                 |
| default    | `true`  | Select to use the default 'primary' button style |
| adv        | `false` | Remove `.frm-row` for custom layouts             |
| rowClasses | `null`  | Add additional classes to the `.frm-row`         |

```html
<x-formit::submit />
<x-formit::submit label="Other Label" />
<x-formit::submit :default=false />
<x-formit::submit :default=false class="success" />
```



## Change log

See the [changelog](changelog.md) for more information on what has changed recently.

[link-author]: https://github.com/naykel76
[link-email]: nathan@naykel.com.au







