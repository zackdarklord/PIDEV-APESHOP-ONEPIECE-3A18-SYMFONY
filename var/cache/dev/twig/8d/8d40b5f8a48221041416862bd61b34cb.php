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

/* Back/assets/vendor/tinymce/plugins/nonbreaking/plugin.js */
class __TwigTemplate_6d08bf1201e4574a1a76732cd21eb1d7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/nonbreaking/plugin.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/assets/vendor/tinymce/plugins/nonbreaking/plugin.js"));

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

    var getKeyboardSpaces = function (editor) {
      var spaces = editor.getParam('nonbreaking_force_tab', 0);
      if (typeof spaces === 'boolean') {
        return spaces === true ? 3 : 0;
      } else {
        return spaces;
      }
    };
    var wrapNbsps = function (editor) {
      return editor.getParam('nonbreaking_wrap', true, 'boolean');
    };

    var stringRepeat = function (string, repeats) {
      var str = '';
      for (var index = 0; index < repeats; index++) {
        str += string;
      }
      return str;
    };
    var isVisualCharsEnabled = function (editor) {
      return editor.plugins.visualchars ? editor.plugins.visualchars.isEnabled() : false;
    };
    var insertNbsp = function (editor, times) {
      var classes = function () {
        return isVisualCharsEnabled(editor) ? 'mce-nbsp-wrap mce-nbsp' : 'mce-nbsp-wrap';
      };
      var nbspSpan = function () {
        return '<span class=\"' + classes() + '\" contenteditable=\"false\">' + stringRepeat('&nbsp;', times) + '</span>';
      };
      var shouldWrap = wrapNbsps(editor);
      var html = shouldWrap || editor.plugins.visualchars ? nbspSpan() : stringRepeat('&nbsp;', times);
      editor.undoManager.transact(function () {
        return editor.insertContent(html);
      });
    };

    var register\$1 = function (editor) {
      editor.addCommand('mceNonBreaking', function () {
        insertNbsp(editor, 1);
      });
    };

    var global = tinymce.util.Tools.resolve('tinymce.util.VK');

    var setup = function (editor) {
      var spaces = getKeyboardSpaces(editor);
      if (spaces > 0) {
        editor.on('keydown', function (e) {
          if (e.keyCode === global.TAB && !e.isDefaultPrevented()) {
            if (e.shiftKey) {
              return;
            }
            e.preventDefault();
            e.stopImmediatePropagation();
            insertNbsp(editor, spaces);
          }
        });
      }
    };

    var register = function (editor) {
      var onAction = function () {
        return editor.execCommand('mceNonBreaking');
      };
      editor.ui.registry.addButton('nonbreaking', {
        icon: 'non-breaking',
        tooltip: 'Nonbreaking space',
        onAction: onAction
      });
      editor.ui.registry.addMenuItem('nonbreaking', {
        icon: 'non-breaking',
        text: 'Nonbreaking space',
        onAction: onAction
      });
    };

    function Plugin () {
      global\$1.add('nonbreaking', function (editor) {
        register\$1(editor);
        register(editor);
        setup(editor);
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
        return "Back/assets/vendor/tinymce/plugins/nonbreaking/plugin.js";
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

    var getKeyboardSpaces = function (editor) {
      var spaces = editor.getParam('nonbreaking_force_tab', 0);
      if (typeof spaces === 'boolean') {
        return spaces === true ? 3 : 0;
      } else {
        return spaces;
      }
    };
    var wrapNbsps = function (editor) {
      return editor.getParam('nonbreaking_wrap', true, 'boolean');
    };

    var stringRepeat = function (string, repeats) {
      var str = '';
      for (var index = 0; index < repeats; index++) {
        str += string;
      }
      return str;
    };
    var isVisualCharsEnabled = function (editor) {
      return editor.plugins.visualchars ? editor.plugins.visualchars.isEnabled() : false;
    };
    var insertNbsp = function (editor, times) {
      var classes = function () {
        return isVisualCharsEnabled(editor) ? 'mce-nbsp-wrap mce-nbsp' : 'mce-nbsp-wrap';
      };
      var nbspSpan = function () {
        return '<span class=\"' + classes() + '\" contenteditable=\"false\">' + stringRepeat('&nbsp;', times) + '</span>';
      };
      var shouldWrap = wrapNbsps(editor);
      var html = shouldWrap || editor.plugins.visualchars ? nbspSpan() : stringRepeat('&nbsp;', times);
      editor.undoManager.transact(function () {
        return editor.insertContent(html);
      });
    };

    var register\$1 = function (editor) {
      editor.addCommand('mceNonBreaking', function () {
        insertNbsp(editor, 1);
      });
    };

    var global = tinymce.util.Tools.resolve('tinymce.util.VK');

    var setup = function (editor) {
      var spaces = getKeyboardSpaces(editor);
      if (spaces > 0) {
        editor.on('keydown', function (e) {
          if (e.keyCode === global.TAB && !e.isDefaultPrevented()) {
            if (e.shiftKey) {
              return;
            }
            e.preventDefault();
            e.stopImmediatePropagation();
            insertNbsp(editor, spaces);
          }
        });
      }
    };

    var register = function (editor) {
      var onAction = function () {
        return editor.execCommand('mceNonBreaking');
      };
      editor.ui.registry.addButton('nonbreaking', {
        icon: 'non-breaking',
        tooltip: 'Nonbreaking space',
        onAction: onAction
      });
      editor.ui.registry.addMenuItem('nonbreaking', {
        icon: 'non-breaking',
        text: 'Nonbreaking space',
        onAction: onAction
      });
    };

    function Plugin () {
      global\$1.add('nonbreaking', function (editor) {
        register\$1(editor);
        register(editor);
        setup(editor);
      });
    }

    Plugin();

}());
", "Back/assets/vendor/tinymce/plugins/nonbreaking/plugin.js", "C:\\symfony\\website-skeleton\\templates\\Back\\assets\\vendor\\tinymce\\plugins\\nonbreaking\\plugin.js");
    }
}
