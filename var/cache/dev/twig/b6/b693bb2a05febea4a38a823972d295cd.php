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

/* Back/assets/vendor/tinymce/plugins/noneditable/plugin.min.js */
class __TwigTemplate_3fc3cf4c0cc7977ccb4d95b0c44a7d7a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/noneditable/plugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/noneditable/plugin.min.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
!function(){\"use strict\";function l(t){return t.getParam(\"noneditable_noneditable_class\",\"mceNonEditable\")}function u(e){return function(t){return-1!==(\" \"+t.attr(\"class\")+\" \").indexOf(e)}}function e(e){var t,r=\"contenteditable\",n=\" \"+f.trim(e.getParam(\"noneditable_editable_class\",\"mceEditable\"))+\" \",a=\" \"+f.trim(l(e))+\" \",i=u(n),o=u(a),c=(t=e.getParam(\"noneditable_regexp\",[]))&&t.constructor===RegExp?[t]:t;e.on(\"PreInit\",function(){0<c.length&&e.on(\"BeforeSetContent\",function(t){!function(t,e,n){var r=e.length,a=n.content;if(\"raw\"!==n.format){for(;r--;)a=a.replace(e[r],function(i,o,c){return function(t){var e=arguments,n=e[e.length-2],r=0<n?o.charAt(n-1):\"\";if('\"'===r)return t;if(\">\"===r){var a=o.lastIndexOf(\"<\",n);if(-1!==a&&-1!==o.substring(a,n).indexOf('contenteditable=\"false\"'))return t}return'<span class=\"'+c+'\" data-mce-content=\"'+i.dom.encode(e[0])+'\">'+i.dom.encode(\"string\"==typeof e[1]?e[1]:e[0])+\"</span>\"}}(t,a,l(t)));n.content=a}}(e,c,t)}),e.parser.addAttributeFilter(\"class\",function(t){for(var e,n=t.length;n--;)e=t[n],i(e)?e.attr(r,\"true\"):o(e)&&e.attr(r,\"false\")}),e.serializer.addAttributeFilter(r,function(t){for(var e,n=t.length;n--;)e=t[n],(i(e)||o(e))&&(0<c.length&&e.attr(\"data-mce-content\")?(e.name=\"#text\",e.type=3,e.raw=!0,e.value=e.attr(\"data-mce-content\")):e.attr(r,null))})})}var t=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),f=tinymce.util.Tools.resolve(\"tinymce.util.Tools\");t.add(\"noneditable\",function(t){e(t)})}();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/noneditable/plugin.min.js";
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
!function(){\"use strict\";function l(t){return t.getParam(\"noneditable_noneditable_class\",\"mceNonEditable\")}function u(e){return function(t){return-1!==(\" \"+t.attr(\"class\")+\" \").indexOf(e)}}function e(e){var t,r=\"contenteditable\",n=\" \"+f.trim(e.getParam(\"noneditable_editable_class\",\"mceEditable\"))+\" \",a=\" \"+f.trim(l(e))+\" \",i=u(n),o=u(a),c=(t=e.getParam(\"noneditable_regexp\",[]))&&t.constructor===RegExp?[t]:t;e.on(\"PreInit\",function(){0<c.length&&e.on(\"BeforeSetContent\",function(t){!function(t,e,n){var r=e.length,a=n.content;if(\"raw\"!==n.format){for(;r--;)a=a.replace(e[r],function(i,o,c){return function(t){var e=arguments,n=e[e.length-2],r=0<n?o.charAt(n-1):\"\";if('\"'===r)return t;if(\">\"===r){var a=o.lastIndexOf(\"<\",n);if(-1!==a&&-1!==o.substring(a,n).indexOf('contenteditable=\"false\"'))return t}return'<span class=\"'+c+'\" data-mce-content=\"'+i.dom.encode(e[0])+'\">'+i.dom.encode(\"string\"==typeof e[1]?e[1]:e[0])+\"</span>\"}}(t,a,l(t)));n.content=a}}(e,c,t)}),e.parser.addAttributeFilter(\"class\",function(t){for(var e,n=t.length;n--;)e=t[n],i(e)?e.attr(r,\"true\"):o(e)&&e.attr(r,\"false\")}),e.serializer.addAttributeFilter(r,function(t){for(var e,n=t.length;n--;)e=t[n],(i(e)||o(e))&&(0<c.length&&e.attr(\"data-mce-content\")?(e.name=\"#text\",e.type=3,e.raw=!0,e.value=e.attr(\"data-mce-content\")):e.attr(r,null))})})}var t=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),f=tinymce.util.Tools.resolve(\"tinymce.util.Tools\");t.add(\"noneditable\",function(t){e(t)})}();", "Back/assets/vendor/tinymce/plugins/noneditable/plugin.min.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\noneditable\\plugin.min.js");
    }
}
