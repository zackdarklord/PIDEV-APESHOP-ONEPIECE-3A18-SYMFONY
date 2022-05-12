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

/* Back/assets/vendor/simple-datatables/style.css */
class __TwigTemplate_b1f47e6f79084da15b71624af5d0e705 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/simple-datatables/style.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/simple-datatables/style.css"));

        // line 1
        echo ".dataTable-wrapper.no-header .dataTable-container {
\tborder-top: 1px solid #d9d9d9;
}

.dataTable-wrapper.no-footer .dataTable-container {
\tborder-bottom: 1px solid #d9d9d9;
}

.dataTable-top,
.dataTable-bottom {
\tpadding: 8px 10px;
}

.dataTable-top > nav:first-child,
.dataTable-top > div:first-child,
.dataTable-bottom > nav:first-child,
.dataTable-bottom > div:first-child {
\tfloat: left;
}

.dataTable-top > nav:last-child,
.dataTable-top > div:last-child,
.dataTable-bottom > nav:last-child,
.dataTable-bottom > div:last-child {
\tfloat: right;
}

.dataTable-selector {
\tpadding: 6px;
}

.dataTable-input {
\tpadding: 6px 12px;
}

.dataTable-info {
\tmargin: 7px 0;
}

/* PAGER */
.dataTable-pagination ul {
\tmargin: 0;
\tpadding-left: 0;
}

.dataTable-pagination li {
\tlist-style: none;
\tfloat: left;
}

.dataTable-pagination a {
\tborder: 1px solid transparent;
\tfloat: left;
\tmargin-left: 2px;
\tpadding: 6px 12px;
\tposition: relative;
\ttext-decoration: none;
\tcolor: #333;
}

.dataTable-pagination a:hover {
\tbackground-color: #d9d9d9;
}

.dataTable-pagination .active a,
.dataTable-pagination .active a:focus,
.dataTable-pagination .active a:hover {
\tbackground-color: #d9d9d9;
\tcursor: default;
}

.dataTable-pagination .ellipsis a,
.dataTable-pagination .disabled a,
.dataTable-pagination .disabled a:focus,
.dataTable-pagination .disabled a:hover {
\tcursor: not-allowed;
}

.dataTable-pagination .disabled a,
.dataTable-pagination .disabled a:focus,
.dataTable-pagination .disabled a:hover {
\tcursor: not-allowed;
\topacity: 0.4;
}

.dataTable-pagination .pager a {
\tfont-weight: bold;
}

/* TABLE */
.dataTable-table {
\tmax-width: 100%;
\twidth: 100%;
\tborder-spacing: 0;
\tborder-collapse: separate;
}

.dataTable-table > tbody > tr > td,
.dataTable-table > tbody > tr > th,
.dataTable-table > tfoot > tr > td,
.dataTable-table > tfoot > tr > th,
.dataTable-table > thead > tr > td,
.dataTable-table > thead > tr > th {
\tvertical-align: top;
\tpadding: 8px 10px;
}

.dataTable-table > thead > tr > th {
\tvertical-align: bottom;
\ttext-align: left;
\tborder-bottom: 1px solid #d9d9d9;
}

.dataTable-table > tfoot > tr > th {
\tvertical-align: bottom;
\ttext-align: left;
\tborder-top: 1px solid #d9d9d9;
}

.dataTable-table th {
\tvertical-align: bottom;
\ttext-align: left;
}

.dataTable-table th a {
\ttext-decoration: none;
\tcolor: inherit;
}

.dataTable-sorter {
\tdisplay: inline-block;
\theight: 100%;
\tposition: relative;
\twidth: 100%;
}

.dataTable-sorter::before,
.dataTable-sorter::after {
\tcontent: \"\";
\theight: 0;
\twidth: 0;
\tposition: absolute;
\tright: 4px;
\tborder-left: 4px solid transparent;
\tborder-right: 4px solid transparent;
\topacity: 0.2;
}

.dataTable-sorter::before {
\tborder-top: 4px solid #000;
\tbottom: 0px;
}

.dataTable-sorter::after {
\tborder-bottom: 4px solid #000;
\tborder-top: 4px solid transparent;
\ttop: 0px;
}

.asc .dataTable-sorter::after,
.desc .dataTable-sorter::before {
\topacity: 0.6;
}

.dataTables-empty {
\ttext-align: center;
}

