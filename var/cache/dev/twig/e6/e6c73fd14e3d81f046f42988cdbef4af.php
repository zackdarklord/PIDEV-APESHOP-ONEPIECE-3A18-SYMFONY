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

/* Back/assets/vendor/tinymce/plugins/anchor/plugin.min.js */
class __TwigTemplate_92a8a3483b97fde1682953117ba82068 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/anchor/plugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/anchor/plugin.min.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
!function(){\"use strict\";function a(e){return e.getAttribute(\"id\")||e.getAttribute(\"name\")||\"\"}function c(e){return e&&\"a\"===e.nodeName.toLowerCase()&&!e.getAttribute(\"href\")&&\"\"!==a(e)}function d(e){return e.dom.getParent(e.selection.getStart(),l)}function r(e,t){var o,a,n,r,i,l=d(e);l?(n=e,r=t,(i=l).removeAttribute(\"name\"),i.id=r,n.addVisual(),n.undoManager.add()):(a=t,(o=e).undoManager.transact(function(){var e,n;o.getParam(\"allow_html_in_named_anchor\",!1,\"boolean\")||o.selection.collapse(!0),o.selection.isCollapsed()?o.insertContent(o.dom.createHTML(\"a\",{id:a})):(n=(e=o).dom,u(n).walk(e.selection.getRng(),function(e){s.each(e,function(e){var t;c(t=e)&&!t.firstChild&&n.remove(e,!1)})}),o.formatter.remove(\"namedAnchor\",null,null,!0),o.formatter.apply(\"namedAnchor\",{value:a}),o.addVisual())})),e.focus()}function i(r){return function(e){for(var t,n=0;n<e.length;n++){var o=e[n],a=void 0;!(a=t=o)||a.attr(\"href\")||!a.attr(\"id\")&&!a.attr(\"name\")||t.firstChild||o.attr(\"contenteditable\",r)}}}var e=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),u=tinymce.util.Tools.resolve(\"tinymce.dom.RangeUtils\"),s=tinymce.util.Tools.resolve(\"tinymce.util.Tools\"),l=\"a:not([href])\";e.add(\"anchor\",function(e){var t,n,o;(t=e).on(\"PreInit\",function(){t.parser.addNodeFilter(\"a\",i(\"false\")),t.serializer.addNodeFilter(\"a\",i(null))}),(n=e).addCommand(\"mceAnchor\",function(){var o,e,t;t=(e=d(o=n))?a(e):\"\",o.windowManager.open({title:\"Anchor\",size:\"normal\",body:{type:\"panel\",items:[{name:\"id\",type:\"input\",label:\"ID\",placeholder:\"example\"}]},buttons:[{type:\"cancel\",name:\"cancel\",text:\"Cancel\"},{type:\"submit\",name:\"save\",text:\"Save\",primary:!0}],initialData:{id:t},onSubmit:function(e){var t=o,n=e.getData().id;(/^[A-Za-z][A-Za-z0-9\\-:._]*\$/.test(n)?(r(t,n),0):(t.windowManager.alert(\"Id should start with a letter, followed only by letters, numbers, dashes, dots, colons or underscores.\"),1))||e.close()}})}),(o=e).ui.registry.addToggleButton(\"anchor\",{icon:\"bookmark\",tooltip:\"Anchor\",onAction:function(){return o.execCommand(\"mceAnchor\")},onSetup:function(e){return o.selection.selectorChangedWithUnbind(\"a:not([href])\",e.setActive).unbind}}),o.ui.registry.addMenuItem(\"anchor\",{icon:\"bookmark\",text:\"Anchor...\",onAction:function(){return o.execCommand(\"mceAnchor\")}}),e.on(\"PreInit\",function(){e.formatter.register(\"namedAnchor\",{inline:\"a\",selector:l,remove:\"all\",split:!0,deep:!0,attributes:{id:\"%value\"},onmatch:c})})})}();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/anchor/plugin.min.js";
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
!function(){\"use strict\";function a(e){return e.getAttribute(\"id\")||e.getAttribute(\"name\")||\"\"}function c(e){return e&&\"a\"===e.nodeName.toLowerCase()&&!e.getAttribute(\"href\")&&\"\"!==a(e)}function d(e){return e.dom.getParent(e.selection.getStart(),l)}function r(e,t){var o,a,n,r,i,l=d(e);l?(n=e,r=t,(i=l).removeAttribute(\"name\"),i.id=r,n.addVisual(),n.undoManager.add()):(a=t,(o=e).undoManager.transact(function(){var e,n;o.getParam(\"allow_html_in_named_anchor\",!1,\"boolean\")||o.selection.collapse(!0),o.selection.isCollapsed()?o.insertContent(o.dom.createHTML(\"a\",{id:a})):(n=(e=o).dom,u(n).walk(e.selection.getRng(),function(e){s.each(e,function(e){var t;c(t=e)&&!t.firstChild&&n.remove(e,!1)})}),o.formatter.remove(\"namedAnchor\",null,null,!0),o.formatter.apply(\"namedAnchor\",{value:a}),o.addVisual())})),e.focus()}function i(r){return function(e){for(var t,n=0;n<e.length;n++){var o=e[n],a=void 0;!(a=t=o)||a.attr(\"href\")||!a.attr(\"id\")&&!a.attr(\"name\")||t.firstChild||o.attr(\"contenteditable\",r)}}}var e=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),u=tinymce.util.Tools.resolve(\"tinymce.dom.RangeUtils\"),s=tinymce.util.Tools.resolve(\"tinymce.util.Tools\"),l=\"a:not([href])\";e.add(\"anchor\",function(e){var t,n,o;(t=e).on(\"PreInit\",function(){t.parser.addNodeFilter(\"a\",i(\"false\")),t.serializer.addNodeFilter(\"a\",i(null))}),(n=e).addCommand(\"mceAnchor\",function(){var o,e,t;t=(e=d(o=n))?a(e):\"\",o.windowManager.open({title:\"Anchor\",size:\"normal\",body:{type:\"panel\",items:[{name:\"id\",type:\"input\",label:\"ID\",placeholder:\"example\"}]},buttons:[{type:\"cancel\",name:\"cancel\",text:\"Cancel\"},{type:\"submit\",name:\"save\",text:\"Save\",primary:!0}],initialData:{id:t},onSubmit:function(e){var t=o,n=e.getData().id;(/^[A-Za-z][A-Za-z0-9\\-:._]*\$/.test(n)?(r(t,n),0):(t.windowManager.alert(\"Id should start with a letter, followed only by letters, numbers, dashes, dots, colons or underscores.\"),1))||e.close()}})}),(o=e).ui.registry.addToggleButton(\"anchor\",{icon:\"bookmark\",tooltip:\"Anchor\",onAction:function(){return o.execCommand(\"mceAnchor\")},onSetup:function(e){return o.selection.selectorChangedWithUnbind(\"a:not([href])\",e.setActive).unbind}}),o.ui.registry.addMenuItem(\"anchor\",{icon:\"bookmark\",text:\"Anchor...\",onAction:function(){return o.execCommand(\"mceAnchor\")}}),e.on(\"PreInit\",function(){e.formatter.register(\"namedAnchor\",{inline:\"a\",selector:l,remove:\"all\",split:!0,deep:!0,attributes:{id:\"%value\"},onmatch:c})})})}();", "Back/assets/vendor/tinymce/plugins/anchor/plugin.min.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\anchor\\plugin.min.js");
    }
}
