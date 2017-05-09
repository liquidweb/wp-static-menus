# WP Static Menus

Navigation rarely changes on most WordPress sites, why dynamically regenerate it every time? This plugin will store WordPress navigation menus as static HTML, even the really large ones.

## Filters

`wp_static_menu_cache_dir`

Customize the location of the static menu cache directory

`wp_static_menu_file_args`

Customize the arguments being used to generate a static menu cache file - allowing for granular control over menu caching.

`wp_static_menu_cache_file_name`

Customize the file name of the static menu cache file.

`wp_static_menus_cache_file`

Customize the full file path of the static menu cache file.

`wp_static_menus_bypass_cache`

Allow for short circuiting the menu cache, any `true` value will bypass the cache.
