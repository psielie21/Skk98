<?php
class FluidCache_Fluidcontent_Content_action_error_27007abc64e9c54237cbfb64bee62fd6db0edeff extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['id'] = 'error';
$arguments1['label'] = NULL;
$arguments1['description'] = NULL;
$arguments1['enabled'] = true;
$arguments1['compact'] = false;
$arguments1['variables'] = array (
);
$arguments1['options'] = NULL;
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\CustomViewHelper
$arguments4 = array();
$arguments4['name'] = 'info';
$arguments4['label'] = NULL;
$arguments4['default'] = NULL;
$arguments4['required'] = false;
$arguments4['exclude'] = false;
$arguments4['transform'] = NULL;
$arguments4['enabled'] = true;
$arguments4['requestUpdate'] = false;
$arguments4['displayCond'] = NULL;
$arguments4['inherit'] = true;
$arguments4['inheritEmpty'] = true;
$arguments4['clear'] = false;
$arguments4['variables'] = array (
);
$arguments4['extensionName'] = NULL;
$arguments4['userFunc'] = 'FluidTYPO3\\Flux\\UserFunction\\HtmlOutput->renderField';
$arguments4['arguments'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '

			<div class="alert alert-warning">
				<div class="media">
					<div class="media-left">
						<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-exclamation fa-stack-1x"></i>
						</span>
					</div>
					<div class="media-body">
						<h4 class="alert-title">Warning</h4>

						<div class="alert-message">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments7 = array();
$arguments7['key'] = 'tt_content.tx_fed_fcefile.emptyMessageinBackend';
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
						</div>
					</div>
				</div>
			</div>

		';
return $output6;
};

$output3 .= FluidTYPO3\Flux\ViewHelpers\Field\CustomViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
	';
return $output3;
};

$output0 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

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

	<div class="alert alert-warning">
		<div class="media">
			<div class="media-left">
						<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-exclamation fa-stack-1x"></i>
						</span>
			</div>
			<div class="media-body">
				<h4 class="alert-title">Warning</h4>

				<div class="alert-message">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments10 = array();
$arguments10['key'] = 'tt_content.tx_fed_fcefile.emptyMessageinBackend';
$arguments10['id'] = NULL;
$arguments10['default'] = NULL;
$arguments10['htmlEscape'] = NULL;
$arguments10['arguments'] = NULL;
$arguments10['extensionName'] = NULL;
$renderChildrenClosure11 = function() {return NULL;};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
				</div>
			</div>
		</div>
	</div>

';


return $output9;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output12 = '';

$output12 .= '
	<div style="background:#ff0; color:#000; padding: 20px; margin:20px;">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments13 = array();
