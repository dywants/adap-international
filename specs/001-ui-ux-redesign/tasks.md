# Tasks: Refonte UI/UX du site ADAP International

**Input**: Design documents from `/specs/001-ui-ux-redesign/`
**Prerequisites**: plan.md (required), spec.md (required), research.md, data-model.md, contracts/

**Tests**: Not requested — no test tasks included.

**Organization**: Tasks are grouped by user story to enable independent implementation and testing of each story.

## Format: `[ID] [P?] [Story] Description`

- **[P]**: Can run in parallel (different files, no dependencies)
- **[Story]**: Which user story this task belongs to (e.g., US1, US2, US3, US4)
- Include exact file paths in descriptions

---

## Phase 1: Setup (Shared Infrastructure)

**Purpose**: Create shared components and CSS utilities needed by all user stories

- [x] T001 Create `<x-section-container>` Blade component in `resources/views/components/section-container.blade.php` per contracts/blade-components.md — standardized wrapper with `max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16` and `$attributes->merge()` support
- [x] T002 [P] Add scrollbar-hide CSS utility and consolidate all custom CSS from `resources/views/layouts/master.blade.php` inline `<style>` block (lines 19-86) into `resources/css/app.css` under `@layer components` — resolve `.paragraph` and `.card-title` conflicts (inline values = source of truth), remove `.card-grid-4`, add `.scrollbar-hide` utility
- [x] T003 [P] Update `resources/views/layouts/master.blade.php`: remove inline `<style>` block, fix `<html lang="fr">` → `<html lang="{{ app()->getLocale() }}">`, add dynamic title via `@hasSection('title')@yield('title') - @endif ADAP-International`
- [x] T004 [P] Source and save thematic images from Unsplash/Pexels to `public/assets/images/` with descriptive names: `hero-slide-1-community.jpg`, `hero-slide-2-cameroon-landscape.jpg`, `hero-slide-3-solidarity.jpg`, `tourism-cameroon-culture.jpg`, `about-team-placeholder.jpg`, `actions-education.jpg`, `actions-medical.jpg`, `social-actions-water-well.jpg`

**Checkpoint**: Shared infrastructure ready — section-container, consolidated CSS, layout fixes, images available

---

## Phase 2: Foundational (Blocking Prerequisites)

**Purpose**: Translation infrastructure that MUST be complete before ANY user story can fully implement content

**CRITICAL**: No user story work can begin until this phase is complete

- [x] T005 [P] Create French system translation files: `lang/fr/auth.php` (3 keys), `lang/fr/pagination.php` (2 keys), `lang/fr/passwords.php` (5 keys) per data-model.md — use community-standard French translations (FR-010)
- [x] T006 [P] Create `lang/fr/validation.php` (~100 rules) — use Laravel-Lang community French translations for all validation rules (FR-010)
- [x] T007 [P] Extend `lang/fr/home.php` and `lang/en/home.php` with new keys: `page-title` and `hero` array (3 slides × {title, subtitle, cta, image-alt}) per contracts/translation-keys.md
- [x] T008 [P] Extend `lang/fr/navbar.php` and `lang/en/navbar.php` with new keys: `auth` array ({dashboard, profile, logout}) and `lang-label` per contracts/translation-keys.md
- [x] T009 [P] Extend `lang/fr/about.php` and `lang/en/about.php` with new keys: `page-title`, `section-1.stats` (3 stats with real content replacing Lorem ipsum), `section-2.members` (4 team members) per contracts/translation-keys.md

**Checkpoint**: Foundation ready — all shared translation keys and infrastructure in place, user story implementation can now begin in parallel

---

## Phase 3: User Story 1 — Navigation fluide et responsive (Priority: P1) MVP

**Goal**: Le site s'affiche correctement de 320px à 2560px. Menu hamburger fonctionnel. Grilles adaptatives. Carrousel hero. Aucun overflow horizontal.

**Independent Test**: Ouvrir chaque page à 375px de large — aucun overflow horizontal, menu s'ouvre/ferme, CTA cliquables, grilles adaptées.

**Requirements**: FR-001, FR-002, FR-003, FR-017

### Implementation for User Story 1

