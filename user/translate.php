

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title> Google Translater for Website </title> 
</head> 
<body>
<h2>Your Web Page</h2>
 <p>Click on the dropdown button to translate.</p>
 <p>Translate this page:</p>

<div id="google_translate_element"></div>
 <script type="text/javascript">
  function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
  }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<p class="notranslate"> This Paragraph will remain same because it is using notranslate class.</p>

<p class="translate"> This Paragraph will change because it is using translate class. </p> 
</body>
</html>  