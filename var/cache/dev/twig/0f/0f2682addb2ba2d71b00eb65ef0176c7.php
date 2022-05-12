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

/* Back/assets/vendor/boxicons/css/transformations.css */
class __TwigTemplate_3c46e8e9c2014c78b9096cb40c96ae71 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/boxicons/css/transformations.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/boxicons/css/transformations.css"));

        // line 1
        echo ".bx-rotate-90
{
    transform: rotate(90deg);

    -ms-filter: 'progid:DXImageTransform.Microsoft.BasicImage(rotation=1)';
}
.bx-rotate-180
{
    transform: rotate(180deg);

    -ms-filter: 'progid:DXImageTransform.Microsoft.BasicImage(rotation=2)';
}
.bx-rotate-270
{
    transform: rotate(270deg);

    -ms-filter: 'progid:DXImageTransform.Microsoft.BasicImage(rotation=3)';
}
.bx-flip-horizontal
{
    transform: scaleX(-1);

    -ms-filter: 'progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)';
}
.bx-flip-vertical
{
    transform: scaleY(-1);

    -ms-filter: 'progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)';
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/boxicons/css/transformations.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".bx-rotate-90
{
    transform: rotate(90deg);

    -ms-filter: 'progid:DXImageTransform.Microsoft.BasicImage(rotation=1)';
}
.bx-rotate-180
{
    transform: rotate(180deg);

    -ms-filter: 'progid:DXImageTransform.Microsoft.BasicImage(rotation=2)';
}
.bx-rotate-270
{
    transform: rotate(270deg);

    -ms-filter: 'progid:DXImageTransform.Microsoft.BasicImage(rotation=3)';
}
.bx-flip-horizontal
{
    transform: scaleX(-1);

    -ms-filter: 'progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)';
}
.bx-flip-vertical
{
    transform: scaleY(-1);

    -ms-filter: 'progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)';
}
", "Back/assets/vendor/boxicons/css/transformations.css", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\boxicons\\css\\transformations.css");
    }
}
