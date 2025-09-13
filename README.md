# ClassManager

> **Minimalist. Powerful. Flexible.**  
> A lightweight PHP class autoloader and class-mapping manager designed to *do more with less*.

---

## Features

- **Smart Autoloading**  
  Multi-strategy class resolution with up to **5 fallback methods** (classmap, cache, direct resolution, namespace guessing, and full project scanning).

- **Automatic Class Mapping**  
  Scans directories to detect classes and generates `classmap` and `cache_classmap` files for fast lookups.

- **Cache-Aware**  
  Maintains a separate cache map to speed up repeated class resolutions.

- **Debug-Friendly**  
  Built-in debug logging for every autoloading step.

- **Pluggable & Configurable**  
  Flexible settings for directories, cache files, and optional **bootstrap files** that are loaded automatically.

---

## Installation

1. **Copy** the repository or add it to your project:
   ```bash
   git clone https://github.com/Rxnel-ysr/PHP-Autoloader.git
    ```

2. **Require the autoload file** in your entry script:

   ```php
   require __DIR__ . '/autoload.php';
   ```

---

## Quick Start

```php
use Rxnelysr\ClassManager;

ClassManager::set(
    __DIR__,
    debug: true,
    auto: true,
    setting: [
        'classmap'          => __DIR__.'/config/classmap.php',
        'cache_classmap'    => __DIR__.'/config/cache_classmap.php',
        'where_to_look_class' => __DIR__.'/src'
    ],
    files: [
        // Any extra files to load before registering the autoloader
        'path/to/helpers.php',
        'path/to/constants.php'
    ]
);

// Register the autoloader and load the optional $files above
ClassManager::initAutoloader();
```

Now simply reference your classes anywhere in the project:

```php
use App\Models\User;

$user = new User();
```

---

## Key Methods

| Method                            | Purpose                                                        |
| --------------------------------- | -------------------------------------------------------------- |
| `set()`                           | Configure paths, cache, optional `$files`, and other settings. |
| `initAutoloader()`                | Register the autoloader **and require all files in `$files`**. |
| `dumpAutoload()`                  | Regenerate classmap/cache mappings.                            |
| `loadAllClass()`                  | Load all registered classes at once.                           |
| `getClassFile($class)`            | Retrieve the file path of a specific class.                    |
| `registerNewClass($class, $path)` | Dynamically add new classes to the mapping.                    |

---

## Configuration Options

| Key                   | Description                                                   |
| --------------------- | ------------------------------------------------------------- |
| `classmap`            | Path to the main class mapping file.                          |
| `cache_classmap`      | Path to the cache mapping file for faster lookups.            |
| `where_to_look_class` | Base directory to search for classes.                         |
| `$files` *(array)*    | Optional list of PHP files to include **before** autoloading. |


---

## License

This project is released under the **MIT License**.
See [LICENSE](./LICENSE) for details.

---

## Tips

* Enable `debug` mode during development to watch the resolution steps:

  ```php
  ClassManager::set(__DIR__, debug: true);
  ```
* Use `dumpAutoload(true)` to regenerate both main and cache classmaps when deploying.
* `$files` is great for including shared helpers or constant definitions before class loading.

---

### Tip

If you like small-but-mighty tools, consider starring the repo—it helps others discover it!
