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

/* Back/assets/vendor/tinymce/plugins/autolink/plugin.min.js */
class __TwigTemplate_d9f4395d060a1706714fc9e390fc3020 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/autolink/plugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/autolink/plugin.min.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
!function(){\"use strict\";function k(e){return/^[(\\[{ \\u00a0]\$/.test(e)}function w(e){return 3===e.nodeType}function i(e){return 1===e.nodeType}function o(e,t){var n;return t<0&&(t=0),!w(e)||(n=e.data.length)<t&&(t=n),t}function y(e,t,n){!i(t)||t.hasChildNodes()?e.setStart(t,o(t,n)):e.setStartBefore(t)}function v(e,t,n){!i(t)||t.hasChildNodes()?e.setEnd(t,o(t,n)):e.setEndAfter(t)}function r(e,t){var n,i,o,r,a,f=e.getParam(\"autolink_pattern\",A),s=e.getParam(\"default_link_target\",!1);if(null===e.dom.getParent(e.selection.getNode(),\"a[href]\")){var d=e.selection.getRng().cloneRange();if(d.startOffset<5){if(!(r=d.endContainer.previousSibling)){if(!d.endContainer.firstChild||!d.endContainer.firstChild.nextSibling)return;r=d.endContainer.firstChild.nextSibling}if(y(d,r,a=r.length),v(d,r,a),d.endOffset<5)return;n=d.endOffset,i=r}else{if(!w(i=d.endContainer)&&i.firstChild){for(;!w(i)&&i.firstChild;)i=i.firstChild;w(i)&&(y(d,i,0),v(d,i,i.nodeValue.length))}n=1===d.endOffset?2:d.endOffset-1-t}for(var l=n;y(d,i,2<=n?n-2:0),v(d,i,1<=n?n-1:0),--n,!k(d.toString())&&0<=n-2;);k(d.toString())?(y(d,i,n),v(d,i,l),n+=1):(0===d.startOffset?y(d,i,0):y(d,i,n),v(d,i,l)),u=d.toString(),/[?!,.;:]/.test(u.charAt(u.length-1))&&v(d,i,l-1);var u,c,g,h,C=(u=d.toString().trim()).match(f),m=e.getParam(\"link_default_protocol\",\"http\",\"string\");C&&((g=c=C[0]).length>=(h=\"www.\").length&&g.substr(0,0+h.length)===h?c=m+\"://\"+c:-1===c.indexOf(\"@\")||/^([A-Za-z][A-Za-z\\d.+-]*:\\/\\/)|mailto:/.test(c)||(c=\"mailto:\"+c),o=e.selection.getBookmark(),e.selection.setRng(d),e.execCommand(\"createlink\",!1,c),!1!==s&&e.dom.setAttrib(e.selection.getNode(),\"target\",s),e.selection.moveToBookmark(o),e.nodeChanged())}}var e=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),a=tinymce.util.Tools.resolve(\"tinymce.Env\"),A=new RegExp(\"^\"+/(?:[A-Za-z][A-Za-z\\d.+-]{0,14}:\\/\\/(?:[-.~*+=!&;:'%@?^\${}(),\\w]+@)?|www\\.|[-;:&=+\$,.\\w]+@)[A-Za-z\\d-]+(?:\\.[A-Za-z\\d-]+)*(?::\\d+)?(?:\\/(?:[-+~=.,%()\\/\\w]*[-+~=%()\\/\\w])?)?(?:\\?(?:[-.~*+=!&;:'%@?^\${}(),\\/\\w]+))?(?:#(?:[-.~*+=!&;:'%@?^\${}(),\\/\\w]+))?/g.source+\"\$\",\"i\");e.add(\"autolink\",function(e){var t,n;(t=e).on(\"keydown\",function(e){if(13===e.keyCode)return r(t,-1)}),a.browser.isIE()?t.on(\"focus\",function(){if(!n){n=!0;try{t.execCommand(\"AutoUrlDetect\",!1,!0)}catch(e){}}}):(t.on(\"keypress\",function(e){if(41===e.keyCode||93===e.keyCode||125===e.keyCode)return r(t,-1)}),t.on(\"keyup\",function(e){if(32===e.keyCode)return r(t,0)}))})}();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/autolink/plugin.min.js";
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
!function(){\"use strict\";function k(e){return/^[(\\[{ \\u00a0]\$/.test(e)}function w(e){return 3===e.nodeType}function i(e){return 1===e.nodeType}function o(e,t){var n;return t<0&&(t=0),!w(e)||(n=e.data.length)<t&&(t=n),t}function y(e,t,n){!i(t)||t.hasChildNodes()?e.setStart(t,o(t,n)):e.setStartBefore(t)}function v(e,t,n){!i(t)||t.hasChildNodes()?e.setEnd(t,o(t,n)):e.setEndAfter(t)}function r(e,t){var n,i,o,r,a,f=e.getParam(\"autolink_pattern\",A),s=e.getParam(\"default_link_target\",!1);if(null===e.dom.getParent(e.selection.getNode(),\"a[href]\")){var d=e.selection.getRng().cloneRange();if(d.startOffset<5){if(!(r=d.endContainer.previousSibling)){if(!d.endContainer.firstChild||!d.endContainer.firstChild.nextSibling)return;r=d.endContainer.firstChild.nextSibling}if(y(d,r,a=r.length),v(d,r,a),d.endOffset<5)return;n=d.endOffset,i=r}else{if(!w(i=d.endContainer)&&i.firstChild){for(;!w(i)&&i.firstChild;)i=i.firstChild;w(i)&&(y(d,i,0),v(d,i,i.nodeValue.length))}n=1===d.endOffset?2:d.endOffset-1-t}for(var l=n;y(d,i,2<=n?n-2:0),v(d,i,1<=n?n-1:0),--n,!k(d.toString())&&0<=n-2;);k(d.toString())?(y(d,i,n),v(d,i,l),n+=1):(0===d.startOffset?y(d,i,0):y(d,i,n),v(d,i,l)),u=d.toString(),/[?!,.;:]/.test(u.charAt(u.length-1))&&v(d,i,l-1);var u,c,g,h,C=(u=d.toString().trim()).match(f),m=e.getParam(\"link_default_protocol\",\"http\",\"string\");C&&((g=c=C[0]).length>=(h=\"www.\").length&&g.substr(0,0+h.length)===h?c=m+\"://\"+c:-1===c.indexOf(\"@\")||/^([A-Za-z][A-Za-z\\d.+-]*:\\/\\/)|mailto:/.test(c)||(c=\"mailto:\"+c),o=e.selection.getBookmark(),e.selection.setRng(d),e.execCommand(\"createlink\",!1,c),!1!==s&&e.dom.setAttrib(e.selection.getNode(),\"target\",s),e.selection.moveToBookmark(o),e.nodeChanged())}}var e=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),a=tinymce.util.Tools.resolve(\"tinymce.Env\"),A=new RegExp(\"^\"+/(?:[A-Za-z][A-Za-z\\d.+-]{0,14}:\\/\\/(?:[-.~*+=!&;:'%@?^\${}(),\\w]+@)?|www\\.|[-;:&=+\$,.\\w]+@)[A-Za-z\\d-]+(?:\\.[A-Za-z\\d-]+)*(?::\\d+)?(?:\\/(?:[-+~=.,%()\\/\\w]*[-+~=%()\\/\\w])?)?(?:\\?(?:[-.~*+=!&;:'%@?^\${}(),\\/\\w]+))?(?:#(?:[-.~*+=!&;:'%@?^\${}(),\\/\\w]+))?/g.source+\"\$\",\"i\");e.add(\"autolink\",function(e){var t,n;(t=e).on(\"keydown\",function(e){if(13===e.keyCode)return r(t,-1)}),a.browser.isIE()?t.on(\"focus\",function(){if(!n){n=!0;try{t.execCommand(\"AutoUrlDetect\",!1,!0)}catch(e){}}}):(t.on(\"keypress\",function(e){if(41===e.keyCode||93===e.keyCode||125===e.keyCode)return r(t,-1)}),t.on(\"keyup\",function(e){if(32===e.keyCode)return r(t,0)}))})}();", "Back/assets/vendor/tinymce/plugins/autolink/plugin.min.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\autolink\\plugin.min.js");
    }
}
