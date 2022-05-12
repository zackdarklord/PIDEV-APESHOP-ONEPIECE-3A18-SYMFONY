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

/* Back/assets/vendor/apexcharts/locales/ja.json */
class __TwigTemplate_dabc9801f95df1d2c69803ed43bb78bb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/ja.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/apexcharts/locales/ja.json"));

        // line 1
        echo "{
  \"name\": \"ja\",
  \"options\": {
    \"months\": [
      \"1月\",
      \"2月\",
      \"3月\",
      \"4月\",
      \"5月\",
      \"6月\",
      \"7月\",
      \"8月\",
      \"9月\",
      \"10月\",
      \"11月\",
      \"12月\"
    ],
    \"shortMonths\": [
      \"1月\",
      \"2月\",
      \"3月\",
      \"4月\",
      \"5月\",
      \"6月\",
      \"7月\",
      \"8月\",
      \"9月\",
      \"10月\",
      \"11月\",
      \"12月\"
    ],
    \"days\": [
      \"日曜日\",
      \"月曜日\",
      \"火曜日\",
      \"水曜日\",
      \"木曜日\",
      \"金曜日\",
      \"土曜日\"
    ],
    \"shortDays\": [\"日\", \"月\", \"火\", \"水\", \"木\", \"金\", \"土\"],
    \"toolbar\": {
      \"exportToSVG\": \"SVGダウンロード\",
      \"exportToPNG\": \"PNGダウンロード\",
      \"exportToCSV\": \"CSVダウンロード\",
      \"menu\": \"メニュー\",
      \"selection\": \"選択\",
      \"selectionZoom\": \"選択ズーム\",
      \"zoomIn\": \"拡大\",
      \"zoomOut\": \"縮小\",
      \"pan\": \"パン\",
      \"reset\": \"ズームリセット\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/apexcharts/locales/ja.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\": \"ja\",
  \"options\": {
    \"months\": [
      \"1月\",
      \"2月\",
      \"3月\",
      \"4月\",
      \"5月\",
      \"6月\",
      \"7月\",
      \"8月\",
      \"9月\",
      \"10月\",
      \"11月\",
      \"12月\"
    ],
    \"shortMonths\": [
      \"1月\",
      \"2月\",
      \"3月\",
      \"4月\",
      \"5月\",
      \"6月\",
      \"7月\",
      \"8月\",
      \"9月\",
      \"10月\",
      \"11月\",
      \"12月\"
    ],
    \"days\": [
      \"日曜日\",
      \"月曜日\",
      \"火曜日\",
      \"水曜日\",
      \"木曜日\",
      \"金曜日\",
      \"土曜日\"
    ],
    \"shortDays\": [\"日\", \"月\", \"火\", \"水\", \"木\", \"金\", \"土\"],
    \"toolbar\": {
      \"exportToSVG\": \"SVGダウンロード\",
      \"exportToPNG\": \"PNGダウンロード\",
      \"exportToCSV\": \"CSVダウンロード\",
      \"menu\": \"メニュー\",
      \"selection\": \"選択\",
      \"selectionZoom\": \"選択ズーム\",
      \"zoomIn\": \"拡大\",
      \"zoomOut\": \"縮小\",
      \"pan\": \"パン\",
      \"reset\": \"ズームリセット\"
    }
  }
}
", "Back/assets/vendor/apexcharts/locales/ja.json", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\apexcharts\\locales\\ja.json");
    }
}
