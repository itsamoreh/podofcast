import {
	useBlockProps,
	useInnerBlocksProps,
	InnerBlocks,
	RichText,
} from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';

export default function Edit({
	attributes: { heading, subheading },
	setAttributes,
}) {
	const { children } = useInnerBlocksProps(
		{},
		{
			allowedBlocks: ['podofcast/testimonial-slider-quote'],
			renderAppender: InnerBlocks.ButtonBlockAppender,
			orientation: 'horizontal',
		}
	);

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
				<div className="testimonial-slider-track">{children}</div>
				<div className="testimonial-slider-controls">
					<button className="testimonial-slider-prev">&lt;</button>
					<button className="testimonial-slider-next">&gt;</button>
				</div>
			</div>
		</div>
	);
}
