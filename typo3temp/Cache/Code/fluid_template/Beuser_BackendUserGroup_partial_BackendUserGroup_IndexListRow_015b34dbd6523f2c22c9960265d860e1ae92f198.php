<?php
class FluidCache_Beuser_BackendUserGroup_partial_BackendUserGroup_IndexListRow_015b34dbd6523f2c22c9960265d860e1ae92f198 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 = '';

$output0 .= '


<tr>
	<td class="col-icon">
		<a href="#" class="t3-js-clickmenutrigger" data-table="be_groups" data-uid="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('backendUserGroup'), 'uid', $renderingContext);
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = NULL;
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() {return NULL;};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments1['encoding'] !== NULL ? $arguments1['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments1['doubleEncode']));

$output0 .= '" data-listframe="1" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments5 = array();
$arguments5['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('backendUserGroup'), 'description', $renderingContext);
$arguments5['keepQuotes'] = false;
$arguments5['encoding'] = NULL;
$arguments5['doubleEncode'] = true;
$renderChildrenClosure6 = function() {return NULL;};
$value7 = ($arguments5['value'] !== NULL ? $arguments5['value'] : $renderChildrenClosure6());
$arguments4['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean((!is_string($value7) ? $value7 : htmlspecialchars($value7, ($arguments5['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments5['encoding'] !== NULL ? $arguments5['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments5['doubleEncode'])));
$output8 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments9 = array();
$arguments9['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('backendUserGroup'), 'description', $renderingContext);
$arguments9['keepQuotes'] = false;
$arguments9['encoding'] = NULL;
$arguments9['doubleEncode'] = true;
$renderChildrenClosure10 = function() {return NULL;};
$value11 = ($arguments9['value'] !== NULL ? $arguments9['value'] : $renderChildrenClosure10());

$output8 .= (!is_string($value11) ? $value11 : htmlspecialchars($value11, ($arguments9['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments9['encoding'] !== NULL ? $arguments9['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments9['doubleEncode']));

$output8 .= ' ';
$arguments4['then'] = $output8;
$arguments4['else'] = NULL;
$renderChildrenClosure12 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure12, $renderingContext);

$output0 .= '(id=';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments13 = array();
$arguments13['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('backendUserGroup'), 'uid', $renderingContext);
$arguments13['keepQuotes'] = false;
$arguments13['encoding'] = NULL;
$arguments13['doubleEncode'] = true;
$renderChildrenClosure14 = function() {return NULL;};
$value15 = ($arguments13['value'] !== NULL ? $arguments13['value'] : $renderChildrenClosure14());

$output0 .= (!is_string($value15) ? $value15 : htmlspecialchars($value15, ($arguments13['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments13['encoding'] !== NULL ? $arguments13['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments13['doubleEncode']));

$output0 .= ')">
			';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\SpriteIconForRecordViewHelper
$arguments16 = array();
$arguments16['table'] = 'be_groups';
$arguments16['object'] = $currentVariableContainer->getOrNull('backendUserGroup');
$renderChildrenClosure17 = function() {return NULL;};

$output0 .= TYPO3\CMS\Beuser\ViewHelpers\SpriteIconForRecordViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= '
		</a>
	</td>
	<td class="col-title">

		<a href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\EditRecordViewHelper
$arguments18 = array();
$output19 = '';

$output19 .= 'edit[be_groups][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments20 = array();
$arguments20['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('backendUserGroup'), 'uid', $renderingContext);
$arguments20['keepQuotes'] = false;
$arguments20['encoding'] = NULL;
$arguments20['doubleEncode'] = true;
$renderChildrenClosure21 = function() {return NULL;};
$value22 = ($arguments20['value'] !== NULL ? $arguments20['value'] : $renderChildrenClosure21());

$output19 .= (!is_string($value22) ? $value22 : htmlspecialchars($value22, ($arguments20['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments20['encoding'] !== NULL ? $arguments20['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments20['doubleEncode']));

$output19 .= ']=edit&returnUrl=';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments23 = array();
$arguments23['value'] = $currentVariableContainer->getOrNull('returnUrl');
$arguments23['keepQuotes'] = false;
$arguments23['encoding'] = NULL;
$arguments23['doubleEncode'] = true;
$renderChildrenClosure24 = function() {return NULL;};
$value25 = ($arguments23['value'] !== NULL ? $arguments23['value'] : $renderChildrenClosure24());

$output19 .= (!is_string($value25) ? $value25 : htmlspecialchars($value25, ($arguments23['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments23['encoding'] !== NULL ? $arguments23['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments23['doubleEncode']));
$arguments18['parameters'] = $output19;
$renderChildrenClosure26 = function() {return NULL;};

$output0 .= TYPO3\CMS\Beuser\ViewHelpers\EditRecordViewHelper::renderStatic($arguments18, $renderChildrenClosure26, $renderingContext);

$output0 .= '">
			<b>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments27 = array();
$arguments27['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('backendUserGroup'), 'title', $renderingContext);
$arguments27['keepQuotes'] = false;
$arguments27['encoding'] = NULL;
$arguments27['doubleEncode'] = true;
$renderChildrenClosure28 = function() {return NULL;};
$value29 = ($arguments27['value'] !== NULL ? $arguments27['value'] : $renderChildrenClosure28());

$output0 .= (!is_string($value29) ? $value29 : htmlspecialchars($value29, ($arguments27['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments27['encoding'] !== NULL ? $arguments27['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments27['doubleEncode']));

$output0 .= '</b><br />
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments30 = array();
$arguments30['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('backendUser'), 'realName', $renderingContext);
$arguments30['keepQuotes'] = false;
$arguments30['encoding'] = NULL;
$arguments30['doubleEncode'] = true;
$renderChildrenClosure31 = function() {return NULL;};
$value32 = ($arguments30['value'] !== NULL ? $arguments30['value'] : $renderChildrenClosure31());

$output0 .= (!is_string($value32) ? $value32 : htmlspecialchars($value32, ($arguments30['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments30['encoding'] !== NULL ? $arguments30['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments30['doubleEncode']));

$output0 .= '
		</a>
	</td>
	<td>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper
$arguments33 = array();
$arguments33['each'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('backendUserGroup'), 'subgroups', $renderingContext);
$arguments33['as'] = 'subgroup';
$arguments33['iteration'] = 'subGroupIterator';
$arguments33['key'] = '';
$arguments33['reverse'] = false;
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output35 = '';

$output35 .= '
			<a href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\EditRecordViewHelper
$arguments36 = array();
$output37 = '';

$output37 .= 'edit[be_groups][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments38 = array();
$arguments38['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('backendUserGroup'), 'uid', $renderingContext);
$arguments38['keepQuotes'] = false;
$arguments38['encoding'] = NULL;
$arguments38['doubleEncode'] = true;
$renderChildrenClosure39 = function() {return NULL;};
$value40 = ($arguments38['value'] !== NULL ? $arguments38['value'] : $renderChildrenClosure39());

$output37 .= (!is_string($value40) ? $value40 : htmlspecialchars($value40, ($arguments38['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments38['encoding'] !== NULL ? $arguments38['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments38['doubleEncode']));

$output37 .= ']=edit&returnUrl=';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments41 = array();
$arguments41['value'] = $currentVariableContainer->getOrNull('returnUrl');
$arguments41['keepQuotes'] = false;
$arguments41['encoding'] = NULL;
$arguments41['doubleEncode'] = true;
$renderChildrenClosure42 = function() {return NULL;};
$value43 = ($arguments41['value'] !== NULL ? $arguments41['value'] : $renderChildrenClosure42());

$output37 .= (!is_string($value43) ? $value43 : htmlspecialchars($value43, ($arguments41['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments41['encoding'] !== NULL ? $arguments41['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments41['doubleEncode']));
$arguments36['parameters'] = $output37;
$renderChildrenClosure44 = function() {return NULL;};

$output35 .= TYPO3\CMS\Beuser\ViewHelpers\EditRecordViewHelper::renderStatic($arguments36, $renderChildrenClosure44, $renderingContext);

$output35 .= '">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments45 = array();
$arguments45['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subgroup'), 'title', $renderingContext);
$arguments45['keepQuotes'] = false;
$arguments45['encoding'] = NULL;
$arguments45['doubleEncode'] = true;
$renderChildrenClosure46 = function() {return NULL;};
$value47 = ($arguments45['value'] !== NULL ? $arguments45['value'] : $renderChildrenClosure46());

$output35 .= (!is_string($value47) ? $value47 : htmlspecialchars($value47, ($arguments45['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments45['encoding'] !== NULL ? $arguments45['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments45['doubleEncode']));

$output35 .= '
			</a>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments48 = array();
// Rendering Boolean node
$arguments48['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('subGroupIterator'), 'isLast', $renderingContext));
$arguments48['then'] = NULL;
$arguments48['else'] = NULL;
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments50 = array();
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return ', ';
};
return TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);
};
$arguments48['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
return ', ';
};

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output35 .= '
		';
return $output35;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output0 .= '
	</td>
	<td class="col-control">
		<div class="btn-group" role="group">
			<a class="btn btn-default" href="#" onclick="top.launchView(\'be_groups\', \'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments52 = array();
$arguments52['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('backendUserGroup'), 'uid', $renderingContext);
$arguments52['keepQuotes'] = false;
$arguments52['encoding'] = NULL;
$arguments52['doubleEncode'] = true;
$renderChildrenClosure53 = function() {return NULL;};
$value54 = ($arguments52['value'] !== NULL ? $arguments52['value'] : $renderChildrenClosure53());

$output0 .= (!is_string($value54) ? $value54 : htmlspecialchars($value54, ($arguments52['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments52['encoding'] !== NULL ? $arguments52['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments52['doubleEncode']));

$output0 .= '\'); return false;">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments55 = array();
$arguments55['identifier'] = 'actions-document-info';
$arguments55['size'] = 'small';
$arguments55['overlay'] = NULL;
$arguments55['state'] = 'default';
$arguments55['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure56 = function() {return NULL;};

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output0 .= '</a>
			<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\EditRecordViewHelper
$arguments57 = array();
$output58 = '';

$output58 .= 'edit[be_groups][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments59 = array();
$arguments59['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('backendUserGroup'), 'uid', $renderingContext);
$arguments59['keepQuotes'] = false;
$arguments59['encoding'] = NULL;
$arguments59['doubleEncode'] = true;
$renderChildrenClosure60 = function() {return NULL;};
$value61 = ($arguments59['value'] !== NULL ? $arguments59['value'] : $renderChildrenClosure60());

$output58 .= (!is_string($value61) ? $value61 : htmlspecialchars($value61, ($arguments59['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments59['encoding'] !== NULL ? $arguments59['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments59['doubleEncode']));

$output58 .= ']=edit&returnUrl=';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments62 = array();
$arguments62['value'] = $currentVariableContainer->getOrNull('returnUrl');
$arguments62['keepQuotes'] = false;
$arguments62['encoding'] = NULL;
$arguments62['doubleEncode'] = true;
$renderChildrenClosure63 = function() {return NULL;};
$value64 = ($arguments62['value'] !== NULL ? $arguments62['value'] : $renderChildrenClosure63());

$output58 .= (!is_string($value64) ? $value64 : htmlspecialchars($value64, ($arguments62['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments62['encoding'] !== NULL ? $arguments62['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments62['doubleEncode']));
$arguments57['parameters'] = $output58;
$renderChildrenClosure65 = function() {return NULL;};

$output0 .= TYPO3\CMS\Beuser\ViewHelpers\EditRecordViewHelper::renderStatic($arguments57, $renderChildrenClosure65, $renderingContext);

$output0 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments66 = array();
$arguments66['identifier'] = 'actions-document-open';
$arguments66['size'] = 'small';
$arguments66['overlay'] = NULL;
$arguments66['state'] = 'default';
$arguments66['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure67 = function() {return NULL;};

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output0 .= '</a>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments68 = array();
// Rendering Boolean node
$arguments68['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('backendUserGroup'), 'hidden', $renderingContext));
$arguments68['then'] = NULL;
$arguments68['else'] = NULL;
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output70 = '';

$output70 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments71 = array();
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output73 = '';

$output73 .= '
					<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$arguments74 = array();
$output75 = '';

$output75 .= 'data[be_groups][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments76 = array();
$arguments76['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('backendUserGroup'), 'uid', $renderingContext);
$arguments76['keepQuotes'] = false;
$arguments76['encoding'] = NULL;
$arguments76['doubleEncode'] = true;
$renderChildrenClosure77 = function() {return NULL;};
$value78 = ($arguments76['value'] !== NULL ? $arguments76['value'] : $renderChildrenClosure77());

$output75 .= (!is_string($value78) ? $value78 : htmlspecialchars($value78, ($arguments76['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments76['encoding'] !== NULL ? $arguments76['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments76['doubleEncode']));

$output75 .= '][hidden]=0';
$arguments74['parameters'] = $output75;
$arguments74['redirectUrl'] = $currentVariableContainer->getOrNull('redirectUrl');
$renderChildrenClosure79 = function() {return NULL;};

$output73 .= TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments74, $renderChildrenClosure79, $renderingContext);

$output73 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments80 = array();
$arguments80['key'] = 'visibility.unhide';
$arguments80['id'] = NULL;
$arguments80['default'] = NULL;
$arguments80['htmlEscape'] = NULL;
$arguments80['arguments'] = NULL;
$arguments80['extensionName'] = NULL;
$renderChildrenClosure81 = function() {return NULL;};

$output73 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output73 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments82 = array();
$arguments82['identifier'] = 'actions-edit-unhide';
$arguments82['size'] = 'small';
$arguments82['overlay'] = NULL;
$arguments82['state'] = 'default';
$arguments82['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure83 = function() {return NULL;};

$output73 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output73 .= '</a>
				';
return $output73;
};

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments84 = array();
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output86 = '';

$output86 .= '
					<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$arguments87 = array();
$output88 = '';

$output88 .= 'data[be_groups][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments89 = array();
$arguments89['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('backendUserGroup'), 'uid', $renderingContext);
$arguments89['keepQuotes'] = false;
$arguments89['encoding'] = NULL;
$arguments89['doubleEncode'] = true;
$renderChildrenClosure90 = function() {return NULL;};
$value91 = ($arguments89['value'] !== NULL ? $arguments89['value'] : $renderChildrenClosure90());

$output88 .= (!is_string($value91) ? $value91 : htmlspecialchars($value91, ($arguments89['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments89['encoding'] !== NULL ? $arguments89['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments89['doubleEncode']));

$output88 .= '][hidden]=1';
$arguments87['parameters'] = $output88;
$arguments87['redirectUrl'] = $currentVariableContainer->getOrNull('redirectUrl');
$renderChildrenClosure92 = function() {return NULL;};

$output86 .= TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments87, $renderChildrenClosure92, $renderingContext);

$output86 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments93 = array();
$arguments93['key'] = 'visibility.hide';
$arguments93['id'] = NULL;
$arguments93['default'] = NULL;
$arguments93['htmlEscape'] = NULL;
$arguments93['arguments'] = NULL;
$arguments93['extensionName'] = NULL;
$renderChildrenClosure94 = function() {return NULL;};

$output86 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output86 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments95 = array();
$arguments95['identifier'] = 'actions-edit-hide';
$arguments95['size'] = 'small';
$arguments95['overlay'] = NULL;
$arguments95['state'] = 'default';
$arguments95['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure96 = function() {return NULL;};

$output86 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output86 .= '</a>
				';
return $output86;
};

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output70 .= '
			';
return $output70;
};
$arguments68['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output97 = '';

$output97 .= '
					<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$arguments98 = array();
$output99 = '';

$output99 .= 'data[be_groups][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments100 = array();
$arguments100['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('backendUserGroup'), 'uid', $renderingContext);
$arguments100['keepQuotes'] = false;
$arguments100['encoding'] = NULL;
$arguments100['doubleEncode'] = true;
$renderChildrenClosure101 = function() {return NULL;};
$value102 = ($arguments100['value'] !== NULL ? $arguments100['value'] : $renderChildrenClosure101());

$output99 .= (!is_string($value102) ? $value102 : htmlspecialchars($value102, ($arguments100['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments100['encoding'] !== NULL ? $arguments100['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments100['doubleEncode']));

$output99 .= '][hidden]=0';
$arguments98['parameters'] = $output99;
$arguments98['redirectUrl'] = $currentVariableContainer->getOrNull('redirectUrl');
$renderChildrenClosure103 = function() {return NULL;};

$output97 .= TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments98, $renderChildrenClosure103, $renderingContext);

$output97 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments104 = array();
$arguments104['key'] = 'visibility.unhide';
$arguments104['id'] = NULL;
$arguments104['default'] = NULL;
$arguments104['htmlEscape'] = NULL;
$arguments104['arguments'] = NULL;
$arguments104['extensionName'] = NULL;
$renderChildrenClosure105 = function() {return NULL;};

$output97 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output97 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments106 = array();
$arguments106['identifier'] = 'actions-edit-unhide';
$arguments106['size'] = 'small';
$arguments106['overlay'] = NULL;
$arguments106['state'] = 'default';
$arguments106['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure107 = function() {return NULL;};

$output97 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output97 .= '</a>
				';
return $output97;
};
$arguments68['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output108 = '';

$output108 .= '
					<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$arguments109 = array();
$output110 = '';

$output110 .= 'data[be_groups][';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments111 = array();
$arguments111['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('backendUserGroup'), 'uid', $renderingContext);
$arguments111['keepQuotes'] = false;
$arguments111['encoding'] = NULL;
$arguments111['doubleEncode'] = true;
$renderChildrenClosure112 = function() {return NULL;};
$value113 = ($arguments111['value'] !== NULL ? $arguments111['value'] : $renderChildrenClosure112());

$output110 .= (!is_string($value113) ? $value113 : htmlspecialchars($value113, ($arguments111['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments111['encoding'] !== NULL ? $arguments111['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments111['doubleEncode']));

$output110 .= '][hidden]=1';
$arguments109['parameters'] = $output110;
$arguments109['redirectUrl'] = $currentVariableContainer->getOrNull('redirectUrl');
$renderChildrenClosure114 = function() {return NULL;};

$output108 .= TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments109, $renderChildrenClosure114, $renderingContext);

$output108 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$arguments115 = array();
$arguments115['key'] = 'visibility.hide';
$arguments115['id'] = NULL;
$arguments115['default'] = NULL;
$arguments115['htmlEscape'] = NULL;
$arguments115['arguments'] = NULL;
$arguments115['extensionName'] = NULL;
$renderChildrenClosure116 = function() {return NULL;};

$output108 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output108 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$arguments117 = array();
$arguments117['identifier'] = 'actions-edit-hide';
$arguments117['size'] = 'small';
$arguments117['overlay'] = NULL;
$arguments117['state'] = 'default';
$arguments117['alternativeMarkupIdentifier'] = NULL;
$renderChildrenClosure118 = function() {return NULL;};

$output108 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output108 .= '</a>
				';
return $output108;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output0 .= '
		</div>
	</td>
</tr>
';


return $output0;
}


}
#1539020252    30534     