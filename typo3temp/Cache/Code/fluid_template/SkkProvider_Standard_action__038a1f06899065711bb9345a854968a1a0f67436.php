<?php
class FluidCache_SkkProvider_Standard_action__038a1f06899065711bb9345a854968a1a0f67436 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['id'] = 'bloggroup';
// Rendering Array
$array2 = array();
$array2['group'] = 'Mannschaften';
$arguments1['options'] = $array2;
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/Content/locallang_bloggroup.xlf';
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
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\RelationViewHelper
$arguments5 = array();
$arguments5['name'] = 'articles';
$arguments5['label'] = 'Gruppe von Blog Einträgen';
// Rendering Boolean node
$arguments5['multiple'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments5['size'] = '6';
$arguments5['condition'] = 'AND doktype = \'254\' ';
$arguments5['table'] = 'pages';
$arguments5['minItems'] = '1';
$arguments5['maxItems'] = '1';
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
$arguments5['validate'] = 'trim';
$arguments5['itemListStyle'] = NULL;
$arguments5['selectedListStyle'] = NULL;
$arguments5['items'] = NULL;
$arguments5['emptyOption'] = false;
$arguments5['translateCsvItems'] = NULL;
$arguments5['itemsProcFunc'] = NULL;
$arguments5['mm'] = NULL;
$arguments5['foreignField'] = '';
$arguments5['foreignLabel'] = '';
$arguments5['foreignSelector'] = NULL;
$arguments5['foreignSortby'] = '';
$arguments5['foreignDefaultSortby'] = '';
$arguments5['foreignTableField'] = '';
$arguments5['foreignUnique'] = NULL;
$arguments5['symmetricField'] = '';
$arguments5['symmetricLabel'] = '';
$arguments5['symmetricSortby'] = '';
$arguments5['localizationMode'] = '';
$arguments5['localizeChildrenAtParentLocalization'] = false;
$arguments5['disableMovingChildrenWithParent'] = false;
$arguments5['showThumbs'] = true;
$arguments5['matchFields'] = array (
);
$arguments5['oppositeField'] = '';
$renderChildrenClosure6 = function() {return NULL;};

$output4 .= FluidTYPO3\Flux\ViewHelpers\Field\RelationViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

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
		<strong>Bloggruppe</strong><br />
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$arguments8 = array();
$arguments8['title'] = NULL;
$arguments8['maxDepth'] = 8;
$arguments8['plainText'] = false;
$arguments8['ansiColors'] = false;
$arguments8['inline'] = false;
$arguments8['blacklistedClassNames'] = NULL;
$arguments8['blacklistedPropertyNames'] = NULL;
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = $currentVariableContainer->getOrNull('articles');
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = NULL;
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() {return NULL;};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());
return (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments10['encoding'] !== NULL ? $arguments10['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments10['doubleEncode']));
};

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

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

$output13 = '';

$output13 .= '

    <div class="blog-container" id="blog-container">
			';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments14 = array();
$arguments14['pageUid'] = $currentVariableContainer->getOrNull('articles');
$arguments14['additionalAttributes'] = NULL;
$arguments14['data'] = NULL;
$arguments14['class'] = NULL;
$arguments14['dir'] = NULL;
$arguments14['id'] = NULL;
$arguments14['lang'] = NULL;
$arguments14['style'] = NULL;
$arguments14['title'] = NULL;
$arguments14['accesskey'] = NULL;
$arguments14['tabindex'] = NULL;
$arguments14['onclick'] = NULL;
$arguments14['forceClosingTag'] = false;
$arguments14['hideIfEmpty'] = false;
$arguments14['contenteditable'] = NULL;
$arguments14['contextmenu'] = NULL;
$arguments14['draggable'] = NULL;
$arguments14['dropzone'] = NULL;
$arguments14['translate'] = NULL;
$arguments14['spellcheck'] = NULL;
$arguments14['hidden'] = NULL;
$arguments14['showAccessProtected'] = false;
$arguments14['classAccessProtected'] = 'protected';
$arguments14['classAccessGranted'] = 'access-granted';
$arguments14['useShortcutUid'] = NULL;
$arguments14['useShortcutTarget'] = NULL;
$arguments14['useShortcutData'] = false;
$arguments14['tagName'] = 'ul';
$arguments14['tagNameChildren'] = 'li';
$arguments14['entryLevel'] = 0;
$arguments14['levels'] = 1;
$arguments14['expandAll'] = false;
$arguments14['classFirst'] = '';
$arguments14['classLast'] = '';
$arguments14['classActive'] = 'active';
$arguments14['classCurrent'] = 'current';
$arguments14['classHasSubpages'] = 'sub';
$arguments14['substElementUid'] = false;
$arguments14['showHiddenInMenu'] = false;
$arguments14['showCurrent'] = true;
$arguments14['linkCurrent'] = true;
$arguments14['linkActive'] = true;
$arguments14['titleFields'] = 'nav_title,title';
$arguments14['includeAnchorTitle'] = true;
$arguments14['includeSpacers'] = false;
$arguments14['deferred'] = false;
$arguments14['as'] = 'menu';
$arguments14['rootLineAs'] = 'rootLine';
$arguments14['excludePages'] = '';
$arguments14['forceAbsoluteUrl'] = false;
$arguments14['doktypes'] = '';
$arguments14['divider'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output16 = '';

$output16 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments17 = array();
$arguments17['each'] = $currentVariableContainer->getOrNull('menu');
$arguments17['as'] = 'item';
// Rendering Boolean node
$arguments17['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments17['iteration'] = 'iterator';
$arguments17['key'] = '';
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output19 = '';

$output19 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments20 = array();
// Rendering Boolean node
$arguments20['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext), 5);
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output22 = '';

$output22 .= '
						';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments23 = array();
$arguments23['name'] = 'content';
$arguments23['value'] = NULL;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments25 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments26 = array();
$arguments26['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments26['keepQuotes'] = false;
$arguments26['encoding'] = NULL;
$arguments26['doubleEncode'] = true;
$renderChildrenClosure27 = function() {return NULL;};
$value28 = ($arguments26['value'] !== NULL ? $arguments26['value'] : $renderChildrenClosure27());
$arguments25['pageUid'] = (!is_string($value28) ? $value28 : htmlspecialchars($value28, ($arguments26['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments26['encoding'] !== NULL ? $arguments26['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments26['doubleEncode']));
$arguments25['column'] = '0';
$arguments25['order'] = 'sorting';
$arguments25['sortDirection'] = 'ASC';
$arguments25['contentUids'] = NULL;
$arguments25['sectionIndexOnly'] = false;
$arguments25['loadRegister'] = NULL;
$arguments25['render'] = false;
$arguments25['hideUntranslated'] = false;
$arguments25['limit'] = NULL;
$arguments25['slide'] = 0;
$arguments25['slideCollect'] = 0;
$arguments25['slideCollectReverse'] = false;
$renderChildrenClosure29 = function() {return NULL;};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper30->setArguments($arguments25);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper30->initializeArgumentsAndRender();
};

$output22 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments23, isset($arguments23['value']) ? function() use ($arguments23) { return $arguments23['value']; } : $renderChildrenClosure24, $renderingContext);

$output22 .= '

						';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments31 = array();
$arguments31['table'] = 'tt_content';
$arguments31['field'] = 'pi_flexform';
$arguments31['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments31['as'] = 'flexformData';
$arguments31['record'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output33 = '';

$output33 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$arguments34 = array();
$arguments34['title'] = NULL;
$arguments34['maxDepth'] = 8;
$arguments34['plainText'] = false;
$arguments34['ansiColors'] = false;
$arguments34['inline'] = false;
$arguments34['blacklistedClassNames'] = NULL;
$arguments34['blacklistedPropertyNames'] = NULL;
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments36 = array();
$arguments36['value'] = $currentVariableContainer->getOrNull('flexformData');
$arguments36['keepQuotes'] = false;
$arguments36['encoding'] = NULL;
$arguments36['doubleEncode'] = true;
$renderChildrenClosure37 = function() {return NULL;};
$value38 = ($arguments36['value'] !== NULL ? $arguments36['value'] : $renderChildrenClosure37());
return (!is_string($value38) ? $value38 : htmlspecialchars($value38, ($arguments36['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments36['encoding'] !== NULL ? $arguments36['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments36['doubleEncode']));
};

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
								<div class="blog">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments39 = array();
// Rendering Boolean node
$arguments39['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments39['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.image', $renderingContext);
$arguments39['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'settings.title', $renderingContext);
$arguments39['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'settings.alternative', $renderingContext);
$arguments39['crop'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'settings.crop', $renderingContext);
$arguments39['class'] = 'img-responsive';
$arguments39['additionalAttributes'] = NULL;
$arguments39['data'] = NULL;
$arguments39['width'] = NULL;
$arguments39['height'] = NULL;
$arguments39['minWidth'] = NULL;
$arguments39['minHeight'] = NULL;
$arguments39['maxWidth'] = NULL;
$arguments39['maxHeight'] = NULL;
$arguments39['image'] = NULL;
$arguments39['absolute'] = false;
$arguments39['dir'] = NULL;
$arguments39['id'] = NULL;
$arguments39['lang'] = NULL;
$arguments39['style'] = NULL;
$arguments39['accesskey'] = NULL;
$arguments39['tabindex'] = NULL;
$arguments39['onclick'] = NULL;
$arguments39['ismap'] = NULL;
$arguments39['longdesc'] = NULL;
$arguments39['usemap'] = NULL;
$renderChildrenClosure40 = function() {return NULL;};
$viewHelper41 = $self->getViewHelper('$viewHelper41', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper41->setArguments($arguments39);
$viewHelper41->setRenderingContext($renderingContext);
$viewHelper41->setRenderChildrenClosure($renderChildrenClosure40);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output33 .= $viewHelper41->initializeArgumentsAndRender();

$output33 .= '<br/>
									<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments42 = array();
$arguments42['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments42['keepQuotes'] = false;
$arguments42['encoding'] = NULL;
$arguments42['doubleEncode'] = true;
$renderChildrenClosure43 = function() {return NULL;};
$value44 = ($arguments42['value'] !== NULL ? $arguments42['value'] : $renderChildrenClosure43());

$output33 .= (!is_string($value44) ? $value44 : htmlspecialchars($value44, ($arguments42['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments42['encoding'] !== NULL ? $arguments42['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments42['doubleEncode']));

$output33 .= '</h2>
									<p class="collapsed">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments45 = array();
$arguments45['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.text', $renderingContext);
$arguments45['keepQuotes'] = false;
$arguments45['encoding'] = NULL;
$arguments45['doubleEncode'] = true;
$renderChildrenClosure46 = function() {return NULL;};
$value47 = ($arguments45['value'] !== NULL ? $arguments45['value'] : $renderChildrenClosure46());

$output33 .= (!is_string($value47) ? $value47 : htmlspecialchars($value47, ($arguments45['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments45['encoding'] !== NULL ? $arguments45['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments45['doubleEncode']));

$output33 .= '
									</p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments48 = array();
$arguments48['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'pid', $renderingContext);
$arguments48['target'] = '';
$arguments48['class'] = '';
$arguments48['title'] = '';
$arguments48['additionalParams'] = '';
$arguments48['additionalAttributes'] = array (
);
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Mehr...';
};

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output33 .= '
								</div>
					';
return $output33;
};

$output22 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output22 .= '
					';
return $output22;
};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
				';
return $output19;
};

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
			';
return $output16;
};
$viewHelper50 = $self->getViewHelper('$viewHelper50', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper50->setArguments($arguments14);
$viewHelper50->setRenderingContext($renderingContext);
$viewHelper50->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output13 .= $viewHelper50->initializeArgumentsAndRender();

$output13 .= '
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

$output51 = '';

$output51 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments52 = array();
$arguments52['name'] = 'Content';
$renderChildrenClosure53 = function() {return NULL;};
$viewHelper54 = $self->getViewHelper('$viewHelper54', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper54->setArguments($arguments52);
$viewHelper54->setRenderingContext($renderingContext);
$viewHelper54->setRenderChildrenClosure($renderChildrenClosure53);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output51 .= $viewHelper54->initializeArgumentsAndRender();

$output51 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments55 = array();
$arguments55['name'] = 'Configuration';
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output57 = '';

$output57 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments58 = array();
$arguments58['id'] = 'bloggroup';
// Rendering Array
$array59 = array();
$array59['group'] = 'Mannschaften';
$arguments58['options'] = $array59;
$arguments58['localLanguageFileRelativePath'] = '/Resources/Private/Language/Content/locallang_bloggroup.xlf';
$arguments58['label'] = NULL;
$arguments58['description'] = NULL;
$arguments58['enabled'] = true;
$arguments58['compact'] = false;
$arguments58['variables'] = array (
);
$arguments58['extensionName'] = NULL;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output61 = '';

$output61 .= '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:flexform tag -->
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\RelationViewHelper
$arguments62 = array();
$arguments62['name'] = 'articles';
$arguments62['label'] = 'Gruppe von Blog Einträgen';
// Rendering Boolean node
$arguments62['multiple'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments62['size'] = '6';
$arguments62['condition'] = 'AND doktype = \'254\' ';
$arguments62['table'] = 'pages';
$arguments62['minItems'] = '1';
$arguments62['maxItems'] = '1';
$arguments62['default'] = NULL;
$arguments62['required'] = false;
$arguments62['exclude'] = false;
$arguments62['transform'] = NULL;
$arguments62['enabled'] = true;
$arguments62['requestUpdate'] = false;
$arguments62['displayCond'] = NULL;
$arguments62['inherit'] = true;
$arguments62['inheritEmpty'] = true;
$arguments62['clear'] = false;
$arguments62['variables'] = array (
);
$arguments62['extensionName'] = NULL;
$arguments62['validate'] = 'trim';
$arguments62['itemListStyle'] = NULL;
$arguments62['selectedListStyle'] = NULL;
$arguments62['items'] = NULL;
$arguments62['emptyOption'] = false;
$arguments62['translateCsvItems'] = NULL;
$arguments62['itemsProcFunc'] = NULL;
$arguments62['mm'] = NULL;
$arguments62['foreignField'] = '';
$arguments62['foreignLabel'] = '';
$arguments62['foreignSelector'] = NULL;
$arguments62['foreignSortby'] = '';
$arguments62['foreignDefaultSortby'] = '';
$arguments62['foreignTableField'] = '';
$arguments62['foreignUnique'] = NULL;
$arguments62['symmetricField'] = '';
$arguments62['symmetricLabel'] = '';
$arguments62['symmetricSortby'] = '';
$arguments62['localizationMode'] = '';
$arguments62['localizeChildrenAtParentLocalization'] = false;
$arguments62['disableMovingChildrenWithParent'] = false;
$arguments62['showThumbs'] = true;
$arguments62['matchFields'] = array (
);
$arguments62['oppositeField'] = '';
$renderChildrenClosure63 = function() {return NULL;};

$output61 .= FluidTYPO3\Flux\ViewHelpers\Field\RelationViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
		';
return $output61;
};

$output57 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments58, $renderChildrenClosure60, $renderingContext);

$output57 .= '
	';
return $output57;
};

$output51 .= '';

$output51 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments64 = array();
$arguments64['name'] = 'Preview';
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output66 = '';

$output66 .= '
		<strong>Bloggruppe</strong><br />
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$arguments67 = array();
$arguments67['title'] = NULL;
$arguments67['maxDepth'] = 8;
$arguments67['plainText'] = false;
$arguments67['ansiColors'] = false;
$arguments67['inline'] = false;
$arguments67['blacklistedClassNames'] = NULL;
$arguments67['blacklistedPropertyNames'] = NULL;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments69 = array();
$arguments69['value'] = $currentVariableContainer->getOrNull('articles');
$arguments69['keepQuotes'] = false;
$arguments69['encoding'] = NULL;
$arguments69['doubleEncode'] = true;
$renderChildrenClosure70 = function() {return NULL;};
$value71 = ($arguments69['value'] !== NULL ? $arguments69['value'] : $renderChildrenClosure70());
return (!is_string($value71) ? $value71 : htmlspecialchars($value71, ($arguments69['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments69['encoding'] !== NULL ? $arguments69['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments69['doubleEncode']));
};

$output66 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '
	';
return $output66;
};

$output51 .= '';

$output51 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments72 = array();
$arguments72['name'] = 'Main';
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output74 = '';

$output74 .= '

    <div class="blog-container" id="blog-container">
			';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments75 = array();
$arguments75['pageUid'] = $currentVariableContainer->getOrNull('articles');
$arguments75['additionalAttributes'] = NULL;
$arguments75['data'] = NULL;
$arguments75['class'] = NULL;
$arguments75['dir'] = NULL;
$arguments75['id'] = NULL;
$arguments75['lang'] = NULL;
$arguments75['style'] = NULL;
$arguments75['title'] = NULL;
$arguments75['accesskey'] = NULL;
$arguments75['tabindex'] = NULL;
$arguments75['onclick'] = NULL;
$arguments75['forceClosingTag'] = false;
$arguments75['hideIfEmpty'] = false;
$arguments75['contenteditable'] = NULL;
$arguments75['contextmenu'] = NULL;
$arguments75['draggable'] = NULL;
$arguments75['dropzone'] = NULL;
$arguments75['translate'] = NULL;
$arguments75['spellcheck'] = NULL;
$arguments75['hidden'] = NULL;
$arguments75['showAccessProtected'] = false;
$arguments75['classAccessProtected'] = 'protected';
$arguments75['classAccessGranted'] = 'access-granted';
$arguments75['useShortcutUid'] = NULL;
$arguments75['useShortcutTarget'] = NULL;
$arguments75['useShortcutData'] = false;
$arguments75['tagName'] = 'ul';
$arguments75['tagNameChildren'] = 'li';
$arguments75['entryLevel'] = 0;
$arguments75['levels'] = 1;
$arguments75['expandAll'] = false;
$arguments75['classFirst'] = '';
$arguments75['classLast'] = '';
$arguments75['classActive'] = 'active';
$arguments75['classCurrent'] = 'current';
$arguments75['classHasSubpages'] = 'sub';
$arguments75['substElementUid'] = false;
$arguments75['showHiddenInMenu'] = false;
$arguments75['showCurrent'] = true;
$arguments75['linkCurrent'] = true;
$arguments75['linkActive'] = true;
$arguments75['titleFields'] = 'nav_title,title';
$arguments75['includeAnchorTitle'] = true;
$arguments75['includeSpacers'] = false;
$arguments75['deferred'] = false;
$arguments75['as'] = 'menu';
$arguments75['rootLineAs'] = 'rootLine';
$arguments75['excludePages'] = '';
$arguments75['forceAbsoluteUrl'] = false;
$arguments75['doktypes'] = '';
$arguments75['divider'] = NULL;
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output77 = '';

$output77 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments78 = array();
$arguments78['each'] = $currentVariableContainer->getOrNull('menu');
$arguments78['as'] = 'item';
// Rendering Boolean node
$arguments78['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments78['iteration'] = 'iterator';
$arguments78['key'] = '';
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output80 = '';

$output80 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments81 = array();
// Rendering Boolean node
$arguments81['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext), 5);
$arguments81['then'] = NULL;
$arguments81['else'] = NULL;
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output83 = '';

$output83 .= '
						';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments84 = array();
$arguments84['name'] = 'content';
$arguments84['value'] = NULL;
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments86 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments87 = array();
$arguments87['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments87['keepQuotes'] = false;
$arguments87['encoding'] = NULL;
$arguments87['doubleEncode'] = true;
$renderChildrenClosure88 = function() {return NULL;};
$value89 = ($arguments87['value'] !== NULL ? $arguments87['value'] : $renderChildrenClosure88());
$arguments86['pageUid'] = (!is_string($value89) ? $value89 : htmlspecialchars($value89, ($arguments87['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments87['encoding'] !== NULL ? $arguments87['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments87['doubleEncode']));
$arguments86['column'] = '0';
$arguments86['order'] = 'sorting';
$arguments86['sortDirection'] = 'ASC';
$arguments86['contentUids'] = NULL;
$arguments86['sectionIndexOnly'] = false;
$arguments86['loadRegister'] = NULL;
$arguments86['render'] = false;
$arguments86['hideUntranslated'] = false;
$arguments86['limit'] = NULL;
$arguments86['slide'] = 0;
$arguments86['slideCollect'] = 0;
$arguments86['slideCollectReverse'] = false;
$renderChildrenClosure90 = function() {return NULL;};
$viewHelper91 = $self->getViewHelper('$viewHelper91', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper91->setArguments($arguments86);
$viewHelper91->setRenderingContext($renderingContext);
$viewHelper91->setRenderChildrenClosure($renderChildrenClosure90);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper91->initializeArgumentsAndRender();
};

$output83 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments84, isset($arguments84['value']) ? function() use ($arguments84) { return $arguments84['value']; } : $renderChildrenClosure85, $renderingContext);

$output83 .= '

						';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments92 = array();
$arguments92['table'] = 'tt_content';
$arguments92['field'] = 'pi_flexform';
$arguments92['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments92['as'] = 'flexformData';
$arguments92['record'] = NULL;
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output94 = '';

$output94 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$arguments95 = array();
$arguments95['title'] = NULL;
$arguments95['maxDepth'] = 8;
$arguments95['plainText'] = false;
$arguments95['ansiColors'] = false;
$arguments95['inline'] = false;
$arguments95['blacklistedClassNames'] = NULL;
$arguments95['blacklistedPropertyNames'] = NULL;
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments97 = array();
$arguments97['value'] = $currentVariableContainer->getOrNull('flexformData');
$arguments97['keepQuotes'] = false;
$arguments97['encoding'] = NULL;
$arguments97['doubleEncode'] = true;
$renderChildrenClosure98 = function() {return NULL;};
$value99 = ($arguments97['value'] !== NULL ? $arguments97['value'] : $renderChildrenClosure98());
return (!is_string($value99) ? $value99 : htmlspecialchars($value99, ($arguments97['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments97['encoding'] !== NULL ? $arguments97['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments97['doubleEncode']));
};

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output94 .= '
								<div class="blog">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments100 = array();
// Rendering Boolean node
$arguments100['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments100['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.image', $renderingContext);
$arguments100['title'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'settings.title', $renderingContext);
$arguments100['alt'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'settings.alternative', $renderingContext);
$arguments100['crop'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('image'), 'settings.crop', $renderingContext);
$arguments100['class'] = 'img-responsive';
$arguments100['additionalAttributes'] = NULL;
$arguments100['data'] = NULL;
$arguments100['width'] = NULL;
$arguments100['height'] = NULL;
$arguments100['minWidth'] = NULL;
$arguments100['minHeight'] = NULL;
$arguments100['maxWidth'] = NULL;
$arguments100['maxHeight'] = NULL;
$arguments100['image'] = NULL;
$arguments100['absolute'] = false;
$arguments100['dir'] = NULL;
$arguments100['id'] = NULL;
$arguments100['lang'] = NULL;
$arguments100['style'] = NULL;
$arguments100['accesskey'] = NULL;
$arguments100['tabindex'] = NULL;
$arguments100['onclick'] = NULL;
$arguments100['ismap'] = NULL;
$arguments100['longdesc'] = NULL;
$arguments100['usemap'] = NULL;
$renderChildrenClosure101 = function() {return NULL;};
$viewHelper102 = $self->getViewHelper('$viewHelper102', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper102->setArguments($arguments100);
$viewHelper102->setRenderingContext($renderingContext);
$viewHelper102->setRenderChildrenClosure($renderChildrenClosure101);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output94 .= $viewHelper102->initializeArgumentsAndRender();

$output94 .= '<br/>
									<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments103 = array();
$arguments103['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments103['keepQuotes'] = false;
$arguments103['encoding'] = NULL;
$arguments103['doubleEncode'] = true;
$renderChildrenClosure104 = function() {return NULL;};
$value105 = ($arguments103['value'] !== NULL ? $arguments103['value'] : $renderChildrenClosure104());

$output94 .= (!is_string($value105) ? $value105 : htmlspecialchars($value105, ($arguments103['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments103['encoding'] !== NULL ? $arguments103['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments103['doubleEncode']));

$output94 .= '</h2>
									<p class="collapsed">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments106 = array();
$arguments106['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.text', $renderingContext);
$arguments106['keepQuotes'] = false;
$arguments106['encoding'] = NULL;
$arguments106['doubleEncode'] = true;
$renderChildrenClosure107 = function() {return NULL;};
$value108 = ($arguments106['value'] !== NULL ? $arguments106['value'] : $renderChildrenClosure107());

$output94 .= (!is_string($value108) ? $value108 : htmlspecialchars($value108, ($arguments106['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments106['encoding'] !== NULL ? $arguments106['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments106['doubleEncode']));

$output94 .= '
									</p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments109 = array();
$arguments109['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'pid', $renderingContext);
$arguments109['target'] = '';
$arguments109['class'] = '';
$arguments109['title'] = '';
$arguments109['additionalParams'] = '';
$arguments109['additionalAttributes'] = array (
);
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Mehr...';
};

$output94 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output94 .= '
								</div>
					';
return $output94;
};

$output83 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output83 .= '
					';
return $output83;
};

$output80 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output80 .= '
				';
return $output80;
};

$output77 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
			';
return $output77;
};
$viewHelper111 = $self->getViewHelper('$viewHelper111', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper111->setArguments($arguments75);
$viewHelper111->setRenderingContext($renderingContext);
$viewHelper111->setRenderChildrenClosure($renderChildrenClosure76);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output74 .= $viewHelper111->initializeArgumentsAndRender();

$output74 .= '
    </div>
	';
return $output74;
};

$output51 .= '';

$output51 .= '
</div>
';


return $output51;
}


}
#1517329690    40292     