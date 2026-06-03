<!-- Integration Examples for Cookie Consent Component -->

## How to Add Cookie Consent to Your Pages

### Method 1: Add to Individual Pages

For each Blade template where you want the cookie consent to appear, add this at the very end (before closing `</html>` tag):

```blade
{{-- resources/views/home.blade.php --}}
<html>
    <head>
        <!-- ... your head content ... -->
    </head>
    <body>
        <!-- ... your page content ... -->
        
        @include('components.cookie-consent')
    </body>
</html>
```

### Method 2: Add to Main Layout (Recommended)

If you have a main layout file that other pages extend, add it there once:

```blade
{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html>
    <head>
        <!-- ... -->
    </head>
    <body>
        @yield('content')
        
        <!-- Add cookie consent here -->
        @include('components.cookie-consent')
    </body>
</html>
```

Then all pages that use this layout will automatically have the cookie consent.

### Method 3: Add to Footer Component

If you have a footer component that's included on all pages:

```blade
{{-- resources/views/layouts/footer.blade.php --}}
<footer>
    <!-- ... your footer content ... -->
</footer>

@include('components.cookie-consent')
```

### Method 4: Create a Main Wrapper Template

Create a master template that includes everything:

```blade
{{-- resources/views/layouts/master.blade.php --}}
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'ZD One Platform')</title>
        <script src="https://cdn.tailwindcss.com"></script>
        @yield('head')
    </head>
    <body>
        @include('layouts.navbar')
        
        <main>
            @yield('content')
        </main>
        
        @include('layouts.footer')
        
        <!-- Cookie Consent - Always at the bottom -->
        @include('components.cookie-consent')
        
        @yield('scripts')
    </body>
</html>
```

## Quick Integration for Current Pages

### For Your Home Page
```blade
{{-- resources/views/home.blade.php --}}

{{-- ... existing content ... --}}

{{-- Add this at the very end before </body> --}}
@include('components.cookie-consent')
```

### For All Device Pages
Add to each file:
- `resources/views/device_monitoring.blade.php`
- `resources/views/device_biometric.blade.php`
- `resources/views/device_signage.blade.php`
- `resources/views/device_laptop.blade.php`
- `resources/views/device_tablet.blade.php`
- `resources/views/device_pos.blade.php`

Add this at the end of each:
```blade
@include('components.cookie-consent')
```

### For All Solution Pages
Add to:
- `resources/views/zd_one_platform.blade.php`
- `resources/views/zd_remote.blade.php`
- `resources/views/zd_content_management.blade.php`
- `resources/views/zd_analytics.blade.php`

### For Industry Pages
Add to each industry page at the end:
```blade
@include('components.cookie-consent')
```

## Automation Script

To add cookie consent to all views at once, run this in your terminal:

```bash
# Find all .blade.php files (except the component itself) and check their structure
find resources/views -name "*.blade.php" -not -path "*/components/*" -type f
```

Then manually add `@include('components.cookie-consent')` before the closing `</html>` tag in each file.

---

**Tip:** The cookie consent will only show once per browser (stores choice in localStorage), so users won't see it repeatedly.
