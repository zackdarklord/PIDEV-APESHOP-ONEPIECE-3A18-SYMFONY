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

/* Back/assets/vendor/tinymce/plugins/searchreplace/plugin.min.js */
class __TwigTemplate_cf0b612956995178a21f786b8dd968fd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/searchreplace/plugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/searchreplace/plugin.min.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
!function(){\"use strict\";function g(e){var t=e;return{get:function(){return t},set:function(e){t=e}}}function e(r){return function(e){return n=typeof(t=e),(null===t?\"null\":\"object\"==n&&(Array.prototype.isPrototypeOf(t)||t.constructor&&\"Array\"===t.constructor.name)?\"array\":\"object\"==n&&(String.prototype.isPrototypeOf(t)||t.constructor&&\"String\"===t.constructor.name)?\"string\":n)===r;var t,n}}function t(t){return function(e){return typeof e===t}}function p(){}function i(e){return function(){return e}}function n(e){return e}function r(){return m}var o=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),v=function(){return(v=Object.assign||function(e){for(var t,n=1,r=arguments.length;n<r;n++)for(var o in t=arguments[n])Object.prototype.hasOwnProperty.call(t,o)&&(e[o]=t[o]);return e}).apply(this,arguments)},a=e(\"string\"),c=e(\"array\"),u=t(\"boolean\"),l=t(\"number\"),s=i(!1),f=i(!0),d=i(\"[!-#%-*,-\\\\/:;?@\\\\[-\\\\]_{}\\xa1\\xab\\xb7\\xbb\\xbf;\\xb7\\u055a-\\u055f\\u0589\\u058a\\u05be\\u05c0\\u05c3\\u05c6\\u05f3\\u05f4\\u0609\\u060a\\u060c\\u060d\\u061b\\u061e\\u061f\\u066a-\\u066d\\u06d4\\u0700-\\u070d\\u07f7-\\u07f9\\u0830-\\u083e\\u085e\\u0964\\u0965\\u0970\\u0df4\\u0e4f\\u0e5a\\u0e5b\\u0f04-\\u0f12\\u0f3a-\\u0f3d\\u0f85\\u0fd0-\\u0fd4\\u0fd9\\u0fda\\u104a-\\u104f\\u10fb\\u1361-\\u1368\\u1400\\u166d\\u166e\\u169b\\u169c\\u16eb-\\u16ed\\u1735\\u1736\\u17d4-\\u17d6\\u17d8-\\u17da\\u1800-\\u180a\\u1944\\u1945\\u1a1e\\u1a1f\\u1aa0-\\u1aa6\\u1aa8-\\u1aad\\u1b5a-\\u1b60\\u1bfc-\\u1bff\\u1c3b-\\u1c3f\\u1c7e\\u1c7f\\u1cd3\\u2010-\\u2027\\u2030-\\u2043\\u2045-\\u2051\\u2053-\\u205e\\u207d\\u207e\\u208d\\u208e\\u3008\\u3009\\u2768-\\u2775\\u27c5\\u27c6\\u27e6-\\u27ef\\u2983-\\u2998\\u29d8-\\u29db\\u29fc\\u29fd\\u2cf9-\\u2cfc\\u2cfe\\u2cff\\u2d70\\u2e00-\\u2e2e\\u2e30\\u2e31\\u3001-\\u3003\\u3008-\\u3011\\u3014-\\u301f\\u3030\\u303d\\u30a0\\u30fb\\ua4fe\\ua4ff\\ua60d-\\ua60f\\ua673\\ua67e\\ua6f2-\\ua6f7\\ua874-\\ua877\\ua8ce\\ua8cf\\ua8f8-\\ua8fa\\ua92e\\ua92f\\ua95f\\ua9c1-\\ua9cd\\ua9de\\ua9df\\uaa5c-\\uaa5f\\uaade\\uaadf\\uabeb\\ufd3e\\ufd3f\\ufe10-\\ufe19\\ufe30-\\ufe52\\ufe54-\\ufe61\\ufe63\\ufe68\\ufe6a\\ufe6b\\uff01-\\uff03\\uff05-\\uff0a\\uff0c-\\uff0f\\uff1a\\uff1b\\uff1f\\uff20\\uff3b-\\uff3d\\uff3f\\uff5b\\uff5d\\uff5f-\\uff65]\"),m={fold:function(e,t){return e()},isSome:s,isNone:f,getOr:n,getOrThunk:h,getOrDie:function(e){throw new Error(e||\"error: getOrDie called on none.\")},getOrNull:i(null),getOrUndefined:i(void 0),or:n,orThunk:h,map:r,each:p,bind:r,exists:s,forall:f,filter:function(){return m},toArray:function(){return[]},toString:i(\"none()\")};function h(e){return e()}function y(e,t){for(var n=e.length,r=new Array(n),o=0;o<n;o++){var i=e[o];r[o]=t(i,o)}return r}function x(e,t){for(var n=0,r=e.length;n<r;n++)t(e[n],n)}function b(e,t){for(var n=e.length-1;0<=n;n--)t(e[n],n)}function w(e,t){return function(e){for(var t=[],n=0,r=e.length;n<r;++n){if(!c(e[n]))throw new Error(\"Arr.flatten item \"+n+\" was not an array, input: \"+e);A.apply(t,e[n])}return t}(y(e,t))}function O(e,t){return D.call(e,t)}var C=function(n){function e(){return o}function t(e){return e(n)}var r=i(n),o={fold:function(e,t){return t(n)},isSome:f,isNone:s,getOr:r,getOrThunk:r,getOrDie:r,getOrNull:r,getOrUndefined:r,or:e,orThunk:e,map:function(e){return C(e(n))},each:function(e){e(n)},bind:t,exists:t,forall:t,filter:function(e){return e(n)?o:m},toArray:function(){return[n]},toString:function(){return\"some(\"+n+\")\"}};return o},T={some:C,none:r,from:function(e){return null==e?m:C(e)}},E=d,N=tinymce.util.Tools.resolve(\"tinymce.Env\"),k=tinymce.util.Tools.resolve(\"tinymce.util.Tools\"),S=Array.prototype.slice,A=Array.prototype.push,D=Object.hasOwnProperty;function M(e,t,n){!function(e,t,n){if(!(a(n)||u(n)||l(n)))throw console.error(\"Invalid call to Attribute.set. Key \",t,\":: Value \",n,\":: Element \",e),new Error(\"Attribute value was not simple\");e.setAttribute(t,n+\"\")}(e.dom,t,n)}function B(e,t){return{element:e,offset:t}}function F(e,t){var n,r;n=e,r=t,T.from(n.dom.parentNode).map(fe.fromDom).each(function(e){e.dom.insertBefore(r.dom,n.dom)}),t.dom.appendChild(e.dom)}function I(e){return de.get(e)}function P(e,t){return e.isBlock(t)||O(e.schema.getShortEndedElements(),t.nodeName)}function R(e,t){return\"false\"===e.getContentEditable(t)}function W(e,t){return!e.isBlock(t)&&O(e.schema.getWhiteSpaceElements(),t.nodeName)}function j(){return{sOffset:0,fOffset:0,elements:[]}}function V(e,t){return n=fe.fromDom(e),r=t,0<(o=y(n.dom.childNodes,fe.fromDom)).length&&r<o.length?B(o[r],0):B(n,r);var n,r,o}function H(e,t,n,r,o,i){for(var a=(i=void 0===i||i)?t(!1):n;a;){var c=R(e,a);if(c||W(e,a)){if(c?r.cef(a):r.boundary(a))break;a=t(!0)}else{if(P(e,a)){if(r.boundary(a))break}else 3===a.nodeType&&r.text(a);if(a===o)break;a=t(!1)}}}function L(e,t,n,r,o){var i,a,c,u,l,s;P(i=e,a=n)||R(i,a)||W(i,a)||\"true\"===(c=i).getContentEditable(u=a)&&\"false\"===c.getContentEditableParent(u.parentNode)||(l=e.getParent(r,e.isBlock),s=new me(n,l),H(e,(o?s.next:s.prev).bind(s),n,{boundary:f,cef:f,text:function(e){o?t.fOffset+=e.length:t.sOffset+=e.length,t.elements.push(fe.fromDom(e))}}))}function U(e,t,n,r,o,i){void 0===i&&(i=!0);var a=new me(n,t),c=[],u=j();function l(){return 0<u.elements.length&&(c.push(u),u=j()),!1}return L(e,u,n,t,!1),H(e,a.next.bind(a),n,{boundary:l,cef:function(e){return l(),o&&c.push.apply(c,o.cef(e)),!1},text:function(e){u.elements.push(fe.fromDom(e)),o&&o.text(e,u)}},r,i),r&&L(e,u,r,t,!0),l(),c}function \$(u,e){var n=V(e.startContainer,e.startOffset),r=n.element.dom,o=V(e.endContainer,e.endOffset),i=o.element.dom;return U(u,e.commonAncestorContainer,r,i,{text:function(e,t){e===i?t.fOffset+=e.length-o.offset:e===r&&(t.sOffset+=n.offset)},cef:function(e){var t,n,r,o,i,a=w((n=fe.fromDom(e),r=\"*[contenteditable=true]\",1!==(o=i=void 0===n?document:n.dom).nodeType&&9!==o.nodeType&&11!==o.nodeType||0===o.childElementCount?[]:y(i.querySelectorAll(r),fe.fromDom)),function(e){var t=e.dom;return U(u,t,t)}),c=function(e,t){return n=e.elements[0].dom,r=t.elements[0].dom,o=Node.DOCUMENT_POSITION_PRECEDING,0!=(n.compareDocumentPosition(r)&o)?1:-1;var n,r,o};return(t=S.call(a,0)).sort(c),t}},!1)}function _(e,t){return t.collapsed?[]:\$(e,t)}function z(e,t){var n=e.createRng();return n.selectNode(t),_(e,n)}function q(c,e){return w(e,function(e){var a,n,r,t=e.elements,o=y(t,I).join(\"\"),i=function(e,t,n,r){void 0===r&&(r=e.length);var o=t.regex;o.lastIndex=n=void 0===n?0:n;for(var i,a=[];i=o.exec(e);){var c=i[t.matchIndex],u=i.index+i[0].indexOf(c),l=u+c.length;if(r<l)break;a.push({start:u,finish:l}),o.lastIndex=l}return a}(o,c,e.sOffset,o.length-e.fOffset);return a=i,function(e,t){if(0===e.length)return[];for(var n=t(e[0]),r=[],o=[],i=0,a=e.length;i<a;i++){var c=e[i],u=t(c);u!==n&&(r.push(o),o=[]),n=u,o.push(c)}return 0!==o.length&&r.push(o),r}((n=function(e,n){var t=I(n),r=e.last,o=r+t.length,i=w(a,function(e,t){return e.start<o&&e.finish>r?[{element:n,start:Math.max(r,e.start)-r,finish:Math.min(o,e.finish)-r,matchId:t}]:[]});return{results:e.results.concat(i),last:o}},r={results:[],last:0},x(t,function(e,t){r=n(r,e)}),r.results),function(e){return e.matchId})})}function G(e,i){b(e,function(e,o){b(e,function(e){var t=fe.fromDom(i.cloneNode(!1));M(t,\"data-mce-index\",o);var n,r=e.element.dom;r.length===e.finish&&0===e.start?F(e.element,t):(r.length!==e.finish&&r.splitText(e.finish),n=r.splitText(e.start),F(fe.fromDom(n),t))})})}function K(e){var t=e.getAttribute(\"data-mce-index\");return\"number\"==typeof t?\"\"+t:t}function J(e,t,n,r){var o=e.dom.create(\"span\",{\"data-mce-bogus\":1});o.className=\"mce-match-marker\";var i,a,c,u,l,s,f,d,m,h,g=e.getBody();return he(e,t,!1),r?(c=e.dom,u=n,l=e.selection,s=o,d=l.getBookmark(),m=c.select(\"td[data-mce-selected],th[data-mce-selected]\"),G(h=q(u,0<m.length?(f=c,w(m,function(e){return z(f,e)})):_(c,l.getRng())),s),l.moveToBookmark(d),h.length):(i=o,G(a=q(n,z(e.dom,g)),i),a.length)}function Q(e){var t=e.parentNode;e.firstChild&&t.insertBefore(e.firstChild,e),e.parentNode.removeChild(e)}function X(e,t){var n=[],r=k.toArray(e.getBody().getElementsByTagName(\"span\"));if(r.length)for(var o=0;o<r.length;o++){var i=K(r[o]);null!==i&&i.length&&i===t.toString()&&n.push(r[o])}return n}function Y(e,t,n){var r=t.get(),o=r.index,i=e.dom;(n=!1!==n)?o+1===r.count?o=0:o++:o-1==-1?o=r.count-1:o--,i.removeClass(X(e,r.index),\"mce-match-marker-selected\");var a=X(e,o);return a.length?(i.addClass(X(e,o),\"mce-match-marker-selected\"),e.selection.scrollIntoView(a[0]),o):-1}function Z(e,t){var n=t.parentNode;e.remove(t),e.isEmpty(n)&&e.remove(n)}function ee(e,t,n,r,o,i){var a,c,u,l=e.selection,s=(a=o,c=\"(\"+n.replace(/[\\-\\[\\]\\/\\{\\}\\(\\)\\*\\+\\?\\.\\\\\\^\\\$\\|]/g,\"\\\\\$&\").replace(/\\s/g,\"[^\\\\S\\\\r\\\\n\\\\uFEFF]\")+\")\",a?\"(?:^|\\\\s|\"+E()+\")\"+c+\"(?=\$|\\\\s|\"+E()+\")\":c),f=l.isForward(),d=J(e,t,{regex:new RegExp(s,r?\"g\":\"gi\"),matchIndex:1},i);return N.browser.isSafari()&&l.setRng(l.getRng(),f),d&&(u=Y(e,t,!0),t.set({index:u,count:d,text:n,matchCase:r,wholeWord:o,inSelection:i})),d}function te(e,t){var n=Y(e,t,!0);t.set(v(v({},t.get()),{index:n}))}function ne(e,t){var n=Y(e,t,!1);t.set(v(v({},t.get()),{index:n}))}function re(e){var t=K(e);return null!==t&&0<t.length}function oe(e,t,n,r,o){var i,a=t.get(),c=a.index,u=c;r=!1!==r;for(var l=e.getBody(),s=k.grep(k.toArray(l.getElementsByTagName(\"span\")),re),f=0;f<s.length;f++){var d=K(s[f]),m=i=parseInt(d,10);if(o||m===a.index){for(n.length?(s[f].firstChild.nodeValue=n,Q(s[f])):Z(e.dom,s[f]);s[++f];){if((m=parseInt(K(s[f]),10))!==i){f--;break}Z(e.dom,s[f])}r&&u--}else c<i&&s[f].setAttribute(\"data-mce-index\",String(i-1))}return t.set(v(v({},a),{count:o?0:a.count-1,index:u})),(r?te:ne)(e,t),!o&&0<t.get().count}function ie(i,a){var e,t,n,r=(e=p,t=g(T.none()),v(v({},n={clear:function(){o(),t.set(T.none())},isSet:function(){return t.get().isSome()},get:function(){return t.get()},set:function(e){o(),t.set(T.some(e))}}),{on:function(e){return n.get().each(e)}}));function o(){return t.get().each(e)}function c(e){(1<a.get().count?e.enable:e.disable)(\"next\"),(1<a.get().count?e.enable:e.disable)(\"prev\")}function u(e,t){x([\"replace\",\"replaceall\",\"prev\",\"next\"],t?e.disable:e.enable)}function l(e,t){N.browser.isSafari()&&N.deviceType.isTouch()&&(\"find\"===t||\"replace\"===t||\"replaceall\"===t)&&e.focus(t)}function s(e){he(i,a,!1),u(e,!0),c(e)}function f(e){var t,n,r=e.getData(),o=a.get();r.findtext.length?(o.text===r.findtext&&o.matchCase===r.matchcase&&o.wholeWord===r.wholewords?te(i,a):((t=ee(i,a,r.findtext,r.matchcase,r.wholewords,r.inselection))<=0&&(n=e,i.windowManager.alert(\"Could not find the specified string.\",function(){n.focus(\"findtext\")})),u(e,0===t)),c(e)):s(e)}i.undoManager.add();var d=k.trim(i.selection.getContent({format:\"text\"})),m=a.get(),h={title:\"Find and Replace\",size:\"normal\",body:{type:\"panel\",items:[{type:\"bar\",items:[{type:\"input\",name:\"findtext\",placeholder:\"Find\",maximized:!0,inputMode:\"search\"},{type:\"button\",name:\"prev\",text:\"Previous\",icon:\"action-prev\",disabled:!0,borderless:!0},{type:\"button\",name:\"next\",text:\"Next\",icon:\"action-next\",disabled:!0,borderless:!0}]},{type:\"input\",name:\"replacetext\",placeholder:\"Replace with\",inputMode:\"search\"}]},buttons:[{type:\"menu\",name:\"options\",icon:\"preferences\",tooltip:\"Preferences\",align:\"start\",items:[{type:\"togglemenuitem\",name:\"matchcase\",text:\"Match case\"},{type:\"togglemenuitem\",name:\"wholewords\",text:\"Find whole words only\"},{type:\"togglemenuitem\",name:\"inselection\",text:\"Find in selection\"}]},{type:\"custom\",name:\"find\",text:\"Find\",primary:!0},{type:\"custom\",name:\"replace\",text:\"Replace\",disabled:!0},{type:\"custom\",name:\"replaceall\",text:\"Replace all\",disabled:!0}],initialData:{findtext:d,replacetext:\"\",wholewords:m.wholeWord,matchcase:m.matchCase,inselection:m.inSelection},onChange:function(e,t){\"findtext\"===t.name&&0<a.get().count&&s(e)},onAction:function(e,t){var n,r,o=e.getData();switch(t.name){case\"find\":f(e);break;case\"replace\":(oe(i,a,o.replacetext)?c:s)(e);break;case\"replaceall\":oe(i,a,o.replacetext,!0,!0),s(e);break;case\"prev\":ne(i,a),c(e);break;case\"next\":te(i,a),c(e);break;case\"matchcase\":case\"wholewords\":case\"inselection\":n=e.getData(),r=a.get(),a.set(v(v({},r),{matchCase:n.matchcase,wholeWord:n.wholewords,inSelection:n.inselection})),s(e)}l(e,t.name)},onSubmit:function(e){f(e),l(e,\"find\")},onClose:function(){i.focus(),he(i,a),i.undoManager.add()}};r.set(i.windowManager.open(h,{inline:\"toolbar\"}))}function ae(e,t){return function(){ie(e,t)}}\"undefined\"!=typeof window||Function(\"return this;\")();function ce(e){return 3===e.dom.nodeType}function ue(e){if(null==e)throw new Error(\"Node cannot be null or undefined\");return{dom:e}}var le,se,fe={fromHtml:function(e,t){var n=(t||document).createElement(\"div\");if(n.innerHTML=e,!n.hasChildNodes()||1<n.childNodes.length)throw console.error(\"HTML does not have a single root node\",e),new Error(\"HTML must have a single root node\");return ue(n.childNodes[0])},fromTag:function(e,t){var n=(t||document).createElement(e);return ue(n)},fromText:function(e,t){var n=(t||document).createTextNode(e);return ue(n)},fromDom:ue,fromPoint:function(e,t,n){return T.from(e.dom.elementFromPoint(t,n)).map(ue)}},de=(le=ce,{get:function(e){if(!le(e))throw new Error(\"Can only get text value of a text node\");return se(e).getOr(\"\")},getOption:se=function(e){return le(e)?T.from(e.dom.nodeValue):T.none()},set:function(e,t){if(!le(e))throw new Error(\"Can only set raw text value of a text node\");e.dom.nodeValue=t}}),me=tinymce.util.Tools.resolve(\"tinymce.dom.TreeWalker\"),he=function(e,t,n){for(var r,o,i=t.get(),a=k.toArray(e.getBody().getElementsByTagName(\"span\")),c=0;c<a.length;c++){var u=K(a[c]);null!==u&&u.length&&(u===i.index.toString()&&(r=r||a[c].firstChild,o=a[c].firstChild),Q(a[c]))}if(t.set(v(v({},i),{index:-1,count:0,text:\"\"})),r&&o){var l=e.dom.createRng();return l.setStart(r,0),l.setEnd(o,o.data.length),!1!==n&&e.selection.setRng(l),l}};o.add(\"searchreplace\",function(e){var t,n,r,o,i,a=g({index:-1,count:0,text:\"\",matchCase:!1,wholeWord:!1,inSelection:!1}),c=a;return(t=e).addCommand(\"SearchReplace\",function(){ie(t,c)}),(n=e).ui.registry.addMenuItem(\"searchreplace\",{text:\"Find and replace...\",shortcut:\"Meta+F\",onAction:ae(n,r=a),icon:\"search\"}),n.ui.registry.addButton(\"searchreplace\",{tooltip:\"Find and replace\",onAction:ae(n,r),icon:\"search\"}),n.shortcuts.add(\"Meta+F\",\"\",ae(n,r)),o=e,i=a,{done:function(e){return he(o,i,e)},find:function(e,t,n,r){return ee(o,i,e,t,n,r=void 0!==r&&r)},next:function(){return te(o,i)},prev:function(){return ne(o,i)},replace:function(e,t,n){return oe(o,i,e,t,n)}}})}();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/searchreplace/plugin.min.js";
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
!function(){\"use strict\";function g(e){var t=e;return{get:function(){return t},set:function(e){t=e}}}function e(r){return function(e){return n=typeof(t=e),(null===t?\"null\":\"object\"==n&&(Array.prototype.isPrototypeOf(t)||t.constructor&&\"Array\"===t.constructor.name)?\"array\":\"object\"==n&&(String.prototype.isPrototypeOf(t)||t.constructor&&\"String\"===t.constructor.name)?\"string\":n)===r;var t,n}}function t(t){return function(e){return typeof e===t}}function p(){}function i(e){return function(){return e}}function n(e){return e}function r(){return m}var o=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),v=function(){return(v=Object.assign||function(e){for(var t,n=1,r=arguments.length;n<r;n++)for(var o in t=arguments[n])Object.prototype.hasOwnProperty.call(t,o)&&(e[o]=t[o]);return e}).apply(this,arguments)},a=e(\"string\"),c=e(\"array\"),u=t(\"boolean\"),l=t(\"number\"),s=i(!1),f=i(!0),d=i(\"[!-#%-*,-\\\\/:;?@\\\\[-\\\\]_{}\\xa1\\xab\\xb7\\xbb\\xbf;\\xb7\\u055a-\\u055f\\u0589\\u058a\\u05be\\u05c0\\u05c3\\u05c6\\u05f3\\u05f4\\u0609\\u060a\\u060c\\u060d\\u061b\\u061e\\u061f\\u066a-\\u066d\\u06d4\\u0700-\\u070d\\u07f7-\\u07f9\\u0830-\\u083e\\u085e\\u0964\\u0965\\u0970\\u0df4\\u0e4f\\u0e5a\\u0e5b\\u0f04-\\u0f12\\u0f3a-\\u0f3d\\u0f85\\u0fd0-\\u0fd4\\u0fd9\\u0fda\\u104a-\\u104f\\u10fb\\u1361-\\u1368\\u1400\\u166d\\u166e\\u169b\\u169c\\u16eb-\\u16ed\\u1735\\u1736\\u17d4-\\u17d6\\u17d8-\\u17da\\u1800-\\u180a\\u1944\\u1945\\u1a1e\\u1a1f\\u1aa0-\\u1aa6\\u1aa8-\\u1aad\\u1b5a-\\u1b60\\u1bfc-\\u1bff\\u1c3b-\\u1c3f\\u1c7e\\u1c7f\\u1cd3\\u2010-\\u2027\\u2030-\\u2043\\u2045-\\u2051\\u2053-\\u205e\\u207d\\u207e\\u208d\\u208e\\u3008\\u3009\\u2768-\\u2775\\u27c5\\u27c6\\u27e6-\\u27ef\\u2983-\\u2998\\u29d8-\\u29db\\u29fc\\u29fd\\u2cf9-\\u2cfc\\u2cfe\\u2cff\\u2d70\\u2e00-\\u2e2e\\u2e30\\u2e31\\u3001-\\u3003\\u3008-\\u3011\\u3014-\\u301f\\u3030\\u303d\\u30a0\\u30fb\\ua4fe\\ua4ff\\ua60d-\\ua60f\\ua673\\ua67e\\ua6f2-\\ua6f7\\ua874-\\ua877\\ua8ce\\ua8cf\\ua8f8-\\ua8fa\\ua92e\\ua92f\\ua95f\\ua9c1-\\ua9cd\\ua9de\\ua9df\\uaa5c-\\uaa5f\\uaade\\uaadf\\uabeb\\ufd3e\\ufd3f\\ufe10-\\ufe19\\ufe30-\\ufe52\\ufe54-\\ufe61\\ufe63\\ufe68\\ufe6a\\ufe6b\\uff01-\\uff03\\uff05-\\uff0a\\uff0c-\\uff0f\\uff1a\\uff1b\\uff1f\\uff20\\uff3b-\\uff3d\\uff3f\\uff5b\\uff5d\\uff5f-\\uff65]\"),m={fold:function(e,t){return e()},isSome:s,isNone:f,getOr:n,getOrThunk:h,getOrDie:function(e){throw new Error(e||\"error: getOrDie called on none.\")},getOrNull:i(null),getOrUndefined:i(void 0),or:n,orThunk:h,map:r,each:p,bind:r,exists:s,forall:f,filter:function(){return m},toArray:function(){return[]},toString:i(\"none()\")};function h(e){return e()}function y(e,t){for(var n=e.length,r=new Array(n),o=0;o<n;o++){var i=e[o];r[o]=t(i,o)}return r}function x(e,t){for(var n=0,r=e.length;n<r;n++)t(e[n],n)}function b(e,t){for(var n=e.length-1;0<=n;n--)t(e[n],n)}function w(e,t){return function(e){for(var t=[],n=0,r=e.length;n<r;++n){if(!c(e[n]))throw new Error(\"Arr.flatten item \"+n+\" was not an array, input: \"+e);A.apply(t,e[n])}return t}(y(e,t))}function O(e,t){return D.call(e,t)}var C=function(n){function e(){return o}function t(e){return e(n)}var r=i(n),o={fold:function(e,t){return t(n)},isSome:f,isNone:s,getOr:r,getOrThunk:r,getOrDie:r,getOrNull:r,getOrUndefined:r,or:e,orThunk:e,map:function(e){return C(e(n))},each:function(e){e(n)},bind:t,exists:t,forall:t,filter:function(e){return e(n)?o:m},toArray:function(){return[n]},toString:function(){return\"some(\"+n+\")\"}};return o},T={some:C,none:r,from:function(e){return null==e?m:C(e)}},E=d,N=tinymce.util.Tools.resolve(\"tinymce.Env\"),k=tinymce.util.Tools.resolve(\"tinymce.util.Tools\"),S=Array.prototype.slice,A=Array.prototype.push,D=Object.hasOwnProperty;function M(e,t,n){!function(e,t,n){if(!(a(n)||u(n)||l(n)))throw console.error(\"Invalid call to Attribute.set. Key \",t,\":: Value \",n,\":: Element \",e),new Error(\"Attribute value was not simple\");e.setAttribute(t,n+\"\")}(e.dom,t,n)}function B(e,t){return{element:e,offset:t}}function F(e,t){var n,r;n=e,r=t,T.from(n.dom.parentNode).map(fe.fromDom).each(function(e){e.dom.insertBefore(r.dom,n.dom)}),t.dom.appendChild(e.dom)}function I(e){return de.get(e)}function P(e,t){return e.isBlock(t)||O(e.schema.getShortEndedElements(),t.nodeName)}function R(e,t){return\"false\"===e.getContentEditable(t)}function W(e,t){return!e.isBlock(t)&&O(e.schema.getWhiteSpaceElements(),t.nodeName)}function j(){return{sOffset:0,fOffset:0,elements:[]}}function V(e,t){return n=fe.fromDom(e),r=t,0<(o=y(n.dom.childNodes,fe.fromDom)).length&&r<o.length?B(o[r],0):B(n,r);var n,r,o}function H(e,t,n,r,o,i){for(var a=(i=void 0===i||i)?t(!1):n;a;){var c=R(e,a);if(c||W(e,a)){if(c?r.cef(a):r.boundary(a))break;a=t(!0)}else{if(P(e,a)){if(r.boundary(a))break}else 3===a.nodeType&&r.text(a);if(a===o)break;a=t(!1)}}}function L(e,t,n,r,o){var i,a,c,u,l,s;P(i=e,a=n)||R(i,a)||W(i,a)||\"true\"===(c=i).getContentEditable(u=a)&&\"false\"===c.getContentEditableParent(u.parentNode)||(l=e.getParent(r,e.isBlock),s=new me(n,l),H(e,(o?s.next:s.prev).bind(s),n,{boundary:f,cef:f,text:function(e){o?t.fOffset+=e.length:t.sOffset+=e.length,t.elements.push(fe.fromDom(e))}}))}function U(e,t,n,r,o,i){void 0===i&&(i=!0);var a=new me(n,t),c=[],u=j();function l(){return 0<u.elements.length&&(c.push(u),u=j()),!1}return L(e,u,n,t,!1),H(e,a.next.bind(a),n,{boundary:l,cef:function(e){return l(),o&&c.push.apply(c,o.cef(e)),!1},text:function(e){u.elements.push(fe.fromDom(e)),o&&o.text(e,u)}},r,i),r&&L(e,u,r,t,!0),l(),c}function \$(u,e){var n=V(e.startContainer,e.startOffset),r=n.element.dom,o=V(e.endContainer,e.endOffset),i=o.element.dom;return U(u,e.commonAncestorContainer,r,i,{text:function(e,t){e===i?t.fOffset+=e.length-o.offset:e===r&&(t.sOffset+=n.offset)},cef:function(e){var t,n,r,o,i,a=w((n=fe.fromDom(e),r=\"*[contenteditable=true]\",1!==(o=i=void 0===n?document:n.dom).nodeType&&9!==o.nodeType&&11!==o.nodeType||0===o.childElementCount?[]:y(i.querySelectorAll(r),fe.fromDom)),function(e){var t=e.dom;return U(u,t,t)}),c=function(e,t){return n=e.elements[0].dom,r=t.elements[0].dom,o=Node.DOCUMENT_POSITION_PRECEDING,0!=(n.compareDocumentPosition(r)&o)?1:-1;var n,r,o};return(t=S.call(a,0)).sort(c),t}},!1)}function _(e,t){return t.collapsed?[]:\$(e,t)}function z(e,t){var n=e.createRng();return n.selectNode(t),_(e,n)}function q(c,e){return w(e,function(e){var a,n,r,t=e.elements,o=y(t,I).join(\"\"),i=function(e,t,n,r){void 0===r&&(r=e.length);var o=t.regex;o.lastIndex=n=void 0===n?0:n;for(var i,a=[];i=o.exec(e);){var c=i[t.matchIndex],u=i.index+i[0].indexOf(c),l=u+c.length;if(r<l)break;a.push({start:u,finish:l}),o.lastIndex=l}return a}(o,c,e.sOffset,o.length-e.fOffset);return a=i,function(e,t){if(0===e.length)return[];for(var n=t(e[0]),r=[],o=[],i=0,a=e.length;i<a;i++){var c=e[i],u=t(c);u!==n&&(r.push(o),o=[]),n=u,o.push(c)}return 0!==o.length&&r.push(o),r}((n=function(e,n){var t=I(n),r=e.last,o=r+t.length,i=w(a,function(e,t){return e.start<o&&e.finish>r?[{element:n,start:Math.max(r,e.start)-r,finish:Math.min(o,e.finish)-r,matchId:t}]:[]});return{results:e.results.concat(i),last:o}},r={results:[],last:0},x(t,function(e,t){r=n(r,e)}),r.results),function(e){return e.matchId})})}function G(e,i){b(e,function(e,o){b(e,function(e){var t=fe.fromDom(i.cloneNode(!1));M(t,\"data-mce-index\",o);var n,r=e.element.dom;r.length===e.finish&&0===e.start?F(e.element,t):(r.length!==e.finish&&r.splitText(e.finish),n=r.splitText(e.start),F(fe.fromDom(n),t))})})}function K(e){var t=e.getAttribute(\"data-mce-index\");return\"number\"==typeof t?\"\"+t:t}function J(e,t,n,r){var o=e.dom.create(\"span\",{\"data-mce-bogus\":1});o.className=\"mce-match-marker\";var i,a,c,u,l,s,f,d,m,h,g=e.getBody();return he(e,t,!1),r?(c=e.dom,u=n,l=e.selection,s=o,d=l.getBookmark(),m=c.select(\"td[data-mce-selected],th[data-mce-selected]\"),G(h=q(u,0<m.length?(f=c,w(m,function(e){return z(f,e)})):_(c,l.getRng())),s),l.moveToBookmark(d),h.length):(i=o,G(a=q(n,z(e.dom,g)),i),a.length)}function Q(e){var t=e.parentNode;e.firstChild&&t.insertBefore(e.firstChild,e),e.parentNode.removeChild(e)}function X(e,t){var n=[],r=k.toArray(e.getBody().getElementsByTagName(\"span\"));if(r.length)for(var o=0;o<r.length;o++){var i=K(r[o]);null!==i&&i.length&&i===t.toString()&&n.push(r[o])}return n}function Y(e,t,n){var r=t.get(),o=r.index,i=e.dom;(n=!1!==n)?o+1===r.count?o=0:o++:o-1==-1?o=r.count-1:o--,i.removeClass(X(e,r.index),\"mce-match-marker-selected\");var a=X(e,o);return a.length?(i.addClass(X(e,o),\"mce-match-marker-selected\"),e.selection.scrollIntoView(a[0]),o):-1}function Z(e,t){var n=t.parentNode;e.remove(t),e.isEmpty(n)&&e.remove(n)}function ee(e,t,n,r,o,i){var a,c,u,l=e.selection,s=(a=o,c=\"(\"+n.replace(/[\\-\\[\\]\\/\\{\\}\\(\\)\\*\\+\\?\\.\\\\\\^\\\$\\|]/g,\"\\\\\$&\").replace(/\\s/g,\"[^\\\\S\\\\r\\\\n\\\\uFEFF]\")+\")\",a?\"(?:^|\\\\s|\"+E()+\")\"+c+\"(?=\$|\\\\s|\"+E()+\")\":c),f=l.isForward(),d=J(e,t,{regex:new RegExp(s,r?\"g\":\"gi\"),matchIndex:1},i);return N.browser.isSafari()&&l.setRng(l.getRng(),f),d&&(u=Y(e,t,!0),t.set({index:u,count:d,text:n,matchCase:r,wholeWord:o,inSelection:i})),d}function te(e,t){var n=Y(e,t,!0);t.set(v(v({},t.get()),{index:n}))}function ne(e,t){var n=Y(e,t,!1);t.set(v(v({},t.get()),{index:n}))}function re(e){var t=K(e);return null!==t&&0<t.length}function oe(e,t,n,r,o){var i,a=t.get(),c=a.index,u=c;r=!1!==r;for(var l=e.getBody(),s=k.grep(k.toArray(l.getElementsByTagName(\"span\")),re),f=0;f<s.length;f++){var d=K(s[f]),m=i=parseInt(d,10);if(o||m===a.index){for(n.length?(s[f].firstChild.nodeValue=n,Q(s[f])):Z(e.dom,s[f]);s[++f];){if((m=parseInt(K(s[f]),10))!==i){f--;break}Z(e.dom,s[f])}r&&u--}else c<i&&s[f].setAttribute(\"data-mce-index\",String(i-1))}return t.set(v(v({},a),{count:o?0:a.count-1,index:u})),(r?te:ne)(e,t),!o&&0<t.get().count}function ie(i,a){var e,t,n,r=(e=p,t=g(T.none()),v(v({},n={clear:function(){o(),t.set(T.none())},isSet:function(){return t.get().isSome()},get:function(){return t.get()},set:function(e){o(),t.set(T.some(e))}}),{on:function(e){return n.get().each(e)}}));function o(){return t.get().each(e)}function c(e){(1<a.get().count?e.enable:e.disable)(\"next\"),(1<a.get().count?e.enable:e.disable)(\"prev\")}function u(e,t){x([\"replace\",\"replaceall\",\"prev\",\"next\"],t?e.disable:e.enable)}function l(e,t){N.browser.isSafari()&&N.deviceType.isTouch()&&(\"find\"===t||\"replace\"===t||\"replaceall\"===t)&&e.focus(t)}function s(e){he(i,a,!1),u(e,!0),c(e)}function f(e){var t,n,r=e.getData(),o=a.get();r.findtext.length?(o.text===r.findtext&&o.matchCase===r.matchcase&&o.wholeWord===r.wholewords?te(i,a):((t=ee(i,a,r.findtext,r.matchcase,r.wholewords,r.inselection))<=0&&(n=e,i.windowManager.alert(\"Could not find the specified string.\",function(){n.focus(\"findtext\")})),u(e,0===t)),c(e)):s(e)}i.undoManager.add();var d=k.trim(i.selection.getContent({format:\"text\"})),m=a.get(),h={title:\"Find and Replace\",size:\"normal\",body:{type:\"panel\",items:[{type:\"bar\",items:[{type:\"input\",name:\"findtext\",placeholder:\"Find\",maximized:!0,inputMode:\"search\"},{type:\"button\",name:\"prev\",text:\"Previous\",icon:\"action-prev\",disabled:!0,borderless:!0},{type:\"button\",name:\"next\",text:\"Next\",icon:\"action-next\",disabled:!0,borderless:!0}]},{type:\"input\",name:\"replacetext\",placeholder:\"Replace with\",inputMode:\"search\"}]},buttons:[{type:\"menu\",name:\"options\",icon:\"preferences\",tooltip:\"Preferences\",align:\"start\",items:[{type:\"togglemenuitem\",name:\"matchcase\",text:\"Match case\"},{type:\"togglemenuitem\",name:\"wholewords\",text:\"Find whole words only\"},{type:\"togglemenuitem\",name:\"inselection\",text:\"Find in selection\"}]},{type:\"custom\",name:\"find\",text:\"Find\",primary:!0},{type:\"custom\",name:\"replace\",text:\"Replace\",disabled:!0},{type:\"custom\",name:\"replaceall\",text:\"Replace all\",disabled:!0}],initialData:{findtext:d,replacetext:\"\",wholewords:m.wholeWord,matchcase:m.matchCase,inselection:m.inSelection},onChange:function(e,t){\"findtext\"===t.name&&0<a.get().count&&s(e)},onAction:function(e,t){var n,r,o=e.getData();switch(t.name){case\"find\":f(e);break;case\"replace\":(oe(i,a,o.replacetext)?c:s)(e);break;case\"replaceall\":oe(i,a,o.replacetext,!0,!0),s(e);break;case\"prev\":ne(i,a),c(e);break;case\"next\":te(i,a),c(e);break;case\"matchcase\":case\"wholewords\":case\"inselection\":n=e.getData(),r=a.get(),a.set(v(v({},r),{matchCase:n.matchcase,wholeWord:n.wholewords,inSelection:n.inselection})),s(e)}l(e,t.name)},onSubmit:function(e){f(e),l(e,\"find\")},onClose:function(){i.focus(),he(i,a),i.undoManager.add()}};r.set(i.windowManager.open(h,{inline:\"toolbar\"}))}function ae(e,t){return function(){ie(e,t)}}\"undefined\"!=typeof window||Function(\"return this;\")();function ce(e){return 3===e.dom.nodeType}function ue(e){if(null==e)throw new Error(\"Node cannot be null or undefined\");return{dom:e}}var le,se,fe={fromHtml:function(e,t){var n=(t||document).createElement(\"div\");if(n.innerHTML=e,!n.hasChildNodes()||1<n.childNodes.length)throw console.error(\"HTML does not have a single root node\",e),new Error(\"HTML must have a single root node\");return ue(n.childNodes[0])},fromTag:function(e,t){var n=(t||document).createElement(e);return ue(n)},fromText:function(e,t){var n=(t||document).createTextNode(e);return ue(n)},fromDom:ue,fromPoint:function(e,t,n){return T.from(e.dom.elementFromPoint(t,n)).map(ue)}},de=(le=ce,{get:function(e){if(!le(e))throw new Error(\"Can only get text value of a text node\");return se(e).getOr(\"\")},getOption:se=function(e){return le(e)?T.from(e.dom.nodeValue):T.none()},set:function(e,t){if(!le(e))throw new Error(\"Can only set raw text value of a text node\");e.dom.nodeValue=t}}),me=tinymce.util.Tools.resolve(\"tinymce.dom.TreeWalker\"),he=function(e,t,n){for(var r,o,i=t.get(),a=k.toArray(e.getBody().getElementsByTagName(\"span\")),c=0;c<a.length;c++){var u=K(a[c]);null!==u&&u.length&&(u===i.index.toString()&&(r=r||a[c].firstChild,o=a[c].firstChild),Q(a[c]))}if(t.set(v(v({},i),{index:-1,count:0,text:\"\"})),r&&o){var l=e.dom.createRng();return l.setStart(r,0),l.setEnd(o,o.data.length),!1!==n&&e.selection.setRng(l),l}};o.add(\"searchreplace\",function(e){var t,n,r,o,i,a=g({index:-1,count:0,text:\"\",matchCase:!1,wholeWord:!1,inSelection:!1}),c=a;return(t=e).addCommand(\"SearchReplace\",function(){ie(t,c)}),(n=e).ui.registry.addMenuItem(\"searchreplace\",{text:\"Find and replace...\",shortcut:\"Meta+F\",onAction:ae(n,r=a),icon:\"search\"}),n.ui.registry.addButton(\"searchreplace\",{tooltip:\"Find and replace\",onAction:ae(n,r),icon:\"search\"}),n.shortcuts.add(\"Meta+F\",\"\",ae(n,r)),o=e,i=a,{done:function(e){return he(o,i,e)},find:function(e,t,n,r){return ee(o,i,e,t,n,r=void 0!==r&&r)},next:function(){return te(o,i)},prev:function(){return ne(o,i)},replace:function(e,t,n){return oe(o,i,e,t,n)}}})}();", "Back/assets/vendor/tinymce/plugins/searchreplace/plugin.min.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\searchreplace\\plugin.min.js");
    }
}
