# 🍪 Cookie Consent - Setup Guide

Complete cookie consent implementation for your Laravel DMS-Web project.

## 📦 What's Included

- ✅ **Cookie Consent Component** - Reusable Blade component with modal settings
- ✅ **Language Files** - English & Indonesian translations
- ✅ **Cookie Policy Page** - Complete privacy policy page
- ✅ **Auto Script Loading** - Google Analytics & marketing scripts load based on consent
- ✅ **LocalStorage Persistence** - Remembers user preferences
- ✅ **Responsive Design** - Mobile-first, Tailwind CSS styling

## 📁 Files Created

```
resources/
├── views/
│   ├── components/
│   │   ├── cookie-consent.blade.php   (Main component)
│   │   └── README.md                  (Component docs)
│   └── cookie-policy.blade.php        (Policy page)
└── lang/
    ├── en/
    │   └── cookie.php                 (English translations)
    └── id/
        └── cookie.php                 (Indonesian translations)

routes/
└── web.php                            (Updated with cookie-policy route)
```

## 🚀 Quick Start

### Step 1: Include Cookie Consent Component

Add this line to **every view file** where you want the cookie banner to appear. Typically add it at the end of your main layout or app.blade.php:

```blade
<!-- Before closing </body> tag -->
@include('components.cookie-consent')
```

### Step 2: Update Your Route for Cookie Policy

The route is already added to `routes/web.php`:

```php
Route::get('/cookie-policy', function () {
    return view('cookie-policy');
})->name('cookie-policy');
```

### Step 3: Configure Google Analytics (Optional)

Edit `resources/views/components/cookie-consent.blade.php` and find this line (around line 130):

```javascript
script.src = 'https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX';
```

Replace `G-XXXXXXXXXX` with your actual Google Analytics Measurement ID from:
- [Google Analytics](https://analytics.google.com)
- Go to Admin → Data Streams → Web → Measurement ID

Also update the second occurrence:
```javascript
gtag('config', 'G-XXXXXXXXXX');
```

### Step 4: Add Marketing Scripts (Optional)

In the same file, find this section:

```javascript
if (consent.marketing) {
    // Load marketing scripts (Facebook Pixel, etc.)
    // Tambahkan script marketing Anda di sini
}
```

Add your marketing/tracking scripts:

```javascript
if (consent.marketing) {
    // Facebook Pixel
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    // ... rest of Facebook Pixel code
}(window, document,'script','//connect.facebook.net/en_US/fbevents.js');
    fbq('init', 'YOUR_PIXEL_ID');
    fbq('track', 'PageView');
}
```

## 🎯 Usage Examples

### Example 1: Add to Home Page

Edit `resources/views/home.blade.php` and add at the very end before `</html>`:

```blade
@include('components.cookie-consent')
```

### Example 2: Add to Contact Us Page

Edit `resources/views/contact_us.blade.php` and add at the very end before `</html>`:

```blade
@include('components.cookie-consent')
```

### Example 3: Create a Reusable Layout

If you have a main layout template (like `app.blade.php`), add it once there:

```blade
<!-- app.blade.php -->
<html>
    <head>
        @yield('head')
    </head>
    <body>
        @yield('content')
        
        <!-- Add cookie consent at the end -->
        @include('components.cookie-consent')
    </body>
</html>
```

## 🔧 Customization

### Change Colors

Edit `resources/views/components/cookie-consent.blade.php`:

Find these classes and replace with your colors:
- `.bg-accent-gold` → `.bg-blue-500` (or your color)
- `.text-navy-950` → `.text-gray-900` (or your color)

### Translate to More Languages

Create new files following the pattern:

```php
// resources/lang/fr/cookie.php
return [
    'title' => 'Paramètres des Cookies',
    // ... add all translations
];
```

### Change Banner Position

By default, banner is at bottom. To move to top:

In `resources/views/components/cookie-consent.blade.php`, change:
```blade
<div id="cookie-consent" class="fixed bottom-0 left-0 right-0 ...">
```

To:
```blade
<div id="cookie-consent" class="fixed top-0 left-0 right-0 ...">
```

### Change Auto-Dismissal

By default, the banner auto-hides after user makes a choice. To keep it visible, modify the JavaScript in the component.

## 📊 How User Data is Stored

User preferences are stored in localStorage with this structure:

```json
{
    "essential": true,
    "analytics": true,
    "marketing": false,
    "performance": true,
    "timestamp": 1234567890
}
```

**Key Points:**
- Stored locally on user's browser (not on your server)
- Persists across sessions
- No data sent to third parties
- Users can clear by clearing browser cache/localStorage

## ✅ Testing Checklist

- [ ] Cookie banner appears on first visit
- [ ] "Accept All" button works and hides banner
- [ ] "Reject All" button works and hides banner
- [ ] "Settings" button opens modal
- [ ] Modal checkboxes work correctly
- [ ] "Save Settings" closes modal and hides banner
- [ ] Refreshing page doesn't show banner again (preferences saved)
- [ ] Clearing localStorage shows banner again
- [ ] Mobile responsive (test on phone/tablet)
- [ ] Google Analytics loads only when "Analytics" is enabled
- [ ] Marketing scripts load only when "Marketing" is enabled

## 🔐 Privacy Compliance

This implementation helps you comply with:

- **GDPR** (General Data Protection Regulation) - EU
- **CCPA** (California Consumer Privacy Act) - USA
- **LGPD** (Lei Geral de Proteção de Dados) - Brazil
- **PDPA** (Personal Data Protection Act) - Indonesia

**Important:** Also create a proper Privacy Policy page and Terms of Service.

## 🆘 Troubleshooting

### Banner doesn't appear
- Check that `@include('components.cookie-consent')` is in your view
- Check browser console for JavaScript errors
- Check that Tailwind CSS is loaded

### Translations not showing
- Verify language files exist in `resources/lang/`
- Check that `locale` is set correctly in your app
- Verify the keys match exactly in translation files

### Modal not closing
- Check browser console for JavaScript errors
- Ensure localStorage is not disabled in browser
- Try clearing browser cache

### Google Analytics not loading
- Verify Google Analytics ID is correct in the component
- Check that user has consented to analytics
- Check browser console for script loading errors

## 📚 Additional Resources

- [GDPR Cookie Policy Guide](https://gdpr-info.eu/issues/cookies/)
- [CCPA Privacy Policy Guide](https://oag.ca.gov/privacy)
- [Laravel Localization](https://laravel.com/docs/localization)
- [Tailwind CSS Documentation](https://tailwindcss.com)

## 📞 Support

For questions or issues:

1. Check the component comments for inline documentation
2. Review the language files for translation keys
3. Check browser console for JavaScript errors
4. Verify localStorage is enabled in browser

---

**Version:** 1.0  
**Last Updated:** {{ now()->format('F j, Y') }}  
**License:** MIT
