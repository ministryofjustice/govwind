/**
 * This file adds a class to the editor iFrame HTML element which
 * allows the site-specific colours to be used.
 *
 * Vars:
 * - siteData (from functions.php), which only has "name" which the site
 * name, already sanitized for use in the class.
 */

wp.domReady(() => {
	function applyClass() {
		const iframe = document.querySelector('iframe[name="editor-canvas"]');

		if (!iframe || !iframe.contentDocument) {
			return;
		}

		const editHTML = iframe.contentDocument.documentElement;

		if (editHTML == null) return;

		// Add the blog ID as a class
		if (typeof siteData !== "undefined" && siteData.id) {
			editHTML.classList.add("website-" + siteData.id);
		}
		// siteData also has the site name (siteData.name)
	}

	applyClass();

	// Reapply whenever Gutenberg updates the iFrame
	wp.data.subscribe(applyClass);
});
