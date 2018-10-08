<?php
class FluidCache_SkkProvider_Standard_action__73ef12773c37da53612596921715840eb4ccfcac extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Content';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Configuration
 */
public function section_754164850f38c1ecdaf6b8ed894cb192bc36c5f4(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments1 = array();
$arguments1['id'] = 'erfolg';
// Rendering Array
$array2 = array();
$array2['group'] = 'SKK Spezialanfertigung';
$arguments1['options'] = $array2;
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/Content/locallang_erfolg.xlf';
$arguments1['label'] = NULL;
$arguments1['description'] = NULL;
$arguments1['enabled'] = true;
$arguments1['compact'] = false;
$arguments1['variables'] = array (
);
$arguments1['extensionName'] = NULL;
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output4 = '';

$output4 .= '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:flexform tag -->
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments5 = array();
$arguments5['name'] = 'settings.season';
$arguments5['label'] = 'Saison';
$arguments5['placeholder'] = 'Das Endjahr der Saison';
$arguments5['default'] = NULL;
$arguments5['required'] = false;
$arguments5['exclude'] = false;
$arguments5['transform'] = NULL;
$arguments5['enabled'] = true;
$arguments5['requestUpdate'] = false;
$arguments5['displayCond'] = NULL;
$arguments5['inherit'] = true;
$arguments5['inheritEmpty'] = true;
$arguments5['clear'] = false;
$arguments5['variables'] = array (
);
$arguments5['extensionName'] = NULL;
$arguments5['eval'] = 'trim';
$arguments5['size'] = 32;
$arguments5['maxCharacters'] = NULL;
$arguments5['minimum'] = NULL;
$arguments5['maximum'] = NULL;
$renderChildrenClosure6 = function() {return NULL;};

$output4 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper
$arguments7 = array();
$arguments7['name'] = 'settings.text';
$arguments7['label'] = 'Erfolge';
$arguments7['default'] = NULL;
$arguments7['required'] = false;
$arguments7['exclude'] = false;
$arguments7['transform'] = NULL;
$arguments7['enabled'] = true;
$arguments7['requestUpdate'] = false;
$arguments7['displayCond'] = NULL;
$arguments7['inherit'] = true;
$arguments7['inheritEmpty'] = true;
$arguments7['clear'] = false;
$arguments7['variables'] = array (
);
$arguments7['extensionName'] = NULL;
$arguments7['validate'] = 'trim';
$arguments7['cols'] = 85;
$arguments7['rows'] = 10;
$arguments7['defaultExtras'] = '';
$arguments7['enableRichText'] = false;
$arguments7['renderType'] = '';
$arguments7['format'] = '';
$renderChildrenClosure8 = function() {return NULL;};

$output4 .= FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output4 .= '
    ';
return $output4;
};

$output0 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments1, $renderChildrenClosure3, $renderingContext);

$output0 .= '
	';


return $output0;
}
/**
 * section Preview
 */
public function section_f1fbb2b43dca281d0138f4fcc92543ad143ef0b1(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output9 = '';

$output9 .= '
		<!-- If you wish, place custom backend preview content here -->
		<strong>Saison:</strong><br />
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'season', $renderingContext);
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = NULL;
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() {return NULL;};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());

