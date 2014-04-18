<?php
/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2013
 * @package yii2-markdown
 * @version 1.0.0
 */

use yii\helpers\Html;

?>
<!DOCTYPE html>
<html>
<body>
<h3>DO NOT EDIT THIS FILE</h3>

<p>This view is used to generate the export download form for the Markdown editor.</p>
<?php
echo Html::beginForm();
echo Html::textInput('export_filetype', '');
echo Html::textInput('export_filename', '');
echo Html::textArea('export_content', '');
echo Html::endForm();
?>
</body>
</html>