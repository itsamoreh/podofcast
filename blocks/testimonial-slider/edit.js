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
				<div
					className="testimonial-slider-rail"
					style={{ overflow: 'scroll', position: 'relative' }}
				>
					<div
						className="testimonial-slider-train"
						style={{ position: 'relative' }}
					>
						{children}
					</div>
				</div>
				<div className="testimonial-slider-controls">
					<button className="testimonial-slider-prev">
						<svg
							width="48"
							height="48"
							viewBox="0 0 48 48"
							fill="none"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path
								fill-rule="evenodd"
								clip-rule="evenodd"
								d="M24 5.50049C13.784 5.50049 5.5 13.7825 5.5 24.0005C5.5 34.2165 13.784 42.5005 24 42.5005C34.216 42.5005 42.5 34.2165 42.5 24.0005C42.5 13.7825 34.216 5.50049 24 5.50049Z"
								stroke="black"
								stroke-width="2.5"
								stroke-linecap="round"
								stroke-linejoin="round"
							/>
							<path
								d="M26.8847 17.0581L19.9127 24.0001L26.8847 30.9421"
								stroke="black"
								stroke-width="2.5"
								stroke-linecap="round"
								stroke-linejoin="round"
							/>
						</svg>
					</button>
					<button className="testimonial-slider-next">
						<svg
							width="48"
							height="48"
							viewBox="0 0 48 48"
							fill="none"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path
								fill-rule="evenodd"
								clip-rule="evenodd"
								d="M24 42.4996C34.216 42.4996 42.5 34.2176 42.5 23.9996C42.5 13.7836 34.216 5.49963 24 5.49963C13.784 5.49963 5.5 13.7836 5.5 23.9996C5.5 34.2176 13.784 42.4996 24 42.4996Z"
								stroke="#CD4631"
								stroke-width="2.5"
								stroke-linecap="round"
								stroke-linejoin="round"
							/>
							<path
								d="M21.1153 30.942L28.0873 24L21.1153 17.058"
								stroke="#CD4631"
								stroke-width="2.5"
								stroke-linecap="round"
								stroke-linejoin="round"
							/>
						</svg>
					</button>
				</div>
			</div>
		</div>
	);
}
