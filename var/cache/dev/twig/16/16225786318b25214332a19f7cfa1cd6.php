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

/* Back/assets/vendor/tinymce/plugins/toc/plugin.min.js */
class __TwigTemplate_3406283d5d780a6073a111ec9a63b01b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/toc/plugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/toc/plugin.min.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
!function(){\"use strict\";function a(t){return t.getParam(\"toc_class\",\"mce-toc\")}function s(t){var e=t.getParam(\"toc_header\",\"h2\");return/^h[1-6]\$/.test(e)?e:\"h2\"}function u(n){return function(t){function e(){return t.setDisabled(n.mode.isReadOnly()||!(0<g(n).length))}return e(),n.on(\"LoadContent SetContent change\",e),function(){return n.on(\"LoadContent SetContent change\",e)}}}function d(t){var e,n,o,i=\"\",r=g(t),c=function(t){for(var e=9,n=0;n<t.length;n++)if(1===(e=t[n].level<e?t[n].level:e))return e;return e}(r)-1;if(!r.length)return\"\";i+=(e=s(t),n=v.translate(\"Table of Contents\"),o=\"</\"+e+\">\",\"<\"+e+' contenteditable=\"true\">'+m.DOM.encode(n)+o);for(var l=0;l<r.length;l++){var a=r[l];a.element.id=a.id;var u=r[l+1]&&r[l+1].level;if(c===a.level)i+=\"<li>\";else for(var d=c;d<a.level;d++)i+=\"<ul><li>\";if(i+='<a href=\"#'+a.id+'\">'+a.title+\"</a>\",u!==a.level&&u)for(d=a.level;u<d;d--)i+=d===u+1?\"</li></ul><li>\":\"</li></ul>\";else i+=\"</li>\",u||(i+=\"</ul>\");c=a.level}return i}function f(t){var e=a(t),n=t.\$(\".\"+e);n.length&&t.undoManager.transact(function(){n.html(d(t))})}var t,e=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),m=tinymce.util.Tools.resolve(\"tinymce.dom.DOMUtils\"),v=tinymce.util.Tools.resolve(\"tinymce.util.I18n\"),c=tinymce.util.Tools.resolve(\"tinymce.util.Tools\"),l=(t=0,function(){return\"mcetoc_\"+(new Date).getTime().toString(32)+(t++).toString(32)}),g=function(n){var t,o=a(n),e=s(n),i=function(t){for(var e=[],n=1;n<=t;n++)e.push(\"h\"+n);return e.join(\",\")}(1<=(t=parseInt(n.getParam(\"toc_depth\",\"3\"),10))&&t<=9?t:3),r=n.\$(i);return r.length&&/^h[1-9]\$/i.test(e)&&(r=r.filter(function(t,e){return!n.dom.hasClass(e.parentNode,o)})),c.map(r,function(t){return{id:t.id||l(),level:parseInt(t.nodeName.replace(/^H/i,\"\"),10),title:n.\$.text(t),element:t}})};e.add(\"toc\",function(t){var c,e,n,o,i,r;function l(){return i.execCommand(\"mceInsertToc\")}(c=t).addCommand(\"mceInsertToc\",function(){var t,e,n,o,i,r;o=a(t=c),i=t.\$(\".\"+o),r=t,!i.length||0<r.dom.getParents(i[0],\".mce-offscreen-selection\").length?t.insertContent((n=d(e=t),'<div class=\"'+e.dom.encode(a(e))+'\" contenteditable=\"false\">'+n+\"</div>\")):f(t)}),c.addCommand(\"mceUpdateToc\",function(){f(c)}),(i=t).ui.registry.addButton(\"toc\",{icon:\"toc\",tooltip:\"Table of contents\",onAction:l,onSetup:u(i)}),i.ui.registry.addButton(\"tocupdate\",{icon:\"reload\",tooltip:\"Update\",onAction:function(){return i.execCommand(\"mceUpdateToc\")}}),i.ui.registry.addMenuItem(\"toc\",{icon:\"toc\",text:\"Table of contents\",onAction:l,onSetup:u(i)}),i.ui.registry.addContextToolbar(\"toc\",{items:\"tocupdate\",predicate:(r=i,function(t){return t&&r.dom.is(t,\".\"+a(r))&&r.getBody().contains(t)}),scope:\"node\",position:\"node\"}),n=(e=t).\$,o=a(e),e.on(\"PreProcess\",function(t){var e=n(\".\"+o,t.node);e.length&&(e.removeAttr(\"contentEditable\"),e.find(\"[contenteditable]\").removeAttr(\"contentEditable\"))}),e.on(\"SetContent\",function(){var t=n(\".\"+o);t.length&&(t.attr(\"contentEditable\",!1),t.children(\":first-child\").attr(\"contentEditable\",!0))})})}();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/toc/plugin.min.js";
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
!function(){\"use strict\";function a(t){return t.getParam(\"toc_class\",\"mce-toc\")}function s(t){var e=t.getParam(\"toc_header\",\"h2\");return/^h[1-6]\$/.test(e)?e:\"h2\"}function u(n){return function(t){function e(){return t.setDisabled(n.mode.isReadOnly()||!(0<g(n).length))}return e(),n.on(\"LoadContent SetContent change\",e),function(){return n.on(\"LoadContent SetContent change\",e)}}}function d(t){var e,n,o,i=\"\",r=g(t),c=function(t){for(var e=9,n=0;n<t.length;n++)if(1===(e=t[n].level<e?t[n].level:e))return e;return e}(r)-1;if(!r.length)return\"\";i+=(e=s(t),n=v.translate(\"Table of Contents\"),o=\"</\"+e+\">\",\"<\"+e+' contenteditable=\"true\">'+m.DOM.encode(n)+o);for(var l=0;l<r.length;l++){var a=r[l];a.element.id=a.id;var u=r[l+1]&&r[l+1].level;if(c===a.level)i+=\"<li>\";else for(var d=c;d<a.level;d++)i+=\"<ul><li>\";if(i+='<a href=\"#'+a.id+'\">'+a.title+\"</a>\",u!==a.level&&u)for(d=a.level;u<d;d--)i+=d===u+1?\"</li></ul><li>\":\"</li></ul>\";else i+=\"</li>\",u||(i+=\"</ul>\");c=a.level}return i}function f(t){var e=a(t),n=t.\$(\".\"+e);n.length&&t.undoManager.transact(function(){n.html(d(t))})}var t,e=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),m=tinymce.util.Tools.resolve(\"tinymce.dom.DOMUtils\"),v=tinymce.util.Tools.resolve(\"tinymce.util.I18n\"),c=tinymce.util.Tools.resolve(\"tinymce.util.Tools\"),l=(t=0,function(){return\"mcetoc_\"+(new Date).getTime().toString(32)+(t++).toString(32)}),g=function(n){var t,o=a(n),e=s(n),i=function(t){for(var e=[],n=1;n<=t;n++)e.push(\"h\"+n);return e.join(\",\")}(1<=(t=parseInt(n.getParam(\"toc_depth\",\"3\"),10))&&t<=9?t:3),r=n.\$(i);return r.length&&/^h[1-9]\$/i.test(e)&&(r=r.filter(function(t,e){return!n.dom.hasClass(e.parentNode,o)})),c.map(r,function(t){return{id:t.id||l(),level:parseInt(t.nodeName.replace(/^H/i,\"\"),10),title:n.\$.text(t),element:t}})};e.add(\"toc\",function(t){var c,e,n,o,i,r;function l(){return i.execCommand(\"mceInsertToc\")}(c=t).addCommand(\"mceInsertToc\",function(){var t,e,n,o,i,r;o=a(t=c),i=t.\$(\".\"+o),r=t,!i.length||0<r.dom.getParents(i[0],\".mce-offscreen-selection\").length?t.insertContent((n=d(e=t),'<div class=\"'+e.dom.encode(a(e))+'\" contenteditable=\"false\">'+n+\"</div>\")):f(t)}),c.addCommand(\"mceUpdateToc\",function(){f(c)}),(i=t).ui.registry.addButton(\"toc\",{icon:\"toc\",tooltip:\"Table of contents\",onAction:l,onSetup:u(i)}),i.ui.registry.addButton(\"tocupdate\",{icon:\"reload\",tooltip:\"Update\",onAction:function(){return i.execCommand(\"mceUpdateToc\")}}),i.ui.registry.addMenuItem(\"toc\",{icon:\"toc\",text:\"Table of contents\",onAction:l,onSetup:u(i)}),i.ui.registry.addContextToolbar(\"toc\",{items:\"tocupdate\",predicate:(r=i,function(t){return t&&r.dom.is(t,\".\"+a(r))&&r.getBody().contains(t)}),scope:\"node\",position:\"node\"}),n=(e=t).\$,o=a(e),e.on(\"PreProcess\",function(t){var e=n(\".\"+o,t.node);e.length&&(e.removeAttr(\"contentEditable\"),e.find(\"[contenteditable]\").removeAttr(\"contentEditable\"))}),e.on(\"SetContent\",function(){var t=n(\".\"+o);t.length&&(t.attr(\"contentEditable\",!1),t.children(\":first-child\").attr(\"contentEditable\",!0))})})}();", "Back/assets/vendor/tinymce/plugins/toc/plugin.min.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\toc\\plugin.min.js");
    }
}
