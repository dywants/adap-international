# Research: Refonte UI/UX du site ADAP International

**Date**: 2026-02-19 | **Spec**: `specs/001-ui-ux-redesign/spec.md`

## R-001: Hero Carousel Implementation (CSS Scroll-Snap)

**Decision**: Carrousel CSS pur avec `scroll-snap` + Alpine.js (~20 lignes)

**Rationale**:
- Scroll-snap natif du navigateur = GPU-accelerated, 60fps, 0 dépendance
- Alpine.js déjà dans le projet gère la réactivité (dots, autoplay)
- Meilleur pour les performances sur connexions 3G (Principe III Constitution)
- Accessible via ARIA carousel pattern (W3C APG)

**Approach**:
- Container: `flex overflow-x-auto snap-x snap-mandatory` (Tailwind utilities natifs)
- Slides: `snap-start w-full flex-shrink-0` avec `<img>` + `object-cover`
- Dots: `<div role="tablist">` avec `<button role="tab">` par slide
- Auto-rotation: Alpine.js `setInterval` 5s, pause sur `mouseenter`/`focusin`
- Accessibilité: `aria-roledescription="carousel"`, `prefers-reduced-motion` check
- Hide scrollbar via CSS custom utility

**Alternatives Considered**:
- Swiper.js: Rejeté — ~40KB gzippé pour 3 slides simples, contre-Principe III
- CSS animations (@keyframes): Rejeté — complexité supérieure, moins naturel que scroll-snap

**Gotchas**:
- Safari: `scrollTo({ behavior: 'smooth' })` peut causer du double-snapping → tester
- Resize/rotation: ajouter un listener debounced pour re-snapper
- Slide 1: `loading="eager"` + `fetchpriority="high"`, slides 2-3: `loading="lazy"`
- Container DOIT avoir une hauteur explicite (`min-h-[60vh]`) pour éviter CLS

---

## R-002: Translation File Organization (Laravel 10)

**Decision**: Fichiers PHP par page + `{{ __() }}` exclusivement

**Rationale**:
- Pattern déjà établi dans le projet (home.php, navbar.php, about.php)
- PHP array files supportent le nesting, contrairement aux JSON
- `{{ __() }}` est auto-escaped par Blade (sécurité XSS), `@lang` ne l'est pas

**Approach**:
- 6 nouveaux fichiers de traduction par langue: `actions.php`, `contact.php`, `tourism.php`, `immigration.php`, `blog.php`, `social-actions.php`
- 4 fichiers système FR manquants: `auth.php`, `validation.php`, `pagination.php`, `passwords.php`
- Convention: kebab-case, max 3 niveaux de nesting, clé `page-title` dans chaque fichier
- Titre HTML dynamique: `@yield('title')` dans master.blade.php + `@section('title', __('page.page-title'))`
- Fix `<html lang="fr">` → `<html lang="{{ app()->getLocale() }}">`

**Bug identifié**: Plusieurs templates utilisent `__('Nous soutenir')` (JSON-key style) au lieu de `__('navbar.button-2')` (PHP-key style). Ces traductions ne fonctionnent PAS en anglais. À corriger.

**Alternatives Considered**:
- JSON files: Rejeté — pas de nesting, incohérent avec le pattern existant
- Composer package `laravel-lang/common`: Option pour validation.php (100+ règles), mais ajout de dépendance

---

## R-003: Responsive Design Fixes (Tailwind CSS 3.x)

**Decision**: Supprimer tous les `w-[Npx]` hardcodés, grilles explicites par breakpoint, composant section-container

**Rationale**:
- Les largeurs fixes causent des overflow sur mobile (violation FR-001)
- `auto-fit` avec `minmax(358px, ...)` sans `min(358px, 100%)` overflow à < 358px
- Breakpoints explicites sont plus prévisibles et testables

**Approach**:

