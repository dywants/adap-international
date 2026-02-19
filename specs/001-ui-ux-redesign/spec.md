# Feature Specification: Refonte UI/UX du site ADAP International

**Feature Branch**: `001-ui-ux-redesign`
**Created**: 2026-02-19
**Status**: Draft
**Input**: User description: "Analyse le projet, fais des propositions de design, de structure, de textes, responsive, menu, etc. sans tout casser"

## User Scenarios & Testing *(mandatory)*

### User Story 1 - Navigation fluide et responsive (Priority: P1)

Un visiteur accède au site ADAP International depuis son smartphone (écran < 640px). Il peut naviguer facilement entre les pages grâce à un menu hamburger fonctionnel, lire le contenu sans scroll horizontal, et les boutons d'action sont accessibles au pouce.

**Why this priority**: La majorité du public cible (communautés africaines, diaspora) accède au web principalement via mobile. Un site non responsive perd ces visiteurs immédiatement.

**Independent Test**: Ouvrir le site sur un écran 375px de large. Toutes les pages doivent s'afficher sans overflow horizontal, le menu doit s'ouvrir/fermer, et les CTA doivent être cliquables.

**Acceptance Scenarios**:

1. **Given** un visiteur sur mobile (375px), **When** il charge la page d'accueil, **Then** aucun contenu ne déborde horizontalement et le texte est lisible sans zoomer
2. **Given** un visiteur sur mobile, **When** il clique sur le bouton hamburger du menu, **Then** le menu s'ouvre avec une animation fluide et tous les liens de navigation sont visibles
3. **Given** un visiteur sur tablette (768px), **When** il navigue sur la page "Nos actions", **Then** les grilles de cartes s'adaptent en 2 colonnes au lieu de 4
4. **Given** un visiteur sur mobile, **When** il fait défiler la page d'accueil, **Then** les boutons "Nous soutenir" et "Devenir membre" sont visibles et cliquables

---

### User Story 2 - Contenu professionnel et complet en deux langues (Priority: P2)

Un visiteur francophone ou anglophone arrive sur le site et découvre un contenu professionnel, sans texte placeholder (Lorem ipsum), avec des liens fonctionnels (plus de href="#"), et une cohérence linguistique totale entre les deux langues.

**Why this priority**: Le contenu Lorem ipsum et les liens morts donnent une image non professionnelle à l'association, nuisant à la crédibilité et à la confiance des donateurs potentiels.

**Independent Test**: Parcourir chaque page du site en français puis en anglais. Aucun texte Lorem ipsum ne doit apparaître, aucun lien ne doit pointer vers "#", et le contenu doit être identique dans les deux langues.

**Acceptance Scenarios**:

1. **Given** un visiteur sur la page "À propos", **When** il lit les sections statistiques et équipe, **Then** il voit du contenu réel (chiffres, noms, rôles) et non du Lorem ipsum
2. **Given** un visiteur sur la page "Nos actions", **When** il clique sur un bouton d'action, **Then** il est redirigé vers la page pertinente (pas vers "#")
3. **Given** un visiteur anglophone, **When** il bascule la langue en anglais, **Then** tous les textes sont traduits, y compris les labels de navigation, les titres de sections et les boutons
4. **Given** un visiteur sur n'importe quelle page, **When** il voit un titre de section ou un paragraphe, **Then** le texte provient du système de traduction `__()` et non d'un texte codé en dur

---

### User Story 3 - Design cohérent et moderne (Priority: P3)

Un visiteur perçoit une identité visuelle forte et cohérente sur toutes les pages : mêmes couleurs, mêmes espacements, mêmes styles de titres, mêmes composants de cartes. Le site inspire confiance et professionnalisme.

**Why this priority**: La cohérence visuelle renforce la crédibilité de l'association. Les incohérences actuelles (tailles de texte variables, couleurs hardcodées, espacements différents) nuisent à l'image professionnelle.

**Independent Test**: Comparer visuellement 3 pages différentes du site. Les titres de section, les espacements entre sections, les couleurs des boutons et les styles de cartes doivent être identiques.

