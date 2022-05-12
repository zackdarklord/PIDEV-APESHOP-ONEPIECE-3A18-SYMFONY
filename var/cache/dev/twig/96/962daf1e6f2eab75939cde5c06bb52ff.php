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

/* Back/assets/vendor/tinymce/plugins/legacyoutput/plugin.min.js */
class __TwigTemplate_e57c80d13f132719383bc2d8d0e1f6f1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/legacyoutput/plugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/legacyoutput/plugin.min.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
!function(){\"use strict\";var e=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),l=tinymce.util.Tools.resolve(\"tinymce.util.Tools\");e.add(\"legacyoutput\",function(e){var s,t;(t=s=e).settings.inline_styles=!1,t.getParam(\"fontsize_formats\")||(t.settings.fontsize_formats=\"8pt=1 10pt=2 12pt=3 14pt=4 18pt=5 24pt=6 36pt=7\"),t.getParam(\"font_formats\")||(t.settings.font_formats=\"Andale Mono=andale mono,monospace;Arial=arial,helvetica,sans-serif;Arial Black=arial black,sans-serif;Book Antiqua=book antiqua,palatino,serif;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier,monospace;Georgia=georgia,palatino,serif;Helvetica=helvetica,arial,sans-serif;Impact=impact,sans-serif;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco,monospace;Times New Roman=times new roman,times,serif;Trebuchet MS=trebuchet ms,geneva,sans-serif;Verdana=verdana,geneva,sans-serif;Webdings=webdings;Wingdings=wingdings,zapf dingbats\"),s.on(\"PreInit\",function(){var e=s,t=\"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table\",i=l.explode(e.getParam(\"font_size_style_values\",\"xx-small,x-small,small,medium,large,x-large,xx-large\")),a=e.schema;e.formatter.register({alignleft:{selector:t,attributes:{align:\"left\"}},aligncenter:{selector:t,attributes:{align:\"center\"}},alignright:{selector:t,attributes:{align:\"right\"}},alignjustify:{selector:t,attributes:{align:\"justify\"}},bold:[{inline:\"b\",remove:\"all\",preserve_attributes:[\"class\",\"style\"]},{inline:\"strong\",remove:\"all\",preserve_attributes:[\"class\",\"style\"]},{inline:\"span\",styles:{fontWeight:\"bold\"}}],italic:[{inline:\"i\",remove:\"all\",preserve_attributes:[\"class\",\"style\"]},{inline:\"em\",remove:\"all\",preserve_attributes:[\"class\",\"style\"]},{inline:\"span\",styles:{fontStyle:\"italic\"}}],underline:[{inline:\"u\",remove:\"all\",preserve_attributes:[\"class\",\"style\"]},{inline:\"span\",styles:{textDecoration:\"underline\"},exact:!0}],strikethrough:[{inline:\"strike\",remove:\"all\",preserve_attributes:[\"class\",\"style\"]},{inline:\"span\",styles:{textDecoration:\"line-through\"},exact:!0}],fontname:{inline:\"font\",toggle:!1,attributes:{face:\"%value\"}},fontsize:{inline:\"font\",toggle:!1,attributes:{size:function(e){return String(l.inArray(i,e.value)+1)}}},forecolor:{inline:\"font\",attributes:{color:\"%value\"},links:!0,remove_similar:!0,clear_child_styles:!0},hilitecolor:{inline:\"font\",styles:{backgroundColor:\"%value\"},links:!0,remove_similar:!0,clear_child_styles:!0}}),l.each(\"b,i,u,strike\".split(\",\"),function(e){a.addValidElements(e+\"[*]\")}),a.getElementRule(\"font\")||a.addValidElements(\"font[face|size|color|style]\"),l.each(t.split(\",\"),function(e){var t=a.getElementRule(e);t&&(t.attributes.align||(t.attributes.align={},t.attributesOrder.push(\"align\")))})})})}();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/legacyoutput/plugin.min.js";
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
!function(){\"use strict\";var e=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),l=tinymce.util.Tools.resolve(\"tinymce.util.Tools\");e.add(\"legacyoutput\",function(e){var s,t;(t=s=e).settings.inline_styles=!1,t.getParam(\"fontsize_formats\")||(t.settings.fontsize_formats=\"8pt=1 10pt=2 12pt=3 14pt=4 18pt=5 24pt=6 36pt=7\"),t.getParam(\"font_formats\")||(t.settings.font_formats=\"Andale Mono=andale mono,monospace;Arial=arial,helvetica,sans-serif;Arial Black=arial black,sans-serif;Book Antiqua=book antiqua,palatino,serif;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier,monospace;Georgia=georgia,palatino,serif;Helvetica=helvetica,arial,sans-serif;Impact=impact,sans-serif;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco,monospace;Times New Roman=times new roman,times,serif;Trebuchet MS=trebuchet ms,geneva,sans-serif;Verdana=verdana,geneva,sans-serif;Webdings=webdings;Wingdings=wingdings,zapf dingbats\"),s.on(\"PreInit\",function(){var e=s,t=\"p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table\",i=l.explode(e.getParam(\"font_size_style_values\",\"xx-small,x-small,small,medium,large,x-large,xx-large\")),a=e.schema;e.formatter.register({alignleft:{selector:t,attributes:{align:\"left\"}},aligncenter:{selector:t,attributes:{align:\"center\"}},alignright:{selector:t,attributes:{align:\"right\"}},alignjustify:{selector:t,attributes:{align:\"justify\"}},bold:[{inline:\"b\",remove:\"all\",preserve_attributes:[\"class\",\"style\"]},{inline:\"strong\",remove:\"all\",preserve_attributes:[\"class\",\"style\"]},{inline:\"span\",styles:{fontWeight:\"bold\"}}],italic:[{inline:\"i\",remove:\"all\",preserve_attributes:[\"class\",\"style\"]},{inline:\"em\",remove:\"all\",preserve_attributes:[\"class\",\"style\"]},{inline:\"span\",styles:{fontStyle:\"italic\"}}],underline:[{inline:\"u\",remove:\"all\",preserve_attributes:[\"class\",\"style\"]},{inline:\"span\",styles:{textDecoration:\"underline\"},exact:!0}],strikethrough:[{inline:\"strike\",remove:\"all\",preserve_attributes:[\"class\",\"style\"]},{inline:\"span\",styles:{textDecoration:\"line-through\"},exact:!0}],fontname:{inline:\"font\",toggle:!1,attributes:{face:\"%value\"}},fontsize:{inline:\"font\",toggle:!1,attributes:{size:function(e){return String(l.inArray(i,e.value)+1)}}},forecolor:{inline:\"font\",attributes:{color:\"%value\"},links:!0,remove_similar:!0,clear_child_styles:!0},hilitecolor:{inline:\"font\",styles:{backgroundColor:\"%value\"},links:!0,remove_similar:!0,clear_child_styles:!0}}),l.each(\"b,i,u,strike\".split(\",\"),function(e){a.addValidElements(e+\"[*]\")}),a.getElementRule(\"font\")||a.addValidElements(\"font[face|size|color|style]\"),l.each(t.split(\",\"),function(e){var t=a.getElementRule(e);t&&(t.attributes.align||(t.attributes.align={},t.attributesOrder.push(\"align\")))})})})}();", "Back/assets/vendor/tinymce/plugins/legacyoutput/plugin.min.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\legacyoutput\\plugin.min.js");
    }
}
