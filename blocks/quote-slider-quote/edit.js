/**
 * WordPress dependencies
 */
import { __ } from '@wordpress/i18n';
import { InnerBlocks, useBlockProps } from '@wordpress/block-editor';

/**
 * Internal dependencies
 */
const QUOTE_TEMPLATE = [
	['core/paragraph', { placeholder: 'Quote', className: 'quote' }],
	['core/image', {}],
	['core/paragraph', { placeholder: 'Citation', className: 'citation' }],
];

const Edit = () => {
	const blockProps = useBlockProps();
	return (
		<div {...blockProps}>
			{/*
			Template lock set to "all" to prevent adding/removing blocks
			See https://developer.wordpress.org/block-editor/how-to-guides/block-tutorial/nested-blocks-inner-blocks/#template
			*/}
			<InnerBlocks template={QUOTE_TEMPLATE} templateLock="all" />
		</div>
	);
};
export default Edit;