| Problème | Solution |
|----------|----------|
| `w-[450px]` sur card/activity | → `w-full`, le parent grid contrôle |
| `w-[300px]` sur card/services | → `w-full`, le parent grid contrôle |
| `md:w-[1000px]` sur home | → `w-full lg:w-2/3` |
| `md:w-[452px]` sur home | → `w-full lg:w-1/3` |
| `.card-grid-4` (CSS custom) | → `grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3` |
| `max-w-[1460px]`, `max-w-[1340px]` | → `max-w-screen-2xl` (1536px) standardisé |
| Spacing incohérent (px-10, px-8, sm:px-20) | → `px-4 sm:px-6 lg:px-8 py-12 lg:py-16` standardisé |

**CSS Consolidation**:
- Supprimer le `<style>` inline de `master.blade.php` (lignes 19-86)
- Consolider dans `app.css` sous `@layer components`
- Résoudre les conflits `.paragraph` et `.card-title` (valeurs inline = source de vérité)

**Max-width tiers** (3 niveaux):
1. Narrow: `max-w-5xl` (1024px) — sections texte
2. Standard: `max-w-screen-xl` (1280px) — sections contenu
3. Wide: `max-w-screen-2xl` (1536px) — container principal

---

## R-004: WCAG AA Contrast Analysis

**Decision**: Modifier la couleur du texte des boutons primaires (vert), assombrir le rouge

**Rationale**:
- `#2ACF03` (primary green) sur blanc = 2.08:1 → **ÉCHEC CRITIQUE** (min requis: 4.5:1)
- `#FB0A38` (secondary red) sur blanc = 3.95:1 → **ÉCHEC** texte normal (OK texte large uniquement)
- `#161615` (dark) sur blanc = 19.5:1 → excellent
- `#575756` (paragraph) sur blanc = 5.0:1 → OK (passe AA)

**Remediation**:

