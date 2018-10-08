<?php
class FluidCache_SkkProvider_Page_action_landingPage_c5c34b50fef74082683ba8e607756f31246e2bbc extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['id'] = 'landingpage';
$arguments1['localLanguageFileRelativePath'] = '/Resources/Private/Language/Page/locallang_landingpage.xlf';
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
$arguments9['name'] = 'slider';
$arguments9['label'] = 'Slider';
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
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments11 = array();
$arguments11['name'] = 'row';
$arguments11['label'] = NULL;
$arguments11['variables'] = array (
);
$arguments11['extensionName'] = NULL;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output13 = '';

$output13 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments14 = array();
$arguments14['colPos'] = '10';
$arguments14['colspan'] = '2';
$arguments14['name'] = 'main_content';
$arguments14['label'] = 'Hauptinhalt';
$arguments14['rowspan'] = 1;
$arguments14['style'] = NULL;
$arguments14['variables'] = array (
);
$arguments14['extensionName'] = NULL;
$renderChildrenClosure15 = function() {return NULL;};

$output13 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments16 = array();
$arguments16['colPos'] = '20';
$arguments16['colspan'] = '1';
$arguments16['name'] = 'aside';
$arguments16['label'] = 'Neuigkeiten';
$arguments16['rowspan'] = 1;
$arguments16['style'] = NULL;
$arguments16['variables'] = array (
);
$arguments16['extensionName'] = NULL;
$renderChildrenClosure17 = function() {return NULL;};

$output13 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output13 .= '
			';
return $output13;
};

$output5 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

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

$output18 = '';

$output18 .= '

    <section id="slider">
			';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments19 = array();
$arguments19['column'] = '0';
$arguments19['order'] = 'sorting';
$arguments19['sortDirection'] = 'ASC';
$arguments19['pageUid'] = 0;
$arguments19['contentUids'] = NULL;
$arguments19['sectionIndexOnly'] = false;
$arguments19['loadRegister'] = NULL;
$arguments19['render'] = true;
$arguments19['hideUntranslated'] = false;
$arguments19['limit'] = NULL;
$arguments19['slide'] = 0;
$arguments19['slideCollect'] = 0;
$arguments19['slideCollectReverse'] = false;
$arguments19['as'] = NULL;
$renderChildrenClosure20 = function() {return NULL;};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper21->setArguments($arguments19);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output18 .= $viewHelper21->initializeArgumentsAndRender();

$output18 .= '
    </section>

    <section id="main">
      <div class="container">
        <main id="about-us" class="">
          <div class="text-container">
            <h1>Herzlich Willkommen</h1>
            <aside id="news" class="side-content pull-right">
							';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments22 = array();
$arguments22['column'] = '20';
$arguments22['order'] = 'sorting';
$arguments22['sortDirection'] = 'ASC';
$arguments22['pageUid'] = 0;
$arguments22['contentUids'] = NULL;
$arguments22['sectionIndexOnly'] = false;
$arguments22['loadRegister'] = NULL;
$arguments22['render'] = true;
$arguments22['hideUntranslated'] = false;
$arguments22['limit'] = NULL;
$arguments22['slide'] = 0;
$arguments22['slideCollect'] = 0;
$arguments22['slideCollectReverse'] = false;
$arguments22['as'] = NULL;
$renderChildrenClosure23 = function() {return NULL;};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper24->setArguments($arguments22);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output18 .= $viewHelper24->initializeArgumentsAndRender();

$output18 .= '
            </aside>
            <p>';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments25 = array();
$arguments25['column'] = '10';
$arguments25['order'] = 'sorting';
$arguments25['sortDirection'] = 'ASC';
$arguments25['pageUid'] = 0;
$arguments25['contentUids'] = NULL;
$arguments25['sectionIndexOnly'] = false;
$arguments25['loadRegister'] = NULL;
$arguments25['render'] = true;
$arguments25['hideUntranslated'] = false;
$arguments25['limit'] = NULL;
$arguments25['slide'] = 0;
$arguments25['slideCollect'] = 0;
$arguments25['slideCollectReverse'] = false;
$arguments25['as'] = NULL;
$renderChildrenClosure26 = function() {return NULL;};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper27->setArguments($arguments25);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output18 .= $viewHelper27->initializeArgumentsAndRender();

