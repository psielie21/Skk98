<?php
class FluidCache_SkkProvider_Content_action_blogGroup_6fb7936ab6719230f6997fd7b04ab26436a0744b extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$arguments14 = array();
$arguments14['title'] = NULL;
$arguments14['maxDepth'] = 8;
$arguments14['plainText'] = false;
$arguments14['ansiColors'] = false;
$arguments14['inline'] = false;
$arguments14['blacklistedClassNames'] = NULL;
$arguments14['blacklistedPropertyNames'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = $currentVariableContainer->getOrNull('_all');
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = NULL;
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() {return NULL;};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());
return (!is_string($value18) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments16['encoding'] !== NULL ? $arguments16['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments16['doubleEncode']));
};

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
    <div class="blog-container" id="blog-container">
			';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments19 = array();
$arguments19['pageUid'] = $currentVariableContainer->getOrNull('articles');
$arguments19['additionalAttributes'] = NULL;
$arguments19['data'] = NULL;
$arguments19['class'] = NULL;
$arguments19['dir'] = NULL;
$arguments19['id'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['onclick'] = NULL;
$arguments19['forceClosingTag'] = false;
$arguments19['hideIfEmpty'] = false;
$arguments19['contenteditable'] = NULL;
$arguments19['contextmenu'] = NULL;
$arguments19['draggable'] = NULL;
$arguments19['dropzone'] = NULL;
$arguments19['translate'] = NULL;
$arguments19['spellcheck'] = NULL;
$arguments19['hidden'] = NULL;
$arguments19['showAccessProtected'] = false;
$arguments19['classAccessProtected'] = 'protected';
$arguments19['classAccessGranted'] = 'access-granted';
$arguments19['useShortcutUid'] = NULL;
$arguments19['useShortcutTarget'] = NULL;
$arguments19['useShortcutData'] = false;
$arguments19['tagName'] = 'ul';
$arguments19['tagNameChildren'] = 'li';
$arguments19['entryLevel'] = 0;
$arguments19['levels'] = 1;
$arguments19['expandAll'] = false;
$arguments19['classFirst'] = '';
$arguments19['classLast'] = '';
$arguments19['classActive'] = 'active';
$arguments19['classCurrent'] = 'current';
$arguments19['classHasSubpages'] = 'sub';
$arguments19['substElementUid'] = false;
$arguments19['showHiddenInMenu'] = false;
$arguments19['showCurrent'] = true;
$arguments19['linkCurrent'] = true;
$arguments19['linkActive'] = true;
$arguments19['titleFields'] = 'nav_title,title';
$arguments19['includeAnchorTitle'] = true;
$arguments19['includeSpacers'] = false;
$arguments19['deferred'] = false;
$arguments19['as'] = 'menu';
$arguments19['rootLineAs'] = 'rootLine';
$arguments19['excludePages'] = '';
$arguments19['forceAbsoluteUrl'] = false;
$arguments19['doktypes'] = '';
$arguments19['divider'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output21 = '';

$output21 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments22 = array();
$arguments22['each'] = $currentVariableContainer->getOrNull('menu');
$arguments22['as'] = 'item';
// Rendering Boolean node
$arguments22['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments22['iteration'] = 'iterator';
$arguments22['key'] = '';
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output24 = '';

$output24 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments25 = array();
// Rendering Boolean node
$arguments25['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext), 5);
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output27 = '';

$output27 .= '
						';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments28 = array();
$arguments28['name'] = 'content';
$arguments28['value'] = NULL;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments30 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments31 = array();
$arguments31['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments31['keepQuotes'] = false;
$arguments31['encoding'] = NULL;
$arguments31['doubleEncode'] = true;
$renderChildrenClosure32 = function() {return NULL;};
$value33 = ($arguments31['value'] !== NULL ? $arguments31['value'] : $renderChildrenClosure32());
$arguments30['pageUid'] = (!is_string($value33) ? $value33 : htmlspecialchars($value33, ($arguments31['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments31['encoding'] !== NULL ? $arguments31['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments31['doubleEncode']));
$arguments30['column'] = '0';
$arguments30['order'] = 'sorting';
$arguments30['sortDirection'] = 'ASC';
$arguments30['contentUids'] = NULL;
$arguments30['sectionIndexOnly'] = false;
$arguments30['loadRegister'] = NULL;
$arguments30['render'] = false;
$arguments30['hideUntranslated'] = false;
$arguments30['limit'] = NULL;
$arguments30['slide'] = 0;
$arguments30['slideCollect'] = 0;
$arguments30['slideCollectReverse'] = false;
$renderChildrenClosure34 = function() {return NULL;};
$viewHelper35 = $self->getViewHelper('$viewHelper35', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper35->setArguments($arguments30);
$viewHelper35->setRenderingContext($renderingContext);
$viewHelper35->setRenderChildrenClosure($renderChildrenClosure34);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper35->initializeArgumentsAndRender();
};

$output27 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments28, isset($arguments28['value']) ? function() use ($arguments28) { return $arguments28['value']; } : $renderChildrenClosure29, $renderingContext);

$output27 .= '
						';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments36 = array();
$arguments36['table'] = 'tt_content';
$arguments36['field'] = 'pi_flexform';
$arguments36['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments36['as'] = 'flexformData';
$arguments36['record'] = NULL;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output38 = '';

$output38 .= '
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

$output38 .= $viewHelper41->initializeArgumentsAndRender();

$output38 .= '<br/>
									<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments42 = array();
$arguments42['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments42['keepQuotes'] = false;
$arguments42['encoding'] = NULL;
$arguments42['doubleEncode'] = true;
$renderChildrenClosure43 = function() {return NULL;};
$value44 = ($arguments42['value'] !== NULL ? $arguments42['value'] : $renderChildrenClosure43());

$output38 .= (!is_string($value44) ? $value44 : htmlspecialchars($value44, ($arguments42['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments42['encoding'] !== NULL ? $arguments42['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments42['doubleEncode']));

$output38 .= '</h2>
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

$output38 .= (!is_string($value47) ? $value47 : htmlspecialchars($value47, ($arguments45['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments45['encoding'] !== NULL ? $arguments45['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments45['doubleEncode']));

$output38 .= '
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

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output38 .= '
								</div>
					';
return $output38;
};

$output27 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output27 .= '
					';
return $output27;
};

$output24 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output24 .= '
				';
return $output24;
};

$output21 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
			';
return $output21;
};
$viewHelper50 = $self->getViewHelper('$viewHelper50', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper50->setArguments($arguments19);
$viewHelper50->setRenderingContext($renderingContext);
$viewHelper50->setRenderChildrenClosure($renderChildrenClosure20);
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
	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$arguments75 = array();
$arguments75['title'] = NULL;
$arguments75['maxDepth'] = 8;
$arguments75['plainText'] = false;
$arguments75['ansiColors'] = false;
$arguments75['inline'] = false;
$arguments75['blacklistedClassNames'] = NULL;
$arguments75['blacklistedPropertyNames'] = NULL;
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments77 = array();
$arguments77['value'] = $currentVariableContainer->getOrNull('_all');
$arguments77['keepQuotes'] = false;
$arguments77['encoding'] = NULL;
$arguments77['doubleEncode'] = true;
$renderChildrenClosure78 = function() {return NULL;};
$value79 = ($arguments77['value'] !== NULL ? $arguments77['value'] : $renderChildrenClosure78());
return (!is_string($value79) ? $value79 : htmlspecialchars($value79, ($arguments77['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments77['encoding'] !== NULL ? $arguments77['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments77['doubleEncode']));
};

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
    <div class="blog-container" id="blog-container">
			';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments80 = array();
$arguments80['pageUid'] = $currentVariableContainer->getOrNull('articles');
$arguments80['additionalAttributes'] = NULL;
$arguments80['data'] = NULL;
$arguments80['class'] = NULL;
$arguments80['dir'] = NULL;
$arguments80['id'] = NULL;
$arguments80['lang'] = NULL;
$arguments80['style'] = NULL;
$arguments80['title'] = NULL;
$arguments80['accesskey'] = NULL;
$arguments80['tabindex'] = NULL;
$arguments80['onclick'] = NULL;
$arguments80['forceClosingTag'] = false;
$arguments80['hideIfEmpty'] = false;
$arguments80['contenteditable'] = NULL;
$arguments80['contextmenu'] = NULL;
$arguments80['draggable'] = NULL;
$arguments80['dropzone'] = NULL;
$arguments80['translate'] = NULL;
$arguments80['spellcheck'] = NULL;
$arguments80['hidden'] = NULL;
$arguments80['showAccessProtected'] = false;
$arguments80['classAccessProtected'] = 'protected';
$arguments80['classAccessGranted'] = 'access-granted';
$arguments80['useShortcutUid'] = NULL;
$arguments80['useShortcutTarget'] = NULL;
$arguments80['useShortcutData'] = false;
$arguments80['tagName'] = 'ul';
$arguments80['tagNameChildren'] = 'li';
$arguments80['entryLevel'] = 0;
$arguments80['levels'] = 1;
$arguments80['expandAll'] = false;
$arguments80['classFirst'] = '';
$arguments80['classLast'] = '';
$arguments80['classActive'] = 'active';
$arguments80['classCurrent'] = 'current';
$arguments80['classHasSubpages'] = 'sub';
$arguments80['substElementUid'] = false;
$arguments80['showHiddenInMenu'] = false;
$arguments80['showCurrent'] = true;
$arguments80['linkCurrent'] = true;
$arguments80['linkActive'] = true;
$arguments80['titleFields'] = 'nav_title,title';
$arguments80['includeAnchorTitle'] = true;
$arguments80['includeSpacers'] = false;
$arguments80['deferred'] = false;
$arguments80['as'] = 'menu';
$arguments80['rootLineAs'] = 'rootLine';
$arguments80['excludePages'] = '';
$arguments80['forceAbsoluteUrl'] = false;
$arguments80['doktypes'] = '';
$arguments80['divider'] = NULL;
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output82 = '';

$output82 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments83 = array();
$arguments83['each'] = $currentVariableContainer->getOrNull('menu');
$arguments83['as'] = 'item';
// Rendering Boolean node
$arguments83['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments83['iteration'] = 'iterator';
$arguments83['key'] = '';
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output85 = '';

$output85 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments86 = array();
// Rendering Boolean node
$arguments86['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext), 5);
$arguments86['then'] = NULL;
$arguments86['else'] = NULL;
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output88 = '';

$output88 .= '
						';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments89 = array();
$arguments89['name'] = 'content';
$arguments89['value'] = NULL;
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments91 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments92 = array();
$arguments92['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments92['keepQuotes'] = false;
$arguments92['encoding'] = NULL;
$arguments92['doubleEncode'] = true;
$renderChildrenClosure93 = function() {return NULL;};
$value94 = ($arguments92['value'] !== NULL ? $arguments92['value'] : $renderChildrenClosure93());
$arguments91['pageUid'] = (!is_string($value94) ? $value94 : htmlspecialchars($value94, ($arguments92['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments92['encoding'] !== NULL ? $arguments92['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments92['doubleEncode']));
$arguments91['column'] = '0';
$arguments91['order'] = 'sorting';
$arguments91['sortDirection'] = 'ASC';
$arguments91['contentUids'] = NULL;
$arguments91['sectionIndexOnly'] = false;
$arguments91['loadRegister'] = NULL;
$arguments91['render'] = false;
$arguments91['hideUntranslated'] = false;
$arguments91['limit'] = NULL;
$arguments91['slide'] = 0;
$arguments91['slideCollect'] = 0;
$arguments91['slideCollectReverse'] = false;
$renderChildrenClosure95 = function() {return NULL;};
$viewHelper96 = $self->getViewHelper('$viewHelper96', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper96->setArguments($arguments91);
$viewHelper96->setRenderingContext($renderingContext);
$viewHelper96->setRenderChildrenClosure($renderChildrenClosure95);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper96->initializeArgumentsAndRender();
};

$output88 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments89, isset($arguments89['value']) ? function() use ($arguments89) { return $arguments89['value']; } : $renderChildrenClosure90, $renderingContext);

$output88 .= '
						';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments97 = array();
$arguments97['table'] = 'tt_content';
$arguments97['field'] = 'pi_flexform';
$arguments97['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments97['as'] = 'flexformData';
$arguments97['record'] = NULL;
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output99 = '';

$output99 .= '
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

$output99 .= $viewHelper102->initializeArgumentsAndRender();

$output99 .= '<br/>
									<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments103 = array();
$arguments103['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments103['keepQuotes'] = false;
$arguments103['encoding'] = NULL;
$arguments103['doubleEncode'] = true;
$renderChildrenClosure104 = function() {return NULL;};
$value105 = ($arguments103['value'] !== NULL ? $arguments103['value'] : $renderChildrenClosure104());

$output99 .= (!is_string($value105) ? $value105 : htmlspecialchars($value105, ($arguments103['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments103['encoding'] !== NULL ? $arguments103['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments103['doubleEncode']));

$output99 .= '</h2>
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

$output99 .= (!is_string($value108) ? $value108 : htmlspecialchars($value108, ($arguments106['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments106['encoding'] !== NULL ? $arguments106['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments106['doubleEncode']));

$output99 .= '
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

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output99 .= '
								</div>
					';
return $output99;
};

$output88 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output88 .= '
					';
return $output88;
};

$output85 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output85 .= '
				';
return $output85;
};

$output82 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '
			';
return $output82;
};
$viewHelper111 = $self->getViewHelper('$viewHelper111', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper111->setArguments($arguments80);
$viewHelper111->setRenderingContext($renderingContext);
$viewHelper111->setRenderChildrenClosure($renderChildrenClosure81);
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
#1517329588    40266     