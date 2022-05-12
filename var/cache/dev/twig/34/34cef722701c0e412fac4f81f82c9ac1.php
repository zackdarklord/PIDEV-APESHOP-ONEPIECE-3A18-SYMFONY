<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Back/assets/vendor/tinymce/skins/content/dark/content.css */
class __TwigTemplate_38812423e8ed39ef9ee8066f2641f6ff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/skins/content/dark/content.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/skins/content/dark/content.css"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 */
body {
  background-color: #2f3742;
  color: #dfe0e4;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  line-height: 1.4;
  margin: 1rem;
}
a {
  color: #4099ff;
}
table {
  border-collapse: collapse;
}
/* Apply a default padding if legacy cellpadding attribute is missing */
table:not([cellpadding]) th,
table:not([cellpadding]) td {
  padding: 0.4rem;
}
/* Set default table styles if a table has a positive border attribute
   and no inline css */
table[border]:not([border=\"0\"]):not([style*=\"border-width\"]) th,
table[border]:not([border=\"0\"]):not([style*=\"border-width\"]) td {
  border-width: 1px;
}
/* Set default table styles if a table has a positive border attribute
   and no inline css */
table[border]:not([border=\"0\"]):not([style*=\"border-style\"]) th,
table[border]:not([border=\"0\"]):not([style*=\"border-style\"]) td {
  border-style: solid;
}
/* Set default table styles if a table has a positive border attribute
   and no inline css */
table[border]:not([border=\"0\"]):not([style*=\"border-color\"]) th,
table[border]:not([border=\"0\"]):not([style*=\"border-color\"]) td {
  border-color: #6d737b;
}
figure {
  display: table;
  margin: 1rem auto;
}
figure figcaption {
  color: #8a8f97;
  display: block;
  margin-top: 0.25rem;
  text-align: center;
}
hr {
  border-color: #6d737b;
  border-style: solid;
  border-width: 1px 0 0 0;
}
code {
  background-color: #6d737b;
  border-radius: 3px;
  padding: 0.1rem 0.2rem;
}
.mce-content-body:not([dir=rtl]) blockquote {
  border-left: 2px solid #6d737b;
  margin-left: 1.5rem;
  padding-left: 1rem;
}
.mce-content-body[dir=rtl] blockquote {
  border-right: 2px solid #6d737b;
  margin-right: 1.5rem;
  padding-right: 1rem;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/skins/content/dark/content.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 */
body {
  background-color: #2f3742;
  color: #dfe0e4;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  line-height: 1.4;
  margin: 1rem;
}
a {
  color: #4099ff;
}
table {
  border-collapse: collapse;
}
/* Apply a default padding if legacy cellpadding attribute is missing */
table:not([cellpadding]) th,
table:not([cellpadding]) td {
  padding: 0.4rem;
}
/* Set default table styles if a table has a positive border attribute
   and no inline css */
table[border]:not([border=\"0\"]):not([style*=\"border-width\"]) th,
table[border]:not([border=\"0\"]):not([style*=\"border-width\"]) td {
  border-width: 1px;
}
/* Set default table styles if a table has a positive border attribute
   and no inline css */
table[border]:not([border=\"0\"]):not([style*=\"border-style\"]) th,
table[border]:not([border=\"0\"]):not([style*=\"border-style\"]) td {
  border-style: solid;
}
/* Set default table styles if a table has a positive border attribute
   and no inline css */
table[border]:not([border=\"0\"]):not([style*=\"border-color\"]) th,
table[border]:not([border=\"0\"]):not([style*=\"border-color\"]) td {
  border-color: #6d737b;
}
figure {
  display: table;
  margin: 1rem auto;
}
figure figcaption {
  color: #8a8f97;
  display: block;
  margin-top: 0.25rem;
  text-align: center;
}
hr {
  border-color: #6d737b;
  border-style: solid;
  border-width: 1px 0 0 0;
}
code {
  background-color: #6d737b;
  border-radius: 3px;
  padding: 0.1rem 0.2rem;
}
.mce-content-body:not([dir=rtl]) blockquote {
  border-left: 2px solid #6d737b;
  margin-left: 1.5rem;
  padding-left: 1rem;
}
.mce-content-body[dir=rtl] blockquote {
  border-right: 2px solid #6d737b;
  margin-right: 1.5rem;
  padding-right: 1rem;
}
", "Back/assets/vendor/tinymce/skins/content/dark/content.css", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\skins\\content\\dark\\content.css");
    }
}
