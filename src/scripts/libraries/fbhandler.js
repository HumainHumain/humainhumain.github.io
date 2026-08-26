if (window.location.search.includes('fbclid')) {
	const url = new URL(window.location);
	url.searchParams.delete('fbclid');
	window.history.replaceState({}, document.title, url.pathname + url.search);
}