- [ ] T010 [P] [US1] Fix responsive in `resources/views/components/card/activity.blade.php`: remove `w-[450px]`, replace with `w-full` per contracts/blade-components.md
- [ ] T011 [P] [US1] Fix responsive in `resources/views/components/card/services.blade.php`: remove `w-[300px] md:w-full`, replace with `w-full` per contracts/blade-components.md
- [ ] T012 [P] [US1] Create hero carousel component `resources/views/components/front/hero-carousel.blade.php` per contracts/blade-components.md — CSS scroll-snap container, 3 slides with `<img>` + object-cover, indicator dots with ARIA tablist, Alpine.js `heroCarousel()` data component
- [ ] T013 [US1] Add `heroCarousel()` Alpine.js function in `resources/js/app.js` — currentSlide tracking, scrollTo(index), next(), startAutoplay(5s)/stopAutoplay(), pause on mouseenter/focusin, prefers-reduced-motion check, debounced scroll listener for dot sync
- [ ] T014 [US1] Update `resources/views/home.blade.php`: replace existing static hero section with `<x-front.hero-carousel>` component, replace hardcoded widths (`md:w-[1000px]` → `w-full lg:w-2/3`, `md:w-[452px]` → `w-full lg:w-1/3`), replace `.card-grid-4` and `flex flex-wrap` parent containers with `grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3` for activities and `grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3` for services, standardize all `max-w-[Npx]` to `max-w-screen-2xl`
- [ ] T015 [P] [US1] Fix responsive in `resources/views/our-actions.blade.php`: standardize `max-w-[1460px]` → `max-w-screen-2xl`, fix section spacing to use `<x-section-container>` or consistent `px-4 sm:px-6 lg:px-8 py-12 lg:py-16`
- [ ] T016 [P] [US1] Fix responsive in `resources/views/a-propos.blade.php`: standardize max-w, replace inconsistent padding (`px-8 sm:px-20 my-16 sm:my-32`) with standard spacing
- [ ] T017 [P] [US1] Fix responsive in `resources/views/contact.blade.php`: ensure form and address columns stack on mobile, standardize widths
- [ ] T018 [P] [US1] Fix responsive in `resources/views/tourism-solidarity.blade.php`: standardize max-w, ensure tabs/content stack properly on mobile
- [ ] T019 [P] [US1] Fix responsive in `resources/views/blog.blade.php`: ensure article cards stack on mobile with proper grid
- [ ] T020 [P] [US1] Fix responsive in `resources/views/action-socials.blade.php`: standardize max-w, ensure content stacks on mobile

**Checkpoint**: All pages display without horizontal overflow at 375px. Card grids adapt to 1/2/3/4 columns. Hero carousel functional with auto-rotation. Menu hamburger accessible (will be fixed fully in US4).

---

## Phase 4: User Story 4 — Menu de navigation structuré et accessible (Priority: P2)

**Goal**: Menu clair, hamburger fonctionnel, page active visuellement identifiée, sélecteur de langue traduit, labels auth traduits.

**Independent Test**: Cliquer chaque élément du menu sur mobile et desktop. Tous les liens fonctionnent. Le dropdown langue change la langue. Le menu mobile s'ouvre/ferme sans bug. La page active est surlignée.

**Requirements**: FR-004, FR-005, FR-006, FR-007

### Implementation for User Story 4

- [ ] T021 [US4] Fix `@@click` → `@click` bug in `resources/views/components/front/navbar.blade.php` — the double `@@` prevents Alpine.js hamburger menu from working on mobile (FR-004)
- [ ] T022 [US4] Add active page indicator in `resources/views/components/front/navbar.blade.php` — use `request()->routeIs('name')` to conditionally apply active styling (e.g., `text-primary font-bold border-b-2 border-primary`) to the current page's nav link (FR-007)
- [ ] T023 [US4] Replace hardcoded auth labels in `resources/views/components/front/navbar.blade.php` and `resources/views/layouts/navigation.blade.php` — "Dashboard" → `{{ __('navbar.auth.dashboard') }}`, "Profile" → `{{ __('navbar.auth.profile') }}`, "Log Out" → `{{ __('navbar.auth.logout') }}` (FR-006)
- [ ] T024 [US4] Translate language selector label in `resources/views/components/front/navbar.blade.php` — replace hardcoded "Langue" with `{{ __('navbar.lang-label') }}` (FR-005)
- [ ] T025 [US4] Ensure mobile menu closes on link click in `resources/views/components/front/navbar.blade.php` — add Alpine.js `@click="open = false"` on each navigation link inside the mobile drawer

