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

/* Back/forms/contact.php */
class __TwigTemplate_ec529ba3b1d6dc2e023e9409d4cec1a0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/forms/contact.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back/forms/contact.php"));

        // line 1
        echo "<?php
  /**
  * Requires the \"PHP Email Form\" library
  * The \"PHP Email Form\" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  \$receiving_email_address = 'contact@example.com';

  if( file_exists(\$php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( \$php_email_form );
  } else {
    die( 'Unable to load the \"PHP Email Form\" Library!');
  }

  \$contact = new PHP_Email_Form;
  \$contact->ajax = true;
  
  \$contact->to = \$receiving_email_address;
  \$contact->from_name = \$_POST['name'];
  \$contact->from_email = \$_POST['email'];
  \$contact->subject = \$_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  \$contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  \$contact->add_message( \$_POST['name'], 'From');
  \$contact->add_message( \$_POST['email'], 'Email');
  \$contact->add_message( \$_POST['message'], 'Message', 10);

  echo \$contact->send();
?>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "Back/forms/contact.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
  /**
  * Requires the \"PHP Email Form\" library
  * The \"PHP Email Form\" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  \$receiving_email_address = 'contact@example.com';

  if( file_exists(\$php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( \$php_email_form );
  } else {
    die( 'Unable to load the \"PHP Email Form\" Library!');
  }

  \$contact = new PHP_Email_Form;
  \$contact->ajax = true;
  
  \$contact->to = \$receiving_email_address;
  \$contact->from_name = \$_POST['name'];
  \$contact->from_email = \$_POST['email'];
  \$contact->subject = \$_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  \$contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  \$contact->add_message( \$_POST['name'], 'From');
  \$contact->add_message( \$_POST['email'], 'Email');
  \$contact->add_message( \$_POST['message'], 'Message', 10);

  echo \$contact->send();
?>
", "Back/forms/contact.php", "C:\\symfony\\website-skeleton\\templates\\Back\\forms\\contact.php");
    }
}
