<?php
class FluidCache_SkkProvider_Page_action_galleryPage_4ab9268e7a62e4213205c1b934116e8254677446 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['id'] = 'gallerypage';
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/Page/locallang_gallerypage.xlf';
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
$arguments9['label'] = 'Gallerie';
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
			<div class="text-container">
        <div class="gallery-navigation">
          ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments15 = array();
$arguments15['name'] = 'categories';
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
          <ul class="sorting">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments20 = array();
$arguments20['each'] = $currentVariableContainer->getOrNull('categories');
$arguments20['as'] = 'category';
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
$arguments23['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext), 0);
$arguments23['then'] = NULL;
$arguments23['else'] = NULL;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output25 = '';

$output25 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments26 = array();
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output28 = '';

$output28 .= '
                  ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments29 = array();
$arguments29['table'] = 'tt_content';
$arguments29['field'] = 'pi_flexform';
$arguments29['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'uid', $renderingContext);
$arguments29['as'] = 'data';
$arguments29['record'] = NULL;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
                    <li class="active" data-filter=".';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments32 = array();
$arguments32['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);
$arguments32['keepQuotes'] = false;
$arguments32['encoding'] = NULL;
$arguments32['doubleEncode'] = true;
$renderChildrenClosure33 = function() {return NULL;};
$value34 = ($arguments32['value'] !== NULL ? $arguments32['value'] : $renderChildrenClosure33());

$output31 .= (!is_string($value34) ? $value34 : htmlspecialchars($value34, ($arguments32['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments32['encoding'] !== NULL ? $arguments32['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments32['doubleEncode']));

$output31 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments35 = array();
$arguments35['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);
$arguments35['keepQuotes'] = false;
$arguments35['encoding'] = NULL;
$arguments35['doubleEncode'] = true;
$renderChildrenClosure36 = function() {return NULL;};
$value37 = ($arguments35['value'] !== NULL ? $arguments35['value'] : $renderChildrenClosure36());

$output31 .= (!is_string($value37) ? $value37 : htmlspecialchars($value37, ($arguments35['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments35['encoding'] !== NULL ? $arguments35['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments35['doubleEncode']));

$output31 .= '</li>
                  ';
return $output31;
};

$output28 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
                ';
return $output28;
};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments38 = array();
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output40 = '';

$output40 .= '
                  ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments41 = array();
$arguments41['table'] = 'tt_content';
$arguments41['field'] = 'pi_flexform';
$arguments41['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'uid', $renderingContext);
$arguments41['as'] = 'data';
$arguments41['record'] = NULL;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output43 = '';

$output43 .= '
                    <li data-filter=".';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments44 = array();
$arguments44['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);
$arguments44['keepQuotes'] = false;
$arguments44['encoding'] = NULL;
$arguments44['doubleEncode'] = true;
$renderChildrenClosure45 = function() {return NULL;};
$value46 = ($arguments44['value'] !== NULL ? $arguments44['value'] : $renderChildrenClosure45());

$output43 .= (!is_string($value46) ? $value46 : htmlspecialchars($value46, ($arguments44['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments44['encoding'] !== NULL ? $arguments44['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments44['doubleEncode']));

$output43 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments47 = array();
$arguments47['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);
$arguments47['keepQuotes'] = false;
$arguments47['encoding'] = NULL;
$arguments47['doubleEncode'] = true;
$renderChildrenClosure48 = function() {return NULL;};
$value49 = ($arguments47['value'] !== NULL ? $arguments47['value'] : $renderChildrenClosure48());

$output43 .= (!is_string($value49) ? $value49 : htmlspecialchars($value49, ($arguments47['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments47['encoding'] !== NULL ? $arguments47['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments47['doubleEncode']));

$output43 .= '</li>
                  ';
return $output43;
};

$output40 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output40 .= '
                ';
return $output40;
};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output25 .= '
              ';
return $output25;
};
$arguments23['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output50 = '';

$output50 .= '
                  ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments51 = array();
$arguments51['table'] = 'tt_content';
$arguments51['field'] = 'pi_flexform';
$arguments51['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'uid', $renderingContext);
$arguments51['as'] = 'data';
$arguments51['record'] = NULL;
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output53 = '';

$output53 .= '
                    <li class="active" data-filter=".';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments54 = array();
$arguments54['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);
$arguments54['keepQuotes'] = false;
$arguments54['encoding'] = NULL;
$arguments54['doubleEncode'] = true;
$renderChildrenClosure55 = function() {return NULL;};
$value56 = ($arguments54['value'] !== NULL ? $arguments54['value'] : $renderChildrenClosure55());

$output53 .= (!is_string($value56) ? $value56 : htmlspecialchars($value56, ($arguments54['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments54['encoding'] !== NULL ? $arguments54['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments54['doubleEncode']));

$output53 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments57 = array();
$arguments57['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);
$arguments57['keepQuotes'] = false;
$arguments57['encoding'] = NULL;
$arguments57['doubleEncode'] = true;
$renderChildrenClosure58 = function() {return NULL;};
$value59 = ($arguments57['value'] !== NULL ? $arguments57['value'] : $renderChildrenClosure58());

$output53 .= (!is_string($value59) ? $value59 : htmlspecialchars($value59, ($arguments57['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments57['encoding'] !== NULL ? $arguments57['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments57['doubleEncode']));

$output53 .= '</li>
                  ';
return $output53;
};

$output50 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
                ';
return $output50;
};
$arguments23['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output60 = '';

$output60 .= '
                  ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments61 = array();
$arguments61['table'] = 'tt_content';
$arguments61['field'] = 'pi_flexform';
$arguments61['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'uid', $renderingContext);
$arguments61['as'] = 'data';
$arguments61['record'] = NULL;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output63 = '';

$output63 .= '
                    <li data-filter=".';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments64 = array();
$arguments64['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);
$arguments64['keepQuotes'] = false;
$arguments64['encoding'] = NULL;
$arguments64['doubleEncode'] = true;
$renderChildrenClosure65 = function() {return NULL;};
$value66 = ($arguments64['value'] !== NULL ? $arguments64['value'] : $renderChildrenClosure65());

$output63 .= (!is_string($value66) ? $value66 : htmlspecialchars($value66, ($arguments64['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments64['encoding'] !== NULL ? $arguments64['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments64['doubleEncode']));

$output63 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments67 = array();
$arguments67['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);
$arguments67['keepQuotes'] = false;
$arguments67['encoding'] = NULL;
$arguments67['doubleEncode'] = true;
$renderChildrenClosure68 = function() {return NULL;};
$value69 = ($arguments67['value'] !== NULL ? $arguments67['value'] : $renderChildrenClosure68());

$output63 .= (!is_string($value69) ? $value69 : htmlspecialchars($value69, ($arguments67['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments67['encoding'] !== NULL ? $arguments67['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments67['doubleEncode']));

$output63 .= '</li>
                  ';
return $output63;
};

$output60 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$output60 .= '
                ';
return $output60;
};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '

            ';
return $output22;
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output11 .= '
          </ul>
        </div>
        <div class="gallery">
          ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments70 = array();
$arguments70['column'] = '0';
$arguments70['order'] = 'sorting';
$arguments70['sortDirection'] = 'ASC';
$arguments70['pageUid'] = 0;
$arguments70['contentUids'] = NULL;
$arguments70['sectionIndexOnly'] = false;
$arguments70['loadRegister'] = NULL;
$arguments70['render'] = true;
$arguments70['hideUntranslated'] = false;
$arguments70['limit'] = NULL;
$arguments70['slide'] = 0;
$arguments70['slideCollect'] = 0;
$arguments70['slideCollectReverse'] = false;
$arguments70['as'] = NULL;
$renderChildrenClosure71 = function() {return NULL;};
$viewHelper72 = $self->getViewHelper('$viewHelper72', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper72->setArguments($arguments70);
$viewHelper72->setRenderingContext($renderingContext);
$viewHelper72->setRenderChildrenClosure($renderChildrenClosure71);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output11 .= $viewHelper72->initializeArgumentsAndRender();

$output11 .= '
        </div>

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

$output73 = '';

$output73 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments74 = array();
$arguments74['name'] = 'Page';
$renderChildrenClosure75 = function() {return NULL;};
$viewHelper76 = $self->getViewHelper('$viewHelper76', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper76->setArguments($arguments74);
$viewHelper76->setRenderingContext($renderingContext);
$viewHelper76->setRenderChildrenClosure($renderChildrenClosure75);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output73 .= $viewHelper76->initializeArgumentsAndRender();

$output73 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments77 = array();
$arguments77['name'] = 'Configuration';
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output79 = '';

$output79 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments80 = array();
$arguments80['id'] = 'gallerypage';
$arguments80['localLanguageFileRelativePath'] = '/Resources/Private/Language/Page/locallang_gallerypage.xlf';
$arguments80['label'] = NULL;
$arguments80['description'] = NULL;
$arguments80['enabled'] = true;
$arguments80['compact'] = false;
$arguments80['variables'] = array (
);
$arguments80['options'] = NULL;
$arguments80['extensionName'] = NULL;
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:form tag -->
		';
};

$output79 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output79 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\GridViewHelper
$arguments82 = array();
$arguments82['name'] = 'grid';
$arguments82['label'] = NULL;
$arguments82['variables'] = array (
);
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output84 = '';

$output84 .= '
			<!-- Edit this grid to change the "backend layout" structure -->
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments85 = array();
$arguments85['name'] = 'row';
$arguments85['label'] = NULL;
$arguments85['variables'] = array (
);
$arguments85['extensionName'] = NULL;
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output87 = '';

$output87 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments88 = array();
$arguments88['colPos'] = '0';
$arguments88['colspan'] = '3';
$arguments88['name'] = 'main';
$arguments88['label'] = 'Gallerie';
$arguments88['rowspan'] = 1;
$arguments88['style'] = NULL;
$arguments88['variables'] = array (
);
$arguments88['extensionName'] = NULL;
$renderChildrenClosure89 = function() {return NULL;};

$output87 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
			';
return $output87;
};

$output84 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '
		';
return $output84;
};

$output79 .= FluidTYPO3\Flux\ViewHelpers\GridViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output79 .= '
	';
return $output79;
};

$output73 .= '';

$output73 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments90 = array();
$arguments90['name'] = 'Main';
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output92 = '';

$output92 .= '
		<section id="title-bar">
			<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments93 = array();
$arguments93['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'title', $renderingContext);
$arguments93['keepQuotes'] = false;
$arguments93['encoding'] = NULL;
$arguments93['doubleEncode'] = true;
$renderChildrenClosure94 = function() {return NULL;};
$value95 = ($arguments93['value'] !== NULL ? $arguments93['value'] : $renderChildrenClosure94());

$output92 .= (!is_string($value95) ? $value95 : htmlspecialchars($value95, ($arguments93['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments93['encoding'] !== NULL ? $arguments93['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments93['doubleEncode']));

$output92 .= '</h2>
		</section>

		<section id="content">
			<div class="text-container">
        <div class="gallery-navigation">
          ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments96 = array();
$arguments96['name'] = 'categories';
$arguments96['value'] = NULL;
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments98 = array();
$arguments98['column'] = '0';
$arguments98['order'] = 'sorting';
$arguments98['sortDirection'] = 'ASC';
$arguments98['pageUid'] = 0;
$arguments98['contentUids'] = NULL;
$arguments98['sectionIndexOnly'] = false;
$arguments98['loadRegister'] = NULL;
$arguments98['render'] = false;
$arguments98['hideUntranslated'] = false;
$arguments98['limit'] = NULL;
$arguments98['slide'] = 0;
$arguments98['slideCollect'] = 0;
$arguments98['slideCollectReverse'] = false;
$renderChildrenClosure99 = function() {return NULL;};
$viewHelper100 = $self->getViewHelper('$viewHelper100', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper100->setArguments($arguments98);
$viewHelper100->setRenderingContext($renderingContext);
$viewHelper100->setRenderChildrenClosure($renderChildrenClosure99);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper100->initializeArgumentsAndRender();
};

$output92 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments96, isset($arguments96['value']) ? function() use ($arguments96) { return $arguments96['value']; } : $renderChildrenClosure97, $renderingContext);

$output92 .= '
          <ul class="sorting">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments101 = array();
$arguments101['each'] = $currentVariableContainer->getOrNull('categories');
$arguments101['as'] = 'category';
$arguments101['iteration'] = 'iterator';
$arguments101['key'] = '';
$arguments101['reverse'] = false;
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output103 = '';

$output103 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments104 = array();
// Rendering Boolean node
$arguments104['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext), 0);
$arguments104['then'] = NULL;
$arguments104['else'] = NULL;
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output106 = '';

$output106 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments107 = array();
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output109 = '';

$output109 .= '
                  ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments110 = array();
$arguments110['table'] = 'tt_content';
$arguments110['field'] = 'pi_flexform';
$arguments110['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'uid', $renderingContext);
$arguments110['as'] = 'data';
$arguments110['record'] = NULL;
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output112 = '';

$output112 .= '
                    <li class="active" data-filter=".';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments113 = array();
$arguments113['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);
$arguments113['keepQuotes'] = false;
$arguments113['encoding'] = NULL;
$arguments113['doubleEncode'] = true;
$renderChildrenClosure114 = function() {return NULL;};
$value115 = ($arguments113['value'] !== NULL ? $arguments113['value'] : $renderChildrenClosure114());

$output112 .= (!is_string($value115) ? $value115 : htmlspecialchars($value115, ($arguments113['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments113['encoding'] !== NULL ? $arguments113['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments113['doubleEncode']));

$output112 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments116 = array();
$arguments116['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);
$arguments116['keepQuotes'] = false;
$arguments116['encoding'] = NULL;
$arguments116['doubleEncode'] = true;
$renderChildrenClosure117 = function() {return NULL;};
$value118 = ($arguments116['value'] !== NULL ? $arguments116['value'] : $renderChildrenClosure117());

$output112 .= (!is_string($value118) ? $value118 : htmlspecialchars($value118, ($arguments116['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments116['encoding'] !== NULL ? $arguments116['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments116['doubleEncode']));

$output112 .= '</li>
                  ';
return $output112;
};

$output109 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output109 .= '
                ';
return $output109;
};

$output106 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments119 = array();
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output121 = '';

$output121 .= '
                  ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments122 = array();
$arguments122['table'] = 'tt_content';
$arguments122['field'] = 'pi_flexform';
$arguments122['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'uid', $renderingContext);
$arguments122['as'] = 'data';
$arguments122['record'] = NULL;
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output124 = '';

$output124 .= '
                    <li data-filter=".';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments125 = array();
$arguments125['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);
$arguments125['keepQuotes'] = false;
$arguments125['encoding'] = NULL;
$arguments125['doubleEncode'] = true;
$renderChildrenClosure126 = function() {return NULL;};
$value127 = ($arguments125['value'] !== NULL ? $arguments125['value'] : $renderChildrenClosure126());

$output124 .= (!is_string($value127) ? $value127 : htmlspecialchars($value127, ($arguments125['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments125['encoding'] !== NULL ? $arguments125['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments125['doubleEncode']));

$output124 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments128 = array();
$arguments128['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);
$arguments128['keepQuotes'] = false;
$arguments128['encoding'] = NULL;
$arguments128['doubleEncode'] = true;
$renderChildrenClosure129 = function() {return NULL;};
$value130 = ($arguments128['value'] !== NULL ? $arguments128['value'] : $renderChildrenClosure129());

$output124 .= (!is_string($value130) ? $value130 : htmlspecialchars($value130, ($arguments128['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments128['encoding'] !== NULL ? $arguments128['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments128['doubleEncode']));

$output124 .= '</li>
                  ';
return $output124;
};

$output121 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output121 .= '
                ';
return $output121;
};

$output106 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output106 .= '
              ';
return $output106;
};
$arguments104['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output131 = '';

$output131 .= '
                  ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments132 = array();
$arguments132['table'] = 'tt_content';
$arguments132['field'] = 'pi_flexform';
$arguments132['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'uid', $renderingContext);
$arguments132['as'] = 'data';
$arguments132['record'] = NULL;
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output134 = '';

$output134 .= '
                    <li class="active" data-filter=".';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments135 = array();
$arguments135['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);
$arguments135['keepQuotes'] = false;
$arguments135['encoding'] = NULL;
$arguments135['doubleEncode'] = true;
$renderChildrenClosure136 = function() {return NULL;};
$value137 = ($arguments135['value'] !== NULL ? $arguments135['value'] : $renderChildrenClosure136());

$output134 .= (!is_string($value137) ? $value137 : htmlspecialchars($value137, ($arguments135['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments135['encoding'] !== NULL ? $arguments135['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments135['doubleEncode']));

$output134 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments138 = array();
$arguments138['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);
$arguments138['keepQuotes'] = false;
$arguments138['encoding'] = NULL;
$arguments138['doubleEncode'] = true;
$renderChildrenClosure139 = function() {return NULL;};
$value140 = ($arguments138['value'] !== NULL ? $arguments138['value'] : $renderChildrenClosure139());

$output134 .= (!is_string($value140) ? $value140 : htmlspecialchars($value140, ($arguments138['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments138['encoding'] !== NULL ? $arguments138['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments138['doubleEncode']));

$output134 .= '</li>
                  ';
return $output134;
};

$output131 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output131 .= '
                ';
return $output131;
};
$arguments104['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output141 = '';

$output141 .= '
                  ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments142 = array();
$arguments142['table'] = 'tt_content';
$arguments142['field'] = 'pi_flexform';
$arguments142['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('category'), 'uid', $renderingContext);
$arguments142['as'] = 'data';
$arguments142['record'] = NULL;
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output144 = '';

$output144 .= '
                    <li data-filter=".';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments145 = array();
$arguments145['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);
$arguments145['keepQuotes'] = false;
$arguments145['encoding'] = NULL;
$arguments145['doubleEncode'] = true;
$renderChildrenClosure146 = function() {return NULL;};
$value147 = ($arguments145['value'] !== NULL ? $arguments145['value'] : $renderChildrenClosure146());

$output144 .= (!is_string($value147) ? $value147 : htmlspecialchars($value147, ($arguments145['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments145['encoding'] !== NULL ? $arguments145['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments145['doubleEncode']));

$output144 .= '">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments148 = array();
$arguments148['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.folder', $renderingContext);
$arguments148['keepQuotes'] = false;
$arguments148['encoding'] = NULL;
$arguments148['doubleEncode'] = true;
$renderChildrenClosure149 = function() {return NULL;};
$value150 = ($arguments148['value'] !== NULL ? $arguments148['value'] : $renderChildrenClosure149());

$output144 .= (!is_string($value150) ? $value150 : htmlspecialchars($value150, ($arguments148['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments148['encoding'] !== NULL ? $arguments148['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments148['doubleEncode']));

$output144 .= '</li>
                  ';
return $output144;
};

$output141 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output141 .= '
                ';
return $output141;
};

$output103 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output103 .= '

            ';
return $output103;
};

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output92 .= '
          </ul>
        </div>
        <div class="gallery">
          ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments151 = array();
$arguments151['column'] = '0';
$arguments151['order'] = 'sorting';
$arguments151['sortDirection'] = 'ASC';
$arguments151['pageUid'] = 0;
$arguments151['contentUids'] = NULL;
$arguments151['sectionIndexOnly'] = false;
$arguments151['loadRegister'] = NULL;
$arguments151['render'] = true;
$arguments151['hideUntranslated'] = false;
$arguments151['limit'] = NULL;
$arguments151['slide'] = 0;
$arguments151['slideCollect'] = 0;
$arguments151['slideCollectReverse'] = false;
$arguments151['as'] = NULL;
$renderChildrenClosure152 = function() {return NULL;};
$viewHelper153 = $self->getViewHelper('$viewHelper153', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper153->setArguments($arguments151);
$viewHelper153->setRenderingContext($renderingContext);
$viewHelper153->setRenderChildrenClosure($renderChildrenClosure152);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output92 .= $viewHelper153->initializeArgumentsAndRender();

$output92 .= '
        </div>

			</div>
		</section>

	';
return $output92;
};

$output73 .= '';

$output73 .= '
</div>
';


return $output73;
}


}
#1539020717    43206     