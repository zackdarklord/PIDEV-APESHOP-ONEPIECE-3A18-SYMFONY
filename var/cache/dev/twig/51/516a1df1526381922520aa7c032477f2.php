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

/* Back/assets/vendor/tinymce/plugins/quickbars/plugin.min.js */
class __TwigTemplate_318541bd6c5be56f4ca556d206bafebd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/quickbars/plugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/quickbars/plugin.min.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
!function(){\"use strict\";function n(a){a.ui.registry.addButton(\"quickimage\",{icon:\"image\",tooltip:\"Insert image\",onAction:function(){var i=a;new s(function(n){var r=document.createElement(\"input\");r.type=\"file\",r.accept=\"image/*\",r.style.position=\"fixed\",r.style.left=\"0\",r.style.top=\"0\",r.style.opacity=\"0.001\",document.body.appendChild(r),r.addEventListener(\"change\",function(t){n(Array.prototype.slice.call(t.target.files))});var o=function(t){function e(){n([]),r.parentNode.removeChild(r)}d.os.isAndroid()&&\"remove\"!==t.type?f.setEditorTimeout(i,e,0):e(),i.off(\"focusin remove\",o)};i.on(\"focusin remove\",o),r.click()}).then(function(t){var c,n;0<t.length&&(c=t[0],n=c,new s(function(t){var e=new FileReader;e.onloadend=function(){t(e.result.split(\",\")[1])},e.readAsDataURL(n)}).then(function(t){var e,n,r,o,i,u;n=t,r=c,i=(e=a).editorUpload.blobCache,u=i.create((o=(new Date).getTime(),\"mceu_\"+Math.floor(1e9*Math.random())+ ++l+String(o)),r,n),i.add(u),e.insertContent(e.dom.createHTML(\"img\",{src:u.blobUri()}))}))})}}),a.ui.registry.addButton(\"quicktable\",{icon:\"table\",tooltip:\"Insert table\",onAction:function(){var t,n;(t=a).plugins.table?t.plugins.table.insertTable(2,2):(n=t).undoManager.transact(function(){n.insertContent(function(){var t='<table data-mce-id=\"mce\" style=\"width: 100%\">';t+=\"<tbody>\";for(var e=0;e<2;e++){t+=\"<tr>\";for(var n=0;n<2;n++)t+=\"<td><br></td>\";t+=\"</tr>\"}return(t+=\"</tbody>\")+\"</table>\"}());var t=n.dom.select(\"*[data-mce-id]\")[0];t.removeAttribute(\"data-mce-id\");var e=n.dom.select(\"td,th\",t);n.selection.setCursorLocation(e[0],0)})}})}function t(r){return function(t){return n=typeof(e=t),(null===e?\"null\":\"object\"==n&&(Array.prototype.isPrototypeOf(e)||e.constructor&&\"Array\"===e.constructor.name)?\"array\":\"object\"==n&&(String.prototype.isPrototypeOf(e)||e.constructor&&\"String\"===e.constructor.name)?\"string\":n)===r;var e,n}}function e(e){return function(t){return typeof t===e}}function i(t){return function(){return t}}function r(t){return t}function o(){return y}var u,c=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),l=0,s=tinymce.util.Tools.resolve(\"tinymce.util.Promise\"),d=tinymce.util.Tools.resolve(\"tinymce.Env\"),f=tinymce.util.Tools.resolve(\"tinymce.util.Delay\"),a=t(\"string\"),m=t(\"object\"),g=t(\"array\"),v=e(\"boolean\"),h=e(\"function\"),p=i(!1),b=i(!(u=void 0)),y={fold:function(t,e){return t()},isSome:p,isNone:b,getOr:r,getOrThunk:k,getOrDie:function(t){throw new Error(t||\"error: getOrDie called on none.\")},getOrNull:i(null),getOrUndefined:i(void 0),or:r,orThunk:k,map:o,each:function(){},bind:o,exists:p,forall:b,filter:function(){return y},toArray:function(){return[]},toString:i(\"none()\")};function k(t){return t()}var w=function(n){function t(){return o}function e(t){return t(n)}var r=i(n),o={fold:function(t,e){return e(n)},isSome:b,isNone:p,getOr:r,getOrThunk:r,getOrDie:r,getOrNull:r,getOrUndefined:r,or:t,orThunk:t,map:function(t){return w(t(n))},each:function(t){t(n)},bind:e,exists:e,forall:e,filter:function(t){return t(n)?o:y},toArray:function(){return[n]},toString:function(){return\"some(\"+n+\")\"}};return o},T={some:w,none:o,from:function(t){return null==t?y:w(t)}};function E(t,e,n,r,o){return t(n,r)?T.some(n):h(o)&&o(n)?T.none():e(n,r,o)}function N(t,e){var n=t.dom;if(1!==n.nodeType)return!1;var r=n;if(void 0!==r.matches)return r.matches(e);if(void 0!==r.msMatchesSelector)return r.msMatchesSelector(e);if(void 0!==r.webkitMatchesSelector)return r.webkitMatchesSelector(e);if(void 0!==r.mozMatchesSelector)return r.mozMatchesSelector(e);throw new Error(\"Browser lacks native selectors\")}function M(t){if(null==t)throw new Error(\"Node cannot be null or undefined\");return{dom:t}}var S={fromHtml:function(t,e){var n=(e||document).createElement(\"div\");if(n.innerHTML=t,!n.hasChildNodes()||1<n.childNodes.length)throw console.error(\"HTML does not have a single root node\",t),new Error(\"HTML must have a single root node\");return M(n.childNodes[0])},fromTag:function(t,e){var n=(e||document).createElement(t);return M(n)},fromText:function(t,e){var n=(e||document).createTextNode(t);return M(n)},fromDom:M,fromPoint:function(t,e,n){return T.from(t.dom.elementFromPoint(e,n)).map(M)}};function C(t,e,n){for(var r=t.dom,o=h(n)?n:p;r.parentNode;){var r=r.parentNode,i=S.fromDom(r);if(e(i))return T.some(i);if(o(i))break}return T.none()}function O(t,e,n){return C(t,function(t){return N(t,e)},n)}\"undefined\"!=typeof window||Function(\"return this;\")();var q,x=(q=a,function(t,e,n){return function(){if(!q(n))throw new Error(\"Default value doesn't match requested type.\")}(),function(t,e){if(g(t)||m(t))throw new Error(\"expected a string but found: \"+t);return u===t?e:v(t)?!1===t?\"\":e:t}(t.getParam(e,n),n)});c.add(\"quickbars\",function(t){var o,e;n(t),0<(e=x(o=t,\"quickbars_insert_toolbar\",\"quickimage quicktable\")).trim().length&&o.ui.registry.addContextToolbar(\"quickblock\",{predicate:function(t){function e(t){return t.dom===o.getBody()}var n=S.fromDom(t),r=o.schema.getTextBlockElements();return E(N,O,n,\"table\",e).fold(function(){return E(function(t,e){return e(t)},C,n,function(t){return t.dom.nodeName.toLowerCase()in r&&o.dom.isEmpty(t.dom)},e).isSome()},p)},items:e,position:\"line\",scope:\"editor\"}),function(e){function n(t){return\"IMG\"===t.nodeName||\"FIGURE\"===t.nodeName&&/image/i.test(t.className)}var t=x(e,\"quickbars_image_toolbar\",\"alignleft aligncenter alignright\");0<t.trim().length&&e.ui.registry.addContextToolbar(\"imageselection\",{predicate:n,items:t,position:\"node\"});var r=x(e,\"quickbars_selection_toolbar\",\"bold italic | quicklink h2 h3 blockquote\");0<r.trim().length&&e.ui.registry.addContextToolbar(\"textselection\",{predicate:function(t){return!n(t)&&!e.selection.isCollapsed()&&\"false\"!==e.dom.getContentEditableParent(t)},items:r,position:\"selection\",scope:\"editor\"})}(t)})}();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/quickbars/plugin.min.js";
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
!function(){\"use strict\";function n(a){a.ui.registry.addButton(\"quickimage\",{icon:\"image\",tooltip:\"Insert image\",onAction:function(){var i=a;new s(function(n){var r=document.createElement(\"input\");r.type=\"file\",r.accept=\"image/*\",r.style.position=\"fixed\",r.style.left=\"0\",r.style.top=\"0\",r.style.opacity=\"0.001\",document.body.appendChild(r),r.addEventListener(\"change\",function(t){n(Array.prototype.slice.call(t.target.files))});var o=function(t){function e(){n([]),r.parentNode.removeChild(r)}d.os.isAndroid()&&\"remove\"!==t.type?f.setEditorTimeout(i,e,0):e(),i.off(\"focusin remove\",o)};i.on(\"focusin remove\",o),r.click()}).then(function(t){var c,n;0<t.length&&(c=t[0],n=c,new s(function(t){var e=new FileReader;e.onloadend=function(){t(e.result.split(\",\")[1])},e.readAsDataURL(n)}).then(function(t){var e,n,r,o,i,u;n=t,r=c,i=(e=a).editorUpload.blobCache,u=i.create((o=(new Date).getTime(),\"mceu_\"+Math.floor(1e9*Math.random())+ ++l+String(o)),r,n),i.add(u),e.insertContent(e.dom.createHTML(\"img\",{src:u.blobUri()}))}))})}}),a.ui.registry.addButton(\"quicktable\",{icon:\"table\",tooltip:\"Insert table\",onAction:function(){var t,n;(t=a).plugins.table?t.plugins.table.insertTable(2,2):(n=t).undoManager.transact(function(){n.insertContent(function(){var t='<table data-mce-id=\"mce\" style=\"width: 100%\">';t+=\"<tbody>\";for(var e=0;e<2;e++){t+=\"<tr>\";for(var n=0;n<2;n++)t+=\"<td><br></td>\";t+=\"</tr>\"}return(t+=\"</tbody>\")+\"</table>\"}());var t=n.dom.select(\"*[data-mce-id]\")[0];t.removeAttribute(\"data-mce-id\");var e=n.dom.select(\"td,th\",t);n.selection.setCursorLocation(e[0],0)})}})}function t(r){return function(t){return n=typeof(e=t),(null===e?\"null\":\"object\"==n&&(Array.prototype.isPrototypeOf(e)||e.constructor&&\"Array\"===e.constructor.name)?\"array\":\"object\"==n&&(String.prototype.isPrototypeOf(e)||e.constructor&&\"String\"===e.constructor.name)?\"string\":n)===r;var e,n}}function e(e){return function(t){return typeof t===e}}function i(t){return function(){return t}}function r(t){return t}function o(){return y}var u,c=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),l=0,s=tinymce.util.Tools.resolve(\"tinymce.util.Promise\"),d=tinymce.util.Tools.resolve(\"tinymce.Env\"),f=tinymce.util.Tools.resolve(\"tinymce.util.Delay\"),a=t(\"string\"),m=t(\"object\"),g=t(\"array\"),v=e(\"boolean\"),h=e(\"function\"),p=i(!1),b=i(!(u=void 0)),y={fold:function(t,e){return t()},isSome:p,isNone:b,getOr:r,getOrThunk:k,getOrDie:function(t){throw new Error(t||\"error: getOrDie called on none.\")},getOrNull:i(null),getOrUndefined:i(void 0),or:r,orThunk:k,map:o,each:function(){},bind:o,exists:p,forall:b,filter:function(){return y},toArray:function(){return[]},toString:i(\"none()\")};function k(t){return t()}var w=function(n){function t(){return o}function e(t){return t(n)}var r=i(n),o={fold:function(t,e){return e(n)},isSome:b,isNone:p,getOr:r,getOrThunk:r,getOrDie:r,getOrNull:r,getOrUndefined:r,or:t,orThunk:t,map:function(t){return w(t(n))},each:function(t){t(n)},bind:e,exists:e,forall:e,filter:function(t){return t(n)?o:y},toArray:function(){return[n]},toString:function(){return\"some(\"+n+\")\"}};return o},T={some:w,none:o,from:function(t){return null==t?y:w(t)}};function E(t,e,n,r,o){return t(n,r)?T.some(n):h(o)&&o(n)?T.none():e(n,r,o)}function N(t,e){var n=t.dom;if(1!==n.nodeType)return!1;var r=n;if(void 0!==r.matches)return r.matches(e);if(void 0!==r.msMatchesSelector)return r.msMatchesSelector(e);if(void 0!==r.webkitMatchesSelector)return r.webkitMatchesSelector(e);if(void 0!==r.mozMatchesSelector)return r.mozMatchesSelector(e);throw new Error(\"Browser lacks native selectors\")}function M(t){if(null==t)throw new Error(\"Node cannot be null or undefined\");return{dom:t}}var S={fromHtml:function(t,e){var n=(e||document).createElement(\"div\");if(n.innerHTML=t,!n.hasChildNodes()||1<n.childNodes.length)throw console.error(\"HTML does not have a single root node\",t),new Error(\"HTML must have a single root node\");return M(n.childNodes[0])},fromTag:function(t,e){var n=(e||document).createElement(t);return M(n)},fromText:function(t,e){var n=(e||document).createTextNode(t);return M(n)},fromDom:M,fromPoint:function(t,e,n){return T.from(t.dom.elementFromPoint(e,n)).map(M)}};function C(t,e,n){for(var r=t.dom,o=h(n)?n:p;r.parentNode;){var r=r.parentNode,i=S.fromDom(r);if(e(i))return T.some(i);if(o(i))break}return T.none()}function O(t,e,n){return C(t,function(t){return N(t,e)},n)}\"undefined\"!=typeof window||Function(\"return this;\")();var q,x=(q=a,function(t,e,n){return function(){if(!q(n))throw new Error(\"Default value doesn't match requested type.\")}(),function(t,e){if(g(t)||m(t))throw new Error(\"expected a string but found: \"+t);return u===t?e:v(t)?!1===t?\"\":e:t}(t.getParam(e,n),n)});c.add(\"quickbars\",function(t){var o,e;n(t),0<(e=x(o=t,\"quickbars_insert_toolbar\",\"quickimage quicktable\")).trim().length&&o.ui.registry.addContextToolbar(\"quickblock\",{predicate:function(t){function e(t){return t.dom===o.getBody()}var n=S.fromDom(t),r=o.schema.getTextBlockElements();return E(N,O,n,\"table\",e).fold(function(){return E(function(t,e){return e(t)},C,n,function(t){return t.dom.nodeName.toLowerCase()in r&&o.dom.isEmpty(t.dom)},e).isSome()},p)},items:e,position:\"line\",scope:\"editor\"}),function(e){function n(t){return\"IMG\"===t.nodeName||\"FIGURE\"===t.nodeName&&/image/i.test(t.className)}var t=x(e,\"quickbars_image_toolbar\",\"alignleft aligncenter alignright\");0<t.trim().length&&e.ui.registry.addContextToolbar(\"imageselection\",{predicate:n,items:t,position:\"node\"});var r=x(e,\"quickbars_selection_toolbar\",\"bold italic | quicklink h2 h3 blockquote\");0<r.trim().length&&e.ui.registry.addContextToolbar(\"textselection\",{predicate:function(t){return!n(t)&&!e.selection.isCollapsed()&&\"false\"!==e.dom.getContentEditableParent(t)},items:r,position:\"selection\",scope:\"editor\"})}(t)})}();", "Back/assets/vendor/tinymce/plugins/quickbars/plugin.min.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\quickbars\\plugin.min.js");
    }
}