**Checkpoint**: Hamburger menu opens/closes on mobile. Active page highlighted. Language selector shows "Langue"/"Language". Auth labels translated. Menu auto-closes on navigation.

---

## Phase 5: User Story 2 — Contenu professionnel et complet en deux langues (Priority: P2)

**Goal**: 0 Lorem ipsum, 0 href="#", 0 texte hardcodé. Toutes les pages ont du contenu réel en FR et EN. La page immigration est complète (3+ sections). Tous les liens pointent vers des pages réelles.

**Independent Test**: Parcourir chaque page en FR puis en EN. Aucun Lorem ipsum, aucun href="#", aucun texte codé en dur. `grep -r "Lorem ipsum" resources/views/` retourne 0 résultat. `grep -r 'href="#"' resources/views/` retourne 0 résultat.

**Requirements**: FR-008, FR-009, FR-010, FR-011, FR-012, FR-022

### Translation Files (new pages)

- [ ] T026 [P] [US2] Create `lang/fr/actions.php` and `lang/en/actions.php` with real content per contracts/translation-keys.md — hero, tourism section (3 paragraphs replacing Lorem ipsum), immigration section (2 paragraphs), programs section (4 paragraphs), button labels. Content inspired by existing mission/vision texts in home.php and about.php
- [ ] T027 [P] [US2] Create `lang/fr/contact.php` and `lang/en/contact.php` with real content per contracts/translation-keys.md — form labels, placeholders, success message, US address (fix "Taxes" → "Texas" typo), Cameroon address
- [ ] T028 [P] [US2] Create `lang/fr/tourism.php` and `lang/en/tourism.php` with real content per contracts/translation-keys.md — hero, 3 how-it-works steps (replace generic SaaS placeholder), testimonial (replace "Michael Scott"), benefits, CTA banner
- [ ] T029 [P] [US2] Create `lang/fr/immigration.php` and `lang/en/immigration.php` with real content per contracts/translation-keys.md — hero, intro, dangers section with 3 items, alternatives section with 3 items, CTA (FR-022 content for 3+ sections)
- [ ] T030 [P] [US2] Create `lang/fr/blog.php` and `lang/en/blog.php` with real content per contracts/translation-keys.md — hero, 2 realistic ADAP articles (replace fake Jese Leos/Bonnie Green authors with "ADAP International"), read-more label
- [ ] T031 [P] [US2] Create `lang/fr/social-actions.php` and `lang/en/social-actions.php` with real content per contracts/translation-keys.md — hero, 3 content sections (water well, education initiatives, healthcare), CTA

### Page View Updates (replace hardcoded text + Lorem ipsum with translation keys)

- [ ] T032 [US2] Update `resources/views/home.blade.php`: replace all hardcoded French text with `{{ __('home.*') }}` translation keys, fix JSON-key style `__('Nous soutenir')` → `__('navbar.button-2')` and `__('Devenir membre')` → `__('navbar.button-0')`, add `@section('title', __('home.page-title'))` (FR-009, FR-012)
- [ ] T033 [US2] Update `resources/views/a-propos.blade.php`: replace Lorem ipsum in 3 stat card descriptions with `{{ __('about.section-1.stats.stat-N.description') }}`, replace hardcoded team names/roles/locations with `{{ __('about.section-2.members.member-N.*') }}`, replace all other hardcoded text with `__()`, add `@section('title', __('about.page-title'))` (FR-008, FR-009, FR-012)
- [ ] T034 [US2] Update `resources/views/our-actions.blade.php`: replace all Lorem ipsum (tourism 3 paragraphs, immigration 2 paragraphs, programs 5 paragraphs) with `{{ __('actions.*') }}` translation keys, replace all hardcoded text, add `@section('title', __('actions.page-title'))` (FR-008, FR-009, FR-012)
- [ ] T035 [US2] Rebuild `resources/views/immigration.blade.php`: expand from 2 lines to full page with hero section, intro, dangers section, alternatives section, CTA — all using `{{ __('immigration.*') }}` translation keys, add proper layout extending master, add `@section('title', __('immigration.page-title'))` (FR-022, FR-009, FR-012)
- [ ] T036 [US2] Rebuild `resources/views/action-socials.blade.php`: expand from 1 sentence to full page with hero, 3 content sections (water well, education, healthcare), CTA — all using `{{ __('social-actions.*') }}` translation keys, add `@section('title', __('social-actions.page-title'))` (FR-009, FR-012)
- [ ] T037 [US2] Update `resources/views/contact.blade.php`: replace all hardcoded text with `{{ __('contact.*') }}` translation keys, fix Google Maps embed (replace "manhattan" with ADAP real address), fix "Taxes" → "Texas" in address, add `@section('title', __('contact.page-title'))` (FR-009, FR-012)
- [ ] T038 [US2] Update `resources/views/tourism-solidarity.blade.php`: replace all hardcoded text and generic SaaS placeholder tab content with `{{ __('tourism.*') }}` translation keys, replace "Michael Scott" testimonial component content, add `@section('title', __('tourism.page-title'))` (FR-009, FR-012)
- [ ] T039 [US2] Update `resources/views/blog.blade.php`: replace all hardcoded text and fake article content with `{{ __('blog.*') }}` translation keys, replace fake authors with real content, add `@section('title', __('blog.page-title'))` (FR-009, FR-012)

