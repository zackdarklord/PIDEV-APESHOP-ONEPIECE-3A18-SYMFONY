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

/* Back/assets/vendor/tinymce/plugins/autoresize/plugin.min.js */
class __TwigTemplate_eacc45119305f5b17831f5aae23c97a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/autoresize/plugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/autoresize/plugin.min.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
!function(){\"use strict\";function y(e){return e.getParam(\"min_height\",e.getElement().offsetHeight,\"number\")}function p(e,t){var n=e.getBody();n&&(n.style.overflowY=t?\"\":\"hidden\",t||(n.scrollTop=0))}function v(e,t,n,i){var o=parseInt(e.getStyle(t,n,i),10);return isNaN(o)?0:o}var l=Object.hasOwnProperty,e=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),b=tinymce.util.Tools.resolve(\"tinymce.Env\"),r=tinymce.util.Tools.resolve(\"tinymce.util.Delay\"),u=function(e,t,n,i,o){r.setEditorTimeout(e,function(){C(e,t),n--?u(e,t,n,i,o):o&&o()},i)},C=function(e,t,n){var i,o,r,s,a,l,u,g,c,m,f,d=e.dom,h=e.getDoc();h&&(e.plugins.fullscreen&&e.plugins.fullscreen.isFullscreen()?p(e,!0):(i=h.documentElement,o=e.getParam(\"autoresize_bottom_margin\",50,\"number\"),r=y(e),s=v(d,i,\"margin-top\",!0),a=v(d,i,\"margin-bottom\",!0),(l=(l=i.offsetHeight+s+a+o)<0?0:l)+(u=e.getContainer().offsetHeight-e.getContentAreaContainer().offsetHeight)>y(e)&&(r=l+u),(g=e.getParam(\"max_height\",0,\"number\"))&&g<r?(r=g,p(e,!0)):p(e,!1),r!==t.get()&&(c=r-t.get(),d.setStyle(e.getContainer(),\"height\",r+\"px\"),t.set(r),e.fire(\"ResizeEditor\"),b.browser.isSafari()&&b.mac&&(m=e.getWin()).scrollTo(m.pageXOffset,m.pageYOffset),!e.hasFocus()||\"setcontent\"!==(null==(f=n)?void 0:f.type.toLowerCase())||!0!==f.selection&&!0!==f.paste||e.selection.scrollIntoView(),b.webkit&&c<0&&C(e,t,n))))};e.add(\"autoresize\",function(e){var t,n,i,o,r,s,a=e.settings;l.call(a,\"resize\")||(e.settings.resize=!1),e.inline||(s=0,r=t={get:function(){return s},set:function(e){s=e}},(o=e).addCommand(\"mceAutoResize\",function(){C(o,r)}),i=t,(n=e).on(\"init\",function(){var e=n.getParam(\"autoresize_overflow_padding\",1,\"number\"),t=n.dom;t.setStyles(n.getDoc().documentElement,{height:\"auto\"}),t.setStyles(n.getBody(),{paddingLeft:e,paddingRight:e,\"min-height\":0})}),n.on(\"NodeChange SetContent keyup FullscreenStateChanged ResizeContent\",function(e){C(n,i,e)}),n.getParam(\"autoresize_on_init\",!0,\"boolean\")&&n.on(\"init\",function(){u(n,i,20,100,function(){u(n,i,5,1e3)})}))})}();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/autoresize/plugin.min.js";
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
!function(){\"use strict\";function y(e){return e.getParam(\"min_height\",e.getElement().offsetHeight,\"number\")}function p(e,t){var n=e.getBody();n&&(n.style.overflowY=t?\"\":\"hidden\",t||(n.scrollTop=0))}function v(e,t,n,i){var o=parseInt(e.getStyle(t,n,i),10);return isNaN(o)?0:o}var l=Object.hasOwnProperty,e=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),b=tinymce.util.Tools.resolve(\"tinymce.Env\"),r=tinymce.util.Tools.resolve(\"tinymce.util.Delay\"),u=function(e,t,n,i,o){r.setEditorTimeout(e,function(){C(e,t),n--?u(e,t,n,i,o):o&&o()},i)},C=function(e,t,n){var i,o,r,s,a,l,u,g,c,m,f,d=e.dom,h=e.getDoc();h&&(e.plugins.fullscreen&&e.plugins.fullscreen.isFullscreen()?p(e,!0):(i=h.documentElement,o=e.getParam(\"autoresize_bottom_margin\",50,\"number\"),r=y(e),s=v(d,i,\"margin-top\",!0),a=v(d,i,\"margin-bottom\",!0),(l=(l=i.offsetHeight+s+a+o)<0?0:l)+(u=e.getContainer().offsetHeight-e.getContentAreaContainer().offsetHeight)>y(e)&&(r=l+u),(g=e.getParam(\"max_height\",0,\"number\"))&&g<r?(r=g,p(e,!0)):p(e,!1),r!==t.get()&&(c=r-t.get(),d.setStyle(e.getContainer(),\"height\",r+\"px\"),t.set(r),e.fire(\"ResizeEditor\"),b.browser.isSafari()&&b.mac&&(m=e.getWin()).scrollTo(m.pageXOffset,m.pageYOffset),!e.hasFocus()||\"setcontent\"!==(null==(f=n)?void 0:f.type.toLowerCase())||!0!==f.selection&&!0!==f.paste||e.selection.scrollIntoView(),b.webkit&&c<0&&C(e,t,n))))};e.add(\"autoresize\",function(e){var t,n,i,o,r,s,a=e.settings;l.call(a,\"resize\")||(e.settings.resize=!1),e.inline||(s=0,r=t={get:function(){return s},set:function(e){s=e}},(o=e).addCommand(\"mceAutoResize\",function(){C(o,r)}),i=t,(n=e).on(\"init\",function(){var e=n.getParam(\"autoresize_overflow_padding\",1,\"number\"),t=n.dom;t.setStyles(n.getDoc().documentElement,{height:\"auto\"}),t.setStyles(n.getBody(),{paddingLeft:e,paddingRight:e,\"min-height\":0})}),n.on(\"NodeChange SetContent keyup FullscreenStateChanged ResizeContent\",function(e){C(n,i,e)}),n.getParam(\"autoresize_on_init\",!0,\"boolean\")&&n.on(\"init\",function(){u(n,i,20,100,function(){u(n,i,5,1e3)})}))})}();", "Back/assets/vendor/tinymce/plugins/autoresize/plugin.min.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\autoresize\\plugin.min.js");
    }
}
