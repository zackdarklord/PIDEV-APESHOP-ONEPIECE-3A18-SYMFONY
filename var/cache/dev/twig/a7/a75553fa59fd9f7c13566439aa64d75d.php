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

/* Back/assets/vendor/tinymce/plugins/preview/plugin.min.js */
class __TwigTemplate_9e2fed2b2e6cc72c96ec02b40a243da0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/preview/plugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/preview/plugin.min.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
!function(){\"use strict\";var e=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),f=tinymce.util.Tools.resolve(\"tinymce.Env\"),w=tinymce.util.Tools.resolve(\"tinymce.util.Tools\");e.add(\"preview\",function(e){var n,t;function i(){return t.execCommand(\"mcePreview\")}(n=e).addCommand(\"mcePreview\",function(){var e,t;t=function(t){var n=\"\",i=t.dom.encode,e=t.getParam(\"content_style\",\"\",\"string\");n+='<base href=\"'+i(t.documentBaseURI.getURI())+'\">';var o=t.getParam(\"content_css_cors\",!1,\"boolean\")?' crossorigin=\"anonymous\"':\"\";w.each(t.contentCSS,function(e){n+='<link type=\"text/css\" rel=\"stylesheet\" href=\"'+i(t.documentBaseURI.toAbsolute(e))+'\"'+o+\">\"}),e&&(n+='<style type=\"text/css\">'+e+\"</style>\");var a,r,s,c,d,l,m,y=-1===(c=(a=t).getParam(\"body_id\",\"tinymce\",\"string\")).indexOf(\"=\")?c:(s=(r=a).getParam(\"body_id\",\"\",\"hash\"))[r.id]||s,u=-1===(m=(d=t).getParam(\"body_class\",\"\",\"string\")).indexOf(\"=\")?m:(l=d).getParam(\"body_class\",\"\",\"hash\")[l.id]||\"\",v='<script>document.addEventListener && document.addEventListener(\"click\", function(e) {for (var elm = e.target; elm; elm = elm.parentNode) {if (elm.nodeName === \"A\" && !('+(f.mac?\"e.metaKey\":\"e.ctrlKey && !e.altKey\")+\")) {e.preventDefault();}}}, false);<\\/script> \",g=t.getBody().dir,p=g?' dir=\"'+i(g)+'\"':\"\";return\"<!DOCTYPE html><html><head>\"+n+'</head><body id=\"'+i(y)+'\" class=\"mce-content-body '+i(u)+'\"'+p+\">\"+t.getContent()+v+\"</body></html>\"}(e=n),e.windowManager.open({title:\"Preview\",size:\"large\",body:{type:\"panel\",items:[{name:\"preview\",type:\"iframe\",sandboxed:!0}]},buttons:[{type:\"cancel\",name:\"close\",text:\"Close\",primary:!0}],initialData:{preview:t}}).focus(\"close\")}),(t=e).ui.registry.addButton(\"preview\",{icon:\"preview\",tooltip:\"Preview\",onAction:i}),t.ui.registry.addMenuItem(\"preview\",{icon:\"preview\",text:\"Preview\",onAction:i})})}();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/preview/plugin.min.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
!function(){\"use strict\";var e=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),f=tinymce.util.Tools.resolve(\"tinymce.Env\"),w=tinymce.util.Tools.resolve(\"tinymce.util.Tools\");e.add(\"preview\",function(e){var n,t;function i(){return t.execCommand(\"mcePreview\")}(n=e).addCommand(\"mcePreview\",function(){var e,t;t=function(t){var n=\"\",i=t.dom.encode,e=t.getParam(\"content_style\",\"\",\"string\");n+='<base href=\"'+i(t.documentBaseURI.getURI())+'\">';var o=t.getParam(\"content_css_cors\",!1,\"boolean\")?' crossorigin=\"anonymous\"':\"\";w.each(t.contentCSS,function(e){n+='<link type=\"text/css\" rel=\"stylesheet\" href=\"'+i(t.documentBaseURI.toAbsolute(e))+'\"'+o+\">\"}),e&&(n+='<style type=\"text/css\">'+e+\"</style>\");var a,r,s,c,d,l,m,y=-1===(c=(a=t).getParam(\"body_id\",\"tinymce\",\"string\")).indexOf(\"=\")?c:(s=(r=a).getParam(\"body_id\",\"\",\"hash\"))[r.id]||s,u=-1===(m=(d=t).getParam(\"body_class\",\"\",\"string\")).indexOf(\"=\")?m:(l=d).getParam(\"body_class\",\"\",\"hash\")[l.id]||\"\",v='<script>document.addEventListener && document.addEventListener(\"click\", function(e) {for (var elm = e.target; elm; elm = elm.parentNode) {if (elm.nodeName === \"A\" && !('+(f.mac?\"e.metaKey\":\"e.ctrlKey && !e.altKey\")+\")) {e.preventDefault();}}}, false);<\\/script> \",g=t.getBody().dir,p=g?' dir=\"'+i(g)+'\"':\"\";return\"<!DOCTYPE html><html><head>\"+n+'</head><body id=\"'+i(y)+'\" class=\"mce-content-body '+i(u)+'\"'+p+\">\"+t.getContent()+v+\"</body></html>\"}(e=n),e.windowManager.open({title:\"Preview\",size:\"large\",body:{type:\"panel\",items:[{name:\"preview\",type:\"iframe\",sandboxed:!0}]},buttons:[{type:\"cancel\",name:\"close\",text:\"Close\",primary:!0}],initialData:{preview:t}}).focus(\"close\")}),(t=e).ui.registry.addButton(\"preview\",{icon:\"preview\",tooltip:\"Preview\",onAction:i}),t.ui.registry.addMenuItem(\"preview\",{icon:\"preview\",text:\"Preview\",onAction:i})})}();", "Back/assets/vendor/tinymce/plugins/preview/plugin.min.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\preview\\plugin.min.js");
    }
}