**Acceptance Scenarios**:

1. **Given** un visiteur sur n'importe quelle page, **When** il voit un titre de section principal, **Then** il a la même taille, police et couleur que sur toutes les autres pages
2. **Given** un visiteur parcourant le site, **When** il voit des cartes (services, activités, blog), **Then** elles ont le même style, les mêmes bordures et les mêmes ombres
3. **Given** un visiteur sur la page d'accueil, **When** il voit un bouton primaire (vert), **Then** ce vert est identique au vert des boutons sur les autres pages (#2ACF03)
4. **Given** un visiteur sur n'importe quelle page, **When** il observe l'espacement entre les sections, **Then** il est uniforme (même padding vertical entre toutes les sections)

---

### User Story 4 - Menu de navigation structuré et accessible (Priority: P2)

Un visiteur comprend immédiatement la structure du site grâce à un menu clair, bien organisé, avec des labels explicites. Le menu fonctionne correctement sur tous les appareils et le changement de langue est intuitif.

**Why this priority**: Le menu est le premier point d'interaction. Un menu cassé ou confus empêche l'accès au contenu et fait fuir les visiteurs.

**Independent Test**: Cliquer sur chaque élément du menu sur mobile et desktop. Tous les liens doivent fonctionner, le dropdown de langue doit changer la langue, et le menu mobile doit s'ouvrir/fermer sans bug.

**Acceptance Scenarios**:

1. **Given** un visiteur sur mobile, **When** il ouvre le menu hamburger, **Then** tous les liens de navigation sont listés verticalement avec suffisamment d'espace entre eux pour éviter les erreurs de clic
2. **Given** un visiteur, **When** il clique sur le sélecteur de langue, **Then** il voit les options "Français" et "English" et le changement s'applique immédiatement à tout le contenu
3. **Given** un visiteur, **When** il survole ou clique un lien du menu, **Then** la page actuelle est visuellement indiquée (lien actif mis en surbrillance)
4. **Given** un visiteur sur mobile, **When** il ouvre le menu puis clique sur un lien, **Then** le menu se ferme automatiquement et la page demandée se charge

---

### Edge Cases

- Que se passe-t-il quand un visiteur accède à une page avec une URL de langue invalide (ex: `/de/accueil`) ? Le site doit rediriger vers la langue par défaut (français)
- Comment le site se comporte-t-il sur un écran très large (> 1920px) ? Le contenu doit rester centré avec un max-width cohérent
- Que se passe-t-il quand une image ne se charge pas ? Un placeholder ou un fond coloré doit s'afficher à la place
- Comment le site gère-t-il une traduction manquante ? Il doit afficher la clé de traduction plutôt qu'un texte vide

## Requirements *(mandatory)*

### Functional Requirements

#### Responsive & Mobile

- **FR-001**: Le site DOIT s'afficher correctement sur les écrans de 320px à 2560px de large sans overflow horizontal
- **FR-002**: Les grilles de cartes DOIVENT s'adapter : 1 colonne sur mobile (< 640px), 2 colonnes sur tablette (640-1024px), 3-4 colonnes sur desktop (> 1024px)
- **FR-003**: Les largeurs hardcodées (w-[300px], w-[450px], w-[1000px]) DOIVENT être remplacées par des classes responsive Tailwind

#### Navigation

- **FR-004**: Le menu mobile DOIT fonctionner correctement (correction du bug `@@click` → `@click` dans la navbar)
- **FR-005**: Le sélecteur de langue DOIT être traduit dans la langue courante ("Langue" / "Language")
- **FR-006**: Les labels "Dashboard", "Profile", "Log Out" dans le menu authentifié DOIVENT être traduits en FR/EN
- **FR-007**: La page active DOIT être visuellement identifiée dans le menu de navigation

#### Contenu & Traductions

