<?php
class FluidCache_SkkProvider_Content_action_newsEintrag_dedd91e2730d7956e24e3de61bcf145e2a78bc46 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['id'] = 'newseintrag';
// Rendering Array
$array2 = array();
$array2['group'] = 'SKK Spezialanfertigung';
$arguments1['options'] = $array2;
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/Content/locallang_newseintrag.xlf';
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
$arguments5['name'] = 'settings.title';
// Rendering Boolean node
$arguments5['required'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments5['label'] = 'Titel';
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
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper
$arguments7 = array();
$arguments7['name'] = 'settings.image';
$arguments7['allowedExtensions'] = 'jpg,jpeg,gif,png';
$arguments7['maxItems'] = '1';
$arguments7['label'] = 'Bild';
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
$arguments7['size'] = 1;
$arguments7['multiple'] = false;
$arguments7['minItems'] = 0;
$arguments7['itemListStyle'] = NULL;
$arguments7['selectedListStyle'] = NULL;
$arguments7['items'] = NULL;
$arguments7['emptyOption'] = false;
$arguments7['translateCsvItems'] = NULL;
$arguments7['itemsProcFunc'] = NULL;
$arguments7['table'] = 'sys_file_reference';
$arguments7['condition'] = NULL;
$arguments7['mm'] = NULL;
$arguments7['foreignField'] = 'uid_foreign';
$arguments7['foreignLabel'] = 'uid_local';
$arguments7['foreignSelector'] = 'uid_local';
$arguments7['foreignSortby'] = 'sorting_foreign';
$arguments7['foreignDefaultSortby'] = '';
$arguments7['foreignTableField'] = 'tablenames';
$arguments7['foreignUnique'] = NULL;
$arguments7['symmetricField'] = '';
$arguments7['symmetricLabel'] = '';
$arguments7['symmetricSortby'] = '';
$arguments7['localizationMode'] = 'select';
$arguments7['localizeChildrenAtParentLocalization'] = true;
$arguments7['disableMovingChildrenWithParent'] = false;
$arguments7['showThumbs'] = true;
$arguments7['matchFields'] = array (
);
$arguments7['oppositeField'] = '';
$arguments7['collapseAll'] = false;
$arguments7['expandSingle'] = false;
$arguments7['newRecordLinkAddTitle'] = true;
$arguments7['newRecordLinkPosition'] = 'top';
$arguments7['useCombination'] = false;
$arguments7['useSortable'] = true;
$arguments7['showPossibleLocalizationRecords'] = false;
$arguments7['showRemovedLocalizationRecords'] = false;
$arguments7['showAllLocalizationLink'] = false;
$arguments7['showSynchronizationLink'] = false;
$arguments7['enabledControls'] = false;
$arguments7['headerThumbnail'] = false;
$arguments7['foreignMatchFields'] = false;
$arguments7['foreignTypes'] = NULL;
$arguments7['levelLinksPosition'] = 'both';
$arguments7['disallowedExtensions'] = '';
$arguments7['createNewRelationLinkTitle'] = 'LLL:EXT:lang/locallang_core.xlf:cm.createNewRelation';
$renderChildrenClosure8 = function() {return NULL;};

$output4 .= FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output4 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper
$arguments9 = array();
$arguments9['name'] = 'settings.text';
// Rendering Boolean node
$arguments9['enableRichText'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments9['label'] = 'Text';
$arguments9['default'] = NULL;
$arguments9['required'] = false;
$arguments9['exclude'] = false;
$arguments9['transform'] = NULL;
$arguments9['enabled'] = true;
$arguments9['requestUpdate'] = false;
$arguments9['displayCond'] = NULL;
$arguments9['inherit'] = true;
$arguments9['inheritEmpty'] = true;
$arguments9['clear'] = false;
$arguments9['variables'] = array (
);
$arguments9['extensionName'] = NULL;
$arguments9['validate'] = 'trim';
$arguments9['cols'] = 85;
$arguments9['rows'] = 10;
$arguments9['defaultExtras'] = '';
$arguments9['renderType'] = '';
$arguments9['format'] = '';
$renderChildrenClosure10 = function() {return NULL;};

$output4 .= FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output4 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments11 = array();
$arguments11['name'] = 'settings.date';
$arguments11['eval'] = 'date';
// Rendering Boolean node
$arguments11['required'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments11['label'] = 'Datum';
$arguments11['default'] = NULL;
$arguments11['exclude'] = false;
$arguments11['transform'] = NULL;
$arguments11['enabled'] = true;
$arguments11['requestUpdate'] = false;
$arguments11['displayCond'] = NULL;
$arguments11['inherit'] = true;
$arguments11['inheritEmpty'] = true;
$arguments11['clear'] = false;
$arguments11['variables'] = array (
);
$arguments11['extensionName'] = NULL;
$arguments11['size'] = 32;
$arguments11['maxCharacters'] = NULL;
$arguments11['minimum'] = NULL;
$arguments11['maximum'] = NULL;
$arguments11['placeholder'] = NULL;
$renderChildrenClosure12 = function() {return NULL;};

$output4 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output4 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments13 = array();
$arguments13['name'] = 'settings.author';
$arguments13['label'] = 'Autor';
$arguments13['default'] = NULL;
$arguments13['required'] = false;
$arguments13['exclude'] = false;
$arguments13['transform'] = NULL;
$arguments13['enabled'] = true;
$arguments13['requestUpdate'] = false;
$arguments13['displayCond'] = NULL;
$arguments13['inherit'] = true;
$arguments13['inheritEmpty'] = true;
$arguments13['clear'] = false;
$arguments13['variables'] = array (
);
$arguments13['extensionName'] = NULL;
$arguments13['eval'] = 'trim';
$arguments13['size'] = 32;
$arguments13['maxCharacters'] = NULL;
$arguments13['minimum'] = NULL;
$arguments13['maximum'] = NULL;
$arguments13['placeholder'] = NULL;
$renderChildrenClosure14 = function() {return NULL;};

$output4 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

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

$output15 = '';

$output15 .= '
	<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'title', $renderingContext);
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = NULL;
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() {return NULL;};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());

$output15 .= (!is_string($value18) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments16['encoding'] !== NULL ? $arguments16['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments16['doubleEncode']));

$output15 .= '</strong><br>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments19 = array();
$arguments19['date'] = NULL;
$arguments19['format'] = '';
$arguments19['base'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'date', $renderingContext);
};

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output15 .= '
';


return $output15;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output21 = '';

$output21 .= '
		';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments22 = array();
$arguments22['name'] = 'image';
$arguments22['value'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\FirstViewHelper
$arguments24 = array();
$arguments24['haystack'] = NULL;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
$arguments26 = array();
$arguments26['field'] = 'settings.image';
$arguments26['table'] = 'tt_content';
$arguments26['record'] = NULL;
$arguments26['uid'] = NULL;
$arguments26['as'] = NULL;
$renderChildrenClosure27 = function() {return NULL;};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper');
$viewHelper28->setArguments($arguments26);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
return $viewHelper28->initializeArgumentsAndRender();
};
return FluidTYPO3\Vhs\ViewHelpers\Iterator\FirstViewHelper::renderStatic($arguments24, isset($arguments24['haystack']) ? function() use ($arguments24) { return $arguments24['haystack']; } : $renderChildrenClosure25, $renderingContext);
};

$output21 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments22, isset($arguments22['value']) ? function() use ($arguments22) { return $arguments22['value']; } : $renderChildrenClosure23, $renderingContext);

