<?php
class FluidCache_SkkProvider_Standard_action__0bd95070dff1ea0444d2c7ee9eca6b4e1c98fa4f extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['id'] = 'newslist';
// Rendering Array
$array2 = array();
$array2['group'] = 'SKK Spezialanfertigung';
$arguments1['options'] = $array2;
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/Content/locallang_newslist.xlf';
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
$arguments5['name'] = 'settings.maxInput';
$arguments5['label'] = 'Maximale Anzahl der Neuigkeiten (nur bei Startseite)';
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
$arguments5['placeholder'] = NULL;
$renderChildrenClosure6 = function() {return NULL;};

$output4 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper
$arguments7 = array();
$arguments7['name'] = 'settings.position';
// Rendering Array
$array8 = array();
// Rendering Array
$array9 = array();
$array9['0'] = 'Startseite';
$array9['1'] = 'landingpage';
$array8['0'] = $array9;
// Rendering Array
$array10 = array();
$array10['0'] = 'Presse';
$array10['1'] = 'press';
$array8['1'] = $array10;
$arguments7['items'] = $array8;
$arguments7['label'] = 'Ausgabeseite';
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
$arguments7['maxItems'] = 1;
$arguments7['itemListStyle'] = NULL;
$arguments7['selectedListStyle'] = NULL;
$arguments7['emptyOption'] = false;
$arguments7['translateCsvItems'] = NULL;
$arguments7['itemsProcFunc'] = NULL;
$arguments7['renderType'] = 'selectSingle';
$arguments7['showIconTable'] = false;
$renderChildrenClosure11 = function() {return NULL;};

$output4 .= FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper::renderStatic($arguments7, $renderChildrenClosure11, $renderingContext);

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

$output12 = '';

$output12 .= '
		<!-- If you wish, place custom backend preview content here -->
		<strong>Liste der Neuigkeiten</strong><br>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments13 = array();
// Rendering Boolean node
$arguments13['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'position', $renderingContext), 'landingpage');
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output15 = '';

$output15 .= 'Maximale Items: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'maxInput', $renderingContext);
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = NULL;
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() {return NULL;};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());

