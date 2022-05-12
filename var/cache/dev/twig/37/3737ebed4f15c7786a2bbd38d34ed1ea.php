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

/* Back/assets/vendor/tinymce/plugins/visualblocks/plugin.min.js */
class __TwigTemplate_68dd4029ea3448241a06d4c0caa763cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/visualblocks/plugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/visualblocks/plugin.min.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
!function(){\"use strict\";function f(t,o,e){var n,i;t.dom.toggleClass(t.getBody(),\"mce-visualblocks\"),e.set(!e.get()),n=t,i=e.get(),n.fire(\"VisualBlocks\",{state:i})}function g(e,n){return function(o){function t(t){return o.setActive(t.state)}return o.setActive(n.get()),e.on(\"VisualBlocks\",t),function(){return e.off(\"VisualBlocks\",t)}}}tinymce.util.Tools.resolve(\"tinymce.PluginManager\").add(\"visualblocks\",function(t,o){var e,n,i,s,c,u,l,a=(e=!1,{get:function(){return e},set:function(t){e=t}});function r(){return s.execCommand(\"mceVisualBlocks\")}i=a,(n=t).addCommand(\"mceVisualBlocks\",function(){f(n,0,i)}),(s=t).ui.registry.addToggleButton(\"visualblocks\",{icon:\"visualblocks\",tooltip:\"Show blocks\",onAction:r,onSetup:g(s,c=a)}),s.ui.registry.addToggleMenuItem(\"visualblocks\",{text:\"Show blocks\",icon:\"visualblocks\",onAction:r,onSetup:g(s,c)}),l=a,(u=t).on(\"PreviewFormats AfterPreviewFormats\",function(t){l.get()&&u.dom.toggleClass(u.getBody(),\"mce-visualblocks\",\"afterpreviewformats\"===t.type)}),u.on(\"init\",function(){u.getParam(\"visualblocks_default_state\",!1,\"boolean\")&&f(u,0,l)})})}();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/visualblocks/plugin.min.js";
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
!function(){\"use strict\";function f(t,o,e){var n,i;t.dom.toggleClass(t.getBody(),\"mce-visualblocks\"),e.set(!e.get()),n=t,i=e.get(),n.fire(\"VisualBlocks\",{state:i})}function g(e,n){return function(o){function t(t){return o.setActive(t.state)}return o.setActive(n.get()),e.on(\"VisualBlocks\",t),function(){return e.off(\"VisualBlocks\",t)}}}tinymce.util.Tools.resolve(\"tinymce.PluginManager\").add(\"visualblocks\",function(t,o){var e,n,i,s,c,u,l,a=(e=!1,{get:function(){return e},set:function(t){e=t}});function r(){return s.execCommand(\"mceVisualBlocks\")}i=a,(n=t).addCommand(\"mceVisualBlocks\",function(){f(n,0,i)}),(s=t).ui.registry.addToggleButton(\"visualblocks\",{icon:\"visualblocks\",tooltip:\"Show blocks\",onAction:r,onSetup:g(s,c=a)}),s.ui.registry.addToggleMenuItem(\"visualblocks\",{text:\"Show blocks\",icon:\"visualblocks\",onAction:r,onSetup:g(s,c)}),l=a,(u=t).on(\"PreviewFormats AfterPreviewFormats\",function(t){l.get()&&u.dom.toggleClass(u.getBody(),\"mce-visualblocks\",\"afterpreviewformats\"===t.type)}),u.on(\"init\",function(){u.getParam(\"visualblocks_default_state\",!1,\"boolean\")&&f(u,0,l)})})}();", "Back/assets/vendor/tinymce/plugins/visualblocks/plugin.min.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\visualblocks\\plugin.min.js");
    }
}
