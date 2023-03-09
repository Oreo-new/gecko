<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta name="application-name" content="{{ config('app.name') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

		
		<title>Lagen island -</title>
		<link rel="canonical" href="https://lagenisland.com/" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Lagen island -" />
		<meta property="og:description" content="Spread the loveLagen Island is located  in the Province of Palawan and considered part of El Nido and Mimaropa region. Located to the South side of Bacuit bay inside the El Nido national park. There is one hotel located directly on the island the famous Lagen Island Resort part of the El Nido hotels group, which is owned by the Ayala" />
		<meta property="og:url" content="https://lagenisland.com/" />
		<meta property="article:modified_time" content="2019-01-31T12:06:02+00:00" />
		<meta property="og:image" content="https://lagenisland.com/wp-content/uploads/2019/01/78652901.jpg" />
		<meta property="og:image:width" content="1024" />
		<meta property="og:image:height" content="576" />
		<meta property="og:image:type" content="image/jpeg" />
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:label1" content="Est. reading time" />
		<meta name="twitter:data1" content="1 minute" />
		<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://lagenisland.com/","url":"https://lagenisland.com/","name":"Lagen island -","isPartOf":{"@id":"https://lagenisland.com/#website"},"primaryImageOfPage":{"@id":"https://lagenisland.com/#primaryimage"},"image":{"@id":"https://lagenisland.com/#primaryimage"},"thumbnailUrl":"https://lagenisland.com/wp-content/uploads/2019/01/78652901.jpg","datePublished":"2019-01-31T09:35:53+00:00","dateModified":"2019-01-31T12:06:02+00:00","breadcrumb":{"@id":"https://lagenisland.com/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://lagenisland.com/"]}]},{"@type":"ImageObject","inLanguage":"en-US","@id":"https://lagenisland.com/#primaryimage","url":"https://lagenisland.com/wp-content/uploads/2019/01/78652901.jpg","contentUrl":"https://lagenisland.com/wp-content/uploads/2019/01/78652901.jpg","width":1024,"height":576,"caption":"lagen island resort"},{"@type":"BreadcrumbList","@id":"https://lagenisland.com/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home"}]},{"@type":"WebSite","@id":"https://lagenisland.com/#website","url":"https://lagenisland.com/","name":"","description":"","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://lagenisland.com/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"}]}</script>
		<!-- / Yoast SEO plugin. -->
		<link rel="alternate" type="application/rss+xml" title=" &raquo; Feed" href="https://lagenisland.com/feed/" />
		<link rel="alternate" type="application/rss+xml" title=" &raquo; Comments Feed" href="https://lagenisland.com/comments/feed/" />
		<!-- This site uses the Google Analytics by MonsterInsights plugin v8.12.1 - Using Analytics tracking - https://www.monsterinsights.com/ -->
		<script
src="//www.googletagmanager.com/gtag/js?id=UA-76848651-3"  data-cfasync="false" data-wpfc-render="false" type="text/javascript" async></script>
        <style>[x-cloak] { display: none !important; }</style>
		@vite(['resources/css/app.scss', 'resources/js/app.js'])
        @livewireStyles
		@livewireScripts
        @stack('header-scripts')
    </head>
	
	<body class="font-sans antialiased" id="body">
		<div class="relative">
			<header>
				{{-- <x-includes.navigation/> --}}
			</header>

			<main class="max-container">
				{{ $slot }} 
			</main>

			<footer class="theme-dark-color-bg text-white">
				<div class=""> 
					{{-- <x-pages.footer/> --}}
				</div>
			</footer>
		</div>
		
		@stack('scripts')
	</body>
</html>