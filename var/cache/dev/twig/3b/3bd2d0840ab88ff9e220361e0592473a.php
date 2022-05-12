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

/* Back/assets/vendor/tinymce/plugins/tabfocus/plugin.min.js */
class __TwigTemplate_a277345598e7e158efffed9829b91b80 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/tabfocus/plugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/tabfocus/plugin.min.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
!function(){\"use strict\";function n(e){e.keyCode!==y.TAB||e.ctrlKey||e.altKey||e.metaKey||e.preventDefault()}var e=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),t=tinymce.util.Tools.resolve(\"tinymce.dom.DOMUtils\"),s=tinymce.util.Tools.resolve(\"tinymce.EditorManager\"),o=tinymce.util.Tools.resolve(\"tinymce.Env\"),a=tinymce.util.Tools.resolve(\"tinymce.util.Delay\"),c=tinymce.util.Tools.resolve(\"tinymce.util.Tools\"),y=tinymce.util.Tools.resolve(\"tinymce.util.VK\"),d=t.DOM;e.add(\"tabfocus\",function(e){function t(l){var r,e,t,n,i;l.keyCode!==y.TAB||l.ctrlKey||l.altKey||l.metaKey||l.isDefaultPrevented()||(e=function(e){function t(e){return/INPUT|TEXTAREA|BUTTON/.test(e.tagName)&&s.get(l.id)&&-1!==e.tabIndex&&i(e)}var n=d.select(\":input:enabled,*[tabindex]:not(iframe)\"),i=function(e){return\"BODY\"===e.nodeName||\"hidden\"!==e.type&&\"none\"!==e.style.display&&\"hidden\"!==e.style.visibility&&i(e.parentNode)};if(c.each(n,function(e,t){if(e.id===u.id)return r=t,!1}),0<e){for(var o=r+1;o<n.length;o++)if(t(n[o]))return n[o]}else for(o=r-1;0<=o;o--)if(t(n[o]))return n[o];return null},1===(t=c.explode(u.getParam(\"tab_focus\",u.getParam(\"tabfocus_elements\",\":prev,:next\")))).length&&(t[1]=t[0],t[0]=\":prev\"),(n=l.shiftKey?\":prev\"===t[0]?e(-1):d.get(t[0]):\":next\"===t[1]?e(1):d.get(t[1]))&&(i=s.get(n.id||n.name),n.id&&i?i.focus():a.setTimeout(function(){o.webkit||window.focus(),n.focus()},10),l.preventDefault()))}var u;(u=e).on(\"init\",function(){u.inline&&d.setAttrib(u.getBody(),\"tabIndex\",null),u.on(\"keyup\",n),o.gecko?u.on(\"keypress keydown\",t):u.on(\"keydown\",t)})})}();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/tabfocus/plugin.min.js";
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
!function(){\"use strict\";function n(e){e.keyCode!==y.TAB||e.ctrlKey||e.altKey||e.metaKey||e.preventDefault()}var e=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),t=tinymce.util.Tools.resolve(\"tinymce.dom.DOMUtils\"),s=tinymce.util.Tools.resolve(\"tinymce.EditorManager\"),o=tinymce.util.Tools.resolve(\"tinymce.Env\"),a=tinymce.util.Tools.resolve(\"tinymce.util.Delay\"),c=tinymce.util.Tools.resolve(\"tinymce.util.Tools\"),y=tinymce.util.Tools.resolve(\"tinymce.util.VK\"),d=t.DOM;e.add(\"tabfocus\",function(e){function t(l){var r,e,t,n,i;l.keyCode!==y.TAB||l.ctrlKey||l.altKey||l.metaKey||l.isDefaultPrevented()||(e=function(e){function t(e){return/INPUT|TEXTAREA|BUTTON/.test(e.tagName)&&s.get(l.id)&&-1!==e.tabIndex&&i(e)}var n=d.select(\":input:enabled,*[tabindex]:not(iframe)\"),i=function(e){return\"BODY\"===e.nodeName||\"hidden\"!==e.type&&\"none\"!==e.style.display&&\"hidden\"!==e.style.visibility&&i(e.parentNode)};if(c.each(n,function(e,t){if(e.id===u.id)return r=t,!1}),0<e){for(var o=r+1;o<n.length;o++)if(t(n[o]))return n[o]}else for(o=r-1;0<=o;o--)if(t(n[o]))return n[o];return null},1===(t=c.explode(u.getParam(\"tab_focus\",u.getParam(\"tabfocus_elements\",\":prev,:next\")))).length&&(t[1]=t[0],t[0]=\":prev\"),(n=l.shiftKey?\":prev\"===t[0]?e(-1):d.get(t[0]):\":next\"===t[1]?e(1):d.get(t[1]))&&(i=s.get(n.id||n.name),n.id&&i?i.focus():a.setTimeout(function(){o.webkit||window.focus(),n.focus()},10),l.preventDefault()))}var u;(u=e).on(\"init\",function(){u.inline&&d.setAttrib(u.getBody(),\"tabIndex\",null),u.on(\"keyup\",n),o.gecko?u.on(\"keypress keydown\",t):u.on(\"keydown\",t)})})}();", "Back/assets/vendor/tinymce/plugins/tabfocus/plugin.min.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\tabfocus\\plugin.min.js");
    }
}
