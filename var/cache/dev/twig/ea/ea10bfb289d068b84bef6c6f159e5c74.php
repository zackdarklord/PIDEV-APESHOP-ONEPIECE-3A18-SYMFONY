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

/* Back/assets/vendor/tinymce/skins/ui/oxide-dark/content.mobile.css */
class __TwigTemplate_c6e2003203c6f2de41566aaac582167f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/skins/ui/oxide-dark/content.mobile.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/skins/ui/oxide-dark/content.mobile.css"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 */
.tinymce-mobile-unfocused-selections .tinymce-mobile-unfocused-selection {
  /* Note: this file is used inside the content, so isn't part of theming */
  background-color: green;
  display: inline-block;
  opacity: 0.5;
  position: absolute;
}
body {
  -webkit-text-size-adjust: none;
}
body img {
  /* this is related to the content margin */
  max-width: 96vw;
}
body table img {
  max-width: 95%;
}
body {
  font-family: sans-serif;
}
table {
  border-collapse: collapse;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/skins/ui/oxide-dark/content.mobile.css";
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
.tinymce-mobile-unfocused-selections .tinymce-mobile-unfocused-selection {
  /* Note: this file is used inside the content, so isn't part of theming */
  background-color: green;
  display: inline-block;
  opacity: 0.5;
  position: absolute;
}
body {
  -webkit-text-size-adjust: none;
}
body img {
  /* this is related to the content margin */
  max-width: 96vw;
}
body table img {
  max-width: 95%;
}
body {
  font-family: sans-serif;
}
table {
  border-collapse: collapse;
}
", "Back/assets/vendor/tinymce/skins/ui/oxide-dark/content.mobile.css", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\skins\\ui\\oxide-dark\\content.mobile.css");
    }
}
