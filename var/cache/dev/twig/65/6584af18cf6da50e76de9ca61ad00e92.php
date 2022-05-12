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

/* Back/assets/vendor/apexcharts/locales/ru.json */
class __TwigTemplate_8cb77cedfbf208b1f18e3b8c1adb140d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/ru.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/ru.json"));

        // line 1
        echo "{
  \"name\": \"ru\",
  \"options\": {
    \"months\": [
      \"Январь\",
      \"Февраль\",
      \"Март\",
      \"Апрель\",
      \"Май\",
      \"Июнь\",
      \"Июль\",
      \"Август\",
      \"Сентябрь\",
      \"Октябрь\",
      \"Ноябрь\",
      \"Декабрь\"
    ],
    \"shortMonths\": [
      \"Янв\",
      \"Фев\",
      \"Мар\",
      \"Апр\",
      \"Май\",
      \"Июн\",
      \"Июл\",
      \"Авг\",
      \"Сен\",
      \"Окт\",
      \"Ноя\",
      \"Дек\"
    ],
    \"days\": [
      \"Воскресенье\",
      \"Понедельник\",
      \"Вторник\",
      \"Среда\",
      \"Четверг\",
      \"Пятница\",
      \"Суббота\"
    ],
    \"shortDays\": [\"Вс\", \"Пн\", \"Вт\", \"Ср\", \"Чт\", \"Пт\", \"Сб\"],
    \"toolbar\": {
      \"exportToSVG\": \"Сохранить SVG\",
      \"exportToPNG\": \"Сохранить PNG\",
      \"exportToCSV\": \"Сохранить CSV\",
      \"menu\": \"Меню\",
      \"selection\": \"Выбор\",
      \"selectionZoom\": \"Выбор с увеличением\",
      \"zoomIn\": \"Увеличить\",
      \"zoomOut\": \"Уменьшить\",
      \"pan\": \"Перемещение\",
      \"reset\": \"Сбросить увеличение\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/ru.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"ru\",
  \"options\": {
    \"months\": [
      \"Январь\",
      \"Февраль\",
      \"Март\",
      \"Апрель\",
      \"Май\",
      \"Июнь\",
      \"Июль\",
      \"Август\",
      \"Сентябрь\",
      \"Октябрь\",
      \"Ноябрь\",
      \"Декабрь\"
    ],
    \"shortMonths\": [
      \"Янв\",
      \"Фев\",
      \"Мар\",
      \"Апр\",
      \"Май\",
      \"Июн\",
      \"Июл\",
      \"Авг\",
      \"Сен\",
      \"Окт\",
      \"Ноя\",
      \"Дек\"
    ],
    \"days\": [
      \"Воскресенье\",
      \"Понедельник\",
      \"Вторник\",
      \"Среда\",
      \"Четверг\",
      \"Пятница\",
      \"Суббота\"
    ],
    \"shortDays\": [\"Вс\", \"Пн\", \"Вт\", \"Ср\", \"Чт\", \"Пт\", \"Сб\"],
    \"toolbar\": {
      \"exportToSVG\": \"Сохранить SVG\",
      \"exportToPNG\": \"Сохранить PNG\",
      \"exportToCSV\": \"Сохранить CSV\",
      \"menu\": \"Меню\",
      \"selection\": \"Выбор\",
      \"selectionZoom\": \"Выбор с увеличением\",
      \"zoomIn\": \"Увеличить\",
      \"zoomOut\": \"Уменьшить\",
      \"pan\": \"Перемещение\",
      \"reset\": \"Сбросить увеличение\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/ru.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\ru.json");
    }
}