$output18 .= '</p>
          </div>
        </main>

      </div>

    </section>

    <section id="facebook-articles" class="clear-both container">
      <h1>Neues von Facebook</h1>
      <div class="row" style="text-align: center">
				<div class="fb-page"
			     data-href="https://www.facebook.com/skk98poing/"
			     data-tabs="timeline"
			     data-small-header="false"
			     data-adapt-container-width="true"
			     data-hide-cover="false"
					 data-width="500"
			     data-show-facepile="true">
				  <div class="fb-xfbml-parse-ignore">
				    <blockquote cite="https://www.facebook.com/facebook">
				      <a href="https://www.facebook.com/facebook">Facebook</a>
				    </blockquote>
				  </div>
			</div>

      </div>
    </section>

    <section id="sponsors">
      <h1>Sponsoren</h1>
      <div class="sponsor-holder container">
        <a href="#">
          <div class="img-container">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments28 = array();
$arguments28['src'] = 'EXT:skk_provider/Resources/Public/Images/logo_schweiger.jpg';
$arguments28['alt'] = 'Logo von unserem Sponsor Schweiger';
$arguments28['class'] = 'img-responsive sponsor';
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['width'] = NULL;
$arguments28['height'] = NULL;
$arguments28['minWidth'] = NULL;
$arguments28['minHeight'] = NULL;
$arguments28['maxWidth'] = NULL;
$arguments28['maxHeight'] = NULL;
$arguments28['treatIdAsReference'] = false;
$arguments28['image'] = NULL;
$arguments28['crop'] = NULL;
$arguments28['absolute'] = false;
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$arguments28['ismap'] = NULL;
$arguments28['longdesc'] = NULL;
$arguments28['usemap'] = NULL;
$renderChildrenClosure29 = function() {return NULL;};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper30->setArguments($arguments28);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output18 .= $viewHelper30->initializeArgumentsAndRender();

$output18 .= '
          </div>
        </a>
        <a href="#">
          <div class="img-container">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments31 = array();
