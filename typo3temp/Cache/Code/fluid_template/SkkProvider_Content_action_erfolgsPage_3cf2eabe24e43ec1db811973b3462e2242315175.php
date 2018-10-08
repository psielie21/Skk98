<?php
class FluidCache_SkkProvider_Content_action_erfolgsPage_3cf2eabe24e43ec1db811973b3462e2242315175 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output11 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'title', $renderingContext);

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
$arguments12 = array();
$arguments12['name'] = 'seasons';
$arguments12['value'] = NULL;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments14 = array();
$arguments14['column'] = '0';
$arguments14['order'] = 'sorting';
$arguments14['sortDirection'] = 'ASC';
$arguments14['pageUid'] = 0;
$arguments14['contentUids'] = NULL;
$arguments14['sectionIndexOnly'] = false;
$arguments14['loadRegister'] = NULL;
$arguments14['render'] = false;
$arguments14['hideUntranslated'] = false;
$arguments14['limit'] = NULL;
$arguments14['slide'] = 0;
$arguments14['slideCollect'] = 0;
$arguments14['slideCollectReverse'] = false;
$renderChildrenClosure15 = function() {return NULL;};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper16->setArguments($arguments14);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper16->initializeArgumentsAndRender();
};

$output11 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments12, isset($arguments12['value']) ? function() use ($arguments12) { return $arguments12['value']; } : $renderChildrenClosure13, $renderingContext);

$output11 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments17 = array();
$arguments17['each'] = $currentVariableContainer->getOrNull('seasons');
$arguments17['as'] = 'season';
$arguments17['iteration'] = 'iterator';
$arguments17['key'] = '';
$arguments17['reverse'] = false;
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output19 = '';

$output19 .= '
                      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments20 = array();
// Rendering Boolean node
$output21 = '';

$output21 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext);

$output21 .= '% 2';
$arguments20['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $output21, 0);
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output23 = '';

$output23 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments24 = array();
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output26 = '';

$output26 .= '
                          ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments27 = array();
$arguments27['table'] = 'tt_content';
$arguments27['field'] = 'pi_flexform';
$arguments27['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('season'), 'uid', $renderingContext);
$arguments27['as'] = 'data';
$arguments27['record'] = NULL;
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output29 = '';

$output29 .= '
                            <tr><td id="td_Saison';

$output29 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output29 .= '"><a href="#" onclick="openSeason(\'Saison';

$output29 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output29 .= '\')">';

$output29 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output29 .= '</a></td>
                          ';
return $output29;
};

$output26 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '
                        ';
return $output26;
};

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments30 = array();
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output32 = '';

$output32 .= '
                          ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments33 = array();
$arguments33['table'] = 'tt_content';
$arguments33['field'] = 'pi_flexform';
$arguments33['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('season'), 'uid', $renderingContext);
$arguments33['as'] = 'data';
$arguments33['record'] = NULL;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output35 = '';

$output35 .= '
                            <td id="td_Saison';

$output35 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output35 .= '"><a href="#" onclick="openSeason(\'Saison';

$output35 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output35 .= '\')">';

$output35 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output35 .= '</a></td></tr>
                          ';
return $output35;
};

$output32 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
                        ';
return $output32;
};

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output23 .= '
                      ';
return $output23;
};
$arguments20['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output36 = '';

$output36 .= '
                          ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments37 = array();
$arguments37['table'] = 'tt_content';
$arguments37['field'] = 'pi_flexform';
$arguments37['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('season'), 'uid', $renderingContext);
$arguments37['as'] = 'data';
$arguments37['record'] = NULL;
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output39 = '';

$output39 .= '
                            <tr><td id="td_Saison';

$output39 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output39 .= '"><a href="#" onclick="openSeason(\'Saison';

$output39 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output39 .= '\')">';

$output39 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output39 .= '</a></td>
                          ';
return $output39;
};

$output36 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
                        ';
return $output36;
};
$arguments20['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output40 = '';

$output40 .= '
                          ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments41 = array();
$arguments41['table'] = 'tt_content';
$arguments41['field'] = 'pi_flexform';
$arguments41['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('season'), 'uid', $renderingContext);
$arguments41['as'] = 'data';
$arguments41['record'] = NULL;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output43 = '';

$output43 .= '
                            <td id="td_Saison';

$output43 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output43 .= '"><a href="#" onclick="openSeason(\'Saison';

$output43 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output43 .= '\')">';

$output43 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output43 .= '</a></td></tr>
                          ';
return $output43;
};

$output40 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output40 .= '
                        ';
return $output40;
};

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure22, $renderingContext);

$output19 .= '
                    ';
return $output19;
};

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output11 .= '
              </table>
            </div>
        </aside>
        <main class="text-container pull-left season-holder">
          ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments44 = array();
