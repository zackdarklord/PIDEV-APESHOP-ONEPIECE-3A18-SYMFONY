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

/* Back/assets/vendor/tinymce/plugins/code/plugin.min.js */
class __TwigTemplate_6884253e6ac38e93a969dde0ad675bfb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/code/plugin.min.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/code/plugin.min.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
!function(){\"use strict\";tinymce.util.Tools.resolve(\"tinymce.PluginManager\").add(\"code\",function(e){var t,o;function n(){return o.execCommand(\"mceCodeEditor\")}return(t=e).addCommand(\"mceCodeEditor\",function(){var n,e;e=(n=t).getContent({source_view:!0}),n.windowManager.open({title:\"Source Code\",size:\"large\",body:{type:\"panel\",items:[{type:\"textarea\",name:\"code\"}]},buttons:[{type:\"cancel\",name:\"cancel\",text:\"Cancel\"},{type:\"submit\",name:\"save\",text:\"Save\",primary:!0}],initialData:{code:e},onSubmit:function(e){var t=n,o=e.getData().code;t.focus(),t.undoManager.transact(function(){t.setContent(o)}),t.selection.setCursorLocation(),t.nodeChanged(),e.close()}})}),(o=e).ui.registry.addButton(\"code\",{icon:\"sourcecode\",tooltip:\"Source code\",onAction:n}),o.ui.registry.addMenuItem(\"code\",{icon:\"sourcecode\",text:\"Source code\",onAction:n}),{}})}();";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/code/plugin.min.js";
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
!function(){\"use strict\";tinymce.util.Tools.resolve(\"tinymce.PluginManager\").add(\"code\",function(e){var t,o;function n(){return o.execCommand(\"mceCodeEditor\")}return(t=e).addCommand(\"mceCodeEditor\",function(){var n,e;e=(n=t).getContent({source_view:!0}),n.windowManager.open({title:\"Source Code\",size:\"large\",body:{type:\"panel\",items:[{type:\"textarea\",name:\"code\"}]},buttons:[{type:\"cancel\",name:\"cancel\",text:\"Cancel\"},{type:\"submit\",name:\"save\",text:\"Save\",primary:!0}],initialData:{code:e},onSubmit:function(e){var t=n,o=e.getData().code;t.focus(),t.undoManager.transact(function(){t.setContent(o)}),t.selection.setCursorLocation(),t.nodeChanged(),e.close()}})}),(o=e).ui.registry.addButton(\"code\",{icon:\"sourcecode\",tooltip:\"Source code\",onAction:n}),o.ui.registry.addMenuItem(\"code\",{icon:\"sourcecode\",text:\"Source code\",onAction:n}),{}})}();", "Back/assets/vendor/tinymce/plugins/code/plugin.min.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\code\\plugin.min.js");
    }
}