$arguments13['key'] = 'tt_content.tx_fed_fcefile.emptyMessage';
$arguments13['id'] = NULL;
$arguments13['default'] = NULL;
$arguments13['htmlEscape'] = NULL;
$arguments13['arguments'] = NULL;
$arguments13['extensionName'] = NULL;
$renderChildrenClosure14 = function() {return NULL;};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
		<br> <br> Content uid: [';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments15 = array();
$arguments15['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('record'), 'uid', $renderingContext);
$arguments15['keepQuotes'] = false;
$arguments15['encoding'] = NULL;
$arguments15['doubleEncode'] = true;
$renderChildrenClosure16 = function() {return NULL;};
$value17 = ($arguments15['value'] !== NULL ? $arguments15['value'] : $renderChildrenClosure16());

$output12 .= (!is_string($value17) ? $value17 : htmlspecialchars($value17, ($arguments15['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments15['encoding'] !== NULL ? $arguments15['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments15['doubleEncode']));

$output12 .= ']
	</div>
';


return $output12;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output18 = '';

$output18 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments19 = array();
$arguments19['name'] = 'Content';
$renderChildrenClosure20 = function() {return NULL;};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper21->setArguments($arguments19);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output18 .= $viewHelper21->initializeArgumentsAndRender();

$output18 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments22 = array();
$arguments22['name'] = 'Configuration';
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output24 = '';

$output24 .= '
	';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments25 = array();
$arguments25['id'] = 'error';
$arguments25['label'] = NULL;
$arguments25['description'] = NULL;
$arguments25['enabled'] = true;
$arguments25['compact'] = false;
$arguments25['variables'] = array (
);
$arguments25['options'] = NULL;
$arguments25['localLanguageFileRelativePath'] = '/Resources/Private/Language/locallang.xlf';
$arguments25['extensionName'] = NULL;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output27 = '';

$output27 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\CustomViewHelper
$arguments28 = array();
$arguments28['name'] = 'info';
$arguments28['label'] = NULL;
$arguments28['default'] = NULL;
$arguments28['required'] = false;
$arguments28['exclude'] = false;
$arguments28['transform'] = NULL;
$arguments28['enabled'] = true;
$arguments28['requestUpdate'] = false;
$arguments28['displayCond'] = NULL;
$arguments28['inherit'] = true;
$arguments28['inheritEmpty'] = true;
$arguments28['clear'] = false;
$arguments28['variables'] = array (
);
$arguments28['extensionName'] = NULL;
$arguments28['userFunc'] = 'FluidTYPO3\\Flux\\UserFunction\\HtmlOutput->renderField';
$arguments28['arguments'] = NULL;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output30 = '';

$output30 .= '

			<div class="alert alert-warning">
				<div class="media">
					<div class="media-left">
						<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-exclamation fa-stack-1x"></i>
						</span>
					</div>
					<div class="media-body">
						<h4 class="alert-title">Warning</h4>

						<div class="alert-message">
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments31 = array();
$arguments31['key'] = 'tt_content.tx_fed_fcefile.emptyMessageinBackend';
$arguments31['id'] = NULL;
$arguments31['default'] = NULL;
$arguments31['htmlEscape'] = NULL;
$arguments31['arguments'] = NULL;
$arguments31['extensionName'] = NULL;
$renderChildrenClosure32 = function() {return NULL;};

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
						</div>
					</div>
				</div>
			</div>

		';
return $output30;
};

$output27 .= FluidTYPO3\Flux\ViewHelpers\Field\CustomViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '
	';
return $output27;
};

$output24 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
';
return $output24;
};

$output18 .= '';

$output18 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments33 = array();
$arguments33['name'] = 'Preview';
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output35 = '';

$output35 .= '

	<div class="alert alert-warning">
		<div class="media">
			<div class="media-left">
						<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-exclamation fa-stack-1x"></i>
						</span>
			</div>
			<div class="media-body">
				<h4 class="alert-title">Warning</h4>

				<div class="alert-message">
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments36 = array();
$arguments36['key'] = 'tt_content.tx_fed_fcefile.emptyMessageinBackend';
$arguments36['id'] = NULL;
$arguments36['default'] = NULL;
$arguments36['htmlEscape'] = NULL;
$arguments36['arguments'] = NULL;
$arguments36['extensionName'] = NULL;
$renderChildrenClosure37 = function() {return NULL;};

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
				</div>
			</div>
		</div>
	</div>

';
return $output35;
};

$output18 .= '';

$output18 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments38 = array();
$arguments38['name'] = 'Main';
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output40 = '';

$output40 .= '
	<div style="background:#ff0; color:#000; padding: 20px; margin:20px;">
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments41 = array();
$arguments41['key'] = 'tt_content.tx_fed_fcefile.emptyMessage';
$arguments41['id'] = NULL;
$arguments41['default'] = NULL;
$arguments41['htmlEscape'] = NULL;
$arguments41['arguments'] = NULL;
$arguments41['extensionName'] = NULL;
$renderChildrenClosure42 = function() {return NULL;};

$output40 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output40 .= '
		<br> <br> Content uid: [';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments43 = array();
$arguments43['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('record'), 'uid', $renderingContext);
$arguments43['keepQuotes'] = false;
$arguments43['encoding'] = NULL;
$arguments43['doubleEncode'] = true;
$renderChildrenClosure44 = function() {return NULL;};
$value45 = ($arguments43['value'] !== NULL ? $arguments43['value'] : $renderChildrenClosure44());

$output40 .= (!is_string($value45) ? $value45 : htmlspecialchars($value45, ($arguments43['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments43['encoding'] !== NULL ? $arguments43['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments43['doubleEncode']));

$output40 .= ']
	</div>
';
return $output40;
};

$output18 .= '';


return $output18;
}


}
#1518021104    14065     