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

/* Back/assets/vendor/apexcharts/locales/zh-cn.json */
class __TwigTemplate_200c0b9951a1f71b078f463d85d217c3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/zh-cn.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/zh-cn.json"));

        // line 1
        echo "{
  \"name\": \"zh-cn\",
  \"options\": {
    \"months\": [
      \"一月\",
      \"二月\",
      \"三月\",
      \"四月\",
      \"五月\",
      \"六月\",
      \"七月\",
      \"八月\",
      \"九月\",
      \"十月\",
      \"十一月\",
      \"十二月\"
    ],
    \"shortMonths\": [
      \"一月\",
      \"二月\",
      \"三月\",
      \"四月\",
      \"五月\",
      \"六月\",
      \"七月\",
      \"八月\",
      \"九月\",
      \"十月\",
      \"十一月\",
      \"十二月\"
    ],
    \"days\": [
      \"星期天\",
      \"星期一\",
      \"星期二\",
      \"星期三\",
      \"星期四\",
      \"星期五\",
      \"星期六\"
    ],
    \"shortDays\": [\"周日\", \"周一\", \"周二\", \"周三\", \"周四\", \"周五\", \"周六\"],
    \"toolbar\": {
      \"exportToSVG\": \"下载 SVG\",
      \"exportToPNG\": \"下载 PNG\",
      \"exportToCSV\": \"下载 CSV\",
      \"menu\": \"菜单\",
      \"selection\": \"选择\",
      \"selectionZoom\": \"选择缩放\",
      \"zoomIn\": \"放大\",
      \"zoomOut\": \"缩小\",
      \"pan\": \"平移\",
      \"reset\": \"重置缩放\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/zh-cn.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"zh-cn\",
  \"options\": {
    \"months\": [
      \"一月\",
      \"二月\",
      \"三月\",
      \"四月\",
      \"五月\",
      \"六月\",
      \"七月\",
      \"八月\",
      \"九月\",
      \"十月\",
      \"十一月\",
      \"十二月\"
    ],
    \"shortMonths\": [
      \"一月\",
      \"二月\",
      \"三月\",
      \"四月\",
      \"五月\",
      \"六月\",
      \"七月\",
      \"八月\",
      \"九月\",
      \"十月\",
      \"十一月\",
      \"十二月\"
    ],
    \"days\": [
      \"星期天\",
      \"星期一\",
      \"星期二\",
      \"星期三\",
      \"星期四\",
      \"星期五\",
      \"星期六\"
    ],
    \"shortDays\": [\"周日\", \"周一\", \"周二\", \"周三\", \"周四\", \"周五\", \"周六\"],
    \"toolbar\": {
      \"exportToSVG\": \"下载 SVG\",
      \"exportToPNG\": \"下载 PNG\",
      \"exportToCSV\": \"下载 CSV\",
      \"menu\": \"菜单\",
      \"selection\": \"选择\",
      \"selectionZoom\": \"选择缩放\",
      \"zoomIn\": \"放大\",
      \"zoomOut\": \"缩小\",
      \"pan\": \"平移\",
      \"reset\": \"重置缩放\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/zh-cn.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\zh-cn.json");
    }
}
