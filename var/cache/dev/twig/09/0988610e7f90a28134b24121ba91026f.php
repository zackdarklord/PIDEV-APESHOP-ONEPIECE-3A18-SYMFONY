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

/* Back/assets/vendor/apexcharts/locales/ua.json */
class __TwigTemplate_02d8b5de47f9152ce6c4f9525f965640 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/ua.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/ua.json"));

        // line 1
        echo "{
  \"name\": \"ua\",
  \"options\": {
    \"months\": [
      \"Січень\",
      \"Лютий\",
      \"Березень\",
      \"Квітень\",
      \"Травень\",
      \"Червень\",
      \"Липень\",
      \"Серпень\",
      \"Вересень\",
      \"Жовтень\",
      \"Листопад\",
      \"Грудень\"
    ],
    \"shortMonths\": [
      \"Січ\",
      \"Лют\",
      \"Бер\",
      \"Кві\",
      \"Тра\",
      \"Чер\",
      \"Лип\",
      \"Сер\",
      \"Вер\",
      \"Жов\",
      \"Лис\",
      \"Гру\"
    ],
    \"days\": [
      \"Неділя\",
      \"Понеділок\",
      \"Вівторок\",
      \"Середа\",
      \"Четвер\",
      \"П'ятниця\",
      \"Субота\"
    ],
    \"shortDays\": [\"Нд\", \"Пн\", \"Вт\", \"Ср\", \"Чт\", \"Пт\", \"Сб\"],
    \"toolbar\": {
      \"exportToSVG\": \"Зберегти SVG\",
      \"exportToPNG\": \"Зберегти PNG\",
      \"exportToCSV\": \"Зберегти CSV\",
      \"menu\": \"Меню\",
      \"selection\": \"Вибір\",
      \"selectionZoom\": \"Вибір із збільшенням\",
      \"zoomIn\": \"Збільшити\",
      \"zoomOut\": \"Зменшити\",
      \"pan\": \"Переміщення\",
      \"reset\": \"Скинути збільшення\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/ua.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"ua\",
  \"options\": {
    \"months\": [
      \"Січень\",
      \"Лютий\",
      \"Березень\",
      \"Квітень\",
      \"Травень\",
      \"Червень\",
      \"Липень\",
      \"Серпень\",
      \"Вересень\",
      \"Жовтень\",
      \"Листопад\",
      \"Грудень\"
    ],
    \"shortMonths\": [
      \"Січ\",
      \"Лют\",
      \"Бер\",
      \"Кві\",
      \"Тра\",
      \"Чер\",
      \"Лип\",
      \"Сер\",
      \"Вер\",
      \"Жов\",
      \"Лис\",
      \"Гру\"
    ],
    \"days\": [
      \"Неділя\",
      \"Понеділок\",
      \"Вівторок\",
      \"Середа\",
      \"Четвер\",
      \"П'ятниця\",
      \"Субота\"
    ],
    \"shortDays\": [\"Нд\", \"Пн\", \"Вт\", \"Ср\", \"Чт\", \"Пт\", \"Сб\"],
    \"toolbar\": {
      \"exportToSVG\": \"Зберегти SVG\",
      \"exportToPNG\": \"Зберегти PNG\",
      \"exportToCSV\": \"Зберегти CSV\",
      \"menu\": \"Меню\",
      \"selection\": \"Вибір\",
      \"selectionZoom\": \"Вибір із збільшенням\",
      \"zoomIn\": \"Збільшити\",
      \"zoomOut\": \"Зменшити\",
      \"pan\": \"Переміщення\",
      \"reset\": \"Скинути збільшення\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/ua.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\ua.json");
    }
}
