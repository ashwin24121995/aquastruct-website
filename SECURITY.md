# Security Implementation Documentation

## Overview

This document describes the security measures implemented for AQUASTRUCT (coustommatch.com) to comply with Google Ads policies and protect against common web vulnerabilities.

---

## Implemented Security Measures

### 1. Security Headers

All security headers are automatically set via `includes/security.php` which is loaded by `includes/config.php`.

#### Content Security Policy (CSP)
```
Content-Security-Policy: default-src 'self'; 
  script-src 'self' 'unsafe-inline' https://fonts.googleapis.com; 
  style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; 
  img-src 'self' data: https:; 
  font-src 'self' https://fonts.googleapis.com https://fonts.gstatic.com; 
  connect-src 'self'; 
  frame-ancestors 'none'; 
  base-uri 'self'; 
  form-action 'self'
```

**Purpose:** Prevents unauthorized script injection and XSS attacks

#### X-Frame-Options
```
X-Frame-Options: DENY
```

**Purpose:** Prevents clickjacking attacks by disallowing the site to be embedded in iframes

#### X-Content-Type-Options
```
X-Content-Type-Options: nosniff
```

**Purpose:** Prevents MIME type sniffing attacks

#### X-XSS-Protection
```
X-XSS-Protection: 1; mode=block
```

**Purpose:** Enables browser's XSS filter (legacy browsers)

#### Referrer-Policy
```
Referrer-Policy: strict-origin-when-cross-origin
```

**Purpose:** Controls referrer information sent with requests

#### Strict-Transport-Security (HSTS)
```
Strict-Transport-Security: max-age=31536000; includeSubDomains
```

**Purpose:** Forces HTTPS for all future requests (1 year)

#### Permissions-Policy
```
Permissions-Policy: geolocation=(), microphone=(), camera=(), payment=()
```

**Purpose:** Restricts access to sensitive browser features

---

### 2. Secure Session Configuration

Session cookies are configured with the following security flags:

- **HttpOnly:** Prevents JavaScript access to cookies (XSS protection)
- **Secure:** Only sends cookies over HTTPS
- **SameSite: Lax:** Protects against CSRF attacks
- **Strict Mode:** Rejects uninitialized session IDs
- **Session Regeneration:** ID regenerated every 30 minutes

Configuration is in `includes/security.php`:
```php
session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'domain' => '',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Lax'
]);
```

---

### 3. Server Information Protection

- **X-Powered-By header removed:** Hides PHP version
- **expose_php = Off:** Additional PHP version hiding
- **Error display disabled:** Errors logged, not displayed to users

---

### 4. File Structure

```
aquastruct-website/
├── includes/
│   ├── security.php      # Security headers and session config
│   ├── config.php         # Site configuration (loads security.php)
│   ├── header.php         # HTML header
│   ├── footer.php         # HTML footer
│   └── functions.php      # Utility functions
├── .htaccess              # Apache security configuration
├── SECURITY.md            # This file
└── ...
```

---

## Verification

### Online Tools

Test security headers using:
1. **Security Headers:** https://securityheaders.com/?q=coustommatch.com
2. **CSP Evaluator:** https://csp-evaluator.withgoogle.com/
3. **SSL Labs:** https://www.ssllabs.com/ssltest/analyze.html?d=coustommatch.com

### Manual Verification

Check headers using curl:
```bash
curl -I https://coustommatch.com/
```

Expected headers:
```
HTTP/2 200
content-security-policy: default-src 'self'; ...
x-frame-options: DENY
x-content-type-options: nosniff
x-xss-protection: 1; mode=block
referrer-policy: strict-origin-when-cross-origin
strict-transport-security: max-age=31536000; includeSubDomains
permissions-policy: geolocation=(), microphone=(), camera=(), payment=()
```

### Session Cookie Verification

Check cookie flags in browser DevTools:
```
_sid=<session_id>; Path=/; HttpOnly; Secure; SameSite=Lax
```

---

## Google Ads Compliance Checklist

- [x] Content-Security-Policy header implemented
- [x] X-Frame-Options header set to DENY
- [x] X-Content-Type-Options header set to nosniff
- [x] X-XSS-Protection header enabled
- [x] Strict-Transport-Security (HSTS) header implemented
- [x] X-Powered-By header removed
- [x] Session cookies have HttpOnly flag
- [x] Session cookies have Secure flag
- [x] Session cookies have SameSite flag
- [x] HTTPS enforced for all traffic
- [x] Error display disabled in production
- [x] Directory browsing disabled
- [x] Sensitive files protected

---

## Maintenance

### Regular Security Checks

1. **Weekly:** Check security headers using online tools
2. **Monthly:** Review error logs for suspicious activity
3. **Quarterly:** Update PHP and dependencies
4. **Annually:** Review and update security policies

### Updating Security Configuration

To modify security headers, edit `includes/security.php` and redeploy.

To modify Apache configuration, edit `.htaccess` and redeploy.

---

## Incident Response

If security issues are detected:

1. **Immediate:** Take site offline if actively compromised
2. **Investigate:** Review logs and identify breach source
3. **Fix:** Patch vulnerabilities
4. **Verify:** Test all security measures
5. **Monitor:** Watch for continued suspicious activity
6. **Report:** Notify Google Ads and relevant authorities

---

## Support

For security concerns, contact:
- **Email:** support@coustommatch.com
- **Company:** AQUASTRUCT CONSTRUCTION PRIVATE LIMITED

---

## References

- [OWASP Security Headers](https://owasp.org/www-project-secure-headers/)
- [Google Ads Policy](https://support.google.com/adspolicy/answer/15938376)
- [MDN Web Security](https://developer.mozilla.org/en-US/docs/Web/Security)
- [PHP Security Best Practices](https://www.php.net/manual/en/security.php)

---

**Last Updated:** January 15, 2026
**Version:** 1.0
