# Wikifunctions Client extension for MediaWiki

The Wikifunctions Client extension will allow Wikimedia wikis to use a wikitext parser function to call evaluation of functions on Wikifunctions, which are managed by the WikiLambda extension.

## Using the wikitext parser function

WikifunctionsClient provides the `{{#function:…}}` parser function, which lets you embed function calls inside wikitext documents which are then resolved at parse time.

It is currently very limited, allowing only a single direct function call to a function which both takes only strings as its inputs and emits a string as its output.

To use, simply edit any wikitext page. The target function is the zeroth parameter (named by ZID), e.g.:

  {{#function:Z12345}}

If your function takes parameters, they can be passed in pipe-delimited, e.g.:

  {{#function:Z12345|Hello|world|!}}

Much further functionality is to come.

## See also

<https://www.mediawiki.org/wiki/Extension:WikiLambda>