$output21 .= '
		<div style="width:50%; margin:auto; margin-bottom: 25px;">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments29 = array();
// Rendering Boolean node
$arguments29['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments29['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'id', $renderingContext);
$arguments29['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'title', $renderingContext);
$arguments29['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'alternative', $renderingContext);
$arguments29['class'] = 'img-responsive';
$arguments29['additionalAttributes'] = NULL;
$arguments29['data'] = NULL;
$arguments29['width'] = NULL;
$arguments29['height'] = NULL;
$arguments29['minWidth'] = NULL;
$arguments29['minHeight'] = NULL;
$arguments29['maxWidth'] = NULL;
$arguments29['maxHeight'] = NULL;
$arguments29['image'] = NULL;
$arguments29['crop'] = NULL;
$arguments29['absolute'] = false;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$arguments29['ismap'] = NULL;
$arguments29['longdesc'] = NULL;
$arguments29['usemap'] = NULL;
$renderChildrenClosure30 = function() {return NULL;};
$viewHelper31 = $self->getViewHelper('$viewHelper31', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper31->setArguments($arguments29);
$viewHelper31->setRenderingContext($renderingContext);
$viewHelper31->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output21 .= $viewHelper31->initializeArgumentsAndRender();

$output21 .= '
		</div>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments32 = array();
$arguments32['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'text', $renderingContext);
};

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output21 .= '<br>
		<i>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments34 = array();
$arguments34['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'author', $renderingContext);
$arguments34['keepQuotes'] = false;
$arguments34['encoding'] = NULL;
$arguments34['doubleEncode'] = true;
$renderChildrenClosure35 = function() {return NULL;};
$value36 = ($arguments34['value'] !== NULL ? $arguments34['value'] : $renderChildrenClosure35());

$output21 .= (!is_string($value36) ? $value36 : htmlspecialchars($value36, ($arguments34['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments34['encoding'] !== NULL ? $arguments34['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments34['doubleEncode']));

$output21 .= '<br>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments37 = array();
$arguments37['format'] = 'd/m/y';
$arguments37['date'] = NULL;
$arguments37['base'] = NULL;
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'date', $renderingContext);
};

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output21 .= '</i>
';


return $output21;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output39 = '';

$output39 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments40 = array();
$arguments40['name'] = 'Content';
$renderChildrenClosure41 = function() {return NULL;};
$viewHelper42 = $self->getViewHelper('$viewHelper42', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper42->setArguments($arguments40);
$viewHelper42->setRenderingContext($renderingContext);
$viewHelper42->setRenderChildrenClosure($renderChildrenClosure41);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output39 .= $viewHelper42->initializeArgumentsAndRender();

$output39 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments43 = array();
$arguments43['name'] = 'Configuration';
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output45 = '';

$output45 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments46 = array();
$arguments46['id'] = 'newseintrag';
// Rendering Array
$array47 = array();
$array47['group'] = 'SKK Spezialanfertigung';
$arguments46['options'] = $array47;
$arguments46['localLanguageFileRelativePath'] = '/Resources/Private/Language/Content/locallang_newseintrag.xlf';
$arguments46['label'] = NULL;
$arguments46['description'] = NULL;
$arguments46['enabled'] = true;
$arguments46['compact'] = false;
$arguments46['variables'] = array (
);
$arguments46['extensionName'] = NULL;
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output49 = '';

$output49 .= '
		<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:flexform tag -->
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments50 = array();
$arguments50['name'] = 'settings.title';
// Rendering Boolean node
$arguments50['required'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments50['label'] = 'Titel';
$arguments50['default'] = NULL;
$arguments50['exclude'] = false;
$arguments50['transform'] = NULL;
$arguments50['enabled'] = true;
$arguments50['requestUpdate'] = false;
$arguments50['displayCond'] = NULL;
$arguments50['inherit'] = true;
$arguments50['inheritEmpty'] = true;
$arguments50['clear'] = false;
$arguments50['variables'] = array (
);
$arguments50['extensionName'] = NULL;
$arguments50['eval'] = 'trim';
$arguments50['size'] = 32;
$arguments50['maxCharacters'] = NULL;
$arguments50['minimum'] = NULL;
$arguments50['maximum'] = NULL;
$arguments50['placeholder'] = NULL;
$renderChildrenClosure51 = function() {return NULL;};

$output49 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper
$arguments52 = array();
$arguments52['name'] = 'settings.image';
$arguments52['allowedExtensions'] = 'jpg,jpeg,gif,png';
$arguments52['maxItems'] = '1';
$arguments52['label'] = 'Bild';
$arguments52['default'] = NULL;
$arguments52['required'] = false;
$arguments52['exclude'] = false;
$arguments52['transform'] = NULL;
$arguments52['enabled'] = true;
$arguments52['requestUpdate'] = false;
$arguments52['displayCond'] = NULL;
$arguments52['inherit'] = true;
$arguments52['inheritEmpty'] = true;
$arguments52['clear'] = false;
$arguments52['variables'] = array (
);
$arguments52['extensionName'] = NULL;
$arguments52['validate'] = 'trim';
$arguments52['size'] = 1;
$arguments52['multiple'] = false;
$arguments52['minItems'] = 0;
$arguments52['itemListStyle'] = NULL;
$arguments52['selectedListStyle'] = NULL;
$arguments52['items'] = NULL;
$arguments52['emptyOption'] = false;
$arguments52['translateCsvItems'] = NULL;
$arguments52['itemsProcFunc'] = NULL;
$arguments52['table'] = 'sys_file_reference';
$arguments52['condition'] = NULL;
$arguments52['mm'] = NULL;
$arguments52['foreignField'] = 'uid_foreign';
$arguments52['foreignLabel'] = 'uid_local';
$arguments52['foreignSelector'] = 'uid_local';
$arguments52['foreignSortby'] = 'sorting_foreign';
$arguments52['foreignDefaultSortby'] = '';
$arguments52['foreignTableField'] = 'tablenames';
$arguments52['foreignUnique'] = NULL;
$arguments52['symmetricField'] = '';
$arguments52['symmetricLabel'] = '';
$arguments52['symmetricSortby'] = '';
$arguments52['localizationMode'] = 'select';
$arguments52['localizeChildrenAtParentLocalization'] = true;
$arguments52['disableMovingChildrenWithParent'] = false;
$arguments52['showThumbs'] = true;
$arguments52['matchFields'] = array (
);
$arguments52['oppositeField'] = '';
$arguments52['collapseAll'] = false;
$arguments52['expandSingle'] = false;
$arguments52['newRecordLinkAddTitle'] = true;
$arguments52['newRecordLinkPosition'] = 'top';
$arguments52['useCombination'] = false;
$arguments52['useSortable'] = true;
$arguments52['showPossibleLocalizationRecords'] = false;
$arguments52['showRemovedLocalizationRecords'] = false;
$arguments52['showAllLocalizationLink'] = false;
$arguments52['showSynchronizationLink'] = false;
$arguments52['enabledControls'] = false;
$arguments52['headerThumbnail'] = false;
$arguments52['foreignMatchFields'] = false;
$arguments52['foreignTypes'] = NULL;
$arguments52['levelLinksPosition'] = 'both';
$arguments52['disallowedExtensions'] = '';
$arguments52['createNewRelationLinkTitle'] = 'LLL:EXT:lang/locallang_core.xlf:cm.createNewRelation';
$renderChildrenClosure53 = function() {return NULL;};

$output49 .= FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output49 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper
$arguments54 = array();
$arguments54['name'] = 'settings.text';
// Rendering Boolean node
$arguments54['enableRichText'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments54['label'] = 'Text';
$arguments54['default'] = NULL;
$arguments54['required'] = false;
$arguments54['exclude'] = false;
$arguments54['transform'] = NULL;
$arguments54['enabled'] = true;
$arguments54['requestUpdate'] = false;
$arguments54['displayCond'] = NULL;
$arguments54['inherit'] = true;
$arguments54['inheritEmpty'] = true;
$arguments54['clear'] = false;
$arguments54['variables'] = array (
);
$arguments54['extensionName'] = NULL;
$arguments54['validate'] = 'trim';
$arguments54['cols'] = 85;
$arguments54['rows'] = 10;
$arguments54['defaultExtras'] = '';
$arguments54['renderType'] = '';
$arguments54['format'] = '';
$renderChildrenClosure55 = function() {return NULL;};

$output49 .= FluidTYPO3\Flux\ViewHelpers\Field\TextViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output49 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments56 = array();
$arguments56['name'] = 'settings.date';
$arguments56['eval'] = 'date';
// Rendering Boolean node
$arguments56['required'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments56['label'] = 'Datum';
$arguments56['default'] = NULL;
$arguments56['exclude'] = false;
$arguments56['transform'] = NULL;
$arguments56['enabled'] = true;
$arguments56['requestUpdate'] = false;
$arguments56['displayCond'] = NULL;
$arguments56['inherit'] = true;
$arguments56['inheritEmpty'] = true;
$arguments56['clear'] = false;
$arguments56['variables'] = array (
);
$arguments56['extensionName'] = NULL;
$arguments56['size'] = 32;
$arguments56['maxCharacters'] = NULL;
$arguments56['minimum'] = NULL;
$arguments56['maximum'] = NULL;
$arguments56['placeholder'] = NULL;
$renderChildrenClosure57 = function() {return NULL;};

$output49 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output49 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments58 = array();
$arguments58['name'] = 'settings.author';
$arguments58['label'] = 'Autor';
$arguments58['default'] = NULL;
$arguments58['required'] = false;
$arguments58['exclude'] = false;
$arguments58['transform'] = NULL;
$arguments58['enabled'] = true;
$arguments58['requestUpdate'] = false;
$arguments58['displayCond'] = NULL;
$arguments58['inherit'] = true;
$arguments58['inheritEmpty'] = true;
$arguments58['clear'] = false;
$arguments58['variables'] = array (
);
$arguments58['extensionName'] = NULL;
$arguments58['eval'] = 'trim';
$arguments58['size'] = 32;
$arguments58['maxCharacters'] = NULL;
$arguments58['minimum'] = NULL;
$arguments58['maximum'] = NULL;
$arguments58['placeholder'] = NULL;
$renderChildrenClosure59 = function() {return NULL;};

$output49 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output49 .= '
	';
return $output49;
};

$output45 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments46, $renderChildrenClosure48, $renderingContext);

$output45 .= '
';
return $output45;
};

$output39 .= '';

$output39 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments60 = array();
$arguments60['name'] = 'Preview';
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output62 = '';

$output62 .= '
	<strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments63 = array();
$arguments63['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'title', $renderingContext);
$arguments63['keepQuotes'] = false;
$arguments63['encoding'] = NULL;
$arguments63['doubleEncode'] = true;
$renderChildrenClosure64 = function() {return NULL;};
$value65 = ($arguments63['value'] !== NULL ? $arguments63['value'] : $renderChildrenClosure64());

$output62 .= (!is_string($value65) ? $value65 : htmlspecialchars($value65, ($arguments63['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments63['encoding'] !== NULL ? $arguments63['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments63['doubleEncode']));

$output62 .= '</strong><br>
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments66 = array();
$arguments66['date'] = NULL;
$arguments66['format'] = '';
$arguments66['base'] = NULL;
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'date', $renderingContext);
};

$output62 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output62 .= '
';
return $output62;
};

$output39 .= '';

$output39 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments68 = array();
$arguments68['name'] = 'Main';
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output70 = '';

$output70 .= '
		';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments71 = array();
$arguments71['name'] = 'image';
$arguments71['value'] = NULL;
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Iterator\FirstViewHelper
$arguments73 = array();
$arguments73['haystack'] = NULL;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
$arguments75 = array();
$arguments75['field'] = 'settings.image';
$arguments75['table'] = 'tt_content';
$arguments75['record'] = NULL;
$arguments75['uid'] = NULL;
$arguments75['as'] = NULL;
$renderChildrenClosure76 = function() {return NULL;};
$viewHelper77 = $self->getViewHelper('$viewHelper77', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper');
$viewHelper77->setArguments($arguments75);
$viewHelper77->setRenderingContext($renderingContext);
$viewHelper77->setRenderChildrenClosure($renderChildrenClosure76);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
return $viewHelper77->initializeArgumentsAndRender();
};
return FluidTYPO3\Vhs\ViewHelpers\Iterator\FirstViewHelper::renderStatic($arguments73, isset($arguments73['haystack']) ? function() use ($arguments73) { return $arguments73['haystack']; } : $renderChildrenClosure74, $renderingContext);
};

$output70 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments71, isset($arguments71['value']) ? function() use ($arguments71) { return $arguments71['value']; } : $renderChildrenClosure72, $renderingContext);

$output70 .= '
		<div style="width:50%; margin:auto; margin-bottom: 25px;">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments78 = array();
// Rendering Boolean node
$arguments78['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments78['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'id', $renderingContext);
$arguments78['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'title', $renderingContext);
$arguments78['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'alternative', $renderingContext);
$arguments78['class'] = 'img-responsive';
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['width'] = NULL;
$arguments78['height'] = NULL;
$arguments78['minWidth'] = NULL;
$arguments78['minHeight'] = NULL;
$arguments78['maxWidth'] = NULL;
$arguments78['maxHeight'] = NULL;
$arguments78['image'] = NULL;
$arguments78['crop'] = NULL;
$arguments78['absolute'] = false;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$arguments78['ismap'] = NULL;
$arguments78['longdesc'] = NULL;
$arguments78['usemap'] = NULL;
$renderChildrenClosure79 = function() {return NULL;};
$viewHelper80 = $self->getViewHelper('$viewHelper80', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper80->setArguments($arguments78);
$viewHelper80->setRenderingContext($renderingContext);
$viewHelper80->setRenderChildrenClosure($renderChildrenClosure79);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output70 .= $viewHelper80->initializeArgumentsAndRender();

$output70 .= '
		</div>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$arguments81 = array();
$arguments81['parseFuncTSPath'] = 'lib.parseFunc_RTE';
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'text', $renderingContext);
};

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output70 .= '<br>
		<i>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments83 = array();
$arguments83['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'author', $renderingContext);
$arguments83['keepQuotes'] = false;
$arguments83['encoding'] = NULL;
$arguments83['doubleEncode'] = true;
$renderChildrenClosure84 = function() {return NULL;};
$value85 = ($arguments83['value'] !== NULL ? $arguments83['value'] : $renderChildrenClosure84());

$output70 .= (!is_string($value85) ? $value85 : htmlspecialchars($value85, ($arguments83['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments83['encoding'] !== NULL ? $arguments83['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments83['doubleEncode']));

$output70 .= '<br>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments86 = array();
$arguments86['format'] = 'd/m/y';
$arguments86['date'] = NULL;
$arguments86['base'] = NULL;
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'date', $renderingContext);
};

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output70 .= '</i>
';
return $output70;
};

$output39 .= '';

$output39 .= '
</div>
';


return $output39;
}


}
#1539017177    35193     