import {
	useBlockProps,
	RichText,
	MediaUpload,
	MediaUploadCheck,
} from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';

export default function Edit({
	attributes: { quote, author, image },
	setAttributes,
}) {
	const onSelectImage = (media) => {
		if (media?.url) {
			setAttributes({
				image: {
					id: media.id,
					url: media.url,
					alt: media.alt,
				},
			});
		}
	};

	return (
		<blockquote {...useBlockProps()}>
			<RichText
				className="quote"
				tagName="p"
				value={quote}
				onChange={(newQuote) => setAttributes({ quote: newQuote })}
				placeholder="Testimonial quote..."
			/>
			<div className="footer">
				<MediaUpload
					onSelect={onSelectImage}
					allowedTypes={['image']}
					value={image?.id}
					render={({ open }) => (
						<>
							<MediaUploadCheck>
								{image && (
									<img
										className="author-image"
										src={image?.url}
										alt=""
										onClick={open}
									/>
								)}
							</MediaUploadCheck>
							{!image && <button onClick={open}>+</button>}
						</>
					)}
				/>
				<RichText
					className="author-name"
					tagName="cite"
					value={author}
					onChange={(newAuthor) =>
						setAttributes({ author: newAuthor })
					}
					placeholder="Author name..."
				/>
			</div>
		</blockquote>
	);
}