### Dead Link Fixes

- [ ] T040 [US2] Fix all dead links in `resources/views/home.blade.php`: replace 10 instances of `href="#"` with real routes per research.md dead link mapping — CTA → `/nos-actions`, "En savoir plus" → `/qui-sommes-nous`, services → `/tousrisne-humanitaire`, contact cards → `/contact`, blog → `/notre-actualite`, CTA section → `/contact` (FR-011)
- [ ] T041 [P] [US2] Fix all dead links in `resources/views/our-actions.blade.php` (4 instances), `resources/views/a-propos.blade.php` (1 instance), `resources/views/action-socials.blade.php` (1 instance), `resources/views/blog.blade.php` (4 instances) — replace `href="#"` with routes per research.md mapping (FR-011)
- [ ] T042 [P] [US2] Fix all dead links and incorrect hrefs in `resources/views/components/front/footer.blade.php`: replace 10+ links pointing to `"/"` or `"#"` with correct routes (Présentation → `/qui-sommes-nous`, Activités → `/nos-actions`, Tourisme → `/tousrisne-humanitaire`, Contact → `/contact`, Blog → `/notre-actualite`), add real social media URLs for Facebook/Instagram/Twitter, replace hardcoded copyright "2022" with `{{ date('Y') }}` (FR-011)
- [ ] T043 [P] [US2] Fix dead links in shared components: `resources/views/components/front/navbar.blade.php` buttons (Nous soutenir → `/contact`), `resources/views/components/front/newsletter.blade.php` (replace Lorem ipsum), `resources/views/components/front/testimonial.blade.php` (replace "Michael Scott"), `resources/views/components/front/find-work.blade.php` (fix dead link) (FR-011)

**Checkpoint**: 0 Lorem ipsum anywhere. 0 href="#" anywhere. All text uses `__()`. Immigration page has 3+ real sections. All pages have dynamic translated titles. FR/EN parity complete.

---

## Phase 6: User Story 3 — Design cohérent et moderne (Priority: P3)

**Goal**: Identité visuelle cohérente sur toutes les pages : mêmes couleurs palette, mêmes espacements, mêmes styles de titres, composants cartes uniformes. Contraste WCAG AA respecté.

