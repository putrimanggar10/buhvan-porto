// Testing Guide for Cookie Consent Banner
// ===============================================

## 🧪 Manual Testing Checklist

### 1. Initial Display
- [ ] Navigate to a page with cookie consent
- [ ] Banner should appear at the bottom after page loads
- [ ] Banner should have a smooth slide-up animation
- [ ] Banner content is visible and readable

### 2. Accept All Button
- [ ] Click "Terima Semua" / "Accept All" button
- [ ] Banner should slide down and disappear
- [ ] Check Developer Tools → Application → Local Storage
- [ ] Should see `cookie_consent` with value:
```json
{
  "essential": true,
  "analytics": true,
  "marketing": true,
  "performance": true,
  "timestamp": 1234567890
}
```
- [ ] Refresh page - banner should NOT appear again

### 3. Reject All Button
- [ ] Clear localStorage first (DevTools → Storage → Clear)
- [ ] Refresh page - banner should reappear
- [ ] Click "Tolak Semua" / "Reject All" button
- [ ] Banner should disappear
- [ ] Check localStorage - should show:
```json
{
  "essential": true,
  "analytics": false,
  "marketing": false,
  "performance": false,
  "timestamp": 1234567890
}
```
- [ ] Refresh - banner should NOT reappear

### 4. Settings Button
- [ ] Clear localStorage and refresh page
- [ ] Click "Pengaturan" / "Settings" button
- [ ] Modal should open with smooth overlay
- [ ] Modal should be centered and readable

### 5. Modal Content Verification
- [ ] Essential Cookies checkbox should be checked and disabled
- [ ] Analytics Cookies checkbox should be unchecked
- [ ] Marketing Cookies checkbox should be unchecked
- [ ] Performance Cookies checkbox should be unchecked
- [ ] All descriptions should be visible and readable

### 6. Modal Interactions
- [ ] Click Analytics Cookies checkbox - should toggle
- [ ] Click Marketing Cookies checkbox - should toggle
- [ ] Click Performance Cookies checkbox - should toggle
- [ ] Essential Cookies should remain checked and disabled

### 7. Modal Buttons
- [ ] Click "Tolak Semua" in modal:
  - All optional checkboxes should uncheck
  - Should stay in modal (no auto-close)
- [ ] Check "Pengaturan" in modal:
  - Click "Simpan Pengaturan" / "Save Settings"
  - Modal should close
  - localStorage should update with new selections
  - Banner should disappear

### 8. Modal Close
- [ ] Click the X button in modal - modal should close
- [ ] Click outside modal (on overlay) - modal should close
- [ ] Press ESC key - modal should close

### 9. Language Support
- [ ] Switch to English locale - text should be in English
- [ ] Switch to Indonesian locale - text should be in Indonesian
- [ ] All buttons and labels should be properly translated
- [ ] Both language JSON files should have all keys

### 10. Responsive Design
- [ ] Test on desktop (1920x1080) - layout should look good
- [ ] Test on tablet (768x1024):
  - Banner should stack vertically on smaller screens
  - Buttons should be full-width
  - Content should be readable
- [ ] Test on mobile (375x667):
  - Banner should display correctly
  - Buttons should have proper spacing
  - Text should wrap properly
  - No horizontal scrolling

### 11. Browser Compatibility
- [ ] Test in Chrome/Edge
- [ ] Test in Firefox
- [ ] Test in Safari
- [ ] Test in mobile Chrome
- [ ] Test in mobile Safari

### 12. LocalStorage Persistence
- [ ] Make a choice (Accept/Reject/Settings)
- [ ] Refresh page - banner should NOT appear
- [ ] Close browser and reopen - banner should NOT appear (if using persistent storage)
- [ ] Clear browser cache - banner should reappear

### 13. Multiple Pages
- [ ] Make a choice on home page
- [ ] Navigate to device page
- [ ] Banner should NOT appear (preferences saved)
- [ ] Navigate to industry page
- [ ] Banner should NOT appear

### 14. Edge Cases
- [ ] Test with localStorage disabled:
  - Banner might reappear on every page load (expected)
- [ ] Test with cookies disabled:
  - Banner should still work (uses localStorage, not cookies)
