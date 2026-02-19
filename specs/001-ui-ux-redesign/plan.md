# Implementation Plan: Refonte UI/UX du site ADAP International

**Branch**: `001-ui-ux-redesign` | **Date**: 2026-02-19 | **Spec**: `specs/001-ui-ux-redesign/spec.md`
**Input**: Feature specification from `/specs/001-ui-ux-redesign/spec.md`

## Summary

Refactoring complet de l'interface utilisateur du site ADAP International : correction du responsive sur toutes les pages (320px-2560px), remplacement de tout le Lorem ipsum par du contenu réel, externalisation de tous les textes hardcodés vers les fichiers de traduction FR/EN, correction des 20+ liens morts (href="#"), consolidation des styles CSS, et mise en cohérence visuelle de l'ensemble du site. Approche non-destructive : modification des vues Blade existantes et des fichiers de traduction uniquement, sans toucher aux routes ni aux contrôleurs.

## Technical Context

**Language/Version**: PHP 8.1+ / Laravel 10.x, JavaScript ES6+ (Alpine.js 3.x)
**Primary Dependencies**: Blade templating, Tailwind CSS 3.x, Alpine.js 3.x, Vite 4.x, Flowbite
**Storage**: N/A — aucun changement de schéma de base de données
**Testing**: PHPUnit 10, tests visuels manuels (responsive breakpoints)
**Target Platform**: Web responsive (mobile-first, 320px → 2560px)
**Project Type**: Web application (monolithique Laravel)
**Performance Goals**: Pages chargées en < 3 secondes sur connexion 3G simulée
**Constraints**: Pas de nouvelle dépendance lourde, carrousel CSS pur (scroll-snap), pas de framework JS additionnel
**Scale/Scope**: ~10 pages publiques, 2 langues (FR/EN), ~15 composants Blade

## Constitution Check

*GATE: Must pass before Phase 0 research. Re-check after Phase 1 design.*

| Principe | Statut | Justification |
|----------|--------|---------------|
| I. Accessibilité & Multilinguisme | ✅ PASS | Spec exige FR/EN complet (FR-008→FR-012), responsive mobile-first (FR-001→FR-003), alt descriptifs (FR-019) |
| II. Sécurité & Protection des Données | ✅ PASS | Contact form conserve CSRF token Laravel existant. Formulaire mailto côté client (pas de nouveau endpoint) |
| III. Performance & Légèreté | ✅ PASS | Carrousel CSS pur (pas de Swiper, voir déviation ci-dessous). Pas de nouvelle dépendance npm/Composer. Tailwind purge conservé |
| IV. Maintenabilité Laravel | ✅ PASS | Seules les vues Blade et fichiers de traduction sont modifiés. Pattern MVC respecté. Routes et contrôleurs inchangés |
| V. Contenu Associatif Fidèle | ✅ PASS | Contenu rédigé à partir de la mission/vision/valeurs ADAP. 6 domaines d'activité représentés équitablement |

**GATE RESULT: PASS** — Tous les principes constitutionnels sont respectés.

### Post-Design Re-evaluation (Phase 1 complete)

| Principe | Statut | Détail post-design |
|----------|--------|--------------------|
| I. Accessibilité & Multilinguisme | ✅ PASS | 6 nouveaux fichiers traduction FR+EN définis. Composant `<x-section-container>` garantit responsive. ARIA carousel pattern spécifié. Fix WCAG AA prévu pour boutons verts (dark text, ratio 9.4:1) |
| II. Sécurité & Protection des Données | ✅ PASS | Aucun nouveau endpoint. Contact form mailto = côté client uniquement. `{{ __() }}` auto-escaped par Blade (XSS safe) |
| III. Performance & Légèreté | ✅ PASS | Carrousel CSS scroll-snap = 0 dépendance, ~20 lignes Alpine.js. CSS consolidé élimine duplication. Grilles explicites remplacent auto-fit. Images lazy-loaded |
| IV. Maintenabilité Laravel | ✅ PASS | Convention translation keys documentée (kebab-case, max 3 niveaux). Composants Blade documentés avec props. CSS sous `@layer components`. Structure prévisible |
| V. Contenu Associatif Fidèle | ✅ PASS | Mapping complet des 6 domaines vers les pages. Contenu inspiré des textes existants. Blog avec auteur "ADAP International". Témoignage réaliste remplace placeholder |

