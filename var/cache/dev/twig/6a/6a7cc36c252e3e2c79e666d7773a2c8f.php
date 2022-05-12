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

/* Back/assets/vendor/tinymce/package.json */
class __TwigTemplate_cb0839acc1f5a1b5fec867a1623b0502 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/package.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/package.json"));

        // line 1
        echo "{
\t\"name\": \"tinymce\",
\t\"version\": \"5.10.2\",
\t\"repository\": {
\t\t\"type\": \"git\",
\t\t\"url\": \"https://github.com/tinymce/tinymce.git\",
\t\t\"directory\": \"modules/tinymce\"
\t},
\t\"description\": \"Web based JavaScript HTML WYSIWYG editor control.\",
\t\"author\": \"Tiny Technologies, Inc\",
\t\"main\": \"tinymce.js\",
\t\"types\": \"tinymce.d.ts\",
\t\"license\": \"LGPL-2.1\",
\t\"keywords\": [
\t\t\"wysiwyg\",
\t\t\"tinymce\",
\t\t\"richtext\",
\t\t\"javascript\",
\t\t\"html\",
\t\t\"text\",
\t\t\"rich editor\",
\t\t\"rich text editor\",
\t\t\"rte\",
\t\t\"rich text\",
\t\t\"contenteditable\",
\t\t\"editing\"
\t],
\t\"homepage\": \"https://www.tiny.cloud/\",
\t\"bugs\": {
\t\t\"url\": \"https://github.com/tinymce/tinymce/issues\"
\t}
}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/package.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
\t\"name\": \"tinymce\",
\t\"version\": \"5.10.2\",
\t\"repository\": {
\t\t\"type\": \"git\",
\t\t\"url\": \"https://github.com/tinymce/tinymce.git\",
\t\t\"directory\": \"modules/tinymce\"
\t},
\t\"description\": \"Web based JavaScript HTML WYSIWYG editor control.\",
\t\"author\": \"Tiny Technologies, Inc\",
\t\"main\": \"tinymce.js\",
\t\"types\": \"tinymce.d.ts\",
\t\"license\": \"LGPL-2.1\",
\t\"keywords\": [
\t\t\"wysiwyg\",
\t\t\"tinymce\",
\t\t\"richtext\",
\t\t\"javascript\",
\t\t\"html\",
\t\t\"text\",
\t\t\"rich editor\",
\t\t\"rich text editor\",
\t\t\"rte\",
\t\t\"rich text\",
\t\t\"contenteditable\",
\t\t\"editing\"
\t],
\t\"homepage\": \"https://www.tiny.cloud/\",
\t\"bugs\": {
\t\t\"url\": \"https://github.com/tinymce/tinymce/issues\"
\t}
}", "Back/assets/vendor/tinymce/package.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\package.json");
    }
}
