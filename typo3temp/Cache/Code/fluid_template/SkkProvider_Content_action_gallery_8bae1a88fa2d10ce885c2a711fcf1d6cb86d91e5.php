<?php
class FluidCache_SkkProvider_Content_action_gallery_8bae1a88fa2d10ce885c2a711fcf1d6cb86d91e5 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['id'] = 'gallery';
// Rendering Array
$array2 = array();
$array2['group'] = 'SKK Spezialanfertigung';
$arguments1['options'] = $array2;
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/Content/locallang_gallery.xlf';
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
$arguments5['name'] = 'settings.folder';
// Rendering Boolean node
$arguments5['required'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments5['label'] = 'Kategorie';
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
$arguments7['name'] = 'settings.gallery_images';
$arguments7['allowedExtensions'] = 'jpg,jpeg,gif,png';
// Rendering Boolean node
$arguments7['multiple'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
// Rendering Boolean node
$arguments7['required'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments7['maxItems'] = '512';
$arguments7['minItems'] = '1';
$arguments7['label'] = 'Bilder';
$arguments7['default'] = NULL;
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
		<strong>Ordner: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'folder', $renderingContext);
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = NULL;
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() {return NULL;};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());

$output9 .= (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments10['encoding'] !== NULL ? $arguments10['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments10['doubleEncode']));

$output9 .= '</strong><br />
		Bilder: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments13 = array();
$arguments13['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'gallery_images', $renderingContext);
$arguments13['keepQuotes'] = false;
$arguments13['encoding'] = NULL;
$arguments13['doubleEncode'] = true;
$renderChildrenClosure14 = function() {return NULL;};
$value15 = ($arguments13['value'] !== NULL ? $arguments13['value'] : $renderChildrenClosure14());

$output9 .= (!is_string($value15) ? $value15 : htmlspecialchars($value15, ($arguments13['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments13['encoding'] !== NULL ? $arguments13['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments13['doubleEncode']));

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

$output16 = '';

$output16 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments17 = array();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
$arguments18 = array();
$arguments18['field'] = 'settings.gallery_images';
$arguments18['table'] = 'tt_content';
$arguments18['record'] = NULL;
$arguments18['uid'] = NULL;
$arguments18['as'] = NULL;
$renderChildrenClosure19 = function() {return NULL;};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper');
$viewHelper20->setArguments($arguments18);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
$arguments17['each'] = $viewHelper20->initializeArgumentsAndRender();
$arguments17['as'] = 'image';
$arguments17['key'] = '';
$arguments17['reverse'] = false;
$arguments17['iteration'] = NULL;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output22 = '';

$output22 .= '
    <div class="small ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments23 = array();
$arguments23['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'folder', $renderingContext);
$arguments23['keepQuotes'] = false;
$arguments23['encoding'] = NULL;
$arguments23['doubleEncode'] = true;
$renderChildrenClosure24 = function() {return NULL;};
$value25 = ($arguments23['value'] !== NULL ? $arguments23['value'] : $renderChildrenClosure24());

$output22 .= (!is_string($value25) ? $value25 : htmlspecialchars($value25, ($arguments23['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments23['encoding'] !== NULL ? $arguments23['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments23['doubleEncode']));

$output22 .= '">
      <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments26 = array();
$arguments26['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'url', $renderingContext);
$arguments26['keepQuotes'] = false;
$arguments26['encoding'] = NULL;
$arguments26['doubleEncode'] = true;
$renderChildrenClosure27 = function() {return NULL;};
$value28 = ($arguments26['value'] !== NULL ? $arguments26['value'] : $renderChildrenClosure27());

$output22 .= (!is_string($value28) ? $value28 : htmlspecialchars($value28, ($arguments26['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments26['encoding'] !== NULL ? $arguments26['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments26['doubleEncode']));

$output22 .= '" data-lightbox="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments29 = array();
$arguments29['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'folder', $renderingContext);
$arguments29['keepQuotes'] = false;
$arguments29['encoding'] = NULL;
$arguments29['doubleEncode'] = true;
$renderChildrenClosure30 = function() {return NULL;};
$value31 = ($arguments29['value'] !== NULL ? $arguments29['value'] : $renderChildrenClosure30());

$output22 .= (!is_string($value31) ? $value31 : htmlspecialchars($value31, ($arguments29['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments29['encoding'] !== NULL ? $arguments29['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments29['doubleEncode']));

$output22 .= '">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments32 = array();
// Rendering Boolean node
$arguments32['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments32['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'id', $renderingContext);
$arguments32['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'title', $renderingContext);
$arguments32['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'alternative', $renderingContext);
$arguments32['crop'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'crop', $renderingContext);
$arguments32['additionalAttributes'] = NULL;
$arguments32['data'] = NULL;
$arguments32['width'] = NULL;
$arguments32['height'] = NULL;
$arguments32['minWidth'] = NULL;
$arguments32['minHeight'] = NULL;
$arguments32['maxWidth'] = NULL;
$arguments32['maxHeight'] = NULL;
$arguments32['image'] = NULL;
$arguments32['absolute'] = false;
$arguments32['class'] = NULL;
$arguments32['dir'] = NULL;
$arguments32['id'] = NULL;
$arguments32['lang'] = NULL;
$arguments32['style'] = NULL;
$arguments32['accesskey'] = NULL;
$arguments32['tabindex'] = NULL;
$arguments32['onclick'] = NULL;
$arguments32['ismap'] = NULL;
$arguments32['longdesc'] = NULL;
$arguments32['usemap'] = NULL;
$renderChildrenClosure33 = function() {return NULL;};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper34->setArguments($arguments32);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output22 .= $viewHelper34->initializeArgumentsAndRender();

$output22 .= '
      </a>
    </div>
  ';
return $output22;
};

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments17, $renderChildrenClosure21, $renderingContext);

$output16 .= '
	';


return $output16;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output35 = '';

$output35 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments36 = array();
$arguments36['name'] = 'Content';
$renderChildrenClosure37 = function() {return NULL;};
$viewHelper38 = $self->getViewHelper('$viewHelper38', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper38->setArguments($arguments36);
$viewHelper38->setRenderingContext($renderingContext);
$viewHelper38->setRenderChildrenClosure($renderChildrenClosure37);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output35 .= $viewHelper38->initializeArgumentsAndRender();

$output35 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments39 = array();
$arguments39['name'] = 'Configuration';
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output41 = '';

$output41 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments42 = array();
$arguments42['id'] = 'gallery';
// Rendering Array
$array43 = array();
$array43['group'] = 'SKK Spezialanfertigung';
$arguments42['options'] = $array43;
$arguments42['localLanguageFileRelativePath'] = '/Resources/Private/Language/Content/locallang_gallery.xlf';
$arguments42['label'] = NULL;
$arguments42['description'] = NULL;
$arguments42['enabled'] = true;
$arguments42['compact'] = false;
$arguments42['variables'] = array (
);
$arguments42['extensionName'] = NULL;
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output45 = '';

$output45 .= '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:flexform tag -->
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments46 = array();
$arguments46['name'] = 'settings.folder';
// Rendering Boolean node
$arguments46['required'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments46['label'] = 'Kategorie';
$arguments46['default'] = NULL;
$arguments46['exclude'] = false;
$arguments46['transform'] = NULL;
$arguments46['enabled'] = true;
$arguments46['requestUpdate'] = false;
$arguments46['displayCond'] = NULL;
$arguments46['inherit'] = true;
$arguments46['inheritEmpty'] = true;
$arguments46['clear'] = false;
$arguments46['variables'] = array (
);
$arguments46['extensionName'] = NULL;
$arguments46['eval'] = 'trim';
$arguments46['size'] = 32;
$arguments46['maxCharacters'] = NULL;
$arguments46['minimum'] = NULL;
$arguments46['maximum'] = NULL;
$arguments46['placeholder'] = NULL;
$renderChildrenClosure47 = function() {return NULL;};

$output45 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper
$arguments48 = array();
$arguments48['name'] = 'settings.gallery_images';
$arguments48['allowedExtensions'] = 'jpg,jpeg,gif,png';
// Rendering Boolean node
$arguments48['multiple'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
// Rendering Boolean node
$arguments48['required'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments48['maxItems'] = '512';
$arguments48['minItems'] = '1';
$arguments48['label'] = 'Bilder';
$arguments48['default'] = NULL;
$arguments48['exclude'] = false;
$arguments48['transform'] = NULL;
$arguments48['enabled'] = true;
$arguments48['requestUpdate'] = false;
$arguments48['displayCond'] = NULL;
$arguments48['inherit'] = true;
$arguments48['inheritEmpty'] = true;
$arguments48['clear'] = false;
$arguments48['variables'] = array (
);
$arguments48['extensionName'] = NULL;
$arguments48['validate'] = 'trim';
$arguments48['size'] = 1;
$arguments48['itemListStyle'] = NULL;
$arguments48['selectedListStyle'] = NULL;
$arguments48['items'] = NULL;
$arguments48['emptyOption'] = false;
$arguments48['translateCsvItems'] = NULL;
$arguments48['itemsProcFunc'] = NULL;
$arguments48['table'] = 'sys_file_reference';
$arguments48['condition'] = NULL;
$arguments48['mm'] = NULL;
$arguments48['foreignField'] = 'uid_foreign';
$arguments48['foreignLabel'] = 'uid_local';
$arguments48['foreignSelector'] = 'uid_local';
$arguments48['foreignSortby'] = 'sorting_foreign';
$arguments48['foreignDefaultSortby'] = '';
$arguments48['foreignTableField'] = 'tablenames';
$arguments48['foreignUnique'] = NULL;
$arguments48['symmetricField'] = '';
$arguments48['symmetricLabel'] = '';
$arguments48['symmetricSortby'] = '';
$arguments48['localizationMode'] = 'select';
$arguments48['localizeChildrenAtParentLocalization'] = true;
$arguments48['disableMovingChildrenWithParent'] = false;
$arguments48['showThumbs'] = true;
$arguments48['matchFields'] = array (
);
$arguments48['oppositeField'] = '';
$arguments48['collapseAll'] = false;
$arguments48['expandSingle'] = false;
$arguments48['newRecordLinkAddTitle'] = true;
$arguments48['newRecordLinkPosition'] = 'top';
$arguments48['useCombination'] = false;
$arguments48['useSortable'] = true;
$arguments48['showPossibleLocalizationRecords'] = false;
$arguments48['showRemovedLocalizationRecords'] = false;
$arguments48['showAllLocalizationLink'] = false;
$arguments48['showSynchronizationLink'] = false;
$arguments48['enabledControls'] = false;
$arguments48['headerThumbnail'] = false;
$arguments48['foreignMatchFields'] = false;
$arguments48['foreignTypes'] = NULL;
$arguments48['levelLinksPosition'] = 'both';
$arguments48['disallowedExtensions'] = '';
$arguments48['createNewRelationLinkTitle'] = 'LLL:EXT:lang/locallang_core.xlf:cm.createNewRelation';
$renderChildrenClosure49 = function() {return NULL;};

$output45 .= FluidTYPO3\Flux\ViewHelpers\Field\Inline\FalViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output45 .= '
		';
return $output45;
};

$output41 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments42, $renderChildrenClosure44, $renderingContext);

$output41 .= '
	';
return $output41;
};

$output35 .= '';

$output35 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments50 = array();
$arguments50['name'] = 'Preview';
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output52 = '';

$output52 .= '
		<!-- If you wish, place custom backend preview content here -->
		<strong>Ordner: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments53 = array();
$arguments53['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'folder', $renderingContext);
$arguments53['keepQuotes'] = false;
$arguments53['encoding'] = NULL;
$arguments53['doubleEncode'] = true;
$renderChildrenClosure54 = function() {return NULL;};
$value55 = ($arguments53['value'] !== NULL ? $arguments53['value'] : $renderChildrenClosure54());

$output52 .= (!is_string($value55) ? $value55 : htmlspecialchars($value55, ($arguments53['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments53['encoding'] !== NULL ? $arguments53['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments53['doubleEncode']));

$output52 .= '</strong><br />
		Bilder: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments56 = array();
$arguments56['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'gallery_images', $renderingContext);
$arguments56['keepQuotes'] = false;
$arguments56['encoding'] = NULL;
$arguments56['doubleEncode'] = true;
$renderChildrenClosure57 = function() {return NULL;};
$value58 = ($arguments56['value'] !== NULL ? $arguments56['value'] : $renderChildrenClosure57());

$output52 .= (!is_string($value58) ? $value58 : htmlspecialchars($value58, ($arguments56['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments56['encoding'] !== NULL ? $arguments56['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments56['doubleEncode']));

$output52 .= '
	';
return $output52;
};

$output35 .= '';

$output35 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments59 = array();
$arguments59['name'] = 'Main';
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output61 = '';

$output61 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments62 = array();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
$arguments63 = array();
$arguments63['field'] = 'settings.gallery_images';
$arguments63['table'] = 'tt_content';
$arguments63['record'] = NULL;
$arguments63['uid'] = NULL;
$arguments63['as'] = NULL;
$renderChildrenClosure64 = function() {return NULL;};
$viewHelper65 = $self->getViewHelper('$viewHelper65', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper');
$viewHelper65->setArguments($arguments63);
$viewHelper65->setRenderingContext($renderingContext);
$viewHelper65->setRenderChildrenClosure($renderChildrenClosure64);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\Resources\FalViewHelper
$arguments62['each'] = $viewHelper65->initializeArgumentsAndRender();
$arguments62['as'] = 'image';
$arguments62['key'] = '';
$arguments62['reverse'] = false;
$arguments62['iteration'] = NULL;
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output67 = '';

$output67 .= '
    <div class="small ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments68 = array();
$arguments68['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'folder', $renderingContext);
$arguments68['keepQuotes'] = false;
$arguments68['encoding'] = NULL;
$arguments68['doubleEncode'] = true;
$renderChildrenClosure69 = function() {return NULL;};
$value70 = ($arguments68['value'] !== NULL ? $arguments68['value'] : $renderChildrenClosure69());

$output67 .= (!is_string($value70) ? $value70 : htmlspecialchars($value70, ($arguments68['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments68['encoding'] !== NULL ? $arguments68['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments68['doubleEncode']));

$output67 .= '">
      <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments71 = array();
$arguments71['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'url', $renderingContext);
$arguments71['keepQuotes'] = false;
$arguments71['encoding'] = NULL;
$arguments71['doubleEncode'] = true;
$renderChildrenClosure72 = function() {return NULL;};
$value73 = ($arguments71['value'] !== NULL ? $arguments71['value'] : $renderChildrenClosure72());

$output67 .= (!is_string($value73) ? $value73 : htmlspecialchars($value73, ($arguments71['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments71['encoding'] !== NULL ? $arguments71['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments71['doubleEncode']));

$output67 .= '" data-lightbox="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments74 = array();
$arguments74['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'folder', $renderingContext);
$arguments74['keepQuotes'] = false;
$arguments74['encoding'] = NULL;
$arguments74['doubleEncode'] = true;
$renderChildrenClosure75 = function() {return NULL;};
$value76 = ($arguments74['value'] !== NULL ? $arguments74['value'] : $renderChildrenClosure75());

$output67 .= (!is_string($value76) ? $value76 : htmlspecialchars($value76, ($arguments74['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments74['encoding'] !== NULL ? $arguments74['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments74['doubleEncode']));

$output67 .= '">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments77 = array();
// Rendering Boolean node
$arguments77['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments77['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'id', $renderingContext);
$arguments77['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'title', $renderingContext);
$arguments77['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'alternative', $renderingContext);
$arguments77['crop'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'crop', $renderingContext);
$arguments77['additionalAttributes'] = NULL;
$arguments77['data'] = NULL;
$arguments77['width'] = NULL;
$arguments77['height'] = NULL;
$arguments77['minWidth'] = NULL;
$arguments77['minHeight'] = NULL;
$arguments77['maxWidth'] = NULL;
$arguments77['maxHeight'] = NULL;
$arguments77['image'] = NULL;
$arguments77['absolute'] = false;
$arguments77['class'] = NULL;
$arguments77['dir'] = NULL;
$arguments77['id'] = NULL;
$arguments77['lang'] = NULL;
$arguments77['style'] = NULL;
$arguments77['accesskey'] = NULL;
$arguments77['tabindex'] = NULL;
$arguments77['onclick'] = NULL;
$arguments77['ismap'] = NULL;
$arguments77['longdesc'] = NULL;
$arguments77['usemap'] = NULL;
$renderChildrenClosure78 = function() {return NULL;};
$viewHelper79 = $self->getViewHelper('$viewHelper79', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper79->setArguments($arguments77);
$viewHelper79->setRenderingContext($renderingContext);
$viewHelper79->setRenderChildrenClosure($renderChildrenClosure78);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output67 .= $viewHelper79->initializeArgumentsAndRender();

$output67 .= '
      </a>
    </div>
  ';
return $output67;
};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments62, $renderChildrenClosure66, $renderingContext);

$output61 .= '
	';
return $output61;
};

$output35 .= '';

$output35 .= '
</div>
';


return $output35;
}


}
#1539017177    30051     