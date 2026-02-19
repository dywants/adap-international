# Blade Component Contracts

**Date**: 2026-02-19 | **Spec**: `specs/001-ui-ux-redesign/spec.md`

## New Components

### `x-front.hero-carousel`

**Location**: `resources/views/components/front/hero-carousel.blade.php`

**Purpose**: Carrousel hero 3 slides avec auto-rotation CSS scroll-snap

**Props**: Aucun (lit directement depuis `__('home.hero.slide-N')`)

**HTML Structure**:
```html
<section role="region" aria-roledescription="carousel" aria-label="..."
         x-data="heroCarousel()">
  <div class="flex overflow-x-auto snap-x snap-mandatory scroll-smooth scrollbar-hide"
       x-ref="container"
       @mouseenter="stopAutoplay()" @mouseleave="startAutoplay()"
       @focusin="stopAutoplay()" @focusout="startAutoplay()">
    <!-- 3 slides -->
    <div role="group" aria-roledescription="slide" aria-label="1 of 3"
         class="snap-start w-full flex-shrink-0 relative min-h-[60vh] md:min-h-[80vh]">
      <img src="..." alt="..." class="absolute inset-0 w-full h-full object-cover">
      <div class="relative z-10 bg-graded ...">
        <h2>{{ __('home.hero.slide-0.title') }}</h2>
        <p>{{ __('home.hero.slide-0.subtitle') }}</p>
        <a href="...">{{ __('home.hero.slide-0.cta') }}</a>
      </div>
    </div>
    <!-- repeat for slides 1, 2 -->
  </div>
  <!-- Indicator dots -->
  <div role="tablist">
    <button role="tab" :aria-selected="currentSlide === N" @click="scrollTo(N)">
  </div>
</section>
```

**Alpine.js Component** (`heroCarousel()`):
- `currentSlide: 0`
- `scrollTo(index)`: scroll container to index * width
- `next()`: advance to next slide (wrapping)
- `startAutoplay()`: setInterval 5s
- `stopAutoplay()`: clearInterval
- `init()`: start autoplay, listen to scroll events, check `prefers-reduced-motion`

**Accessibility**:
- ARIA carousel pattern (W3C APG)
- Pause on hover/focus
- `prefers-reduced-motion`: skip autoplay
- Image `alt` text via translation keys

---

### `x-section-container`

**Location**: `resources/views/components/section-container.blade.php`

**Purpose**: Wrapper standardisé pour toutes les sections de page

**Props**:
| Prop | Type | Default | Description |
|------|------|---------|-------------|
| tag | string | "section" | HTML element tag |

**Usage**:
```blade
<x-section-container>
  <!-- section content -->
</x-section-container>

<x-section-container tag="div" class="bg-primaryLight">
  <!-- colored background section -->
</x-section-container>
```

**Output**:
```html
<section {{ $attributes->merge(['class' => 'max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16']) }}>
  {{ $slot }}
</section>
```

---

## Modified Components

### `x-card.activity`

**Location**: `resources/views/components/card/activity.blade.php`

**Changes**:
- Remove: `w-[450px]`
- Add: `w-full`
- Parent container: change from `flex flex-wrap` to `grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4`

---

### `x-card.services`

**Location**: `resources/views/components/card/services.blade.php`

**Changes**:
- Remove: `w-[300px] md:w-full`
- Add: `w-full`
- Parent container: change from `.card-grid-4` to `grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3`

---

### `x-card.blog`

**Location**: `resources/views/components/card/blog.blade.php`

**Changes**:
- Ensure `w-full` (responsive within grid parent)
- Update content to use translation keys: `{{ __('blog.articles.art-N.title') }}`

---

### `x-front.navbar`

**Location**: `resources/views/components/front/navbar.blade.php`

**Changes**:
- Fix: `@@click` → `@click` (Alpine.js hamburger bug)
- Add: active page indicator via `request()->routeIs('...')`
- Add: translated auth labels via `{{ __('navbar.auth.dashboard') }}`
- Add: lang label via `{{ __('navbar.lang-label') }}`

---

### `x-front.footer`

**Location**: `resources/views/components/front/footer.blade.php`

**Changes**:
- Fix: all `href="#"` and `href="/"` → real routes
- Fix: copyright year `2022` → `{{ date('Y') }}`
- Add: real social media URLs
- Ensure: all text uses `{{ __() }}` translation helpers

---

## Layout Changes

### `layouts/master.blade.php`

**Changes**:
- Remove: inline `<style>` block (lines 19-86) → consolidated into `app.css`
- Fix: `<html lang="fr">` → `<html lang="{{ app()->getLocale() }}">`
- Add: `<title>@hasSection('title')@yield('title') - @endif ADAP-International</title>`
- Add: `@vite` import for compiled carousel JS (if needed beyond Alpine)
