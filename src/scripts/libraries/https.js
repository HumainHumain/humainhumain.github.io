if (window.location.hostname === 'humainhumain.com' && window.location.protocol !== 'https:') {
	window.location.replace(
		'https://' + window.location.hostname + window.location.pathname + window.location.search + window.location.hash
	);
}