.dataTable-top::after, .dataTable-bottom::after {
\tclear: both;
\tcontent: \" \";
\tdisplay: table;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/simple-datatables/style.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".dataTable-wrapper.no-header .dataTable-container {
\tborder-top: 1px solid #d9d9d9;
}

.dataTable-wrapper.no-footer .dataTable-container {
\tborder-bottom: 1px solid #d9d9d9;
}

.dataTable-top,
.dataTable-bottom {
\tpadding: 8px 10px;
}

.dataTable-top > nav:first-child,
.dataTable-top > div:first-child,
.dataTable-bottom > nav:first-child,
.dataTable-bottom > div:first-child {
\tfloat: left;
}

.dataTable-top > nav:last-child,
.dataTable-top > div:last-child,
.dataTable-bottom > nav:last-child,
.dataTable-bottom > div:last-child {
\tfloat: right;
}

.dataTable-selector {
\tpadding: 6px;
}

.dataTable-input {
\tpadding: 6px 12px;
}

.dataTable-info {
\tmargin: 7px 0;
}

/* PAGER */
.dataTable-pagination ul {
\tmargin: 0;
\tpadding-left: 0;
}

.dataTable-pagination li {
\tlist-style: none;
\tfloat: left;
}

.dataTable-pagination a {
\tborder: 1px solid transparent;
\tfloat: left;
\tmargin-left: 2px;
\tpadding: 6px 12px;
\tposition: relative;
\ttext-decoration: none;
\tcolor: #333;
}

.dataTable-pagination a:hover {
\tbackground-color: #d9d9d9;
}

.dataTable-pagination .active a,
.dataTable-pagination .active a:focus,
.dataTable-pagination .active a:hover {
\tbackground-color: #d9d9d9;
\tcursor: default;
}

.dataTable-pagination .ellipsis a,
.dataTable-pagination .disabled a,
.dataTable-pagination .disabled a:focus,
.dataTable-pagination .disabled a:hover {
\tcursor: not-allowed;
}

.dataTable-pagination .disabled a,
.dataTable-pagination .disabled a:focus,
.dataTable-pagination .disabled a:hover {
\tcursor: not-allowed;
\topacity: 0.4;
}

.dataTable-pagination .pager a {
\tfont-weight: bold;
}

/* TABLE */
.dataTable-table {
\tmax-width: 100%;
\twidth: 100%;
\tborder-spacing: 0;
\tborder-collapse: separate;
}

.dataTable-table > tbody > tr > td,
.dataTable-table > tbody > tr > th,
.dataTable-table > tfoot > tr > td,
.dataTable-table > tfoot > tr > th,
.dataTable-table > thead > tr > td,
.dataTable-table > thead > tr > th {
\tvertical-align: top;
\tpadding: 8px 10px;
}

.dataTable-table > thead > tr > th {
\tvertical-align: bottom;
\ttext-align: left;
\tborder-bottom: 1px solid #d9d9d9;
}

.dataTable-table > tfoot > tr > th {
\tvertical-align: bottom;
\ttext-align: left;
\tborder-top: 1px solid #d9d9d9;
}

.dataTable-table th {
\tvertical-align: bottom;
\ttext-align: left;
}

.dataTable-table th a {
\ttext-decoration: none;
\tcolor: inherit;
}

.dataTable-sorter {
\tdisplay: inline-block;
\theight: 100%;
\tposition: relative;
\twidth: 100%;
}

.dataTable-sorter::before,
.dataTable-sorter::after {
\tcontent: \"\";
\theight: 0;
\twidth: 0;
\tposition: absolute;
\tright: 4px;
\tborder-left: 4px solid transparent;
\tborder-right: 4px solid transparent;
\topacity: 0.2;
}

.dataTable-sorter::before {
\tborder-top: 4px solid #000;
\tbottom: 0px;
}

.dataTable-sorter::after {
\tborder-bottom: 4px solid #000;
\tborder-top: 4px solid transparent;
\ttop: 0px;
}

.asc .dataTable-sorter::after,
.desc .dataTable-sorter::before {
\topacity: 0.6;
}

.dataTables-empty {
\ttext-align: center;
}

.dataTable-top::after, .dataTable-bottom::after {
\tclear: both;
\tcontent: \" \";
\tdisplay: table;
}
", "Back/assets/vendor/simple-datatables/style.css", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\simple-datatables\\style.css");
    }
}