$arguments31['src'] = 'EXT:skk_provider/Resources/Public/Images/logo_poinger_einkehr.jpg';
$arguments31['alt'] = 'Logo von unserem Sponsor Poinger Einkehr';
$arguments31['class'] = 'img-responsive sponsor';
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['width'] = NULL;
$arguments31['height'] = NULL;
$arguments31['minWidth'] = NULL;
$arguments31['minHeight'] = NULL;
$arguments31['maxWidth'] = NULL;
$arguments31['maxHeight'] = NULL;
$arguments31['treatIdAsReference'] = false;
$arguments31['image'] = NULL;
$arguments31['crop'] = NULL;
$arguments31['absolute'] = false;
$arguments31['dir'] = NULL;
$arguments31['id'] = NULL;
$arguments31['lang'] = NULL;
$arguments31['style'] = NULL;
$arguments31['title'] = NULL;
$arguments31['accesskey'] = NULL;
$arguments31['tabindex'] = NULL;
$arguments31['onclick'] = NULL;
$arguments31['ismap'] = NULL;
$arguments31['longdesc'] = NULL;
$arguments31['usemap'] = NULL;
$renderChildrenClosure32 = function() {return NULL;};
$viewHelper33 = $self->getViewHelper('$viewHelper33', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper33->setArguments($arguments31);
$viewHelper33->setRenderingContext($renderingContext);
$viewHelper33->setRenderChildrenClosure($renderChildrenClosure32);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output18 .= $viewHelper33->initializeArgumentsAndRender();

$output18 .= '
          </div>
        </a>
        <a href="#">
          <div class="img-container">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments34 = array();
$arguments34['src'] = 'EXT:skk_provider/Resources/Public/Images/logo_steuerberater_schweiger.jpg';
$arguments34['alt'] = 'Logo von unserem Sponsor Steuerberater Schweiger';
$arguments34['class'] = 'img-responsive sponsor';
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['width'] = NULL;
$arguments34['height'] = NULL;
$arguments34['minWidth'] = NULL;
$arguments34['minHeight'] = NULL;
$arguments34['maxWidth'] = NULL;
$arguments34['maxHeight'] = NULL;
$arguments34['treatIdAsReference'] = false;
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
$arguments34['ismap'] = NULL;
$arguments34['longdesc'] = NULL;
$arguments34['usemap'] = NULL;
$renderChildrenClosure35 = function() {return NULL;};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper36->setArguments($arguments34);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output18 .= $viewHelper36->initializeArgumentsAndRender();

$output18 .= '
          </div>
        </a>
      </div>
    </section>

	';


return $output18;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output37 = '';

$output37 .= '<div xmlns="http://www.w3.org/1999/xhtml" lang="en" >

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments38 = array();
$arguments38['name'] = 'Page';
$renderChildrenClosure39 = function() {return NULL;};
$viewHelper40 = $self->getViewHelper('$viewHelper40', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper40->setArguments($arguments38);
$viewHelper40->setRenderingContext($renderingContext);
$viewHelper40->setRenderChildrenClosure($renderChildrenClosure39);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output37 .= $viewHelper40->initializeArgumentsAndRender();

$output37 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments41 = array();
$arguments41['name'] = 'Configuration';
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output43 = '';

$output43 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\FormViewHelper
$arguments44 = array();
$arguments44['id'] = 'landingpage';
$arguments44['localLanguageFileRelativePath'] = '/Resources/Private/Language/Page/locallang_landingpage.xlf';
$arguments44['label'] = NULL;
$arguments44['description'] = NULL;
$arguments44['enabled'] = true;
$arguments44['compact'] = false;
$arguments44['variables'] = array (
);
$arguments44['options'] = NULL;
$arguments44['extensionName'] = NULL;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return '
			<!-- Insert fields, sheets, grid, form section objects etc. here, in this flux:form tag -->
		';
};

$output43 .= FluidTYPO3\Flux\ViewHelpers\FormViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output43 .= '
		';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\GridViewHelper
$arguments46 = array();
$arguments46['name'] = 'grid';
$arguments46['label'] = NULL;
$arguments46['variables'] = array (
);
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output48 = '';

$output48 .= '
			<!-- Edit this grid to change the "backend layout" structure -->
			';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments49 = array();
$arguments49['name'] = 'row';
$arguments49['label'] = NULL;
$arguments49['variables'] = array (
);
$arguments49['extensionName'] = NULL;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output51 = '';

$output51 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments52 = array();
$arguments52['colPos'] = '0';
$arguments52['colspan'] = '3';
$arguments52['name'] = 'slider';
$arguments52['label'] = 'Slider';
$arguments52['rowspan'] = 1;
$arguments52['style'] = NULL;
$arguments52['variables'] = array (
);
$arguments52['extensionName'] = NULL;
$renderChildrenClosure53 = function() {return NULL;};

$output51 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
			';
return $output51;
};

$output48 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output48 .= '
      ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper
$arguments54 = array();
$arguments54['name'] = 'row';
$arguments54['label'] = NULL;
$arguments54['variables'] = array (
);
$arguments54['extensionName'] = NULL;
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output56 = '';

$output56 .= '
				';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments57 = array();
$arguments57['colPos'] = '10';
$arguments57['colspan'] = '2';
$arguments57['name'] = 'main_content';
$arguments57['label'] = 'Hauptinhalt';
$arguments57['rowspan'] = 1;
$arguments57['style'] = NULL;
$arguments57['variables'] = array (
);
$arguments57['extensionName'] = NULL;
$renderChildrenClosure58 = function() {return NULL;};

$output56 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper
$arguments59 = array();
$arguments59['colPos'] = '20';
$arguments59['colspan'] = '1';
$arguments59['name'] = 'aside';
$arguments59['label'] = 'Neuigkeiten';
$arguments59['rowspan'] = 1;
$arguments59['style'] = NULL;
$arguments59['variables'] = array (
);
$arguments59['extensionName'] = NULL;
$renderChildrenClosure60 = function() {return NULL;};

$output56 .= FluidTYPO3\Flux\ViewHelpers\Grid\ColumnViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output56 .= '
			';
return $output56;
};

$output48 .= FluidTYPO3\Flux\ViewHelpers\Grid\RowViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output48 .= '
		';
return $output48;
};

$output43 .= FluidTYPO3\Flux\ViewHelpers\GridViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output43 .= '
	';
return $output43;
};

$output37 .= '';

$output37 .= '

	';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments61 = array();
$arguments61['name'] = 'Main';
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output63 = '';

$output63 .= '

    <section id="slider">
			';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments64 = array();
