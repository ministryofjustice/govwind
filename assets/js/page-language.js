const { registerPlugin } = wp.plugins;
const { PluginDocumentSettingPanel } = wp.editPost;
const { TextControl } = wp.components;
const { createElement: el } = wp.element;
const { useSelect, useDispatch } = wp.data;

function PageLanguagePanel() {
	const postType = useSelect(
		(select) => select("core/editor").getCurrentPostType(),
		[],
	);

	if (postType !== "page") {
		return null;
	}

	const meta = useSelect((select) => {
		return select("core/editor").getEditedPostAttribute("meta");
	}, []);

	const { editPost } = useDispatch("core/editor");

	return el(
		PluginDocumentSettingPanel,
		{
			name: "page-language",
			title: "Page Language",
		},
		el(TextControl, {
			label: "Language tag",
			value: meta._page_language || "",
			help: "Leave blank to use the site language.",
			__experimentalInputProps: {
				pattern: "[A-Za-z]{2,3}(-[A-Za-z0-9]+)*",
				maxLength: 15,
			},
			onChange: (value) => {
				editPost({
					meta: {
						...meta,
						_page_language: value,
					},
				});
			},
		}),
		el(
			"div",
			{ className: "components-base-control__help" },
			el("p", null, "ISO language tag. Leave blank to use site language."),
			el("p", null, "Examples:"),
			el(
				"ul",
				{ style: { listStyleType: "square", marginLeft: "2em" } },
				el("li", null, el("strong", null, "cy"), ": Welsh (general)"),
				el("li", null, el("strong", null, "fr"), ": French (general)"),
				el("li", null, el("strong", null, "fr-CA"), ": French (Québec)"),
				el(
					"li",
					null,
					el("strong", null, "es-419"),
					": Spanish (Latin America)",
				),
			),
		),
	);
}

registerPlugin("page-language-panel", {
	render: PageLanguagePanel,
});
