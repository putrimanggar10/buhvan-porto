# 🍪 Cookie Consent - Quick Reference

## 📋 Files Created

| File | Purpose |
|------|---------|
| `resources/views/components/cookie-consent.blade.php` | Main component (HTML, CSS, JS) |
| `resources/lang/en/cookie.php` | English translations |
| `resources/lang/id/cookie.php` | Indonesian translations |
| `resources/views/cookie-policy.blade.php` | Cookie policy page |
| `routes/web.php` | Updated with `/cookie-policy` route |

## 🚀 Minimal Implementation (3 Steps)

### Step 1: Add Component to Your Pages
```blade
@include('components.cookie-consent')
```

### Step 2: Add Google Analytics ID (Optional)
Edit `resources/views/components/cookie-consent.blade.php`, find:
```javascript
script.src = 'https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX';
gtag('config', 'G-XXXXXXXXXX');
```
Replace `G-XXXXXXXXXX` with your GA measurement ID.

### Step 3: Test
1. Clear localStorage: `localStorage.clear()`
2. Refresh page
3. Banner should appear
4. Click "Accept All"
5. Banner should hide
6. Refresh - banner should NOT reappear ✅

## 📍 Where to Add Component

### Option A: Add to Every Page (Simple)
Edit each view file and add before `</html>`:
```blade
@include('components.cookie-consent')
```

### Option B: Add to Main Layout (Better)
If you have an `app.blade.php` or `master.blade.php`, add once there.

### Option C: Add to Footer (Best)
Add to `resources/views/layouts/footer.blade.php`:
```blade
@include('components.cookie-consent')
```

## 🎨 Customize

### Colors
Change in `cookie-consent.blade.php`:
- `.bg-accent-gold` → your brand color
- `.text-navy-950` → your text color

### Translations
Modify `resources/lang/en/cookie.php` or `resources/lang/id/cookie.php`

### Position
Change `fixed bottom-0` to `fixed top-0` for top banner

## 🔍 localStorage Structure

When user makes a choice, stored as:
```json
{
  "essential": true,
  "analytics": true,
  "marketing": false,
  "performance": true,
  "timestamp": 1234567890
}
```

## 🧪 Quick Tests

```javascript
// Check if saved
localStorage.getItem('cookie_consent')

// Reset for testing
localStorage.removeItem('cookie_consent')

// Set all to true
localStorage.setItem('cookie_consent', 
  JSON.stringify({
    essential: true,
    analytics: true,
    marketing: true,
    performance: true,
    timestamp: Date.now()
  })
)
```

## 🔗 Links

| Feature | Link/Route |
|---------|-----------|
| Cookie Policy | `/cookie-policy` |
| Component | `components/cookie-consent` |
| English Strings | `resources/lang/en/cookie.php` |
| Indonesian Strings | `resources/lang/id/cookie.php` |

## 📝 Page Integration Example

```blade
<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html>
    <head>
        <!-- ... -->
    </head>
    <body>
        @include('layouts.navbar')
        
        <!-- Page Content -->
        <main>
            <!-- ... your content ... -->
        </main>
        
        @include('layouts.footer')
        
        <!-- Add Cookie Consent -->
        @include('components.cookie-consent')
    </body>
</html>
```

## ⚙️ Configuration Checklist

- [ ] Component included on all pages
- [ ] Google Analytics ID configured (if using)
- [ ] Marketing scripts added (if using)
- [ ] Cookie policy page created
- [ ] Language files translated
- [ ] Tested on desktop
- [ ] Tested on mobile
- [ ] Tested in different browsers
- [ ] localStorage working
- [ ] No console errors

## 🎯 Key Features

✅ **4 Cookie Categories**
- Essential (always on)
- Analytics (Google Analytics)
- Marketing (Ads, Facebook Pixel)
- Performance (Site performance)

✅ **Multi-Language**
- English & Indonesian built-in
- Easy to add more languages

✅ **User-Friendly**
- Simple banner with quick options
- Advanced modal for granular control
- Smooth animations

✅ **Compliant**
- GDPR compliant
- CCPA compatible
- Privacy-focused

## 🆘 Troubleshooting Quick Fixes

| Problem | Solution |
|---------|----------|
| Banner not appearing | Check @include is added to view |
| Banner appears every time | localStorage disabled in browser |
| Styles look wrong | Check Tailwind CSS is loaded |
| Translations missing | Check language files exist |
| Analytics not loading | Check GA ID is correct |
| Modal won't open | Check no JavaScript errors |

## 📞 Common Tasks

### Add New Language
1. Create `resources/lang/xx/cookie.php`
2. Copy English file and translate keys

### Update Cookie Policy
Edit `resources/views/cookie-policy.blade.php`

### Change Banner Text
Edit `resources/lang/en/cookie.php` or `resources/lang/id/cookie.php`

### Test Banner Again
Run in console:
```javascript
localStorage.removeItem('cookie_consent');
location.reload();
```

---

**For detailed info, see:**
- `COOKIE_CONSENT_SETUP.md` - Full setup guide
- `INTEGRATION_EXAMPLES.md` - Integration examples
- `TESTING_GUIDE.md` - Testing procedures
- `resources/views/components/README.md` - Component documentation
