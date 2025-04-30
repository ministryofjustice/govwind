module.exports = {
	root: true,
	env: {
		browser: true,
		es6: true,
		node: true,
	},
	extends: [
		"eslint:recommended",
		"plugin:tailwindcss/recommended", // Enable Tailwind CSS recommended rules
	],
	plugins: ["tailwindcss"],
	rules: {
		"tailwindcss/classnames-order": "error", // Enforce consistent class ordering
		"tailwindcss/no-custom-classname": "error", // Disallow custom class names
	},
	settings: {
		tailwindcss: {
			callees: ["cn", "clsx", "classnames"], // Allow custom utility merging functions
		},
	},
};
