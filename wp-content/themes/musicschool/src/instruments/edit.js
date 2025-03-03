/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from "@wordpress/i18n";

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps } from "@wordpress/block-editor";

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import "./editor.scss";

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit() {
	return (
		<section {...useBlockProps()}>
			<div>
				<figure>
					<img
						src="https://picsum.photos/400"
						alt="Random Image used as profile"
					/>
				</figure>
				<h4>Intrument Lorem</h4>

				<h5>Intrument Skill</h5>
				<p>Lorem Intro, Int, Adv</p>

				<h5>Instrument Description</h5>

				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium
					magnam dolores labore numquam distinctio repellat voluptatibus
					repellendus commodi eaque corrupti, veritatis incidunt, recusandae
					aspernatur. Quam autem ex voluptatum! Quis, necessitatibus.
				</p>
			</div>
		</section>
	);
}
