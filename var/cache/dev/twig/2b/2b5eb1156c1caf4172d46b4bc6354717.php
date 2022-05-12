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

/* Back/assets/vendor/tinymce/plugins/pagebreak/plugin.min.js */
class __TwigTemplate_445c091c7f185d5edd5f0064ba7796b0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/pagebreak/plugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/pagebreak/plugin.min.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
!function(){\"use strict\";function u(e){return e.getParam(\"pagebreak_split_block\",!1)}function l(e){var a='<img src=\"'+n.transparentSrc+'\" class=\"'+m+'\" data-mce-resize=\"false\" data-mce-placeholder />';return e?\"<p>\"+a+\"</p>\":a}var e=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),n=tinymce.util.Tools.resolve(\"tinymce.Env\"),m=\"mce-pagebreak\";e.add(\"pagebreak\",function(e){var a,n,o,i,t,r;function c(){return n.execCommand(\"mcePageBreak\")}function g(){return u(o)}(a=e).addCommand(\"mcePageBreak\",function(){a.insertContent(l(u(a)))}),(n=e).ui.registry.addButton(\"pagebreak\",{icon:\"page-break\",tooltip:\"Page break\",onAction:c}),n.ui.registry.addMenuItem(\"pagebreak\",{text:\"Page break\",icon:\"page-break\",onAction:c}),i=(o=e).getParam(\"pagebreak_separator\",\"\\x3c!-- pagebreak --\\x3e\"),t=new RegExp(i.replace(/[\\?\\.\\*\\[\\]\\(\\)\\{\\}\\+\\^\\\$\\:]/g,function(e){return\"\\\\\"+e}),\"gi\"),o.on(\"BeforeSetContent\",function(e){e.content=e.content.replace(t,l(g()))}),o.on(\"PreInit\",function(){o.serializer.addNodeFilter(\"img\",function(e){for(var a,n,t,r=e.length;r--;)(t=(n=e[r]).attr(\"class\"))&&-1!==t.indexOf(m)&&(a=n.parent,o.schema.getBlockElements()[a.name]&&g()?(a.type=3,a.value=i,a.raw=!0,n.remove()):(n.type=3,n.value=i,n.raw=!0))})}),(r=e).on(\"ResolveName\",function(e){\"IMG\"===e.target.nodeName&&r.dom.hasClass(e.target,m)&&(e.name=\"pagebreak\")})})}();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/pagebreak/plugin.min.js";
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
!function(){\"use strict\";function u(e){return e.getParam(\"pagebreak_split_block\",!1)}function l(e){var a='<img src=\"'+n.transparentSrc+'\" class=\"'+m+'\" data-mce-resize=\"false\" data-mce-placeholder />';return e?\"<p>\"+a+\"</p>\":a}var e=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),n=tinymce.util.Tools.resolve(\"tinymce.Env\"),m=\"mce-pagebreak\";e.add(\"pagebreak\",function(e){var a,n,o,i,t,r;function c(){return n.execCommand(\"mcePageBreak\")}function g(){return u(o)}(a=e).addCommand(\"mcePageBreak\",function(){a.insertContent(l(u(a)))}),(n=e).ui.registry.addButton(\"pagebreak\",{icon:\"page-break\",tooltip:\"Page break\",onAction:c}),n.ui.registry.addMenuItem(\"pagebreak\",{text:\"Page break\",icon:\"page-break\",onAction:c}),i=(o=e).getParam(\"pagebreak_separator\",\"\\x3c!-- pagebreak --\\x3e\"),t=new RegExp(i.replace(/[\\?\\.\\*\\[\\]\\(\\)\\{\\}\\+\\^\\\$\\:]/g,function(e){return\"\\\\\"+e}),\"gi\"),o.on(\"BeforeSetContent\",function(e){e.content=e.content.replace(t,l(g()))}),o.on(\"PreInit\",function(){o.serializer.addNodeFilter(\"img\",function(e){for(var a,n,t,r=e.length;r--;)(t=(n=e[r]).attr(\"class\"))&&-1!==t.indexOf(m)&&(a=n.parent,o.schema.getBlockElements()[a.name]&&g()?(a.type=3,a.value=i,a.raw=!0,n.remove()):(n.type=3,n.value=i,n.raw=!0))})}),(r=e).on(\"ResolveName\",function(e){\"IMG\"===e.target.nodeName&&r.dom.hasClass(e.target,m)&&(e.name=\"pagebreak\")})})}();", "Back/assets/vendor/tinymce/plugins/pagebreak/plugin.min.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\pagebreak\\plugin.min.js");
    }
}
