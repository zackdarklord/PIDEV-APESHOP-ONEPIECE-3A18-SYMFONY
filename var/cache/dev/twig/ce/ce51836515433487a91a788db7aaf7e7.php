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

/* Back/assets/vendor/tinymce/bower.json */
class __TwigTemplate_c4a2abd5ee52f2abf7af0a938370658e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/bower.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/bower.json"));

        // line 1
        echo "{
\t\"name\": \"tinymce\",
\t\"description\": \"Web based JavaScript HTML WYSIWYG editor control.\",
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
\t\"ignore\": [
\t\t\"README.md\",
\t\t\"composer.json\",
\t\t\"package.json\",
\t\t\".npmignore\",
\t\t\"CHANGELOG.md\"
\t]
}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/bower.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
\t\"name\": \"tinymce\",
\t\"description\": \"Web based JavaScript HTML WYSIWYG editor control.\",
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
\t\"ignore\": [
\t\t\"README.md\",
\t\t\"composer.json\",
\t\t\"package.json\",
\t\t\".npmignore\",
\t\t\"CHANGELOG.md\"
\t]
}", "Back/assets/vendor/tinymce/bower.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\bower.json");
    }
}