$arguments64['column'] = '0';
$arguments64['order'] = 'sorting';
$arguments64['sortDirection'] = 'ASC';
$arguments64['pageUid'] = 0;
$arguments64['contentUids'] = NULL;
$arguments64['sectionIndexOnly'] = false;
$arguments64['loadRegister'] = NULL;
$arguments64['render'] = true;
$arguments64['hideUntranslated'] = false;
$arguments64['limit'] = NULL;
$arguments64['slide'] = 0;
$arguments64['slideCollect'] = 0;
$arguments64['slideCollectReverse'] = false;
$arguments64['as'] = NULL;
$renderChildrenClosure65 = function() {return NULL;};
$viewHelper66 = $self->getViewHelper('$viewHelper66', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper66->setArguments($arguments64);
$viewHelper66->setRenderingContext($renderingContext);
$viewHelper66->setRenderChildrenClosure($renderChildrenClosure65);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output63 .= $viewHelper66->initializeArgumentsAndRender();

$output63 .= '
    </section>

    <section id="main">
      <div class="container">
        <main id="about-us" class="">
          <div class="text-container">
            <h1>Herzlich Willkommen</h1>
            <aside id="news" class="side-content pull-right">
							';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments67 = array();
$arguments67['column'] = '20';
$arguments67['order'] = 'sorting';
$arguments67['sortDirection'] = 'ASC';
$arguments67['pageUid'] = 0;
$arguments67['contentUids'] = NULL;
$arguments67['sectionIndexOnly'] = false;
$arguments67['loadRegister'] = NULL;
$arguments67['render'] = true;
$arguments67['hideUntranslated'] = false;
$arguments67['limit'] = NULL;
$arguments67['slide'] = 0;
$arguments67['slideCollect'] = 0;
$arguments67['slideCollectReverse'] = false;
$arguments67['as'] = NULL;
$renderChildrenClosure68 = function() {return NULL;};
$viewHelper69 = $self->getViewHelper('$viewHelper69', $renderingContext, 'FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper');
$viewHelper69->setArguments($arguments67);
$viewHelper69->setRenderingContext($renderingContext);
$viewHelper69->setRenderChildrenClosure($renderChildrenClosure68);
// End of ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper

$output63 .= $viewHelper69->initializeArgumentsAndRender();

$output63 .= '
            </aside>
            <p>';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Content\RenderViewHelper
$arguments70 = array();
$arguments70['column'] = '10';
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

$output63 .= $viewHelper72->initializeArgumentsAndRender();

$output63 .= '</p>
          </div>
        </main>

      </div>

    </section>

    <section id="facebook-articles" class="clear-both container">
      <h1>Neues von Facebook</h1>
      <div class="row" style="text-align: center">
				<div class="fb-page"
			     data-href="https://www.facebook.com/skk98poing/"
			     data-tabs="timeline"
			     data-small-header="false"
			     data-adapt-container-width="true"
			     data-hide-cover="false"
					 data-width="500"
			     data-show-facepile="true">
				  <div class="fb-xfbml-parse-ignore">
				    <blockquote cite="https://www.facebook.com/facebook">
				      <a href="https://www.facebook.com/facebook">Facebook</a>
				    </blockquote>
				  </div>
			</div>

      </div>
    </section>

    <section id="sponsors">
      <h1>Sponsoren</h1>
      <div class="sponsor-holder container">
        <a href="#">
          <div class="img-container">
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments73 = array();
$arguments73['src'] = 'EXT:skk_provider/Resources/Public/Images/logo_schweiger.jpg';
$arguments73['alt'] = 'Logo von unserem Sponsor Schweiger';
$arguments73['class'] = 'img-responsive sponsor';
$arguments73['additionalAttributes'] = NULL;
$arguments73['data'] = NULL;
$arguments73['width'] = NULL;
$arguments73['height'] = NULL;
$arguments73['minWidth'] = NULL;
$arguments73['minHeight'] = NULL;
$arguments73['maxWidth'] = NULL;
$arguments73['maxHeight'] = NULL;
$arguments73['treatIdAsReference'] = false;
$arguments73['image'] = NULL;
$arguments73['crop'] = NULL;
$arguments73['absolute'] = false;
$arguments73['dir'] = NULL;
$arguments73['id'] = NULL;
$arguments73['lang'] = NULL;
$arguments73['style'] = NULL;
$arguments73['title'] = NULL;
$arguments73['accesskey'] = NULL;
$arguments73['tabindex'] = NULL;
$arguments73['onclick'] = NULL;
$arguments73['ismap'] = NULL;
$arguments73['longdesc'] = NULL;
$arguments73['usemap'] = NULL;
$renderChildrenClosure74 = function() {return NULL;};
$viewHelper75 = $self->getViewHelper('$viewHelper75', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper75->setArguments($arguments73);
$viewHelper75->setRenderingContext($renderingContext);
$viewHelper75->setRenderChildrenClosure($renderChildrenClosure74);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output63 .= $viewHelper75->initializeArgumentsAndRender();

$output63 .= '
          </div>
        </a>
        <a href="#">
          <div class="img-container">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments76 = array();
$arguments76['src'] = 'EXT:skk_provider/Resources/Public/Images/logo_poinger_einkehr.jpg';
$arguments76['alt'] = 'Logo von unserem Sponsor Poinger Einkehr';
$arguments76['class'] = 'img-responsive sponsor';
$arguments76['additionalAttributes'] = NULL;
$arguments76['data'] = NULL;
$arguments76['width'] = NULL;
$arguments76['height'] = NULL;
$arguments76['minWidth'] = NULL;
$arguments76['minHeight'] = NULL;
$arguments76['maxWidth'] = NULL;
$arguments76['maxHeight'] = NULL;
$arguments76['treatIdAsReference'] = false;
$arguments76['image'] = NULL;
$arguments76['crop'] = NULL;
$arguments76['absolute'] = false;
$arguments76['dir'] = NULL;
$arguments76['id'] = NULL;
$arguments76['lang'] = NULL;
$arguments76['style'] = NULL;
$arguments76['title'] = NULL;
$arguments76['accesskey'] = NULL;
$arguments76['tabindex'] = NULL;
$arguments76['onclick'] = NULL;
$arguments76['ismap'] = NULL;
$arguments76['longdesc'] = NULL;
$arguments76['usemap'] = NULL;
$renderChildrenClosure77 = function() {return NULL;};
$viewHelper78 = $self->getViewHelper('$viewHelper78', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper78->setArguments($arguments76);
$viewHelper78->setRenderingContext($renderingContext);
$viewHelper78->setRenderChildrenClosure($renderChildrenClosure77);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output63 .= $viewHelper78->initializeArgumentsAndRender();

$output63 .= '
          </div>
        </a>
        <a href="#">
          <div class="img-container">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$arguments79 = array();
$arguments79['src'] = 'EXT:skk_provider/Resources/Public/Images/logo_steuerberater_schweiger.jpg';
$arguments79['alt'] = 'Logo von unserem Sponsor Steuerberater Schweiger';
$arguments79['class'] = 'img-responsive sponsor';
$arguments79['additionalAttributes'] = NULL;
$arguments79['data'] = NULL;
$arguments79['width'] = NULL;
$arguments79['height'] = NULL;
$arguments79['minWidth'] = NULL;
$arguments79['minHeight'] = NULL;
$arguments79['maxWidth'] = NULL;
$arguments79['maxHeight'] = NULL;
$arguments79['treatIdAsReference'] = false;
$arguments79['image'] = NULL;
$arguments79['crop'] = NULL;
$arguments79['absolute'] = false;
$arguments79['dir'] = NULL;
$arguments79['id'] = NULL;
$arguments79['lang'] = NULL;
$arguments79['style'] = NULL;
$arguments79['title'] = NULL;
$arguments79['accesskey'] = NULL;
$arguments79['tabindex'] = NULL;
$arguments79['onclick'] = NULL;
$arguments79['ismap'] = NULL;
$arguments79['longdesc'] = NULL;
$arguments79['usemap'] = NULL;
$renderChildrenClosure80 = function() {return NULL;};
$viewHelper81 = $self->getViewHelper('$viewHelper81', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper');
$viewHelper81->setArguments($arguments79);
$viewHelper81->setRenderingContext($renderingContext);
$viewHelper81->setRenderChildrenClosure($renderChildrenClosure80);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper

$output63 .= $viewHelper81->initializeArgumentsAndRender();

$output63 .= '
          </div>
        </a>
      </div>
    </section>

	';
return $output63;
};

$output37 .= '';

$output37 .= '
</div>
';


return $output37;
}


}
#1517329034    30618     