- **FR-008**: Tout texte Lorem ipsum DOIT être remplacé par du contenu réel décrivant les activités de l'association (pages "À propos" et "Nos actions")
- **FR-009**: Tout texte codé en dur dans les vues Blade DOIT être externalisé vers les fichiers de traduction `lang/fr/` et `lang/en/`
- **FR-010**: Les fichiers de traduction `auth.php`, `validation.php`, `pagination.php`, `passwords.php` DOIVENT exister en français
- **FR-011**: Tous les boutons et liens avec href="#" DOIVENT pointer vers une page ou action valide
- **FR-012**: Le titre HTML `<title>` DOIT être dynamique et traduit selon la langue active

#### Design & Cohérence

- **FR-013**: Les styles CSS dupliqués entre `master.blade.php` et `app.css` DOIVENT être consolidés dans un seul endroit (`app.css`)
- **FR-014**: Les couleurs DOIVENT exclusivement utiliser la palette définie dans `tailwind.config.js` (primary, secondary, dark) au lieu de valeurs hardcodées
- **FR-015**: Les tailles de titre DOIVENT suivre une échelle typographique cohérente définie via des classes utilitaires réutilisables
- **FR-016**: Les espacements entre sections DOIVENT être uniformes sur toutes les pages

#### Composants

- **FR-017**: Les composants carte (card/services, card/activity, card/blog) DOIVENT être responsive (w-full sur mobile, taille fixe sur desktop)
- **FR-018**: Les composants bouton (primary-button, secondary-button) DOIVENT supporter un attribut `size` pour les variantes

#### Accessibilité

- **FR-019**: Toutes les images DOIVENT avoir un attribut `alt` descriptif et pertinent
- **FR-020**: Les boutons contenant uniquement des icônes SVG DOIVENT avoir un label `sr-only` pour les lecteurs d'écran
- **FR-021**: Le contraste des couleurs texte/fond DOIT respecter le ratio minimum WCAG AA (4.5:1)

#### Page immigration.blade.php

- **FR-022**: La page "Immigration à risque" DOIT être complétée avec du contenu réel (actuellement quasi-vide : 2 lignes)

### Key Entities

- **Page** : Représente une page du site avec son contenu, ses traductions, et son URL. Chaque page est associée à un layout et peut contenir plusieurs sections.
- **Traduction** : Couple clé/valeur organisé par langue (FR/EN) et par domaine (home, navbar, about, actions, contact, immigration, tourism). Chaque texte visible doit avoir une entrée de traduction.
- **Composant Blade** : Élément UI réutilisable (carte, bouton, section-title) avec des props configurables pour maintenir la cohérence visuelle.

## Success Criteria *(mandatory)*

### Measurable Outcomes

- **SC-001**: 100% des pages s'affichent sans overflow horizontal sur un écran de 375px de large
- **SC-002**: 0 occurrence de texte "Lorem ipsum" sur l'ensemble du site
- **SC-003**: 0 lien pointant vers "#" sur l'ensemble du site
- **SC-004**: 100% des textes visibles proviennent du système de traduction `__()` (aucun texte codé en dur dans les vues Blade)
- **SC-005**: Les fichiers de traduction FR et EN ont exactement les mêmes clés (parité complète)
- **SC-006**: Le menu hamburger mobile s'ouvre et se ferme correctement sur écrans < 640px
- **SC-007**: Le ratio de contraste WCAG AA (4.5:1) est respecté pour tous les textes principaux
- **SC-008**: 0 style CSS dupliqué entre les fichiers (consolidation dans app.css)
- **SC-009**: Les titres de section ont la même apparence visuelle sur toutes les pages du site
- **SC-010**: La page "Immigration à risque" contient au minimum 3 sections de contenu réel

## Assumptions

- Le contenu textuel réel pour remplacer le Lorem ipsum sera rédigé en s'inspirant des textes existants sur les autres pages et de la mission de l'association
- Les traductions françaises des fichiers système Laravel (auth, validation, pagination, passwords) utiliseront les traductions officielles de la communauté Laravel
- La palette de couleurs existante (primary #2ACF03, secondary #FB0A38, dark #161615) est validée et ne sera pas modifiée
- Les modifications seront progressives et non-destructrices : refactoring des styles existants plutôt que réécriture complète
- La structure des routes et des contrôleurs reste inchangée ; seules les vues et les fichiers de style/traduction sont modifiés
