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

/* Back/assets/vendor/apexcharts/locales/th.json */
class __TwigTemplate_291300425c38a122c7f6ed98cf556100 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/th.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/th.json"));

        // line 1
        echo "{
  \"name\": \"th\",
  \"options\": {
    \"months\": [
      \"มกราคม\",
      \"กุมภาพันธ์\",
      \"มีนาคม\",
      \"เมษายน\",
      \"พฤษภาคม\",
      \"มิถุนายน\",
      \"กรกฎาคม\",
      \"สิงหาคม\",
      \"กันยายน\",
      \"ตุลาคม\",
      \"พฤศจิกายน\",
      \"ธันวาคม\"
    ],
    \"shortMonths\": [
      \"ม.ค.\",
      \"ก.พ.\",
      \"มี.ค.\",
      \"เม.ย.\",
      \"พ.ค.\",
      \"มิ.ย.\",
      \"ก.ค.\",
      \"ส.ค.\",
      \"ก.ย.\",
      \"ต.ค.\",
      \"พ.ย.\",
      \"ธ.ค.\"
    ],
    \"days\": [
      \"อาทิตย์\",
      \"จันทร์\",
      \"อังคาร\",
      \"พุธ\",
      \"พฤหัสบดี\",
      \"ศุกร์\",
      \"เสาร์\"
    ],
    \"shortDays\": [\"อา\", \"จ\", \"อ\", \"พ\", \"พฤ\", \"ศ\", \"ส\"],
    \"toolbar\": {
      \"exportToSVG\": \"ดาวน์โหลด SVG\",
      \"exportToPNG\": \"ดาวน์โหลด PNG\",
      \"exportToCSV\": \"ดาวน์โหลด CSV\",
      \"menu\": \"เมนู\",
      \"selection\": \"เลือก\",
      \"selectionZoom\": \"เลือกจุดที่จะซูม\",
      \"zoomIn\": \"ซูมเข้า\",
      \"zoomOut\": \"ซูมออก\",
      \"pan\": \"ปรากฎว่า\",
      \"reset\": \"รีเซ็ตการซูม\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/th.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"th\",
  \"options\": {
    \"months\": [
      \"มกราคม\",
      \"กุมภาพันธ์\",
      \"มีนาคม\",
      \"เมษายน\",
      \"พฤษภาคม\",
      \"มิถุนายน\",
      \"กรกฎาคม\",
      \"สิงหาคม\",
      \"กันยายน\",
      \"ตุลาคม\",
      \"พฤศจิกายน\",
      \"ธันวาคม\"
    ],
    \"shortMonths\": [
      \"ม.ค.\",
      \"ก.พ.\",
      \"มี.ค.\",
      \"เม.ย.\",
      \"พ.ค.\",
      \"มิ.ย.\",
      \"ก.ค.\",
      \"ส.ค.\",
      \"ก.ย.\",
      \"ต.ค.\",
      \"พ.ย.\",
      \"ธ.ค.\"
    ],
    \"days\": [
      \"อาทิตย์\",
      \"จันทร์\",
      \"อังคาร\",
      \"พุธ\",
      \"พฤหัสบดี\",
      \"ศุกร์\",
      \"เสาร์\"
    ],
    \"shortDays\": [\"อา\", \"จ\", \"อ\", \"พ\", \"พฤ\", \"ศ\", \"ส\"],
    \"toolbar\": {
      \"exportToSVG\": \"ดาวน์โหลด SVG\",
      \"exportToPNG\": \"ดาวน์โหลด PNG\",
      \"exportToCSV\": \"ดาวน์โหลด CSV\",
      \"menu\": \"เมนู\",
      \"selection\": \"เลือก\",
      \"selectionZoom\": \"เลือกจุดที่จะซูม\",
      \"zoomIn\": \"ซูมเข้า\",
      \"zoomOut\": \"ซูมออก\",
      \"pan\": \"ปรากฎว่า\",
      \"reset\": \"รีเซ็ตการซูม\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/th.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\th.json");
    }
}
