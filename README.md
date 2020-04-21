# Symfony

Symfony 5.1 starting guide by practice
___

Table of content

*   [📦 Installation](#installation)
*   [🚀Usage](#🚀usage)
*   [⚙️ Prerequist](#prerequist)
*   [☑️ Controller and route](#controllerandroutes)
*   [☑️ View](#view)
*   *   [☑️ Twig](#twig)
*   *   [☑️ Asset](#asset)

<a id="installation"></a>

___

## 📦 Installation

[@see https://symfony.com/doc/current/setup.html](https://symfony.com/doc/current/setup.html)

Without symfony bin:

```bash
composer create-project symfony/website-skeleton media-bank
```

OSX user copy/paste file *composer.phar* at the root of the project folder. 
Without symfony bin:

```bash
$ php composer.phar create-project symfony/website-skeleton media-bank
```

```bash
cd media-bank
```

___

<a id="usage"></a>

## 🚀Usage

Run the application

```bash
php -S localhost:8000 -t public
```

___


<a id="prerequist"></a>

## ⚙️ Prerequist

[@see https://symfony.com/doc/4.2/reference/requirements.html](https://symfony.com/doc/4.2/reference/requirements.html)

*Install requirements-checker for verify prerequist:*

```bash
composer require symfony/requirements-checker
```

Navigate to: http://localhost:8000/check.php

*   intl
*   realpath_cache_size
*   post_max_size
*   opcache

*Fix your php.ini:*

```ini
zend_extension=php_opcache.dll
enabled opcache.enable=1
```

[@see https://www.php.net/manual/fr/install.windows.recommended.php](https://www.php.net/manual/fr/install.windows.recommended.php)

___


<a id="controllerandroutes"></a>

# ✔️ Controller and Routes

We need to rely a **route** to a controller **action**

## Controller

Create controller:

```bash
bin/console make:controller Foo
```

or

```bash
php bin/console make:controller Foo
```

It generate:
* src/Controller/FooController
* templates/foo/index.html.twig
* The route will be added in annotation

*Create a subfolder (powershell terminal):*

```bash
bin/console make:controller Foo\Bar
```

## Route

* path: "/foo"
* name: "foo"
* methods: {"GET","POST"}

### Path

* **Slug is the dynamic part of path**: 
`id` is the slug and it is a var avalaible in argument

```php
/**
 * @Route("/foo/{id}/bar/{otherid}")
 */
```

* **Slug requirements**: need for control slug format

```php
/**
 * @Route("/foo/{id</d{3}>}")
 */
```

Regular Expression needed, interpreted by Symfony!


### Methods

Can constraint route for methods, 405 is throwed for not accepted method

```php
/**
 * @Route(
 *     "/foo/{id</d{3}>}",
 *     methods={"POST","PUT"}
 * )
 */
```

👨🏻‍💻 Manipulation


* Create controllers and actions then and edit routes with constraints for these url's:
```bash
/movies
/movies/action
/movies/horror
... (4 genre)
/movie/tt232323
```

### Name

* name must be unique

___

<a id="view"></a>

# ✔️ View

<a id="twig"></a>

## Twig

Templates are include with the render method, render return a Response and accept 2 arguments

```php
return $this->render('movies/show_all.html.twig', [
    'controller_name' => 'MoviesController',
]);
```

*   **path**: begin at the top level of templates folder
*   **data**: provided data for template

```twig
<h1>Hello {{ controller_name }}!</h1>
```
Templates can access to data provided by render

**Twig is the template engine used by Symfony**
    
### Interplollation

```twig
{{ my_local_var }}
```

### Filters

*Example for "raw" filter:*

```twig
{{ my_local_var|raw }}
```

### Inclusion

```twig
{% include 'my_template.html.twig' %}
```

### Generalization

*document.html.twig*
```html
<body></body>
```

*my_template.html.twig*
```twig
{% extends 'document.html.twig' %}
```

You want to insert content into body...


### Block

All templates can declare blocks, it's a placement where child templates can insert content, falcultatively.

*document.html.twig*
```twig
<body>
{% block body%}{% endblock%}
</body>
```

*my_template.html.twig*

```twig
{% extends 'document.html.twig' %}

{% block body%}
    Child content
{% endblock%}
```
**A child template can not declare content outside blocks**


👨🏻‍💻 Manipulation

* Maximum template restitution
* Each template must extends from a base
* Each template must display a navbar
* Each template must display a title
* Base title must be determined by child template


<a id="asset"></a>

## Assets management