- [ ] Test with JavaScript disabled:
  - Banner should appear but buttons won't work (expected)

## 🔍 Browser Developer Tools Testing

### Check LocalStorage
1. Open DevTools (F12)
2. Go to Application/Storage tab
3. Click Local Storage
4. Find your domain
5. Look for `cookie_consent` key

### Check Console for Errors
1. Open DevTools (F12)
2. Go to Console tab
3. Perform actions (click buttons, etc.)
4. Should see NO red error messages
5. Look for any console logs related to cookie consent

### Check Network (for Analytics)
1. Open DevTools (F12)
2. Go to Network tab
3. Accept all cookies
4. You should see requests to:
   - `google-analytics.com` or `googletagmanager.com`
   - Marketing platforms (if configured)

## 🧬 JavaScript Console Tests

Open browser DevTools Console and run:

```javascript
// Check if cookie consent exists in localStorage
console.log(localStorage.getItem('cookie_consent'));

// Clear cookie consent (to test banner again)
localStorage.removeItem('cookie_consent');

// Set specific preferences programmatically
localStorage.setItem('cookie_consent', JSON.stringify({
  essential: true,
  analytics: true,
  marketing: false,
  performance: true,
  timestamp: Date.now()
}));

// Check if cookie banner element exists
console.log(document.getElementById('cookie-consent'));

// Check if modal exists
console.log(document.getElementById('cookie-modal'));

// Manually show banner (for testing)
document.getElementById('cookie-consent').style.transform = 'translateY(0)';
```

## 📝 Test Cases Scenarios

### Scenario 1: First-Time Visitor
1. Clear localStorage: `localStorage.clear()`
2. Refresh page
3. Banner should appear
4. User clicks "Accept All"
5. Banner hides
6. Refresh page
7. Banner should NOT reappear
8. ✅ PASS if banner doesn't reappear on refresh

### Scenario 2: Granular Control
1. Clear localStorage
2. Refresh page
3. Click "Pengaturan"
4. Check only Analytics
5. Click "Simpan Pengaturan"
6. Modal closes, banner hides
7. Check localStorage value
8. ✅ PASS if only analytics is true

### Scenario 3: Reject and Reset
1. Clear localStorage
2. Refresh page
3. Click "Tolak Semua"
4. Banner hides
5. Verify only essential is true in localStorage
6. ✅ PASS if analytics/marketing/performance are all false

### Scenario 4: Language Switch
1. Change language to Indonesian
2. Refresh page
3. Clear localStorage
4. Refresh again
5. Banner should appear in Indonesian
6. ✅ PASS if all text is in Indonesian

### Scenario 5: Mobile Experience
1. Open page on mobile device or mobile emulator
2. Banner should display properly
3. Buttons should be clickable
4. Text should be readable
5. Click buttons - should work
6. Modal should open properly on mobile
7. ✅ PASS if all interactions work smoothly

## 🔧 Troubleshooting Tests

### If banner doesn't appear:
```javascript
// Check if component is included
document.getElementById('cookie-consent') // Should not be null

// Check if localStorage has previous choice
localStorage.getItem('cookie_consent') // Check if value exists

// Manually reset
localStorage.removeItem('cookie_consent');
// Then reload page
```

### If modal doesn't open:
```javascript
// Check if modal element exists
document.getElementById('cookie-modal')

// Manually open modal
document.getElementById('cookie-modal').classList.remove('hidden');
```

### If styles look wrong:
```javascript
// Check if Tailwind is loaded
window.tailwind // Should exist

// Check computed styles
getComputedStyle(document.getElementById('cookie-consent')).position
// Should be 'fixed'
```

## ✅ Final Verification

Before going live, verify:

- [ ] All language files have complete translations
- [ ] Google Analytics ID is correctly configured
- [ ] Marketing scripts (if any) are added
- [ ] Cookie policy page exists and is linked
- [ ] All pages include the component
- [ ] No console errors
- [ ] Works across all browsers
- [ ] Mobile responsive
- [ ] localStorage works correctly
- [ ] Animations are smooth
- [ ] Text is properly translated based on locale

---

**Testing Date:** ___________  
**Tested By:** ___________  
**Status:** ☐ PASS ☐ FAIL  
**Notes:** ___________________________________________
