import { useBlockProps, InnerBlocks, RichText } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';

export default function Edit({
	attributes: { heading, subheading },
	setAttributes,
}) {
	return (
		<div {...useBlockProps()}>
			<RichText
				className="heading"
				tagName="h2"
				value={heading}
				onChange={(newHeading) =>
					setAttributes({ heading: newHeading })
				}
				placeholder="Heading..."
			/>
			<RichText
				className="subheading"
				tagName="p"
				value={subheading}
				onChange={(newSubheading) =>
					setAttributes({ subheading: newSubheading })
				}
				placeholder="Subheading..."
			/>
			<div className="testimonial-slider">
				<div className="testimonial-slider-track">
					<InnerBlocks
						allowedBlocks={['podofcast/testimonial-slider-quote']}
						orientation="horizontal"
					/>
				</div>
			</div>
		</div>
	);
}
