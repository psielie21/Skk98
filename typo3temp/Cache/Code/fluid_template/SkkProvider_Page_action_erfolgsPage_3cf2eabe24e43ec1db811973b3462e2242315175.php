<?php
class FluidCache_SkkProvider_Page_action_erfolgsPage_3cf2eabe24e43ec1db811973b3462e2242315175 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Page';
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
$arguments1['id'] = 'erfolgspage';
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/Page/locallang_erfolgspage.xlf';
$arguments1['label'] = NULL;
$arguments1['description'] = NULL;
$arguments1['enabled'] = true;
$arguments1['compact'] = false;
$arguments1['variables'] = array (
);
$arguments1['options'] = NULL;
$arguments1['extensionName'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:form tag -->
		';
};

$output0 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\GridViewHelper
$arguments3 = array();
$arguments3['name'] = 'grid';
$arguments3['label'] = NULL;
$arguments3['variables'] = array (
);
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output5 = '';

$output5 .= '
			<!-- Edit this grid to change the "backend layout" structure -->
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments6 = array();
$arguments6['name'] = 'row';
$arguments6['label'] = NULL;
$arguments6['variables'] = array (
);
$arguments6['extensionName'] = NULL;
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output8 = '';

$output8 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments9 = array();
$arguments9['colPos'] = '0';
$arguments9['colspan'] = '3';
$arguments9['name'] = 'main';
$arguments9['label'] = 'Hauptinhalt';
$arguments9['rowspan'] = 1;
$arguments9['style'] = NULL;
$arguments9['variables'] = array (
);
$arguments9['extensionName'] = NULL;
$renderChildrenClosure10 = function() {return NULL;};

$output8 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
			';
return $output8;
};

$output5 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output5 .= '
		';
return $output5;
};

$output0 .= FluidTYPO3\Flux\ViewHelpers\GridViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
	';


return $output0;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output11 = '';

$output11 .= '
		<section id="title-bar">
			<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments12 = array();
