# WPKirk-Hooks-Boilerplate

Focused demo of the **`plugin/hooks/` auto-inclusion** convention in WP Bones — any `.php` file
dropped into `plugin/hooks/` is automatically required at boot, so plugins can organize
`add_action` / `add_filter` calls as small focused files without registering them manually.

## What this demos

Two sample hook files + a "modules" parallel folder that demonstrates the same auto-inclusion
trick for plain helper functions:

- `plugin/hooks/my-first-hooks.php` — defines `my_hooks()` (you can call this from views).
- `plugin/hooks/use-option.php` — demonstrates using plugin options inside a hook callback.
- `plugin/modules/my-simple-function.php` — shows the same pattern for non-WP-hook utilities.
- `plugin/modules/config.php` — config-style file, also auto-included.

All four are included automatically at plugin boot — no `require_once` chain, no manual
registration in `config/plugin.php`.

**Key files to read first:**

| File | What to look at |
| --- | --- |
| `plugin/hooks/my-first-hooks.php` | Simplest example of the convention |
| `plugin/hooks/use-option.php` | Hook that reads plugin options |
| `plugin/modules/my-simple-function.php` | Same pattern for non-WP helpers |
| `plugin/Http/Controllers/Examples/ExampleController.php` | Admin page showing the docs |

## Smoke test (manual, ~30s)

With the plugin active:

1. Open **WP Kirk Hooks → Hooks** in the admin → the page should render the docs without
   PHP errors.
2. Any function defined in `plugin/hooks/*.php` should be callable globally — e.g. from
   a view: `<?php my_hooks(); ?>` prints "Hello, World!".
3. Drop a new file at `plugin/hooks/whatever.php` with `add_action('init', ...)` — it fires
   on next page load, no config edits needed.
4. `wp-content/debug.log` should stay clean.

## Use as a template

```sh
# 1. clone from the GitHub template
gh repo create my-hooks-plugin --template wpbones/WPKirk-Hooks-Boilerplate --public --clone
cd my-hooks-plugin

# 2. rename the PHP namespace + plugin slug
composer install
php bones rename "My Hooks Plugin"

# 3. build + activate
yarn install && yarn build
wp plugin activate my-hooks-plugin
```

Add your own files to `plugin/hooks/` (WP action/filter callbacks) and `plugin/modules/`
(plain helpers). They load automatically. Keep them small and focused — the convention favors
many tiny files over one giant hooks file.

## Framework surface exercised

This boilerplate is the **regression bed** for the hooks/modules auto-inclusion:

- `WPKirk\WPBones\Foundation\Plugin` boot lifecycle — scans `plugin/hooks/` and
  `plugin/modules/` at init
- Auto-included files share the plugin's PSR-4 namespace context
- Config files (`plugin/modules/config.php`) accessible via `$plugin->config('custom.*')`
