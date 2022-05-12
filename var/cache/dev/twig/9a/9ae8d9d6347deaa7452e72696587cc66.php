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

/* Back/assets/vendor/tinymce/plugins/bbcode/plugin.min.js */
class __TwigTemplate_e19d98d6959c23d67c45acc64bb207e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/bbcode/plugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/bbcode/plugin.min.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
!function(){\"use strict\";function i(t){function o(o,e){t=t.replace(o,e)}return t=n.trim(t),o(/\\n/gi,\"<br />\"),o(/\\[b\\]/gi,\"<strong>\"),o(/\\[\\/b\\]/gi,\"</strong>\"),o(/\\[i\\]/gi,\"<em>\"),o(/\\[\\/i\\]/gi,\"</em>\"),o(/\\[u\\]/gi,\"<u>\"),o(/\\[\\/u\\]/gi,\"</u>\"),o(/\\[url=([^\\]]+)\\](.*?)\\[\\/url\\]/gi,'<a href=\"\$1\">\$2</a>'),o(/\\[url\\](.*?)\\[\\/url\\]/gi,'<a href=\"\$1\">\$1</a>'),o(/\\[img\\](.*?)\\[\\/img\\]/gi,'<img src=\"\$1\" />'),o(/\\[color=(.*?)\\](.*?)\\[\\/color\\]/gi,'<font color=\"\$1\">\$2</font>'),o(/\\[code\\](.*?)\\[\\/code\\]/gi,'<span class=\"codeStyle\">\$1</span>&nbsp;'),o(/\\[quote.*?\\](.*?)\\[\\/quote\\]/gi,'<span class=\"quoteStyle\">\$1</span>&nbsp;'),t}var o=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),n=tinymce.util.Tools.resolve(\"tinymce.util.Tools\");o.add(\"bbcode\",function(o){o.on(\"BeforeSetContent\",function(o){o.content=i(o.content)}),o.on(\"PostProcess\",function(o){function e(o,e){t=t.replace(o,e)}var t;o.set&&(o.content=i(o.content)),o.get&&(o.content=(t=o.content,t=n.trim(t),e(/<a.*?href=\\\"(.*?)\\\".*?>(.*?)<\\/a>/gi,\"[url=\$1]\$2[/url]\"),e(/<font.*?color=\\\"(.*?)\\\".*?class=\\\"codeStyle\\\".*?>(.*?)<\\/font>/gi,\"[code][color=\$1]\$2[/color][/code]\"),e(/<font.*?color=\\\"(.*?)\\\".*?class=\\\"quoteStyle\\\".*?>(.*?)<\\/font>/gi,\"[quote][color=\$1]\$2[/color][/quote]\"),e(/<font.*?class=\\\"codeStyle\\\".*?color=\\\"(.*?)\\\".*?>(.*?)<\\/font>/gi,\"[code][color=\$1]\$2[/color][/code]\"),e(/<font.*?class=\\\"quoteStyle\\\".*?color=\\\"(.*?)\\\".*?>(.*?)<\\/font>/gi,\"[quote][color=\$1]\$2[/color][/quote]\"),e(/<span style=\\\"color: ?(.*?);\\\">(.*?)<\\/span>/gi,\"[color=\$1]\$2[/color]\"),e(/<font.*?color=\\\"(.*?)\\\".*?>(.*?)<\\/font>/gi,\"[color=\$1]\$2[/color]\"),e(/<span style=\\\"font-size:(.*?);\\\">(.*?)<\\/span>/gi,\"[size=\$1]\$2[/size]\"),e(/<font>(.*?)<\\/font>/gi,\"\$1\"),e(/<img.*?src=\\\"(.*?)\\\".*?\\/>/gi,\"[img]\$1[/img]\"),e(/<span class=\\\"codeStyle\\\">(.*?)<\\/span>/gi,\"[code]\$1[/code]\"),e(/<span class=\\\"quoteStyle\\\">(.*?)<\\/span>/gi,\"[quote]\$1[/quote]\"),e(/<strong class=\\\"codeStyle\\\">(.*?)<\\/strong>/gi,\"[code][b]\$1[/b][/code]\"),e(/<strong class=\\\"quoteStyle\\\">(.*?)<\\/strong>/gi,\"[quote][b]\$1[/b][/quote]\"),e(/<em class=\\\"codeStyle\\\">(.*?)<\\/em>/gi,\"[code][i]\$1[/i][/code]\"),e(/<em class=\\\"quoteStyle\\\">(.*?)<\\/em>/gi,\"[quote][i]\$1[/i][/quote]\"),e(/<u class=\\\"codeStyle\\\">(.*?)<\\/u>/gi,\"[code][u]\$1[/u][/code]\"),e(/<u class=\\\"quoteStyle\\\">(.*?)<\\/u>/gi,\"[quote][u]\$1[/u][/quote]\"),e(/<\\/(strong|b)>/gi,\"[/b]\"),e(/<(strong|b)>/gi,\"[b]\"),e(/<\\/(em|i)>/gi,\"[/i]\"),e(/<(em|i)>/gi,\"[i]\"),e(/<\\/u>/gi,\"[/u]\"),e(/<span style=\\\"text-decoration: ?underline;\\\">(.*?)<\\/span>/gi,\"[u]\$1[/u]\"),e(/<u>/gi,\"[u]\"),e(/<blockquote[^>]*>/gi,\"[quote]\"),e(/<\\/blockquote>/gi,\"[/quote]\"),e(/<br \\/>/gi,\"\\n\"),e(/<br\\/>/gi,\"\\n\"),e(/<br>/gi,\"\\n\"),e(/<p>/gi,\"\"),e(/<\\/p>/gi,\"\\n\"),e(/&nbsp;|\\u00a0/gi,\" \"),e(/&quot;/gi,'\"'),e(/&lt;/gi,\"<\"),e(/&gt;/gi,\">\"),e(/&amp;/gi,\"&\"),t))})})}();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/bbcode/plugin.min.js";
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
!function(){\"use strict\";function i(t){function o(o,e){t=t.replace(o,e)}return t=n.trim(t),o(/\\n/gi,\"<br />\"),o(/\\[b\\]/gi,\"<strong>\"),o(/\\[\\/b\\]/gi,\"</strong>\"),o(/\\[i\\]/gi,\"<em>\"),o(/\\[\\/i\\]/gi,\"</em>\"),o(/\\[u\\]/gi,\"<u>\"),o(/\\[\\/u\\]/gi,\"</u>\"),o(/\\[url=([^\\]]+)\\](.*?)\\[\\/url\\]/gi,'<a href=\"\$1\">\$2</a>'),o(/\\[url\\](.*?)\\[\\/url\\]/gi,'<a href=\"\$1\">\$1</a>'),o(/\\[img\\](.*?)\\[\\/img\\]/gi,'<img src=\"\$1\" />'),o(/\\[color=(.*?)\\](.*?)\\[\\/color\\]/gi,'<font color=\"\$1\">\$2</font>'),o(/\\[code\\](.*?)\\[\\/code\\]/gi,'<span class=\"codeStyle\">\$1</span>&nbsp;'),o(/\\[quote.*?\\](.*?)\\[\\/quote\\]/gi,'<span class=\"quoteStyle\">\$1</span>&nbsp;'),t}var o=tinymce.util.Tools.resolve(\"tinymce.PluginManager\"),n=tinymce.util.Tools.resolve(\"tinymce.util.Tools\");o.add(\"bbcode\",function(o){o.on(\"BeforeSetContent\",function(o){o.content=i(o.content)}),o.on(\"PostProcess\",function(o){function e(o,e){t=t.replace(o,e)}var t;o.set&&(o.content=i(o.content)),o.get&&(o.content=(t=o.content,t=n.trim(t),e(/<a.*?href=\\\"(.*?)\\\".*?>(.*?)<\\/a>/gi,\"[url=\$1]\$2[/url]\"),e(/<font.*?color=\\\"(.*?)\\\".*?class=\\\"codeStyle\\\".*?>(.*?)<\\/font>/gi,\"[code][color=\$1]\$2[/color][/code]\"),e(/<font.*?color=\\\"(.*?)\\\".*?class=\\\"quoteStyle\\\".*?>(.*?)<\\/font>/gi,\"[quote][color=\$1]\$2[/color][/quote]\"),e(/<font.*?class=\\\"codeStyle\\\".*?color=\\\"(.*?)\\\".*?>(.*?)<\\/font>/gi,\"[code][color=\$1]\$2[/color][/code]\"),e(/<font.*?class=\\\"quoteStyle\\\".*?color=\\\"(.*?)\\\".*?>(.*?)<\\/font>/gi,\"[quote][color=\$1]\$2[/color][/quote]\"),e(/<span style=\\\"color: ?(.*?);\\\">(.*?)<\\/span>/gi,\"[color=\$1]\$2[/color]\"),e(/<font.*?color=\\\"(.*?)\\\".*?>(.*?)<\\/font>/gi,\"[color=\$1]\$2[/color]\"),e(/<span style=\\\"font-size:(.*?);\\\">(.*?)<\\/span>/gi,\"[size=\$1]\$2[/size]\"),e(/<font>(.*?)<\\/font>/gi,\"\$1\"),e(/<img.*?src=\\\"(.*?)\\\".*?\\/>/gi,\"[img]\$1[/img]\"),e(/<span class=\\\"codeStyle\\\">(.*?)<\\/span>/gi,\"[code]\$1[/code]\"),e(/<span class=\\\"quoteStyle\\\">(.*?)<\\/span>/gi,\"[quote]\$1[/quote]\"),e(/<strong class=\\\"codeStyle\\\">(.*?)<\\/strong>/gi,\"[code][b]\$1[/b][/code]\"),e(/<strong class=\\\"quoteStyle\\\">(.*?)<\\/strong>/gi,\"[quote][b]\$1[/b][/quote]\"),e(/<em class=\\\"codeStyle\\\">(.*?)<\\/em>/gi,\"[code][i]\$1[/i][/code]\"),e(/<em class=\\\"quoteStyle\\\">(.*?)<\\/em>/gi,\"[quote][i]\$1[/i][/quote]\"),e(/<u class=\\\"codeStyle\\\">(.*?)<\\/u>/gi,\"[code][u]\$1[/u][/code]\"),e(/<u class=\\\"quoteStyle\\\">(.*?)<\\/u>/gi,\"[quote][u]\$1[/u][/quote]\"),e(/<\\/(strong|b)>/gi,\"[/b]\"),e(/<(strong|b)>/gi,\"[b]\"),e(/<\\/(em|i)>/gi,\"[/i]\"),e(/<(em|i)>/gi,\"[i]\"),e(/<\\/u>/gi,\"[/u]\"),e(/<span style=\\\"text-decoration: ?underline;\\\">(.*?)<\\/span>/gi,\"[u]\$1[/u]\"),e(/<u>/gi,\"[u]\"),e(/<blockquote[^>]*>/gi,\"[quote]\"),e(/<\\/blockquote>/gi,\"[/quote]\"),e(/<br \\/>/gi,\"\\n\"),e(/<br\\/>/gi,\"\\n\"),e(/<br>/gi,\"\\n\"),e(/<p>/gi,\"\"),e(/<\\/p>/gi,\"\\n\"),e(/&nbsp;|\\u00a0/gi,\" \"),e(/&quot;/gi,'\"'),e(/&lt;/gi,\"<\"),e(/&gt;/gi,\">\"),e(/&amp;/gi,\"&\"),t))})})}();", "Back/assets/vendor/tinymce/plugins/bbcode/plugin.min.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\bbcode\\plugin.min.js");
    }
}
