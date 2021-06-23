<?php
define('misaka', TRUE);
?>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			Windmill Dashboard - Forms
		</title>
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap"
		rel="stylesheet">
		<link rel="stylesheet" href="./assets/css/tailwind.output.css">
		<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
		defer="">
		</script>
		<script src="./assets/js/init-alpine.js">
		</script>
		<style>
		</style>
	</head>
	<body>
		<div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen}">
			<!-- Desktop sidebar -->
			<aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
				<div class="py-4 text-gray-500 dark:text-gray-400">
					<a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
						后台
					</a>
					<ul class="mt-6">
						<li class="relative px-6 py-3">
							<a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
							href="index.php">
								<svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
								stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
									<path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
									</path>
								</svg>
								<span class="ml-4">
									主页
								</span>
							</a>
						</li>
					</ul>
					<ul>
						<li class="relative px-6 py-3">
							<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
							aria-hidden="true">
							</span>
							<a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
							href="system-settings.php">
								<svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
								stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
									<path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
									</path>
								</svg>
								<span class="ml-4">
									系统设置
								</span>
							</a>
						</li>
						<li class="relative px-6 py-3">
							<a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
							href="manga.php">
								<svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
								stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
									<path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
									</path>
								</svg>
								<span class="ml-4">
									漫画
								</span>
							</a>
						</li>
						<li class="relative px-6 py-3">
							<a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
							href="charts.php">
								<svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
								stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
									<path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z">
									</path>
									<path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z">
									</path>
								</svg>
								<span class="ml-4">
									回复
								</span>
							</a>
						</li>
					</ul>
				</div>
			</aside>
			<!-- Mobile sidebar -->
			<!-- Backdrop -->
			<div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
			x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
			x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
			x-transition:leave-end="opacity-0" class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
			style="display: none;">
			</div>
			<aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
			x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
			x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
			x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
			x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
			@keydown.escape="closeSideMenu" style="display: none;">
				<div class="py-4 text-gray-500 dark:text-gray-400">
					<a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="index.php">
						主页
					</a>
                    <ul>
						<li class="relative px-6 py-3">
							<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true">
							</span>
							<a class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="system-settings.php">
								<svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
									<path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
									</path>
								</svg>
								<span class="ml-4">
									系统设置
								</span>
							</a>
						</li>
						<li class="relative px-6 py-3">
							<a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="manga.php">
								<svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
									<path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
									</path>
								</svg>
								<span class="ml-4">
									漫画
								</span>
							</a>
						</li>
						<li class="relative px-6 py-3">
							<a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="charts.php">
								<svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
									<path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z">
									</path>
									<path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z">
									</path>
								</svg>
								<span class="ml-4">
									回复
								</span>
							</a>
						</li>
					</ul>
				</div>
			</aside>
			<div class="flex flex-col flex-1">
				<header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
					<div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
						<!-- Mobile hamburger -->
						<button class="p-1 -ml-1 mr-5 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
						@click="toggleSideMenu" aria-label="Menu">
							<svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
								<path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
								clip-rule="evenodd">
								</path>
							</svg>
						</button>
					</div>
				</header>
				<main class="h-full pb-16 overflow-y-auto">
					<div class="container px-6 mx-auto grid">
						<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
							system settings
						</h2>
						<!-- Validation inputs -->
						<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
							标题
						</h4>
						<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
							<!-- Helper text -->
							<form id="loginform" action="../action/system-settings-action/title.php" method="post">
							<label class="block mt-4 text-sm">
								<span class="text-gray-700 dark:text-gray-400">
									标题设置
								</span>
								<input class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
								placeholder="樱雪恋歌漫画站">
								<br>
								<span class="text-xs text-gray-600 dark:text-gray-400">
									这个是在标签页中的标题，例如[主页-樱雪恋歌漫画站]
								</span>
							</label>
						</div>
					</div>
				</main>
			</div>
		</div>
	</body>

</html>