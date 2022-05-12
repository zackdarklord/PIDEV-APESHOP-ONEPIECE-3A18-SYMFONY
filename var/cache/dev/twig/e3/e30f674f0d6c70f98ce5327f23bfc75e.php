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

/* Back/assets/vendor/tinymce/composer.json */
class __TwigTemplate_87ff9f68ee5d79d568a8436bef767443 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/composer.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/composer.json"));

        // line 1
        echo "{
\t\"name\": \"tinymce/tinymce\",
\t\"version\": \"5.10.2\",
\t\"description\": \"Web based JavaScript HTML WYSIWYG editor control.\",
\t\"license\": [
\t\t\"LGPL-2.1-only\"
\t],
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
\t\"type\": \"component\",
\t\"extra\": {
\t\t\"component\": {
\t\t\t\"scripts\": [
\t\t\t\t\"tinymce.js\",
\t\t\t\t\"plugins/*/plugin.js\",
\t\t\t\t\"themes/*/theme.js\",
\t\t\t\t\"themes/*/icons.js\"
\t\t\t],
\t\t\t\"files\": [
\t\t\t\t\"tinymce.min.js\",
\t\t\t\t\"plugins/*/plugin.min.js\",
\t\t\t\t\"themes/*/theme.min.js\",
\t\t\t\t\"skins/**\",
\t\t\t\t\"icons/*/icons.min.js\"
\t\t\t]
\t\t}
\t},
\t\"archive\": {
\t\t\"exclude\": [
\t\t\t\"README.md\",
\t\t\t\"bower.js\",
\t\t\t\"package.json\",
\t\t\t\".npmignore\",
\t\t\t\"CHANGELOG.md\"
\t\t]
\t}
}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
\t\"name\": \"tinymce/tinymce\",
\t\"version\": \"5.10.2\",
\t\"description\": \"Web based JavaScript HTML WYSIWYG editor control.\",
\t\"license\": [
\t\t\"LGPL-2.1-only\"
\t],
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
\t\"type\": \"component\",
\t\"extra\": {
\t\t\"component\": {
\t\t\t\"scripts\": [
\t\t\t\t\"tinymce.js\",
\t\t\t\t\"plugins/*/plugin.js\",
\t\t\t\t\"themes/*/theme.js\",
\t\t\t\t\"themes/*/icons.js\"
\t\t\t],
\t\t\t\"files\": [
\t\t\t\t\"tinymce.min.js\",
\t\t\t\t\"plugins/*/plugin.min.js\",
\t\t\t\t\"themes/*/theme.min.js\",
\t\t\t\t\"skins/**\",
\t\t\t\t\"icons/*/icons.min.js\"
\t\t\t]
\t\t}
\t},
\t\"archive\": {
\t\t\"exclude\": [
\t\t\t\"README.md\",
\t\t\t\"bower.js\",
\t\t\t\"package.json\",
\t\t\t\".npmignore\",
\t\t\t\"CHANGELOG.md\"
\t\t]
\t}
}", "Back/assets/vendor/tinymce/composer.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\composer.json");
    }
}
