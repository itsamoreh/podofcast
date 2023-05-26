/**
 * WordPress dependencies
 */
import { __ } from '@wordpress/i18n';
import { InnerBlocks, useBlockProps } from '@wordpress/block-editor';

const Save = () => {
	const blockProps = useBlockProps.save();
	return (
		<div {...blockProps}>
			<InnerBlocks.Content />
		</div>
	);
};
export default Save;
