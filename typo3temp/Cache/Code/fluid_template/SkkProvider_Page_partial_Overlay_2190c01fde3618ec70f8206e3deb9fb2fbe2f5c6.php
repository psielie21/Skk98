<?php
class FluidCache_SkkProvider_Page_partial_Overlay_2190c01fde3618ec70f8206e3deb9fb2fbe2f5c6 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();



return '<div class="overlay" id="overlay" onclick="deactivateInfo();">
  <div class="text">
    <h4>Trainigszeiten</h4>Di u. Do 15.-22.00 Uhr<br> Freitag 15-18.00 Uhr
  </div>
  <div class="text">
    <h4>Adresse</h4>Sportpark Poing - 85586 Poing, Plieningerstr. 24
  </div>
  <div class="text">
    <h4>Telefon</h4>Tel.-Fax: 08121-973492  08121-81931 1. Vorstand
  </div>
</div>
';
}


}
#1539020354    1189      