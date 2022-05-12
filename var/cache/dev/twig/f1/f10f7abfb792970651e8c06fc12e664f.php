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

/* Back/assets/vendor/tinymce/plugins/directionality/plugin.min.js */
class __TwigTemplate_b3933544fe0fb191f2f02de923298f48 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/directionality/plugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/directionality/plugin.min.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
!function(){\"use strict\";function n(t){return function(n){return typeof n===t}}function u(n){return function(){return n}}function t(n){return n}function r(){return d}var o,e=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),i=function(n){return r=typeof(t=n),(null===t?\"null\":\"object\"==r&&(Array.prototype.isPrototypeOf(t)||t.constructor&&\"Array\"===t.constructor.name)?\"array\":\"object\"==r&&(String.prototype.isPrototypeOf(t)||t.constructor&&\"String\"===t.constructor.name)?\"string\":r)===o;var t,r},c=n(\"boolean\"),f=n(\"function\"),l=n(\"number\"),a=u(!(o=\"string\")),m=u(!0),d={fold:function(n,t){return n()},isSome:a,isNone:m,getOr:t,getOrThunk:s,getOrDie:function(n){throw new Error(n||\"error: getOrDie called on none.\")},getOrNull:u(null),getOrUndefined:u(void 0),or:t,orThunk:s,map:r,each:function(){},bind:r,exists:a,forall:m,filter:function(){return d},toArray:function(){return[]},toString:u(\"none()\")};function s(n){return n()}function g(n,t){for(var r=0,o=n.length;r<o;r++)t(n[r],r)}function h(n,t){var r=n.dom;if(1!==r.nodeType)return!1;var o=r;if(void 0!==o.matches)return o.matches(t);if(void 0!==o.msMatchesSelector)return o.msMatchesSelector(t);if(void 0!==o.webkitMatchesSelector)return o.webkitMatchesSelector(t);if(void 0!==o.mozMatchesSelector)return o.mozMatchesSelector(t);throw new Error(\"Browser lacks native selectors\")}function v(n){if(null==n)throw new Error(\"Node cannot be null or undefined\");return{dom:n}}var p=function(r){function n(){return e}function t(n){return n(r)}var o=u(r),e={fold:function(n,t){return t(r)},isSome:m,isNone:a,getOr:o,getOrThunk:o,getOrDie:o,getOrNull:o,getOrUndefined:o,or:n,orThunk:n,map:function(n){return p(n(r))},each:function(n){n(r)},bind:t,exists:t,forall:t,filter:function(n){return n(r)?e:d},toArray:function(){return[r]},toString:function(){return\"some(\"+r+\")\"}};return e},y={some:p,none:r,from:function(n){return null==n?d:p(n)}},w={fromHtml:function(n,t){var r=(t||document).createElement(\"div\");if(r.innerHTML=n,!r.hasChildNodes()||1<r.childNodes.length)throw console.error(\"HTML does not have a single root node\",n),new Error(\"HTML must have a single root node\");return v(r.childNodes[0])},fromTag:function(n,t){var r=(t||document).createElement(n);return v(r)},fromText:function(n,t){var r=(t||document).createTextNode(n);return v(r)},fromDom:v,fromPoint:function(n,t,r){return y.from(n.dom.elementFromPoint(t,r)).map(v)}};function D(t){return function(n){return n.dom.nodeType===t}}function N(n,t,r){!function(n,t,r){if(!(i(r)||c(r)||l(r)))throw console.error(\"Invalid call to Attribute.set. Key \",t,\":: Value \",r,\":: Element \",n),new Error(\"Attribute value was not simple\");n.setAttribute(t,r+\"\")}(n.dom,t,r)}function T(n,t){n.dom.removeAttribute(t)}function S(n){return w.fromDom(n.dom.host)}function b(e,u,n){return function(n){for(var t=e.dom,r=f(n)?n:a;t.parentNode;){var t=t.parentNode,o=w.fromDom(t);if(h(o,u))return y.some(o);if(r(o))break}return y.none()}(n)}function O(n){return\"rtl\"===(r=\"direction\",o=(t=n).dom,\"\"!==(e=window.getComputedStyle(o).getPropertyValue(r))||B(t)?e:H(o,r))?\"rtl\":\"ltr\";var t,r,o,e}function A(n,t){return r=function(n){return h(n,t)},function(n,t){for(var r=[],o=0,e=n.length;o<e;o++){var u=n[o];t(u,o)&&r.push(u)}return r}(function(n,t){for(var r=n.length,o=new Array(r),e=0;e<r;e++){var u=n[e];o[e]=t(u,e)}return o}(n.dom.childNodes,w.fromDom),r);var r}function C(n,u){var t=n.selection.getSelectedBlocks();0<t.length&&(g(t,function(n){var t,r=w.fromDom(n),o=k(r),e=(t=r,(o?b(t,\"ol,ul\"):y.some(t)).getOr(t));y.from(e.dom.parentNode).map(w.fromDom).filter(E).each(function(n){O(n)!==u?N(e,\"dir\",u):O(e)!==u&&T(e,\"dir\"),o&&g(A(e,\"li[dir]\"),function(n){return T(n,\"dir\"),0})})}),n.nodeChanged())}function M(t,o){return function(r){function n(n){var t=w.fromDom(n.element);r.setActive(O(t)===o)}return t.on(\"NodeChange\",n),function(){return t.off(\"NodeChange\",n)}}}\"undefined\"!=typeof window||Function(\"return this;\")();function k(n){return E(n)&&\"li\"===n.dom.nodeName.toLowerCase()}var E=D(1),L=D(3),P=D(9),R=D(11),x=f(Element.prototype.attachShadow)&&f(Node.prototype.getRootNode)?function(n){return w.fromDom(n.dom.getRootNode())}:function(n){return P(n)?n:w.fromDom(n.dom.ownerDocument)},B=function(n){var t=L(n)?n.dom.parentNode:n.dom;if(null==t||null===t.ownerDocument)return!1;var r,o,e,u,i,c=t.ownerDocument;return e=w.fromDom(t),i=x(e),(R(u=i)&&null!=u.dom.host?y.some(i):y.none()).fold(function(){return c.body.contains(t)},(r=B,o=S,function(n){return r(o(n))}))},H=function(n,t){return void 0!==n.style&&f(n.style.getPropertyValue)?n.style.getPropertyValue(t):\"\"};e.add(\"directionality\",function(n){var t,r;(t=n).addCommand(\"mceDirectionLTR\",function(){C(t,\"ltr\")}),t.addCommand(\"mceDirectionRTL\",function(){C(t,\"rtl\")}),(r=n).ui.registry.addToggleButton(\"ltr\",{tooltip:\"Left to right\",icon:\"ltr\",onAction:function(){return r.execCommand(\"mceDirectionLTR\")},onSetup:M(r,\"ltr\")}),r.ui.registry.addToggleButton(\"rtl\",{tooltip:\"Right to left\",icon:\"rtl\",onAction:function(){return r.execCommand(\"mceDirectionRTL\")},onSetup:M(r,\"rtl\")})})}();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/directionality/plugin.min.js";
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
!function(){\"use strict\";function n(t){return function(n){return typeof n===t}}function u(n){return function(){return n}}function t(n){return n}function r(){return d}var o,e=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),i=function(n){return r=typeof(t=n),(null===t?\"null\":\"object\"==r&&(Array.prototype.isPrototypeOf(t)||t.constructor&&\"Array\"===t.constructor.name)?\"array\":\"object\"==r&&(String.prototype.isPrototypeOf(t)||t.constructor&&\"String\"===t.constructor.name)?\"string\":r)===o;var t,r},c=n(\"boolean\"),f=n(\"function\"),l=n(\"number\"),a=u(!(o=\"string\")),m=u(!0),d={fold:function(n,t){return n()},isSome:a,isNone:m,getOr:t,getOrThunk:s,getOrDie:function(n){throw new Error(n||\"error: getOrDie called on none.\")},getOrNull:u(null),getOrUndefined:u(void 0),or:t,orThunk:s,map:r,each:function(){},bind:r,exists:a,forall:m,filter:function(){return d},toArray:function(){return[]},toString:u(\"none()\")};function s(n){return n()}function g(n,t){for(var r=0,o=n.length;r<o;r++)t(n[r],r)}function h(n,t){var r=n.dom;if(1!==r.nodeType)return!1;var o=r;if(void 0!==o.matches)return o.matches(t);if(void 0!==o.msMatchesSelector)return o.msMatchesSelector(t);if(void 0!==o.webkitMatchesSelector)return o.webkitMatchesSelector(t);if(void 0!==o.mozMatchesSelector)return o.mozMatchesSelector(t);throw new Error(\"Browser lacks native selectors\")}function v(n){if(null==n)throw new Error(\"Node cannot be null or undefined\");return{dom:n}}var p=function(r){function n(){return e}function t(n){return n(r)}var o=u(r),e={fold:function(n,t){return t(r)},isSome:m,isNone:a,getOr:o,getOrThunk:o,getOrDie:o,getOrNull:o,getOrUndefined:o,or:n,orThunk:n,map:function(n){return p(n(r))},each:function(n){n(r)},bind:t,exists:t,forall:t,filter:function(n){return n(r)?e:d},toArray:function(){return[r]},toString:function(){return\"some(\"+r+\")\"}};return e},y={some:p,none:r,from:function(n){return null==n?d:p(n)}},w={fromHtml:function(n,t){var r=(t||document).createElement(\"div\");if(r.innerHTML=n,!r.hasChildNodes()||1<r.childNodes.length)throw console.error(\"HTML does not have a single root node\",n),new Error(\"HTML must have a single root node\");return v(r.childNodes[0])},fromTag:function(n,t){var r=(t||document).createElement(n);return v(r)},fromText:function(n,t){var r=(t||document).createTextNode(n);return v(r)},fromDom:v,fromPoint:function(n,t,r){return y.from(n.dom.elementFromPoint(t,r)).map(v)}};function D(t){return function(n){return n.dom.nodeType===t}}function N(n,t,r){!function(n,t,r){if(!(i(r)||c(r)||l(r)))throw console.error(\"Invalid call to Attribute.set. Key \",t,\":: Value \",r,\":: Element \",n),new Error(\"Attribute value was not simple\");n.setAttribute(t,r+\"\")}(n.dom,t,r)}function T(n,t){n.dom.removeAttribute(t)}function S(n){return w.fromDom(n.dom.host)}function b(e,u,n){return function(n){for(var t=e.dom,r=f(n)?n:a;t.parentNode;){var t=t.parentNode,o=w.fromDom(t);if(h(o,u))return y.some(o);if(r(o))break}return y.none()}(n)}function O(n){return\"rtl\"===(r=\"direction\",o=(t=n).dom,\"\"!==(e=window.getComputedStyle(o).getPropertyValue(r))||B(t)?e:H(o,r))?\"rtl\":\"ltr\";var t,r,o,e}function A(n,t){return r=function(n){return h(n,t)},function(n,t){for(var r=[],o=0,e=n.length;o<e;o++){var u=n[o];t(u,o)&&r.push(u)}return r}(function(n,t){for(var r=n.length,o=new Array(r),e=0;e<r;e++){var u=n[e];o[e]=t(u,e)}return o}(n.dom.childNodes,w.fromDom),r);var r}function C(n,u){var t=n.selection.getSelectedBlocks();0<t.length&&(g(t,function(n){var t,r=w.fromDom(n),o=k(r),e=(t=r,(o?b(t,\"ol,ul\"):y.some(t)).getOr(t));y.from(e.dom.parentNode).map(w.fromDom).filter(E).each(function(n){O(n)!==u?N(e,\"dir\",u):O(e)!==u&&T(e,\"dir\"),o&&g(A(e,\"li[dir]\"),function(n){return T(n,\"dir\"),0})})}),n.nodeChanged())}function M(t,o){return function(r){function n(n){var t=w.fromDom(n.element);r.setActive(O(t)===o)}return t.on(\"NodeChange\",n),function(){return t.off(\"NodeChange\",n)}}}\"undefined\"!=typeof window||Function(\"return this;\")();function k(n){return E(n)&&\"li\"===n.dom.nodeName.toLowerCase()}var E=D(1),L=D(3),P=D(9),R=D(11),x=f(Element.prototype.attachShadow)&&f(Node.prototype.getRootNode)?function(n){return w.fromDom(n.dom.getRootNode())}:function(n){return P(n)?n:w.fromDom(n.dom.ownerDocument)},B=function(n){var t=L(n)?n.dom.parentNode:n.dom;if(null==t||null===t.ownerDocument)return!1;var r,o,e,u,i,c=t.ownerDocument;return e=w.fromDom(t),i=x(e),(R(u=i)&&null!=u.dom.host?y.some(i):y.none()).fold(function(){return c.body.contains(t)},(r=B,o=S,function(n){return r(o(n))}))},H=function(n,t){return void 0!==n.style&&f(n.style.getPropertyValue)?n.style.getPropertyValue(t):\"\"};e.add(\"directionality\",function(n){var t,r;(t=n).addCommand(\"mceDirectionLTR\",function(){C(t,\"ltr\")}),t.addCommand(\"mceDirectionRTL\",function(){C(t,\"rtl\")}),(r=n).ui.registry.addToggleButton(\"ltr\",{tooltip:\"Left to right\",icon:\"ltr\",onAction:function(){return r.execCommand(\"mceDirectionLTR\")},onSetup:M(r,\"ltr\")}),r.ui.registry.addToggleButton(\"rtl\",{tooltip:\"Right to left\",icon:\"rtl\",onAction:function(){return r.execCommand(\"mceDirectionRTL\")},onSetup:M(r,\"rtl\")})})}();", "Back/assets/vendor/tinymce/plugins/directionality/plugin.min.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\directionality\\plugin.min.js");
    }
}
