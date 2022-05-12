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

/* Back/assets/vendor/tinymce/plugins/visualchars/plugin.min.js */
class __TwigTemplate_3e4af51ffe4e04fe8983a823c27c272a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/visualchars/plugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/visualchars/plugin.min.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
!function(){\"use strict\";function n(t){return function(n){return typeof n===t}}function i(n){return function(){return n}}function t(n){return n}function e(){return l}var o,r=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),u=function(n){return e=typeof(t=n),(null===t?\"null\":\"object\"==e&&(Array.prototype.isPrototypeOf(t)||t.constructor&&\"Array\"===t.constructor.name)?\"array\":\"object\"==e&&(String.prototype.isPrototypeOf(t)||t.constructor&&\"String\"===t.constructor.name)?\"string\":e)===o;var t,e},c=n(\"boolean\"),a=n(\"number\"),s=i(!(o=\"string\")),f=i(!0),l={fold:function(n,t){return n()},isSome:s,isNone:f,getOr:t,getOrThunk:d,getOrDie:function(n){throw new Error(n||\"error: getOrDie called on none.\")},getOrNull:i(null),getOrUndefined:i(void 0),or:t,orThunk:d,map:e,each:function(){},bind:e,exists:s,forall:f,filter:function(){return l},toArray:function(){return[]},toString:i(\"none()\")};function d(n){return n()}function m(n,t){for(var e=0,o=n.length;e<o;e++)t(n[e],e)}function v(n,t){for(var e=h(n),o=0,r=e.length;o<r;o++){var i=e[o];t(n[i],i)}}var g=function(e){function n(){return r}function t(n){return n(e)}var o=i(e),r={fold:function(n,t){return t(e)},isSome:f,isNone:s,getOr:o,getOrThunk:o,getOrDie:o,getOrNull:o,getOrUndefined:o,or:n,orThunk:n,map:function(n){return g(n(e))},each:function(n){n(e)},bind:t,exists:t,forall:t,filter:function(n){return n(e)?r:l},toArray:function(){return[e]},toString:function(){return\"some(\"+e+\")\"}};return r},h=Object.keys;function p(n){return n.dom.nodeValue}function y(n,t,e){!function(n,t,e){if(!(u(e)||c(e)||a(e)))throw console.error(\"Invalid call to Attribute.set. Key \",t,\":: Value \",e,\":: Element \",n),new Error(\"Attribute value was not simple\");n.setAttribute(t,e+\"\")}(n.dom,t,e)}function b(n,t){n.dom.removeAttribute(t)}function w(n,t){var e,o=null===(e=n.dom.getAttribute(t))?void 0:e;return void 0===o||\"\"===o?[]:o.split(\" \")}function T(n){return void 0!==n.dom.classList}function k(n,t){return i=t,0<(o=function(n){for(var t=[],e=0,o=n.length;e<o;e++){var r=n[e];r!==i&&t.push(r)}return t}(w(e=n,\"class\"))).length?y(e,\"class\",o.join(\" \")):b(e,\"class\"),0;var e,i,o}function N(n,t){var e=\"\";return v(n,function(n,t){e+=t}),new RegExp(\"[\"+e+\"]\",t?\"g\":\"\")}function A(n){return'<span data-mce-bogus=\"1\" class=\"mce-'+H[n]+'\">'+n+\"</span>\"}function O(n){var t=p(n);return j(n)&&void 0!==t&&_.test(t)}function C(n){return\"span\"===n.nodeName.toLowerCase()&&n.classList.contains(\"mce-nbsp-wrap\")}function S(f,n){m(K(M.fromDom(n),O),function(n){var t,e,o,r,i,u=n.dom.parentNode;if(C(u))t=M.fromDom(u),e=U,T(t)?t.dom.classList.add(e):(r=e,i=w(o=t,\"class\").concat([r]),y(o,\"class\",i.join(\" \")));else{for(var c,a=f.dom.encode(p(n)).replace(F,A),s=f.dom.create(\"div\",null,a);c=s.lastChild;)f.dom.insertAfter(c,n.dom);f.dom.remove(n.dom)}})}function D(r,n){m(r.dom.select(I,n),function(n){var t,e,o;C(n)?(t=M.fromDom(n),e=U,T(t)?t.dom.classList.remove(e):k(t,e),0===(T(o=t)?o.dom.classList:w(o,\"class\")).length&&b(o,\"class\")):r.dom.remove(n,!0)})}function E(n){var t=n.getBody(),e=n.selection.getBookmark(),o=function(n,t){for(;n.parentNode;){if(n.parentNode===t)return n;n=n.parentNode}}(n.selection.getNode(),t);D(n,o=void 0!==o?o:t),S(n,o),n.selection.moveToBookmark(e)}function L(n,t){var e=n,o=t.get();e.fire(\"VisualChars\",{state:o});var r=n.getBody();(!0===t.get()?S:D)(n,r)}function x(n,t){n.addCommand(\"mceVisualChars\",function(){!function(n,t){t.set(!t.get());var e=n.selection.getBookmark();L(n,t),n.selection.moveToBookmark(e)}(n,t)})}function B(e,o){return function(t){function n(n){return t.setActive(n.state)}return t.setActive(o.get()),e.on(\"VisualChars\",n),function(){return e.off(\"VisualChars\",n)}}}\"undefined\"!=typeof window||Function(\"return this;\")();function P(n){if(null==n)throw new Error(\"Node cannot be null or undefined\");return{dom:n}}var V,j=function(n){return 3===n.dom.nodeType},M={fromHtml:function(n,t){var e=(t||document).createElement(\"div\");if(e.innerHTML=n,!e.hasChildNodes()||1<e.childNodes.length)throw console.error(\"HTML does not have a single root node\",n),new Error(\"HTML must have a single root node\");return P(e.childNodes[0])},fromTag:function(n,t){var e=(t||document).createElement(n);return P(e)},fromText:function(n,t){var e=(t||document).createTextNode(n);return P(e)},fromDom:P,fromPoint:function(n,t,e){return(null==(o=n.dom.elementFromPoint(t,e))?l:g(o)).map(P);var o}},H={\"\\xa0\":\"nbsp\",\"\\xad\":\"shy\"},_=N(H),F=N(H,!0),I=(V=\"\",v(H,function(n){V&&(V+=\",\"),V+=\"span.mce-\"+n}),V),U=\"mce-nbsp\",K=function(n,t){var e=[];return m(function(n,t){for(var e=n.length,o=new Array(e),r=0;r<e;r++){var i=n[r];o[r]=t(i,r)}return o}(n.dom.childNodes,M.fromDom),function(n){e=(e=t(n)?e.concat([n]):e).concat(K(n,t))}),e},R=tinymce.util.Tools.resolve(\"tinymce.util.Delay\");r.add(\"visualchars\",function(n){var t,e,o,r,i,u,c,a,s,f,l=(t=n.getParam(\"visualchars_default_state\",!1),e=t,{get:function(){return e},set:function(n){e=n}});function d(){return o.execCommand(\"mceVisualChars\")}return x(n,l),(o=n).ui.registry.addToggleButton(\"visualchars\",{tooltip:\"Show invisible characters\",icon:\"visualchars\",onAction:d,onSetup:B(o,r=l)}),o.ui.registry.addToggleMenuItem(\"visualchars\",{text:\"Show invisible characters\",icon:\"visualchars\",onAction:d,onSetup:B(o,r)}),i=n,u=l,c=R.debounce(function(){E(i)},300),!1!==i.getParam(\"forced_root_block\")&&i.on(\"keydown\",function(n){!0===u.get()&&(13===n.keyCode?E(i):c())}),i.on(\"remove\",c.stop),s=l,(a=n).on(\"init\",function(){L(a,s)}),f=l,{isEnabled:function(){return f.get()}}})}();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/visualchars/plugin.min.js";
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
!function(){\"use strict\";function n(t){return function(n){return typeof n===t}}function i(n){return function(){return n}}function t(n){return n}function e(){return l}var o,r=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),u=function(n){return e=typeof(t=n),(null===t?\"null\":\"object\"==e&&(Array.prototype.isPrototypeOf(t)||t.constructor&&\"Array\"===t.constructor.name)?\"array\":\"object\"==e&&(String.prototype.isPrototypeOf(t)||t.constructor&&\"String\"===t.constructor.name)?\"string\":e)===o;var t,e},c=n(\"boolean\"),a=n(\"number\"),s=i(!(o=\"string\")),f=i(!0),l={fold:function(n,t){return n()},isSome:s,isNone:f,getOr:t,getOrThunk:d,getOrDie:function(n){throw new Error(n||\"error: getOrDie called on none.\")},getOrNull:i(null),getOrUndefined:i(void 0),or:t,orThunk:d,map:e,each:function(){},bind:e,exists:s,forall:f,filter:function(){return l},toArray:function(){return[]},toString:i(\"none()\")};function d(n){return n()}function m(n,t){for(var e=0,o=n.length;e<o;e++)t(n[e],e)}function v(n,t){for(var e=h(n),o=0,r=e.length;o<r;o++){var i=e[o];t(n[i],i)}}var g=function(e){function n(){return r}function t(n){return n(e)}var o=i(e),r={fold:function(n,t){return t(e)},isSome:f,isNone:s,getOr:o,getOrThunk:o,getOrDie:o,getOrNull:o,getOrUndefined:o,or:n,orThunk:n,map:function(n){return g(n(e))},each:function(n){n(e)},bind:t,exists:t,forall:t,filter:function(n){return n(e)?r:l},toArray:function(){return[e]},toString:function(){return\"some(\"+e+\")\"}};return r},h=Object.keys;function p(n){return n.dom.nodeValue}function y(n,t,e){!function(n,t,e){if(!(u(e)||c(e)||a(e)))throw console.error(\"Invalid call to Attribute.set. Key \",t,\":: Value \",e,\":: Element \",n),new Error(\"Attribute value was not simple\");n.setAttribute(t,e+\"\")}(n.dom,t,e)}function b(n,t){n.dom.removeAttribute(t)}function w(n,t){var e,o=null===(e=n.dom.getAttribute(t))?void 0:e;return void 0===o||\"\"===o?[]:o.split(\" \")}function T(n){return void 0!==n.dom.classList}function k(n,t){return i=t,0<(o=function(n){for(var t=[],e=0,o=n.length;e<o;e++){var r=n[e];r!==i&&t.push(r)}return t}(w(e=n,\"class\"))).length?y(e,\"class\",o.join(\" \")):b(e,\"class\"),0;var e,i,o}function N(n,t){var e=\"\";return v(n,function(n,t){e+=t}),new RegExp(\"[\"+e+\"]\",t?\"g\":\"\")}function A(n){return'<span data-mce-bogus=\"1\" class=\"mce-'+H[n]+'\">'+n+\"</span>\"}function O(n){var t=p(n);return j(n)&&void 0!==t&&_.test(t)}function C(n){return\"span\"===n.nodeName.toLowerCase()&&n.classList.contains(\"mce-nbsp-wrap\")}function S(f,n){m(K(M.fromDom(n),O),function(n){var t,e,o,r,i,u=n.dom.parentNode;if(C(u))t=M.fromDom(u),e=U,T(t)?t.dom.classList.add(e):(r=e,i=w(o=t,\"class\").concat([r]),y(o,\"class\",i.join(\" \")));else{for(var c,a=f.dom.encode(p(n)).replace(F,A),s=f.dom.create(\"div\",null,a);c=s.lastChild;)f.dom.insertAfter(c,n.dom);f.dom.remove(n.dom)}})}function D(r,n){m(r.dom.select(I,n),function(n){var t,e,o;C(n)?(t=M.fromDom(n),e=U,T(t)?t.dom.classList.remove(e):k(t,e),0===(T(o=t)?o.dom.classList:w(o,\"class\")).length&&b(o,\"class\")):r.dom.remove(n,!0)})}function E(n){var t=n.getBody(),e=n.selection.getBookmark(),o=function(n,t){for(;n.parentNode;){if(n.parentNode===t)return n;n=n.parentNode}}(n.selection.getNode(),t);D(n,o=void 0!==o?o:t),S(n,o),n.selection.moveToBookmark(e)}function L(n,t){var e=n,o=t.get();e.fire(\"VisualChars\",{state:o});var r=n.getBody();(!0===t.get()?S:D)(n,r)}function x(n,t){n.addCommand(\"mceVisualChars\",function(){!function(n,t){t.set(!t.get());var e=n.selection.getBookmark();L(n,t),n.selection.moveToBookmark(e)}(n,t)})}function B(e,o){return function(t){function n(n){return t.setActive(n.state)}return t.setActive(o.get()),e.on(\"VisualChars\",n),function(){return e.off(\"VisualChars\",n)}}}\"undefined\"!=typeof window||Function(\"return this;\")();function P(n){if(null==n)throw new Error(\"Node cannot be null or undefined\");return{dom:n}}var V,j=function(n){return 3===n.dom.nodeType},M={fromHtml:function(n,t){var e=(t||document).createElement(\"div\");if(e.innerHTML=n,!e.hasChildNodes()||1<e.childNodes.length)throw console.error(\"HTML does not have a single root node\",n),new Error(\"HTML must have a single root node\");return P(e.childNodes[0])},fromTag:function(n,t){var e=(t||document).createElement(n);return P(e)},fromText:function(n,t){var e=(t||document).createTextNode(n);return P(e)},fromDom:P,fromPoint:function(n,t,e){return(null==(o=n.dom.elementFromPoint(t,e))?l:g(o)).map(P);var o}},H={\"\\xa0\":\"nbsp\",\"\\xad\":\"shy\"},_=N(H),F=N(H,!0),I=(V=\"\",v(H,function(n){V&&(V+=\",\"),V+=\"span.mce-\"+n}),V),U=\"mce-nbsp\",K=function(n,t){var e=[];return m(function(n,t){for(var e=n.length,o=new Array(e),r=0;r<e;r++){var i=n[r];o[r]=t(i,r)}return o}(n.dom.childNodes,M.fromDom),function(n){e=(e=t(n)?e.concat([n]):e).concat(K(n,t))}),e},R=tinymce.util.Tools.resolve(\"tinymce.util.Delay\");r.add(\"visualchars\",function(n){var t,e,o,r,i,u,c,a,s,f,l=(t=n.getParam(\"visualchars_default_state\",!1),e=t,{get:function(){return e},set:function(n){e=n}});function d(){return o.execCommand(\"mceVisualChars\")}return x(n,l),(o=n).ui.registry.addToggleButton(\"visualchars\",{tooltip:\"Show invisible characters\",icon:\"visualchars\",onAction:d,onSetup:B(o,r=l)}),o.ui.registry.addToggleMenuItem(\"visualchars\",{text:\"Show invisible characters\",icon:\"visualchars\",onAction:d,onSetup:B(o,r)}),i=n,u=l,c=R.debounce(function(){E(i)},300),!1!==i.getParam(\"forced_root_block\")&&i.on(\"keydown\",function(n){!0===u.get()&&(13===n.keyCode?E(i):c())}),i.on(\"remove\",c.stop),s=l,(a=n).on(\"init\",function(){L(a,s)}),f=l,{isEnabled:function(){return f.get()}}})}();", "Back/assets/vendor/tinymce/plugins/visualchars/plugin.min.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\visualchars\\plugin.min.js");
    }
}
