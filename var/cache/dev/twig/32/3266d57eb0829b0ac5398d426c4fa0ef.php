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

/* Back/assets/vendor/apexcharts/locales/ko.json */
class __TwigTemplate_92f3672eda2038c0bd341bd61b6e3779 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/ko.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/ko.json"));

        // line 1
        echo "{
  \"name\": \"ko\",
  \"options\": {
    \"months\": [
      \"1월\",
      \"2월\",
      \"3월\",
      \"4월\",
      \"5월\",
      \"6월\",
      \"7월\",
      \"8월\",
      \"9월\",
      \"10월\",
      \"11월\",
      \"12월\"
    ],
    \"shortMonths\": [
      \"1월\",
      \"2월\",
      \"3월\",
      \"4월\",
      \"5월\",
      \"6월\",
      \"7월\",
      \"8월\",
      \"9월\",
      \"10월\",
      \"11월\",
      \"12월\"
    ],
    \"days\": [
      \"일요일\",
      \"월요일\",
      \"화요일\",
      \"수요일\",
      \"목요일\",
      \"금요일\",
      \"토요일\"
    ],
    \"shortDays\": [\"일\", \"월\", \"화\", \"수\", \"목\", \"금\", \"토\"],
    \"toolbar\": {
      \"exportToSVG\": \"SVG 다운로드\",
      \"exportToPNG\": \"PNG 다운로드\",
      \"exportToCSV\": \"CSV 다운로드\",
      \"menu\": \"메뉴\",
      \"selection\": \"선택\",
      \"selectionZoom\": \"선택영역 확대\",
      \"zoomIn\": \"확대\",
      \"zoomOut\": \"축소\",
      \"pan\": \"패닝\",
      \"reset\": \"원래대로\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/ko.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"ko\",
  \"options\": {
    \"months\": [
      \"1월\",
      \"2월\",
      \"3월\",
      \"4월\",
      \"5월\",
      \"6월\",
      \"7월\",
      \"8월\",
      \"9월\",
      \"10월\",
      \"11월\",
      \"12월\"
    ],
    \"shortMonths\": [
      \"1월\",
      \"2월\",
      \"3월\",
      \"4월\",
      \"5월\",
      \"6월\",
      \"7월\",
      \"8월\",
      \"9월\",
      \"10월\",
      \"11월\",
      \"12월\"
    ],
    \"days\": [
      \"일요일\",
      \"월요일\",
      \"화요일\",
      \"수요일\",
      \"목요일\",
      \"금요일\",
      \"토요일\"
    ],
    \"shortDays\": [\"일\", \"월\", \"화\", \"수\", \"목\", \"금\", \"토\"],
    \"toolbar\": {
      \"exportToSVG\": \"SVG 다운로드\",
      \"exportToPNG\": \"PNG 다운로드\",
      \"exportToCSV\": \"CSV 다운로드\",
      \"menu\": \"메뉴\",
      \"selection\": \"선택\",
      \"selectionZoom\": \"선택영역 확대\",
      \"zoomIn\": \"확대\",
      \"zoomOut\": \"축소\",
      \"pan\": \"패닝\",
      \"reset\": \"원래대로\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/ko.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\ko.json");
    }
}