**Independent Test**: Comparer visuellement 3 pages — titres de section identiques, espacements uniformes, couleurs de boutons identiques (#2ACF03 avec texte dark), cartes même style.

**Requirements**: FR-013, FR-014, FR-015, FR-016, FR-018, FR-019, FR-020, FR-021

### Implementation for User Story 3

- [ ] T044 [US3] Standardize colors across all views: search for hardcoded hex values (`#2ACF03`, `#FB0A38`, `#161615`, `#575756`, etc.) in all `resources/views/**/*.blade.php` files and replace with Tailwind palette classes (`text-primary`, `bg-secondary`, `text-dark`, etc.) per `tailwind.config.js` definitions (FR-014)
- [ ] T045 [US3] Standardize title typography: ensure all section titles across all pages use the same Tailwind classes (e.g., `text-dark font-bold text-2xl md:text-[34px] leading-normal` matching `.title-section` in app.css) — audit and fix inconsistencies in `home.blade.php`, `a-propos.blade.php`, `our-actions.blade.php`, `contact.blade.php`, `tourism-solidarity.blade.php`, `action-socials.blade.php`, `immigration.blade.php`, `blog.blade.php` (FR-015)
- [ ] T046 [US3] Apply uniform section spacing across all page views: wrap main content sections with `<x-section-container>` or apply consistent `px-4 sm:px-6 lg:px-8 py-12 lg:py-16` — replace inconsistent spacing (px-10, px-8, sm:px-20, py-32, etc.) across all 8 page views (FR-016)
- [ ] T047 [P] [US3] Add `size` attribute support to `resources/views/components/primary-button.blade.php` and `resources/views/components/secondary-button.blade.php` (if they exist) or create them — support `sm`, `md` (default), `lg` variants with appropriate padding/text sizes (FR-018)
- [ ] T048 [US3] Fix WCAG AA contrast: change primary green button text from `text-white` to `text-dark` (#161615) in all button components and inline button usages across all views — achieves 9.4:1 contrast ratio (current 2.08:1 FAILS). Also audit secondary red (`#FB0A38`) usages and darken to `#D50032` where used as text on white backgrounds (FR-021)
- [ ] T049 [P] [US3] Add descriptive `alt` attributes to all `<img>` tags across all views — use translation keys for alt text where appropriate (e.g., `{{ __('home.hero.slide-0.image-alt') }}`), ensure no empty or missing alt attributes (FR-019)
- [ ] T050 [P] [US3] Add `sr-only` labels to all icon-only SVG buttons across all views — audit navbar hamburger, social media icons in footer, any other buttons containing only SVG/icons without text (FR-020)

**Checkpoint**: All pages visually consistent. Titles, spacing, colors, and card styles uniform. WCAG AA contrast passing. All images have alt text. All icon buttons have sr-only labels.

---

## Phase 7: Polish & Cross-Cutting Concerns

**Purpose**: Final verification, cleanup, and production readiness

- [ ] T051 Verify 0 occurrences of "Lorem ipsum" across all `resources/views/**/*.blade.php` — run `grep -ri "lorem ipsum" resources/views/` and fix any remaining instances (SC-002)
- [ ] T052 Verify 0 `href="#"` links across all `resources/views/**/*.blade.php` — run `grep -r 'href="#"' resources/views/` and fix any remaining instances (SC-003)
- [ ] T053 Verify translation key parity between `lang/fr/` and `lang/en/` — ensure every key in FR exists in EN and vice-versa for all 9+ translation files (SC-005)
- [ ] T054 Verify all text in Blade views uses `{{ __() }}` translation helpers — scan for remaining hardcoded French or English strings not using the translation system (SC-004)
- [ ] T055 Run `npm run build` to generate production assets in `public/build/` — verify compiled CSS and JS are correct and no build errors
- [ ] T056 Final visual review: open each page at 375px, 768px, 1280px, and 1920px — verify no horizontal overflow, consistent design, working carousel, functional menu (SC-001, SC-006, SC-009)

---

## Dependencies & Execution Order

### Phase Dependencies

- **Setup (Phase 1)**: No dependencies — can start immediately
- **Foundational (Phase 2)**: Depends on Setup (T002 app.css ready, T003 master.blade.php layout). Can run T005-T009 in parallel once layout is fixed
- **User Stories (Phase 3+)**: All depend on Foundational phase completion
  - US1 depends on: T001 (section-container), T002 (app.css), T003 (master layout), T004 (images), T007 (home.php carousel keys)
  - US4 depends on: T008 (navbar.php auth/lang keys)
  - US2 depends on: T005-T009 (all translation infrastructure)
  - US3 depends on: T002 (consolidated CSS), T001 (section-container)
- **Polish (Phase 7)**: Depends on all user stories being complete

### User Story Dependencies

- **US1 (P1)**: Can start after Foundational — No dependencies on other stories
- **US4 (P2)**: Can start after Foundational — No dependencies on other stories. Can run in parallel with US1
- **US2 (P2)**: Can start after Foundational — No dependencies on US1/US4, but benefits from responsive fixes being in place
- **US3 (P3)**: Can start after Foundational — Best done AFTER US1 and US2 to apply consistent styling to final content

### Within Each User Story

- Translation files before page view updates (for US2)
- Component fixes before page integration (for US1)
- Core implementation before cross-page consistency (for US3)

### Parallel Opportunities

- **Phase 1**: T002, T003, T004 can all run in parallel (different files)
- **Phase 2**: T005, T006, T007, T008, T009 can all run in parallel (different translation files)
- **Phase 3 (US1)**: T010, T011, T012 can run in parallel; T015-T020 can run in parallel (different page views)
- **Phase 5 (US2)**: T026-T031 can all run in parallel (different translation files); T041-T043 can run in parallel (different view files)
- **Phase 6 (US3)**: T047, T049, T050 can run in parallel (different concerns)

---

## Parallel Example: User Story 1

```bash
# Launch card component fixes in parallel:
Task: "Fix responsive in resources/views/components/card/activity.blade.php"     # T010
Task: "Fix responsive in resources/views/components/card/services.blade.php"     # T011
Task: "Create hero carousel component in resources/views/components/front/hero-carousel.blade.php"  # T012

# Then launch page-level responsive fixes in parallel:
Task: "Fix responsive in resources/views/our-actions.blade.php"                  # T015
Task: "Fix responsive in resources/views/a-propos.blade.php"                     # T016
Task: "Fix responsive in resources/views/contact.blade.php"                      # T017
Task: "Fix responsive in resources/views/tourism-solidarity.blade.php"           # T018
Task: "Fix responsive in resources/views/blog.blade.php"                         # T019
Task: "Fix responsive in resources/views/action-socials.blade.php"               # T020
```

## Parallel Example: User Story 2

```bash
# Launch all new translation files in parallel:
Task: "Create lang/fr/actions.php and lang/en/actions.php"                       # T026
Task: "Create lang/fr/contact.php and lang/en/contact.php"                       # T027
Task: "Create lang/fr/tourism.php and lang/en/tourism.php"                       # T028
Task: "Create lang/fr/immigration.php and lang/en/immigration.php"               # T029
Task: "Create lang/fr/blog.php and lang/en/blog.php"                             # T030
Task: "Create lang/fr/social-actions.php and lang/en/social-actions.php"         # T031

# Launch dead link fixes in parallel:
Task: "Fix dead links in footer.blade.php"                                        # T042
Task: "Fix dead links in our-actions, a-propos, action-socials, blog"            # T041
Task: "Fix dead links in navbar, newsletter, testimonial, find-work"             # T043
```

---

## Implementation Strategy

### MVP First (User Story 1 Only)

1. Complete Phase 1: Setup (T001-T004)
2. Complete Phase 2: Foundational (T005-T009)
3. Complete Phase 3: User Story 1 — Responsive + Carousel (T010-T020)
4. **STOP and VALIDATE**: Test all pages at 375px — no overflow, grids adapt, carousel works
5. Deploy/demo if ready

### Incremental Delivery

1. Complete Setup + Foundational → Foundation ready
2. Add US1 (responsive) → Test at 375px → Deploy/Demo (**MVP!**)
3. Add US4 (navbar) → Test menu on mobile → Deploy/Demo
4. Add US2 (content + translations) → Test FR/EN switching → Deploy/Demo
5. Add US3 (design consistency) → Visual comparison → Deploy/Demo
6. Polish phase → Final validation → Production deploy

### Parallel Team Strategy

With multiple developers:

1. Team completes Setup + Foundational together
2. Once Foundational is done:
   - Developer A: US1 (responsive) + US3 (design)
   - Developer B: US4 (navbar) + US2 (content/translations)
3. Stories complete and integrate independently

---

## Notes

- [P] tasks = different files, no dependencies
- [Story] label maps task to specific user story for traceability
- Each user story should be independently completable and testable
- Commit after each task or logical group
- Stop at any checkpoint to validate story independently
- No tests included — spec did not request TDD or automated tests
- All content written using existing ADAP mission/vision/values as source material
- Images sourced from Unsplash/Pexels with descriptive filenames for easy client replacement
