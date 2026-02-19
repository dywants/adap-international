# Translation Key Contracts

**Date**: 2026-02-19 | **Spec**: `specs/001-ui-ux-redesign/spec.md`

## Convention

- **Format**: PHP array files (`return [...];`)
- **Key naming**: kebab-case
- **Max nesting**: 3 levels
- **Helper**: `{{ __('file.key') }}` exclusively (no `@lang`, no JSON-key style)
- **Parity**: every key in FR must exist in EN and vice-versa

## File Inventory

### Existing Files (to extend)

| File | FR | EN | Status |
|------|----|----|--------|
| `home.php` | ✅ | ✅ | Extend: add `page-title`, `hero` carousel keys |
| `navbar.php` | ✅ | ✅ | Extend: add `auth`, `lang-label` keys |
| `about.php` | ✅ | ✅ | Extend: add `page-title`, `section-1.stats`, `section-2.members` |

### New Page Files (FR + EN)

| File | Pages served | Key count (est.) |
|------|-------------|-----------------|
| `actions.php` | our-actions.blade.php | ~25 |
| `contact.php` | contact.blade.php | ~20 |
| `tourism.php` | tourism-solidarity.blade.php | ~25 |
| `immigration.php` | immigration.blade.php | ~20 |
| `blog.php` | blog.blade.php | ~15 |
| `social-actions.php` | action-socials.blade.php | ~15 |

### New System Files (FR only, EN already exists)

| File | Source | Key count |
|------|--------|-----------|
| `auth.php` | laravel-lang/common or manual | 3 |
| `pagination.php` | laravel-lang/common or manual | 2 |
| `passwords.php` | laravel-lang/common or manual | 5 |
| `validation.php` | laravel-lang/common or manual | ~100 |

## Key Structure per File

### `home.php` — New keys

```php
'page-title' => 'Accueil',              // EN: 'Home'
'hero' => [
    'slide-0' => [
        'title' => '...',
        'subtitle' => '...',
        'cta' => '...',
        'image-alt' => '...',
    ],
    'slide-1' => [...],
    'slide-2' => [...],
],
```

### `navbar.php` — New keys

```php
'auth' => [
    'dashboard' => 'Tableau de bord',    // EN: 'Dashboard'
    'profile' => 'Profil',               // EN: 'Profile'
    'logout' => 'Déconnexion',           // EN: 'Log Out'
],
'lang-label' => 'Langue',               // EN: 'Language'
```

### `about.php` — New keys

```php
'page-title' => 'À propos',             // EN: 'About Us'
'section-1' => [
    // existing title + text
    'stats' => [
        'stat-0' => [
            'number' => '+30',
            'label' => 'Projets réalisés',    // EN: 'Projects completed'
            'description' => '...',
        ],
        'stat-1' => [...],
        'stat-2' => [...],
    ],
],
'section-2' => [
    // existing title + text
    'members' => [
        'member-0' => [
            'name' => '...',
            'role' => '...',
            'location' => '...',
        ],
        // member-1 through member-3
    ],
],
```

### `actions.php` — Full structure

```php
'page-title' => 'Nos Actions',           // EN: 'Our Actions'
'hero' => [
    'title' => '...',
    'subtitle' => '...',
    'cta' => '...',
],
'tourism' => [
    'title' => 'Tourisme humanitaire',    // EN: 'Humanitarian Tourism'
    'text-0' => '...',                    // replaces Lorem ipsum
    'text-1' => '...',
    'text-2' => '...',
    'btn-details' => '...',
    'btn-contact' => '...',
],
'immigration' => [
    'title' => 'Immigration à risque',    // EN: 'Risky Immigration'
    'text-0' => '...',
    'text-1' => '...',
    'btn-details' => '...',
    'btn-contact' => '...',
],
'programs' => [
    'title' => 'Programmes clés',         // EN: 'Key Programs'
    'text-0' => '...',
    'text-1' => '...',
    'text-2' => '...',
    'text-3' => '...',
    'btn-details' => '...',
    'btn-contact' => '...',
],
```

