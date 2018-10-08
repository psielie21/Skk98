<?php
class FluidCache_SkkProvider_Standard_action__2156748a24701ed22e15679d125cbfcc75efa720 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['id'] = 'example';
// Rendering Array
$array2 = array();
$array2['group'] = 'FCE';
$arguments1['options'] = $array2;
$arguments1['label'] = NULL;
$arguments1['description'] = NULL;
$arguments1['enabled'] = true;
$arguments1['compact'] = false;
$arguments1['variables'] = array (
);
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments1['extensionName'] = NULL;
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output4 = '';

$output4 .= '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:flexform tag -->
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments5 = array();
$arguments5['name'] = 'settings.helloWorld';
// Rendering Boolean node
$arguments5['required'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments5['label'] = NULL;
$arguments5['default'] = NULL;
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
$arguments5['placeholder'] = NULL;
$renderChildrenClosure6 = function() {return NULL;};

$output4 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

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

$output7 = '';

$output7 .= '
		<!-- If you wish, place custom backend preview content here -->
		<strong>Your Input:</strong><br />
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments8 = array();
$arguments8['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'helloWorld', $renderingContext);
$arguments8['keepQuotes'] = false;
$arguments8['encoding'] = NULL;
$arguments8['doubleEncode'] = true;
$renderChildrenClosure9 = function() {return NULL;};
$value10 = ($arguments8['value'] !== NULL ? $arguments8['value'] : $renderChildrenClosure9());

$output7 .= (!is_string($value10) ? $value10 : htmlspecialchars($value10, ($arguments8['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments8['encoding'] !== NULL ? $arguments8['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments8['doubleEncode']));

$output7 .= '
	';


return $output7;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output11 = '';

$output11 .= '
		<h3>I am a content element!</h3>
		<p>
			My template file is EXT:skk_provider/Resources/Private/Content/Example.html.
		</p>
		<h3>Frontend output</h3>
		<p>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments12 = array();
$arguments12['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'helloWorld', $renderingContext);
$arguments12['keepQuotes'] = false;
$arguments12['encoding'] = NULL;
$arguments12['doubleEncode'] = true;
$renderChildrenClosure13 = function() {return NULL;};
$value14 = ($arguments12['value'] !== NULL ? $arguments12['value'] : $renderChildrenClosure13());

$output11 .= (!is_string($value14) ? $value14 : htmlspecialchars($value14, ($arguments12['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments12['encoding'] !== NULL ? $arguments12['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments12['doubleEncode']));

$output11 .= '
		</p>
	';


return $output11;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output15 = '';

$output15 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments16 = array();
$arguments16['name'] = 'Content';
$renderChildrenClosure17 = function() {return NULL;};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output15 .= $viewHelper18->initializeArgumentsAndRender();

$output15 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments19 = array();
$arguments19['name'] = 'Configuration';
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output21 = '';

$output21 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments22 = array();
$arguments22['id'] = 'example';
// Rendering Array
$array23 = array();
$array23['group'] = 'FCE';
$arguments22['options'] = $array23;
$arguments22['label'] = NULL;
$arguments22['description'] = NULL;
$arguments22['enabled'] = true;
$arguments22['compact'] = false;
$arguments22['variables'] = array (
);
$arguments22['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments22['extensionName'] = NULL;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output25 = '';

$output25 .= '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:flexform tag -->
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments26 = array();
$arguments26['name'] = 'settings.helloWorld';
// Rendering Boolean node
$arguments26['required'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments26['label'] = NULL;
$arguments26['default'] = NULL;
$arguments26['exclude'] = false;
$arguments26['transform'] = NULL;
$arguments26['enabled'] = true;
$arguments26['requestUpdate'] = false;
$arguments26['displayCond'] = NULL;
$arguments26['inherit'] = true;
$arguments26['inheritEmpty'] = true;
$arguments26['clear'] = false;
$arguments26['variables'] = array (
);
$arguments26['extensionName'] = NULL;
$arguments26['eval'] = 'trim';
$arguments26['size'] = 32;
$arguments26['maxCharacters'] = NULL;
$arguments26['minimum'] = NULL;
$arguments26['maximum'] = NULL;
$arguments26['placeholder'] = NULL;
$renderChildrenClosure27 = function() {return NULL;};

$output25 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
		';
return $output25;
};

$output21 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments22, $renderChildrenClosure24, $renderingContext);

$output21 .= '
	';
return $output21;
};

$output15 .= '';

$output15 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments28 = array();
$arguments28['name'] = 'Preview';
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output30 = '';

$output30 .= '
		<!-- If you wish, place custom backend preview content here -->
		<strong>Your Input:</strong><br />
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments31 = array();
$arguments31['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'helloWorld', $renderingContext);
$arguments31['keepQuotes'] = false;
$arguments31['encoding'] = NULL;
$arguments31['doubleEncode'] = true;
$renderChildrenClosure32 = function() {return NULL;};
$value33 = ($arguments31['value'] !== NULL ? $arguments31['value'] : $renderChildrenClosure32());

$output30 .= (!is_string($value33) ? $value33 : htmlspecialchars($value33, ($arguments31['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments31['encoding'] !== NULL ? $arguments31['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments31['doubleEncode']));

$output30 .= '
	';
return $output30;
};

$output15 .= '';

$output15 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments34 = array();
$arguments34['name'] = 'Main';
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output36 = '';

$output36 .= '
		<h3>I am a content element!</h3>
		<p>
			My template file is EXT:skk_provider/Resources/Private/Content/Example.html.
		</p>
		<h3>Frontend output</h3>
		<p>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments37 = array();
$arguments37['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'helloWorld', $renderingContext);
$arguments37['keepQuotes'] = false;
$arguments37['encoding'] = NULL;
$arguments37['doubleEncode'] = true;
$renderChildrenClosure38 = function() {return NULL;};
$value39 = ($arguments37['value'] !== NULL ? $arguments37['value'] : $renderChildrenClosure38());

$output36 .= (!is_string($value39) ? $value39 : htmlspecialchars($value39, ($arguments37['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments37['encoding'] !== NULL ? $arguments37['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments37['doubleEncode']));

$output36 .= '
		</p>
	';
return $output36;
};

$output15 .= '';

$output15 .= '
</div>
';


return $output15;
}


}
#1539020255    11814     