$arguments12['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'title', $renderingContext);
$arguments12['keepQuotes'] = false;
$arguments12['encoding'] = NULL;
$arguments12['doubleEncode'] = true;
$renderChildrenClosure13 = function() {return NULL;};
$value14 = ($arguments12['value'] !== NULL ? $arguments12['value'] : $renderChildrenClosure13());

$output11 .= (!is_string($value14) ? $value14 : htmlspecialchars($value14, ($arguments12['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments12['encoding'] !== NULL ? $arguments12['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments12['doubleEncode']));

$output11 .= '</h2>
		</section>

		<section id="content">
      <div class="container">
        <aside class="text-container pull-right">
            <div class="table">
              <table>
                <caption><h3>Saison</h3></caption>
                  ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments15 = array();
$arguments15['name'] = 'seasons';
$arguments15['value'] = NULL;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments17 = array();
$arguments17['column'] = '0';
$arguments17['order'] = 'sorting';
$arguments17['sortDirection'] = 'ASC';
$arguments17['pageUid'] = 0;
$arguments17['contentUids'] = NULL;
$arguments17['sectionIndexOnly'] = false;
$arguments17['loadRegister'] = NULL;
$arguments17['render'] = false;
$arguments17['hideUntranslated'] = false;
$arguments17['limit'] = NULL;
$arguments17['slide'] = 0;
$arguments17['slideCollect'] = 0;
$arguments17['slideCollectReverse'] = false;
$renderChildrenClosure18 = function() {return NULL;};
$viewHelper19 = $self->getViewHelper('$viewHelper19', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper19->setArguments($arguments17);
$viewHelper19->setRenderingContext($renderingContext);
$viewHelper19->setRenderChildrenClosure($renderChildrenClosure18);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper19->initializeArgumentsAndRender();
};

$output11 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments15, isset($arguments15['value']) ? function() use ($arguments15) { return $arguments15['value']; } : $renderChildrenClosure16, $renderingContext);

$output11 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments20 = array();
$arguments20['each'] = $currentVariableContainer->getOrNull('seasons');
$arguments20['as'] = 'season';
$arguments20['iteration'] = 'iterator';
$arguments20['key'] = '';
$arguments20['reverse'] = false;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output22 = '';

$output22 .= '
                      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments23 = array();
// Rendering Boolean node
$output24 = '';

$output24 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext);

$output24 .= '% 2';
$arguments23['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $output24, 0);
$arguments23['then'] = NULL;
$arguments23['else'] = NULL;
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output26 = '';

$output26 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments27 = array();
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output29 = '';

$output29 .= '
                          ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments30 = array();
$arguments30['table'] = 'tt_content';
$arguments30['field'] = 'pi_flexform';
$arguments30['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('season'), 'uid', $renderingContext);
$arguments30['as'] = 'data';
$arguments30['record'] = NULL;
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output32 = '';

$output32 .= '
                            <tr><td id="td_Saison';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments33 = array();
$arguments33['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments33['keepQuotes'] = false;
$arguments33['encoding'] = NULL;
$arguments33['doubleEncode'] = true;
$renderChildrenClosure34 = function() {return NULL;};
$value35 = ($arguments33['value'] !== NULL ? $arguments33['value'] : $renderChildrenClosure34());

$output32 .= (!is_string($value35) ? $value35 : htmlspecialchars($value35, ($arguments33['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments33['encoding'] !== NULL ? $arguments33['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments33['doubleEncode']));

$output32 .= '"><a href="#" onclick="openSeason(\'Saison';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments36 = array();
$arguments36['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments36['keepQuotes'] = false;
$arguments36['encoding'] = NULL;
$arguments36['doubleEncode'] = true;
$renderChildrenClosure37 = function() {return NULL;};
$value38 = ($arguments36['value'] !== NULL ? $arguments36['value'] : $renderChildrenClosure37());

$output32 .= (!is_string($value38) ? $value38 : htmlspecialchars($value38, ($arguments36['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments36['encoding'] !== NULL ? $arguments36['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments36['doubleEncode']));

$output32 .= '\')">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments39 = array();
$arguments39['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments39['keepQuotes'] = false;
$arguments39['encoding'] = NULL;
$arguments39['doubleEncode'] = true;
$renderChildrenClosure40 = function() {return NULL;};
$value41 = ($arguments39['value'] !== NULL ? $arguments39['value'] : $renderChildrenClosure40());

$output32 .= (!is_string($value41) ? $value41 : htmlspecialchars($value41, ($arguments39['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments39['encoding'] !== NULL ? $arguments39['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments39['doubleEncode']));

$output32 .= '</a></td>
                          ';
return $output32;
};

$output29 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
                        ';
return $output29;
};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments42 = array();
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output44 = '';

$output44 .= '
                          ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments45 = array();
$arguments45['table'] = 'tt_content';
$arguments45['field'] = 'pi_flexform';
$arguments45['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('season'), 'uid', $renderingContext);
$arguments45['as'] = 'data';
$arguments45['record'] = NULL;
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output47 = '';

$output47 .= '
                            <td id="td_Saison';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments48 = array();
$arguments48['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments48['keepQuotes'] = false;
$arguments48['encoding'] = NULL;
$arguments48['doubleEncode'] = true;
$renderChildrenClosure49 = function() {return NULL;};
$value50 = ($arguments48['value'] !== NULL ? $arguments48['value'] : $renderChildrenClosure49());

$output47 .= (!is_string($value50) ? $value50 : htmlspecialchars($value50, ($arguments48['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments48['encoding'] !== NULL ? $arguments48['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments48['doubleEncode']));

$output47 .= '"><a href="#" onclick="openSeason(\'Saison';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments51 = array();
$arguments51['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments51['keepQuotes'] = false;
$arguments51['encoding'] = NULL;
$arguments51['doubleEncode'] = true;
$renderChildrenClosure52 = function() {return NULL;};
$value53 = ($arguments51['value'] !== NULL ? $arguments51['value'] : $renderChildrenClosure52());

$output47 .= (!is_string($value53) ? $value53 : htmlspecialchars($value53, ($arguments51['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments51['encoding'] !== NULL ? $arguments51['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments51['doubleEncode']));

$output47 .= '\')">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments54 = array();
$arguments54['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments54['keepQuotes'] = false;
$arguments54['encoding'] = NULL;
$arguments54['doubleEncode'] = true;
$renderChildrenClosure55 = function() {return NULL;};
$value56 = ($arguments54['value'] !== NULL ? $arguments54['value'] : $renderChildrenClosure55());

$output47 .= (!is_string($value56) ? $value56 : htmlspecialchars($value56, ($arguments54['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments54['encoding'] !== NULL ? $arguments54['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments54['doubleEncode']));

$output47 .= '</a></td></tr>
                          ';
return $output47;
};

$output44 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
                        ';
return $output44;
};

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output26 .= '
                      ';
return $output26;
};
$arguments23['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output57 = '';

$output57 .= '
                          ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments58 = array();
$arguments58['table'] = 'tt_content';
$arguments58['field'] = 'pi_flexform';
$arguments58['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('season'), 'uid', $renderingContext);
$arguments58['as'] = 'data';
$arguments58['record'] = NULL;
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output60 = '';

$output60 .= '
                            <tr><td id="td_Saison';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments61 = array();
$arguments61['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments61['keepQuotes'] = false;
$arguments61['encoding'] = NULL;
$arguments61['doubleEncode'] = true;
$renderChildrenClosure62 = function() {return NULL;};
$value63 = ($arguments61['value'] !== NULL ? $arguments61['value'] : $renderChildrenClosure62());

$output60 .= (!is_string($value63) ? $value63 : htmlspecialchars($value63, ($arguments61['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments61['encoding'] !== NULL ? $arguments61['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments61['doubleEncode']));

$output60 .= '"><a href="#" onclick="openSeason(\'Saison';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments64 = array();
$arguments64['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments64['keepQuotes'] = false;
$arguments64['encoding'] = NULL;
$arguments64['doubleEncode'] = true;
$renderChildrenClosure65 = function() {return NULL;};
$value66 = ($arguments64['value'] !== NULL ? $arguments64['value'] : $renderChildrenClosure65());

$output60 .= (!is_string($value66) ? $value66 : htmlspecialchars($value66, ($arguments64['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments64['encoding'] !== NULL ? $arguments64['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments64['doubleEncode']));

$output60 .= '\')">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments67 = array();
$arguments67['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments67['keepQuotes'] = false;
$arguments67['encoding'] = NULL;
$arguments67['doubleEncode'] = true;
$renderChildrenClosure68 = function() {return NULL;};
$value69 = ($arguments67['value'] !== NULL ? $arguments67['value'] : $renderChildrenClosure68());

$output60 .= (!is_string($value69) ? $value69 : htmlspecialchars($value69, ($arguments67['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments67['encoding'] !== NULL ? $arguments67['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments67['doubleEncode']));

$output60 .= '</a></td>
                          ';
return $output60;
};

$output57 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '
                        ';
return $output57;
};
$arguments23['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output70 = '';

$output70 .= '
                          ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments71 = array();
$arguments71['table'] = 'tt_content';
$arguments71['field'] = 'pi_flexform';
$arguments71['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('season'), 'uid', $renderingContext);
$arguments71['as'] = 'data';
$arguments71['record'] = NULL;
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output73 = '';

$output73 .= '
                            <td id="td_Saison';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments74 = array();
$arguments74['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments74['keepQuotes'] = false;
$arguments74['encoding'] = NULL;
$arguments74['doubleEncode'] = true;
$renderChildrenClosure75 = function() {return NULL;};
$value76 = ($arguments74['value'] !== NULL ? $arguments74['value'] : $renderChildrenClosure75());

$output73 .= (!is_string($value76) ? $value76 : htmlspecialchars($value76, ($arguments74['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments74['encoding'] !== NULL ? $arguments74['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments74['doubleEncode']));

$output73 .= '"><a href="#" onclick="openSeason(\'Saison';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments77 = array();
$arguments77['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments77['keepQuotes'] = false;
$arguments77['encoding'] = NULL;
$arguments77['doubleEncode'] = true;
$renderChildrenClosure78 = function() {return NULL;};
$value79 = ($arguments77['value'] !== NULL ? $arguments77['value'] : $renderChildrenClosure78());

$output73 .= (!is_string($value79) ? $value79 : htmlspecialchars($value79, ($arguments77['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments77['encoding'] !== NULL ? $arguments77['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments77['doubleEncode']));

$output73 .= '\')">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments80 = array();
$arguments80['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments80['keepQuotes'] = false;
$arguments80['encoding'] = NULL;
$arguments80['doubleEncode'] = true;
$renderChildrenClosure81 = function() {return NULL;};
$value82 = ($arguments80['value'] !== NULL ? $arguments80['value'] : $renderChildrenClosure81());

$output73 .= (!is_string($value82) ? $value82 : htmlspecialchars($value82, ($arguments80['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments80['encoding'] !== NULL ? $arguments80['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments80['doubleEncode']));

$output73 .= '</a></td></tr>
                          ';
return $output73;
};

$output70 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
                        ';
return $output70;
};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments23, $renderChildrenClosure25, $renderingContext);

$output22 .= '
                    ';
return $output22;
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output11 .= '
              </table>
            </div>
        </aside>
        <main class="text-container pull-left season-holder">
          ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments83 = array();
$arguments83['column'] = '0';
$arguments83['order'] = 'sorting';
$arguments83['sortDirection'] = 'ASC';
$arguments83['pageUid'] = 0;
$arguments83['contentUids'] = NULL;
$arguments83['sectionIndexOnly'] = false;
$arguments83['loadRegister'] = NULL;
$arguments83['render'] = true;
$arguments83['hideUntranslated'] = false;
$arguments83['limit'] = NULL;
$arguments83['slide'] = 0;
$arguments83['slideCollect'] = 0;
$arguments83['slideCollectReverse'] = false;
$arguments83['as'] = NULL;
$renderChildrenClosure84 = function() {return NULL;};
$viewHelper85 = $self->getViewHelper('$viewHelper85', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper85->setArguments($arguments83);
$viewHelper85->setRenderingContext($renderingContext);
$viewHelper85->setRenderChildrenClosure($renderChildrenClosure84);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output11 .= $viewHelper85->initializeArgumentsAndRender();

$output11 .= '
        </main>
      </div>

		</section>

	';


return $output11;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output86 = '';

$output86 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments87 = array();
$arguments87['name'] = 'Page';
$renderChildrenClosure88 = function() {return NULL;};
$viewHelper89 = $self->getViewHelper('$viewHelper89', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper89->setArguments($arguments87);
$viewHelper89->setRenderingContext($renderingContext);
$viewHelper89->setRenderChildrenClosure($renderChildrenClosure88);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output86 .= $viewHelper89->initializeArgumentsAndRender();

$output86 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments90 = array();
$arguments90['name'] = 'Configuration';
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output92 = '';

$output92 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments93 = array();
$arguments93['id'] = 'erfolgspage';
$arguments93['localLanguageFileRelativePath'] = '/Resources/Private/Language/Page/locallang_erfolgspage.xlf';
$arguments93['label'] = NULL;
$arguments93['description'] = NULL;
$arguments93['enabled'] = true;
$arguments93['compact'] = false;
$arguments93['variables'] = array (
);
$arguments93['options'] = NULL;
$arguments93['extensionName'] = NULL;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:form tag -->
		';
};

$output92 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\GridViewHelper
$arguments95 = array();
$arguments95['name'] = 'grid';
$arguments95['label'] = NULL;
$arguments95['variables'] = array (
);
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output97 = '';

$output97 .= '
			<!-- Edit this grid to change the "backend layout" structure -->
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments98 = array();
$arguments98['name'] = 'row';
$arguments98['label'] = NULL;
$arguments98['variables'] = array (
);
$arguments98['extensionName'] = NULL;
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output100 = '';

$output100 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments101 = array();
$arguments101['colPos'] = '0';
$arguments101['colspan'] = '3';
$arguments101['name'] = 'main';
$arguments101['label'] = 'Hauptinhalt';
$arguments101['rowspan'] = 1;
$arguments101['style'] = NULL;
$arguments101['variables'] = array (
);
$arguments101['extensionName'] = NULL;
$renderChildrenClosure102 = function() {return NULL;};

$output100 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output100 .= '
			';
return $output100;
};

$output97 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output97 .= '
		';
return $output97;
};

$output92 .= FluidTYPO3\Flux\ViewHelpers\GridViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output92 .= '
	';
return $output92;
};

$output86 .= '';

$output86 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments103 = array();
$arguments103['name'] = 'Main';
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output105 = '';

$output105 .= '
		<section id="title-bar">
			<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments106 = array();
$arguments106['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'title', $renderingContext);
$arguments106['keepQuotes'] = false;
$arguments106['encoding'] = NULL;
$arguments106['doubleEncode'] = true;
$renderChildrenClosure107 = function() {return NULL;};
$value108 = ($arguments106['value'] !== NULL ? $arguments106['value'] : $renderChildrenClosure107());

$output105 .= (!is_string($value108) ? $value108 : htmlspecialchars($value108, ($arguments106['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments106['encoding'] !== NULL ? $arguments106['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments106['doubleEncode']));

$output105 .= '</h2>
		</section>

		<section id="content">
      <div class="container">
        <aside class="text-container pull-right">
            <div class="table">
              <table>
                <caption><h3>Saison</h3></caption>
                  ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments109 = array();
$arguments109['name'] = 'seasons';
$arguments109['value'] = NULL;
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments111 = array();
$arguments111['column'] = '0';
$arguments111['order'] = 'sorting';
$arguments111['sortDirection'] = 'ASC';
$arguments111['pageUid'] = 0;
$arguments111['contentUids'] = NULL;
$arguments111['sectionIndexOnly'] = false;
$arguments111['loadRegister'] = NULL;
$arguments111['render'] = false;
$arguments111['hideUntranslated'] = false;
$arguments111['limit'] = NULL;
$arguments111['slide'] = 0;
$arguments111['slideCollect'] = 0;
$arguments111['slideCollectReverse'] = false;
$renderChildrenClosure112 = function() {return NULL;};
$viewHelper113 = $self->getViewHelper('$viewHelper113', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper113->setArguments($arguments111);
$viewHelper113->setRenderingContext($renderingContext);
$viewHelper113->setRenderChildrenClosure($renderChildrenClosure112);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper113->initializeArgumentsAndRender();
};

$output105 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments109, isset($arguments109['value']) ? function() use ($arguments109) { return $arguments109['value']; } : $renderChildrenClosure110, $renderingContext);

$output105 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments114 = array();
$arguments114['each'] = $currentVariableContainer->getOrNull('seasons');
$arguments114['as'] = 'season';
$arguments114['iteration'] = 'iterator';
$arguments114['key'] = '';
$arguments114['reverse'] = false;
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output116 = '';

$output116 .= '
                      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments117 = array();
// Rendering Boolean node
$output118 = '';

$output118 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext);

$output118 .= '% 2';
$arguments117['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $output118, 0);
$arguments117['then'] = NULL;
$arguments117['else'] = NULL;
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output120 = '';

$output120 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments121 = array();
$renderChildrenClosure122 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output123 = '';

$output123 .= '
                          ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments124 = array();
$arguments124['table'] = 'tt_content';
$arguments124['field'] = 'pi_flexform';
$arguments124['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('season'), 'uid', $renderingContext);
$arguments124['as'] = 'data';
$arguments124['record'] = NULL;
$renderChildrenClosure125 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output126 = '';

$output126 .= '
                            <tr><td id="td_Saison';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments127 = array();
$arguments127['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments127['keepQuotes'] = false;
$arguments127['encoding'] = NULL;
$arguments127['doubleEncode'] = true;
$renderChildrenClosure128 = function() {return NULL;};
$value129 = ($arguments127['value'] !== NULL ? $arguments127['value'] : $renderChildrenClosure128());

$output126 .= (!is_string($value129) ? $value129 : htmlspecialchars($value129, ($arguments127['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments127['encoding'] !== NULL ? $arguments127['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments127['doubleEncode']));

$output126 .= '"><a href="#" onclick="openSeason(\'Saison';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments130 = array();
$arguments130['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments130['keepQuotes'] = false;
$arguments130['encoding'] = NULL;
$arguments130['doubleEncode'] = true;
$renderChildrenClosure131 = function() {return NULL;};
$value132 = ($arguments130['value'] !== NULL ? $arguments130['value'] : $renderChildrenClosure131());

$output126 .= (!is_string($value132) ? $value132 : htmlspecialchars($value132, ($arguments130['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments130['encoding'] !== NULL ? $arguments130['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments130['doubleEncode']));

$output126 .= '\')">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments133 = array();
$arguments133['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments133['keepQuotes'] = false;
$arguments133['encoding'] = NULL;
$arguments133['doubleEncode'] = true;
$renderChildrenClosure134 = function() {return NULL;};
$value135 = ($arguments133['value'] !== NULL ? $arguments133['value'] : $renderChildrenClosure134());

$output126 .= (!is_string($value135) ? $value135 : htmlspecialchars($value135, ($arguments133['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments133['encoding'] !== NULL ? $arguments133['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments133['doubleEncode']));

$output126 .= '</a></td>
                          ';
return $output126;
};

$output123 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);

$output123 .= '
                        ';
return $output123;
};

$output120 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments121, $renderChildrenClosure122, $renderingContext);

$output120 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments136 = array();
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output138 = '';

$output138 .= '
                          ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments139 = array();
$arguments139['table'] = 'tt_content';
$arguments139['field'] = 'pi_flexform';
$arguments139['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('season'), 'uid', $renderingContext);
$arguments139['as'] = 'data';
$arguments139['record'] = NULL;
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output141 = '';

$output141 .= '
                            <td id="td_Saison';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments142 = array();
$arguments142['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments142['keepQuotes'] = false;
$arguments142['encoding'] = NULL;
$arguments142['doubleEncode'] = true;
$renderChildrenClosure143 = function() {return NULL;};
$value144 = ($arguments142['value'] !== NULL ? $arguments142['value'] : $renderChildrenClosure143());

$output141 .= (!is_string($value144) ? $value144 : htmlspecialchars($value144, ($arguments142['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments142['encoding'] !== NULL ? $arguments142['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments142['doubleEncode']));

$output141 .= '"><a href="#" onclick="openSeason(\'Saison';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments145 = array();
$arguments145['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments145['keepQuotes'] = false;
$arguments145['encoding'] = NULL;
$arguments145['doubleEncode'] = true;
$renderChildrenClosure146 = function() {return NULL;};
$value147 = ($arguments145['value'] !== NULL ? $arguments145['value'] : $renderChildrenClosure146());

$output141 .= (!is_string($value147) ? $value147 : htmlspecialchars($value147, ($arguments145['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments145['encoding'] !== NULL ? $arguments145['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments145['doubleEncode']));

$output141 .= '\')">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments148 = array();
$arguments148['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments148['keepQuotes'] = false;
$arguments148['encoding'] = NULL;
$arguments148['doubleEncode'] = true;
$renderChildrenClosure149 = function() {return NULL;};
$value150 = ($arguments148['value'] !== NULL ? $arguments148['value'] : $renderChildrenClosure149());

$output141 .= (!is_string($value150) ? $value150 : htmlspecialchars($value150, ($arguments148['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments148['encoding'] !== NULL ? $arguments148['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments148['doubleEncode']));

$output141 .= '</a></td></tr>
                          ';
return $output141;
};

$output138 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output138 .= '
                        ';
return $output138;
};

$output120 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output120 .= '
                      ';
return $output120;
};
$arguments117['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output151 = '';

$output151 .= '
                          ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments152 = array();
$arguments152['table'] = 'tt_content';
$arguments152['field'] = 'pi_flexform';
$arguments152['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('season'), 'uid', $renderingContext);
$arguments152['as'] = 'data';
$arguments152['record'] = NULL;
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output154 = '';

$output154 .= '
                            <tr><td id="td_Saison';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments155 = array();
$arguments155['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments155['keepQuotes'] = false;
$arguments155['encoding'] = NULL;
$arguments155['doubleEncode'] = true;
$renderChildrenClosure156 = function() {return NULL;};
$value157 = ($arguments155['value'] !== NULL ? $arguments155['value'] : $renderChildrenClosure156());

$output154 .= (!is_string($value157) ? $value157 : htmlspecialchars($value157, ($arguments155['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments155['encoding'] !== NULL ? $arguments155['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments155['doubleEncode']));

$output154 .= '"><a href="#" onclick="openSeason(\'Saison';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments158 = array();
$arguments158['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments158['keepQuotes'] = false;
$arguments158['encoding'] = NULL;
$arguments158['doubleEncode'] = true;
$renderChildrenClosure159 = function() {return NULL;};
$value160 = ($arguments158['value'] !== NULL ? $arguments158['value'] : $renderChildrenClosure159());

$output154 .= (!is_string($value160) ? $value160 : htmlspecialchars($value160, ($arguments158['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments158['encoding'] !== NULL ? $arguments158['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments158['doubleEncode']));

$output154 .= '\')">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments161 = array();
$arguments161['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments161['keepQuotes'] = false;
$arguments161['encoding'] = NULL;
$arguments161['doubleEncode'] = true;
$renderChildrenClosure162 = function() {return NULL;};
$value163 = ($arguments161['value'] !== NULL ? $arguments161['value'] : $renderChildrenClosure162());

$output154 .= (!is_string($value163) ? $value163 : htmlspecialchars($value163, ($arguments161['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments161['encoding'] !== NULL ? $arguments161['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments161['doubleEncode']));

$output154 .= '</a></td>
                          ';
return $output154;
};

$output151 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output151 .= '
                        ';
return $output151;
};
$arguments117['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output164 = '';

$output164 .= '
                          ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments165 = array();
$arguments165['table'] = 'tt_content';
$arguments165['field'] = 'pi_flexform';
$arguments165['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('season'), 'uid', $renderingContext);
$arguments165['as'] = 'data';
$arguments165['record'] = NULL;
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output167 = '';

$output167 .= '
                            <td id="td_Saison';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments168 = array();
$arguments168['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments168['keepQuotes'] = false;
$arguments168['encoding'] = NULL;
$arguments168['doubleEncode'] = true;
$renderChildrenClosure169 = function() {return NULL;};
$value170 = ($arguments168['value'] !== NULL ? $arguments168['value'] : $renderChildrenClosure169());

$output167 .= (!is_string($value170) ? $value170 : htmlspecialchars($value170, ($arguments168['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments168['encoding'] !== NULL ? $arguments168['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments168['doubleEncode']));

$output167 .= '"><a href="#" onclick="openSeason(\'Saison';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments171 = array();
$arguments171['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments171['keepQuotes'] = false;
$arguments171['encoding'] = NULL;
$arguments171['doubleEncode'] = true;
$renderChildrenClosure172 = function() {return NULL;};
$value173 = ($arguments171['value'] !== NULL ? $arguments171['value'] : $renderChildrenClosure172());

$output167 .= (!is_string($value173) ? $value173 : htmlspecialchars($value173, ($arguments171['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments171['encoding'] !== NULL ? $arguments171['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments171['doubleEncode']));

$output167 .= '\')">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments174 = array();
$arguments174['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);
$arguments174['keepQuotes'] = false;
$arguments174['encoding'] = NULL;
$arguments174['doubleEncode'] = true;
$renderChildrenClosure175 = function() {return NULL;};
$value176 = ($arguments174['value'] !== NULL ? $arguments174['value'] : $renderChildrenClosure175());

$output167 .= (!is_string($value176) ? $value176 : htmlspecialchars($value176, ($arguments174['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments174['encoding'] !== NULL ? $arguments174['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments174['doubleEncode']));

$output167 .= '</a></td></tr>
                          ';
return $output167;
};

$output164 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments165, $renderChildrenClosure166, $renderingContext);

$output164 .= '
                        ';
return $output164;
};

$output116 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments117, $renderChildrenClosure119, $renderingContext);

$output116 .= '
                    ';
return $output116;
};

$output105 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output105 .= '
              </table>
            </div>
        </aside>
        <main class="text-container pull-left season-holder">
          ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments177 = array();
$arguments177['column'] = '0';
$arguments177['order'] = 'sorting';
$arguments177['sortDirection'] = 'ASC';
$arguments177['pageUid'] = 0;
$arguments177['contentUids'] = NULL;
$arguments177['sectionIndexOnly'] = false;
$arguments177['loadRegister'] = NULL;
$arguments177['render'] = true;
$arguments177['hideUntranslated'] = false;
$arguments177['limit'] = NULL;
$arguments177['slide'] = 0;
$arguments177['slideCollect'] = 0;
$arguments177['slideCollectReverse'] = false;
$arguments177['as'] = NULL;
$renderChildrenClosure178 = function() {return NULL;};
$viewHelper179 = $self->getViewHelper('$viewHelper179', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper179->setArguments($arguments177);
$viewHelper179->setRenderingContext($renderingContext);
$viewHelper179->setRenderChildrenClosure($renderChildrenClosure178);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output105 .= $viewHelper179->initializeArgumentsAndRender();

$output105 .= '
        </main>
      </div>

		</section>

	';
return $output105;
};

$output86 .= '';

$output86 .= '
</div>
';


return $output86;
}


}
#1539020680    51558     