$arguments44['column'] = '0';
$arguments44['order'] = 'sorting';
$arguments44['sortDirection'] = 'ASC';
$arguments44['pageUid'] = 0;
$arguments44['contentUids'] = NULL;
$arguments44['sectionIndexOnly'] = false;
$arguments44['loadRegister'] = NULL;
$arguments44['render'] = true;
$arguments44['hideUntranslated'] = false;
$arguments44['limit'] = NULL;
$arguments44['slide'] = 0;
$arguments44['slideCollect'] = 0;
$arguments44['slideCollectReverse'] = false;
$arguments44['as'] = NULL;
$renderChildrenClosure45 = function() {return NULL;};
$viewHelper46 = $self->getViewHelper('$viewHelper46', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper46->setArguments($arguments44);
$viewHelper46->setRenderingContext($renderingContext);
$viewHelper46->setRenderChildrenClosure($renderChildrenClosure45);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output11 .= $viewHelper46->initializeArgumentsAndRender();

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

$output47 = '';

$output47 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments48 = array();
$arguments48['name'] = 'Page';
$renderChildrenClosure49 = function() {return NULL;};
$viewHelper50 = $self->getViewHelper('$viewHelper50', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper50->setArguments($arguments48);
$viewHelper50->setRenderingContext($renderingContext);
$viewHelper50->setRenderChildrenClosure($renderChildrenClosure49);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output47 .= $viewHelper50->initializeArgumentsAndRender();

$output47 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments51 = array();
$arguments51['name'] = 'Configuration';
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output53 = '';

$output53 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments54 = array();
$arguments54['id'] = 'erfolgspage';
$arguments54['localLanguageFileRelativePath'] = '/Resources/Private/Language/Page/locallang_erfolgspage.xlf';
$arguments54['label'] = NULL;
$arguments54['description'] = NULL;
$arguments54['enabled'] = true;
$arguments54['compact'] = false;
$arguments54['variables'] = array (
);
$arguments54['options'] = NULL;
$arguments54['extensionName'] = NULL;
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:form tag -->
		';
};

$output53 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\GridViewHelper
$arguments56 = array();
$arguments56['name'] = 'grid';
$arguments56['label'] = NULL;
$arguments56['variables'] = array (
);
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output58 = '';

$output58 .= '
			<!-- Edit this grid to change the "backend layout" structure -->
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments59 = array();
$arguments59['name'] = 'row';
$arguments59['label'] = NULL;
$arguments59['variables'] = array (
);
$arguments59['extensionName'] = NULL;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output61 = '';

$output61 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments62 = array();
$arguments62['colPos'] = '0';
$arguments62['colspan'] = '3';
$arguments62['name'] = 'main';
$arguments62['label'] = 'Hauptinhalt';
$arguments62['rowspan'] = 1;
$arguments62['style'] = NULL;
$arguments62['variables'] = array (
);
$arguments62['extensionName'] = NULL;
$renderChildrenClosure63 = function() {return NULL;};

$output61 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
			';
return $output61;
};

$output58 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '
		';
return $output58;
};

$output53 .= FluidTYPO3\Flux\ViewHelpers\GridViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output53 .= '
	';
return $output53;
};

$output47 .= '';

$output47 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments64 = array();
$arguments64['name'] = 'Main';
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output66 = '';

$output66 .= '
		<section id="title-bar">
			<h2>';

$output66 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('page'), 'title', $renderingContext);

$output66 .= '</h2>
		</section>

		<section id="content">
      <div class="container">
        <aside class="text-container pull-right">
            <div class="table">
              <table>
                <caption><h3>Saison</h3></caption>
                  ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$arguments67 = array();
$arguments67['name'] = 'seasons';
$arguments67['value'] = NULL;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
$arguments69 = array();
$arguments69['column'] = '0';
$arguments69['order'] = 'sorting';
$arguments69['sortDirection'] = 'ASC';
$arguments69['pageUid'] = 0;
$arguments69['contentUids'] = NULL;
$arguments69['sectionIndexOnly'] = false;
$arguments69['loadRegister'] = NULL;
$arguments69['render'] = false;
$arguments69['hideUntranslated'] = false;
$arguments69['limit'] = NULL;
$arguments69['slide'] = 0;
$arguments69['slideCollect'] = 0;
$arguments69['slideCollectReverse'] = false;
$renderChildrenClosure70 = function() {return NULL;};
$viewHelper71 = $self->getViewHelper('$viewHelper71', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper');
$viewHelper71->setArguments($arguments69);
$viewHelper71->setRenderingContext($renderingContext);
$viewHelper71->setRenderChildrenClosure($renderChildrenClosure70);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\GetViewHelper
return $viewHelper71->initializeArgumentsAndRender();
};

$output66 .= FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments67, isset($arguments67['value']) ? function() use ($arguments67) { return $arguments67['value']; } : $renderChildrenClosure68, $renderingContext);

