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

/* Back/assets/vendor/tinymce/plugins/nonbreaking/plugin.min.js */
class __TwigTemplate_3a2c462ee1f4d9629f92586a7443bd88 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/nonbreaking/plugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/nonbreaking/plugin.min.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
!function(){\"use strict\";function o(n,e){for(var a=\"\",o=0;o<e;o++)a+=n;return a}function s(n,e){var a=n.getParam(\"nonbreaking_wrap\",!0,\"boolean\")||n.plugins.visualchars?'<span class=\"'+(n.plugins.visualchars&&n.plugins.visualchars.isEnabled()?\"mce-nbsp-wrap mce-nbsp\":\"mce-nbsp-wrap\")+'\" contenteditable=\"false\">'+o(\"&nbsp;\",e)+\"</span>\":o(\"&nbsp;\",e);n.undoManager.transact(function(){return n.insertContent(a)})}var n=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),c=tinymce.util.Tools.resolve(\"tinymce.util.VK\");n.add(\"nonbreaking\",function(n){var e,a,o,t,i;function r(){return a.execCommand(\"mceNonBreaking\")}(e=n).addCommand(\"mceNonBreaking\",function(){s(e,1)}),(a=n).ui.registry.addButton(\"nonbreaking\",{icon:\"non-breaking\",tooltip:\"Nonbreaking space\",onAction:r}),a.ui.registry.addMenuItem(\"nonbreaking\",{icon:\"non-breaking\",text:\"Nonbreaking space\",onAction:r}),0<(i=\"boolean\"==typeof(t=(o=n).getParam(\"nonbreaking_force_tab\",0))?!0===t?3:0:t)&&o.on(\"keydown\",function(n){n.keyCode!==c.TAB||n.isDefaultPrevented()||n.shiftKey||(n.preventDefault(),n.stopImmediatePropagation(),s(o,i))})})}();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/nonbreaking/plugin.min.js";
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
!function(){\"use strict\";function o(n,e){for(var a=\"\",o=0;o<e;o++)a+=n;return a}function s(n,e){var a=n.getParam(\"nonbreaking_wrap\",!0,\"boolean\")||n.plugins.visualchars?'<span class=\"'+(n.plugins.visualchars&&n.plugins.visualchars.isEnabled()?\"mce-nbsp-wrap mce-nbsp\":\"mce-nbsp-wrap\")+'\" contenteditable=\"false\">'+o(\"&nbsp;\",e)+\"</span>\":o(\"&nbsp;\",e);n.undoManager.transact(function(){return n.insertContent(a)})}var n=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),c=tinymce.util.Tools.resolve(\"tinymce.util.VK\");n.add(\"nonbreaking\",function(n){var e,a,o,t,i;function r(){return a.execCommand(\"mceNonBreaking\")}(e=n).addCommand(\"mceNonBreaking\",function(){s(e,1)}),(a=n).ui.registry.addButton(\"nonbreaking\",{icon:\"non-breaking\",tooltip:\"Nonbreaking space\",onAction:r}),a.ui.registry.addMenuItem(\"nonbreaking\",{icon:\"non-breaking\",text:\"Nonbreaking space\",onAction:r}),0<(i=\"boolean\"==typeof(t=(o=n).getParam(\"nonbreaking_force_tab\",0))?!0===t?3:0:t)&&o.on(\"keydown\",function(n){n.keyCode!==c.TAB||n.isDefaultPrevented()||n.shiftKey||(n.preventDefault(),n.stopImmediatePropagation(),s(o,i))})})}();", "Back/assets/vendor/tinymce/plugins/nonbreaking/plugin.min.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\nonbreaking\\plugin.min.js");
    }
}
