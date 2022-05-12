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

/* Back/assets/vendor/apexcharts/locales/ar.json */
class __TwigTemplate_8eae3405d29f38f743faad4b8d0c5812 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/ar.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/ar.json"));

        // line 1
        echo "{
\"name\": \"ar\",
\"options\": {
\"months\": [
\"يناير\",
\"فبراير\",
\"مارس\",
\"أبريل\",
\"مايو\",
\"يونيو\",
\"يوليو\",
\"أغسطس\",
\"سبتمبر\",
\"أكتوبر\",
\"نوفمبر\",
\"ديسمبر\"
],
\"shortMonths\": [
\"يناير\",
\"فبراير\",
\"مارس\",
\"أبريل\",
\"مايو\",
\"يونيو\",
\"يوليو\",
\"أغسطس\",
\"سبتمبر\",
\"أكتوبر\",
\"نوفمبر\",
\"ديسمبر\"
],
\"days\": [
\"الأحد\",
\"الإثنين\",
\"الثلاثاء\",
\"الأربعاء\",
\"الخميس\",
\"الجمعة\",
\"السبت\"
],
\"shortDays\": [
\"أحد\",
\"إثنين\",
\"ثلاثاء\",
\"أربعاء\",
\"خميس\",
\"جمعة\",
\"سبت\"
],
\"toolbar\": {
\"exportToSVG\": \"تحميل بصيغة SVG\",
\"exportToPNG\": \"تحميل بصيغة PNG\",
\"exportToCSV\": \"تحميل بصيغة CSV\",
\"menu\": \"القائمة\",
\"selection\": \"تحديد\",
\"selectionZoom\": \"تكبير التحديد\",
\"zoomIn\": \"تكبير\",
\"zoomOut\": \"تصغير\",
\"pan\": \"تحريك\",
\"reset\": \"إعادة التعيين\"
}
}
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/ar.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
\"name\": \"ar\",
\"options\": {
\"months\": [
\"يناير\",
\"فبراير\",
\"مارس\",
\"أبريل\",
\"مايو\",
\"يونيو\",
\"يوليو\",
\"أغسطس\",
\"سبتمبر\",
\"أكتوبر\",
\"نوفمبر\",
\"ديسمبر\"
],
\"shortMonths\": [
\"يناير\",
\"فبراير\",
\"مارس\",
\"أبريل\",
\"مايو\",
\"يونيو\",
\"يوليو\",
\"أغسطس\",
\"سبتمبر\",
\"أكتوبر\",
\"نوفمبر\",
\"ديسمبر\"
],
\"days\": [
\"الأحد\",
\"الإثنين\",
\"الثلاثاء\",
\"الأربعاء\",
\"الخميس\",
\"الجمعة\",
\"السبت\"
],
\"shortDays\": [
\"أحد\",
\"إثنين\",
\"ثلاثاء\",
\"أربعاء\",
\"خميس\",
\"جمعة\",
\"سبت\"
],
\"toolbar\": {
\"exportToSVG\": \"تحميل بصيغة SVG\",
\"exportToPNG\": \"تحميل بصيغة PNG\",
\"exportToCSV\": \"تحميل بصيغة CSV\",
\"menu\": \"القائمة\",
\"selection\": \"تحديد\",
\"selectionZoom\": \"تكبير التحديد\",
\"zoomIn\": \"تكبير\",
\"zoomOut\": \"تصغير\",
\"pan\": \"تحريك\",
\"reset\": \"إعادة التعيين\"
}
}
}
", "Back/assets/vendor/apexcharts/locales/ar.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\ar.json");
    }
}