$output15 .= (!is_string($value18) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments16['encoding'] !== NULL ? $arguments16['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments16['doubleEncode']));
return $output15;
};

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
	';


return $output12;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output19 = '';

$output19 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments20 = array();
// Rendering Boolean node
$arguments20['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'position', $renderingContext), 'landingpage');
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output22 = '';

$output22 .= '
		  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments23 = array();
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output25 = '';

$output25 .= '
				<h2 class="text-center">Neuigkeiten</h2>
				<div class="text-container">
					';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments26 = array();
$arguments26['pageUid'] = '13';
$arguments26['additionalAttributes'] = NULL;
$arguments26['data'] = NULL;
$arguments26['class'] = NULL;
$arguments26['dir'] = NULL;
$arguments26['id'] = NULL;
$arguments26['lang'] = NULL;
$arguments26['style'] = NULL;
$arguments26['title'] = NULL;
$arguments26['accesskey'] = NULL;
$arguments26['tabindex'] = NULL;
$arguments26['onclick'] = NULL;
$arguments26['forceClosingTag'] = false;
$arguments26['hideIfEmpty'] = false;
$arguments26['contenteditable'] = NULL;
$arguments26['contextmenu'] = NULL;
$arguments26['draggable'] = NULL;
$arguments26['dropzone'] = NULL;
$arguments26['translate'] = NULL;
$arguments26['spellcheck'] = NULL;
$arguments26['hidden'] = NULL;
$arguments26['showAccessProtected'] = false;
$arguments26['classAccessProtected'] = 'protected';
$arguments26['classAccessGranted'] = 'access-granted';
$arguments26['useShortcutUid'] = NULL;
$arguments26['useShortcutTarget'] = NULL;
$arguments26['useShortcutData'] = false;
$arguments26['tagName'] = 'ul';
$arguments26['tagNameChildren'] = 'li';
$arguments26['entryLevel'] = 0;
$arguments26['levels'] = 1;
$arguments26['expandAll'] = false;
$arguments26['classFirst'] = '';
$arguments26['classLast'] = '';
$arguments26['classActive'] = 'active';
$arguments26['classCurrent'] = 'current';
$arguments26['classHasSubpages'] = 'sub';
$arguments26['substElementUid'] = false;
$arguments26['showHiddenInMenu'] = false;
$arguments26['showCurrent'] = true;
$arguments26['linkCurrent'] = true;
$arguments26['linkActive'] = true;
$arguments26['titleFields'] = 'nav_title,title';
$arguments26['includeAnchorTitle'] = true;
$arguments26['includeSpacers'] = false;
$arguments26['deferred'] = false;
$arguments26['as'] = 'menu';
$arguments26['rootLineAs'] = 'rootLine';
$arguments26['excludePages'] = '';
$arguments26['forceAbsoluteUrl'] = false;
$arguments26['doktypes'] = '';
$arguments26['divider'] = NULL;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output28 = '';

$output28 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments29 = array();
// Rendering Boolean node
$arguments29['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'maxInput', $renderingContext));
$arguments29['then'] = NULL;
$arguments29['else'] = NULL;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments32 = array();
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output34 = '';

$output34 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments35 = array();
$arguments35['each'] = $currentVariableContainer->getOrNull('menu');
$arguments35['as'] = 'item';
// Rendering Boolean node
$arguments35['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments35['iteration'] = 'iterator';
$arguments35['key'] = '';
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output37 = '';

$output37 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments38 = array();
// Rendering Boolean node
$arguments38['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext), \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'maxInput', $renderingContext));
$arguments38['then'] = NULL;
$arguments38['else'] = NULL;
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output40 = '';

$output40 .= '
										';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments41 = array();
$arguments41['name'] = 'content';
$arguments41['value'] = NULL;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments43 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments44 = array();
$arguments44['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments44['keepQuotes'] = false;
$arguments44['encoding'] = NULL;
$arguments44['doubleEncode'] = true;
$renderChildrenClosure45 = function() {return NULL;};
$value46 = ($arguments44['value'] !== NULL ? $arguments44['value'] : $renderChildrenClosure45());
$arguments43['pageUid'] = (!is_string($value46) ? $value46 : htmlspecialchars($value46, ($arguments44['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments44['encoding'] !== NULL ? $arguments44['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments44['doubleEncode']));
$arguments43['column'] = '0';
$arguments43['order'] = 'sorting';
$arguments43['sortDirection'] = 'ASC';
$arguments43['contentUids'] = NULL;
$arguments43['sectionIndexOnly'] = false;
$arguments43['loadRegister'] = NULL;
$arguments43['render'] = false;
$arguments43['hideUntranslated'] = false;
$arguments43['limit'] = NULL;
$arguments43['slide'] = 0;
$arguments43['slideCollect'] = 0;
$arguments43['slideCollectReverse'] = false;
$renderChildrenClosure47 = function() {return NULL;};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper48->setArguments($arguments43);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure47);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper48->initializeArgumentsAndRender();
};

$output40 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments41, isset($arguments41['value']) ? function() use ($arguments41) { return $arguments41['value']; } : $renderChildrenClosure42, $renderingContext);

$output40 .= '
										';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments49 = array();
$arguments49['table'] = 'tt_content';
$arguments49['field'] = 'pi_flexform';
$arguments49['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments49['as'] = 'flexformData';
$arguments49['record'] = NULL;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output51 = '';

$output51 .= '
											<div class="news-content">
												<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments52 = array();
$arguments52['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments52['target'] = '';
$arguments52['class'] = '';
$arguments52['title'] = '';
$arguments52['additionalParams'] = '';
$arguments52['additionalAttributes'] = array (
);
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments54 = array();
$arguments54['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments54['keepQuotes'] = false;
$arguments54['encoding'] = NULL;
$arguments54['doubleEncode'] = true;
$renderChildrenClosure55 = function() {return NULL;};
$value56 = ($arguments54['value'] !== NULL ? $arguments54['value'] : $renderChildrenClosure55());
return (!is_string($value56) ? $value56 : htmlspecialchars($value56, ($arguments54['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments54['encoding'] !== NULL ? $arguments54['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments54['doubleEncode']));
};

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '</h3>
												<h5>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments57 = array();
$arguments57['date'] = NULL;
$arguments57['format'] = '';
$arguments57['base'] = NULL;
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.date', $renderingContext);
};

$output51 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output51 .= '</h5>
											</div>
										';
return $output51;
};

$output40 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output40 .= '
									';
return $output40;
};

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= '
								';
return $output37;
};

$output34 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
							';
return $output34;
};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments59 = array();
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output61 = '';

$output61 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments62 = array();
$arguments62['each'] = $currentVariableContainer->getOrNull('menu');
$arguments62['as'] = 'item';
// Rendering Boolean node
$arguments62['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments62['key'] = '';
$arguments62['iteration'] = NULL;
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output64 = '';

$output64 .= '
									';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments65 = array();
$arguments65['name'] = 'content';
$arguments65['value'] = NULL;
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments67 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments68 = array();
$arguments68['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments68['keepQuotes'] = false;
$arguments68['encoding'] = NULL;
$arguments68['doubleEncode'] = true;
$renderChildrenClosure69 = function() {return NULL;};
$value70 = ($arguments68['value'] !== NULL ? $arguments68['value'] : $renderChildrenClosure69());
$arguments67['pageUid'] = (!is_string($value70) ? $value70 : htmlspecialchars($value70, ($arguments68['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments68['encoding'] !== NULL ? $arguments68['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments68['doubleEncode']));
$arguments67['column'] = '0';
$arguments67['order'] = 'sorting';
$arguments67['sortDirection'] = 'ASC';
$arguments67['contentUids'] = NULL;
$arguments67['sectionIndexOnly'] = false;
$arguments67['loadRegister'] = NULL;
$arguments67['render'] = false;
$arguments67['hideUntranslated'] = false;
$arguments67['limit'] = NULL;
$arguments67['slide'] = 0;
$arguments67['slideCollect'] = 0;
$arguments67['slideCollectReverse'] = false;
$renderChildrenClosure71 = function() {return NULL;};
$viewHelper72 = $self->getViewHelper('$viewHelper72', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper72->setArguments($arguments67);
$viewHelper72->setRenderingContext($renderingContext);
$viewHelper72->setRenderChildrenClosure($renderChildrenClosure71);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper72->initializeArgumentsAndRender();
};

$output64 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments65, isset($arguments65['value']) ? function() use ($arguments65) { return $arguments65['value']; } : $renderChildrenClosure66, $renderingContext);

$output64 .= '
									';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments73 = array();
$arguments73['table'] = 'tt_content';
$arguments73['field'] = 'pi_flexform';
$arguments73['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments73['as'] = 'flexformData';
$arguments73['record'] = NULL;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output75 = '';

$output75 .= '
										<div class="news-content">
											<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments76 = array();
$arguments76['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments76['target'] = '';
$arguments76['class'] = '';
$arguments76['title'] = '';
$arguments76['additionalParams'] = '';
$arguments76['additionalAttributes'] = array (
);
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments78 = array();
$arguments78['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments78['keepQuotes'] = false;
$arguments78['encoding'] = NULL;
$arguments78['doubleEncode'] = true;
$renderChildrenClosure79 = function() {return NULL;};
$value80 = ($arguments78['value'] !== NULL ? $arguments78['value'] : $renderChildrenClosure79());
return (!is_string($value80) ? $value80 : htmlspecialchars($value80, ($arguments78['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments78['encoding'] !== NULL ? $arguments78['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments78['doubleEncode']));
};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output75 .= '</h3>
											<h5>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments81 = array();
$arguments81['date'] = NULL;
$arguments81['format'] = '';
$arguments81['base'] = NULL;
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.date', $renderingContext);
};

$output75 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output75 .= '</h5>
										</div>
									';
return $output75;
};

$output64 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output64 .= '
								';
return $output64;
};

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
							';
return $output61;
};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output31 .= '
						';
return $output31;
};
$arguments29['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output83 = '';

$output83 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments84 = array();
$arguments84['each'] = $currentVariableContainer->getOrNull('menu');
$arguments84['as'] = 'item';
// Rendering Boolean node
$arguments84['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments84['iteration'] = 'iterator';
$arguments84['key'] = '';
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output86 = '';

$output86 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments87 = array();
// Rendering Boolean node
$arguments87['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext), \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'maxInput', $renderingContext));
$arguments87['then'] = NULL;
$arguments87['else'] = NULL;
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output89 = '';

$output89 .= '
										';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments90 = array();
$arguments90['name'] = 'content';
$arguments90['value'] = NULL;
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments92 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments93 = array();
$arguments93['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments93['keepQuotes'] = false;
$arguments93['encoding'] = NULL;
$arguments93['doubleEncode'] = true;
$renderChildrenClosure94 = function() {return NULL;};
$value95 = ($arguments93['value'] !== NULL ? $arguments93['value'] : $renderChildrenClosure94());
$arguments92['pageUid'] = (!is_string($value95) ? $value95 : htmlspecialchars($value95, ($arguments93['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments93['encoding'] !== NULL ? $arguments93['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments93['doubleEncode']));
$arguments92['column'] = '0';
$arguments92['order'] = 'sorting';
$arguments92['sortDirection'] = 'ASC';
$arguments92['contentUids'] = NULL;
$arguments92['sectionIndexOnly'] = false;
$arguments92['loadRegister'] = NULL;
$arguments92['render'] = false;
$arguments92['hideUntranslated'] = false;
$arguments92['limit'] = NULL;
$arguments92['slide'] = 0;
$arguments92['slideCollect'] = 0;
$arguments92['slideCollectReverse'] = false;
$renderChildrenClosure96 = function() {return NULL;};
$viewHelper97 = $self->getViewHelper('$viewHelper97', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper97->setArguments($arguments92);
$viewHelper97->setRenderingContext($renderingContext);
$viewHelper97->setRenderChildrenClosure($renderChildrenClosure96);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper97->initializeArgumentsAndRender();
};

$output89 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments90, isset($arguments90['value']) ? function() use ($arguments90) { return $arguments90['value']; } : $renderChildrenClosure91, $renderingContext);

$output89 .= '
										';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments98 = array();
$arguments98['table'] = 'tt_content';
$arguments98['field'] = 'pi_flexform';
$arguments98['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments98['as'] = 'flexformData';
$arguments98['record'] = NULL;
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output100 = '';

$output100 .= '
											<div class="news-content">
												<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments101 = array();
$arguments101['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments101['target'] = '';
$arguments101['class'] = '';
$arguments101['title'] = '';
$arguments101['additionalParams'] = '';
$arguments101['additionalAttributes'] = array (
);
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments103 = array();
$arguments103['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments103['keepQuotes'] = false;
$arguments103['encoding'] = NULL;
$arguments103['doubleEncode'] = true;
$renderChildrenClosure104 = function() {return NULL;};
$value105 = ($arguments103['value'] !== NULL ? $arguments103['value'] : $renderChildrenClosure104());
return (!is_string($value105) ? $value105 : htmlspecialchars($value105, ($arguments103['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments103['encoding'] !== NULL ? $arguments103['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments103['doubleEncode']));
};

$output100 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output100 .= '</h3>
												<h5>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments106 = array();
$arguments106['date'] = NULL;
$arguments106['format'] = '';
$arguments106['base'] = NULL;
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.date', $renderingContext);
};

$output100 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output100 .= '</h5>
											</div>
										';
return $output100;
};

$output89 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output89 .= '
									';
return $output89;
};

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output86 .= '
								';
return $output86;
};

$output83 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output83 .= '
							';
return $output83;
};
$arguments29['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output108 = '';

$output108 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments109 = array();
$arguments109['each'] = $currentVariableContainer->getOrNull('menu');
$arguments109['as'] = 'item';
// Rendering Boolean node
$arguments109['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments109['key'] = '';
$arguments109['iteration'] = NULL;
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output111 = '';

$output111 .= '
									';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments112 = array();
$arguments112['name'] = 'content';
$arguments112['value'] = NULL;
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments114 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments115 = array();
$arguments115['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments115['keepQuotes'] = false;
$arguments115['encoding'] = NULL;
$arguments115['doubleEncode'] = true;
$renderChildrenClosure116 = function() {return NULL;};
$value117 = ($arguments115['value'] !== NULL ? $arguments115['value'] : $renderChildrenClosure116());
$arguments114['pageUid'] = (!is_string($value117) ? $value117 : htmlspecialchars($value117, ($arguments115['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments115['encoding'] !== NULL ? $arguments115['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments115['doubleEncode']));
$arguments114['column'] = '0';
$arguments114['order'] = 'sorting';
$arguments114['sortDirection'] = 'ASC';
$arguments114['contentUids'] = NULL;
$arguments114['sectionIndexOnly'] = false;
$arguments114['loadRegister'] = NULL;
$arguments114['render'] = false;
$arguments114['hideUntranslated'] = false;
$arguments114['limit'] = NULL;
$arguments114['slide'] = 0;
$arguments114['slideCollect'] = 0;
$arguments114['slideCollectReverse'] = false;
$renderChildrenClosure118 = function() {return NULL;};
$viewHelper119 = $self->getViewHelper('$viewHelper119', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper119->setArguments($arguments114);
$viewHelper119->setRenderingContext($renderingContext);
$viewHelper119->setRenderChildrenClosure($renderChildrenClosure118);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper119->initializeArgumentsAndRender();
};

$output111 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments112, isset($arguments112['value']) ? function() use ($arguments112) { return $arguments112['value']; } : $renderChildrenClosure113, $renderingContext);

$output111 .= '
									';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments120 = array();
$arguments120['table'] = 'tt_content';
$arguments120['field'] = 'pi_flexform';
$arguments120['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments120['as'] = 'flexformData';
$arguments120['record'] = NULL;
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output122 = '';

$output122 .= '
										<div class="news-content">
											<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments123 = array();
$arguments123['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments123['target'] = '';
$arguments123['class'] = '';
$arguments123['title'] = '';
$arguments123['additionalParams'] = '';
$arguments123['additionalAttributes'] = array (
);
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments125 = array();
$arguments125['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments125['keepQuotes'] = false;
$arguments125['encoding'] = NULL;
$arguments125['doubleEncode'] = true;
$renderChildrenClosure126 = function() {return NULL;};
$value127 = ($arguments125['value'] !== NULL ? $arguments125['value'] : $renderChildrenClosure126());
return (!is_string($value127) ? $value127 : htmlspecialchars($value127, ($arguments125['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments125['encoding'] !== NULL ? $arguments125['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments125['doubleEncode']));
};

$output122 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output122 .= '</h3>
											<h5>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments128 = array();
$arguments128['date'] = NULL;
$arguments128['format'] = '';
$arguments128['base'] = NULL;
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.date', $renderingContext);
};

$output122 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output122 .= '</h5>
										</div>
									';
return $output122;
};

$output111 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);

$output111 .= '
								';
return $output111;
};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output108 .= '
							';
return $output108;
};

$output28 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
					';
return $output28;
};
$viewHelper130 = $self->getViewHelper('$viewHelper130', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper130->setArguments($arguments26);
$viewHelper130->setRenderingContext($renderingContext);
$viewHelper130->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output25 .= $viewHelper130->initializeArgumentsAndRender();

$output25 .= '
				</div>
		  ';
return $output25;
};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
		  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments131 = array();
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output133 = '';

$output133 .= '
				<div class="table" style="text-align:center;margin-top: 30px">
					<table>
						<caption><h3>Neuigkeiten</h3></caption>
						';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments134 = array();
$arguments134['pageUid'] = '13';
$arguments134['additionalAttributes'] = NULL;
$arguments134['data'] = NULL;
$arguments134['class'] = NULL;
$arguments134['dir'] = NULL;
$arguments134['id'] = NULL;
$arguments134['lang'] = NULL;
$arguments134['style'] = NULL;
$arguments134['title'] = NULL;
$arguments134['accesskey'] = NULL;
$arguments134['tabindex'] = NULL;
$arguments134['onclick'] = NULL;
$arguments134['forceClosingTag'] = false;
$arguments134['hideIfEmpty'] = false;
$arguments134['contenteditable'] = NULL;
$arguments134['contextmenu'] = NULL;
$arguments134['draggable'] = NULL;
$arguments134['dropzone'] = NULL;
$arguments134['translate'] = NULL;
$arguments134['spellcheck'] = NULL;
$arguments134['hidden'] = NULL;
$arguments134['showAccessProtected'] = false;
$arguments134['classAccessProtected'] = 'protected';
$arguments134['classAccessGranted'] = 'access-granted';
$arguments134['useShortcutUid'] = NULL;
$arguments134['useShortcutTarget'] = NULL;
$arguments134['useShortcutData'] = false;
$arguments134['tagName'] = 'ul';
$arguments134['tagNameChildren'] = 'li';
$arguments134['entryLevel'] = 0;
$arguments134['levels'] = 1;
$arguments134['expandAll'] = false;
$arguments134['classFirst'] = '';
$arguments134['classLast'] = '';
$arguments134['classActive'] = 'active';
$arguments134['classCurrent'] = 'current';
$arguments134['classHasSubpages'] = 'sub';
$arguments134['substElementUid'] = false;
$arguments134['showHiddenInMenu'] = false;
$arguments134['showCurrent'] = true;
$arguments134['linkCurrent'] = true;
$arguments134['linkActive'] = true;
$arguments134['titleFields'] = 'nav_title,title';
$arguments134['includeAnchorTitle'] = true;
$arguments134['includeSpacers'] = false;
$arguments134['deferred'] = false;
$arguments134['as'] = 'menu';
$arguments134['rootLineAs'] = 'rootLine';
$arguments134['excludePages'] = '';
$arguments134['forceAbsoluteUrl'] = false;
$arguments134['doktypes'] = '';
$arguments134['divider'] = NULL;
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output136 = '';

$output136 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments137 = array();
$arguments137['each'] = $currentVariableContainer->getOrNull('menu');
$arguments137['as'] = 'item';
// Rendering Boolean node
$arguments137['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments137['key'] = '';
$arguments137['iteration'] = NULL;
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output139 = '';

$output139 .= '
								';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments140 = array();
$arguments140['name'] = 'content';
$arguments140['value'] = NULL;
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments142 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments143 = array();
$arguments143['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments143['keepQuotes'] = false;
$arguments143['encoding'] = NULL;
$arguments143['doubleEncode'] = true;
$renderChildrenClosure144 = function() {return NULL;};
$value145 = ($arguments143['value'] !== NULL ? $arguments143['value'] : $renderChildrenClosure144());
$arguments142['pageUid'] = (!is_string($value145) ? $value145 : htmlspecialchars($value145, ($arguments143['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments143['encoding'] !== NULL ? $arguments143['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments143['doubleEncode']));
$arguments142['column'] = '0';
$arguments142['order'] = 'sorting';
$arguments142['sortDirection'] = 'ASC';
$arguments142['contentUids'] = NULL;
$arguments142['sectionIndexOnly'] = false;
$arguments142['loadRegister'] = NULL;
$arguments142['render'] = false;
$arguments142['hideUntranslated'] = false;
$arguments142['limit'] = NULL;
$arguments142['slide'] = 0;
$arguments142['slideCollect'] = 0;
$arguments142['slideCollectReverse'] = false;
$renderChildrenClosure146 = function() {return NULL;};
$viewHelper147 = $self->getViewHelper('$viewHelper147', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper147->setArguments($arguments142);
$viewHelper147->setRenderingContext($renderingContext);
$viewHelper147->setRenderChildrenClosure($renderChildrenClosure146);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper147->initializeArgumentsAndRender();
};

$output139 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments140, isset($arguments140['value']) ? function() use ($arguments140) { return $arguments140['value']; } : $renderChildrenClosure141, $renderingContext);

$output139 .= '
								';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments148 = array();
$arguments148['table'] = 'tt_content';
$arguments148['field'] = 'pi_flexform';
$arguments148['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments148['as'] = 'flexformData';
$arguments148['record'] = NULL;
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output150 = '';

$output150 .= '
									<tr>
										<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments151 = array();
$arguments151['date'] = NULL;
$arguments151['format'] = '';
$arguments151['base'] = NULL;
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.date', $renderingContext);
};

$output150 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output150 .= '</td>
										<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments153 = array();
$arguments153['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments153['target'] = '';
$arguments153['class'] = '';
$arguments153['title'] = '';
$arguments153['additionalParams'] = '';
$arguments153['additionalAttributes'] = array (
);
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments155 = array();
$arguments155['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments155['keepQuotes'] = false;
$arguments155['encoding'] = NULL;
$arguments155['doubleEncode'] = true;
$renderChildrenClosure156 = function() {return NULL;};
$value157 = ($arguments155['value'] !== NULL ? $arguments155['value'] : $renderChildrenClosure156());
return (!is_string($value157) ? $value157 : htmlspecialchars($value157, ($arguments155['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments155['encoding'] !== NULL ? $arguments155['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments155['doubleEncode']));
};

$output150 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output150 .= '</td>
									</tr>
								';
return $output150;
};

$output139 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output139 .= '
							';
return $output139;
};

$output136 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output136 .= '
						';
return $output136;
};
$viewHelper158 = $self->getViewHelper('$viewHelper158', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper158->setArguments($arguments134);
$viewHelper158->setRenderingContext($renderingContext);
$viewHelper158->setRenderChildrenClosure($renderChildrenClosure135);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output133 .= $viewHelper158->initializeArgumentsAndRender();

$output133 .= '
					</table>
				</div>
		  ';
return $output133;
};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output22 .= '
		';
return $output22;
};
$arguments20['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output159 = '';

$output159 .= '
				<h2 class="text-center">Neuigkeiten</h2>
				<div class="text-container">
					';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments160 = array();
$arguments160['pageUid'] = '13';
$arguments160['additionalAttributes'] = NULL;
$arguments160['data'] = NULL;
$arguments160['class'] = NULL;
$arguments160['dir'] = NULL;
$arguments160['id'] = NULL;
$arguments160['lang'] = NULL;
$arguments160['style'] = NULL;
$arguments160['title'] = NULL;
$arguments160['accesskey'] = NULL;
$arguments160['tabindex'] = NULL;
$arguments160['onclick'] = NULL;
$arguments160['forceClosingTag'] = false;
$arguments160['hideIfEmpty'] = false;
$arguments160['contenteditable'] = NULL;
$arguments160['contextmenu'] = NULL;
$arguments160['draggable'] = NULL;
$arguments160['dropzone'] = NULL;
$arguments160['translate'] = NULL;
$arguments160['spellcheck'] = NULL;
$arguments160['hidden'] = NULL;
$arguments160['showAccessProtected'] = false;
$arguments160['classAccessProtected'] = 'protected';
$arguments160['classAccessGranted'] = 'access-granted';
$arguments160['useShortcutUid'] = NULL;
$arguments160['useShortcutTarget'] = NULL;
$arguments160['useShortcutData'] = false;
$arguments160['tagName'] = 'ul';
$arguments160['tagNameChildren'] = 'li';
$arguments160['entryLevel'] = 0;
$arguments160['levels'] = 1;
$arguments160['expandAll'] = false;
$arguments160['classFirst'] = '';
$arguments160['classLast'] = '';
$arguments160['classActive'] = 'active';
$arguments160['classCurrent'] = 'current';
$arguments160['classHasSubpages'] = 'sub';
$arguments160['substElementUid'] = false;
$arguments160['showHiddenInMenu'] = false;
$arguments160['showCurrent'] = true;
$arguments160['linkCurrent'] = true;
$arguments160['linkActive'] = true;
$arguments160['titleFields'] = 'nav_title,title';
$arguments160['includeAnchorTitle'] = true;
$arguments160['includeSpacers'] = false;
$arguments160['deferred'] = false;
$arguments160['as'] = 'menu';
$arguments160['rootLineAs'] = 'rootLine';
$arguments160['excludePages'] = '';
$arguments160['forceAbsoluteUrl'] = false;
$arguments160['doktypes'] = '';
$arguments160['divider'] = NULL;
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output162 = '';

$output162 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments163 = array();
// Rendering Boolean node
$arguments163['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'maxInput', $renderingContext));
$arguments163['then'] = NULL;
$arguments163['else'] = NULL;
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output165 = '';

$output165 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments166 = array();
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output168 = '';

$output168 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments169 = array();
$arguments169['each'] = $currentVariableContainer->getOrNull('menu');
$arguments169['as'] = 'item';
// Rendering Boolean node
$arguments169['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments169['iteration'] = 'iterator';
$arguments169['key'] = '';
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output171 = '';

$output171 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments172 = array();
// Rendering Boolean node
$arguments172['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext), \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'maxInput', $renderingContext));
$arguments172['then'] = NULL;
$arguments172['else'] = NULL;
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output174 = '';

$output174 .= '
										';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments175 = array();
$arguments175['name'] = 'content';
$arguments175['value'] = NULL;
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments177 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments178 = array();
$arguments178['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments178['keepQuotes'] = false;
$arguments178['encoding'] = NULL;
$arguments178['doubleEncode'] = true;
$renderChildrenClosure179 = function() {return NULL;};
$value180 = ($arguments178['value'] !== NULL ? $arguments178['value'] : $renderChildrenClosure179());
$arguments177['pageUid'] = (!is_string($value180) ? $value180 : htmlspecialchars($value180, ($arguments178['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments178['encoding'] !== NULL ? $arguments178['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments178['doubleEncode']));
$arguments177['column'] = '0';
$arguments177['order'] = 'sorting';
$arguments177['sortDirection'] = 'ASC';
$arguments177['contentUids'] = NULL;
$arguments177['sectionIndexOnly'] = false;
$arguments177['loadRegister'] = NULL;
$arguments177['render'] = false;
$arguments177['hideUntranslated'] = false;
$arguments177['limit'] = NULL;
$arguments177['slide'] = 0;
$arguments177['slideCollect'] = 0;
$arguments177['slideCollectReverse'] = false;
$renderChildrenClosure181 = function() {return NULL;};
$viewHelper182 = $self->getViewHelper('$viewHelper182', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper182->setArguments($arguments177);
$viewHelper182->setRenderingContext($renderingContext);
$viewHelper182->setRenderChildrenClosure($renderChildrenClosure181);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper182->initializeArgumentsAndRender();
};

$output174 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments175, isset($arguments175['value']) ? function() use ($arguments175) { return $arguments175['value']; } : $renderChildrenClosure176, $renderingContext);

$output174 .= '
										';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments183 = array();
$arguments183['table'] = 'tt_content';
$arguments183['field'] = 'pi_flexform';
$arguments183['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments183['as'] = 'flexformData';
$arguments183['record'] = NULL;
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output185 = '';

$output185 .= '
											<div class="news-content">
												<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments186 = array();
$arguments186['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments186['target'] = '';
$arguments186['class'] = '';
$arguments186['title'] = '';
$arguments186['additionalParams'] = '';
$arguments186['additionalAttributes'] = array (
);
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments188 = array();
$arguments188['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments188['keepQuotes'] = false;
$arguments188['encoding'] = NULL;
$arguments188['doubleEncode'] = true;
$renderChildrenClosure189 = function() {return NULL;};
$value190 = ($arguments188['value'] !== NULL ? $arguments188['value'] : $renderChildrenClosure189());
return (!is_string($value190) ? $value190 : htmlspecialchars($value190, ($arguments188['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments188['encoding'] !== NULL ? $arguments188['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments188['doubleEncode']));
};

$output185 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output185 .= '</h3>
												<h5>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments191 = array();
$arguments191['date'] = NULL;
$arguments191['format'] = '';
$arguments191['base'] = NULL;
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.date', $renderingContext);
};

$output185 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output185 .= '</h5>
											</div>
										';
return $output185;
};

$output174 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output174 .= '
									';
return $output174;
};

$output171 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output171 .= '
								';
return $output171;
};

$output168 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output168 .= '
							';
return $output168;
};

$output165 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output165 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments193 = array();
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output195 = '';

$output195 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments196 = array();
$arguments196['each'] = $currentVariableContainer->getOrNull('menu');
$arguments196['as'] = 'item';
// Rendering Boolean node
$arguments196['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments196['key'] = '';
$arguments196['iteration'] = NULL;
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output198 = '';

$output198 .= '
									';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments199 = array();
$arguments199['name'] = 'content';
$arguments199['value'] = NULL;
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments201 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments202 = array();
$arguments202['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments202['keepQuotes'] = false;
$arguments202['encoding'] = NULL;
$arguments202['doubleEncode'] = true;
$renderChildrenClosure203 = function() {return NULL;};
$value204 = ($arguments202['value'] !== NULL ? $arguments202['value'] : $renderChildrenClosure203());
$arguments201['pageUid'] = (!is_string($value204) ? $value204 : htmlspecialchars($value204, ($arguments202['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments202['encoding'] !== NULL ? $arguments202['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments202['doubleEncode']));
$arguments201['column'] = '0';
$arguments201['order'] = 'sorting';
$arguments201['sortDirection'] = 'ASC';
$arguments201['contentUids'] = NULL;
$arguments201['sectionIndexOnly'] = false;
$arguments201['loadRegister'] = NULL;
$arguments201['render'] = false;
$arguments201['hideUntranslated'] = false;
$arguments201['limit'] = NULL;
$arguments201['slide'] = 0;
$arguments201['slideCollect'] = 0;
$arguments201['slideCollectReverse'] = false;
$renderChildrenClosure205 = function() {return NULL;};
$viewHelper206 = $self->getViewHelper('$viewHelper206', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper206->setArguments($arguments201);
$viewHelper206->setRenderingContext($renderingContext);
$viewHelper206->setRenderChildrenClosure($renderChildrenClosure205);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper206->initializeArgumentsAndRender();
};

$output198 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments199, isset($arguments199['value']) ? function() use ($arguments199) { return $arguments199['value']; } : $renderChildrenClosure200, $renderingContext);

$output198 .= '
									';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments207 = array();
$arguments207['table'] = 'tt_content';
$arguments207['field'] = 'pi_flexform';
$arguments207['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments207['as'] = 'flexformData';
$arguments207['record'] = NULL;
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output209 = '';

$output209 .= '
										<div class="news-content">
											<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments210 = array();
$arguments210['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments210['target'] = '';
$arguments210['class'] = '';
$arguments210['title'] = '';
$arguments210['additionalParams'] = '';
$arguments210['additionalAttributes'] = array (
);
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments212 = array();
$arguments212['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments212['keepQuotes'] = false;
$arguments212['encoding'] = NULL;
$arguments212['doubleEncode'] = true;
$renderChildrenClosure213 = function() {return NULL;};
$value214 = ($arguments212['value'] !== NULL ? $arguments212['value'] : $renderChildrenClosure213());
return (!is_string($value214) ? $value214 : htmlspecialchars($value214, ($arguments212['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments212['encoding'] !== NULL ? $arguments212['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments212['doubleEncode']));
};

$output209 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output209 .= '</h3>
											<h5>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments215 = array();
$arguments215['date'] = NULL;
$arguments215['format'] = '';
$arguments215['base'] = NULL;
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.date', $renderingContext);
};

$output209 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output209 .= '</h5>
										</div>
									';
return $output209;
};

$output198 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output198 .= '
								';
return $output198;
};

$output195 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output195 .= '
							';
return $output195;
};

$output165 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output165 .= '
						';
return $output165;
};
$arguments163['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output217 = '';

$output217 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments218 = array();
$arguments218['each'] = $currentVariableContainer->getOrNull('menu');
$arguments218['as'] = 'item';
// Rendering Boolean node
$arguments218['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments218['iteration'] = 'iterator';
$arguments218['key'] = '';
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output220 = '';

$output220 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments221 = array();
// Rendering Boolean node
$arguments221['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext), \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'maxInput', $renderingContext));
$arguments221['then'] = NULL;
$arguments221['else'] = NULL;
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output223 = '';

$output223 .= '
										';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments224 = array();
$arguments224['name'] = 'content';
$arguments224['value'] = NULL;
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments226 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments227 = array();
$arguments227['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments227['keepQuotes'] = false;
$arguments227['encoding'] = NULL;
$arguments227['doubleEncode'] = true;
$renderChildrenClosure228 = function() {return NULL;};
$value229 = ($arguments227['value'] !== NULL ? $arguments227['value'] : $renderChildrenClosure228());
$arguments226['pageUid'] = (!is_string($value229) ? $value229 : htmlspecialchars($value229, ($arguments227['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments227['encoding'] !== NULL ? $arguments227['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments227['doubleEncode']));
$arguments226['column'] = '0';
$arguments226['order'] = 'sorting';
$arguments226['sortDirection'] = 'ASC';
$arguments226['contentUids'] = NULL;
$arguments226['sectionIndexOnly'] = false;
$arguments226['loadRegister'] = NULL;
$arguments226['render'] = false;
$arguments226['hideUntranslated'] = false;
$arguments226['limit'] = NULL;
$arguments226['slide'] = 0;
$arguments226['slideCollect'] = 0;
$arguments226['slideCollectReverse'] = false;
$renderChildrenClosure230 = function() {return NULL;};
$viewHelper231 = $self->getViewHelper('$viewHelper231', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper231->setArguments($arguments226);
$viewHelper231->setRenderingContext($renderingContext);
$viewHelper231->setRenderChildrenClosure($renderChildrenClosure230);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper231->initializeArgumentsAndRender();
};

$output223 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments224, isset($arguments224['value']) ? function() use ($arguments224) { return $arguments224['value']; } : $renderChildrenClosure225, $renderingContext);

$output223 .= '
										';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments232 = array();
$arguments232['table'] = 'tt_content';
$arguments232['field'] = 'pi_flexform';
$arguments232['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments232['as'] = 'flexformData';
$arguments232['record'] = NULL;
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output234 = '';

$output234 .= '
											<div class="news-content">
												<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments235 = array();
$arguments235['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments235['target'] = '';
$arguments235['class'] = '';
$arguments235['title'] = '';
$arguments235['additionalParams'] = '';
$arguments235['additionalAttributes'] = array (
);
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments237 = array();
$arguments237['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments237['keepQuotes'] = false;
$arguments237['encoding'] = NULL;
$arguments237['doubleEncode'] = true;
$renderChildrenClosure238 = function() {return NULL;};
$value239 = ($arguments237['value'] !== NULL ? $arguments237['value'] : $renderChildrenClosure238());
return (!is_string($value239) ? $value239 : htmlspecialchars($value239, ($arguments237['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments237['encoding'] !== NULL ? $arguments237['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments237['doubleEncode']));
};

$output234 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);

$output234 .= '</h3>
												<h5>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments240 = array();
$arguments240['date'] = NULL;
$arguments240['format'] = '';
$arguments240['base'] = NULL;
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.date', $renderingContext);
};

$output234 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);

$output234 .= '</h5>
											</div>
										';
return $output234;
};

$output223 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);

$output223 .= '
									';
return $output223;
};

$output220 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output220 .= '
								';
return $output220;
};

$output217 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output217 .= '
							';
return $output217;
};
$arguments163['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output242 = '';

$output242 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments243 = array();
$arguments243['each'] = $currentVariableContainer->getOrNull('menu');
$arguments243['as'] = 'item';
// Rendering Boolean node
$arguments243['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments243['key'] = '';
$arguments243['iteration'] = NULL;
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output245 = '';

$output245 .= '
									';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments246 = array();
$arguments246['name'] = 'content';
$arguments246['value'] = NULL;
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments248 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments249 = array();
$arguments249['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments249['keepQuotes'] = false;
$arguments249['encoding'] = NULL;
$arguments249['doubleEncode'] = true;
$renderChildrenClosure250 = function() {return NULL;};
$value251 = ($arguments249['value'] !== NULL ? $arguments249['value'] : $renderChildrenClosure250());
$arguments248['pageUid'] = (!is_string($value251) ? $value251 : htmlspecialchars($value251, ($arguments249['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments249['encoding'] !== NULL ? $arguments249['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments249['doubleEncode']));
$arguments248['column'] = '0';
$arguments248['order'] = 'sorting';
$arguments248['sortDirection'] = 'ASC';
$arguments248['contentUids'] = NULL;
$arguments248['sectionIndexOnly'] = false;
$arguments248['loadRegister'] = NULL;
$arguments248['render'] = false;
$arguments248['hideUntranslated'] = false;
$arguments248['limit'] = NULL;
$arguments248['slide'] = 0;
$arguments248['slideCollect'] = 0;
$arguments248['slideCollectReverse'] = false;
$renderChildrenClosure252 = function() {return NULL;};
$viewHelper253 = $self->getViewHelper('$viewHelper253', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper253->setArguments($arguments248);
$viewHelper253->setRenderingContext($renderingContext);
$viewHelper253->setRenderChildrenClosure($renderChildrenClosure252);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper253->initializeArgumentsAndRender();
};

$output245 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments246, isset($arguments246['value']) ? function() use ($arguments246) { return $arguments246['value']; } : $renderChildrenClosure247, $renderingContext);

$output245 .= '
									';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments254 = array();
$arguments254['table'] = 'tt_content';
$arguments254['field'] = 'pi_flexform';
$arguments254['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments254['as'] = 'flexformData';
$arguments254['record'] = NULL;
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output256 = '';

$output256 .= '
										<div class="news-content">
											<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments257 = array();
$arguments257['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments257['target'] = '';
$arguments257['class'] = '';
$arguments257['title'] = '';
$arguments257['additionalParams'] = '';
$arguments257['additionalAttributes'] = array (
);
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments259 = array();
$arguments259['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments259['keepQuotes'] = false;
$arguments259['encoding'] = NULL;
$arguments259['doubleEncode'] = true;
$renderChildrenClosure260 = function() {return NULL;};
$value261 = ($arguments259['value'] !== NULL ? $arguments259['value'] : $renderChildrenClosure260());
return (!is_string($value261) ? $value261 : htmlspecialchars($value261, ($arguments259['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments259['encoding'] !== NULL ? $arguments259['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments259['doubleEncode']));
};

$output256 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output256 .= '</h3>
											<h5>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments262 = array();
$arguments262['date'] = NULL;
$arguments262['format'] = '';
$arguments262['base'] = NULL;
$renderChildrenClosure263 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.date', $renderingContext);
};

$output256 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments262, $renderChildrenClosure263, $renderingContext);

$output256 .= '</h5>
										</div>
									';
return $output256;
};

$output245 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);

$output245 .= '
								';
return $output245;
};

$output242 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output242 .= '
							';
return $output242;
};

$output162 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output162 .= '
					';
return $output162;
};
$viewHelper264 = $self->getViewHelper('$viewHelper264', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper264->setArguments($arguments160);
$viewHelper264->setRenderingContext($renderingContext);
$viewHelper264->setRenderChildrenClosure($renderChildrenClosure161);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output159 .= $viewHelper264->initializeArgumentsAndRender();

$output159 .= '
				</div>
		  ';
return $output159;
};
$arguments20['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output265 = '';

$output265 .= '
				<div class="table" style="text-align:center;margin-top: 30px">
					<table>
						<caption><h3>Neuigkeiten</h3></caption>
						';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments266 = array();
$arguments266['pageUid'] = '13';
$arguments266['additionalAttributes'] = NULL;
$arguments266['data'] = NULL;
$arguments266['class'] = NULL;
$arguments266['dir'] = NULL;
$arguments266['id'] = NULL;
$arguments266['lang'] = NULL;
$arguments266['style'] = NULL;
$arguments266['title'] = NULL;
$arguments266['accesskey'] = NULL;
$arguments266['tabindex'] = NULL;
$arguments266['onclick'] = NULL;
$arguments266['forceClosingTag'] = false;
$arguments266['hideIfEmpty'] = false;
$arguments266['contenteditable'] = NULL;
$arguments266['contextmenu'] = NULL;
$arguments266['draggable'] = NULL;
$arguments266['dropzone'] = NULL;
$arguments266['translate'] = NULL;
$arguments266['spellcheck'] = NULL;
$arguments266['hidden'] = NULL;
$arguments266['showAccessProtected'] = false;
$arguments266['classAccessProtected'] = 'protected';
$arguments266['classAccessGranted'] = 'access-granted';
$arguments266['useShortcutUid'] = NULL;
$arguments266['useShortcutTarget'] = NULL;
$arguments266['useShortcutData'] = false;
$arguments266['tagName'] = 'ul';
$arguments266['tagNameChildren'] = 'li';
$arguments266['entryLevel'] = 0;
$arguments266['levels'] = 1;
$arguments266['expandAll'] = false;
$arguments266['classFirst'] = '';
$arguments266['classLast'] = '';
$arguments266['classActive'] = 'active';
$arguments266['classCurrent'] = 'current';
$arguments266['classHasSubpages'] = 'sub';
$arguments266['substElementUid'] = false;
$arguments266['showHiddenInMenu'] = false;
$arguments266['showCurrent'] = true;
$arguments266['linkCurrent'] = true;
$arguments266['linkActive'] = true;
$arguments266['titleFields'] = 'nav_title,title';
$arguments266['includeAnchorTitle'] = true;
$arguments266['includeSpacers'] = false;
$arguments266['deferred'] = false;
$arguments266['as'] = 'menu';
$arguments266['rootLineAs'] = 'rootLine';
$arguments266['excludePages'] = '';
$arguments266['forceAbsoluteUrl'] = false;
$arguments266['doktypes'] = '';
$arguments266['divider'] = NULL;
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output268 = '';

$output268 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments269 = array();
$arguments269['each'] = $currentVariableContainer->getOrNull('menu');
$arguments269['as'] = 'item';
// Rendering Boolean node
$arguments269['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments269['key'] = '';
$arguments269['iteration'] = NULL;
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output271 = '';

$output271 .= '
								';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments272 = array();
$arguments272['name'] = 'content';
$arguments272['value'] = NULL;
$renderChildrenClosure273 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments274 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments275 = array();
$arguments275['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments275['keepQuotes'] = false;
$arguments275['encoding'] = NULL;
$arguments275['doubleEncode'] = true;
$renderChildrenClosure276 = function() {return NULL;};
$value277 = ($arguments275['value'] !== NULL ? $arguments275['value'] : $renderChildrenClosure276());
$arguments274['pageUid'] = (!is_string($value277) ? $value277 : htmlspecialchars($value277, ($arguments275['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments275['encoding'] !== NULL ? $arguments275['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments275['doubleEncode']));
$arguments274['column'] = '0';
$arguments274['order'] = 'sorting';
$arguments274['sortDirection'] = 'ASC';
$arguments274['contentUids'] = NULL;
$arguments274['sectionIndexOnly'] = false;
$arguments274['loadRegister'] = NULL;
$arguments274['render'] = false;
$arguments274['hideUntranslated'] = false;
$arguments274['limit'] = NULL;
$arguments274['slide'] = 0;
$arguments274['slideCollect'] = 0;
$arguments274['slideCollectReverse'] = false;
$renderChildrenClosure278 = function() {return NULL;};
$viewHelper279 = $self->getViewHelper('$viewHelper279', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper279->setArguments($arguments274);
$viewHelper279->setRenderingContext($renderingContext);
$viewHelper279->setRenderChildrenClosure($renderChildrenClosure278);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper279->initializeArgumentsAndRender();
};

$output271 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments272, isset($arguments272['value']) ? function() use ($arguments272) { return $arguments272['value']; } : $renderChildrenClosure273, $renderingContext);

$output271 .= '
								';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments280 = array();
$arguments280['table'] = 'tt_content';
$arguments280['field'] = 'pi_flexform';
$arguments280['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments280['as'] = 'flexformData';
$arguments280['record'] = NULL;
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output282 = '';

$output282 .= '
									<tr>
										<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments283 = array();
$arguments283['date'] = NULL;
$arguments283['format'] = '';
$arguments283['base'] = NULL;
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.date', $renderingContext);
};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);

$output282 .= '</td>
										<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments285 = array();
$arguments285['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments285['target'] = '';
$arguments285['class'] = '';
$arguments285['title'] = '';
$arguments285['additionalParams'] = '';
$arguments285['additionalAttributes'] = array (
);
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments287 = array();
$arguments287['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments287['keepQuotes'] = false;
$arguments287['encoding'] = NULL;
$arguments287['doubleEncode'] = true;
$renderChildrenClosure288 = function() {return NULL;};
$value289 = ($arguments287['value'] !== NULL ? $arguments287['value'] : $renderChildrenClosure288());
return (!is_string($value289) ? $value289 : htmlspecialchars($value289, ($arguments287['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments287['encoding'] !== NULL ? $arguments287['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments287['doubleEncode']));
};

$output282 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output282 .= '</td>
									</tr>
								';
return $output282;
};

$output271 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext);

$output271 .= '
							';
return $output271;
};

$output268 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output268 .= '
						';
return $output268;
};
$viewHelper290 = $self->getViewHelper('$viewHelper290', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper290->setArguments($arguments266);
$viewHelper290->setRenderingContext($renderingContext);
$viewHelper290->setRenderChildrenClosure($renderChildrenClosure267);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output265 .= $viewHelper290->initializeArgumentsAndRender();

$output265 .= '
					</table>
				</div>
		  ';
return $output265;
};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
	';


return $output19;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output291 = '';

$output291 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments292 = array();
$arguments292['name'] = 'Content';
$renderChildrenClosure293 = function() {return NULL;};
$viewHelper294 = $self->getViewHelper('$viewHelper294', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper294->setArguments($arguments292);
$viewHelper294->setRenderingContext($renderingContext);
$viewHelper294->setRenderChildrenClosure($renderChildrenClosure293);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output291 .= $viewHelper294->initializeArgumentsAndRender();

$output291 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments295 = array();
$arguments295['name'] = 'Configuration';
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output297 = '';

$output297 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments298 = array();
$arguments298['id'] = 'newslist';
// Rendering Array
$array299 = array();
$array299['group'] = 'SKK Spezialanfertigung';
$arguments298['options'] = $array299;
$arguments298['localLanguageFileRelativePath'] = '/Resources/Private/Language/Content/locallang_newslist.xlf';
$arguments298['label'] = NULL;
$arguments298['description'] = NULL;
$arguments298['enabled'] = true;
$arguments298['compact'] = false;
$arguments298['variables'] = array (
);
$arguments298['extensionName'] = NULL;
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output301 = '';

$output301 .= '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:flexform tag -->
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper
$arguments302 = array();
$arguments302['name'] = 'settings.maxInput';
$arguments302['label'] = 'Maximale Anzahl der Neuigkeiten (nur bei Startseite)';
$arguments302['default'] = NULL;
$arguments302['required'] = false;
$arguments302['exclude'] = false;
$arguments302['transform'] = NULL;
$arguments302['enabled'] = true;
$arguments302['requestUpdate'] = false;
$arguments302['displayCond'] = NULL;
$arguments302['inherit'] = true;
$arguments302['inheritEmpty'] = true;
$arguments302['clear'] = false;
$arguments302['variables'] = array (
);
$arguments302['extensionName'] = NULL;
$arguments302['eval'] = 'trim';
$arguments302['size'] = 32;
$arguments302['maxCharacters'] = NULL;
$arguments302['minimum'] = NULL;
$arguments302['maximum'] = NULL;
$arguments302['placeholder'] = NULL;
$renderChildrenClosure303 = function() {return NULL;};

$output301 .= FluidTYPO3\Flux\ViewHelpers\Field\InputViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext);

$output301 .= '
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper
$arguments304 = array();
$arguments304['name'] = 'settings.position';
// Rendering Array
$array305 = array();
// Rendering Array
$array306 = array();
$array306['0'] = 'Startseite';
$array306['1'] = 'landingpage';
$array305['0'] = $array306;
// Rendering Array
$array307 = array();
$array307['0'] = 'Presse';
$array307['1'] = 'press';
$array305['1'] = $array307;
$arguments304['items'] = $array305;
$arguments304['label'] = 'Ausgabeseite';
$arguments304['default'] = NULL;
$arguments304['required'] = false;
$arguments304['exclude'] = false;
$arguments304['transform'] = NULL;
$arguments304['enabled'] = true;
$arguments304['requestUpdate'] = false;
$arguments304['displayCond'] = NULL;
$arguments304['inherit'] = true;
$arguments304['inheritEmpty'] = true;
$arguments304['clear'] = false;
$arguments304['variables'] = array (
);
$arguments304['extensionName'] = NULL;
$arguments304['validate'] = 'trim';
$arguments304['size'] = 1;
$arguments304['multiple'] = false;
$arguments304['minItems'] = 0;
$arguments304['maxItems'] = 1;
$arguments304['itemListStyle'] = NULL;
$arguments304['selectedListStyle'] = NULL;
$arguments304['emptyOption'] = false;
$arguments304['translateCsvItems'] = NULL;
$arguments304['itemsProcFunc'] = NULL;
$arguments304['renderType'] = 'selectSingle';
$arguments304['showIconTable'] = false;
$renderChildrenClosure308 = function() {return NULL;};

$output301 .= FluidTYPO3\Flux\ViewHelpers\Field\SelectViewHelper::renderStatic($arguments304, $renderChildrenClosure308, $renderingContext);

$output301 .= '
		';
return $output301;
};

$output297 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments298, $renderChildrenClosure300, $renderingContext);

$output297 .= '
	';
return $output297;
};

$output291 .= '';

$output291 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments309 = array();
$arguments309['name'] = 'Preview';
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output311 = '';

$output311 .= '
		<!-- If you wish, place custom backend preview content here -->
		<strong>Liste der Neuigkeiten</strong><br>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments312 = array();
// Rendering Boolean node
$arguments312['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'position', $renderingContext), 'landingpage');
$arguments312['then'] = NULL;
$arguments312['else'] = NULL;
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output314 = '';

$output314 .= 'Maximale Items: ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments315 = array();
$arguments315['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'maxInput', $renderingContext);
$arguments315['keepQuotes'] = false;
$arguments315['encoding'] = NULL;
$arguments315['doubleEncode'] = true;
$renderChildrenClosure316 = function() {return NULL;};
$value317 = ($arguments315['value'] !== NULL ? $arguments315['value'] : $renderChildrenClosure316());

$output314 .= (!is_string($value317) ? $value317 : htmlspecialchars($value317, ($arguments315['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments315['encoding'] !== NULL ? $arguments315['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments315['doubleEncode']));
return $output314;
};

$output311 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext);

$output311 .= '
	';
return $output311;
};

$output291 .= '';

$output291 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments318 = array();
$arguments318['name'] = 'Main';
$renderChildrenClosure319 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output320 = '';

$output320 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments321 = array();
// Rendering Boolean node
$arguments321['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'position', $renderingContext), 'landingpage');
$arguments321['then'] = NULL;
$arguments321['else'] = NULL;
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output323 = '';

$output323 .= '
		  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments324 = array();
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output326 = '';

$output326 .= '
				<h2 class="text-center">Neuigkeiten</h2>
				<div class="text-container">
					';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments327 = array();
$arguments327['pageUid'] = '13';
$arguments327['additionalAttributes'] = NULL;
$arguments327['data'] = NULL;
$arguments327['class'] = NULL;
$arguments327['dir'] = NULL;
$arguments327['id'] = NULL;
$arguments327['lang'] = NULL;
$arguments327['style'] = NULL;
$arguments327['title'] = NULL;
$arguments327['accesskey'] = NULL;
$arguments327['tabindex'] = NULL;
$arguments327['onclick'] = NULL;
$arguments327['forceClosingTag'] = false;
$arguments327['hideIfEmpty'] = false;
$arguments327['contenteditable'] = NULL;
$arguments327['contextmenu'] = NULL;
$arguments327['draggable'] = NULL;
$arguments327['dropzone'] = NULL;
$arguments327['translate'] = NULL;
$arguments327['spellcheck'] = NULL;
$arguments327['hidden'] = NULL;
$arguments327['showAccessProtected'] = false;
$arguments327['classAccessProtected'] = 'protected';
$arguments327['classAccessGranted'] = 'access-granted';
$arguments327['useShortcutUid'] = NULL;
$arguments327['useShortcutTarget'] = NULL;
$arguments327['useShortcutData'] = false;
$arguments327['tagName'] = 'ul';
$arguments327['tagNameChildren'] = 'li';
$arguments327['entryLevel'] = 0;
$arguments327['levels'] = 1;
$arguments327['expandAll'] = false;
$arguments327['classFirst'] = '';
$arguments327['classLast'] = '';
$arguments327['classActive'] = 'active';
$arguments327['classCurrent'] = 'current';
$arguments327['classHasSubpages'] = 'sub';
$arguments327['substElementUid'] = false;
$arguments327['showHiddenInMenu'] = false;
$arguments327['showCurrent'] = true;
$arguments327['linkCurrent'] = true;
$arguments327['linkActive'] = true;
$arguments327['titleFields'] = 'nav_title,title';
$arguments327['includeAnchorTitle'] = true;
$arguments327['includeSpacers'] = false;
$arguments327['deferred'] = false;
$arguments327['as'] = 'menu';
$arguments327['rootLineAs'] = 'rootLine';
$arguments327['excludePages'] = '';
$arguments327['forceAbsoluteUrl'] = false;
$arguments327['doktypes'] = '';
$arguments327['divider'] = NULL;
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output329 = '';

$output329 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments330 = array();
// Rendering Boolean node
$arguments330['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'maxInput', $renderingContext));
$arguments330['then'] = NULL;
$arguments330['else'] = NULL;
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output332 = '';

$output332 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments333 = array();
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output335 = '';

$output335 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments336 = array();
$arguments336['each'] = $currentVariableContainer->getOrNull('menu');
$arguments336['as'] = 'item';
// Rendering Boolean node
$arguments336['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments336['iteration'] = 'iterator';
$arguments336['key'] = '';
$renderChildrenClosure337 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output338 = '';

$output338 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments339 = array();
// Rendering Boolean node
$arguments339['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext), \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'maxInput', $renderingContext));
$arguments339['then'] = NULL;
$arguments339['else'] = NULL;
$renderChildrenClosure340 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output341 = '';

$output341 .= '
										';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments342 = array();
$arguments342['name'] = 'content';
$arguments342['value'] = NULL;
$renderChildrenClosure343 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments344 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments345 = array();
$arguments345['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments345['keepQuotes'] = false;
$arguments345['encoding'] = NULL;
$arguments345['doubleEncode'] = true;
$renderChildrenClosure346 = function() {return NULL;};
$value347 = ($arguments345['value'] !== NULL ? $arguments345['value'] : $renderChildrenClosure346());
$arguments344['pageUid'] = (!is_string($value347) ? $value347 : htmlspecialchars($value347, ($arguments345['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments345['encoding'] !== NULL ? $arguments345['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments345['doubleEncode']));
$arguments344['column'] = '0';
$arguments344['order'] = 'sorting';
$arguments344['sortDirection'] = 'ASC';
$arguments344['contentUids'] = NULL;
$arguments344['sectionIndexOnly'] = false;
$arguments344['loadRegister'] = NULL;
$arguments344['render'] = false;
$arguments344['hideUntranslated'] = false;
$arguments344['limit'] = NULL;
$arguments344['slide'] = 0;
$arguments344['slideCollect'] = 0;
$arguments344['slideCollectReverse'] = false;
$renderChildrenClosure348 = function() {return NULL;};
$viewHelper349 = $self->getViewHelper('$viewHelper349', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper349->setArguments($arguments344);
$viewHelper349->setRenderingContext($renderingContext);
$viewHelper349->setRenderChildrenClosure($renderChildrenClosure348);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper349->initializeArgumentsAndRender();
};

$output341 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments342, isset($arguments342['value']) ? function() use ($arguments342) { return $arguments342['value']; } : $renderChildrenClosure343, $renderingContext);

$output341 .= '
										';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments350 = array();
$arguments350['table'] = 'tt_content';
$arguments350['field'] = 'pi_flexform';
$arguments350['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments350['as'] = 'flexformData';
$arguments350['record'] = NULL;
$renderChildrenClosure351 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output352 = '';

$output352 .= '
											<div class="news-content">
												<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments353 = array();
$arguments353['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments353['target'] = '';
$arguments353['class'] = '';
$arguments353['title'] = '';
$arguments353['additionalParams'] = '';
$arguments353['additionalAttributes'] = array (
);
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments355 = array();
$arguments355['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments355['keepQuotes'] = false;
$arguments355['encoding'] = NULL;
$arguments355['doubleEncode'] = true;
$renderChildrenClosure356 = function() {return NULL;};
$value357 = ($arguments355['value'] !== NULL ? $arguments355['value'] : $renderChildrenClosure356());
return (!is_string($value357) ? $value357 : htmlspecialchars($value357, ($arguments355['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments355['encoding'] !== NULL ? $arguments355['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments355['doubleEncode']));
};

$output352 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);

$output352 .= '</h3>
												<h5>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments358 = array();
$arguments358['date'] = NULL;
$arguments358['format'] = '';
$arguments358['base'] = NULL;
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.date', $renderingContext);
};

$output352 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext);

$output352 .= '</h5>
											</div>
										';
return $output352;
};

$output341 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments350, $renderChildrenClosure351, $renderingContext);

$output341 .= '
									';
return $output341;
};

$output338 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments339, $renderChildrenClosure340, $renderingContext);

$output338 .= '
								';
return $output338;
};

$output335 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments336, $renderChildrenClosure337, $renderingContext);

$output335 .= '
							';
return $output335;
};

$output332 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext);

$output332 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments360 = array();
$renderChildrenClosure361 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output362 = '';

$output362 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments363 = array();
$arguments363['each'] = $currentVariableContainer->getOrNull('menu');
$arguments363['as'] = 'item';
// Rendering Boolean node
$arguments363['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments363['key'] = '';
$arguments363['iteration'] = NULL;
$renderChildrenClosure364 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output365 = '';

$output365 .= '
									';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments366 = array();
$arguments366['name'] = 'content';
$arguments366['value'] = NULL;
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments368 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments369 = array();
$arguments369['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments369['keepQuotes'] = false;
$arguments369['encoding'] = NULL;
$arguments369['doubleEncode'] = true;
$renderChildrenClosure370 = function() {return NULL;};
$value371 = ($arguments369['value'] !== NULL ? $arguments369['value'] : $renderChildrenClosure370());
$arguments368['pageUid'] = (!is_string($value371) ? $value371 : htmlspecialchars($value371, ($arguments369['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments369['encoding'] !== NULL ? $arguments369['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments369['doubleEncode']));
$arguments368['column'] = '0';
$arguments368['order'] = 'sorting';
$arguments368['sortDirection'] = 'ASC';
$arguments368['contentUids'] = NULL;
$arguments368['sectionIndexOnly'] = false;
$arguments368['loadRegister'] = NULL;
$arguments368['render'] = false;
$arguments368['hideUntranslated'] = false;
$arguments368['limit'] = NULL;
$arguments368['slide'] = 0;
$arguments368['slideCollect'] = 0;
$arguments368['slideCollectReverse'] = false;
$renderChildrenClosure372 = function() {return NULL;};
$viewHelper373 = $self->getViewHelper('$viewHelper373', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper373->setArguments($arguments368);
$viewHelper373->setRenderingContext($renderingContext);
$viewHelper373->setRenderChildrenClosure($renderChildrenClosure372);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper373->initializeArgumentsAndRender();
};

$output365 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments366, isset($arguments366['value']) ? function() use ($arguments366) { return $arguments366['value']; } : $renderChildrenClosure367, $renderingContext);

$output365 .= '
									';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments374 = array();
$arguments374['table'] = 'tt_content';
$arguments374['field'] = 'pi_flexform';
$arguments374['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments374['as'] = 'flexformData';
$arguments374['record'] = NULL;
$renderChildrenClosure375 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output376 = '';

$output376 .= '
										<div class="news-content">
											<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments377 = array();
$arguments377['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments377['target'] = '';
$arguments377['class'] = '';
$arguments377['title'] = '';
$arguments377['additionalParams'] = '';
$arguments377['additionalAttributes'] = array (
);
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments379 = array();
$arguments379['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments379['keepQuotes'] = false;
$arguments379['encoding'] = NULL;
$arguments379['doubleEncode'] = true;
$renderChildrenClosure380 = function() {return NULL;};
$value381 = ($arguments379['value'] !== NULL ? $arguments379['value'] : $renderChildrenClosure380());
return (!is_string($value381) ? $value381 : htmlspecialchars($value381, ($arguments379['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments379['encoding'] !== NULL ? $arguments379['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments379['doubleEncode']));
};

$output376 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments377, $renderChildrenClosure378, $renderingContext);

$output376 .= '</h3>
											<h5>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments382 = array();
$arguments382['date'] = NULL;
$arguments382['format'] = '';
$arguments382['base'] = NULL;
$renderChildrenClosure383 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.date', $renderingContext);
};

$output376 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments382, $renderChildrenClosure383, $renderingContext);

$output376 .= '</h5>
										</div>
									';
return $output376;
};

$output365 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments374, $renderChildrenClosure375, $renderingContext);

$output365 .= '
								';
return $output365;
};

$output362 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments363, $renderChildrenClosure364, $renderingContext);

$output362 .= '
							';
return $output362;
};

$output332 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments360, $renderChildrenClosure361, $renderingContext);

$output332 .= '
						';
return $output332;
};
$arguments330['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output384 = '';

$output384 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments385 = array();
$arguments385['each'] = $currentVariableContainer->getOrNull('menu');
$arguments385['as'] = 'item';
// Rendering Boolean node
$arguments385['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments385['iteration'] = 'iterator';
$arguments385['key'] = '';
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output387 = '';

$output387 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments388 = array();
// Rendering Boolean node
$arguments388['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext), \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'maxInput', $renderingContext));
$arguments388['then'] = NULL;
$arguments388['else'] = NULL;
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output390 = '';

$output390 .= '
										';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments391 = array();
$arguments391['name'] = 'content';
$arguments391['value'] = NULL;
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments393 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments394 = array();
$arguments394['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments394['keepQuotes'] = false;
$arguments394['encoding'] = NULL;
$arguments394['doubleEncode'] = true;
$renderChildrenClosure395 = function() {return NULL;};
$value396 = ($arguments394['value'] !== NULL ? $arguments394['value'] : $renderChildrenClosure395());
$arguments393['pageUid'] = (!is_string($value396) ? $value396 : htmlspecialchars($value396, ($arguments394['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments394['encoding'] !== NULL ? $arguments394['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments394['doubleEncode']));
$arguments393['column'] = '0';
$arguments393['order'] = 'sorting';
$arguments393['sortDirection'] = 'ASC';
$arguments393['contentUids'] = NULL;
$arguments393['sectionIndexOnly'] = false;
$arguments393['loadRegister'] = NULL;
$arguments393['render'] = false;
$arguments393['hideUntranslated'] = false;
$arguments393['limit'] = NULL;
$arguments393['slide'] = 0;
$arguments393['slideCollect'] = 0;
$arguments393['slideCollectReverse'] = false;
$renderChildrenClosure397 = function() {return NULL;};
$viewHelper398 = $self->getViewHelper('$viewHelper398', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper398->setArguments($arguments393);
$viewHelper398->setRenderingContext($renderingContext);
$viewHelper398->setRenderChildrenClosure($renderChildrenClosure397);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper398->initializeArgumentsAndRender();
};

$output390 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments391, isset($arguments391['value']) ? function() use ($arguments391) { return $arguments391['value']; } : $renderChildrenClosure392, $renderingContext);

$output390 .= '
										';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments399 = array();
$arguments399['table'] = 'tt_content';
$arguments399['field'] = 'pi_flexform';
$arguments399['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments399['as'] = 'flexformData';
$arguments399['record'] = NULL;
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output401 = '';

$output401 .= '
											<div class="news-content">
												<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments402 = array();
$arguments402['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments402['target'] = '';
$arguments402['class'] = '';
$arguments402['title'] = '';
$arguments402['additionalParams'] = '';
$arguments402['additionalAttributes'] = array (
);
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments404 = array();
$arguments404['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments404['keepQuotes'] = false;
$arguments404['encoding'] = NULL;
$arguments404['doubleEncode'] = true;
$renderChildrenClosure405 = function() {return NULL;};
$value406 = ($arguments404['value'] !== NULL ? $arguments404['value'] : $renderChildrenClosure405());
return (!is_string($value406) ? $value406 : htmlspecialchars($value406, ($arguments404['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments404['encoding'] !== NULL ? $arguments404['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments404['doubleEncode']));
};

$output401 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext);

$output401 .= '</h3>
												<h5>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments407 = array();
$arguments407['date'] = NULL;
$arguments407['format'] = '';
$arguments407['base'] = NULL;
$renderChildrenClosure408 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.date', $renderingContext);
};

$output401 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments407, $renderChildrenClosure408, $renderingContext);

$output401 .= '</h5>
											</div>
										';
return $output401;
};

$output390 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments399, $renderChildrenClosure400, $renderingContext);

$output390 .= '
									';
return $output390;
};

$output387 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments388, $renderChildrenClosure389, $renderingContext);

$output387 .= '
								';
return $output387;
};

$output384 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext);

$output384 .= '
							';
return $output384;
};
$arguments330['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output409 = '';

$output409 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments410 = array();
$arguments410['each'] = $currentVariableContainer->getOrNull('menu');
$arguments410['as'] = 'item';
// Rendering Boolean node
$arguments410['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments410['key'] = '';
$arguments410['iteration'] = NULL;
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output412 = '';

$output412 .= '
									';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments413 = array();
$arguments413['name'] = 'content';
$arguments413['value'] = NULL;
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments415 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments416 = array();
$arguments416['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments416['keepQuotes'] = false;
$arguments416['encoding'] = NULL;
$arguments416['doubleEncode'] = true;
$renderChildrenClosure417 = function() {return NULL;};
$value418 = ($arguments416['value'] !== NULL ? $arguments416['value'] : $renderChildrenClosure417());
$arguments415['pageUid'] = (!is_string($value418) ? $value418 : htmlspecialchars($value418, ($arguments416['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments416['encoding'] !== NULL ? $arguments416['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments416['doubleEncode']));
$arguments415['column'] = '0';
$arguments415['order'] = 'sorting';
$arguments415['sortDirection'] = 'ASC';
$arguments415['contentUids'] = NULL;
$arguments415['sectionIndexOnly'] = false;
$arguments415['loadRegister'] = NULL;
$arguments415['render'] = false;
$arguments415['hideUntranslated'] = false;
$arguments415['limit'] = NULL;
$arguments415['slide'] = 0;
$arguments415['slideCollect'] = 0;
$arguments415['slideCollectReverse'] = false;
$renderChildrenClosure419 = function() {return NULL;};
$viewHelper420 = $self->getViewHelper('$viewHelper420', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper420->setArguments($arguments415);
$viewHelper420->setRenderingContext($renderingContext);
$viewHelper420->setRenderChildrenClosure($renderChildrenClosure419);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper420->initializeArgumentsAndRender();
};

$output412 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments413, isset($arguments413['value']) ? function() use ($arguments413) { return $arguments413['value']; } : $renderChildrenClosure414, $renderingContext);

$output412 .= '
									';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments421 = array();
$arguments421['table'] = 'tt_content';
$arguments421['field'] = 'pi_flexform';
$arguments421['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments421['as'] = 'flexformData';
$arguments421['record'] = NULL;
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output423 = '';

$output423 .= '
										<div class="news-content">
											<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments424 = array();
$arguments424['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments424['target'] = '';
$arguments424['class'] = '';
$arguments424['title'] = '';
$arguments424['additionalParams'] = '';
$arguments424['additionalAttributes'] = array (
);
$renderChildrenClosure425 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments426 = array();
$arguments426['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments426['keepQuotes'] = false;
$arguments426['encoding'] = NULL;
$arguments426['doubleEncode'] = true;
$renderChildrenClosure427 = function() {return NULL;};
$value428 = ($arguments426['value'] !== NULL ? $arguments426['value'] : $renderChildrenClosure427());
return (!is_string($value428) ? $value428 : htmlspecialchars($value428, ($arguments426['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments426['encoding'] !== NULL ? $arguments426['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments426['doubleEncode']));
};

$output423 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments424, $renderChildrenClosure425, $renderingContext);

$output423 .= '</h3>
											<h5>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments429 = array();
$arguments429['date'] = NULL;
$arguments429['format'] = '';
$arguments429['base'] = NULL;
$renderChildrenClosure430 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.date', $renderingContext);
};

$output423 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments429, $renderChildrenClosure430, $renderingContext);

$output423 .= '</h5>
										</div>
									';
return $output423;
};

$output412 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments421, $renderChildrenClosure422, $renderingContext);

$output412 .= '
								';
return $output412;
};

$output409 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments410, $renderChildrenClosure411, $renderingContext);

$output409 .= '
							';
return $output409;
};

$output329 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments330, $renderChildrenClosure331, $renderingContext);

$output329 .= '
					';
return $output329;
};
$viewHelper431 = $self->getViewHelper('$viewHelper431', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper431->setArguments($arguments327);
$viewHelper431->setRenderingContext($renderingContext);
$viewHelper431->setRenderChildrenClosure($renderChildrenClosure328);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output326 .= $viewHelper431->initializeArgumentsAndRender();

$output326 .= '
				</div>
		  ';
return $output326;
};

$output323 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);

$output323 .= '
		  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments432 = array();
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output434 = '';

$output434 .= '
				<div class="table" style="text-align:center;margin-top: 30px">
					<table>
						<caption><h3>Neuigkeiten</h3></caption>
						';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments435 = array();
$arguments435['pageUid'] = '13';
$arguments435['additionalAttributes'] = NULL;
$arguments435['data'] = NULL;
$arguments435['class'] = NULL;
$arguments435['dir'] = NULL;
$arguments435['id'] = NULL;
$arguments435['lang'] = NULL;
$arguments435['style'] = NULL;
$arguments435['title'] = NULL;
$arguments435['accesskey'] = NULL;
$arguments435['tabindex'] = NULL;
$arguments435['onclick'] = NULL;
$arguments435['forceClosingTag'] = false;
$arguments435['hideIfEmpty'] = false;
$arguments435['contenteditable'] = NULL;
$arguments435['contextmenu'] = NULL;
$arguments435['draggable'] = NULL;
$arguments435['dropzone'] = NULL;
$arguments435['translate'] = NULL;
$arguments435['spellcheck'] = NULL;
$arguments435['hidden'] = NULL;
$arguments435['showAccessProtected'] = false;
$arguments435['classAccessProtected'] = 'protected';
$arguments435['classAccessGranted'] = 'access-granted';
$arguments435['useShortcutUid'] = NULL;
$arguments435['useShortcutTarget'] = NULL;
$arguments435['useShortcutData'] = false;
$arguments435['tagName'] = 'ul';
$arguments435['tagNameChildren'] = 'li';
$arguments435['entryLevel'] = 0;
$arguments435['levels'] = 1;
$arguments435['expandAll'] = false;
$arguments435['classFirst'] = '';
$arguments435['classLast'] = '';
$arguments435['classActive'] = 'active';
$arguments435['classCurrent'] = 'current';
$arguments435['classHasSubpages'] = 'sub';
$arguments435['substElementUid'] = false;
$arguments435['showHiddenInMenu'] = false;
$arguments435['showCurrent'] = true;
$arguments435['linkCurrent'] = true;
$arguments435['linkActive'] = true;
$arguments435['titleFields'] = 'nav_title,title';
$arguments435['includeAnchorTitle'] = true;
$arguments435['includeSpacers'] = false;
$arguments435['deferred'] = false;
$arguments435['as'] = 'menu';
$arguments435['rootLineAs'] = 'rootLine';
$arguments435['excludePages'] = '';
$arguments435['forceAbsoluteUrl'] = false;
$arguments435['doktypes'] = '';
$arguments435['divider'] = NULL;
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output437 = '';

$output437 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments438 = array();
$arguments438['each'] = $currentVariableContainer->getOrNull('menu');
$arguments438['as'] = 'item';
// Rendering Boolean node
$arguments438['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments438['key'] = '';
$arguments438['iteration'] = NULL;
$renderChildrenClosure439 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output440 = '';

$output440 .= '
								';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments441 = array();
$arguments441['name'] = 'content';
$arguments441['value'] = NULL;
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments443 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments444 = array();
$arguments444['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments444['keepQuotes'] = false;
$arguments444['encoding'] = NULL;
$arguments444['doubleEncode'] = true;
$renderChildrenClosure445 = function() {return NULL;};
$value446 = ($arguments444['value'] !== NULL ? $arguments444['value'] : $renderChildrenClosure445());
$arguments443['pageUid'] = (!is_string($value446) ? $value446 : htmlspecialchars($value446, ($arguments444['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments444['encoding'] !== NULL ? $arguments444['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments444['doubleEncode']));
$arguments443['column'] = '0';
$arguments443['order'] = 'sorting';
$arguments443['sortDirection'] = 'ASC';
$arguments443['contentUids'] = NULL;
$arguments443['sectionIndexOnly'] = false;
$arguments443['loadRegister'] = NULL;
$arguments443['render'] = false;
$arguments443['hideUntranslated'] = false;
$arguments443['limit'] = NULL;
$arguments443['slide'] = 0;
$arguments443['slideCollect'] = 0;
$arguments443['slideCollectReverse'] = false;
$renderChildrenClosure447 = function() {return NULL;};
$viewHelper448 = $self->getViewHelper('$viewHelper448', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper448->setArguments($arguments443);
$viewHelper448->setRenderingContext($renderingContext);
$viewHelper448->setRenderChildrenClosure($renderChildrenClosure447);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper448->initializeArgumentsAndRender();
};

$output440 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments441, isset($arguments441['value']) ? function() use ($arguments441) { return $arguments441['value']; } : $renderChildrenClosure442, $renderingContext);

$output440 .= '
								';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments449 = array();
$arguments449['table'] = 'tt_content';
$arguments449['field'] = 'pi_flexform';
$arguments449['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments449['as'] = 'flexformData';
$arguments449['record'] = NULL;
$renderChildrenClosure450 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output451 = '';

$output451 .= '
									<tr>
										<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments452 = array();
$arguments452['date'] = NULL;
$arguments452['format'] = '';
$arguments452['base'] = NULL;
$renderChildrenClosure453 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.date', $renderingContext);
};

$output451 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments452, $renderChildrenClosure453, $renderingContext);

$output451 .= '</td>
										<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments454 = array();
$arguments454['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments454['target'] = '';
$arguments454['class'] = '';
$arguments454['title'] = '';
$arguments454['additionalParams'] = '';
$arguments454['additionalAttributes'] = array (
);
$renderChildrenClosure455 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments456 = array();
$arguments456['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments456['keepQuotes'] = false;
$arguments456['encoding'] = NULL;
$arguments456['doubleEncode'] = true;
$renderChildrenClosure457 = function() {return NULL;};
$value458 = ($arguments456['value'] !== NULL ? $arguments456['value'] : $renderChildrenClosure457());
return (!is_string($value458) ? $value458 : htmlspecialchars($value458, ($arguments456['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments456['encoding'] !== NULL ? $arguments456['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments456['doubleEncode']));
};

$output451 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments454, $renderChildrenClosure455, $renderingContext);

$output451 .= '</td>
									</tr>
								';
return $output451;
};

$output440 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments449, $renderChildrenClosure450, $renderingContext);

$output440 .= '
							';
return $output440;
};

$output437 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments438, $renderChildrenClosure439, $renderingContext);

$output437 .= '
						';
return $output437;
};
$viewHelper459 = $self->getViewHelper('$viewHelper459', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper459->setArguments($arguments435);
$viewHelper459->setRenderingContext($renderingContext);
$viewHelper459->setRenderChildrenClosure($renderChildrenClosure436);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output434 .= $viewHelper459->initializeArgumentsAndRender();

$output434 .= '
					</table>
				</div>
		  ';
return $output434;
};

$output323 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext);

$output323 .= '
		';
return $output323;
};
$arguments321['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output460 = '';

$output460 .= '
				<h2 class="text-center">Neuigkeiten</h2>
				<div class="text-container">
					';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments461 = array();
$arguments461['pageUid'] = '13';
$arguments461['additionalAttributes'] = NULL;
$arguments461['data'] = NULL;
$arguments461['class'] = NULL;
$arguments461['dir'] = NULL;
$arguments461['id'] = NULL;
$arguments461['lang'] = NULL;
$arguments461['style'] = NULL;
$arguments461['title'] = NULL;
$arguments461['accesskey'] = NULL;
$arguments461['tabindex'] = NULL;
$arguments461['onclick'] = NULL;
$arguments461['forceClosingTag'] = false;
$arguments461['hideIfEmpty'] = false;
$arguments461['contenteditable'] = NULL;
$arguments461['contextmenu'] = NULL;
$arguments461['draggable'] = NULL;
$arguments461['dropzone'] = NULL;
$arguments461['translate'] = NULL;
$arguments461['spellcheck'] = NULL;
$arguments461['hidden'] = NULL;
$arguments461['showAccessProtected'] = false;
$arguments461['classAccessProtected'] = 'protected';
$arguments461['classAccessGranted'] = 'access-granted';
$arguments461['useShortcutUid'] = NULL;
$arguments461['useShortcutTarget'] = NULL;
$arguments461['useShortcutData'] = false;
$arguments461['tagName'] = 'ul';
$arguments461['tagNameChildren'] = 'li';
$arguments461['entryLevel'] = 0;
$arguments461['levels'] = 1;
$arguments461['expandAll'] = false;
$arguments461['classFirst'] = '';
$arguments461['classLast'] = '';
$arguments461['classActive'] = 'active';
$arguments461['classCurrent'] = 'current';
$arguments461['classHasSubpages'] = 'sub';
$arguments461['substElementUid'] = false;
$arguments461['showHiddenInMenu'] = false;
$arguments461['showCurrent'] = true;
$arguments461['linkCurrent'] = true;
$arguments461['linkActive'] = true;
$arguments461['titleFields'] = 'nav_title,title';
$arguments461['includeAnchorTitle'] = true;
$arguments461['includeSpacers'] = false;
$arguments461['deferred'] = false;
$arguments461['as'] = 'menu';
$arguments461['rootLineAs'] = 'rootLine';
$arguments461['excludePages'] = '';
$arguments461['forceAbsoluteUrl'] = false;
$arguments461['doktypes'] = '';
$arguments461['divider'] = NULL;
$renderChildrenClosure462 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output463 = '';

$output463 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments464 = array();
// Rendering Boolean node
$arguments464['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'maxInput', $renderingContext));
$arguments464['then'] = NULL;
$arguments464['else'] = NULL;
$renderChildrenClosure465 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output466 = '';

$output466 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments467 = array();
$renderChildrenClosure468 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output469 = '';

$output469 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments470 = array();
$arguments470['each'] = $currentVariableContainer->getOrNull('menu');
$arguments470['as'] = 'item';
// Rendering Boolean node
$arguments470['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments470['iteration'] = 'iterator';
$arguments470['key'] = '';
$renderChildrenClosure471 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output472 = '';

$output472 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments473 = array();
// Rendering Boolean node
$arguments473['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext), \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'maxInput', $renderingContext));
$arguments473['then'] = NULL;
$arguments473['else'] = NULL;
$renderChildrenClosure474 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output475 = '';

$output475 .= '
										';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments476 = array();
$arguments476['name'] = 'content';
$arguments476['value'] = NULL;
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments478 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments479 = array();
$arguments479['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments479['keepQuotes'] = false;
$arguments479['encoding'] = NULL;
$arguments479['doubleEncode'] = true;
$renderChildrenClosure480 = function() {return NULL;};
$value481 = ($arguments479['value'] !== NULL ? $arguments479['value'] : $renderChildrenClosure480());
$arguments478['pageUid'] = (!is_string($value481) ? $value481 : htmlspecialchars($value481, ($arguments479['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments479['encoding'] !== NULL ? $arguments479['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments479['doubleEncode']));
$arguments478['column'] = '0';
$arguments478['order'] = 'sorting';
$arguments478['sortDirection'] = 'ASC';
$arguments478['contentUids'] = NULL;
$arguments478['sectionIndexOnly'] = false;
$arguments478['loadRegister'] = NULL;
$arguments478['render'] = false;
$arguments478['hideUntranslated'] = false;
$arguments478['limit'] = NULL;
$arguments478['slide'] = 0;
$arguments478['slideCollect'] = 0;
$arguments478['slideCollectReverse'] = false;
$renderChildrenClosure482 = function() {return NULL;};
$viewHelper483 = $self->getViewHelper('$viewHelper483', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper483->setArguments($arguments478);
$viewHelper483->setRenderingContext($renderingContext);
$viewHelper483->setRenderChildrenClosure($renderChildrenClosure482);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper483->initializeArgumentsAndRender();
};

$output475 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments476, isset($arguments476['value']) ? function() use ($arguments476) { return $arguments476['value']; } : $renderChildrenClosure477, $renderingContext);

$output475 .= '
										';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments484 = array();
$arguments484['table'] = 'tt_content';
$arguments484['field'] = 'pi_flexform';
$arguments484['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments484['as'] = 'flexformData';
$arguments484['record'] = NULL;
$renderChildrenClosure485 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output486 = '';

$output486 .= '
											<div class="news-content">
												<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments487 = array();
$arguments487['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments487['target'] = '';
$arguments487['class'] = '';
$arguments487['title'] = '';
$arguments487['additionalParams'] = '';
$arguments487['additionalAttributes'] = array (
);
$renderChildrenClosure488 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments489 = array();
$arguments489['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments489['keepQuotes'] = false;
$arguments489['encoding'] = NULL;
$arguments489['doubleEncode'] = true;
$renderChildrenClosure490 = function() {return NULL;};
$value491 = ($arguments489['value'] !== NULL ? $arguments489['value'] : $renderChildrenClosure490());
return (!is_string($value491) ? $value491 : htmlspecialchars($value491, ($arguments489['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments489['encoding'] !== NULL ? $arguments489['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments489['doubleEncode']));
};

$output486 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments487, $renderChildrenClosure488, $renderingContext);

$output486 .= '</h3>
												<h5>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments492 = array();
$arguments492['date'] = NULL;
$arguments492['format'] = '';
$arguments492['base'] = NULL;
$renderChildrenClosure493 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.date', $renderingContext);
};

$output486 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments492, $renderChildrenClosure493, $renderingContext);

$output486 .= '</h5>
											</div>
										';
return $output486;
};

$output475 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments484, $renderChildrenClosure485, $renderingContext);

$output475 .= '
									';
return $output475;
};

$output472 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments473, $renderChildrenClosure474, $renderingContext);

$output472 .= '
								';
return $output472;
};

$output469 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments470, $renderChildrenClosure471, $renderingContext);

$output469 .= '
							';
return $output469;
};

$output466 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments467, $renderChildrenClosure468, $renderingContext);

$output466 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments494 = array();
$renderChildrenClosure495 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output496 = '';

$output496 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments497 = array();
$arguments497['each'] = $currentVariableContainer->getOrNull('menu');
$arguments497['as'] = 'item';
// Rendering Boolean node
$arguments497['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments497['key'] = '';
$arguments497['iteration'] = NULL;
$renderChildrenClosure498 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output499 = '';

$output499 .= '
									';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments500 = array();
$arguments500['name'] = 'content';
$arguments500['value'] = NULL;
$renderChildrenClosure501 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments502 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments503 = array();
$arguments503['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments503['keepQuotes'] = false;
$arguments503['encoding'] = NULL;
$arguments503['doubleEncode'] = true;
$renderChildrenClosure504 = function() {return NULL;};
$value505 = ($arguments503['value'] !== NULL ? $arguments503['value'] : $renderChildrenClosure504());
$arguments502['pageUid'] = (!is_string($value505) ? $value505 : htmlspecialchars($value505, ($arguments503['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments503['encoding'] !== NULL ? $arguments503['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments503['doubleEncode']));
$arguments502['column'] = '0';
$arguments502['order'] = 'sorting';
$arguments502['sortDirection'] = 'ASC';
$arguments502['contentUids'] = NULL;
$arguments502['sectionIndexOnly'] = false;
$arguments502['loadRegister'] = NULL;
$arguments502['render'] = false;
$arguments502['hideUntranslated'] = false;
$arguments502['limit'] = NULL;
$arguments502['slide'] = 0;
$arguments502['slideCollect'] = 0;
$arguments502['slideCollectReverse'] = false;
$renderChildrenClosure506 = function() {return NULL;};
$viewHelper507 = $self->getViewHelper('$viewHelper507', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper507->setArguments($arguments502);
$viewHelper507->setRenderingContext($renderingContext);
$viewHelper507->setRenderChildrenClosure($renderChildrenClosure506);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper507->initializeArgumentsAndRender();
};

$output499 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments500, isset($arguments500['value']) ? function() use ($arguments500) { return $arguments500['value']; } : $renderChildrenClosure501, $renderingContext);

$output499 .= '
									';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments508 = array();
$arguments508['table'] = 'tt_content';
$arguments508['field'] = 'pi_flexform';
$arguments508['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments508['as'] = 'flexformData';
$arguments508['record'] = NULL;
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output510 = '';

$output510 .= '
										<div class="news-content">
											<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments511 = array();
$arguments511['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments511['target'] = '';
$arguments511['class'] = '';
$arguments511['title'] = '';
$arguments511['additionalParams'] = '';
$arguments511['additionalAttributes'] = array (
);
$renderChildrenClosure512 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments513 = array();
$arguments513['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments513['keepQuotes'] = false;
$arguments513['encoding'] = NULL;
$arguments513['doubleEncode'] = true;
$renderChildrenClosure514 = function() {return NULL;};
$value515 = ($arguments513['value'] !== NULL ? $arguments513['value'] : $renderChildrenClosure514());
return (!is_string($value515) ? $value515 : htmlspecialchars($value515, ($arguments513['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments513['encoding'] !== NULL ? $arguments513['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments513['doubleEncode']));
};

$output510 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments511, $renderChildrenClosure512, $renderingContext);

$output510 .= '</h3>
											<h5>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments516 = array();
$arguments516['date'] = NULL;
$arguments516['format'] = '';
$arguments516['base'] = NULL;
$renderChildrenClosure517 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.date', $renderingContext);
};

$output510 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments516, $renderChildrenClosure517, $renderingContext);

$output510 .= '</h5>
										</div>
									';
return $output510;
};

$output499 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments508, $renderChildrenClosure509, $renderingContext);

$output499 .= '
								';
return $output499;
};

$output496 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments497, $renderChildrenClosure498, $renderingContext);

$output496 .= '
							';
return $output496;
};

$output466 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments494, $renderChildrenClosure495, $renderingContext);

$output466 .= '
						';
return $output466;
};
$arguments464['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output518 = '';

$output518 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments519 = array();
$arguments519['each'] = $currentVariableContainer->getOrNull('menu');
$arguments519['as'] = 'item';
// Rendering Boolean node
$arguments519['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments519['iteration'] = 'iterator';
$arguments519['key'] = '';
$renderChildrenClosure520 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output521 = '';

$output521 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments522 = array();
// Rendering Boolean node
$arguments522['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('<', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext), \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('settings'), 'maxInput', $renderingContext));
$arguments522['then'] = NULL;
$arguments522['else'] = NULL;
$renderChildrenClosure523 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output524 = '';

$output524 .= '
										';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments525 = array();
$arguments525['name'] = 'content';
$arguments525['value'] = NULL;
$renderChildrenClosure526 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments527 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments528 = array();
$arguments528['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments528['keepQuotes'] = false;
$arguments528['encoding'] = NULL;
$arguments528['doubleEncode'] = true;
$renderChildrenClosure529 = function() {return NULL;};
$value530 = ($arguments528['value'] !== NULL ? $arguments528['value'] : $renderChildrenClosure529());
$arguments527['pageUid'] = (!is_string($value530) ? $value530 : htmlspecialchars($value530, ($arguments528['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments528['encoding'] !== NULL ? $arguments528['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments528['doubleEncode']));
$arguments527['column'] = '0';
$arguments527['order'] = 'sorting';
$arguments527['sortDirection'] = 'ASC';
$arguments527['contentUids'] = NULL;
$arguments527['sectionIndexOnly'] = false;
$arguments527['loadRegister'] = NULL;
$arguments527['render'] = false;
$arguments527['hideUntranslated'] = false;
$arguments527['limit'] = NULL;
$arguments527['slide'] = 0;
$arguments527['slideCollect'] = 0;
$arguments527['slideCollectReverse'] = false;
$renderChildrenClosure531 = function() {return NULL;};
$viewHelper532 = $self->getViewHelper('$viewHelper532', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper532->setArguments($arguments527);
$viewHelper532->setRenderingContext($renderingContext);
$viewHelper532->setRenderChildrenClosure($renderChildrenClosure531);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper532->initializeArgumentsAndRender();
};

$output524 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments525, isset($arguments525['value']) ? function() use ($arguments525) { return $arguments525['value']; } : $renderChildrenClosure526, $renderingContext);

$output524 .= '
										';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments533 = array();
$arguments533['table'] = 'tt_content';
$arguments533['field'] = 'pi_flexform';
$arguments533['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments533['as'] = 'flexformData';
$arguments533['record'] = NULL;
$renderChildrenClosure534 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output535 = '';

$output535 .= '
											<div class="news-content">
												<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments536 = array();
$arguments536['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments536['target'] = '';
$arguments536['class'] = '';
$arguments536['title'] = '';
$arguments536['additionalParams'] = '';
$arguments536['additionalAttributes'] = array (
);
$renderChildrenClosure537 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments538 = array();
$arguments538['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments538['keepQuotes'] = false;
$arguments538['encoding'] = NULL;
$arguments538['doubleEncode'] = true;
$renderChildrenClosure539 = function() {return NULL;};
$value540 = ($arguments538['value'] !== NULL ? $arguments538['value'] : $renderChildrenClosure539());
return (!is_string($value540) ? $value540 : htmlspecialchars($value540, ($arguments538['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments538['encoding'] !== NULL ? $arguments538['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments538['doubleEncode']));
};

$output535 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments536, $renderChildrenClosure537, $renderingContext);

$output535 .= '</h3>
												<h5>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments541 = array();
$arguments541['date'] = NULL;
$arguments541['format'] = '';
$arguments541['base'] = NULL;
$renderChildrenClosure542 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.date', $renderingContext);
};

$output535 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments541, $renderChildrenClosure542, $renderingContext);

$output535 .= '</h5>
											</div>
										';
return $output535;
};

$output524 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments533, $renderChildrenClosure534, $renderingContext);

$output524 .= '
									';
return $output524;
};

$output521 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments522, $renderChildrenClosure523, $renderingContext);

$output521 .= '
								';
return $output521;
};

$output518 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments519, $renderChildrenClosure520, $renderingContext);

$output518 .= '
							';
return $output518;
};
$arguments464['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output543 = '';

$output543 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments544 = array();
$arguments544['each'] = $currentVariableContainer->getOrNull('menu');
$arguments544['as'] = 'item';
// Rendering Boolean node
$arguments544['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments544['key'] = '';
$arguments544['iteration'] = NULL;
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output546 = '';

$output546 .= '
									';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments547 = array();
$arguments547['name'] = 'content';
$arguments547['value'] = NULL;
$renderChildrenClosure548 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments549 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments550 = array();
$arguments550['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments550['keepQuotes'] = false;
$arguments550['encoding'] = NULL;
$arguments550['doubleEncode'] = true;
$renderChildrenClosure551 = function() {return NULL;};
$value552 = ($arguments550['value'] !== NULL ? $arguments550['value'] : $renderChildrenClosure551());
$arguments549['pageUid'] = (!is_string($value552) ? $value552 : htmlspecialchars($value552, ($arguments550['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments550['encoding'] !== NULL ? $arguments550['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments550['doubleEncode']));
$arguments549['column'] = '0';
$arguments549['order'] = 'sorting';
$arguments549['sortDirection'] = 'ASC';
$arguments549['contentUids'] = NULL;
$arguments549['sectionIndexOnly'] = false;
$arguments549['loadRegister'] = NULL;
$arguments549['render'] = false;
$arguments549['hideUntranslated'] = false;
$arguments549['limit'] = NULL;
$arguments549['slide'] = 0;
$arguments549['slideCollect'] = 0;
$arguments549['slideCollectReverse'] = false;
$renderChildrenClosure553 = function() {return NULL;};
$viewHelper554 = $self->getViewHelper('$viewHelper554', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper554->setArguments($arguments549);
$viewHelper554->setRenderingContext($renderingContext);
$viewHelper554->setRenderChildrenClosure($renderChildrenClosure553);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper554->initializeArgumentsAndRender();
};

$output546 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments547, isset($arguments547['value']) ? function() use ($arguments547) { return $arguments547['value']; } : $renderChildrenClosure548, $renderingContext);

$output546 .= '
									';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments555 = array();
$arguments555['table'] = 'tt_content';
$arguments555['field'] = 'pi_flexform';
$arguments555['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments555['as'] = 'flexformData';
$arguments555['record'] = NULL;
$renderChildrenClosure556 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output557 = '';

$output557 .= '
										<div class="news-content">
											<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments558 = array();
$arguments558['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments558['target'] = '';
$arguments558['class'] = '';
$arguments558['title'] = '';
$arguments558['additionalParams'] = '';
$arguments558['additionalAttributes'] = array (
);
$renderChildrenClosure559 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments560 = array();
$arguments560['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments560['keepQuotes'] = false;
$arguments560['encoding'] = NULL;
$arguments560['doubleEncode'] = true;
$renderChildrenClosure561 = function() {return NULL;};
$value562 = ($arguments560['value'] !== NULL ? $arguments560['value'] : $renderChildrenClosure561());
return (!is_string($value562) ? $value562 : htmlspecialchars($value562, ($arguments560['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments560['encoding'] !== NULL ? $arguments560['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments560['doubleEncode']));
};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments558, $renderChildrenClosure559, $renderingContext);

$output557 .= '</h3>
											<h5>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments563 = array();
$arguments563['date'] = NULL;
$arguments563['format'] = '';
$arguments563['base'] = NULL;
$renderChildrenClosure564 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.date', $renderingContext);
};

$output557 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments563, $renderChildrenClosure564, $renderingContext);

$output557 .= '</h5>
										</div>
									';
return $output557;
};

$output546 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments555, $renderChildrenClosure556, $renderingContext);

$output546 .= '
								';
return $output546;
};

$output543 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments544, $renderChildrenClosure545, $renderingContext);

$output543 .= '
							';
return $output543;
};

$output463 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments464, $renderChildrenClosure465, $renderingContext);

$output463 .= '
					';
return $output463;
};
$viewHelper565 = $self->getViewHelper('$viewHelper565', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper565->setArguments($arguments461);
$viewHelper565->setRenderingContext($renderingContext);
$viewHelper565->setRenderChildrenClosure($renderChildrenClosure462);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output460 .= $viewHelper565->initializeArgumentsAndRender();

$output460 .= '
				</div>
		  ';
return $output460;
};
$arguments321['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output566 = '';

$output566 .= '
				<div class="table" style="text-align:center;margin-top: 30px">
					<table>
						<caption><h3>Neuigkeiten</h3></caption>
						';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper
$arguments567 = array();
$arguments567['pageUid'] = '13';
$arguments567['additionalAttributes'] = NULL;
$arguments567['data'] = NULL;
$arguments567['class'] = NULL;
$arguments567['dir'] = NULL;
$arguments567['id'] = NULL;
$arguments567['lang'] = NULL;
$arguments567['style'] = NULL;
$arguments567['title'] = NULL;
$arguments567['accesskey'] = NULL;
$arguments567['tabindex'] = NULL;
$arguments567['onclick'] = NULL;
$arguments567['forceClosingTag'] = false;
$arguments567['hideIfEmpty'] = false;
$arguments567['contenteditable'] = NULL;
$arguments567['contextmenu'] = NULL;
$arguments567['draggable'] = NULL;
$arguments567['dropzone'] = NULL;
$arguments567['translate'] = NULL;
$arguments567['spellcheck'] = NULL;
$arguments567['hidden'] = NULL;
$arguments567['showAccessProtected'] = false;
$arguments567['classAccessProtected'] = 'protected';
$arguments567['classAccessGranted'] = 'access-granted';
$arguments567['useShortcutUid'] = NULL;
$arguments567['useShortcutTarget'] = NULL;
$arguments567['useShortcutData'] = false;
$arguments567['tagName'] = 'ul';
$arguments567['tagNameChildren'] = 'li';
$arguments567['entryLevel'] = 0;
$arguments567['levels'] = 1;
$arguments567['expandAll'] = false;
$arguments567['classFirst'] = '';
$arguments567['classLast'] = '';
$arguments567['classActive'] = 'active';
$arguments567['classCurrent'] = 'current';
$arguments567['classHasSubpages'] = 'sub';
$arguments567['substElementUid'] = false;
$arguments567['showHiddenInMenu'] = false;
$arguments567['showCurrent'] = true;
$arguments567['linkCurrent'] = true;
$arguments567['linkActive'] = true;
$arguments567['titleFields'] = 'nav_title,title';
$arguments567['includeAnchorTitle'] = true;
$arguments567['includeSpacers'] = false;
$arguments567['deferred'] = false;
$arguments567['as'] = 'menu';
$arguments567['rootLineAs'] = 'rootLine';
$arguments567['excludePages'] = '';
$arguments567['forceAbsoluteUrl'] = false;
$arguments567['doktypes'] = '';
$arguments567['divider'] = NULL;
$renderChildrenClosure568 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output569 = '';

$output569 .= '
							';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments570 = array();
$arguments570['each'] = $currentVariableContainer->getOrNull('menu');
$arguments570['as'] = 'item';
// Rendering Boolean node
$arguments570['reverse'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('1');
$arguments570['key'] = '';
$arguments570['iteration'] = NULL;
$renderChildrenClosure571 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output572 = '';

$output572 .= '
								';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments573 = array();
$arguments573['name'] = 'content';
$arguments573['value'] = NULL;
$renderChildrenClosure574 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments575 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments576 = array();
$arguments576['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments576['keepQuotes'] = false;
$arguments576['encoding'] = NULL;
$arguments576['doubleEncode'] = true;
$renderChildrenClosure577 = function() {return NULL;};
$value578 = ($arguments576['value'] !== NULL ? $arguments576['value'] : $renderChildrenClosure577());
$arguments575['pageUid'] = (!is_string($value578) ? $value578 : htmlspecialchars($value578, ($arguments576['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments576['encoding'] !== NULL ? $arguments576['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments576['doubleEncode']));
$arguments575['column'] = '0';
$arguments575['order'] = 'sorting';
$arguments575['sortDirection'] = 'ASC';
$arguments575['contentUids'] = NULL;
$arguments575['sectionIndexOnly'] = false;
$arguments575['loadRegister'] = NULL;
$arguments575['render'] = false;
$arguments575['hideUntranslated'] = false;
$arguments575['limit'] = NULL;
$arguments575['slide'] = 0;
$arguments575['slideCollect'] = 0;
$arguments575['slideCollectReverse'] = false;
$renderChildrenClosure579 = function() {return NULL;};
$viewHelper580 = $self->getViewHelper('$viewHelper580', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper580->setArguments($arguments575);
$viewHelper580->setRenderingContext($renderingContext);
$viewHelper580->setRenderChildrenClosure($renderChildrenClosure579);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper580->initializeArgumentsAndRender();
};

$output572 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments573, isset($arguments573['value']) ? function() use ($arguments573) { return $arguments573['value']; } : $renderChildrenClosure574, $renderingContext);

$output572 .= '
								';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments581 = array();
$arguments581['table'] = 'tt_content';
$arguments581['field'] = 'pi_flexform';
$arguments581['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('content'), '0.uid', $renderingContext);
$arguments581['as'] = 'flexformData';
$arguments581['record'] = NULL;
$renderChildrenClosure582 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output583 = '';

$output583 .= '
									<tr>
										<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$arguments584 = array();
$arguments584['date'] = NULL;
$arguments584['format'] = '';
$arguments584['base'] = NULL;
$renderChildrenClosure585 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.date', $renderingContext);
};

$output583 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments584, $renderChildrenClosure585, $renderingContext);

$output583 .= '</td>
										<td>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$arguments586 = array();
$arguments586['parameter'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('item'), 'uid', $renderingContext);
$arguments586['target'] = '';
$arguments586['class'] = '';
$arguments586['title'] = '';
$arguments586['additionalParams'] = '';
$arguments586['additionalAttributes'] = array (
);
$renderChildrenClosure587 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments588 = array();
$arguments588['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('flexformData'), 'settings.title', $renderingContext);
$arguments588['keepQuotes'] = false;
$arguments588['encoding'] = NULL;
$arguments588['doubleEncode'] = true;
$renderChildrenClosure589 = function() {return NULL;};
$value590 = ($arguments588['value'] !== NULL ? $arguments588['value'] : $renderChildrenClosure589());
return (!is_string($value590) ? $value590 : htmlspecialchars($value590, ($arguments588['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments588['encoding'] !== NULL ? $arguments588['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments588['doubleEncode']));
};

$output583 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments586, $renderChildrenClosure587, $renderingContext);

$output583 .= '</td>
									</tr>
								';
return $output583;
};

$output572 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments581, $renderChildrenClosure582, $renderingContext);

$output572 .= '
							';
return $output572;
};

$output569 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments570, $renderChildrenClosure571, $renderingContext);

$output569 .= '
						';
return $output569;
};
$viewHelper591 = $self->getViewHelper('$viewHelper591', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper');
$viewHelper591->setArguments($arguments567);
$viewHelper591->setRenderingContext($renderingContext);
$viewHelper591->setRenderChildrenClosure($renderChildrenClosure568);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\MenuViewHelper

$output566 .= $viewHelper591->initializeArgumentsAndRender();

$output566 .= '
					</table>
				</div>
		  ';
return $output566;
};

$output320 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext);

$output320 .= '
	';
return $output320;
};

$output291 .= '';

$output291 .= '
</div>
';


return $output291;
}


}
#1539020255    187848    