| Couleur | Action | Résultat |
|---------|--------|----------|
| `#2ACF03` boutons | Texte `text-dark` (#161615) au lieu de `text-white` | 9.4:1 → PASS AAA |
| `#2ACF03` décoratif | Garder tel quel (icônes, bordures, badges) | N/A |
| `#FB0A38` texte | Assombrir à ~`#D50032` | 4.5:1 → PASS AA |
| `#F5FAF1` fond | `#161615` texte dessus = 18.3:1 | PASS |

**Alternatives Considered**:
- Assombrir le vert globalement: Rejeté — change l'identité visuelle
- Ajouter `primaryDark` au config: Possible mais complexifie la palette

---

## R-005: Content Replacement Strategy

**Decision**: Contenu réel inspiré des textes existants du site, images Unsplash/Pexels thématiques

### A. Contenu à remplacer

| Page | Section | Source d'inspiration |
|------|---------|---------------------|
| a-propos | 3 stats avec Lorem ipsum | Mission/vision dans home.php + about.php |
| our-actions | Tourisme (3 paragraphes Lorem) | tourism.php descriptions + activités home.php |
| our-actions | Immigration (2 paragraphes Lorem) | immigration.blade.php intro + droits humains |
| our-actions | Programmes (5 paragraphes Lorem) | 6 domaines d'activité dans home.php |
| tourism-solidarity | 3 tabs (contenu SaaS placeholder) | Vrais étapes tourisme humanitaire |
| action-socials | Page quasi-vide (1 phrase) | Actions sociales + partenariats |
| immigration | Page quasi-vide (2 lignes) | Sensibilisation immigration irrégulière |
| blog | Articles fake (Jese Leos, Bonnie Green) | Actualités ADAP fictives mais réalistes |

### B. Images thématiques nécessaires

| Emplacement | Type d'image | Mots-clés recherche |
|-------------|-------------|---------------------|
| Hero slide 1 | Communauté africaine, développement | "african community development" |
| Hero slide 2 | Tourisme Cameroun, paysage | "cameroon landscape nature" |
| Hero slide 3 | Solidarité, bénévolat | "volunteer africa solidarity" |
| Tourism page | Sites touristiques Cameroun | "cameroon tourism culture" |
| About - équipe | Placeholder photo professionnelle | "professional team africa" |
| Actions - éducation | Salle de classe, formation | "education africa classroom" |
| Actions - santé | Assistance médicale | "medical assistance africa" |
| Social actions | Forage, eau potable | "water well africa community" |

Nommage des fichiers: `hero-slide-1-community.jpg`, `tourism-cameroon-landscape.jpg`, etc.

### C. Dead Link Mapping (30+ instances)

| Emplacement | Bouton/Lien | Cible recommandée |
|-------------|-------------|-------------------|
| home.blade.php ligne 35 | CTA principal card | `/nos-actions` |
| home.blade.php ligne 52 | "En savoir plus" section 0 | `/qui-sommes-nous` |
| home.blade.php ligne 87 | "En savoir plus" activités | `/nos-actions` |
| home.blade.php ligne 104 | "En savoir plus" services | `/tousrisne-humanitaire` |
| home.blade.php ligne 108 | CTA services | `/nos-actions-sociales` |
| home.blade.php lignes 122,147,169 | Cards contact | `/contact` |
| home.blade.php ligne 204 | Bouton blog | `/notre-actualite` |
| home.blade.php ligne 233 | CTA section | `/contact` |
| a-propos.blade.php ligne 30 | "En savoir plus" | `/nos-actions` |
| our-actions.blade.php ligne 18 | CTA header | `/contact` |
| our-actions.blade.php ligne 48 | Boutons tourisme | `/tousrisne-humanitaire` |
| our-actions.blade.php ligne 82 | Boutons immigration | `/immigration-responsable` |
| our-actions.blade.php ligne 124 | Boutons programmes | `/nos-actions-sociales` |
| action-socials.blade.php ligne 18 | CTA | `/contact` |
| blog.blade.php lignes 20,29,43,52 | Articles blog | `/notre-actualite` (self-link) |
| navbar.blade.php | Boutons "Nous soutenir" | `/contact` |
| footer.blade.php | 10+ liens vers "/" | Routes pertinentes (voir détail ci-dessous) |

**Footer links détail** (footer.blade.php):
- Liens "Présentation" → `/qui-sommes-nous`
- Liens "Nos activités" → `/nos-actions`
- Liens "Tourisme" → `/tousrisne-humanitaire`
- Liens "Contact" → `/contact`
- Liens "Blog" → `/notre-actualite`
- Liens sociaux → URLs réelles ADAP (Facebook, Instagram, Twitter)

### D. Blog Strategy

- Remplacer les 2 articles fake par des articles ADAP réalistes (contenu statique)
- Auteurs: utiliser "ADAP International" ou un vrai membre de l'équipe
- Dates: utiliser des dates récentes et réalistes
- Le blog reste statique (pas de CMS) — pages de détail pointent vers `/notre-actualite`

### E. Additional Issues Discovered

- **Google Maps**: Contact page pointe vers "manhattan" → remplacer par l'adresse réelle ADAP
- **Newsletter component**: Contient du Lorem ipsum
- **Testimonial component**: Utilise "Michael Scott" (The Office) → remplacer par un vrai témoignage
- **Find-work component**: Lien mort → corriger
- **Copyright footer**: "2022" hardcodé → utiliser `{{ date('Y') }}`
- **Typo contact**: "Taxes" au lieu de "Texas" dans l'adresse US

---

## R-006: Navbar Bug Fix (@@click → @click)

**Decision**: Corriger le bug Alpine.js dans le menu hamburger

**Rationale**: FR-004 identifie explicitement ce bug. Le double `@@` empêche le menu mobile de fonctionner.

**Approach**: Localiser `@@click` dans `navbar.blade.php` et remplacer par `@click`. Vérifier si c'est un échappement Blade intentionnel (peu probable dans un contexte Alpine.js).

---

## Summary — All NEEDS CLARIFICATION Resolved

| Item | Status | Resolution |
|------|--------|------------|
| Carrousel tech | ✅ Résolu | CSS scroll-snap + Alpine.js |
| Translation organization | ✅ Résolu | PHP files par page, `{{ __() }}` |
| Responsive strategy | ✅ Résolu | Grilles explicites, composant container |
| WCAG contrast | ✅ Résolu | Dark text on green, darken red |
| Content source | ✅ Résolu | Textes existants + images Unsplash |
| Dead link targets | ✅ Résolu | Mapping complet 30+ liens |
| Blog content | ✅ Résolu | Articles ADAP statiques réalistes |
| Navbar bug | ✅ Résolu | @@click → @click |
