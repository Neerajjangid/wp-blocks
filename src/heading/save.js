import { useBlockProps, RichText } from '@wordpress/block-editor';

export default function save({attributes : {content} }) {
	return (
		<RichText.Content 
			{ ...useBlockProps.save() } 
			tagName='p'
			value={content}
		/>
	);
}

 