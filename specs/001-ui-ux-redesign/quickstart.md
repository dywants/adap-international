# Quickstart: Refonte UI/UX du site ADAP International

**Date**: 2026-02-19 | **Branch**: `001-ui-ux-redesign`

## Prerequisites

- PHP 8.1+
- Composer
- Node.js 16+ / npm
- MySQL (pour le backend existant)

## Setup

```bash
# Clone et checkout
git clone <repo-url>
cd adap-international
git checkout 001-ui-ux-redesign

# Dépendances
composer install
npm install

# Environment
cp .env.example .env
php artisan key:generate

# Build frontend (dev)
npm run dev
```

## Development Workflow

### Serveur local

```bash
# Terminal 1: Laravel
php artisan serve

# Terminal 2: Vite (hot reload CSS/JS)
npm run dev
```

Le site est accessible à `http://localhost:8000`.

### Changement de langue

Visiter `http://localhost:8000/localization/en` pour l'anglais, `/localization/fr` pour le français.

## Key Files to Edit

### Par ordre de priorité

1. **Layout principal**: `resources/views/layouts/master.blade.php`
   - Supprimer le `<style>` inline → consolider dans `app.css`
   - Corriger `<html lang>` dynamique
   - Ajouter `@yield('title')` dynamique

2. **CSS consolidé**: `resources/css/app.css`
   - Ajouter les styles migrés depuis master.blade.php sous `@layer components`
   - Supprimer `.card-grid-4` (remplacé par grid utilities)
   - Ajouter utility `.scrollbar-hide` pour le carrousel

3. **Navbar**: `resources/views/components/front/navbar.blade.php`
   - Fix `@@click` → `@click`
   - Ajouter indicateur page active
   - Traduire labels auth

4. **Pages vues** (par page):
   - `home.blade.php` — carrousel, liens morts, responsive
   - `a-propos.blade.php` — Lorem ipsum, stats, équipe
   - `our-actions.blade.php` — Lorem ipsum, liens morts
   - `contact.blade.php` — traductions, Google Maps fix
   - `tourism-solidarity.blade.php` — contenu placeholder
   - `action-socials.blade.php` — contenu complet à créer
   - `immigration.blade.php` — page complète à créer
   - `blog.blade.php` — articles placeholder

5. **Footer**: `resources/views/components/front/footer.blade.php`
   - Liens morts → routes réelles
   - Copyright dynamique

6. **Traductions**: `lang/fr/*.php` et `lang/en/*.php`
   - Étendre fichiers existants (home, navbar, about)
   - Créer 6 nouveaux fichiers page
   - Créer 4 fichiers système FR

## Testing

### Responsive (manuel)

Tester chaque page à ces largeurs :
- 320px (petit mobile)
- 375px (iPhone standard)
- 640px (breakpoint sm)
- 768px (tablette)
- 1024px (breakpoint lg)
- 1280px (breakpoint xl)
- 1920px (desktop)
- 2560px (ultra-wide)

Vérifier :
- ✅ Aucun overflow horizontal
- ✅ Menu hamburger fonctionne
- ✅ Grilles s'adaptent (1→2→3→4 colonnes)
- ✅ Carrousel fonctionnel

### Traductions

```bash
# Vérifier la parité des clés FR/EN
# (après installation de larswiegers/laravel-translations-checker)
php artisan translations:check
```

### Contenu

- ✅ 0 occurrence de "Lorem ipsum" (`grep -r "Lorem ipsum" resources/views/`)
- ✅ 0 lien `href="#"` (`grep -r 'href="#"' resources/views/`)
- ✅ 0 texte hardcodé dans les vues (tout utilise `__()`)

### Accessibilité

- ✅ Contraste WCAG AA sur tous les textes
- ✅ Attributs `alt` sur toutes les images
- ✅ Labels `sr-only` sur les boutons icône
- ✅ Carrousel accessible (ARIA, pause on focus)

### Build production

```bash
npm run build
# Vérifier que les assets sont compilés dans public/build/
```

## Architecture Decisions

| Décision | Détail |
|----------|--------|
| Carrousel | CSS scroll-snap + Alpine.js (~20 lignes), pas de Swiper |
| Traductions | PHP array files par page, `{{ __() }}` |
| Contact | Validation JS + `mailto:`, pas de nouveau backend |
| Images | Unsplash/Pexels thématiques, noms descriptifs |
| Section spacing | Composant `<x-section-container>` standardisé |
| Grilles | Explicit breakpoints (`grid-cols-1 sm:grid-cols-2 lg:grid-cols-3`) |
| Accessibilité | Texte dark sur boutons verts (ratio 9.4:1) |
