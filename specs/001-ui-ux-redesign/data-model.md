# Data Model: Refonte UI/UX du site ADAP International

**Date**: 2026-02-19 | **Spec**: `specs/001-ui-ux-redesign/spec.md`

> Note: Ce feature ne modifie aucun schéma de base de données. Le "data model" ici représente le modèle des clés de traduction et les props des composants Blade.

## Entity: Translation Files

### Structure par fichier

Chaque fichier PHP retourne un array associatif. Convention: kebab-case, max 3 niveaux de nesting.

#### Fichiers existants à étendre

**`home.php`** — Ajout du titre de page
```
page-title              string    "Accueil" / "Home"
hero                    array     NEW — carousel slides
  slide-0               array     {title, subtitle, cta, image-alt}
  slide-1               array     {title, subtitle, cta, image-alt}
  slide-2               array     {title, subtitle, cta, image-alt}
```

**`navbar.php`** — Ajout des labels authentifiés
```
auth                    array     NEW
  dashboard             string    "Tableau de bord" / "Dashboard"
  profile               string    "Profil" / "Profile"
  logout                string    "Déconnexion" / "Log Out"
lang-label              string    NEW — "Langue" / "Language"
```

**`about.php`** — Ajout des contenus stats et équipe
```
page-title              string    NEW — "À propos" / "About"
section-1.stats         array     NEW
  stat-0                array     {number, label, description}
  stat-1                array     {number, label, description}
  stat-2                array     {number, label, description}
section-2.members       array     NEW
  member-0              array     {name, role, location}
  member-1              array     {name, role, location}
  member-2              array     {name, role, location}
  member-3              array     {name, role, location}
```

#### Nouveaux fichiers de traduction

**`actions.php`** (FR + EN)
```
page-title              string    "Nos Actions" / "Our Actions"
hero                    array
  title                 string
  subtitle              string
  cta                   string
tourism                 array
  title                 string
  text-0                string    (remplace Lorem ipsum)
  text-1                string    (remplace Lorem ipsum)
  text-2                string    (remplace Lorem ipsum)
  btn-details           string
  btn-contact           string
immigration             array
  title                 string
  text-0                string    (remplace Lorem ipsum)
  text-1                string    (remplace Lorem ipsum)
  btn-details           string
  btn-contact           string
programs                array
  title                 string
  text-0                string    (remplace Lorem ipsum)
  text-1                string    (remplace Lorem ipsum)
  text-2                string    (remplace Lorem ipsum)
  text-3                string    (remplace Lorem ipsum)
  btn-details           string
  btn-contact           string
```

**`contact.php`** (FR + EN)
```
page-title              string    "Contact" / "Contact"
form                    array
  title                 string
  name-label            string
  name-placeholder      string
  email-label           string
  email-placeholder     string
  subject-label         string
  subject-placeholder   string
  message-label         string
  message-placeholder   string
  submit                string
  success               string
addresses               array
  title                 string
  us                    array     {label, line-1, line-2, line-3}
  cameroon              array     {label, line-1, line-2, line-3}
```

**`tourism.php`** (FR + EN)
```
page-title              string    "Tourisme Solidaire" / "Solidarity Tourism"
hero                    array
  title                 string
  subtitle              string
  cta                   string
how-it-works            array
  title                 string
  step-0                array     {title, text}
  step-1                array     {title, text}
  step-2                array     {title, text}
testimonial             array
  name                  string
  role                  string
  text                  string
benefits                array
  title                 string
  item-0                string
  item-1                string
  item-2                string
cta-banner              array
  title                 string
  text                  string
  button                string
```

**`immigration.php`** (FR + EN)
```
page-title              string    "Immigration Responsable" / "Responsible Immigration"
hero                    array
  title                 string
  subtitle              string
intro                   array
  title                 string
  text                  string
dangers                 array
  title                 string
  text                  string
  items                 array     [string, string, string]
alternatives            array
  title                 string
  text                  string
  items                 array     [string, string, string]
cta                     array
  title                 string
  text                  string
  button                string
```

**`blog.php`** (FR + EN)
```
page-title              string    "Actualités" / "News"
hero                    array
  title                 string
  subtitle              string
articles                array
  art-0                 array     {tag, date, title, excerpt, author}
  art-1                 array     {tag, date, title, excerpt, author}
read-more               string
```

**`social-actions.php`** (FR + EN)
```
page-title              string    "Actions Sociales" / "Social Actions"
hero                    array
  title                 string
  subtitle              string
content                 array
  section-0             array     {title, text, image-alt}
  section-1             array     {title, text, image-alt}
  section-2             array     {title, text, image-alt}
cta                     array
  title                 string
  button                string
```

#### Fichiers système FR (nouveaux)

**`lang/fr/auth.php`** — Traductions communauté Laravel-Lang
```
failed                  string    "Ces informations d'identification ne correspondent pas..."
password                string    "Le mot de passe fourni est incorrect."
throttle                string    "Trop de tentatives... :seconds secondes."
```

**`lang/fr/pagination.php`**
```
previous                string    "&laquo; Précédent"
next                    string    "Suivant &raquo;"
```

**`lang/fr/passwords.php`**
```
reset                   string    "Votre mot de passe a été réinitialisé !"
sent                    string    "Nous vous avons envoyé le lien..."
throttled               string    "Veuillez patienter avant de réessayer."
token                   string    "Ce jeton n'est pas valide."
user                    string    "Aucun utilisateur trouvé..."
```

**`lang/fr/validation.php`** — ~100 règles, source: laravel-lang/common

## Entity: Blade Component Props

### Existing Components — New/Modified Props

**`x-card.activity`**
```
Current: title, text, icon (implicit via slot)
Change:  Remove w-[450px], use w-full
```

**`x-card.services`**
```
Current: title, text, link, image (implicit via slot)
Change:  Remove w-[300px], use w-full
```

**`x-card.blog`**
```
Current: No explicit props — uses slot content
Change:  Add props: tag, date, title, excerpt, author, link
```

### New Components

**`x-front.hero-carousel`**
```
Props: none (reads from translation file directly)
Slots: none
Behavior: 3-slide scroll-snap carousel with Alpine.js auto-rotation
ARIA:  role="region" aria-roledescription="carousel"
```

**`x-section-container`**
```
Props:
  class     string    optional    Additional classes to merge
  tag       string    default="section"    HTML wrapper tag
Output: <{tag} class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16 {class}">
```

## Validation Rules

### Translation Parity

- Chaque clé dans `lang/fr/*.php` DOIT exister dans `lang/en/*.php` et vice-versa
- Vérifiable via `php artisan translations:check` (larswiegers/laravel-translations-checker)

### Content Constraints

- Aucun texte ne doit contenir "Lorem ipsum" (SC-002)
- Aucune valeur de traduction ne doit être vide ou null
- Les clés `page-title` sont obligatoires dans chaque fichier de traduction

## State Transitions

N/A — ce feature ne gère aucun état ou workflow côté données.
