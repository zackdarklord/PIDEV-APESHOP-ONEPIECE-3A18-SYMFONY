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

/* Back/assets/vendor/apexcharts/locales/pt.json */
class __TwigTemplate_07e5c1d9391b5e08595a498a31f1b1b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/pt.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/pt.json"));

        // line 1
        echo "{
  \"name\": \"pt\",
  \"options\": {
    \"months\": [
      \"Janeiro\",
      \"Fevereiro\",
      \"Março\",
      \"Abril\",
      \"Maio\",
      \"Junho\",
      \"Julho\",
      \"Agosto\",
      \"Setembro\",
      \"Outubro\",
      \"Novembro\",
      \"Dezembro\"
    ],
    \"shortMonths\": [
      \"Jan\",
      \"Fev\",
      \"Mar\",
      \"Abr\",
      \"Mai\",
      \"Jun\",
      \"Jul\",
      \"Ag\",
      \"Set\",
      \"Out\",
      \"Nov\",
      \"Dez\"
    ],
    \"days\": [
      \"Domingo\",
      \"Segunda-feira\",
      \"Terça-feira\",
      \"Quarta-feira\",
      \"Quinta-feira\",
      \"Sexta-feira\",
      \"Sábado\"
    ],
    \"shortDays\": [\"Do\", \"Se\", \"Te\", \"Qa\", \"Qi\", \"Sx\", \"Sa\"],
    \"toolbar\": {
      \"exportToSVG\": \"Baixar SVG\",
      \"exportToPNG\": \"Baixar PNG\",
      \"exportToCSV\": \"Baixar CSV\",
      \"menu\": \"Menu\",
      \"selection\": \"Selecionar\",
      \"selectionZoom\": \"Zoom: Selecionar\",
      \"zoomIn\": \"Zoom: Aumentar\",
      \"zoomOut\": \"Zoom: Diminuir\",
      \"pan\": \"Deslocamento\",
      \"reset\": \"Redefinir\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/pt.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"pt\",
  \"options\": {
    \"months\": [
      \"Janeiro\",
      \"Fevereiro\",
      \"Março\",
      \"Abril\",
      \"Maio\",
      \"Junho\",
      \"Julho\",
      \"Agosto\",
      \"Setembro\",
      \"Outubro\",
      \"Novembro\",
      \"Dezembro\"
    ],
    \"shortMonths\": [
      \"Jan\",
      \"Fev\",
      \"Mar\",
      \"Abr\",
      \"Mai\",
      \"Jun\",
      \"Jul\",
      \"Ag\",
      \"Set\",
      \"Out\",
      \"Nov\",
      \"Dez\"
    ],
    \"days\": [
      \"Domingo\",
      \"Segunda-feira\",
      \"Terça-feira\",
      \"Quarta-feira\",
      \"Quinta-feira\",
      \"Sexta-feira\",
      \"Sábado\"
    ],
    \"shortDays\": [\"Do\", \"Se\", \"Te\", \"Qa\", \"Qi\", \"Sx\", \"Sa\"],
    \"toolbar\": {
      \"exportToSVG\": \"Baixar SVG\",
      \"exportToPNG\": \"Baixar PNG\",
      \"exportToCSV\": \"Baixar CSV\",
      \"menu\": \"Menu\",
      \"selection\": \"Selecionar\",
      \"selectionZoom\": \"Zoom: Selecionar\",
      \"zoomIn\": \"Zoom: Aumentar\",
      \"zoomOut\": \"Zoom: Diminuir\",
      \"pan\": \"Deslocamento\",
      \"reset\": \"Redefinir\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/pt.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\pt.json");
    }
}
