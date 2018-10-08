<?php
class FluidCache_Standalone_template_file_ImageManipulationWizard_c5c46f75a4f7c7e3a655dc15b2a814ac9a0001fc extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'properties.width', $renderingContext));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments4 = array();
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '
		<div class="modal-panel">

			<div class="modal-panel-sidebar modal-panel-sidebar-right">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					<h4 class="modal-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments7 = array();
$arguments7['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.image-manipulation';
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$renderChildrenClosure8 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '</h4>
				</div>
				<div class="modal-body">
					<form class="form">
						<div class="form-group">
							<label>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments9 = array();
$arguments9['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.image-title';
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['htmlEscape'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$renderChildrenClosure10 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output6 .= ':</label>
							<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments11 = array();
$arguments11['value'] = NULL;
$arguments11['keepQuotes'] = false;
$arguments11['encoding'] = NULL;
$arguments11['doubleEncode'] = true;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments13 = array();
// Rendering Boolean node
$arguments13['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'properties.title', $renderingContext));
$arguments13['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'properties.title', $renderingContext);
$arguments13['else'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'name', $renderingContext);
$renderChildrenClosure14 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);
};
$value15 = ($arguments11['value'] !== NULL ? $arguments11['value'] : $renderChildrenClosure12());

$output6 .= (!is_string($value15) ? $value15 : htmlspecialchars($value15, ($arguments11['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments11['encoding'] !== NULL ? $arguments11['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments11['doubleEncode']));

$output6 .= '</p>
						</div>
						<div class="form-group">
							<label>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments16 = array();
$arguments16['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.original-dimensions';
$arguments16['id'] = NULL;
$arguments16['default'] = NULL;
$arguments16['htmlEscape'] = NULL;
$arguments16['arguments'] = NULL;
$arguments16['extensionName'] = NULL;
$renderChildrenClosure17 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output6 .= ':</label>
							<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments18 = array();
$arguments18['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'properties.width', $renderingContext);
$arguments18['keepQuotes'] = false;
$arguments18['encoding'] = NULL;
$arguments18['doubleEncode'] = true;
$renderChildrenClosure19 = function() {return NULL;};
$value20 = ($arguments18['value'] !== NULL ? $arguments18['value'] : $renderChildrenClosure19());

$output6 .= (!is_string($value20) ? $value20 : htmlspecialchars($value20, ($arguments18['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments18['encoding'] !== NULL ? $arguments18['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments18['doubleEncode']));

$output6 .= ' × ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments21 = array();
$arguments21['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'properties.height', $renderingContext);
$arguments21['keepQuotes'] = false;
$arguments21['encoding'] = NULL;
$arguments21['doubleEncode'] = true;
$renderChildrenClosure22 = function() {return NULL;};
$value23 = ($arguments21['value'] !== NULL ? $arguments21['value'] : $renderChildrenClosure22());

$output6 .= (!is_string($value23) ? $value23 : htmlspecialchars($value23, ($arguments21['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments21['encoding'] !== NULL ? $arguments21['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments21['doubleEncode']));

$output6 .= '</p>
						</div>

						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments24 = array();
// Rendering Boolean node
$arguments24['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('ratios'));
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output26 = '';

$output26 .= '
						<div class="form-group">
							<label for="ratio">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments27 = array();
$arguments27['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.aspect-ratio';
$arguments27['id'] = NULL;
$arguments27['default'] = NULL;
$arguments27['htmlEscape'] = NULL;
$arguments27['arguments'] = NULL;
$arguments27['extensionName'] = NULL;
$renderChildrenClosure28 = function() {return NULL;};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '</label>
							<div class="ratio-buttons t3js-ratio-buttons" data-toggle="buttons">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments29 = array();
$arguments29['each'] = $currentVariableContainer->getOrNull('ratios');
$arguments29['as'] = 'ratio';
$arguments29['key'] = 'key';
$arguments29['iteration'] = 'iteration';
$arguments29['reverse'] = false;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
									<label class="btn btn-default" data-method="setAspectRatio" data-option="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments32 = array();
$arguments32['value'] = $currentVariableContainer->getOrNull('key');
$arguments32['keepQuotes'] = false;
$arguments32['encoding'] = NULL;
$arguments32['doubleEncode'] = true;
$renderChildrenClosure33 = function() {return NULL;};
$value34 = ($arguments32['value'] !== NULL ? $arguments32['value'] : $renderChildrenClosure33());

$output31 .= (!is_string($value34) ? $value34 : htmlspecialchars($value34, ($arguments32['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments32['encoding'] !== NULL ? $arguments32['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments32['doubleEncode']));

$output31 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments35 = array();
$arguments35['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.set-aspect-ratio';
$arguments35['id'] = NULL;
$arguments35['default'] = NULL;
$arguments35['htmlEscape'] = NULL;
$arguments35['arguments'] = NULL;
$arguments35['extensionName'] = NULL;
$renderChildrenClosure36 = function() {return NULL;};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output31 .= '"><input class="sr-only" id="aspectRatio';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments37 = array();
$arguments37['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iteration'), 'cycle', $renderingContext);
$arguments37['keepQuotes'] = false;
$arguments37['encoding'] = NULL;
$arguments37['doubleEncode'] = true;
$renderChildrenClosure38 = function() {return NULL;};
$value39 = ($arguments37['value'] !== NULL ? $arguments37['value'] : $renderChildrenClosure38());

$output31 .= (!is_string($value39) ? $value39 : htmlspecialchars($value39, ($arguments37['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments37['encoding'] !== NULL ? $arguments37['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments37['doubleEncode']));

$output31 .= '" name="aspectRatio" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments40 = array();
$arguments40['value'] = $currentVariableContainer->getOrNull('key');
$arguments40['keepQuotes'] = false;
$arguments40['encoding'] = NULL;
$arguments40['doubleEncode'] = true;
$renderChildrenClosure41 = function() {return NULL;};
$value42 = ($arguments40['value'] !== NULL ? $arguments40['value'] : $renderChildrenClosure41());

$output31 .= (!is_string($value42) ? $value42 : htmlspecialchars($value42, ($arguments40['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments40['encoding'] !== NULL ? $arguments40['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments40['doubleEncode']));

$output31 .= '" type="radio"> <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments43 = array();
$arguments43['value'] = $currentVariableContainer->getOrNull('ratio');
$arguments43['keepQuotes'] = false;
$arguments43['encoding'] = NULL;
$arguments43['doubleEncode'] = true;
$renderChildrenClosure44 = function() {return NULL;};
$value45 = ($arguments43['value'] !== NULL ? $arguments43['value'] : $renderChildrenClosure44());

$output31 .= (!is_string($value45) ? $value45 : htmlspecialchars($value45, ($arguments43['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments43['encoding'] !== NULL ? $arguments43['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments43['doubleEncode']));

$output31 .= '</span></label>
								';
return $output31;
};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output26 .= '
							</div>
						</div>
						';
return $output26;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output6 .= '

						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments46 = array();
// Rendering Boolean node
$arguments46['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('zoom'));
$arguments46['then'] = NULL;
$arguments46['else'] = NULL;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output48 = '';

$output48 .= '
						<div class="form-group t3js-setting-zoom">
							<label for="zoom">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments49 = array();
$arguments49['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.zoom';
$arguments49['id'] = NULL;
$arguments49['default'] = NULL;
$arguments49['htmlEscape'] = NULL;
$arguments49['arguments'] = NULL;
$arguments49['extensionName'] = NULL;
$renderChildrenClosure50 = function() {return NULL;};

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '</label>
							<div class="btn-group">
								<button class="btn btn-default" data-method="zoom" data-option="0.1" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments51 = array();
$arguments51['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.zoom-in';
$arguments51['id'] = NULL;
$arguments51['default'] = NULL;
$arguments51['htmlEscape'] = NULL;
$arguments51['arguments'] = NULL;
$arguments51['extensionName'] = NULL;
$renderChildrenClosure52 = function() {return NULL;};

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output48 .= '"><i class="fa fa-search-plus"></i></button>
								<button class="btn btn-default" data-method="zoom" data-option="-0.1" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments53 = array();
$arguments53['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.zoom-out';
$arguments53['id'] = NULL;
$arguments53['default'] = NULL;
$arguments53['htmlEscape'] = NULL;
$arguments53['arguments'] = NULL;
$arguments53['extensionName'] = NULL;
$renderChildrenClosure54 = function() {return NULL;};

$output48 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output48 .= '"><i class="fa fa-search-minus"></i></button>
							</div>
						</div>
						';
return $output48;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output6 .= '

						<div class="form-group">
							<label>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments55 = array();
$arguments55['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.selection';
$arguments55['id'] = NULL;
$arguments55['default'] = NULL;
$arguments55['htmlEscape'] = NULL;
$arguments55['arguments'] = NULL;
$arguments55['extensionName'] = NULL;
$renderChildrenClosure56 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output6 .= '</label>
							<div class="table-fit-block">
								<table class="table table-no-borders table-transparent t3js-image-manipulation-info">
									<tr>
										<td>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments57 = array();
$arguments57['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.crop-x';
$arguments57['id'] = NULL;
$arguments57['default'] = NULL;
$arguments57['htmlEscape'] = NULL;
$arguments57['arguments'] = NULL;
$arguments57['extensionName'] = NULL;
$renderChildrenClosure58 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output6 .= '
										</td>
										<td class="t3js-image-manipulation-info-crop-x"></td>
									</tr>
									<tr>
										<td>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments59 = array();
$arguments59['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.crop-y';
$arguments59['id'] = NULL;
$arguments59['default'] = NULL;
$arguments59['htmlEscape'] = NULL;
$arguments59['arguments'] = NULL;
$arguments59['extensionName'] = NULL;
$renderChildrenClosure60 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output6 .= '
										</td>
										<td class="t3js-image-manipulation-info-crop-y"></td>
									</tr>
									<tr>
										<td>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments61 = array();
$arguments61['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.crop-width';
$arguments61['id'] = NULL;
$arguments61['default'] = NULL;
$arguments61['htmlEscape'] = NULL;
$arguments61['arguments'] = NULL;
$arguments61['extensionName'] = NULL;
$renderChildrenClosure62 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output6 .= '
										</td>
										<td class="t3js-image-manipulation-info-crop-width"></td>
									</tr>
									<tr>
										<td>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments63 = array();
$arguments63['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.crop-height';
$arguments63['id'] = NULL;
$arguments63['default'] = NULL;
$arguments63['htmlEscape'] = NULL;
$arguments63['arguments'] = NULL;
$arguments63['extensionName'] = NULL;
$renderChildrenClosure64 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output6 .= '
										</td>
										<td class="t3js-image-manipulation-info-crop-height"></td>
									</tr>
								</table>
							</div>
							<div class="form-group">
								<button class="btn btn-default" data-method="reset" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments65 = array();
$arguments65['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.reset';
$arguments65['id'] = NULL;
$arguments65['default'] = NULL;
$arguments65['htmlEscape'] = NULL;
$arguments65['arguments'] = NULL;
$arguments65['extensionName'] = NULL;
$renderChildrenClosure66 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output6 .= '"><i class="fa fa-refresh"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments67 = array();
$arguments67['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.reset';
$arguments67['id'] = NULL;
$arguments67['default'] = NULL;
$arguments67['htmlEscape'] = NULL;
$arguments67['arguments'] = NULL;
$arguments67['extensionName'] = NULL;
$renderChildrenClosure68 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output6 .= '</button>
							</div>
						</div>

					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-method="dismiss" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments69 = array();
$arguments69['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.cancel';
$arguments69['id'] = NULL;
$arguments69['default'] = NULL;
$arguments69['htmlEscape'] = NULL;
$arguments69['arguments'] = NULL;
$arguments69['extensionName'] = NULL;
$renderChildrenClosure70 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output6 .= '"><i class="fa fa-remove"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments71 = array();
$arguments71['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.cancel';
$arguments71['id'] = NULL;
$arguments71['default'] = NULL;
$arguments71['htmlEscape'] = NULL;
$arguments71['arguments'] = NULL;
$arguments71['extensionName'] = NULL;
$renderChildrenClosure72 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output6 .= '</button>
					<button class="btn btn-default" data-method="save" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments73 = array();
$arguments73['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.accept';
$arguments73['id'] = NULL;
$arguments73['default'] = NULL;
$arguments73['htmlEscape'] = NULL;
$arguments73['arguments'] = NULL;
$arguments73['extensionName'] = NULL;
$renderChildrenClosure74 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output6 .= '"><i class="fa fa-check"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments75 = array();
$arguments75['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.accept';
$arguments75['id'] = NULL;
$arguments75['default'] = NULL;
$arguments75['htmlEscape'] = NULL;
$arguments75['arguments'] = NULL;
$arguments75['extensionName'] = NULL;
$renderChildrenClosure76 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output6 .= '</button>
				</div>
			</div>

			<div class="modal-panel-body">
				<div class="t3js-cropper-image-container">
					<img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments77 = array();
$arguments77['image'] = $currentVariableContainer->getOrNull('image');
$arguments77['maxWidth'] = '1000';
$arguments77['maxHeight'] = '700';
$arguments77['src'] = NULL;
$arguments77['width'] = NULL;
$arguments77['height'] = NULL;
$arguments77['minWidth'] = NULL;
$arguments77['minHeight'] = NULL;
$arguments77['treatIdAsReference'] = false;
$arguments77['crop'] = NULL;
$arguments77['absolute'] = false;
$renderChildrenClosure78 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output6 .= '"
						 data-original-width="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments79 = array();
$arguments79['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'properties.width', $renderingContext);
$arguments79['keepQuotes'] = false;
$arguments79['encoding'] = NULL;
$arguments79['doubleEncode'] = true;
$renderChildrenClosure80 = function() {return NULL;};
$value81 = ($arguments79['value'] !== NULL ? $arguments79['value'] : $renderChildrenClosure80());

$output6 .= (!is_string($value81) ? $value81 : htmlspecialchars($value81, ($arguments79['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments79['encoding'] !== NULL ? $arguments79['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments79['doubleEncode']));

$output6 .= '" data-original-height="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments82 = array();
$arguments82['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'properties.height', $renderingContext);
$arguments82['keepQuotes'] = false;
$arguments82['encoding'] = NULL;
$arguments82['doubleEncode'] = true;
$renderChildrenClosure83 = function() {return NULL;};
$value84 = ($arguments82['value'] !== NULL ? $arguments82['value'] : $renderChildrenClosure83());

$output6 .= (!is_string($value84) ? $value84 : htmlspecialchars($value84, ($arguments82['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments82['encoding'] !== NULL ? $arguments82['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments82['doubleEncode']));

$output6 .= '" />
				</div>
			</div>

		</div>

	';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments85 = array();
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output87 = '';

$output87 .= '
		<div class="alert alert-danger">
			<h4 class="alert-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments88 = array();
$arguments88['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.no-image-found';
$arguments88['id'] = NULL;
$arguments88['default'] = NULL;
$arguments88['htmlEscape'] = NULL;
$arguments88['arguments'] = NULL;
$arguments88['extensionName'] = NULL;
$renderChildrenClosure89 = function() {return NULL;};

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '</h4>
			<p class="alert-message">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments90 = array();
$arguments90['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.no-image-found-message';
$arguments90['id'] = NULL;
$arguments90['default'] = NULL;
$arguments90['htmlEscape'] = NULL;
$arguments90['arguments'] = NULL;
$arguments90['extensionName'] = NULL;
$renderChildrenClosure91 = function() {return NULL;};

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output87 .= '</p>
		</div>
	';
return $output87;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output3 .= '
';
return $output3;
};
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output92 = '';

$output92 .= '
		<div class="modal-panel">

			<div class="modal-panel-sidebar modal-panel-sidebar-right">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					<h4 class="modal-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments93 = array();
$arguments93['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.image-manipulation';
$arguments93['id'] = NULL;
$arguments93['default'] = NULL;
$arguments93['htmlEscape'] = NULL;
$arguments93['arguments'] = NULL;
$arguments93['extensionName'] = NULL;
$renderChildrenClosure94 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= '</h4>
				</div>
				<div class="modal-body">
					<form class="form">
						<div class="form-group">
							<label>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments95 = array();
$arguments95['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.image-title';
$arguments95['id'] = NULL;
$arguments95['default'] = NULL;
$arguments95['htmlEscape'] = NULL;
$arguments95['arguments'] = NULL;
$arguments95['extensionName'] = NULL;
$renderChildrenClosure96 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output92 .= ':</label>
							<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments97 = array();
$arguments97['value'] = NULL;
$arguments97['keepQuotes'] = false;
$arguments97['encoding'] = NULL;
$arguments97['doubleEncode'] = true;
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments99 = array();
// Rendering Boolean node
$arguments99['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'properties.title', $renderingContext));
$arguments99['then'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'properties.title', $renderingContext);
$arguments99['else'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'name', $renderingContext);
$renderChildrenClosure100 = function() {return NULL;};
return TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);
};
$value101 = ($arguments97['value'] !== NULL ? $arguments97['value'] : $renderChildrenClosure98());

$output92 .= (!is_string($value101) ? $value101 : htmlspecialchars($value101, ($arguments97['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments97['encoding'] !== NULL ? $arguments97['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments97['doubleEncode']));

$output92 .= '</p>
						</div>
						<div class="form-group">
							<label>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments102 = array();
$arguments102['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.original-dimensions';
$arguments102['id'] = NULL;
$arguments102['default'] = NULL;
$arguments102['htmlEscape'] = NULL;
$arguments102['arguments'] = NULL;
$arguments102['extensionName'] = NULL;
$renderChildrenClosure103 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output92 .= ':</label>
							<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments104 = array();
$arguments104['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'properties.width', $renderingContext);
$arguments104['keepQuotes'] = false;
$arguments104['encoding'] = NULL;
$arguments104['doubleEncode'] = true;
$renderChildrenClosure105 = function() {return NULL;};
$value106 = ($arguments104['value'] !== NULL ? $arguments104['value'] : $renderChildrenClosure105());

$output92 .= (!is_string($value106) ? $value106 : htmlspecialchars($value106, ($arguments104['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments104['encoding'] !== NULL ? $arguments104['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments104['doubleEncode']));

$output92 .= ' × ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments107 = array();
$arguments107['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'properties.height', $renderingContext);
$arguments107['keepQuotes'] = false;
$arguments107['encoding'] = NULL;
$arguments107['doubleEncode'] = true;
$renderChildrenClosure108 = function() {return NULL;};
$value109 = ($arguments107['value'] !== NULL ? $arguments107['value'] : $renderChildrenClosure108());

$output92 .= (!is_string($value109) ? $value109 : htmlspecialchars($value109, ($arguments107['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments107['encoding'] !== NULL ? $arguments107['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments107['doubleEncode']));

$output92 .= '</p>
						</div>

						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments110 = array();
// Rendering Boolean node
$arguments110['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('ratios'));
$arguments110['then'] = NULL;
$arguments110['else'] = NULL;
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output112 = '';

$output112 .= '
						<div class="form-group">
							<label for="ratio">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments113 = array();
$arguments113['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.aspect-ratio';
$arguments113['id'] = NULL;
$arguments113['default'] = NULL;
$arguments113['htmlEscape'] = NULL;
$arguments113['arguments'] = NULL;
$arguments113['extensionName'] = NULL;
$renderChildrenClosure114 = function() {return NULL;};

$output112 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output112 .= '</label>
							<div class="ratio-buttons t3js-ratio-buttons" data-toggle="buttons">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments115 = array();
$arguments115['each'] = $currentVariableContainer->getOrNull('ratios');
$arguments115['as'] = 'ratio';
$arguments115['key'] = 'key';
$arguments115['iteration'] = 'iteration';
$arguments115['reverse'] = false;
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output117 = '';

$output117 .= '
									<label class="btn btn-default" data-method="setAspectRatio" data-option="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments118 = array();
$arguments118['value'] = $currentVariableContainer->getOrNull('key');
$arguments118['keepQuotes'] = false;
$arguments118['encoding'] = NULL;
$arguments118['doubleEncode'] = true;
$renderChildrenClosure119 = function() {return NULL;};
$value120 = ($arguments118['value'] !== NULL ? $arguments118['value'] : $renderChildrenClosure119());

$output117 .= (!is_string($value120) ? $value120 : htmlspecialchars($value120, ($arguments118['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments118['encoding'] !== NULL ? $arguments118['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments118['doubleEncode']));

$output117 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments121 = array();
$arguments121['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.set-aspect-ratio';
$arguments121['id'] = NULL;
$arguments121['default'] = NULL;
$arguments121['htmlEscape'] = NULL;
$arguments121['arguments'] = NULL;
$arguments121['extensionName'] = NULL;
$renderChildrenClosure122 = function() {return NULL;};

$output117 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output117 .= '"><input class="sr-only" id="aspectRatio';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments123 = array();
$arguments123['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iteration'), 'cycle', $renderingContext);
$arguments123['keepQuotes'] = false;
$arguments123['encoding'] = NULL;
$arguments123['doubleEncode'] = true;
$renderChildrenClosure124 = function() {return NULL;};
$value125 = ($arguments123['value'] !== NULL ? $arguments123['value'] : $renderChildrenClosure124());

$output117 .= (!is_string($value125) ? $value125 : htmlspecialchars($value125, ($arguments123['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments123['encoding'] !== NULL ? $arguments123['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments123['doubleEncode']));

$output117 .= '" name="aspectRatio" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments126 = array();
$arguments126['value'] = $currentVariableContainer->getOrNull('key');
$arguments126['keepQuotes'] = false;
$arguments126['encoding'] = NULL;
$arguments126['doubleEncode'] = true;
$renderChildrenClosure127 = function() {return NULL;};
$value128 = ($arguments126['value'] !== NULL ? $arguments126['value'] : $renderChildrenClosure127());

$output117 .= (!is_string($value128) ? $value128 : htmlspecialchars($value128, ($arguments126['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments126['encoding'] !== NULL ? $arguments126['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments126['doubleEncode']));

$output117 .= '" type="radio"> <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments129 = array();
$arguments129['value'] = $currentVariableContainer->getOrNull('ratio');
$arguments129['keepQuotes'] = false;
$arguments129['encoding'] = NULL;
$arguments129['doubleEncode'] = true;
$renderChildrenClosure130 = function() {return NULL;};
$value131 = ($arguments129['value'] !== NULL ? $arguments129['value'] : $renderChildrenClosure130());

$output117 .= (!is_string($value131) ? $value131 : htmlspecialchars($value131, ($arguments129['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments129['encoding'] !== NULL ? $arguments129['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments129['doubleEncode']));

$output117 .= '</span></label>
								';
return $output117;
};

$output112 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output112 .= '
							</div>
						</div>
						';
return $output112;
};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output92 .= '

						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments132 = array();
// Rendering Boolean node
$arguments132['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean($currentVariableContainer->getOrNull('zoom'));
$arguments132['then'] = NULL;
$arguments132['else'] = NULL;
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output134 = '';

$output134 .= '
						<div class="form-group t3js-setting-zoom">
							<label for="zoom">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments135 = array();
$arguments135['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.zoom';
$arguments135['id'] = NULL;
$arguments135['default'] = NULL;
$arguments135['htmlEscape'] = NULL;
$arguments135['arguments'] = NULL;
$arguments135['extensionName'] = NULL;
$renderChildrenClosure136 = function() {return NULL;};

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output134 .= '</label>
							<div class="btn-group">
								<button class="btn btn-default" data-method="zoom" data-option="0.1" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments137 = array();
$arguments137['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.zoom-in';
$arguments137['id'] = NULL;
$arguments137['default'] = NULL;
$arguments137['htmlEscape'] = NULL;
$arguments137['arguments'] = NULL;
$arguments137['extensionName'] = NULL;
$renderChildrenClosure138 = function() {return NULL;};

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output134 .= '"><i class="fa fa-search-plus"></i></button>
								<button class="btn btn-default" data-method="zoom" data-option="-0.1" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments139 = array();
$arguments139['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.zoom-out';
$arguments139['id'] = NULL;
$arguments139['default'] = NULL;
$arguments139['htmlEscape'] = NULL;
$arguments139['arguments'] = NULL;
$arguments139['extensionName'] = NULL;
$renderChildrenClosure140 = function() {return NULL;};

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output134 .= '"><i class="fa fa-search-minus"></i></button>
							</div>
						</div>
						';
return $output134;
};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output92 .= '

						<div class="form-group">
							<label>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments141 = array();
$arguments141['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.selection';
$arguments141['id'] = NULL;
$arguments141['default'] = NULL;
$arguments141['htmlEscape'] = NULL;
$arguments141['arguments'] = NULL;
$arguments141['extensionName'] = NULL;
$renderChildrenClosure142 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output92 .= '</label>
							<div class="table-fit-block">
								<table class="table table-no-borders table-transparent t3js-image-manipulation-info">
									<tr>
										<td>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments143 = array();
$arguments143['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.crop-x';
$arguments143['id'] = NULL;
$arguments143['default'] = NULL;
$arguments143['htmlEscape'] = NULL;
$arguments143['arguments'] = NULL;
$arguments143['extensionName'] = NULL;
$renderChildrenClosure144 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output92 .= '
										</td>
										<td class="t3js-image-manipulation-info-crop-x"></td>
									</tr>
									<tr>
										<td>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments145 = array();
$arguments145['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.crop-y';
$arguments145['id'] = NULL;
$arguments145['default'] = NULL;
$arguments145['htmlEscape'] = NULL;
$arguments145['arguments'] = NULL;
$arguments145['extensionName'] = NULL;
$renderChildrenClosure146 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output92 .= '
										</td>
										<td class="t3js-image-manipulation-info-crop-y"></td>
									</tr>
									<tr>
										<td>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments147 = array();
$arguments147['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.crop-width';
$arguments147['id'] = NULL;
$arguments147['default'] = NULL;
$arguments147['htmlEscape'] = NULL;
$arguments147['arguments'] = NULL;
$arguments147['extensionName'] = NULL;
$renderChildrenClosure148 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output92 .= '
										</td>
										<td class="t3js-image-manipulation-info-crop-width"></td>
									</tr>
									<tr>
										<td>
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments149 = array();
$arguments149['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.crop-height';
$arguments149['id'] = NULL;
$arguments149['default'] = NULL;
$arguments149['htmlEscape'] = NULL;
$arguments149['arguments'] = NULL;
$arguments149['extensionName'] = NULL;
$renderChildrenClosure150 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output92 .= '
										</td>
										<td class="t3js-image-manipulation-info-crop-height"></td>
									</tr>
								</table>
							</div>
							<div class="form-group">
								<button class="btn btn-default" data-method="reset" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments151 = array();
$arguments151['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.reset';
$arguments151['id'] = NULL;
$arguments151['default'] = NULL;
$arguments151['htmlEscape'] = NULL;
$arguments151['arguments'] = NULL;
$arguments151['extensionName'] = NULL;
$renderChildrenClosure152 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output92 .= '"><i class="fa fa-refresh"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments153 = array();
$arguments153['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.reset';
$arguments153['id'] = NULL;
$arguments153['default'] = NULL;
$arguments153['htmlEscape'] = NULL;
$arguments153['arguments'] = NULL;
$arguments153['extensionName'] = NULL;
$renderChildrenClosure154 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output92 .= '</button>
							</div>
						</div>

					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-method="dismiss" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments155 = array();
$arguments155['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.cancel';
$arguments155['id'] = NULL;
$arguments155['default'] = NULL;
$arguments155['htmlEscape'] = NULL;
$arguments155['arguments'] = NULL;
$arguments155['extensionName'] = NULL;
$renderChildrenClosure156 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output92 .= '"><i class="fa fa-remove"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments157 = array();
$arguments157['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.cancel';
$arguments157['id'] = NULL;
$arguments157['default'] = NULL;
$arguments157['htmlEscape'] = NULL;
$arguments157['arguments'] = NULL;
$arguments157['extensionName'] = NULL;
$renderChildrenClosure158 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output92 .= '</button>
					<button class="btn btn-default" data-method="save" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments159 = array();
$arguments159['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.accept';
$arguments159['id'] = NULL;
$arguments159['default'] = NULL;
$arguments159['htmlEscape'] = NULL;
$arguments159['arguments'] = NULL;
$arguments159['extensionName'] = NULL;
$renderChildrenClosure160 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments159, $renderChildrenClosure160, $renderingContext);

$output92 .= '"><i class="fa fa-check"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments161 = array();
$arguments161['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.accept';
$arguments161['id'] = NULL;
$arguments161['default'] = NULL;
$arguments161['htmlEscape'] = NULL;
$arguments161['arguments'] = NULL;
$arguments161['extensionName'] = NULL;
$renderChildrenClosure162 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output92 .= '</button>
				</div>
			</div>

			<div class="modal-panel-body">
				<div class="t3js-cropper-image-container">
					<img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$arguments163 = array();
$arguments163['image'] = $currentVariableContainer->getOrNull('image');
$arguments163['maxWidth'] = '1000';
$arguments163['maxHeight'] = '700';
$arguments163['src'] = NULL;
$arguments163['width'] = NULL;
$arguments163['height'] = NULL;
$arguments163['minWidth'] = NULL;
$arguments163['minHeight'] = NULL;
$arguments163['treatIdAsReference'] = false;
$arguments163['crop'] = NULL;
$arguments163['absolute'] = false;
$renderChildrenClosure164 = function() {return NULL;};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output92 .= '"
						 data-original-width="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments165 = array();
$arguments165['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'properties.width', $renderingContext);
$arguments165['keepQuotes'] = false;
$arguments165['encoding'] = NULL;
$arguments165['doubleEncode'] = true;
$renderChildrenClosure166 = function() {return NULL;};
$value167 = ($arguments165['value'] !== NULL ? $arguments165['value'] : $renderChildrenClosure166());

$output92 .= (!is_string($value167) ? $value167 : htmlspecialchars($value167, ($arguments165['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments165['encoding'] !== NULL ? $arguments165['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments165['doubleEncode']));

$output92 .= '" data-original-height="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments168 = array();
$arguments168['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'properties.height', $renderingContext);
$arguments168['keepQuotes'] = false;
$arguments168['encoding'] = NULL;
$arguments168['doubleEncode'] = true;
$renderChildrenClosure169 = function() {return NULL;};
$value170 = ($arguments168['value'] !== NULL ? $arguments168['value'] : $renderChildrenClosure169());

$output92 .= (!is_string($value170) ? $value170 : htmlspecialchars($value170, ($arguments168['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments168['encoding'] !== NULL ? $arguments168['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments168['doubleEncode']));

$output92 .= '" />
				</div>
			</div>

		</div>

	';
return $output92;
};
$arguments1['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output171 = '';

$output171 .= '
		<div class="alert alert-danger">
			<h4 class="alert-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments172 = array();
$arguments172['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.no-image-found';
$arguments172['id'] = NULL;
$arguments172['default'] = NULL;
$arguments172['htmlEscape'] = NULL;
$arguments172['arguments'] = NULL;
$arguments172['extensionName'] = NULL;
$renderChildrenClosure173 = function() {return NULL;};

$output171 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output171 .= '</h4>
			<p class="alert-message">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments174 = array();
$arguments174['key'] = 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.no-image-found-message';
$arguments174['id'] = NULL;
$arguments174['default'] = NULL;
$arguments174['htmlEscape'] = NULL;
$arguments174['arguments'] = NULL;
$arguments174['extensionName'] = NULL;
$renderChildrenClosure175 = function() {return NULL;};

$output171 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext);

$output171 .= '</p>
		</div>
	';
return $output171;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';


return $output0;
}


}
#1518020725    54446     