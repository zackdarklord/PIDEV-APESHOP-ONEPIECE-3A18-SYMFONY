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

/* Back/assets/vendor/tinymce/plugins/advlist/plugin.min.js */
class __TwigTemplate_22c87e35ddabf1a8df535678826177b5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/advlist/plugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/advlist/plugin.min.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
!function(){\"use strict\";function f(t,e,n){t.execCommand(\"UL\"===e?\"InsertUnorderedList\":\"InsertOrderedList\",!1,!1===n?null:{\"list-style-type\":n})}function i(t){return function(){return t}}function t(t){return t}function e(){return s}var n=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),g=tinymce.util.Tools.resolve(\"tinymce.util.Tools\"),u=i(!1),l=i(!0),s={fold:function(t,e){return t()},isSome:u,isNone:l,getOr:t,getOrThunk:r,getOrDie:function(t){throw new Error(t||\"error: getOrDie called on none.\")},getOrNull:i(null),getOrUndefined:i(void 0),or:t,orThunk:r,map:e,each:function(){},bind:e,exists:u,forall:l,filter:function(){return s},toArray:function(){return[]},toString:i(\"none()\")};function r(t){return t()}function d(t){return t&&/^(TH|TD)\$/.test(t.nodeName)}function m(c,a){return function(s){function t(t){var e,n,r,o,i,u,l;s.setActive((e=c,r=a,i=-1!==(o=function(t,e){for(var n=0;n<t.length;n++)if(e(t[n]))return n;return-1}((n=t).parents,d))?n.parents.slice(0,o):n.parents,0<(u=g.grep(i,(l=e,function(t){return t&&/^(OL|UL|DL)\$/.test(t.nodeName)&&(e=t,l.\$.contains(l.getBody(),e));var e}))).length&&u[0].nodeName===r))}return c.on(\"NodeChange\",t),function(){return c.off(\"NodeChange\",t)}}}function c(t,e,n,r,o,i){var u,l,s,c,a,d;1<i.length?(c=r,a=o,d=i,(s=t).ui.registry.addSplitButton(e,{tooltip:n,icon:\"OL\"===a?\"ordered-list\":\"unordered-list\",presets:\"listpreview\",columns:3,fetch:function(t){t(g.map(d,function(t){return{type:\"choiceitem\",value:\"default\"===t?\"\":t,icon:\"list-\"+(\"OL\"===a?\"num\":\"bull\")+\"-\"+(\"disc\"===t||\"decimal\"===t?\"default\":t),text:t.replace(/\\-/g,\" \").replace(/\\b\\w/g,function(t){return t.toUpperCase()})}}))},onAction:function(){return s.execCommand(c)},onItemAction:function(t,e){f(s,a,e)},select:function(e){var t,n=(t=s).dom.getParent(t.selection.getNode(),\"ol,ul\"),r=t.dom.getStyle(n,\"listStyleType\");return p(r).map(function(t){return e===t}).getOr(!1)},onSetup:m(s,a)})):(l=r,(u=t).ui.registry.addToggleButton(e,{active:!1,tooltip:n,icon:\"OL\"===o?\"ordered-list\":\"unordered-list\",onSetup:m(u,o),onAction:function(){return u.execCommand(l)}}))}var a=function(n){function t(){return o}function e(t){return t(n)}var r=i(n),o={fold:function(t,e){return e(n)},isSome:l,isNone:u,getOr:r,getOrThunk:r,getOrDie:r,getOrNull:r,getOrUndefined:r,or:t,orThunk:t,map:function(t){return a(t(n))},each:function(t){t(n)},bind:e,exists:e,forall:e,filter:function(t){return t(n)?o:s},toArray:function(){return[n]},toString:function(){return\"some(\"+n+\")\"}};return o},p=function(t){return null==t?s:a(t)};n.add(\"advlist\",function(t){var n,e,r,o;t.hasPlugin(\"lists\")?(c(e=t,\"numlist\",\"Numbered list\",\"InsertOrderedList\",\"OL\",(r=e.getParam(\"advlist_number_styles\",\"default,lower-alpha,lower-greek,lower-roman,upper-alpha,upper-roman\"))?r.split(/[ ,]/):[]),c(e,\"bullist\",\"Bullet list\",\"InsertUnorderedList\",\"UL\",(o=e.getParam(\"advlist_bullet_styles\",\"default,circle,square\"))?o.split(/[ ,]/):[]),(n=t).addCommand(\"ApplyUnorderedListStyle\",function(t,e){f(n,\"UL\",e[\"list-style-type\"])}),n.addCommand(\"ApplyOrderedListStyle\",function(t,e){f(n,\"OL\",e[\"list-style-type\"])})):console.error(\"Please use the Lists plugin together with the Advanced List plugin.\")})}();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/advlist/plugin.min.js";
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
!function(){\"use strict\";function f(t,e,n){t.execCommand(\"UL\"===e?\"InsertUnorderedList\":\"InsertOrderedList\",!1,!1===n?null:{\"list-style-type\":n})}function i(t){return function(){return t}}function t(t){return t}function e(){return s}var n=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),g=tinymce.util.Tools.resolve(\"tinymce.util.Tools\"),u=i(!1),l=i(!0),s={fold:function(t,e){return t()},isSome:u,isNone:l,getOr:t,getOrThunk:r,getOrDie:function(t){throw new Error(t||\"error: getOrDie called on none.\")},getOrNull:i(null),getOrUndefined:i(void 0),or:t,orThunk:r,map:e,each:function(){},bind:e,exists:u,forall:l,filter:function(){return s},toArray:function(){return[]},toString:i(\"none()\")};function r(t){return t()}function d(t){return t&&/^(TH|TD)\$/.test(t.nodeName)}function m(c,a){return function(s){function t(t){var e,n,r,o,i,u,l;s.setActive((e=c,r=a,i=-1!==(o=function(t,e){for(var n=0;n<t.length;n++)if(e(t[n]))return n;return-1}((n=t).parents,d))?n.parents.slice(0,o):n.parents,0<(u=g.grep(i,(l=e,function(t){return t&&/^(OL|UL|DL)\$/.test(t.nodeName)&&(e=t,l.\$.contains(l.getBody(),e));var e}))).length&&u[0].nodeName===r))}return c.on(\"NodeChange\",t),function(){return c.off(\"NodeChange\",t)}}}function c(t,e,n,r,o,i){var u,l,s,c,a,d;1<i.length?(c=r,a=o,d=i,(s=t).ui.registry.addSplitButton(e,{tooltip:n,icon:\"OL\"===a?\"ordered-list\":\"unordered-list\",presets:\"listpreview\",columns:3,fetch:function(t){t(g.map(d,function(t){return{type:\"choiceitem\",value:\"default\"===t?\"\":t,icon:\"list-\"+(\"OL\"===a?\"num\":\"bull\")+\"-\"+(\"disc\"===t||\"decimal\"===t?\"default\":t),text:t.replace(/\\-/g,\" \").replace(/\\b\\w/g,function(t){return t.toUpperCase()})}}))},onAction:function(){return s.execCommand(c)},onItemAction:function(t,e){f(s,a,e)},select:function(e){var t,n=(t=s).dom.getParent(t.selection.getNode(),\"ol,ul\"),r=t.dom.getStyle(n,\"listStyleType\");return p(r).map(function(t){return e===t}).getOr(!1)},onSetup:m(s,a)})):(l=r,(u=t).ui.registry.addToggleButton(e,{active:!1,tooltip:n,icon:\"OL\"===o?\"ordered-list\":\"unordered-list\",onSetup:m(u,o),onAction:function(){return u.execCommand(l)}}))}var a=function(n){function t(){return o}function e(t){return t(n)}var r=i(n),o={fold:function(t,e){return e(n)},isSome:l,isNone:u,getOr:r,getOrThunk:r,getOrDie:r,getOrNull:r,getOrUndefined:r,or:t,orThunk:t,map:function(t){return a(t(n))},each:function(t){t(n)},bind:e,exists:e,forall:e,filter:function(t){return t(n)?o:s},toArray:function(){return[n]},toString:function(){return\"some(\"+n+\")\"}};return o},p=function(t){return null==t?s:a(t)};n.add(\"advlist\",function(t){var n,e,r,o;t.hasPlugin(\"lists\")?(c(e=t,\"numlist\",\"Numbered list\",\"InsertOrderedList\",\"OL\",(r=e.getParam(\"advlist_number_styles\",\"default,lower-alpha,lower-greek,lower-roman,upper-alpha,upper-roman\"))?r.split(/[ ,]/):[]),c(e,\"bullist\",\"Bullet list\",\"InsertUnorderedList\",\"UL\",(o=e.getParam(\"advlist_bullet_styles\",\"default,circle,square\"))?o.split(/[ ,]/):[]),(n=t).addCommand(\"ApplyUnorderedListStyle\",function(t,e){f(n,\"UL\",e[\"list-style-type\"])}),n.addCommand(\"ApplyOrderedListStyle\",function(t,e){f(n,\"OL\",e[\"list-style-type\"])})):console.error(\"Please use the Lists plugin together with the Advanced List plugin.\")})}();", "Back/assets/vendor/tinymce/plugins/advlist/plugin.min.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\advlist\\plugin.min.js");
    }
}