**POST-DESIGN GATE: PASS** — Design aligné avec la constitution. Déviation Swiper→CSS scroll-snap justifiée (voir Complexity Tracking).

## Project Structure

### Documentation (this feature)

```text
specs/001-ui-ux-redesign/
├── plan.md              # This file
├── research.md          # Phase 0: research findings
├── data-model.md        # Phase 1: translation key model
├── quickstart.md        # Phase 1: developer guide
├── contracts/           # Phase 1: component contracts
│   ├── blade-components.md
│   └── translation-keys.md
└── tasks.md             # Phase 2 output (via /speckit.tasks)
```

### Source Code (repository root)

```text
resources/
├── views/
│   ├── layouts/
│   │   └── master.blade.php       # Main public layout (inline CSS → app.css)
│   ├── home.blade.php             # Homepage (hero carousel, dead links, translations)
│   ├── a-propos.blade.php         # About page (Lorem ipsum, stats, team)
│   ├── our-actions.blade.php      # Actions page (Lorem ipsum, dead links)
│   ├── contact.blade.php          # Contact form (translations, mailto, map fix)
│   ├── tourism-solidarity.blade.php # Tourism page (placeholder content, translations)
│   ├── action-socials.blade.php   # Social actions (needs major content)
│   ├── immigration.blade.php      # Immigration (needs full page development)
│   ├── blog.blade.php             # Blog (placeholder content, translations)
│   └── components/
│       ├── front/
│       │   ├── footer.blade.php   # Footer (dead links, translations)
│       │   └── navbar.blade.php   # Navbar (hamburger fix, active state)
│       └── card/
│           ├── activity.blade.php # Activity cards (responsive)
│           ├── blog.blade.php     # Blog cards (responsive)
│           └── services.blade.php # Service cards (responsive)
├── css/
│   └── app.css                    # Consolidated styles (from master.blade.php inline)
└── js/
    └── app.js                     # Alpine.js + carousel auto-rotation

lang/
├── fr/
│   ├── home.php                   # Homepage translations (extend)
│   ├── navbar.php                 # Nav + footer translations (extend)
│   ├── about.php                  # About page translations (extend)
│   ├── actions.php                # NEW: Our actions page translations
│   ├── contact.php                # NEW: Contact page translations
│   ├── tourism.php                # NEW: Tourism page translations
│   ├── immigration.php            # NEW: Immigration page translations
│   ├── blog.php                   # NEW: Blog page translations
│   ├── social-actions.php         # NEW: Social actions page translations
│   ├── auth.php                   # NEW: Laravel auth translations (FR)
│   ├── validation.php             # NEW: Laravel validation translations (FR)
│   ├── pagination.php             # NEW: Laravel pagination translations (FR)
│   └── passwords.php              # NEW: Laravel passwords translations (FR)
└── en/
    ├── home.php                   # (extend with new keys)
    ├── navbar.php                 # (extend with new keys)
    ├── about.php                  # (extend with new keys)
    ├── actions.php                # NEW: Our actions page translations
    ├── contact.php                # NEW: Contact page translations
    ├── tourism.php                # NEW: Tourism page translations
    ├── immigration.php            # NEW: Immigration page translations
    ├── blog.php                   # NEW: Blog page translations
    ├── social-actions.php         # NEW: Social actions page translations
    └── (auth/validation/pagination/passwords already exist)

public/
└── assets/
    └── images/                    # Thematic images (Unsplash/Pexels)
```

**Structure Decision**: Web application (monolithique Laravel). Aucune modification structurelle — on travaille exclusivement dans `resources/views/`, `resources/css/`, `resources/js/`, `lang/`, et `public/assets/`. Routes et contrôleurs inchangés.

## Complexity Tracking

| Déviation | Justification | Alternative rejetée |
|-----------|---------------|---------------------|
| Carrousel CSS pur au lieu de Swiper.js (mentionné dans constitution) | Performance supérieure, 0 dépendance, ~20 lignes JS vs ~40KB gzippé. Plus aligné avec Principe III (Performance & Légèreté) | Swiper.js rejeté car ajoute poids inutile pour 3 slides simples. Swiper reste disponible pour d'éventuels cas plus complexes |
| Contact form mailto au lieu de backend SendMailController | Clarification décidée : fonctionne sans serveur SMTP configuré. SendMailController existant reste en place comme fallback | Formspree rejeté (dépendance externe). Simulation rejeée (pas fonctionnel) |