$output66 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments72 = array();
$arguments72['each'] = $currentVariableContainer->getOrNull('seasons');
$arguments72['as'] = 'season';
$arguments72['iteration'] = 'iterator';
$arguments72['key'] = '';
$arguments72['reverse'] = false;
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output74 = '';

$output74 .= '
                      ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments75 = array();
// Rendering Boolean node
$output76 = '';

$output76 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('iterator'), 'index', $renderingContext);

$output76 .= '% 2';
$arguments75['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $output76, 0);
$arguments75['then'] = NULL;
$arguments75['else'] = NULL;
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output78 = '';

$output78 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments79 = array();
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output81 = '';

$output81 .= '
                          ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments82 = array();
$arguments82['table'] = 'tt_content';
$arguments82['field'] = 'pi_flexform';
$arguments82['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('season'), 'uid', $renderingContext);
$arguments82['as'] = 'data';
$arguments82['record'] = NULL;
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output84 = '';

$output84 .= '
                            <tr><td id="td_Saison';

$output84 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output84 .= '"><a href="#" onclick="openSeason(\'Saison';

$output84 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output84 .= '\')">';

$output84 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output84 .= '</a></td>
                          ';
return $output84;
};

$output81 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
                        ';
return $output81;
};

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments85 = array();
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output87 = '';

$output87 .= '
                          ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments88 = array();
$arguments88['table'] = 'tt_content';
$arguments88['field'] = 'pi_flexform';
$arguments88['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('season'), 'uid', $renderingContext);
$arguments88['as'] = 'data';
$arguments88['record'] = NULL;
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output90 = '';

$output90 .= '
                            <td id="td_Saison';

$output90 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output90 .= '"><a href="#" onclick="openSeason(\'Saison';

$output90 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output90 .= '\')">';

$output90 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output90 .= '</a></td></tr>
                          ';
return $output90;
};

$output87 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
                        ';
return $output87;
};

$output78 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output78 .= '
                      ';
return $output78;
};
$arguments75['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output91 = '';

$output91 .= '
                          ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments92 = array();
$arguments92['table'] = 'tt_content';
$arguments92['field'] = 'pi_flexform';
$arguments92['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('season'), 'uid', $renderingContext);
$arguments92['as'] = 'data';
$arguments92['record'] = NULL;
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output94 = '';

$output94 .= '
                            <tr><td id="td_Saison';

$output94 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output94 .= '"><a href="#" onclick="openSeason(\'Saison';

$output94 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output94 .= '\')">';

$output94 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output94 .= '</a></td>
                          ';
return $output94;
};

$output91 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output91 .= '
                        ';
return $output91;
};
$arguments75['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output95 = '';

$output95 .= '
                          ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper
$arguments96 = array();
$arguments96['table'] = 'tt_content';
$arguments96['field'] = 'pi_flexform';
$arguments96['uid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('season'), 'uid', $renderingContext);
$arguments96['as'] = 'data';
$arguments96['record'] = NULL;
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output98 = '';

$output98 .= '
                            <td id="td_Saison';

$output98 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output98 .= '"><a href="#" onclick="openSeason(\'Saison';

$output98 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output98 .= '\')">';

$output98 .= \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'settings.season', $renderingContext);

$output98 .= '</a></td></tr>
                          ';
return $output98;
};

$output95 .= FluidTYPO3\Flux\ViewHelpers\Form\DataViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output95 .= '
                        ';
return $output95;
};

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, $renderChildrenClosure77, $renderingContext);

$output74 .= '
                    ';
return $output74;
};

$output66 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output66 .= '
              </table>
            </div>
        </aside>
        <main class="text-container pull-left season-holder">
          ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments99 = array();
$arguments99['column'] = '0';
$arguments99['order'] = 'sorting';
$arguments99['sortDirection'] = 'ASC';
$arguments99['pageUid'] = 0;
$arguments99['contentUids'] = NULL;
$arguments99['sectionIndexOnly'] = false;
$arguments99['loadRegister'] = NULL;
$arguments99['render'] = true;
$arguments99['hideUntranslated'] = false;
$arguments99['limit'] = NULL;
$arguments99['slide'] = 0;
$arguments99['slideCollect'] = 0;
$arguments99['slideCollectReverse'] = false;
$arguments99['as'] = NULL;
$renderChildrenClosure100 = function() {return NULL;};
$viewHelper101 = $self->getViewHelper('$viewHelper101', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper101->setArguments($arguments99);
$viewHelper101->setRenderingContext($renderingContext);
$viewHelper101->setRenderChildrenClosure($renderChildrenClosure100);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output66 .= $viewHelper101->initializeArgumentsAndRender();

$output66 .= '
        </main>
      </div>

		</section>

	';
return $output66;
};

$output47 .= '';

$output47 .= '
</div>
';


return $output47;
}


}
#1539020680    33135     