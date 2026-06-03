# Cookie Consent Banner

A fully functional cookie consent banner component for Laravel Blade with support for multiple languages (English and Indonesian).

## Features

✅ **Responsive Design** - Works perfectly on mobile, tablet, and desktop
✅ **Multi-Language Support** - Built-in translations for English (en) and Indonesian (id)
✅ **Settings Modal** - Users can customize their cookie preferences
✅ **LocalStorage Persistence** - Remembers user choices across sessions
✅ **Four Cookie Categories**:
   - Essential (always active)
   - Analytics (Google Analytics)
   - Marketing (Facebook Pixel, etc.)
   - Performance

✅ **Automatic Script Loading** - Loads analytics/marketing scripts based on user consent
✅ **Smooth Animations** - Professional slide-up animations
✅ **Tailwind CSS** - Uses your existing Tailwind configuration

## Installation & Usage

### 1. Include the Component in Your Views

Add this to your main layout file or any page where you want the cookie consent to appear:

```blade
<!-- At the end of your body tag -->
@include('components.cookie-consent')
```

### 2. Update Your Language Files

The language files are already created:
- `resources/lang/en/cookie.php` - English translations
- `resources/lang/id/cookie.php` - Indonesian translations

You can customize the text by editing these files.

### 3. Set Google Analytics ID (Optional)

Open `resources/views/components/cookie-consent.blade.php` and find this line:

```javascript
script.src = 'https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX';
// ...
gtag('config', 'G-XXXXXXXXXX');
```

Replace `G-XXXXXXXXXX` with your actual Google Analytics Measurement ID.

### 4. Add Marketing Scripts (Optional)

In the same file, find this section:

```javascript
if (consent.marketing) {
    // Load marketing scripts (Facebook Pixel, etc.)
    // Tambahkan script marketing Anda di sini
}
```

Add your marketing scripts here (Facebook Pixel, LinkedIn, etc.).

## How It Works

1. **First Visit**: Shows cookie banner at the bottom of the screen
2. **User Chooses**:
   - "Accept All" - All cookies allowed
   - "Reject All" - Only essential cookies
   - "Settings" - Opens modal for granular control
3. **Persistent Storage**: Choice saved to localStorage for 365 days
4. **Smart Loading**: Analytics/marketing scripts only load if user consented

## Cookie Preferences Structure

```json
{
    "essential": true,
    "analytics": true,
    "marketing": false,
    "performance": true,
    "timestamp": 1234567890
}
```

## Customization

### Styling

The component uses Tailwind CSS classes. To customize colors:
- Change `.bg-accent-gold` to your brand color
- Change `.text-navy-950` to your text color

### Translations

Add more languages by creating new files:
- `resources/lang/fr/cookie.php` for French
- `resources/lang/es/cookie.php` for Spanish

## Privacy Policy Integration

Create a privacy policy page and link it in the cookie banner by modifying:

```blade
<a href="#cookie-policy" class="text-sm text-accent-gold hover:text-accent-goldDark font-semibold">
```

Replace `#cookie-policy` with your actual privacy policy route.

## Browser Compatibility

✅ Chrome/Edge 90+
✅ Firefox 88+
✅ Safari 14+
✅ Mobile browsers (iOS Safari, Chrome Mobile)

## Notes

- Essential cookies are mandatory and cannot be disabled
- The banner appears only once per browser/device (stored in localStorage)
- Users can manage preferences again by clearing localStorage or modifying code
- All translations use Laravel's `__()` helper function

## File Structure

```
resources/
├── lang/
│   ├── en/
│   │   └── cookie.php
│   └── id/
│       └── cookie.php
└── views/
    └── components/
        ├── cookie-consent.blade.php
        └── README.md
```

---

**Need help?** Check the component file for detailed comments and inline documentation.