$output9 .= (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments10['encoding'] !== NULL ? $arguments10['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments10['doubleEncode']));

$output9 .= '
	';


return $output9;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output13 = '';

$output13 .= '
    <div class="erfolg-entry" id="Saison';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments14 = array();
$arguments14['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'season', $renderingContext);
$arguments14['keepQuotes'] = false;
$arguments14['encoding'] = NULL;
$arguments14['doubleEncode'] = true;
$renderChildrenClosure15 = function() {return NULL;};
$value16 = ($arguments14['value'] !== NULL ? $arguments14['value'] : $renderChildrenClosure15());

$output13 .= (!is_string($value16) ? $value16 : htmlspecialchars($value16, ($arguments14['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments14['encoding'] !== NULL ? $arguments14['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments14['doubleEncode']));

$output13 .= '">
      <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments17 = array();
$arguments17['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'season', $renderingContext);
$arguments17['keepQuotes'] = false;
$arguments17['encoding'] = NULL;
$arguments17['doubleEncode'] = true;
$renderChildrenClosure18 = function() {return NULL;};
$value19 = ($arguments17['value'] !== NULL ? $arguments17['value'] : $renderChildrenClosure18());

$output13 .= (!is_string($value19) ? $value19 : htmlspecialchars($value19, ($arguments17['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments17['encoding'] !== NULL ? $arguments17['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments17['doubleEncode']));

$output13 .= '</h1>
      <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments20 = array();
$arguments20['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'text', $renderingContext);
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output13 .= '</p>
    </div>
	';


return $output13;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output22 = '';

$output22 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments23 = array();
$arguments23['name'] = 'Content';
$renderChildrenClosure24 = function() {return NULL;};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper25->setArguments($arguments23);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure24);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output22 .= $viewHelper25->initializeArgumentsAndRender();

$output22 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments26 = array();
$arguments26['name'] = 'Configuration';
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output28 = '';

$output28 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments29 = array();
$arguments29['id'] = 'erfolg';
// Rendering Array
$array30 = array();
$array30['group'] = 'SKK Spezialanfertigung';
$arguments29['options'] = $array30;
$arguments29['localLanguageFileRelativePath'] = '/Resources/Private/Language/Content/locallang_erfolg.xlf';
$arguments29['label'] = NULL;
$arguments29['description'] = NULL;
$arguments29['enabled'] = true;
$arguments29['compact'] = false;
$arguments29['variables'] = array (
);
$arguments29['extensionName'] = NULL;
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output32 = '';

$output32 .= '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:flexform tag -->
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments33 = array();
$arguments33['name'] = 'settings.season';
$arguments33['label'] = 'Saison';
$arguments33['placeholder'] = 'Das Endjahr der Saison';
$arguments33['default'] = NULL;
$arguments33['required'] = false;
$arguments33['exclude'] = false;
$arguments33['transform'] = NULL;
$arguments33['enabled'] = true;
$arguments33['requestUpdate'] = false;
$arguments33['displayCond'] = NULL;
$arguments33['inherit'] = true;
$arguments33['inheritEmpty'] = true;
$arguments33['clear'] = false;
$arguments33['variables'] = array (
);
$arguments33['extensionName'] = NULL;
$arguments33['eval'] = 'trim';
$arguments33['size'] = 32;
$arguments33['maxCharacters'] = NULL;
$arguments33['minimum'] = NULL;
$arguments33['maximum'] = NULL;
$renderChildrenClosure34 = function() {return NULL;};

$output32 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper
$arguments35 = array();
$arguments35['name'] = 'settings.text';
$arguments35['label'] = 'Erfolge';
$arguments35['default'] = NULL;
$arguments35['required'] = false;
$arguments35['exclude'] = false;
$arguments35['transform'] = NULL;
$arguments35['enabled'] = true;
$arguments35['requestUpdate'] = false;
$arguments35['displayCond'] = NULL;
$arguments35['inherit'] = true;
$arguments35['inheritEmpty'] = true;
$arguments35['clear'] = false;
$arguments35['variables'] = array (
);
$arguments35['extensionName'] = NULL;
$arguments35['validate'] = 'trim';
$arguments35['cols'] = 85;
$arguments35['rows'] = 10;
$arguments35['defaultExtras'] = '';
$arguments35['enableRichText'] = false;
$arguments35['renderType'] = '';
$arguments35['format'] = '';
$renderChildrenClosure36 = function() {return NULL;};

$output32 .= FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output32 .= '
    ';
return $output32;
};

$output28 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments29, $renderChildrenClosure31, $renderingContext);

$output28 .= '
	';
return $output28;
};

$output22 .= '';

$output22 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments37 = array();
$arguments37['name'] = 'Preview';
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output39 = '';

$output39 .= '
		<!-- If you wish, place custom backend preview content here -->
		<strong>Saison:</strong><br />
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments40 = array();
$arguments40['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'season', $renderingContext);
$arguments40['keepQuotes'] = false;
$arguments40['encoding'] = NULL;
$arguments40['doubleEncode'] = true;
$renderChildrenClosure41 = function() {return NULL;};
$value42 = ($arguments40['value'] !== NULL ? $arguments40['value'] : $renderChildrenClosure41());

$output39 .= (!is_string($value42) ? $value42 : htmlspecialchars($value42, ($arguments40['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments40['encoding'] !== NULL ? $arguments40['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments40['doubleEncode']));

$output39 .= '
	';
return $output39;
};

$output22 .= '';

$output22 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments43 = array();
$arguments43['name'] = 'Main';
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output45 = '';

$output45 .= '
    <div class="erfolg-entry" id="Saison';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments46 = array();
$arguments46['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'season', $renderingContext);
$arguments46['keepQuotes'] = false;
$arguments46['encoding'] = NULL;
$arguments46['doubleEncode'] = true;
$renderChildrenClosure47 = function() {return NULL;};
$value48 = ($arguments46['value'] !== NULL ? $arguments46['value'] : $renderChildrenClosure47());

$output45 .= (!is_string($value48) ? $value48 : htmlspecialchars($value48, ($arguments46['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments46['encoding'] !== NULL ? $arguments46['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments46['doubleEncode']));

$output45 .= '">
      <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments49 = array();
$arguments49['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'season', $renderingContext);
$arguments49['keepQuotes'] = false;
$arguments49['encoding'] = NULL;
$arguments49['doubleEncode'] = true;
$renderChildrenClosure50 = function() {return NULL;};
$value51 = ($arguments49['value'] !== NULL ? $arguments49['value'] : $renderChildrenClosure50());

$output45 .= (!is_string($value51) ? $value51 : htmlspecialchars($value51, ($arguments49['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments49['encoding'] !== NULL ? $arguments49['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments49['doubleEncode']));

$output45 .= '</h1>
      <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments52 = array();
$arguments52['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'text', $renderingContext);
};

$output45 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output45 .= '</p>
    </div>
	';
return $output45;
};

$output22 .= '';

$output22 .= '
</div>
';


return $output22;
}


}
#1539020255    16626     