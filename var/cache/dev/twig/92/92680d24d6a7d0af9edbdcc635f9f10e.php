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

/* Back/assets/vendor/tinymce/plugins/print/plugin.js */
class __TwigTemplate_be0a0344fa36980127b370f295c36107 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/print/plugin.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/print/plugin.js"));

        // line 1
        echo "/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.10.2 (2021-11-17)
 */
(function () {
    'use strict';

    var global\$1 = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var global = tinymce.util.Tools.resolve('tinymce.Env');

    var register\$1 = function (editor) {
      editor.addCommand('mcePrint', function () {
        if (global.browser.isIE()) {
          editor.getDoc().execCommand('print', false, null);
        } else {
          editor.getWin().print();
        }
      });
    };

    var register = function (editor) {
      var onAction = function () {
        return editor.execCommand('mcePrint');
      };
      editor.ui.registry.addButton('print', {
        icon: 'print',
        tooltip: 'Print',
        onAction: onAction
      });
      editor.ui.registry.addMenuItem('print', {
        text: 'Print...',
        icon: 'print',
        onAction: onAction
      });
    };

    function Plugin () {
      global\$1.add('print', function (editor) {
        register\$1(editor);
        register(editor);
        editor.addShortcut('Meta+P', '', 'mcePrint');
      });
    }

    Plugin();

}());
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/assets/vendor/tinymce/plugins/print/plugin.js";
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
(function () {
    'use strict';

    var global\$1 = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var global = tinymce.util.Tools.resolve('tinymce.Env');

    var register\$1 = function (editor) {
      editor.addCommand('mcePrint', function () {
        if (global.browser.isIE()) {
          editor.getDoc().execCommand('print', false, null);
        } else {
          editor.getWin().print();
        }
      });
    };

    var register = function (editor) {
      var onAction = function () {
        return editor.execCommand('mcePrint');
      };
      editor.ui.registry.addButton('print', {
        icon: 'print',
        tooltip: 'Print',
        onAction: onAction
      });
      editor.ui.registry.addMenuItem('print', {
        text: 'Print...',
        icon: 'print',
        onAction: onAction
      });
    };

    function Plugin () {
      global\$1.add('print', function (editor) {
        register\$1(editor);
        register(editor);
        editor.addShortcut('Meta+P', '', 'mcePrint');
      });
    }

    Plugin();

}());
", "Back/assets/vendor/tinymce/plugins/print/plugin.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\print\\plugin.js");
    }
}