### `contact.php` — Full structure

```php
'page-title' => 'Contact',
'form' => [
    'title' => 'Contactez-nous',          // EN: 'Contact Us'
    'name-label' => 'Votre Nom',          // EN: 'Your Name'
    'name-placeholder' => '...',
    'email-label' => 'E-mail',
    'email-placeholder' => '...',
    'subject-label' => 'Sujet',           // EN: 'Subject'
    'subject-placeholder' => '...',
    'message-label' => 'Message',
    'message-placeholder' => '...',
    'submit' => 'Envoyer',               // EN: 'Send'
    'success' => 'Message envoyé !',     // EN: 'Message sent!'
],
'addresses' => [
    'title' => 'Points de contact',       // EN: 'Points of contact'
    'us' => [
        'label' => 'Adresse US',          // EN: 'US Address'
        'line-1' => '...',
        'line-2' => '...',
        'line-3' => '...',
    ],
    'cameroon' => [
        'label' => 'Adresse Cameroun',    // EN: 'Cameroon Address'
        'line-1' => '...',
        'line-2' => '...',
        'line-3' => '...',
    ],
],
```

### `tourism.php` — Full structure

```php
'page-title' => 'Tourisme Solidaire',     // EN: 'Solidarity Tourism'
'hero' => [
    'title' => '...',
    'subtitle' => '...',
    'cta' => '...',
],
'how-it-works' => [
    'title' => 'Comment ça marche ?',      // EN: 'How it works?'
    'step-0' => ['title' => '...', 'text' => '...'],
    'step-1' => ['title' => '...', 'text' => '...'],
    'step-2' => ['title' => '...', 'text' => '...'],
],
'testimonial' => [
    'name' => '...',
    'role' => '...',
    'text' => '...',
],
'benefits' => [
    'title' => '...',
    'item-0' => '...',
    'item-1' => '...',
    'item-2' => '...',
],
'cta-banner' => [
    'title' => '...',
    'text' => '...',
    'button' => '...',
],
```

### `immigration.php` — Full structure

```php
'page-title' => 'Immigration Responsable', // EN: 'Responsible Immigration'
'hero' => ['title' => '...', 'subtitle' => '...'],
'intro' => ['title' => '...', 'text' => '...'],
'dangers' => [
    'title' => '...',
    'text' => '...',
    'items' => ['...', '...', '...'],
],
'alternatives' => [
    'title' => '...',
    'text' => '...',
    'items' => ['...', '...', '...'],
],
'cta' => ['title' => '...', 'text' => '...', 'button' => '...'],
```

### `blog.php` — Full structure

```php
'page-title' => 'Actualités',             // EN: 'News'
'hero' => ['title' => '...', 'subtitle' => '...'],
'articles' => [
    'art-0' => [
        'tag' => '...',
        'date' => '...',
        'title' => '...',
        'excerpt' => '...',
        'author' => 'ADAP International',
    ],
    'art-1' => [...],
],
'read-more' => 'Lire la suite',           // EN: 'Read more'
```

### `social-actions.php` — Full structure

```php
'page-title' => 'Actions Sociales',        // EN: 'Social Actions'
'hero' => ['title' => '...', 'subtitle' => '...'],
'content' => [
    'section-0' => ['title' => '...', 'text' => '...', 'image-alt' => '...'],
    'section-1' => ['title' => '...', 'text' => '...', 'image-alt' => '...'],
    'section-2' => ['title' => '...', 'text' => '...', 'image-alt' => '...'],
],
'cta' => ['title' => '...', 'button' => '...'],
```

## Migration from JSON-key Style

The following usages in Blade templates must be migrated:

| Current | Replace with |
|---------|-------------|
| `__('Nous soutenir')` | `__('navbar.button-2')` |
| `__('Devenir membre')` | `__('navbar.button-0')` |
| `__('Envoyez')` | `__('contact.form.submit')` |
| `__('Blog')` | `__('blog.page-title')` |

## Verification

After implementation, run:
```bash
php artisan translations:check
```
Expected output: 0 missing keys in any language.
