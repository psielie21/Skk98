<?php
class FluidCache_SkkProvider_Standard_action__1f96b5535fbf5bb82c39202075e868f938e0b7ee extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
								<div class="blog">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments34 = array();
// Rendering Boolean node
$arguments34['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments34['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.image', $renderingContext);
$arguments34['class'] = 'img-responsive';
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['width'] = NULL;
$arguments34['height'] = NULL;
$arguments34['minWidth'] = NULL;
$arguments34['minHeight'] = NULL;
$arguments34['maxWidth'] = NULL;
$arguments34['maxHeight'] = NULL;
$arguments34['image'] = NULL;
$arguments34['crop'] = NULL;
$arguments34['absolute'] = false;
$arguments34['dir'] = NULL;
$arguments34['id'] = NULL;
$arguments34['lang'] = NULL;
$arguments34['style'] = NULL;
$arguments34['title'] = NULL;
$arguments34['accesskey'] = NULL;
$arguments34['tabindex'] = NULL;
$arguments34['onclick'] = NULL;
$arguments34['alt'] = NULL;
$arguments34['ismap'] = NULL;
$arguments34['longdesc'] = NULL;
$arguments34['usemap'] = NULL;
$renderChildrenClosure35 = function() {return NULL;};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper36->setArguments($arguments34);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output33 .= $viewHelper36->initializeArgumentsAndRender();

$output33 .= '<br/>
									<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments37 = array();
$arguments37['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments37['keepQuotes'] = false;
$arguments37['encoding'] = NULL;
$arguments37['doubleEncode'] = true;
$renderChildrenClosure38 = function() {return NULL;};
$value39 = ($arguments37['value'] !== NULL ? $arguments37['value'] : $renderChildrenClosure38());

$output33 .= (!is_string($value39) ? $value39 : htmlspecialchars($value39, ($arguments37['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments37['encoding'] !== NULL ? $arguments37['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments37['doubleEncode']));

$output33 .= '</h2>
									<p class="collapsed">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments40 = array();
$arguments40['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.text', $renderingContext);
$arguments40['keepQuotes'] = false;
$arguments40['encoding'] = NULL;
$arguments40['doubleEncode'] = true;
$renderChildrenClosure41 = function() {return NULL;};
$value42 = ($arguments40['value'] !== NULL ? $arguments40['value'] : $renderChildrenClosure41());

$output33 .= (!is_string($value42) ? $value42 : htmlspecialchars($value42, ($arguments40['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments40['encoding'] !== NULL ? $arguments40['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments40['doubleEncode']));

$output33 .= '
									</p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments43 = array();
$arguments43['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments43['target'] = '';
$arguments43['class'] = '';
$arguments43['title'] = '';
$arguments43['additionalParams'] = '';
$arguments43['additionalAttributes'] = array (
);
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Mehr...';
};

$output33 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

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
$viewHelper45 = $self->getViewHelper('$viewHelper45', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper45->setArguments($arguments14);
$viewHelper45->setRenderingContext($renderingContext);
$viewHelper45->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output13 .= $viewHelper45->initializeArgumentsAndRender();

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

$output46 = '';

$output46 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments47 = array();
$arguments47['name'] = 'Content';
$renderChildrenClosure48 = function() {return NULL;};
$viewHelper49 = $self->getViewHelper('$viewHelper49', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper49->setArguments($arguments47);
$viewHelper49->setRenderingContext($renderingContext);
$viewHelper49->setRenderChildrenClosure($renderChildrenClosure48);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output46 .= $viewHelper49->initializeArgumentsAndRender();

$output46 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments50 = array();
$arguments50['name'] = 'Configuration';
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output52 = '';

$output52 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments53 = array();
$arguments53['id'] = 'bloggroup';
// Rendering Array
$array54 = array();
$array54['group'] = 'Mannschaften';
$arguments53['options'] = $array54;
$arguments53['localLanguageFileRelativePath'] = '/Resources/Private/Language/Content/locallang_bloggroup.xlf';
$arguments53['label'] = NULL;
$arguments53['description'] = NULL;
$arguments53['enabled'] = true;
$arguments53['compact'] = false;
$arguments53['variables'] = array (
);
$arguments53['extensionName'] = NULL;
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output56 = '';

$output56 .= '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:flexform tag -->
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\RelationViewHelper
$arguments57 = array();
$arguments57['name'] = 'articles';
$arguments57['label'] = 'Gruppe von Blog Einträgen';
// Rendering Boolean node
$arguments57['multiple'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments57['size'] = '6';
$arguments57['condition'] = 'AND doktype = \'254\' ';
$arguments57['table'] = 'pages';
$arguments57['minItems'] = '1';
$arguments57['maxItems'] = '1';
$arguments57['default'] = NULL;
$arguments57['required'] = false;
$arguments57['exclude'] = false;
$arguments57['transform'] = NULL;
$arguments57['enabled'] = true;
$arguments57['requestUpdate'] = false;
$arguments57['displayCond'] = NULL;
$arguments57['inherit'] = true;
$arguments57['inheritEmpty'] = true;
$arguments57['clear'] = false;
$arguments57['variables'] = array (
);
$arguments57['extensionName'] = NULL;
$arguments57['validate'] = 'trim';
$arguments57['itemListStyle'] = NULL;
$arguments57['selectedListStyle'] = NULL;
$arguments57['items'] = NULL;
$arguments57['emptyOption'] = false;
$arguments57['translateCsvItems'] = NULL;
$arguments57['itemsProcFunc'] = NULL;
$arguments57['mm'] = NULL;
$arguments57['foreignField'] = '';
$arguments57['foreignLabel'] = '';
$arguments57['foreignSelector'] = NULL;
$arguments57['foreignSortby'] = '';
$arguments57['foreignDefaultSortby'] = '';
$arguments57['foreignTableField'] = '';
$arguments57['foreignUnique'] = NULL;
$arguments57['symmetricField'] = '';
$arguments57['symmetricLabel'] = '';
$arguments57['symmetricSortby'] = '';
$arguments57['localizationMode'] = '';
$arguments57['localizeChildrenAtParentLocalization'] = false;
$arguments57['disableMovingChildrenWithParent'] = false;
$arguments57['showThumbs'] = true;
$arguments57['matchFields'] = array (
);
$arguments57['oppositeField'] = '';
$renderChildrenClosure58 = function() {return NULL;};

$output56 .= FluidTYPO3\Flux\ViewHelpers\Field\RelationViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
		';
return $output56;
};

$output52 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments53, $renderChildrenClosure55, $renderingContext);

$output52 .= '
	';
return $output52;
};

$output46 .= '';

$output46 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments59 = array();
$arguments59['name'] = 'Preview';
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output61 = '';

$output61 .= '
		<strong>Bloggruppe</strong><br />
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper
$arguments62 = array();
$arguments62['title'] = NULL;
$arguments62['maxDepth'] = 8;
$arguments62['plainText'] = false;
$arguments62['ansiColors'] = false;
$arguments62['inline'] = false;
$arguments62['blacklistedClassNames'] = NULL;
$arguments62['blacklistedPropertyNames'] = NULL;
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments64 = array();
$arguments64['value'] = $currentVariableContainer->getOrNull('articles');
$arguments64['keepQuotes'] = false;
$arguments64['encoding'] = NULL;
$arguments64['doubleEncode'] = true;
$renderChildrenClosure65 = function() {return NULL;};
$value66 = ($arguments64['value'] !== NULL ? $arguments64['value'] : $renderChildrenClosure65());
return (!is_string($value66) ? $value66 : htmlspecialchars($value66, ($arguments64['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments64['encoding'] !== NULL ? $arguments64['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments64['doubleEncode']));
};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\DebugViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
	';
return $output61;
};

$output46 .= '';

$output46 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments67 = array();
$arguments67['name'] = 'Main';
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output69 = '';

$output69 .= '

    <div class="blog-container" id="blog-container">
			';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments70 = array();
$arguments70['pageUid'] = $currentVariableContainer->getOrNull('articles');
$arguments70['additionalAttributes'] = NULL;
$arguments70['data'] = NULL;
$arguments70['class'] = NULL;
$arguments70['dir'] = NULL;
$arguments70['id'] = NULL;
$arguments70['lang'] = NULL;
$arguments70['style'] = NULL;
$arguments70['title'] = NULL;
$arguments70['accesskey'] = NULL;
$arguments70['tabindex'] = NULL;
$arguments70['onclick'] = NULL;
$arguments70['forceClosingTag'] = false;
$arguments70['hideIfEmpty'] = false;
$arguments70['contenteditable'] = NULL;
$arguments70['contextmenu'] = NULL;
$arguments70['draggable'] = NULL;
$arguments70['dropzone'] = NULL;
$arguments70['translate'] = NULL;
$arguments70['spellcheck'] = NULL;
$arguments70['hidden'] = NULL;
$arguments70['showAccessProtected'] = false;
$arguments70['classAccessProtected'] = 'protected';
$arguments70['classAccessGranted'] = 'access-granted';
$arguments70['useShortcutUid'] = NULL;
$arguments70['useShortcutTarget'] = NULL;
$arguments70['useShortcutData'] = false;
$arguments70['tagName'] = 'ul';
$arguments70['tagNameChildren'] = 'li';
$arguments70['entryLevel'] = 0;
$arguments70['levels'] = 1;
$arguments70['expandAll'] = false;
$arguments70['classFirst'] = '';
$arguments70['classLast'] = '';
$arguments70['classActive'] = 'active';
$arguments70['classCurrent'] = 'current';
$arguments70['classHasSubpages'] = 'sub';
$arguments70['substElementUid'] = false;
$arguments70['showHiddenInMenu'] = false;
$arguments70['showCurrent'] = true;
$arguments70['linkCurrent'] = true;
$arguments70['linkActive'] = true;
$arguments70['titleFields'] = 'nav_title,title';
$arguments70['includeAnchorTitle'] = true;
$arguments70['includeSpacers'] = false;
$arguments70['deferred'] = false;
$arguments70['as'] = 'menu';
$arguments70['rootLineAs'] = 'rootLine';
$arguments70['excludePages'] = '';
$arguments70['forceAbsoluteUrl'] = false;
$arguments70['doktypes'] = '';
$arguments70['divider'] = NULL;
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output72 = '';

$output72 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments73 = array();
$arguments73['each'] = $currentVariableContainer->getOrNull('menu');
$arguments73['as'] = 'item';
// Rendering Boolean node
$arguments73['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments73['iteration'] = 'iterator';
$arguments73['key'] = '';
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output75 = '';

$output75 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments76 = array();
// Rendering Boolean node
$arguments76['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext), 5);
$arguments76['then'] = NULL;
$arguments76['else'] = NULL;
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output78 = '';

$output78 .= '
						';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments79 = array();
$arguments79['name'] = 'content';
$arguments79['value'] = NULL;
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments81 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments82 = array();
$arguments82['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments82['keepQuotes'] = false;
$arguments82['encoding'] = NULL;
$arguments82['doubleEncode'] = true;
$renderChildrenClosure83 = function() {return NULL;};
$value84 = ($arguments82['value'] !== NULL ? $arguments82['value'] : $renderChildrenClosure83());
$arguments81['pageUid'] = (!is_string($value84) ? $value84 : htmlspecialchars($value84, ($arguments82['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments82['encoding'] !== NULL ? $arguments82['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments82['doubleEncode']));
$arguments81['column'] = '0';
$arguments81['order'] = 'sorting';
$arguments81['sortDirection'] = 'ASC';
$arguments81['contentUids'] = NULL;
$arguments81['sectionIndexOnly'] = false;
$arguments81['loadRegister'] = NULL;
$arguments81['render'] = false;
$arguments81['hideUntranslated'] = false;
$arguments81['limit'] = NULL;
$arguments81['slide'] = 0;
$arguments81['slideCollect'] = 0;
$arguments81['slideCollectReverse'] = false;
$renderChildrenClosure85 = function() {return NULL;};
$viewHelper86 = $self->getViewHelper('$viewHelper86', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper86->setArguments($arguments81);
$viewHelper86->setRenderingContext($renderingContext);
$viewHelper86->setRenderChildrenClosure($renderChildrenClosure85);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper86->initializeArgumentsAndRender();
};

$output78 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments79, isset($arguments79['value']) ? function() use ($arguments79) { return $arguments79['value']; } : $renderChildrenClosure80, $renderingContext);

$output78 .= '
						';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments87 = array();
$arguments87['table'] = 'tt_content';
$arguments87['field'] = 'pi_flexform';
$arguments87['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments87['as'] = 'flexformData';
$arguments87['record'] = NULL;
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output89 = '';

$output89 .= '
								<div class="blog">
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments90 = array();
// Rendering Boolean node
$arguments90['treatIdAsReference'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments90['src'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.image', $renderingContext);
$arguments90['class'] = 'img-responsive';
$arguments90['additionalAttributes'] = NULL;
$arguments90['data'] = NULL;
$arguments90['width'] = NULL;
$arguments90['height'] = NULL;
$arguments90['minWidth'] = NULL;
$arguments90['minHeight'] = NULL;
$arguments90['maxWidth'] = NULL;
$arguments90['maxHeight'] = NULL;
$arguments90['image'] = NULL;
$arguments90['crop'] = NULL;
$arguments90['absolute'] = false;
$arguments90['dir'] = NULL;
$arguments90['id'] = NULL;
$arguments90['lang'] = NULL;
$arguments90['style'] = NULL;
$arguments90['title'] = NULL;
$arguments90['accesskey'] = NULL;
$arguments90['tabindex'] = NULL;
$arguments90['onclick'] = NULL;
$arguments90['alt'] = NULL;
$arguments90['ismap'] = NULL;
$arguments90['longdesc'] = NULL;
$arguments90['usemap'] = NULL;
$renderChildrenClosure91 = function() {return NULL;};
$viewHelper92 = $self->getViewHelper('$viewHelper92', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper92->setArguments($arguments90);
$viewHelper92->setRenderingContext($renderingContext);
$viewHelper92->setRenderChildrenClosure($renderChildrenClosure91);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output89 .= $viewHelper92->initializeArgumentsAndRender();

$output89 .= '<br/>
									<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments93 = array();
$arguments93['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments93['keepQuotes'] = false;
$arguments93['encoding'] = NULL;
$arguments93['doubleEncode'] = true;
$renderChildrenClosure94 = function() {return NULL;};
$value95 = ($arguments93['value'] !== NULL ? $arguments93['value'] : $renderChildrenClosure94());

$output89 .= (!is_string($value95) ? $value95 : htmlspecialchars($value95, ($arguments93['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments93['encoding'] !== NULL ? $arguments93['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments93['doubleEncode']));

$output89 .= '</h2>
									<p class="collapsed">
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments96 = array();
$arguments96['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.text', $renderingContext);
$arguments96['keepQuotes'] = false;
$arguments96['encoding'] = NULL;
$arguments96['doubleEncode'] = true;
$renderChildrenClosure97 = function() {return NULL;};
$value98 = ($arguments96['value'] !== NULL ? $arguments96['value'] : $renderChildrenClosure97());

$output89 .= (!is_string($value98) ? $value98 : htmlspecialchars($value98, ($arguments96['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments96['encoding'] !== NULL ? $arguments96['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments96['doubleEncode']));

$output89 .= '
									</p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments99 = array();
$arguments99['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments99['target'] = '';
$arguments99['class'] = '';
$arguments99['title'] = '';
$arguments99['additionalParams'] = '';
$arguments99['additionalAttributes'] = array (
);
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return 'Mehr...';
};

$output89 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output89 .= '
								</div>
					';
return $output89;
};

$output78 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output78 .= '
					';
return $output78;
};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '
				';
return $output75;
};

$output72 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output72 .= '
			';
return $output72;
};
$viewHelper101 = $self->getViewHelper('$viewHelper101', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper101->setArguments($arguments70);
$viewHelper101->setRenderingContext($renderingContext);
$viewHelper101->setRenderChildrenClosure($renderChildrenClosure71);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output69 .= $viewHelper101->initializeArgumentsAndRender();

$output69 .= '
    </div>
	';
return $output69;
};

$output46 .= '';

$output46 .= '
</div>
';


return $output46;
}


}
#1517329968    36442     